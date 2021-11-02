@extends('layouts.app')

@section('titles')
    contact
@endsection

@section('content')
<h1>contact</h1>

@if($errors->any())
    <div class="alertalert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('contact-form') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">
            Введите имя
        </label>
        <input type="text" name="name" placeholder="введите имя" id="name" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">
            Введите email
        </label>
        <input type="text" name="email" placeholder="введите email" id="email" class="form-control">
    </div>

    <div class="form-group">
        <label for="subject">
            Тема сообщения
        </label>
        <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
    </div>

    <div class="form-group">
        <label for="massage">
            Сообщение
        </label>
        <textarea name="massage" id="massage" class="form-control" placeholder="Введите сообщение"></textarea>
    </div>

    <button type="submit" class="btn-success">отправить</button>


</form>
@endsection
