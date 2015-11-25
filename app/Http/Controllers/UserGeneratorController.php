<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Faker\Factory as Faker;
use DB;
use Carbon;

class UserGeneratorController extends Controller {

  function getCustomerWithEloquent() {
    $person = new \App\Customer();
    echo 'yo';
    //return 'test success';
    return View('UserGeneratorView');

  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $customer = new \App\Customer();
      foreach($customer->all() as $customer) {
        echo $customer->last_name;
      }

        return View('UserGeneratorView');
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

      DB::table('customers')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'username' => $request->username,
        'last_name' => $request->lastName,
        'first_name' => $request->firstName,
        'street_address' => $request->address,
        'city' => $request->city,
        'state' => $request->state,
        'zip' => $request->zip,
        'hosting_plan' => 0,
        'server_plan' => 0,
      ]);

      $customers = DB::table('customers')->get();

      // Output the results
      foreach ($customers as $customerObj) {
        $customer= $customerObj->last_name;
      }
      return View('UserGeneratorView', ['customer' => $customer,
                                        'request' => $request]);
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
