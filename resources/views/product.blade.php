<x-shop-layout>
    <article class="container my-5 py-5">
        <div class="row">
            <aside class="product-navigation col-12 col-md-2">
                <ul>
                    @foreach ($categories as $category)
                        <li>
                            <a href="#" class="text-center text-uppercase">{{ $category['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </aside>
            <div class="col-12 col-md-10 row row-cols-2 row-cols-lg-4 g-4 my-3">
                <x-product-card :products=$products></x-product-card>
            </div>
        </div>
    </article>
</x-shop-layout>
