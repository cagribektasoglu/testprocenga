<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * MySQL ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'testprocenga' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'testprocenga' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', 'testprocenga' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2#^tFH40fVH,lE j&LIky=:EiLL&Bg`y .!KZmwGY$zBeK)E#6ge`^$^<GQ9s{mR' );
define( 'SECURE_AUTH_KEY',  '%}Jt;;~5tt!9YU39A=W&taQbu5S@`x l,9S}*tBU>;7;1zL#}/dZ>!%rv=%IDUBo' );
define( 'LOGGED_IN_KEY',    ';hnbVO,,*:HQ>5ia>(0}S49gl2&N{|K0C0(`77MdT f[d#=U?T#y{ol5MX0jeYf7' );
define( 'NONCE_KEY',        '3nbR+3Nmx}a[#D eSI?.zcVM&5}IzUj0P>|wC#??@O;F@15=1w>z4_kEVtR3Yx69' );
define( 'AUTH_SALT',        'M>lhUT(@s5?xv_-soJ[*#2-O{2cEDH{,lFk+.u?n!q[?z;r`UXLW%BNa)E@pnXaH' );
define( 'SECURE_AUTH_SALT', '$LwLs4YCw`/qkv6dsrd|MYFMkf#yL*pR75x|nHB=422,` 6s~#VZg,Wv(:xq<n?.' );
define( 'LOGGED_IN_SALT',   'X~VcSbxNwmX;>6i3|s1b.N@ta/a2o|RGaT$}MZD$=>-X@)!icp2&tQ:NMX]-w:nd' );
define( 'NONCE_SALT',       '[[7<$Q81XP7Q A/`lW.1yD`M7bI(W;Mf yudr!=h|XC0nTj,1[3&>^hU!FfIdn++' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';