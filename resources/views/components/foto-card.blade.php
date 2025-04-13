@vite('resources/css/app.css')
@vite('resources/js/app.js')

<div data-aos="fade-up" class="border-2 rounded-md overflow-hidden group">
    <img src="{{ $foto }}" alt="foto"
        class="w-full h-full object-cover transform transition duration-500 ease-in-out group-hover:scale-105 group-hover:brightness-110"
        data-aos-anchor-placement="bottom-bottom">
</div>