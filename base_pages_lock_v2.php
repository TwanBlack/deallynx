<?php require 'inc/config.php'; ?>
<?php
// Specific Page Options
$one->body_bg = $one->assets_folder . '/img/photos/photo18@2x.jpg';
?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>

<!-- Lock Screen Content -->
<div class="bg-white pulldown">
    <div class="content content-boxed overflow-hidden">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                <div class="push-50-t push-50 animated fadeIn">
                    <!-- Lock Screen Avatar -->
                    <div class="text-center">
                        <?php $one->get_avatar('10', '', 96); ?>
                    </div>
                    <!-- END Lock Screen Avatar -->

                    <!-- Lock Screen Form -->
                    <!-- jQuery Validation (.js-validation-lock class is initialized in js/pages/base_pages_lock.js) -->
                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <form class="js-validation-lock form-horizontal push-50-t" action="base_pages_dashboard.php" method="post">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-primary">
                                    <input class="form-control" type="password" id="lock-password" name="lock-password" placeholder="Please enter your password">
                                    <label for="lock-password">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                <button class="btn btn-sm btn-block btn-default" type="submit">Unlock Account</button>
                            </div>
                        </div>
                    </form>
                    <!-- END Lock Screen Form -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Lock Screen Content -->

<!-- Lock Screen Footer -->
<div class="pulldown push-30-t text-center animated fadeInUp">
    <small class="text-black-op font-w600"><span class="js-year-copy"></span> &copy; <?php echo $one->name . ' ' . $one->version; ?></small>
</div>
<!-- END Lock Screen Footer -->

<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_pages_lock.js"></script>

<?php require 'inc/views/template_footer_end.php'; ?>