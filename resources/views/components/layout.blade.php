<!doctype html>
<html lang="en">
  <head>
      <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-96VSYSXWCP"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-96VSYSXWCP');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Piombi Di Vale</title>

    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/081c0a950a.js" crossorigin="anonymous"></script>
    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- css -->
    @vite (['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
  </head>
  
  

  <body class="m-nav bg-products">

    <x-navbar/>
    {{$slot}}

    <x-footer/>
   @livewireScripts
  </body>
</html>