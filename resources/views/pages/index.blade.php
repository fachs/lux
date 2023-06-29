<x-app-layout title="Beranda" is-header-blur="true">
	<section class="wrapper image-wrapper bg-full bg-image bg-overlay bg-overlay-light-600" data-image-src="{{ Vite::asset('resources/img/photos/bg23.png') }}">
		<div class="container pt-16 pt-md-18 pb-9">
			<div class="row gx-0 gy-10 align-items-center text-center text-lg-start">
				<div class="col-lg-6 col-xxl-5 position-relative" data-cues="slideInDown" data-group="page-title" data-delay="700">
					<h1 class="display-1 fs-50 mb-4">Badan Eksekutif <span class="text-gradient gradient-7">Mahasiswa</span>
					</h1>
					<p class="lead fs-24 lh-sm mb-7">Keluarga Mahasiswa FPMIPA UPI</p>
				</div>
				<!-- /column -->
				<div class="col-lg-4 ms-auto mb-n20 mb-xxl-n22 pb-10" data-cues="slideInDown" data-delay="600">
					<figure>
						<img src="{{ Vite::asset('resources/img/logo-kabinet.png') }}" srcset="{{ Vite::asset('resources/img/logo-kabinet.png') }} 2x" alt="">
					</figure>
				</div>
				<!-- /column -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
		<div class="overflow-hidden" style="z-index:1;">
			<div class="divider text-light mx-n2">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
					<g fill="currentColor">
						<polygon points="1440 100 0 100 0 85 1440 0 1440 100" />
					</g>
				</svg>
			</div>
		</div>
		<!-- /.overflow-hidden -->
	</section>
	<!-- /section -->
	<section class="wrapper bg-light">
		<div class="container py-14 py-md-16">
			<div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
				<div class="col-lg-4">
					<h3 class="display-5 mb-5">Kabinet Rex Regum</h3>
					<p>Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros tempus porttitor.</p>
				</div>
				<!--/column -->
				<div class="col-lg-8">
					<div class="swiper-container text-center mb-6" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
						<div class="swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img class="rounded-circle w-20 mx-auto mb-4" src="{{ Vite::asset('resources/img/avatars/t1.jpg') }}" srcset="{{ Vite::asset('resources/img/avatars/t1@2x.jpg') }} 2x" alt="" />
									<h4 class="mb-1">Sambadha Wahyadyatmika</h4>
									<div class="meta mb-2">Ketua BEM</div>
									<p class="mb-2">Ilmu Komputer 2019</p>
									<!-- /.social -->
								</div>
								<!--/.swiper-slide -->
								<div class="swiper-slide">
									<img class="rounded-circle w-20 mx-auto mb-4" src="{{ Vite::asset('resources/img/avatars/t2.jpg') }}" srcset="{{ Vite::asset('resources/img/avatars/t2@2x.jpg') }} 2x" alt="" />
									<h4 class="mb-1">Isyana Sarasvati</h4>
									<div class="meta mb-2">Wakil Ketua BEM I</div>
									<p class="mb-2">IPSE 2020</p>
									<!-- /.social -->
								</div>
								<!--/.swiper-slide -->
								<div class="swiper-slide">
									<img class="rounded-circle w-20 mx-auto mb-4" src="{{ Vite::asset('resources/img/avatars/t3.jpg') }}" srcset="{{ Vite::asset('resources/img/avatars/t3@2x.jpg') }} 2x" alt="" />
									<h4 class="mb-1">Mahatamtama Arya</h4>
									<div class="meta mb-2">Wakil Ketua BEM II</div>
									<p class="mb-2">Pendidikan Kimia 2019</p>
									<!-- /.social -->
								</div>
								<!--/.swiper-slide -->
								<div class="swiper-slide">
									<img class="rounded-circle w-20 mx-auto mb-4" src="{{ Vite::asset('resources/img/avatars/t4.jpg') }}" srcset="{{ Vite::asset('resources/img/avatars/t4@2x.jpg') }} 2x" alt="" />
									<h4 class="mb-1">Putri Ariani</h4>
									<div class="meta mb-2">Wakil Ketua BEM III</div>
									<p class="mb-2">Biologi 2020</p>
									<!-- /.social -->
								</div>
								<!--/.swiper-slide -->
								<!--/.swiper-slide -->
							</div>
							<!--/.swiper-wrapper -->
						</div>
						<!-- /.swiper -->
					</div>
					<!-- /.swiper-container -->
				</div>
				<!--/column -->
			</div>
			<!--/.row -->
		</div>
		<!-- /.container -->
	</section>
	<section class="wrapper bg-soft-primary">
		<div class="overflow-hidden">
			<div class="container py-14 py-md-16">
				<div class="row">
					<div class="col-xl-7 col-xxl-6 mx-auto text-center">
						<h2 class="display-5 text-center mt-2 mb-10">Program Kerja Unggulan</h2>
					</div>
					<!--/column -->
				</div>
				<!--/.row -->
				<div class="swiper-container nav-bottom nav-color mb-14" data-margin="30" data-dots="false" data-nav="true" data-items-lg="3" data-items-md="2" data-items-xs="1">
					<div class="swiper overflow-visible pb-2">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<article>
									<div class="card shadow-lg">
										<figure class="card-img-top overlay overlay-1">
							
												<img src="{{ Vite::asset('resources/img/photos/about10.jpg') }}" srcset="{{ Vite::asset('resources/img/photos/about10.jpg') }} 2x" alt="" />
							
										</figure>
										<div class="card-body p-6">
											<div class="post-header">
												<div class="post-category"> PSDO </div>
												<!-- /.post-category -->
												<h2 class="post-title h3 mt-1 mb-3">Ligula tristique quis risus</h2>
											</div>
											<!-- /.post-header -->
											<div class="post-footer">
												<ul class="post-meta d-flex mb-0">
													<li class="post-date">
														<i class="uil uil-calendar-alt"></i>
														<span>14 Apr 2022</span>
													</li>
												</ul>
												<!-- /.post-meta -->
											</div>
											<!-- /.post-footer -->
										</div>
										<!--/.card-body -->
									</div>
									<!-- /.card -->
								</article>
								<!-- /article -->
							</div>
							<!--/.swiper-slide -->
							<div class="swiper-slide">
								<article>
									<div class="card shadow-lg">
										<figure class="card-img-top overlay overlay-1">
											
												<img src="{{ Vite::asset('resources/img/photos/about10.jpg') }}" srcset="{{ Vite::asset('resources/img/photos/about10.jpg') }} 2x" alt="" />
								
										</figure>
										<div class="card-body p-6">
											<div class="post-header">
												<div class="post-category"> MIKAT </div>
												<!-- /.post-category -->
												<h2 class="post-title h3 mt-1 mb-3">Ligula tristique quis risus</h2>
											</div>
											<!-- /.post-header -->
											<div class="post-footer">
												<ul class="post-meta d-flex mb-0">
													<li class="post-date">
														<i class="uil uil-calendar-alt"></i>
														<span>14 Apr 2022</span>
													</li>
												</ul>
												<!-- /.post-meta -->
											</div>
											<!-- /.post-footer -->
										</div>
										<!--/.card-body -->
									</div>
									<!-- /.card -->
								</article>
								<!-- /article -->
							</div>
							<!--/.swiper-slide -->
							<div class="swiper-slide">
								<article>
									<div class="card shadow-lg">
										<figure class="card-img-top overlay overlay-1">
									
												<img src="{{ Vite::asset('resources/img/photos/about11.jpg') }}" srcset="{{ Vite::asset('resources/img/photos/about11.jpg') }} 2x" alt="" />
											
										</figure>
										<div class="card-body p-6">
											<div class="post-header">
												<div class="post-category"> Kominfo </div>
												<!-- /.post-category -->
												<h2 class="post-title h3 mt-1 mb-3">Ligula tristique quis risus</h2>
											</div>
											<!-- /.post-header -->
											<div class="post-footer">
												<ul class="post-meta d-flex mb-0">
													<li class="post-date">
														<i class="uil uil-calendar-alt"></i>
														<span>14 Apr 2022</span>
													</li>
												</ul>
												<!-- /.post-meta -->
											</div>
											<!-- /.post-footer -->
										</div>
										<!--/.card-body -->
									</div>
									<!-- /.card -->
								</article>
								<!-- /article -->
							</div>
							<!--/.swiper-slide -->
							<!--/.swiper-slide -->
							<div class="swiper-slide">
								<article>
									<div class="card shadow-lg">
										<figure class="card-img-top overlay overlay-1">
											
												<img src="{{ Vite::asset('resources/img/photos/about11.jpg') }}" srcset="{{ Vite::asset('resources/img/photos/about11.jpg') }} 2x" alt="" />
										
										</figure>
										<div class="card-body p-6">
											<div class="post-header">
												<div class="post-category"> Sospol </div>
												<!-- /.post-category -->
												<h2 class="post-title h3 mt-1 mb-3">Ligula tristique quis risus</h2>
											</div>
											<!-- /.post-header -->
											<div class="post-footer">
												<ul class="post-meta d-flex mb-0">
													<li class="post-date">
														<i class="uil uil-calendar-alt"></i>
														<span>14 Apr 2022</span>
													</li>
												</ul>
												<!-- /.post-meta -->
											</div>
											<!-- /.post-footer -->
										</div>
										<!--/.card-body -->
									</div>
									<!-- /.card -->
								</article>
								<!-- /article -->
							</div>
							<!--/.swiper-slide -->
						</div>
						<!--/.swiper-wrapper -->
					</div>
					<!-- /.swiper -->
				</div>
				<!-- /.swiper-container -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /.overflow-hidden -->
	</section>
	<section class="wrapper bg-light angled upper-end">
		<div class="container py-14 py-md-16">
			<div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0">
				<div class="col-lg-4 mt-lg-2">
					<h2 class="display-4 mb-3">Kepanitiaan Terbuka</h2>
					<p class="lead fs-lg mb-6 pe-xxl-5">Ayo daftarkan dirimu menjadi bagian dari program kerja BEM KEMA FPMIPA</p>
					<a href="{{ route('kepanitiaan') }}" class="btn btn-soft-primary rounded-pill">Lihat semua rekrutmen</a>
				</div>
				<!-- /column -->
				<div class="col-lg-8">
					<div class="swiper-container blog grid-view mb-6" data-margin="30" data-dots="true" data-items-md="2" data-items-xs="1">
						<div class="swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<article>
										<figure class="overlay overlay-1 hover-scale rounded mb-5">

												<img src="{{ Vite::asset('resources/img/photos/b4.jpg') }}" alt="" />
										</figure>
										<div class="post-header">
											<div class="text-primary post-category text-line">
												Acara
											</div>
											<!-- /.post-category -->
											<h2 class="post-title h3 mt-1 mb-3">
												Ligula tristique quis risus
											</h2>
										</div>
										<!-- /.post-header -->

										<!-- /.post-footer -->
									</article>
									<!-- /article -->
								</div>
								<!--/.swiper-slide -->
								<div class="swiper-slide">
									<article>
										<figure class="overlay overlay-1 hover-scale rounded mb-5">

												<img src="{{ Vite::asset('resources/img/photos/b4.jpg') }}" alt="" />
										</figure>
										<div class="post-header">
											<div class="text-primary post-category text-line">
												PDDD
											</div>
											<!-- /.post-category -->
											<h2 class="post-title h3 mt-1 mb-3">
												Ligula tristique quis risus
											</h2>
										</div>
										<!-- /.post-header -->

										<!-- /.post-footer -->
									</article>
									<!-- /article -->
								</div>
								<!--/.swiper-slide -->
								<div class="swiper-slide">
									<article>
										<figure class="overlay overlay-1 hover-scale rounded mb-5">

												<img src="{{ Vite::asset('resources/img/photos/b4.jpg') }}" alt="" />
										</figure>
										<div class="post-header">
											<div class="text-primary post-category text-line">
												Bendahara
											</div>
											<!-- /.post-category -->
											<h2 class="post-title h3 mt-1 mb-3">
												Ligula tristique quis risus
											</h2>
										</div>
										<!-- /.post-header -->

										<!-- /.post-footer -->
									</article>
									<!-- /article -->
								</div>
								<!--/.swiper-slide -->
								<div class="swiper-slide">
									<article>
										<figure class="overlay overlay-1 hover-scale rounded mb-5">

												<img src="{{ Vite::asset('resources/img/photos/b4.jpg') }}" alt="" />
										</figure>
										<div class="post-header">
											<div class="text-primary post-category text-line">
												Humas
											</div>
											<!-- /.post-category -->
											<h2 class="post-title h3 mt-1 mb-3">
												Ligula tristique quis risus
											</h2>
										</div>
										<!-- /.post-header -->

										<!-- /.post-footer -->
									</article>
									<!-- /article -->
								</div>
								<!--/.swiper-slide -->
							</div>
							<!--/.swiper-wrapper -->
						</div>
						<!-- /.swiper -->
					</div>
					<!-- /.swiper-container -->
				</div>
				<!-- /column -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>
</x-app-layout>