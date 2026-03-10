@extends('layout.app')
@section('content')
    @include('component.MenuBar')
    @include('component.login')
    @include('component.TopBrands')
    @include('component.footer')


    <script>
        (async () => {
            await Category();

            await TopBrand();
        })()
    </script>
@endsection

