<?
echo "hello world 9";

$browser=$_SERVER['HTTP_USER_AGENT'];
mail("sales@rbcoins.com","test 3","test message \r\n $browser");
// Show all information, defaults to INFO_ALL
//phpinfo();
//ab

?>
