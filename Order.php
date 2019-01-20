<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
img{
height:200px;
width:200px;
}
.container {
  background-color: grey;
  padding: 15px 60px 15px 60px;
  border: 3px solid lightgrey;
  border-radius: 3px;
  margin-left:200px;
  margin-right:200px;
}
body {
  font-family: Arial;
  font-size: 18px;
  padding: 8px;
}
input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=email] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[list=sizes] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=number] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=date] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
label {
  margin-bottom: 10px;
  display: block;
  margin-top:14px;
}
.btn {
  background-color: black;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: 4px solid #2E8B57	;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 25px;
}
</style>
</head>

<body background="backimage1.jpg">

<div class="container">
<div style="background-color: black;border: 4px solid #2E8B57	; border-radius: 3px;
  color: white;padding:20px;text-align:left;margin-bottom:20px;"><p style="font-size:30px;font-family:Sans-serif;padding-left:80px">Order Form</p>
</div>
 <form action="placed.php"> 
 <label for="name">Name</label>
 <input type="text" id="name" name="name">


<label for="rno">Roll Number</label>
 <input type="number" id="rno" name="rno">

<label for="hno">Hall Number</label>
 <input type="number" id="hno" name="hno">

<label for="rono">Room Number</label>
 <input type="text" id="rono" name="rono">

<label for="pid">Product ID</label>
 <input type="number" id="pid" name="pid">


 <input type="submit" value="Purchase" class="btn">
 
</div>
</div>

</body>

</html>