@extends('quiz.layout')

@section('main_content')
<h1> View Quiz </h1>
<div class="card">
<table>
    <tr>
    <th>Question :</th>
    <td>{{$quiz->Question}}</td>
    </tr>
    <tr>
    <th>Option One :</th>
    <td>{{$quiz->Option_one}}</td>
    </tr>
    <tr>
    <th>Option Two</td>
    <td>{{$quiz->Option_two}}</td>
    </tr>
    <tr>
    <th>Option Three</th>
    <td>{{$quiz->Option_three}}</td>
    </tr>
    <tr>
    <th>Option Four</th>
    <td>{{$quiz->Option_four}}</td>
    </tr>
    <tr>
    <th>Correct Answer</th>
    <td>{{$quiz->correct_answer}}</td>
    </tr>
</table>
</div>
@stop