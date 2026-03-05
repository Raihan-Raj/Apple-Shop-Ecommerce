@extends('layout.app')
@section('content')
 @include('component.MenuBar')
 @include('component.ByBrandList')
 @include('component.TopBrands')
 @include('component.Footer')

 <script>
    (async () => {
      await Category();
      await Bybrand();
      await TopBrand();
    })()
 </script>
 @endsection