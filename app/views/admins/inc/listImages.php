<div class="col-sm-10 profileCard mb-5 table-responsive">
    <div class="profileCard-heading text-center mn-3">Photo list
        <?php
        foreach ($data['countImages'] as $count) : ?>
        <span class="text-primary">(<?php echo $count->im; ?>)</span>
        <?php
         endforeach;
        ?>
    </div>

    <table class="table table-sm table-striped table-bordered">
        <thead class="thead-dark mb-2">
        <tr>
            <th scope="col">Category</th>
            <th scope="col">Title</th>
            <th class="text-center" scope="col">Description</th>
            <th class="text-center" scope="col">Img</th>
            <th class="text-center" scope="col">Created</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <thead class="thead-light">
        <tbody>

        <?php
        if(is_array($data['images'])) :
            foreach($data['images'] as $gl) : ?>
                <tr>
                    <th class="text-center text-md-left" scope="col"><?php echo $gl->gl_cat_title; ?></th>
                    <th class="text-center text-md-left" scope="col"><?php echo $gl->gl_title; ?></th>
                    <th class="text-center text-md-left" scope="col"><?php echo $gl->gl_desc; ?></th>
                    <th class="text-center text-md-left" scope="col"><img class="img-fluid" src="<?php echo URLROOT . '/photoImg/thumbs/' . $gl->gl_img; ?>" alt="<?php echo $gl->gl_img; ?>"></th>
                    <th class="text-center text-md-left" scope="col"><small><?php echo infoDate($gl->gl_created); ?></small></th>
                    <th class="text-center p-1" scope="col"><a href="<?php echo URLROOT . '/admins/editImage/' . $gl->gl_id; ?>" class="btn btn-block btn-light btn-sm btn-block-xs"><i class="far fa-edit"></i></a></th>
                    <th class="text-center p-1" scope="col">
                        <form action="<?php echo URLROOT . '/admins/deleteImage/' . $gl->gl_id; ?>" method="post">
                            <input type="hidden" name="returnUrl" value="<?php echo $_GET['url']; ?>">
                            <button type="submit" class="btn btn-sm btn-danger delete_with_icon btn-block btn-block-xs"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </th>
                </tr>
            <?php endforeach;
        endif;
        ?>
        </tbody>
        </thead>
    </table>
</div>