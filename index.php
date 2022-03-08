<?php include("user.php");?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
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
        <input type="submit" name="submit">
    </form>

    <?php echo"Test de class User ?" ?>
    <?php
        $U1 = new User("Toto","123");
        $U2 = new User("Titi","124");
        $U3 = new User("Tutu","abc");
        $U4 = new User("Tata","gq");
        $U5 = new User("Tete","45");

        $Tableau_User = array();
        array_push($Tableau_User, $U1);
        array_push($Tableau_User, $U2);
        array_push($Tableau_User, $U3);
        array_push($Tableau_User, $U4);
        array_push($Tableau_User, $U5);


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


</body>
</html>


