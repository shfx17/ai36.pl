@extends('layouts.admin')

@section('header', 'Lista klientów')
@section('description', 'Zarządzaj listą klientów.')

@section('content')
    <br />
    <a href="{{ route('admin.export') }}" class="mt bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded" role="button">Eksportuj dane</a>

    <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
        @if (session('success'))
            <div class="mb-4 p-3 text-green-700 bg-green-200 rounded"> {{ session('success') }} </div>
        @endif

        <table class="w-full border-collapse">
            <thead>
            <tr class="bg-gray-200">
                <th class="py-2 px-4 text-left"> ID </th>
                <th class="py-2 px-4 text-left"> Email </th>
                <th class="py-2 px-4 text-left"> Status </th>
                <th class="py-2 px-4 text-left"> Data zakupu </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($orders as $order)
                <tr class="border-t">
                    <td class="py-2 px-4"> {{ $order->id }} </td>
                    <td class="py-2 px-4"> {{ $order->email }} </td>
                    <td class="py-2 px-4">
                        @if ($order->status === 2)
                            <span class="bg-green-200 text-green-700 px-2 py-1 rounded-md text-sm"> Zapłacony </span>
                        @else
                            <span class="bg-red-200 text-red-700 px-2 py-1 rounded-md text-sm"> Niezapłacony </span>
                        @endif
                    </td>
                    <td class="py-2 px-4"> {{ $order->created_at->format('Y-m-d') }} </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $orders->links() }}
        </div>
    </div>
@endsection
