<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    @vite('resources/js/app.js')

    <!-- @if(App::environment('production'))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script type="module" src="http://localhost:5173/resources/scripts/main.ts"></script>
    @endif -->
    
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
</html>