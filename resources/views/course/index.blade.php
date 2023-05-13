
@extends('welcome')
  <h1 class="container p-3 bg-dark text-white text-center" style="width:80%;margin-top:5%"> Course Details</h1>
<table class="table table-light table-striped"style=width:80%;margin:auto;>
    <thead>
        <tr>
            {{-- <th scope="col">Contact_id</th> --}}
            <th scope="col">Name</th>
            <th scope="col">Contact</th>
            <th scope="col">Course</th>
            <th scope="col">Hobbies</th>
            <th scope="col">Gender</th>


        </tr>
    </thead>
    <tbody>
        @foreach ($courses as $course)
            <tr>
                {{-- <td>{{ $course->contact_id }}</td> --}}
                <td>{{ $course->name }}</td>
                <td>{{ $course->number }}</td>
                <td>{{ $course->course }}</td>
                <td>{{ $course->hobbies }}</td>
                <td>{{ $course->gender }}</td>
            </tr>
            @endforeach
    </tbody>
</table>







