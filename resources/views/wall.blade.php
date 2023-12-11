<h1>Users</h1>

{{-- <p>{{$users->name}}</p> --}}

<p>{{$postsByUser}}</p>

<img src="{{$postsByUser->find(14)->image}}" alt="">

@section('content')
    <div class="container">
        @include('components.post-form')
    </div>
@endsection