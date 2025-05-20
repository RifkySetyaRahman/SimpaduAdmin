<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="flex h-screen">
        <div class="w-1/2 flex items-center justify-center bg-white">
            <form method="POST" action="{{ route('login') }}" class="w-3/4 max-w-md">
                @csrf
                <h2 class="text-2xl font-bold mb-6">Sign In</h2>

                <label class="block mb-2 text-sm">Email Address</label>
                <input type="email" name="email" class="w-full p-2 mb-4 border" placeholder="Masukkan Email" required>

                <label class="block mb-2 text-sm">Password</label>
                <input type="password" name="password" class="w-full p-2 mb-2 border" placeholder="Masukkan Password" required>
                <p class="text-xs mb-4 text-gray-500">Harus berupa kombinasi minimal 8 huruf, angka, dan simbol.</p>

                <div class="flex justify-between items-center mb-4">
                    <label class="flex items-center text-sm">
                        <input type="checkbox" name="remember" class="mr-2">
                        Ingat Saya
                    </label>
                    <a href="#" class="text-sm text-blue-600 hover:underline">Lupa Password?</a>
                </div>

                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded">Masuk</button>
            </form>
        </div>
        <div class="w-1/2 bg-cover bg-center" style="background-image: url('/images/library.jpg');">
        </div>
    </div>
</body>
</html>
