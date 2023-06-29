<x-app-layout title="Daftar Kepanitiaan" is-header-blur="true">
	<div class="content-wrapper">
		<section class="wrapper bg-soft-primary">
			<div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
				<div class="row">
					<div class="col-md-10 col-xl-8 mx-auto">
						<div class="post-header">
							<h1 class="display-1 mb-5 mt-15">Kepanitiaan ABC</h1>
							<ul class="post-meta fs-17 mb-5">
								<li>
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
										<path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
									</svg> Bidang Mikat
								</li>
								<li>
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
										<path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
									</svg> Luring
								</li>
							</ul>
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
													<div class="invalid-feedback"> Isi Nama Lengkap. </div>
												</div>
											</div>
											<!-- /column -->
											<div class="col-md-6">
												<div class="form-floating mb-4">
													<input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Doe" required>
													<label for="form_lastname">NIM</label>
													<div class="invalid-feedback"> Isi NIM dengan benar. </div>
												</div>
											</div>
											<!-- /column -->
											<div class="col-md-6">
												<div class="form-floating mb-4">
													<input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required>
													<label for="form_email">No Whatsapp</label>
													<div class="invalid-feedback"> Cantumkan Nomor Whatsapp Aktif. </div>
												</div>
											</div>
											<!-- /column -->
											<div class="col-md-6">
												<div class="form-select-wrapper mb-4">
													<select class="form-select" id="form-select" name="department" required>
														<option selected disabled value="">Program Studi</option>
														<option value="Sales">IPSE</option>
														<option value="Marketing">Ilmu Komputer</option>
														<option value="Customer Support">Kimia</option>
                            <option value="Customer Support">Biologi</option>
                            <option value="Customer Support">Fisika</option>
                            <option value="Customer Support">Matematika</option>
													</select>
													<div class="invalid-feedback"> Pilih Program Studi. </div>
												</div>
											</div>
											<!-- /column -->
											<div class="col-12">
												<div class="form-floating mb-4">
													<textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px" required></textarea>
													<label for="form_message">Alasan memilih kepanitiaan</label>
													<div class="invalid-feedback"> Tuliskan alasan disini. </div>
												</div>
											</div>
											<!-- /column -->
											<div class="col-12 text-center">
												<input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Kirim">
												<p class="text-muted">
													<strong>*</strong> Pastikan semua data telah terisi dengan benar
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