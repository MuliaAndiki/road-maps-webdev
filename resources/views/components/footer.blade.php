
@vite('resources/css/app.css')
@vite('resources/js/app.js')

<footer>
  <div class="bg-slate-900 h-[30vh] w-screen">
    <div id="footer-container">
      <div class="flex justify-center items-center gap-x-10">
        <a href="#header">
            <h1 class="font-bold text-slate-400 hover:text-white duration-[0.3s]">Roadmaps</h1>
        </a>
        <a href="#container-guides">
          <h1 class="font-bold text-slate-400 hover:text-white duration-[0.3s]">Guides</h1>
        </a>
        <a href="#container-video">
          <h1 class="font-bold text-slate-400 hover:text-white duration-[0.3s]">Videos</h1>
        </a>

        <a href="">
          <h1 class="font-bold text-slate-400 hover:text-white duration-[0.3s]">Creator</h1>
        </a>
      </div>

      <div class="flex justify-center items-center">
        <div class="grid grid-cols-2 grid-rows-1 gap-4">

          <div class="flex flex-col justify-center items-center">
            <h1 class="font-bold text-white">WebDev by <span class="bg-sky-600 rounded-sm text-white">Kelompok Diki</span></h1>
            {{-- Gaktau isi apa  --}}
          </div>

          <div class="flex flex-col justify-center items-center">
            <h1 class="font-bold text-white">The New WebDev</h1>
            {{-- Gak tau Isi apa  --}}
          </div>
        </div>
      </div>

    </div>
  </div>
</footer>
