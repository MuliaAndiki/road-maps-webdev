@vite('resources/css/app.css')
@vite('resources/js/app.js')

<footer>
  <div class="bg-slate-900 w-screen py-10">
    <div id="footer-container" class="space-y-10">

      <!-- Navigasi -->
      <div class="flex justify-center items-center gap-x-10">
        <a href="#header">
          <h1 class="font-bold text-slate-400 hover:text-white duration-300">Roadmaps</h1>
        </a>
        <a href="#container-guides">
          <h1 class="font-bold text-slate-400 hover:text-white duration-300">Guides</h1>
        </a>
        <a href="#container-video">
          <h1 class="font-bold text-slate-400 hover:text-white duration-300">Videos</h1>
        </a>
        <a href="#">
          <h1 class="font-bold text-slate-400 hover:text-white duration-300">Creator</h1>
        </a>
      </div>

      <!-- Info -->
      <div class="flex justify-center items-center">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 px-4 text-center">
          <div class="flex flex-col items-center">
            <h1 class="font-bold text-white text-lg">WebDev by
              <span class="bg-sky-600 px-2 rounded-sm">Kelompok Diki</span>
            </h1>
            <p class="text-slate-400 text-sm mt-2 max-w-sm">
              Platform belajar web development dengan roadmap bertahap dari pemula hingga mahir.
            </p>
          </div>

          <div class="flex flex-col items-center">
            <h1 class="font-bold text-white text-lg">The New WebDev</h1>
            <p class="text-slate-400 text-sm mt-2 max-w-sm">
              Menyongsong era baru coding yang lebih modern, terstruktur, dan menyenangkan.
            </p>
          </div>
        </div>
      </div>

      <!-- Social Media -->
      <div class="flex justify-center gap-6">
        <!-- GitHub -->
        <a href="https://github.com" target="_blank" class="text-slate-400 hover:text-white duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
              d="M12 0C5.37 0 0 5.37 0 12a12 12 0 008.21 11.44c.6.11.82-.26.82-.58v-2.03c-3.34.73-4.04-1.61-4.04-1.61-.55-1.39-1.34-1.76-1.34-1.76-1.1-.75.08-.73.08-.73 1.22.09 1.87 1.26 1.87 1.26 1.08 1.85 2.83 1.32 3.52 1.01.11-.78.42-1.32.76-1.62-2.66-.3-5.46-1.33-5.46-5.93 0-1.31.47-2.38 1.24-3.22-.13-.3-.54-1.51.12-3.14 0 0 1.01-.32 3.3 1.23a11.5 11.5 0 016 0c2.29-1.55 3.3-1.23 3.3-1.23.66 1.63.25 2.84.12 3.14.77.84 1.24 1.91 1.24 3.22 0 4.61-2.8 5.63-5.47 5.92.43.37.81 1.1.81 2.22v3.3c0 .32.22.69.83.57A12 12 0 0024 12c0-6.63-5.37-12-12-12z"
              clip-rule="evenodd" />
          </svg>
        </a>

        <!-- YouTube -->
        <a href="https://youtube.com" target="_blank" class="text-slate-400 hover:text-white duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M10 15l5.19-3L10 9v6zm12-3c0-1.1-.9-2-2-2h-2V6.5c0-.83-.67-1.5-1.5-1.5h-9C6.67 5 6 5.67 6 6.5V10H4c-1.1 0-2 .9-2 2v5c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-5z" />
          </svg>
        </a>

        <!-- X/Twitter -->
        <a href="https://twitter.com" target="_blank" class="text-slate-400 hover:text-white duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M23 3a10.9 10.9 0 01-3.14 1.53A4.48 4.48 0 0022.4.36a9.09 9.09 0 01-2.88 1.1A4.52 4.52 0 0016.11 0c-2.5 0-4.51 2.02-4.51 4.51 0 .35.04.7.11 1.03A12.94 12.94 0 013 1.6a4.48 4.48 0 00-.61 2.27c0 1.56.79 2.93 2.01 3.74a4.47 4.47 0 01-2.04-.56v.06c0 2.18 1.55 4 3.6 4.42a4.52 4.52 0 01-2.02.08 4.5 4.5 0 004.2 3.12A9.06 9.06 0 012 19.54a12.86 12.86 0 006.95 2.04c8.34 0 12.9-6.92 12.9-12.91 0-.2 0-.39-.01-.58A9.3 9.3 0 0023 3z" />
          </svg>
        </a>
      </div>

      <!-- Copyright -->
      <div class="text-center mt-4">
        <p class="text-slate-500 text-sm">&copy; 2025 Kelompok Diki. All rights reserved.</p>
      </div>

    </div>
  </div>
</footer>