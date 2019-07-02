<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Fem's paris</title>
    </head>
    <body>
       <?php
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'].PHP_EOL;
        $premier = $_POST['1'].PHP_EOL;
        $deuxieme = $_POST['2'].PHP_EOL;
        $troisieme = $_POST['3'].PHP_EOL;
        $quatrieme = $_POST['4'].PHP_EOL;
        $fin = ' '.PHP_EOL;
        $monfichier = fopen('resultatParis.txt', 'a+');
        fputs($monfichier, $nom.' '.$prenom.'Premier: '.$premier.'Deuxième: '.$deuxieme.'Troisième: '.$troisieme.'Quatrième :'.$quatrieme.$fin);
        fclose($monfichier);
        ?>
    
        <div id="fin">
            <img style="margin-left:400px;" src="momo.jpg"/>
            <h1 style="text-align:center">Merci <?php echo $prenom; ?>, tes paris ont été enregistrés.</h1>
        </div>
    </body> 
</html>

