<?php
error_reporting(E_ALL);
?>
<?php 
function readfiltre($connexion, $table, $items,$condition)
{
  $condition = '';

$sql= " SELECT $items FROM $table ORDER BY $condition";
$util=$connexion->prepare($sql);
$util->execute();
$util->setFetchMode(PDO::FETCH_OBJ);
//var_dump($sql);
return $util->fetchall();





}

function GenerateurCleSteam(){
  $cle = "";
  $NouL = null;
  $alphabet="ABCDEFGHIJKLMNOPQRSTUVWXYZ";


  for ($v=0; $v < 5; $v++) { 
    for ($i=0; $i < 5; $i++) { 
      $NouL = rand(1, 2);
      if ($NouL == 1) {
        $lettre_aleatoire=$alphabet[rand(0,25)];
        $cle = $cle.$lettre_aleatoire;
      }
      else{
        $nombre_aleatoire = rand(1, 9);
        $cle = $cle.$nombre_aleatoire;
      }
    }

    if($v != 4){
      $cle = $cle."-";
    }
  }
  return $cle;
}
function create($connexion, $table, $items=[]) {

  $head = "";
  $temp = "";
  $data = [];
  
  foreach ($items as $key => $item) {
      $head .= $key.",";
      $temp .= "?,";
      $data[] = $item; 
  }
  $head = substr($head, 0, -1);
  $temp = substr($temp, 0, -1);

  
  $sql ="INSERT INTO $table ($head) VALUES ($temp)"; 


  $resultat = $connexion->prepare($sql);
  $resultat->execute($data);
  
  if ($resultat== true)
  {
    $resultat->closeCursor();
    return true;
  }
  $resultat->closeCursor();
  return false;

  
}
function read($connexion, $table, $items,$ref=[1=>1],$autre)
{
  $condition = '';

foreach ($ref as $key => $value) {
      $condition = $key." IN ('".$value."')";
    }
$sql= " SELECT $items FROM $table where $condition";
$util=$connexion->prepare($sql);

$util->execute();
$util->setFetchMode(PDO::FETCH_OBJ);
return $util->fetchall();
}

function update($connexion, $table, $items=[], $ref=[]) {

  $head = "";
  $condition = "";
  $data = [];
  
    foreach ($items as $key => $item) {
      $head .= $key."=". $item."1";
      $data[] = $item; 
  }
  $head = substr($head, 0, -1);

    foreach ($ref as $key => $value) {
      $condition = $key." IN ('".$value."')";

  }
  
  $sql ="UPDATE $table SET $head WHERE $condition"; 
   

  
 
  $resultat = $connexion->prepare($sql);
  $resultat->execute($data);

  if ($resultat== true)
  {
    $resultat->closeCursor();
    return true;
  }
  $resultat->closeCursor();
  return false;
  
} 
function delete($connexion, $table, $ref=[])
{
  $condition = "";

  foreach ($ref as $key => $value) {
    $condition = $key." = ".$value;

  }
$sql = "DELETE FROM $table WHERE $condition";
$resultat = $connexion->prepare($sql);
$resultat->execute();


  $resultat->closeCursor();
  return $resultat;

}
function TestVarPost($data, $options = []) 
{
  if (isset($options['genre']) && $options['genre'] =='int')
  {
    return (int) $_POST[$data];

  }

  if (isset($options['type']) && $options['type'] == 'checkbox' && !isset($_POST[$data]))
  {
    return 'non';
  }
  
  if (!isset($_POST[$data]))
  {
    return false;
  }

  if ($_POST[$data] == '')
  {
    return false;
  }
  
  return $_POST[$data];
}

function message($status, $text, $options = []) {
if (isset($options['no_close']))
{
  echo"<div class='alert alert-".$status."'>
      
      ".$text."
    </div>";
}
else
{
  echo "
    <div class='alert alert-".$status."'>
      <button type='button' class='close' data-dismiss='alert'>&times;</button>
      ".$text."
    </div>";
}}

?>
