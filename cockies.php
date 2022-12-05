<?php
       include_once("classes\drinks.php");
       include_once("classes\loadDishes.php");
       include_once("classes\mainDishes.php");
       include_once("classes\producte.php");
       include_once("utils\calculatetotalprice.php");
       
//FINISHING THE ORDER AND SAVIN IT IN THE COCKIES//
if(!isset($_COOKIE["ENDOrder"])) {
    if(isset($_POST['finishOrdering'])) {
        setcookie("ENDOrder", "", time() + (86400 * 1), "/");  
    $cockieValue='';
    
    session_start();
        foreach ($_SESSION['compra'] as $order) {
            
            $cockieValue .= '<p>Dishe Name:  '.$order->getName().', <br>Quantity: '.$order->getQuantity().'<br>Price: '.$order->calculatePrice().'.</p><br>';
    
        }
        $cockieValue .= '<p ><b>Total Price: </b> '.CalculateTotalPrice::calculateTPrice($_SESSION['compra']).'€</p><br>';
       
        setcookie("ENDOrder", "$cockieValue", time() + (86400 * 1), "/");
        session_destroy();
    }
}






    
       
  
        
   
    
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link href="assets/css/full_estil25.css" rel="stylesheet" type="text/css" media="screen">
    <title>MF STEAKEHOUSE</title>
    <link rel="icon" type="image/x-icon" href="assets/icons/favicon.png">
</head>
<body class="backgroundMenu">

<?php

?>
<header>
  <div class="navPC d-none d-sm-block   bg-color1" >
    <nav class="navbar navbar-expand-sm mx-auto bg-color1 sizehd ">
        <div class="container-lg" >

          <div class="position-absolute top-50 start-0 translate-middle-y" >
            <a class="navbar-brand" href="index.php"><img src="assets/icons/logo.png" alt="" style="height: 65px;"></a>
          </div>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse navbar-brand position-absolute top-50 start-50 translate-middle" id="navbarNav">
            <ul class="navbar-nav " >
             <li class="nav-item">
                <a class="nav-link sizenv" href="menu.php"> MENU </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link sizenv" href="#"> ABOUT US </a>
              </li>
              <li class="nav-item">
                <a class="nav-link sizenv" href="#"> PROMOTIONS </a>
              </li>
            </ul>
            <div style="width: 15px; background-color:white;"> </div>
          </div>
          
            <div class="position-absolute top-50 end-0 translate-middle-y ">
            <a href="carrito.php"><img src="assets/icons/carrito1.png" style="width:38px; height: 30%;"> </a>
              <p style="   text-decoration: none;  position: absolute;  left: -11px;  top: -11px;  z-index: 1; color:white;"> 
                    <?php
                     include_once("classes\drinks.php");
                     include_once("classes\loadDishes.php");
                     include_once("classes\mainDishes.php");
                     include_once("classes\producte.php");
                     include_once("utils\calculatetotalprice.php");
                     
                     
                    
                    if(isset($_SESSION['compra'])){
                      $orderCounts = count($_SESSION['compra']);
                    }else{
                      $orderCounts = 0;
                    }
                    
                    echo $orderCounts ;
                    ?> 
              </p>
            </div> 
        </div>
      </nav>
    </div>



    <div class="navPhone bg-color1 d-sm-none">
      

      <nav class="navbar navbar-expand-sm navbar-dark bg-color1 sizehd " style="margin:auto;">
        <div class="container-lg">

          <button class="navbar-toggler position-absolute top-50 start-0 translate-middle-y" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
          <div class="collapse navbar-collapse position-absolute top-100 start-0" id="navbarNav">
            <ul class="navbar-nav tst " >
             <li class="nav-item ">
                <a class="nav-link sizenvm" href="menu.php">MENU</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link sizenvm" href="#">ABOUT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link sizenvm" href="#">PROMOTIONS</a>
              </li>
            </ul>
          </div>

            <a class="navbar-brand position-absolute top-50 start-50 translate-middle" href="index.php"><img src="assets/icons/logo.png" alt="" style="height: 60px; width:153px;"></a>
      
            <div class="position-absolute top-50 end-0 translate-middle-y">
                  <a  href="carrito.php"><img src="assets/icons/carrito1.png" style="width:38px; height: 30px;"></a>
                <p style="   text-decoration: none;  position: absolute;  left: -11px;  top: -11px;  z-index: 1; color:white;"> 
                        <?php
                                              
                        echo $orderCounts ;
                        ?> 
                  </p>
            </div>
            
            </div>
      </nav>


      
    </div>
   
</header>




<section class=" container-fluid px-5 py-5">
    <div class="px-5 bg-color1 text-color2 text-center pt-5 pb-5" style="height: 100%;" >  
        <?php
          
          if(isset($_COOKIE["ENDOrder"])) {
            echo ($_COOKIE["ENDOrder"]);
          }
        
        
        ?>
    </div>

</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>
</body>
<?php
include_once('footer.php');
?>
</html>

 
