

<?php
       include_once("classes\drinks.php");
       include_once("classes\loadDishes.php");
       include_once("classes\mainDishes.php");
       include_once("classes\producte.php");
//ORDERING FROM MENU//
    if(isset($_POST['dishe'])){

                $disheSel=$steaks[$_POST['dishe']];
                
                    session_start();
                    if(isset($_SESSION['compra'])){
                    
                        
                        if(in_array($disheSel, $_SESSION['compra'])){
                                $respuesta='<script>alert("drink already exits")</script>';
                            }else{
                                array_push($_SESSION['compra'],$disheSel);
                            }
                    

                }else{
                        $_SESSION['compra']=array();
                        array_push($_SESSION['compra'],$disheSel);
                        

                }
      header("Location:menu.php");
       }elseif(isset($_POST['drink'])){
                        $drinkSel=$refreshes[$_POST['drink']];

                        session_start();
                        if(isset($_SESSION['compra'])){
                    
                        
                        
                                if(in_array($drinkSel, $_SESSION['compra'])){
                                        $respuesta= '<script>alert("drink already exits")</script>';
                                    }else{
                                        array_push($_SESSION['compra'],$drinkSel);
                                    }

                }else{
                        $_SESSION['compra']=array();
                        
                        array_push($_SESSION['compra'],$drinkSel);

                }
                
          header("Location:menu.php");
       }
    
  
       
//ORDERING FROM MENU//

//EDITING ORDERS FROM CART//
session_start();
    if (isset($_POST['Del'])) {
        
        $orderSel = $_SESSION['compra'][$_POST['pos']];
        if ($orderSel->getQuantity()==1) {
                unset($_SESSION['compra'][$_POST['pos']]);
                //Re-Index the array elements
                $_SESSION['compra'] = array_values($_SESSION['compra']);
                header("Location:carrito.php");
        }else{
                $orderSel=$_SESSION['compra'][$_POST['pos']];
                $orderSel->setQuantity($orderSel->getQuantity() - 1);  

                header("Location:carrito.php");
        }
    }else if (isset($_POST['Add'])) {
        $orderSel = $_SESSION['compra'][$_POST['pos']];
        $orderSel->setQuantity($orderSel->getQuantity() + 1);
        header("Location:carrito.php");

    }
    
    if (isset($_POST['remove'])) {
        unset($_SESSION['compra'][$_POST['pos']]);
                //Re-Index the array elements
                $_SESSION['compra'] = array_values($_SESSION['compra']);
                header("Location:carrito.php");
    }  
//EDITING ORDERS FROM CART//
        ?>