<!DOCTYPE html>
<html>
<style>

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 2px solid black;
    width: 80%; 
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

.animate {
    animation: animatezoom 0.6s
}

   @keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

}
</style>
<body>
<?php 
include('header.html');
include('nav.html');
?>
<center>
  <form class="modal-content animate" action="login_form.php" method="POST" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="avatar2.png" alt="Avatar" class="avatar" style="width:150px; height:150px;">
    </div>

    <div class="container">
      <label ><b>E-Mail ID</b></label>
      <input name="email" type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input name="pword" type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" >Login</button>
          </div>
</div>
 </form>
</center>
<?php
include('footer.html');
?>

</body>
</html>
