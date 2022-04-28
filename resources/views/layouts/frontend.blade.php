<!DOCTYPE html>
<html lang="en">

<head>
  @include('includes.head')
  <link rel="stylesheet" href="/assets/css/responsive.css" />

  @livewireStyles
</head>

<body>
  <div id="ec-overlay"><span class="loader_img"></span></div>

  @include('includes.header')

  @yield('content')

  @livewireScripts

  @include('includes.footer')

</body>

</html>
