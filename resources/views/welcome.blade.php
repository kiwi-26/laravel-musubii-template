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
        <div class="grid is-gap is-center">
            <span class="column"><a class="text is-link" href="https://laravel.com/docs">Docs</a></span>
            <span class="column"><a class="text is-link" href="https://laracasts.com">Laracasts</a></span>
            <span class="column"><a class="text is-link" href="https://laravel-news.com">News</a></span>
            <span class="column"><a class="text is-link" href="https://blog.laravel.com">Blog</a></span>
            <span class="column"><a class="text is-link" href="https://nova.laravel.com">Nova</a></span>
            <span class="column"><a class="text is-link" href="https://forge.laravel.com">Forge</a></span>
            <span class="column"><a class="text is-link" href="https://vapor.laravel.com">Vapor</a></span>
            <span class="column"><a class="text is-link" href="https://github.com/laravel/laravel">GitHub</a></span>
        </div>
    </div>
</div>
@endsection