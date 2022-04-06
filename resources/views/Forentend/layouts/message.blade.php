 @if(session('success'))
   <div class="alert alert-success " style="text-align: center;">
   {{session('success')}}

     </div>
   @endif

          @if(session('danger'))
   <div class="alert alert-danger " style="text-align:center;">
   {{session('danger')}}

     </div>
   @endif


   
                    @if ($errors->any())
    <div class="alert alert-danger"  style="text-align:center;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
