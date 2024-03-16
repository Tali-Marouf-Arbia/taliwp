<?php
/**
 * Template Name: Projet unique
*/

get_header();
?>
<section class="justify-center">
    <div class="projet-container">
        <h2>
            <?php
            the_title();
            ?>
        </h2>

        <p class="projet-sous-titre">
            <?php
            $sousTitre = get_field('sous-titre');
            if ($sousTitre) {
                echo $sousTitre;
            } else {
                echo 'Aucun sous-titre défini pour ce projet.';
            }
            ?>
        </p>

        <?php
        while (have_posts()) : the_post();
            the_content();
        endwhile;
        ?>

        <p class="technologies">
            <?php
            $technologies = get_field('technologies');
            if ($technologies) {
                echo $technologies;
            } else {
                echo 'Aucune technologie définie pour ce projet.';
            }
            ?>
        </p>
        
        <h3>Objectives :</h3>
        <p class="objectifs">
            <?php
            $objectifs = get_field('objectifs');
            if ($objectifs) {
                echo $objectifs;
            } else {
                echo 'Aucun objectif défini pour ce projet.';
            }
            ?>
        </p>
        
        <h3>Description :</h3>
        <p class="description">
            <?php
            $description = get_field('description');
            if ($description) {
                echo $description;
            } else {
                echo 'Aucune description définie pour ce projet.';
            }
            ?>
        </p>

        <p class="lien-github">
            <?php
            $github_url = get_field('github');
            if ($github_url) {
                echo '<a id="lien-github" href="' . esc_url($github_url) . '">' . esc_url($github_url) . '</a>';
            } else {
                echo '';
            }
            ?>
        </p>
    </div>
</section>

<?php
get_footer();
?>



