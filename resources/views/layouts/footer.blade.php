<footer class="footer-section">
    <a href="https://api.whatsapp.com/send?phone=6281226090061&text=Saya%20membutuhkan%20info%20lebih%20lanjut%20tentang%20barang%20yang%20ada%20di%20Damarmas.com%20.%20Tolong%20dibantu%20ya!"
        class="whatsapp" target="_blank">
        <i class="fa-brands fa-whatsapp whatsapp-icon"></i>
    </a>
    <div class="container">
        <div class="footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="cta-text">
                            <h4>Alamat Kami</h4>
                            <span>{{ $about->address }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text">
                            <h4>Hubungi Kami</h4>
                            <span>{{ $about->phone }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="far fa-envelope-open"></i>
                        <div class="cta-text">
                            <h4>Email Kami</h4>
                            <span>{{ $about->email }}</span>
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
                        <div class="footer-social-icon">
                            <span>Ikuti Kami</span>
                            <a href="{{ $about->facebook }}"><i class="fa-brands fa-facebook"></i></a>
                            <a href="{{ $about->instagram }}"><i class="fa-brands fa-instagram"></i></a>
                            <a href="{{ $about->whatsapp }}"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
