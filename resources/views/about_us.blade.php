<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chi siamo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
  </head>
  <body>
   
    <nav class="navbar navbar-expand-lg bg-dark border-bottom" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('services')}}">Servizi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('about_us')}}">Chi siamo</a>
        </li>
       
      
      </ul>
     
    </div>
  </div>
</nav>
<header>
    <div class="container_fluid header ">
        <div class="row h-100 justify-content-around align-items-center">
          <div class="col-6">
            <h2 class="text-white text-color text-center">Chi siamo</h2>
            <p class="text-white text-color">Benvenuti su Breweries Italy, la casa digitale per tutti gli appassionati di birra artigianale e cultura brassicola italiana.
La nostra avventura nasce da una passione semplice ma profonda: il viaggio alla scoperta delle eccellenze indipendenti del nostro Paese. L'Italia sta vivendo una vera e propria rivoluzione brassicola, fatta di master brewer creativi, ingredienti a chilometro zero, microbirrifici di quartiere e brewpub storici capaci di raccontare un territorio attraverso una pinta.</p>
          </div>
          <div class="col-6">
            <img class="photo-team me-5" src="/media/team.jpeg" alt="team">
          </div>

            </div>
        </div>
    </div>
</header>
<section>
  <div class="container brewery-height">
    <div class="row h-100 justify-content-around align-items-center">
    @foreach ($all_breweries as $brewery)
     <div class="col-4 md-4">
        <div class="card text-white" style="width: 18rem;">
  <div class="card-body text-white">
    <h5 class="card-title text-white">{{$brewery['name']}}</h5>
    <h6 class="card-subtitle mb-2  text-white">{{$brewery['location']}}</h6>
    <a href="{{route('detail_page',['id'=>$brewery['id']])}}" class="card-link text-white">Leggi di più</a>
  </div>
</div>
     </div>
    @endforeach
   
  </div>

  </div>

</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>