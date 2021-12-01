<?php
//$usuario = "id16168123_julia";
//$senha = "8fSwM}mfDQeR{?4d";
try {
  $pdo = new PDO('mysql:host=localhost;dbname=id16168123_legendary', 'id16168123_julia',  '/!ZH4yXsIza*L&QO');
  //print "Conectado"; 
} catch (PDOException $ex) {
  print "Erro ao conectar ao banco de dados" . $ex;
}
/*if($_POST){
  $id = $_POST["select"]; 
}else{
  $id = 1; 
}*/
?>