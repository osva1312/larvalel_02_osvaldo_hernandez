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
    <div class="container_fluid header services ">
        <div class="row text-white ">
         <div class="col-12 h-25 justify-content-center aling-items-center">
            <h2 class="text-white text-color display-5 text-center">{{$service['name']}}</h2>
         </div>
         <div class="col-4 md-4">
           <h5><strong>Food: {{$service['food']}}</strong></h5>
           <h5><strong>bar: {{$service['bar']}}</strong></h5>
         </div>
         <div class="col-8 md-4">
          <img src="{{$service['img']}}" alt="poster di {{$service['name']}}">
         </div>
         
         
        
        </div>
    </div>
</header>
 <a class="button-style" href="/services">Torna indietro</a>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>