<!DOCTYPE html>
<body >
<form action="contact.php" method="post">
<font size="4">      
<ul>
            
<li>
          
<p class="left">
            
<label for="first_name">first_name</label>
            
<input type="text" name="first_name" placeholder="John" />
          
</p>
</li>
<li>          
<p class="pull-right">
            
<label for="last_name">last_name</label>
            
<input type="text" name="last_name" placeholder="Smith" />      
          
</p>
        
</li>
        
        
<li>
          
<p>
            
<label for="email">email <span class="req">*</span></label>
            
<input type="email" name="email" placeholder="john.smith@gmail.com" />
       
   
</p>
      
</li>
<li>
          
<p>
            
<label for="id">ID <span class="req">*</span></label>
            
<input type="number" name="ID" placeholder="********" />
       
   
</p>
      
</li>
<br>
<input class="btn btn-submit" type="submit" name="submit" />
<br>
<small>or press <strong>enter</strong></small>

</ul>  
</form> 


<?php
        if(isset($_POST['submit']))
            {
                
                $first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
                $email=$_POST['email'];
                $message=$_POST['id'];
                
                $link= mysql_connect("localhost", "root", "root123") or die("Unable to connect");
                $con= mysql_select_db("student") or die("Invalid Database");
                 $query="INSERT INTO student ( `first_name`,`last_name`,`email`,`id`) VALUES ('$first_name','$last_name','$email','$id')";
                $operation= mysql_query($query,$link);
                
                mysql_close();
            }
        ?>


</body>
</html>
