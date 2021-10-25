<head>
<meta charset = "utf-8">
<title>Product Registration </title>
       <link rel="stylesheet" type="text/css" href="css1.css">
 
 
   </head>

   <body>
             <header >
                 <a href="#home" class="a"> <img src="z.JPEG" alt="logo" style="width:  350px; height:100px ; margin:0 ;"/>  </a>
                <strong style="font-size:20pt"> Online Beauty Store </strong>  <br>  
    
              </header>
             <nav>
                      <ul>
                              <li><a href="Home.html" class="a">Home </a> </li>  
                              <li><a href="gallery.html " class="a">Gallery </a></li>
                              <li><a href="Registration.html"class="a">Product Registration </a>


                           <ul> <li><a href="productsinformation.html" class="a">Product Information</a> </li>
                           <li><a href="search.html"class="a"> Search about product with expiration date</a>  </li>
                           <li> <a href="upform.html" class="a"> Update product information</a></li></ul>
                                        
                                     </li>   
                          
                              <li><a href="contact_us.html"class="a">Contact us </a></li>
                              <li><a href="Calculater.html"class="a">Calculator </a></li> 
                              <li><a href="about_us.html"class="a">About us</a></li>
                              <li><a href="Customerpage.html" class="a"> Customer Profile </a>
                             
                            
                               
                              
                            </ul>
                          </nav>
 
 <nav class="verticalNav">
<ul class="verticalUl">

                     <li><a href="Home.html" class="a"><img src="https://cdn0.iconfinder.com/data/icons/lineo-internet/100/romzicon_home-512.png" width=20px height=20px> </a> </li>  
                    <li><a href="gallery.html" class="a"><img src="https://cdn2.iconfinder.com/data/icons/picons-essentials/71/gallery-512.png" width=20px height=20px >  </a></li>
                    <li><a href="Registration.html"class="a"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/RegisteredTM.svg/1200px-RegisteredTM.svg.png" width=20px height=20px> </a></li>
                    <li><a href="contact_us.html"class="a"><img src="https://cdn4.iconfinder.com/data/icons/rounded-white-basic-ui/139/Call01-RoundedWhite-512.png" width=20px height=20px>  </a></li>
                    <li><a href="about_us.html" class="a"><img src="https://image.flaticon.com/icons/png/512/15/15659.png" width=20px height=20px></a></li>
                    <li><a href="Customerpage.html"class="a"><img src="https://cdn1.iconfinder.com/data/icons/client-management/512/find-512.png" width=20px height=20px>  </a></li>


</ul>
</nav>
 <p align="center">
<?php


$user='root';
$pass='';
$db='products';
$host='localhost';
$con = mysqli_connect($host,$user,$pass,$db);
if (!$con)
{
die ('<p>Could not connect to the database!</p>'.mysqli_error( $con ));
}

$product_name = $_POST["product_name"];
$product_price = $_POST["product_price"];
$code_number_of_product= $_POST["code_number_of_product"];	
$country_of_origin = $_POST["country_of_origin"];
$expiration_date = $_POST["expiration_date"];
$type_=$_POST["type_"];


$query = "INSERT INTO productsinformation ( product_name, product_price, code_number_of_product, country_of_origin, expiration_date ,type_)  VALUES ( '$product_name', '$product_price', '$code_number_of_product', '$country_of_origin', '$expiration_date','$type_')";
			


mysqli_select_db($con,'products');
			

$add = mysqli_query($con,$query);



mysqli_close( $con );
?></p>
<h1 align="center">product registration Saved Successfully</h1>
<footer>  

<br>   Copyright &copy; Z-Beauty. All rights reserved 2020.<br></footer>
      
 </body>

</html>
