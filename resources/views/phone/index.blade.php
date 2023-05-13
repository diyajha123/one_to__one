@extends('welcome')
<h1 class="container p-3 bg-dark text-white text-center" style="width:80%;margin-top:5%"> Contact Details</h1>
<table class="table table-light table-striped"style=width:80%;margin:auto;>
    <thead>
        <tr>
            <th scope="col">Pohne_ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Contact</th>
            <th scope="col">Country</th>
            <th scope="col">Pincode</th>


        </tr>
    </thead>
    <tbody>
        @foreach ($phones as $phone)
            <tr>
                <td>{{ $phone->phone_id }}</td>
                <td>{{ $phone->name }}</td>
                <td>{{ $phone->email }}</td>
                <td>{{ $phone->number }}</td>
                <td>{{$phone->country }}</td>
                <td>{{ $phone->pincode }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
