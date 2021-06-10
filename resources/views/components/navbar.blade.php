
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white">
      <li class="nav-item">
        <a href="{{route('home')}}" class="nav-link link-dark @if($active == 'dashboard') active @endif">Dashboard</a>
        </li>
        <li class="nav-item">
        <a href="{{route('return.index')}}" class="nav-link link-dark @if($active == 'return') active @endif">Return</a>
        </li>
        <li class="nav-item">
        <a href="{{route('delivery.index')}}" class="nav-link link-dark @if($active == 'delivery') active @endif">Delivery</a>
        </li>
        <li class="nav-item">
        <a href="{{route('transportation.index')}}" class="nav-link link-dark @if($active == 'transportation') active @endif">Transportation</a>
        </li>
        <li class="nav-item">
        <a href="{{route('distribution.index')}}" class="nav-link link-dark @if($active == 'distribution') active @endif">Distribution</a>
        </li>
        <li class="nav-item">
        <a href="{{route('asset.index')}}" class="nav-link link-dark @if($active == 'asset') active @endif">Asset</a>
        </li>
        <li class="nav-item">
          <a  href="{{route('storages.index')}}" class="nav-link link-dark @if($active == 'storage') active @endif">Storage</a>
        </li>
        <li class="nav-item">
          <a href="{{route('supplier.index')}}" class="nav-link link-dark @if($active == 'supplier') active @endif">Supplier </a>
        </li>
      </ul>
        <div class="dropdown text-end" style="margin-right:40px;">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            @if (Auth::user()->avatar=='profile.jpg')
            <img src="{{asset('/img/default.jpg')}}" alt="mdo" width="32" height="32" class="rounded-circle">

            @else
            <img src="{{asset('storage/'.Auth::user()->avatar)}}" alt="mdo" width="32" height="32" class="rounded-circle">
            @endif
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
            <li><a class="dropdown-item" href="{{route('users.index')}}">Account</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
          </ul>
       
     </div>
    </div>
  </div>
</nav>
