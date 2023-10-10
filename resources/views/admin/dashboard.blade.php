<x-layout >
    

    <section class="mtop">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <table class="table table-striped table-hover border">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category</th>
                    <th scope="col">Created at</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->Category->name}}</td>
                    <td>{{$product->created_at->format('d/m/Y')}}</td>
                    <td>
                        <a href="{{route('product.show', compact('product'))}}" class="btn btn-info wh">Read</a>
                        <a href="{{route('product.edit', compact('product'))}}" class="btn btn-info wh">Edit</a>
                        <form action="{{route('product.destroy', compact('product'))}}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </section>

</x-layout>