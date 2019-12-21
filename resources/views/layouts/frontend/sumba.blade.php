@extends('layouts.frontend.master')

@section('content')

<div id="colorlib-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="wrap-division">
							<article class="animate-box">
								<div class="blog-img" style="background-image: url({{ url('assets/images/tour-4.jpg')}});"></div>
								<div class="desc">
									<div class="meta">
										<p>
											<span>Feb 24, 2018 </span>
											<span>admin </span>
											<span><a href="#">2 Comments</a></span>
										</p>
									</div>
									<div id="colorlib-reservation">
			<!-- <div class="container"> -->
				<div class="row">
					<div class="search-wrap">
						
						<div class="tab-content">
						
				         <div id="hotel" class="tab-pane fade in active">
						      <form method="post" class="colorlib-form">
				              	<div class="row">
				              	 <div class="col-md-2">
				              	 	<div class="booknow">
				              	 		<h2>Book Now</h2>
					              	 	
				              	 	</div>
				              	 </div>
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="date">Start Trip:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="date">End Trip</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-out date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="guests">Orang</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="people" id="people" class="form-control" style="background-color: rgb(51,53,68);">
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
				                <div class="col-md-2">
				                 <a href="/checkout" class="btn btn-primary btn-block"> Book</a>
				                </div>
				              </div>
				            </form>
						   </div>
						
						   
			         </div>
					</div>
				</div>
			</div>
									<h2><a href="#">4D3N</a></h2>
									<p>Jelajahi Sumba hanya dalam 4 hari dan 3 malam! Lihat pesona pulau yang indah ini, mulai dari matahari terbenam di Pantai Bwana, menjelajahi Danau Waekuri, hingga belajar tentang budaya lokal di desa adat seperti Praijing. Dekatkan diri dengan alam dan trekking ke berbagai spot menakjubkan seperti Air Terjun Tenggedu dan Bukit Warinding!<p>
	Rangkaian Kegiatan :<p>
Day 1 <br>
-	11.30 - 12.30 Penjemputan di Bandara Tombalaka<br>
-	12.30 - 13.30 Hotel check in dan makan siang<br>
-	13.30 - 14.30 Berangkat ke Ratenggaro<br>
-	14.30 - 15.30 Menjelajahi Desa Ratenggaro<br>
-	15.30 - 16.30 Berangkat ke Pantai Bwarna<br>
-	16.30 - 18.00 Menjelajahi pantai Bwarna <br>
-	18.00 - 19.30 Kembali ke Hotel<br>
-	19.30 - 20.30 Dinner<br>
-	20.30 - 05.00 Istirahat<p>
	Day 2<p>
-	06:00-07:00 Breakfast & Check out<br>
-	06:00-07:00 Breakfast & Check out<br>
-	07:00-08:30 Menuju ke Pantai Mandorak<br>
-	08:30-09:00 Menjelajahi Pantai Mandorak<br>
-	09:00-09:05 Menuju ke Danau Waekuri<br>
-	09:05-10:00 Menjelajahi Danau Waekuri<br>
-	10:00-12:00 Menuju Desa Praijing<br>
-	12:00-13:00 Menjelajahi Desa Praijing<br>
-	13:00-13:40 Menuju ke Air Terjun Lapopu<br>
-	13:40-15:00 Menjelajahi Air Terjun Lapopu dan makan siang<br>
-	15:00-18:00 Menuju ke Sumba Timur<br>
-	18:00-19:30 Makan malam<br>
-	19:30-05:00 Check in hotel dan istirahat<p>







	Day 3<br>
-	05:00-05:30 Morning call<br>
-	05:00-05:30 Morning call<br>
-	05:30-07:00 Bersiap-siap & sarapan<br>
-	07:00-09:00 Menuju ke Air Terjun Tenggedu<br>
-	09:00-10:00 Trekking ke Air Terjun Tenggedu<br>
-	10:00-11:00 Menjelajahi Air Terjun Tenggedu<br>
-	11:00-12:00 Trekking kembali ke area parkir<br>
-	12:00-12:30 Makan siang (lunch box)<br>
-	12:30-13:30 Menuju ke Savana Puru Kembera<br>
-	13:30-14:30 Menjelajahi Savana Puru Kembara<br>
-	14:30-16:00 Menuju ke Pantai Walakiri<br>
-	16:00-18:00 Menjelajahi Pantai Walakiri hingga matahari terbenam<br>
-	18:00-20:00 Makan malam<br>
-	20:00-04:00 Kembali ke hotel & istirahat<br>
	Day 4<br>
-	04:00-04:30 Morning call<br>
-	04:00-04:30 Morning call<br>
-	04:30-05:00 Menuju ke Bukit Warinding<br>
-	05:00-06:30 Menjelajahi Bukit Warinding<br>
-	06:30-07:30 Kembali ke hotel<br>
-	07:30-08:30 Sarapan & persiapan check out<br>
-	08:30-08:45 Check out<br>
-	08:45-09:00 Menuju ke Sentra Tenun Kampung Priliu<br>
-	09:00-09:45 Berburu souvenir<br>
-	09:45-10:00 Menuju ke Bukit Persaudaraan / Mau Hau<br>
-	10:00-10:45 Menjelajahi Bukit Persaudaraan<br>
-	11:00-11:30 Kembali ke bandara<p>
Harga paket tour mulai dari Rp 3.250.000 dengan minimal peserta 4 orang, Rp 4.100.000 dengan minimal peserta 3 orang,  dan Rp 5.600.000 dengan minimal peserta 2 orang.
</p>
								</div>
							</article>
							
							
							
								
						</div>
						
					</div>

					
				</div>
			</div>
		</div>

@endsection