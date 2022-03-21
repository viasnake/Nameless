<?php
/*
 *  Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr12
 *
 *  Translator
 *  - SimplyRin( @SimplyRin_, https://www.simplyrin.net )
 *  - Mari0914( @Mari0914_Main, https://mari0914.japanminigame.net )
 *  - snake( @ViaSnake, https://github.com/ViaSnake )
 *
 *  License: MIT
 *
 *  Japanese Language - Admin
 */

$language = [
    /*
     *  Admin Control Panel
     */
    // Login
    're-authenticate' => 'StaffCPログイン',

    // Sidebar
    'dashboard' => 'ダッシュボード',
    'configuration' => 'コンフィグ',
    'layout' => 'レイアウト',
    'user_management' => 'ユーザー管理',
    'admin_cp' => 'StaffCP',
    'overview' => '概要',
    'core' => 'コア',
    'integrations' => '連携',
    'minecraft' => 'Minecraft',
    'modules' => 'モジュール',
    'security' => 'セキュリティ',
    'styles' => 'スタイル',
    'users_and_groups' => 'ユーザー・グループ',

    // Overview
    'running_nameless_version' => '実行中のNamelessMCのバージョン:<strong>{x}</strong>', // Don't replace "{x}"
    'running_php_version' => '実行中のPHPのバージョン:<strong>{x}</strong>', // Don't replace "{x}"
    'statistics' => '統計情報',
    'registrations' => '登録',
    'topics' => 'トピック',
    'posts' => 'ポスト',
    'notices' => '通知',
    'no_notices' => '通知はありません。',
    'email_errors_logged' => '電子メールエラーが検出されました。',
    'upgrade_php_version' => 'PHPのバージョンを7.4以上にアップグレードしてください。次のNamelessのリリースでは、現在使用しているバージョンがサポートされなくなります。',

    // Core
    'mode_toggle' => 'ダークモード',
    'settings' => '設定',
    'general_settings' => '一般設定',
    'sitename' => 'サイト名',
    'default_language' => '初期言語',
    'default_language_help' => '初期言語に設定している言語が登録後最初の言語になりますが、各ユーザーは後でインストールされている言語から別の言語を選択できます。',
    'install_language' => '言語インストール',
    'update_user_languages' => 'アップデートユーザー言語',
    'update_user_languages_warning' => 'この設定を実行すると、すでに別言語を指定しているユーザーも現在設定している言語(初期言語)に強制的に変更されます。',
    'updated_user_languages' => '全ユーザーの言語を更新しました。',
    'installed_languages' => '言語が正常にインストールされました。',
    'default_timezone' => '初期タイムゾーン',
    'registration' => '登録',
    'enable_registration' => '新規登録を許可しますか？',
    'verify_with_mcassoc' => 'MCAssocで各ユーザーのMinecraftアカウントを検証しますか？',
    'email_verification' => 'メール認証を有効にしますか？',
    'registration_settings_updated' => '登録設定が正常に変更されました。',
    'homepage_type' => 'ホームページタイプ',
    'post_formatting_type' => 'ポストフォーマットタイプ',
    'portal' => 'ポータル',
    'private_profiles' => 'プライベートプロフィールをユーザーに許可しますか？',
    'missing_sitename' => '2~64 文字でサイト名を入力してください。',
    'missing_contact_address' => '3~255 文字のメールアドレスを入力してください。',
    'use_friendly_urls' => 'フレンドリーURL',
    'use_friendly_urls_help' => '<strong>重要</strong>: サーバー設定にてmod_rewriteと.htaccessを使用できるように設定する必要があります。IISの場合はルートディレクトリのweb.config.exampleをweb.configに変更してください。',
    'config_not_writable' => '<strong>core/config.php</strong>ファイルへの書き込み許可がありません。ファイルアクセス権限を確認して下さい。',
    'settings_updated_successfully' => '一般設定が正常に更新されました。',
    'social_media' => 'ソーシャルメディア',
    'youtube_url' => 'YouTube URL',
    'twitter_url' => 'Twitter URL',
    'twitter_dark_theme' => 'Twitterダークテーマを使用しますか？',
    'dark' => 'ダーク',
    'light' => 'ライト',
    'google_plus_url' => 'Google+ URL',
    'facebook_url' => 'Facebook URL',
    'social_media_settings_updated' => 'ソーシャルメディア設定が正常に更新されました。',
    'successfully_updated' => '正常に更新されました。',
    'debugging_and_maintenance' => 'メンテナンス',
    'maintenance' => 'メンテナンス',
    'enable_debug_mode' => 'デバッグモードを有効にしますか？',
    'debugging_settings_updated_successfully' => 'デバッグ・メンテナンス設定が正常に更新されました。',
    'force_https' => 'httpsを強制させますか？',
    'force_https_help' => '有効にするとhttpは自動でhttpsに置き換わります。有効にするには、必ず有効なサーバー証明書をサーバーに設定しておいてください。',
    'force_www' => 'wwwを強制させますか？',
    'contact_email_address' => '連絡先メールアドレス',
    'emails' => 'メール',
    'email_errors' => 'メールエラー',
    'registration_email' => '登録メール',
    'contact_email' => '連絡先メールアドレス',
    'forgot_password_email' => 'パスワードを忘れた場合',
    'unknown' => '不明',
    'delete_email_error' => 'エラー削除',
    'confirm_email_error_deletion' => '選択中のエラーを削除してもよろしいですか？',
    'viewing_email_error' => 'エラー表示',
    'unable_to_write_email_config' => '<strong>core/email.php</strong>ファイルに書き込みできません。ファイルアクセス権限を確認して下さい。',
    'enable_mailer' => 'PHPMailerを有効にしますか？',
    'enable_mailer_help' => 'php.iniで電子メール設定が完了していない場合こちらを使用できます。PHPMailerを使用するには、GmailやSMTPプロバイダなどの電子メールを送信できるプロバイダーサービスが必要です。',
    'outgoing_email' => '送信メールアドレス',
    'outgoing_email_info' => 'NamelessMCが電子メールの送信に使用する電子メールアドレスです。',
    'mailer_settings_info' => 'PHPMailerを有効にした場合、以下のフィールドに必要事項を記入する必要があります。以下のフィールドに記入する方法については <a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-SMTP-with-Nameless-(e.g.-Gmail-or-Outlook)" target="_blank">Wiki</a>を確認して下さい。',
    'host' => 'ホスト',
    'email_port' => 'ポート',
    'email_port_invalid' => 'Please insert a valid email port.',
    'email_password_hidden' => 'セキュリティ保護のためパスワードは非表示です。',
    'send_test_email' => 'テストメール 送信',
    'send_test_email_info' => '<strong>{x}</strong>にNamelessMCからテストメールを送信します。テストを実行することで、メール設定が正しくされているかを確認できます。テスト終了後確認されたエラーは表示されます。送信するには「送信」を押してください。', // Don't replace {x}
    'send' => '送信',
    'test_email_error' => 'テストメールエラー:',
    'test_email_success' => 'テストメールが正常に送信されました。',
    'terms_error' => '利用規約が<strong>2048文字</strong>以下であることをご確認ください。',
    'edit_email_messages' => 'メールメッセージ',
    'email_language_info' => 'あなたの言語が表示されていませんか？\'emails.php\'がlanguageディレクトリにあり、ウェブサーバが書き込み可能であることを確認してください。',
    'editing_language' => '言語を編集',
    'email_preview_popup' => 'プレビュー',
    'email_preview_popup_message' => 'メールのプレビューはこちらです。',
    'email_message_greeting' => '挨拶',
    'email_message_thanks' => '感謝',
    'email_message_options' => 'オプション',
    'email_message_subject' => '件名',
    'email_message_message' => 'メッセージ',
    'privacy_policy_error' => 'プライバシーポリシーが<strong>100000文字</strong>以下であることをご確認ください。',
    'terms_updated' => '利用規約・プライバシーポリシーが正常に変更されました。',
    'avatars' => 'アバター',
    'allow_custom_avatars' => 'アバターをユーザーが変更できるようにしますか？',
    'default_avatar' => 'デフォルトアバター',
    'custom_avatar' => 'カスタムアバター',
    'minecraft_avatar' => 'Minecraftアバター',
    'minecraft_avatar_source' => 'Minecraftアバダーデータサーバー',
    'built_in_avatars' => 'ビルトインのアバターサービス',
    'minecraft_avatar_perspective' => 'Minecraftアバターの表示部位',
    'face' => '顔',
    'head' => '頭',
    'bust' => '胸',
    'select_default_avatar' => '新しいデフォルトアバターを選択:',
    'no_avatars_available' => 'デフォルトアバターがアップロードされていません。「画像アップロード」を選択後、デフォルトにするアバターを選択してください。',
    'avatar_settings_updated_successfully' => 'アバター設定が正常に更新されました。',
    'navigation' => 'ナビゲーション',
    'navbar_order' => 'ナビゲーションバー順番',
    'navbar_order_instructions' => 'ナビゲーションバー順番は、各メニューの順番を設定できます。一番最初は「1」、二番目以降はそれ以上の数字を設定することで順番を調節できます。',
    'navbar_icon' => 'ナビゲーションバーアイコン',
    'navbar_icon_instructions' => 'ナビゲーションバーアイコンは<a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank" rel="noopener nofollow">Font Awesome</a>, <a href="https://semantic-ui.com/elements/icon.html" target="_blank" rel="noopener nofollow">Semantic UI</a>を参照して使用したいアイコンのHTMLソースを貼り付けてください。',
    'navigation_settings_updated_successfully' => 'ナビゲーションバーの設定が正常に更新されました。',
    'dropdown_items' => 'ドロップダウンメニュー',
    'enable_page_load_timer' => 'ページロード時間を表示しますか？',
    'captcha_general' => '登録ページでCaptchaを有効にしますか？',
    'captcha_login' => 'ログインページでCaptchaを有効にしますか？',
    'captcha_type' => 'Captchaの種類',
    'captcha_site_key' => 'Captchaサイトキー',
    'captcha_secret_key' => 'Captchaシークレットキー',
    'invalid_recaptcha_settings' => '{x}の資格情報が無効です。サイトキーとシークレットキーが正しいか確認してください。', // Don't replace {x}
    'registration_disabled_message' => '新規登録無効時のメッセージ',
    'enable_nicknames_on_registration' => 'ユーザー登録時、Minecarft以外のユーザーネームの登録を許可しますか？',
    'validation_promote_group' => '検証後昇格先グループ',
    'validation_promote_group_info' => 'アカウントの検証が完了したユーザーが昇格されるグループです。',
    'login_method' => 'ログイン使用メゾット',
    'privacy_and_terms' => '規約設定',
    'dropdown_name' => 'ドロップダウン名',
    'editing_messages' => 'メッセージの編集',
    'emails_mass_message' => 'メールのメッセージ',
    'sending_mass_message' => '大量のメッセージの送信',
    'emails_mass_message_sent_successfully' => '大量のメールメッセージの送信に成功しました。',
    'emails_mass_message_replacements' => 'メールメッセージでは、変数を使用することができます。サポートされている変数: {username}, {sitename}',
    'emails_mass_message_loading' => '読み込み中... ページを再読み込みしないでください。しばらく時間がかかる場合があります。',
    'administrator' => '管理者',
    'administrator_permission_info' => 'この権限を持つメンバーは、すべての権限を持つことになります。これは許可するのは危険です。',

    // Placeholders
    'placeholders' => 'プレースホルダー',
    'enable_placeholders' => 'プレースホルダーを有効にしますか？',
    'updated_placeholder_settings' => 'プレースホルダーの設定を更新しました。',
    'placeholders_info' => 'プレースホルダーは、NamelessMC Spigotプラグインが各プレイヤーの統計情報をウェブサイトに送信し、プレイヤーがプロフィールやフォーラムの投稿に表示できるようにするためのものです。',
    'placeholders_none' => 'プレースホルダーはありません。',
    'placeholders_server_id' => 'サーバーID',
    'placeholders_name' => '名前',
    'placeholders_value' => '値',
    'placeholders_last_updated' => '最終更新日',
    'placeholders_friendly_name' => 'フレンドリーネーム',
    'placeholders_friendly_name_info' => 'プレースホルダーに\'ニックネーム\'を設定するには、これを使用します。ニックネームは、生の名前の代わりに使用されます。',
    'placeholders_show_on_profile' => 'プロフィールに表示',
    'placeholders_show_on_profile_info' => '各ユーザーのプロフィールにプレースホルダーを表示するかどうか。',
    'placeholders_show_on_forum' => 'フォーラムでの表示',
    'placeholders_show_on_forum_info' => '各ユーザーのフォーラム投稿にプレースホルダーを表示するかどうか。',

    // Placeholder leaderboards
    'leaderboard_settings' => 'リーダーボードの設定',
    'placeholder_leaderboard_settings' => 'リーダーボードプレースホルダーの設定',
    'placeholder_leaderboard_info' => 'リーダーボードプレースホルダーでは、サーバー上で任意のプレースホルダーに応じてランク付けされたプレイヤーを表示するリーダーボードを作成することができます。',
    'placeholder_leaderboard_enable_info' => 'リーダーボードは、コイン、キル数、採掘したブロックなどの数値を表すプレースホルダーとの相性が抜群です。テキストベースのプレースホルダーでリーダーボードを有効にした場合、期待通りの順序で表示されるかどうかは分かりません。',
    'placeholder_leaderboard_updated' => 'リーダーボード設定の更新に成功',
    'placeholder_leaderboard_enabled' => 'リーダーボードの有効化',
    'placeholder_leaderboard_title' => 'リーダーボードタイトル',
    'placeholder_leaderboard_sort' => 'リーダーボードの並び替え',

    // SEO
    'seo' => 'SEO',
    'google_analytics' => 'Google Analytics',
    'google_analytics_help' => 'ウェブサイトにGoogle Analyticsを追加して、訪問者や統計情報を追跡します。この機能を利用するには、Google Analyticsのアカウントを作成する必要があります。Google AnalyticsのWeb Property IDを入力します。IDはUA-XXXXA-Xのような形式をしており、アカウント情報やGoogleが提供するトラッキングコードに記載されています。',
    'sitemap' => 'サイトマップ',
    'seo_settings_updated_successfully' => 'SEO設定の更新に成功しました。',

    // Reactions
    'icon' => 'アイコン',
    'type' => 'タイプ',
    'positive' => 'ポジティブ',
    'neutral' => 'ナチュラル',
    'negative' => 'ネガティブ',
    'editing_reaction' => 'リアクション編集',
    'html' => 'HTML',
    'new_reaction' => '<i class="fa fa-plus-circle"></i>新しいリアクション',
    'creating_reaction' => 'リアクション作成',
    'no_reactions' => 'リアクションが設定されていません。',
    'reaction_created_successfully' => 'リアクションが正常に作成されました。',
    'reaction_edited_successfully' => 'リアクションが正常に編集されました。',
    'reaction_deleted_successfully' => 'リアクションが正常に削除されました。',
    'name_required' => '名前は必須です。',
    'html_required' => 'HTMLは必須です。',
    'type_required' => 'タイプは必須です。',
    'name_maximum_16' => '名前は<strong>16文字</strong>以内にする必要があります。',
    'html_maximum_255' => 'HTMLは<strong>255文字</strong>以内で指定してください。',
    'confirm_delete_reaction' => '選択中のリアクションを削除してもよろしいですか？',

    // Custom profile fields
    'custom_fields' => 'カスタムプロフィール',
    'new_field' => '<i class="fa fa-plus-circle"></i>新しいフィールド',
    'required' => '必須',
    'editable' => '編集許可',
    'public' => '全体公開',
    'forum_posts' => 'フォーラムで表示',
    'text' => 'テキスト',
    'textarea' => 'テキスト エリア',
    'date' => '日付',
    'creating_profile_field' => 'プロフィールフィールド作成',
    'editing_profile_field' => 'プロフィールフィールド編集',
    'field_name' => 'フィールド名',
    'profile_field_required_help' => '必須に設定されたフィールドはユーザーが必ず入力する必要があるフィールドとなり、登録時に設定画面が表示されます。',
    'profile_field_public_help' => 'パブリックフィールドはすべてのユーザーに表示されますが、無効になっている場合は権限保持者のみ値を表示できます。',
    'profile_field_error' => '2~16文字のフィールド名を入力してください。',
    'description' => '説明',
    'display_field_on_forum' => 'フォーラムにフィールドを表示しますか？',
    'profile_field_forum_help' => '有効にすると、フォーラムの投稿のユーザー情報枠にフィールド内容を表示します。',
    'profile_field_editable_help' => '有効にすると、ユーザーはプロフィール設定でフィールドを編集することができるようになります。',
    'no_custom_fields' => 'カスタムフィールドが存在しません。',
    'profile_field_updated_successfully' => 'プロフィールフィールドが正常に更新されました。',
    'profile_field_created_successfully' => 'プロフィールフィールドが正常に作成されました。',
    'profile_field_deleted_successfully' => 'プロフィールフィールドが正常に削除されました。',

    // Minecraft
    'enable_minecraft_integration' => 'Minecraft連携を有効にしますか？',
    'mc_service_status' => 'Minecraft サービスステータス',
    'service_query_error' => 'サービスのステータスを取得できません。',
    'authme_integration' => 'AuthMe 連携',
    'authme_integration_info' => 'AuthMe 連携が有効になっている場合、ユーザーはゲーム内でのみ登録できます。',
    'enable_authme' => 'AuthMe 連携を有効にしますか？',
    'authme_db_address' => 'AuthMe データベースアドレス',
    'authme_db_port' => 'AuthMe データベースポート',
    'authme_db_name' => 'AuthMe データベース名',
    'authme_db_user' => 'AuthMe データベースユーザー名',
    'authme_db_password' => 'AuthMeデータベースパスワード',
    'authme_db_password_hidden' => 'AuthMeデータベースのパスワードは、セキュリティ上の理由から非表示になっています。',
    'authme_hash_algorithm' => 'AuthMeハッシュアルゴリズム',
    'authme_db_table' => 'AuthMe ユーザーテーブル',
    'enter_authme_db_details' => '有効なデータベース情報を入力してください。',
    'authme_password_sync' => 'Authmeパスワードを同期しますか？',
    'authme_password_sync_help' => '有効にするとユーザーのパスワードが更新されるたびに、Web サイトのパスワードも更新されます。',
    'minecraft_servers' => 'Minecraftサーバー',
    'account_verification' => 'Minecraftアカウントの確認',
    'server_banners' => 'サーバーバナー',
    'query_errors' => 'クエリエラー',
    'add_server' => '<i class="fa fa-plus-circle"></i>サーバー追加',
    'no_servers_defined' => '設定済みのサーバーは存在しません。',
    'query_settings' => 'クエリ設定',
    'default_server' => '初期サーバー',
    'no_default_server' => '初期サーバーが存在しません。',
    'external_query' => '外部クエリを使用しますか？',
    'external_query_help' => 'デフォルトのサーバークエリが機能しない場合は、このオプションを有効にします。',
    'adding_server' => 'サーバー追加',
    'server_name' => 'サーバー名',
    'server_address' => 'サーバーアドレス',
    'server_address_help' => 'ポート番号を除くアドレスを入力してください。',
    'server_port' => 'サーバーポート',
    'parent_server' => '親サーバー',
    'parent_server_help' => '親サーバーは、Bungeecordの場合主幹サーバーとなっているものを選択してください。',
    'no_parent_server' => '親サーバーなし',
    'bungee_instance' => 'BungeeCord 主幹サーバーですか？',
    'bungee_instance_help' => 'サーバーがBungeeCord主幹サーバーである場合はこのオプションを選択してください。',
    'bedrock' => 'Bedrock?',
    'bedrock_help' => 'Select this option if the server is a Bedrock server.',
    'server_query_information' => 'ウェブサイトにオンラインプレーヤーのリストを表示するには、サーバーの<strong>server.properties</strong>ファイルで\'enable-query\'オプションを<strong>有効</strong>にする必要があります',
    'enable_status_query' => 'ステータスクエリを有効にしますか？',
    'status_query_help' => '有効にすると、ステータスページに接続上可能状況を表示できます。',
    'show_ip_on_status_page' => 'ステータスページにIPを表示しますか？',
    'show_ip_on_status_page_info' => 'これを有効にすると、ユーザーはステータスページでIPアドレスを表示したりコピーしたりすることができるようになります。',
    'enable_player_list' => 'プレイヤーリストを有効にしますか？',
    'pre_1.7' => '1.7 より古いMinecraftを使用していますか？',
    'player_list_help' => '有効にすると、ステータスページにログインしているユーザーのリストが表示されます。',
    'server_query_port' => 'サーバークエリポート',
    'server_query_port_help' => 'これはサーバーのserver.propertiesファイルのquery.portオプションの値と同じです。ただし、server.propertiesファイル内のenable-queryオプションがtrueに設定されている必要があります。',
    'server_name_required' => 'サーバー名を入力して下さい。',
    'server_name_minimum' => 'サーバー名が<strong>1文字</strong>以上であることを確認してください。',
    'server_name_maximum' => 'サーバー名が<strong>20文字</strong>以下であることを確認してください。',
    'server_address_required' => 'サーバーのアドレスを入力してください',
    'server_address_minimum' => 'サーバーアドレスが<strong>1文字</strong>以上であることを確認してください。',
    'server_address_maximum' => 'サーバーアドレスが<strong>64文字</strong>以下であることを確認してください。',
    'server_port_required' => 'サーバーポートを入力してください',
    'server_port_minimum' => 'サーバーポートが<strong>2文字</strong>以上であることを確認してください。',
    'server_port_maximum' => 'サーバーポートが<strong>5文字</strong>以下であることを確認してください。',
    'server_parent_required' => '親サーバーを選択して下さい。',
    'query_port_maximum' => 'クエリポートが<strong>5文字</strong>以下であることを確認してください。',
    'server_created' => 'サーバーが正常に作成されました。',
    'confirm_delete_server' => '選択中のサーバーを削除してもよろしいですか？',
    'server_updated' => 'サーバーが正常に更新されました。',
    'editing_server' => 'サーバー編集',
    'server_deleted' => 'サーバーが正常に削除されました。',
    'unable_to_delete_server' => 'サーバーを削除できません。',
    'leave_port_empty_for_srv' => 'ポートが25565である場合、またはドメインがSRVレコードを使用している場合は、ポートを空のままにすることができます。',
    'viewing_query_error' => 'クエリエラー表示',
    'confirm_query_error_deletion' => 'このクエリエラーを削除してもよろしいですか？',
    'no_query_errors' => 'クエリエラーは記録されません。',
    'new_banner' => '<i class="fa fa-plus-circle"></i>新しいバナー',
    'purge_errors' => 'エラー消去',
    'confirm_purge_errors' => 'すべてのエラーを消去してもよろしいですか？',
    'email_errors_purged_successfully' => 'メールエラーが正常に消去されました。',
    'error_deleted_successfully' => 'エラーは正常に削除されました。',
    'no_email_errors' => 'ログに記録されたメールエラーはありません。',
    'email_settings_updated_successfully' => 'メール設定が正常に更新されました。',
    'content' => 'コンテンツ',
    'mcassoc_help' => 'mcassocはユーザーが登録したMinecraftアカウントを所有していることを確認するために使用できる外部サービスです。この機能を使用するには、共有キーが必要です。<a href="https://mcassoc.lukegb.com/" target="_blank">ここ</a>からサインアップする必要があります。',
    'mcassoc_key' => 'mcassoc共有キー',
    'mcassoc_instance' => 'mcassocインスタンスキー',
    'mcassoc_instance_help' => '<a href="#" onclick="generateInstance();">クリックしてインスタンスキーを生成する</a>',
    'mcassoc_error' => '共有キーが正しく入力され、インスタンスキーが正しく生成されていることを確認してください。',
    'updated_mcassoc_successfully' => 'mcassoc設定が正常に更新されました。',
    'force_premium_accounts' => 'プレミアムMinecraftアカウントを強制しますか？',
    'banner_background' => 'バナー背景',
    'query_interval' => 'クエリー間隔 (分単位で、5~60でなければなりません)',
    'player_graphs' => 'プレイヤーグラフ',
    'player_count_cronjob_info' => '次のコマンドを使用して{x}分ごとにサーバーに照会するようにジョブを設定できます。',
    'status_page' => 'ステータスページを表示しますか？',
    'minecraft_settings_updated_successfully' => '設定が正常に更新されました。',
    'server_id_x' => 'サーバーID：{x}',// {x}を置き換えない
    'server_information' => 'サーバー情報',
    'query_information' => 'クエリ情報',
    'query_errors_purged_successfully' => 'クエリエラーが正常にパージされました。',
    'query_error_deleted_successfully' => 'クエリエラーが正常に削除されました。',
    'banner_updated_successfully' => 'バナーが正常に更新されました。変更が有効になるまでに時間がかかることがあります。',

    // Modules
    'modules_installed_successfully' => '新しいモジュールが正常にインストールされました。',
    'enabled' => '有効',
    'disabled' => '無効',
    'enable' => '有効',
    'disable' => '無効',
    'module_enabled' => 'モジュールを有効にしました。',
    'module_disabled' => 'モジュールを無効にしました。',
    'author' => '作成者:',
    'author_x' => '作成者: {x}', // Don't replace {x}
    'module_outdated' => 'このモジュールは、NamelessMCバージョン{x}を対象としています。現在、NamelessMCバージョン {y}を実行しています。', // Don't replace "{x}" or "{y}"
    'find_modules' => 'モジュール検索',
    'view_all_modules' => 'すべてのモジュールを見る',
    'unable_to_retrieve_modules' => 'モジュールを取得できませんでした。',
    'module' => 'モジュール',
    'unable_to_enable_module' => '互換性のないモジュールを有効にすることはできません。',
    'unable_to_enable_module_dependencies' => 'モジュール{x}に依存しているため、モジュールを有効にすることができませんでした。', // Don't replace {x}
    'unable_to_disable_module' => 'モジュールを無効にすることができませんモジュール{x}はそれに依存しています。', // Don't replace {x}

    // Styles
    'templates' => 'テンプレート',
    'panel_templates' => 'パネルテンプレート',
    'view_all_panel_templates' => 'すべてのパネルテンプレートを見る',
    'template_outdated' => 'このテンプレートはNamelessMCバージョン {x}を対象としています。現在、NamelessMCバージョン {y}を実行しています。', // Don't replace "{x}" or "{y}"
    'template_not_supported' => 'NamelessMC 2.0.0-pr8では、デフォルトテンプレートはサポートされていません。サポートされているテンプレートを使用してください。',
    'active' => 'アクティブ',
    'deactivate' => '非アクティブ',
    'activate' => 'アクティベート',
    'warning_editing_default_template' => '警告！デフォルトテンプレートの編集は推奨されません。',
    'images' => '背景画像',
    'upload_new_image' => '画像アップロード',
    'reset_background' => '背景画像リセット',
    'install' => '<i class="fa fa-plus-circle"></i>インストール',
    'template_updated' => 'テンプレートが正常に更新されました。',
    'default' => 'デフォルト',
    'make_default' => 'デフォルトに設定',
    'default_template_set' => '{x}をデフォルトのテンプレートに設定しました。', // Don't replace {x}
    'template_deactivated' => 'テンプレートが無効になりました。',
    'template_activated' => 'テンプレートが有効になりました。',
    'permissions' => '権限',
    'setting_perms_for_x' => 'テンプレート{x}のアクセス許可を設定する。', // Don't replace {x}
    'templates_installed_successfully' => '新しいテンプレートが正常にインストールされました。',
    'confirm_delete_template' => 'このテンプレートを削除してもよろしいですか？',
    'delete' => '削除',
    'template_deleted_successfully' => 'テンプレートが正常に削除されました。',
    'background_image_x' => '背景画像:<strong>{x}</strong>', // Don't replace {x}
    'banner_image_x' => 'バナー画像:<strong>{x}</strong>', // Don't replace {x}
    'logo_image_x' => 'ロゴ画像:<strong>{x}</strong>', // Don't replace {x}
    'favicon_image_x' => 'ファビコン画像:<strong>{x}</strong>', // Don't replace {x}
    'x_directory_not_writable' => '<strong>{x}</strong>ディレクトリは書き込み可能ではありません！', // Don't replace {x}
    'template_banner_reset_successfully' => 'バナーのリセットに成功しました。',
    'template_banner_updated_successfully' => 'バナーの更新に成功しました。',
    'reset_banner' => 'バナーのリセット',
    'logo_reset_successfully' => 'ロゴのリセットに成功しました。',
    'logo_updated_successfully' => 'ロゴの更新に成功しました。',
    'reset_logo' => 'Reset Logo',
    'favicon_reset_successfully' => 'ファビコンのリセットに成功しました。',
    'favicon_updated_successfully' => 'ファビコンの更新に成功しました。',
    'reset_favicon' => 'ファビコンのリセット',
    'find_templates' => 'テンプレートを探す',
    'view_all_templates' => 'すべてのテンプレートを見る',
    'unable_to_retrieve_templates' => 'テンプレートを取得できませんでした。',
    'template' => 'テンプレート',
    'stats' => '統計',
    'downloads_x' => 'ダウンロード: {x}',
    'views_x' => 'ビュー: {x}',
    'rating_x' => '評価: {x}',
    'editing_template_x' => 'テンプレート編集{x}', // Don't replace {x}
    'editing_template_file_in_template' => 'テンプレート{y}内のファイル{x}を編集', // Don't replace {x} or {y}
    'cant_write_to_template' => 'テンプレートファイルに書き込み出来ませんでした。ファイルのアクセス許可を確認してください。',
    'unable_to_delete_template' => 'テンプレートを完全に削除できませんでした。ファイルのアクセス許可を確認してください。',
    'background_reset_successfully' => '背景が正常にリセットされました。',
    'background_updated_successfully' => '背景が正常に更新されました。',
    'unable_to_enable_template' => '互換性のないテンプレートを有効にすることはできません。',
    'background_image_info' => 'このオプションはほとんどのテンプレートと互換性がない可能性があるので、注意してください。',
    'dark_mode' => 'ダークモード',
    'navbar_colour' => 'ナビゲーションバーの色',
    'clear_cache' => 'テンプレートキャッシュの消去',
    'cache_cleared' => 'テンプレートキャッシュの消去',

    // Users & groups
    'users' => 'ユーザー',
    'groups' => 'グループ',
    'group' => 'グループ',
    'new_user' => '<i class="fa fa-plus-circle"></i> 新しいユーザー',
    'creating_new_user' => '新規ユーザー作成',
    'registered' => '登録',
    'user_created' => 'ユーザーが正常に作成されました。',
    'cant_delete_root_user' => 'rootユーザーは削除できません。',
    'cant_modify_root_user' => 'このユーザーのメイングループを変更することはできません！',
    'main_group' => 'メイングループ',
    'user_deleted' => 'ユーザーは正常に削除されました。',
    'confirm_user_deletion' => '<strong>{x}</strong>を削除してもよろしいですか？', // Don't replace {x}
    'validate_user' => 'ユーザー検証',
    'update_uuid' => 'UUID更新',
    'update_mc_name' => 'Minecraftユーザー名更新',
    'reset_password' => 'パスワードリセット',
    'punish_user' => '処罰設定',
    'delete_user' => 'ユーザー削除',
    'minecraft_uuid' => 'Minecraft UUID',
    'other_actions' => 'その他の操作',
    'disable_avatar' => 'アバター無効',
    'select_user_group' => 'ユーザーのグループを選択する必要があります。',
    'uuid_max_32' => 'UUIDが<strong>32文字</strong>以下であることをご確認ください。',
    'title_max_64' => 'ユーザーのタイトルが<strong>64文字</strong>以下であることをご確認ください。',
    'group_id' => 'グループID',
    'name' => '名前',
    'title' => 'ユーザータイトル',
    'new_group' => '<i class="fa fa-plus-circle"></i>新しいグループ',
    'group_name_required' => 'グループ名を入力してください。',
    'group_name_minimum' => 'グループ名が<strong>2文字</strong>以上であることをご確認ください。',
    'group_name_maximum' => 'グループ名が<strong>20文字</strong>以下であることをご確認ください。',
    'creating_group' => '新規グループ作成',
    'group_html_maximum' => 'グループHTMLが<strong>1024文字</strong>以下であることをご確認ください。',
    'group_html' => 'グループ HTML',
    'group_html_lg' => 'グループ HTML(大)',
    'group_username_colour' => 'グループテーマカラー',
    'group_username_css' => 'グループユーザー名CSS',
    'group_staff' => 'スタッフグループに設定しますか？',
    'delete_group' => 'グループ削除',
    'confirm_group_deletion' => 'グループ{x}を削除してもよろしいですか？', // Don't replace {x}
    'group_not_exist' => '指定したグループは存在しません。',
    'secondary_groups' => 'セカンダリグループ',
    'secondary_groups_info' => 'セカンダリグループを設定したユーザーは、セカンダリグループからメイングループにプラスして権限を取得します。複数のグループを選択/選択解除するには「Ctrl+クリック」します。',
    'unable_to_update_uuid' => 'UUIDを更新できませんでした。',
    'default_group' => 'デフォルトグループに設定しますか？(新規ユーザー向け)',
    'user_id' => 'ユーザーID',
    'uuid' => 'UUID',
    'group_order' => 'グループ順番',
    'group_created_successfully' => 'グループが正常に作成されました。',
    'group_updated_successfully' => 'グループが正常に更新されました。',
    'group_deleted_successfully' => 'グループが正常に削除されました。',
    'unable_to_delete_group' => 'デフォルトのグループ、またはStaffCPを表示できるグループを削除できません。 グループ設定を更新してください。',
    'can_view_staffcp' => 'StaffCPを表示させますか？',
    'user' => 'ユーザー',
    'user_validated_successfully' => 'ユーザーが正常に認証されました。',
    'user_updated_successfully' => 'ユーザーが正常に更新されました。',
    'editing_user_x' => 'ユーザー編集{x}', // Don't replace {x}
    'details' => '詳細',
    'force_tfa' => 'グループメンバーに二要素認証を強制しますか？',
    'force_tfa_warning' => 'これが何をするのかを確認してください。そうでなければ、あなた自身とグループメンバー全員を締め出す危険があります。',
    'force_tfa_alert' => 'あなたのグループでは、二要素認証を有効にする必要があります。',
    'resend_activation_email' => 'アクティベーションメールの再送信',
    'email_resent_successfully' => 'メールの再送信に成功しました。',
    'email_resend_failed' => 'メールの再送信に失敗しました。メール設定を確認してください。',
    'no_item_selected' => '選択されている項目がありません',

    // Permissions
    'select_all' => 'すべて選択',
    'deselect_all' => 'すべて選択を解除',
    'background_image' => '背景画像',
    'can_edit_own_group' => '自分のグループの権限を編集できます。',
    'permissions_updated_successfully' => '権限設定が正常に更新されました。',
    'cant_edit_this_group' => '指定されたグループの権限を編集することはできません。',

    // General Admin language
    'task_successful' => 'タスクは成功しました。',
    'invalid_action' => '無効な操作',
    'enable_night_mode' => 'ナイトモード有効化',
    'disable_night_mode' => 'ナイトモード無効化',
    'view_site' => 'ホームページ表示',
    'signed_in_as_x' => '{x}でログイン中', // Don't replace {x}
    'warning' => '警告',

    // Maintenance
    'maintenance_mode' => 'メンテナンスモード',
    'maintenance_enabled' => 'メンテナンスモードが有効になっています。',
    'enable_maintenance_mode' => 'メンテナンスモードを有効にしますか？',
    'maintenance_mode_message' => 'メンテナンスモードメッセージ',
    'maintenance_message_max_1024' => 'メンテナンスメッセージが<strong>1024文字</strong>以下であることをご確認ください。',

    // Security
    'acp_logins' => 'StaffCPログイン',
    'please_select_logs' => '表示するログを選択してください。',
    'ip_address' => 'IPアドレス',
    'template_changes' => 'テンプレート変更',
    'email_logs' => '大量送信メール',
    'group_sync_logs' => 'グループ同期の変更',
    'file_changed' => 'ファイルが変更されました。',
    'all_logs' => '全ログ',
    'action' => '操作',
    'action_info' => '操作情報',
    'groups_removed' => '削除されたグループ',
    'groups_added' => '追加されたグループ',

    // Updates
    'update' => 'アップデート',
    'current_version_x' => '現在のバージョン: <strong>{x}</strong>', // Don't replaec {x}
    'new_version_x' => '新しいバージョン: <strong>{x}</strong>', // Don't replace {x}
    'new_update_available' => '利用可能な新しいアップデートがあります',
    'new_urgent_update_available' => '新しい緊急アップデートがあります。なるべく早くアップデートしてください！',
    'up_to_date' => '使用中のNamelessMCは最新です。',
    'urgent' => 'このアップデートは、緊急アップデートです。',
    'changelog' => '変更履歴',
    'update_check_error' => 'アップデートのチェック中にエラーが発生しました:',
    'instructions' => '指示',
    'download' => 'ダウンロード',
    'install_confirm' => 'パッケージをダウンロードし、含まれているファイルがアップロードされていることを確認してください。',
    'check_again' => '再確認',

    // Widgets
    'widgets' => 'ウィジェット',
    'widget_enabled' => 'ウィジェットを有効化しました。',
    'widget_disabled' => 'ウィジェットを無効化しました。',
    'widget_updated' => 'ウィジェットを更新しました。',
    'editing_widget_x' => 'ウィジェット{x}の編集', // Don't replace {x}
    'module_x' => 'モジュール: {x}', // Don't replace {x}
    'widget_order' => 'ウィジェット順番',
    'widget_location' => 'ウィジェットの位置',
    'left' => '左',
    'right' => '右',

    // Online users widget
    'include_staff_in_user_widget' => 'スタッフウィジェットをユーザーウィジェットに含めますか？',
    'show_nickname_instead_of_username' => 'ユーザー名の代わりにユーザーのニックネームを表示しますか？',

    // Custom Pages
    'pages' => 'ページ',
    'custom_pages' => 'ページ',
    'new_page' => '<i class="fa fa-plus-circle"></i>新しいページ',
    'no_custom_pages' => 'ページはまだ作成されていません。',
    'creating_new_page' => 'ページ作成',
    'page_title' => 'ページタイトル',
    'page_path' => 'ページパス(前に/を含める。例: /example)',
    'page_icon' => 'ページ アイコン',
    'page_link_location' => 'ページリンクの場所',
    'page_link_navbar' => 'ナビゲーションバー',
    'page_link_footer' => 'フッター',
    'page_link_more' => '"さらに"ドロップダウン',
    'page_link_none' => 'リンクなし',
    'page_content' => 'ページコンテンツ',
    'page_redirect' => 'ページをリダイレクトしますか？',
    'page_redirect_to' => 'リダイレクトリンク (http:// から入力してください。)',
    'page_target' => '新しいタブでページを開きますか？',
    'unsafe_html' => '安全でないHTMLを許可しますか？',
    'unsafe_html_warning' => 'このオプションを有効にすると、危険なJavaScriptを含むHTMLをページで使用することを許可します。 HTMLが安全であると確認できた場合のみ、有効にしてください。',
    'include_in_sitemap' => 'サイトマップを含めますか？',
    'sitemap_link' => 'サイトマップリンク:',
    'basic_page' => '基本的なページ？',
    'page_permissions' => 'ページのアクセス権利',
    'view_page' => 'ページを表示しますか？',
    'editing_page_x' => '編集ページ: {x}', // Don't replace {x}
    'unable_to_create_page' => 'ページを作成できません:',
    'page_title_required' => 'ページタイトルが必要です。',
    'page_url_required' => 'ページパスが必要です。',
    'link_location_required' => 'リンクの場所が必要です。',
    'page_title_minimum_2' => 'ページタイトルは<strong>2文字</strong>以上にする必要があります。',
    'page_url_minimum_2' => 'ページパスは<strong>2文字</strong>以上にする必要があります。',
    'page_title_maximum_255' => 'ページタイトルは<strong>255文字</strong>以下にする必要があります。',
    'page_icon_maximum_64' => 'ページアイコンは<strong>64文字</strong>以下にする必要があります。',
    'page_url_maximum_255' => 'ページパスは<strong>255文字</strong>以下にする必要があります。',
    'page_content_maximum_100000' => 'ページの内容は<strong>100000文字</strong>以下にする必要があります。',
    'page_redirect_link_maximum_512' => 'ページリダイレクトリンクは<strong>512文字</strong>以下にする必要があります。',
    'confirm_delete_page' => '選択中のページを削除してもよろしいですか？',
    'page_created_successfully' => 'ページが正常に作成されました。',
    'page_updated_successfully' => 'ページが正常に更新されました。',
    'page_deleted_successfully' => 'ページが正常に削除されました。',

    // API
    'api' => 'API',
    'enable_api' => 'APIを有効にしますか？',
    'api_info' => 'API連携を有効にすると、Minecraftサーバーにインストールできる<a href="https://plugin.namelessmc.com" target="_blank" >Namelessプラグイン</a>とWebサイトが連携できるようになります。連携すると、Webサーバーのデータを読み込めたり、ゲーム内で登録できたり、アカウント検証ができるようになります。',
    'enable_legacy_api' => '従来のAPI(v1)を使用しますか？',
    'legacy_api_info' => '従来のAPIを使用すると、Nameless v1 APIを使用するプラグインを、v2のWebサイトと連携できるようにできます。',
    'confirm_api_regen' => 'APIキーを再生成してもよろしいですか？',
    'api_key' => 'API キー',
    'api_url' => 'API URL',
    'copy' => 'コピー',
    'api_key_regenerated' => 'APIキーが正常に再生成されました。',
    'api_registration_email' => 'API登録メール',
    'show_registration_link' => '登録リンクを表示する',
    'registration_link' => '登録リンク',
    'link_to_complete_registration' => '登録を完了するためのリンク: {x}', // Don't replace {x}
    'api_verification' => 'APIの確認を有効にしますか？',
    'api_verification_info' => '有効にすると、登録時のアカウント検証にNamelessプラグインを使用できるようになり、本当にMinecraftアカウントを所持しているのかがわかるようになります。</br><strong>このオプションは、メール認証が有効になっていても優先になります。検証が完了すると自動でアカウントが有効になります。</strong></br>初期グループを設定し、未検証アカウントのアクセス許可を確認してください。その後、「StaffCP → コンフィグ → 登録」の検証後昇格先グループを、通常のアクセス許可を持つグループに更新する必要があります。',
    'enable_username_sync' => 'ユーザーネームの同期を有効にしますか？',
    'enable_username_sync_info' => '有効にすると、WebサイトのユーザーネームをMinecraftユーザーネームと同期します。',
    'api_settings_updated_successfully' => 'API設定が正常に更新されました。',
    'group_sync' => 'グループ同期',
    'group_sync_info' => 'ゲーム(サーバー)内グループが変更されたときにユーザーのウェブサイトグループを自動的に更新するようにAPIを設定できます。ゲーム内のグループ名と同期するウェブサイトグループを入力してください。',
    'ingame_group' => 'ゲーム内のグループ名',
    'website_group' => 'ウェブサイトグループ',
    'set_as_primary_group' => 'プライマリグループとして設定しますか？',
    'set_as_primary_group_info' => '有効にするとユーザーのプライマリWebサイトグループが自動で更新されます。無効にするとゲーム内のグループがユーザーのウェブサイトのセカンダリグループに追加されます。',
    'ingame_group_maximum' => 'グループ名は<strong>64文字</strong>以下にする必要があります。',
    'select_website_group' => 'ウェブサイトグループを選択してください。',
    'ingame_group_already_exists' => '指定されたゲームグループのランク同期ルールはすでに作成されています。',
    'group_sync_rule_created_successfully' => 'グループ同期ルールが正常に作成されました。',
    'group_sync_rules_updated_successfully' => 'グループ同期ルールが正常に更新されました。',
    'group_sync_rule_deleted_successfully' => 'グループ同期ルールが正常に削除されました。',
    'group_sync_plugin_not_set_up' => 'プラグインが設定されていません',
    'existing_rules' => '既存のルール',
    'new_rule' => '新しいルール',
    'api_endpoints' => 'API エンドポイント',
    'api_endpoints_info' => 'APIエンドポイントは、モジュールが外部アプリケーション(MinecraftやDiscordなど)とNamelessMCのウェブサイトが対話するための方法を作成することを可能にします。 <a href="https://docs.namelessmc.com/en/api-documentation" target="_blank">APIドキュメントはこちらをご確認ください。</a>',
    'route' => 'ルート',

    // File uploads
    'drag_files_here' => 'アップロードするファイルをここにドラッグします。',
    'invalid_file_type' => '許可されていない拡張子または種類です。',
    'file_too_big' => 'ファイルサイズが大きすぎます。圧縮や画質を下げてもう一度お試しください。送信されたファイルは{{filesize}}です。上限は{{maxFilesize}}です。', // Don't replace {{filesize}} or {{maxFilesize}}
    'allowed_proxies' => '許可されるプロキシ',
    'allowed_proxies_info' => '許可されたプロキシIPのリスト',

    // Error logs
    'error_logs' => 'エラーログ',
    'notice_log' => '通知ログ',
    'warning_log' => '警告ログ',
    'custom_log' => 'カスタムログ',
    'other_log' => 'その他ログ',
    'fatal_log' => '致命的ログ',
    'log_file_not_found' => 'ログファイルが見つかりませんでした。',
    'log_purged_successfully' => 'ログは正常に削除されました。',

    // Hooks
    'hooks' => 'ウェブフック',
    'hooks_info' => 'ウェブフックでは、特定のイベントが発生したときに外部サービスに通知することができます。指定したイベントが発生したとき',
    'no_hooks_yet' => 'Webhooksはまだありません。',
    'new_hook' => '新しいウェブフック',
    'creating_new_hook' => '新しいウェブフックの作成',
    'editing_hook' => 'ウェブフックの編集',
    'delete_hook' => '本当にこのウェブフックを削除しますか？',
    'hook_deleted' => 'ウェブフックの削除に成功しました。',
    'hook_name' => 'ウェブフック名',
    'hook_created' => 'ウェブフックの作成に成功しました。',
    'hook_edited' => 'ウェブフックの編集に成功しました。',
    'hook_select_info' => 'イベントとして\'新規トピック\'が選択されているフックのみが表示されます。',
    'hook_url' => 'ウェブフックURL',
    'hook_type' => 'ウェブフックの種類',
    'hook_events' => 'このウェブフックをトリガするイベント',
    'invalid_hook_url' => '無効なウェブフックURL',
    'invalid_hook_name' => '無効なウェブフック名',
    'invalid_hook_events' => '少なくとも1つのイベントを選択する必要があります',
    'register_hook_info' => 'ユーザー登録',
    'validate_hook_info' => 'ユーザー検証',
    'delete_hook_info' => 'ユーザー削除',
    'report_hook_info' => '報告の作成',

    //サイトマップ
    'unable_to_load_sitemap_file_x' => 'サイトマップファイル{x}を読み込むことができませんでした。',// {x}を置き換えない
    'sitemap_generated' => 'サイトマップが正常に生成されました。',
    'sitemap_not_writable' => '<strong>cache/sitemaps</strong>ディレクトリに書き込みができません。アクセス権限を確認してください。',
    'cache_not_writable' => '<strong>cache</strong>ディレクトリに書き込みができません。アクセス権限を確認してください。',
    'generate_sitemap' => 'サイトマップ生成',
    'download_sitemap' => 'ダウンロードサイトマップ',
    'sitemap_not_generated_yet' => '生成済みのサイトマップが存在しません。',
    'sitemap_last_generated_x' => '最終サイトマップ生成:{x}',// {x}を置き換えない

    //ページメタデータ
    'page_metadata' => 'ページメタデータ',
    'metadata_page_x' => '{x}のメタデータを表示',// {x}を置き換えない
    'keywords' => 'キーワード',
    'description_max_500' => '説明は<strong>500文字</strong>以下にする必要があります。',
    'page' => 'Page',
    'metadata_updated_successfully' => 'メタデータが正常に更新されました。',

    //ダッシュボード
    'total_users' => '合計ユーザー',
    'recent_users' => '新規ユーザー',
    'average_players' => '平均ユーザー',
    'nameless_news' => 'NamelessMC ニュース',
    'unable_to_retrieve_nameless_news' => '最新のニュースを取得できませんでした。',
    'confirm_leave_site' => 'サイトを離れようとしています。<strong id = "leaveSiteURL"> {x} </strong>にアクセスしてもよろしいですか？',// {x}を置き換えずに、そのIDがleaveSiteURLであることを確認してください
    'server_compatibility' => 'サーバーの互換性',
    'issues' => '問題',

    //その他
    'source' => 'ソース',
    'support' => 'サポート',
    'admin_dir_still_exists' => '警告！<strong>modules/Core/pages/admin</strong>ディレクトリがまだ存在しています。ディレクトリを削除してください。',
    'mod_dir_still_exists' => '警告！<strong>modules/Core/pages/mod</strong>ディレクトリがまだ存在しています。ディレクトリを削除してください。',
    'forum_topic_reply_email' => 'フォーラムトピックへの返信',

    // Announcements
    'announcements' => 'お知らせ',
    'new_announcement' => '新しいお知らせ',
    'announcement_info' => 'ウェブサイトの特定のページに特定のグループにメッセージを表示するためのアナウンスを作成します。',
    'creating_announcement' => 'お知らせの作成',
    'editing_announcement' => 'お知らせの編集',
    'creating_announcement_success' => 'お知らせの作成に成功しました。',
    'editing_announcement_success' => 'お知らせの更新に成功しました。',
    'creating_announcement_failure' => 'お知らせの作成に失敗しました。',
    'editing_announcement_failure' => 'お知らせの更新に失敗しました。',
    'announcement_icon_instructions' => 'また、<a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank" rel="noopener nofollow">Font Awesome</a>, <a href="https://semantic-ui.com/elements/icon.html" target="_blank" rel="noopener nofollow">Semantic UI</a>などを使用して、ここで各アナウンスにアイコンを追加することもできます。',
    'header' => 'ヘッダー',
    'message' => 'メッセージ',
    'text_colour' => 'テキスト色',
    'background_colour' => '背景色',
    'closable' => 'クローズ可能',
    'can_view_announcement' => 'お知らせを見ることができます',
    'verify_delete_announcement' => 'このお知らせを削除しても大丈夫ですか？',
    'deleted_announcement_success' => 'お知らせは正常に削除されました。',
    'header_required' => 'ヘッダーは必須です。',
    'message_required' => 'メッセージは必須です。',
    'background_colour_required' => '背景色は必須です。',
    'text_colour_required' => 'テキスト色は必須です。',
    'no_announcements' => 'まだお知らせはありません。',
    'announcement_order' => '順序',
    'announcement_hook_info' => 'お知らせの作成',
];
