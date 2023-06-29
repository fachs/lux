<x-app-layout title="SPTB Himpunan" is-header-blur="true">
	<div class="content-wrapper">
		<section class="wrapper bg-soft-primary">
			<div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
				<div class="row">
					<div class="col-md-10 col-xl-8 mx-auto">
						<div class="post-header">
							<h1 class="display-1 mb-5 mt-15">Formulir SPTB Himpunan</h1>
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
									<form class="contact-form needs-validation" method="post" action="./assets/php/contact.php" novalidate>
										<div class="messages"></div>
										<div class="row gx-4">
											<div class="col-md-6">
												<div class="form-floating mb-4">
													<input id="form_name" type="text" name="name" class="form-control" placeholder="Jane" required>
													<label for="form_name">Nama Lengkap</label>
													<div class="invalid-feedback"> Isi Nama Penanggung Jawab. </div>
												</div>
											</div>
											<!-- /column -->
											<div class="col-md-6">
												<div class="form-floating mb-4">
													<input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Doe" required>
													<label for="form_lastname">NIM</label>
													<div class="invalid-feedback"> Isi NIM Dengan Benar. </div>
												</div>
											</div>
											<!-- /column -->
											<div class="col-md-6">
												<div class="form-select-wrapper mb-4">
													<select class="form-select" id="form-select" name="department" required>
														<option selected disabled value="">Asal Himpunan</option>
														<option value="Sales">HMBF</option>
														<option value="Sales">Kemakom</option>
														<option value="Sales">HMF</option>
														<option value="Sales">SA-IPSE</option>
														<option value="Sales">HMK</option>
														<option value="Sales">HIU</option>
													</select>
													<div class="invalid-feedback"> Pilih Himpunan Terlebih Dahulu. </div>
												</div>
											</div>
											<!-- /column -->
											<!-- /column -->
											<div class="col-md-6">
												<div class="form-floating mb-4">
													<input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required>
													<label for="form_email">Nominal IUK</label>
													<div class="invalid-feedback"> Harap Masukan Nominal IUK. </div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-floating mb-4">
													<input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required>
													<label for="form_email">Jumlah Mahasiswa Angkatan Terbaru</label>
													<div class="invalid-feedback"> Please provide a valid email address. </div>
												</div>
											</div>
											<div class="col-md-6">
												
											</div>
											<div class="col-md-6">
													<label for="formFile" class="form-label">File SPTB</label>
													<input class="form-control" type="file" id="formFile">
											</div>
											<div class="col-md-6 mb-5">
												<label for="formFile" class="form-label">Daftar Nama Mahasiswa</label>
												<input class="form-control" type="file" id="formFile">
										</div>
											<!-- /column -->
											<div class="col-12">
												<input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Kirim">
												<p class="text-muted">
													<strong>*</strong> Pastikan semua data diisi dengan benar.
												</p>
											</div>
											<!-- /column -->
										</div>
										<!-- /.row -->
									</form>
									<!-- /form -->
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