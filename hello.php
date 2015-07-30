<?
echo "hello world 9";

$browser=$_SERVER['HTTP_USER_AGENT'];
mail("a@b.c","test 4","test message \r\n $browser");
// Show all information, defaults to INFO_ALL
//phpinfo();
//ab

?>
