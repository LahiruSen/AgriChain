<?php  
$connect = mysqli_connect("localhost", "root", "", "ams");  
session_start();  
$email="";
if(isset($_SESSION["email"]))  
{  
    $email=$_SESSION["email"];
}  
 

 if(isset($_POST["submit"]))  
 {  $product = mysqli_real_escape_string($connect, $_POST["product"]);  
    $quantity = mysqli_real_escape_string($connect, $_POST["quantity"]);  
      if(empty($_POST["product"]) || empty($_POST["quantity"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      
       /* $query1 = "SELECT email FROM users WHERE name = '$_SESSION["username"]'";  
        $result = mysqli_query($connect, $query1);  
        if(mysqli_num_rows($result) > 0)  
        {  

            verifyQuery($result);
            $user = mysqli_fetch_assoc($result);
            $email = $user['email'];

      
        }  

    
		*/
		
	
$query = "INSERT INTO farmer_requests (email,type,quantity) VALUES('$email','$product','$quantity')";		   
           if(mysqli_query($connect, $query))  
           {  
            header("location:AddProduct.php");   
        
		}		   
	  }
	
 ?>  



 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Agri Chain</title>  
           
           <link rel="stylesheet" href="ss.css" />  
            
      </head>


      <body >  
      <div class="container">  
  <form id="contact" action="" method="post">
    
    <fieldset>
      <input name ="product" placeholder="product" type="text" tabindex="1" required autofocus>
    </fieldset> 
    <fieldset>
      <input placeholder="quentity" name="quantity" type="text" tabindex="2" required>
    </fieldset>
    
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    
  </form>
</div>

                 
          
      </body>  
 </html> 





 