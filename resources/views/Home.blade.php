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

  <div class="bg-slate-900 h-screen w-screen">
    <div id="header" class="py-[4rem]">
        <div class="border-b-2 h-[10rem]">
            <div class="flex justify-center ">
              <h1 data-aos="fade-left" class="mb-2 bg-gradient-to-b from-amber-50 to-purple-500 bg-clip-text text-2xl font-bold text-transparent sm:mb-4 sm:text-5xl sm:leading-tight ">WebDeveloper Roadmaps</h1>
            </div>
            <div class="flex justify-center">
              <p class="text-white text-2x1">roadmap.sh is a community effort to create roadmaps, guides and other educational content to help guide developers in picking up a path and guide their learnings.</p>
            </div>
        </div>
    </div>
      {{-- Main  --}}
      <div id="main"class="items-center flex justify-center">
        <div id="tabel" class="grid grid-cols-3 grid-rows-1 gap-[3rem]">
          <a href="#">
              <div class="border-2 flex items-center justify-start h-[3rem] w-[13rem] rounded-md hover:border-blue-50 duration-[0.3s]">
                <h1 class="text-white">Frontend</h1>
              </div>
          </a>
          <a href="#">
              <div class=" border-2 flex items-center justify-start h-[3rem] w-[13rem] rounded-md hover:border-blue-50 duration-[0.3s]">
                <h1 class="text-white">Backend</h1>
              </div>
          </a>
          <a href="#">
              <div class="border-2 hover:border-blue-50 flex items-center justify-start h-[3rem] w-[13rem] rounded-md duration-[0.3s]">
                <h1 class="text-white">Full Stack</h1>
              </div>
          </a>
        </div>
      </div>
      {{-- Foto --}}

      <div id="Foto" class="">
        <div class="flex justify-center py-[2rem]">
          <h1 class="font-bold text-white :">Title</h1>
        </div>
        <div class="grid grid-cols-4 grid-rows-1 gap-[3rem] py-[3rem] px-8">
          <div class="border-2">
            <img class="object-cover" src="" alt="foto-1">
          </div>
          <div class="border-2 h-[16rem] rounded-md">
            <img class="object-cover" src="" alt="foto-2">
          </div>
          <div class="border-2">
            <img class="object-cover" src="" alt="foto-3">
          </div>
          <div class="border-2">
            <img class="object-cover" src="" alt="foto-4">
          </div>
        </div>
      </div>
       

  
    </div>
</body>
</html>