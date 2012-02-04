  <div class="navbar navbar-fixed-top">
	 <div class="navbar-inner">
	   <div class="container-fluid">
			<a class="brand" href="/">
			  <?php if ($logo): ?>
				<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
			  <?php endif; ?>
			  
			  <?php if ($site_name): ?>
				<?php print $site_name; ?>
			  <?php endif; ?>	
			</a>
		  
		  <div class="nav-collapse">
			<?php if ($main_menu ): ?>
			  <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('nav')))); ?>
			<?php endif; ?>
		  </div>
		  
		  <?php if ($secondary_menu): ?>
			<?php print theme('links__system_main_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('nav', 'secondary-nav', 'pull-right')))); ?>
		  <?php endif; ?>
		  
		  <div class="pull-right">
			<?php if ($search): print render($search); endif; ?>
		  </div>
		  
		  <?php print render($page['header']); ?>
	   </div>
	 </div>
  </div>
  
  <div class="container">
	
	<div class="row-fluid">
	  
	  <?php print $messages; ?>
	  
	  <?php if ($page['highlight']): ?>
		<div class="highlight hero-unit">
		  <?php print render($page['highlight']); ?>
		</div>
	  <?php endif; ?>
	  
	  <?php if ($breadcrumb): ?>
		<?php print $breadcrumb; ?>
	  <?php endif; ?>
	   
	  <?php if ($title): ?>
	  <div class="page-header">
		<h1><?php print $title; ?></h1>
	  </div>
	  <?php endif; ?>
	  
	  <?php if ($tabs && $tabs['#primary']): ?>
		<?php print render($tabs); ?>
	  <?php endif; ?>
  
	  <?php if ($page['sidebar_first']): ?>
		<?php print render($page['sidebar_first']); ?>
	  <?php endif; ?>	  
	  
	  <div class="<?php print _twitter_bootstrap_content_span($columns); ?>">
		<?php print render($page['content']); ?>
	  </div>
	  
	  <?php if ($page['sidebar_second']): ?>
		<?php print render($page['sidebar_second']); ?>
	  <?php endif; ?>

	</div>
	
	<footer class="footer">
	  <?php print render($page['footer']); ?>
	</footer>
	
  </div>
