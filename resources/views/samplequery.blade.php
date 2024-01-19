<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/query.css">
    <title>Опрос</title>
</head>

<body>
    <div class="conteiner">
        <h1>ОТВЕТЬТЕ НА 4 ВОПРОСА</h1>
        <p>И мы сделаем <strong>визуализацию с индивидуальным подбором</strong> изображений по вашему запросу</p>
        <div class="content">
            <div class="border" @yield('border')></div>
            @yield('carts')
        </div>
    </div>
    <script src="js/query.js"></script>
</body>

</html>