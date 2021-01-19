@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                  index
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="GET" action="{{route('contact.create')}}">
                      <button type="submit" class="btn btn-primary">新規投稿</button>
                    </form>

                    


                    <table class="table">
                        <thead>
                        　  <tr>               
                                <th scope="col">id</th>
                                <th scope="col">氏名</th>
                                <th scope="col">タイトル</th>
                                <th scope="col">作成日</th>
                        　  </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->your_name }}</td>
                                <td>{{ $contact->title }}</td>
                                <td>{{ $contact->created_at }}</td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>




                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection