<!DOCTYPE html>
<html>
<body>
<form action="../update/{{$job -> j_Id}}" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
        <fieldset>
            <legend>Edit Job</legend>
            <table>
                <tr>
                    <td>Company Name</td>
                    <td><input type="text" name="c_name" value="{{$job->c_name}}"></td>
                </tr>
                <tr>
                    <td>Job Title</td>
                    <td><input type="text" name="j_title" value="{{$job->j_title}}"></td>
                </tr>
                <tr>
                    <td>Location</td>
                    <td><input type="text" name="location" value="{{$job->location}}"></td>
                </tr>
                <tr>
                    <td>Salary</td>
                    <td><input type="text" name="salary" value="{{$job->salary}}"></td>
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