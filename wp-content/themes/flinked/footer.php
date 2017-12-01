<?php
    $QuiSommeNous_title = get_field('qui_sommes-nous--titre', 'option');
    $conseil_title = get_field('conseil_d’achat--titre', 'option');
    $service_title = get_field('services--titre', 'option');

    $link_fb = get_field('url_facebook', 'option');
    $link_twitter = get_field('url_twitter', 'option');
    $link_youtube = get_field('url_youtube', 'option');
?>

        <footer class="footer">
            <div class="footer__item">
                <a href="<?php echo get_option('home'); ?>/" ><img class="footer__item__logo" src="<?=IMAGES_URL?>/bmw.png"/></a>
            </div>
            <div class="footer__item">
                <span class="footer__item__title"><?= $QuiSommeNous_title ?></span>
                <?php
                if( have_rows('qui_sommes-nous--contenu', 'option') ):
                    while ( have_rows('qui_sommes-nous--contenu', 'option') ) : the_row();
                ?>
                    <a class="footer__item__link" href="<?= the_sub_field('qui_sommes-nous--contenu--lien', 'option');?>" target="_blank"><?= the_sub_field('qui_sommes-nous--contenu--texte', 'option');?></a>
                <?php
                    endwhile;
                else :
                endif;
                ?>
            </div>
            <div class="footer__item">
                <span class="footer__item__title"><?= $conseil_title ?></span>
                <?php
                if( have_rows('conseil_d’achat--contenu', 'option') ):
                    while ( have_rows('conseil_d’achat--contenu', 'option') ) : the_row();
                ?>
                    <a class="footer__item__link" href="<?= the_sub_field('conseil_d’achat--contenu--lien', 'option');?>" target="_blank"><?= the_sub_field('conseil_d’achat--contenu--texte', 'option');?></a>
                <?php
                    endwhile;
                else :
                endif;
                ?>
            </div>
            <div class="footer__item">
                <span class="footer__item__title"><?= $service_title ?></span>
                <?php
                if( have_rows('services--contenu', 'option') ):
                    while ( have_rows('services--contenu', 'option') ) : the_row();
                ?>
                    <a class="footer__item__link" href="<?= the_sub_field('services--contenu--lien', 'option');?>" target="_blank"><?= the_sub_field('services--contenu--texte', 'option');?></a>
                <?php
                    endwhile;
                else :
                endif;
                ?>
            </div>
            <div class="footer__item">
                <a class="footer__item__social" target="_blank" href="<?= $link_fb ?>"><img class="footer__item__social__image" src="<?=IMAGES_URL?>/fb.svg"/></a>
                <a class="footer__item__social" target="_blank" href="<?= $link_twitter ?>"><img class="footer__item__social__image" src="<?=IMAGES_URL?>/twit.svg"/></a>
                <a class="footer__item__social" target="_blank" href="<?= $link_youtube ?>"><img class="footer__item__social__image" src="<?=IMAGES_URL?>/yt.svg"/></a>
            </div>
            <span class="footer__copyright">© BMW France 2017</span>
        </footer>
        <!-- Execution de la fonction wp_footer() obligatoire ! -->
        <?php wp_footer();  ?>
    </body>
</html>
