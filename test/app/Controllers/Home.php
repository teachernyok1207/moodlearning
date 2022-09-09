<?php

namespace App\Controllers;

class Home extends BaseController
{
	// I didn't remove the default action. Please disregard this. Thank you!
    public function index()
    {
        return view('welcome_message');
    }

    // Action for CRUD
    public function all_details()
    {
    	// Call Model
    	$newDetails=new \App\Models\NewDetails();
    	
    	// Fetch All Registered Record
    	$members=$newDetails->findAll();

    	// Display Form
    	return view('crud',['members'=>$members]);
    }

    // Action for Add Product Page
    public function register()
    {
    	// Call Model
    	$newDetails=new \App\Models\NewDetails();

    	// Call Inserted Value from Textboxes
    	$fname=$this->request->getPost('fname');
    	$email=$this->request->getPost('email');
    	$contact=$this->request->getPost('contact');

    	if ($fname!=''){
    		// Inserting to Table
    		$newDetails->save(['name' => $fname,'email' => $email,'contact'=>$contact]);
    		echo '<center>New Record Added!</center>';
    	}

		// Proceed to Form
    	return view('register');
    }

    // Action to Delete Record
    public function delete_record($id)
    {
    	// Call Model
    	$newDetails=new \App\Models\NewDetails();

    	// Delete Record
    	if ($id){
    		$newDetails->delete($id);
    	}

    	// Proceed to Form
    	return redirect()->to('home/all_details');
    }

    // Action to Edit Record
    public function edit_record($id)
    {
    	// Call Model
    	$newDetails=new \App\Models\NewDetails();

    	// Fetch Record by ID
    	$members = $newDetails->where(['id'=>$id])->first();

    	// Call Value from Textboxes
    	$id=$this->request->getPost('id');
    	$fname=$this->request->getPost('fname');
    	$email=$this->request->getPost('email');
    	$contact=$this->request->getPost('contact');

    	if ($fname!=''){
    		// Updating Record
    		$newDetails->save(['id' => $id,'name' => $fname,'email' => $email,'contact'=>$contact]);
    		echo '<center>Record Updated!</center>';
    	}

    	// Proceed to Form
    	return view('edit',['members'=>$members]);
    }
}
