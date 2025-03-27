<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie | Panel Admina</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-bold text-center text-gray-700">Panel Administratora</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded-md mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.login.post') }}" method="POST" class="mt-6">
        @csrf
        <div>
            <label class="block text-gray-600">Login</label>
            <input type="text" name="login" required
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div class="mt-4">
            <label class="block text-gray-600">Hasło</label>
            <input type="password" name="password" required
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <button type="submit"
                class="w-full mt-6 bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-lg transition duration-200">
            Zaloguj się
        </button>
    </form>
</div>

</body>
</html>
