# laravel
<h1>LifeHacks on development</h1>
<ul>
  <li><strong>npm cache clean --force</strong> - чистка кэша пакетов</li>
  <li><strong>Удаление папки .vite из /node_modules/</strong></li>
  <li><strong>Сборка build с параметром --force</strong> - после вмешательства в vite.config.js</li>
</ul>

<h2>TODO list</h2>
<ol>
  <li>Внедрить Decoupled Editor вместо Classic <i>https://ckeditor.com/docs/ckeditor5/latest/installation/getting-started/predefined-builds.html#document-editor</i>
    <ul>
        <li>Загрузка изображений</li>
    </ul>
</li>
  <li>Доработать раздел Профиль
    <ul>
        <li>Разграничение прав доступа</li>
        <li>Открытие регистрации только по ссылке</li>
        <li>Верификация E-mail</li>
    </ul>
    </li>
  <li>Купить домен на сервере и попробовать настроить CI/CD <br> <i>https://www.youtube.com/watch?v=ANj7qUgzNq4&pp=ygUFY2kvY2Q%3D</i> <br> <i>https://www.youtube.com/watch?v=e0A2hDObLmg&t=5836s&pp=ygUFY2kvY2Q%3D</i></li>
</ol>


<h2>Настройка сервера (на примере Beget)</h2>
<ol>
  <li>Установить node.js <br> <i>https://beget.com/ru/kb/how-to/web-apps/node-js#ustanovka-node-js-drugoy-versii</i></li>
  <li>Обновить composer <br> <i>https://beget.com/ru/kb/how-to/web-apps/instrukcziya-po-ustanovke-composer</i></li>
  <li>Сгенерировать закрытый и открытый ключи, закрый положить в ~/.ssh/, открытый добавить в профиле github. <br> <i>https://docs.github.com/en/authentication/connecting-to-github-with-ssh/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent</i></li>
  <li>В папке проекта <i>git clone</i>. Удаляем папку <i>public_html</i></li>
  <li><i>ln -s public public_html</i></li>
  <li><i>php artisan storage:link</i></li>
  <li><i>php artisan key:generate</i></li>
  <li><i>cp .env.example .env</i>. Указываем APP_URL и параметры БД</li>
  <li>Очищаем кэш через маршрут <i>/clear</i></li>
  <li>Кэшируем конфиг <i>php artisan config:cache</i></li>
  <li>Выполняем миграцию <i>php artisan migrate --seed</i></li>
  <li>Устанавливаем пакеты NPM <i>npm i</i></li>
  <li>Устанавливаем пакеты PHP <i>php8.1 ~/.local/bin/composer install</i></li>
</ol>
