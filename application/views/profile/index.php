<style>
	#topnav {
		background-color: rgb(104, 110, 154, 0.8);
	}

</style>

<!-- Hero Start -->
<section class="bg-half-260 section d-table w-100"
	style="background: url('<?= base_url(); ?>assets/images/profile/blow.png') center center; background-size:cover; background-position: center;">
	<div class="bg-overlay-navy"></div>
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-lg-12 col-md-12">
				<div class="title-heading p-3">
					<h1 class="display-4 font-weight-light text-white title-dark mb-3 text-uppercase font-optimus">
						Tentang Kami</h1>
					<p class="text-white text-uppercase font-optimus">Duis aute irure dolor in reprehenderit in <br>
						voluptate
						velit esse cillum dolore eu fugiat nulla pariatur. </p>
				</div>
			</div>
			<!--end col-->
		</div>
		<!--end row-->
	</div>
	<!--end container-->
</section>
<!--end section-->

<!-- Shape Start -->
<div class="position-relative">
	<div class="shape overflow-hidden text-white">
		<img src="<?= base_url(); ?>assets/images/profile/wave4.svg" class="img-fluid" alt="">
	</div>
</div>
<!--Shape End-->

<section class="section position-relative" style="background-color: #9e9dd3; min-height: 400px">
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-md-12">
				<p class="font-pala text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
					do eiusmod
					tempor
					incididunt ut labore et dolore magna aliqua. Eget sit amet tellus cras adipiscing. Quis risus sed
					vulputate odio ut enim blandit. Nunc pulvinar sapien et ligula ullamcorper. Vel orci porta non
					pulvinar neque laoreet suspendisse interdum. </p>
				<p class="font-pala text-center">Augue interdum velit euismod in. Laoreet id donec ultrices
					tincidunt
					arcu non.
					Odio ut enim blandit volutpat maecenas volutpat blandit aliquam etiam. Sit amet volutpat consequat
					mauris nunc congue nisi. Ultrices vitae auctor eu augue ut lectus arcu bibendum. Aliquam malesuada
					bibendum arcu vitae elementum. Massa tempor nec feugiat nisl pretium fusce id. Eu tincidunt tortor
					aliquam nulla facilisi cras fermentum odio.

				</p>
			</div>
			<div class="text-center">
				<div class="row">
					<div class="col-6 mt-5">
						<a href="<?= site_url('profile/eri'); ?>">
							<img src="<?= base_url(); ?>assets/images/profile/eri-icon.png" width="120px"
								class="img-fluid" alt="">
							<p class="title font-weight-bold font-optimus text-uppercase" style="color:#161c2d;">PT.
								Elite
								Recycling Indonesia
							</p>
						</a>
					</div>
					<div class="col-6 mt-5">
						<a href="<?= site_url('profile/era'); ?>">
							<img src="<?= base_url(); ?>assets/images/profile/era-icon.png" width="120px"
								class="img-fluid" alt="">
							<p class="title font-weight-bold font-optimus text-uppercase" style="color:#161c2d;">PT.
								Elastis Reka Aktif</p>
						</a>
					</div>
					<div class="col-6 mt-5">
						<a href="<?= site_url('profile/vision'); ?>">
							<img src="<?= base_url(); ?>assets/images/profile/v.png" width="120px" class="img-fluid"
								alt="">
							<p class="title font-weight-bold font-optimus text-uppercase" style="color:#161c2d;">Visi &
								Misi</p>
						</a>
					</div>
					<div class="col-6 mt-5">
						<a href="javascript:void" data-toggle="modal" data-target="#LoginForm">
							<img src="<?= base_url(); ?>assets/images/profile/about.png" width="120px" class="img-fluid"
								alt="">
							<p class="title font-weight-bold font-optimus text-uppercase" style="color:#161c2d;">
								Sertifikasi</p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Modal Content Start -->
<div class="modal fade" id="LoginForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
	aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
		<div class="modal-content rounded shadow border-0">
			<div class="modal-header" style="background-color: #9e9dd3; ">
				<h5 class="modal-title" id="exampleModalCenterTitle">Sertifikat </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="isiKonten" style="overflow: auto !important; height: auto; max-height: 430px;">
				<div class="bg-white p-3 rounded box-shadow">
					<!-- <blockquote class="blockquote mt-3 p-3">
						<p class=" mb-0 font-italic">" Kami adalah organisasi yang berdedikasi pada alam,
							berorientasi pada kualitas. "</p> -->
					<!-- </blockquote> -->
					<div class="row">
						<div class="col-md-6">
							<img src="<?= base_url(); ?>assets/images/profile/cert1.jpg" class="img-fluid" alt="">
						</div>
						<div class="col-md-6 mt-4 mt-md-0">
							<img src="<?= base_url(); ?>assets/images/profile/cert3.jpg" class="img-fluid" alt="">
						</div>
					</div>

				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal Content End -->
