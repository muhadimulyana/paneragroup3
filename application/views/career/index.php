<style>
	#topnav {
		background-color: rgb(104, 110, 154, 0.65);
	}

	.text-xl-career {
		font-size: 100px;
	}

	.bg-overlay-navy-300 {
		background-color: rgba(15, 15, 140, 0.45);
		/* background-color: rgba(60, 72, 88, 0.7); */
		position: absolute;
		top: 0;
		right: 0;
		left: 0;
		bottom: 0;
		width: 100%;
		height: 100%;
	}

	@media only screen and (max-width: 991px) {

		.text-xl-career {
			font-size: 50px;
			margin-top: -30px !important;
		}

	}

</style>


<!-- Product Start -->
<section class="section bg-half-260"
	style="background-image:url('<?= base_url(); ?>assets/images/career/all.jpeg'); background-size: cover; min-height: 500px; background-position: center;">
	<div class="bg-overlay-navy"></div>
	<div class="container pb-lg-4">
		<div class="row align-items-center">
			<div class="col-md-12">
				<h1 class="heading font-pala font-weight-light text-white font-gabriola">We are</h1>
				<h1 class="text-xl-career font-optimus font-weight-light text-white" style="margin-top: -40px;">HIRING
				</h1>

			</div>
		</div>
	</div>
</section>

<section class="section bg-white">
	<div class="container p-lg-4">
		<div class="row">
			<div class="col-md-6 order-2 order-md-1">
				<h2 class="text-navy font-gabriola mb-0">Gabung Bersama</h2>
				<h1 class="text-navy font-pala">Pan Era Group</h5>
					<p class="text-navy font-pala">Kami selalu membuka kesempatan bagi tenaga kerja yang berkualitas
						untuk bergabung dengan kami.
						Tenaga kerja yang diterima akan diperkerjakan di salah satu perusahaan Pan Era Group </p>
					<a href="<?= site_url('career/list'); ?>" class="font-pala btn bg-navy btn-pills btn-xl text-white"
						style="background-color: #282c73 !important;">Daftar Lowongan</a>
			</div>
			<div class="col-md-6 order-1 order-md-2 mb-2 text-center">
				<img src="<?= base_url(); ?>assets/images/career/vector.png" class="img-fluid" alt="">
			</div>
		</div>
	</div>
</section>

<section class="section"
	style="background-image:url('<?= base_url(); ?>assets/images/career/work.jpeg'); background-size: cover; min-height: 500px; background-position: center;">
	<div class="bg-overlay-navy-300"></div>
	<div class="container justify-content-center p-5">
		<div class="row text-center">
			<div class="col-md-12">
				<h5 class="text-white text-serif font-weight-light">Apabila tidak ada lowongan atas posisi yang sesuai
					dengan pengalaman mau pun keahlian anda, silahkan mengirimkan surat lamaran <br><br> Ke email
					berikut:</h5>
				<a href="javascript:void(0)"
					class="btn btn-light btn-pills btn-lg text-serif">hrd@paneragroup.com</a><br>
				<small class="text-white text-serif">Format: PDF/Ms Word, Maks 300KB</small>
				<h5 class="text-white mt-3 text-serif font-weight-light">Lamaran anda akan kami pertimbangkan dan
					dimasukkan ke dalam database kami. </h5>
			</div>
		</div>
</section>
