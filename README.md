
はじめに

このアプリはPHPを独学で学習している私がアウトプットの１つとして作成したもので、セキュリティなどに問題があるかもしれません。  
もし実際にアプリを動作させるような場合はローカル環境で動作させてください。
あと、もし眼に余るようなトンデモナイ記述をしていたらそっと<a href="https://twitter.com/float_top">ツイッター</a>のDMにでも連絡いただければ幸いです。(；´Д`)


アプリ名
====
**<a href="https://4.kagome.xyz/games/">「Gamers」CakePHP.ver</a>**
<img src="https://user-images.githubusercontent.com/52596476/64937050-aa45bd00-d893-11e9-9aea-b8facf5e4a7c.png" width=1000>

## 簡単な説明

**<a href="https://games.kagomeee.com">「Gamers」</a>**
をcakephpで作り変えました。  
基本的な機能は変わりありませんが、cssフレームワークであるbootstrapを使用していないので細かいデザインの変更があります。  
今回はcakeの学習でもあるのですが、scssの学習にも時間を割きました。



## 機能
1. ユーザー登録機能
1. ログイン・ログアウト機能
1. 商品検索機能（楽天API）
1. コンテンツ投稿機能
1. コンテンツ編集機能
1. コンテンツ削除機能
1. マイページ機能
1. ユーザー投稿一覧表示機能


## 開発環境
使用言語・データーベース
* PHP
* HTML
* CSS（SCSS）
* MYSQL  

使用ツール・ライブラリ
* vagrant
* Font Awesome
* Atom Editor
* 楽天API

## 利用方法

ダウンロード後に `bootstrap.php` の冒頭にある
`define('ACOUNT_ID',◯◯◯◯◯◯◯);`より楽天アプリIDを設定してAPIを動作可能にしてください。  
アプリIDの発行はこちらからどうぞ<a href='https://webservice.rakuten.co.jp/'>「楽天デベロッパーズ」</a>


## 作った感想と今後の課題

cakephpの学習がメインなのですが、scssの学習にも少し力をいれました。  
今回は`@extend`や`@mixin`などを使用して共通部品などを作成しました。  
css設計についても学習したいので専門書を購入してみたいと思います。
