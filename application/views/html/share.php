<head>
  <meta property="og:url" content="" />
  <meta property="fb:app_id" content="1814036628899175" /> 
  <meta property="og:type"   content="website" /> 
  <meta property="og:title"  content="<?php echo $post_images['title']; ?>" /> 
  <meta property="og:description" content="<?php echo $post_images['text']; ?>" />
  <?php if(isset($post_images['p_list'][0]['imgname']) && $post_images['p_list'][0]['imgname']!=''){ ?>
  <meta property="og:image"  content="<?php echo base_url('assets/files/'.$post_images['p_list'][0]['imgname']); ?>" /> 
  <?php }else{ ?>
  <meta property="og:image"  content="" /> 
  <?php } ?>