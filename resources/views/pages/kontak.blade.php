<x-app-layout title="Hubungi Kami" is-header-blur="true">
	<div class="content-wrapper">
		<section class="wrapper bg-soft-primary">
			<div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
				<div class="row">
					<div class="col-md-10 col-xl-8 mx-auto">
						<div class="post-header">
							<h1 class="display-1 mb-5 mt-15">Hubungi Kami</h1>
							<!-- /.post-meta -->
						</div>
						<!-- /.post-header -->
					</div>
					<!-- /column -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<section class="wrapper bg-light">
			<div class="container pb-14 pb-md-16">
				<div class="row">
					<div class="col-lg-10 mx-auto">
						<div class="blog single mt-n17">
							<div class="card shadow-lg">
								<div class="card-body">
									<div class="row gy-10 gx-lg-8 gx-xl-12">
										<div class="col-lg-7">
											<form class="contact-form needs-validation" method="post" action="./assets/php/contact.php" novalidate>
												<div class="messages"></div>
												<div class="row gx-4">
													<div class="col-md-6">
														<div class="form-floating mb-4">
															<input id="form_name" type="text" name="name" class="form-control" placeholder="Jane" required>
															<label for="form_name">Nama Lengkap</label>
															<div class="invalid-feedback"> Isi Nama Lengkap Dengan Benar. </div>
														</div>
													</div>
													<!-- /column -->
													<div class="col-md-6">
														<div class="form-floating mb-4">
															<input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required>
															<label for="form_email">Email</label>
															<div class="invalid-feedback"> Please provide a valid email address. </div>
														</div>
													</div>
													<!-- /column -->
													
													<!-- /column -->
													<div class="col-12">
														<div class="form-floating mb-4">
															<textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px" required></textarea>
															<label for="form_message">Pesan</label>
															<div class="invalid-feedback"> Pesan Harus Diisi. </div>
														</div>
													</div>
													<!-- /column -->
		
													<!-- /column -->
													<div class="col-12">
														<input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Kirim Pesan">
														<p class="text-muted">
															<strong>*</strong> These fields are required.
														</p>
													</div>
													<!-- /column -->
												</div>
												<!-- /.row -->
											</form>
											<!-- /form -->
										</div>
										<!--/column -->
										<div class="col-lg-4 mr-2">
											<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets1.lottiefiles.com/packages/lf20_u25cckyh.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
										</div>
										<!--/column -->
									</div>
								</div>
								<!-- /.card-body -->
							</div>
							<!-- /.card -->
						</div>
						<!-- /.blog -->
					</div>
					<!-- /column -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
	</div>
</x-app-layout>