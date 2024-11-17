@extends('main')

@section('title')
    Shop 
@endsection

@section('content')
    <div class="container-fluid">
        <h1>Shop</h1>

        <section>
            <div class="row">
                @foreach ($data as $item)
                    <div class="col-2 p-1">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">{{ $item->nama_produk }}</h5>
                            <p class="card-text">{{ $item->desc }}</p>
                            <div class="flex text-end">
                                <a href="#" class="btn btn-primary" title="Add to cart">
                                    <i class="bi bi-cart-plus-fill"></i>
                                </a>
                            </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection