<?php


/*
 * THIS SCRIPT IS TO VALIDATE EMAIL ADDRESS ACUTUALLY EXISTSSSSSS

*/


  $myFile = "list.txt";
  $lines = file($myFile);
  echo "<table>";
  function domain_exists($email, $record = 'MX'){
    list($user, $domain) = explode('@', $email);
    return checkdnsrr($domain, $record);
  }
  foreach($lines as $line) {
    $email = trim($line);
    echo "<tr>";
    echo "<td>$line</td>";
    if(domain_exists($email)) {
      echo "<td>This MX records exists; I will accept this email as valid.</td>";
    }
    else {
      echo "<td>No MX record exists;  Invalid email.</td>";
    }
    echo "</tr>";
 }

 echo "</table>";

?>
