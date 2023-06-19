@extends('layouts-admin.app')

@section('content')
<section class="home-section plus-bottom1">
    <div class="coloumn-detail">
    <div class="text storez">STORE</div>
        <div class="form-group form-group2">
            <select name="category" class="form-select form-control @error('category') is-invalid @enderror" onChange="location = this.value;">
                <option value="/storeAdmin">Category</option>
                <option value="/storeAdmin/art">Art</option>
                <option value="/storeAdmin/beauty&health" selected>Beauty&Health</option>
                <option value="/storeAdmin/clothes">Clothes</option>
                <option value="/storeAdmin/electronic" >Electronic</option>
                <option value="/storeAdmin/food&drink">Food&Drink</option>
                <option value="/storeAdmin/furniture">Furniture</option>
                <option value="/storeAdmin/other">Other</option>
            </select>
            @error('category')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror  
        </div>
    </div>
    <div>
    @if(count($data)>0)
        <table>
            <tr>
                <th class="no">No</th>
                <th>Store Name</th>
                <th>Latest Activity</th>
                <th class="action">Action</th>
            </tr>
            @foreach ($data as $store)
            <tr>
                <td class="no">{{$loop->iteration}}</td>
                <td>{{$store->storeName}}</td>
                <td>{{$store->last_login_at}}</td>
                <td class="action">
                    <div class="action-flex">
                    <form action= "{{ route('storeAdmin.destroy', $store->id)}}" method="POST">@method('DELETE')
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$store->id }}">
                        <button type="submit" onclick="return confirm('Are You Sure You Want To Remove This Store?');"><i class='bx bx-trash'></i></button>
                        </form>
                        <a href="/beauty-store/{{$store->id}}"><i class='bx bx-right-arrow-circle'></i></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
        @else
        <div class="store-box3 widht-full">
            <div class="alert alert-block">
                <h3>Store not available yet</h3>
            </div>
        </div>
        @endif
    </div>
</section>
@endsection