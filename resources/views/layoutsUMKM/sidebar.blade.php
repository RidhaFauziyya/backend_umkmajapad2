<div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">
          <a href="/"><img class="logo" src="{{ asset('/storage/logo head.png')}}" alt="iniGambar"></a>
        </div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li class="store-list">
        <a href="/dashboard">
<<<<<<< HEAD
          @if(!empty($dashboard))
            @foreach($dashboard as $das)
            <img class="img dash-profile img-profile" src="{{ asset ('storage/dashboard/'.$das->imagePath) }}" alt="ini-gambar">
            @endforeach
          @else
          <img class="img dash-profile img-profile" src="https://i.etsystatic.com/39180577/r/il/943566/4432680343/il_fullxfull.4432680343_9tjj.jpg" alt="ini-gambar">
          @endif
        <span class="links_name store">{{Auth::guard('admin')->user()->name}}</span>
        <span class="tooltip">{{Auth::guard('admin')->user()->name}}</span>

=======
        @foreach($dashboard as $dashboards)
        <img class="img dash-profile img-profile" src="{{ asset ('storage/dashboard/'.$dashboards->imagePath) }}" alt="ini-gambar">
        <span class="links_name store">{{$dashboards->storeName}}</span>
        <span class="tooltip">{{$dashboards->storeName}}</span>
         @endforeach
>>>>>>> ca60b13a77d2250c8df34dac0d607288e2eec176
        </a>
      </li>
      <li class="list-side">
        <a href="/dashboard">
          <span class="links_name">Dashboard</span>
          <i class='bx bx-home'></i>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li class="list-side">
       <a href="/myStore">
         <span class="links_name">My Store</span>
         <i class='bx bx-user' ></i>
       </a>
       <span class="tooltip">My Store</span>
     </li>
     <li class="list-side">
       <a href="/product">
         <span class="links_name">Product</span>
         <i class='bx bx-cart' ></i>
       </a>
       <span class="tooltip">Product</span>
     </li>
     <li class="list-side">
       <a href="/blogUMKM">
         <span class="links_name">Blog</span>
         <i class='bx bx-edit' ></i>
       </a>
       <span class="tooltip">Blog</span>
     </li>
     <a href="{{ url('/logout') }}">
     <li class="button-side">
      <button class="btn btn-logout">LOGOUT</button>
     </li>
     </a>
    </ul>
</div>