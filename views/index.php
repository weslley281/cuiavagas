<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuiavagas - Encontre Seu Próximo Emprego</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                                <a class="nav-link" href="index.php?page=login">Login</a>
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
        
        

        <div class="page-wrapper">
            <!-- Seção de Busca -->
            <section class="search-section">
                <div class="container">
                    <div class="search-container">
                        <h1 class="text-center mb-4">Encontre seu próximo <span
                                style="font-weight:bolder;color:#2c6e49;">EMPREGO!</span></h1>
                        <form class="d-flex">
                            <div class="input-group">
                                <input type="search" class="form-control search-input"
                                    placeholder="Digite o cargo de seu interesse..." aria-label="Buscar vagas">
                                <button class="btn search-btn" type="submit">
                                    <img src="img/cuiavagas-logo.png" alt="Logo" width="50px" height="50px">
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <!-- Seção Call-to-Action -->
            <section id="empregos" class="cta-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="mb-5">Vagas em <span style='font-weight:bolder;color:#2c6e49;'>ALTA</span> neste
                                momento!</h2>
                            <div class='row cta-card'>
                                <div class="col-md-4 mb-3">
                                    <div class="card h-100 shadow-sm job-card" data-job="dev">
                                        <div class="card-body text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="mb-3">
                                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                                <line x1="3" y1="9" x2="21" y2="9"></line>
                                                <line x1="9" y1="21" x2="9" y2="9"></line>
                                            </svg>
                                            <h5 class="card-title mb-3">Desenvolvimento de Software</h5>
                                            <p class="card-text">
                                                <span class="badge bg-success">+45 novas vagas</span>
                                            </p>
                                            <small class="text-muted">Esta semana</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card h-100 shadow-sm job-card" data-job="marketing">
                                        <div class="card-body text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="mb-3">
                                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                            </svg>
                                            <h5 class="card-title mb-3">Marketing Digital</h5>
                                            <p class="card-text">
                                                <span class="badge bg-success">+30 novas vagas</span>
                                            </p>
                                            <small class="text-muted">Esta semana</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card h-100 shadow-sm job-card" data-job="support">
                                        <div class="card-body text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="mb-3">
                                                <path d="M15.05 5A5 5 0 0 1 19 10.5h1a3.5 3.5 0 0 1 3.5 3.5v2a3.5 3.5 0 0 1-3.5 3.5h-7.5v-3h5a1.5 1.5 0 1 0 0-3h-6.5v-3h6a1.5 1.5 0 1 0 0-3h-5a3.5 3.5 0 0 0-3.47 3h-1.53a5 5 0 0 1 5-5z"></path>
                                            </svg>
                                            <h5 class="card-title mb-3">Suporte Técnico</h5>
                                            <p class="card-text">
                                                <span class="badge bg-success">+22 novas vagas</span>
                                            </p>
                                            <small class="text-muted">Esta semana</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <!-- Modal de Detalhes da Vaga -->
        <div id='jobModal' class='job-modal'>
            <div class='job-modal-content'>
                <span class='job-modal-close'>&times;</span>
                <div id='jobModalDetails'></div>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <img src="img/cuiavagas-logo.png" alt="Cuiavagas Logo" class="footer-logo">
                        <h3 class="footer-title">Cuiavagas</h3>
                        <p class="text-muted">Encontre seu próximo emprego com facilidade.</p>
                    </div>
                    <div class="col-md-4 mb-4">
                        <h5 class="footer-title">Links Rápidos</h5>
                        <div class="footer-links">
                            <a href="index.php">Início</a>
                            <a href="#empregos">Empregos</a>
                            <a href="#">Sobre Nós</a>
                            <a href="#">Contato</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <h5 class="footer-title">Conecte-se</h5>
                        <div class="footer-social">
                            <a href="#" aria-label="Facebook">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                                </svg>
                            </a>
                            <a href="#" aria-label="LinkedIn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/>
                                    <rect x="2" y="9" width="4" height="12"/>
                                    <circle cx="4" cy="4" r="2"/>
                                </svg>
                            </a>
                            <a href="#" aria-label="Instagram">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row footer-bottom">
                    <div class="col-12 text-center">
                        <p class="text-muted mb-0">&copy; 2024 Cuiavagas. Todos os direitos reservados.</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="script.js"></script>

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
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>

</body>

</html>