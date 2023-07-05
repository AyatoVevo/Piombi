<x-layout>
    <div class="container-fluid p-5 text-center wh">
        <div class="row justify-content-center">
            <h1 class="display-1">
                {{$product->name}}
            </h1>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-around">
            <div class="col-12 col-md-8">
                <img src="{{$product->img}}" alt="" class="img-fluid my-3">
                    <div class="text-center">
                        <h2>{{$product->name}}</h2>
                    </div>
                <hr>
                <p>{{$product->description}}</p>
                <div class="text-center">
                    <a href="{{route('prodotti')}}" class="btn btn-info text-white">Torna indietro</a>
                </div>
            </div>
        </div>
    </div>

</x-layout>