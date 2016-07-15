<?php
require ('includes/functions.php');

//Si le formulaire a été soumis
if(isset($_POST['register'])) {

    //Si tous les champs ont été remplis
    if(not_empty(['name', 'pseudo', 'email', 'password', 'password_confirm'])){

        $errors = [];  //Tableau contenant l'ensemble des erreurs

        extract($_POST);

        if(mb_strlen($pseudo) < 3){
            $errors[] = "Pseudo trop court (Min 3 caractères)";
        }

        if(! filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors[] = "Adresse email invalide";
        }

        if(mb_strlen($password) < 6){
            $errors[] = "Mot de passe trop court! (Min 6 caractères)";
        } else {
            if($password != $password_confirm){
                $errors[] = "Les deux mots de passe ne concordent pas!";
            }
        }

        if(is_already_in_use('pseudo', $pseudo, 'users')){
            $errors[] = "Pseudo déjà utilisé!";
        }

        if(is_already_in_use('email', $email, 'users')){
        $errors[] = "Adresse email déjà utilisé!";
    }

    if(count($errors) == 0){
        //Envoi mail activation

        //Informer utilisateur
    }

} else {
    $errors[] = "Il faut remplir tous les champs!";
}

?>

<?php require('views/register.view.php'); ?>