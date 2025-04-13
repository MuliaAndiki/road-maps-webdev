@vite('resources/css/app.css')
@vite('resources/js/app.js')

<a href={{$link}}>
    <div class="flex border-b-2 justify-between" data-aos="fade-left">
        <h1 class="transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 ">{{$title}}</h1>
        <p class="transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 ">{{$description}}
        </p>
    </div>
</a>