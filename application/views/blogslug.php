<?php

// call api
   require(APPPATH . 'vendor/autoload.php');
   $url = 'https://industrialpropertiesingurgaon.in/ajdp/wp-json/wp/v2/posts?slug=' . $this->uri->segment(1) . '&_embed';
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   $output = curl_exec($ch);
   curl_close($ch);
   $post = json_decode($output, true);
   
   if(empty($post)){
       show_404();
       exit;
   }



   $ur1 = 'https://industrialpropertiesingurgaon.in/ajdp/wp-json/wp/v2/posts?_embed';
   $ch1 = curl_init();
   curl_setopt($ch1, CURLOPT_URL, $ur1);
   curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
   $output1 = curl_exec($ch1);
   curl_close($ch1);
   $recentposts = json_decode($output1, true);
   
   
    $ur2 = 'https://industrialpropertiesingurgaon.in/ajdp/wp-json/wp/v2/categories';
   $ch2 = curl_init();
   curl_setopt($ch2, CURLOPT_URL, $ur2);
   curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
   $output2 = curl_exec($ch2);
   curl_close($ch2);
   $categories = json_decode($output2, true);
 
?>
 
 



<div class="page-banner-area">
         <div class="container">
            <div class="page-banner-content">
               <h2><?php echo $post[0]['title']['rendered']; ?></h2>
            </div>
         </div>
      </div>
      <section class="blog-details-area ptb-100">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-12">
                  <div class="blog-details-desc">
                     <div class="article-image">
                        <img src=<?php echo $post[0]['yoast_head_json']['og_image'][0]['url']; ?> alt="Blog Standard">
                         
                     </div>
                     <div class="article-content">
                        <div class="entry-meta">
                           <ul>
                              <li>
                                 <span>Posted On:</span>
                                 <?php 
                                  $time1 = strtotime($post[0]['date_gmt']); 
                                  echo date("M d Y", $time1);
                                ?>
                              </li>
                              <li>
                                 <span>Posted By:</span>
                                 <a href="#"><?php echo $post[0]['_embedded']['author'][0]['name']; ?></a>
                              </li>
                           </ul>
                        </div>
                        <h3><?php echo $post[0]['title']['rendered']; ?></h3>    
                        <p><?php echo $post[0]['content']['rendered'] ;?></p>
                     </div>                     
                  </div>
               </div>
               <div class="col-lg-4 col-md-12">
                  <aside class="widget-area">                     
                     <div class="widget widget_grin_posts_thumb">
                        <h3 class="widget-title">Recent posts</h3>
                        <?php 
                     $i = 1;
                     foreach($recentposts as $recentpost){?>
                        <article class="item">
                           <a href="<?php echo base_url();?><?php echo $recentpost['slug'];?>" class="thumb">
                           <span class="fullimage cover" role="img">
                              <img src=<?php echo $recentpost['_embedded']['wp:featuredmedia'][0]['source_url'];?> alt="Images" />
                           </span>
                           </a>
                           <div class="info">
                              <span><?php 
                                $time = strtotime($recentpost['date_gmt']); 
                                echo date("M d Y", $time);
                           ?></span>
                              <h4 class="title usmall">
                                 <a href="<?php echo base_url();?><?php echo $recentpost['slug'];?>"><?php echo $recentpost['title']['rendered'];?></a>
                              </h4>
                           </div>
                        </article>
                        <?php
                        if($i > 4){
                           break;
                        }
                     $i++;} ?>
                     </div>
                     <div class="widget widget_categories">
                        <h3 class="widget-title">Categories</h3>
                        <ul>
                             <?php
                          
                          foreach($categories as $cats){
                  
                     ?>
                           <li><a href=<?php echo base_url();?>category/<?php echo $cats['slug'];?>><?php echo $cats['name'];?></a></li>   
                           <?php }?>
                        </ul>
                     </div>
                  </aside>
               </div>
            </div>
         </div>
      </section>