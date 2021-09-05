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
    input[type=button] {
   
    padding: 9px 11px;
    margin: 8px 0;
 border-radius: 2px;
text-align: center;
        margin-left: 24px;
    
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

    table{
        width:100%; text-align:center;
         border: 1px solid black;
        
    }
    td,th{
        border: 1px solid black;
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
<body >
    
    <div style="background-color: grey; color: white; padding-top: 12px; padding-bottom: 6px;text-align:center;">
        <h1> Course Registration System</h1>
    </div>

<h2 style="text-align:center;">Professor Details</h2>

<table style="">
  <tr>
   
    <th>Course</th>
    <th>Student</th>
    <th>Marks(100)</th>
   
  </tr>
  <tr>
   
    <td>Java</td>
    <td>Ramya</td>
    <td>56</td>
  
  </tr><tr>
   
    <td>Java</td>
    <td>Liza</td>
    <td>36</td>
  
  </tr><tr>
   
    <td>Java</td>
    <td>Falguni</td>
    <td>56</td>
  
  </tr>
  <tr>
     
    <td>JSP</td>
    <td>Priyam</td>
   <td>45</td>
   
  </tr>
  <tr>
      
    <td>Python</td>
    <td>Raj</td>
    <td>67</td>
    
  </tr>
    
    <tr>
        
    <td>PHP</td>
    <td>Tripti</td>
    <td>89</td>

  </tr><tr>
        
    <td>PHP</td>
    <td>Trinayan</td>
    <td>45</td>

  </tr><tr>
        
    <td>PHP</td>
    <td>Panyek</td>
    <td>76</td>

  </tr><tr>
        
    <td>PHP</td>
    <td>Payal</td>
    <td>81</td>

  </tr><tr>
        
    <td>PHP</td>
    <td>Tapti</td>
    <td>39</td>

  </tr><tr>
        
    <td>Ruby</td>
    <td>Indra</td>
    <td>89</td>

  </tr><tr>
        
    <td>Ruby</td>
    <td>Worin</td>
    <td>56</td>

  </tr><tr>
        
    <td>Ruby</td>
    <td>Endrew</td>
    <td>74</td>

  </tr>
</table>
    <br><br>
     <input type='button'value='Back' class="btn" onclick="document.location.href='admin.php';"/>
</body>
</html>
