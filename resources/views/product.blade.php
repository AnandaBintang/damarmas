<x-shop-layout>
    <article class="container my-5 py-5">
        <h1 class="article-title">Produk Digital Printing</h1>
        <div class="row">
            <div class="col-12 col-lg-3 my-5 order-last order-lg-first">
                <aside>
                    <h5 class="text-center text-uppercase">Categories</h5>
                    <hr>
                    <ul>
                        @foreach ($categories as $category)
                            <li class="my-3 mx-4">
                                <a href="#" class="category-name">{{ $category['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </aside>
            </div>
            <div class="col-12 col-lg-9 row row-cols-2 row-cols-lg-4 g-4 mx-auto">
                <x-product-card :products=$products></x-product-card>
            </div>
        </div>
    </article>
</x-shop-layout>
