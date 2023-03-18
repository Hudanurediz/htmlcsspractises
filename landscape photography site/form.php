<?php
$submit=$_POST['submit'];
$name=$_POST['name'];
$surname=$_POST['surname'];
if (isset($submit)) {
    echo("Sevgili". $name."<br />".$surname."<br />\\n". "yanıtınız kaydedildi.");
}

?>
