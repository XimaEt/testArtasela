<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <script src="jquery-3.6.0.min.js"></script>
        <script src="script.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <style>
            .return{
	            display: none;
            }

            .return span{
                display: block;
                width:400px;
                padding:5px;
                text-align: center;
                border-radius: 4px;
                margin-bottom: 5px;
                color:#FFF;
            }

            .return .error{
                background-color: #e74c3c;
            }

            .return .success{
                background-color: #27ae60;
            }
        </style>
        <title>Contact</title>
    </head>
    <body>
        <?php require('nav.php')?>
        <center>
            <div class="return"></div>
            <form class="form" method="post">
                <div class="form-group">
                    <p>Civilité</p>
                    <div class="row d-flex justify-content-around">
                        <div>
                            <label for="male">Homme</label>
                            <input class="form-control civility" type="radio" id="male" value="M" name="civility" />
                        </div>
                        <div>
                            <label for="female">Femme</label>
                            <input class="form-control civility" type="radio" id="female" value="F" name="civility"/>
                        </div>
                        <div>
                            <label for="other">Autre</label>
                            <input class="form-control civility" type="radio" id="other" value="O" name="civility" />
                        </div>
                    </div>
                </div>      
                <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="firstname">Prénom</label>
                        <input class="form-control firstname" type="text" id="firstname" name="firstname" />
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="lastname">Nom</label>
                        <input class="form-control lastname" type="text" id="lastname" name="lastname" />
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="email">E-mail</label>
                        <input class="form-control email" type="email" id="email" name="email" />
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-3">
                        <label for="address">Adresse</label>
                        <input class="form-control address" type="text" id="address" name="address" />
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="zipcode">Code postal</label>
                        <input class="form-control zip" type="number" id="zip" name="zip" />
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="city">Ville</label>
                        <input class="form-control city" type="text" id="city" name="city" />
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="country">Pays</label>
                        <input class="form-control country" type="text" id="country" name="country" />
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-3">
                        <label for="job">Profession</label>
                        <input class="form-control job" type="text" id="job" name="job" />
                    </div>
                    <div class="form-group col-lg-9">
                        <label for="message">Message</label>
                        <input class="form-control message" type="text" id="message" name="message" />
                    </div>
                </div>
                <input class="btn btn-primary" type="submit" value="Ajouter le contact"/>
            </form>
        </center>

        <table class="table table-striped" style="margin-top:10px">
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Profil</th>
                </tr>    
            </thead>
            <tbody class="liste">

            </tbody>
        </table>

    </body>
</html>
