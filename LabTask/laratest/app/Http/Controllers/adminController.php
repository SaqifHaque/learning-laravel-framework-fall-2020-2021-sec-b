<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class adminController extends Controller
{
    public function Admin()
    {
        return view('admin.admindash');
    }
    public function addEmp()
    {
        return view('admin.addEmp');
    }
    public function createEmp(Request $req)
    {
        $user = new User();

        $user->u_name     = $req->u_name;
        $user->password     = $req->password;
        $user->fullname    = $req->fullname;
        $user->type         = "Employee";
        $user->c_name = $req->c_name;
        $user->contact      = $req->contact;

        if ($user->save()) {
            return redirect()->route('admin.admindash');
        }
        else{
            echo "Server Error";
        }
    }

    public function viewEmployee(Request $request){
        $employees =  User::all();
        return view('admin.employee-list');

    }
    public function searchEmployee(Request $request){
        // $employees =  User::all();
        // return view('admin.employee-list', compact('employees'));
            if($request->ajax())
            {
             $output = '';
             $query = $request->get('query');
             if($query != '')
             {
              $data = DB::table('users')
                ->where('fullname', 'like', '%'.$query.'%')
                ->orWhere('c_name', 'like', '%'.$query.'%')
                ->orWhere('contact', 'like', '%'.$query.'%')
                ->orWhere('u_name', 'like', '%'.$query.'%')
                ->orWhere('u_name','!=',$request->session()->get('uname'))
                ->orderBy('id', 'desc')
                ->get();
                
             }
             else
             {
              $data = DB::table('users')
                ->where('u_name','!=',$request->session()->get('uname'))
                ->orderBy('id', 'desc')
                ->get();
             }
             $total_row = $data->count();
             if($total_row > 0)
             {
              foreach($data as $row)
              {
               $output .= '
               <tr>
                <td>'.$row->fullname.'</td>
                <td>'.$row->c_name.'</td>
                <td>'.$row->contact.'</td>
                <td>'.$row->u_name.'</td>
                <td>
                    <form action="delete/'.$row -> id.'" method="POST">
                    <input type="hidden" name="_token" value="'.csrf_token().'">
                        <button type="submit">Delete</button>
                    </form> |
                        <a href="edit/'.$row -> id.'">Edit</a>
				</td>
               </tr>
               ';
              }
             }
             else
             {
              $output = '
              <tr>
               <td align="center" colspan="5">No Data Found</td>
              </tr>
              ';
             }
             $data = array(
              'table_data'  => $output,
              'total_data'  => $total_row
             );
       
             echo json_encode($data);
            }
    }

    public function edit(User $user)
    {
        return view('admin.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $valid_employee = request()-> validate([
            'fullname' => 'required',
            'c_name' => 'required',
            'contact' => 'required',
            'u_name' => 'required'   
        ]);
        $user->update($valid_employee);
        return redirect()->route('admin.emplist');
    }


    public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->route('admin.emplist');
    }

}
