<!DOCTYPE html>
<html>
<body>
<form action="" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
        <fieldset>
            <legend>Add Job</legend>
            <table>
                <tr>
                    <td>Company Name</td>
                    <td><input type="text" name="c_name"></td>
                </tr>
                <tr>
                    <td>Job Title</td>
                    <td><input type="text" name="j_title"></td>
                </tr>
                <tr>
                    <td>Location</td>
                    <td><input type="text" name="location"></td>
                </tr>
                <tr>
                    <td>Salary</td>
                    <td><input type="text" name="salary"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Create"></td>
                </tr>
            </table>
        </fieldset>

    </div>
    </form>


</body>

</html>