<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" class="href">
    <title>Document</title>
</head>
<body style="overflow-x:hidden">
    <div class="container min-vw-100">
        @include('headerfooter.header')
      
        <div class="row ps-5 pe-5 mt-5 mb-5 justify-content-center">
            
           <form action="/Managment"  enctype="multipart/form-data" method="POST" class="w-50 form-control bg-secondary bg-gradient input-group row ps-5 pe-5 mt-5 mb-5 text-center " >
                @csrf
                @method('PUT')
               <h2 class="title fw-bold">Fill the form</h2>
               <input type="text" name="name" placeholder="Name..." class="row m-2 rounded  form-control-sm border-0">
               <input type="text" name="price" placeholder="Price.." class="row m-2 rounded  form-control-sm border-0">
               <input type="text" name="quantity" placeholder="Quantity..." class="row m-2 rounded  form-control-sm border-0">
               <input type="file" class="row m-2 form-control rounded form-control-sm w-100" name="image1">
               <input type="file" class="row m-2 form-control rounded form-control-sm w-100" name="image2">
               <input type="file" class="row m-2 form-control rounded form-control-sm w-100" name="image3">
               <textArea name="small_description" class="row m-2 rounded  form-control-sm border-0">Small description</textArea>
               <textArea name="description" class="row m-2 rounded  form-control-sm border-0">Description</textArea>
               <button type="submit" class="btn btn-danger row me-2 ms-2 mt-4 mb-4 rounded  form-control-sm border-0">Submit</button>
            </form>
        </div>

        @include('headerfooter.footer')
    </div>
    
</body>
</html>
