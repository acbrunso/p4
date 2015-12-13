@extends('layout.master')
@section('content')

<div class="left">
  <h1>Hosting Plans</h1>
  <?php $i=0; ?>

@foreach($hostingPlans as $hostingPlan)

  @if($i>0)

    {!! Form::open() !!}
      {!! Form::hidden('hPlan', $hostingPlan->id) !!}

      <div class="basic-grey">
        @if(Auth::check())
          <h1>
            @if(Auth::user()->hosting_plan_id  ==  $hostingPlan->id)
              This is your current plan
            @else
              <button type='submit' class='btn btn-primary' name="selectHostingPlan" id="selectHostingPlan" value="selectHostingPlan">Select Plan</button>
            @endif
          </h1>
        @endif
        <label for='websites'>
          <span>Websites</span>
          <input type='text' name='websites' id='websites' value='{{ $hostingPlan->websites }}' disabled>
        </label>
        <label for='storage'>
          <span>Storage</span>
          <input type='text' name='storage' id='storage' value='{{ $hostingPlan->storage }}' disabled>
        </label>
        <label for='bandwidth'>
          <span>Bandwidth</span>
          <input type='text' name='bandwidth' id='bandwidth' value='{{ $hostingPlan->bandwidth }}' disabled>
        </label>
        <label for='emails'>
          <span>Emails</span>
          <input type='text' name='emails' id='emails' value='{{ $hostingPlan->emails }}' disabled>
        </label>
        <label for='OS'>
          <span>Operating System</span>
          <input type='text' name='OS' id='OS' value='{{ $hostingPlan->OS }}' disabled>
        </label>
      </div>
  {!! Form::close() !!}
  @else

    <?php $i++; ?>

  @endif
@endforeach
</div>
<div class="right">
  <h1>Server Plans</h1>
  <?php $i=0; ?>
@foreach($serverPlans as $serverPlan)
  @if($i>0)

    {!! Form::open() !!}
      {!! Form::hidden('sPlan', $serverPlan->id) !!}

      <div class="basic-grey">
        @if(Auth::check())
          <h1>
            @if(Auth::user()->server_plan_id  ==  $serverPlan->id)
              This is your current plan
            @else
            <button type='submit' class='btn btn-primary' name="selectServerPlan" id="selectServerPlan" value="selectServerPlan">Select Plan</button>
            @endif
          </h1>
        @endif
        <label for='ram'>
          <span>RAM</span>
          <input type='text' name='ram' id='ram' value='{{ $serverPlan->ram }}' disabled>
        </label>
        <label for='storage'>
          <span>Storage</span>
          <input type='text' name='storage' id='storage' value='{{ $serverPlan->storage }}' disabled>
        </label>
        <label for='bandwidth'>
          <span>Bandwidth</span>
          <input type='text' name='bandwidth' id='bandwidth' value='{{ $serverPlan->bandwidth }}' disabled>
        </label>
        <label for='type'>
          <span>Emails</span>
          <input type='text' name='type' id='type' value='{{ $serverPlan->type }}' disabled>
        </label>
        <label for='OS'>
          <span>Operating System</span>
          <input type='text' name='OS' id='OS' value='{{ $serverPlan->OS }}' disabled>
        </label>
      </div>
      {!! Form::close() !!}
    @else
      <?php $i++; ?>
    @endif
  @endforeach
</div>

@stop
