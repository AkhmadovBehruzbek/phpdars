
<div id="templatemo_featured_content_wrapper">
	<div id="templatemo_featured_content">
    
		<div id="featured">
			<ul class="ui-tabs-nav">
			<?php
				$i=0;
				foreach($slider as $s) {
					$i++;
					echo "<li class='ui-tabs-nav-item' id='nav-fragment-{$i}'><a href='#fragment-{$i}'><img src='{$s['image']}' alt='{$s['img_alt']}'/><span>{$s['name']}</span></a></li>";
				}
			?>
			<!-- <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-1"><a href="#fragment-1"><img src="images/content_slider/image1-small.jpg" alt="Image 1" /><span>Lorem ipsum dolor sit amet, consectetur adipiscing</span></a></li>
				<li class="ui-tabs-nav-item" id="nav-fragment-2"><a href="#fragment-2"><img src="images/content_slider/image2-small.jpg" alt="Image 2" /><span> Vestibulum ante ipsum primis in faucibus orci luctus et</span></a></li>
				<li class="ui-tabs-nav-item" id="nav-fragment-3"><a href="#fragment-3"><img src="images/content_slider/image3-small.jpg" alt="Image 3" /><span>Nullam commodo, lorem id varius hendrerit</span></a></li>
				<li class="ui-tabs-nav-item" id="nav-fragment-4"><a href="#fragment-4"><img src="images/content_slider/image4-small.jpg" alt="Image 4" /><span>Etiam congue, leo sit amet iaculis interdum</span></a></li> -->
			</ul>

			<!-- Content -->
			<?php
			$p=0;
			foreach($slider as $s) {
				$p++;
				echo "
				<div id='fragment-{$p}' class='ui-tabs-panel ui-tabs-hide' style=''>
				<img src='{$s['image_large']}' alt='{$s['img_alt']}'/>
				<div class='info'>
					<h2><a href='#'>{$s['name']}</a></h2>
					<p>{$s['text']}</p>
				</div>
			</div>
				";
			}
			
			?>

			<!-- <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">
				<img src="images/content_slider/image2.jpg" alt="Image 2" />
				<div class="info">
					<h2><a href="#">Vestibulum ante ipsum primis in faucibus orci luctus et</a></h2>
					<p>Proin congue metus eu sapien cursus quis fringilla tortor elementum. Sed dui enim, scelerisque quis pellentesque imperdiet, lacinia nec....<a href="#" >read more</a></p>
				</div>
			</div>

			<div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">
				<img src="images/content_slider/image3.jpg" alt="Image 3" />
				<div class="info">
					<h2><a href="#">Nullam commodo, lorem id varius hendrerit</a></h2>
					<p>Nulla arcu turpis, ultricies a tempor at, vehicula consequat mi. Vivamus venenatis dui eget lacus adipiscing ornare. Praesent ultrices molestie nulla....<a href="#" >read more</a></p>
				</div>
			</div>

			<div id="fragment-4" class="ui-tabs-panel ui-tabs-hide" style="">
				<img src="images/content_slider/image4.jpg" alt="Image 4" />
				<div class="info">
					<h2><a href="#">Etiam congue, leo sit amet iaculis interdum</a></h2>
					<p>Quisque sed orci ut lacus viverra interdum ornare sed est. Donec porta, erat eu pretium luctus, leo augue sodales. Maecenas non orci leo....<a href="#" >read more</a></p>
				</div>
			</div> -->
    
		</div>
		
	</div>
	
</div>