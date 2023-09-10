<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>

<?php
    $activeIndex = isset($_GET['active']) ? $_GET['active'] : 1;

    $icons = array(
        array('fa fa-bars', 'Menu'),
        array('fa fa-home', 'Home'),
        array('fa fa-search', 'Search'),
        array('fa fa-book', 'Book'),
        array('fa fa-user', 'User')
    );
?>

<input type="checkbox" id="sidenav-toggle" />
    <div class="icon-bar">
        <label for="sidenav-toggle">
            <i class="fa fa-bars" style="cursor:pointer;"></i>
        </label>

        <?php
        foreach ($icons as $index => $icon) {
            $class = ($index == $activeIndex) ? 'active' : '';
            $iconClass = $icon[0];
            $label = $icon[1];
            if ($index != 0) {
                if ($index == 1) {
                    echo '<a href="web1.php" class="' . $class . '"  ><i class="' . $iconClass . '" ></i></a>';
                } 
                else {
                    echo '<a href="?active=' . $index . '"  class="' . $class . ' " ><i class="' . $iconClass . '" ></i></a>';
                }
            }
        }
        ?>
    </div>
</body>
</html>