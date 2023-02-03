<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\prof;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
 
        /*if ($request->ajax()) {
            $data = User::select('id','full_name','email','mobile_no','address')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = ' <a href="{{url("editdata")}}/{{$data->id}}" class="btn btn-primary btn-sm">Edit</a> <a href="{{url("deletedata")}}/{{$data->id}}" class="btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }*/
        return view('user.userdata');
    }
     /*public function profile()
    {
        $data['user'] = user::get();
        return view('user.profile',$data);
    }
    public function profiledata()
    {
        return view('user.editprofile');
    }
   public function profstore(Request $request)
    {
        $prof = new prof;
        $image = $request->file('image')->store('image', 'public');
  
        $prof = prof::create([
            'image' => $image,
            "name" => $request->get('name'),
            "email" => $request->get('email'),
            "mobile" => $request->get('mobile'),
            "location" => $request->get('location'),
            "description" => $request->get('description'),
        ]);

        $prof->save();

        return redirect('profile');
        
    }*/
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['user'] = user::get();
        return view('user.usertable',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except(['image']);
 
        $request->validate([
            
            'full_name' => 'required|max:255',
            'image' => 'required|image|mimes:doc,pdf,docx,zip,jpeg,png,jpg,gif,ico,svg',
            'email' => 'required|email|max:255',
            'mobile_no' => 'required|min:10',
            'address' => 'required|max:255',
            'password' => 'required|string|min:10|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/',
            'description' => 'required|max:255',
        ], [
            'full_name.required' => 'Name is required',
            'image.required' => 'image must be inserted in field',
            'email.required' => 'email is required',
            'password.required' => 'Password is required',
            'mobile_no.required' => 'mobile number is required',
            'address.required' => 'address is required',
            'description.required' => 'description is required',
        ]);
       
    if($file = $request->hasFile('image')) {
                $file = $request->file('image') ;
                $fileName = $file->getClientOriginalName() ;
                $destinationPath = public_path().'/assets/img' ;
                $file->move($destinationPath,$fileName);
                $input['image'] = $fileName;
        }

        $input['password'] = bcrypt($input['password']);
        User::create($input);
 
        return back()->with('success','Successfully registered a new user!');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['user'] = user::find($id);
        return view('user.profile',$data);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['user'] = user::find($id);
        return view('user.editdata',$data);
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
        $user = user::find($id);
        $user->full_name = $request->input('full_name');
        $user->email = $request->input('email');
        $user->image = $request->input('image');
        $user->mobile_no = $request->input('mobile_no');
        $user->address = $request->input('address');
        $user->description = $request->input('description');
        $user->update();   
        return redirect('usertable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = user::where('id',$id)->delete();
        return redirect('usertable');
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}
