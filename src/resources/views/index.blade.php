@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="todo__alert">
    <div class="todo__alert--success">
        Todoを作成しました
    </div>
</div>
<div class="todo__content">
    <form class="create-form">
        <div class="create-form__item">
            
        </div>
    </form>
</div>