@extends('layoutsUMKM.app')

@section('content')
<section class="home-section">
    <div class="text product">PRODUCT</div>
    <div class="box-container">
    @if(!empty($product))
        @foreach($product as $pro)
        <div class="store-card card">
            <div class="box-store box">
                <img class="image" src="{{ asset ('storage/product/'.$pro->imagePath) }}" alt="iniGambar">
            </div>
            <p class="title-product">{{$pro->productName}}</p>
            <p class="harga-product"><b>Rp {{$pro->productPrice}}</b></p>
            <div class="button-content2">
                <form action= "{{ route('product.destroy', $pro->id)}}" method="POST">@method('DELETE')
                    {{ csrf_field() }}
<<<<<<< HEAD
                    <input type="hidden" name="id" value="{{$pro->id }}">
=======
<<<<<<< HEAD
                    <input type="hidden" name="id" value="{{$pro->id }}">
=======
                    <input type="hidden" name="id" value="{{$pro->id }}"> <br></br>
>>>>>>> ca60b13a77d2250c8df34dac0d607288e2eec176
>>>>>>> 6875360cd66618fd3f8a84256dac67dbd96c98be
                    <button type="submit" onclick="return confirm('Are You Sure You Want To Remove This Product?');"><i class='bx bx-trash'></i></button>
                </form>
            </div>
        </div>
    @endforeach
    @else
        <div class="title-dashboard">
            <div class="alert alert-success alert-block">
                <h3>Produk tidak tersedia</h3>
            </div>
        </div>
    @endif
    </div>
    <div class="button-content big">
        <a href="/product/create"><i class='bx bx-plus-circle'></i></a>
    </div>
</section>
@endsection