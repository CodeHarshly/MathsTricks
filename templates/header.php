<!DOCTYPE html>
<html>
<head>
    
    <script>
        window.addEventListener("scroll", function () {
            const bannerOuter = document.querySelector(".banner-outer");
            const h1Element = document.querySelector("h1");
            const h2Element = document.querySelector("h2");
            const scrollPos = window.scrollY;
            const scrollThreshold = 100;

            if (scrollPos > scrollThreshold) {
                h1Element.classList.add("hide");
                h2Element.classList.remove("hide");
                bannerOuter.style.setProperty("--banner-index", "999"); /* Change the width to 1200px */
                bannerOuter.style.setProperty("--banner-radius", "0px");
	    } else {
                h1Element.classList.remove("hide");
                h2Element.classList.add("hide");
                bannerOuter.style.setProperty("--banner-index", "995"); /* Revert the width to 900px */
                bannerOuter.style.setProperty("--banner-radius", "25px");
	    }
        });
    </script>
</head>
<body>
    <?php
    if($flag==1){
        echo'<div class="banner-outer">
        <h1 class="content-position1 hd1">Welcome to</h1>
        <div class="banner-inner">
            <h2 class="content-position1 hd2">Math Tricks</h2>
        </div>
        <h1 class="content-position2 c2">Not sure where to begin? Click on the <u>3 bars</u> in the below menu, then go to Introduction.</h1>
    </div>';
    }
    else {
        echo '<div class="header c3 hd2">
        <h2 class="content-position1">Learn Easy Tricks</h2>
        </div>';
    }
    
    ?>
</body>
</html>
