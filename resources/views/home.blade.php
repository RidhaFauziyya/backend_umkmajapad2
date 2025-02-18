@extends('layouts.app')

@section('content')
<!--HOMEPAGE-->
<section class="home">
    <div class="slider">
        <div class="slide">
            <div class="content">
                <h2>500++</h2>
                <h3>UMKM HAS JOINED WITH US</h3>
                <a href="/register" class="center"><button class="btn-regist">JOIN US NOW!</button></a>
            </div>
        </div> 
    </div>
    <div class="container-home">
        <h2>BLOG</h2>
        <div class="box-container">
        
        @if(count($blogs)>0)
            @foreach ($blogs as $blog)
            <div class="box">
                <img class="image" alt="iniGambar" src="{{ asset ('storage/blogs/'.$blog->imagePath) }}">
            </div>
            @endforeach
        @endif
        @if(count($blogs)==0)
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6875360cd66618fd3f8a84256dac67dbd96c98be
            <div class="store-homepage box">
                <img class="image" alt="iniGambar" src="{{ asset('/storage/blogs.jpg')}}">
            </div>

            <div class="store-homepage box">
                <img class="image" alt="iniGambar" src="{{ asset('/storage/blogs.jpg')}}">
            </div>
            <div class="store-homepage box">
                <img class="image" alt="iniGambar" src="{{ asset('/storage/blogs.jpg')}}">
            </div>
            <div class="store-homepage box">
                <img class="image" alt="iniGambar" src="{{ asset('/storage/blogs.jpg')}}">
<<<<<<< HEAD
=======
            </div>
=======
                <div class="box">
                    <img class="image" alt="iniGambar" src="https://www.pa4.com.br/wp-content/uploads/2021/08/WhatsApp-Image-2021-08-24-at-16.20.03.jpeg">
                </div>
                <div class="box">
                    <img class="image" alt="iniGambar" src="https://bua.ub.ac.id/wp-content/uploads/2018/02/Banner-Pameran-Februari-6kali3-1024x512.jpg">
                </div>
                <div class="box">
                    <img class="image" alt="iniGambar" src="http://www.umm.ac.id/files/image/Bazar%20Buku.jpg">
                </div>
>>>>>>> 6875360cd66618fd3f8a84256dac67dbd96c98be
            </div>
>>>>>>> ca60b13a77d2250c8df34dac0d607288e2eec176
        @endif
        </div>
        <div class="more">
            <a href="/blog" ><i class="fas fa-arrow-right fa-2x"></i></a>
        </div>
    </div>

    <div class="container-home">
        <h2>STORE</h2>
        <div class="box-container">
        @if(count($store)>0)
            @foreach ($store as $stores)
            <div class="store-homepage box">
                <img class="image" alt="iniGambar" src="{{ asset ('storage/dashboard/'.$stores->imagePath) }}">
            </div>
            @endforeach
<<<<<<< HEAD
        @endif
        @if(count($store)==0)
            <div class="store-homepage box">
                <img class="image" alt="iniGambar" src="{{ asset('/storage/store.jpg')}}">
            </div>
            <div class="store-homepage box">
                <img class="image" alt="iniGambar" src="{{ asset('/storage/store.jpg')}}">
            </div>
            <div class="store-homepage box">
                <img class="image" alt="iniGambar" src="{{ asset('/storage/store.jpg')}}">
            </div>
            <div class="store-homepage box">
                <img class="image" alt="iniGambar" src="{{ asset('/storage/store.jpg')}}">
            </div>
        @endif
=======
        @endif
        @if(count($store)==0)
            <div class="store-homepage box">
                <img class="image" alt="iniGambar" src="{{ asset('/storage/store.jpg')}}">
            </div>
            <div class="store-homepage box">
                <img class="image" alt="iniGambar" src="{{ asset('/storage/store.jpg')}}">
            </div>
            <div class="store-homepage box">
                <img class="image" alt="iniGambar" src="{{ asset('/storage/store.jpg')}}">
            </div>
            <div class="store-homepage box">
                <img class="image" alt="iniGambar" src="{{ asset('/storage/store.jpg')}}">
            </div>
        @endif
>>>>>>> ca60b13a77d2250c8df34dac0d607288e2eec176
        </div>
        <div class="more">
            <a href="/stores" ><i class="fas fa-arrow-right fa-2x"></i></a>
        </div>
    </div>

    <div class="slider">
        <div class="about-us slide">
            <div class="mark-aboutus">
                <h2 class="mark"><span>UMKM</span>Aja!</h2>
                <p>UMKMAja! is a website that provides services that can connect UMKM sellers with buyers, making it easier for sellers to promote their UMKM and make it easier for buyers to find UMKM.</p>
                <div class="read-aboutus blog-readmore">
                    <a href="/aboutus">Read More</a>
                    <i class="fas fa-angle-right"></i>
                </div>
            </div>
        </div> 
    </div>

    <div class="box-contain container-home">
        <div class="box-container">
            <div class="banner box lft">
                <h2 class="mark-container mark">Want to join UMKMAja?</h2>
                <p class="desc-banner">Easily promote your UMKM with a wider reach</p>
                <a href="{{ route('register') }}" class="center"><button class="btn-regist">REGISTER YOUR UMKM NOW!</button></a>
            </div>
            <div class="banner box rght">
                <h2 class="mark-container mark">Want to find various UMKMs?</h2>
                <p class="desc-banner">Helps you find various products from various UMKMs easily</p>
                <a href="/stores" class="center"><button class="btn-regist">BROWSE UMKMs!</button></a>
            </div>
        </div>
    </div>
</section>
<!--END HOMEPAGE-->
@endsection