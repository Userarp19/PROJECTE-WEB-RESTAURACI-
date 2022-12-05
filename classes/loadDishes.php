<?php
 require_once ("producte.php");
 require_once ("mainDishes.php");
 require_once ("drinks.php");
 //$id, $name, $price, $picture,$mainDishes/$drinks


 $steaks=array( new MainDishes(0,'NEW YORK STRIP',30,'assets/images/newyorkstrip.jpg',1,'yes'),
                new MainDishes(1,'GRILLED RIBEYE',40,'assets/images/GRILLEDRIBEYE.jpg',1,'yes'),
                new MainDishes(2,'GRILLED VEAL CHOP',50,'assets/images/GRILLEDVEALCHOP.jpg',1,'yes'),
                new MainDishes(3,'FILET DE MIGNON',50,'assets/images/FILETDEMIGNON.jpg',1,'yes'));

$refreshes=array( new Dirkns(0,'MOSCOW MULE',20,'assets/images/MOSCOW MULE.jpg',1,'yes'),
                  new Dirkns(1,'LEMONADE',5,'assets/images/LEMONADE.jpg',1,'yes'),
                  new Dirkns(2,'STBERRY MINTTEA',7,'assets/images/STRAWBERRY MINT TEA.jpg',1,'yes'),
                  new Dirkns(3,'SODA',7,'assets/images/SODA.jpg',1,'yes'));

                
?>