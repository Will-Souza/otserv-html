<?php
defined('MYAAC') or die('Direct access not allowed!');

if(PAGE != 'news')
	return;

$featured_article = $db->query("SELECT * FROM z_featured_article ORDER BY id DESC LIMIT 1")->fetchAll();

 if(isset($featured_article[0]))
    {
        foreach($featured_article as $featured)
        {

			echo '
				<div id="FeaturedArticle" class="Box">
					<div class="Corner-tl" style="background-image:url('.$template_path.'/images/content/corner-tl.gif);"></div>
					<div class="Corner-tr" style="background-image:url('.$template_path.'/images/content/corner-tr.gif);"></div>
					<div class="Border_1" style="background-image:url('.$template_path.'/images/content/border-1.gif);"></div>
					<div class="BorderTitleText" style="background-image:url('.$template_path.'/images/content/title-background-green.gif);"></div>
					<img id="ContentBoxHeadline" class="Title" src="'.$template_path.'/images/header/headline-featuredarticle.gif" alt="Contentbox headline" />
					<div class="Border_2">
						<div class="Border_3">
							<div class="BoxContent" style="background-image:url('.$template_path.'/images/content/scroll.gif);">
								<div id="TeaserThumbnail">';
								if(!empty($featured['read_more'])){
									echo '
									<a href="'.$featured['read_more'].'">';
								}
								echo '
										<img src="'.$template_path.'/images/news/announcement.jpg" width="150" height="100" border=0 alt="" />';
								if(!empty($featured['read_more'])){
								echo '
									</a>';
									}
							echo '
								</div>';
								if(!empty($featured['read_more'])){
								echo '
								<a id="Link" href="'.$featured['read_more'].'">&raquo; read more</a>';
								}
								echo '
								<div id="TeaserText">
									<div style="position: relative; top: -2px; margin-bottom: 2px;" >
										<b>'.$featured['title'].'</b>
									</div>
									'.$featured['text'].'
								</div>        
							</div>
						</div>
					</div>
					<div class="Border_1" style="background-image:url('.$template_path.'/images/content/border-1.gif);"></div>
					<div class="CornerWrapper-b"><div class="Corner-bl" style="background-image:url('.$template_path.'/images/content/corner-bl.gif);"></div></div>
					<div class="CornerWrapper-b"><div class="Corner-br" style="background-image:url('.$template_path.'/images/content/corner-br.gif);"></div></div>
				</div>
			';
		}
	}
	?>