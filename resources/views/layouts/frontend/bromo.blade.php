@extends('layouts.frontend.master')

@section('content')

<div id="colorlib-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="wrap-division">
							<article class="animate-box">
								<div class="blog-img" style="background-image: url({{ url('assets/images/tour-5.jpg')}});"></div>
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
									<h2><a href="#">3D2N</a></h2>
									<p>kota Malang yang terkenal dengan sebutan kota dingin yang berada di kaki Gunung Semeru dan Gunung Arjuno ini memang sangat layak untuk dijadikan tujuan wisata, dengan suasana yang sejuk seperti pedesaan kalian bisa merasakan nikmatnya liburan di kota Malang, bangun pagi dengan suasana yang sejuk ditambah lagi dengan pemandangan indah dari gunung dan susana sekitar yang bisa kalian rasakan di Malang akan menambah lagi betapa enaknya berlibur ke kota Malang. Masih ragu untuk berlibur ke Malang ? segera hilangkan rasa ragu tersebut dan bergegas pesan paket wisata malang batu bromo 3 hari 2 malam ini, jangan sampai lewatkan waktu liburan yang panjang hanya untuk kegiatan yang sia-sia.<p>
	Rangkaian Kegiatan :<p>
	Day 1<br>
-	08.00 - 08.30 : Penjemputan (Hotel/Bandara/Stasiun di Malang, Batu, Surabaya).<br>
-	08.30 - 09.30 : Perjalanan ke Coban Rondo.<br>
-	09.30 - 12.00 : Wisata Coban Rondo dan Taman Labirin.<br>
-	12.00 - 12.30 : Perjalanan ke Museum Angkut.<br>
-	12.30 - 16.30 : Wisata Museum Angkut.<br>
-	16.30 - 17.00 : Perjalanan BNS.<br>
-	17.00 - 19.00 : Wisata BNS .<br>
-	19.00 - 20.00 : Perjalanan ke Hotel.<br>
-	20.00 - 20.15 : Check In Hotel.<br>
-	20.15 - Selesai : Finish hari pertama (Istirahat Untuk Penjemputan Jam 23.00)<p>
Day 2<br>
-	07.00 – 08.00 : Breakfast .<br>
-	08.00 – 09.00 : Perjalanan ke Petik Apel.<br>
-	09.00 – 12.00 : Wisata Petik Apel.<br>
-	12.00 – 12.30 : Perjalanan ke Jatimpark III & Dino Park .<br>
-	12.30 – 17.00 : Wisata JatimparkIII & Dino Park .<br>
-	17.00 – 17.30 : Perjalanan ke Tempat Oleh-Oleh .<br>
-	17.30 – 18.00 : Cari  Oleh-Oleh .<br>
-	18.00 – 19.00 : Perjalanan ke Hotel .<br>
-	19.00 – 23.00 : Finish Day 2 ( Persiapan pejemputan ke Bromo jam 23.00 ).<p>





	Day 3<br>
-	23.30 – 00.00 : Penjemputan di Hotel & chekout<br>
-	00.00 – 03.00 : Perjalanan ke Transit Point untuk Over Jeep.<br>
-	03.00 – 04.00 : Perjalanan ke Bukit Penanjakan (Bukit Cinta & Bukit  
    Kingkong*Opsional).<br>
-	04.00 – 06.00 : Bukit Penanjakan Gunung Bromo (Menikmati Indahnya Sunrise).<br>
-	06.00 – 08.00 : Padang Savana (Bukit Teletubbies) dan Pasir Berbisik.<br>
-	08.00 – 10.00 : Kawah Bromo dan Pura Luhur Poten.<br>
-	10.00 – 10.30 : Perjalanan kembali ke Transit Point.<br>
-	10.30 – 14.00 : Perjalanan ke Bandara/StasiunMalang/Surabaya<br>
-	14.00 : Drop Finish<p>
Harga paket tour mulai dari Rp 1.895.000 dengan minimal peserta 4 orang, Rp 2.195.000 dengan minimal peserta 3 orang, dan Rp 2.750.000 dengan minimal peserta 2 orang.
</p>
								</div>
							</article>
							
							
							
								
						</div>
						
					</div>

					
				</div>
			</div>
		</div>

@endsection