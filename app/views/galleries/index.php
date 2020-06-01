<div id="page-content"><!-- Needed for sticky footer-->
    <main role="main">
        <div style="height: 150px;"></div>
        <section>
            <div class="container-fluid">
                <h1 class="text-black text-center mb-4">Galleries</h1>
                <div class="text-center mb-4"><a class="btn-sm btn-sm-outline color-orange" onclick="history.go(-1)" href="#">Back</a></div>
                <?php
                require APPROOT . '/views/inc/galleryCategories.php';
                ?>
            </div>
        </section>
    </main>
</div><!-- Page id ends sticky footer-->
