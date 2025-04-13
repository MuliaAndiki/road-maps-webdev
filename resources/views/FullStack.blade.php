<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fullstack</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>

<body>
  <div class="pt-[1rem] bg-slate-900 pb-[1rem]">
    <x-navbar />
  </div>
  <x-title :judul="$judul['judul']" :deskripsi="$judul['deskripsi']" :paragraf="$judul['paragraf']"
    :href="$href[0]['downloads']" :share="$share[0]['share']" />
  <x-konten :kiri="$kiri" :tengah="$tengah" :kanan="$kanan" />
  <x-comunnity />
  <x-footer />
</body>

</html>