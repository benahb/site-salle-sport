<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" defer></script>
          <title>{{ config('app.name') }} - @yield('title')t</title>
   
          @vite(['resources/css/app.css', 'resources/js/app.js'])
    <head>
    </head>
              
    <body>
    <header>
                  <a href="#" class="logo"><span>F</span>itown</a>
    <section class="content">
       <div class="menutoggle">
           <ul class="navbar">
                <li class="accueil">
                 <a href="{{ route('main.accueil') }}">Accueil</a>
                 <!-- <h2>fitown votre club de remise en forme vous acceuille 7/7</h2> -->
                </li>
                <li class="cours">
                    <a href="{{ route('main.cours') }}">cours</a>
                </li>
                <li class="tarifs">
                    <a href="{{ route('main.tarifs') }}">tarifs</a>
                </li>
                <li class="contact">
                    <a href="{{ route('main.contact') }}">contact</a>
                </li>
                <li class="mentions-legales">
                    <a href="{{ route('main.mentions-legales') }}">mentions-legales</a>
                </li>
            </ul>
        </div>
    </section>
    </header>
    <footer>
          <link rel="mentions-legales" href="mentions-legales">
    </footer>
    @yield('content')
    
    </body>
    </html>