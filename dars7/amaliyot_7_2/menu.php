
<div id="header_right">
    
    <div id="templatemo_menu">
        
        <ul>
        <?php
            foreach($menus as $menu) {
                echo "<li><a href='{$menu['site']}'>".$menu['name']."</a>";
            }
        ?>
            <!-- <li><a href="index.php" class="current">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li class="last"><a href="contact.php">Contact</a></li> -->
        </ul>    	
    
    </div> <!-- end of templatemo_menu -->
    
</div>

<div class="cleaner"></div>
</div>
