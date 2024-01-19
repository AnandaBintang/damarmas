@foreach ($data['products'] as $product)
    <div class="col">
        <a href="#">
            <div class="product card">
                @foreach ($data['productThumbnail'] as $thumbnail)
                    @if ($product->id == $thumbnail->product_id)
                        <img src="{{ url('/storage/upload/product') . '/' . $thumbnail->image }}" class="card-img-top"
                            alt="{{ $product->name }}">
                    @break
                @endif
            @endforeach
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text fw-semibold text-success">Rp. {{ $product->price }}</p>
            </div>
        </div>
    </a>
</div>
@endforeach
