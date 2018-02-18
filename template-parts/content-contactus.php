<?php
/**
 * Template part for displaying posts
 *
 * @package XpertHealth
 */

?>

<article id="contactus-locations" class="row partial">
	<div class="col-xs-12 col-md-10 offset-md-1">
		<h1 class="heading thin text-center"><?php _e('OUR LOCATIONS', 'xperthealth'); ?></h1>
	</div>
	<div class="col-xs-12 col-md-10 offset-md-1 locations">
		<div class="row">
			<div class="col-xs-12 col-md-4 location text-center"></div>
			<div class="col-xs-12 col-md-4 location text-center">
				<img class="img-responsive pin" src="<?php echo get_stylesheet_directory_uri();?>/assets/pin.png">
				<h4 class="location-name thick"><?php _e('Shanghai', 'xperthealth'); ?></h4>
				<p class="location-address thin"><?php _e('No 1, 22 Fuxing Xi Lu<br>
Near Wulumuqi Lu<br>
Shanghai Library Metro, Exit 1<br>
复兴西路22弄一号 附近乌鲁木齐路 徐汇区<br>
Telephone number: 021-64480925<br>
Mail: info@xperthealth.com', 'xperthealth'); ?>
</p>
			</div>
			<div class="col-xs-12 col-md-4 location text-center"></div>
		</div>
	</div>
</article>

<article id="contactus-mapQuestions" class="row partial">
<div class="col-xs-12 col-md-10 offset-md-1 text-center map-container">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3412.366718357207!2d121.4448233153127!3d31.21056798147317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35b27aad228503a9%3A0xbb0f29f089eb4d08!2s22+Fu+Xing+Xi+Lu%2C+Xuhui+Qu%2C+Shanghai+Shi%2C+China!5e0!3m2!1sen!2s!4v1518952496587" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div class="col-xs-12 col-md-8 offset-md-2">
	<div class="row">
		<div class="col-xs-12 col-md-12 text-center">
			<h1 class="thick"><?php _e('ANY QUESTIONS?', 'xperthealth'); ?></h1>
			<p class="thin"><?php _e('Contact XpertHealth', 'xperthealth'); ?></p>
		</div>
	</div>
</div>
</article>
