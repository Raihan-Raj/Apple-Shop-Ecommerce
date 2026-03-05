@extends('layout.app')
@section('content')
    @include('component.MenuBar')
    @include('component.HeroSlider')
    @include('component.TopCategories')
    @include('component.TopBrands')
    @include('component.ExclusiveProducts')
    @include('component.footer')
    <script>
        (async () => {
            await Category();
            await Hero();
            await TopCategory();      
            await TopBrand();
            await loadProducts();

        })()
    </script>
@endsection