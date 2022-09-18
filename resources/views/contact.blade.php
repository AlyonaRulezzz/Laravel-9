@extends('layouts.app')

@section('content')
  <h1>Контакты</h1>

  <form action='{{route('contact-form')}}' method='post'>
    @csrf
    <div class='form-group'>
      <label for='title'>Введите название книги</label>
      <input type='text' name='title' placeholder='Введите название книги' id='title'       class='form-control'>
    </div>
    
    <div class='form-group'>
      <label for='author'>Введите автора книги</label>
      <input type='text' name='author' placeholder='Введите автора книги' id='author'       class="form-control">
    </div>

    <button type='submit' class='btn btn-success'>Добавить</button>
  </form>
@endsection


<div>
  <nav>
    <a href="{{route('home')}}">Главная></a>
    <a href="{{route('about')}}">О нас></a>
    <a href="{{route('contact')}}">Контакты></a>
    <a href="">Список книг с указанием автора</a>
  </nav>
</div>

