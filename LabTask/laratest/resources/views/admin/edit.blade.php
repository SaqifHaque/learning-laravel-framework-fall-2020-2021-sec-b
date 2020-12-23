<!DOCTYPE html>
<html>
<body>
<form action="../update/{{$user -> id}}" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
        <fieldset>
            <legend>Edit Employee</legend>
            <table>
                <tr>
                    <td>Full Name</td>
                    <td><input type="text" name="fullname" value="{{$user->fullname}}"></td>
                </tr>
                <tr>
                    <td>Company Name</td>
                    <td><input type="text" name="c_name" value="{{$user->c_name}}"></td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td><input type="text" name="contact" value="{{$user->contact}}"></td>
                </tr>
                <tr>
                    <td>User Name</td>
                    <td><input type="text" name="u_name" value="{{$user->u_name}}"></td>
                </tr>
        
                <tr>
                    <td><input type="submit" name="submit" value="Update" ></td>
                </tr>
            </table>
        </fieldset>

    </div>
    </form>


</body>

</html>