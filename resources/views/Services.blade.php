<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Servizi</title>
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
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/services">Servizi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about_us">Chi siamo</a>
        </li>
       
      
      </ul>
     
    </div>
  </div>
</nav>
<header>
    <div class="container_fluid header ">
        <div class="row h-100">
         <div class="col-12 h-25 justify-content-center aling-items-center">
            <h2 class="text-white text-color display-5 text-center">Servizi</h2>
         </div>
         <div><h1 class="text-white text-color text center ps-4">Servizi & Esperienze: Un Viaggio nel Gusto Artigianale
Che tu stia cercando una serata indimenticabile, la birra perfetta per il tuo weekend o un tour tra i segreti della luppolatura, ecco tutto ciò che le nostre eccellenze artigianali hanno da offrirti!</h1></div>
      
            </div>
        </div>
    </div>
</header>
<section>
    <div class="container brewery-height">
        <div class="row h-100 justify-content-around align-items-center">
            @foreach($services as $service)
            <div class="col-4 md-4">
                <div class="card" style="width: 18rem;">
  <img src="{{$service['img']}}" class="card-img-top card-img" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$service['name']}}</h5>

    <a href="{{route('services_detail', ['id'=>$service['id']])}}" class="btn btn-primary">Scopri i servizi</a>
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