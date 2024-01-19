@extends('sampleindex')


@section('h1')
<h1>ПРИМЕРЬ ФОТООБОИ НА СВОЮ СТЕНУ</h1>
@endsection

@section('p')
<p>Ответь на несколько вопросов и получи бесплатную визуализацию фотообоев в своёи интерьере. Прикрепи
    фото
    стены и мы сделаем тебе подборку подходящих сюжетов.</p>
@endsection

@section('button')
<a href="/query"><button>Получить визуализацию</button></a>
@endsection
@section('preview')
<div class="preview">
<img src="img/kaspersky-os-quake.webp" alt="">
<div class="blok"></div>
<p>Бесплатная коррекция цвета и эллементов и отрисовка по вашим пожеланиям</p>
</div>
@endsection

@isset($_GET['success'])
    


@endisset