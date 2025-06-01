<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>FrontEnd</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  <link rel="icon" href="/asset/Faicon.png" type="image/x-icon">
</head>

<body>
  <main class="overflow-x-hidden">
    <div class="pt-[1rem] bg-slate-900 pb-[1rem]">
      </div>
      <x-title :judul="$judul->judul ?? ''" :deskripsi="$judul->deskripsi ?? ''" :paragraf="$judul->paragraf ?? ''"
        :href="$href->downloads ?? ''" :share="$share->share ?? ''" :keterangan="$keterangan"  />
      <x-konten
        :kiriItems="$kiriItemsFormatted"
        :tengahContent="$tengahContent"
        :kananItems="$kananItemsFormatted"
    />
      <div class="my-10">
          <x-comunnity />
      <x-footer /> 
      </div>
  </main>
  

</body>

</html>