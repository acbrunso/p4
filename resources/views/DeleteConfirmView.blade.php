@extends('layout.master')
@section('content')




<div class="center">
    <form action="ProfileView" method="post" class="basic-grey">
      {!! csrf_field() !!}
      <h1>Confirm Account Deletion
        <span>Are you sure you wish to delete your account?  This cannot be undone.</span>
      </h1>
      <label>
        <span>&nbsp;</span>
        <button type='submit' class='btn btn-primary' name="yes" id="yes" value="yes">Yes</button>
        <button type='submit' class='btn btn-primary' name="no" id="no" value="no">Cancel</button>
      </label>
      {!! Form::close() !!}
</div>

@stop
