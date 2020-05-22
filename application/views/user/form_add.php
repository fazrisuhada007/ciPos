<!-- END: Subheader -->
<div class="m-content">

    <!--begin::Portlet-->
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Add User
                    </h3>
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                        <a href="<?= site_url('user') ?>" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air btn-width btn-line-heigh-mobile">
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
                    <label class="col-form-label col-lg-3 col-sm-12">Name *</label>
                    <div class="col-lg-8 col-md-9 col-sm-12">
                        <input type="text" class="form-control m-input" name="fullname" placeholder="Enter name" data-toggle="m-tooltip" title="Nama wajib diisi." value="<?= set_value('fullname') ?>" autocomplete="off" onkeyup="this.value=value.replace(/[^\a-\z\A-\Z\s]*$/,'')" autofocus>
                        <span class="m-form__help"><?= form_error('fullname') ?></span>
                    </div>
                </div>

                <div class="form-group m-form__group row" style="margin-top: -25px;">
                    <label class="col-form-label col-lg-3 col-sm-12">Username *</label>
                    <div class="col-lg-8 col-md-9 col-sm-12">
                        <input type="text" class="form-control m-input" name="username" placeholder="Enter username" data-toggle="m-tooltip" title="Username wajib diisi." value="<?= set_value('username') ?>" autocomplete="off">
                        <span class="m-form__help"><?= form_error('username') ?></span>
                    </div>
                </div>

                <div class="form-group m-form__group row" style="margin-top: -25px;">
                    <label class="col-form-label col-lg-3 col-sm-12">Password *</label>
                    <div class="col-lg-8 col-md-9 col-sm-12">
                        <input type="password" class="form-control m-input" name="password" placeholder="Enter password" data-toggle="m-tooltip" title="Password wajib diisi." value="<?= set_value('password') ?>">
                        <span class="m-form__help"><?= form_error('password') ?></span>
                    </div>
                </div>
                <div class="form-group m-form__group row" style="margin-top: -25px;">
                    <label class="col-form-label col-lg-3 col-sm-12">Password Confirmation *</label>
                    <div class="col-lg-8 col-md-9 col-sm-12">
                        <input type="password" class="form-control m-input" name="passconf" placeholder="Enter password confirmation" data-toggle="m-tooltip" title="Konfirmasi password wajib diisi" value="<?= set_value('passconf') ?>">
                        <span class="m-form__help"><?= form_error('passconf') ?></span>
                    </div>
                </div>
                <div class="form-group m-form__group row" style="margin-top: -25px;">
                    <label class="col-form-label col-lg-3 col-sm-12">Address</label>
                    <div class="col-lg-8 col-md-9 col-sm-12">
                        <textarea class="form-control m-input" name="address" placeholder="Enter address"><?= set_value('address') ?></textarea>
                        <span class="m-form__help"><?= form_error('address') ?></span>
                    </div>
                </div>
                <div class="form-group m-form__group row" style="margin-top: -25px;">
                    <label class="col-form-label col-lg-3 col-sm-12">Level *</label>
                    <div class="col-lg-8 col-md-9 col-sm-12">
                        <select class="form-control m-input" name="level">
                            <option value="">Select</option>
                            <option value="1" <?= set_value('level') == 1 ? "selected" : null ?>>Admin</option>
                            <option value="2" <?= set_value('level') == 2 ? "selected" : null ?>>Kasir</option>
                        </select>
                        <span class="m-form__help"><?= form_error('level') ?></span>
                    </div>
                </div>
                <!-- <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">Phone *</label>
                    <div class="col-lg-8 col-md-9 col-sm-12">
                        <div class="input-group">
                            <input type="text" class="form-control m-input" name="phone" placeholder="Enter phone">
                            <div class="input-group-append"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                        </div>
                        <span class="m-form__help">Please enter your credit card number</span>
                    </div>
                </div> -->
                <!-- <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">Digits</label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="m-input-icon m-input-icon--left">
                            <input type="text" class="form-control m-input" name="digits" placeholder="Enter digits">
                            <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-calculator"></i></span></span>
                        </div>
                        <span class="m-form__help">Please enter only digits</span>
                    </div>
                </div> -->
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