
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">
</head>
<header>
    <h1>Городской портал</h1>
    <div>
        <a href="{{ route('login') }}" class="button">Войти</a>
        <a href="{{ route('register') }}" class="button">Зарегистрироваться</a>
    </div>

</header>
<body>
    <main>
        <section class="latest-problems">
            <h2>Последние решенные проблемы</h2>
            <div class="problem">
                <div class="image-container">
                    <img class="after" src="after1.jpg" alt="После">
                    <img class="before" src="before1.jpg" alt="До">
                </div>
                <div class="details">
                    <p class="timestamp">Май 25, 2024</p>
                    <h3 class="title">Неисправность уличного освещения на улице Пушкина</h3>
                    <p class="category">Электрика</p>
                </div>
            </div>
            <div class="problem">
                <div class="image-container">
                    <img class="after" src="after2.jpg" alt="После">
                    <img class="before" src="before2.jpg" alt="До">
                </div>
                <div class="details">
                    <p class="timestamp">Май 24, 2024</p>
                    <h3 class="title">Неработающий фонтан в сквере Центральном</h3>
                    <p class="category">Городская инфраструктура</p>
                </div>
            </div>
            <div class="problem">
                <div class="image-container">
                    <img class="after" src="after3.jpg" alt="После">
                    <img class="before" src="before3.jpg" alt="До">
                </div>
                <div class="details">
                    <p class="timestamp">Май 23, 2024</p>
                    <h3 class="title">Поврежденный тротуар на перекрестке улицы Ленина и проспекта Гагарина</h3>
                    <p class="category">Дорожное строительство</p>
                </div>
            </div>
            <div class="problem">
                <div class="image-container">
                    <img class="after" src="after4.jpg" alt="После">
                    <img class="before" src="before4.jpg" alt="До">
                </div>
                <div class="details">
                    <p class="timestamp">Май 22, 2024</p>
                    <h3 class="title">Недостаточное количество мусорных контейнеров на проспекте Мира</h3>
                    <p class="category">Жилищно-коммунальные услуги</p>
                </div>
            </div>
        </section>

        <div class="counter">
            <h2>Количество решенных заявок: <span id="problems-counter">0</span></h2>
        </div>
    </main>

    <script>
        // JS-код для обновления счетчика решенных заявок
        const problemsCounter = document.getElementById('problems-counter');
        // Здесь может быть логика для получения и обновления счетчика, например, через AJAX-запросы к серверу
        problemsCounter.textContent = 'Здесь будет количество решенных заявок';
    </script>
</body>
</html>
