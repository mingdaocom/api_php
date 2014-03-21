<?php
include_once( 'config.php' );
include_once( 'AccessToken.php' );

$o=new AccessToken(CLIENT_ID,CLIENT_SECRET);

$code_url=$o->getAuthorizeURL(CALLBACK_URL);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>明道PHP SDK Demo - 账户授权</title>
</head>

<body>
	<p>明道PHP SDK由明道研发团队开发和维护，并且会负责对其进行维护和更新，平台开发者无需自行下载更新即可直接调用最新SDK，使用微博最新API。</p>
	<p>本DEMO演示了PHP SDK的授权及接口调用方法，开发者可以在此基础上进行灵活多样的应用开发。</p>
	<hr />
	
	<!-- ��Ȩ��ť -->
    <p><a href="<?php echo  $code_url ;?>"><img src="http://open.mingdao.com/ui_source/login/16.png" title="���������Ȩҳ��" alt="���������Ȩҳ��" border="0" /></a></p>

</body>
</html>
