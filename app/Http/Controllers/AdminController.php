<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\Contact;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function admin()
    {
        $id = '1';
        $data = Settings::where('id', $id)->get();
        $name = Settings::where('id', 1)->pluck('appname');
        foreach($name as $name)

        return view('admin.index', compact('data','name'));
    }


    public function requests()
    {
        $id = '1';
        $data = Settings::where('id', $id)->get();
        $name = Settings::where('id', 1)->pluck('appname');
        foreach($name as $name)

        
        $data2 = Contact::orderBy('id', 'DESC')->get();
        

        return view('admin.requests', compact('data2','data','name'));
    }


    public function postset(Request $request){
        
           
        $this->validate($request,[
                     

        ]);

        if($request->hasFile('image')){
            //get file name with ext
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //GET just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $filenameToStore = $filename .'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('image')->storeAs('public/logo', $filenameToStore);

        }else{
            $filenameToStore = 'noimage.png';
        }

        $setcount = Settings::where('id', 1)->count();

        if($setcount >= 1){

            $id = '1';
            $approval = Settings::find($id);    

            $approval->appname = $request->input('cname');
            $approval->phone1 = $request->input('cphone1');
            $approval->phone2 = $request->input('cphone2');
            $approval->contactemail = $request->input('cemail');
            $approval->facebook = $request->input('fbpage');
            $approval->twitter = $request->input('twitter');
            $approval->instagram = $request->input('instagram');
            $approval->pinterest = $request->input('pinterest');
            $approval->skype = $request->input('skype');
            $approval->address = $request->input('caddress');
            $approval->logo = $filenameToStore;
            $approval->save();


        }else{

            $approval = new Settings;    

            $approval->appname = $request->input('cname');
            $approval->phone1 = $request->input('cphone1');
            $approval->phone2 = $request->input('cphone2');
            $approval->contactemail = $request->input('cemail');
            $approval->facebook = $request->input('fbpage');
            $approval->twitter = $request->input('twitter');
            $approval->instagram = $request->input('instagram');
            $approval->pinterest = $request->input('pinterest');
            $approval->skype = $request->input('skype');
            $approval->address = $request->input('caddress');
            $approval->logo = $filenameToStore;
           
            $approval->save();
        }

        	
        return redirect()->back()->with('success', 'Service created successfully!');

    }


}
