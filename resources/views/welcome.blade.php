<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fagil Company</title>
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <style>
        .slider {
            object-fit: cover;
            height: 500px;
        }

        @media (max-width: 767px) {
            .slider {
                object-fit: cover;
                height: 200px;
            }
        }
    </style>
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
            <div class="container-fluid px-5">
                <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">Fagil Company</span></a>

            </div>
        </nav>
        <!-- Header-->
        <header class="py-5">
            <div class="container-xxl px-5 pb-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-4">
                        <!-- Header text content-->
                        <div class="text-center text-xxl-start">
                            <div class="fs-3  text-start fw-light text-muted">I can help your business to</div>
                            <h1 class="display-4 text-start fw-bolder mb-5"><span class="text-gradient d-inline">Get online and
                                    grow fast</span></h1>
                            <div
                                class="d-grid gap-3 d-lg-flex justify-content-sm-center justify-content-lg-start mb-3">
                                <a class="btn btn-custom btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder"
                                    href="{{ route('login') }}">Login</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner ">
                                <div class="carousel-item active">
                                    <img src="{{ asset('assets/img/slider1.jpg') }}" class="d-block slider w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/slider2.jpg') }}" class="d-block slider w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/slider3.jpg') }}" class="d-block slider w-100"
                                        alt="...">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- About Section-->
        <section class="bg-light py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xxl-8">
                        <div class="text-center my-5">
                            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About My Company</span>
                            </h2>
                            <p class="lead fw-light mb-4">This is my Company</p>
                            <p class="text-muted">Our company is a global leader in the tech industry, providing cutting-edge solutions and
                                top-notch services to clients worldwide. We are committed to creating high-quality
                                products that drive business forward and enhance everyday life.</p>
                            <div class="d-flex justify-content-center fs-2 gap-4">
                                <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                                <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
                                <a class="text-gradient" href="#!"><i class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="bg-white py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0">Copyright &copy; Fagil Website 2024</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
