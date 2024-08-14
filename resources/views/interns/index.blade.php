
@extends('layouts.app')

@section('content')
    <div class="container max-w-4xl mx-auto mt-10"> 
        <h1 class="text-3xl font-bold mb-6 text-center">インターン生一覧</h1> 

        <table class="table-auto w-full border-collapse border border-gray-200 shadow-lg rounded-lg">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 px-6 py-4 text-left">ID</th>
                    <th class="border border-gray-300 px-6 py-4 text-left">名前</th>
                    <th class="border border-gray-300 px-6 py-4 text-left">メール</th>
                    <th class="border border-gray-300 px-6 py-4 text-left">大学</th>
                    <th class="border border-gray-300 px-6 py-4 text-left">専攻</th>
                    <th class="border border-gray-300 px-6 py-4 text-left">開始日</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interns as $intern)
                    <tr>
                        <td class="border border-gray-300 px-6 py-4">{{ $intern->id }}</td>
                        <td class="border border-gray-300 px-6 py-4">{{ $intern->name }}</td>
                        <td class="border border-gray-300 px-6 py-4">{{ $intern->email }}</td>
                        <td class="border border-gray-300 px-6 py-4">{{ $intern->university }}</td>
                        <td class="border border-gray-300 px-6 py-4">{{ $intern->major }}</td>
                        <td class="border border-gray-300 px-6 py-4">{{ $intern->start_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection