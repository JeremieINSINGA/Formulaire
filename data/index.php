<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>Application d'envoi de courrier</title>

        <link rel="stylesheet" href="css/style.css"/>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js">

        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Application d'envoi de courrier</h1>
        <div class="container">

            <form class="" action="" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Expediteur <span>*</span> </label>
                        <input type="email" class="form-control" name="inputEmailExpediteur" value=""
                        placeholder="Tapez votre email !">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Destinataire <span>*</span></label>
                        <input type="email" class="form-control" name="inputEmailDestinataire" value=""
                        placeholder="Tapez l'email du destinataire !">
                    </div>
                    </div>
                    <div class="form-row">
                <label for="">Objet <span>*</span></label>
                <input type="text" class="form-control" placeholder="Tapez l'objet de votre message" name="InputObjet" value="">
            </div>
            <div class="form-row">
                <label for="">Message <span>*</span></label>
                <textarea class="form-control" name="inputMessage" cols="80" rows="8"></textarea>
            </div>
            <p class="comment-obligatoire"><span>*</span>Ces champs sont obligatoires</p>

            <input type="submit" class="btn btn-lg btn-success btn-block" name="" value="Envoyer">
        </form>
        </div>
</body>
</html>