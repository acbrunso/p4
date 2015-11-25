@extends('layout.master')

@section('content')
{!! Form::open() !!}
  <?php
  isset($customer) ? $n= $customer : $n= 'no';
  echo $n;
  //isset($request->numOfUsers) ? $n=$request->numOfUsers : $n=1;
  //echo Form::selectRange('numOfUsers', 1, 20,  $n, ['id'=>'numOfUsers']) . "   ";
  //echo Form::label('lastName', 'Last Name');
  //echo '<br><br>';
  //isset($request->birthdate) ? $selected=true : $selected=false;
	//echo Form::checkbox('birthdate', 'birthdate', $selected, ['id'=>'birthdate']);
  //echo Form::label('birthdate', 'Birthdate');
  //echo '<br>';
  //isset($request->address) ? $selected=true : $selected=false;
  ?>
  <div class=>
  <table style="width:40%">
    <tr>
      <td>
        {!! Form::label('username',  'User Name') !!}
      </td>
      <td>
        {!! Form::text('username', '',['id'=>'userName']) !!}
      </td>
    </tr>
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
<div>
  <table>
    <tr>
      <td>
        {!! Form::label('zip', 'Zip'); !!}
      </td>
      <td>
        {!! Form::text('zip', '',['id'=>'zip']); !!}
      </td>
    </tr>
  </table>
</div>
  <?php






  ?>
{!! Form::close() !!}


@stop
