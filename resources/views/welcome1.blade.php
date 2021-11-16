@extends('layouts.app1')

@section('content')
    @if (Auth::check())
        
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Tasklist</h1>
                <a href="{{ route('tasklist.get', []) }}"> Tasklistを使用する </a>
            </div>
        </div>
        
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Let's Tasklist</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection
