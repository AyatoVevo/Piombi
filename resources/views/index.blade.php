<x-layout>
    <header class="bg-header-prodotti d-flex justify-content-start align-items-center ps-4">
        <h1 class="text-custom-prodotti">I nostri prodotti</h1>
    </header>


    {{-- cards --}}
    <section class="bg-products">
        <div class="container">

        

            <div class="row w-100">

                @foreach ($products as $product)
                <div class="col-12 col-md-6 col-lg-4 my-5 d-flex justify-content-center">
                
                    <div class="card" style="width: 18rem;">
                        <img src="{{$product->img}}" class="img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p class="card-text">{{$product->description}}</p>
                            <a href="{{route('products.show', $product)}}" class="btn btn-primary">Leggi di più!</a>
                        </div>
                    </div>
                </div>
                @endforeach
            
            </div>

        </div>
    </section>
</x-layout>