@extends('master')
@section('title', 'Contacte')
@section('content')
<div class="container">
    <div style="text-align:center">
      <h2>Contact Us</h2>
    </div>
    <div class="row">
      <div class="column">
        <img src="https://www.w3schools.com/w3images/map.jpg" style="width:100%">
      </div>
      <div class="column">
        <form action="/action_page.php">
          <label for="fname">First Name</label>
          <input type="text" id="fname" name="firstname">
          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lastname">
          <label for="subject">Subject</label>
          <textarea id="subject" name="subject" style="height:170px"></textarea>
          <input type="submit" value="Submit">
        </form>
      </div>
    </div>
  </div>
        @endsection

