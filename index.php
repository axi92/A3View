<?php
error_reporting(-1);
require __DIR__ . '/class/SourceQuery.class.php';
require __DIR__ . '/class/SteamSignIn.class.php';
$domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;
/**
*
* @package Steam Community API
* @copyright (c) 2010 ichimonai.com
* @license http://opensource.org/licenses/mit-license.php The MIT License
*
*/

if (isset($_GET['openid_assoc_handle']) && !empty($_GET['openid_assoc_handle']))
{
	$steamid64 = SteamSignIn::validate();
	//setcookie("steamid64", $steamid64, time()+3600, "/", $domain);
	setcookie("steamid64", $steamid64, time()+3600);
	echo 'Cookie von Login gesetzt: ' . $steamid64 . '!<br>';
}
?>
<br>
<a href="<?php echo SteamSignIn::genUrl() ?>"><img src="https://steamcommunity-a.akamaihd.net/public/images/signinthroughsteam/sits_small.png" alt="Sign in through Steam" /></a>
<br>
<?php
	 
if( (isset($steamid64) && !empty($steamid64)) || (isset($_COOKIE['steamid64']) && !empty($_COOKIE['steamid64'])) ):
	echo '<br>Logged in!<br>';
else:
	echo '<br>Not logged in!<br>';
endif;




?>