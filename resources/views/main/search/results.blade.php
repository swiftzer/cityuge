@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Search Results</h1>
    <table class="table">
        <thead>
            <th>Course Code</th>
            <th>Course Name</th>
        </thead>
        <tbody>
            @foreach($results as $result)
            <tr>
                <td>{{$result->course_code}}</td>
                <td>{{$result->title_en}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $results->appends($query)->links() !!}
</div>
@endsection