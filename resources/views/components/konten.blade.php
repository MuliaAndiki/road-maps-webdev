@vite('resources/css/app.css')
@vite('resources/js/app.js')

<div class="flex justify-center items-center min-h-screen bg-white">
    <div class="grid grid-cols-3 gap-8 px-8 w-full max-w-7xl">

        <!-- KIRI -->
        <div class="p-8 bg-white rounded-lg shadow-lg flex flex-col justify-between">
            <div data-aos="fade-right">
                <h1 class="text-lg leading-relaxed mb-6 text-center" title="judul">{{ $kiri['title'] }}</h1>
                <div class="space-y-4">
                    @foreach ($kiri['items'] as $item)
                        <div class="grid grid-cols-1 gap-4">
                            <h1 class="font-medium w-full py-3 px-6 text-center">{{ $item }}</h1>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- TENGAH -->
        <div class="p-8 bg-white rounded-lg shadow-lg " data-aos="fade-up">
            <div class="text-center mb-8">
                <h1 class="font-bold text-3xl border-b-2 border-yellow-400 pb-2">{{ $tengah['title'] }}</h1>
            </div>



            <div class="space-y-4 mt-8">
                @foreach ($tengah['buttons'] as $button)
                    <div class="grid grid-cols-1 gap-4">
                        <a href="{{ $button['link'] }}"
                            class="w-full py-3 px-6 border-2 rounded-lg bg-yellow-300 hover:bg-slate-600 hover:text-white transition duration-300 font-medium text-center">
                            {{ $button['label'] }}
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="space-y-4">
                @foreach ($tengah['items'] as $item)
                    <div class="grid grid-cols-1 gap-4">
                        <p class="text-center">{{ $item }}</p>
                    </div>
                @endforeach

                <div class="mt-8">
                    <a href="{{ $tengah['cta']['link'] }}"
                        class="block text-center py-2 px-4 bg-blue-500 text-white rounded-lg">
                        {{ $tengah['cta']['label'] }}
                    </a>
                </div>


            </div>
        </div>

        <!-- KANAN -->
        <div class="p-8 bg-white rounded-lg shadow-lg flex flex-col justify-between">
            <div data-aos="fade-left">
                <h1 class="text-lg leading-relaxed mb-6 text-center" title="judul">{{ $kanan['title'] }}</h1>
                <div class="space-y-4">
                    @foreach ($kanan['items'] as $item)
                        <div class="grid grid-cols-1 gap-4">
                            <h1 class="font-medium w-full py-3 px-6 text-center">{{ $item }}</h1>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>