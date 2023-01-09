<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Storage;
use App\Models\Client;
use App\Models\Clients_enquire;
class EnquiryDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('enquiry-details');
    }
    public function enquiry(Request $request){
        $issue = $request->input('issue-type');
        if($issue == "1"){
            $validated = $request->validate([
                'issue-textarea' => 'required',
                 'photo'=>'required',
                   
                   
            ]);
        }
        if($issue == "2"){
            $validated = $request->validate([
                   'additional_work'=>'required',
                   'photo2'=>'required',
                   
                   
            ]);
        }
      
        $validated = $request->validate([
            'rate'=>'required'
            
            
            
     ]);
        //var_dump($issue);
        $issue_textarea = $request->input('issue-textarea');
        $additional_work  =  $request->input('additional_work');
        $file = $request->file('file');
        $rating = $request->input('rate')[0];
       
       
        
      if($issue_textarea == null){
        $issue_textarea = "";
      }
      if($additional_work == null){
        $additional_work = "";
      }
        if($request->file('photo')){
            $fileName = time().$request->file('photo')->getClientOriginalName();
            $path1 = $request->file('photo')->storeAs('images',$fileName,'public');
            $request->path = 'storage/'.$path1;
        }
        
        if($request->file('photo2')){
            $fileName = time().$request->file('photo2')->getClientOriginalName();
            $path2 = $request->file('photo2')->storeAs('images',$fileName,'public');
            $request->path = 'storage/'.$path2;
        }
        $name =  $request->session()->get('name');
        $email = $request->session()->get('email');
        $contact = $request->session()->get('contact');
        $website = $request->session()->get('website');
        $user = new Client;
        $user->name = $name;
        $user->email = $email;
        $user->contact = $contact;
        $user->save();
        $enquire = new Clients_enquire;
        $enquire->client_id = $user->id;
        $ldate = date('Y-m-d H:i:s');
        $enquire->date =  $ldate;
        $enquire->email=  $email;
        $enquire->issue=  $issue_textarea;
        $enquire->additional_work =  $additional_work;
        $enquire->file_uploaded_path =   "storage/images/".$fileName;
        $enquire->website_url=  $website;
        $enquire->save();
    


        Mail::to('developer@twomoonsconsulting.com.au')->send(new DemoMail($request));
        Mail::to('adam@twomoonsconsulting.com.au')->send(new DemoMail($request));
        //var_dump($issue_textarea );
      
        return redirect()->route('enquiry');

       //php Storage::deleteDirectory('public/images');
    
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
        //
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
