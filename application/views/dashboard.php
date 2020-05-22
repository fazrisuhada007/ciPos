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
	<!--begin:: Widgets/Stats-->
	<div class="m-portlet ">
		<div class="m-portlet__body  m-portlet__body--no-padding">
			<div class="row m-row--no-padding m-row--col-separator-xl">
				<div class="col-md-12 col-lg-6 col-xl-3">

					<!--begin::Total Profit-->
					<div class="m-widget24">
						<div class="m-widget24__item">
							<h4 class="m-widget24__title">
								Total Frofit
							</h4><br>
							<span class="m-widget24__desc">
								All Customs Value
							</span>
							<span class="m-widget24__stats m--font-brand">
								$18M
							</span>
							<div class="m--space-10"></div>
							<div class="progress m-progress--sm">
								<div class="progress-bar m--bg-brand" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="m-widget24__change">
								Change
							</span>
							<span class="m-widget24__number">
								78%
							</span>
						</div>
					</div>

					<!--end::Total Profit-->
				</div>
				<div class="col-md-12 col-lg-6 col-xl-3">

					<!--begin::New Feedbacks-->
					<div class="m-widget24">
						<div class="m-widget24__item">
							<h4 class="m-widget24__title">
								New Feedbacks
							</h4><br>
							<span class="m-widget24__desc">
								Customer Review
							</span>
							<span class="m-widget24__stats m--font-info">
								1349
							</span>
							<div class="m--space-10"></div>
							<div class="progress m-progress--sm">
								<div class="progress-bar m--bg-info" role="progressbar" style="width: 84%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="m-widget24__change">
								Change
							</span>
							<span class="m-widget24__number">
								84%
							</span>
						</div>
					</div>

					<!--end::New Feedbacks-->
				</div>
				<div class="col-md-12 col-lg-6 col-xl-3">

					<!--begin::New Orders-->
					<div class="m-widget24">
						<div class="m-widget24__item">
							<h4 class="m-widget24__title">
								New Orders
							</h4><br>
							<span class="m-widget24__desc">
								Fresh Order Amount
							</span>
							<span class="m-widget24__stats m--font-danger">
								567
							</span>
							<div class="m--space-10"></div>
							<div class="progress m-progress--sm">
								<div class="progress-bar m--bg-danger" role="progressbar" style="width: 69%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="m-widget24__change">
								Change
							</span>
							<span class="m-widget24__number">
								69%
							</span>
						</div>
					</div>

					<!--end::New Orders-->
				</div>
				<div class="col-md-12 col-lg-6 col-xl-3">

					<!--begin::New Users-->
					<div class="m-widget24">
						<div class="m-widget24__item">
							<h4 class="m-widget24__title">
								New Users
							</h4><br>
							<span class="m-widget24__desc">
								Joined New User
							</span>
							<span class="m-widget24__stats m--font-success">
								276
							</span>
							<div class="m--space-10"></div>
							<div class="progress m-progress--sm">
								<div class="progress-bar m--bg-success" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="m-widget24__change">
								Change
							</span>
							<span class="m-widget24__number">
								90%
							</span>
						</div>
					</div>
					<!--end::New Users-->
				</div>
			</div>
		</div>
	</div>