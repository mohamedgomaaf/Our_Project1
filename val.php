<?php
include('config.php');
//$ID = $_GET['id'];
$UP = mysqli_query($con, "SELECT * FROM prod1");
$data = mysqli_fetch_array($UP);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تأكيد شراء المنتج</title>
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    
    <style>

input{
    display:none; 
}
.main{
    width: 440px;
    padding: 20px;
    box-shadow: 5px 5px rgb(228 222 222);;
    margin-top: 50px;
    margin-left: 450px;
    background-color:#F5F5F5;
    
}
.bbt{
    padding-bottom: 20px;
    font-family: "Open Sans", sans-serif;
    
}
.btn_warning{
  padding: 5px;
  font-weight:bold;
  margin-bottom: 20px;
  border-radius: 7%;
  background-color: Gold;
  font-family: "Open Sans", sans-serif;
  box-shadow: 5px 5px rgb(228 222 222);
  cursor: pointer;
  transition: 1.1s;
}
.btn_warning:hover{
    transform:scale(1.2)
}


.bt{
    color: SaddleBrown;
}
.photo{
    margin-bottom: 20px;
    box-shadow: 1px 1px 10px LightGray;

}

    </style>
</head>
<body>
   
<div class="main">
    <div class="photo">
      <img src="images/cart.jpg" alt="photo" width="100%" height="100%">
    </div>
  <center>
     <form action="insert_card.php" method="post">
        <h2 class="bbt">هل تريد شراء المنتج</h2>
        <input type="text" name="id" value='<?php echo $data['id']?>'>
        <input type="text" name="name" value='<?php echo $data['name']?>'>
        <input type="text" name="price" value='<?php echo $data['price']?>'>
        <button type="submit" name="add" class='btn_warning'>تأكيد اضافه المنتج للعربه</button>
        <br>
        <a class='bt' href="index.php">الرجوع الي صفحه المنتجات</a>
     </form>
   </center>
</div>

</body>
</html>