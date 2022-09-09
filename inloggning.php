<!DOCTYPE html>
<html>

<body>

    <form action="inloggning.php" method="post">
        Användernamn: <input type="text" name="anvandernamn">
        Lösenord: <input type="password" name="password">
        <input type="submit">
    </form>
    <?php
    echo "Hello World!";
    $anvandernamn = $_POST["anvandernamn"];
    $losenord = $_POST["password"];
    ?>

</body>

</html>