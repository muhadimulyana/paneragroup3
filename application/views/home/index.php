<style>
	.flex-direction-nav a {
		opacity: 1;
		height: 50px;
	}

	.flex-direction-nav .flex-prev {
		left: 200px;
	}

	.flex-direction-nav .flex-next {
		right: 200px;
		text-align: right;
	}

	.bg-transition:after {
		content: "";
		position: absolute;
		left: 0px;
		top: 0px;
		width: 100%;
		height: 100%;
		background-color: rgba(15, 15, 140, 0.57);
	}

	.img-product {
		max-width: 500px;
	}

	.text-large {
		font-size: 55px !important;
		line-height: 1;
	}

	@media only screen and (max-width: 991px) {
		.flex-direction-nav a {
			display: none;
		}

		.img-product {
			max-width: 100%;
		}

		.kegiatan {
			max-height: 100% !important;
			overflow: hidden;
		}

		.text-large {
			font-size: 35px !important;
		}
	}

</style>

<!-- Hero Start -->
<section class="bg-half-170 d-table w-100"
	style="padding: 80px 0 80px 0 !important; background: url('<?=base_url();?>assets/images/home/header2.png') center center; background-size: cover; "
	id="home">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-5 col-md-5 order-2 order-md-2">
				<div class="title-heading mt-4 ml-lg-5">
					<span class="heading mb-3 text-white text-large font-optimus text-uppercase">Profil Perusahaan
					</span>
					<p class="para-desc text-white">Informasi lebih lanjut tentang PAN ERA GROUP</p>
					<div class="watch-video mt-4 pt-2">
						<a href="javascript:void(0)" class="btn btn-light btn-pills text-uppercase">Selengkapnya</a>
					</div>
				</div>
			</div>
			<!--end col-->

			<div class="col-lg-7 col-md-7 order-1 order-md-1 mt-4 pt-2 mt-sm-0 pt-sm-0">
				<img src="<?=base_url();?>assets/images/home/foto gedung.png" class="img-fluid" alt="">
			</div>
		</div>
		<!--end row-->
	</div>
	<!--end container-->
</section>
<!--end section-->
<!-- Hero End -->
<!-- Start Plan -->
<section class="section"
	style="padding: 0 0 150px 0 !important; background: url('<?=base_url();?>assets/images/home/skyblue.png') center center; background-size: cover; ">

	<div class="container justify-content-center">
		<div class="row justify-content-center">
			<div class="col-12 text-center">
				<div class="section-title mb-4 pb-2">
					<h3 class="title mt-5 mb-4 font-pala text-navy">Produk Kami</h3>
					<p class="para-desc mx-auto mb-0 font-pala text-navy">Produk ramah lingkungan yang menjadi inti dan
						asal
						identitas kami. Serta LOCO, kantong plastik kebanggaan besar kami yang kami kembangkan
					</p>
				</div>
			</div>
			<!--end col-->
		</div>
		<!--end row-->
		<div class="row align-items-center">
			<div class="col-lg-12 col-md-12 col-12 mt-md-3 mt-sm-0 pt-1 pt-sm-0">
				<div class="home-product text-center justify-content-center">
					  <ul class="slides">
						<li>
							<img class="img-fluid img-product"
								src="<?=base_url();?>assets/images/home/loco tebal.png" />
							<h4 class="text-center font-pala text-navy">Loco Tebal</h4>
						</li>
						<li>
							<img class="img-fluid img-product" src="<?=base_url();?>assets/images/home/loco eco.png" />
							<h4 class="text-center font-pala text-navy">Loco Ekonomis</h4>
						</li>
						<li>
							<img class="img-fluid img-product"
								src="<?=base_url();?>assets/images/home/anti-panas.png" />
							<h4 class="text-center font-pala text-navy">Loco Anti Panas</h4>
						</li>
						<li>
							<img class="img-fluid img-product"
								src="<?=base_url();?>assets/images/home/loco rainbow.png" />
							<h4 class="text-center font-pala text-navy">Loco Rainbow</h4>
						</li>
					</ul>
				</div>
				<div class="mt-2 pt-2 text-center">
					<a href="javascript:void(0)" class="btn btn-dark font-pala btn-lg btn-pills text-capitalize"
						style="background-color: #282c73 !important;">Lihat Selengkapnya</a>
				</div>
			</div>
			<!--end col-->
		</div>
		<!--end row-->
		<div class="row mt-5">
			<div class="col-lg-12">
				<div class="mt-5 pt-2 text-center">
					<h3 class="mb-2 font-pala text-navy">Kami Adalah Organisasi <br> Yang Berdedikasi Pada Alam,
						Berorientasi Pada
						Kualitas
					</h3>
					<p class="para-desc font-pala text-navy mx-auto mb-0">Kami tetap berkomitmen untuk memenuhi
						kebutuhan Anda,
						silahkan untuk menghubungi nomor telepon kami agar mendapatkan contact distributor produk
						plastik kami.
					</p>
				</div>
			</div>
		</div>
	</div>
	<!--end container-->
</section>
<!--end section-->

<!-- CTA Start -->
<!-- <section class="section bg-cta"
	style="background: url('<?=base_url();?>assets/images/home/transition1.png') center center; background-size:cover;"
	id="cta">
	<div class="bg-overlay bg-overlay-gradient"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 text-center">
				<div class="section-title">
					<h4 class="title title-dark text-white mb-4">PAN ERA GROUP</h4>
					<p class="text-light para-desc para-dark mx-auto">Start working with PAN ERA GROUP that can provide
						everything you need to generate skills, communication, and experience.</p>
				</div>
			</div>
		</div>
	</div>
</section> -->
<!--end section-->
<!-- CTA End -->

<!-- transition -->
<section class="section p-0 trans-slider">
	<div class="bg-overlay bg-overlay-gradient"></div>
	<ul class="slides">
		<li class="bg-slider bg-transition d-flex align-items-center"
			style="background-image:url('<?=base_url();?>assets/images/home/transition1.png'); background-size: cover; min-height: 500px; background-position: center;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 text-center">
						<div class="section-title position-relative" style="z-index:1;">
							<h4 class="title-dark text-white mb-4 font-weight-light font-optimus text-large">PAN ERA
								GROUP</h4>
							<h5 class="text-light font-weight-light h5ara-desc para-dark mx-auto font-pala">Start
								working with PAN ERA
								GROUP
								that can
								provide<br>
								everything you need to generate skills, communication, and experience.</h5>
						</div>
					</div>
					<!--end col-->
				</div>
				<!--end row-->
			</div>
		</li>
		<li class="bg-slider bg-transition d-flex align-items-center"
			style="background-image:url('<?=base_url();?>assets/images/home/transtion2.jpg'); background-size: cover; min-height: 500px; background-position: center;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 text-center">
						<div class="section-title position-relative" style="z-index:1;">
							<h4 class="title-dark text-white mb-4 font-weight-light font-optimus text-large">PAN ERA
								GROUP</h4>
							<h5 class="text-light font-weight-light h5ara-desc para-dark mx-auto font-pala">Start
								working with PAN ERA
								GROUP
								that can
								provide<br>
								everything you need to generate skills, communication, and experience.</h5>
						</div>
					</div>
					<!--end col-->
				</div>
				<!--end row-->
			</div>
		</li>
	</ul>
</section>
<!--end section-->
<!-- Services Start -->
<section class="section" style="background-color: #c3d7f9;">
	<div class="container pb-lg-4 mb-md-5 mb-4">
		<div class="row justify-content-center">
			<div class="col-12 text-center">
				<div class="section-title mb-4 pb-2">
					<h4 class="title mb-4 text-navy font-pala">Bisnis Kami</h4>
					<p class="para-desc mb-0 mx-auto text-navy font-pala">Kami adalah organisasi yang berdedikasi pada
						alam,
						<br> berorientasi pada kualitas.
					</p>
				</div>
			</div>
			<!--end col-->
		</div>
		<!--end row-->

		<div class="row justify-content-center">
			<div class="col-md-4 col-12 mt-5">
				<div class="features text-center">
					<div class="image position-relative d-inline-block">
						<img src="<?=base_url();?>assets/images/home/build.png" class="avatar"
							style="height: 85px; width: 85px;" alt="">
					</div>

					<div class="content mt-4">
						<h4 class="title-2 font-pala"><a href="<?=site_url('profile#company');?>"
								class="text-navy">Profil
								Perusahaan</a></h4>
						<p class="text-navy mb-0 font-pala">Pengenalan perusahaan - perusahaan yang tergabung dalam Pan
							Era
							Group</p>
					</div>
				</div>
			</div>
			<!--end col-->

			<div class="col-md-4 col-12 mt-5">
				<div class="features text-center">
					<div class="image position-relative d-inline-block">
						<img src="<?=base_url();?>assets/images/home/visi.png" class="avatar"
							style="height: 85px; width: 85px;" alt="">
					</div>

					<div class="content mt-4">
						<h4 class="title-2 font-pala"><a class="text-navy" href="<?=site_url('profile#vision');?>">Visi
								&
								Misi</a></h4>
						<p class="text-navy mb-0 font-pala">Ambisi kami yang kemudian menjadi daya dorong untuk terus
							maju dan
							berkembang</p>
					</div>
				</div>
			</div>
			<!--end col-->

			<div class="col-md-4 col-12 mt-5">
				<div class="features text-center">
					<div class="image position-relative d-inline-block">
						<img src="<?=base_url();?>assets/images/home/biji.png" class="avatar"
							style="height: 85px; width: 85px;" alt="">
					</div>

					<div class="content mt-4">
						<h4 class="title-2 font-pala"><a class="text-navy" href="<?=site_url('product#resin');?>">Bijih
								Plastik
								Daur Ulang</a>
						</h4>
						<p class="text-navy mb-0 font-pala">Produk ramah lingkungan yang menjadi inti dan asal identitas
							kami
						</p>
					</div>
				</div>
			</div>
			<!--end col-->

			<div class="col-md-4 col-12 mt-5">
				<div class="features text-center">
					<div class="image position-relative d-inline-block">
						<img src="<?=base_url();?>assets/images/home/management.png" class="avatar"
							style="height: 85px; width: 85px;" alt="">
					</div>

					<div class="content mt-4">
						<h4 class="title-2 font-pala"><a class="text-navy" href="<?=site_url('management');?>">Manajemen
								SDM</a>
						</h4>
						<p class="text-navy mb-0 font-pala">Filosofi manajemen sumber daya manusia kami untuk berkembang
							bersama
						</p>
					</div>
				</div>
			</div>
			<!--end col-->

			<div class="col-md-4 col-12 mt-5">
				<div class="features text-center">
					<div class="image position-relative d-inline-block">
						<img src="<?=base_url();?>assets/images/home/job.png" class="avatar"
							style="height: 85px; width: 85px;" alt="">
					</div>

					<div class="content mt-4">
						<h4 class="title-2 font-pala"><a class="text-navy" href="<?=site_url('career');?>">Kesempatan
								Berkarir</a></h4>
						<p class="text-navy mb-0 font-pala">Daftar lowongan posisi yang sedang tersedia beserta
							instruksi
							pelamaran</p>
					</div>
				</div>
			</div>
			<!--end col-->
		</div>
	</div>
	<!--end container-->
</section>
<!--end section-->
<!--end container-->
<div class="col-12 p-0">
	<h2 class="text-center p-2 text-white mb-0 font-pala" style="background-color:rgb(7, 2, 76, 0.8); ">Berita Terbaru
	</h2>
</div>
<section class="section pt-5" style="background-color: #c3d7f9;">
	<div class="container">
		<div class="row">
			<div class="col-md-4 order-2 order-md-1">
				<h5 class="text-center p-2 text-white mb-2 rounded font-pala"
					style="background-color:rgb(7, 2, 76, 0.8); ">
					Kegiatan
					Terbaru
				</h5>
				<div class="kegiatan" style="max-height: 475px; overflow: auto;">
					<div class="col-md-12 p-0 mb-2">
						<div class="card border-0 work-container work-classic">
							<div class="card-body p-0">
								<a href="javascript:void" class="card-img-top img-fluid rounded-top"
									style="background-image: url('<?=base_url();?>assets/images/news/1.jpg'); background-size: cover; min-width: 100%; width: 100px; height: 150px; background-position:center; display: block;"></a>
								<div class="content p-3">
									<h5 class="mb-0"><a href="javascript:void(0)"
											class="text-dark title font-pala">Judul
											Berita</a></h5>
									<h6 class="text-muted tag mb-0 font-pala">Tanggal Berita</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 p-0 mb-2">
						<div class="card border-0 work-container work-classic">
							<div class="card-body p-0">
								<a href="javascript:void" class="card-img-top img-fluid rounded-top"
									style="background-image: url('<?=base_url();?>assets/images/news/2.jpeg'); background-size: cover; min-width: 100%; width: 100px; height: 150px; background-position:center; display: block;"></a>
								<div class="content p-3">
									<h5 class="mb-0"><a href="javascript:void(0)"
											class="text-dark title font-pala">Judul
											Berita</a></h5>
									<h6 class="text-muted tag mb-0 font-pala">Tanggal Berita</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 p-0 mb-2">
						<div class="card border-0 work-container work-classic">
							<div class="card-body p-0">
								<a href="javascript:void" class="card-img-top img-fluid rounded-top"
									style="background-image: url('<?=base_url();?>assets/images/news/3.jpg'); background-size: cover; min-width: 100%; width: 100px; height: 150px; background-position:center; display: block;"></a>
								<div class="content p-3">
									<h5 class="mb-0"><a href="javascript:void(0)"
											class="text-dark font-pala title">Judul
											Berita</a></h5>
									<h6 class="text-muted tag mb-0 font-pala">Tanggal Berita</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8 order-1 order-md-2">
				<img src="<?=base_url();?>assets/images/home/sumpah.png" class="img-fluid" alt="">
			</div>
		</div>
	</div>
</section>
