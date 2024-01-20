<x-shop-layout>
    <header class="container my-5 mx-auto">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
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
        @foreach ($data['categories'] as $category)
            <div class="category-section">
                <h4 class="category-title mt-5 text-center">{{ $category->name }}</h4>
                <ul class="honeycomb" lang="es">
                    @foreach ($data['subcategories'] as $subcategory)
                        @if ($subcategory->category_id == $category->id)
                            <li class="honeycomb-cell">
                                <a href="{{ route('products', ['id' => $subcategory->id]) }}">
                                    <img class="honeycomb-cell__image"
                                        src="{{ url('/storage/upload/subcategory') . '/' . $subcategory->image }}"
                                        alt="{{ $subcategory->name }} Damarmas">
                                    <div class="honeycomb-cell__title">{{ $subcategory->name }}</div>
                                </a>
                            </li>
                        @endif
                    @endforeach
                    <li class="honeycomb-cell honeycomb__placeholder"></li>
                </ul>
            </div>
        @endforeach
    </article>
    <article class="container my-5 py-5">
        <h3 class="article-title">Produk Terbaru</h3>
        <div class="row row-cols-2 row-cols-lg-4 g-4 my-3">
            <x-product-card :data=$data></x-product-card>
        </div>
    </article>
    <article class="container my-5 py-5">
        <h3 class="article-title">Pengalaman bermitra dengan Damarmas</h3>
        <div class="testimonial my-3">
            @foreach ($data['testimonials'] as $testimonial)
                <figure class="snip1157">
                    <blockquote>{{ $testimonial->testimonial }}
                        <div class="arrow"></div>
                    </blockquote>
                    <img src="{{ url('storage/upload/testimonial') . '/' . $testimonial->image }}"
                        alt="{{ $testimonial->name }}" />
                    <div class="author">
                        <h5>{{ $testimonial->name }}</h5>
                    </div>
                </figure>
            @endforeach
        </div>
    </article>
    <article class="container my-5 py-5">
        <h3 class="article-title">Damarmas</h3>
        {!! $data['about']->description !!}
    </article>
</x-shop-layout>
