@extends('layout.master')
@section('content')




<div class="left">
    <form action="" method="post" class="basic-grey">
      {!! csrf_field() !!}
      <h1>My Profile
        <span>Update Profile here</span>
      </h1>

      <label for='last_name'>
        <span>Last Name</span>
        <input type='text' name='last_name' id='last_name' value='{{ $user->last_name }}'>
      </label>
      <label for='first_name'>
        <span>First Name</span>
        <input type='text' name='first_name' id='first_name' value='{{ $user->first_name }}'>
      </label>
      <label for='street_address'>
        <span>Street Address</span>
        <input type='text' name='street_address' id='street_address' value='{{ $user->street_address }}'>
      </label>
      <label for='city'>
        <span>City</span>
        <input type='text' name='city' id='city' value='{{ $user->city }}'>
      </label>
      <label for='state'>
        <span>State</span>
        <input type='text' name='state' id='state' value='{{ $user->state }}'>
      </label>
      <label for='zip'>
        <span>Zip</span>
        <input type='text' name='zip' id='zip' value='{{ $user->zip }}'>
      </label>
      <label for='email'>
        <span>Email</span>
        <input type='text' name='email' id='email' value='{{ $user->email }}'>
      </label>







      <label>
        <span>&nbsp;</span>
        <button type='submit' class='btn btn-primary' name="save" id="save" value="save">Save</button>
        <button type='submit' class='btn btn-primary' name="delete" id="delete" value="delete">Delete My Account</button>
      </label>
      {!! Form::close() !!}
</div>






@stop
