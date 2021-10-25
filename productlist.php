<!DOCTYPE html>

<html>
	
 <head>
         <title>product information </title>
        <link rel="stylesheet" type="text/css" href="css1.css">
 <link rel="stylesheet" type="text/css" href="tablecss.css">
         
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
		

		
<div class="form">	      
		    
<table  align="center" width="70%" border="3" style="border-color:pink;border-style:solid">   
			
<h1 align="center">Products List</h1>
			
<tr>
<th>ID</th>
<th>ProductName</th>
<th>ProductPrice</th>
<th>ProductCode</th>
<th>CountryOrigin</th>
<th>ExperationDate</th>

</tr>

		      
		    
<?php
			
$dbServername = "localhost";
$dbUsername='root';
$dbPassword='';
$dbName='products';

$con = mysqli_connect ($dbServername,$dbUsername,$dbPassword,$dbName) or die ("could not connect to database");
    

$sql = "SELECT * FROM productsinformation ;";
$result = mysqli_query($con,$sql);


while($row = mysqli_fetch_assoc($result))
{
print '<tr>';
print'<td>' .$row['id'].'</td>';	
print'<td>'.$row['product_name'].'</td>';		
print'<td>'.$row['product_price'].'</td>';	
print'<td>' .$row['code_number_of_product'].'</td>';	
print'<td>'.$row['country_of_origin'].'</td>';		
print'<td>'.$row['expiration_date'].'</td>';	
print '</tr>';


}
echo "</table>"; 



 ?>

<div align="center" class="form">	      
		    
<table align="center width="70%" border="3" style="border-color:violet;border-style:solid">   
			
<caption><h1> Minimum price </h1></caption>
			

<tr>
<th>Type</th>
<th>price</th>


</tr>




<?php
$sql= "SELECT  type_, MIN(product_price) FROM productsinformation GROUP BY type_"; 
	 
$result = mysqli_query($con,$sql);

if($result){
while($row = mysqli_fetch_array($result))
{print '<tr>';
	print'<td> '. $row['type_']. '</td>';	
	print '<td>' .$row['MIN(product_price)']. '</td>';
	print '</tr>';
}
	
echo "</table>";
 } 	


?>




   
 
	    
</div>
  <footer>  
      
                Copyright &copy; Z-Beauty. All rights reserved 2020.<br></footer>  
</body>

</html>