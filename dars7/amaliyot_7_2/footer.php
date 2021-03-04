<?php session_start(); 
if ($_SESSION['til'] =="")
    $_SESSION['til'] = "uz";
if (isset($_GET['til'])) {
    $_SESSION['til'] = $_GET['til'];
}
include('lang/'.$_SESSION['til'].".php");
?>
<div id="templatemo_footer_wrapper">

	<div id="templatemo_footer">
    
        <div class="col_w270">
        	<h4><?=$partner_text['about_us'];?></h4>
            <p><?=$partner_text['about_text'];?></p>
        </div>
    	
        <div class="col_w270">
		
        	<h4><?=$pages['name']?></h4>
        	<ul>
            <?php
                foreach($menus as $menu) {
                    echo "<li><a href='{$menu['site']}'>".$menu['name']."";
                }
            ?>
                <!-- <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="contact.php" class="last">Contact</a></li> -->
            </ul>  
 
        </div>
        
        <div class="col_w270 col_w270_last">
		
        	<h4><?=$partner_text['name'];?></h4>
        	<ul>
                <?php
                    foreach ($partners as $partner) {
                        echo "<li><a href='#'>".$partner['name']."</a></li>";
                    }
                ?>
                <!-- <li><a href="#">Free CSS Templates</a></li>
                <li><a href="#">Web Design Resources</a></li>
            	<li><a href="#">Free Flash Templates</a></li>
                <li><a href="#">Website Templates</a></li>
                <li><a href="#">Free Web Gallery</a></li> -->
            </ul>    
 
        </div>
        
        <div class="cleaner"></div>
    </div>

</div>

<div id="templatemo_copyright_wrapper">
	<div id="templatemo_copyright">
    
        <?=$copy_right['name'];?>
    
    </div>
</div>

</body>
</html>