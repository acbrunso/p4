<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Faker\Factory as Faker;
require_once '../vendor/fzaninotto/faker/src/autoload.php';

class PlansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hostingPlans = \App\HostingPlan::all();
        $serverPlans = \App\ServerPlan::all();
        return View('PlansView', ['hostingPlans' => $hostingPlans, 'serverPlans' => $serverPlans]);
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

      # Give it a different title
      //$user->hosting_plan()->associate();
      if(isset($request->hPlan)) {
        $user->hosting_plan_id = $request->hPlan;
      }
      else {
        $user->server_plan_id = $request->sPlan;
      }

      $user->save();
      $hostingPlans = \App\HostingPlan::all();
      $serverPlans = \App\ServerPlan::all();
      return View('PlansView', ['hostingPlans' => $hostingPlans, 'serverPlans' => $serverPlans]);
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
