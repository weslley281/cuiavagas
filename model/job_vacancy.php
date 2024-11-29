<?php
require_once __DIR__ . '/../config/db.php';

class JobVacancy
{
    private $conn;

    public function __construct($conn)
    {
        if ($conn === null) {
            throw new Exception("Conexão com o banco de dados não fornecida.");
        }
        $this->conn = $conn;
    }

    public function create(array $data)
    {
        try {
            $stmt = $this->conn->prepare(
                'INSERT INTO job_vacancy (title, description, isAvalible, number_vacancy)
                 VALUES (?, ?, ?, ?)'
            );

            $stmt->bind_param(
                'ssbs',
                $data['title'],
                $data['description'],
                $data['isAvalible'],
                $data['number_vacancy']
            );

            $stmt->execute();
            //echo "Deu certo";
            return true;
        } catch (mysqli_sql_exception $e) {
            error_log($e->getMessage(), 3, __DIR__ . '/errors.log');
            //echo "Deu merda";
            return false;
        }
    }

    public function getAll()
    {
        try {
            $result = $this->conn->query('SELECT * FROM job_vacancy');
            return $result->fetch_all(MYSQLI_ASSOC);
        } catch (mysqli_sql_exception $e) {
            error_log($e->getMessage(), 3, __DIR__ . '/errors.log');
            return [];
        }
    }

    public function getById($id)
    {
        try {
            $stmt = $this->conn->prepare('SELECT * FROM job_vacancy WHERE id = ?');
            $stmt->bind_param('i', $id);
            $stmt->execute();

            return $stmt->get_result()->fetch_assoc();
        } catch (mysqli_sql_exception $e) {
            error_log($e->getMessage(), 3, __DIR__ . '/errors.log');
            return null;
        }
    }

    public function getByEmail($email)
    {
        try {
            $stmt = $this->conn->prepare('SELECT * FROM job_vacancy WHERE email = ?');
            $stmt->bind_param('s', $email);
            $stmt->execute();

            return $stmt->get_result()->fetch_assoc();
        } catch (mysqli_sql_exception $e) {
            error_log($e->getMessage(), 3, __DIR__ . '/errors.log');
            return null;
        }
    }

    public function update(array $data, $id)
    {
        try {
            $stmt = $this->conn->prepare(
                'UPDATE job_vacancy SET title = ?, description = ?, isAvalible = ?, number_vacancy = ? WHERE id = ?'
            );

            $stmt->bind_param(
                'ssbsi',
                $data['title'],
                $data['description'],
                $data['isAvalible'],
                $data['number_vacancy']
                $id
            );

            $stmt->execute();
            return true;
        } catch (mysqli_sql_exception $e) {
            error_log($e->getMessage(), 3, __DIR__ . '/errors.log');
            return false;
        }
    }

    public function delete($id)
    {
        try {
            $stmt = $this->conn->prepare('DELETE FROM job_vacancy WHERE id = ?');
            $stmt->bind_param('i', $id);
            return $stmt->execute();
        } catch (mysqli_sql_exception $e) {
            error_log($e->getMessage(), 3, __DIR__ . '/errors.log');
            return false;
        }
    }

    public function countAll()
    {
        try {
            $result = $this->conn->query('SELECT COUNT(*) as total FROM job_vacancy');
            $row = $result->fetch_assoc();

            return $row['total'];
        } catch (mysqli_sql_exception $e) {
            error_log($e->getMessage(), 3, __DIR__ . '/errors.log');
            return 0;
        }
    }
}