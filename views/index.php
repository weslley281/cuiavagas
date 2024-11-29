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
    <main>
        <nav class="navbar navbar-dark navbar-expand-lg" aria-label="Main navigation">
            <div class="container-fluid d-flex align-items-center">
                <div class="d-flex gap-5">
                    <!-- Logo Section -->
                    <div id="div-title-logo" class="d-flex align-items-center">
                        <img id="title-logo" src="../img/Leonardo_Phoenix_Design_a_clean_and_modern_logo_for_a_job_site_3.png" alt="Logo" width="125" height="125" class="d-inline-block align-text-top">
                    </div>
            
                    <!-- Hamburger Menu Button (visible only on small screens) -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            
                    <!-- Navigation Links (Collapsible) -->
                    <div class="collapse navbar-collapse mx-auto" id="navbarNavDropdown">
                        <ul class="navbar-nav d-flex justify-content-center gap-2">
                            <li class="nav-item fs-4">
                                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                            </li>
                            <li class="nav-item fs-4">
                                <a class="nav-link" href="#">Empregos</a>
                            </li>
                            <li class="nav-item fs-4">
                                <a class="nav-link" href="#">Sobre Nós</a>
                            </li>
                            <li class="nav-item fs-4">
                                <a class="nav-link" href="#">Contato</a>
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
                                    <img src="../img/cuiavagas-logo.png" alt="Logo" width="50px" height="50px">
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <!-- Seção Call-to-Action -->
            <section class="cta-section">
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

        <!-- Bootstrap JS -->
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz' crossorigin='anonymous'></script>

        <script src="script.js"></script>

    </main>

</body>

</html>