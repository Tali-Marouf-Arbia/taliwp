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
                foreach ($technologies as $technology) {
                    // Utilise le préfixe "tech-" suivi du nom de la technologie comme classe CSS
                    echo '<span class="tech tech-' . strtolower(str_replace('#', '', $technology)) . '">' . $technology . '</span>';
                }
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
    <div class="fleches-container">
        <?php
        // Récupérer les liens vers les projets précédents et suivants
        $prev_custom_post = get_previous_post();
        $next_custom_post = get_next_post();

        // Afficher la flèche de gauche si un projet précédent existe
        if ($prev_custom_post) {
            $prev_custom_post_link = get_permalink($prev_custom_post);
            echo '<a href="' . esc_url($prev_custom_post_link) . '"><img src="' . get_template_directory_uri() . '/assets/images/arrow-left.png" alt="photo précédente" class="arrow-left"/></a>';
        } else {
            echo '<a><img src="' . get_template_directory_uri() . '/assets/images/arrow-left.png" alt="projet précédent" class="arrow-left"/></a>';
        }

        // Afficher la flèche de droite si un projet suivant existe
        if ($next_custom_post) {
            $next_custom_post_link = get_permalink($next_custom_post);
            echo '<a href="' . esc_url($next_custom_post_link) . '"><img src="' . get_template_directory_uri() . '/assets/images/arrow-right.png" alt="photo suivante" class="arrow-right"/></a>';
        } else {
            echo '<a><img src="' . get_template_directory_uri() . '/assets/images/arrow-right.png" alt="projet suivant" class="arrow-right"/></a>';
        }
        ?>
    </div>
</section>



<?php
get_footer();
?>



