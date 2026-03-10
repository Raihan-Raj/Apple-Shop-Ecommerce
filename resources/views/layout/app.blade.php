<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AppleShop_Ecommerce</title>
<link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/carousel.css') }}">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<!-- 1️⃣ Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- 2️⃣ DataTables Bootstrap 5 CSS -->
{{--
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css"> --}}

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


<!-- 3️⃣ Axios -->

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<!-- 4️⃣ jQuery (ONLY ONCE) -->

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

<!-- 5️⃣ Bootstrap 5 JS Bundle (IMPORTANT) -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- 6️⃣ DataTables Core JS -->
{{--
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script> --}}

<!-- 7️⃣ DataTables Bootstrap 5 JS -->
{{--
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script> --}}

<!-- 8️⃣ DataTables Responsive JS -->
{{--
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script> --}}

</head>

<body>

    <div class="preloader">
        <div class="spinner"></div>
    </div>

    <div>
        @yield('content')
    </div>
    


   
    
   
</body>
</html>