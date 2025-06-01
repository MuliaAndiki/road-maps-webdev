<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="icon" href="/asset/Faicon.png" type="image/x-icon">
</head>

<body>
    <div class="bg-slate-900 flex items-center justify-center min-h-screen">
        <div class="bg-slate-800 p-8 rounded-lg shadow-lg w-full max-w-sm">
            <h1 class="text-3xl text-center text-white mb-6 font-bold">Login</h1>
            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf
                <div>
                    <label for="username" class="text-white block mb-2 font-bold">Username :</label>
                    <input type="text" id="username" name="username" placeholder="Masukkan Username"
                        class="w-full p-3 rounded-md border border-slate-600 bg-slate-700 text-white focus:outline-none focus:ring-2 focus:ring-slate-500"
                        required autofocus>
                </div>

                <div>
                    <label for="password" class="text-white block mb-2 font-bold">Password :</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan Password"
                        class="w-full p-3 rounded-md border border-slate-600 bg-slate-700 text-white focus:outline-none focus:ring-2 focus:ring-slate-500"
                        required>
                </div>

                <button type="submit"
                    class="w-full p-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 font-bold hover:scale-[103%] duration-[0.3s]">Login</button>

                <div class="flex justify-center mt-2">
                    <a href="/register" class="text-purple-400 hover:scale-[103%] duration-[0.3s] hover:underline">Belum mempunyai Akun?</a>
                </div>

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
            </form>
        </div>
    </div>
</body>

</html>
