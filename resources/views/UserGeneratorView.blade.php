@extends('layout.master')

@section('content')
{!! Form::open() !!}
  <?php
  isset($customer) ? $n= $customer : $n= 'no';
  echo $n;


  
  ?>


  <div class="left">
  <table style="width:40%">

    <tr>
      <td>
        {!! Form::label('lastName',  'Last Name') !!}
      </td>
      <td>
        {!! Form::text('lastName', '',['id'=>'lastName']) !!}
      </td>
    </tr>
    <tr>
      <td>
        {!! Form::label('firstName', 'First Name'); !!}
      </td>
      <td>
        {!! Form::text('firstName', '', ['id'=>'firstName']); !!}
      </td>
    </tr>
    <tr>
      <td>
        {!! Form::label('address', 'Address'); !!}
      </td>
      <td>
        {!! Form::text('address', '',['id'=>'address']); !!}
      </td>
    </tr>
    <tr>
      <td>
        {!! Form::label('city', 'City'); !!}
      </td>
      <td>
        {!! Form::text('city','', ['id'=>'city']); !!}
      </td>
    </tr>
    <tr>
      <td>
        {!! Form::label('state', 'State'); !!}
      </td>
      <td>
        {!! Form::text('state', '',['id'=>'state']); !!}
      </td>
    </tr>
    <tr>
      <td>
        {!! Form::label('zip', 'Zip'); !!}
      </td>
      <td>
        {!! Form::text('zip', '',['id'=>'zip']); !!}
      </td>
    </tr>
    <td></td>
    <td>
        {!! Form::submit('Submit'); !!}
    </td>
  </table>
</div>
{!! Form::close() !!}
<div class="center">
<form method='POST' action='/login'>

    {!! csrf_field() !!}

    <div class='form-group'>
        <label for='email'>Email</label>
        <input type='text' name='email' id='email' value='{{ old('email') }}'>
    </div>

    <div class='form-group'>
        <label for='password'>Password</label>
        <input type='password' name='password' id='password' value='{{ old('password') }}'>
    </div>

    <div class='form-group'>
        <input type='checkbox' name='remember' id='remember'>
        <label for='remember' class='checkboxLabel'>Remember me</label>
    </div>

    <button type='submit' class='btn btn-primary'>Login</button>

</form>
</div>


@stop
