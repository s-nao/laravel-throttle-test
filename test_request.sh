#!/bin/bash

# 引数チェック
if [ "$#" -lt 2 ]; then
  echo "Usage: $0 <TOKEN> <REQUEST_COUNT>"
  exit 1
fi

# 引数からトークンとリクエスト回数を取得
TOKEN=$1
REQUEST_COUNT=$2

# リクエストを送信するURL
URL="http://localhost:8080/api/test"

# リクエストをループで送信
for ((i=1; i<=REQUEST_COUNT; i++))
do
  echo "Sending request #$i"
  curl -H "Authorization: Bearer $TOKEN" $URL
  echo -e "\n"
done