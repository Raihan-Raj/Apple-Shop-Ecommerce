@extends('layout.app')
@section('content')
  @include('component.MenuBar')
  @include('component.ProductDetails')
  @include('component.TopBrands')
  @include('component.Footer')


  <script>
    (async () => {
      await Category();
      await productDetails();
      await TopBrand();
    })()
 </script>
@endsection