@extends('sampleindex')

@section('h1')
    <h1>визуализация почти готова</h1>
@endsection

@section('p')
    Прикепи фото стены (комнаты, где будут фотообои), напиши номер телефона и жми "Получить визуализацию", мы проверим получившуюся подборка на твою стену и отправим результа на WhatsApp или Viber.
@endsection

@section('cont')
<form action="/contacts/chek" method="post" enctype="multipart/form-data">
@csrf
{{ csrf_field() }}
<div><input type="text" placeholder="Имя" name="name" required></div>
<div><input type="text" placeholder="Номер телфона" name="phone" required></div>
<div>
    <label class="input-file">
        <input type="file" name="file" required>		
        <span>Выберите файл</span>
  </label>
</div>
<div class="button">
<button class="button">Получить визуализацию</button>
</div>
</form>
@endsection
