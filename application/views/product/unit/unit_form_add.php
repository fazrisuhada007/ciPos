<!-- END: Subheader -->
<div class="m-content">

    <!--begin::Portlet-->
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Add Unitis
                    </h3>
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                        <a href="<?= site_url('unit') ?>" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air btn-width btn-line-heigh-mobile">
                            <span>
                                <i class="fa fa-undo"></i>
                                <span>Back</span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!--begin::Form-->
        <form class="m-form m-form--fit m-form--label-align-right" action="" method="post">
            <div class="m-portlet__body">
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">Unit Name *</label>
                    <div class="col-lg-8 col-md-9 col-sm-12">
                        <input type="text" class="form-control m-input" name="unit_name" placeholder="Enter unit name" data-toggle="m-tooltip" title="Nama wajib diisi." value="<?= set_value('unit_name') ?>" autocomplete="off" autofocus>
                        <span class="m-form__help"><?= form_error('unit_name') ?></span>
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions">
                        <div class="row">
                            <div class="col-lg-9 ml-lg-auto">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-paper-plane"></i> Submit
                                </button>
                                <button type="submit" class="btn btn-secondary">
                                    <i class="fa fa-times"></i> Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--end::Form-->
</div>

<!--end::Portlet-->