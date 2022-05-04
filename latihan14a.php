<?phpif(isset($_POST["submit"])){
    if($_POST["username"]=="1234"&& $_POST["password"]="admin"){
        header("Location:14.php");
        exit;
    }else{
        echo "Sorry your Username or password is wrong";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Latihan 14a</title>
</head>
<body>
    <form action="" method="post">
        <label>Username </label>
        <input type="text" name="username"required><br>
        <label>Password </label>
        <input type="password" name="password" required><br>
        <button type="submit" name="submit">Login </button>
</body>
</html>