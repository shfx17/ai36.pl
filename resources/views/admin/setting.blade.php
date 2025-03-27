@extends('layouts.admin')

@section('header', 'Ustawienia konta')
@section('description', 'Zmień swoje hasło.')

@section('content')
    <div class="mt-6 bg-white p-6 rounded-lg shadow-md max-w-lg">
        @if (session('success'))
            <div class="mb-4 p-3 text-green-700 bg-green-200 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-4 p-3 text-red-700 bg-red-200 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.update.password') }}">
            @csrf

            <div class="mb-4">
                <label for="current_password" class="block text-gray-700"> Obecne hasło </label>
                <input type="password" name="current_password" id="current_password"
                       class="border rounded p-2 w-full @error('current_password') border-red-500 @enderror">

                @error('current_password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="new_password" class="block text-gray-700"> Nowe hasło </label>
                <input type="password" name="new_password" id="new_password"
                       class="border rounded p-2 w-full @error('new_password') border-red-500 @enderror">
                @error('new_password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="new_password_confirmation" class="block text-gray-700"> Potwierdź nowe hasło </label>
                <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                       class="border rounded p-2 w-full">
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                Zmień hasło
            </button>
        </form>
    </div>
@endsection
