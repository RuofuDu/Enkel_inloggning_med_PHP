<?php
$anvandernamn = $_POST["anvandernamn"];
$losenord = $_POST["password"];
if ($anvandernamn == $losenord) {
    echo "Välkommen! Du har loggat in " . $anvandernamn;
} else {
    echo "Du har inte loggat in " .  $anvandernamn;
}
