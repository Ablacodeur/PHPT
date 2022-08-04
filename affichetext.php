<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
    </head>
    <body>
        <h1>Ma page web</h1>
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>
        
        
        <?php
           
            $fullname = 'Mathieu Nebra';
            echo 'Bonjour ' . $fullname . ' et bienvenue sur le site !<br /> '; // OK
            
            $number = 10;
            $result = ($number + 5) * $number; // $result prend la valeur 150
           
            echo $result; 

            $isEnabled = true;

            if ($isEnabled == true) {
                echo "Vous êtes autorisé(e) à accéder au site ✅ <br /> ";
            }
            else {
                echo "Accès refusé ❌ ";
            }
        ?>
        <?php
        $grade = 10;

        switch ($grade) // on indique sur quelle variable on travaille
        { 
            case 0: // dans le cas où $grade vaut 0
                echo "Tu es vraiment un gros nul !!!";
            break;
            
            case 5: // dans le cas où $grade vaut 5
                echo "Tu es très mauvais";
            break;
            
            case 7: // dans le cas où $grade vaut 7
                echo "Tu es mauvais";
            break;
            
            case 10: // etc. etc.
                echo "Tu as pile poil la moyenne, c'est un peu juste… <br /> <br />";
            break;
            
            case 12:
                echo "Tu es assez bon";
            break;
            
            case 16:
                echo "Tu te débrouilles très bien !";
            break;
            
            case 20:
                echo "Excellent travail, c'est parfait !";
            break;
            
            default:
                echo "Désolé, je n'ai pas de message à afficher pour cette note";
        }
       
        ?>

            <?php
                $lines = 1;

                while ($lines <= 100) {
                    echo 'she got her own thing that\'s why i love her, she\'s my miss independente.<br />';
                    $lines++; // $lines = $lines + 1
                }
            ?>

            <?php
            $lines = 1;

            while ($lines <= 10)
            {
                echo 'Ceci est la ligne n°' . $lines . '<br />';
                $lines++;
            }
            ?>

            <?php

            $mickael = ['Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'S3cr3t', 34];
            $mathieu = ['Mathieu Nebra', 'mathieu.nebra@exemple.com', 'devine', 33];
            $laurene = ['Laurène Castor', 'laurene.castor@exemple.com', 'P4ssw0rD', 28];

            $users = [$mickael, $mathieu, $laurene];

            echo $users[1][1] ; // "mathieu.nebra@exemple.com"



            $lines = 3; // nombre d'utilisateurs dans le tableau
            $counter = 0;

            while ($counter < $lines) {
                echo $users[$counter][0] . ' ' . $users[$counter][1] . '<br />';
                $counter++; // Ne surtout pas oublier la condition de sortie !
            }

            for ($lines = 0; $lines <= 2; $lines++)
{
             echo $users[$lines][0] . ' ' . $users[$lines][1] . '<br />';
}

            ?>

            <?php

            $recipes = ['Cassoulet', 'Couscous', 'Escalope Milanaise', 'Salade César',];

            // La fonction array permet aussi de créer un array
            $recipes = array('Cassoulet', 'Couscous', 'Escalope Milanaise');
            ?>
            <?php
            echo $recipes[2]; // Cela affichera : Couscous
            ?>

            <?php
            // Une bien meilleure façon de stocker une recette !
            $recipe = [
                'title' => 'Cassoulet',
                'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
                'author' => 'john.doe@exemple.com',
                'enabled' => true,
            ];

            ?>
            <?php
            echo $recipe['recipe'];
            ?>


           
            

           

        
        
    </body>
</html>