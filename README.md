## 概要

LaravelのThrottleの動作を確認するコード

## 環境

- mac (apple silicon)
- Docker version 23.0.5

## アプリケーション起動

dockerを使用

```
docker compose up -d
```


起動したコンテナに入る

```
php artisan migrate
```

## サンプルコマンド

トークンを登録
```
curl -X POST http://localhost:8080/api/token \                                                 
     -H "Content-Type: application/json" \
     -d '{"name": "my-api-client"}'
```


トークンを使ってAPIを叩く
```
curl -H "Authorization: Bearer [token]" http://localhost:8080/api/test
```