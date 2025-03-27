<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Panel Administratora</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 flex">

    <!-- Sidebar -->
    <aside class="bg-blue-600 text-white w-64 min-h-screen p-5">
        <h2 class="text-2xl font-bold">Admin Panel</h2>
        <nav class="mt-6">
            <ul>
                <li class="mt-3">
                    <a href="{{ route('admin.dashboard') }}" class="block py-2 px-3 bg-blue-700 rounded-md"> Dashboard </a>
                </li>
                <li class="mt-3">
                    <a href="{{ route('admin.client') }}" class="block py-2 px-3 hover:bg-blue-700 rounded-md"> Klienci </a>
                </li>
                <li class="mt-3">
                    <a href="{{ route('admin.ebook') }}" class="block py-2 px-3 hover:bg-blue-700 rounded-md"> Konfiguracja ebook'a </a>
                </li>
                <li class="mt-3">
                    <a href="{{ route('admin.setting') }}" class="block py-2 px-3 hover:bg-blue-700 rounded-md"> Ustawienia konta</a>
                </li>
            </ul>
        </nav>

        <!-- Logout Button -->
        <form action="{{ route('admin.logout') }}" method="POST" class="mt-6">
            @csrf
            <button type="submit"
                    class="w-full bg-red-500 hover:bg-red-600 text-white py-2 rounded-md">
                Wyloguj się
            </button>
        </form>
    </aside>

    <main class="flex-1 p-6">
        <h1 class="text-3xl font-bold text-gray-700"> Witaj w Panelu Admina! </h1>
        <p class="text-gray-600 mt-2"> Zarządzaj treścią i klientami. </p>

        @yield('content')
    </main>
</body>
</html>
