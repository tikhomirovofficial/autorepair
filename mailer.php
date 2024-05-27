<?php
// ini_set('display_errors',1);
// error_reporting(E_ALL);
$name = trim($_POST["orderForm"]);

var_dump($_POST);

echo '1';
// send an email
$to = 'mister.surwilo@mail.ru';
 
$subject = 'Заявка с AutoRepair';

// $arrMess = foreach ($_POST as $key => $value) {
//   if($value != "") {

//   }
// }
$c = true;
foreach ( $_POST as $key => $value ) {
  if ( $value != "" && $key != 'none') {
    $message .= "
    " . ( ($c = !$c) ? '<div>':'<div style="background-color: #f8f8f8;">' ) . "
      <p style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b><i style='padding-left: 10px;'>        $value</i></p>
    </div>
    ";
  }
}

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-Type: text/html; charset=utf-8' . "\r\n";
 
$headers .= 'From: AutoRepair <autorepair.ru>' . "\r\n";
$headers .= 'Reply-To: AutoRepair <autorepair.ru' . "\r\n";
 
// Mail it
mail($to, $subject, $message, $headers);
var_dump("SAS");
 
?>