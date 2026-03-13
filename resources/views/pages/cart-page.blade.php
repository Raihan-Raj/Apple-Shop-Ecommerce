@extends('layout.app')
@section('content')
  @include('component.MenuBar')
  @include('component.CartList')
  @include('component.TopBrands')
  @include('component.Footer')


  <script>
        (async () => {
            await Category();
          
            await TopBrand();
        })()
    </script>
@endsection