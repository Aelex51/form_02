<?php
    if(!empty($_POST)){
        $data=array_map('trim', $_POST);
        $errors = [];
        $nom = htmlentities($data["nom"]);
        $prenom = htmlentities($data["prenom"]);
        $email = htmlentities($data["email"]);
        $phone = htmlentities($data["phone"]);
        $message = htmlentities($data["message"]);
        $getSujet = $_POST['sujets'];
      }

      if (empty($nom)){
        $errors[] = 'le message est obligatoire <br />';
      }
  
      if (empty($prenom)){
        $errors[] = 'le prenom est obligatoire <br />';
      }    
      
      if (empty($email)){
        $errors[] = "l'email est obligatoire <br />";
      }    
      
      if (empty($phone)){
        $errors[] = 'le téléphone est obligatoire <br />';
      }    
      
      if (empty($message)){
        $errors[] = 'le message est obligatoire <br />';
      }
      
  
      if (!filter_var('bob@example.com', FILTER_VALIDATE_EMAIL)){
        $errors["email"] = "votre email est au mauvais format";
      } 
      var_dump($errors);


        if (!empty ($errors)){
        foreach($errors as $error){
        echo $error;
        }
        }
    

    echo '<h3>Informations récupérées en utilisant POST</h3>';
    echo 'Merci'." ". $prenom ." ". $nom . " ". 'de nous avoir contacté à propos de votre'." ". $getSujet . '<br />';
    echo 'Un de nos conseillers vous contactera soit à l’adresse' . " ". $email . " " .  'ou par téléphone au' . " " . $phone . " " . 'dans les plus brefs délais pour traiter votre demande :'. '<br />';
    echo $message;




?>