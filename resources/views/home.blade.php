@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- ↓↓↓追加↓↓↓ -------------------------------------- --}}
                    <ul>
                        <li><a href="/users">社員一覧</a></li>
                        <li><a href="/customers">顧客一覧</a></li>
                        <li><a href="/customers/create">顧客新規登録</a></li>
                        <li><a href="/interns">インターン生一覧</a></li>
                        <li><a href="/interviewees">面接者一覧</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

