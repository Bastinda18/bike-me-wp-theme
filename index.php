<?php
get_header();
?>
  <div class="jumbotron jumbotron-fluid " style="height: 40vh; background: url(<?php echo get_theme_file_uri('/img/main.png')?>); background-repeat: no-repeat; background-size: cover; background-position: bottom;">
  <div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
    <h1 class="heading-primary text-white">Welcome to our blog!</h1>
    <p class="lead-custom text-white">Keep up with our latest news!</p>
    <a href="<?php echo site_url("/");?>" class="btn btn-primary btn-custom mt-2">Back to Bike Me</a>
  </div>
</div>
<div class="container py-5" style="min-height: 45vh;">
<?php
while(have_posts()){
    the_post();?>
  
    <div class="d-flex flex-column align-items-start p-3 bg-info border mb-4">
         <div >
          <p class="text-secondary">Posted on <?php the_time('n.j.y'); ?> </p>
        </div>
        <h2 class="heading-primary"><a href="<?php the_permalink()?>" class="text-secondary"><?php the_title()?></a></h2>
        <p ><?php the_excerpt()?></p>
       
</div>

 <?php   
}
echo paginate_links();?>

</div>
<?php  
get_footer();
?>