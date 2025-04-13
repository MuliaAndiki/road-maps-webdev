<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body>
    <div class="bg-slate-900 min-h-screen w-screen">
        <div id="header" class="py-[4rem]">
            <div class="pb-[1rem] pt-[1rem]">
                <x-navbar />
            </div>
            <div class="border-b-2 h-[10rem]">
                <div class="flex justify-center ">
                    <h1 data-aos="fade-left"
                        class="mb-2 bg-gradient-to-b from-amber-50 to-purple-500 bg-clip-text text-2xl font-bold text-transparent sm:mb-4 sm:text-5xl sm:leading-tight ">
                        WebDeveloper Roadmaps</h1>
                </div>
                <div class="flex justify-center">
                    <p class="text-white text-2x1 italic ">Bingung mulai dari mana? Roadmap ini bantu kamu belajar
                        web
                        development langkah demi langkah. Simpel, terarah, dan cocok buat pemula maupun yang mau naik
                        level! .
                    </p>
                </div>
            </div>
        </div>
        {{-- Main --}}
        <div id="main" class="items-center flex justify-center">
            <div id="tabel" class="grid grid-cols-3 grid-rows-1 gap-[3rem]">
                <a href="/frontend">
                    <div data-aos="fade-right"
                        class="border-2 flex items-center justify-start h-[3rem] w-[13rem] rounded-md hover:border-blue-50 duration-[0.3s] p-[1rem]">
                        <h1 class="text-white">Frontend</h1>
                    </div>
                </a>
                <a href="/backend">
                    <div data-aos="fade-up"
                        class=" border-2 flex items-center justify-start h-[3rem] w-[13rem] rounded-md hover:border-blue-50 duration-[0.3s] p-[1rem]">
                        <h1 class="text-white">Backend</h1>
                    </div>
                </a>
                <a href="/fullstack">
                    <div data-aos="fade-left"
                        class="border-2 hover:border-blue-50 flex items-center justify-start h-[3rem] w-[13rem] rounded-md duration-[0.3s] p-[1rem]">
                        <h1 class="text-white">Full Stack</h1>
                    </div>
                </a>
            </div>
        </div>

        {{-- Foto --}}
        <div id="Foto" class="">
            <div class="flex justify-center py-[2rem]">
                <h1 class="font-bold text-white :">Tools :</h1>
            </div>
            <div class="grid grid-cols-4 grid-rows-1 gap-[3rem] py-[1rem] px-8 h-[16rem]">
                @foreach ($foto as $fotos)
                    <x-foto-card :foto="$fotos['foto']" />
                @endforeach
            </div>
        </div>
        {{-- Guides --}}
        <div class="bg-white " id='container-guides'>
            <div id="Guide-Container" class=" flex justify-center pt-[2rem]">
                <div id="title" class="">
                    <h1 class="text-2xl font-bold">Guides :</h1>
                </div>
            </div>

            <div id="tabel-container" class="flex justify-center">
                <div class="grid grid-cols-1 grid-rows-7 gap-4 w-[80%]" id="tabel">
                    @foreach ($guides as $item)
                        <x-guides-card :title="$item['title']" :description="$item['description']" :link="$item['link']" />
                    @endforeach
                </div>
            </div>

            {{-- Video --}}
            <div class="flex justify-center pt-[2rem]" id="container-video">
                <div id="title" class="">
                    <h1 class="font-bold text-2xl">Video :</h1>
                </div>
            </div>

            <div id="tabel" class="flex justify-center border-b-2 pb-[2rem]">
                <div class="grid grid-cols-1 grid-rows-7 gap-4 w-[80%]">
                    @foreach ($videos as $video)
                        <x-video-card :title="$video['title']" :description="$video['description']"
                            :link="$video['link']" />
                    @endforeach
                </div>
            </div>

            {{-- Join the Community --}}
            <x-comunnity />
            {{-- Footer --}}
            <x-footer />
        </div>
    </div>
    </div>

</body>

</html>