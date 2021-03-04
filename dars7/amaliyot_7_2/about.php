<?php
    session_start(); 
    if ($_SESSION['til'] =="")
        $_SESSION['til'] = "uz";
    if (isset($_GET['til'])) {
        $_SESSION['til'] = $_GET['til'];
    }
    include('lang/'.$_SESSION['til'].".php");
    include("head.php");
    include("title.php");
    include("menu.php");
?>

<div id="templatemo_featured_content_wrapper">
	<div id="templatemo_featured_content">
    
    	<div class="cleaner_h40"></div>
    	<h1><?=$about['h1']?></h1>
		<p><?=$about['h1_p']?></p>
    
  </div>
</div>

<div id="templatemo_content_wrapper">
	
    <div id="content">
    	
        <h2><?=$about['h2'];?></h2>
       
        <p><em><?=$about["h2_p1"]?></em></p>
        <p><?=$about["h2_p2"];?>.</p>
        
		<div class="image_wrapper fr_img"><img src="<?=$about['image'];?>" alt="<?=$about['img_alt'];?>" /></div>
		
        <h6><?=$about["h6"];?></h6>
        <p><?=$about["h6_p"];?></p>
        
	</div>
    
    <div id="sidebar">
    
    	<h2><?=$about["h2_2"];?></h2>
            
            <blockquote>
            <p><?=$about["h2_2_p"];?></p>
            
            <cite><?=$about["cite"];?></cite>
            </blockquote>
    
    </div>
	<div class="cleaner"></div>
</div>

<?php
    include("footer.php");

?>

    





