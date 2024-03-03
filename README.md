# お問い合わせフォーム
環境構築

Dockerビルド

  1.git clone git@github.com:kuma-mori/20240303test.git -b master

  2.docker-compose up -d --build

Laravel環境構築

  1.docker-compose exec php bash

  2.composer install

  3.env.exampleファイルから.envを作成、環境変数の変更

  4.php artisan key:generate
  
  5. php artisan migrate

使用技術

  ・PHP 7.4.9
  ・Laravel 8.x (8.83.27)
  ・Mysql 8.0.26

URL

  ・開発環境：http://localhost/

  ・phpMyAdmin：http://localhost:8080/


