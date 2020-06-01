<div id="page-content"><!-- Needed for sticky footer-->
    <main role="main">
        <section>
            <div class="container">
                <h1 class="text-center text-uppercase ">< Contact ></h1>
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="card card-body bg-light mt-4">
                            <?php echo flash('contact_message'); ?>
                            <?php echo flash_error('contact_error'); ?>
                            <form class="icon-form" action="<?php echo URLROOT; ?>/p/contact" method="post" novalidate>
                             <div class="form-row">
                                <div  class="col-md-6 mb-3">
                                    <label for="ctName"><i class="fas fa-signature formIcons"></i> <span class="inline-span"> Name: <sub>*</sub></span></label>
                                    <input type="text" name="ctName"
                                           class="form-control form-control-lg <?php echo (!empty($data['ctName_err'])) ? 'is-invalid' : ''; ?>"
                                           value="<?php echo $data['ctName']; ?>" required>
                                    <span class="invalid-feedback"><?php echo $data['ctName_err']; ?></span>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="ctEmail"><i class="fas fa-at formIcons"></i> <span class="inline-span"> Email: <sub>*</sub></span></label>
                                    <input type="email" name="ctEmail"
                                           class="form-control form-control-lg <?php echo (!empty($data['ctEmail_err'])) ? 'is-invalid' : ''; ?>"
                                           value="<?php echo $data['ctEmail']; ?>" required>
                                    <span class="invalid-feedback"><?php echo $data['ctEmail_err']; ?></span>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="ctMsg"><i class="far fa-comment-alt formIcons"></i> <span class="inline-span">
                                            Message: <sub>*</sub></span> </label>
                                    <textarea name="ctMsg"
                                           class="form-control form-control-lg profile_form_bio <?php echo (!empty($data['ctMsg_err'])) ? 'is-invalid' : ''; ?>" required><?php echo $data['ctMsg']; ?></textarea>
                                    <span class="invalid-feedback"><?php echo $data['ctMsg_err']; ?></span>
                                </div>

                                <div class="form-control border-0">
                                    <input type="submit" value="Send" class="btn color-dark-green btn-block">
                                </div>


                             </div>
                            </form>

                        </div>
                    </div>



                </div>
            </div>
        </section>

    </main>
</div><!-- Page id ends sticky footer-->