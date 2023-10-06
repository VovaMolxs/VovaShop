## О проекте

Данный проект онлайн магазина одежды, обладает небольшим функционалом:
- Регистрация пользователей
- Авторизация с помощью Google
- Добавление товаров в корзину
- Оформление покупки
- После оформления покупки создается заказ, который можно оплатить в личном кабинете. Система оплаты на данный момент только YooKassa
- Есть админ панель, в которой реализована возможность добавления товаров, редактирование, создание категорий, просмотр заказов, обработка заказов, просмотр транзакций и т.п.
- Фабрики для таблиц категории, товары, пользователи, отзывы. 
  - Теперь можно одной командой наполнить базу данных
- Пагинация

## Что еще не сделано:

- Bredcrumbs
- Мультиязычность, и нормальный перевод проекта
- Асинхронность существет только в корзине, надо еще сделать ее в админке
- Необходимо сделать сервис классы, для выноса излишней логики из контроллеров и моделей
- и др.

## Установка

- Клонируйте данный репозиторий себе
- создайте .env файл и сгенерируйте ключ приложения php artisan key:generate
- В файле конфигурации .env в конце добавьте следующие строки
  - YOOKASSA_SHOP_ID=239596
  - YOOKASSA_SECRET_KEY=test_QVtWNWEmC-fQi8lZ9ivsnpUCTSvMvdxVX4WxdCCb_Yk
  - GOOGLE_CLIENT_ID=471322099551-drcrnls17a4arfhq4c2ceja8vga0alj9.apps.googleusercontent.com
  - GOOGLE_CLIENT_SECRET_KEY=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
  - GOOGLE_REDIRECT=[в данном месте нужно вставить сгенирированный адресс ngrock, и его же в л/к google]/google/callback
- В корневой дирректории проекта выполните команду composer install
- В корневой дирректории проекта выполните команду npm install
- Выполните миграции php artisan migrate
- Запустите фабрику для наполнения проекта контентом php artisan migrate:fresh --seed
- Запустите сборщик ассетов vite npm run dev
- перейдите в каталог cd public и выполните команду ./ngrok http --scheme=https domain:80, где вместо domain укажите свой домен
  - в настройках openserver в алиасах прописать для своего домена *.ngrok-free.app 
  - Возможно вам придется зарегистрироваться на сайте ngrock.
- Последний пункт можно пропустить, но если этого не сделать верификация оплаты работать не будет. (В личном кабинете после оплаты, платеж будет иметь статус не оплачен)
  - Также без ngrock автоизация работать не будет. 
  - Сгенирированный адресса нужно поменять и в личном кабинете yookass и google

## Особенности проекта

Используется сборщик ассетов vite [documentation](https://laravel.com/docs/10.x/vite#main-content) 

Для работы системы оплаты при локальной разработке, необходимо создавать безопасное соединение, в этом нам помогает утилита [ngrock](https://ngrok.com/docs/secure-tunnels/tunnels/), Скачиваем утилиту, помещаем ее в папку public, и в консоли из папки public прописываем ./ngrok http --scheme=https domain:80 в настройках openserver в алиасах прописать для своего домена *.ngrok-free.app

