<div class="row align-items-start  bg-gradient " style="background-color: rgb(71, 51, 20); ">
    <div class="col-6 py-2 row ">
        <div class="col-2"></div>
        <p class="col-2 text-white px-3 fs-4 fw-bold">FourCom</p>
        <a href="/" class="col-2 text-decoration-none text-white px-3 fs-4 fw-bold">Home</a>
        <a href="/store"  class="col-2 text-decoration-none text-white px-3 fs-4 fw-bold">Store</a>
        <div class="dropdown col-2">
            <button class="btn btn-light fw-bold dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Managment
            </button>
            <ul class="dropdown-menu bg-secondary " aria-labelledby="dropdownMenuButton1">
                <li><a href="/ToAdd" class="dropdown-item text-white fw-bold" >Add a fourniture</a></li>
                <li><a href="/ToUpdate" class="dropdown-item text-white fw-bold">Update an article</a></li>
                <li><a href="/ToDrop" class="dropdown-item text-white fw-bold">Drop a fourniture</a></li>
            </ul>
        </div>
        
    </div>
    <div class="col-6 text-end py-2 px-4">
        @if (Route::has('login'))
          <div class=" top-0 right-0 px-6 py-1 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-decoration-none fs-6  text-white">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-decoration-none fs-6  px-3 text-white">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-decoration-none text-white  text-sm fs-6  text-white px-3">Register</a>
                @endif
            @endauth
          </div>
        @endif
    </div>
</div>


