<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
    <?php
    $_SESSION["uname"]="admin";
    $_SESSION["pwd"]="admin123";
    echo" Session variables are set.";
    ?>
      <a href="welcome.php">Click here</a>
      <!-- <form method="post">
        <button type="submit" name="logout">Logout</button>
    </form> -->
    
    <a href="hello.php">Logout</a>
</body>
</html>