<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dziękujemy za zakup!</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
<div class="bg-white p-8 rounded-2xl shadow-lg text-center max-w-md">
    <svg class="w-24 mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="100" height="100" fill="green">
        <circle cx="12" cy="12" r="10" stroke="green" stroke-width="2" fill="none"/>
        <path d="M7 12l3 3 6-6" stroke="green" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <h1 class="text-2xl font-bold text-gray-800"> Dziękujemy za zakup e-booka! </h1>
    <p class="text-gray-600 mt-2"> Twój e-book został wysłany na podany adres e-mail. </p>
    <a href="{{ route('home') }}" class="mt-6 inline-block bg-blue-600 text-white py-2 px-6 rounded-lg text-lg hover:bg-blue-700">
        Powrót na stronę główną
    </a>
</div>
</body>
</html>
