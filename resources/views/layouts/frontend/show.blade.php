@extends('layouts.frontend.master')

@section('content')

<div id="colorlib-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="wrap-division">
							<article class="animate-box">
								<div class="blog-img" style="background-image: url({{ url('assets/images/'.$tour->image)}});"></div>
								<div class="desc">
									<div class="meta">
										<p>
											<span>3D2N </span>

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
				                        <option value="1">1</option>
				                        <option value="2">2</option>
				                        <option value="3">3</option>
				                        <option value="4">4</option>
				                        <option value="5">5</option>
				                        <option value="6">6</option>
				                        <option value="7">7</option>
				                        <option value="8">8</option>
				                        <option value="9">9</option>
				                        <option value="10">10</option>

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
                                    {!! nl2br(e($tour->description)) !!}
 									{{-- <p>Fasilitas Paket Wisata Pulau Komodo & Labuan Bajo Tour 3 - hari 2 Malam<p>
- Kapal Phinisi Sailing Komodo Labuan Bojo, 5 cabin private, 2 cabin sharing- <br>
- Air bilas 5000 Liter (terdiri dari air panas dan air dingin)<br>
- Tiket Masuk ke Taman Nasional Komodo<br>
- Pengantaran masuk dan keluar Bandara<br>
- Pelampung Keselamatan<br>
- Guide Lokal yang Berlisensi HPI<br>
- Guide Khusus Manta Point<br>
- Makan 7x (makan siang dan makan malam selama 3 hari 2 malam)<br>
- Pemberian snack di sore hari selama perjalanan<br>
- Dokumentasi dari alam bawah air<br>
- Air mineral selama perjalanan<br>
- P3K<br>
- Minuman hangat (Kopi/Teh) selama perjalanan sepuasnya<br>
- Peralatan snorkeling<br>
- Tips Tour Leader<br>
- Pengalaman mengasikkan setelah menjelajahi spot tujuan wisata<p>


Biaya Tersebut Belum Termasuk :<p>
- Tiket pesawat dari kota asal menuju ke meeting point<br>
- Penginapan setelah melakukan perjalanan<br>
- Kebutuhan pribadi<p>


Perlengkapan yang Harus Dipersiapkan<p>
- Tas Kerir 40L<br>
- Sepatu untuk treking atau sendal gunung<br>
- Pakaian ganti Minimal 2 Pasang<br>
- Pakaian untuk berenang<br>
- Jangan lupa untuk membawa obat-obatan pribadi<br>
- Headlamp atau senter<br>
- Kamera digital, SLR, kamera khusus underwater(jika punya)<br>
- Peralatan untuk snorkeling (jika punya)<br>
- Sunblock (minimal SPF 30)<br>
- Peralatan untuk mandi<br>
- Botol air minum atau snack tambahan bagi yang ingin ngemil selama di perjalanan<br>
- Jaket atau pakaian hangat<p>


Rundown Perjalanan (Itinerary) Paket Wisata Pulau Komodo Labuan Bajo Tour 3 Hari 2 Malam
Jika anda termasuk para peserta yang berasal dari luar kota, bisa menggunakan pesawat untuk - kemudian menuju ke kawasan meeting point. Tentunya biaya tiket pesawat ditanggung oleh masing-masing peserta. Selain itu, penginapan para peserta sebelum berangkat menuju ke Labuan Bajo juga akan ditanggung secara pribadi.<p>

Untuk masalah jadwal, yang kami tentukan untuk perjalanan wisata anda merupakan jadwal yang sudah termasuk dalam standart tour dan memiliki sistem yang tidak mengikat serta fleksibel. Namun bagi anda yang ingin mencustom lagi jadwal yang kami sediakan, maka anda bisa langsung berkonsultasi kepada kami untuk masalah jadwal yang diinginkan secara gratis tanpa dipungut biaya apapun alias gratis.<p>

Day 1<p>
09.00 – 10.00 : Berkumpul di area Meeting Point<br>
10.00 – 12.00 : Berangkat menuju ke Pulau Kanawa, Beraktivitas, dan Makan Siang<br>
12.00 – 14.00 : Berangkat menuju ke Manta Point<br>
14.00 – 15.30 : Snorkeling<br>
15.30 – 16.30 : Menuju ke Gili Lawa<br>
16.30 – 18.00 : Treking ke Puncak Gili Lawa (Lokasi Sunset View)<br>
18.00 – 19.00 : Kembali ke kapal<br>
19.00 – 20.00 : Acara Makan Malam<br>
20.00 – selesai : Acara bebas, beristirahat, finish hari pertama<p>
Day 2<p>
06.00 – 07.00 : Bangun Pagi dilanjutkan dengan sarapan pagi<br>
07.00 – 09.00 : Menuju ke Pulau Padar<br>
09.00 – 11.00 : Treking di Puncak Pulau Padar<br>
11.00 – 12.00 : Kembali ke kapal, Makan Siang, Menuju ke Pulau Komodo<br>
12.00 – 13.00 : Treking di Pulau Komodo<br>
13.00 – 15.00 : Menuju ke Pink Beach<br>
15.00 – 17.00 : Menuju ke Pantai Namong, aktifitas snorkeling<br>
17.00 – 18.00 : Menuju ke Pulau Kalong (Lokasi Sunset View)<br>
18.00 – 18.30 : Kembali ke Kapal<br>
18.30 – 19.30 : Istirahat, Bersih-bersih, acara makan malam<br>
19.00 – selesai : istirahat, finish hari kedua<p>
Day 3<p>
07.00 – 08.00 : Bangun, Sarapan pagi<br>
08.00 – 10.00 : Menuju ke Taka Makassar<br>
10.00 – 12.00 : Pelaksanaan aktivitas di Taka Makassar<br>
12.00 – 15.00 : Kembali ke kapal, menuju ke Pulau Kelor, Makan siang<br>
15.00 – 17.00 : Aktivitas di Pulau Kelor (Treking & Snorkeling)<br>
17.00 – 18.00 : Kembali menuju ke Labuan Bajo<br>
18.00 – Selesai : Sampai di Labuan Bajo, perpisahan, trip selesai<br>
*Note : Jadwal acara yang telah tersusun di atas memiliki sistem yang tidak mengikat, bisa berubah sewaktu-waktu tergantung dengan kondisi yang ada di lapangan.oluptates placeat numquam provident quis, atque nisi iure?</p> --}}
								</div>
							</article>




						</div>

					</div>


				</div>
			</div>
		</div>

@endsection
