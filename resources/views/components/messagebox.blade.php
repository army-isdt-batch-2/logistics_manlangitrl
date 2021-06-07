        @if (session('error'))
        <div class="col-md-12">
            <span class="alert alert-sm alert-danger">
        {{ session('error') }}
            </span>  
        </div>
        @endif
      
        @if (session('success'))
        <div class="col-md-12">
            <span class="alert alert-sm alert-success">
        {{ session('success') }}
            </span>  
        </div>
        @endif