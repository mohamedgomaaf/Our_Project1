<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>منتجاتي</title>
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
        h3{
            font-family: "Open Sans", sans-serif;
            font-weight:bold;
        }

        main{
            width:40%;
            margin-top:30px;
        }

        table{
            box-shadow:1px 1px 10px silver;
        }

        thead{
            background-color:Salmon;
            color:white;
            text-align:center;
        }

        tbody{
            text-align:center;
        }

        .mm{
            font-family: "Open Sans", sans-serif;
            font-weight:bold;
            margin-top:40px;
        }
        .btn-danger{
          color:red;
          font-family: "Open Sans", sans-serif;
          font-weight:bold;
        }

        .mm{
          text-align:center;
        }
        .bon button{
          cursor: pointer;
          margin-top:90px;
          width: fit-content;
          color:red;
          transition:1.2s;
          height: 40px;
          padding: 10px;
          border:none;
          border-radius:8px;
          margin-bottom:20px
          
       }
       .bon button:hover{
         color:#eee; 
       }
    </style>
</head>
<body>
        
    <h1 class="mm">منتجاتك المحجوزة</h1>

      <?php
      include('config.php');
      $result = mysqli_query($con,"SELECT * FROM add_card");
      while($row =mysqli_fetch_array($result)){
        echo"
         <center>
         <main>
         <table class='table'>
           <thead>
             <tr>
                <th scope='col'>product name</th>
                <th scope='col'>product price</th>
                <th scope='col'>delete product</th>
             </tr>
           </thead>
           <tbody>
             <tr>
                <td>$row[name]</td> 
                <td>$row[price]</td>
                <td><a href='del_card.php? id=$row[id]' class='btn-danger' title='تأكيد إزاله المنتج'>ازاله</a></td>
             </tr>
           </tbody>
         </table>
       </main>
         </cent>
       
      "
       ;}
      ?>
    <div class="bon">
          <button> <a href="index.php">الرجوع الي الصفحه الرئيسيه</a> </button>
        </div>
</body>
</html>