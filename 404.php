<?php
/**
 * 404 Template
 **/

get_header();
?>

<div class="page-wrapper">

    <div class="error-404-wrapper">
        <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
            <h1>Ops, this site could not be found!</h1>
            <p>Are you sure this was the right page?</p>
            <a href="/?lang=en">Take me rather to the home page</a>
        <?php else : ?>
            <h1>Ojsann, denne siden kunne ikke bli funnet!</h1>
            <p>Er du sikker på at det er riktig side?</p>
            <a href="/">Ta meg heller med til vår hjemmeside</a>
        <?php endif;  ?>
    </div>

</div>

<?php
get_footer();
