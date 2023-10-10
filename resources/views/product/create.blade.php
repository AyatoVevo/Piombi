<x-layout>
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <h1 class="display-1">Product creation</h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form class="card p-5 shadow" action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input name="name" type="text" class="form-control" id="name" value="{{old('name')}}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <input name="description" type="text" class="form-control" id="description" value="{{old('description')}}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image:</label>
                        <input name="image" type="file" class="form-control" id="image">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category:</label>
                        <select name="category" class="form-control" id="category">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Body:</label>
                        <textarea name="body" class="form-control" wrap='hard' id="body" cols="30" rows="7">{{old('body')}}</textarea>
                    </div>

                    <div class="mt-2">
                        <button class="btn btn-info">Insert</button>
                        <a href="btn btn-outline-info" href="{{route('products')}}"></a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-layout>