<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include("scripts/Header.php");
    ?>
    <main>
        <form action="login" method="post">
            <input type="text" name="username" placeholder="username"></br>
            <input type="password" name="password" placeholder="password"></br>
            <p><input type="submit" value="Submit"></p>
        </form>
    </main>
    <?
    include("scripts/Footer.php");
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include("scripts/dbconnect.php");
    $username = $_POST["username"];
    $password = $_POST["password"];
    function checklogin($username, $password, $db)
    {
        $sql = "INSERT INTO port_users ($username, $password)
VALUES ('John', 'Doe', 'john@example.com')";

        if (mysqli_query($db, $sql)) {
            echo "New record created succesfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
        mysqli_close($db);
// this is impossible
    }
}
?>