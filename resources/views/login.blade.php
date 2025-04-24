@extends("parent")
@section("title","login page ")

@section('content')
    <div class="container">
        <div class="col-4 mx-auto mt-5">
            <div class="card">
                <div class="card-header">Login Here</div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" placeholder="e.g abc@gmail.com" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="password" name="password" placeholder="e.g *********" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="submit" name="Login" class="btn btn-dark w-100">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
