# Symfony書き初め201 サンプルプロジェクト

## 教材
[THE FAST TRACK - 基礎から最速で学ぶSymfony5入門](https://symfony.com/doc/current/the-fast-track/ja/index.html)

## 準備するもの
- PHP8.0
- Docker
- composer

## Symfony CLIインストール
[https://symfony.com/download](https://symfony.com/download)

ローカルにSymfony CLIをダウンロード＆インストールします。

```shell
curl -sS https://get.symfony.com/cli/installer | bash
```

- M1 MacはRosettaモードで実行
- Windowsはこちらの [setup.exe](https://get.symfony.com/cli/setup.exe) をダウンロード  


## プロジェクト作成
### 1からプロジェクトを作る場合

1. プロジェクト作成
```shell
symfony new [プロジェクト名]
```

2. PHP8に変更（したい人のみ）

php-version
```text
8.0
```

composer.json
```diff
-        "php": ">=7.2.3",
+        "php": ">=8.0",
```

3. composer update（PHP8にしたい人のみ）
```shell
symfony composer update
```

### このレポジトリを利用する場合

```shell
git clone git@github.com:Ippey/SymfonyKakizome2021.git
cd SymfonyKakizome2021
symfony composer install
```

## ローカルWebサーバ実行
```shell
symfony server:start -d
symfony open:local
```

## 諸注意
- PHP8だと一部The Fast Trackと違う内容になります。
- composerでインストールするパッケージでバージョン指定されているものは、指定のバージョンをインストールしてください。
  - 各パッケージとも最新版で動作しますが、The Fast Trackと違う内容・設定になります。
