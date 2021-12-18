<div class="agents_wrap">
<h2>Featured Agents</h2>
	<?php $home_url = $set['home'] . "/"; ?>
    <?php $avarat_folder = "/images/page_images/"; ?>
    <?php 
	$agent_query="SELECT * FROM `adds` WHERE `status`='Active' order by `adds_id` ASC  ";
       // $agent_query = "SELECT * FROM `users` WHERE `role` = 'agent' AND `agent_verified` = 1 AND `featured` = 1 ORDER BY `position` ASC";
        $agent_result = mysql_query($agent_query);
        while($featured_row = mysql_fetch_array($agent_result)):
		//images/page_images/<?php echo $user_row['add_name']
		//$agent_permalink = $set['home'] . "/agent-". make_slug($featured_row['name']). "-".$featured_row['id'];
		
    ?>
        <div class="agent">
        	<a href="<?php echo $featured_row['link']?>" target="_blank">
				<img class="img-responsive img-home-portfolio" src="images/page_images/<?php echo $featured_row['add_name']?>">
			</a>
            <div class="show_agent_info">           	
                    <div class="agentbox">
                        <!--<div class="agent_pic">
                            <?php if($featured_row['owner_photo'] !=''){?>
                            <img src="<?php echo $set['home']?>/uploads/avatars/<?php echo $featured_row['owner_photo'];?>" alt="image not found of id <?php echo $featured_row['id']?>" />
                            <?php }else { ?>
                            <img src="<?php echo $set['home']; ?>/img/no_agent_img.jpg" alt="" >
                            <?php } ?>
                        </div>-->
                    	<ul>
                            <li class="estate_name"><?php echo $featured_row['contact'];?></li>
                            <li class="user_name"><?php echo $featured_row['email'];?></li>
                	   </ul>
                    </div>
            </div><!-- .agent_info -->
        </div><!-- .agent -->
    
    <?php endwhile; ?>
   
    <div class="clear"></div>
</div><!-- .agents_wrap -->
