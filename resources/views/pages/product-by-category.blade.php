@extends('layout.app')
@section('content')
 @include('component.MenuBar')
 @include('component.ByCategoryList')
 @include('component.TopBrands')
 @include('component.Footer')

 <script>
    (async () => {
      await Category();
      await ByCategory();
      await TopBrand();
    })()
 </script>
 @endsection