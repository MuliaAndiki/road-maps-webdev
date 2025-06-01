<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="icon" href="/asset/Faicon.png" type="image/x-icon">
</head>
<body class="bg-gray-300 overflow-hidden">

    <x-navbar />
    <div class="min-h-screen flex items-center justify-center">
        <div class="grid grid-cols-1 md:grid-cols-2 w-full max-w-5xl shadow-2xl rounded-xl overflow-hidden bg-white scale-145">

            <div class="bg-slate-900 p-10 flex flex-col items-center text-center">
                <img src="/asset/profile-img.png" alt="Profile image" class="w-48 h-48 rounded-[50%] object-cover mb-6 mt-12 shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-400">{{ $user->username }}</h2>
            </div>

            <div class="bg-[#f7f5ed] px-12 py-10 flex flex-col justify-center">
                <h3 class="text-2xl font-semibold text-gray-800">User Profile</h3>
                <div class="h-0.5 w-32 bg-slate-900 mt-1 mb-6"></div>

                <div class="mb-4">
                    <p class="text-sm text-gray-600">Name</p>
                    <p class="text-base font-medium text-gray-900">{{ $user->name }}</p>
                </div>
                <div class="mb-6">
                    <p class="text-sm text-gray-600">Username</p>
                    <p class="text-base font-medium text-gray-900">{{ $user->username }}</p>
                </div>
                <div class="mb-6">
                    <p class="text-sm text-gray-600">Email</p>
                    <p class="text-base font-medium text-gray-900">{{ $user->email }}</p>
                </div>
                <div class="mb-6">
                    <p class="text-sm text-gray-600">Bergabung Sejak</p>
                    <p class="text-base font-medium text-gray-900">
                        @if ($user->created_at)
                            {{ $user->created_at->format('d/m/Y') }}
                        @else
                            N/A
                        @endif
                    </p>
                </div>
                <a href="/login">
                    <button class="text-lg font-bold text-red-600 px-5 py-2 border rounded-lg border-red-600 w-fit hover:bg-red-600 hover:text-white transition">
                        Log Out
                    </button>
                </a>

            </div>
        </div>
    </div>
</body>
</html>