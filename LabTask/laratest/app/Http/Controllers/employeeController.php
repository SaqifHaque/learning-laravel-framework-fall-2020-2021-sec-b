<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Job;

class employeeController extends Controller
{
    public function Employee()
    {
        return view('employee.empdash');
    }
    public function Job(){
        return view('employee.addjob');
    }

    public function viewJobs(Request $request){
        return view('employee.view-jobs');

    }
    public function addJob(Request $req)
    {
        $Job = new Job();

        $Job->c_name     = $req->c_name;
        $Job->j_title     = $req->j_title;
        $Job->location    = $req->location;
        $Job->salary    = $req->salary;

        if ($Job->save()) {
            return redirect()->route('emp.empdash');
        }
        else{
            echo "Server Error";
        }
    }

    public function searchJobs(Request $request){

            if($request->ajax())
            {
             $output = '';
             $query = $request->get('query');
             if($query != '')
             {
              $data = DB::table('jobs')
                ->where('c_name', 'like', '%'.$query.'%')
                ->orWhere('j_title', 'like', '%'.$query.'%')
                ->orWhere('location', 'like', '%'.$query.'%')
                ->orWhere('salary', 'like', '%'.$query.'%')
                ->orderBy('j_Id', 'desc')
                ->get();
                
             }
             else
             {
              $data = DB::table('jobs')
                ->orderBy('j_Id', 'desc')
                ->get();
             }
             $total_row = $data->count();
             if($total_row > 0)
             {
              foreach($data as $row)
              {
               $output .= '
               <tr>
                <td>'.$row->c_name.'</td>
                <td>'.$row->j_title.'</td>
                <td>'.$row->location.'</td>
                <td>'.$row->salary.'</td>
                <td>
                    <form action="job/delete/'.$row -> j_Id.'" method="POST">
                    <input type="hidden" name="_token" value="'.csrf_token().'">
                        <button type="submit">Delete</button>
                    </form> |
                        <a href="job/edit/'.$row -> j_Id.'">Edit</a>
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
    public function edit(Job $job)
    {
        return view('employee.edit', compact('job'));
    }

    public function update(Request $request, Job $job)
    {
        $valid_job = request()-> validate([
            'c_name' => 'required',
            'j_title' => 'required',
            'location' => 'required'  ,
            'salary' => 'required'   
        ]);
        $job->update($valid_job);
        return redirect()->route('emp.jobs');
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->route('emp.jobs');
    }
}
