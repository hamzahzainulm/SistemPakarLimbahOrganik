@extends("header")

@section("content")
<div class="jumbotron">
  <h1 class="display-4">CV. Biomethagreen Motekar</h1>
  <p class="lead">Memberikan solusi untuk mengolah limbah menjadi energi alternatif dan pupuk organik.</p>
  <hr class="my-4">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('img/AAGYM1.JPG')}}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('img/ustAher1.JPG')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('img/AAGYM2.JPG')}}" alt="Third slide">
      </div>
    </div>
  </div>
  <hr class="my-4">
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Tentang Kami</a>
  </p>
</div>
<hr class="my-5">

<div class="container">
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/AAGYM2.JPG')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/ustAher1.JPG')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/AAGYM1.JPG')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
</div>
@endsection
