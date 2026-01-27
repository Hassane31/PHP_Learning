<?php 

if($_SERVER["REQUEST_METHOD"]==="POST"){
    if($_POST["lang"]=="ar"){
      header("Location: ar.php");
      exit();
    }
     elseif($_POST["lang"]=="en"){
      header("Location: en.php");
      exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" id="">
        <select name="lang" id="">
            <option value="ar">Arabic</option>
            <option value="en">English</option>
            <option value="sp">Spanish</option>
        </select>
        <input type="submit" value="Go">
    </form>
</body>
</html>