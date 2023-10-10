<x-layout>
    <x-header/>

    @if (session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
    @endif
        
    {{-- prodotti --}}
    <section class="container-fluid bg-more">
        <div class="row row-height">
            <div class="col-12 wh d-flex flex-column justify-content-center align-items-center">
                <h2>Dai un occhiata ai nostri prodotti!</h2>
                <i class="fa-solid fa-arrow-down fa-2x"></i>
            </div>
        </div>
    </section>

    <section class="container-fluid">
        <div class="row row-height">

            
            <div class="col-12 col-md-4 col-lg-4 col-custom col1">
                <a href="{{route('products')}}" class="anchorsize d-flex align-items-center justify-content-center"><h3 class="wh fs-2">Lancio</h3></a>               
            </div>
            <div class="col-12 col-md-4 col-lg-4 col-custom col2">
                <a href="{{route('products')}}" class="anchorsize d-flex align-items-center justify-content-center"><h3 class="wh fs-2">Feeders</h3></a>
            </div>
            <div class="col-12 col-md-4 col-lg-4 col-custom col3">
                <a href="{{route('products')}}" class="anchorsize d-flex align-items-center justify-content-center"><h3 class="wh fs-2">Inline</h3></a>
            </div>
           
        </div>

    </section>




</x-layout>