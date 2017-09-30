# wpcomment-to-bbpresspost
WordPress hozzászólás összekötése bbPress-el. 

Telepítés:

1) Felmásolod az apps mappát a WordPress sablonod mappájába. 
2) Bemásolod ezt a két sort a sablonod functions.php-jába:

define('apps', 'apps/');
include_once apps.'wpcomment-to-bbpresspost/index.php';

3) Kész. A hozzászólás engedélyezése résznél tudod bekapcsolni. Ki kell választani, hogy melyik Fórumbakategóriába tegye be a WordPress bejegyzést. 

Forrás WordPress plugin: https://wordpress.org/plugins/bbpress-post-topics/
