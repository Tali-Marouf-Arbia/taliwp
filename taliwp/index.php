<?php 
get_header(); ?>

<main>
    <div class="justify-center">
        <section class="presentation">
            <div class="title-entry">
                <p class="p-entry">Hi, I'm <span class="violet">Tali</span></p>
                <h1 class="title-bg">a WordPress developer crafting digital experiences.</h1>
            </div>

            <div class="intro">
                <div id="apropos" class="apropos">
                    <p id="p-intro">Introduction</p>
                    <h2>Overview.</h2>
                    <p class="overview">Having discovered a passion for web development, I embarked on a career change as a developer. Through my training at <a title="OpenClassroom WebSite" href="https://openclassrooms.com/fr/" target="_blank"><span class="lien-ocr">OpenClassrooms</span></a>, I enthusiastically explored HTML, CSS, PHP, and JavaScript through practical projects. Today, I am determined to deepen my skills by specializing in JavaScript and React, aiming to create exceptional user experiences combining creativity and innovation.</p>
                </div>
            </div>
            <div class="cv-container">
                <?php
                // Chemin vers mon cv
                $cv_path = get_template_directory_uri() . '/assets/documents/cv.pdf';
                ?>
                <a class="buttonCV cv-button" href="<?php echo $cv_path; ?>" target="_blank">cv</a>            
            </div>
        </section>
        <section class="projets-container">
            <div class="title-projets">
                <h2 id="projets" class="title-projet">Projects.</h2>
                <p class="introProjet">I enthusiastically explored HTML, CSS, PHP, and JavaScript through realistic projects that simulated a professional environment. This experience has allowed me to discover the unlimited potential of technology in creating captivating online experiences.</p>
            </div>
            <div class="projets-list">
                <?php
                $args = array(
                    'post_type' => 'projet',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                );
                $projects_query = new WP_Query($args);
                if ($projects_query->have_posts()) :
                    while ($projects_query->have_posts()) : $projects_query->the_post();
                ?>
                        <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class="projet-link">
                            <div class="projet projet-animate">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail(); 
                                }
                                ?>
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo get_field('sous-titre'); ?></p>
                            </div>
                        </a>
                <?php
                    endwhile;
                    wp_reset_postdata(); 
                else :
                    echo 'No projects found';
                endif;
                ?>
            </div>
        </section>
        <div id="introContact">
        <p class="introContact">Feel free to reach out to me for any inquiries, feedback, or questions regarding my projects or services. I'm here to listen and assist you in any way I can!</p>
        </div>
        <section id="contact" class="contact-container">
            <div class="form-container">
                <?php 
                    echo do_shortcode('[contact-form-7 id="66cef70" title="Contact"]');
                ?>  
            </div>
            <!-- <div class="map-container">
            <img class="terre-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/terre.png" alt="Image de la Terre" />            
            </div> -->
        </section>
        </div>

    
</main>
<?php get_footer(); ?>


