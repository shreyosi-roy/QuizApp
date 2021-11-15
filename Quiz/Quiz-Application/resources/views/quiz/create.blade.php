@extends('quiz.layout')

@section('main_content')
<h1> ADD NEW </h1>

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="POST" action="/quiz">
    @csrf
    <div class="col-md-6">
        <label>Enter Quiz question</label>
        <input type="text" name="Question" value="{{old('Question')}}" class="form-control" />
    </div>
    <!-- quiz option one -->
    <div class="col-md-6">
        <label>Enter Option One</label>
        <input type="text" name="Option_one" value="{{old('Option_one')}}" class="form-control" />
    </div>
    <!-- quiz option two -->
    <div class="col-md-6">
        <label>Enter Option Two</label>
        <input type="text" name="Option_two" value="{{old('Option_two')}}" class="form-control" />
    </div>
    <!-- quiz option three -->
    <div class="col-md-6">
        <label>Enter Option three</label>
        <input type="text" name="Option_three" value="{{old('Option_three')}}" class="form-control" />
    </div>
    <!-- quiz option four -->
    <div class="col-md-6">
        <label>Enter Option Four</label>
        <input type="text" name="Option_four" value="{{old('Option_four')}}" class="form-control" />
        <!-- correct quiz option -->
    </div>
    <div class="col-md-6">
        <label>Correct Option</label>
        <div>
            <div class="col-md-12">

                <input type="radio" id="correctChoice1" name="correct_answer" value="1">
                <label for="Choice1">Option One</label>
                <input type="radio" id="correctChoice2" name="correct_answer" value="2">
                <label for="Choice2">Option Two</label>
                <input type="radio" id="correctChoice3" name="correct_answer" value="3">
                <label for="Choice3">Option Three</label>
                <input type="radio" id="correctChoice4" name="correct_answer" value="4">
                <label for="Choice3">Option Four</label>
                <span class="text-danger">@error('correct'){{ $message }} @enderror</span>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Submit</button>

                </div>
            </div>
        </div>




</form>

@stop