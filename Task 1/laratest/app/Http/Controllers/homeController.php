<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class homeController extends Controller
{
    public function index(){


    	return view('home.index');
    }

    public function stdlist(){
    	$students = $this->getStudentlist();
    	return view('home.stdlist')->with('students', $students);
    }

	public function edit($id){
		$students = $this->getStudentlist();
		
		return view('home.edit')->with('students',$students)->with('id',$id);
    }

    public function create(){
    
    	return view('home.create');
    }

    public function insert(){

		$students = $this->getStudentlist();
		$num = count($students);
		$students[$num]['id'] = Input::post('id');
		$students[$num]['name'] = Input::post('name');
		$students[$num]['cgpa'] = Input::post('cgpa');
		$students[$num]['email'] = Input::post('email');
    	return view('home.stdlist')->with('students',$students);
    }

    public function details($id){
		$students = $this->getStudentlist();
		
		return view('home.details')->with('students',$students)->with('id',$id);
    }

    public function update($id){
		$students = $this->getStudentlist();
		$num = Input::post('id');
		$students[$id-1]['id'] = Input::post('id');
		$students[$id-1]['name'] = Input::post('name');
		$students[$id-1]['cgpa'] = Input::post('cgpa');
		$students[$id-1]['email'] = Input::post('email');
		
		return view('home.stdlist')->with('students',$students)->with('id',$id);
    }

    public function delete($id){
    	$students = $this->getStudentlist();
		
		return view('home.delete')->with('students',$students)->with('id',$id);
    }

    public function destroy($id){
    	$students = $this->getStudentlist();
		array_splice($students, $id-1 ,1);
		return view('home.stdlist')->with('students',$students)->with('id',$id);
    }

    private function getStudentlist(){

    	return [
    		['id'=> 1, 'name'=> 'alamin', 'cgpa'=>1.2, 'email'=> 'alamin@aiub.edu'],
    		['id'=> 2, 'name'=> 'CYZ', 'cgpa'=>2.2, 'email'=> 'CYZ@aiub.edu'],
    		['id'=> 3, 'name'=> 'XYZ', 'cgpa'=>3.2, 'email'=> 'XYZ@aiub.edu'],
    		['id'=> 4, 'name'=> 'ABC', 'cgpa'=>3.4, 'email'=> 'ABC@aiub.edu'],
    		['id'=> 5, 'name'=> 'PQE', 'cgpa'=>3.6, 'email'=> 'PQE@aiub.edu'],
    		['id'=> 6, 'name'=> 'PQR', 'cgpa'=>4, 'email'=> 'PQR@aiub.edu'],
    		['id'=> 7, 'name'=> 'asd', 'cgpa'=>2.5, 'email'=> 'asd@aiub.edu']
    	];
    }
}
