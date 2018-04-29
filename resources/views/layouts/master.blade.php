<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Vue SPA</title>
        <link rel="stylesheet"  href="/css/app.css">

       
       
    </head>
    <body>

    <div id="app">
       <nav>
          <ul class="nav nav-pills pull-right">
              <router-link to="/" tag="li">
                 <a >Home</a>

              </router-link>
              <router-link to="/about" tag="li">
                 <a >About</a>

              </router-link>
           
          </ul>
        </nav>
         
        <router-view></router-view>
    </div>
    <script src="/js/app.js"></script>
       
    </body>
</html>
