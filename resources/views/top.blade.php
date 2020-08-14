@php
    $title = env('APP_NAME');
@endphp

@extends('layouts.my')

@section('title', 'demo-laravel-crud')

@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <p>
        {{ __('My practice for basic CRUD of Laravel 5.6 on Heroku.') }}
    </p>
    <ul>
        <li>
            GitHub:
            <a href="https://github.com/nawafisuren" target="_blank">
                https://github.com/nawafisuren
            </a>
        </li>

    </ul>
    <h2>{{ __('Feature') }}</h2>
    <ul>
        <li>{{ __('All visitors can read all posts.') }}</li>
        <li>{{ __('All visitors can read all users\' profile except email address.') }}</li>
        <li>{{ __('All visitors can sign up.') }}</li>
        <li>{{ __('Each the logged in user can post, edit and delete.') }}</li>
        <li>
            {{ __('The admin can edit and delete all users\' accounts and posts.') }}
            <ul>
                <li>
                    {{ __('Admin') }}:
                    <ul>
                        <li>id: 1</li>
                        <li>name: John Doe</li>
                        <li>email: John Doe</li>
                        <li>password: 1234567</li>
                    </ul>
                </li>

            </ul>
        </li>
    </ul>
</div>
@endsection
