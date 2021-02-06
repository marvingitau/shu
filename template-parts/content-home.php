
<article>
    <div class="landing-area-section">
        <div class="section">
            <div class="landing-section position-relative">
                <!-- <div class="container-fluid"> -->
            
                <div class="owl-carousel owl-theme position-relative landing-area-carousel">

                        <?php 	
					
						
						// $featured = 'featured';

						$args = array(
                            'post_type'     => 'product', 
                            'product_cat'   => 'latest-product',
                            'post_status' => 'publish',
                            'posts_per_page' => -1,
                            'orderby'=> array('date'=>'DESC')
						); 

						$products = new WP_Query( $args );
							if ( $products->have_posts() ) {
								while ( $products->have_posts() ) {
									$products->the_post();
									$category = get_the_category();
									$firstCategory = $category[0]->cat_name;
								?>
                                        <div class="item position-relative absolute-bg " style="background-image:url('<?php echo the_field('background_image'); ?>');"><!-- backgrouund -->
                                            <div class="container-fluid0">
                                                <div class="item-sub-value">
                                                    <div class="container d-flex align-items-center">
                                                        <div class="position-relative w-100">
                                                            <div class="prod-data-div">
                                                                <?php 
                                                                
                                                                // $_product = wc_get_product('32');
                                                                $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                                                                ?>
                                                                <div class="title-div">
                                                                    <h2 class="prod-title" data-aos="zoom-out-right"><?php the_title() ?></h2>

                                                                </div>
                                                                <div class="price-div">
                                                                    <h5 class="prod-price" ><?php echo $product->get_price_html(); ?></h5>
                                                                </div>
                                                                <div class="prod-data-buttons">
                                                                    <button type="button" name="" id="" class="btn btn-primary to-cart"> <i class="fa fa-heart"></i> Wishlist</button>
                                                                    <button type="button" name="" id="" class="btn btn-primary view-prod">View Product</button>
                                                                </div>
                                                            </div>
                                                            <div class="img-div position-absolute">
                                                                <img class="img-fluid lazy-load"  data-original="<?php the_post_thumbnail_url() ; ?>" src="<?php the_post_thumbnail_url() ; ?>"  data-adaptive-background data-aos="zoom-in">
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                <?php  

                                }
                                wp_reset_postdata();
                            } else {
                        }
                        ?>
                       
                </div><!-- end carousel -->
                        <div class="social-media-links d-md-flex flex-column">
                            <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook my-md-1"></i></a>
                            <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fa fa-twitter my-md-1"></i></a>
                            <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram my-md-1"></i></a>
                        </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
   


</article>

<article>
    <section>
       <div class="container-fluid">
           <div class="row">
               <div class="col-12 col-sm-12 col-md-6">
                   <div class="row">
                       <div class="col-md-6 col-sm-6 col-12">
                           <div class="item-category-div">
                               <div class="card text-left">
                                 <img class="card-img-top" src="<?php echo wp_get_attachment_image_url('86','true'); ?>" alt="">
                                 <div class="card-body">
                                   <h4 class="card-title">Title</h4>
                                   <p class="card-text">16</p>
                                 </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-6 col-sm-6 col-12">
                           <div class="item-category-div">
                               <div class="card text-left">
                                 <img class="card-img-top" src="<?php echo wp_get_attachment_image_url('86','true'); ?>" alt="">
                                 <div class="card-body">
                                   <h4 class="card-title">Title</h4>
                                   <p class="card-text">16</p>
                                 </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-6 col-sm-6 col-12">
                           <div class="item-category-div">
                               <div class="card text-left">
                                 <img class="card-img-top" src="<?php echo wp_get_attachment_image_url('86','true'); ?>" alt="">
                                 <div class="card-body">
                                   <h4 class="card-title">Title</h4>
                                   <p class="card-text">16</p>
                                 </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-6 col-sm-6 col-12">
                           <div class="item-category-div">
                               <div class="card text-left">
                                 <img class="card-img-top" src="<?php echo wp_get_attachment_image_url('86','true'); ?>" alt="">
                                 <div class="card-body">
                                   <h4 class="card-title">Title</h4>
                                   <p class="card-text">16</p>
                                 </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-12 col-sm-12 col-md-6">
                   <div class="hype-scenario-div">
                       <div class="owl-carousel owl-theme hype-scenrio-carousel">
                           <div class="item">
                                <img class="img-fluid" src="<?php echo wp_get_attachment_image_url('86','true'); ?>" alt="">
                           </div>
                           <div class="item">
                                <img class="img-fluid" src="<?php echo wp_get_attachment_image_url('86','true'); ?>" alt="">
                           </div>
                           <div class="item">
                                <img class="img-fluid" src="<?php echo wp_get_attachment_image_url('86','true'); ?>" alt="">
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </section>
</article>

<article>
    <section>
       <!-- latest added items ***  Just now-->
       <div class="container-fluid">
           <div class="latest-items">
               <div class="owl-carousel owl-theme just-now-carousel">
                   
                   <div class="item">
                       <div class="card text-left">
                         <img class="card-img-top" src="holder.js/100px180/" alt="">
                         <div class="card-body">
                           <h4 class="card-title">Title</h4>
                           <p class="card-text">Body</p>
                         </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </section>
</article>

