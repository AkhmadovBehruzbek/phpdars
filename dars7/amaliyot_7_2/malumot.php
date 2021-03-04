
<div id="templatemo_content_wrapper">
	
    <div id="content_wo_sb">
    	
        <div class="col_w270">
       
            <h2><?=$business['name'];?></h2>
            <p><em><?=$business['text'];?></em></p>
            <p><?=$business['text2'];?>.</p>
            
            <ul class="templatemo_list">
            <?php
                foreach($ideas as $idea) {
                    echo "<li>{$idea['name']}</li>";
                }
            ?>                     
            </ul>
			
            <div class="cleaner"></div>
            <div class="button"><a href="services.php"><?=$btn['name'];?></a></div> 
            
        </div>
        <div class="col_w270">
        	<h2><?=$marketing['name'];?></h2>
                <div class="image_wrapper"><img width="240" height="110" src="<?=$marketing['image']?>" alt="Image 01" /></div>
                <p><em><?=$marketing['text1'];?></em></p>
                <p><?=$marketing['text2'];?> </p>
                <div class="button"><a href="about.php"><?=$btn['name'];?></a></div>
            
        </div>
        <div class="col_w270 col_w270_last">
        
            <h2><?=$update['name']?></h2>
            <?php
            foreach($updates as $update) {
                echo "
                <div class='sb_news_box'>
                <h6><a href='#'>{$update['name']}</a></h6>
                {$update['text']}
                <div class='cleaner'></div>
                </div>
                ";
            }
            
            ?>
            
            <div class="button"><a href="#"><?=$btn['name']?></a></div>
        
        </div>
        
        <div class="cleaner"></div>
        
    </div>

</div>