<?
if ($_POST["d"]=="plus") {
$c=$_POST["a"]+$_POST["b"];
if (isset($_POST["f"])) {
echo ($_POST['a']."+".$_POST['b']."=".$c);
} else { 
echo ("Результат = ".$c); }
} else {
$c=$_POST["a"]*$_POST["b"]; }
if (isset($_POST["f"])) {
echo ("Результат = ".$c);
} else {
echo ($_POST['a']."*".$_POST['b']." = ".$c); }
echo ("<BR> <A href='4f.html'> Вернуться назад </A>");
?>
