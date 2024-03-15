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
                    <p class="overview">Having discovered a passion for web development, I embarked on a career change as a developer. Through my training at OpenClassrooms, I enthusiastically explored HTML, CSS, PHP, and JavaScript through practical projects. Today, I am determined to deepen my skills by specializing in JavaScript and React, aiming to create exceptional user experiences combining creativity and innovation.</p>
                </div>
            </div>
            <div class="cv-container">
                <a class="buttonCV cv-button" href="./assets/documents/cv.pdf" target="_blank">My CV</a>
            </div>
        </section>





        
        
        <section class="projets-container">
            <div class="title-projets">
                <h2 class="title-projet">Projects.</h2>
                <p class="introProjet">I enthusiastically explored HTML, CSS, PHP, and JavaScript through realistic projects that simulated a professional environment. This experience has allowed me to discover the unlimited potential of technology in creating captivating online experiences.</p>
            </div>
        </section>
        
        
        
        
        
        
        
        
        
        <section id="contact" class="contact-container">
            <div class="form-container">
                <?php 
                    echo do_shortcode('[contact-form-7 id="66cef70" title="Contact"]');
                ?>  
            </div>
            <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d92299.17724964551!2d7.1704117279027715!3d43.70328975716527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12cdd0106a852d31%3A0x40819a5fd979a70!2sNice!5e0!3m2!1sfr!2sfr!4v1710418572015!5m2!1sfr!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

    </div>
</main>
<?php get_footer(); ?>


