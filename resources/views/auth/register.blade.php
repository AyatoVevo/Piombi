<x-layout>
    <div class="container-fluid p-1 text-center text-white">
        <div class="row justify-content-center m-nav">
            <h1 class="display-1">
                Register
            </h1>
        </div>
    </div>

   
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @if ($errors->any())
                    <div class="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="card p-5 shadow" action="{{route('register')}}" method="post">
                @csrf

                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input name="name" type="text" class="form-control" id="username" value="{{old('name')}}">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input name="email" type="email" class="form-control" id="email" value="{{old('email')}}">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input name="password" type="password" class="form-control" id="password" value="{{old('password')}}">
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password:</label>
                        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" value="{{old('password_confirmation')}}">
                    </div>

                    <div class="mt-2">
                        <button class="btn bg-info text-white">Register</button>
                        <p class="small mt-2">Already have an account? <a href="{{route('login')}}">Click here!</a></p>
                    </div>
                </form>


            </div>
        </div>
    </div>



</x-layout>