<x-layout>

    {{-- Hero --}}
    <header id="heroSection">
        <div class="heroContainerLayer">
            <!-- RESTAURANT Name  -->
            <div class="d-flex flex-column justify-content-around align-items-center p-5">
                <p class="rest-name">Feliciano</p>
                <p class="rest-name-caption">BEST RESTAURANT</p>
            </div>

            <!-- Footer  -->
            <footer class="container-fluid pt-3">
                <div class="row d-flex justify-content-evenly text-light fs-6">
                    <div class="col-md-2 col-lg-2 col-sm-5 d-flex flex-column align-items-center text-center">
                        <img src="Images/breakfast-1.jpg" class="w-25 rounded-circle my-3" />
                        <p class="fw-bold">Grilled Beef with potatoes</p>
                        <p>Meat, Potatoes, Rice, Tomatoe</p>
                    </div>

                    <div class="col-md-2 col-lg-2 col-sm-5 d-flex flex-column align-items-center text-center">
                        <img src="Images/breakfast-2.jpg" class="w-25 rounded-circle my-3" />
                        <p class="fw-bold">Grilled Beef with potatoes</p>
                        <p>Meat, Potatoes, Rice, Tomatoe</p>
                    </div>

                    <div class="col-md-2 col-lg-2 col-sm-5 d-flex flex-column align-items-center text-center">
                        <img src="Images/breakfast-3.jpg" class="w-25 rounded-circle my-3" />
                        <p class="fw-bold">Grilled Beef with potatoes</p>
                        <p>Meat, Potatoes, Rice, Tomatoe</p>
                    </div>

                    <div class="col-md-2 col-lg-2 col-sm-5 d-flex flex-column align-items-center text-center">
                        <img src="Images/breakfast-4.jpg" class="w-25 rounded-circle my-3" />
                        <p class="fw-bold">Grilled Beef with potatoes</p>
                        <p>Meat, Potatoes, Rice, Tomatoe</p>
                    </div>
                </div>
            </footer>
        </div>
    </header>

    <!-- Catering Services Page -->
    <div id="servicesPage">
        <h1 class="pageTitle">Catering Services</h1>

        <div class="container">
            <div class="row">
                <!-- Birthday Party Section  -->
                <div class="col-md-4 col-lg-4 col-sm-12  text-center">
                    <div class="m-1 p-2 px-5 d-flex flex-column align-items-center justify-content-between">
                        <i class="fa-solid fa-cake-candles"></i>
                        <h3 class="fw-bolder my-3">Birthday Party</h3>
                        <p class="lh-lg ">Even the all-powerful Pointing has no control about the blind texts it is an almost
                        unorthograpics</p>
                    </div>
                </div>

                <!-- Business Meetings Section  -->
                <div class="col-md-4 col-lg-4 col-sm-12  text-center h-80">
                    <div class="m-1 p-2 px-5 d-flex flex-column align-items-center justify-content-between">
                        <i class="fa-solid fa-people-arrows"></i>
                        <h3 class="fw-bolder my-3">Business Meetings</h3>
                        <p class="lh-lg">Even the all-powerful Pointing has no control about the blind texts it is an almost
                        unorthograpics</p>
                    </div>
                </div>

                <!-- Wedding Party Section -->
                <div class="col-md-4 col-lg-4 col-sm-12  text-center h-80">
                    <div class="m-1 p-2 px-5 d-flex flex-column align-items-center justify-content-between">
                        <i class="fa-solid fa-champagne-glasses"></i>
                        <h3 class="fw-bolder my-3">Wedding Party</h3>
                        <p class="lh-lg">Even the all-powerful Pointing has no control about the blind texts it is an almost
                        unorthograpics</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Menu Page  -->
  <div id="menuPage">
    <h1 class="pageTitle">Our Menu</h1>
    <div class="container">
      <div class="d-flex flex-wrap">

        <!-- Item 1 Image  -->
        <section class="col-lg-3 col-md-3 col-sm-6 border">
          <div>
            <img src="{{ asset('images/breakfast-1.jpg') }}" />
          </div>
        </section>

        <!-- Item 1 Caption  -->
        <section class="col-lg-3 col-md-3 col-sm-6 px-4 border d-flex justify-content-center align-items-center">
          <div class="d-flex flex-column justify-content-evenly lh-lg">
            <div class="d-flex justify-content-between">
              <h4 class="fw-bolder">Grilled Beef with potatoes</h4>
              <h4 id="price" class="fw-bolder ms-5">$29</h4>
            </div>
            <p class="me-5">Meat, Potatoes, Rice, Tomatoe</p>
            <button type="button" class="btn btn-order">Order now</button>
          </div>
        </section>

        <!-- Item 2 Image  -->
        <section class="col-lg-3 col-md-3 col-sm-6 border">
          <div>
            <img src="{{ asset('images/breakfast-2.jpg') }}" />
          </div>
        </section>

        <!-- Item 2 Caption  -->
        <section class="col-lg-3 col-md-3 col-sm-6 px-4 border d-flex justify-content-center align-items-center">
          <div class="d-flex flex-column justify-content-evenly lh-lg">
            <div class="d-flex justify-content-between">
              <h4 class="fw-bolder">Grilled Beef with potatoes</h4>
              <h4 id="price" class="fw-bolder ms-5">$29</h4>
            </div>
            <p class="me-5">Meat, Potatoes, Rice, Tomatoe</p>
            <button type="button" class="btn btn-order">Order now</button>
          </div>
        </section>

        <!-- Item 3 Caption  -->
        <section class="col-lg-3 col-md-3 col-sm-6 px-4 border d-flex justify-content-center align-items-center">
          <div class="d-flex flex-column justify-content-evenly lh-lg">
            <div class="d-flex justify-content-between">
              <h4 class="fw-bolder">Grilled Beef with potatoes</h4>
              <h4 id="price" class="fw-bolder ms-5">$29</h4>
            </div>
            <p class="me-5">Meat, Potatoes, Rice, Tomatoe</p>
            <button type="button" class="btn btn-order">Order now</button>
          </div>
        </section>

        <!-- Item 3 Image  -->
        <section class="col-lg-3 col-md-3 col-sm-6 border">
          <div>
            <img src="{{ asset('images/breakfast-3.jpg') }}" />
          </div>
        </section>

        <!-- Item 4 Caption  -->
        <section class="col-lg-3 col-md-3 col-sm-6 px-4 border d-flex justify-content-center align-items-center">
          <div class="d-flex flex-column justify-content-evenly lh-lg">
            <div class="d-flex justify-content-between">
              <h4 class="fw-bolder">Grilled Beef with potatoes</h4>
              <h4 id="price" class="fw-bolder ms-5">$29</h4>
            </div>
            <p class="me-5">Meat, Potatoes, Rice, Tomatoe</p>
            <button type="button" class="btn btn-order">Order now</button>
          </div>
        </section>

        <!-- Item 4 Image  -->
        <section class="col-lg-3 col-md-3 col-sm-6 border">
          <div>
            <img src="images/breakfast-5.jpg" />
          </div>
        </section>

        <!-- Item 5 Image  -->
        <section class="col-lg-3 col-md-3 col-sm-6 border">
          <div>
            <img src="{{ asset('images/breakfast-6.jpg') }}" />
          </div>
        </section>

        <!-- Item 5 Caption  -->
        <section class="col-lg-3 col-md-3 col-sm-6 px-4 border d-flex justify-content-center align-items-center">
          <div class="d-flex flex-column justify-content-evenly lh-lg">
            <div class="d-flex justify-content-between">
              <h4 class="fw-bolder">Grilled Beef with potatoes</h4>
              <h4 id="price" class="fw-bolder ms-5">$29</h4>
            </div>
            <p class="me-5">Meat, Potatoes, Rice, Tomatoe</p>
            <button type="button" class="btn btn-order">Order now</button>
          </div>
        </section>

        <!-- Item 6 Image  -->
        <section class="col-lg-3 col-md-3 col-sm-6 border">
          <div>
            <img src="{{ asset('images/breakfast-2.jpg') }}" />
          </div>
        </section>

        <!-- Item 6 Caption  -->
        <section class="col-lg-3 col-md-3 col-sm-6 px-4 border d-flex justify-content-center align-items-center">
          <div class="d-flex flex-column justify-content-evenly lh-lg">
            <div class="d-flex justify-content-between">
              <h4 class="fw-bolder">Grilled Beef with potatoes</h4>
              <h4 id="price" class="fw-bolder ms-5">$29</h4>
            </div>
            <p class="me-5">Meat, Potatoes, Rice, Tomatoe</p>
            <button type="button" class="btn btn-order">Order now</button>
          </div>
        </section>

      </div>
    </div>
  </div>

  <!-- Our Master Chef Page -->
  <div id="chefsPage">
    <h1 class="pageTitle">Our Master Chef</h1>
    <div class="container">
      <div class="row">

        <!-- Chef 1  -->
        <section class="col-lg-3 col-md-3 col-sm-6">
          <div class="m-3 d-flex flex-column justify-content-between">
            <!-- Image Container  -->
            <div class="chefImgContainer">
              <img src="images/chef-4.jpg" class="rounded-3" />
            </div>
            <!-- Chef Caption  -->
            <div class="my-1 d-flex flex-column justify-content-between">
              <h5 class="fw-bolder">John Smooth</h5>
              <p class="text-black-50">Restaurant Owner</p>
            </div>
            <!-- Chef Social media  -->
            <div class="w-50 my-1 d-flex justify-content-between">
              <a href=""><i class="fa-brands fa-twitter"></i></a>
              <a href=""><i class="fa-brands fa-facebook-f"></i></a>
              <a href=""><i class="fa-brands fa-google-plus-g"></i></a>
              <a href=""><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
        </section>

        <!-- Chef 2  -->
        <section class="col-lg-3 col-md-3 col-sm-6">
          <div class="m-3 d-flex flex-column justify-content-between">
            <!-- Image Container  -->
            <div class="chefImgContainer">
              <img src="images/chef-2.jpg" class="rounded-3" />
            </div>
            <!-- Chef Caption  -->
            <div class="my-1 d-flex flex-column justify-content-between">
              <h5 class="fw-bolder">Rebeca Weison</h5>
              <p class="text-black-50">Head Chef</p>
            </div>
            <!-- Chef Social media  -->
            <div class="w-50 my-1 d-flex justify-content-between">
              <a href=""><i class="fa-brands fa-twitter"></i></a>
              <a href=""><i class="fa-brands fa-facebook-f"></i></a>
              <a href=""><i class="fa-brands fa-google-plus-g"></i></a>
              <a href=""><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
        </section>

        <!-- Chef 3  -->
        <section class="col-lg-3 col-md-3 col-sm-6">
          <div class="m-3 d-flex flex-column justify-content-between">
            <!-- Image Container  -->
            <div class="chefImgContainer">
              <img src="images/chef-3.jpg" class="rounded-3" />
            </div>
            <!-- Chef Caption  -->
            <div class="my-1 d-flex flex-column justify-content-between">
              <h5 class="fw-bolder">Kharl Branyt</h5>
              <p class="text-black-50">Chef</p>
            </div>
            <!-- Chef Social media  -->
            <div class="w-50 my-1 d-flex justify-content-between">
              <a href=""><i class="fa-brands fa-twitter"></i></a>
              <a href=""><i class="fa-brands fa-facebook-f"></i></a>
              <a href=""><i class="fa-brands fa-google-plus-g"></i></a>
              <a href=""><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
        </section>

        <!-- Chef 4  -->
        <section class="col-lg-3 col-md-3 col-sm-6">
          <div class="m-3 d-flex flex-column justify-content-between">
            <!-- Image Container  -->
            <div class="chefImgContainer">
              <img src="images/chef-1.jpg" class="rounded-3" />
            </div>
            <!-- Chef Caption  -->
            <div class="my-1 d-flex flex-column justify-content-between">
              <h5 class="fw-bolder">Luke Simon</h5>
              <p class="text-black-50">Chef</p>
            </div>
            <!-- Chef Social media  -->
            <div class="w-50 my-1 d-flex justify-content-between">
              <a href=""><i class="fa-brands fa-twitter"></i></a>
              <a href=""><i class="fa-brands fa-facebook-f"></i></a>
              <a href=""><i class="fa-brands fa-google-plus-g"></i></a>
              <a href=""><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
        </section>

      </div>
    </div>
  </div>

  
</x-layout>
