<?php
include_once( 'config.php' );
include_once( 'AccessToken.php' );

$o=new AccessToken(CLIENT_ID,CLIENT_SECRET);

if (isset($_REQUEST['code'])) {
	$keys = array();
	$keys['code'] = $_REQUEST['code'];
	$keys['redirect_uri'] = CALLBACK_URL;
	try {
		$token = $o->getAccessToken('code', $keys ) ;
	} catch (OAuthException $e) {
		
	}
}

if ($token) {
	$_SESSION['token'] = $token;
		$a=new Account($o);
		$baseinfo=$a->get_user_baseinfo();
	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>明道PHP SDK Demo - 账户授权</title>
</head>

<body>
	授权完成,调用账户接口结果<br/>
<?php
	echo $baseinfo;
} else {
?>
授权失败。
<?php
}
?>
</body>
</html>