<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style/login.css">
</head>

<body>



    <form action="login.php" method="POST">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <P class="error"><?php echo $_GET['error']; ?></p>
        <?php }
        ?>


        <label> email</label>
        <input type="email" name="email" placeholder="email">
        <br>
        <label> Password </label>
        <input type="password" name="password" placeholder="password">
        <br>
        <button type="submit"> login </button>

    </form>
</body>

</html>
