@extends('layout.main')

@section('main_content')

<div class="container bg-indigo" id="qz">
    <form method="POST" action="/calculate">
        @csrf
        @foreach($data As $qz)

        <div class="row">

            <!-- question number -->
            <div class="col-md-1">
                {{++$i}}
                <input type="hidden" name="{{$qz->id}}" value="{{$qz->id}}">
            </div>
            <!-- question -->
            <div class="col-md-3">
                <label>{{$qz->Question}}</label>
            </div>
            <!-- options -->
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-3">
                        <input type="radio" id="correctChoice1" name="correct{{$qz->id}}" value="1">
                        <label for="correctChoice1">{{$qz->Option_one}}</label>
                    </div>


                    <div class="col-md-3">
                        <input type="radio" id="correctChoice2" name="correct{{$qz->id}}" value="2">
                        <label for="correctChoice2">{{$qz->Option_two}}</label>
                    </div>


                    <div class="col-md-3">
                        <input type="radio" id="correctChoice3" name="correct{{$qz->id}}" value="3">
                        <label for="correctChoice4">{{$qz->Option_three}}</label>
                    </div>

                    <div class="col-md-3">

                        <input type="radio" id="correctChoice4" name="correct{{$qz->id}}" value="4">
                        <label for="correctChoice5">{{$qz->Option_four}}</label>
                    </div>

                </div>

            </div>
        </div>
        <br>
        <br>
        @endforeach

        <input type="submit" class="btn btn-primary btn-lg" value="Submit" name="submit" />
    </form>
</div>
@stop