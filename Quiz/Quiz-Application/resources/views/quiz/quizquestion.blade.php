@extends('layout.main')

@section('main_content')



@if(session('message'))
<div class="alert alert-primary" role="alert">
    {{session('message')}}
</div>
@endif
<h1> Quiz Questions </h1>

<a class="btn" href="{{route('quiz.create')}}">Add New</a>

<table>
    <tr>
        <th>No</th>
        <th>Question</th>
        <th>Option One</th>
        <th>Option Two</th>
        <th>Option Three</th>
        <th>Option Four</th>
        <th>Correct Option</th>
        <th>Action</th>
    </tr>
    @foreach($data as $qz)

    <tr>
        <th>{{++$i}}</th>
        <th>{{$qz->Question}}</th>
        <th>{{$qz->Option_one}}</th>
        <th>{{$qz->Option_two}}</th>
        <th>{{$qz->Option_three}}</th>
        <th>{{$qz->Option_four}}</th>
        <th>{{$qz->correct_answer}}</th>
        <th>

            <a href="{{route('quiz.show',['quiz'=>$qz->id])}}" class="show">SHOW</a>

            <a href="{{route('quiz.edit',['quiz'=>$qz->id])}}" class="edit">EDIT</a>
            <br>
            <br>

            <form method="POST" onclick="return confirm('Are you sure?')" action="{{'quiz/'. $qz->id}}">
                @csrf
                @method('DELETE')
                <button class="delete" type="submit">DELETE</button>
            </form>








        </th>
    </tr>
    @endforeach
</table>
@stop