<?php
/**
 * Template part for displaying posts
 *
 * @package XpertHealth
 */

?>

<article id="ourServices-intro" class="row partial margin-none">
	<div class=" col-xs-12 col-md-6 offset-md-3">
		<h1 class="heading thin"><?php _e('OUR SERVICES', 'xperthealth'); ?></h1>
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

<article id="ourServices-blue" class="row partial margin-none">
	<div class="col-xs-12 col-md-5 offset-md-1">
		<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/assets/runningMan.png">
	</div>
	<div class="col-xs-12 col-md-4 offset-md-1 margin-none">
		<h1 class="services-header bold">
			<?php _e('ARE YOU PREPARING FOR THE GREAT WALL MARATHON?', 'xperthealth'); ?>
		</h1>
		<p class="thin services-content">
			<?php _e('How do you feel? What is your biggest challenge? Do you have an injury? Or perhaps you want to improve your fitness level? ', 'xperthealth'); ?>
		</p>
		<p class="thin services-content">
			<?php _e('No matter your goal or challenge, we can facilitate every step of your journey.
With customized and realistic health programs, and a comprehensive range of services, our Xperts create programs that fit your personal goals and lifestyle.', 'xperthealth'); ?>
		</p>
	</div>
	<div class="col-xs-12 col-md-6 offset-md-1" id="knee">
		<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/assets/knee.png">
	</div>
	<div class="col-xs-12 col-md-2">
		<p class="thin narrow">
			<?php _e('Health is a dynamic condition and is ever changing. Today you might do sports in excellent condition, but tomorrow an injury might occur.
Maybe physical issues are preventing you from commencing sports.
Or perhaps you feel quite healthy, but often think about improving your fitness or losing weight to feel even better! No matter what your goal is, we are here to help.', 'xperthealth'); ?>
		</p>
	</div>
</article>

<article id="ourServices-profiles" class="row partial margin-none">
	<div class="col-xs-12 col-md-6 offset-md-3 cta-header">
		<h1 class="full-grey text-center thin">
			<?php _e('Take a look at our XpertHealth profiles
and find out where you fit in best today. ', 'xperthealth'); ?>
		</h1>
	</div>
	<div id="sportPerformance" class="profile col-xs-12 col-md-12" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/girl-runner.png); background-size: cover; background-repeat: no-repeat; background-position: 30%;">
		<div class="row">
			<div class="col-xs-12 col-md-4 offset-md-2 padding-none">
				<h3 class="profile-heading"><?php _e('SPORTS PERFORMANCE', 'xperthealth'); ?></h3>
				<p class="profile-copy"><?php _e('You are passionate about doing sports.<br>
You love the excitement of winning.<br>
You want to become the best athlete possible.', 'xperthealth'); ?></p>
				<img class="img-responsive profile-icon" src="<?php echo get_stylesheet_directory_uri();?>/assets/icon_maximing-abilities.png">
				<h2 class="profile-goal"><?php _e('Maximizing Abilities', 'xperthealth'); ?></h2>
				<p class="profile-goalDescr"><?php _e('You are motivated to do what it takes to maximize your abilities and to achieve your goals. ', 'xperthealth'); ?></p>
				<img class="img-responsive profile-icon" src="<?php echo get_stylesheet_directory_uri();?>/assets/icon_injuries-prevention.png">
				<h2 class="profile-goal"><?php _e('Injuries Prevention', 'xperthealth'); ?></h2>
				<p class="profile-goalDescr"><?php _e('You want to recognize your limits to avoid injuries. Increasing your endurance energizes you. You always want to give it your best to achieve your full potential.', 'xperthealth'); ?></p>
			</div>
		</div>
	</div>
	<div id="healthAndWellbeing" class="profile col-xs-12 col-md-12" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/girl-drinking.png); background-size: cover; background-repeat: no-repeat; background-position: 30%;">
		<div class="row">
			<div class="col-xs-12 col-md-4 offset-md-2 padding-none">
				<h3 class="profile-heading"><?php _e('HEALTH & WELLBEING', 'xperthealth'); ?></h3>
				<p class="profile-copy"><?php _e('You feel healthy and live a full life. <br>You are busy with work,
social activities and enjoy doing sports.', 'xperthealth'); ?></p>
				<img class="img-responsive profile-icon" src="<?php echo get_stylesheet_directory_uri();?>/assets/icon_nutrition-programs.png">
				<h2 class="profile-goal"><?php _e('Nutrition Programs', 'xperthealth'); ?></h2>
				<p class="profile-goalDescr"><?php _e('You try your best to live a healthy life, but are aware improvements can be made. Losing weight, improving your fitness level, or eating healthier would make you feel even better.', 'xperthealth'); ?></p>
				<img class="img-responsive profile-icon" src="<?php echo get_stylesheet_directory_uri();?>/assets/icon_healthy-life.png">
				<h2 class="profile-goal"><?php _e('Healthy Life', 'xperthealth'); ?></h2>
				<p class="profile-goalDescr"><?php _e('You want to know all about your DNA and you want Xpert help to boost your motivational spirit to reach your best.', 'xperthealth'); ?></p>
			</div>
		</div>
	</div>
	<div id="sportsMedicine" class="profile col-xs-12 col-md-12" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/girl.png); background-size: cover; background-repeat: no-repeat; background-position: 30%;">
		<div class="row">
			<div class="col-xs-12 col-md-4 offset-md-2 padding-none">
				<h3 class="profile-heading"><?php _e('SPORTS MEDICINE', 'xperthealth'); ?></h3>
				<p class="profile-copy"><?php _e('You suffer from an injury or pain.<br> It can be small or large,<br>
temporary or something you will need to adjust to.', 'xperthealth'); ?></p>
				<img class="img-responsive profile-icon" src="<?php echo get_stylesheet_directory_uri();?>/assets/icon_rehabilitation.png">
				<h2 class="profile-goal"><?php _e('Rehabilitation', 'xperthealth'); ?></h2>
				<p class="profile-goalDescr"><?php _e('You suffer from an injury or pain. It can be small or large, temporary or something you will need to adjust to.', 'xperthealth'); ?></p>
				<img class="img-responsive profile-icon" src="<?php echo get_stylesheet_directory_uri();?>/assets/icon_injuries-recovery.png">
				<h2 class="profile-goal"><?php _e('Injuries Recovery', 'xperthealth'); ?></h2>
				<p class="profile-goalDescr"><?php _e('You want Xpert guidance with conservative recommendations to coordinate your full recovery and learn about preventing future injuries. You need a timely return to the top of your game. You want to live a full life again.', 'xperthealth'); ?></p>
			</div>
		</div>
	</div>
	<div id="profilesCopy" class="col-xs-12 col-md-6 offset-md-3">
		<p class="copy text-center"><?php _e('No matter where you fit in our <strong>XpertHealth cycle,</strong> your health program starts with an <strong>XpertHealth Check</strong> to assess your personal health. We amplify your strengths and address your weaknesses and provide easy access to our comprehensive range of services.
		<br><br>Our dedicated team of certified sports health professionals is passionate to coordinate every step of your journey to reach your goals.
		<br><br><strong>Book your XpertHealth Check now</strong> and get started.', 'xperthealth'); ?>
</p>
<p class="text-center">
<button class="wireBtn"><?php _e('CLOSE', 'xperthealth'); ?></button>
</p>
	</div>
</article>

<article id="forCompanies" class="row partial margin-none">
	<div class="forCompanies-content col-xs-12 col-md-4 offset-md-6">
		<h1 class="forCompanies-header bold">
			<?php _e('OUR SERVICES FOR COMPANIES', 'xperthealth'); ?>
		</h1>
		<p class="thin">
			<?php _e('Whether you run a company, a school or you are an independent sports health professional. We are here to raise your wellness and sports health services to a next level. Take advantage of our medical knowledge and experience in the area of injury prevention, orthopedics, physiotherapy, nutrition and sports science.', 'xperthealth'); ?>
		</p>
		<p class="thin">
			<?php _e('Together with a comprehensive range of wellness and sports health services, our certified Xperts will build a program that fits your business.', 'xperthealth'); ?>
		</p>
	</div>

</article>

<article id="growBusiness" class="row partial margin-none">
	<div class="growBusiness-content col-xs-12 col-md-4 offset-md-1">
		<h1 class="growBusiness-header bold">
			<?php _e('GROWING YOUR BUSINESS MIGHT BE YOUR FIRST THOUGHT', 'xperthealth'); ?>
		</h1>
		<p class="thin">
			<?php _e('What is your biggest challenge?
Growing your business might be your first thought. Fostering a culture of health and wellbeing within your organization has proven to be a successful strategy to drive this ambition.
Good health makes people feel more energetic, motivated and engaged.
Wellness is among the most vital investments a company can make.', 'xperthealth'); ?>
		</p>
	</div>
	<div class="growBusiness-content col-xs-12 col-md-5 offset-md-1">
		<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/assets/hiking.png">
	</div>
	<div class="growBusiness-bridgeRunner col-xs-12 col-md-6 offset-md-3 text-center">
		<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/assets/bridgeRunner.png">
	</div>

</article>

<article id="programs" class="row partial margin-none">
	<div class="col-xs-12 col-md-6 offset-md-3 cta-header">
		<h1 class="full-grey text-center thin">
			<?php _e('Take a look at our Partner Programs<br>
to build on your success.', 'xperthealth'); ?>
		</h1>
	</div>
	<div class="program col-xs-12 col-md-10 offset-md-1">
		<div class="row program-panel">
			<div class="col-xs-12 col-md-2 padding-none">
				<img class="img-responsive program-icon" src="<?php echo get_stylesheet_directory_uri();?>/assets/icon_company.png">
			</div>
			<div class="col-xs-12 col-md-9 padding-none program-content">
				<h3 class="program-name"><?php _e('Company Partner Program', 'xperthealth'); ?></h3>
				<p class="program-descr thin"><?php _e('As an employer you want your employees to take good care of their health, both in the workplace as well as at home. And that is not for any reason. Good health not only has a positive effect on the productivity of employees. It also improves employee retention, reduces absenteeism and cuts down on company’s health cost. Wellness is among the most vital investments a company can make.', 'xperthealth'); ?></p>
				<p class="more"><a href="#"><?php _e('READ MORE', 'xperthealth'); ?></a></p>
			</div>
		</div>
	</div>
	<div class="program col-xs-12 col-md-10 offset-md-1">
		<div class="row program-panel">
			<div class="col-xs-12 col-md-2 padding-none">
				<img class="img-responsive program-icon" src="<?php echo get_stylesheet_directory_uri();?>/assets/icon_school.png">
			</div>
			<div class="col-xs-12 col-md-9 padding-none program-content">
				<h3 class="program-name"><?php _e('school Partner Program', 'xperthealth'); ?></h3>
				<p class="program-descr thin"><?php _e('A school that fosters a culture of health and wellbeing brings many advantages and added value. As well for students, teachers and staff, as parents selecting the best schools for their children.', 'xperthealth'); ?></p>
				<p class="more"><a href="#"><?php _e('READ MORE', 'xperthealth'); ?></a></p>
			</div>
		</div>
	</div>
	<div class="program col-xs-12 col-md-10 offset-md-1">
		<div class="row program-panel">
			<div class="col-xs-12 col-md-2 padding-none">
				<img class="img-responsive program-icon" src="<?php echo get_stylesheet_directory_uri();?>/assets/icon_personal.png">
			</div>
			<div class="col-xs-12 col-md-9 padding-none program-content">
				<h3 class="program-name"><?php _e('Personal Partner Program', 'xperthealth'); ?></h3>
				<p class="program-descr thin"><?php _e('As a personal trainer, coach or health professional you know how to dig deep into people’s barriers and motivations for being active. You have the knowledge, skills and abilities necessary to tailor safe, fun and effective programs to your client needs. ', 'xperthealth'); ?></p>
				<p class="more"><a href="#"><?php _e('READ MORE', 'xperthealth'); ?></a></p>
			</div>
		</div>
	</div>
	<div id="programsCopy" class="col-xs-12 col-md-6 offset-md-3">
		<p class="copy text-center"><?php _e('Your <strong>Partner Program</strong> starts with an <strong>XpertHealth Check</strong> to assess your corporate wellness. It will be the starting point to explore opportunities and setting goals to build a customized program that fits your needs. Whether you are an independent sports health professional, you have thousands of employees or students or just a handful,
		we have the services to complete your business. <br><br>Our dedicated team of certified sports health professionals is passionate to build a customized program and coordinate every step to delive
		 the best results to achieve your goals.<br><br><strong>Book your XpertHealth Check now</strong>
		and get started. ', 'xperthealth'); ?>
		</p>
		<p class="text-center">
		<button class="wireBtn"><?php _e('CLOSE', 'xperthealth'); ?></button>
		</p>
	</div>
</article>
