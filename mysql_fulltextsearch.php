<?php
$searchphrase_extended = "'\"".$searchphrase."\"'";
  //Zeige einen interpreten
  if ($stmt = $connect->prepare("SELECT column FROM table WHERE MATCH column AGAINST (? IN BOOLEAN MODE)")) {
        $stmt->bind_param("s",$searchphrase_extended);
        $stmt->execute();
        $stmt->bind_result($result);
        $stmt->close();
    }

?>
