@extends('layouts.admin')

@section('header', 'Witaj w Panelu Admina!')
@section('description', 'Zarządzaj treścią i użytkownikami.')

@section('content')
    <form method="GET" action=" {{ route('admin.dashboard') }} " class="mb-4 mt-3">
        <label for="currency" class="block text-sm font-medium text-gray-700">Wybierz region:</label>
        <select name="country" id="country" class="mt-1 block w-full p-2 border rounded-md" onchange="this.form.submit()">
            <option value="PL" {{ $country === 'PL' ? 'selected' : '' }}>Polska (PLN)</option>
            <option value="US" {{ $country === 'US' ? 'selected' : '' }}>USA (USD)</option>
            <option value="UK" {{ $country === 'UK' ? 'selected' : '' }}>Wielka Brytania (GBP)</option>
            <option value="DE" {{ $country === 'DE' ? 'selected' : '' }}>Niemcy (EUR)</option>
            <option value="FR" {{ $country === 'FR' ? 'selected' : '' }}>Francja (EUR)</option>
            <option value="ES" {{ $country === 'ES' ? 'selected' : '' }}>Hiszpania (EUR)</option>
            <option value="NO" {{ $country === 'NO' ? 'selected' : '' }}>Norwegia (NOK)</option>
            <option value="AU" {{ $country === 'AU' ? 'selected' : '' }}>Australia (AUD)</option>
            <option value="UA" {{ $country === 'UA' ? 'selected' : '' }}>Ukraina (UAH)</option>
            <option value="RO" {{ $country === 'RO' ? 'selected' : '' }}>Rosja (RUB)</option>
        </select>
    </form>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold text-gray-700">📚 Liczba eBooków </h3>
            <p class="text-2xl font-bold mt-2"> 1 </p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold text-gray-700">👥 Klienci </h3>
            <p class="text-2xl font-bold mt-2"> {{ $count ?? 0 }} </p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold text-gray-700">💰 Sprzedaż (<span id="selected-currency"> {{ $country }} </span>)</h3>
            <p class="text-2xl font-bold mt-2"> {{ $profit }} {{ $currency }} </p>
        </div>
    </div>
@endsection
