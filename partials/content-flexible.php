<!-- Code to bring partial in -->
<?php get_template_part('partials/content', 'flexible'); ?>
<!-- Flexible partial code to bring in ACF flexible content data -->
<?php
    if( have_rows('global_flexible_content') ):
        while ( have_rows('global_flexible_content') ) : the_row();

            if( get_row_layout() == 'news_section' ): 
                $news_image_data = get_sub_field('news_image');
                $news_size = 'newsImage';
                $news_image = $news_image_data['sizes'][ $news_size ];
                $news_alt = $news_image_data['alt'];

                $right = get_sub_field('news_image_right');
            ?>
                <!-- ** Universal - News box - Picture right ** -->
                <section class="universal-news-box">
                    <div class="global-container_medium">
                        <div class="news-box_container">
                            <div class="news-box_image-container <?php if($right){ echo 'right'; } ?>">
                                    <img src="<?php echo $news_image; ?>" alt="<?php echo $news_alt; ?>" class="image-container_image">
                            </div>
                            <div class="news-box_text-container">
                                <h3 class="text-container_title"><?php the_sub_field('news_title'); ?></h3>
                                <hr class="text-container_separator">
                                <p class="text-container_text-content"><?php the_sub_field('news_teaser_text'); ?></p>
                                <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
                                    <a href="<?php the_sub_field('news_link'); ?>" class="text-container_link">Read more</a>
                                <?php else : ?>
                                    <a href="<?php the_sub_field('news_link'); ?>" class="text-container_link">Les mer</a>
                                <?php endif;  ?>
                            </div>
                        </div>
                    </div>
                </section>

            <?php
            elseif( get_row_layout() == 'feature_book' ):
                $feature_book_image_data = get_sub_field('feature_book_image');
                $feature_book_size = 'featureBook';
                $feature_book_image = $feature_book_image_data['sizes'][ $feature_book_size ];
                $feature_book_alt = $feature_book_image_data['alt'];
            ?>
                <!-- ** Universal - Feature item ** -->
                <section class="universal-feature-item">
                    <div class="global-container_medium">
                        <div class="feature-item_left-column">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/Icon_Books.svg" alt="" class="left-column_symbol">
                            <h3 class="left-column_title"><?php the_sub_field('feature_book_title'); ?></h3>
                            <hr class="feature-item_left-column-separator">
                            <p class="left-column_text-area"><?php the_sub_field('feature_book_text'); ?></p>
                            <a href="<?php the_sub_field('feature_book_link'); ?>" class="left-column_link"><?php the_sub_field('feature_book_link_text'); ?></a>
                        </div>
                        <div class="feature-item_right-column">
                            <img src="<?php echo $feature_book_image; ?>" alt="<?php echo $feature_book_alt; ?>" class="right-column_image">
                        </div>
                    </div>
                </section>
            
            <?php
            elseif( get_row_layout() == 'big_image' ):
                $big_image = get_sub_field('image');

                $big_image_data = get_sub_field('image');
                $big_image_size = 'bigImage';
                $big_image = $big_image_data['sizes'][ $big_image_size ];
                $big_image_alt = $big_image_data['alt'];
            ?>
                <!-- ** Universal big 100% image ** -->
                <section class="universal_big-image">
                    <div class="global-container_text">
                        <img src="<?php echo $big_image; ?>" alt="<?php echo $big_image_alt; ?>" class="big-image">
                    </div>
                </section>
            
            <?php
            elseif( get_row_layout() == 'text_field' ):
            ?>
                <!-- ** Universal - Text field ** -->
                <section class="universal-text-field">
                    <div class="global-container_text">
                        <?php if( get_sub_field('text_field_title') ): ?>
                            <h3 class="universal-text-field_title"><?php the_sub_field('text_field_title'); ?></h3>
                        <?php endif; ?>
                        <?php if( get_sub_field('text_field_content') ): ?>
                            <p class="universal-text-field_text">
                                <?php the_sub_field('text_field_content'); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </section>
           
            <?php
            elseif( get_row_layout() == 'quote_image_left' ):
                $quote_image_left_data = get_sub_field('quote_image_left_image');
                $quote_image_left_size = 'quoteImageLeft';
                $quote_image_left = $quote_image_left_data['sizes'][ $quote_image_left_size ];
                $quote_image_left_alt = $quote_image_left_data['alt'];
            ?>
                <!-- ** Universal - Quote with large image on the left ** -->
                <section class="universal-quote_large-image-left">
                    <div class="global-container_text">
                        <div class="large-image-left_left-column">
                            <img src="<?php echo $quote_image_left; ?>" alt="<?php echo $quote_image_left_alt; ?>" class="left-column_image">
                        </div>
                        <div class="large-image-left_right-column">
                            <div class="right-column_separator-container">
                                <hr class="right-column_separator">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/Icon_Sitat_blue.svg" alt="" class="right-column_svg">
                                <hr class="right-column_separator">
                            </div>
                            <h3 class="right-column_main-text"><?php the_sub_field('quote_image_left_quote'); ?></h3>
                            <p class="right-column_quote-author">– <?php the_sub_field('quote_image_left_author'); ?> –</p>
                        </div>
                    </div>
                </section>
            
            <?php
            elseif( get_row_layout() == 'round_image_text' ):
                $round_image = get_sub_field('round_image');

                $round_image_data = get_sub_field('round_image');
                $round_image_size = 'roundImage';
                $round_image = $round_image_data['sizes'][ $round_image_size ];
                $round_image_alt = $round_image_data['alt'];
            ?>
                <!-- ** Universal image-text repeater ** -->
                <section class="three-column_round-image-text">
                    <div class="global-container_text">
                        <div class="round-image-text_left-column">
                            <div class="left-column_image-block">
                                <img src="<?php echo $round_image; ?>" alt="<?php echo $round_alt; ?>" class="image-block_image">
                                <div class="image-block_vertical-line"></div>
                            </div>
                            <?php if( get_sub_field('round_image_person') ): ?>
                                <h3 class="left-column_title"><?php the_sub_field('round_image_person'); ?></h3>
                            <?php endif; ?>
                        </div>
                        <div class="round-image-text_right-column">
                            <h3 class="right-column_title"><?php the_sub_field('round_image_text_title'); ?></h3>
                            <hr class="global-seperator">
                            <p class="right-column_sub-text"><?php the_sub_field('round_image_text_content'); ?></p>
                            <div class="global_align-right">
                                <?php if( get_sub_field('round_image_text_link') ): ?>
                                    <a href="<?php the_sub_field('round_image_text_link'); ?>" class="right-column_link"><?php the_sub_field('round_image_text_link_text'); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </section>

            <?php
            elseif( get_row_layout() == 'full_width_promotion' ):
                $image_tablet_data = get_sub_field('fw_image_tablet');
                $image_tablet_size = 'fullWidthTablet';
                $image_tablet = $image_tablet_data['sizes'][ $image_tablet_size ];
                $image_tablet_alt = $image_tablet_data['alt'];

                $image_desktop = get_sub_field('fw_image_desktop');

                $image_desktop_data = get_sub_field('fw_image_desktop');
                $image_desktop_size = 'headerDesktop';
                $image_desktop = $image_desktop_data['sizes'][ $image_desktop_size ];
                $image_desktop_alt = $image_desktop_data['alt'];
            ?>
                <!-- ** Universal component - Full width promotion with background ** -->
                <section class="universal_full-width-promotion">
                    <div class="container_full-width">
                        <img src="<?php echo $image_tablet; ?>" alt="<?php echo $image_tablet_alt; ?>" class="full-width-promotion_background-image-tablet">
                        <img src="<?php echo $image_desktop; ?>" alt="<?php echo $image_desktop_alt; ?>" class="full-width-promotion_background-image-desktop">            
                        <div class="full-width-promotion_text-floater">
                            <h3 class="text-floater_title"><?php the_sub_field('fw_title'); ?></h3>
                            <?php if( get_sub_field('fw_sub_text') ): ?>
                                <p class="text-floater_sub-title"><?php the_sub_field('fw_sub_text'); ?></p>
                            <?php endif; ?>
                            <a href="<?php the_sub_field('fw_link'); ?>" class="text-floater_link"><?php the_sub_field('fw_link_text'); ?></a>
                        </div>
                    </div>
                </section>

            <?php
            elseif( get_row_layout() == 'fw_quote' ):
            ?>
                <!-- ** Universal - QUOTE ** -->
                <section class="universal-quote">
                    <div class="universal-quote_top-separator-container">
                        <hr class="universal-quote_separator">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/Icon_Sitat_blue.svg" alt="" class="universal-quote_svg">
                        <hr class="universal-quote_separator">                   
                    </div>
                    <h3 class="universal-quote_main-text"><?php the_sub_field('fw_quote_text'); ?></h3>
                    <?php if( get_sub_field('fw_quote_author') ): ?>
                        <p class="universal-quote_from-text">- <?php the_sub_field('fw_quote_author'); ?> -</p>
                    <?php endif; ?>
                    <hr class="universal-quote_large-separator">
                </section>

            <?php
            endif;

        endwhile;

    else :
        // no layouts found

    endif;

    ?>