<?php
/**
 * Template part for displaying posts
 *
 * @package XpertHealth
 */

?>

<article id="ourServices-intro" class="row partial margin-none">
	<div class=" col-xs-12 col-md-6 offset-md-3">
		<h1 class="heading thin"><?php _e('OUR PHILOSOPHY', 'xperthealth'); ?></h1>
		<h1 class="bold text-center"><?php _e('GOOD HEALTH HELPS US <BR>LIVE A FULL LIFE', 'xperthealth'); ?></h1>
		<p class="copy text-center thin"><?php _e('Whether you are at home, at work or doing sports.
It is about seeking balance between your inner strength and the physical ability to reach your goals. ', 'xperthealth'); ?></p>
	</div>
	<div class="col-xs-12 col-md-6 padding-none images">
		<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/assets/Individuals_image.png">
			<div class="overlay thick padding-none margin-none"><p><?php _e('INDIVIDUALS', 'xperthealth'); ?></p><a class="thin"><?php _e('DISCOVER MORE', 'xperthealth'); ?></a></div>
	</div>
	<div class="col-xs-12 col-md-6 padding-none images">
		<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/assets/Companies_image.png">
			<div class="overlay thick padding-none margin-none"><p><?php _e('COMPANIES', 'xperthealth'); ?></p><a class="thin"><?php _e('DISCOVER MORE', 'xperthealth'); ?></a></div>
	</div>
</article>

<article id="ourServices-red" class="row partial margin-none">
	<div class="ourServices-red-content col-xs-12 col-md-4 offset-md-1">
		<h1 class="ourServices-red-header bold">
			<?php _e('OUR SERVICES', 'xperthealth'); ?>
		</h1>
		<h3 class="ourServices-red-subheader bold">
			<?php _e('FOR INDIVIDUALS', 'xperthealth'); ?>
		</h3>
		<p class="thin">
			<?php _e('Our services fulfill the complete lifecycle of health and wellbeing. In this way we can help you every step of your journey to reach your goals, while keeping you perfectly safe and healthy.', 'xperthealth'); ?>
		</p>
		<p class="thin">
			<?php _e('We provide a vast array of medical knowledge and experience in the area of injury prevention, orthopedics, physiotherapy, nutrition and sports science. Together with a comprehensive range of wellness and sports health services, our Xperts build a plan that fits your personal goals and lifestyle.', 'xperthealth'); ?>
		</p>
	</div>
</article>
