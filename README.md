# todo

## 概要
todoファイルです

# 環境構築手順

## Dockerを起動

```bash
docker compose up -d --build code .
```

---

## Laravelパッケージをインストールする

```bash
docker-compose exec php bash
composer install
```

> ※「開発環境を共有してもらう」場合は、`composer install`は不要です。

---

## envファイルの準備

```bash
cp src/.env.example src/.env
exit
```

---

## .envファイルの修正（VSCodeで開く）

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass
```

---


## Laravelのセットアップ

```bash
docker-compose exec php bash
composer install
php artisan key:generate
php artisan migrate
php artisan xxx
```

---


## 各ページのBladeファイル作成

以下を作成してください：

```
resources/views/
├── index.blade.php
├── confirm.blade.php
└── thanks.blade.php
```

---

## CSSファイルの作成

```
public/css/
├── sanitize.css
├── index.css
├── confirm.css
└── thanks.css
```

## 使用技術(実行環境)
- PHP 8.4.8
- Laravel 8.83.8
- MySQL 8.0.26

## ER図
![alt](erd.png)

## 動作URL
- 開発環境：http://localhost/
- phpMyAdmin:：http://localhost:8080/