
<!doctype html>
<html lang="en">
<head>
    <title>Login pagina</title>

    <style>
        .box {
            border:#666666 solid 1px;
        }
        body {
            background-image: url('heuvels.jpg');
    </style>

</head>

<body = "#FFFFFF">

<br><br/>
<br><br/>
<br><br/>
<br><br/>
<br><br/>

<div style = "background: rgba(76, 175, 80, 0.3); width:250px; margin:0 auto; border: solid 1px #333333; " align = "center">

    <div style = "margin:30px">

        <span>Login met uw gebruikersnaam of wachtwoord</span>
        <br><br/>
        <form action = "welkom.php" method = "post">

            <input  type = "text" name = "name" placeholder="Gebruiker / email" class = "box"/>
            <br /><br />
            <input type = "password" name = "password" placeholder="Wachtwoord" class = "box" />
            <br/><br />

            <input type="checkbox" checked="checked" name="remember"> Remember me

            <br><br/>

            <input type = "submit" name = "login"/><br />


            <a href="[absolute url]">
                <span>wachtwoord vergeten?</span>
            </a>
        </form>




    </div>

</div>

</body>
</html>