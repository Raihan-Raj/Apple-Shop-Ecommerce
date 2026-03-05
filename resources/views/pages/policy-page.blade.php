@extends('layout.app')
@section('content')
 @include('component.MenuBar')
 @include('component.policyList')
 @include('component.TopBrands')
 @include('component.Footer')

 <script>
    (async () => {
      await Category();
      await policy();
      await TopBrand();
    })()
 </script>
 @endsection