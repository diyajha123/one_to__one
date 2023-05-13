@extends('welcome')
<h1 style="text-align:center">CreateCourse</h1>
<form action={{ route('course.store') }} method="post">
    @csrf
    <div class="container"
        style="padding: 1%;background:rgb(249, 250, 252);width:85%;margin-left:10%;height:120%; box-shadow: -10px 0 10px rgba(0, 0, 0, 0.4);;;overflow:hidden;dipslay:flex;">
       

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="name"
                value='{{ old('name') }}'>
            @if ($errors->has('name'))
                <div class="text-danger">
                    {{ $errors->first('name') }}
                </div>
            @endif
        </div>




        <div class="mb-3">
            <label for="number" class="form-label">Number</label>
            <input type="number" class="form-control" id="number" name="number" aria-describedby="number"
                value='{{ old('number') }}'>
            @if ($errors->has('number'))
                <div class="text-danger">
                    {{ $errors->first('number') }}
                </div>
            @endif
        </div>





        Course <select class="form-select" aria-label="Default select example" id="course" name="course">
            <option>Select</option>
            <option>BCA</option>
            <option>BBA</option>
            <option>MBA</option>
            <option>MCA</option>
        </select>




        Gender<div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
            <label class="form-check-label" for="flexRadioDefault1">
                Male
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
            <label class="form-check-label" for="flexRadioDefault2">
                Female
            </label>
        </div>


        <div class="mb-3">
            <label for="hobbies" class="form-label">Hobbies</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="travelling" name="hobbies[]"
                    id="hobbies_travelling">
                <label class="form-check-label" for="hobbies_travelling">
                    Travelling
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="studying" name="hobbies[]" id="hobbies_studying">
                <label class="form-check-label" for="hobbies_studying">
                    Studying
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="dancing" name="hobbies[]" id="hobbies_dancing">
                <label class="form-check-label" for="hobbies_dancing">
                    Dancing
                </label>
            </div>
            @if ($errors->has('hobbies'))
                <div class="text-danger">
                    {{ $errors->first('hobbies') }}
                </div>
            @endif
        </div>

        <div class="mb-3">
            <label for="joindate" class="form-label">Join Date</label>
            <input type="date" class="form-control" id="joindate" name="joindate" aria-describedby="joindate"
                value='{{ old('joindate') }}'>
            @if ($errors->has('joindate'))
                <div class="text-danger">
                    {{ $errors->first('joindate') }}
                </div>
            @endif
        </div>


        <button type="submit" class="btn btn-dark">Submit</button>
    </div>
    </div>
</form>
