<?php
require_once("FishingRodrestKezelo.php");
$view="";
if(isset($_GET["view"]))
    $view=$_GET["view"];

    switch($view)
    {
        case "all":
            $FishingRodrest= new FishingRodrestKezelo();
            $FishingRodrest->getAllFRod();
            break;
       
        case "single":
            $FishingRodrest= new FishingRodrestKezelo();
            $FishingRodrest->getRodById($_GET["id"]);
            break;
       
        case "tipus":
            $FishingRodrest= new FishingRodrestKezelo();
            $FishingRodrest->getRodByType($_GET["tid"]);
            break;
       
        default:
            $FishingRodrest= new FishingRodrestKezelo();
            $FishingRodrest->getFault();
    }

?>