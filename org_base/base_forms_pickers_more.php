<?php require '../inc/config.php'; ?>
<?php require '../inc/views/template_head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/select2/select2.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/select2/select2-bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/jquery-auto-complete/jquery.auto-complete.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/ion-rangeslider/css/ion.rangeSlider.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/ion-rangeslider/css/ion.rangeSlider.skinHTML5.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/dropzonejs/dropzone.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/jquery-tags-input/jquery.tagsinput.min.css">

<?php require '../inc/views/template_head_end.php'; ?>
<?php require '../inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-8">
            <h1 class="page-heading">
                Pickers &amp; More <small>Carefully integrated JS plugins that will enhance your forms with great features.</small>
            </h1>
        </div>
        <div class="col-sm-4 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Forms</li>
                <li><a class="link-effect" href="">Pickers &amp; More</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content content-narrow">
    <!-- Datepicker -->
    <!-- Bootstrap Datepicker (.js-datepicker and .input-daterange class is initialized in App() -> uiHelperDatepicker()) -->
    <!-- For more info and examples you can check out https://github.com/eternicode/bootstrap-datepicker -->
    <h2 class="content-heading">Bootstrap Datepicker</h2>
    <div class="row">
        <div class="col-lg-6">
            <!-- Datepicker (Default forms) -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Default</h3>
                </div>
                <div class="block-content block-content-narrow">
                    <form class="form-horizontal" action="base_forms_pickers_more.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-datepicker1">Datepicker</label>
                            <div class="col-md-6">
                                <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="example-datepicker1" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input class="js-datepicker form-control" type="text" id="example-datepicker2" name="example-datepicker2" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input class="js-datepicker form-control" type="text" id="example-datepicker3" name="example-datepicker3" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-daterange1">Date Range</label>
                            <div class="col-md-8">
                                <div class="input-daterange input-group" data-date-format="mm/dd/yyyy">
                                    <input class="form-control" type="text" id="example-daterange1" name="example-daterange1" placeholder="From">
                                    <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
                                    <input class="form-control" type="text" id="example-daterange2" name="example-daterange2" placeholder="To">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Inline Datepicker</label>
                            <div class="col-md-8">
                                <div class="js-datepicker"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Datepicker (Default forms) -->
        </div>
        <div class="col-lg-6">
            <!-- Datepicker (Material forms) -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Material</h3>
                </div>
                <div class="block-content block-content-narrow">
                    <form class="form-horizontal push-10-t" action="base_forms_pickers_more.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material">
                                    <input class="js-datepicker form-control" type="text" id="example-datepicker4" name="example-datepicker4" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                    <label for="example-datepicker4">Choose a date</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material">
                                    <input class="js-datepicker form-control" type="text" id="example-datepicker5" name="example-datepicker5" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                    <label for="example-datepicker5">Choose a date</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material">
                                    <input class="js-datepicker form-control" type="text" id="example-datepicker6" name="example-datepicker6" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                    <label for="example-datepicker6">Choose a date</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Datepicker (Material forms) -->
        </div>
    </div>
    <!-- END Datepicker -->

    <!-- Datetimepicker -->
    <!-- Bootstrap Datetimepicker (.js-datetimepicker class is initialized in App() -> uiHelperDatetimepicker()) -->
    <!-- For more info and examples you can check out https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <h2 class="content-heading">Bootstrap Datetimepicker</h2>
    <div class="row">
        <div class="col-lg-6">
            <!-- Datetimepicker (Default forms) -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Default</h3>
                </div>
                <div class="block-content block-content-narrow">
                    <form class="form-horizontal" action="base_forms_pickers_more.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-datetimepicker1">Normal</label>
                            <div class="col-md-6">
                                <input class="js-datetimepicker form-control" type="text" id="example-datetimepicker1" name="example-datetimepicker1" placeholder="Choose a date..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-datetimepicker2">As Component</label>
                            <div class="col-md-6">
                                <div class="js-datetimepicker input-group date">
                                    <input class="form-control" type="text" id="example-datetimepicker2" name="example-datetimepicker2" placeholder="Choose a date..">
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-datetimepicker3">Full options</label>
                            <div class="col-md-6">
                                <div class="js-datetimepicker input-group date" data-show-today-button="true" data-show-clear="true" data-show-close="true">
                                    <input class="form-control" type="text" id="example-datetimepicker3" name="example-datetimepicker3" placeholder="Choose a date..">
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-datetimepicker4">Side by side</label>
                            <div class="col-md-6">
                                <div class="js-datetimepicker input-group date" data-show-today-button="true" data-show-clear="true" data-show-close="true" data-side-by-side="true">
                                    <input class="form-control" type="text" id="example-datetimepicker4" name="example-datetimepicker4" placeholder="Choose a date..">
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Inline</label>
                            <div class="col-md-6">
                                <div class="js-datetimepicker" data-show-today-button="true" data-inline="true"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Datetimepicker (Default forms) -->
        </div>
        <div class="col-lg-6">
            <!-- Datetimepicker (Material forms) -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Material</h3>
                </div>
                <div class="block-content block-content-narrow">
                    <form class="form-horizontal push-10-t" action="base_forms_pickers_more.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material">
                                    <input class="js-datetimepicker form-control" type="text" id="example-datetimepicker5" name="example-datetimepicker5" placeholder="Choose a date..">
                                    <label for="example-datetimepicker5">Normal</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="js-datetimepicker form-material input-group date">
                                    <input class="form-control" type="text" id="example-datetimepicker6" name="example-datetimepicker6" placeholder="Choose a date..">
                                    <label for="example-datetimepicker6">As a component</label>
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="js-datetimepicker form-material input-group date" data-show-today-button="true" data-show-clear="true" data-show-close="true">
                                    <input class="form-control" type="text" id="example-datetimepicker7" name="example-datetimepicker7" placeholder="Choose a date..">
                                    <label for="example-datetimepicker7">Full Options</label>
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="js-datetimepicker form-material input-group date" data-show-today-button="true" data-show-clear="true" data-show-close="true" data-side-by-side="true">
                                    <input class="form-control" type="text" id="example-datetimepicker8" name="example-datetimepicker8" placeholder="Choose a date..">
                                    <label for="example-datetimepicker8">Side by side</label>
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Datetimepicker (Material forms) -->
        </div>
    </div>
    <!-- END Datetimepicker -->

    <!-- Colorpicker -->
    <!-- Bootstrap Colorpicker (.js-colorpicker class is initialized in App() -> uiHelperColorpicker()) -->
    <!-- For more info and examples you can check out http://mjolnic.com/bootstrap-colorpicker/ -->
    <h2 class="content-heading">Bootstrap Colorpicker</h2>
    <div class="row">
        <div class="col-lg-6">
            <!-- Colorpicker (Default forms) -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Default</h3>
                </div>
                <div class="block-content block-content-narrow">
                    <form class="form-horizontal" action="base_forms_pickers_more.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-colorpicker1">Normal</label>
                            <div class="col-md-6">
                                <input class="js-colorpicker form-control" type="text" id="example-colorpicker1" name="example-colorpicker1" value="#5c90d2">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-colorpicker2">As Component</label>
                            <div class="col-md-6">
                                <div class="js-colorpicker input-group">
                                    <input class="form-control" type="text" id="example-colorpicker2" name="example-colorpicker2" value="#5c90d2">
                                    <span class="input-group-addon"><i></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-colorpicker3">RGBa</label>
                            <div class="col-md-6">
                                <input class="js-colorpicker form-control" data-colorpicker-mode="rgba" type="text" id="example-colorpicker3" name="example-colorpicker3" value="#5c90d2">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-colorpicker4">RGBa (component)</label>
                            <div class="col-md-6">
                                <div class="js-colorpicker input-group" data-colorpicker-mode="rgba">
                                    <input class="form-control" type="text" id="example-colorpicker4" name="example-colorpicker4" value="#5c90d2">
                                    <span class="input-group-addon"><i></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Inline</label>
                            <div class="col-md-6">
                                <div class="js-colorpicker" id="color-container" data-container="#color-container" data-colorpicker-inline="true" data-color="#5c90d2"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Inline (component)</label>
                            <div class="col-md-6">
                                <div class="js-colorpicker" id="color-container2" data-container="#color-container2" data-colorpicker-mode="rgba" data-colorpicker-inline="true" data-color="#5c90d2"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Colorpicker (Default forms) -->
        </div>
        <div class="col-lg-6">
            <!-- Colorpicker (Material forms) -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Material</h3>
                </div>
                <div class="block-content block-content-narrow">
                    <form class="form-horizontal push-10-t" action="base_forms_pickers_more.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material">
                                    <input class="js-colorpicker form-control" type="text" id="example-colorpicker5" name="example-colorpicker5" value="#5c90d2">
                                    <label for="example-colorpicker5">Choose a color</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material">
                                    <input class="js-colorpicker form-control" data-colorpicker-mode="rgba" type="text" id="example-colorpicker6" name="example-colorpicker6" value="#5c90d2">
                                    <label for="example-colorpicker6">Choose a color (RGBa)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Colorpicker (Material forms) -->
        </div>
    </div>
    <!-- END Colorpicker -->

    <!-- Maxlength -->
    <!-- Bootstrap Maxlength (.js-maxlength class is initialized in App() -> uiHelperMaxlength()) -->
    <!-- For more info and examples you can check out https://github.com/mimo84/bootstrap-maxlength -->
    <h2 class="content-heading">Bootstrap Maxlength</h2>
    <div class="row">
        <div class="col-lg-6">
            <!-- Maxlength (Default forms) -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Default</h3>
                </div>
                <div class="block-content block-content-narrow">
                    <form class="form-horizontal" action="base_forms_pickers_more.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-maxlength1">Normal</label>
                            <div class="col-md-6">
                                <input class="js-maxlength form-control" type="text" id="example-maxlength1" name="example-maxlength1" maxlength="20" placeholder="Try typing beyond 10 chars..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-maxlength2">Threshold</label>
                            <div class="col-md-6">
                                <input class="js-maxlength form-control" type="text" id="example-maxlength2" name="example-maxlength2" maxlength="20" placeholder="When to appear (5 chars).." data-threshold="15">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-maxlength3">Always Show</label>
                            <div class="col-md-6">
                                <input class="js-maxlength form-control" type="text" id="example-maxlength3" name="example-maxlength3" maxlength="20" placeholder="When focused.." data-always-show="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-maxlength4">Custom Text</label>
                            <div class="col-md-6">
                                <input class="js-maxlength form-control" type="text" id="example-maxlength4" name="example-maxlength4" maxlength="20" placeholder="20 chars limit.." data-always-show="true" data-pre-text="Used " data-separator=" of " data-post-text=" characters">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-maxlength5">Themed Label</label>
                            <div class="col-md-6">
                                <input class="js-maxlength form-control" type="text" id="example-maxlength5" name="example-maxlength5" maxlength="20" placeholder="Primary color of active theme.." data-always-show="true" data-warning-class="label label-primary" data-limit-reached-class="label label-primary">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-maxlength6">Position (top)</label>
                            <div class="col-md-6">
                                <input class="js-maxlength form-control" type="text" id="example-maxlength6" name="example-maxlength6" maxlength="20" placeholder="Top.." data-always-show="true" data-placement="top">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-maxlength7">Position (top-right)</label>
                            <div class="col-md-6">
                                <input class="js-maxlength form-control" type="text" id="example-maxlength7" name="example-maxlength7" maxlength="20" placeholder="Top Right.." data-always-show="true" data-placement="top-right">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-maxlength8">Position (right)</label>
                            <div class="col-md-6">
                                <input class="js-maxlength form-control" type="text" id="example-maxlength8" name="example-maxlength8" maxlength="20" placeholder="Right.." data-always-show="true" data-placement="right">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-maxlength9">Position (bottom-right)</label>
                            <div class="col-md-6">
                                <input class="js-maxlength form-control" type="text" id="example-maxlength9" name="example-maxlength9" maxlength="20" placeholder="Bottom Right.." data-always-show="true" data-placement="bottom-right">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-maxlength10">Textarea</label>
                            <div class="col-md-6">
                                <textarea class="js-maxlength form-control" id="example-maxlength10" name="example-maxlength10" rows="3" maxlength="100" placeholder="It even works on textareas.." data-always-show="true"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Maxlength (Default forms) -->
        </div>
        <div class="col-lg-6">
            <!-- Maxlength (Material forms) -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Material</h3>
                </div>
                <div class="block-content block-content-narrow">
                    <form class="form-horizontal push-10-t" action="base_forms_pickers_more.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material">
                                    <input class="js-maxlength form-control" type="text" id="example-material-maxlength1" name="example-material-maxlength1" maxlength="20" placeholder="Try typing beyond 10 chars..">
                                    <label for="example-material-maxlength1">Normal</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material">
                                    <input class="js-maxlength form-control" type="text" id="example-material-maxlength2" name="example-material-maxlength2" maxlength="20" placeholder="When to appear (5 chars).." data-threshold="15">
                                    <label for="example-material-maxlength2">Threshold</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material">
                                    <input class="js-maxlength form-control" type="text" id="example-material-maxlength3" name="example-material-maxlength3" maxlength="20" placeholder="When focused.." data-always-show="true">
                                    <label for="example-material-maxlength3">Threshold</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material">
                                    <input class="js-maxlength form-control" type="text" id="example-material-maxlength4" name="example-material-maxlength4" maxlength="20" placeholder="20 chars limit.." data-always-show="true" data-pre-text="Used " data-separator=" of " data-post-text=" characters">
                                    <label for="example-material-maxlength4">Custom Text</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material">
                                    <input class="js-maxlength form-control" type="text" id="example-material-maxlength5" name="example-material-maxlength5" maxlength="20" placeholder="Primary color of active theme.." data-always-show="true" data-warning-class="label label-primary" data-limit-reached-class="label label-primary">
                                    <label for="example-material-maxlength5">Themed Label</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material">
                                    <input class="js-maxlength form-control" type="text" id="example-material-maxlength6" name="example-material-maxlength6" maxlength="20" placeholder="Top Right.." data-always-show="true" data-placement="top-right">
                                    <label for="example-material-maxlength6">Position (top-right)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material">
                                    <textarea class="js-maxlength form-control" id="example-material-maxlength7" name="example-material-maxlength7" rows="3" maxlength="100" placeholder="It even works on textareas.." data-always-show="true"></textarea>
                                    <label for="example-material-maxlength7">Textarea</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Maxlength (Material forms) -->
        </div>
    </div>
    <!-- END Maxlength -->

    <!-- Select2 -->
    <!-- Select2 (.js-select2 class is initialized in App() -> uiHelperSelect2()) -->
    <!-- For more info and examples you can check out https://github.com/select2/select2 -->
    <h2 class="content-heading">Select2</h2>
    <div class="row">
        <div class="col-lg-6">
            <!-- Select2 (Default forms) -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Default</h3>
                </div>
                <div class="block-content block-content-narrow">
                    <form class="form-horizontal" action="base_forms_pickers_more.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-select2">Normal</label>
                            <div class="col-md-8">
                                <select class="js-select2 form-control" id="example-select2" name="example-select2" style="width: 100%;" data-placeholder="Choose one..">
                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    <option value="1">HTML</option>
                                    <option value="2">CSS</option>
                                    <option value="3">JavaScript</option>
                                    <option value="4">PHP</option>
                                    <option value="5">MySQL</option>
                                    <option value="6">Ruby</option>
                                    <option value="7">AngularJS</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-select2-multiple">Multiple Values</label>
                            <div class="col-md-8">
                                <select class="js-select2 form-control" id="example-select2-multiple" name="example-select2-multiple" style="width: 100%;" data-placeholder="Choose many.." multiple>
                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    <option value="1">HTML</option>
                                    <option value="2">CSS</option>
                                    <option value="3">JavaScript</option>
                                    <option value="4">PHP</option>
                                    <option value="5">MySQL</option>
                                    <option value="6">Ruby</option>
                                    <option value="7">AngularJS</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Select2 (Default forms) -->
        </div>
        <div class="col-lg-6">
            <!-- Select2 (Material forms) -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Material</h3>
                </div>
                <div class="block-content block-content-narrow">
                    <form class="form-horizontal push-10-t" action="base_forms_pickers_more.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material">
                                    <select class="js-select2 form-control" id="example2-select2" name="example2-select2" style="width: 100%;" data-placeholder="Choose one..">
                                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        <option value="1">HTML</option>
                                        <option value="2">CSS</option>
                                        <option value="3">JavaScript</option>
                                        <option value="4">PHP</option>
                                        <option value="5">MySQL</option>
                                        <option value="6">Ruby</option>
                                        <option value="7">AngularJS</option>
                                    </select>
                                    <label for="example2-select2">Normal</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material">
                                    <select class="js-select2 form-control" id="example2-select2-multiple" name="example2-select2-multiple" style="width: 100%;" data-placeholder="Choose many.." multiple>
                                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        <option value="1">HTML</option>
                                        <option value="2">CSS</option>
                                        <option value="3">JavaScript</option>
                                        <option value="4">PHP</option>
                                        <option value="5">MySQL</option>
                                        <option value="6">Ruby</option>
                                        <option value="7">AngularJS</option>
                                    </select>
                                    <label for="example2-select2-multiple">Multiple Values</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Select2 (Material forms) -->
        </div>
    </div>
    <!-- END Select2 -->

    <!-- Masked Inputs -->
    <!-- Masked Inputs (.js-masked-* classes are initialized in App() -> uiHelperMaskedInputs()) -->
    <!-- For more info and examples you can check out http://digitalbush.com/projects/masked-input-plugin/ -->
    <h2 class="content-heading">Masked Inputs</h2>
    <div class="row">
        <div class="col-lg-6">
            <!-- Masked Inputs (Bootstrap forms) -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Default</h3>
                </div>
                <div class="block-content">
                    <form class="form-horizontal" action="base_forms_pickers_more.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-masked-date1">Date (format 1)</label>
                            <div class="col-md-6">
                                <input class="js-masked-date form-control" type="text" id="example-masked-date1" name="example-masked-date1" placeholder="dd/mm/yyyy">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-masked-date2">Date (format 2)</label>
                            <div class="col-md-6">
                                <input class="js-masked-date-dash form-control" type="text" id="example-masked-date2" name="example-masked-date2" placeholder="dd-mm-yyyy">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-masked-phone">Phone</label>
                            <div class="col-md-6">
                                <input class="js-masked-phone form-control" type="text" id="example-masked-phone" name="example-masked-phone" placeholder="(999) 999-9999">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-masked-phone-ext">Phone (Ext)</label>
                            <div class="col-md-6">
                                <input class="js-masked-phone-ext form-control" type="text" id="example-masked-phone-ext" name="example-masked-phone-ext" placeholder="(999) 999-9999? x99999">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-masked-taxid">Tax ID</label>
                            <div class="col-md-6">
                                <input class="js-masked-taxid form-control" type="text" id="example-masked-taxid" name="example-masked-taxid" placeholder="99-9999999">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-masked-ssn">SSN</label>
                            <div class="col-md-6">
                                <input class="js-masked-ssn form-control" type="text" id="example-masked-ssn" name="example-masked-ssn" placeholder="999-99-9999">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-masked-pkey">Product Key</label>
                            <div class="col-md-6">
                                <input class="js-masked-pkey form-control" type="text" id="example-masked-pkey" name="example-masked-pkey" placeholder="a*-999-a999">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-masked-time">Time Format</label>
                            <div class="col-md-6">
                                <input class="js-masked-time form-control" type="text" id="example-masked-time" name="example-masked-time" placeholder="00:00">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Masked Inputs (Bootstrap forms) -->
        </div>
        <div class="col-lg-6">
            <!-- Masked Inputs (Material forms) -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Material</h3>
                </div>
                <div class="block-content">
                    <form class="form-horizontal push-10-t" action="base_forms_pickers_more.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material">
                                    <input class="js-masked-date form-control" type="text" id="example-masked2-date1" name="example-masked2-date1" placeholder="dd/mm/yyyy">
                                    <label for="example-masked2-date1">Date (format 1)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material">
                                    <input class="js-masked-date-dash form-control" type="text" id="example-masked2-date2" name="example-masked2-date2" placeholder="dd-mm-yyyy">
                                    <label for="example-masked2-date2">Date (format 2)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material floating">
                                    <input class="js-masked-phone form-control" type="text" id="example-masked2-phone" name="example-masked2-phone">
                                    <label for="example-masked2-phone">Phone <small class="text-muted">(999) 999-9999</small></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material floating">
                                    <input class="js-masked-phone-ext form-control" type="text" id="example-masked2-phone-ext" name="example-masked2-phone-ext">
                                    <label for="example-masked2-phone-ext">Phone (Ext) <small class="text-muted">(999) 999-9999? x99999</small></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material floating">
                                    <input class="js-masked-pkey form-control" type="text" id="example-masked2-pkey" name="example-masked2-pkey">
                                    <label for="example-masked2-pkey">Product Key <small class="text-muted">a*-999-a999</small></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material floating">
                                    <input class="js-masked-time form-control" type="text" id="example-masked2-time" name="example-masked2-time">
                                    <label for="example-masked2-time">Time Format <small class="text-muted">00:00</small></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Masked Inputs (Material forms) -->
        </div>
    </div>
    <!-- END Masked Inputs -->

    <!-- jQuery AutoComplete -->
    <!-- jQuery AutoComplete (example functionality is initialized in js/pages/base_forms_pickers_more.js) -->
    <!-- For more info and examples you can check out https://github.com/Pixabay/jQuery-autoComplete -->
    <h2 class="content-heading">jQuery AutoComplete</h2>
    <div class="row">
        <div class="col-lg-6">
            <!-- jQuery Auto Complete (Bootstrap forms) -->
            <div class="block mheight-200">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Default</h3>
                </div>
                <div class="block-content">
                    <form class="form-horizontal" action="base_forms_pickers_more.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-autocomplete1">Search</label>
                            <div class="col-md-6">
                                <input class="js-autocomplete form-control" type="text" id="example-autocomplete1" name="example-autocomplete1" placeholder="Countries..">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END jQuery AutoComplete (Bootstrap forms) -->
        </div>
        <div class="col-lg-6">
            <!-- jQuery AutoComplete (Material forms) -->
            <div class="block mheight-200">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Material</h3>
                </div>
                <div class="block-content">
                    <form class="form-horizontal push-10-t" action="base_forms_pickers_more.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material">
                                    <input class="js-autocomplete form-control" type="text" id="example-autocomplete2" name="example-autocomplete2" placeholder="Countries..">
                                    <label for="example-autocomplete2">Search</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END jQuery AutoComplete (Material forms) -->
        </div>
    </div>
    <!-- END jQuery AutoComplete -->

    <!-- Range Sliders -->
    <!-- Ion Range Sliders (.js-rangeslider class is initialized in App() -> uiHelperRangeslider()) -->
    <!-- For more info and examples you can check out https://github.com/IonDen/ion.rangeSlider -->
    <h2 class="content-heading">Range Sliders</h2>
    <div class="block">
        <div class="block-header">
            <ul class="block-options">
                <li>
                    <button type="button"><i class="si si-settings"></i></button>
                </li>
            </ul>
            <h3 class="block-title">Examples</h3>
        </div>
        <div class="block-content">
            <form class="form-horizontal" action="base_forms_pickers_more.php" method="post" onsubmit="return false;">
                <div class="form-group">
                    <label class="col-md-2 control-label push-10-t">Normal</label>
                    <div class="col-md-10">
                        <input class="js-rangeslider" type="text" id="example-rangeslider1" name="example-rangeslider1" value="25">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label push-10-t">Min Max</label>
                    <div class="col-md-10">
                        <input class="js-rangeslider" type="text" id="example-rangeslider2" name="example-rangeslider2" value="330" data-min="0" data-max="1000">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label push-10-t">Grid</label>
                    <div class="col-md-10">
                        <input class="js-rangeslider" type="text" id="example-rangeslider3" name="example-rangeslider3" value="660" data-grid="true" data-min="0" data-max="1000">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label push-10-t">Double</label>
                    <div class="col-md-10">
                        <input class="js-rangeslider" type="text" id="example-rangeslider4" name="example-rangeslider4" data-type="double" data-grid="true" data-min="0" data-max="1000" data-from="200" data-to="800">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label push-10-t">Negative</label>
                    <div class="col-md-10">
                        <input class="js-rangeslider" type="text" id="example-rangeslider5" name="example-rangeslider5" data-type="double" data-grid="true" data-min="-500" data-max="500" data-from="-150" data-to="150">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label push-10-t">Step</label>
                    <div class="col-md-10">
                        <input class="js-rangeslider" type="text" id="example-rangeslider6" name="example-rangeslider6" data-type="double" data-grid="true" data-min="-500" data-max="500" data-from="-250" data-to="250" data-step="50">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label push-10-t">Custom</label>
                    <div class="col-md-10">
                        <input class="js-rangeslider" type="text" id="example-rangeslider7" name="example-rangeslider7" data-grid="true" data-from="5" data-values="January, February, March, April, May, June, July, August, September, October, November, December">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label push-10-t">Prefixes</label>
                    <div class="col-md-10">
                        <input class="js-rangeslider" type="text" id="example-rangeslider8" name="example-rangeslider8" data-type="double" data-grid="true" data-min="0" data-max="10000" data-from="2500" data-to="7500" data-prefix="$">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label push-10-t">Postfixes</label>
                    <div class="col-md-10">
                        <input class="js-rangeslider" type="text" id="example-rangeslider9" name="example-rangeslider9" data-grid="true" data-min="-20" data-max="90" data-from="35" data-postfix="&deg;">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10 col-md-offset-2">
                        <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END Range Sliders -->

    <!-- DropzoneJS and Tags Input -->
    <div class="row">
        <div class="col-lg-6">
            <!-- DropzoneJS -->
            <!-- For more info and examples you can check out http://www.dropzonejs.com/#usage -->
            <h2 class="content-heading">DropzoneJS</h2>
            <div class="block">
                <div class="block-content block-content-full">
                    <!-- DropzoneJS Container -->
                    <form class="dropzone" action="base_forms_pickers_more.php"></form>
                </div>
            </div>
            <!-- END DropzoneJS -->
        </div>
        <div class="col-lg-6">
            <!-- jQuery Tags Input -->
            <!-- jQuery Tags Input (.js-tags-input class is initialized in App() -> uiHelperTagsInput()) -->
            <!-- For more info and examples you can check out https://github.com/xoxco/jQuery-Tags-Input -->
            <h2 class="content-heading">jQuery Tags Input</h2>
            <div class="block">
                <div class="block-content">
                    <form class="form-horizontal" action="base_forms_pickers_more.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <label class="col-xs-12" for="example-tags1">Normal</label>
                            <div class="col-xs-12">
                                <input class="js-tags-input form-control" type="text" id="example-tags1" name="example-tags1" value="HTML,CSS,JavaScript">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material">
                                    <input class="js-tags-input form-control" type="text" id="example-tags2" name="example-tags2" value="HTML,CSS,JavaScript">
                                    <label for="example-tags2">Material tags</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END jQuery Tags Input -->
        </div>
    </div>
    <!-- END DropzoneJS and Tags Input -->
</div>
<!-- END Page Content -->

<?php require '../inc/views/base_footer.php'; ?>
<?php require '../inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/bootstrap-datetimepicker/moment.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/select2/select2.full.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/dropzonejs/dropzone.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_forms_pickers_more.js"></script>
<script>
    jQuery(function(){
        // Init page helpers (BS Datepicker + BS Datetimepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
        App.initHelpers(['datepicker', 'datetimepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
    });
</script>

<?php require '../inc/views/template_footer_end.php'; ?>