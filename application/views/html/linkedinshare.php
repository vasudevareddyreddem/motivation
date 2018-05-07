
<?php //echo '<ptre>';print_r($post_images); ?>
<head>
  <meta property="og:title" content="<?php echo $post_images['title']; ?>" />
  <meta property="og:description" content="<?php echo $post_images['text']; ?>" />
  <meta property="og:url" content="<?php echo base_url('motivation/singlepost/'.base64_encode($post_images['p_id'])); ?>" />
  <?php if(isset($post_images['p_list'][0]['imgname']) && $post_images['p_list'][0]['imgname']!=''){ ?>
  <meta property="og:image"  content="<?php echo base_url('assets/files/'.$post_images['p_list'][0]['imgname']); ?>" /> 
  <?php }else{ ?>
  <meta property="og:image"  content="" /> 
  <?php } ?>
</head>



