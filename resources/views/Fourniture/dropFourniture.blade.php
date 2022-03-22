<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" class="href">
    <style>
        footer{
           position: absolute; 
           bottom:0; 
           min-width:100vw;
        }
    </style>
    <title>Document</title>
</head>
<body style="overflow-x:hidden">
    <div class="container min-vw-100">
        @include('headerfooter.header')
      
        <div class="container ps-5 pe-5 mt-5 mb-5 ">
            
            <form action="/drop" method="POST" class="form-control bg-secondary bg-gradient input-group row ps-5 pe-5 mt-5 mb-5 text-center " >
               @csrf
               @method('DELETE')
               <h2 class="title fw-bold">Name</h2>
               <input type="text" name="name" placeholder="Name..." class="row m-2 rounded  form-control-sm border-0">
               <button type="submit" class="btn btn-danger btn-lg row me-2 ms-2 mt-4 mb-4 rounded  form-control-sm border-0">Drop</button>
            </form>
        </div>

        @include('headerfooter.footer')
    </div>
    
</body>
</html>