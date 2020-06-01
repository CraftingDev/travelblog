<div id="page-content"><!-- Needed for sticky footer-->
    <main role="main">


        <?php require APPROOT . '/views/inc/slider.php'; ?>


<section>
    <div class="container-fluid">
        <h1 class="text-center text-uppercase mt-5 mb-5"><?php echo SITENAME; ?></h1>
        <div class="row">
            <div class="col-sm-6 mb-5">
                <img class="img-fluid" src="<?php echo URLROOT; ?>/img/cartoon-min.png">
            </div>
        <div class="col-sm-5 lead text-justify mb-5">
                <p>
                    <?php echo $data['siteDesc']; ?>
                   <br><br><strong class="lead font-weight-bold">Author: Janaina Santos.</strong>
                </p>
         </div>

    </div>
</section>
    </main>
</div><!-- Page id ends sticky footer-->
