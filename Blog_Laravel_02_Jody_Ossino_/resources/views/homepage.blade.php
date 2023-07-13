<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Clean Blog - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/style.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="{{ route('homepage') }}">La Bibbia Del Programmatore <i class="fa-solid fa-code" style="color: #ffffff;"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('homepage') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('services') }}">Services</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('about') }}">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('https://academy.orangee.it/wp-content/uploads/2019/06/come-si-diventa-programmatori-label.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Lo sviluppo WEB/APP</h1>
                            <span class="subheading">Il blog per il coder che è in te!</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">Guida HTML 5 Gratis!</h2>
                            <h3 class="post-subtitle">La guida definitiva per padroneggiare l'ambito di sviluppo web!</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Andrea</a>
                            on May 25, 2023
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html"><h2 class="post-title">Guida CSS 3 Gratis!</h2></a>
							<h3 class="post-subtitle">La guida definitiva per padroneggiare l'ambito di sviluppo web!</h3>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Andrea</a>
                            on April 10, 2023
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">Guida Javascript Gratis!</h2>
                            <h3 class="post-subtitle">La guida definitiva per padroneggiare l'ambito di sviluppo web!</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Marco</a>
                            on Jun 1, 2023
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">Guida Php Gratis!</h2>
                            <h3 class="post-subtitle">La guida definitiva per padroneggiare l'ambito di sviluppo web!</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Katia</a>
                            on July 13, 2023
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
					 <!-- Post preview-->
					 <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">Guida Laravel Gratis!</h2>
                            <h3 class="post-subtitle">La guida definitiva per padroneggiare l'ambito di sviluppo web!</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Katia</a>
                            on July 12, 2023
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container ">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Jody Ossino</div>
                    </div>
                </div>
            </div>
        </footer>

+        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/scripts.js"></script>
    </body>
</html>