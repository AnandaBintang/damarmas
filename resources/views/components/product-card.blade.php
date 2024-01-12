@foreach ($products as $product)
    <div class="col">
        <a href="#">
            <div class="product card">
                <img src="{{ $product['image'] }}" class="card-img-top" alt="Product">
                <div class="card-body">
                    <h5 class="card-title">{{ $product['title'] }}</h5>
                    <p class="card-text fw-semibold text-success">Rp. {{ $product['price'] }}</p>
                </div>
            </div>
        </a>
    </div>
@endforeach
