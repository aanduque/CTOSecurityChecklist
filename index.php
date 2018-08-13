<?php get_header(); ?>

  <body <?php body_class(); ?>>

    <!-- Mobile menu -->
    <div class="mobile-menu">
      <img src="<?php echo get_theme_file_uri("/docs/images/cross.svg"); ?>" alt="Close the menu" class="close">
      <ul class="nav">
        
        <?php

        $categories = get_categories(); 
        
        foreach ($categories as $index => $category) : ?>

          <li class="selected">
            <a href="#<?php echo $category->slug; ?>">
              <?php echo $category->name; ?>
            </a>
          </li>
        
        <?php endforeach; ?>

        <!-- <li class="selected"><a href="#company">Your company</a></li>
        <li><a href="#employees">Your employees</a></li>
        <li><a href="#infrasructure">Your infrastructure</a></li>
        <li><a href="#code">Your code</a></li>
        <li><a href="#application">Your application</a></li>
        <li><a href="#users">Your product users</a></li> -->
      </ul>
      <div class="divider"></div>
      <div class="newsletter-mob">
        <div class="subtitle">Stay up to date with major changes in the list</div>
        
        <?php if ( is_active_sidebar('subscribe-form') ) : ?>
            <?php dynamic_sidebar('subscribe-form'); ?>
        <?php endif; ?>

      </div>
      <div class="divider"></div>
      <div class="social-mob">
        <h3>Share on</h3>
        <ul>
          <li>
            <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(home_url()); ?>&via=<?php echo urlencode(bloginfo('name')); ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="21">
                <path fill-rule="evenodd" d="M23.26 3.44c-.02-.01-.038-.03-.056-.05-1.088-.994-2.366-1.47-3.835-1.414l-.05-.102c.01-.01.02-.01.02-.01 1.33-.3 2.12-.607 2.35-.94.08-.27-.02-.42-.31-.457-.67.083-1.29.223-1.84.438.7-.438.97-.746.81-.905-.69.02-1.43.365-2.21 1.045.29-.485.4-.747.324-.793-.37.252-.698.523-.978.81-.59.644-1.06 1.24-1.428 1.78l-.02.048c-.933 1.482-1.586 2.973-1.976 4.492l-.145.113-.03.027c-.564-.69-1.234-1.267-2.04-1.735-.95-.605-2.065-1.183-3.35-1.742-1.377-.708-2.8-1.295-4.24-1.752-.01 1.576.78 2.833 2.35 3.747v.028c-.556-.01-1.09.074-1.607.233.1 1.47 1.16 2.47 3.172 3.03l-.01.03c-.787-.04-1.44.23-1.948.79.66 1.27 1.83 1.88 3.526 1.83-.336.17-.598.36-.77.56-.31.32-.41.69-.31 1.12.364.65 1.016.94 1.977.9l.06.07-.03.03c-1.66 1.677-3.66 2.433-6.01 2.273l-.03.02c-1.43-.02-2.96-.69-4.62-2.034 1.67 2.35 3.88 4.044 6.62 5.107 3.14 1.02 6.275 1.098 9.4.23h.056c3.038-.86 5.61-2.62 7.73-5.284.98-1.4 1.598-2.73 1.843-4.01 1.583.056 2.725-.39 3.432-1.34l-.014-.024c-.527.186-1.56.13-3.09-.176v-.17c0-.002 0-.002.01 0 1.675-.18 2.663-.71 2.98-1.59-1.17.45-2.32.46-3.46.04-.21-1.55-.95-2.953-2.24-4.23"/>
              </svg>
            </a>
          </li>
          <li>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(home_url()); ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="25">
                <path fill-rule="evenodd" d="M11.63 8.095H7.67V5.5c0-.974.646-1.2 1.1-1.2h2.797V.014L7.717 0C3.443 0 2.47 3.195 2.47 5.24v2.855H0v4.414h2.47V25h5.2V12.51h3.507l.454-4.415"/>
              </svg>
            </a>
          </li>
          <li>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(home_url()); ?>&title=<?php echo urlencode(bloginfo('name')); ?>&summary=<?php echo urlencode(get_the_excerpt($post->ID)); ?>&source=">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25">
                <path fill-rule="evenodd" d="M21.128 20.927h-3.764v-6.04c0-1.516-.544-2.552-1.907-2.552-1.04 0-1.66.698-1.932 1.373-.1.24-.123.578-.123.915v6.304H9.637s.05-10.23 0-11.288h3.765v1.596c.5-.77 1.395-1.864 3.393-1.864 2.476 0 4.333 1.614 4.333 5.082v6.472zM5.672 8.097h-.025c-1.263 0-2.08-.867-2.08-1.95 0-1.107.843-1.95 2.13-1.95 1.288 0 2.08.843 2.106 1.95 0 1.083-.818 1.95-2.13 1.95zM3.79 20.927h3.764V9.64H3.79v11.287zM23.08 0H1.84C.825 0 0 .802 0 1.79v21.42C0 24.196.824 25 1.84 25h21.24c1.018 0 1.843-.803 1.843-1.79V1.79c0-.988-.825-1.79-1.842-1.79z"/>
              </svg>
            </a>
          </li>
        </ul>
      </div>
      <div class="divider"></div>
      
    </div>

    <!-- Main content -->
    <div class="wrapper">
      <div class="columns">
        <!-- Left panel -->
        <div class="fixed">
          <img src="<?php echo get_theme_file_uri("/docs/images/burger.svg"); ?>" alt="" class="burger">
          
          <?php echo checklist_the_custom_logo(); ?>

          <nav>
            <ul>
              <?php

              $categories = get_categories(); 
              
              foreach ($categories as $index => $category) : ?>

                <li class="selected">
                  <a href="#<?php echo $category->slug; ?>">
                    <?php echo $category->name; ?>
                  </a>
                </li>
              
              <?php endforeach; ?>
              <!-- <li class="active"><a href="#company">Your company</a></li>
              <li><a href="#employees">Your employees</a></li>
              <li><a href="#infrasructure">Your infrastructure</a></li>
              <li><a href="#code">Your code</a></li>
              <li><a href="#application">Your application</a></li>
              <li><a href="#users">Your product users</a></li> -->
            </ul>
          </nav>
          <div class="social">
            <h3><?php _e('Share on', 'checklist'); ?></h3>
            <ul>
              <li>
                <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(home_url()); ?>&via=<?php echo urlencode(bloginfo('name')); ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="21">
                    <path fill-rule="evenodd" d="M23.26 3.44c-.02-.01-.038-.03-.056-.05-1.088-.994-2.366-1.47-3.835-1.414l-.05-.102c.01-.01.02-.01.02-.01 1.33-.3 2.12-.607 2.35-.94.08-.27-.02-.42-.31-.457-.67.083-1.29.223-1.84.438.7-.438.97-.746.81-.905-.69.02-1.43.365-2.21 1.045.29-.485.4-.747.324-.793-.37.252-.698.523-.978.81-.59.644-1.06 1.24-1.428 1.78l-.02.048c-.933 1.482-1.586 2.973-1.976 4.492l-.145.113-.03.027c-.564-.69-1.234-1.267-2.04-1.735-.95-.605-2.065-1.183-3.35-1.742-1.377-.708-2.8-1.295-4.24-1.752-.01 1.576.78 2.833 2.35 3.747v.028c-.556-.01-1.09.074-1.607.233.1 1.47 1.16 2.47 3.172 3.03l-.01.03c-.787-.04-1.44.23-1.948.79.66 1.27 1.83 1.88 3.526 1.83-.336.17-.598.36-.77.56-.31.32-.41.69-.31 1.12.364.65 1.016.94 1.977.9l.06.07-.03.03c-1.66 1.677-3.66 2.433-6.01 2.273l-.03.02c-1.43-.02-2.96-.69-4.62-2.034 1.67 2.35 3.88 4.044 6.62 5.107 3.14 1.02 6.275 1.098 9.4.23h.056c3.038-.86 5.61-2.62 7.73-5.284.98-1.4 1.598-2.73 1.843-4.01 1.583.056 2.725-.39 3.432-1.34l-.014-.024c-.527.186-1.56.13-3.09-.176v-.17c0-.002 0-.002.01 0 1.675-.18 2.663-.71 2.98-1.59-1.17.45-2.32.46-3.46.04-.21-1.55-.95-2.953-2.24-4.23"/>
                  </svg>
                </a>
              </li>
              <li>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(home_url()); ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="25">
                    <path fill-rule="evenodd" d="M11.63 8.095H7.67V5.5c0-.974.646-1.2 1.1-1.2h2.797V.014L7.717 0C3.443 0 2.47 3.195 2.47 5.24v2.855H0v4.414h2.47V25h5.2V12.51h3.507l.454-4.415"/>
                  </svg>
                </a>
              </li>
              <li>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(home_url()); ?>&title=<?php echo urlencode(bloginfo('name')); ?>&summary=<?php echo urlencode(get_the_excerpt($post->ID)); ?>&source=">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25">
                    <path fill-rule="evenodd" d="M21.128 20.927h-3.764v-6.04c0-1.516-.544-2.552-1.907-2.552-1.04 0-1.66.698-1.932 1.373-.1.24-.123.578-.123.915v6.304H9.637s.05-10.23 0-11.288h3.765v1.596c.5-.77 1.395-1.864 3.393-1.864 2.476 0 4.333 1.614 4.333 5.082v6.472zM5.672 8.097h-.025c-1.263 0-2.08-.867-2.08-1.95 0-1.107.843-1.95 2.13-1.95 1.288 0 2.08.843 2.106 1.95 0 1.083-.818 1.95-2.13 1.95zM3.79 20.927h3.764V9.64H3.79v11.287zM23.08 0H1.84C.825 0 0 .802 0 1.79v21.42C0 24.196.824 25 1.84 25h21.24c1.018 0 1.843-.803 1.843-1.79V1.79c0-.988-.825-1.79-1.842-1.79z"/>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <!-- Right panel -->
        <div class="col-9">
          <h1><?php the_title(); ?></h1>
          <p class="description"><?php echo get_the_content(); ?></p>
          
          <div class="filter-bar">

            <?php
            $terms = get_terms('stage', array(
              'hide_empty' => true,
            ));
            ?>

            <?php if (!empty($terms)) : ?>

              <h3><?php _e('Stage', 'checklist'); ?></h3>

              <ul class="selected-3">
                <?php foreach( $terms as $term ) : ?>
                  <li class="<?php echo $term->slug;?>"><?php echo $term->name;?></li>
                <?php endforeach; ?>
                <li class="filler">&nbsp;</li>
              </ul>

            <?php endif; ?>

          </div>

          <?php

  $categories = get_categories(); 
  
  foreach ($categories as $index => $category) : ?>

<div class="scrollspy" id="<?php echo $category->slug; ?>">
        <h2><?php echo $category->name; ?></h2>
        <ul class="checklist">

        <?php 
        
        $args = array(
            'posts_per_page'   => -1,
            'category_name'    => $category->slug,
          );
          
          $posts_array = get_posts($args); 
          
          foreach ($posts_array as $post) : 

            $terms = get_the_terms( $post, 'stage' );
            $classes = implode(' ', array_column($terms, 'slug'));
            $stages = implode(', ', array_column($terms, 'name'));

          ?>

          <li class="<?php echo $classes; ?>"> 
                <div class="header">
                    <div class="check">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26">
            <g fill="none" fill-rule="evenodd" stroke-width="3" transform="translate(2 2)">
              <path stroke="#9012FE" d="M6 11.402l2.874 2.934L16.06 7"/>
              <circle cx="11" cy="11" r="11"/>
            </g>
          </svg>
                    </div>
                    <div class="expend-bar">
                        <p><?php echo $post->post_title; ?></p>
                        <span class="category"><?php echo $stages; ?></span>
                    </div>
                    <div class="btn">
                        <img src="<?php get_theme_file_uri("/docs/images/arrow-bottom.svg"); ?>" alt="" class="arrow">
                    </div>
                </div>
                <div class="body">
                    <?php echo wpautop($post->post_content); ?>
            </li>


          <?php endforeach; ?>


  </ul>
</div>

<?php endforeach; ?>

          <?php endwhile; endif; ?>

        <?php get_footer(); ?>

  </body>
</html>
