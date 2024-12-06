<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuiavagas - Encontre Seu Próximo Emprego</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <main id="inicio">
        <nav class="navbar navbar-dark navbar-expand-lg" aria-label="Main navigation">
            <div class="container-fluid d-flex align-items-center">
                <div class="d-flex gap-5">
                    <!-- Logo Section -->
                    <div id="div-title-logo" class="d-flex align-items-center">
                        <img id="title-logo" src="img/Leonardo_Phoenix_Design_a_clean_and_modern_logo_for_a_job_site_3.png" alt="Logo" width="125" height="125" class="d-inline-block align-text-top">
                    </div>
            
                    <!-- Hamburger Menu Button (visible only on small screens) -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            
                    <!-- Navigation Links (Collapsible) -->
                    <div class="collapse navbar-collapse mx-auto" id="navbarNavDropdown">
                        <ul class="navbar-nav d-flex justify-content-center gap-2">
                            <li class="nav-item fs-4">
                                <a class="nav-link active" aria-current="page" href="#home">Inicio</a>
                            </li>
                            <li class="nav-item fs-4">
                                <a class="nav-link" href="#empregos">Empregos</a>
                            </li>
                            <li class="nav-item fs-4">
                                <a class="nav-link" href="#">Sobre Nós</a>
                            </li>
                            <li class="nav-item fs-4">
                                <a class="nav-link" href="#">Contato</a>
                            </li>
                            <li class="nav-item fs-4">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                        </ul>
                    </div>

                </div>
        
                <!-- Cuiavagas Title for Large Screens -->
                <div class="navbar-brand home-title fs-0 fw-bold d-none d-lg-block ms-auto">
                    Cuiavagas
                </div>
        
                <!-- Cuiavagas Title for Mobile (hidden on large screens) -->
                <div class="navbar-brand home-title fs-1 fw-bold d-lg-none ms-auto">
                    Cuiavagas
                </div>
            </div>
        </nav>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h1 class="text-center">Login</h1>
                    <form action="utils/auth.php" method="POST" class="mt-4">
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" value="gostoso@gmail.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="password" name="password" value="Admin@123" required>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <a href="forgot-password.php" class="text-decoration-none">Esqueceu sua senha?</a>
                            </div>
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <p>Não tem uma conta? <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#exampleModal">Cadastre-se</a></p>
                    </div>
                </div>
            </div>
        </div>

        </main>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <h1 class="text-center">Cadastro de Usuário</h1>
                <form action="controllers/userController.php?action=create" method="POST" class="mt-4">
                    <div class="container">
                        <div class="form-group">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" value="Vampeta" required>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="65912345678" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" value="gostoso@gmail.com" required>
                        </div>
                        <div class="form-group">
                            <label for="address" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="address" value="Rua sei la" name="address">
                        </div>
                        <div class="form-group">
                            <label for="complement" class="form-label">Complemento</label>
                            <input type="text" class="form-control" id="complement" value="nao sei" name="complement">
                        </div>
                        <div class="form-group">
                            <label for="country" class="form-label">País</label>
                            <input type="text" class="form-control" id="country" name="country" value="Brasil" required>
                        </div>
                        <div class="form-group">
                            <label for="state" class="form-label">Estado</label>
                            <select class="form-select form-control" id="state" name="state" required>
                                <option value="" selected disabled>Selecione</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="city" name="city" value="Vagina Grande" required>
                        </div>
                        <div class="form-group">
                            <label for="neighborhood" class="form-label">Bairro</label>
                            <input type="text" class="form-control" id="neighborhood" value="Novo Mundo" name="neighborhood">
                        </div>
                        <div class="form-group">
                            <label for="postal_code" class="form-label">CEP</label>
                            <input type="text" class="form-control" id="postal_code" value="78000-000" name="postal_code">
                        </div>
                        <div class="form-group">
                            <label for="birth_date" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" id="birth_date" value="12/12/2024" name="birth_date" required>
                        </div>
                        <div class="form-group">
                            <label for="gender" class="form-label">Gênero</label>
                            <select class="form-select form-control" id="gender" name="gender" required>
                                <option value="" selected disabled>Selecione</option>
                                <option value="masculine">Masculino</option>
                                <option value="feminine">Feminino</option>
                                <option value="other">Outro</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="password" name="password" value="Admin@123" required>
                        </div>
                        <div class="form-group">
                            <label for="password2" class="form-label">Confirme a Senha</label>
                            <input type="password" class="form-control" id="password2" value="Admin@123" name="password2" required>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="views/script.js"></script>

</body>

</html>
