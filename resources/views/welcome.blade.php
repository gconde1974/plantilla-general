@extends('layouts.default')

@section('welcome')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
      <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
      <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
      <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>

    <div class="content">
        <div class="title m-b-md">
            {{ $posts }}
            <i class="fas fa-comment-dollar"></i>Royal Depurado <i class="fas fa-award"></i>
        </div>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil earum repellendus quos vel consequatur temporibus quisquam labore sunt a, debitis dolorem cum suscipit quam ea, iste quidem explicabo eaque libero.</p>
        <p></p>
        <div>
            <i class="fas fa-address-book"></i> aqui va el fontawsome <i class="fab fa-accessible-icon"></i>
        </div>
        <div class="links">
            <a href="https://laravel.com/docs">Documentation</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://nova.laravel.com">Nova</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</div>
@endsection
