<?
  session_start();
  $db_name = "A27F8967.txt";
  $A = $_SERVER['REMOTE_ADDR'];
  $B = $_SERVER['HTTP_USER_AGENT'];
  $C = $_SERVER['HTTP_REFERER'];
  $F = $_SERVER['REQUEST_TIME'];
  $F = date('d M Y H:i:s',$F);
  if ($C == '') $C = 'NONE';
  $D = $A . ' | ' . $B . ' | ' . $C;
  $E = sha1($D);
  $D = $F . ' | ' . $E . ' | ' . $D;
  if (!strpos(file_get_contents($db_name), $E))
  {
    $f = fopen($db_name, "a+");
    fwrite($f, $D . "\r\n");
    fclose($f);
  }  
  session_destroy();
?>
