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
                echo 'No sub-title.';
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
                echo 'No tech.';
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
                echo 'No objectives.';
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
                echo 'No description.';
            }
            ?>
        </p>
        <h3>Development Stages :</h3>
            <p class="description devStages">
                <?php
                $developmentStages = get_field('etapes');
                if ($developmentStages) {
                    echo $developmentStages;
                } else {
                    echo 'No development stage.';
                }
                ?>
            </p>

            <div class="liens-ressources">
                <?php
                $cahier_des_charges_url = get_field('cahier_des_charges');

                if ($cahier_des_charges_url) {
                    echo '<h3>Resources :</h3>';
                    echo '<div class="ressources-container">';
                    echo '<p class="cahier-des-charges">';
                    echo '<a class="lien-ressources" href="' . esc_url($cahier_des_charges_url) . '">Specifications</a>';
                    echo '</p>';
                    
                }
                ?>
                <p class="maquette">
                    <?php
                    $maquette = get_field('maquettes');
                    if (!empty($maquette)) {
                        echo '<a class="lien-ressources" href="' . esc_url($maquette) . '">Mockup</a>';
                        echo '</div>';
                    } else {
                        echo " ";
                    }
                    ?>
                </p>
                <?php
                $github_url = get_field('github');

                if ($github_url) {
                    ?>
                    <p class="lien-github">
                        <a title="see the code" class="lien-github" id="lien-github" href="<?php echo esc_url($github_url); ?>">
                        <img class="lien-github" id="lien-github" src="<?php echo get_template_directory_uri() ?>/assets/images/github-logo.png" alt="GitHub">        </a>
                    </p>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="fleches-container">
        <div class="fleche-box">
    <?php
    $prev_custom_post = get_previous_post();
    $next_custom_post = get_next_post();

    // Récupérer le premier et le dernier post de type "projet"
    $args = array(
        'post_type'      => 'projet',
        'posts_per_page' => 1,
        'order'          => 'ASC'
    );
    $first_project_post = get_posts($args)[0];

    $args['order'] = 'DESC';
    $last_project_post = get_posts($args)[0];

    $prev_custom_post_title = '';
    $next_custom_post_title = '';

    if ($prev_custom_post) {
        $prev_custom_post_link = get_permalink($prev_custom_post);
        $prev_custom_post_title = esc_attr($prev_custom_post->post_title);
    } else {
        $prev_custom_post_link = get_permalink($last_project_post);
    }

    if ($next_custom_post) {
        $next_custom_post_link = get_permalink($next_custom_post);
        $next_custom_post_title = esc_attr($next_custom_post->post_title);
    } else {
        $next_custom_post_link = get_permalink($first_project_post);
    }

    echo '<a title="' . $prev_custom_post_title . '" href="' . esc_url($prev_custom_post_link) . '"><img src="' . get_template_directory_uri() . '/assets/images/arrow-left.png"  class="arrow-left"/></a>';
    echo '<a title="' . $next_custom_post_title . '" href="' . esc_url($next_custom_post_link) . '"><img src="' . get_template_directory_uri() . '/assets/images/arrow-right.png"  class="arrow-right"/></a>';
    ?>
</div>


    </div>
</section>
<?php
get_footer();
?>



