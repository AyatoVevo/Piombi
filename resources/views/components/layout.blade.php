<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Self Makers</title>

    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/081c0a950a.js" crossorigin="anonymous"></script>
    <!-- css -->
    @vite (['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
  </head>

  <body class="m-nav">

    <x-navbar/>
    {{$slot}}

    <x-footer/>
   @livewireScripts
  </body>
</html>