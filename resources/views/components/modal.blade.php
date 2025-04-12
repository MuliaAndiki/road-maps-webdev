<!-- resources/views/components/modal.blade.php -->
@props(['id' => '', 'title' => '', 'content' => ''])

<div
    x-data="{ open: false }"
    x-show="open"
    x-init="$watch('open', value => value ? document.body.classList.add('overflow-hidden') : document.body.classList.remove('overflow-hidden'))"
    @open-modal.window="if ($event.detail.id === '{{ $id }}') open = true"
    class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
    style="display: none;"
>
    <div class="bg-white rounded-lg shadow-lg max-w-lg w-full p-6">
        <h2 class="text-2xl font-bold mb-4">{{ $title }}</h2>
        <div class="text-gray-700">
            {!! $content !!}
        </div>
        <div class="mt-4 text-right">
            <button @click="open = false" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Close</button>
        </div>
    </div>
</div>
