<!DOCTYPE html>
<html>

<body>

    <div>
        <form action="" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
            <fieldset>
                <legend>Login</legend>
                <table>
                    <tr>
                        <td>User Name</td>
                        <td><input type="text" name="uname"></td>
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
        </form>

    </div>


</body>

</html>