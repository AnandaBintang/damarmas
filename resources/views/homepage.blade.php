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
        @foreach ($categories as $category)
            <div class="category-section">
                <h4 class="category-title mt-5 text-center">{{ $category->name }}</h4>
                <ul class="honeycomb" lang="es">
                    @foreach ($subcategories as $subcategory)
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
        <h3 class="article-title">Produk Terlaris</h3>
        <div class="row row-cols-2 row-cols-lg-4 g-4 my-3">
            {{-- <x-product-card :products=$products></x-product-card> --}}
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
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample27.jpg" alt="sq-sample27" />
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
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample17.jpg" alt="sq-sample17" />
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
</x-shop-layout>
