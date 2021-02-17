<?php
get_header();
?>
 
<?php
while(have_posts()){
    the_post();?>
      <div class="jumbotron jumbotron-fluid " style="height: 30vh; background: url(<?php echo get_theme_file_uri('/img/main.png')?>); background-repeat: no-repeat; background-size: cover; background-position: bottom;">
  <div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
    <h1 class="heading-primary text-white"><?php the_title();?>!</h1>
  
  </div>
</div>
<div class="container" style="min-height: 55vh;">

<div class="d-flex flex-column align-items-start pt-5">
<div class="d-flex flex-column align-items-start p-3 bg-info border mb-4">
         <div >
          <p class="text-secondary">Posted on <?php the_time('n.j.y'); ?> </p>
        </div>
        <h2 class="heading-primary text-secondary"><?php the_title()?></h2>
        <p ><?php the_content()?></p>
       
       
</div>
        
<a href="<?php echo site_url("/blog");?>" class="btn btn-primary btn-custom">Go Back</a>
       
</div>
</div>

 <?php   
}

get_footer();
?>