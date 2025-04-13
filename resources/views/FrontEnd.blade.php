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

  <x-navbar />
  <x-title :judul="$judul['judul']" :deskripsi="$judul['deskripsi']" :paragraf="$judul['paragraf']"
    :href="$href[0]['downloads']" :share="$share[0]['share']" />
    <x-konten :titleK="$tengah['titleK']" :button="$tengah['button']" :button1="$tengah['button1']" :button2="$tengah['button2']" :button3="$tengah['button3']" :button4="$tengah['button4']" :button5="$tengah['button5']" :button6="$tengah['button6']" :button7="$tengah['button7']" :button8="$tengah['button8']" :texttengah="$tengah['texttengah']" :texttengah1="$tengah['texttengah1']" :button9="$tengah['button9']" :text="$kiri['text']" :text1="$kiri['text1']" :text2="$kiri['text2']" :text3="$kiri['text3']" :text4="$kiri['text4']" :text5="$kiri['text5']" :text6="$kiri['text6']" :text7="$kiri['text7']" :text8="$kiri['text8']" :text9="$kiri['text9']" :text10="$kiri['text10']"  :textkanan="$kanan['textkanan']" :textkanan1="$kanan['textkanan1']" :textkanan2="$kanan['textkanan2']" :textkanan3="$kanan['textkanan3']" :textkanan4="$kanan['textkanan4']" :textkanan5="$kanan['textkanan5']" :textkanan6="$kanan['textkanan6']" :textkanan7="$kanan['textkanan7']" :textkanan8="$kanan['textkanan8']" :textkanan9="$kanan['textkanan9']" :textkanan10="$kanan['textkanan10']" />
  <x-comunnity />
  <x-footer />
</body>

</html>
