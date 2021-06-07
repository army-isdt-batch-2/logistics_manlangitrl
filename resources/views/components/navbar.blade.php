
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white">
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
          <a  href="{{route('storage.index')}}" class="nav-link link-dark @if($active == 'storage') active @endif">Storage</a>
        </li>
        <li class="nav-item">
          <a href="{{route('supplier.index')}}" class="nav-link link-dark @if($active == 'supplier') active @endif">Supplier </a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
