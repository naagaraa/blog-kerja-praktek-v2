 <!-- bradcam_area  -->
 <div class="bradcam_area slider_bg_1">
 	<div class="container">
 		<div class="row">
 			<div class="col-xl-12">
 				<div class="bradcam_text">
 					<h3>contact us</h3>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 <!-- /bradcam_area  -->

 <!-- ================ contact section start ================= -->
 <section class="contact-section section_padding">
 	<div class="container">
 		<!-- <div class="d-none d-sm-block mb-5 pb-4">
 			<div id="map" style="height: 480px;"></div>
 			<script>
 			function initMap() {
 				var uluru = {
 					lat: -25.363,
 					lng: 131.044
 				};
 				var grayStyles = [{
 						featureType: "all",
 						stylers: [{
 								saturation: -90
 							},
 							{
 								lightness: 50
 							}
 						]
 					},
 					{
 						elementType: 'labels.text.fill',
 						stylers: [{
 							color: '#ccdee9'
 						}]
 					}
 				];
 				var map = new google.maps.Map(document.getElementById('map'), {
 					center: {
 						lat: -31.197,
 						lng: 150.744
 					},
 					zoom: 9,
 					styles: grayStyles,
 					scrollwheel: false
 				});
 			}
 			</script>
 			<script
 				src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap">
 			</script>

 		</div> -->


 		<div class="row">
 			<div class="col-12">
 				<h2 class="contact-title">Message</h2>
 			</div>
 			<div class="col-lg-8">
 				<form class="form-contact contact_form" action="<?= BASEURL . 'contact/send'; ?>" method="POST">
 					<div class="row">
 						<div class="col-12">
 							<div class="form-group">
 								<textarea class="form-control w-100" name="message" cols="30" rows="9" onfocus="this.placeholder = ''"
 									onblur="this.placeholder = 'Enter Message'" placeholder='Enter Message'></textarea>
 							</div>
 						</div>
 						<div class="col-sm-6">
 							<div class="form-group">
 								<input class="form-control" name="name" type="text" onfocus="this.placeholder = ''"
 									onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
 							</div>
 						</div>
 						<div class="col-sm-6">
 							<div class="form-group">
 								<input class="form-control" name="email" type="email" onfocus="this.placeholder = ''"
 									onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
 							</div>
 						</div>
 						<div class="col-12">
 							<div class="form-group">
 								<input class="form-control" name="company" type="text" onfocus="this.placeholder = ''"
 									onblur="this.placeholder = 'Enter Company'" placeholder='Company'>
 							</div>
 						</div>
 						<div class="col-12">
 							<div class="form-group">
 								<input class="form-control" name="mobile" type="text" onfocus="this.placeholder = ''"
 									onblur="this.placeholder = 'Enter Mobile'" placeholder='Mobile Phone'>
 							</div>
 						</div>
 						<div class="col-12">
						 	<div class="form-group">
								<select class="form-control" id="inputGroupSelect04" name="perihal">
									<option selected value="Pricing">Pricing</option>
									<option value="Parnership">PartnerShip</option>
									<option value="Request Demo">Request Demo</option>
									<option value="Other">Other</option>
								</select>
							</div>
 						</div>
 					</div>
 					<div class="form-group mt-3">
 						<button type="submit" class="button button-contactForm btn_4 boxed-btn">Send Message</button>
 					</div>
 				</form>
 			</div>
 			<div class="col-lg-4">
 				<div class="media contact-info">
 					<span class="contact-info__icon"><i class="ti-home"></i></span>
 					<div class="media-body">
 						<h3>The Bellezza Shopping Arcade
 							2nd Floor Unit SA15-16
 						</h3>
 						<p>Jl. Arteri Permata Hijau, Kec. Kby. Lama
 							DKI Jakarta 12210.</p>
 					</div>
 				</div>
 				<div class="media contact-info">
 					<span class="contact-info__icon"><i class="ti-tablet"></i></span>
 					<div class="media-body">
 						<h3>Marketing Communication,</h3>
 						<p> +62 812 8700 0879</p>
 					</div>
 				</div>
 				<div class="media contact-info">
 					<span class="contact-info__icon"><i class="ti-email"></i></span>
 					<div class="media-body">
 						<h3>info@myspsolution.com</h3>
 						<!-- <p>Send us your query anytime!</p> -->
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>
 <!-- ================ contact section end ================= -->