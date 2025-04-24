@extends("parent")

@section("title","homepage")

@section('content')
    <div class="container-fluid">
        <img src="https://picsum.photos/1000/200" class="w-100"/>
    </div>


    <div class="container">
        <div class="row">
            @foreach ($products as $item)


            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ $item->image }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h2>{{ $item->title }}</h2>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $products->links() }}
        </div>
    </div>
@endsection
