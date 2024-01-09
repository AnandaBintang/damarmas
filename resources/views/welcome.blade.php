<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Damarmas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/logo.png') }}" alt="Logo Damarmas">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown mx-4">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Machine
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown mx-4">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Consumable
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown mx-4">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Sparepart
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown mx-4">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Service
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <header class="my-5 mx-auto">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner rounded-5">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/image-slider/banner.png') }}" class="d-block w-100" alt="Banner">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/image-slider/banner.png') }}" class="d-block w-100" alt="Banner">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/image-slider/banner.png') }}" class="d-block w-100" alt="Banner">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </header>

        <article class="container my-5 py-5">
            <h3 class="article-title">Produk Kami</h3>
            <div class="category-section">
                <h4 class="category-title mt-5 text-center">Digital Printing</h4>
                <div class="digital-printing">
                    <ul class="honeycomb" lang="es">
                        <li class="honeycomb-cell">
                            <img class="honeycomb-cell__image"
                                src="https://i.pinimg.com/564x/96/54/2f/96542f9d0dbcf20d49b427a2b3db0701.jpg">
                            <div class="honeycomb-cell__title">Digital Printing</div>
                        </li>
                        <li class="honeycomb-cell">
                            <img class="honeycomb-cell__image"
                                src="https://i.pinimg.com/564x/bf/cc/d6/bfccd61e1bc94598b1123431e84be1d3.jpg">
                            <div class="honeycomb-cell__title">UV LED Printer</div>
                        </li>
                        <li class="honeycomb-cell">
                            <img class="honeycomb-cell__image"
                                src="https://i.pinimg.com/564x/58/d3/85/58d3857f3c6e0d52cdc10fb954ac09fd.jpg">
                            <div class="honeycomb-cell__title">Printer Warna A3+</div>
                        </li>
                        <li class="honeycomb-cell">
                            <img class="honeycomb-cell__image"
                                src="https://i.pinimg.com/564x/0e/14/8d/0e148da02940c53fe7057b6300fa6312.jpg">
                            <div class="honeycomb-cell__title">Printer ID Card</div>
                        </li>
                        <li class="honeycomb-cell">
                            <img class="honeycomb-cell__image"
                                src="https://i.pinimg.com/564x/0e/14/8d/0e148da02940c53fe7057b6300fa6312.jpg">
                            <div class="honeycomb-cell__title">Print & Cut</div>
                        </li>
                        <li class="honeycomb-cell">
                            <img class="honeycomb-cell__image"
                                src="https://i.pinimg.com/564x/63/f9/d6/63f9d6f05d451e6890d410262fba7812.jpg">
                            <div class="honeycomb-cell__title">Printer Plotter Teknikal</div>
                        </li>
                        <li class="honeycomb-cell">
                            <img class="honeycomb-cell__image"
                                src="https://i.pinimg.com/564x/ed/4f/db/ed4fdb35e22a5b09b50e93f391ee5c21.jpg">
                            <div class="honeycomb-cell__title">Printer 3D</div>
                        </li>
                        <li class="honeycomb-cell honeycomb__placeholder"></li>
                    </ul>
                </div>
            </div>
            <div class="category-section">
                <h4 class="category-title text-center">Industry</h4>
                <div class="industry">
                    <ul class="honeycomb" lang="es">
                        <li class="honeycomb-cell">
                            <img class="honeycomb-cell__image"
                                src="https://i.pinimg.com/564x/96/54/2f/96542f9d0dbcf20d49b427a2b3db0701.jpg">
                            <div class="honeycomb-cell__title">Digital Printing</div>
                        </li>
                        <li class="honeycomb-cell">
                            <img class="honeycomb-cell__image"
                                src="https://i.pinimg.com/564x/bf/cc/d6/bfccd61e1bc94598b1123431e84be1d3.jpg">
                            <div class="honeycomb-cell__title">UV LED Printer</div>
                        </li>
                        <li class="honeycomb-cell">
                            <img class="honeycomb-cell__image"
                                src="https://i.pinimg.com/564x/58/d3/85/58d3857f3c6e0d52cdc10fb954ac09fd.jpg">
                            <div class="honeycomb-cell__title">Printer Warna A3+</div>
                        </li>
                        <li class="honeycomb-cell honeycomb__placeholder"></li>
                    </ul>
                </div>
            </div>
            <div class="category-section">
                <h4 class="category-title text-center">Sablon Digital</h4>
                <div class="sablon-digital">
                    <ul class="honeycomb" lang="es">
                        <li class="honeycomb-cell">
                            <img class="honeycomb-cell__image"
                                src="https://i.pinimg.com/564x/96/54/2f/96542f9d0dbcf20d49b427a2b3db0701.jpg">
                            <div class="honeycomb-cell__title">Digital Printing</div>
                        </li>
                        <li class="honeycomb-cell">
                            <img class="honeycomb-cell__image"
                                src="https://i.pinimg.com/564x/bf/cc/d6/bfccd61e1bc94598b1123431e84be1d3.jpg">
                            <div class="honeycomb-cell__title">UV LED Printer</div>
                        </li>
                        <li class="honeycomb-cell">
                            <img class="honeycomb-cell__image"
                                src="https://i.pinimg.com/564x/58/d3/85/58d3857f3c6e0d52cdc10fb954ac09fd.jpg">
                            <div class="honeycomb-cell__title">Printer Warna A3+</div>
                        </li>
                        <li class="honeycomb-cell">
                            <img class="honeycomb-cell__image"
                                src="https://i.pinimg.com/564x/0e/14/8d/0e148da02940c53fe7057b6300fa6312.jpg">
                            <div class="honeycomb-cell__title">Printer ID Card</div>
                        </li>
                        <li class="honeycomb-cell honeycomb__placeholder"></li>
                    </ul>
                </div>
            </div>
        </article>
        <article class="container my-5 py-5">
            <h3 class="article-title">Produk Terlaris</h3>
            <div class="row row-cols-2 row-cols-lg-4 g-4 my-3">
                <div class="col">
                    <a href="#">
                        <div class="product card">
                            <img src="https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg"
                                class="card-img-top" alt="Product">
                            <div class="card-body">
                                <h5 class="card-title">Nama Barang</h5>
                                <p class="card-text fw-semibold text-success">Rp. 0</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <div class="product card">
                            <img src="https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg"
                                class="card-img-top" alt="Product">
                            <div class="card-body">
                                <h5 class="card-title">Nama Barang</h5>
                                <p class="card-text fw-semibold text-success">Rp. 0</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <div class="product card">
                            <img src="https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg"
                                class="card-img-top" alt="Product">
                            <div class="card-body">
                                <h5 class="card-title">Nama Barang</h5>
                                <p class="card-text fw-semibold text-success">Rp. 0</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <div class="product card">
                            <img src="https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg"
                                class="card-img-top" alt="Product">
                            <div class="card-body">
                                <h5 class="card-title">Nama Barang</h5>
                                <p class="card-text fw-semibold text-success">Rp. 0</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </article>
        <article class="container my-5 py-5">
            <h3 class="article-title">Pengalaman bermitra dengan Damarmas</h3>
            <div class="testimonial my-3">
                <figure class="snip1157">
                    <blockquote>Calvin: You know sometimes when I'm talking, my words can't keep up with my thoughts...
                        I
                        wonder why we think faster than we speak. Hobbes: Probably so we can think twice.
                        <div class="arrow"></div>
                    </blockquote>
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample3.jpg" alt="sq-sample3" />
                    <div class="author">
                        <h5>Pelican Steve <span> LIttleSnippets.net</span></h5>
                    </div>
                </figure>
                <figure class="snip1157 hover">
                    <blockquote>Thank you. before I begin, I'd like everyone to notice that my report is in a
                        professional,
                        clear plastic binder...When a report looks this good, you know it'll get an A. That's a tip
                        kids.
                        Write it down.
                        <div class="arrow"></div>
                    </blockquote>
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample27.jpg"
                        alt="sq-sample27" />
                    <div class="author">
                        <h5>Max Conversion<span> LIttleSnippets.net</span></h5>
                    </div>
                </figure>
                <figure class="snip1157">
                    <blockquote>My behaviour is addictive functioning in a disease process of toxic co-dependency. I
                        need
                        holistic healing and wellness before I'll accept any responsibility for my actions.
                        <div class="arrow"></div>
                    </blockquote>
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample17.jpg"
                        alt="sq-sample17" />
                    <div class="author">
                        <h5>Eleanor Faint<span> LIttleSnippets.net</span></h5>
                    </div>
                </figure>
            </div>
        </article>
        <article class="container my-5 py-5">
            <h3 class="article-title">Damarmas</h3>
            <p class="my-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum voluptatem
                voluptate
                mollitia ad? Id est quisquam possimus nostrum accusamus aut sapiente nobis, cupiditate minus. Iure
                voluptatum similique reiciendis itaque aspernatur amet architecto ex? Aliquam explicabo vero inventore,
                repellat laboriosam fugit ab maiores veniam voluptatum quod amet aspernatur in hic aperiam! Corrupti
                incidunt ipsa voluptatibus fugit explicabo, sapiente quidem, unde quisquam hic soluta deserunt
                cupiditate voluptatum! Obcaecati alias cum a autem voluptate. Quia perferendis non, porro ab ex
                repudiandae dignissimos molestias est amet autem nesciunt voluptate perspiciatis velit. Tempore
                molestias quae, voluptas maiores eligendi harum, fugit illum voluptates, nobis quidem commodi!</p>
            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat magni neque
                ratione iure obcaecati sunt dolorem quidem corporis quam laudantium praesentium aut molestiae itaque
                officia pariatur expedita accusamus, ipsa commodi porro quae incidunt quibusdam molestias. Quisquam
                similique fugiat quod ducimus veritatis laudantium at, earum maiores mollitia harum enim reiciendis
                exercitationem?</p>
        </article>

        <footer class="footer-section">
            <a href="https://api.whatsapp.com/send?phone=6281226090061&text=Saya%20membutuhkan%20info%20lebih%20lanjut%20tentang%20barang%20yang%20ada%20di%20Damarmas.com%20.%20Tolong%20dibantu%20ya"
                class="float" target="_blank">
                <i class="fa-brands fa-whatsapp my-float"></i>
            </a>
            <div class="container">
                <div class="footer-cta pt-5 pb-5">
                    <div class="row">
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="cta-text">
                                    <h4>Alamat Kami</h4>
                                    <span>1010 Avenue, sw 54321, chandigarh</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <i class="fas fa-phone"></i>
                                <div class="cta-text">
                                    <h4>Hubungi Kami</h4>
                                    <span>9876543210 0</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <i class="far fa-envelope-open"></i>
                                <div class="cta-text">
                                    <h4>Email Kami</h4>
                                    <span>mail@info.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-content pt-5 pb-5">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 mb-50">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="{{ asset('img/logo.png') }}" class="img-fluid"
                                            alt="logo"></a>
                                </div>
                                <div class="footer-text">
                                    <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor
                                        incididuntut consec tetur adipisicing
                                        elit,Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="footer-social-icon">
                                    <span>Ikuti Kami</span>
                                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3>Yang mungkin anda butuhkan</h3>
                                </div>
                                <ul>
                                    <li><a href="#">Beranda</a></li>
                                    <li><a href="#">Cara Pembelian</a></li>
                                    <li><a href="#">Servis Kami</a></li>
                                    <li><a href="#">Kontak Kami</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                            <div class="copyright-text">
                                <p>Copyright &copy; 2024, All Right Reserved <a href="{{ url('/') }}">Damarmas</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Policy</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"
        integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
