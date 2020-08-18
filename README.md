# cue-simulator



# 環境構築

1. リポジトリのクローン
    - `git clone git@github.com:ss-koishi/cue-simulator.git`
2. Laravelの環境ファイルをコピー
    - `cp /server/.env.example /server.env`
3. docker-compose起動
     - `docker-compose up -d`
4. `php` コンテナに入る
     - `docker-compose exec php /bin/bash`
5. Laravel `APP_KEY` の生成
    - `php # php artisan key:generate`
6. ページの確認
    - `localhost:80` にアクセス
