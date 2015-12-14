@extends('layout.master')

@section('content')



    @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

<div class="left">
    <form action="register" method="post" class="basic-grey">
      {!! csrf_field() !!}

      <h1>Register
        <span>Register for an account</span>
      </h1>

      <label for='email'>
        <span>Email</span>
          <input type='text' name='email' id='email' value='{{ old('email') }}'>
      </label>

      <label for="password">
        <span>Password</span>
        <input type='password' name='password' id='password'>
      </label>

      <label for='password_confirmation'>
        <span>Confirm Password</span>
        <input type='password' name='password_confirmation' id='password_confirmation'>
      </label>

    <label for="lastName">
      <span>Last Name</span>
      {!! Form::text('lastName', '',['id'=>'lastName']) !!}
    </label>
    <label for='firstName'>
      <span>First Name</span>
      {!! Form::text('firstName', '', ['id'=>'firstName']); !!}
    </label>
    <label for='address'>
      <span>Address</span>
          {!! Form::text('address', '',['id'=>'address']); !!}
      </label>

      <label for='city'>
        <span>City</span>
        {!! Form::text('city','', ['id'=>'city']); !!}
      </label>

      <label for='state'>
        <span>State</span>
      <?php $states = \App\State::all(); ?>
      <select name="state">
        @foreach($states as $stateEntry)
          <option value= "{{ $stateEntry->state }}"
            @if(isset( $state ))
             @if( $stateEntry->state == $state )
              selected="selected"
             @endif
            @endif
     > {{ $stateEntry->state }}</option>
        @endforeach
      </select>
      </label>

      <label for='zip'>
        <span>Zip</span>
        {!! Form::text('zip', '',['id'=>'zip']); !!}
      </label>
      <label>
        <span>&nbsp;</span>
        {!! Form::submit('Submit'); !!}
      </label>
      <input type="hidden" value="1" name="hosting_plan_id" id="hosting_plan_id">
      <input type="hidden" value="1" name="server_plan_id" id="server_plan_id">
  {!! Form::close() !!}
</div>

  <div class="two right">
<form action="" method="post" class="basic-grey">
  {!! csrf_field() !!}

  <h1>Login
    <span>Already have an account?</span>
  </h1>

      <label for='email'>
        <span>Email</span>
        <input type='text' name='email' id='email' value='{{ old('email') }}'>
      </label>
      <label for='password'>
        <span>Password</span>
        <input type='password' name='password' id='password' value='{{ old('password') }}'>
      </label>

      <label for="remember"
        <span>Remember me</span>
        <input type='checkbox' name='remember' id='remember'>
      </label>
      <label>
        <span>&nbsp;</span>
        <button type='submit' class='btn btn-primary'>Login</button>
      </label>
  {!! Form::close() !!}
</div>
@stop
