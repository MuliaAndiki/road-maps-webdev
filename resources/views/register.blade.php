<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <div class="bg-slate-900 min-h-screen flex items-center justify-center px-4">
        <div class="w-full max-w-md bg-slate-800 p-8 rounded-xl shadow-lg">
            <h1
                class="text-3xl font-bold text-white text-center mb-6 bg-gradient-to-b from-amber-50 to-purple-500 bg-clip-text">
                Register Account
            </h1>
            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-white font-semibold mb-1">Nama Lengkap :</label>
                    <input type="text" id="name" name="name" placeholder="Masukkan nama"
                        class="w-full px-4 py-2 rounded-md bg-slate-700 text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-300"
                        required />
                </div>

                <div>
                    <label for="email" class="block text-white font-semibold mb-1">Masukkan Email : </label>
                    <input type="text" id="email" name="email" placeholder="Masukkan Email"
                        class="w-full px-4 py-2 rounded-md bg-slate-700 text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-300"
                        required />
                </div>

                <div>
                    <label for="username" class="block text-white font-semibold mb-1">Username :</label>
                    <input type="text" id="username" name="username" placeholder="Masukkan username"
                        class="w-full px-4 py-2 rounded-md bg-slate-700 text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-300"
                        required />
                </div>

                <div>
                    <label for="password" class="block text-white font-semibold mb-1">Password :</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan password"
                        class="w-full px-4 py-2 rounded-md bg-slate-700 text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-300"
                        required />
                </div>

                <div>
                    <label for="password_confirmation" class="block text-white font-semibold mb-1">Konfirmasi Password :</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi password"
                        class="w-full px-4 py-2 rounded-md bg-slate-700 text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-300"
                        required />
                </div>

                <button type="submit"
                    class="w-full py-2 mt-4 bg-purple-600 hover:bg-purple-700 text-white font-semibold rounded-md transition duration-[0.3s] hover:scale-[103%]">
                    Daftar Akun
                </button>

                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Error!</strong>
                        <span class="block sm:inline">
                            @foreach ($errors->all() as $error)
                                {{ $error }}<br>
                            @endforeach
                        </span>
                    </div>
                @endif

                <p class="text-center text-sm text-slate-400 mt-4">
                    Sudah punya akun?
                    <a href="/login" class="text-purple-400 hover:underline ">Login di sini</a>
                </p>
            </form>
        </div>
    </div>
</body>

</html>