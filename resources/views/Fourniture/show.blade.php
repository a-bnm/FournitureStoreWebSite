<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" class="href">
    <style>
        img{
            width:100vw;
            min-width: 80vh;
        }
       
    </style>
    <title>Show</title>
</head>
<body style="overflow-x:hidden">
    <div class="container min-vw-100">
        @include('headerfooter.header')
        <div class="row m-2">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"  aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"  aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ URL('storage/Meuble1.jpg') }}" class="d-block w-100 " alt="No image found!" >   
                    </div>
                    <div class="carousel-item">
                        <img src="{{ URL('storage/Meuble2.jpg') }}" class="d-block w-100 " alt="No image found!">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ URL('storage/Meuble3.jpg') }}" class="d-block w-100 " alt="No image found!" >
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="row m-4 ">
            <h1 class="fw-bold text-center">{{ $Fourniture -> name }}</h1>
        </div>
        <div class="row m-2 ">
            <p>{{ $Fourniture -> description }}          </p>
            <p class="text-end fs-4 text-success pe-5 m-4">
                {{ $Fourniture -> price }}$ 
            </p>
        </div>
        @include('headerfooter.footer')
    </div>
    
</body>
</html>