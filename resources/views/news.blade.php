@extends("header")
@section("content")

<div class="container-fluid">
    <div class="card mb-3">
    <img class="card-img-top" src="{{ asset('img/AAGYM1.JPG')}}" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    </div>
    <div class="card">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    <img class="card-img-bottom" src="{{ asset('img/ustAher1.JPG')}}" alt="Card image cap">
    </div>
</div>

@endsection