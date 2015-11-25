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
    <?php
      isset($request->numOfWords) ? $n=$request->numOfWords : $n=1;
      echo Form::selectRange('numOfWords', 1, 3,  $n, ['id'=>'numOfWords']) . "   ";
      echo Form::label('numOfWords', 'Number of Words');
      echo '<br><br>';

      isset($request->numOfChars) ? $n=$request->numOfChars : $n=0;
      echo Form::selectRange('numOfChars', 0, 3,  $n, ['id'=>'numOfChars']) . "   ";
      echo Form::label('numOfChars', 'Number of Characters');
      echo '<br><br>';

      isset($request->numOfNums) ? $n=$request->numOfNums : $n=0;
      echo Form::selectRange('numOfNums', 0, 3,  $n, ['id'=>'numOfNums']) . "   ";
      echo Form::label('numOfNums', 'Number of Nums');
      echo '<br><br>';
      echo Form::submit('Submit');
      ?>
   {!! Form::close() !!}

  @stop
