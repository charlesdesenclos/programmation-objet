<?php include("user.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Programmation objet</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
 
    <form method="POST">
        <label><b>Nom :</b></label>
        <input type="text" placeholder="Entrez votre nom" name="nom" required>
        <label><b>Password :</b></label>
        <input type="password" placeholder="Entrez votre mot de passe" name="mdp" required>
        <input type="submit" name="submit" value="Connection">
    </form>

    

    <?php echo"Test de class User ?" ?>
    <?php
    $Tableau_User = array();
    try {
        $bdd = new PDO("mysql:host =192.168.65.202;dbname=User;charset=utf8", "root", "root");
        $req = "SELECT * FROM User";
        $reponses = $bdd->query($req);
        while ($donnees = $reponses->fetch())
    {
        echo '<p>' .$donnees['id']  . "  ". $donnees['login'] . "  ". $donnees['mdp'] . '</p>';
        array_push($Tableau_User,new User($donnees['id'],$donnees['login'],$donnees['mdp']));
        
    } 
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }
       


        $mdp = "";




        if(!empty($_POST['nom']) && !empty($_POST['mdp']) )
        {
            $trouve = false;
            foreach ($Tableau_User as  $TheUser) {
                //si le user du formulaire = le nom d'un user dans la liste alors on vérifie mdp
                if($TheUser->getNom()==$_POST['nom']){
                    $trouve = true;
                    //on va vérifier le mdp du formulaire avec celui de user trouvé
                    if($TheUser->SeConnecter($_POST['mdp'])){
                        ?>
                        <h2>Vous etes connecter</h2>
                        <?php
                    }else{
                        ?>
                        <h2>Mauvais Mot de passe</h2>
                        <?php
                    }
                }
            }
            if(!$trouve){
                echo "User Inconnu vérifier othographe";
            }
        }
    ?>
    <hr>

    



</body>
</html>


