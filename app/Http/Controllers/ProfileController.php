<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Faker\Factory as Faker;
require_once '../vendor/fzaninotto/faker/src/autoload.php';

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!\Auth::check()) {
          \Session::flash('flash_message','You have to be logged in to add a new plan');
          return redirect('/');
        }

        $user = \Auth::user();
        return View('ProfileView', ['user' => $user]);
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

      $user = \Auth::user();
      //$planSelect = \App\HostingPlan::where('id', '=', $request->id)->first();
      //$plan = Auth::user();
      if(isset($request->save)) {
        //echo "here";
        $user->last_name = $request->last_name;
        $user->first_name = $request->first_name;
        $user->street_address = $request->street_address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->zip = $request->zip;
        $user->email = $request->email;
        $user->save();
        \Session::flash('flash_message','Your profile has been updated');
        return View('ProfileView', ['user' => $user]);
      }
      else {
        return View('DeleteConfirmView', ['user' => $user]);
        //$user->delete();
        //\Session::flash('flash_message','Your Account has been deleted');
        //return redirect()->guest('/login');
      }
      //$planSelect = \App\HostingPlan::where('id', '=', $request->planSelect)->first();

      return View('ProfileView', ['user' => $user]);
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
        return "testing update";
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
