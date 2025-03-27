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
              <p class="text-white text-2x1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia, distinctio tempora laudantium earum provident accusamus alias qui, aliquid perferendis accusantium deserunt. Vel numquam dolorum, officia aperiam eaque voluptatem repellendus ea? .</p>
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
          <h1 class="font-bold text-white :">Tools :</h1>
        </div>
        <div class="grid grid-cols-4 grid-rows-1 gap-[3rem] py-[1rem] px-8 h-[16rem]">
          <div class="border-2 rounded-md">
            <img class="" src="" alt="foto-1">

          </div>
          <div class="border-2 rounded-md">
            <img class="object-cover" src="" alt="foto-2">
          </div>
          <div class="border-2 rounded-md">
            <img class="object-cover" src="" alt="foto-3">
          </div>
          <div class="border-2 rounded-md">
            <img class="object-cover" src="" alt="foto-4">
          </div>
        </div>
      </div>
        {{-- Guides --}}
        <div class="bg-white " id='Container'>
          <div id="Guide-Container" class=" flex justify-center pt-[2rem]"> 
              <div id="title" class="">
                  <h1 class="text-2xl font-bold">Guides :</h1>
              </div>
            </div>

            <div id="tabel-container" class="flex justify-center">
                <div class="grid grid-cols-1 grid-rows-7 gap-4 w-[80%]" id="tabel">

                  <a href="">
                    <div class="flex border-b-2 justify-between">
                      <h1 class="">1.</h1>
                      <p class="">last</p>
                    </div>
                  </a>

                  <a href="">
                    <div class="flex border-b-2 justify-between">
                      <h1 class="">2.</h1>
                      <p clas=""></p>
                    </div>
                  </a>

                  <a href="" >
                    <div class="flex border-b-2 justify-between">
                      <h1 class="">3.</h1>
                      <p class=""></p>
                    </div>
                  </a>

                  <a href="" >
                    <div class="flex border-b-2 justify-between">
                      <h1 class="">4.</h1>
                      <p class=""></p>
                    </div>
                  </a>

                  <a href="" >
                    <div class="flex border-b-2 justify-between">
                      <h1 class="">5.</h1>
                      <p class=""></p>
                    </div>
                  </a>

                  <a href="">
                    <div class="flex border-b-2 justify-between">
                      <h1 class="">6.</h1>
                      <p class=""></p>
                    </div>
                  </a>

                  <a href="" >
                    <div class="flex border-b-2 justify-between">
                      <h1 class="">7.</h1>
                      <p class=""></p>
                    </div>
                  </a>
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

                <a href="">
                    <div class="flex justify-between border-b-2">
                      <h1 class="">1. Lorem</h1>
                      <p class="">Last</p>
                    </div>
                </a>

                <a href="">
                    <div class="flex justify-between border-b-2">
                      <h1 class="">2.</h1>
                      <p class=""></p>
                    </div>
                </a>

                <a href="">
                    <div class="flex justify-between border-b-2">
                      <h1 class="">3.</h1>
                      <p class=""></p>
                    </div>
                </a>

                <a href="">
                    <div class="flex justify-between border-b-2">
                      <h1 class="">4.</h1>
                      <p class=""></p>
                    </div>
                </a>

                <a href="">
                    <div class="flex justify-between border-b-2">
                      <h1 class="">5.</h1>
                      <p class=""></p>
                    </div>
                </a>

                <a href="">
                    <div class="flex justify-between border-b-2">
                      <h1 class="">6.</h1>
                      <p class=""></p>
                    </div>
                </a>

                <a href="">
                    <div class="flex justify-between border-b-2 ">
                      <h1 class="">7.</h1>
                      <p class=""></p>
                    </div>
                </a>
              </div>
            </div>
            
            {{-- Join the Community --}}
            <div class="flex justify-center">
              <div class="" id="Community">
                  <h1 class="font-bold text-[2rem]">Join the Community</h1>
              </div>
            </div>

            <div class="flex justify-center items-center">
              <p class="font-light">roadmap.sh is the 7th most starred project on GitHub and is visited by hundreds of thousands of developers every month.</p>
            </div>

            <div class="flex justify-center items-center">
              <div class="grid grid-cols-3 grid-rows-1 gap-4">
                <div class="border-r-1">
                  <div class="flex justify-center items-center">
                    <div>
                        <div title="join the comunity">
                          <p class="text-blue-500">Rank 7th out of 28M!</p>
                        </div>
      
                        <div class="flex justify-center items-center">
                          <h1 class="text-[2rem] font-bold">313K</h1>
                        </div>
      
                        <div class="flex justify-center items-center">
                          <p class="font-light">GitHub Star</p>
                        </div>
      
                        <div class="flex justify-center items-center">
                          <div class="border-2 w-[13vw] h-[7vh] rounded-lg flex flex-col justify-center items-center">
                            <h1 class="font-bold">Star us on GitHub</h1>
                            <p class="font-light">Help you reach #1</p>
                          </div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="border-r-1">
                  <div class="flex justify-center items-center">
                    <div>
                        <div title="join the comunity">
                          <p class="text-blue-500">+90k every month</p>
                        </div>
                        
                        <div class="flex justify-center items-center">
                          <h1 class="text-[2rem] font-bold">+1.5M</h1>
                        </div>
      
                        <div class="flex justify-center items-center">
                          <p class="font-light">Register User</p>
                        </div>

                        <div class="flex justify-center items-center">
                          <div class="border-2 w-[13vw] h-[7vh] rounded-lg flex flex-col justify-center items-center">
                            <h1 class="font-bold">Register yourself</h1>
                            <p class="font-light">Commit to your growth </p>
                          </div>
                      </div>

                    </div>
                    </div>
                  
                </div>

                <div class="border-r-1">
                  <div class="flex justify-center items-center">
                    <div>
                        <div title="join the comunity">
                          <p class="text-blue-500">+2k every month</p>
                        </div>
          
      
                        <div class="flex justify-center items-center">
                          <p class="text-[2rem] font-bold">35K</p>
                        </div>
      
                        <div class="flex justify-center items-center">
                          <p class="font-light">Discord Member</p>
                        </div>

                        <div class="flex justify-center items-center">
                          <div class="border-2 w-[13vw] h-[7vh] rounded-lg flex flex-col justify-center items-center">
                            <h1 class="font-bold">Join On Discord</h1>
                            <p class="font-light">join the comunity</p>
                          </div>

                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            {{-- Batas-bg-putih --}}
        </div>


        {{-- Footer --}}
        <footer>
          <div class="bg-slate-900 h-[30vh] w-screen">
            <div id="footer-container">
              <div class="flex justify-center items-center">
                <h1 class="text-white">Ini footer</h1>
              </div>
            </div>
          </div>
        </footer>
    </div>
</body>
</html>