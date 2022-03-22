<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" class="href">
    <title>Main page</title>
</head>
<body style="overflow-x:hidden">
    <div class="container min-vw-100   " style="background-color: rgb(71, 51, 20); ">
        @include('headerfooter.header')
        
        <div class="row min-vw-100 min-vh-100" >
            <div class="col-4 rounded mt-5 text-white pt-5"style="background-color: rgb(71, 51, 20); ">
                <h1 class="card-title">
                    Modern Fourniture
                </h1>
                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis praesentium dolor optio corrupti cupiditate ab fuga qui quis beatae eveniet voluptatibus esse quos voluptates magni, libero accusamus blanditiis vero vitae?
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis praesentium dolor optio corrupti cupiditate ab fuga qui quis beatae eveniet voluptatibus esse quos voluptates magni, libero accusamus blanditiis vero vitae?
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis praesentium dolor optio corrupti cupiditate ab fuga qui quis beatae eveniet voluptatibus esse quos voluptates magni, libero accusamus blanditiis vero vitae?
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis praesentium dolor optio corrupti cupiditate ab fuga qui quis beatae eveniet voluptatibus esse quos voluptates magni, libero accusamus blanditiis vero vitae?

                </p>
            </div>
            
            <div class="col-8 mt-5 rounded " style="background-image: url('storage/magasin.jpg') ;background-size:cover;">
                
            </div>
            
            
        </div> 
    
        
        <div class="row  mx-5 my-3 min-vw-70">
            @foreach ($Fournitures as $Fourniture )
              <div class="col-4 ps-2 pe-2">
                <div class="card h-100 ">
                    <img class="rounded img-thumbnail img-fluid w-100" src="{{ URL('storage/Meuble1.jpg') }}" alt="No image found">
                    <div class="card-body text-white  " style="background-color: rgb(228, 182, 122); ">
                        <h5 class="card-title">
                           {{ $Fourniture -> name }}
                        </h5>
                        <p class="card-text">
                            {{ $Fourniture -> small_description }}
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