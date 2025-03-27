@extends('layouts.admin')

@section('header', 'Konfiguracja Ebooka')
@section('description', 'Zmień ceny ebooka dla poszczególnych krajów.')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        @if (session('success'))
            <div class="mb-4 p-3 text-green-700 bg-green-200 rounded">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('admin.ebook.update') }}">
            @csrf
            @method('POST')

            <table class="w-full border-collapse">
                <thead>
                <tr class="bg-gray-200">
                    <th class="py-2 px-4 text-left"> Kraj </th>
                    <th class="py-2 px-4 text-left"> Cena </th>
                    <th class="py-2 px-4 text-left"> Waluta </th>
                </tr>
                </thead>
                <tbody>

                    @foreach ($ebookSettings as $ebookSetting)
                        <tr class="border-t">
                            <td class="py-2 px-4 font-bold"> {{ $ebookSetting->country }} </td>
                            <td class="py-2 px-4">
                                <input type="number" name="prices[{{ $ebookSetting->country }}]"
                                       value="{{ $ebookSetting->price }}" step="0.01"
                                       class="border rounded p-2 w-full">

                                @error('prices.' . $ebookSetting->country)
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </td>
                            <td class="py-2 px-4 font-bold"> {{ $ebookSetting->currency }} </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

            <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                Zapisz zmiany
            </button>
        </form>
    </div>
@endsection
