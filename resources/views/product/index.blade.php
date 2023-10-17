<x-layout>
    
    <header class="bg-header-prodotti d-flex justify-content-start align-items-center ps-4">
        <h1 class="text-custom-prodotti">I nostri prodotti</h1>
    </header>

    {{-- cards --}}
    {{-- <section class="bg-products">
        <div class="container">

            <div class="row justify-content-between">
                <div class="col-lg-auto col-12 d-flex justify-content-center py-2">
                    <a href="{{route('products')}}" class="fs-5 catBor">Tutti i prodotti</a>
                </div>
                @foreach($categories as $category)
                    
                    <div class="col-lg-auto col-12 d-flex justify-content-center py-2">

                        <a href="{{route('product.byCategory', ['category' => $category->id])}}" class="fs-5 catBor">{{$category->name}}</a>
                    </div>
                    
                @endforeach
            </div>

        @if (session('message'))
            <div class="alert alert-success text-center">
                {{session('message')}}
            </div>
        @endif

            <div class="row w-100">

                @foreach ($products as $product)
                <div class="col-12 col-md-6 col-lg-4 my-5 d-flex justify-content-center">
                
                    <div class="card" style="width: 18rem;">
                        <img src="{{Storage::url($product->img)}}" class="img-fluid" alt="...">
                        <div class="card-body d-flex flex-column justify-content-around">
                            <h2 class="card-title fs-5 border-bottom border-solid border-black">{{$product->name}}</h2>
                            <p class="card-text">{{$product->description}}</p>
                            <a href="{{route('product.show', compact('product'))}}" class="btn btn-primary align-self-start">Leggi di più!</a>
                        </div>
                    </div>
                </div>
                @endforeach
            
            </div>

        </div>
    </section> --}}

    <section class="bg-products">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8 py-5">
                    <h1 class="text-center wh">!In manutenzione!</h1>
                    <h2 class="text-center wh py-5">Galleria temporanea</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4 my-5 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="/img/dalancioA.png" class="img-fluid" alt="...">
                        <div class="card-body d-flex flex-column justify-content-around">
                            <h2 class="card-title fs-5 border-bottom border-solid border-black">Zip Hex con girella</h2>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 my-5 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="/img/dalancioB.png" class="img-fluid" alt="...">
                        <div class="card-body d-flex flex-column justify-content-around">
                            <h2 class="card-title fs-5 border-bottom border-solid border-black">Zip normale con girella</h2>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 my-5 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="/img/feederA.png" class="img-fluid" alt="...">
                        <div class="card-body d-flex flex-column justify-content-around">
                            <h2 class="card-title fs-5 border-bottom border-solid border-black">Gripper con girella</h2>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 my-5 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="/img/inline quadrati.png" class="img-fluid" alt="...">
                        <div class="card-body d-flex flex-column justify-content-around">
                            <h2 class="card-title fs-5 border-bottom border-solid border-black">inline quadrati con tubo in silicone</h2>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 my-5 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="/img/feederB.png" class="img-fluid" alt="...">
                        <div class="card-body d-flex flex-column justify-content-around">
                            <h2 class="card-title fs-5 border-bottom border-solid border-black">Feeder trio</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>











