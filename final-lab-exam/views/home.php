<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>register</title>
</head>

<body>
    <form>
        Name : <input type="text" name="name" id="name" />
        <br />
        username : <input type="text" name="username" id="username" />
        <br />
        Contact no : <input type="text" name="contact" id="contact" />
        <br />
        Password : <input type="text" name="password" id="password" />
        <br />
        Confirm Password :
        <input type="text" name="confirmPassword" id="confirmPassword" />
        <br />
        <input type="button" name="submit" id="submit" value="register" onclick="validate()" /><br />
        <p id="error" style="color: red"></p>
    </form>
    <script src="../assets/register.js"></script>
</body>

</html>