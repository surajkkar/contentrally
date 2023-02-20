<?php
/* Template Name: Contact Page */
get_header();
?>

    <section class="main-section contact-page">
        <div class="container">
            <article class="page-taitel">
                <h1>Contact</h1>
            </article>          
            <div class="row">
            
            	<div class="col-md-12">

	                <?php while (have_posts() ) : the_post();
		                the_Content();
	                endwhile; ?>
	        
		        <div class="contact-form">
		        	<?php echo do_shortcode('[contact-form-7 id="75" title="Contact form 1"]'); ?>
		        </div>
		</div>
	        
	        
            </div>

        </div>
    </section>
    

<?php
get_footer();
?>