<x-shop-layout>
    <article class="container py-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <section id="main-carousel" class="splide" aria-label="Beautiful Images">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <img src="https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg"
                                    alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg"
                                    alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg"
                                    alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg"
                                    alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg"
                                    alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg"
                                    alt="">
                            </li>
                        </ul>
                    </div>
                </section>
                <section id="thumbnail-carousel" class="splide mt-3"
                    aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <img src="https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg"
                                    alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg"
                                    alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg"
                                    alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg"
                                    alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg"
                                    alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg"
                                    alt="">
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
            <div class="col-12 col-md-6">
                <h3 class="product-title">Product Title</h3>
                <hr>
                <h4 class="product-price">Rp. 0</h4>
                <a href="#product-description" class="btn btn-outline-secondary my-3">Lihat Spesifikasi</a>
                <a href="https://api.whatsapp.com/send?phone=6281226090061&text=Saya%20membutuhkan%20info%20lebih%20lanjut%20tentang%20barang%20yang%20ada%20di%20Damarmas.com%20yang%20bernama%20'product%20title'.%20Tolong%20dibantu%20ya!"
                    target="_blank" class="btn btn-success my-3">Pesan Produk</a>
            </div>
            <div class="col-12">
                <div id="product-description" class="card my-3">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#spesification" role="tab"
                                    aria-controls="spesification" aria-selected="true">Spesifikasi</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Product Title</h4>
                        <div class="tab-content mt-3">
                            <div class="tab-pane active" id="spesification" role="tabpanel">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus ullam maxime et
                                ipsam praesentium odio soluta laudantium beatae cumque a vel, quis, asperiores molestiae
                                sit obcaecati quaerat corrupti eaque necessitatibus enim ab sapiente minus. Tenetur
                                reprehenderit, provident veritatis, sapiente deleniti voluptatem esse accusamus autem
                                aliquam sit beatae repellendus! Eaque, quo?
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</x-shop-layout>

<script>
    $(document).ready(function() {
        $('#bologna-list a').on('click', function(e) {
            e.preventDefault()
            $(this).tab('show')
        })

        var main = new Splide('#main-carousel', {
            type: 'fade',
            rewind: true,
            pagination: false,
            arrows: false,
        });

        var thumbnails = new Splide('#thumbnail-carousel', {
            fixedWidth: 100,
            fixedHeight: 60,
            gap: 10,
            rewind: true,
            pagination: false,
            isNavigation: true,
            breakpoints: {
                600: {
                    fixedWidth: 60,
                    fixedHeight: 44,
                },
            },
        });

        main.sync(thumbnails);
        main.mount();
        thumbnails.mount();
    });
</script>
