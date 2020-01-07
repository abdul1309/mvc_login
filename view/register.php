<html>
    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" href="/view/css/style.css">
    </head>
    <body>
        <h3>Registrieren</h3>
        <form method="post">
            <table align="center" cellpadding = "10">
            <!----- First Name ---------------------------------------------------------->
                <tr>
                    <td>VORNAME</td>
                    <td>
                        <input type="text" name="firstName" maxlength="30"/>
                        (max 30 Zeichen a-z and A-Z)
                    </td>
                </tr>

                <!----- Last Name ---------------------------------------------------------->
                <tr>
                    <td>NACHNAME</td>
                    <td>
                        <input type="text" name="lastName" maxlength="30"/>
                        (max 30 Zeichen a-z and A-Z)
                    </td>
                </tr>
                <tr>
                    <td>BENUTZERNAME</td>
                    <td><input type="text" name="username" maxlength="30"/>
                        (max 30 Zeichen a-z and A-Z)
                    </td>
                </tr>

                <!----- password ---------------------------------------------------------->
                <tr>
                    <td>PASSWORT</td>
                    <td><input type="password" name="password">
                        (mindenstens eine Nummer und ein Größer Buchstab)
                    </td>
                </tr>
                <tr>
                    <td>PASSWORT BESTÄTIGEN</td>
                    <td>
                        <input type="password" name="confirmPassword">
                    </td>
                </tr>

                <!----- Date Of Birth -------------------------------------------------------->
                <tr>
                    <td>GEBURTSDATUM</td>
                    <td>
                        <input type="date" id="start" name="birthday"
                        min="1960-01-01" max="2020-12-31">
                    </td>
                </tr>

            <!----- Email Id ---------------------------------------------------------->
                <tr>
                    <td>EMAIL</td>
                    <td><input type="email" name="email" maxlength="100" /></td>
                </tr>

            <!----- Address ---------------------------------------------------------->
                <tr>
                    <td>ADRESSE <br /><br /><br /></td>
                    <td><textarea name="address" rows="4" cols="30"></textarea></td>
                </tr>

            <!----- Submit and Reset ------------------------------------------------->
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" class="submit" name="registerButton" value="Registrieren"/>
                        <input type="reset" class="submit" value="Reset"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>