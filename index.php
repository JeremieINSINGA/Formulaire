<?php
    require("lib/functions.php");
    $errorDes = $errorExp = $errorObj = $errorMg ="";
    $valueDes = $valueExp = $valueObj = $valueMg = $valueEnv = "";
    $valid_data = false;
    check();
    if ($valid_data) {

        $destinataire = $valueDes;
        $objet = $valueObj;
        $message = $valueMg;
        $entete['From'] = "\Expéditeur\" <".$valueExp.">";
        $entete['Reply-To'] = "\Expéditeur\" <".$valueExp.">";
        $entete['X-Priority'] = "1";
        $envoi = mail($destinataire, $objet, $message, $entete);
        if ($envoi) {
            $valueEnv="Mail envoyé avec succès ! Merci et à très bientôt";
            $errorDes = $errorExp = $errorObj = $errorMg ="";
            $valueDes = $valueExp = $valueObj = $valueMg = $valueEnv = "";

        }else {

            $valueEnv = "Le message n'a pu être envoyé. Merci de réessayer ultérieurement.";
        }
    }
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <title>Application d'envoi de courrier</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        
        

        <link rel="stylesheet" type="text/css" href="css/style.css"/>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js">

        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body style="background-color:#0d47a1;">
        <h1>Application d'envoi de courrier</h1>
        <div class="container">

            <form class="" action="" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Expediteur <span>*</span> </label>
                        <input type="email" class="form-control" name="inputEmailExpediteur" value="<?php echo $valueExp; ?>"
                        placeholder="Tapez votre email !">
                        <p class ="comment-error"><?php echo $errorEmail; ?> </p>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Destinataire <span>*</span></label>
                        <input type="email" class="form-control" name="inputEmailDestinataire" value="<?php echo $valueDes; ?>"
                        placeholder="Tapez l'email du destinataire !">
                        <p class ="comment-error"><?php echo $errorDes; ?> </p>
                    </div>
                    </div>
                    <div class="form-row">
                <label for="">Objet <span>*</span></label>
                <input type="text" class="form-control" placeholder="Tapez l'objet de votre message" 
                name="InputObjet" value="<?php echo $valueObj; ?>">
                <p class ="comment-error"><?php echo $errorObj; ?> </p>
            </div>
            <div class="form-row">
                <label for="">Message <span>*</span></label>
                <textarea class="form-control" name="inputMessage" cols="80" rows="8"><?php echo $valueMg; ?></textarea>
                <p class ="comment-error"><?php echo $errorMg; ?> </p>
            </div>
            <p class="comment-obligatoire"><span>*</span>Ces champs sont obligatoires</p>

            <input type="submit" class="btn btn-lg btn-success btn-block" name="" value="Envoyer">
            <p class="comment-success"><?php echo $valueEnv;?></p>   
        </form>
        </div>
</body>
</html>