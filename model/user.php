<?php
require_once __DIR__ . '/../config/db.php';

class User
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
                'INSERT INTO users (name, phone, email, address, complement, country, state, city, neighborhood, postal_code, birth_date, gender, password, type)
                 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)'
            );

            $stmt->bind_param(
                'ssssssssssssss',
                $data['name'],
                $data['phone'],
                $data['email'],
                $data['address'],
                $data['complement'],
                $data['country'],
                $data['state'],
                $data['city'],
                $data['neighborhood'],
                $data['postal_code'],
                $data['birth_date'],
                $data['gender'],
                $data['password'],
                $data['type']
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
            $result = $this->conn->query('SELECT * FROM users');
            return $result->fetch_all(MYSQLI_ASSOC);
        } catch (mysqli_sql_exception $e) {
            error_log($e->getMessage(), 3, __DIR__ . '/errors.log');
            return [];
        }
    }

    public function getById($id)
    {
        try {
            $stmt = $this->conn->prepare('SELECT * FROM users WHERE id = ?');
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
            $stmt = $this->conn->prepare('SELECT * FROM users WHERE email = ?');
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
                'UPDATE users SET name = ?, phone = ?, email = ?, address = ?, complement = ?, country = ?, state = ?, city = ?, neighborhood = ?, postal_code = ?, birth_date = ?, gender = ?, password = ?, type = ? WHERE id = ?'
            );

            $stmt->bind_param(
                'sssssssssssssssssi',
                $data['name'],
                $data['phone'],
                $data['email'],
                $data['address'],
                $data['complement'],
                $data['country'],
                $data['state'],
                $data['city'],
                $data['neighborhood'],
                $data['postal_code'],
                $data['birth_date'],
                $data['gender'],
                $data['password'],
                $data['type'],
                $id
            );

            $stmt->execute();
            return true;
        } catch (mysqli_sql_exception $e) {
            error_log($e->getMessage(), 3, __DIR__ . '/errors.log');
            return false;
        }
    }

    public function updateType($type, $id)
    {
        try {
            $stmt = $this->conn->prepare(
                'UPDATE users SET type = ? WHERE id = ?'
            );

            $stmt->bind_param('si', $type, $id);

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
            $stmt = $this->conn->prepare('DELETE FROM users WHERE id = ?');
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
            $result = $this->conn->query('SELECT COUNT(*) as total FROM users');
            $row = $result->fetch_assoc();

            return $row['total'];
        } catch (mysqli_sql_exception $e) {
            error_log($e->getMessage(), 3, __DIR__ . '/errors.log');
            return 0;
        }
    }
}