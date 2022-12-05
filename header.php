

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
                     
                     
                    session_start();
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