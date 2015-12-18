<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UpdatePlansController extends Controller
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

        $planSelect = \App\HostingPlan::first();
        //echo $user->hosting_plan->websites;
        return View('UpdatePlansView', ['planSelect' => $planSelect, 'id' => '1']);
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
      $planSelect = \App\HostingPlan::where('id', '=', $request->id)->first();

      //$plan = Auth::user();
      if(isset($request->save)) {

        $planSelect->websites = $request->websites;
        $planSelect->storage = $request->storage;
        $planSelect->bandwidth = $request->bandwidth;
        $planSelect->emails = $request->emails;
        $planSelect->OS = $request->OS;
        \Session::flash('flash_message','The plan has been updated');
        $planSelect->save();
      }

      return View('UpdatePlansView', ['request' => $request, 'id' => $planSelect->id, 'planSelect' => $planSelect]);
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
