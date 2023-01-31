<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<?php
$totalMoroccoPts = 0 ;
$totalMoroccoGan = 0 ;
$totalMoroccoEmp = 0 ;
$totalMoroccoPer = 0 ;
$totalMoroccoGf = 0 ;
$totalMoroccoGc = 0 ;

///////////total morooco goal
if (isset($_POST["a1"])) {
    $totalMoroccoGf += $_POST["a1"] + $_POST["c2"] + $_POST["e2"] ;
///////////morocco GC
$totalMoroccoGc += $_POST["a2"] + $_POST["c1"] + $_POST["e1"];
///////+/-
$MoroccoAverage = $totalMoroccoGf - $totalMoroccoGc;

if ($_POST["a1"] > $_POST["a2"]) {
    $totalMoroccoPts += 3 ;
    $totalMoroccoGan += 1;
}elseif($_POST["a1"] === $_POST["a2"]){
    $totalMoroccoPts += 1 ;
    $totalMoroccoEmp += 1 ;
}else{
    $totalMoroccoPer += 1 ; 
}
if ($_POST["c2"] > $_POST["c1"]) {
    $totalMoroccoPts += 3 ;
    $totalMoroccoGan += 1;
}elseif($_POST["c2"] === $_POST["c1"]){
    $totalMoroccoPts += 1 ;
    $totalMoroccoEmp += 1 ;
}else{
    $totalMoroccoPer += 1 ;  
}
if ($_POST["e2"] > $_POST["e1"]) {
    $totalMoroccoPts += 3 ;
    $totalMoroccoGan += 1;
}elseif($_POST["e2"] === $_POST["e1"]){
    $totalMoroccoPts += 1 ;
    $totalMoroccoEmp += 1 ;
}else{
    $totalMoroccoPer += 1 ;  
}

$Morocco = ["Morocco",$totalMoroccoPts,$totalMoroccoGan,$totalMoroccoEmp,$totalMoroccoPer,$totalMoroccoGf,$totalMoroccoGc,$MoroccoAverage];
///////////////// CROACIA  pts

$totalCroaciaPts = 0 ;
$totalCroaciaGan = 0 ;
$totalCroaciaEmp = 0 ;
$totalCroaciaPer = 0 ;
$totalCroaciaGf = 0 ;
$totalCroaciaGc = 0 ;

///////////total CROACIA goal
$totalCroaciaGf+= $_POST["a2"] + $_POST["d1"] + $_POST["f1"];
///////////croacia gc
$totalCroaciaGc+=$_POST["a1"]+$_POST["d2"]+$_POST["f2"];
///////+/-
$CroaciaAverage = $totalCroaciaGf - $totalCroaciaGc;


if ($_POST["a2"] > $_POST["a1"]) {
    $totalCroaciaPts += 3 ;
    $totalCroaciaGan += 1 ;
}elseif($_POST["a2"] === $_POST["a1"]){
    $totalCroaciaPts += 1 ;
    $totalCroaciaEmp += 1 ;
}else{
    $totalCroaciaPer += 1 ;  
}
if ($_POST["d1"] > $_POST["d2"]) {
    $totalCroaciaPts += 3 ;
    $totalCroaciaGan += 1 ;

}elseif($_POST["d1"] === $_POST["d2"]){
    $totalCroaciaPts += 1 ;
    $totalCroaciaEmp += 1 ;
}else{
    $totalCroaciaPer += 1 ;  
}
if ($_POST["f1"] > $_POST["f2"]) {
    $totalCroaciaPts += 3 ;
    $totalCroaciaGan += 1 ;
}elseif($_POST["f1"] === $_POST["f2"]){
    $totalCroaciaPts += 1 ;
    $totalCroaciaEmp += 1 ;
}else{
    $totalCroaciaPer += 1 ;  
}

$Croacia = ["Croatia",$totalCroaciaPts,$totalCroaciaGan,$totalCroaciaEmp,$totalCroaciaPer,$totalCroaciaGf,$totalCroaciaGc,$CroaciaAverage];

///////////////// BELGICA  pts

$totalBelgicaPts = 0 ;
$totalBelgicaGan = 0 ;
$totalBelgicaEmp = 0 ;
$totalBelgicaPer = 0 ;
$totalBelgicaGf = 0 ;
$totalBelgicaGc = 0 ;

///////////total BELGICA goal
$totalBelgicaGf += $_POST["b1"] +  $_POST["c1"]  + $_POST["f2"];
////////// belgica gc
$totalBelgicaGc +=$_POST["b2"]+$_POST["c2"]+$_POST["f1"];
///////+/-
$BelgicaAverage = $totalBelgicaGf - $totalBelgicaGc;

if ($_POST["b1"] > $_POST["b2"]) {
    $totalBelgicaPts += 3 ;
    $totalBelgicaGan += 1 ;
}elseif($_POST["b1"] === $_POST["b2"]){
    $totalBelgicaPts += 1 ;
    $totalBelgicaEmp += 1 ;
}else{
    $totalBelgicaPer += 1 ;  
}
if ($_POST["c1"] > $_POST["c2"]) {
    $totalBelgicaPts += 3 ;
    $totalBelgicaGan += 1 ;
}elseif($_POST["d1"] === $_POST["d2"]){
    $totalBelgicaPts += 1 ;
    $totalBelgicaEmp += 1 ;
}else{
    $totalBelgicaPer += 1 ;  
}
if ($_POST["f2"] > $_POST["f1"]) {
    $totalBelgicaPts += 3 ;
    $totalBelgicaGan += 1 ;
}elseif($_POST["f2"] === $_POST["f1"]){
    $totalBelgicaPts += 1 ;
    $totalBelgicaEmp += 1 ;
}else{
    $totalBelgicaPer += 1 ;  
}

$Belgica = ["Belgica",$totalBelgicaPts,$totalBelgicaGan,$totalBelgicaEmp,$totalBelgicaPer,$totalBelgicaGf,$totalBelgicaGc,$BelgicaAverage];


///////////// canada pts

$totalCanadaPts = 0 ;
$totalCanadaGan = 0 ;
$totalCanadaEmp = 0 ;
$totalCanadaPer = 0 ;
$totalCanadaGf = 0 ;
$totalCanadaGc = 0 ;

///////////total canada goal
$totalCanadaGf += $_POST["b2"] + $_POST["d2"]+ $_POST["e1"] ;
/////////// canada total gc
$totalCanadaGc +=$_POST["b1"]+ $_POST["d1"]+ $_POST["e2"];
///////+/-
$CanadaAverage = $totalCanadaGf - $totalCanadaGc;

if ($_POST["b2"] > $_POST["b1"]) {
    $totalCanadaPts += 3 ;
    $totalCanadaGan += 1 ;
}elseif($_POST["b2"] === $_POST["b1"]){
    $totalCanadaPts += 1 ;
    $totalCanadaEmp += 1 ;
}else{
    $totalCanadaPer += 1 ;  
}
if ($_POST["d2"] > $_POST["d1"]) {
    $totalCanadaPts += 3 ;
    $totalCanadaGan += 1 ;

}elseif($_POST["d2"] === $_POST["d1"]){
    $totalCanadaPts += 1 ;
    $totalCanadaEmp += 1 ;
}else{
    $totalCanadaPer += 1 ;  
}
if ($_POST["e1"] > $_POST["e2"]) {
    $totalCanadaPts += 3 ;
    $totalCanadaGan += 1 ;

}elseif($_POST["e1"] === $_POST["e2"]){
    $totalCanadaPts += 1 ;
    $totalCanadaEmp += 1 ;
}else{
    $totalCanadaPer += 1 ;  
}

$Canada = ["Canada",$totalCanadaPts,$totalCanadaGan,$totalCanadaEmp,$totalCanadaPer,$totalCanadaGf,$totalCanadaGc,$CanadaAverage ];






////////////////////////sorting 
$teams = array($Canada, $Belgica, $Croacia, $Morocco);

usort($teams, function ($a, $b) {
    return $b[1] <=> $a[1];
});

}

?> 
<body>
    <header>
        <h1>Simulateur coupe du monde</h1>
    </header>
    <div id="parent">
        <div>
            <form action="" method="post">
                <table id="table1">
                    <tr class="row1">
                        <td>23 NOV 11:00 H</td>
                        <td class="dark">FINALIZADO</td>
                        <td>PARTIDO 9</td>
                    </tr>
                    <tr class="row0">
                        <td> <img src="imgs/morocco.png"> MARRUECOS</td>
                        <td class="inpTd"><input type="number" name="a1" min="0" required> <?php if(isset($_POST["a1"])){ echo $_POST["a1"]; }?> -  <?php if(isset($_POST["a2"])){ echo $_POST["a2"];} ?><input type="number" name="a2" min="0" required></td>
                        <td>CROACIA <img src="imgs/croatia.png"></td>
                    </tr>
                    <tr class="row1">
                        <td>23 NOV 20:00 H</td>
                        <td class="dark">FINALIZADO</td>
                        <td>PARTIDO 12</td>
                    </tr>
                    <tr class="row0">
<td> <img src="imgs/belgium.png"> BELGICA</td>
<td class="inpTd"><input type="number" name="b1" min="0"  required>  <?php if(isset($_POST["b1"])){ echo $_POST["b1"];} ?> -  <?php if(isset($_POST["b2"])){ echo $_POST["b2"];} ?><input type="number" name="b2" min="0" required></td>
<td>CANADA <img src="imgs/canada.png"></td>
</tr>
    <tr class="row1">
        <td>27 NOV 14:00 H</td>
        <td class="dark">FINALIZADO</td>
        <td>PARTIDO 26</td>
    </tr>
    <tr class="row0">
        <td> <img src="imgs/belgium.png"> BELGICA</td>
        <td class="inpTd"><input type="number" name="c1" min="0" required> <?php if(isset($_POST["c1"])){ echo $_POST["c1"];} ?> -  <?php if(isset($_POST["c2"])){ echo $_POST["c2"];} ?><input type="number" name="c2" min="0" required></td>
        <td>MARRUECOS <img src="imgs/morocco.png"></td>
    </tr>
    <tr class="row1">
        <td>27 NOV 17:00 H</td>
        <td class="dark">FINALIZADO</td>
        <td>PARTIDO 27</td>
    </tr>
    <tr class="row0">
        <td> <img src="imgs/croatia.png"> CROATIA</td>
        <td class="inpTd"><input type="number" name="d1" min="0" required> <?php if(isset($_POST["d1"])){ echo $_POST["d1"];}?> -  <?php if(isset($_POST["d2"])){ echo $_POST["d2"];} ?><input type="number" name="d2" min="0" required></td>
<td>CANADA <img src="imgs/canada.png"></td>
</tr>
    <tr class="row1">
        <td>01 DIC 16:00 H</td>
        <td class="dark">FINALIZADO</td>
<td>PARTIDO 41</td>
</tr>
<tr class="row0">
    <td> <img src="imgs/croatia.png"> CROATIA</td>
<td class="inpTd"><input type="number" name="f1" min="0" required> <?php if(isset($_POST["f1"])){ echo $_POST["f1"];} ?> -  <?php if(isset($_POST["f2"])){ echo $_POST["f2"];} ?><input type="number" name="f2" min="0" required></td>
<td>BELGICA  <img src="imgs/belgium.png"></td>
</tr>
<tr class="row1">
    <td>01 DIC 16:00 H</td>
<td class="dark">FINALIZADO</td>
<td>PARTIDO 42</td>
</tr>
<tr class="row0">
    <td> <img src="imgs/canada.png"> CANADA</td>
    <td class="inpTd"><input type="number" name="e1" min="0" required> <?php if(isset($_POST["e1"])){ echo $_POST["e1"];} ?> -  <?php if(isset($_POST["e2"])){ echo $_POST["e2"];} ?><input type="number" name="e2" min="0" required></td>
<td>MARRUECOS <img src="imgs/morocco.png"></td>
</tr>
</table>
<div id="btns">
    <button type="submit" class="btn">Simulate</button>
    <!-- <button type="button" class="btnClear">Clear</button> -->
</div>
</form>
</div>
<!-- /////////////////part two -->
<div>
<table id="table2">
    <tr class="ftr">
        <th>#</th>
        <th>SELECCION</th>
        <th>PTS.</th>
        <th>PAR.</th>
        <th>GAN.</th>
    <th>EMP.</th>
    <th>PER.</th>
    <th>G.F</th>
    <th>G.C</th>
    <th>+/-</th>
</tr>
<tr>
    <td>1.</td>
    <td class="test"><?php if(isset($teams[0][0])){ echo $teams[0][0];} ?></td>
    <td><?php if(isset($teams[0][1])){ echo $teams[0][1];} ?></td>
    <td>3</td>
    <td><?php if(isset($teams[0][2])){ echo $teams[0][2];} ?></td>
    <td><?php if(isset($teams[0][3])){ echo $teams[0][3];} ?></td>
    <td><?php if(isset($teams[0][4])){ echo $teams[0][4];} ?></td>
    <td><?php if(isset($teams[0][5])){ echo $teams[0][5];} ?></td>
    <td><?php if(isset($teams[0][6])){ echo $teams[0][6];} ?></td>
    <td><?php if(isset($teams[0][7])){ echo $teams[0][7];} ?></td>
</tr>
<tr>
    <td>2.</td>
    <td><?php if(isset($teams[1][0])){ echo $teams[1][0];} ?></td>
    <td><?php if(isset($teams[1][1])){ echo $teams[1][1];} ?></td>
    <td>3</td>
    <td><?php if(isset($teams[1][2])){ echo $teams[1][2];} ?></td>
    <td><?php if(isset($teams[1][3])){ echo $teams[1][3];} ?></td>
    <td><?php if(isset($teams[1][4])){ echo $teams[1][4];} ?></td>
    <td><?php if(isset($teams[1][5])){ echo $teams[1][5];} ?></td>
    <td><?php if(isset($teams[1][6])){ echo $teams[1][6];} ?></td>
    <td><?php if(isset($teams[1][7])){ echo $teams[1][7];} ?></td>
</tr>
<tr>
    <td>3.</td>
    <td><?php if(isset($teams[2][0])){ echo $teams[2][0];} ?></td>
    <td><?php if(isset($teams[2][1])){ echo $teams[2][1];} ?></td>
    <td>3</td>
    <td><?php if(isset($teams[2][2])){ echo $teams[2][2];} ?></td>
    <td><?php if(isset($teams[2][3])){ echo $teams[2][3];} ?></td>
    <td><?php if(isset($teams[2][4])){ echo $teams[2][4];} ?></td>
    <td><?php if(isset($teams[2][5])){ echo $teams[2][5];} ?></td>
    <td><?php if(isset($teams[2][6])){ echo $teams[2][6];} ?></td>
    <td><?php if(isset($teams[2][7])){ echo $teams[2][7];} ?></td>
</tr>
<tr>
    <td>4.</td>
    <td><?php if(isset($teams[3][0])){ echo $teams[3][0];} ?></td>
    <td><?php if(isset($teams[3][1])){ echo $teams[3][1];} ?></td>
    <td>3</td>
    <td><?php if(isset($teams[3][2])){ echo $teams[3][2];} ?></td>
    <td><?php if(isset($teams[3][3])){ echo $teams[3][3];} ?></td>
    <td><?php if(isset($teams[3][4])){ echo $teams[3][4];} ?></td>
    <td><?php if(isset($teams[3][5])){ echo $teams[3][5];} ?></td>
    <td><?php if(isset($teams[3][6])){ echo $teams[3][6];} ?></td>
    <td><?php if(isset($teams[3][7])){ echo $teams[3][7];} ?></td>
</tr>
</table>
</div>
</div>
<script src="index.js"></script>
</body>
</html>

