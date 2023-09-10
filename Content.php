
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
<body>

<?php
    $flag=0;
    include('templates/header.php'); 
    include('templates/icon.php'); 
    include('include/config.php');
    if (isset($_GET['value'])) {
        $Value = $_GET['value'];
        if($activeIndex==1)
        {   
            $query = mysqli_query($sql, "SELECT id,topic,content FROM let1 WHERE id='".$Value."'");
            while ($row = mysqli_fetch_assoc($query)) {
                $top = $row["topic"];
                $cont= $row["content"];
            }
            echo '<div class="content">';
            echo '<div class="rcorners3 c1">';
            echo '<h2 class="content-position3">'.$top.'</h2>';
            echo '</div>';
            echo '<p class="content-position4 f0"  style="font-size: 20px;">'.$cont.'</p>';
            echo '</div>';
        }
    }
?>

<input type="checkbox" id="toggle" style="display: none;">
    <div id="sidenav" class="sidenav">
        <div class="sidenav-content" style="padding-bottom:10px; margin-left:10px; color:white;">
            <h2>Dark mode &nbsp; &nbsp; 
            <?php
                include('button.php');
            ?>
            </h2>
        </div>
    </div>
</body>
</html>