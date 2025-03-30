## 概要

LaravelのThrottleの動作を確認するコード

## 環境

- mac (apple silicon)
- Docker version 23.0.5

## アプリケーション起動

① 環境変数ファイルをコピー
```
mv .env.example .env
```


② dockerの起動
```
docker compose up -d
```

③ 初期設定

```
docker compose exec app composer install
docker compose exec app php artisan migrate
```

## サンプルコマンド

### トークンを登録

```
curl -X POST http://localhost:8080/api/token \                                                 
     -H "Content-Type: application/json" \
     -d '{"name": "my-api-client"}'
```


### トークンを使ってAPIを叩く

```
sh test_request.sh token count

例)
sh test_request.sh ekyddLioO3mdG1WeZSTTRjvlxvSMRD6D 10
```

### 作ったトークンを確認する

```
curl http://localhost:8080/api/admin/tokens
```