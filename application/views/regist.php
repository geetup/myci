
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册</title>
    <base href="<?php echo site_url();?>">
    <style>
        .error{
            color: red;
        }

    </style>
</head>
<body>
<form action="welcome/save" method="post">
    <div>
        用户名: <input type="text" name="username">
        <span class="error"><?php echo isset($name_error)? $name_error:''?></span>
    <div/>
    <div>
        密码: <input type="password" name="pwd1">
        <span class="error"><?php echo isset($pwd_error)? $pwd_error:''?></span>
    </div>
    <div>
        确认密码: <input type="password" name="pwd2">
    </div>
    <div>
        <input type="submit" value="注册">
    </div>
</form>
</body>
</html>
