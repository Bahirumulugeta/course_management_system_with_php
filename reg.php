<!DOCTYPE html>
<html>
<style>
form {
    padding-left: 24%;
    max-width: 50%;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
    input[type=button] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
 
text-align: center;
    
}

button {
    background-color: grey;
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

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
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

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
   
    }
}
</style>
<body style="text-align:center;">
    
    <div style="background-color: grey; color: white; padding-top: 12px; padding-bottom: 6px;">
        <h1> Course Registration System</h1>
    </div>

<h2 >Register as?</h2>

<form>
  

  <div class="container">
    
    
    <input type="button" value="Proffessor Registration" onclick="window.location='profreg.php';">
    <input type="button" value="Student Registration" onclick="window.location='studreg.php';">
   
      
      
        
   
    
  </div>

  
</form>

</body>
</html>
