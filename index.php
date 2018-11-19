<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/materialize.min.css">
        <title>Table multiplication</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h1 class="header">Tables de Multiplication</h1>
                    <h4 class="light">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Illum doloribus quidem dicta?
                    </h4>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!-- Exercice 1 -->
                <div class="col s6">
                    <div class="card light-blue darken-4">
                        <div class="card-content white-text">
<?php                       $num = rand(1, 10); ?>
                            <span class="card-title">Table des <?php echo $num ?></span>                            
                            <ul class="collection">
<?php                           for($i = 1; $i <= 10; $i++){
                                    $total = $num * $i; ?>
                                    <li class="collection-item blue-text darken-4"><?php echo $i ?> x <?php echo $num ?> = <?php echo $total ?></li>
<?php                           } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Exercice 2 -->
                <div class="col s6">
                    <form method="post" id="form1">
                        <div class="input-field col s12">
                            <select name="table">
<?php                           for($i = 1; $i <= 10; $i++){ ?>
                                    <option value="<?php echo $i ?>">Table de <?php echo $i ?></option>
<?php                           } ?>
                            </select>
                        </div>
                        <button class="waves-effect waves-light btn" name="submitformselect" type="submit">Envoyer</button>   
                    </form>

<?php               if(isset($_POST['submitformselect'])){ ?>
                        <ul class="tableau1">
<?php                       $num = $_POST['table'];
                            for($i = 1; $i <= 10; $i++){
                                $total = $num * $i; ?>
                                <li><?php echo $i ?> x <?php echo $num ?> = <?php echo $total ?></li>
<?php                       } ?>
                        </ul> 
<?php               } ?>
                </div>            
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!-- Exercice 3 -->
                <div class="col s6">
                    <form method="post" action="index.php">
                        <div class="row">
<?php                       for($i = 1; $i <= 10; $i++){ ?>
                                <div class="col s3">
                                    <label for="check-<?php echo $i ?>">
                                        <input class="filled-in" id="check-<?php echo $i ?>" name="checkTable[]" type="checkbox" value="<?php echo $i ?>">
                                        <span>Table de <?php echo $i ?></span> 
                                    </label>
                                </div>
<?php                       } ?>
                        </div>
                        <button name="submitExo3" type="submit">Envoyer</button>
                    </form>

<?php               if(isset($_POST['submitExo3'])){
                        foreach($_POST['checkTable'] as $checkbox){
                            $check = $checkbox; ?>      
                            <ul class="tableau1">
<?php                           for($i = 1; $i <= 10; $i++){
                                    $total = $check * $i; ?>
                                    <li><?php echo $i ?> x <?php echo $check ?> = <?php echo $total ?></li>
<?php                           } ?>
                            </ul>
<?php                   }
                    } ?>
                </div>

                <!-- Exercice 4 -->
                <div class="col s6">

        <form method="post" id="form2">
            <select name="tablemulti">
                <?php   for($i = 1; $i <= 10; $i++){ ?>
                <option value="<?php echo $i ?>">Table de
                    <?php echo $i ?>
                </option>
                <?php   } ?>
            </select>
            <input name="submitform" type="submit" value="Choisir">  
        </form>

<?php   if(isset($_POST['submitform']) || isset($_POST['checknum'])){
            if(isset($_POST['submitform'])){
                $rand = rand(1,10);
                $table = intval($_POST['tablemulti']);
            } elseif(isset($_POST['checknum'])){
                $rand = $_POST['numrandom'];
                $table = $_POST['numchoisi'];
            } 
            
            $calcul = $rand * $table;

            if (isset($_POST['checknum'])){
                $numreponse = intval($_POST['numreponse']);
                if($numreponse == $calcul){
                    echo 'Bravo';
                } else {
                    echo 'Gros naze !';
                }
            } ?>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">            
                <p> Combien font: <?php echo $rand ?> x <?php echo $table ?> ? </p>

                <input type="hidden" name="numrandom" value="<?php echo $rand ?>">
                <input type="hidden" name="numchoisi" value="<?php echo $table ?>">
                <input type="text" name="numreponse">
                <input type="submit" name="checknum" value="Réponse">

            </form>
<?php   } ?>           
        </div>
    </div>

        
    </body>
    <footer>

    </footer>

        <script src="./js/materialize.min.js"></script>
        <script src="./js/script.js"></script>
</html>