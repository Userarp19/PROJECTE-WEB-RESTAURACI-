<!DOCTYPE html>
<html lang="es">
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
include_once('header.php');


?>
<section class=" container-fluid  mx-0 pt-5 my-0">
<div class="row my-4 d-flex justify-content-center">
    <div class="bg-color1 mx-3 my-3 " style="width:24%; height:8px; ">. </div>
    <div class="bg-color1" style="width:34%;">
        <h2 class=" text-center  bgcol" style=" font-family: 'STEAK';  color: white;">MAIN DISHES</h2>
    </div>
    <div class="bg-color1 my-3 mx-3" style="width:24%; height:8px;">.</div>
</div>
<div class="row d-flex justify-content-center " >

      
<?php 
include_once("classes\drinks.php");
include_once("classes\loadDishes.php");
include_once("classes\mainDishes.php");
include_once("classes\producte.php");

foreach($steaks as $stake){
?>     
            <div class="col-12 col-md-3  my-4 mx-3 platehover" style="  float: left;  width: 250px;" >
                <form action='sessions.php'method='post'>
                    <button type="submit" style=" all: unset;  cursor: pointer;">
                   
                    <input type="hidden" name="dishe" value=<?=$stake->getId();?>>
                        <div class="bg-color1 m-1">
                            <img class="fotocolumna" src="<?php echo $stake->getPicture()?>" alt="">
                            <div>
                            <div class="bg-color1" style="float: left; width: 80%;">
                            <h3 class="text-light  fa-center p-3 d-flex justify-content-center textsizePlates "   ><?php echo $stake->getName() ?></h3>
                            </div>
                            <div style="float: left;  height: 55px; text-align: center; padding-top:14.5px; padding-left:2.5px; background-color:white; color:black; width:48.42px;  ">
                            <p style="text-align: center; "><?php echo $stake->getPrice(); ?>€</p>
                            </div>
                            </div>
                
                         </div>
                         </button>
                </form>
                 
            </div>

            <?php
            
        }?>     
<!--
            <div class="col-12 col-md-3  my-4 mx-3" style="  float: left;  width: 250px;" >
                <a href="">
                    <div class="bg-color1 m-1">
                        <img class="fotocolumna" src="assets/images/GRILLEDVEALCHOP.jpg" alt="">
                        <div>
                        <div class="bg-color1" style="float: left; width: 80%;">
                        <h3 class="text-light  fa-center p-3 d-flex justify-content-center textsizePlates "   >GRILLED VEAL CHOP</h3>
                        </div>
                        <div style="float: left;  height: 55px; text-align: center; padding-top:14.5px; padding-left:2.5px; background-color:white; color:black; width:48.42px;  ">
                        <p style="text-align: center; " >30€</p>
                        </div>
                        </div>
                        
                    </div>
                 </a>
            </div>

            <div class="col-12 col-md-3  my-4 mx-3" style="  float: left;  width: 250px;" >
                <a href="">
                    <div class="bg-color1 m-1">
                        <img class="fotocolumna" src="assets/images/GRILLEDVEALCHOP.jpg" alt="">
                        <div>
                        <div class="bg-color1" style="float: left; width: 80%;">
                        <h3 class="text-light  fa-center p-3 d-flex justify-content-center textsizePlates "   >GRILLED VEAL CHOP</h3>
                        </div>
                        <div style="float: left;  height: 55px; text-align: center; padding-top:14.5px; padding-left:2.5px; background-color:white; color:black; width:48.42px;  ">
                        <p style="text-align: center; " >30€</p>
                        </div>
                        </div>
                        
                    </div>
                 </a>
            </div>
            <div class="col-12 col-md-3  my-4 mx-3" style="  float: left;  width: 250px;" >
                <a href="">
                    <div class="bg-color1 m-1">
                        <img class="fotocolumna" src="assets/images/GRILLEDVEALCHOP.jpg" alt="">
                        <div>
                        <div class="bg-color1" style="float: left; width: 80%;">
                        <h3 class="text-light  fa-center p-3 d-flex justify-content-center textsizePlates "  >GRILLED VEAL CHOP</h3>
                        </div>
                        <div style="float: left;  height: 55px; text-align: center; padding-top:14.5px; padding-left:2.5px; background-color:white; color:black; width:48.42px;  ">
                        <p style="text-align: center; " >30€</p>
                        </div>
                        </div>
                        
                    </div>
                 </a>
            </div>
-->
            
</div>
</section>


<section class=" container-fluid mx-0 px-0 py-0 my-0">
<div class="row my-5 d-flex justify-content-center">
    <div class="bg-color1 mx-3 my-3 " style="width:24%; height:8px; ">. </div>
    <div class="bg-color1" style="width:35%;">
        <h2 class=" text-center  bgcol" style=" font-family: 'STEAK';  color: white;">DRINKS</h2>
    </div>
    <div class="bg-color1 my-3 mx-3" style="width:24%; height:8px;">.</div>
</div>
<div class="row d-flex justify-content-center pb-5 " >
<?php
foreach($refreshes as $drink){
?>     
            <div class="col-12 col-md-3  my-4 mx-3" style="  float: left;  width: 250px;" >
                <form action='sessions.php'method='post'>
                    <button type="submit" style=" all: unset;  cursor: pointer;">
                   
                    <input type="hidden" name="drink" value=<?=$drink->getId();?>>
                        <div class="bg-color1 m-1">
                            <img class="fotocolumna" src="<?php echo $drink->getPicture()?>" alt="" >
                            <div>
                            <div class="bg-color1" style="float: left; width: 80%;">
                            <h3 class="text-light  fa-center p-3 d-flex justify-content-center textsizePlates "   ><?php echo $drink->getName() ?></h3>
                            </div>
                            <div style="float: left;  height: 55px; text-align: center; padding-top:14.5px; padding-left:2.5px; background-color:white; color:black; width:48.42px;  ">
                            <p style="text-align: center; "><?php echo $drink->getPrice(); ?>€</p>
                            </div>
                            </div>
                
                         </div>
                         </button>
                </form>
                 
            </div>

            <?php
            
        }?>          
           
          <!--  <div class="col-12 col-md-3  my-4 mx-3" style="  float: left;  width: 250px;" >
                <a href="">
                    <div class="bg-color1 m-1">
                        <img class="fotocolumna" src="assets/images/GRILLEDVEALCHOP.jpg" alt="">
                        <div>
                        <div class="bg-color1" style="float: left; width: 80%;">
                        <h3 class="text-light  fa-center p-3 d-flex justify-content-center textsizePlates "   >GRILLED VEAL CHOP</h3>
                        </div>
                        <div style="float: left;  height: 55px; text-align: center; padding-top:14.5px; padding-left:2.5px; background-color:white; color:black; width:48.42px;  ">
                        <p style="text-align: center; ">30€</p>
                        </div>
                        </div>
                        
                    </div>
                 </a>
            </div>

            <div class="col-12 col-md-3  my-4 mx-3" style="  float: left;  width: 250px;" >
                <a href="">
                    <div class="bg-color1 m-1">
                        <img class="fotocolumna" src="assets/images/GRILLEDVEALCHOP.jpg" alt="">
                        <div>
                        <div class="bg-color1" style="float: left; width: 80%;">
                        <h3 class="text-light  fa-center p-3 d-flex justify-content-center textsizePlates "   >GRILLED VEAL CHOP</h3>
                        </div>
                        <div style="float: left;  height: 55px; text-align: center; padding-top:14.5px; padding-left:2.5px; background-color:white; color:black; width:48.42px;  ">
                        <p style="text-align: center; " >30€</p>
                        </div>
                        </div>
                        
                    </div>
                 </a>
            </div>

            <div class="col-12 col-md-3  my-4 mx-3" style="  float: left;  width: 250px;" >
                <a href="">
                    <div class="bg-color1 m-1">
                        <img class="fotocolumna" src="assets/images/GRILLEDVEALCHOP.jpg" alt="">
                        <div>
                        <div class="bg-color1" style="float: left; width: 80%;">
                        <h3 class="text-light  fa-center p-3 d-flex justify-content-center textsizePlates "   >GRILLED VEAL CHOP</h3>
                        </div>
                        <div style="float: left;  height: 55px; text-align: center; padding-top:14.5px; padding-left:2.5px; background-color:white; color:black; width:48.42px;  ">
                        <p style="text-align: center; " >30€</p>
                        </div>
                        </div>
                        
                    </div>
                 </a>
            </div>
            <div class="col-12 col-md-3  my-4 mx-3" style="  float: left;  width: 250px;" >
                <a href="">
                    <div class="bg-color1 m-1">
                        <img class="fotocolumna" src="assets/images/GRILLEDVEALCHOP.jpg" alt="">
                        <div>
                        <div class="bg-color1" style="float: left; width: 80%;">
                        <h3 class="text-light  fa-center p-3 d-flex justify-content-center textsizePlates "  >GRILLED VEAL CHOP</h3>
                        </div>
                        <div style="float: left;  height: 55px; text-align: center; padding-top:14.5px; padding-left:2.5px; background-color:white; color:black; width:48.42px;  ">
                        <p style="text-align: center; " >30€</p>
                        </div>
                        </div>
                        
                    </div>
                 </a>
            </div>-->
            
            
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