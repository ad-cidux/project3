<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function index(){
//        return 'hello word';
// return [
//     'name'=>'rupanta',
//     'city'=>'dhaka',
//     'country'=>'bangladesh'
//
// ];

        $name = 'Shafi ul alam Rupanto';


//        return view('student.add-student' , compact('name') );
//        return view('student.add-student')->with('name',$name);
//        return view('student.add-student');
//


        return view('front.home.home-content');







    }


    public function support()
    {

        return view('front.support.support-content');



    }


    public function about()
    {

        return view('front.about.about-content');



    }

    public function blog()
    {

        return view('front.blog.blog-content');



    }



    public function contact()
    {

        return view('front.contact.contact-content');



    }


























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
