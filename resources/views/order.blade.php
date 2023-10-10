<x-layout>
    <div class="container-fluid p-5 bg-dark text-center wh">
        <div class="row justify-content-center">
            <h1 class="display-1">Richiedi un preventivo</h1>
        </div>
    </div>


    <section>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-8">
                    @if ($errors->any())
                        <div class="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
        
                    <form class="card p-5 shadow" action="{{route('order.submit')}}" method="post">
                    @csrf   
                    
                    <div class="mb-3 ">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{old('email') ?? Auth::user()->email}}">
                    </div>

                    <p class="mt-4">Seleziona prodotti</p>
        
                        <div class="row justify-content-center my-3">

                            @foreach($products as $product)

                                <div class="col-12 my-1" >
                        
                                    <label style="width: 60%">
                                        <input type="checkbox" name="orders[]"  value="{{$product->name}}">
                                        {{$product->name}}
                                    </label>
                                    <input style="width: 30%" type="number" name="quantities[]" placeholder="Quantità">
                                </div>
                                

                                
                            @endforeach
                        </div>
                        
                        
                        
                        <div class="my-3 d-flex flex-column">
                            <label for="message" class="form-label">Specificare gentilmente peso richiesto (in lavorazione)</label>
                            <textarea name="message" id="message" cols="30" rows="10">{{old('message')}}</textarea>
                        </div>

                        <div class="mt-2">
                            <button class="btn btn-info wh">Invia mail</button>
                        </div>
                    </form>
        
        
                </div>
            </div>
        </div>
    </section>
</x-layout>




