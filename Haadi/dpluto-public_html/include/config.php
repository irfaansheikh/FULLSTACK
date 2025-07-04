<?php
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
    $url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

}else{
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

}

define('ADMIN_EMAIL', 'info@dplutotech.com');
// define('ADMIN_APP_PASSWORD', 'sgdvebfyagarjuuw');
define('PHONE', '+92 (313) 4888-000');
define('PHONE_HREF', 'tel:923134888000');
define('EMAIL', 'info@dplutotech.com');
define('EMAIL_HREF', 'mailto:info@dplutotech.com');
define('CONTACT_EMAIL', 'info@dplutotech.com');
define('CONTACT_EMAIL_HREF', 'mailto:info@dplutotech.com');
define('ADDRESS', '809/5 Floor-II RAVI BLOCK, A.I.T MAIN MULTAN ROAD, LAHORE PAKISTAN');
define('ADDRESS_HREF', 'https://goo.gl/maps/uho9JbxuucVLuMsi8');
define('WEBSITE_NAME', 'Digital Pluto Technology');
define('SITE_CURRENCY_SYMBOLS', '$');
define('WEBSITE_LOGO','https://www.dplutotech.com/images/logo.png');
define('WEBSITE_FAV','https://www.dplutotech.com/images/favicon.png');
// define('WEBSITE_NAME_PLURAL', "Designs Cube's");
?>