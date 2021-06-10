        @if (session('error'))
        <div class="alert alert-sm alert-danger">
            <span>
          {{ session('error') }}
            </span>  
        </div>
        @endif 
      
        @if (session('success'))
        <div class="alert alert-sm alert-success">
           <span>
        {{ session('success') }}
            </span>  
        </div>
        @endif