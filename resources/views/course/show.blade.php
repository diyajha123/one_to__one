@extends('welcome')
<h1 class="container p-3 bg-dark text-white text-center" style="width:80%;margin-top:5%"> DISPLAY</h1>
<table class="table table-striped" style="width:80%;margin-left:10%">
    <tbody>
        {{-- <tr>
            <td>ID:</td>
            <td>{{ $course->contact_id }}</td>
        </tr> --}}
        <tr>
            <td>NAME:</td>
            <td>{{ $course->name }}</td>
        </tr>
        <tr>
            <td>Contact:</td>
            <td>{{ $course->number }}</td>
        </tr>
        <tr>
            <td>Course:</td>
            <td>{{ $course->course }}</td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>{{ $course->gender }}</td>
        </tr>
        <tr>
            <td>Hobbies:</td>
            <td>{{ $course->hobbies }}</td>
        </tr>
        {{-- <tr>
            <td>CONTACT:</td>
            <td>{{$city }}</td>
        </tr> --}}
    </tbody>
</table>
