<!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
    </head>
    <body>
    <div style="background-color: black;border: 4px solid #2E8B57; border-radius: 3px;
    color: white;padding:20px;text-align:center;margin-bottom:20px;"><p style="font-size:37px;font-family:Sans-serif;padding-        left:80px">YOUR ORDER HAS BEEN PLACED!!</p>
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
      $result = mysql_query("INSERT INTO ORDERS(sid,sName,hallNo,roomNo,pid) VALUES($_POST['rno'], $_POST['name'], $_POST['hno'], $_POST['rono'], $_POST['pid'])");
      ?>
      
        ?>
      
     <?php mysql_close($connector); ?>

     
    </body>
    </html>