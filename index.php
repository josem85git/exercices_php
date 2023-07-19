<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo 'Hello World     <br>    ';
   
    ?>
    <br>
    <?php 
     // partie1 
     echo"<br>";

    echo "ex1";
    echo"<br>";

    $ntm = 18888; 
    echo $ntm;
    echo"<br>";
    $variable_sans_valeur;
    $variable_sans_valeur = 3;
    $variable_sans_valeur = 9;
    $variable_sans_valeur = "chaine de caractere";


    echo $variable_sans_valeur;
    echo"<br>";

?>

<br>

<?php
    echo "ex2";
    echo"<br>";

    $lastname = "nom";
    $firstname ="prenom";
    $age = 32;

echo"<br>";
echo $lastname  . "\n " . $firstname . "\n " . $age . "\n";
echo"<br>";
echo $lastname  . " " . $firstname . " " . $age . "";

echo"<br>";


    ?>
<br>

    <?php
    echo"ex3";
    echo"<br>";

    $km = 1; 
    echo $km . "<br>";
    
    $km = 3;
    echo $km;
    echo"<br>";

    $km = 125;
    echo $km;
    ?>
    <br>
    
    <?php
        echo"<br>";

    echo "ex4";
    echo"<br>";
    $string = "string";
    $type_int = 300;
    $type_float = 999.999;
    $type_bolean = true;
    echo $string ."\n" ;
    echo"<br>";
    echo $type_int;
    echo"<br>";
    echo $type_float;
    echo"<br>";
    echo $type_bolean;
    echo"<br>";
    var_dump($type_bolean);

    ?>
<br>
    <!-- ex5 --> 
    <?php
    echo"<br>";
    echo "ex5";
    echo"<br>";

    $type_int = NULL;
    echo $type_int;
    var_dump($type_int);
   $type_int = 323;
echo $type_int ;
?>
<br>
<!-- ex6 --> 
<?php
echo"<br>";
echo "ex6";
echo"<br>";
$name = "Jose";
echo"<br>";
echo "Bonjour $name , comment vas-tu?";
?>
<br>
<!-- ex7 -->
<?php
echo "ex7";
echo"<br>";
$lastname = "jean";
$firstname ="KL";
$age = 32;
echo "Bonjour {$lastname}  $firstname, tu as {$age} ans";

?>
<br>
<br>

<!-- ex8 --> 
<?php
echo "ex8" . '<br>';

$var1 = 3+4;
$var2 = 5*20;
$var3 = 45/5;
echo $var1;
echo '<br>';
echo $var2 . '<br>';
echo $var3;
?>
<br><br>
<?php
echo "partie 2: Les conditions ";
echo "<br>";
echo "ex1";
echo "<br>";
$age = 16;
if ($age >= 18) {
    echo "Vous êtes majeur";
} else {
    echo "Vous êtes mineur";
}
    

echo "<br>";
echo "ex2";
echo "<br>";
$isEasy = false;
if ($isEasy == true){
    echo "C'est facile";
}    
else {
    echo "C'est difficile !!";
}
    
echo "<br>";
if ($isEasy == true){
    echo "C'est ausi facile";
}
if ($isEasy == false) {
    echo "C'est aussi difficile";
} 
echo "<br><br>";
echo "ex3";
echo "<br>";
$age = 55;
$gender = "Femme";
if(!$gender AND $age >= 18){
    echo "Vous êtes un homme et vous êtes majeur";
} elseif (!$gender AND $age < 18) {
    echo"Vous êtes un homme et vous êtes mineur";
} elseif ($gender AND $age >= 18) {
    echo "Vous êtes une femme et vous êtes majeure";
} else {
    echo "Vous êtes une femme et vous êtes mineur";
}
echo "<br><br>";
echo "ex4";
echo "<br>";
$magnitude = 9;
switch ($magnitude){
    case 1:
        echo 'Micro-séisme impossible à ressentir';
        break;
    case 2:
        echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres';
        break;
    case 3:
        echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti';
        break;
    case 4:
        echo '	Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats';
        break;
    case 5:
        echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes';
        break;
    case 6:  
        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre" ;
        break;
    case 7:  
        echo "	Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance" ;
        break;
    case 8:  
        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres" ;
        break;
    case 9: 
        echo "Séisme capable de tout détruire sur une très vaste zone"  ;
        break;
    default:
        echo 'pas de seisme';
}

echo "<br><br>";
echo "ex5";
echo "<br>";
$genderx = "femme"; // initialiser la variable
if ($genderx != 'Homme') {
    echo 'C\'est une développeuse !!!';
} else {
    echo 'C\'est un développeur !!!';
}

echo "<br><br>";
echo "ex6";
echo "<br>";
$agex = 85; // besoin déclarer variable
if ($agex >= 18) {
    echo 'Tu es majeur';
} else {
    echo 'Tu n\'es pas majeur';
}

echo "<br><br>";
echo "ex7";
echo "<br>";
$isOk = true;
if ($isOk == false) {
    echo 'c\'est pas bon !!!';
} else {
    echo 'c\'est ok !!';
}

echo "<br><br>";
echo "ex8";
echo "<br>";
if ($isOk) {
    echo "c'est ok !!";
} else {
    echo "c'est pas bon !!!";
}

echo "<br><br>";
echo "Partie 3: Les boucles";
echo "<br>";
echo "ex1";
echo "<br>";
$n_var = 0;
while($n_var < 10){
    echo $n_var . '<br>';
    $n_var++;
}
echo "<br>";

echo "ex2";
echo "<br>";

$ex2_var1 = 0;
$ex2_var2 = 99;
echo $ex2_var1;
echo "<br>";
echo $ex2_var2;
echo "<br><br>";
do{
    echo "premiere variable: " . $ex2_var1;
    echo '<br>';
    echo  $ex2_var1 * $ex2_var2;
    echo '<br>';
    
    $ex2_var1++;
    echo '<br>';
} while($ex2_var1 <= 20);

echo "<br><br>";

echo "ex3";
echo "<br>";
$ex3_var1 = 100;
echo $ex3_var1;
echo "<br>";

$ex3_var2 = rand(1, 100);
echo $ex3_var2;
echo "<br>";
echo "<br>";

do{
    echo "variable 1: " . $ex3_var1;
    echo '<br>';
    echo  $ex3_var1 * $ex3_var2;
    $ex3_var1--;
    echo '<br>';
} while($ex3_var1 > 10);
echo "<br><br>";
echo "<br><br>";

echo "ex4";
echo "<br>";
$var_ex4 = 1;
// echo $var_ex4;
echo "<br>";
do {
    echo $var_ex4;
    $var_ex4 += $var_ex4 / 2;
    // $var_ex4 = $var_ex4 + ($var_ex4 / 2);
    echo "<br>";
} while ($var_ex4 < 10);
echo "<br><br>";

echo "ex5";
echo "<br>";

for ( $var_ex5 =1; $var_ex5 <= 15; $var_ex5++) {
    echo $var_ex5 . " " . "On y arrive presque";
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "ex6";
echo "<br>";
for ( $var_ex6 =20; $var_ex6 > 0; $var_ex6--) {
    echo $var_ex6 . " " . "C'est preque bon";
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "ex7";
echo "<br>";
for ( $var_ex7 =1; $var_ex7 <= 100; $var_ex7 += 15) {
    echo $var_ex7 . " " . "On tient le bon bout";
    echo "<br>";
}
echo "<br>";
echo "ex8";
echo "<br>";
for ( $var_ex8 =200; $var_ex8 > 0; $var_ex8 -= 12) {
    echo $var_ex8 . " " . "Enfin !!!!";
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "Partie 4 :Les fontions";
echo "<br>";
echo "ex1";
echo "<br>";
function returnTrue () {
    return true;
}
returnTrue();
var_dump(returnTrue()) ;
echo "<br>";

echo "ex2";
echo "<br>";
$chaine1 = "chaine de caracteres";
function chaineCaractere($chaine1) {
    return $chaine1;
}
var_dump(chaineCaractere($chaine1)) ;

echo "<br>";

echo "ex3";
echo "<br>";
$string1 = "nom";
$string2 = "jose";
function twoStrings($string1, $string2) {
    return $string1 . " " . $string2;
}
echo twoStrings($string1, $string2);

echo "<br>";
echo "ex4";
echo "<br>";
$param01 = 3;
$param02 = 58;
function twoNums($param01, $param02) {
    if ($param01 > $param02) {
        return "Le premier nombre est plus grand";
    } else if ($param01 < $param02) {
        return "Le premier nombre est plus petit";
    } else {
        return "Les deux nombres sont identiques";
    }
}
echo twoNums($param01, $param02);

echo "<br>";
echo "ex5";
echo "<br>";
$param1 = 3;
$param2 = "parametre2";
function twoDifParam($param1, $param2) {
    return $param1 . "-" . $param2;
}
echo twoDifParam($param1, $param2);

echo "<br>";
echo "ex6";
echo "<br>";
function threeParam($ex6_nom, $ex6_prenom, $ex6_age) {
    return "Bonjour " . $ex6_nom . " " . $ex6_prenom . ", tu as " . $ex6_age . " ans.";
}
echo threeParam("montgaillard", "bob", 37);


echo "<br>";
echo "ex7";
echo "<br>";
$age_pers = 17;
$genre_pers = "femme";
function age_genre($age_pers, $genre_pers) {
    if ($age_pers>= 18 && $genre_pers =='homme'){
        echo "Vous êtes un homme et vous êtes majeur";
    } else if ($age_pers<18 && $genre_pers =='homme') {
        echo "Vous êtes un homme et vous êtes mineur";
    } else if ($age_pers >= 18 && $genre_pers == 'femme') {
        echo "Vous êtes une femme et vous êtes majeure";
    } else {
        echo "Vous êtes une femme et vous êtes mineure";
    }
}

age_genre($age_pers, $genre_pers);
echo "<br><br>";

echo "ex8";
echo "<br>";
$nombre1 = 0;
$nombre2 = 1;
$nombre3 = 2;
function sommeTroisNombres($nombre1, $nombre2, $nombre3) {
return $nombre1 + $nombre2 + $nombre3;
}
echo sommeTroisNombres(5, 5, 5);

echo "<br><br>";
echo "Partie 5 : Les Tableaux";
echo "<br><br>";

echo "ex1";
$months = array("janvier",
"février",
"mars",
"avril",
"mai",
"juin",
"juillet",
"aout",
"septembre",
"octobre",
"novembre",
"décembre");
echo "\n\n";

var_dump($months);
print_r($months);
echo implode("--", $months);
echo "<br><br>";

echo "ex2";
echo "<br>";
echo $months[2];
echo "<br><br>";

echo "ex3";
echo "<br>";
echo $months[5];
echo "<br><br>";

echo "ex4";
echo "<br>";
echo $months[7] = "août";
echo "<br><br>";

echo "ex5";
echo "<br>";
$hdf = [2 => 'Aisne', 59 => 'Nord' ,  60  => 'Oise', 62 => 'Pas-de-Calais' ,  80 => 'Somme' ];
print_r($hdf);
echo "<br>";
echo implode(",", $hdf);
echo "<br><br>";

echo "ex6";
echo "<br>";
// count($hdf);
print_r($hdf[59]);
echo "<br><br>";

echo "ex7";
echo "<br>";
$hdf += [51 => 'Champagne'];
print_r($hdf);
echo "<br>";
echo implode(",", $hdf);
echo "<br><br>";

echo "ex8";
echo "<br>";
 //On récupère la taille du tableau et on la stocke dans $taille
 $taille = count($months);
 //On peut soit parcourir le tableau et afficher les valeurs une à une
 for($i = 0; $i < $taille; $i++){
    echo $months[$i]. ', ';
}

echo '<br><br>';
echo "ex9";
echo "<br>";
//On utilise une boucle foreach ($tableau as $valeurs)

foreach($hdf as $clef => $valeur) {
    echo $valeur . ',';
}

echo '<br><br>';
echo "ex10";
echo "<br>";
foreach($hdf as $clef => $valeur) {
    echo "Le département $valeur a le numéro $" . ', ';
}

echo '<br><br>';
echo "Partie 6 : Les paramètres d'URL";
echo "<br>";

echo "ex1";
echo "<br>";

echo $_GET['lastname'];
echo $_GET['firstname'];
echo '<a href="index.php?lastname=Nemare&firstname=Jean">lien</a>';
echo '<p>lastname=Nemare&firstname=Jean</p>';
echo "<br>";
if ($_GET['lastname'] & $_GET['firstname']) {
    echo 'existe';
} else {
    echo '$age n\'existe pas';
}


echo "ex2";
echo "<br>";
echo '<a href="index.php?lastname=Nemare&firstname=Jean">lien</a>';
echo "<br>";
if ($_GET['lastname'] & $_GET['firstname']) {
    echo 'existe';
} else {
    echo '$age n\'existe pas';
}
  ?>

<form action="user.php" method="GET">
        Nom: <input type="text" name="nom"><br>
        Prenom: <input type="text" name="prenom"><br>
        <input type="submit">
</form>
<form action="user.php" method="POST">
        Nom: <input type="text" name="nom"><br>
        Prenom: <input type="text" name="prenom"><br>
        <input type="submit">
</form>
<br><br><br>
<form action="index.php" method="post">
    <label for="civilite">Civilité:</label>
    <select name="civilite" id="civilite">
        <option value="Mr">Mr</option>
        <option value="Mme">Mme</option>
    </select><br><br>
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom"><br><br>
    <label for="prenom">Prénom:</label>
    <input type="text" id="prenom" name="prenom"><br><br>
    <input type="submit" value="Submit">
</form> 

<?php

if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['civilite'])){
    echo 'nom = ' . $_POST['nom'] . ', prénom = ' . $_POST['prenom'] . ', civilite = ' . $_POST['civilite'];
}
?>


</body>
</html>