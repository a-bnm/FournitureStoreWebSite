<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" class="href">
    <title>Store</title>
</head>
<body style="overflow-x:hidden h-100">
    <div class="container min-vw-100 h-100">
        @include('headerfooter.header')
        
        <div class="row  mx-5 my-3 min-vw-70">
            @foreach ($Fournitures as $Fourniture )
              <div class="col-4 ps-2 pe-2">
                <div class="card h-100">
                    <img class="rounded img-thumbnail img-fluid" src="{{ URL('storage/Meuble1.jpg') }}" alt="No image found">
                    <div class="card-body text-white" style="background-color: rgb(228, 182, 122); ">
                        <h5 class="card-title">
                           {{ $Fourniture -> name }}
                        </h5>
                        <p class="card-text">
                            {{ $Fourniture -> small_description }}
                            {{ $Fourniture -> price }}$
                        </p>
                        <a href="/{{ $Fourniture -> id }}" class="btn btn-secondary">More details</a>
                    </div>
                </div>
              </div>
            @endforeach
          
            
        </div>

        @include('headerfooter.footer')
    </div>
    
</body>
</html>