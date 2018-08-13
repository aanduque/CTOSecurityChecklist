h2,
.filter-bar ul li:hover,
nav li.active a,
nav li a:hover,
.checklist li .body a,
a {
  color: <?php echo get_theme_mod( 'main_color', '#591694' ); ?>;
}

.filter-bar ul::after,
.newsletter #mc_embed_signup #mc-embedded-subscribe,
.mobile-menu,
.filter-bar ul li.filler,
.formkit-submit {
  background-color: <?php echo get_theme_mod( 'main_color', '#591694' ); ?> !important;
}

*::-moz-selection {
  background-color: <?php echo get_theme_mod( 'main_color', '#591694' ); ?> !important;
}

*::selection {
  background-color: <?php echo get_theme_mod( 'main_color', '#591694' ); ?> !important;
}

.social li a:hover svg path,
.mobile-menu .social-mob li a:hover svg path {
  fill: <?php echo get_theme_mod( 'main_color', '#591694' ); ?> ;
}

.checklist li .header .check.checked:hover circle,
.checklist li .header .check.checked circle,
.checklist li .header .check.checked path {
  stroke: <?php echo get_theme_mod( 'main_color', '#591694' ); ?> ;
}