@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                    create
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{route('contact.store')}}" >
                     @csrf 
                        <label class="label" name="name">名前</label>
                        <input type="text" name="your_name">

                        <label class="label" name="title">件名</label>
                        <input type="text" name="title">
                      
                      
                        <label class="label" for="email">メール</label>
                        <input type="email" name="email">
                      
                      
                        <label class="label" for="url">ホームページ</label>
                        <input type="url" name="url">
                      
                      
                          <label class="label" for="gender">性別</label>
                         
                          <input type="radio" name="gender" value="0">男性</input><br>
                          <input type="radio" name="gender" value="1">女性</input><br>
                          
                          年齢
                          <select name="age">
                            <option value="">選択してください</option>
                            <option value="1">19</option>
                            <option value="2">20~29</option>
                            <option value="3">30~39</option>
                            <option value="4">40~49</option>
                            <option value="5">50~59</option>
                            <option value="6">60~</option>
                          </select>
                     
                     
                        <label class="label" for="contact">お問い合わせ内容</label>
                        <textarea name="contact"></textarea>

                        <input type="checkbox" name="caution" value="1">チェックしてください
                      
                    
                        <input class="btn btn-info" type="submit" value="登録">
                    
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection