<!DOCTYPE html>
<html>
<meta charset="utf-8">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <link href="profile.js">
    <title>Profile update</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

<body>
<input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
        <img class="image" src="images/IMG-20200206-WA0003.jpg" alt="user photo">
        <br>
        <p class="email">siddusiddartha2000@gmail.com</p>
        <ul>
            <li><a href="finance"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="getcash"><i class="fas fa-rupee-sign"></i>Get Cash</a></li>
            <li><a href="profile"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="home"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
        </ul>
    </div>
    <section>
    <h1>Pocket Cash</h1>
<div class="border">
    <form action="profile" style="max-width:500px;margin:auto" method="get">
  <h2>KYC verification</h2>
  <div class="input-container">
    <input class="input-field" type="number" placeholder="Adhar number" name="adhar">
  </div>
  <div class="input-container">
    <input class="input-field" type="text" placeholder="PAN card number" name="pan">
  </div>
  <div class="input-container" class="image_upload"><b>Upload your selfie</b>
    <input class="input-field" type="file" placeholder="Upload your selfie" name="file">
  </div>
  <div class="input-container">
    <input class="input-field" type="number" placeholder="Enter pin code" name="pin">
  </div>
  <b>Enter Your Address</b>
  <div class="input-container">  
    <textarea class="input-field" rows="3" cols="50" name="address"></textarea>
  </div>
  <input type="submit" name="submit"  class="btn" value="Upload">
</form>
</div>
 </section>

</body>
</html>