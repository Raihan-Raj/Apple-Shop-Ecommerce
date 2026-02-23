<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AppleShop_Ecommerce</title>
   
     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/TopCategories.css') }}">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>



    <div>
        @yield('content')
    </div>
    

   <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
   
    
   
</body>
</html>