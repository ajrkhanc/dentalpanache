<!-- import Link from 'next/link'
import Head from 'next/head'

export async function getStaticProps() {
    const res = await fetch('https://srkelectrical.in/blanchard/wp-json/wp/v2/posts?_embed')
    const posts = await res.json()
  
    return {
      props: {
        posts,
      },
    }
  }

export default function index({posts}) {
     
  return (
    <> -->

    <?php



require(APPPATH . 'vendor/autoload.php');
$getcat = 'https://industrialpropertiesingurgaon.in/ajdp/wp-json/wp/v2/categories?slug='.$this->uri->segment(2).'';
$ch3 = curl_init();
curl_setopt($ch3, CURLOPT_URL, $getcat);
curl_setopt($ch3, CURLOPT_RETURNTRANSFER, 1);
$output3 = curl_exec($ch3);
curl_close($ch3);
$resid = json_decode($output3, true);

$catid = $resid[0]['id'];




require(APPPATH . 'vendor/autoload.php');
if($this->uri->segment(1) == 'category'){
    $url = 'https://industrialpropertiesingurgaon.in/ajdp/wp-json/wp/v2/posts?_embed&categories='.$catid.'';
} else{
    $url = 'https://industrialpropertiesingurgaon.in/ajdp/wp-json/wp/v2/posts?_embed&per_page=100';
}
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
$posts = json_decode($output, true);

?>


<!-- <Head>
        <title>Blog - Blanchard International</title>
        <meta name="description" content="Blanchard Research and Training LLP is the leading training provider in South Asia, with expertise in leadership development across hierarchies. Having a global establishment of over 35 years and operational in India since 2008 by Mr Yogesh Sood who is a veteran in business operations and leadership development."/>
        <link rel="icon" href="/favicon.ico" />
        </Head> -->
 

<section class="blog-area ppt-50 pb-100">
   <div class="container">
      <div class="section-title">         
         <h2 class="headingh3">Blogs</h2>
      </div>
      <div class="row">

      <?php
      // echo "<pre>";
      // print_r($posts);
      // exit;
      foreach ($posts as $post) { ?>
         <div class="col-lg-4 col-md-6">
            <div class="single-blog">
               <div class="blog-image">
                  <a href="<?php echo base_url(); ?><?php echo $post['slug'];?>"><img src=<?php echo $post['_embedded']['wp:featuredmedia'][0]['source_url'];?> alt="image"></a>
                  <!--<div class="tag"><?php echo $post['date'];?></div>-->
                  <!--<div class="tag-two"><a href="blog.html">Technology</a></div>-->
               </div>
               <div class="blog-content">
                  <h3>
                     <a href="<?php echo base_url(); ?><?php echo $post['slug'];?>"><?php echo $post['title']['rendered'];?></a>
                  </h3>                  
                  <a href="<?php echo base_url(); ?><?php echo $post['slug'];?>" class="blog-btn">Read More</a>
                  <ul class="entry-meta">
                     <li>
                        <!--<i class="bx bxs-user"></i>-->
                        <span>Date <a href="#"><?php $time = strtotime($post['date_gmt']); echo date("M d Y", $time); ?></a></span>
                     </li>
                     <!--<li>
                        <i class="bx bxs-comment"></i>
                        2 Comments
                     </li>-->
                  </ul>
               </div>
            </div>
         </div>

         <?php } ?>        
         
        
         
      </div>
   </div>
</section>