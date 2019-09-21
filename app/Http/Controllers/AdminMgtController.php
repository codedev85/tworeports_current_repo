<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Role;


class AdminMgtController extends Controller
{
    //
    public function show_admin_mgt(){
        return view('admin.admin-mgt');
    }

 
    public function add_admin(){
        $roles = Role::all();
        
        return view('admin.create-admin')->with('roles',$roles);
    }
//admin
public function add_admin_post(Request $request){
    $fname = $request->input('fname');
    $lname = $request->input('lname');
    $email = $request->input('email');
    $password = $request->input('password');
    $role = $request->input('role');
    //validating the user
    $this->validate($request, [
        //    'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);
       User::create([
        'name' => $fname,
        'l_name' => $lname,
        'email' => $email,
        'role_id'=>$role,
        'password' => Hash::make($password),
    ]);
    return view('admin.create-admin');
}

public function change_password($id){
    $find_user = User::where('id',$id)->get();
    $roles = Role::where('id',$id)->first();
    // dd($roles);
    //  dd($find_user);
    return view('admin.change-password')
                     ->with('roles',$roles)
                      ->with('find_user',$find_user);

}




public function update_password(Request $request,$id){
  
        $fname =  $request->input('fname');
        $email = $request->input('email');
        $password = $request->input('password');

    $find_user = User::find($id)->update([
        'name' => $fname,
        'email'=>$email,
        'password'=> Hash::make($password),
    ]);

    return back()->with('success','Password Updated Successfully');

}

//view all add_admin

public function view_all_admin(){
    $users = User::where('role_id',1)->orwhere('role_id',2)->get();

    return view('admin.all-admin')->with('users',$users);
    
}

//admin send mail 
public function admin_send_mails_to_all_admin(){
    $admin_email = User::where('role_id','<',3)->get();
    $email_array =[];
    foreach($admin_email as $email){
        array_push($email_array, $email->email);
    }

    return view('admin.admin-mail')->with('email_array',$email_array);
}



public function contact_kjk(){
    return view('admin.contact-kjk');
}

}
