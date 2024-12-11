<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuiavagas - Encontre Seu Próximo Emprego</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
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
            <textarea name="" id="" cols="30" rows="10"></textarea>
        </div>
        

        </main>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="./utils/tinymce/tinymce.min.js"></script>

        <script>
            tinymce.init({
                selector: 'textarea',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                language: 'pt_BR',
            });
        </script>

        <script src="views/script.js"></script>

</body>

</html>
