<?php

namespace App\Http\Controllers\Admin;

use Auth;

use Session;
use App\User;

//Importing laravel-permission models
use App\Traits\UploadScope;
use Illuminate\Http\Request;

//Enables us to output flash messaging
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\User\AddValidation;
use App\Http\Requests\User\EditValidation;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    protected $folder_path;
    protected $folder_name = 'user';

    use UploadScope;

    public function __construct()
    {
			$this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
			$this->folder_path = public_path().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.$this->folder_name.DIRECTORY_SEPARATOR;
    }

    public function index()
    {
        //Get all users and pass it to the view
        $users = User::all();
        return view('admin.users.index')->with('users', $users);
    }

    public function create()
    {
        //Get all roles and pass it to the view
        $data = [];
        $data['roles'] = Role::where('id', '<>', '1')->get();
        return view('admin.users.create',compact('data'));
    }

    public function store(AddValidation $request)
    {
			if ($request->hasFile('profile_image')){
				$image_name = $this->uploadImages($request, 'profile_image');
			}else{
				$image_name = "";
			}
			$user = User::create(['name' => $request->name, 
														'email' => $request->email, 
														'password' => $request->password,
														'contact_number' => $request->contact_number,
														'address' => $request->address,
														'profile_image' =>  $image_name
													]);

			$roles = $request['roles']; //Retrieving the roles field
			//Checking if a role was selected
			if (isset($roles)) {
				foreach ($roles as $role) {
					$role_r = Role::where('id', '=', $role)->firstOrFail();
					$user->assignRole($role_r); //Assigning role to user
				}
			}
			//Redirect to the users.index view and display message
			return redirect()->route('admin.users.index')
					->with(
							'flash_message',
							'User successfully added.'
					);
    }

    public function show($id)
    {
			$user = User::findOrFail($id);
			return view('admin.users.show', compact('user'));
    }

    public function edit($id)
    {
			$data = [];
			if(auth()->user()->id == 1){
				if (!$data['row'] = User::find($id)){
					return $this->invalidRequest();
				}
			}else{
				if (!$data['row'] = User::where('id','<>','1')->find($id)){
					return $this->invalidRequest();
				}
			}
			$data['roles'] = Role::all();
			$data['active_roles'] = $data['row']->roles()->pluck('id', 'id')->toArray();
			return view('admin.users.edit', compact('data')); //pass user and roles data to view
    }

    public function update(EditValidation $request, $id)
    {
			$user = User::findOrFail($id); //Get role specified by id
      if ($request->hasFile('profile_image')) {
        $image_name = $this->uploadImages($request, 'profile_image');			
				// remove old image from folder
				if (file_exists($this->folder_path.$user->profile_image))
					@unlink($this->folder_path.$user->profile_image);
			} else {
			 		$image_name = $user->profile_image;
			}
			$newPassword = $request->get('password');
			if(empty($newPassword)){
				$user->update(['name' => $request->name, 
										 'email' => $request->email, 
										 'contact_number' => $request->contact_number,
										 'address' => $request->address,
										 'profile_image' =>  $image_name
									 ]);
			}else{
				$user->update(['name' => $request->name, 
										 'email' => $request->email, 
										 'password' => $newPassword,
										 'contact_number' => $request->contact_number,
										 'address' => $request->address,
										 'profile_image' =>  $image_name
									 ]);
			}	
			$roles = $request['roles']; //Retreive all roles
			if (isset($roles)) {
					$user->roles()->sync($roles);  //If one or more role is selected associate user to roles
			} else {
					$user->roles()->detach(); //If no role is selected remove exisiting role associated to a user
			}
			return redirect()->route('admin.users.index')
					->with(
							'flash_message',
							'User successfully edited.'
					);
		}

    public function destroy($id)
    {
			//Find a user with a given id and delete
			$user = User::findOrFail($id);
			$user->delete();
			return redirect()->route('admin.users.index')
					->with(
							'flash_message',
							'User successfully deleted.'
					);
		}
		
    protected function invalidRequest($message = 'Invalid request!!')
    {
			request()->session()->flash($this->message_warning, $message);
			return redirect()->route('users.index');
    }		
}
