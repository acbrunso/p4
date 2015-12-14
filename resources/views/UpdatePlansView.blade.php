@extends('layout.master')
@section('content')


<form action="" method="post" class="basic-grey">
  {!! csrf_field() !!}




<select name="id">
  @for($j=1; $j < 5; $j++)
    <option value="<?php echo $j ?>"<?php
    if(isset( $id )) {
      if( $j == $id ): ?>
        selected="selected"
<?php endif;
    } ?>>  {{ $j }}</option>
  @endfor
</select>

{!! Form::submit('Load') !!}

{!! Form::close() !!}


<div class="left">
    <form action="" method="post" class="basic-grey">
      {!! csrf_field() !!}
      <input type="hidden" value="{{ $id }}" name="id" id="id">

      <h1>Update Plans
        <span>Update plan defaults here</span>
      </h1>

      <label for='websites'>
        <span>Websites</span>
          <input type='text' name='websites' id='websites' value='{{ $planSelect->websites }}'>
      </label>
      <label for='storage'>
        <span>Storage</span>
          <input type='text' name='storage' id='storage' value='{{ $planSelect->storage }}'>
      </label>
      <label for='bandwidth'>
        <span>Bandwidth</span>
          <input type='text' name='bandwidth' id='bandwidth' value='{{ $planSelect->bandwidth }}'>
      </label>
      <label for='emails'>
        <span>Emails</span>
          <input type='text' name='emails' id='emails' value='{{ $planSelect->emails }}'>
      </label>
      <label for='OS'>
        <span>Operating System</span>
          <input type='text' name='OS' id='OS' value='{{ $planSelect->OS }}'>
      </label>
      <label>
        <span>&nbsp;</span>
        <button type='submit' class='btn btn-primary' name="save" id="save" value="save">Save</button>
      </label>
      {!! Form::close() !!}
</div>






@stop
