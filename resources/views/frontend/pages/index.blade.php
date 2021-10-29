@extends('layouts.frontend.master')


@section('content')

 <!-- banner-slider -->
    <section class="banner">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="frontend/assets/images/Group241.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <div class="row">
                <div class="col-lg-6 dis-flex-start" data-aos="fade-right" data-aos-duration="2000">
                  <h2>Lorem Ipsum is simply <strong>dummy text</strong></h2>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more.</p>
                </div>

                <div class="col-lg-6 " data-aos="fade-left" data-aos-duration="2000">
                  <img src="frontend/assets/images/Group 243.png" class="img-fluid" class="img-fluid" alt="">
                </div>
                <div class="col-lg-12">
                  <form>
                    <input type="email" class="form-control" placeholder="Enter Your Location">
                    <button type="submit" class="btn btn-primary">GO</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="frontend/assets/images/Group241.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <div class="row">
                <div class="col-lg-6 dis-flex-start" data-aos="fade-right" data-aos-duration="2000">
                  <h2>Lorem Ipsum is simply <strong>dummy text</strong></h2>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more.</p>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="2000">
                  <img src="frontend/assets/images/Group 243.png" class="img-fluid" class="img-fluid" alt="">
                </div>
                <div class="col-lg-12">
                  <form>
                    {{-- <input type="email" class="form-control" placeholder="Enter Your Location"> --}}
                      <input type="text" id="address-input" name="address_address"placeholder="Enter Your Location"  class="form-control map-input">
                    <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
                    <input type="hidden" name="address_longitude" id="address-longitude" value="0" />
                        {{-- <div id="address-map-container" style="width:100%;height:400px; ">
                            <div style="width: 100%; height: 100%" id="address-map"></div>
                        </div> --}}
                    <button type="submit" class="btn btn-primary">GO</button>
                  </form>
                </div>

              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="frontend/assets/images/Group241.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <div class="row">
                <div class="col-lg-6 dis-flex-start" data-aos="fade-right" data-aos-duration="2000">
                  <h2>Lorem Ipsum is simply <strong>dummy text</strong></h2>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more.</p>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="2000">
                  <img src="frontend/assets/images/Group 243.png" class="img-fluid" class="img-fluid" alt="">
                </div>
                <div class="col-lg-12">
                  <form>
                    <input type="email" class="form-control" placeholder="Enter Your Location">
                    <button type="submit" class="btn btn-primary">GO</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <!-- banner-slider -->
    <!-- section-3 -->
    <section class="section-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right" data-aos-duration="3000">
            <div class="sec-3-in">
              <div class="media">
                <img class="mr-3" src="frontend/assets/images/Group 172.png" alt="">
                <div class="media-body dis-flex-start">
                  <h5 class="mt-0">Rave Gasoline Service</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-right" data-aos-duration="2000">
            <div class="sec-3-in">
              <div class="media">
                <img class="mr-3" src="frontend/assets/images/section-3-2.png" alt="">
                <div class="media-body dis-flex-start">
                  <h5 class="mt-0">Rave Delivery Service</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-right" data-aos-duration="1000">
            <div class="sec-3-in">
              <div class="media">
                <img class="mr-3" src="frontend/assets/images/section-3-3.png" alt="">
                <div class="media-body dis-flex-start">
                  <h5 class="mt-0">Rave Shop</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- section-3 -->
    <!-- section-4 -->
    <section class="section-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="sec-h2" data-aos="fade-right" data-aos-duration="1000"><strong>Why</strong> Choose Rave?</h2>
          </div>
          <div class="row">
            <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">
              <div class="sec-4-in text-center">
                <div class="why-img">
                <img src="frontend/assets/images/why-1.png" class="img-fluid" alt="">
                </div>
                <h3 class="sec-h3">We Prioritize Your Safety</h3>
                <p class="sec-p">All of our members are tracked and undergo a thorough background check to guarantee your safety.</p>
              </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-duration="2000">
              <div class="sec-4-in text-center">
                <div class="why-img">
                <img src="frontend/assets/images/why-2.png" class="img-fluid" alt="">
                </div>
                <h3 class="sec-h3">Maintain High Quality Standards</h3>
                <p class="sec-p">Your ratings and feedback help us ensure that you get the best experience with Rave every time.</p>
              </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-duration="3000">
              <div class="sec-4-in text-center">
                <div class="why-img">
                <img src="frontend/assets/images/why-3.png" class="img-fluid" alt="">
                </div>
                <h3 class="sec-h3">Provide Transparent Pricing</h3>
                <p class="sec-p">Our charges have no hidden-costs, we ensure to list out all charges per service used.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- section-4 -->
    <!-- section-5 -->
    <section class="section-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="sec-h2" data-aos="zoom-out-down" data-aos-duration="3000">About Rave</h2>
            <img src="frontend/assets/images/Group 229.png" class="img-fluid" alt="" data-aos="zoom-out-down" data-aos-duration="1000">
            <p class="sec-p" data-aos="zoom-out-up" data-aos-duration="1000">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- section-5 -->
    <!-- section-6 -->
    <section class="section-6">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="sec-h2" data-aos="zoom-out-up" data-aos-duration="1000">Rave Services</h2>
          </div>
        </div>
        <div class="section-6-inner">
        <div class="row">
            <div class="col-lg-7 p-0" data-aos="fade-right" data-aos-duration="2000">
            <div class="sec-6-in">
              <div class="row">
                <div class="col-lg-8 dis-flex-start">
                  <h3 class="sec-h3">Rave Gasoline</h3>
                  <p class="sec-p">All of our members are tracked and undergo a thorough background check to guarantee your safety.</p>
                  <a href="#" class="sec-8-btn">Order Now</a>
                </div>
                <div class="col-lg-4">
                  <img src="frontend/assets/images/sec-6-1.png" class="img-fluid" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5"></div>
          </div>
        </div>
        <div class="section-6-inner">
        <div class="row">
          <div class="col-lg-5"></div>
          <div class="col-lg-7 p-0" data-aos="fade-left" data-aos-duration="2000">
            <div class="sec-6-in">
              <div class="row">
                <div class="col-lg-8 dis-flex-start">
                  <h3 class="sec-h3">Rave Delivery</h3>
                  <p class="sec-p">All of our members are tracked and undergo a thorough background check to guarantee your safety.</p>
                  <a href="#" class="sec-8-btn">Get Delivery</a>
                </div>
                <div class="col-lg-4">
                  <img src="frontend/assets/images/sec-6-2.png" class="img-fluid" alt="">
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
          <div class="section-6-inner">
          <div class="row">
            <div class="col-lg-7 p-0" data-aos="fade-right" data-aos-duration="2000">
            <div class="sec-6-in">
              <div class="row">
                <div class="col-lg-8 dis-flex-start">
                  <h3 class="sec-h3">Rave Shop</h3>
                  <p class="sec-p">All of our members are tracked and undergo a thorough background check to guarantee your safety.</p>
                  <a href="#" class="sec-8-btn">Shop Now</a>
                </div>
                <div class="col-lg-4">
                  <img src="frontend/assets/images/sec-6-3.png" class="img-fluid" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- section-6 -->
    <!-- section-7 -->
    <section class="section-7">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="sec-h2" data-aos="zoom-up" data-aos-duration="1000"><strong>Get</strong> Connected With Rave</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 p-0" data-aos="zoom-in-right" data-aos-duration="1000">
            <div class="sec-7-in sec-7-in-1 text-center">
            <h3 class="sec-h3">Become A <strong>Customer / Subscriber</strong></h3>
            <form>
              <label>User Name</label>
              <input type="email" class="form-control" placeholder="Type your username">
              <label>Password</label>
              <input type="email" class="form-control" placeholder="Type your password">
              <button type="submit" class="btn btn-primary">Login</button>
              <p>Or Sign Up Using</p>
              <ul>
                <li><a href="#"><img src="frontend/assets/images/social-1.png" class="img-fluid" alt=""></a></li>
                <li><a href="#"><img src="frontend/assets/images/social-2.png" class="img-fluid" alt=""></a></li>
              </ul>
            </form>
          </div>
          </div>
          <div class="col-lg-6 p-0" data-aos="zoom-in-left" data-aos-duration="1000">
            <div class="sec-7-in sec-7-in-2 text-center">
            <h3 class="sec-h3">Join As A <strong>Member</strong></h3>
            <form>
              <label>User Name</label>
              <input type="email" class="form-control" placeholder="Type your username">
              <label>Password</label>
              <input type="email" class="form-control" placeholder="Type your password">
              <button type="submit" class="btn btn-primary">Login</button>
              <p>Or</p>
              <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
          </div>
          </div>
        </div>
      </div>
    </section>
    <!-- section-7 -->
    <!-- section-testy -->
    <section class="shop-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="sec-h2" data-aos="zoom-out-up" data-aos-duration="1000">Gallon Of Gas</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12" data-aos="zoom-out-up" data-aos-duration="2000">
              <div id="gallery">
                <div class="item text-center">
                  <div class="box">
                    <div class="pro-img">
                      <img src="frontend/assets/images/rave-1.png">
                      <div class="add-btnn">
                        <a href="#" class="add-btn">Add To Cart</a>
                      </div>
                    </div>
                    <h3 class="sec-h3">Coffee</h3>
                    <h4>$ 4.00</h4>
                  </div>
                </div>
                <div class="item text-center">
                  <div class="box">
                    <div class="pro-img">
                      <img src="frontend/assets/images/rave-2.png">
                      <div class="add-btnn">
                        <a href="#" class="add-btn">Add To Cart</a>
                      </div>
                    </div>
                    <h3 class="sec-h3">Jumper Cabels</h3>
                    <h4>$ 4.00</h4>
                  </div>
                </div>
                <div class="item text-center">
                  <div class="box">
                    <div class="pro-img">
                      <img src="frontend/assets/images/rave-3.png">
                      <div class="add-btnn">
                        <a href="#" class="add-btn">Add To Cart</a>
                      </div>
                    </div>
                    <h3 class="sec-h3">Gallon Of Gas</h3>
                    <h4>$ 4.00</h4>
                  </div>
                </div>
                <div class="item text-center">
                  <div class="box">
                    <div class="pro-img">
                      <img src="frontend/assets/images/rave-1.png">
                      <div class="add-btnn">
                        <a href="#" class="add-btn">Add To Cart</a>
                      </div>
                    </div>
                    <h3 class="sec-h3">Coffee</h3>
                    <h4>$ 4.00</h4>
                  </div>
                </div>
                <div class="item text-center">
                  <div class="box">
                    <div class="pro-img">
                      <img src="frontend/assets/images/rave-2.png">
                      <div class="add-btnn">
                        <a href="#" class="add-btn">Add To Cart</a>
                      </div>
                    </div>
                    <h3 class="sec-h3">Jumper Cabels</h3>
                    <h4>$ 4.00</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- section-testy -->
    <!-- section-8 -->
    <section>
      <div class="container">
        <div class="row">
          <div class="subscribe-sec">
            <div class="col-lg-12">
              <h2 class="sec-h2">Subscribe To Rave <strong>NewsLetter</strong></h2>
              <p class="sec-p">All of our members are tracked and undergo a thorough.</p>
              <form class="subs-form">
                <div class="first">
                  <input type="email" class="form-control" placeholder="Your Name">
                </div>
                <div class="secound">
                  <input type="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="third">
                  <button type="submit" class="btn btn-primary">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- section-8 -->


@endsection
@push('scripts')
 <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
    <script >
         function initialize() {

        $('form').on('keyup keypress', function(e) {
            var keyCode = e.keyCode || e.which;
            if (keyCode === 13) {
                e.preventDefault();
                return false;
            }
        });
        const locationInputs = document.getElementsByClassName("map-input");

        const autocompletes = [];
        const geocoder = new google.maps.Geocoder;
        for (let i = 0; i < locationInputs.length; i++) {

            const input = locationInputs[i];
            const fieldKey = input.id.replace("-input", "");
            const isEdit = document.getElementById(fieldKey + "-latitude").value != '' && document.getElementById(fieldKey + "-longitude").value != '';

            const latitude = parseFloat(document.getElementById(fieldKey + "-latitude").value) || -33.8688;
            const longitude = parseFloat(document.getElementById(fieldKey + "-longitude").value) || 151.2195;

            const map = new google.maps.Map(document.getElementById(fieldKey + '-map'), {
                center: { lat: latitude, lng: longitude },
                zoom: 13
            });
            const marker = new google.maps.Marker({
                map: map,
                position: { lat: latitude, lng: longitude },
            });

            marker.setVisible(isEdit);

            const autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.key = fieldKey;
            autocompletes.push({ input: input, map: map, marker: marker, autocomplete: autocomplete });
        }

        for (let i = 0; i < autocompletes.length; i++) {
            const input = autocompletes[i].input;
            const autocomplete = autocompletes[i].autocomplete;
            const map = autocompletes[i].map;
            const marker = autocompletes[i].marker;

            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                marker.setVisible(false);
                const place = autocomplete.getPlace();

                geocoder.geocode({ 'placeId': place.place_id }, function(results, status) {
                    if (status === google.maps.GeocoderStatus.OK) {
                        const lat = results[0].geometry.location.lat();
                        const lng = results[0].geometry.location.lng();
                        setLocationCoordinates(autocomplete.key, lat, lng);
                    }
                });

                if (!place.geometry) {
                    window.alert("No details available for input: '" + place.name + "'");
                    input.value = "";
                    return;
                }

                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(17);
                }
                marker.setPosition(place.geometry.location);
                marker.setVisible(true);

            });
        }
    }

function setLocationCoordinates(key, lat, lng) {
    const latitudeField = document.getElementById(key + "-" + "latitude");
    const longitudeField = document.getElementById(key + "-" + "longitude");
    latitudeField.value = lat;
    longitudeField.value = lng;
}
    </script>
@endpush


