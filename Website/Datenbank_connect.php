<html>
<body>
<?php
   $db = mysql_connect();

   $res = mysql_db_query("justinsql1",
          "select * from personen");
   $num = mysql_num_rows($res);
   echo "$num Datensätze gefunden<br>";

   for ($i=0; $i<$num; $i++)
   {
      $nn = mysql_result($res, $i, "nutzername");
      $vn = mysql_result($res, $i, "passwort");
      $pn = mysql_result($res, $i, "email_adress");
      $ge = mysql_result($res, $i, "sicherheitsfrage");
      echo "$nn, $pw, $ea, $sf,<br>";
   }

   mysql_close($db);
?>
</body>
</html>