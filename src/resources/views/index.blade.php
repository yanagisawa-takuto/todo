@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="todo__alert">
    <div class="todo__alert--success">
        Todoを作成しました
    </div>
</div>
<form action="/" method="post">
    <div class="form-container">
        <form action="/" method="post">
            <div class="flex">
                <div class="todo__wrapper">
                    <input class="todo__box" type="text" name="todo" id="todo" />
                </div>
                <div class="todo__sakusei">
                    <button class="todo__sakuseibox" type="submit">作成</button>
                </div>
            </div>
        </form>
    </div>
</form>
@endsection
@extends('layouts.app')
