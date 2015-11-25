@extends('layout.master')
@section('content')
{!! Form::open() !!}
<div class="inner border">
  <p class="center">
    attribute second third fourth
  </p>
  <p class="center">
    attribute
  </p>
  <p class="center">
    attribute
  </p>
  <p class="center">
    <?php
    echo Form::submit('Select Plan');
    ?>
  </p>
</div>
{!! Form::close() !!}

  {!! Form::open() !!}
  <div class="inner border">
    <p class="center">
      attribute second third fourth
    </p>
    <p class="center">
      attribute
    </p>
    <p class="center">
      attribute
    </p>
    <p class="center">
      <?php
      echo Form::submit('Select Plan');
      ?>
    </p>
  </div>
  {!! Form::close() !!}

  {!! Form::open() !!}
  <div class="inner border">
    <p class="center">
      attribute second third fourth
    </p>
    <p class="center">
      attribute
    </p>
    <p class="center">
      attribute
    </p>
    <p class="center">
      <?php
      echo Form::submit('Select Plan');
      ?>
    </p>
  </div>
  {!! Form::close() !!}




@stop
