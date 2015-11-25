@extends('layout.master')

@section('content')
    <p>
    Generate a random password consisting of up to three common words!
    Using phrases instead of uncommon gibberish words can be harder to guess.
    Common words are easier to remember, so give it a try by selecting
    the number of words you would like in your password, the number of symbols,
    and the number of numbers.
    <br><br>
    @if(isset($pWord))
    <div class="center">
      <h2><?php echo $pWord ?></h2>
    </div>
    @endif
    </p>

    {!! Form::open() !!}

    {!! Form::open() !!}
    <?php
      echo '<p>';
      echo Form::label('name', 'Name');
      echo Form::text('name');
      echo '</p>';

      echo '<br><br>';

      echo Form::submit('Submit');
      ?>
   {!! Form::close() !!}

  @stop
