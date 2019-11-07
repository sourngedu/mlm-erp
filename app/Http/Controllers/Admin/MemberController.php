<?php

namespace App\Http\Controllers\Admin;

use App\User;


use App\Models\Member;
use App\Traits\UploadScope;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{

    protected $folder_path;
    protected $folder_name = 'member';

    use UploadScope;

    public function __construct()
    {
            $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
            $this->folder_path = public_path().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.$this->folder_name.DIRECTORY_SEPARATOR;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[];

        //Get all member and pass it to the view
        // $data['users'] = User::all();
        // $data['members']=Member::all();
        $members=Member::with('package','user')->get();

        // return $members;

        // return view('admin.members.index')->with('users', $users);
        return view('admin.members.index',compact('members'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    public function show_tree($sponser_id)
    {
        //
        // $data=[];
        $member_Count = Member::findOrFail($user_id=auth()->user()->id);
        $member_count= $member_Count->count_parent->count();
        $user_id=auth()->user()->id;
        $MemberDetail=Member::with('package','user')->find($user_id=auth()->user()->id);




        // $sponser_id= $MemberDetail->parent_id;
        // return $sponser_id;
        // return $MemberDetail;
        // $members=Member::find($id);
        // return $members->package;

        // ឈ្មោះក្នុង​ with('package') គឺជាឈ្មោះ​ function នៃ​ relationship ដែល​បាន​ចង​ក្នុង​ package
        $members=Member::with('package','user')->get(); //get all records
        // $members=Member::with('package','user')->find($id); //get all records
        // return $members;
        // return $members->user->name;
        // $menu=DB::table('tbl_menu')->find(5);
        // $menu = DB::table('member')->get()->toArray();

        // return $menu;
        $ref   = [];
        $items = [];
        foreach ($members as $data) {
            $thisRef = &$ref[$data->id];
            $thisRef['parent_id'] = $data->parent_id;
            $thisRef['username'] = $data->username;
            $thisRef['title'] = $data->id;
            $thisRef['href'] = $data->username;

            $thisRef['name'] = $data->user->name;
            $thisRef['phone'] = $data->user->contact_number;


            $thisRef['sponser_id'] = $data->parent_id; //$sponser_id;
            $thisRef['upline_id']=$data->parent_id;

            // $thisRef['profile_image'] = $data->username;
            // {{asset('/css/style.css')}}
            // $thisRef['profile_image'] = asset('images/user/7488.jpg');
            $thisRef['profile_image'] = asset('images/user/'.$data->user->profile_image);

            $thisRef['target'] = $data->username;
            $thisRef['id'] = $data->id;

            if ($data->parent_id == $sponser_id) {
                $items[$data->id] = &$thisRef;
            } else {
                $ref[$data->parent_id]['children'][] = &$thisRef;
            }
        }
    // $menu = $items;



        $toArray = [];
        foreach ($items as $key => $value) {
            $toArray [] = $value;
        }

        $members = $toArray[0];


        return view('admin.members.view_tree',compact('members','MemberDetail','member_count'));

    }

    public function chart()
    {
        //
        // $data=[];

        // echo "Chart";

        $user_id=auth()->user()->id;
        $MemberDetail=Member::with('package','user')->find($user_id=auth()->user()->id);
        $sponser_id= $MemberDetail->parent_id;
        // return $MemberDetail;
        // $members=Member::find($id);
        // return $members->package;

        // ឈ្មោះក្នុង​ with('package') គឺជាឈ្មោះ​ function នៃ​ relationship ដែល​បាន​ចង​ក្នុង​ package
        $members=Member::with('package','user')->get(); //get all records
        // $members=Member::with('package','user')->find($id); //get all records
        // return $members;
        // return $members->user->name;
        // $menu=DB::table('tbl_menu')->find(5);
        // $menu = DB::table('member')->get()->toArray();

        // return $menu;
        $ref   = [];
        $items = [];
        foreach ($members as $data) {
            $thisRef = &$ref[$data->id];
            $thisRef['parent_id'] = $data->parent_id;
            $thisRef['text'] = $data->username;
            $thisRef['title'] = $data->id;
            $thisRef['href'] = $data->username;

            $thisRef['name'] = $data->user->name;
            $thisRef['phone'] = $data->user->contact_number;

            $thisRef['sponser_id'] = $data->parent_id;//asset('admin/members/tree/'.$data->parent_id) ;

            // return $thisRef['sponser_id'] ;
            // $thisRef['profile_image'] = $data->username;
            // {{asset('/css/style.css')}}
            // $thisRef['profile_image'] = asset('images/user/7488.jpg');
            $thisRef['profile_image'] = asset('images/user/'.$data->user->profile_image);

            $thisRef['target'] = $data->username;
            $thisRef['id'] = $data->id;

            if ($data->parent_id == $sponser_id) {
                $items[$data->id] = &$thisRef;
            } else {
                $ref[$data->parent_id]['children'][] = &$thisRef;
            }
        }
    // $menu = $items;



        $toArray = [];
        foreach ($items as $key => $value) {
            $toArray [] = $value;
        }

        $members = $toArray[0];


        return view('admin.members.view_tree',compact('members','MemberDetail'));

    }


    public function sponser()
    {
        //
        $data=[];
        // echo "Hello";
       $user_id=auth()->user()->id;

        // $members=Member::find($id);
        // return $members->package;

        // ឈ្មោះក្នុង​ with('package') គឺជាឈ្មោះ​ function នៃ​ relationship ដែល​បាន​ចង​ក្នុង​ package
        $members=Member::with('package','user')->get(); //get all records
        // $members=Member::with('package','user')->find($user_id); //get all records

        // return $members;

    //     $ref   = [];
    //     $items = [];
    //     foreach ($members as $data) {

    //         $thisRef['name'] = $data->user->name;
    //         $thisRef['email'] = $data->user->email;
    //         $thisRef['phone']=$data->user->contact_number;


    //         $thisRef = &$ref[$data->id];
    //         $thisRef['parent_id'] = $data->parent_id;
    //         $thisRef['text'] = $data->username;
    //         $thisRef['title'] = $data->id;
    //         $thisRef['href'] = $data->username;
    //         // $thisRef['profile_image'] = $data->username;
    //         // {{asset('/css/style.css')}}
    //         $thisRef['profile_image'] = asset('images/user/'.$data->user->profile_image);
    //         $thisRef['target'] = $data->username;
    //         $thisRef['id'] = $data->id;

    //         if ($data->parent_id == 0) {
    //             $items[$data->id] = &$thisRef;
    //         } else {
    //             $ref[$data->parent_id]['children'][] = &$thisRef;
    //         }
    //     }
    // // $menu = $items;



    //     $toArray = [];
    //     foreach ($items as $key => $value) {
    //         $toArray [] = $value;
    //     }

    //     $members = $toArray[0];

    // return $members;

        return view('admin.members.direct_sponser',compact('members'));

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
