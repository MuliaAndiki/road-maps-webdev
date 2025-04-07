<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>FrontEnd</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>

<body>
  <div class="h-[100vh] w-[100vw] bg-slate-900">
    <x-navbar />
    <x-title :judul="$judul['judul']" :deskripsi="$judul['deskripsi']" :paragraf="$judul['paragraf']"
      :href="$href[0]['downloads']" />
    <div class="h-screen w-screen bg-white" title="Konten">
      <!-- Konten -->
    </div>
    <x-comunnity />
    <x-footer />
  </div>
</body>

</html>