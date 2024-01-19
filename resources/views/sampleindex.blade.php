<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>ArtFresco</title>
</head>

<body>    
<div class="conteiner">
    <div class="text">
        <div class="h1">
            @yield('h1')
        </div>
        <div class="p">
            @yield('p')
        </div>
        <div class="button">
            @yield('button')
        </div>
        @yield('cont')
        @yield('preview')
    </div>
</div>
@isset($_GET['success'])
<style>
    .conteiner{
        background: #000;
        background-image: url(../img/1549633171_9f07c2.jpg);
        opacity: 0.2;
    }
</style>
<div class="massage">
    <form action="/" method="get">
<p>Мы обрабатаем вашу заявку в ближайшее время и пришлём подборку визуализаций по вашим пожеланиям в WhatsApp или Viber</p>
<button>Буду ждать</button>    
</form>
</div>
@endisset
<script src="js/index.js"></script>
</body>

</html>