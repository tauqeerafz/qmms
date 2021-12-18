<div class="slider_home">
    <ul class="aviaslider" id="diagonal-blocks">
    	<?php
		$count=1;
		$banner_query="select *from banners where banner_status='Active' order by banner_id asc";
		$banner_result=mysql_query($banner_query);
		while($banner_row=mysql_fetch_array($banner_result))
		{
			 ?>
            <li style="z-index: 3; display: block; background-color: transparent; background-image: none;">
            <img style="opacity: 1; visibility: visible; display: block;" src="<?php echo $banner_row['banner_image'];?>" alt="">
            <div style="display: block; opacity: 0.8;" class="feature_excerpt">
                <?php echo $banner_row['banner_description'];?>
             </div>
            </li>
        	<?php 
		$count++;
		}
		?>
    </ul>
</div>