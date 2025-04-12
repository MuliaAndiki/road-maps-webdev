@vite('resources/css/app.css')
@vite('resources/js/app.js')

<div class="flex justify-center items-center min-h-screen bg-white">
    <div class="grid grid-cols-3 gap-8 px-8 w-full max-w-7xl">

        <!-- KIRI -->
        <div class="p-8 bg-white rounded-lg shadow-lg flex flex-col justify-between">
            <div>
                <h1 class="text-lg leading-relaxed mb-6" title="judul">
                    {{ $text }}
                </h1>
                <div class="space-y-4">
                    <div class="grid grid-cols-1 gap-4">
                        <h1 class="font-medium w-full py-3 px-6 text-center">
                            {{ $text1 }} </h1>
                        <h1 class="font-medium w-full py-3 px-6 text-center">
                            {{ $text2 }} </h1>
                        <h1 class="font-medium w-full py-3 px-6 text-center">
                            {{ $text3 }} </h1>
                    </div>

                    <div class="grid grid-cols-1 gap-4">

                        <h1 class="font-medium w-full py-3 px-6 text-center">
                            {{ $text4 }} </h1>
                    </div>

                    <div class="grid grid-cols-1 gap-4">
                        <h1 class="font-medium w-full py-3 px-6 text-center">
                            {{ $text5 }} </h1>
                        <h1 class="font-medium w-full py-3 px-6 text-center">
                            {{ $text6 }} </h1>
                        <h1 class="font-medium w-full py-3 px-6 text-center">
                            {{ $text7 }} </h1>
                        <h1 class="font-medium w-full py-3 px-6 text-center">
                            {{ $text8 }} </h1>
                    </div>

                    <div class="space-y-4 mt-8">
                        <div class="p-4  rounded-lg">
                            <p class="text-sm leading-relaxed">
                                {{ $text9 }}
                            </p>
                        </div>

                        <div class="p-4 rounded-lg">
                            <p class="text-sm leading-relaxed mb-4">
                                {{ $text10 }}
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- TENGAH -->
        <div class="p-8 bg-white rounded-lg shadow-lg">
            <div class="text-center mb-8">
                <h1 class="font-bold text-3xl border-b-2 border-yellow-400 pb-2">{{ $titleK }}</h1>
            </div>

            <div class="space-y-4">
                <div class="grid grid-cols-1 gap-4">
                    <button
                        class="w-full py-3 px-6 border-2 rounded-lg bg-yellow-300 hover:bg-slate-600 hover:text-white transition duration-300 font-medium">{{ $button }}</button>
                    <button
                        class="w-full py-3 px-6 border-2 rounded-lg bg-yellow-300 hover:bg-slate-600 hover:text-white transition duration-300 font-medium">{{ $button1 }}</button>
                    <button
                        class="w-full py-3 px-6 border-2 rounded-lg bg-yellow-300 hover:bg-slate-600 hover:text-white transition duration-300 font-medium">{{ $button2 }}</button>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <button
                        class="w-full py-3 px-6 border-2 rounded-lg bg-yellow-300 hover:bg-slate-600 hover:text-white transition duration-300 font-medium">{{ $button3 }}</button>
                    <button
                        class="w-full py-3 px-6 border-2 rounded-lg bg-yellow-300 hover:bg-slate-600 hover:text-white transition duration-300 font-medium">{{ $button4 }}</button>
                </div>

                <div class="grid grid-cols-1 gap-4">
                    <button
                        class="w-full py-3 px-6 border-2 rounded-lg bg-yellow-300 hover:bg-slate-600 hover:text-white transition duration-300 font-medium">{{ $button5 }}</button>
                    <button
                        class="w-full py-3 px-6 border-2 rounded-lg bg-yellow-300 hover:bg-slate-600 hover:text-white transition duration-300 font-medium">{{ $button6 }}</button>
                    <button
                        class="w-full py-3 px-6 border-2 rounded-lg bg-yellow-300 hover:bg-slate-600 hover:text-white transition duration-300 font-medium">{{ $button7 }}</button>
                    <button
                        class="w-full py-3 px-6 border-2 rounded-lg bg-yellow-300 hover:bg-slate-600 hover:text-white transition duration-300 font-medium">{{ $button8 }}</button>
                </div>

                <div class="space-y-4 mt-8">
                    <div class="p-4 border-2 rounded-lg">
                        <p class="text-sm leading-relaxed">
                {{ $texttengah }}
                        </p>
                    </div>

                    <div class="p-4 border-2 rounded-lg">
                        <p class="text-sm leading-relaxed mb-4">
                            {{ $texttengah1 }}
                        </p>
                        <button
                            class="w-full py-3 px-6 border-2 rounded-lg bg-sky-600 hover:bg-slate-600 hover:text-white transition duration-300 font-medium">
                            {{ $button9 }}
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <!-- KANAN -->
        <div class="p-8 bg-white rounded-lg shadow-lg flex flex-col justify-between">
            <div>
                <h1 class="text-lg leading-relaxed mb-6" title="judul">
                    {{ $textkanan }}
                </h1>
                <div class="space-y-4">
                    <div class="grid grid-cols-1 gap-4">
                        <h1 class="font-medium w-full py-3 px-6 text-center">
                            {{ $textkanan1 }} </h1>
                        <h1 class="font-medium w-full py-3 px-6 text-center">
                            {{ $textkanan2 }} </h1>
                        <h1 class="font-medium w-full py-3 px-6 text-center">
                            {{ $textkanan3 }} </h1>
                    </div>

                    <div class="grid grid-cols-1 gap-4">

                        <h1 class="font-medium w-full py-3 px-6 text-center">
                            {{ $textkanan4 }} </h1>
                    </div>

                    <div class="grid grid-cols-1 gap-4">
                        <h1 class="font-medium w-full py-3 px-6 text-center">
                            {{ $textkanan5 }} </h1>
                        <h1 class="font-medium w-full py-3 px-6 text-center">
                            {{ $textkanan6 }} </h1>
                        <h1 class="font-medium w-full py-3 px-6 text-center">
                            {{ $textkanan7 }} </h1>
                        <h1 class="font-medium w-full py-3 px-6 text-center">
                            {{ $textkanan8 }} </h1>
                    </div>

                    <div class="space-y-4 mt-8">
                        <div class="p-4 rounded-lg">
                            <p class="text-sm leading-relaxed">
                                {{ $textkanan9 }}
                            </p>
                        </div>

                        <div class="p-4  rounded-lg">
                            <p class="text-sm leading-relaxed mb-4">
                                {{ $textkanan10 }}
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
