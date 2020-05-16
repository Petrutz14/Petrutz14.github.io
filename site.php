<html>
  <body>
    <?php
    $msg=$_POST["message"];
    $gmail=$_POST["email"];
    mail("petru.craciunoiu@gmail.com","A messge from a site visitor",$msg);
    ?>
  </body>
</html>
