<?php
switch ($material) {
    case "CR39 1.49":

        $fc = 1.062;
        include("de_sp.php");

        break;
    case "TRIVEX 1.53":

        $fc = 1.000;
        include("de_sp.php");

        break;
    case "POLY 1.59":

        $fc = 0.904;
        include("de_sp.php");

        break;
    case "RES. 1.60":

        $fc = 0.883;
        include("de_sp.php");

        break;
    case "RES. 1.67":

        $fc = 0.797;
        include("de_sp.php");

        break;
    case "RES. 1.74":

        $fc = 0.716;
        include("de_sp.php");

        break;
        default:
}
