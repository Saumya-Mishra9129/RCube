<!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
    </head>
    <body>
    <div style="background-color: black;border: 4px solid #2E8B57; border-radius: 3px;
    color: white;padding:20px;text-align:center;margin-bottom:20px;"><p style="font-size:37px;font-family:Sans-serif;padding-        left:80px">DETAILS OF BOOKS</p>
</div>

      <?php
      
      $host = "localhost";
      $root= "root";
      $connector = mysql_connect($host,$root)
          or die("Unable to connect");
        echo "";
      $selected = mysql_select_db("rcube", $connector)
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM products where cCode='RD'");
	 echo '<center><table border="2" style= "background-color:grey"; color: "white"; margin: 0 auto>
      
        
          <th>Product ID</th>
          <th>Product Name</th>
          <th>Product Condition</th>
          <th>Cost</th>
        </tr>';
      
      
	 
      
    
	  
     
while($row = mysql_fetch_assoc( $result ))
{
		
 echo '<tr>
<td>'.$row['pid'].'</td>
<td>'.$row['pname'].'</td>
<td>'.$row['pcondition'].'</td>
<td>'.$row['Cost'].'</td>
</tr>';
 }
       echo '</table></center>';

       ?>
      

<BR>
<BR>
<BR>
      <div style="background-color:white;border: 4px solid #2E8B57; border-radius: 3px;
    color: black;padding:20px;text-align:center;margin-bottom:20px;"><p style="font-size:20px;font-family:Sans-serif;padding-        left:80px">Remember the Product ID of the product you want and go to "ORDER NOW"!!!!</p>
</div>
    </body>
    </html>
	