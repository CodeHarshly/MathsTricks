
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cstyle.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/linkbutton.css">
    <link rel="stylesheet" href="css/color.css">
</head>
<body >

<?php 
    
	include('templates/icon.php'); 
    if ($activeIndex == 1) { 
        $flag=1;
    }
    else{
        $flag=0;
    }
	include('templates/header.php');
?>

<?php
    
    include('include/config.php');
    $color= array("s0","s1","s2","s3","s4","s5","s6","s7");
    $topic = array("Introduction","BODMAS","BasicTricks","Decimals","FactorsMultiples","LCMHCM","Average","Percentage","Integers","NumberSystem","Simplification","RatioProportion","MixtureAlligation","ProfitLoss","SimpleInterest","CompoundInterest","Partnership","ProblemsonAge","TimeWork","PipesCisterns","SpeedDistanceTime","BoatsStrems");
    $topic1 = array("BasicTricks","Average","Percentage","Simplification","RatioProportion","ProblemsonAge","TimeWork","SpeedDistanceTime");
?>

<div class="content">
    <?php
    if ($activeIndex == 1) { 
        for($k=0;$k<8;$k++){
            $query = mysqli_query($sql, "SELECT id,topic,definition FROM let1 WHERE id='".$topic1[$k]."'");
            if (mysqli_num_rows($query) > 0) {
                while ($cont = mysqli_fetch_assoc($query)) {
                    echo '<div class="rcorners2 '.$color[$k].'" style="font-size:24px;transition: .5s ease;">';
                    echo '<p class="content-position1 f0">'.$cont["topic"].'</p>';
                    echo '<div class="content-position2">';
                    echo '<p>'.$cont["definition"].'</p><br>';
                    echo '<a href="'.$cont["id"].'" class="btn" style="text-decoration: none; font-size:18px; font-weight:bold;">Learn more</a>';
                    echo '</div> </div>';
                
                }
            }
        }
    }echo '</div>';
    ?>

</div>





<input type="checkbox" id="toggle" style="display: none;">
<div id="sidenav" class="sidenav">
    <div class="sidenav-content" style="padding-bottom:10px; margin-left:10px; color:white;">
        <h2>Dark mode &nbsp; &nbsp; 
        <?php
            include('button.php');
        ?>
        </h2>
    </div>

    <?php
        echo '<div class="sidenav-content">';
        $query = mysqli_query($sql, "SELECT id,topic FROM let1 ORDER BY SNo ASC");
        if (mysqli_num_rows($query) > 0) {
            while ($SN = mysqli_fetch_assoc($query)) {
            echo '<a href="'.$SN["id"].'">'.$SN["topic"].'</a>';
            }
        }
        echo '</div>';
    ?>
</div>

</body>
</html>