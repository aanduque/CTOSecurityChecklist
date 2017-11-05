<?php get_header(); ?>

  <body <?php body_class(); ?>>

    <!-- Mobile menu -->
    <div class="mobile-menu">
      <img src="<?php bloginfo('template_directory');?>/docs/images/cross.svg" alt="Close the menu" class="close">
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
        <div id="mc_embed_signup">
          <form action="//sqreen.us13.list-manage.com/subscribe/post?u=4c3491573cfb8d053d6b76c6a&amp;id=9db3111ac1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
              <div class="mc-field-group">
                <label for="mce-EMAIL">Email Address </label>
                <input type="email" placeholder="your.email@address.com" value="" name="EMAIL" class="required email" id="mce-EMAIL">
              </div>
              <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
              </div>
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_4c3491573cfb8d053d6b76c6a_9db3111ac1" tabindex="-1" value=""></div>
              <div class="clear check"><input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
            </div>
          </form>
        </div>
      </div>
      <div class="divider"></div>
      <div class="social-mob">
        <h3>Share on</h3>
        <ul>
          <li>
            <a href="https://twitter.com/intent/tweet?url=https%3A//cto-security-checklist.sqreen.io/&via=SqreenIO">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="21">
                <path fill-rule="evenodd" d="M23.26 3.44c-.02-.01-.038-.03-.056-.05-1.088-.994-2.366-1.47-3.835-1.414l-.05-.102c.01-.01.02-.01.02-.01 1.33-.3 2.12-.607 2.35-.94.08-.27-.02-.42-.31-.457-.67.083-1.29.223-1.84.438.7-.438.97-.746.81-.905-.69.02-1.43.365-2.21 1.045.29-.485.4-.747.324-.793-.37.252-.698.523-.978.81-.59.644-1.06 1.24-1.428 1.78l-.02.048c-.933 1.482-1.586 2.973-1.976 4.492l-.145.113-.03.027c-.564-.69-1.234-1.267-2.04-1.735-.95-.605-2.065-1.183-3.35-1.742-1.377-.708-2.8-1.295-4.24-1.752-.01 1.576.78 2.833 2.35 3.747v.028c-.556-.01-1.09.074-1.607.233.1 1.47 1.16 2.47 3.172 3.03l-.01.03c-.787-.04-1.44.23-1.948.79.66 1.27 1.83 1.88 3.526 1.83-.336.17-.598.36-.77.56-.31.32-.41.69-.31 1.12.364.65 1.016.94 1.977.9l.06.07-.03.03c-1.66 1.677-3.66 2.433-6.01 2.273l-.03.02c-1.43-.02-2.96-.69-4.62-2.034 1.67 2.35 3.88 4.044 6.62 5.107 3.14 1.02 6.275 1.098 9.4.23h.056c3.038-.86 5.61-2.62 7.73-5.284.98-1.4 1.598-2.73 1.843-4.01 1.583.056 2.725-.39 3.432-1.34l-.014-.024c-.527.186-1.56.13-3.09-.176v-.17c0-.002 0-.002.01 0 1.675-.18 2.663-.71 2.98-1.59-1.17.45-2.32.46-3.46.04-.21-1.55-.95-2.953-2.24-4.23"/>
              </svg>
            </a>
          </li>
          <li>
            <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//cto-security-checklist.sqreen.io/">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="25">
                <path fill-rule="evenodd" d="M11.63 8.095H7.67V5.5c0-.974.646-1.2 1.1-1.2h2.797V.014L7.717 0C3.443 0 2.47 3.195 2.47 5.24v2.855H0v4.414h2.47V25h5.2V12.51h3.507l.454-4.415"/>
              </svg>
            </a>
          </li>
          <li>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A//cto-security-checklist.sqreen.io/&title=The%20SaaS%20CTO%20Security%20Checklist&summary=Protect%20your%20applications%20from%20cybersecurity%20threats%20by%20following%20the%20SaaS%20CTO%20Security%20Checklist.&source=">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25">
                <path fill-rule="evenodd" d="M21.128 20.927h-3.764v-6.04c0-1.516-.544-2.552-1.907-2.552-1.04 0-1.66.698-1.932 1.373-.1.24-.123.578-.123.915v6.304H9.637s.05-10.23 0-11.288h3.765v1.596c.5-.77 1.395-1.864 3.393-1.864 2.476 0 4.333 1.614 4.333 5.082v6.472zM5.672 8.097h-.025c-1.263 0-2.08-.867-2.08-1.95 0-1.107.843-1.95 2.13-1.95 1.288 0 2.08.843 2.106 1.95 0 1.083-.818 1.95-2.13 1.95zM3.79 20.927h3.764V9.64H3.79v11.287zM23.08 0H1.84C.825 0 0 .802 0 1.79v21.42C0 24.196.824 25 1.84 25h21.24c1.018 0 1.843-.803 1.843-1.79V1.79c0-.988-.825-1.79-1.842-1.79z"/>
              </svg>
            </a>
          </li>
        </ul>
      </div>
      <div class="divider"></div>
      <div class="by-sqreen">
        <span>A project by</span>
        <a href="https://www.sqreen.io/?utm_medium=social-owned&utm_source=securitychecklist&utm_campaign=The%20SaaS%20CTO%20Security%20Checklist">
          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="17">
            <path fill="#fff" fill-rule="evenodd" d="M31.8682 8.358s0 .2863-.1415.4772c-.1886.2386-3.4885 4.5332-5.0442 6.5852-1.5557 2.0998-4.7142.9545-4.7142.9545s1.037-.621 1.697-1.432c1.744-2.243 5.0913-6.633 5.0913-6.633s-3.3472-4.295-5.0912-6.586C23.0524.913 21.968.293 21.968.293s3.1586-1.0973 4.7142.9547c1.5557 2.0996 4.8556 6.3944 4.997 6.633.1886.1908.1886.477.1886.477l.0004.0002zM0 8.358s0 .2863.1414.4772c.1414.1907 3.4886 4.5332 4.997 6.5852 1.5087 2.052 4.7143.9545 4.7143.9545s-1.037-.621-1.697-1.432C6.4112 12.7 3.064 8.358 3.064 8.358s3.3473-4.3426 5.0917-6.6332C8.7682.9138 9.8527.2933 9.8527.2933S6.694-.8044 5.1384 1.2475C3.583 3.2995.33 7.642.1884 7.8805.047 8.1195 0 8.358 0 8.358zm15.934-5.4402c-2.8756 0-5.2798 2.4338-5.2798 5.44 0 3.0066 2.357 5.4402 5.28 5.4402 2.9227 0 5.2798-2.4337 5.2798-5.44 0-3.0064-2.4042-5.4402-5.28-5.4402zm33.4345 1.4626L47.5132 6.197c-.2834-.335-.715-.6055-1.2948-.8117-.5154-.1932-1.0308-.2898-1.546-.2898-.4253 0-.7474.0644-.9665.1932-.219.1288-.329.3286-.329.599 0 .451.528.786 1.584 1.005 1.572.335 2.5445.5864 2.9182.7538 1.0565.4896 1.585 1.2884 1.585 2.3965 0 1.2497-.4898 2.1967-1.469 2.841-.8374.554-1.894.831-3.1694.831-1.0825 0-2.01-.1675-2.783-.5025-.7088-.2964-1.456-.8052-2.242-1.5268l1.8746-1.6234c1.005.9663 2.087 1.4495 3.2467 1.4495.554 0 .9666-.087 1.237-.261.2707-.174.406-.4348.406-.7826 0-.4124-.5283-.7216-1.5847-.9277-1.546-.322-2.519-.5733-2.9183-.7537-1.0564-.4767-1.5846-1.2434-1.5846-2.3 0-1.198.464-2.1193 1.3915-2.7635.786-.554 1.7715-.831 2.957-.831 1.546 0 3.06.496 4.5415 1.488zm10.8723-1.2176v13.683h-3.015l-.0385-4.0585c-.348.3092-.7312.541-1.15.6958-.4186.155-.8793.232-1.3818.232-1.4043 0-2.4866-.483-3.2468-1.449-.7602-.966-1.1402-2.403-1.1402-4.31 0-1.584.4316-2.841 1.2948-3.768.799-.863 1.836-1.2945 3.1116-1.2945.605 0 1.14.0998 1.604.2995.463.2.856.506 1.178.918v-.947h2.783zm-2.9376 5.1408c0-.9405-.1674-1.6942-.5025-2.2612-.3736-.6313-.9148-.947-1.6234-.947-.6957 0-1.224.3028-1.5847.9084-.3092.5283-.4638 1.1854-.4638 1.9713 0 1.173.174 2.055.5218 2.648.3478.593.8696.889 1.5654.889.6957 0 1.2175-.267 1.5654-.802.348-.534.5218-1.337.5218-2.406zm4.9198 5.1408V3.1628h3.015v1.0436c.67-.6313 1.6105-.992 2.8216-1.0822l.0193 2.667-.329.0386c-.941.116-1.585.277-1.933.4832-.387.232-.58.625-.58 1.179v5.9524h-3.015zM78.5067 8.922h-7.0734c.0128.902.2705 1.5783.773 2.0293.3994.3737.889.5605 1.4688.5605.529 0 .98-.1482 1.353-.4445.297-.232.683-.6893 1.16-1.3722l2.261 1.179c-1.018 1.894-2.68 2.841-4.986 2.841-1.559 0-2.796-.489-3.71-1.468-.889-.9273-1.3334-2.139-1.3334-3.633 0-1.804.4477-3.208 1.343-4.213.8956-1.005 2.129-1.5075 3.701-1.5075 1.7523 0 3.06.6055 3.9233 1.8166.7343 1.0436 1.108 2.448 1.121 4.213zm-7.112-1.8553h4.097c-.0386-.683-.2834-1.1982-.7343-1.546-.3608-.2835-.799-.4252-1.3142-.4252-.4896 0-.9212.161-1.295.483-.438.3608-.6892.857-.7536 1.4882zM89.379 8.922h-7.0735c.013.902.2706 1.5783.773 2.0293.3995.3737.889.5605 1.469.5605.5282 0 .979-.1482 1.3527-.4445.2964-.232.683-.6893 1.1596-1.3722l2.2612 1.179c-1.0178 1.894-2.68 2.841-4.9862 2.841-1.559 0-2.7958-.489-3.7106-1.468-.889-.9273-1.3336-2.139-1.3336-3.633 0-1.804.4477-3.208 1.3432-4.213s2.129-1.5075 3.701-1.5075c1.7522 0 3.06.6055 3.9232 1.8166.7344 1.0436 1.108 2.448 1.121 4.213zm-7.112-1.8553h4.097c-.0386-.683-.2834-1.1982-.7343-1.546-.3608-.2835-.799-.4252-1.3142-.4252-.4897 0-.9212.161-1.295.483-.438.3608-.6892.857-.7536 1.4882zm8.6303 6.3777V3.1628h3.015v.9084c.335-.3994.7505-.6958 1.2465-.889.496-.1933 1.0726-.29 1.7297-.29 1.0436 0 1.823.2448 2.3384.7345.515.4896.773 1.2304.773 2.2225v7.5952h-3.015V7.0088c0-.567-.123-.989-.367-1.266-.245-.277-.612-.4154-1.102-.4154-.529 0-.928.1417-1.198.425-.271.2836-.406.7152-.406 1.295v6.397h-3.015z" opacity=".4"/>
          </svg>
        </a>
      </div>
    </div>

    <!-- Main content -->
    <div class="wrapper">
      <div class="columns">
        <!-- Left panel -->
        <div class="fixed">
          <img src="/images/burger.svg" alt="" class="burger">
          <img src="/images/scsc-logo.svg" alt="Saas CTO Security Checklist" class="logo">
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
            <h3>Share on</h3>
            <ul>
              <li>
                <a href="https://twitter.com/intent/tweet?text=The%20Startup%20Security%20Checklist&url=http%3A//cto-security-checklist.sqreen.io/&via=SqreenIO">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="21">
                    <path fill-rule="evenodd" d="M23.26 3.44c-.02-.01-.038-.03-.056-.05-1.088-.994-2.366-1.47-3.835-1.414l-.05-.102c.01-.01.02-.01.02-.01 1.33-.3 2.12-.607 2.35-.94.08-.27-.02-.42-.31-.457-.67.083-1.29.223-1.84.438.7-.438.97-.746.81-.905-.69.02-1.43.365-2.21 1.045.29-.485.4-.747.324-.793-.37.252-.698.523-.978.81-.59.644-1.06 1.24-1.428 1.78l-.02.048c-.933 1.482-1.586 2.973-1.976 4.492l-.145.113-.03.027c-.564-.69-1.234-1.267-2.04-1.735-.95-.605-2.065-1.183-3.35-1.742-1.377-.708-2.8-1.295-4.24-1.752-.01 1.576.78 2.833 2.35 3.747v.028c-.556-.01-1.09.074-1.607.233.1 1.47 1.16 2.47 3.172 3.03l-.01.03c-.787-.04-1.44.23-1.948.79.66 1.27 1.83 1.88 3.526 1.83-.336.17-.598.36-.77.56-.31.32-.41.69-.31 1.12.364.65 1.016.94 1.977.9l.06.07-.03.03c-1.66 1.677-3.66 2.433-6.01 2.273l-.03.02c-1.43-.02-2.96-.69-4.62-2.034 1.67 2.35 3.88 4.044 6.62 5.107 3.14 1.02 6.275 1.098 9.4.23h.056c3.038-.86 5.61-2.62 7.73-5.284.98-1.4 1.598-2.73 1.843-4.01 1.583.056 2.725-.39 3.432-1.34l-.014-.024c-.527.186-1.56.13-3.09-.176v-.17c0-.002 0-.002.01 0 1.675-.18 2.663-.71 2.98-1.59-1.17.45-2.32.46-3.46.04-.21-1.55-.95-2.953-2.24-4.23"/>
                  </svg>
                </a>
              </li>
              <li>
                <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//cto-security-checklist.sqreen.io/">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="25">
                    <path fill-rule="evenodd" d="M11.63 8.095H7.67V5.5c0-.974.646-1.2 1.1-1.2h2.797V.014L7.717 0C3.443 0 2.47 3.195 2.47 5.24v2.855H0v4.414h2.47V25h5.2V12.51h3.507l.454-4.415"/>
                  </svg>
                </a>
              </li>
              <li>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A//cto-security-checklist.sqreen.io/&title=The%20SaaS%20CTO%20Security%20Checklist&summary=Protect%20your%20applications%20from%20cybersecurity%20threats%20by%20following%20the%20SaaS%20CTO%20Security%20Checklist.&source=">
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
            <h3>Company Stage</h3>
            <ul class="selected-three">
              <li class="seed">Seed</li>
              <li class="seriesa">Series A</li>
              <li class="above">Post-Series A</li>
            </ul>
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

          ?>

<li class="seed">
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
                        <span class="category">Seed</span>
                    </div>
                    <div class="btn">
                        <img src="/images/arrow-bottom.svg" alt="" class="arrow">
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
