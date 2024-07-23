<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Boutique de Jeux Vidéo</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .carousel-item img {
            height: 500px;
            object-fit: cover;
        }
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        .btn-custom {
            background-color: #28a745;
            border: none;
            color: #fff;
            transition: background-color 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">Boutique de Jeux Vidéo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Panier</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <!-- Section de la bannière -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://via.placeholder.com/1500x500" class="d-block w-100" alt="Promo 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Promotion 1</h5>
                        <p>Description de la promotion 1.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/1500x500" class="d-block w-100" alt="Promo 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Promotion 2</h5>
                        <p>Description de la promotion 2.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/1500x500" class="d-block w-100" alt="Promo 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Promotion 3</h5>
                        <p>Description de la promotion 3.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Section des promotions -->
        <div class="mt-5">
            <h2>Nos Promotions</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://via.placeholder.com/400x300?text=Jeu+1" class="card-img-top" alt="Jeu 1">
                        <div class="card-body">
                            <h5 class="card-title">Jeu 1</h5>
                            <p class="card-text">Description du Jeu 1.</p>
                            <a href="#" class="btn btn-custom">Voir l'offre</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://via.placeholder.com/400x300?text=Jeu+2" class="card-img-top" alt="Jeu 2">
                        <div class="card-body">
                            <h5 class="card-title">Jeu 2</h5>
                            <p class="card-text">Description du Jeu 2.</p>
                            <a href="#" class="btn btn-custom">Voir l'offre</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://via.placeholder.com/400x300?text=Jeu+3" class="card-img-top" alt="Jeu 3">
                        <div class="card-body">
                            <h5 class="card-title">Jeu 3</h5>
                            <p class="card-text">Description du Jeu 3.</p>
                            <a href="#" class="btn btn-custom">Voir l'offre</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section des nouvelles de l'industrie -->
        <div class="mt-5">
            <h2>Nouvelles de l'industrie</h2>
            <ul class="list-group">
                <li class="list-group-item">Nouvelle 1 sur l'industrie du jeu vidéo.</li>
                <li class="list-group-item">Nouvelle 2 sur l'industrie du jeu vidéo.</li>
                <li class="list-group-item">Nouvelle 3 sur l'industrie du jeu vidéo.</li>
            </ul>
        </div>
    </div>

    <div class="footer mt-5">
        <p>&copy; 2024 Boutique de Jeux Vidéo. Tous droits réservés.</p>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
