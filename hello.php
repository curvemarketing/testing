<?
echo "hello world 5";

$browser=$_SERVER['HTTP_USER_AGENT'];
mail("db2024db@yahoo.com","test","test message \r\n $browser");
// Show all information, defaults to INFO_ALL
//phpinfo();
//ab

?>
