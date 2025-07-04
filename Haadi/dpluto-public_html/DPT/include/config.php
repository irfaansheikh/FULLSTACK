<?php
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
    $url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

}else{
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

}

define('ADMIN_EMAIL', 'info@ezpzbazar.com');
// define('ADMIN_APP_PASSWORD', 'sgdvebfyagarjuuw');
define('PHONE', '(416) 575-9062');
define('PHONE_HREF', 'tel:4165759062');
define('EMAIL', 'info@ezpzbazar.com');
define('EMAIL_HREF', 'mailto:info@ezpzbazar.com');
define('CONTACT_EMAIL', 'info@ezpzbazar.com');
define('CONTACT_EMAIL_HREF', 'mailto:info@ezpzbazar.com');
define('ADDRESS', '1054 Robinson Estates Ct, Marietta, GA 30068, USA');
define('ADDRESS_HREF', 'https://goo.gl/maps/uho9JbxuucVLuMsi8');
define('WEBSITE_NAME', 'EZPZ Bazar');
define('SITE_CURRENCY_SYMBOLS', '$');
define('WEBSITE_LOGO','https://www.ezpzbazar.com/images/logo.png');
define('WEBSITE_FAV','https://www.ezpzbazar.com/images/favicon.png');
// define('WEBSITE_NAME_PLURAL', "Designs Cube's");
?>