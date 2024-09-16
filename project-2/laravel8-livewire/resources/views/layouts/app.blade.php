<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Livewire</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  @livewireStyles()
</head>
<body>
  {{ $slot }}

  <script src="{{asset('js/app.js')}}"></script>
  @livewireScripts()
</body>
</html>
