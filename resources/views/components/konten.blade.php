@vite('resources/css/app.css')
@vite('resources/js/app.js')

<div class="flex justify-center items-center min-h-screen bg-white">
    <div class="grid grid-cols-3 gap-8 px-8 w-full max-w-7xl">

        <!-- KIRI -->
        <div class="p-8 bg-white rounded-lg shadow-lg flex flex-col justify-between">
            <div data-aos="fade-right">
                <h1 class="text-lg leading-relaxed mb-6 text-center" title="judul">{{ $kiriItems['title'] }}</h1>
                <div class="space-y-4">
                    @foreach ($kiriItems['items'] as $item)
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
                @if (isset($tengahContent['title']))
                    <h1 class="font-bold text-3xl border-b-2 border-yellow-400 pb-2">{{ $tengahContent['title'] }}</h1>
                @else
                    <h1 class="font-bold text-3xl border-b-2 border-yellow-400 pb-2">Judul Default</h1>
                @endif
            </div>



            <div class="space-y-4 mt-8">
                @foreach ($tengahContent['buttons'] as $button)
                    <div class="grid grid-cols-1 gap-4">
                        <a href="{{ $button['link'] }}"
                            class="w-full py-3 px-6 border-2 rounded-lg bg-yellow-300 hover:bg-slate-600 hover:text-white transition duration-300 font-medium text-center">
                            {{ $button['label'] }}
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="space-y-4">
                @if (isset($tengahContent['items']) && is_array($tengahContent['items']))
                    @foreach ($tengahContent['items'] as $item)
                        <div class="grid grid-cols-1 gap-4">
                            <p class="text-center">{{ $item }}</p>
                        </div>
                    @endforeach
                @endif

                <div class="mt-8">
                    <div class="flex justify-center items-center flex-col">
                        <h1 class="text-center mb-1">{{ $tengahContent->item_1 ?? ''}}</h1>
                        <h1 class="text-center mt-1">{{ $tengahContent->item_2 ?? ""}}</h1>

                    </div>

                </div>

                <div class="mt-8">
                    <a href="{{ $tengahContent->cta_link ?? '#' }}"
                        class="block text-center py-2 px-4 bg-blue-500 text-white rounded-lg hover:scale-[103%] duration-[0.3s]">
                        {{ $tengahContent->cta_label ?? '' }}
                    </a>
                </div>


            </div>
        </div>

        <!-- KANAN -->
        <div class="p-8 bg-white rounded-lg shadow-lg flex flex-col justify-between">
            <div data-aos="fade-left">
                <h1 class="text-lg leading-relaxed mb-6 text-center" title="judul">{{ $kananItems['title'] }}</h1>
                <div class="space-y-4">
                    @foreach ($kananItems['items'] as $item)
                        <div class="grid grid-cols-1 gap-4">
                            <h1 class="font-medium w-full py-3 px-6 text-center">{{ $item }}</h1>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>
