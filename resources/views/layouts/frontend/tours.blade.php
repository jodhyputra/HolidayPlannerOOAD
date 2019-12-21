@extends('layouts.frontend.master')
@section('content')


		<div class="colorlib-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row">
							<div class="wrap-division">
								<div class="col-md-6 col-sm-6 animate-box">
									<div class="hotel-entry">
										<a href="/labuan" class="hotel-img" style="background-image: url( {{ url('assets/images/tour-1.jpg') }} );">
											<p class="price"><span>4D3N</span></p>
										</a>
										<div class="desc">
											
											<h3><a href="/labuan">Labuan Bajo</a></h3>
											<span class="place">Nusa Tenggara Timur, Indonesia</span>
											<p>Destinasi yang sangat rekomendasi untuk berpergian dengan keluarga atau teman</p>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="hotel-entry">
										<a href="/komodo" class="hotel-img" style="background-image: url( {{ url('assets/images/tour-2.jpg') }} );">
											<p class="price"><span>4D3N</span></p>
										</a>
										<div class="desc">
											
											<h3><a href="/komodo">Pulau Komodo</a></h3>
											<span class="place">Nusa Tenggara Timur, Indonesia</span>
											<p>Pulau Komodo yang hanya ada di Indonesia, salah satu tempat wisata yang sering dikunjungi.</p>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="hotel-entry">
										<a href="/raja" class="hotel-img" style="background-image: url( {{ url('assets/images/tour-3.jpg') }} );">
											<p class="price"><span>4D3N</span></p>
										</a>
										<div class="desc">
											
											<h3><a href="/raja">Raja Ampat</a></h3>
											<span class="place">Papua Barat</span>
											<p>Wisata yang masih alami dengan keindahan alam</p>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="hotel-entry">
										<a href="/sumba" class="hotel-img" style="background-image: url( {{ url('assets/images/tour-4.jpg') }} );">
											<p class="price"><span>4D3N</span></p>
										</a>
										<div class="desc">
											
											<h3><a href="/sumba">Sumba</a></h3>
											<span class="place">Nusa Tenggara Timur, Indonesia</span>
											<p>Budaya yang indah , jauh dari kekotaan sehingga dapat melihat bintang-bintang dilangit dengan sangat jelas</p>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="hotel-entry">
										<a href="/bromo" class="hotel-img" style="background-image: url( {{ url('assets/images/tour-5.jpg') }} );">
											<p class="price"><span>4D3N</span></p>
										</a>
										<div class="desc">
											
											<h3><a href="/bromo">Gunung Bromo</a></h3>
											<span class="place">Malang, Indonesia</span>
											<p>Gunung yang sangat sering dikunjungi oleh para wisatawan untuk mendapatkan pemandangan yang sangat luar biasa</p>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="hotel-entry">
										<a href="/toba" class="hotel-img" style="background-image: url( {{ url('assets/images/tour-6.jpg') }} );">
											<p class="price"><span>4D3N</span></p>
										</a>
										<div class="desc">
										
											<h3><a href="/toba">Danau Toba</a></h3>
											<span class="place">Sumatera Utara, Indonesia</span>
											<p>Danau yang penuh cerita dengan terciptanya danau tersebut, dapat menjadi pilihan utama anda untuk memilih wisata ini</p>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="hotel-entry">
										<a href="/harau" class="hotel-img" style="background-image: url( {{ url('assets/images/tour-7.jpg') }} );">
											<p class="price"><span>4D3N</span></p>
										</a>
										<div class="desc">
											
											<h3><a href="/harau">Lembah Harau</a></h3>
											<span class="place">Sumatera Barat, Indonesia</span>
											<p>Lembah yang dinilai dengan arsitektur-arsitektur indah.</p>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="hotel-entry">
										<a href="/tanjung" class="hotel-img" style="background-image: url( {{ url('assets/images/tour-8.jpg') }} );">
											<p class="price"><span>4D3N</span></p>
										</a>
										<div class="desc">
											
											<h3><a href="/tanjung">Pantai Tanjung Tinggi</a></h3>
											<span class="place">Belitung, Indonesia</span>
											<p>Air yang begitu jernih pada pantai ini, sehingga dapat memanjakan mata yang pergi ke pantai tanjung tinggi</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 text-center">
								<ul class="pagination">
									<li class="disabled"><a href="#">&laquo;</a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">&raquo;</a></li>
								</ul>
							</div>
						</div>
					</div>

					<!-- SIDEBAR-->
					<div class="col-md-3">
						<div class="sidebar-wrap">
							<div class="side search-wrap animate-box">
								<h3 class="sidebar-heading">Find your Tours</h3>
								<form method="post" class="colorlib-form">
				              	<div class="row">
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="date">Check-in:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="date">Check-out:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-out date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="guests">Guest</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="people" id="people" class="form-control" style="background-color: rgb(51,53,68);" >


				                        <option value="#">1</option>
				                        <option value="#">2</option>
				                        <option value="#">3</option>
				                        <option value="#">4</option>
				                        <option value="#">5</option>
				                      <option value="#">6</option>
				                      <option value="#">7</option>
				                      <option value="#">8</option>
				                      <option value="#">9</option>
				                      <option value="#">10</option>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <input type="submit" name="submit" id="submit" value="Find Tours" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>
							</div>
							<!-- <div class="side animate-box">
								<div class="row">
									<div class="col-md-12">
										<h3 class="sidebar-heading">Price Range</h3>
										<form method="post" class="colorlib-form-2">
						              	<div class="row">
						                <div class="col-md-6">
						                  <div class="form-group">
						                    <label for="guests">Price from:</label>
						                    <div class="form-field">
						                      <i class="icon icon-arrow-down3"></i>
						                      <select name="people" id="people" class="form-control">
						                        <option value="#">1</option>
						                        <option value="#">200</option>
						                        <option value="#">300</option>
						                        <option value="#">400</option>
						                        <option value="#">1000</option>
						                      </select>
						                    </div>
						                  </div>
						                </div>
						                <div class="col-md-6">
						                  <div class="form-group">
						                    <label for="guests">Price to:</label>
						                    <div class="form-field">
						                      <i class="icon icon-arrow-down3"></i>
						                      <select name="people" id="people" class="form-control">
						                        <option value="#">2000</option>
						                        <option value="#">4000</option>
						                        <option value="#">6000</option>
						                        <option value="#">8000</option>
						                        <option value="#">10000</option>
						                      </select>
						                    </div>
						                  </div>
						                </div>
						              </div>
						            </form>
					            </div>
								</div>
							</div> -->
							<div class="side animate-box">
								<div class="row">
									<div class="col-md-12">
										<h3 class="sidebar-heading">Review Rating</h3>
										<form method="post" class="colorlib-form-2">
										   <div class="form-check">
												<input type="checkbox" class="form-check-input" id="exampleCheck1">
												<label class="form-check-label" for="exampleCheck1">
													<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
										    	   <p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										      </label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
										      	<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										     </label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
										      	<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										     </label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
										      	<p class="rate"><span><i class="icon-star-full"></i></span></p>
										     </label>
										   </div>
										</form>
									</div>
								</div>
							</div>
							<div class="side animate-box">
								<div class="row">
									<div class="col-md-12">
										<h3 class="sidebar-heading">Categories</h3>
										<form method="post" class="colorlib-form-2">
										   <div class="form-check">
												<input type="checkbox" class="form-check-input" id="exampleCheck1">
												<label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Nature</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Sea</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Mountain</h4>
												</label>
										   </div>
										  
										</form>
									</div>
								</div>
							</div>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection