<html>
  <head>
    <!-- Site Title-->
    <!-- Site Title-->
    <title><?php echo $post_images['title']; ?></title>
	<meta name="title" content="<?php echo $post_images['title']; ?>">
    <meta name="description" content="<?php echo $post_images['text']; ?>">    
    <meta name="keywords" content="<?php echo $post_images['text']; ?>">    
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta itemprop="name" content="<?php echo $post_images['name']; ?>">
	<meta itemprop="description" content="<?php echo $post_images['text']; ?>">
	<?php if(count($post_images['p_list'])>0){ ?>
		<meta itemprop="image" content="<?php echo base_url('assets/files/'.$post_images['p_list'][0]['imgname']); ?>">
	<?php }else{ ?>
		<meta itemprop="og:image" content="<?php echo base_url(); ?>assets/vendor/img/logo.png">
	<?php } ?>
	<meta property="og:site_name" content="<?php echo $rurl; ?>">
	<meta property="og:title" content="<?php echo $post_images['title']; ?>">
	<meta property="og:type" content="article">
	<meta property="og:description" content="<?php echo $post_images['text']; ?>">
	<?php if(count($post_images['p_list'])>0){ ?>
	
	<meta property="og:image" content="<?php echo base_url('assets/files/'.$post_images['p_list'][0]['imgname']); ?>">
	<?php }else{ ?>
		<meta property="og:image" content="<?php echo base_url(); ?>assets/vendor/img/logo.png">

	<?php } ?>
	<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="200">
	<meta property="og:image:height" content="200">
		<meta property="og:image:type" content="image/png">

	
	
	<meta property="og:url" content="<?php echo $rurl; ?>">
	<meta name="twitter:card" content="<?php echo $post_images['text']; ?>" />
	<meta name="twitter:title" content="<?php echo $post_images['title']; ?>" />
	<meta name="twitter:description" content="<?php echo $post_images['text']; ?>" />
	<meta name="twitter:url" content="<?php echo $rurl; ?>" />
	<?php if(count($post_images['p_list'])>0){ ?>
	
	<meta name="twitter:image" content="<?php echo base_url('assets/files/'.$post_images['p_list'][0]['imgname']); ?>">
	<?php }else{ ?>
	
		<meta name="twitter:image" content="<?php echo base_url(); ?>assets/vendor/img/logo.png">

	<?php } ?>
	
	

</head>

</html>
  
  