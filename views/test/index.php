
<?php
use fec\helpers\CRequest;
//var_dump($_SERVER);



?>
<div class="loginForm">
<form action="http://demo.fancyecommerce.com/fecadmin/test/index" method="post">
<?php echo CRequest::getCsrfInputHtml();  ?>
	<input type="text" name="login[username]" />
	<input type="text" name="login[password]" />
	<input type="text" name="login[captcha]" />
<input type="submit"  />
</form>
</div>

<?php

foreach($_COOKIE as $key=>$v){
	echo $key."=>";
	var_dump($v);
	echo "<br>";
}

?>

