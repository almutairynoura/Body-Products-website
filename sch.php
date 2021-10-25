<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
<title>  Search Result  </title>
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

<p><center>
  
			
<caption><h1>products information</h1></caption>
<?php
$x=$_POST['search'];
$user='root';
$pass='';
$db='Products';

$con= mysqli_connect('localhost',$user,$pass,$db);

if (!$con)
{
die ('<p>Could not connect to the database!</p>'.mysqli_error( $con ));
} 
if(!preg_match("/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/",$x))
{
print("<strong class='e'>Invalid input please search for date only!!!<strong>");
die("</body></html>");
}
$q="SELECT* FROM productsInformation WHERE expiration_date='$x'";
$result = mysqli_query( $con,$q);
if (mysqli_num_rows( $result ) > 0)
{
	echo"<table border='1'>";
 print ('<thead><tr> <th> product name</th>    <th> product Price</th>  <th>product code</th> <th> country origin</th>    <th>expiration_date</th>      </tr></thead><tbody>');
      while($row = mysqli_fetch_array($result))
{
print ('<tr><td>'. $row['product_name'].'</td>  <td>'.$row['product_price'].'</td> <td>'.$row['code_number_of_product'].'</td>  <td>'.$row['country_of_origin'].'</td> <td>'.$row['expiration_date'].'</td> <td> </tr>');
}
}
else {
echo "0 results";
}
echo"<table>";

mysqli_close( $con );


?></p></center>

  
  
   </body>
   <footer>  

<br>   Copyright &copy; Z-Beauty. All rights reserved 2020.<br></footer>
</html>