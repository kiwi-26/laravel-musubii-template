@extends('layouts.default')

@section('title')
Laravel
@endsection

@section('head')
<meta name="description" content="Awesome website with Laravel!" />
@endsection

@section('content')
<div class="grid is-center is-gap-vertical-xxl is-margin-lg">
    <div class="column is-12">
        <h1 class="text is-xxl is-center">Laravel</h1>
    </div>
    <div class="column is-12">
        <div class="box is-flex is-space-right-sm is-center is-margin-right-minus-sm">
            <a class="text is-link" href="https://laravel.com/docs">Docs</a>
            <a class="text is-link" href="https://laracasts.com">Laracasts</a>
            <a class="text is-link" href="https://laravel-news.com">News</a>
            <a class="text is-link" href="https://blog.laravel.com">Blog</a>
            <a class="text is-link" href="https://nova.laravel.com">Nova</a>
            <a class="text is-link" href="https://forge.laravel.com">Forge</a>
            <a class="text is-link" href="https://vapor.laravel.com">Vapor</a>
            <a class="text is-link" href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</div>
@endsection