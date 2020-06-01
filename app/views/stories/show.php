<div id="page-content"><!-- Needed for sticky footer-->
    <main role="main">
        <section class="bg-banner clip-ellipse">
            <div class="mx-auto d-block text-center">
                <img src="<?php echo URLROOT . '/storyImg/' . $data['post']->ps_img; ?>"
                     alt="<?php echo $data['post']->ps_img; ?>">
            </div>
        </section>

        <section>
            <!-- Start post-content Area -->
            <div class="offset-lg-9 col-lg-3">
                <a href="#">
                    <div class="yt-subscribe">
                        <img width="150" class="img-fluid rounded-circle userAvatar-img userAvatar-white" src="<?php echo URLROOT; ?>/img/me.jpg" alt="Drifting Dane">
                    </div><!-- .yt-subscribe -->
                </a>
            </div><!-- .col -->

            <div class="consult-postDetail">
                <div class="container">
                    <div class="consult-postDetail__main">
                        <!-- social-01 -->
                        <div class="social-01 social-01__style-02">
                            <nav class="social-01__navSocial">
                                <?php if (!empty($data['social']->facebook_so)) : ?>
                                    <a class="social-01__item" id="facebook-page-footer"
                                       href="<?php echo $data['social']->facebook_so; ?>" target="_blank"
                                       title="<?php echo SITENAME; ?> on Facebook"><i
                                                class="fab fa-facebook fa-fw"></i></a>
                                <?php endif; ?>
                                <?php if (!empty($data['social']->twitter_so)) : ?>
                                    <a class="social-01__item" href="<?php echo $data['social']->twitter_so; ?>"
                                       target="_blank"
                                       title="<?php echo SITENAME; ?> on Twitter"><i
                                                class="fab fa-twitter fa-fw"></i></a>
                                <?php endif; ?>
                                <?php if (!empty($data['social']->linkedin_so)) : ?>
                                    <a class="social-01__item" id="linkedin-page-footer"
                                       href="<?php echo $data['social']->linkedin_so; ?>" target="_blank"
                                       title="<?php echo SITENAME; ?> on Linkedin"><i
                                                class="fab fa-linkedin fa-fw"></i></a>
                                <?php endif; ?>
                                <?php if (!empty($data['social']->google_so)) : ?>
                                    <a class="social-01__item" href="<?php echo $data['social']->google_so; ?>"
                                       target="_blank"
                                       title="<?php echo SITENAME; ?> on google plus"><i
                                                class="fab fa-google-plus-g fa-fw"></i></a>
                                <?php endif; ?>
                                <?php if (!empty($data['social']->instagram_so)) : ?>
                                    <a class="social-01__item" id="instagram-page-footer"
                                       href="<?php echo $data['social']->instagram_so; ?>" target="_blank"
                                       title="<?php echo SITENAME; ?> on Instagram"><i
                                                class="fab fa-instagram fa-fw"></i></a>
                                <?php endif; ?>

                                <?php if (!empty($data['social']->quora_so)) : ?>
                                    <a class="social-01__item" id="quora-page-footer"
                                       href="<?php echo $data['social']->quora_so; ?>" target="_blank"
                                       title="<?php echo SITENAME; ?> on Quora"><i
                                                class="fab fa-quora fa-fw"></i></a>
                                <?php endif; ?>

                                <?php if (!empty($data['social']->youtube_so)) : ?>
                                    <a class="social-01__item" href="<?php echo $data['social']->youtube_so; ?>"
                                       target="_blank"
                                       title="<?php echo SITENAME; ?> on Youtube"><i
                                                class="fab fa-youtube fa-fw"></i></a>
                                <?php endif; ?>

                            </nav>
                        </div><!-- End / social-01 -->

                        <div class="row">
                            <div class="col-lg-10 col-xl-8 offset-0 offset-sm-0 offset-md-0 offset-lg-1 offset-xl-2 ">
                                <div class="consult-postDetail__content">
                                    <div class="row">
                                        <div class="col-xl-11 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
                                            <h1><?php echo $data['post']->ps_title; ?></h1>
                                            <ul class="consult-postDetail__meta">
                                                <li><i class="fa fa-user"
                                                       aria-hidden="true"></i> <?php echo $data['post']->us_first . '&nbsp;' . $data['post']->us_last; ?>
                                                </li>
                                                <li><i class="fa fa-tags"
                                                       aria-hidden="true"></i><?php echo $data['post']->ps_cat_name; ?>
                                                </li>
                                                <li><i class="fa fa-calendar"
                                                       aria-hidden="true"></i><?php echo infoDate($data['post']->ps_created); ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div id="fitvids" class="col-xl-11 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
                                            <p class="text"><?php echo $data['post']->ps_entry; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Related Posts-->

            <!-- End post-content Area -->

        </section>
    </main>
</div><!-- Page id ends sticky footer-->




