@extends('layout.app')
@section('content')
    @include('component.MenuBar')
    @include('component.PaymentMethodList')
    @include('component.CartList')
    @include('component.TopBrands')
    @include('component.Footer')


    <script>
        (async () => {
            await Category();
            await CartItem();
            await TopBrand();
        })()
    </script>
@endsection