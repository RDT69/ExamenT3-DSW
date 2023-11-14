<?php
require "../vendor/autoload.php";

use Daw2\ExamenT3Dsw\Element;
use Daw2\ExamenT3Dsw\Product;
use Daw2\ExamenT3Dsw\expiredProduct;
use Daw2\ExamenT3Dsw\Service;
use Daw2\ExamenT3Dsw\Store;
use Daw2\ExamenT3Dsw\ServiceEvent;
use Daw2\ExamenT3Dsw\serviceSesion;
use Daw2\ExamenT3Dsw\MixService;
use daw2\ExamenT3Dsw\noLimitService;

$store = new Store();

// 2 productos no perecederos
$producto1 = new Product("Arroz","1.50","Paquete de Arroz","Hacendado","200","50");
$producto2 = new Product("Spagetti","2.00","Paquete de Spagetti","Romero","500","80");

//1 producto perecedero que haya caducado
$expiredProduct1 = new expiredProduct("Piña","2.00","1 Lata","Hacendado","100","900","2023-08-13");

//1 producto perecedero que caduque en 2 o 3 días
$expiredProduct2 = new expiredProduct("Cereales","2.50","Caja","ChocoKrispis","150","200","2023-11-15");

//1 producto perecedero que caduque en 20 o 25 días.
$expiredProduct3 = new expiredProduct("Helado","3.00","Un paquete de helados","hacendado","100","300","2023-12-04");

//3 eventos: uno caducado, otro que caduque hoy y otro que caduque en unos meses.
$service1 = new ServiceEvent("Festival","50.00","FARRA","2021-02-12");
$service2 = new ServiceEvent("Hotel","150.00","Noche en hotel","2023-11-12");
$service3 = new ServiceEvent("Crossfit","62.40","Sesión en Crossfit","2024-01-12");

//2 servicios por sesiones: uno al que le quedan pocas sesiones y otro al que no le queda ninguna.
$service4 = new serviceSesion("Crossfit","20.00","Clase de Crossfit, servicio por sesiones","4");
$service5 = new serviceSesion("BodyPump","12.00","Clase de BodyPump, servicio por sesiones","0");

//2 servicios mixtos: uno caducado y otro no.
$service6 = new MixService("BodyPump","21.30","Clase de BodyPump, servicio por sesiones","2023-08-13","5");
$service7 = new MixService("BodyPump","15.80","Clase de BodyPump, servicio por sesiones","2024-02-13","10");

//2 servicios normales.
//$service8 = new noLimitService("Recetas","19.99","Compra de un libro de recetas");
//$service9 = new noLimitService("Videojuego","59.99","Compra de un videojuego");



$store->addElement($producto1);
$store->addElement($producto2);
$store->addElement($expiredProduct1);
$store->addElement($expiredProduct2);
$store->addElement($expiredProduct3);
$store->addElement($service1);
$store->addElement($service2);
$store->addElement($service3);
$store->addElement($service4);
$store->addElement($service5);
$store->addElement($service6);
$store->addElement($service7);
// $store->addElement($service8);
// $store->addElement($service9);