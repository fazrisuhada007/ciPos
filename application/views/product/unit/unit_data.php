<!-- END: Subheader -->
<div class="m-content">
    <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">
        <div class="m-alert__icon">
            <i class="flaticon-exclamation m--font-brand"></i>
        </div>
        <div class="m-alert__text">
            <?php
            $tanggal = mktime(date("m"), date("d"), date("Y"));
            echo "Tanggal : <b>" . date("d-M-Y", $tanggal) . "</b> ";
            date_default_timezone_set('Asia/Jakarta');
            $jam = date("H:i:s");
            echo "| Pukul : <b>" . $jam . " " . "</b>";
            $a = date("H");
            if (($a >= 6) && ($a <= 11)) {
                echo "<b>, Selamat Pagi !!</b>";
            } else if (($a > 11) && ($a <= 15)) {
                echo ", Selamat Siang !!";
            } else if (($a > 15) && ($a <= 18)) {
                echo ", Selamat Sore !!";
            } else {
                echo ", <b> Selamat Malam </b>";
            }
            ?>
        </div>
    </div>
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Data Units
                    </h3>
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                        <a href="<?= site_url('unit/add') ?>" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air btn-width btn-line-heigh-mobile">
                            <span>
                                <i class="la la-tags"></i>
                                <span>Add Units</span>
                            </span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="m-portlet__body">
            <div class='table-responsive'>
                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable responsive" style="width: 100%;" id="m_table_2">
                    <thead>
                        <tr>
                            <th style="width: 1%;">No</th>
                            <th style="width: 27%;">Name</th>
                            <th style="width: 7%; text-align: center;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($row->result() as $key => $data) { ?>
                            <tr>
                                <td><?php echo $no++ ?>.</td>
                                <td><?php echo $data->name ?></td>
                                <td style="text-align: center;">
                                    <form action="<?= site_url('unit/del') ?>" method="post">
                                        <a href="<?= site_url('unit/edit/' . $data->unit_id) ?>" class="btn btn-info btn-sm m-btn  m-btn m-btn--icon btn-xs btn-width btn-line-heigh-mobile" style="margin-left:1px; margin-top: 3px">
                                            <span>
                                                <i class="la la-edit"></i>
                                                <span style="width: 42px; display: inline-block;">Edit</span>
                                            </span>
                                        </a>

                                        <input type="hidden" name="unit_id" value="<?= $data->unit_id ?>">
                                        <button onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" class="btn btn-danger btn-sm m-btn  m-btn m-btn--icon btn-xs btn-width btn-line-heigh-mobile" style="margin-left:1px; margin-top: 3px;">
                                            <span>
                                                <i class="la la-trash"></i>
                                                <span>Hapus</span>
                                            </span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END EXAMPLE TABLE PORTLET-->
</div>