<?php

    function check(){
        $i=0;
        if (!empty($_REQUEST)) {

            if (empty(trim($_REQUEST["inputEmailExpediteur"]))){

                $GLOBALS['errorExp'] = "Merci de saisir le mail de l'expéditeur"; 
            }else{
                $GLOBALS['valueExp'] = trim ($_REQUEST ["inputEmailExpediteur"]);
                $i++;
            }

        if (empty(trim($_REQUEST["inputEmailDestinataire"]))){

            $GLOBALS['errorDes'] = "Merci de taper le mail du destinataire"; 
        }else{
            $GLOBALS['valueDes'] = trim ($_REQUEST ["inputEmailDestinataire"]);
            $i++;
        }

        if (empty(trim($_REQUEST["inputObjet"]))){

            $GLOBALS['errorObj'] = "Merci de saisir un objet !"; 
        }else{
            $GLOBALS['valueObj'] = trim ($_REQUEST ["inputObjet"]);
            $i++;
        }

        if (empty(trim($_REQUEST["inputMessage"]))){

            $GLOBALS['errorMg'] = "Merci de saisir un Message !"; 
        }else{
            $GLOBALS['valueMg'] = trim($_REQUEST ["inputMessage"]);
            $i++;
        }
        }
        if($i==4){
            $GLOBALS['variable'] = true;
        }
    }
?>