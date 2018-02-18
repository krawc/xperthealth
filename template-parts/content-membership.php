<?php
/**
 * Template part for displaying posts
 *
 * @package XpertHealth
 */

?>

<article id="membership-pre" class="row partial">
	<div class="col-xs-12 col-md-10 offset-md-1">
		<h1 class="heading thin text-center"><?php _e('BECOME PART OF OUR COMMUNITY!', 'xperthealth'); ?></h1>
	</div>
	<div class="col-xs-12 col-md-5 offset-md-1 membership-preImage">
		<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/assets/class.png">
	</div>
	<div class="col-xs-12 col-md-5 membership-preInfo">
		<h1 class="membership-head"> <?php _e('Do you want to become part of our XpertHealth community?', 'xperthealth'); ?></h1>
		<p class="membership-descr"><?php _e('Check out the membership that best fits your<br>
<strong>XpertHealth Profile</strong> or <strong>Partner Program.</strong><br>
Like health is a dynamic condition, our services are too.
All what matters is that you have easy access to all our services the moment you need it. Our team of Xperts will guide you to build your program and monitor your journey to help you achieve your goals.
<br><br>
With our medical expertise in wellness and sports health we know how to reach your best. No matter your condition, no matter your challenge. We will be there every step of your journey.
<br><br>
<span class="underline">Check out our memberships</span><br>
and join our XpertHealth community.
', 'xperthealth'); ?>
</p>
<button class="wireBtn"><?php _e('DISCOVER MORE', 'xperthealth'); ?></button>
	</div>
</article>

<article id="memberships-table" class="row partial">
	<div class="col-xs-12 col-md-10 offset-md-1 table-container">
	<table id="theTable" class="tg">
	  <tr class="legend">
	    <th class="tg-baqh">XpertHealth Profiles</th>
	    <th class="tg-baqh">XpertHealth Check</th>
	    <th class="tg-yw4l">Profile Package</th>
	    <th class="tg-yw4l">Adds on Services to <br>complete your needs</th>
	  </tr>
	  <tr>
	    <td class="tg-yw4l bold">Sports Performance</td>
	    <td class="tg-yw4l">Sports Performance Test</td>
	    <td class="tg-yw4l long">Injury Risk Assessment<br>Sports Dietician Consultation<br>Sport Scientist Consultation<br>Personalized Training Program<br>...</td>
	    <td class="tg-yw4l">Advancement treatment techniques</td>
	  </tr>
	  <tr>
	    <td class="tg-yw4l bold">Health &amp; Wellbeing</td>
	    <td class="tg-yw4l">Lifestyle Assessment</td>
	    <td class="tg-yw4l long">Health Check<br>Sports Check<br>Dietitian Check<br>Combination Check<br>Athletic Trainer Services<br>CPR Trainings<br>Sports Orthopedic Consultation<br>...</td>
	    <td class="tg-yw4l"></td>
	  </tr>
	  <tr>
	    <td class="tg-yw4l bold">Sports Medicine</td>
	    <td class="tg-yw4l">Sports Medicine Intake</td>
	    <td class="tg-yw4l long">Sports Orthopedic Consultation<br>Radiology<br>MRI Scans<br>Laboratory Texts e.g. blood test<br>Rehabilitation<br>...</td>
	    <td class="tg-yw4l"></td>
	  </tr>
	  <tr>
	    <td class="tg-yw4l bold">Companies</td>
	    <td class="tg-yw4l">Corporate Wellness &amp; <br>Sports Health Assessment</td>
	    <td class="tg-yw4l"></td>
	    <td class="tg-yw4l"></td>
	  </tr>
	  <tr>
	    <td class="tg-yw4l bold">Schools &amp; Institutions</td>
	    <td class="tg-yw4l">Corporate Wellness &amp; <br>Sports Health Assessment</td>
	    <td class="tg-yw4l"></td>
	    <td class="tg-yw4l"></td>
	  </tr>
	  <tr>
	    <td class="tg-yw4l bold">Sports Coaches</td>
	    <td class="tg-yw4l">Corporate Wellness &amp; <br>Sports Health Assessment</td>
	    <td class="tg-yw4l"></td>
	    <td class="tg-yw4l"></td>
	  </tr>
	</table>
	<p class="text-center">
		<button class="wireBtn" id="close"><?php _e('CLOSE', 'xperthealth'); ?></button>
	</p>
	</div>

</article>
