<!DOCTYPE html>
<html>
<head>
    <title>Interviewees List</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
</head>
<body>
    <div class="container max-w-4xl mx-auto mt-10"> 
        <h1 class="text-3xl font-bold mb-6 text-center">面接者一覧</h1> 

        @if($interviewees->isEmpty())
            <p class="text-center">面接者が見つかりませんでした</p>
        @else
            <table class="table-auto w-full border-collapse border border-gray-200 shadow-lg rounded-lg">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-300 px-6 py-4 text-left">ID</th>
                        <th class="border border-gray-300 px-6 py-4 text-left">名前</th>
                        <th class="border border-gray-300 px-6 py-4 text-left">メール</th>
                        <th class="border border-gray-300 px-6 py-4 text-left">面接日</th>
                        <th class="border border-gray-300 px-6 py-4 text-left">評価</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($interviewees as $interviewee)
                        <tr>
                            <td class="border border-gray-300 px-6 py-4">{{ $interviewee->id }}</td>
                            <td class="border border-gray-300 px-6 py-4">{{ $interviewee->name }}</td>
                            <td class="border border-gray-300 px-6 py-4">{{ $interviewee->email }}</td>
                            <td class="border border-gray-300 px-6 py-4">{{ $interviewee->interview_date }}</td>
                            <td class="border border-gray-300 px-6 py-4">{{ $interviewee->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>