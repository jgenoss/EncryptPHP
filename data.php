<?php
$_POST = json_decode(file_get_contents("php://input"), true);
 switch ($_POST['cript']) {
  case 'encript':
    {
      echo json_encode(base64_encode(bin2hex($_POST['code'])));
    }
    break;
  case 'decript':
    {
      echo json_encode(hex2bin(base64_decode($_POST['code'])));
    }
    break;
   default:
      die(null);
     break;
 }
?>
