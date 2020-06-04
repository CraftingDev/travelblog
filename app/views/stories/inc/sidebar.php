<aside class="layout-blog__sidebar">
        <!-- widget-text__widget -->
        <section class="widget-text__widget widget-text__style-02 widget">
            <h3 class="widget-title">categories</h3>
            <div class="widget-text__content">
                <ul>
                    <?php foreach ($data['categories'] as $category) : ?>
                        <li><a class="eppMe"
                               href="<?php echo URLROOT . '/categories/' . $category->ps_cat_slug . '/' . cleanerUrl($category->ps_cat_name); ?>"><i
                                        class="fas fa-chevron-right"></i> <?php echo $category->ps_cat_name; ?><span class="badge"> (<?php echo $category->post_count; ?>)</span></br><small><?php echo $category->ps_cat_desc; ?></small></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section><!-- End / widget-text__widget -->


        <!-- widget-text__widget -->
        <section class="widget-text__widget widget-text__style-04 widget">
            <h3 class="widget-title">recent post</h3>
            <div class="widget-text__content">

                <!--  -->
                <div class="post-01__style-03">
                    <div>
                        <h2 class="post-01__title"><a href="#">Design a Perfect Homepage</a></h2>
                        <div class="post-01__time">Oct 26, 2017</div>
                        <div class="post-01__note">by Alice Brooks</div>
                    </div>
                </div><!-- End /  -->

            </div>
        </section><!-- End / widget-text__widget -->

</aside>