<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('enquiry');
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
        //var_dump($request);
        
    }

    public function enquiry(Request $request){
        $name = $request->input('name');
       // var_dump($name);
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'unique:clients|required|email',
            'contact'=> 'required|numeric|min:10',
            'website'=> 'required|url'
        ]);
        $name = $request->input('name');
        $email = $request->input('email');
        $contact = $request->input('contact');
        $website = $request->input('website');
        $request->session()->put('name', $name);
        $request->session()->put('email', $email);
        $request->session()->put('contact', $contact);
        $request->session()->put('website', $website);
        return redirect()->route('enquiry-details');
       // $this->enquiryDetails( $request );
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
