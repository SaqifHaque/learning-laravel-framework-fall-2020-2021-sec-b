<!DOCTYPE html>
<html>

<body>
<form action="" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
        <fieldset>
            <legend>Login</legend>
            <table>
                <tr>
                    <td>Full Name</td>
                    <td><input type="text" name="fullname"></td>
                </tr>
                <tr>
                    <td>Company Name</td>
                    <td><input type="text" name="c_name"></td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td><input type="text" name="contact"></td>
                </tr>
                <tr>
                    <td>User Name</td>
                    <td><input type="text" name="u_name"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </fieldset>

    </div>
    </form>


</body>

</html>