<?php
/*
 * SOY CMS ユーザ設定ファイル
 * user.config.php.sampleをuser.config.phpにリネームして使用して下さい。
 */

//ファイルマネージャーでアップロード可能な拡張子を追加する
//コンマ「,」区切りの文字列で指定
//元々許可されているのは "txt","html","htm","jpg","jpeg","png","gif","bmp","swf","ico","js","css","pdf","zip" のみ
define("SOYCMS_ALLOWED_EXTENSIONS","php,doc,xls,pdf");

//テンプレートへのPHPの許可、不許可 (true or false)
//デフォルトは不許可 (false)
define("SOYCMS_ALLOW_PHP_SCRIPT",false);

//PHPモジュールの使用の許可、不許可 (true or false)
//デフォルトは不許可 (false)
define("SOYCMS_ALLOW_PHP_MODULE",false);

//携帯で画像のリサイズを行わないようにする (true or false)
//デフォルトは行う (false)
define("SOYCMS_SKIP_MOBILE_RESIZE",true);

//ブロックの種類：「,」区切りで設定する。管理画面で表示されるブロックの順番を入れ替えたり、不要なブロックを削除したりできる。
define("SOYCMS_BLOCK_LIST","EntryBlockComponent,LabeledBlockComponent,MultiLabelBlockComponent,SiteLabeledBlockComponent,PluginBlockComponent");
/* 使用可能なブロックのリスト
 * HTMLBlockComponent
 * EntryBlockComponent
 * LabeledBlockComponent
 * MultiLabelBlockComponent
 * SiteLabeledBlockComponent
 * PluginBlockComponent
 * ScriptModuleBlockComponent (1.2.3以降) 
 */
 
//サイトを作成するディレクトリを指定する（デフォルトはドキュメントルート）。
//define("SOYCMS_TARGET_DIRECTORY", $_SERVER["DOCUMENT_ROOT"]);

//公開側のURL（SOYCMS_TARGET_DIRECTORYを参照するURLをhttp://から指定する）
//define("SOYCMS_TARGET_URL", "");

//管理側のドキュメントルートを動かす場合に指定
define("SOYCMS_ADMIN_ROOT", "/var/www");

//言語設定：デフォルトは日本語（ja）
//define("SOYCMS_LANGUAGE", "ja");

//無操作時間が続いたらログアウトする：デフォルトは「しない」（0）、秒単位で設定可能
//session.cookie_lifetimeより大きい値を設定しても効果はありません。
//define("SOYCMS_LOGIN_LIFETIME", 0);

//キャッシュ機能の設定
//キャッシュ機能を使うかどうか（デフォルトは使わない）
//define("SOYCMS_USE_CACHE", false);
//キャッシュの有効期間（デフォルトは設定なし）。設定しない場合はデータに変更のない限りキャッシュが有効となります。
//define("SOYCMS_CACHE_LIFETIME", 1800);//30分

//SOY Appのデータベースを各サイトごとに持てるようになる(trueでサイト側)
//SOY Inquiry(ディフォルトでは管理側:false)
//define("SOYINQUIRY_USE_SITE_DB", false);
//SOY Mail(ディフォルトでは管理側:false)
//define("SOYMAIL_USE_SITE_DB", false);