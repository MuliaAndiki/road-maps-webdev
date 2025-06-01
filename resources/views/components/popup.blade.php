<div id="{{ $id }}" class="fixed top-0 left-0 w-[100%] h-full bg-opacity-50 z-50 overflow-hidden {{ $isOpen ? '' : 'hidden' }}">
    <div class="absolute left-1/2 top-30 -translate-x-1/2 -translate-y-1/2 border-1 bg-white rounded-md shadow-lg p-6 w-full max-w-md">
        <div class="flex justify-end">
            <button type="button" onclick="closePopup('{{ $id }}')" class="text-gray-500 hover:text-gray-700 focus:outline-none cursor-pointer">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
        <div class="mt-2">
            {{ $slot }}
        </div>
    </div>
</div>

<script>
    function closePopup(popupId) {
        const popup = document.getElementById(popupId);
        if (popup) {
            popup.classList.add('hidden');
        }
    }

    function openPopup(popupId) {
        const popup = document.getElementById(popupId);
        if (popup) {
            popup.classList.remove('hidden');
        }
    }
</script>