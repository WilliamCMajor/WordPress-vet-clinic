<?php
/***
* The template for displaying all blog posts.
*
* @package design+code demo
* @since 1.0.0
*/
//display header
get_header();
?>
<article <?php post_class();?> id="post-<?php the_ID();?>" >

    <div class="loving-paws-blog-header">
        <img src="http://she8.dmitstudent.ca/dmit2032/vetclinic-siqing/wp-content/uploads/2020/10/blog-banner-e1603156800546.jpg" alt="blog page banner" />
        <div class="banner-shadow">
            <h1>The Loving Paws Blog</h1>
        </div>
    </div>

    <div class="blog-container">
        <div class="blog-content">
            <?php //if(have_posts()) : ?>
            <!-- start the loop | the loop grabs all the content and cycles through all of the content until it’s done. -->
            <?php //while(have_posts()) : the_post(); ?>
            <!-- display the all of the blog posts -->
                <a href="<?php //the_permalink(); ?>"><?php //the_title();?></a>
                <?php //the_excerpt(); ?>
            <?php //endwhile; ?>
            <!-- end while loop -->
            <?php //else : ?>
            <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
                <?php //get_template_part('template-parts/content', 'none'); ?>
            <?php //endif; ?>

            <div class="loving-paws-content-container">
                <div class="loving-paws-blog-box">
                    <img src="http://she8.dmitstudent.ca/dmit2032/vetclinic-siqing/wp-content/uploads/2020/10/nyx-shiba-inu.jpg" alt="nyx shiba inu" />
                    <h2>Keep Your Fur Baby Happy and Healthy This Fall</h2>
                    <ul>
                        <li>Jenny Brooks | August 11, 2020</li> 
                        <li>Pets | Dogs | Wellnes Care</li>
                        <li>Puppy kitty ipsum dolor sit good dog foot stick canary. Teeth Mittens grooming vaccine walk swimming nest good boy furry tongue heel furry treats fish…</li>
                        <li><a href="http://she8.dmitstudent.ca/dmit2032/vetclinic-siqing/keep-your-fur-baby-happy-and-healthy-this-fall/">READ MORE ></a></li>
                    </ul>
                </div>
        
                <div class="loving-paws-blog-box">
                    <img src="http://she8.dmitstudent.ca/dmit2032/vetclinic-siqing/wp-content/uploads/2020/10/ella-basic-health-and-care-tips-for-cats-blog.jpg" alt="Ella basic health" />
                    <h2>Basic Health & Care Tips to Keep Your Cat Healthy </h2>
                    <ul>
                        <li>Melanie S. | July 3, 2020</li> 
                        <li>Pets | Cat |Wellness Care</li>
                        <li>
                            Puppy kitty ipsum dolor sit good dog foot stick can
                            ary. Teeth Mittens grooming vaccine walk swimming nest good boy furry tongue heel furry treats fish…
                        </li>
                        <li><a href="http://she8.dmitstudent.ca/dmit2032/vetclinic-siqing/basic-health-care-tips-to-keep-your-cat-healthy/">READ MORE ></a></li>
                    </ul>
                </div>
        
                <div class="loving-paws-blog-box">
                     <img src="http://she8.dmitstudent.ca/dmit2032/vetclinic-siqing/wp-content/uploads/2020/10/bonnie-clyde-sugar-gliders.jpg" alt="bonnie clyde sugar gliders" />
                     <h2>Pets & COVID-19</h2>
                      <ul>
                          <li>Kristy L. | June 8, 2020 </li>
                          <li>Pets | Wellness Care | COVID-19</li>
                          <li>
                              Puppy kitty ipsum dolor sit good dog foot stick can ary. Teeth Mittens grooming vaccine walk swimming nest good boy furry tongue heel furry treats fish…
                          </li>
                            <li><a href="http://she8.dmitstudent.ca/dmit2032/vetclinic-siqing/pets-covid-19/">READ MORE ></a></li>
                      </ul>
                </div>
                
            </div>
        
            <div class="loving-paws-content-container">
                <div class="loving-paws-blog-box">
                      <img src="http://she8.dmitstudent.ca/dmit2032/vetclinic-siqing/wp-content/uploads/2020/10/jackson-does-your-pet-snore-blog.jpg" alt="pet snore blog" />
                      <h2>Does Your Pet Snore?</h2>
                      <ul>
                          <li>Jenny Brooks | May 25, 2020</li> 
                          <li>Pets | Wellnes Care</li>
                          <li>Puppy kitty ipsum dolor sit good dog foot stick canary. Teeth Mittens grooming vaccine walk swimming nest good boy furry tongue heel furry treats fish…</li>
                          <li><a href="http://she8.dmitstudent.ca/dmit2032/vetclinic-siqing/does-your-pet-snore/">READ MORE ></a></li>
                      </ul>
                </div>
        
                <div class="loving-paws-blog-box">
                      <img src="http://she8.dmitstudent.ca/dmit2032/vetclinic-siqing/wp-content/uploads/2020/10/blog-kitty.jpg" alt="blog kitty" />
                      <h2>How Often Should Your Dog or Cat’s Teeth Be Cleaned?</h2>
                      <ul>
                          <li>Amy H. | May 7, 2020</li> 
                          <li>Pets|Dental</li>
                          <li>Puppy kitty ipsum dolor sit good dog foot stick canary. Teeth Mittens grooming vaccine walk swimming nest good boy furry tongue heel furry treats fish…</li>
                          <li><a href="http://she8.dmitstudent.ca/dmit2032/vetclinic-siqing/how-often-should-your-dog-or-cats-teeth-be-cleaned/">READ MORE ></a></li>
                      </ul>
                </div>
        
                <div class="loving-paws-blog-box">
                      <img src="http://she8.dmitstudent.ca/dmit2032/vetclinic-siqing/wp-content/uploads/2020/10/mochi-the-chinchilla.jpg" alt="chinchilla" />
                      <h2>Signs Of A Heatlhty Chinchilla.</h2>
                      <ul>
                          <li>Kristy L. | April 2, 2020</li> 
                          <li>Pets | Chinchillas | Wellness Care</li>
                          <li>Puppy kitty ipsum dolor sit good dog foot stick canary. Teeth Mittens grooming vaccine walk swimming nest good boy furry tongue heel furry treats fish…</li>
                          <li><a href="http://she8.dmitstudent.ca/dmit2032/vetclinic-siqing/chinchilla/">READ MORE ></a></li>
                      </ul>
                </div>
            </div>
            
            <div class="blog-bottom-bar"></div>
        </div>
        <div class="blog-rightside-bar"></div>
    </div>
<!-- //On this page specifically - this would be area to add pagination and a sidebar - out of the loop. -->
</article>
<!-- //display footer -->
<?php get_footer(); ?>