<!-- start footer Area -->
<div class="col-md-12 text-right consult_backToTop">
    <div class="footer__item"><a href="#" id="back-to-top"> <i class="fa fa-angle-up" aria-hidden="true"> </i><span> Back To Top</span></a></div>
</div>
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Navigation Links</h6>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Feature</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Portfolio</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="mb-20">YouTube Channel</h6>
                    <ul class="instafeed d-flex flex-wrap">
                        <iframe src="https://www.youtube.com/embed?listType=user_uploads&list=rM8Y_NyW1aIbfKWcs4JcCw" width="480" height="400"></iframe>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>About Agency</h6>
                    <p>
                        The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point
                    </p>
                </div>
            </div>
        </div>

        <div class="row footer-bottom d-flex justify-content-between align-items-center">
            <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <small><?php echo SITENAME; ?> created by <a class="red" href="<?php echo CREATEDBYURL; ?>"><?php echo CREATEDBY; ?></a><span> | <?php echo date("Y");?> all rights reserved</span>
                    <a class="red" href="<?php echo URLROOT; ?>"><?php echo COPYRIGHT . SITENAME; ?></a></small>
             </p>
            <div class="col-lg-4 col-sm-12 footer-social">
                <?php if (!empty($data['social']->facebook_so)) : ?>
                    <a id="facebook-page-footer" href="<?php echo $data['social']->facebook_so; ?>" target="_blank"
                       title="<?php echo SITENAME; ?> on Facebook"><i
                                class="fab fa-facebook fa-fw"></i></a>
                <?php endif; ?>
                <?php if (!empty($data['social']->twitter_so)) : ?>
                    <a href="<?php echo $data['social']->twitter_so; ?>" target="_blank"
                       title="<?php echo SITENAME; ?> on Twitter"><i
                                class="fab fa-twitter fa-fw"></i></a>
                <?php endif; ?>
                <?php if (!empty($data['social']->linkedin_so)) : ?>
                    <a id="linkedin-page-footer" href="<?php echo $data['social']->linkedin_so; ?>" target="_blank"
                       title="<?php echo SITENAME; ?> on Linkedin"><i
                                class="fab fa-linkedin fa-fw"></i></a>
                <?php endif; ?>
                <?php if (!empty($data['social']->google_so)) : ?>
                    <a href="<?php echo $data['social']->google_so; ?>" target="_blank"
                       title="<?php echo SITENAME; ?> on google plus"><i
                                class="fab fa-google-plus-g fa-fw"></i></a>
                <?php endif; ?>
                <?php if (!empty($data['social']->instagram_so)) : ?>
                    <a id="instagram-page-footer" href="<?php echo $data['social']->instagram_so; ?>" target="_blank"
                       title="<?php echo SITENAME; ?> on Instagram"><i
                                class="fab fa-instagram fa-fw"></i></a>
                <?php endif; ?>

                <?php if (!empty($data['social']->quora_so)) : ?>
                    <a id="quora-page-footer" href="<?php echo $data['social']->quora_so; ?>" target="_blank"
                       title="<?php echo SITENAME; ?> on Quora"><i
                                class="fab fa-quora fa-fw"></i></a>
                <?php endif; ?>

                <?php if (!empty($data['social']->youtube_so)) : ?>
                    <a href="<?php echo $data['social']->youtube_so; ?>" target="_blank"
                       title="<?php echo SITENAME; ?> on Youtube"><i
                                class="fab fa-youtube fa-fw"></i></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
<!-- End footer Area -->


<script src="<?php echo URLROOT; ?>/js/jquery-3.4.1.min.js" type="text/javascript"></script>
<script src="<?php echo URLROOT; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo URLROOT; ?>/js/menu.min.js"type="text/javascript" ></script>
<script src="<?php echo URLROOT; ?>/js/fitvids.js" type="text/javascript"></script>
<script src="<?php echo URLROOT; ?>/js/image-reloaded.js" type="text/javascript"></script>
<script src="<?php echo URLROOT; ?>/js/isotope.js" type="text/javascript"></script>
<script src="<?php echo URLROOT; ?>/js/main.js" type="text/javascript"></script>

<script src="<?php echo URLROOT; ?>/js/lightgallery-all.min.js"></script>
<script src="<?php echo URLROOT; ?>/js/layerslider/js/greensock.js"></script>
<script src="<?php echo URLROOT; ?>/js/layerslider/js/layerslider.transitions.js"></script>
<script src="<?php echo URLROOT; ?>/js/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>

<script>

    $(document).ready(function(){
    // Basic FitVids Test
    $(".fitvids").fitVids();

            $('#lightgallery').lightGallery({
                thumbnail:false,
                animateThumb: true,
                showThumbByDefault: false
            });
    });

</script>
<!-- Initializing the slider -->
<script type="text/javascript">

    $(document).ready(function() {
        $('#slider').layerSlider({
            sliderVersion: '6.0.0',
            responsiveUnder: 0,
            maxRatio: 1,
            slideBGSize: 'auto',
            autoPauseSlideshow: 'false',
            hideUnder: 0,
            hideOver: 100000,
            skin: 'outline',
            thumbnailNavigation: 'disabled',
            skinsPath: '<?php echo URLROOT; ?>/js/layerslider/skins/'
        });
    });

</script>
</body>
</html>