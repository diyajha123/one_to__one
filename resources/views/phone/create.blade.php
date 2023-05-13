@extends('welcome')

<form action={{ route('phone.store') }} method="post">
    @csrf
    <h1 style="text-align:center">Contact-Details</h1>
    <div class="form"
        style="padding: 1%;background:rgba(124, 125, 126, 0.411);width:85%;margin-left:10%;; box-shadow: -10px 0 10px rgba(0, 0, 0, 0.4);overflow:hidden;;">
        <div class="mb-3">
            <label for="phone_id" class="form-label">phone_id</label>
            <input type="number" class="form-control" id="phone_id" name="phone_id" aria-describedby="phone_id">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="name">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="number" class="form-label">Contact</label>
            <input type="number" class="form-control" id="number" name="number" aria-describedby="number">
        </div>
            <br>


            Country<br><select class="form-select" aria-label="country" name="country" id="country">
                <option selected>SELECT</option>
                <option>INDIA</option>
                <option>AMERICA</option>
                <option>CANADA</option>
                <option>BRAZIL</option>
                <option>EUROPE</option>
            </select>
            <br>
            <div class="mb-3">
                <label for="pincode" class="form-label">PinCode</label>
                <input type="number" class="form-control" id="pincode" name="pincode" aria-describedby="pincode">
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </div>
</form>
