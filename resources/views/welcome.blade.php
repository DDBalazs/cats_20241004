    @extends('layout')
    @section('content')
    <div class="container pb-2">
        <h1 class="text-center display-6 py-3">Cats pics</h1>
        <div class="row">
            @foreach ($result as $row)
                <div clas="col-md-3">
                    <p>
                        <a href="/cats-page/{{$row->id}}">
                        <img class="w-100" src="{{asset('img/'.$row->id.'.jpg')}}" alt="{{$row->id}}.'.jpg'">
                        </a>
                    </p>
                    <hr>
                </div>
            @endforeach
        </div>
    </div>

@endsection
