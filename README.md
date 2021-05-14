# php_soycms
[SOYCMS](https://github.com/inunosinsi/soycms/)をDockerコンテナにしてみました。

## 環境

- php:8.0-apache をベースにしています。すなわち、Debian系の環境です。
- SOYCMSは、ドキュメントルートのsoyディレクトリに配置しています。初期設定を行うには、/soy/soycms/にアクセスしてください。

## 使い方

単に使うだけなら、Dockerfileは不要です。

### 手っ取り早く使いたい人

このリポジトリをクローンして、

    docker compose up

### Dockerイメージを使いたい人

とりあえず動かすには、以下のディレクトリをマウントする必要があります。（`docker cp` で持ってきても構いませんが、とりあえずのものがこのリポジトリにあります。）

  - /var/www/soy/common/config
  - /etc/apache2/sites-available
  
永続化をしたいのであれば、さらに以下のディレクトリをマウントする必要があります。

  - /var/www/soy/common/db
  - /var/www
  - データベースにMySQL/MariaDBを使う場合は、そのデータディレクトリ

その他、設定にあたっての参考情報を並べておきます。

- タイムゾーンの設定は、（Debian系なので）環境変数TZを設定することでできます。　`TZ='Asia/Tokyo'`
- Apacheのアクセスログ等は、/var/log/apache2 に出力されます。
