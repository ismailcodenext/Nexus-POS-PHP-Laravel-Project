<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Dashboard | Pos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- App favicon -->
    <link
      rel="shortcut icon"
      href="{{asset('back-end/assets/icons/favicon.svg')}}"
      type="image/x-icon"
    />

    <!-- Bootstrap Css -->
    <link
      href="{{asset('back-end/assets/css/bootstrap.min.css')}}"
      id="bootstrap-style"
      rel="stylesheet"
      type="text/css"
    />

    <!-- Fontawesome link -->
    <link href="{{asset('back-end/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <!-- CSS Link-->
    <link
      href="{{asset('back-end/assets/css/pos.css')}}"
      id="app-style"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="{{asset('back-end/assets/css/create-payment-modal.css')}}"
      id="app-style"
      rel="stylesheet"
      type="text/css"
    />
  </head>

  <body>
    <section id="pos-main">
      <div class="row flex-column-reverse flex-lg-row">
        <div class="col-lg-7">
          <!-- Navbar Start -->
          <nav id="navbar">
            <div class="nav-wrapper">
              <div class="nav-logo">
                <img src="./back-end/assets/img/pos-nav-logo.svg" alt="" />
              </div>
              <div class="profile">
                <div class="fullscreen">
                  <img src="./back-end/assets/icons/pos-navbar-full-screen.svg" alt="" />
                </div>
                <div class="profile-wrapper">
                  <img src="./back-end/assets/img/navbar-profile-logo.png" alt="" />
                </div>
              </div>
            </div>
          </nav>
          <!-- Navbar End -->

          <!-- Catgaroies Search Start -->
          <div class="catagories-search-wrapper">
            <div class="headding">
              <h1>Categories</h1>
              <p>Select From Below Categories</p>
            </div>
            <div class="searchbar">
              <label for="text">
                <input
                  type="text"
                  placeholder="Search product code or name..."
                />
                <a href="#" class="search-icon">
                  <svg
                    width="23"
                    height="24"
                    viewBox="0 0 27 27"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M19.2967 16.9811H18.0695L17.6449 16.5566C19.1578 14.8045 20.0686 12.5274 20.0686 10.0343C20.0686 4.49228 15.5763 0 10.0343 0C4.49228 0 0 4.49228 0 10.0343C0 15.5763 4.49228 20.0686 10.0343 20.0686C12.5274 20.0686 14.8045 19.1578 16.5566 17.6527L16.9811 18.0772V19.2967L24.6998 27L27 24.6998L19.2967 16.9811ZM10.0343 16.9811C6.19811 16.9811 3.08748 13.8705 3.08748 10.0343C3.08748 6.19811 6.19811 3.08748 10.0343 3.08748C13.8705 3.08748 16.9811 6.19811 16.9811 10.0343C16.9811 13.8705 13.8705 16.9811 10.0343 16.9811Z"
                      fill="white"
                    />
                  </svg>
                </a>
              </label>
            </div>
          </div>
          <!-- Catgaroies Search End -->

          <!-- Pos Product Slider Start -->
          <section id="product-slider">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="slider-item">
                    <div class="product-img">
                      <img src="./back-end/assets/img/slider-product-img1.png" alt="" />
                    </div>
                    <div class="shadow"></div>
                  </div>
                  <div class="title">
                    <h1>ALL PRODUCTS</h1>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slider-item">
                    <div class="product-img">
                      <img src="./back-end/assets/img/slider-product-img2.png" alt="" />
                    </div>
                    <div class="shadow"></div>
                  </div>
                  <div class="title">
                    <h1>LAPTOPS</h1>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slider-item">
                    <div class="product-img">
                      <img src="./back-end/assets/img/slider-product-img3.png" alt="" />
                    </div>
                    <div class="shadow"></div>
                  </div>
                  <div class="title">
                    <h1>PHONES</h1>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slider-item">
                    <div class="product-img">
                      <img src="./back-end/assets/img/slider-product-img4.png" alt="" />
                    </div>
                    <div class="shadow"></div>
                  </div>
                  <div class="title">
                    <h1>HEADPHONES</h1>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slider-item">
                    <div class="product-img">
                      <img src="./back-end/assets/img/slider-product-img5.png" alt="" />
                    </div>
                    <div class="shadow"></div>
                  </div>
                  <div class="title">
                    <h1>SHOES</h1>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slider-item">
                    <div class="product-img">
                      <img src="./back-end/assets/img/slider-product-img6.png" alt="" />
                    </div>
                    <div class="shadow"></div>
                  </div>
                  <div class="title">
                    <h1>WATCHES</h1>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slider-item">
                    <div class="product-img">
                      <img src="./back-end/assets/img/slider-product-img7.png" alt="" />
                    </div>
                    <div class="shadow"></div>
                  </div>
                  <div class="title">
                    <h1>OILS</h1>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slider-item">
                    <div class="product-img">
                      <img src="./back-end/assets/img/slider-product-img2.png" alt="" />
                    </div>
                    <div class="shadow"></div>
                  </div>
                  <div class="title">
                    <h1>LAPTOPS</h1>
                  </div>
                </div>
                <!-- Add more slides as needed -->
              </div>
            </div>

            <div class="swiper-button-next">
              <i class="fa-solid fa-angle-right"></i>
            </div>
            <div class="swiper-button-prev">
              <i class="fa-solid fa-angle-left"></i>
            </div>
          </section>
          <!-- Pos Product Slider End -->

          <!-- Pos Product Card Start -->
          <section id="product-card">
            <div class="row">
              <div class="col-xl-2 col-md-4 col-4 d-flex align-items-stretch">
                <div class="card-wrapper">
                  <div class="product-price">
                    <h1>$1500</h1>
                    <span>20 pcs</span>
                  </div>
                  <div class="product">
                    <img src="./back-end/assets/img/product-img1.png" alt="" />
                  </div>
                  <div class="drescription">
                    <h1 class="product-id">#01470</h1>
                    <h2 class="name">Dell XPS 13-9350</h2>
                  </div>
                </div>
              </div>

              <div class="col-xl-2 col-md-4 col-4 d-flex align-items-stretch">
                <div class="card-wrapper">
                  <div class="product-price">
                    <h1>$699</h1>
                    <span>120 pcs</span>
                  </div>
                  <div class="product">
                    <img src="./back-end/assets/img/product-img2.png" alt="" />
                  </div>
                  <div class="drescription">
                    <h1 class="product-id">#01480</h1>
                    <h2 class="name">Iphone 14</h2>
                  </div>
                </div>
              </div>

              <div class="col-xl-2 col-md-4 col-4 d-flex align-items-stretch">
                <div class="card-wrapper">
                  <div class="product-price">
                    <h1>$140</h1>
                    <span>250 pcs</span>
                  </div>
                  <div class="product">
                    <img src="./back-end/assets/img/product-img3.png" alt="" />
                  </div>
                  <div class="drescription">
                    <h1 class="product-id">#01490</h1>
                    <h2 class="name">Nike Pegasus FlyEase</h2>
                  </div>
                </div>
              </div>

              <div class="col-xl-2 col-md-4 col-4 d-flex align-items-stretch">
                <div class="card-wrapper">
                  <div class="product-price">
                    <h1>$850</h1>
                    <span>30 pcs</span>
                  </div>
                  <div class="product">
                    <img src="./back-end/assets/img/product-img4.png" alt="" />
                  </div>
                  <div class="drescription">
                    <h1 class="product-id">#01500</h1>
                    <h2 class="name">Hamilton</h2>
                  </div>
                </div>
              </div>

              <div class="col-xl-2 col-md-4 col-4 d-flex align-items-stretch">
                <div class="card-wrapper">
                  <div class="product-price">
                    <h1>$80</h1>
                    <span>120 pcs</span>
                  </div>
                  <div class="product">
                    <img src="./back-end/assets/img/product-img5.png" alt="" />
                  </div>
                  <div class="drescription">
                    <h1 class="product-id">#01510</h1>
                    <h2 class="name">SOL REPUBLIC Shadow</h2>
                  </div>
                </div>
              </div>

              <div class="col-xl-2 col-md-4 col-4 d-flex align-items-stretch">
                <div class="card-wrapper">
                  <div class="product-price">
                    <h1>$49</h1>
                    <span>20 Packs</span>
                  </div>
                  <div class="product">
                    <img src="./back-end/assets/img/product-img6.png" alt="" />
                  </div>
                  <div class="drescription">
                    <h1 class="product-id">#01520</h1>
                    <h2 class="name">Hershey's Kisses Chocolate</h2>
                  </div>
                </div>
              </div>

              <div class="col-xl-2 col-md-4 col-4 d-flex align-items-stretch">
                <div class="card-wrapper">
                  <div class="product-price">
                    <h1>$120</h1>
                    <span>260 Ltr</span>
                  </div>
                  <div class="product">
                    <img src="./back-end/assets/img/product-img7.png" alt="" />
                  </div>
                  <div class="drescription">
                    <h1 class="product-id">#01530</h1>
                    <h2 class="name">Cooking Oil- 3Ltr</h2>
                  </div>
                </div>
              </div>

              <div class="col-xl-2 col-md-4 col-4 d-flex align-items-stretch">
                <div class="card-wrapper">
                  <div class="product-price">
                    <h1>$15.99</h1>
                    <span>30 packs</span>
                  </div>
                  <div class="product">
                    <img src="./back-end/assets/img/product-img8.png" alt="" />
                  </div>
                  <div class="drescription">
                    <h1 class="product-id">#01540</h1>
                    <h2 class="name">Biryani Masala</h2>
                  </div>
                </div>
              </div>

              <div class="col-xl-2 col-md-4 col-4 d-flex align-items-stretch">
                <div class="card-wrapper">
                  <div class="product-price">
                    <h1>$250</h1>
                    <span>49 pcs</span>
                  </div>
                  <div class="product">
                    <img src="./back-end/assets/img/product-img9.png" alt="" />
                  </div>
                  <div class="drescription">
                    <h1 class="product-id">#01550</h1>
                    <h2 class="name">Phoenix Axe Body Spray</h2>
                  </div>
                </div>
              </div>

              <div class="col-xl-2 col-md-4 col-4 d-flex align-items-stretch">
                <div class="card-wrapper">
                  <div class="product-price">
                    <h1>$120</h1>
                    <span>36 pcs</span>
                  </div>
                  <div class="product">
                    <img src="./back-end/assets/img/product-img10.png" alt="" />
                  </div>
                  <div class="drescription">
                    <h1 class="product-id">#01560</h1>
                    <h2 class="name">Head & Shoulders Shampoo</h2>
                  </div>
                </div>
              </div>

              <div class="col-xl-2 col-md-4 col-4 d-flex align-items-stretch">
                <div class="card-wrapper">
                  <div class="product-price">
                    <h1>$890</h1>
                    <span>30 pcs</span>
                  </div>
                  <div class="product">
                    <img src="./back-end/assets/img/product-img11.png" alt="" />
                  </div>
                  <div class="drescription">
                    <h1 class="product-id">#01570</h1>
                    <h2 class="name">DJI Mavic Mini 2</h2>
                  </div>
                </div>
              </div>

              <div class="col-xl-2 col-md-4 col-4 d-flex align-items-stretch">
                <div class="card-wrapper">
                  <div class="product-price">
                    <h1>$890</h1>
                    <span>30 pcs</span>
                  </div>
                  <div class="product">
                    <img src="./back-end/assets/img/product-img12.png" alt="" />
                  </div>
                  <div class="drescription">
                    <h1 class="product-id">#01580</h1>
                    <h2 class="name">Table Nightstand Light LED Lamp</h2>
                  </div>
                </div>
              </div>

              <div class="col-xl-2 col-md-4 col-4 d-flex align-items-stretch">
                <div class="card-wrapper">
                  <div class="product-price">
                    <h1>$120</h1>
                    <span>260 Ltr</span>
                  </div>
                  <div class="product">
                    <img src="./back-end/assets/img/product-img7.png" alt="" />
                  </div>
                  <div class="drescription">
                    <h1 class="product-id">#01530</h1>
                    <h2 class="name">Cooking Oil- 3Ltr</h2>
                  </div>
                </div>
              </div>

              <div class="col-xl-2 col-md-4 col-4 d-flex align-items-stretch">
                <div class="card-wrapper">
                  <div class="product-price">
                    <h1>$15.99</h1>
                    <span>30 packs</span>
                  </div>
                  <div class="product">
                    <img src="./back-end/assets/img/product-img8.png" alt="" />
                  </div>
                  <div class="drescription">
                    <h1 class="product-id">#01540</h1>
                    <h2 class="name">Biryani Masala</h2>
                  </div>
                </div>
              </div>

              <div class="col-xl-2 col-md-4 col-4 d-flex align-items-stretch">
                <div class="card-wrapper">
                  <div class="product-price">
                    <h1>$250</h1>
                    <span>49 pcs</span>
                  </div>
                  <div class="product">
                    <img src="./back-end/assets/img/product-img9.png" alt="" />
                  </div>
                  <div class="drescription">
                    <h1 class="product-id">#01550</h1>
                    <h2 class="name">Phoenix Axe Body Spray</h2>
                  </div>
                </div>
              </div>

              <div class="col-xl-2 col-md-4 col-4 d-flex align-items-stretch">
                <div class="card-wrapper">
                  <div class="product-price">
                    <h1>$120</h1>
                    <span>36 pcs</span>
                  </div>
                  <div class="product">
                    <img src="./back-end/assets/img/product-img10.png" alt="" />
                  </div>
                  <div class="drescription">
                    <h1 class="product-id">#01560</h1>
                    <h2 class="name">Head & Shoulders Shampoo</h2>
                  </div>
                </div>
              </div>

              <div class="col-xl-2 col-md-4 col-4 d-flex align-items-stretch">
                <div class="card-wrapper">
                  <div class="product-price">
                    <h1>$890</h1>
                    <span>30 pcs</span>
                  </div>
                  <div class="product">
                    <img src="./back-end/assets/img/product-img11.png" alt="" />
                  </div>
                  <div class="drescription">
                    <h1 class="product-id">#01570</h1>
                    <h2 class="name">DJI Mavic Mini 2</h2>
                  </div>
                </div>
              </div>

              <div class="col-xl-2 col-md-4 col-4 d-flex align-items-stretch">
                <div class="card-wrapper">
                  <div class="product-price">
                    <h1>$890</h1>
                    <span>30 pcs</span>
                  </div>
                  <div class="product">
                    <img src="./back-end/assets/img/product-img12.png" alt="" />
                  </div>
                  <div class="drescription">
                    <h1 class="product-id">#01580</h1>
                    <h2 class="name">Table Nightstand Light LED Lamp</h2>
                  </div>
                </div>
              </div>

              <div class="col-xl-2 col-md-4 col-4 d-flex align-items-stretch">
                <div class="card-wrapper">
                  <div class="product-price">
                    <h1>$120</h1>
                    <span>260 Ltr</span>
                  </div>
                  <div class="product">
                    <img src="./back-end/assets/img/product-img7.png" alt="" />
                  </div>
                  <div class="drescription">
                    <h1 class="product-id">#01530</h1>
                    <h2 class="name">Cooking Oil- 3Ltr</h2>
                  </div>
                </div>
              </div>

              <div class="col-xl-2 col-md-4 col-4 d-flex align-items-stretch">
                <div class="card-wrapper">
                  <div class="product-price">
                    <h1>$15.99</h1>
                    <span>30 packs</span>
                  </div>
                  <div class="product">
                    <img src="./back-end/assets/img/product-img8.png" alt="" />
                  </div>
                  <div class="drescription">
                    <h1 class="product-id">#01540</h1>
                    <h2 class="name">Biryani Masala</h2>
                  </div>
                </div>
              </div>

              <div class="col-xl-2 col-md-4 col-4 d-flex align-items-stretch">
                <div class="card-wrapper">
                  <div class="product-price">
                    <h1>$250</h1>
                    <span>49 pcs</span>
                  </div>
                  <div class="product">
                    <img src="./back-end/assets/img/product-img9.png" alt="" />
                  </div>
                  <div class="drescription">
                    <h1 class="product-id">#01550</h1>
                    <h2 class="name">Phoenix Axe Body Spray</h2>
                  </div>
                </div>
              </div>

              <div class="col-xl-2 col-md-4 col-4 d-flex align-items-stretch">
                <div class="card-wrapper">
                  <div class="product-price">
                    <h1>$120</h1>
                    <span>36 pcs</span>
                  </div>
                  <div class="product">
                    <img src="./back-end/assets/img/product-img10.png" alt="" />
                  </div>
                  <div class="drescription">
                    <h1 class="product-id">#01560</h1>
                    <h2 class="name">Head & Shoulders Shampoo</h2>
                  </div>
                </div>
              </div>

              <div class="col-xl-2 col-md-4 col-4 d-flex align-items-stretch">
                <div class="card-wrapper">
                  <div class="product-price">
                    <h1>$890</h1>
                    <span>30 pcs</span>
                  </div>
                  <div class="product">
                    <img src="./back-end/assets/img/product-img11.png" alt="" />
                  </div>
                  <div class="drescription">
                    <h1 class="product-id">#01570</h1>
                    <h2 class="name">DJI Mavic Mini 2</h2>
                  </div>
                </div>
              </div>

              <div class="col-xl-2 col-md-4 col-4 d-flex align-items-stretch">
                <div class="card-wrapper">
                  <div class="product-price">
                    <h1>$890</h1>
                    <span>30 pcs</span>
                  </div>
                  <div class="product">
                    <img src="./back-end/assets/img/product-img12.png" alt="" />
                  </div>
                  <div class="drescription">
                    <h1 class="product-id">#01580</h1>
                    <h2 class="name">Table Nightstand Light LED Lamp</h2>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Pos Product Card End -->
        </div>
        <!-- Pos Catagories -->

        <!-- Pos Order List Start -->
        <div class="col-lg-5">
          <!-- Navbar Start -->
          <nav id="navbar">
            <div class="nav-wrapper">
              <div class="nav-logo">
                <img src="./back-end/assets/img/pos-nav-logo.svg" alt="" />
              </div>
              <div class="profile">
                <div class="fullscreen">
                  <img src="./back-end/assets/icons/pos-navbar-full-screen.svg" alt="" />
                </div>
                <div class="profile-wrapper">
                  <img src="./back-end/assets/img/navbar-profile-logo.png" alt="" />
                </div>
              </div>
            </div>
          </nav>
          <!-- Navbar End -->

          <div class="Order-list-wrapper">
            <h1 class="title">Order List</h1>
            <span class="invoice-id">Invoice No : #65565</span>
            <p>Customer Information</p>
          </div>

          <div class="select-box-wrapper">
            <label>
              <select>
                <option selected>Walk in Customer</option>
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
              </select>
            </label>

            <button type="button" class="add-customer-btn">
              <svg
                width="31"
                height="30"
                viewBox="0 0 31 30"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M18.8066 6.6C18.8066 3 15.8066 0 12.0566 0C8.30664 0 5.30664 3 5.30664 6.6C5.30664 10.2 8.30664 13.2 12.0566 13.2C15.8066 13.2 18.8066 10.2 18.8066 6.6ZM8.30664 6.6C8.30664 4.65 9.95664 3 12.0566 3C14.1566 3 15.8066 4.65 15.8066 6.6C15.8066 8.55 14.1566 10.2 12.0566 10.2C9.95664 10.2 8.30664 8.55 8.30664 6.6Z"
                  fill="white"
                />
                <path
                  d="M0.956744 21.15L0.206744 24C-0.243256 25.35 0.056744 26.85 0.956744 28.05C1.85674 29.1 3.05674 29.7 4.55674 29.7H19.5567C20.9067 29.7 22.2567 29.1 23.0067 27.9C23.9067 26.7 24.2067 25.2 23.7567 23.85L23.0067 21C22.1067 17.25 18.8067 14.7 15.0567 14.7H9.05674C5.30674 14.7 2.00674 17.25 0.956744 21.15ZM3.05674 24.75L3.80674 21.9C4.55674 19.35 6.65674 17.7 9.05674 17.7H15.0567C17.4567 17.7 19.5567 19.35 20.3067 21.9L21.0567 24.75C21.2067 25.2 21.0567 25.8 20.7567 26.25C20.6067 26.4 20.1567 26.7 19.5567 26.7H4.55674C3.95674 26.7 3.65674 26.4 3.50674 26.1C3.05674 25.8 2.90674 25.2 3.05674 24.75Z"
                  fill="white"
                />
                <path
                  d="M30.2054 11.086H27.0734V14.29H24.1574V11.086H21.0254V8.33199H24.1574V5.10999H27.0734V8.33199H30.2054V11.086Z"
                  fill="white"
                />
              </svg>
              ADD CUSTOMER
            </button>
          </div>
          <div class="select-box-wrapper">
            <label>
              <select>
                <option selected>Warehouse- 01</option>
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
              </select>
            </label>
          </div>

          <!-- Order list table Start -->
          <div class="table-wrapper">
            <div class="table">
              <table>
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Subtotal</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>
                      <div class="product">
                        <h1>ID: #01480</h1>
                        <h2>Iphone 14</h2>
                      </div>
                    </td>
                    <td><h1 class="price">$699</h1></td>
                    <td>
                      <div class="quantity-controls">
                        <button onclick="decreaseQuantity(this)">-</button>
                        <span class="quantity">1</span>
                        <button onclick="increaseQuantity(this)">+</button>
                      </div>
                    </td>
                    <td><h1 class="price">$699</h1></td>
                    <td>
                      <a href="#" class="action-btn">
                        <svg
                          width="44"
                          height="44"
                          viewBox="0 0 44 44"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <rect
                            y="0.00012207"
                            width="44"
                            height="44"
                            rx="4"
                            fill="#FFD5D5"
                          />
                          <path
                            d="M29.4643 37.0001H14.5358C13.2262 37.0001 12.3096 35.9335 12.3096 34.7335V14.7335H31.6905V34.6001C31.6905 35.9335 30.6429 37.0001 29.4643 37.0001Z"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M33 13.9335V11.5335C33 10.6001 32.2143 9.80012 31.2976 9.80012H26.4524L25.9286 7.80012C25.6667 7.26679 25.2738 7.00012 24.619 7.00012H19.381C18.8571 7.00012 18.3333 7.26679 18.0714 7.80012L17.5476 9.66679H12.7024C11.7857 9.66679 11 10.4668 11 11.4001V13.9335C11 14.3335 11.3929 14.7335 11.7857 14.7335H32.2143C32.7381 14.7335 33 14.3335 33 13.9335Z"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M17.8096 19.5334V32.2001"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M22 19.5334V32.2001"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M26.1904 19.5334V32.2001"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="product">
                        <h1>ID: #01500</h1>
                        <h2>Hamilton</h2>
                      </div>
                    </td>
                    <td><h1 class="price">$850</h1></td>
                    <td>
                      <div class="quantity-controls">
                        <button onclick="decreaseQuantity(this)">-</button>
                        <span class="quantity">1</span>
                        <button onclick="increaseQuantity(this)">+</button>
                      </div>
                    </td>
                    <td><h1 class="price">$850</h1></td>
                    <td>
                      <a href="#" class="action-btn">
                        <svg
                          width="44"
                          height="44"
                          viewBox="0 0 44 44"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <rect
                            y="0.00012207"
                            width="44"
                            height="44"
                            rx="4"
                            fill="#FFD5D5"
                          />
                          <path
                            d="M29.4643 37.0001H14.5358C13.2262 37.0001 12.3096 35.9335 12.3096 34.7335V14.7335H31.6905V34.6001C31.6905 35.9335 30.6429 37.0001 29.4643 37.0001Z"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M33 13.9335V11.5335C33 10.6001 32.2143 9.80012 31.2976 9.80012H26.4524L25.9286 7.80012C25.6667 7.26679 25.2738 7.00012 24.619 7.00012H19.381C18.8571 7.00012 18.3333 7.26679 18.0714 7.80012L17.5476 9.66679H12.7024C11.7857 9.66679 11 10.4668 11 11.4001V13.9335C11 14.3335 11.3929 14.7335 11.7857 14.7335H32.2143C32.7381 14.7335 33 14.3335 33 13.9335Z"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M17.8096 19.5334V32.2001"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M22 19.5334V32.2001"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M26.1904 19.5334V32.2001"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="product">
                        <h1>ID: #01550</h1>
                        <h2>Phoenix Axe Body Spray</h2>
                      </div>
                    </td>
                    <td><h1 class="price">$250</h1></td>
                    <td>
                      <div class="quantity-controls">
                        <button onclick="decreaseQuantity(this)">-</button>
                        <span class="quantity">1</span>
                        <button onclick="increaseQuantity(this)">+</button>
                      </div>
                    </td>
                    <td><h1 class="price">$250</h1></td>
                    <td>
                      <a href="#" class="action-btn">
                        <svg
                          width="44"
                          height="44"
                          viewBox="0 0 44 44"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <rect
                            y="0.00012207"
                            width="44"
                            height="44"
                            rx="4"
                            fill="#FFD5D5"
                          />
                          <path
                            d="M29.4643 37.0001H14.5358C13.2262 37.0001 12.3096 35.9335 12.3096 34.7335V14.7335H31.6905V34.6001C31.6905 35.9335 30.6429 37.0001 29.4643 37.0001Z"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M33 13.9335V11.5335C33 10.6001 32.2143 9.80012 31.2976 9.80012H26.4524L25.9286 7.80012C25.6667 7.26679 25.2738 7.00012 24.619 7.00012H19.381C18.8571 7.00012 18.3333 7.26679 18.0714 7.80012L17.5476 9.66679H12.7024C11.7857 9.66679 11 10.4668 11 11.4001V13.9335C11 14.3335 11.3929 14.7335 11.7857 14.7335H32.2143C32.7381 14.7335 33 14.3335 33 13.9335Z"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M17.8096 19.5334V32.2001"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M22 19.5334V32.2001"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M26.1904 19.5334V32.2001"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="product">
                        <h1>ID: #01480</h1>
                        <h2>Iphone 14</h2>
                      </div>
                    </td>
                    <td><h1 class="price">$699</h1></td>
                    <td>
                      <div class="quantity-controls">
                        <button onclick="decreaseQuantity(this)">-</button>
                        <span class="quantity">1</span>
                        <button onclick="increaseQuantity(this)">+</button>
                      </div>
                    </td>
                    <td><h1 class="price">$699</h1></td>
                    <td>
                      <a href="#" class="action-btn">
                        <svg
                          width="44"
                          height="44"
                          viewBox="0 0 44 44"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <rect
                            y="0.00012207"
                            width="44"
                            height="44"
                            rx="4"
                            fill="#FFD5D5"
                          />
                          <path
                            d="M29.4643 37.0001H14.5358C13.2262 37.0001 12.3096 35.9335 12.3096 34.7335V14.7335H31.6905V34.6001C31.6905 35.9335 30.6429 37.0001 29.4643 37.0001Z"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M33 13.9335V11.5335C33 10.6001 32.2143 9.80012 31.2976 9.80012H26.4524L25.9286 7.80012C25.6667 7.26679 25.2738 7.00012 24.619 7.00012H19.381C18.8571 7.00012 18.3333 7.26679 18.0714 7.80012L17.5476 9.66679H12.7024C11.7857 9.66679 11 10.4668 11 11.4001V13.9335C11 14.3335 11.3929 14.7335 11.7857 14.7335H32.2143C32.7381 14.7335 33 14.3335 33 13.9335Z"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M17.8096 19.5334V32.2001"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M22 19.5334V32.2001"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M26.1904 19.5334V32.2001"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="product">
                        <h1>ID: #01500</h1>
                        <h2>Hamilton</h2>
                      </div>
                    </td>
                    <td><h1 class="price">$850</h1></td>
                    <td>
                      <div class="quantity-controls">
                        <button onclick="decreaseQuantity(this)">-</button>
                        <span class="quantity">1</span>
                        <button onclick="increaseQuantity(this)">+</button>
                      </div>
                    </td>
                    <td><h1 class="price">$850</h1></td>
                    <td>
                      <a href="#" class="action-btn">
                        <svg
                          width="44"
                          height="44"
                          viewBox="0 0 44 44"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <rect
                            y="0.00012207"
                            width="44"
                            height="44"
                            rx="4"
                            fill="#FFD5D5"
                          />
                          <path
                            d="M29.4643 37.0001H14.5358C13.2262 37.0001 12.3096 35.9335 12.3096 34.7335V14.7335H31.6905V34.6001C31.6905 35.9335 30.6429 37.0001 29.4643 37.0001Z"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M33 13.9335V11.5335C33 10.6001 32.2143 9.80012 31.2976 9.80012H26.4524L25.9286 7.80012C25.6667 7.26679 25.2738 7.00012 24.619 7.00012H19.381C18.8571 7.00012 18.3333 7.26679 18.0714 7.80012L17.5476 9.66679H12.7024C11.7857 9.66679 11 10.4668 11 11.4001V13.9335C11 14.3335 11.3929 14.7335 11.7857 14.7335H32.2143C32.7381 14.7335 33 14.3335 33 13.9335Z"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M17.8096 19.5334V32.2001"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M22 19.5334V32.2001"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M26.1904 19.5334V32.2001"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="product">
                        <h1>ID: #01550</h1>
                        <h2>Phoenix Axe Body Spray</h2>
                      </div>
                    </td>
                    <td><h1 class="price">$250</h1></td>
                    <td>
                      <div class="quantity-controls">
                        <button onclick="decreaseQuantity(this)">-</button>
                        <span class="quantity">1</span>
                        <button onclick="increaseQuantity(this)">+</button>
                      </div>
                    </td>
                    <td><h1 class="price">$250</h1></td>
                    <td>
                      <a href="#" class="action-btn">
                        <svg
                          width="44"
                          height="44"
                          viewBox="0 0 44 44"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <rect
                            y="0.00012207"
                            width="44"
                            height="44"
                            rx="4"
                            fill="#FFD5D5"
                          />
                          <path
                            d="M29.4643 37.0001H14.5358C13.2262 37.0001 12.3096 35.9335 12.3096 34.7335V14.7335H31.6905V34.6001C31.6905 35.9335 30.6429 37.0001 29.4643 37.0001Z"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M33 13.9335V11.5335C33 10.6001 32.2143 9.80012 31.2976 9.80012H26.4524L25.9286 7.80012C25.6667 7.26679 25.2738 7.00012 24.619 7.00012H19.381C18.8571 7.00012 18.3333 7.26679 18.0714 7.80012L17.5476 9.66679H12.7024C11.7857 9.66679 11 10.4668 11 11.4001V13.9335C11 14.3335 11.3929 14.7335 11.7857 14.7335H32.2143C32.7381 14.7335 33 14.3335 33 13.9335Z"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M17.8096 19.5334V32.2001"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M22 19.5334V32.2001"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M26.1904 19.5334V32.2001"
                            stroke="#FF0000"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <form id="orderForm">
              <div class="order-wrapper">
                <div class="input-group">
                  <label for="orderTax">Order Tax</label>
                  <div class="input-wrapper">
                    <input
                      type="number"
                      id="orderTax"
                      name="orderTax"
                      placeholder="00"
                      required
                    />
                    <span>%</span>
                  </div>
                </div>
                <div class="input-group">
                  <label for="shipping">Shipping</label>
                  <div class="input-wrapper">
                    <input
                      type="number"
                      id="shipping"
                      name="shipping"
                      placeholder="20"
                      required
                    />
                    <span>$</span>
                  </div>
                </div>
                <div class="input-group">
                  <label for="discount">Discount</label>
                  <div class="input-wrapper">
                    <input
                      type="number"
                      id="discount"
                      name="discount"
                      placeholder="03"
                      required
                    />
                    <span>%</span>
                  </div>
                </div>
              </div>
              <div class="totals">
                <div class="subtotal">
                  <span>Sub-Total</span>
                  <span>$3,173.99</span>
                </div>
                <div class="total">
                  <span>Total</span>
                  <span>$3,135.82</span>
                </div>
              </div>
              <div class="buttons">
                <button type="button" class="reset">Reset</button>
                <button id="openModalBtn" type="submit" class="pay-now">Pay Now</button>
                <button type="button" class="draft">Draft</button>
                <button type="button" class="recent-draft">Recent Draft</button>
              </div>
            </form>
          </div>
        </div>
        <!-- Pos Order List End -->
      </div>
    </section>

    <!-- Create Payment Pop Up Modal Start -->
    <section id="myModal" class="create-payment-modal">
      <div class="modal-content">
        <span class="close-btn close">
          <i class="fa-solid fa-xmark"></i>
        </span>

        <div id="popup-modal">
          <div class="modal-wrapper">
            <div class="row">
              <!-- Product Details Start -->
              <div class="col-lg-6">
                <div class="modal-title">
                  <h1>Create Payment</h1>
                </div>
                <div class="table-wrapper">
                  <div class="product-details">
                    <h1>Product Details</h1>
                  </div>
                  <div class="table">
                    <table>
                      <thead>
                        <tr>
                          <th>SL</th>
                          <th>Product</th>
                          <th>Qty</th>
                          <th>Qty</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td>
                            <div class="sl-nmbr">
                              <h1>01</h1>
                            </div>
                          </td>
                          <td><h1 class="product">#01480-Iphone</h1></td>
                          <td>
                            <div class="qty">
                              <h1>1</h1>
                            </div>
                          </td>
                          <td><h1 class="price">$699</h1></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="sl-nmbr">
                              <h1>02</h1>
                            </div>
                          </td>
                          <td><h1 class="product">#01500-Hamilton</h1></td>
                          <td>
                            <div class="qty">
                              <h1>1</h1>
                            </div>
                          </td>
                          <td><h1 class="price">$850</h1></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="sl-nmbr">
                              <h1>03</h1>
                            </div>
                          </td>
                          <td>
                            <h1 class="product">
                              #01550-Phoenix Axe Body Spray
                            </h1>
                          </td>
                          <td>
                            <div class="qty">
                              <h1>1</h1>
                            </div>
                          </td>
                          <td><h1 class="price">$250</h1></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="sl-nmbr">
                              <h1>04</h1>
                            </div>
                          </td>
                          <td>
                            <h1 class="product">#01490-Nike Pegasus FlyEase</h1>
                          </td>
                          <td>
                            <div class="qty">
                              <h1>1</h1>
                            </div>
                          </td>
                          <td><h1 class="price">$140</h1></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="sl-nmbr">
                              <h1>05</h1>
                            </div>
                          </td>
                          <td>
                            <h1 class="product">#01510-SOL REPUBLIC Shadow</h1>
                          </td>
                          <td>
                            <div class="qty">
                              <h1>1</h1>
                            </div>
                          </td>
                          <td><h1 class="price">$80</h1></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="sl-nmbr">
                              <h1>06</h1>
                            </div>
                          </td>
                          <td>
                            <h1 class="product">
                              #01520-Hershey's Kisses Chocolate
                            </h1>
                          </td>
                          <td>
                            <div class="qty">
                              <h1>1</h1>
                            </div>
                          </td>
                          <td><h1 class="price">$49</h1></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="sl-nmbr">
                              <h1>07</h1>
                            </div>
                          </td>
                          <td>
                            <h1 class="product">#01530-Cooking Oil- 3Ltr</h1>
                          </td>
                          <td>
                            <div class="qty">
                              <h1>1</h1>
                            </div>
                          </td>
                          <td><h1 class="price">$120</h1></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="sl-nmbr">
                              <h1>08</h1>
                            </div>
                          </td>
                          <td>
                            <h1 class="product">#01540-Biryani Masala</h1>
                          </td>
                          <td>
                            <div class="qty">
                              <h1>1</h1>
                            </div>
                          </td>
                          <td><h1 class="price">$15.99</h1></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="sl-nmbr">
                              <h1>09</h1>
                            </div>
                          </td>
                          <td>
                            <h1 class="product">
                              #01570-Table Nightstand Light LED Lamp
                            </h1>
                          </td>
                          <td>
                            <div class="qty">
                              <h1>1</h1>
                            </div>
                          </td>
                          <td><h1 class="price">$890</h1></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="sl-nmbr">
                              <h1>10</h1>
                            </div>
                          </td>
                          <td>
                            <h1 class="product">
                              #01560-Table Nightstand Light LED Lamp
                            </h1>
                          </td>
                          <td>
                            <div class="qty">
                              <h1>1</h1>
                            </div>
                          </td>
                          <td><h1 class="price">$120</h1></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="sl-nmbr">
                              <h1>06</h1>
                            </div>
                          </td>
                          <td>
                            <h1 class="product">
                              #01520-Hershey's Kisses Chocolate
                            </h1>
                          </td>
                          <td>
                            <div class="qty">
                              <h1>1</h1>
                            </div>
                          </td>
                          <td><h1 class="price">$49</h1></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="sl-nmbr">
                              <h1>07</h1>
                            </div>
                          </td>
                          <td>
                            <h1 class="product">#01530-Cooking Oil- 3Ltr</h1>
                          </td>
                          <td>
                            <div class="qty">
                              <h1>1</h1>
                            </div>
                          </td>
                          <td><h1 class="price">$120</h1></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="sl-nmbr">
                              <h1>08</h1>
                            </div>
                          </td>
                          <td>
                            <h1 class="product">#01540-Biryani Masala</h1>
                          </td>
                          <td>
                            <div class="qty">
                              <h1>1</h1>
                            </div>
                          </td>
                          <td><h1 class="price">$15.99</h1></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="sl-nmbr">
                              <h1>09</h1>
                            </div>
                          </td>
                          <td>
                            <h1 class="product">
                              #01570-Table Nightstand Light LED Lamp
                            </h1>
                          </td>
                          <td>
                            <div class="qty">
                              <h1>1</h1>
                            </div>
                          </td>
                          <td><h1 class="price">$890</h1></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="sl-nmbr">
                              <h1>10</h1>
                            </div>
                          </td>
                          <td>
                            <h1 class="product">
                              #01560-Table Nightstand Light LED Lamp
                            </h1>
                          </td>
                          <td>
                            <div class="qty">
                              <h1>1</h1>
                            </div>
                          </td>
                          <td><h1 class="price">$120</h1></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <form id="orderForm">
                    <div class="totals">
                      <div class="subtotal">
                        <span>Sub-Total</span>
                        <span>$3,173.99</span>
                      </div>
                      <div class="tax">
                        <span>Tax (0.00%)</span>
                        <span>$0.00</span>
                      </div>
                      <div class="discount">
                        <span>Discount (3%)</span>
                        <span>$58.17</span>
                      </div>
                      <div class="shipping-cost">
                        <span>Shipping Cost</span>
                        <span>$20.00</span>
                      </div>
                    </div>

                    <button type="button" class="pay-btn">
                      Total Payable: $3,135.82
                    </button>
                  </form>
                </div>
              </div>
              <!-- Product Details End -->

              <!-- Payment Start -->
              <div class="col-lg-6">
                <div class="incoice-id">
                  <h2>Invoice No. : #65565</h2>
                </div>
                <div id="payment">
                  <div class="totals">
                    <div class="total-amount">
                      <span>Total Payable Amount</span>
                      <span>$3,135.82</span>
                    </div>
                    <div class="paid-amount">
                      <span>Paid Amount</span>
                      <input type="text" />
                    </div>
                    <div class="due-amount">
                      <span>Due Amount</span>
                      <span>0.00</span>
                    </div>
                    <div class="status">
                      <span>Shipping Cost</span>
                      <span class="full-paid">Full Paid</span>
                    </div>
                  </div>

                  <div class="payments">
                    <div class="heading">
                      <h2>Payment Method</h2>
                    </div>
                    <form action="#">
                      <input type="radio" name="payment" id="cash" />
                      <input type="radio" name="payment" id="bkash" />
                      <input type="radio" name="payment" id="nagad" />
                      <input type="radio" name="payment" id="rocket" />
                      <input type="radio" name="payment" id="bank" />
                      <input type="radio" name="payment" id="mastercard" />

                      <div class="category-wrapper">
                        <div class="category">
                          <label for="cash" class="cashMethod">
                            <div class="imgName">
                              <div class="imgContainer cash">
                                <img src="./back-end/assets/img/payment-cash.png" alt="" />
                              </div>
                              <h1>Cash</h1>
                            </div>
                            <span class="check"
                              ><i class="fa-solid fa-circle-check"></i
                            ></span>
                          </label>

                          <label for="bkash" class="bkashMethod">
                            <div class="imgName">
                              <div class="imgContainer bkash">
                                <img
                                  src="./back-end/assets/img/payment-bkash.png"
                                  alt=""
                                />
                              </div>
                              <h1>bKash</h1>
                            </div>
                            <span class="check"
                              ><i class="fa-solid fa-circle-check"></i
                            ></span>
                          </label>

                          <label for="nagad" class="nagadMethod">
                            <div class="imgName">
                              <div class="imgContainer nagad">
                                <img
                                  src="./back-end/assets/img/payment-nagad.png"
                                  alt=""
                                />
                              </div>
                              <h1>Nagad</h1>
                            </div>
                            <span class="check"
                              ><i class="fa-solid fa-circle-check"></i
                            ></span>
                          </label>

                          <label for="rocket" class="rocketMethod">
                            <div class="imgName">
                              <div class="imgContainer rocket">
                                <img
                                  src="./back-end/assets/img/payment-rocket.png"
                                  alt=""
                                />
                              </div>
                              <h1>Rocket</h1>
                            </div>
                            <span class="check"
                              ><i class="fa-solid fa-circle-check"></i
                            ></span>
                          </label>

                          <label for="bank" class="bankMethod">
                            <div class="imgName">
                              <div class="imgContainer bank">
                                <img src="./back-end/assets/img/payment-bank.png" alt="" />
                              </div>
                              <h1>Bank</h1>
                            </div>
                            <span class="check"
                              ><i class="fa-solid fa-circle-check"></i
                            ></span>
                          </label>

                          <label for="mastercard" class="mastercardMethod">
                            <div class="imgName">
                              <div class="imgContainer mastercard">
                                <img src="./back-end/assets/img/payment-card.png" alt="" />
                              </div>
                              <h1>Card</h1>
                            </div>
                            <span class="check"
                              ><i class="fa-solid fa-circle-check"></i
                            ></span>
                          </label>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="transaction">
                    <input
                      type="text"
                      placeholder="Enter bKash Transaction ID"
                    />
                  </div>
                  <div class="submit-btn">
                    <button type="submit" class="submit">SUBMIT</button>
                  </div>
                </div>
              </div>
              <!-- Payment End -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Create Payment Pop Up Modal End -->

    <!-- Link Swiper's JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- JAVASCRIPT -->

    <script src="{{asset('back-end/assets/js/fontawesome.js')}}"></script>
    <script src="{{asset('back-end/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('back-end/assets/js/pos-product-slider.js')}}"></script>
    <script src="{{asset('back-end/assets/js/orderlist-table-qty,js')}}"></script>
    <script src="{{asset('back-end/assets/js/finance-popup-modal.js')}}"></script>
  </body>
</html>
