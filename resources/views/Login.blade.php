<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>

<body>
  <div class="bg-slate-900 flex items-center justify-center min-h-screen">

    <div class="bg-slate-800 p-8 rounded-lg shadow-lg w-full max-w-sm">
      <h1 class="text-3xl text-center text-white mb-6 font-bold">Login</h1>
      <div class="space-y-4">
        <div>
          <label for="username" class="text-white block mb-2 font-bold">Username :</label>
          <input type="text" id="username" name="username" placeholder="Masukkan Username"
            class="w-full p-3 rounded-md border border-slate-600 bg-slate-700 text-white focus:outline-none focus:ring-2 focus:ring-slate-500"
            required>
        </div>

        <div>
          <label for="password" class="text-white block mb-2 font-bold">Password :</label>
          <input type="password" id="password" name="password" placeholder="Masukkan Password"
            class="w-full p-3 rounded-md border border-slate-600 bg-slate-700 text-white focus:outline-none focus:ring-2 focus:ring-slate-500"
            required>
        </div>

        <a href="/">
          <button type="submit"
            class="w-full p-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 font-bold  hover:scale-[103%] duration-[0.3s]">Login</button>
        </a>
        <a href="/register">
          <div class="flex justify-center mt-2">
            <h1 class="text-purple-400 hover:scale-[103%] duration-[0.3s] hover:underline">Blum mempunyai Akun?</h1>
          </div>
        </a>
      </div>
    </div>
  </div>

</body>

</html>