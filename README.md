# lifelog
Personal IntraNAS System for Raspberry Pi

###ライフログシステムのウルトラビジョンというパッケージ###

開発ブログ-><a href="http://pjfs.biz/wp/?p=86">lifelog System開発開始 UltraVision追加</a> 

インストール方法-><a href="http://pjfs.biz/wp/?p=98">http://pjfs.biz/wp/?p=98</a>

増え続けるデジタル写真データを効率よく管理するためのシステムです。
これをベースに独自に拡張していくこともできます。

###画像を使って日々の思い出を記録しようというプロジェクト###

最寄りのシテムエンジニアさんと連携してメンテナンス、拡張できるように
開発を進めていく予定です。

CakePHPを活用したWebアプリケーションの土台として機能するように頑張ります。

主要技術：jQuery jQuery-ui Ajax bootstrap PHP CakePHP Linux Apache2 MySQL git lalavel

2015年に流行しているIoTの思想を組み入れた小型で手にしやすいコンピュータ上で実行できるようにしています。（記憶容量３２GB程度で省電力のローパワーCPUでも動く仕様）
ディスクが何本も搭載できて、マルチスレッドで同時に処理を走らせることができるハイパワーなサーバ上でマルチユーザのホスティングを行うプログラムにも拡張可能です。

このバージョンでは家庭やオフィスで手軽で気楽に使えるパッケージを目指しています。
ごく小額でチームに一つ配備できるネットワークノードとしてデザインしています。
<a href="https://ja.wikipedia.org/wiki/Raspberry_Pi">Raspberry_Pi</a>

できるだけ理解しやすくするために、古典的な定義にのっとりながら最新技術を積み上げています。
プロジェクトに一つこの環境を用意してBasicパスワードをかけるだけでチーム内の情報共有ができるはずです。

このブランチではプロジェクトマネジメントに役立つ機能の追加やWebGLも織り交ぜて行きたいと思います。
最新鋭のクラウドサービスとAPIでつなぐことで、より多くのことをこなせるでしょう。
CakePHP　lalavel　のアプリケーションも企画しています。

部門単位、課（チームリーダ）単位に小型ノード一つ、バックアップと復元不可の大きな演算処理を行う
集積サーバを一つといった構成で納品もしています。（特注で独自にAPI拡張しています：詳細は非公開）

■■■■■■　拡張機能の開発例　■■■■■

・USBカメラを取り付けて会議をする

・WebAPIでGPIOを制御し赤外線リモコンの操作や証明の電源を制御したりする

・連絡帳やプレゼン資料をMinervaで管理する

・現地調査結果をUltraVisionで管理する


とりあえず、[lifelog]を入れて運用してみてから、拡張機能を考えるという流れを提案します。

金魚の観察記録から、業務用資料のアーカイブまで幅広くご活用いただけるようにパッケージングしていきます。

・ライブラリに個別修正は加えない（ブロック単位で理解しやすく組み合わせる）

・全体のうち一部で集中して連携させる（インターフェイスの洗練）

※何かやってるとしたらここと、トレース及び特定ができるように構成

低負荷AIの搭載も検討中で、利用頻度が低くサイズの大きなデータをアーカイブに転送するロジックなども実験中です。

見せたいデータをUltraVisionとMinervaにプリロードしておいて、利用頻度の低い動画ファイルは
大容量ストレージデバイスに転送。オリエンテーション用の導入ビデオはそのまま小型ノードに維持、
必要に応じてブルーレイディスクにコールドバックアップ、といった使い方もできます。

※ご自分で拡張したデータは念のためバックアップを取っておいてください。
#mv lifelog lidelog_bk　してからアップデートなど
