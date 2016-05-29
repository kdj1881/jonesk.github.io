<?php
/*
* This is URL where the Duo JavaScript file (Duo-Web-v1.min.js) will be
* accessible on the web.
*/
define('UL_DUOSEC_JS_URL', 'js/Duo-Web-v2.min.js');

/*
* URL to load the jQuery library from.
* If you are already using jQuery not only for DuoSec, set this to the URL of the jQuery
* library the rest of your website is using. Otherwsie, you can leave it at default.
*/
define('UL_DUOSEC_JQUERY_URI', 'jquery/jquery-2.2.4.min.js');

/*
* This is something uniquely generated by you for your application
* and is not shared with Duo.
*/
define('UL_DUOSEC_AKEY', 'wnXF5hPN2RKgyIBSml1OwnXF5hPN2RKgyIBSml1O');

/*
* IKEY, SKEY, and HOST should come from the Duo Security admin dashboard
* on the integrations page.
*/
define('UL_DUOSEC_IKEY', 'DIWJ2A9I2H7NX91OTDB5');
define('UL_DUOSEC_SKEY', 'KMHx5dc4Ptb9WyonXOdnLgzA5PaeT2BoQE9PFODm');
define('UL_DUOSEC_HOST', 'api-ef041cc2.duosecurity.com');

?>