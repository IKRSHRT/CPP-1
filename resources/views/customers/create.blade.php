@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">新規登録</div>
                    <form action="/customers" method="POST">
                        @csrf

                        <!-- ラジオボタンで登録タイプを選択 -->
                        <div class="mb-3">
                            <label>登録タイプ：</label><br>
                            <label><input type="radio" name="register_type" value="customer" checked> 顧客</label>
                            <label><input type="radio" name="register_type" value="intern"> インターン</label>
                            <label><input type="radio" name="register_type" value="interviewee"> 面接者</label>
                        </div>

                        <!-- 顧客用フィールド -->
                        <div id="customer-fields">
                            <p>氏名：<input type="text" name="name" value="{{ old('name') }}"></p>
                            <p>郵便番号：<input type="text" name="postal" value="{{ old('postal') }}"></p>
                            <p>住所：<input type="text" name="address" value="{{ old('address') }}"></p>
                            <p>メール：<input type="text" name="email" value="{{ old('email') }}"></p>
                            <p>電話番号：<input type="text" name="phone" value="{{ old('phone') }}"></p>
                            <p>クレーマーフラグ：<input type="text" name="kramer_flag" value="{{ old('kramer_flag') }}"></p>
                            <p style="font-size: 0.75em">0 問題ない顧客, 1 クレーマー顧客</p>
                        </div>

                        <!-- インターン用フィールド -->
                        <div id="intern-fields" class="d-none">
                            <p>氏名：<input type="text" name="name" value="{{ old('name') }}"></p>
                            <p>メール：<input type="text" name="email" value="{{ old('email') }}"></p>
                            <p>大学：<input type="text" name="university" value="{{ old('university') }}"></p>
                            <p>専攻：<input type="text" name="major" value="{{ old('major') }}"></p>
                            <p>開始日：<input type="date" name="start_date" value="{{ old('start_date') }}"></p>
                        </div>

                        <!-- 面接者用フィールド -->
                        <div id="interviewee-fields" class="d-none">
                            <p>氏名：<input type="text" name="name" value="{{ old('name') }}"></p>
                            <p>メール：<input type="text" name="email" value="{{ old('email') }}"></p>
                            <p>面接日：<input type="date" name="interview_date" value="{{ old('interview_date') }}"></p>
                            <p>評価：
                                <select name="status">
                                    <option value="pending">保留中</option>
                                    <option value="accepted">承認</option>
                                    <option value="rejected">拒否</option>
                                </select>
                            </p>
                        </div>

                        <p style="text-align: center">
                            <button class="btn btn-primary" type="submit">　　登　録　　</button>
                        </p>
                    </form>
                    <div style="text-align: center; margin-top: 20px;">
                        <a href="{{ url('/home') }}" class="btn btn-secondary">ホームに戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const registerTypeRadios = document.querySelectorAll('input[name="register_type"]');
            const customerFields = document.getElementById('customer-fields');
            const internFields = document.getElementById('intern-fields');
            const intervieweeFields = document.getElementById('interviewee-fields');

            function toggleFields() {
                customerFields.classList.add('d-none');
                internFields.classList.add('d-none');
                intervieweeFields.classList.add('d-none');

                if (this.value === 'customer') {
                    customerFields.classList.remove('d-none');
                } else if (this.value === 'intern') {
                    internFields.classList.remove('d-none');
                } else if (this.value === 'interviewee') {
                    intervieweeFields.classList.remove('d-none');
                }
            }

            registerTypeRadios.forEach(radio => {
                radio.addEventListener('change', toggleFields);
            });

            // 初期表示の設定
            registerTypeRadios.forEach(radio => {
                if (radio.checked) {
                    toggleFields.call(radio);
                }
            });
        });
    </script>
@endsection