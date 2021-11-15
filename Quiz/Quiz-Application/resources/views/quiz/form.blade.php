<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Quiz Application</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .btn {
            background-color: #04AA6D !important;
            border-radius: 5px;
            font-size: 17px;
            font-family: 'Source Sans Pro', sans-serif;
            padding: 6px 18px;
            margin: 10px;
        }
    </style>

</head>

<body>
    <div class="container">
        <h1> Edit </h1>
        <a class="btn" style="float:right" href="/quiz">Back</a>
        <div class="card">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="POST" action="{{route('quiz.update',['quiz'=>$quiz->id])}}">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    <label>Enter Quiz question</label>
                    <input type="text" name="Question" value="{{$quiz->Question}}" class="form-control" />
                </div>
                <!-- quiz option one -->
                <div class="col-md-6">
                    <label>Enter Option One</label>
                    <input type="text" name="Option_one" value="{{$quiz->Option_one}}" class="form-control" />
                </div>
                <!-- quiz option two -->
                <div class="col-md-6">
                    <label>Enter Option Two</label>
                    <input type="text" name="Option_two" value="{{$quiz->Option_two}}" class="form-control" />
                </div>
                <!-- quiz option three -->
                <div class="col-md-6">
                    <label>Enter Option three</label>
                    <input type="text" name="Option_three" value="{{$quiz->Option_three}}" class="form-control" />
                </div>
                <!-- quiz option four -->
                <div class="col-md-6">
                    <label>Enter Option Four</label>
                    <input type="text" name="Option_four" value="{{$quiz->Option_four}}" class="form-control" />
                    <!-- correct quiz option -->
                </div>
                <div class="col-md-6">
                    <label>Correct Option</label>
                    <div>
                        <div class="col-md-12">
                            @if($quiz->correct_answer == 1)
                            <input type="radio" checked id="correctChoice1" name="correct_answer" value="1">
                            <label for="Choice1">Option One</label>
                            @else
                            <input type="radio" id="correctChoice1" name="correct_answer" value="1">
                            <label for="Choice1">Option One</label>
                            @endif



                            @if($quiz->correct_answer == 2)
                            <input type="radio" checked id="correctChoice2" name="correct_answer" value="2">
                            <label for="Choice2">Option Two</label>

                            @else
                            <input type="radio" id="correctChoice2" name="correct_answer" value="2">
                            <label for="Choice2">Option Two</label>

                            @endif

                            @if($quiz->correct_answer == 3)
                            <input type="radio" checked id="correctChoice3" name="correct_answer" value="3">
                            <label for="Choice3">Option Three</label>
                            @else
                            <input type="radio" id="correctChoice3" name="correct_answer" value="3">
                            <label for="Choice3">Option Three</label>
                            @endif

                            @if($quiz->correct_answer == 4)
                            <input type="radio" checked id="correctChoice4" name="correct_answer" value="4">
                            <label for="Choice3">Option Four</label>
                            @else
                            <input type="radio" id="correctChoice4" name="correct_answer" value="4">
                            <label for="Choice3">Option Four</label>
                            @endif


                            <span class="text-danger">@error('correct'){{ $message }} @enderror</span>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Submit</button>

                            </div>
                        </div>
                    </div>




            </form>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>