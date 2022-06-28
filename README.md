# php_soycms
[SOYCMS](https://github.com/inunosinsi/soycms/)をDockerコンテナにしてみました。

## 環境

- [php:apache](https://hub.docker.com/_/php?tab=description) をベースにしています。すなわち、Debian系の環境です。
- SOYCMSは、ドキュメントルートのsoyディレクトリに配置しています。初期設定を行うには、/soy/soycms/にアクセスしてください。

## 使い方

単に使うだけなら、Dockerfileは不要です。

### A. とりあえず使ってみたい人

このリポジトリをクローンして、

    docker-compose up

### B. とりあえず永続化もしてみたい人

まずこのリポジトリをクローンします。mariadbディレクトリとsitesディレクトリを作成し、docker-compose.ymlのコメントを解除（3行）して、

    docker-compose up

MariaDBのパスワードは、soycms/config/db/mysql.phpと.envの2カ所にあります。（猫が好きではないなどの理由で）変更したい人は両方のファイルを編集して下さい。

### C. いろいろイジりたい人

docker-compose.yml を参考にして下さい。以下のディレクトリをどうにかする必要があるでしょう。

  - /var/www/soy/common/config （SOYCMSの設定）
  - /etc/apache2/sites-available （Apacheの設定）
  - /usr/local/etc/php/conf.d （PHPの設定。これはこのままでもいいかもしれない）  

永続化をしたいのであれば、さらに以下のディレクトリをマウントする必要があります。

  - /var/www/soy/common/db
  - /var/www/sites
  - データベースにMySQL/MariaDBを使う場合は、そのデータディレクトリ

### D. SoyAppを使いたい人

3.2.18から、SoyAppにも対応しています。SoyAppを置いたディレクトリを、/var/www/soy/app/webapp にマウントして下さい。

## その他の参考情報

その他、設定にあたっての参考情報を並べておきます。

- タイムゾーンの設定は、（Debian系なので）環境変数TZを設定することでできます。　`TZ='Asia/Tokyo'`
- Apacheのアクセスログ等は、/var/log/apache2 に出力されます。
