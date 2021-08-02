<?php include('server.php') ?> 
<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head >
<body style="background-color: white">
  <div >
  	 <h4 class="text-center" style="color:green"> ABC Restaurent & Motel </h4>
          <h6 class="text-center"> Shine Metro Mkadi Naka (XYZ)</h6>
         
  </div>
	
    <div class="col-md-5  mt-4 " style="background-color:#f5f5f5; left: 30%; ">
        
        	
       <div class="input-group" style="top: 25px;">
  	  <label>Product_id</label>
  	  <input type="pnum" name="pnum">
  	</div>
        
        <div class="input-group" style="top: 25px;">
  	  <label>Product Name</label>
  	  <input type="text" name="productname">
  	</div>
  
       <div class="input-group" style="top: 25px;">
  	  <label>Total Quantity</label>
          <input type="number" name="pque">
  	</div>
        
  	<div class="input-group" style="top: 25px;">
  	  <label>Price</label>
          <input type="number" name="pprice">
  	</div>
  	
        <div class="input-group" style="left: 10%; bottom: -37px;">
               <button type="submit"  class="btn btn-primary" name="submit">ADD</button>
  	</div>
        <div class="input-group" style="left: 35%;  bottom: 10px; ">
  	  <button type="submit"  class="btn btn-primary" name="submit">UPDATE</button>
  	</div>
        <div class="input-group" style="left: 65%; bottom: 58px;">
  	  <button type="submit"  class="btn btn-primary" name="submit">DELETE</button>
  	</div>
  </div>
</body>
</html>
<?php 
  if(isset($_POST['submit']))
  {
      $pid=$_POST['pnum'];
      $name=$_POST['productname'];
      $qunt=$_POST['pque'];
      $price=$_POST['pprice'];
       
      echo $pid;
      echo $name;
      echo $qunt;
      echo $price;
    
      
    if($qunt<=0 && $qunt == '') {
            echo "<script>alert('Please enter valide product quantity!')</script>";
            exit();
        }
      
    if($price<=0 && $price == '') {
            echo "<script>alert('Please enter valide product price!')</script>";
            exit();
        }
   }
?>