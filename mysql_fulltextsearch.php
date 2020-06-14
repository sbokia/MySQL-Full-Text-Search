<?php
//MyISAM Engine
$searchphrase_extended = "'\"".$searchphrase."\"'";
  if ($stmt = $connect->prepare("SELECT column FROM table WHERE MATCH column AGAINST (? IN BOOLEAN MODE)")) {
        $stmt->bind_param("s",$searchphrase_extended);
        $stmt->execute();
        $stmt->bind_result($result);
        $stmt->close();
    }

//InndoDB Engine
$searchphrase_extended = "%".$searchphrase."%";
  if ($stmt = $connect->prepare("SELECT column FROM table WHERE column LIKE ?")) {
        $stmt->bind_param("s",$searchphrase_extended);
        $stmt->execute();
        $stmt->bind_result($result);
        $stmt->close();
    }
?>
