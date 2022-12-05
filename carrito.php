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
include_once('header.php');
?>

<section class=" container-fluid px-5 py-5">
    <div class="px-5  ">

    <table class="table bg-color1 text-white">
        <thead>
            <tr >
            
        <th scope="col" class="text-center " >ITEM</th>
            <th scope="col">PRICE</th>
            <th scope="col">QUANTITY</th>
            <th scope="col">TOTAL</th>
            <th scope="col">REMOVE</th>
            </tr>
        </thead>
        <tbody>
       
            <?php
            if ($orderCounts>0) {
                $pos = 0;
                foreach ($_SESSION['compra'] as $order) { ?>
                 <form action='sessions.php'method='post'>
                     <tr>
                 <td>
                    <div class="d-flex justify-content-center mx-0 my-0 px-0 py-0 ">
                        <div class="col-12   my-0 mx-0 pt-3 pb-1" style="  float: left;  width: 200px;">
                            <img class="fotocolumna" src="<?php echo $order->getPicture() ?>" alt="">
                        </div>
                        <div class="col-12   my-4 mx-0 pt-4 " style="  float: left; width: 250px">
                        <h3 class="text-light  p-3 d-flex justify-content-center textsizePlatescarrito "><?php echo $order->getName() ?></h3>
                        </div>
                    </div>
                    </td>
                    <td>
                        <div class="col-12  pt-5  " style="  float: left;   ">
                            
                            <div>
                                <h3 class="text-light  p-2 " style=" float: left;"><?php echo $order->getPrice() ?></h3>
                            </div>
                            
                        </div>
                    </td>
                    <td>
                        <div class="col-12  pt-5 px-0" style="  float: left; ">
                            <div class="pt-2">
                            <div class="">
                            
                            <input type="hidden" name="pos" value=<?=$pos?>>
                                <p class=" btuncarrito  text-center  " style=" float: left;   padding-top: 0px;"">
                                            <button class=" " type="submit" name='Del' style=" all: unset;  cursor: pointer;">-</button >
                                </p>
                            </div>
                            <div>
                                <h3 class="text-light   " style=" float: left;  margin-right: 6%; margin-left: 6%; "><?php echo $order->getQuantity() ?></h3>
                            </div>
                            <div>
                            
                                <p class=" btuncarrito  text-center  " style=" float: left; ">
                                <button class=" " type="submit" name='Add' style=" all: unset;  cursor: pointer;">+</button >
                                </p>
                            
                            </div>
                            </div>
                            
                        </div>
                    </td>
                    
                    <td>
                        <div class="col-12  pt-5 " style="  float: left;">
                            
                            <div>
                                <h3 class="text-light  p-2 " style=" float: left; "><?=$order->calculatePrice()?></h3>
                            </div>
                            
                        </div>
                    </td>
                    <td>
                            <div class="d-flex justify-content-center pt-5" style=" ">   
                                <p class="p-2  " style="">
                                <button class=" " type="submit" name='remove' style=" all: unset;  cursor: pointer;"><img src="assets\images\remove.png" alt="" style="width:27px; height: 27px;"></button >
                                </p>
                            </div>
                    </td>
                </tr>
               
                </form>
                <?php $pos++;}?>
                <tr>
                    <td colspan="5">
                    <div class="text-light text-center  pr-5 mr-5" >
                    <h3 class="text-light text-center mx-4 my-5 " style=" float: right;"><?= CalculateTotalPrice::calculateTPrice($_SESSION['compra'])?></h3>
                    <h3 class="text-light text-center mx-4 my-5 " style=" float: right;">Total</h3>
                    </div>
                    
                    </td>   
                </tr>

                <form action='cockies.php'method='post'>
                <input type="hidden" name="finishOrdering" value="true">>
                <tr>
                <td colspan="5">
                <button type="submit" style=" all: unset;  cursor: pointer; float: right;">
                
                <p class="mx-4 my-5 text-center s" style="float: right;">
                        <a class="btn colorbtn " role="button" id="whitebutton">CHECK OUT</a>
                </p>
                </button>
                <p class="mx-4 my-5 btun text-center s" style="float: right;">
                        <a class="btn colorbtn " href="menu.php" role="button">CONTINUE SHOPING</a>
                </p>
               
                </td>    
                </tr>

                </form>
                
                <?php 
            }else{?>
                <tr><td colspan="5"><h3 class="text-light  p-3 d-flex justify-content-center textsizePlatescarritoVacio pt-5 pb-0" style="height: 300px;">YOU DID NOT SELECT ANY DISHES TO BUY</h3></td> <tr>
                    <?php
            } 
            ?>
           
           
           
         
         
            <!--<tr>
             <td>
                <div class="d-flex justify-content-center mx-0 my-0 px-0 py-0 ">
                    <div class="col-12   my-4 mx-0 pt-3 pb-1" style="  float: left;  width: 200px;">
                        <img class="fotocolumna" src="assets/images/GRILLEDVEALCHOP.jpg" alt="">
                    </div>
                    <div class="col-12   my-4 mx-0 pt-5 " style="  float: left; width: 250px">
                    <h3 class="text-light  fa-center p-3 d-flex justify-content-center textsizePlatescarrito ">GRILLED VEAL CHOP</h3>
                    </div>
                </div>
                </td>
                <td>
                    <div class="col-12   mx-0  " style="  float: left; text-align: center;  margin-top: 100%">
                        
                        <div>
                            <h3 class="text-light  fa-center" style=" float: left; padding-top: 5%;">30€</h3>
                        </div>
                        
                    </div>
                </td>
                <td>
                    <div class="col-12   mx-0  " style="  float: left; text-align: center;  margin-top: 58.5%">
                        <div >
                            <p class=" btuncarrito  text-center  ;" style=" float: left;   padding-top: 0px;"">
                                        <a class=" " href="#" role="button">-</a>
                            </p>
                        </div>
                        <div>
                            <h3 class="text-light  fa-center" style=" float: left; padding-top: 5%; margin-right: 4%; margin-left: 4%; ">30€</h3>
                        </div>
                        <div>
                            <p class=" btuncarrito  text-center " style=" float: left; ">
                                        <a class=" " href="#" role="button">+</a>
                            </p>
                        </div>
                    </div>
                </td>
                
                <td>
                    <div class="col-12   mx-0  " style="  float: left; text-align: center;  margin-top: 97%">
                        
                        <div>
                            <h3 class="text-light  fa-center" style=" float: left; padding-top: 5%;">30€</h3>
                        </div>
                        
                    </div>
                </td>
                <td>
                        <div style="  text-align: center;  margin-top: 68%">   
                            <p class=" btuncarrito  text-center " style=" float: left; ">
                                        <a class=" " href="#" role="button"><img src="assets\images\remove.png" alt="" style="width:27px; height: 27px;"></a>
                            </p>
                        </div>
                </td>
            </tr>

            <tr>
             <td>
                <div class="d-flex justify-content-center mx-0 my-0 px-0 py-0 ">
                    <div class="col-12   my-4 mx-0 pt-3 pb-1" style="  float: left;  width: 200px;">
                        <img class="fotocolumna" src="assets/images/GRILLEDVEALCHOP.jpg" alt="">
                    </div>
                    <div class="col-12   my-4 mx-0 pt-5 " style="  float: left; width: 250px">
                    <h3 class="text-light  fa-center p-3 d-flex justify-content-center textsizePlatescarrito ">GRILLED VEAL CHOP</h3>
                    </div>
                </div>
                </td>
                <td>
                    <div class="col-12   mx-0  " style="  float: left; text-align: center;  margin-top: 100%">
                        
                        <div>
                            <h3 class="text-light  fa-center" style=" float: left; padding-top: 5%;">30€</h3>
                        </div>
                        
                    </div>
                </td>
                <td>
                    <div class="col-12   mx-0  " style="  float: left; text-align: center;  margin-top: 58.5%">
                        <div >
                            <p class=" btuncarrito  text-center  ;" style=" float: left;   padding-top: 0px;"">
                                        <a class=" " href="#" role="button">-</a>
                            </p>
                        </div>
                        <div>
                            <h3 class="text-light  fa-center" style=" float: left; padding-top: 5%; margin-right: 4%; margin-left: 4%; ">30€</h3>
                        </div>
                        <div>
                            <p class=" btuncarrito  text-center " style=" float: left; ">
                                        <a class=" " href="#" role="button">+</a>
                            </p>
                        </div>
                    </div>
                </td>
                
                <td>
                    <div class="col-12   mx-0  " style="  float: left; text-align: center;  margin-top: 97%">
                        
                        <div>
                            <h3 class="text-light  fa-center" style=" float: left; padding-top: 5%;">30€</h3>
                        </div>
                        
                    </div>
                </td>
                <td>
                        <div style="  text-align: center;  margin-top: 68%">   
                            <p class=" btuncarrito  text-center " style=" float: left; ">
                                        <a class=" " href="#" role="button"><img src="assets\images\remove.png" alt="" style="width:27px; height: 27px;"></a>
                            </p>
                        </div>
                </td>
            </tr>-->
        </tbody>
        </table>
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