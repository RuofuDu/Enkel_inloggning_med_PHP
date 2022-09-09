<?php
$anvandernamn = $_POST["anvandernamn"];
$losenord = $_POST["password"];
if ($anvandernamn == $losenord) {
    echo "Du har loggat in " . $anvandernamn;
} else {
    echo "Du kan inte logga in " .  $anvandernamn;
}
