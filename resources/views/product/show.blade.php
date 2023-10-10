<x-layout>
    

    <div class="container py-5">
        <div class="row justify-content-around">

            <div class="col-12 col-md-8 col-lg-5">
                <img src="{{Storage::url($product->img)}}" alt="" class="img-fluid my-3">                    
            </div>

            <div class="col-lg-6 col-12 col-md-8 d-flex flex-column justify-content-start">       
                <h2 class="wh">{{$product->name}}</h2>
                <p class="preserveLines wh">{{$product->body}}</p>
                <a href="{{route('products')}}" class="btn btn-info text-white align-self-end mt-5">Torna indietro</a>
            </div>
            
        </div>
    </div>

</x-layout>