<?php
session_start();
if (!isset($_SESSION["user"])) {                                                             /* LOG-OUT SESSION */     
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shoe Portal</title>

    <!-- Link To CSS -->
    <link rel="stylesheet" href="style.css" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <!-- Box Icons -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Header -->
    <header>

      
      <!-- Nav -->
      <div class="nav container">
        
        <div class="menu">
          <nav class="navigation">

           
              <box-icon  name='user-circle' type='solid' color='#f8fefe' class="user-pic" onclick="toggleMenu()"></box-icon>
           
          
          
              <div class="sub-menu-wrap" id="subMenu">
                  <div class="sub-menu">
                  
   
  
                      <a href="#" class="sub-menu-link">
                         
                          <!-- <p>My Order</p>
                          <span>></span> -->
                          < <div class="orders">
                            <h2  class="order-title" id="clickableText">My Orders</h2>
                            <div class="productContainer">
                            <div class="order-content" id="hiddenDiv"></div>
                          </div>
                            <!-- <i class="bx bx-x" id="close-heart"></i> -->
                          </div>
                      </a>

                      <a href="contactus.php" class="sub-menu-link">
                        
                          <p>Contact Us</p>
                          <span>></span>

                       <a href="4logout.php" class="sub-menu-link">
                        
                            <p>Log Out</p>
                            <span>></span>
                      </a>
                      
                  </div>
              </div>
          </nav>
  
  
      </div>

        <div class="user">

        <h2 style="color: var(--bg-color);">Shoe <span class="head">Portal</span></h2>

      </div>

        <div class="twologos">
        <!-- Cart Icon -->
        <box-icon class="hollow-heart" name='heart' type='solid' color='#e80909' id="heart-icon"></box-icon>
      <i class="bx bx-shopping-bag" id="cart-icon"></i>
    </div>

    <!-- heart -->
    <div class="hearts">
      <h2 class="cart-title">Wishlist</h2>

      <!-- Content -->
      <div class="heart-content">

      </div>
      <!-- Cart Close -->
      <i class="bx bx-x" id="close-heart"></i>
    </div>


        <!-- Cart -->
        <div class="cart">
          <h2 class="cart-title">Your Cart</h2>

          <!-- Content -->
          <div class="cart-content">

          </div>
          <!-- Total -->
          <div class="total">
            <div class="total-title">Total</div>
            <div class="total-price">₹0</div>
          </div>



          <!-- Buy Button -->
          <a href="checkout.php">
          <button type="button" class="btn-buy">Buy Now</button>
          </a>
          <!-- Cart Close -->
          <i class="bx bx-x" id="close-cart"></i>
        </div>
      </div>
    </header>

    <!-- Shop -->
    <section class="shop container">
     <div class="gender">
      <a href="#Mens1">Mens </a>
      <a href="#Womens1">Womens</a>
      <a href="#Kids1">kids</a>
    </div>

    <section class="advertise">
      <div class="para">
      <p><br><br>Created for the hardwood but taken to the streets, this '80s basketball <br> icon returns with classic details and throwback hoops flair. <br> The synthetic leather overlays help the Nike Dunk <br>channel vintage style while its padded, <br> low-cut collar lets you take your <br> game anywhere—in comfort.</p> <br>

      <h2 class="nike"><span>Nike</span><span class="span2">Dunk</span></h2>
    </div>
    <div class="shoe">
      <img src="img/shoe1.png" height="600px">
    </div>
    </section>

    <div class="Mens-collection" id="Mens1"><h2><span>Mens</span> Collection</h2></div>
    <br>

      <!-- Content -->
      <div class="shop-content">
        
        <!-- Box I -->
        <div class="product-box">
          
          <img
            src="img/Men11.jpg"
            alt="img/product1.jpg"
            class="product-img"
          />
          <h2 class="product-title">StrideMax Runners</h2>
          <span class="price">₹1990</span>
          <box-icon class="add-heart" type='solid' name='heart' color="#e80909" ></box-icon>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!-- Box II -->
        <div class="product-box">
          <img
            src="img/Men1.jpg"
            alt=Image 
            class="product-img"
          />
          <h2 class="product-title">Kyrie 7</h2>
          <span class="price">₹499</span>
          <box-icon class="add-heart" type='solid' name='heart' color='#e80909' ></box-icon>
          <i class="bx bx-shopping-bag add-cart"></i>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!-- Box III -->
        <div class="product-box">
          <img
            src="img/Men3.jpg"
            alt=Image 
            class="product-img"
          />
          <h2 class="product-title">LeBron 18</h2>
          <span class="price">₹2499</span>
          <box-icon class="add-heart" type='solid' name='heart' color='#e80909'></box-icon>
          <i class="bx bx-shopping-bag add-cart"></i>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!-- Box IV -->
        <div class="product-box">
          <img
            src="img/Men13.jpg"
            alt="img/product1.jpg"
            class="product-img"
          />
          <h2 class="product-title">UrbanFlex Sneakers</h2>
          <span class="price">₹999</span>
          <box-icon class="add-heart" type='solid' name='heart' color='#e80909'></box-icon>
          <i class="bx bx-shopping-bag add-cart"></i>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!-- Box V -->
        <div class="product-box">
          <img
            src="img/Men4.jpg"
            alt=image
            class="product-img"
          />
          <h2 class="product-title">Free RN 5.0</h2>
          <span class="price">₹1299</span>
          <box-icon class="add-heart" type='solid' name='heart'color='#e80909' ></box-icon>
          <i class="bx bx-shopping-bag add-cart"></i>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!-- Box VI -->
        <div class="product-box">
          <img
            src="img/Men5.jpg"
            alt="img/product1.jpg"
            class="product-img"
          />
          <h2 class="product-title">SB Dunk Low</h2>
          <span class="price">₹7499</span>
          <box-icon class="add-heart" type='solid' name='heart' color='#e80909'></box-icon>
          <i class="bx bx-shopping-bag add-cart"></i>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!-- Box VII -->
        <div class="product-box">
          <img
            src="img/Men6.jpg"
            alt=Image
            class="product-img"
          />
          <h2 class="product-title">Air Force 1</h2>
          <span class="price">₹4499</span>
          <box-icon class="add-heart" type='solid' name='heart' color='#e80909'></box-icon>
          <i class="bx bx-shopping-bag add-cart"></i>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!-- Box VIII -->
        <div class="product-box">
          <img
            src="img/Men2.jpg"
            alt="img/product1.jpg"
            class="product-img"
          />
          <h2 class="product-title">Cell Pharos</h2>
          <span class="price">₹1999</span>
          <box-icon class="add-heart" type='solid' name='heart' color='#e80909'></box-icon>
          <i class="bx bx-shopping-bag add-cart"></i>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
      </div>
<br>
<br>
      <div class="Mens-collection" id="Womens1"><h2><span>Womens</span> Collection</h2></div>
      <br>
  
        <!-- Content -->
        <div class="shop-content">
          
          <!-- Box I -->
          <div class="product-box">
            
            <img
              src="img/Women1.jpg"
              alt="img/product1.jpg"
              class="product-img"
            />
            <h2 class="product-title">Air Zoom Pegasus 38</h2>
            <span class="price">₹3099</span>
            <box-icon class="add-heart" type='solid' name='heart' color='#e80909'></box-icon>
          <i class="bx bx-shopping-bag add-cart"></i>
          </div>
          <!-- Box II -->
          <div class="product-box">
            <img
              src="img/Women2.jpg"
              alt="img/product1.jpg"
              class="product-img"
            />
            <h2 class="product-title">Air Max Verona</h2>
            <span class="price">₹8799</span>
            <box-icon class="add-heart" type='solid' name='heart' color='#e80909'></box-icon>
          <i class="bx bx-shopping-bag add-cart"></i>
            <i class="bx bx-shopping-bag add-cart"></i>
          </div>
          <!-- Box III -->
          <div class="product-box">
            <img
              src="img/Women3.jpg"
              alt="img/product1.jpg"
              class="product-img"
            />
            <h2 class="product-title">Joyride Dual Run</h2>
            <span class="price">₹499</span>
            <box-icon class="add-heart" type='solid' name='heart'color='#e80909' ></box-icon>
          <i class="bx bx-shopping-bag add-cart"></i>
            <i class="bx bx-shopping-bag add-cart"></i>
          </div>
          <!-- Box IV -->
          <div class="product-box">
            <img
              src="img/Women4.jpg"
              alt="img/product1.jpg"
              class="product-img"
            />
            <h2 class="product-title">Revolution 5</h2>
            <span class="price">₹1499</span>
            <box-icon class="add-heart" type='solid' name='heart' color='#e80909'></box-icon>
          <i class="bx bx-shopping-bag add-cart"></i>
            <i class="bx bx-shopping-bag add-cart"></i>
          </div>
          <!-- Box V -->
          <div class="product-box">
            <img
              src="img/Women5.jpg"
              alt="img/product1.jpg"
              class="product-img"
            />
            <h2 class="product-title">Cali Women's Sneakers</h2>
            <span class="price">799</span>
            <box-icon class="add-heart" type='solid' name='heart' color='#e80909'></box-icon>
          <i class="bx bx-shopping-bag add-cart"></i>
            <i class="bx bx-shopping-bag add-cart"></i>
          </div>
          <!-- Box VI -->
          <div class="product-box">
            <img
              src="img/Women6.jpg"
              alt="img/product1.jpg"
              class="product-img"
            />
            <h2 class="product-title">Blazer Low LE</h2>
            <span class="price">₹1999</span>
            <box-icon class="add-heart" type='solid' name='heart' color='#e80909'></box-icon>
          <i class="bx bx-shopping-bag add-cart"></i>
            <i class="bx bx-shopping-bag add-cart"></i>
          </div>
          <!-- Box VII -->
          <div class="product-box">
            <img
              src="img/Women7.jpg"
              alt="img/product1.jpg"
              class="product-img"
            />
            <h2 class="product-title">RS-X Reinvent Women's Sneakers</h2>
            <span class="price">₹899</span>
            <box-icon class="add-heart" type='solid' name='heart'color='#e80909' ></box-icon>
          <i class="bx bx-shopping-bag add-cart"></i>
            <i class="bx bx-shopping-bag add-cart"></i>
          </div>
          <!-- Box VIII -->
          <div class="product-box">
            <img
              src="img/Women8.jpg"
              alt="img/product1.jpg"
              class="product-img"
            />
            <h2 class="product-title">Nova Mesh Women's</h2>
            <span class="price">₹1399</span>
            <box-icon class="add-heart" type='solid' name='heart'color='#e80909' ></box-icon>
          <i class="bx bx-shopping-bag add-cart"></i>
            <i class="bx bx-shopping-bag add-cart"></i>
          </div>
        </div>
        <br>
        <br>


        <div class="Mens-collection" id="Kids1"><h2><span>Kids</span> Collection</h2></div>
        <br>
    
          <!-- Content -->
          <div class="shop-content">
            
            <!-- Box I -->
            <div class="product-box">
              
              <img
                src="img/kids1.png"
                alt="img/product1.jpg"
                class="product-img"
              />
              <h2 class="product-title">Trailblaze</h2>
              <span class="price">₹499</span>
              <box-icon class="add-heart" type='solid' name='heart' color='#e80909'></box-icon>
          <i class="bx bx-shopping-bag add-cart"></i>
            </div>
            <!-- Box II -->
            <div class="product-box">
              <img
                src="img/kids2.png"
                alt="img/product1.jpg"
                class="product-img"
              />
              <h2 class="product-title">Starlight Kids </h2>
              <span class="price">₹899</span>
              <box-icon class="add-heart" type='solid' name='heart' color='#e80909'></box-icon>
          <i class="bx bx-shopping-bag add-cart"></i>
              <i class="bx bx-shopping-bag add-cart"></i>
            </div>
            <!-- Box III -->
            <div class="product-box">
              <img
                src="img/kids3.png"
                alt="img/product1.jpg"
                class="product-img"
              />
              <h2 class="product-title">SprinterMax</h2>
              <span class="price">₹599</span>
              <box-icon class="add-heart" type='solid' name='heart'color='#e80909' ></box-icon>
          <i class="bx bx-shopping-bag add-cart"></i>
              <i class="bx bx-shopping-bag add-cart"></i>
            </div>
            <!-- Box IV -->
            <div class="product-box">
              <img
                src="img/kids4.png"
                alt="img/product1.jpg"
                class="product-img"
              />
              <h2 class="product-title">StrideMaster</h2>
              <span class="price">₹399</span>
              <box-icon class="add-heart" type='solid' name='heart' color='#e80909'></box-icon>
          <i class="bx bx-shopping-bag add-cart"></i>
              <i class="bx bx-shopping-bag add-cart"></i>
            </div>
            <!-- Box V -->
            <div class="product-box">
              <img
                src="img/kids5.png"
                alt="img/product1.jpg"
                class="product-img"
              />
              <h2 class="product-title">Galaxy Lights Athletic Shoes</h2>
              <span class="price">₹999</span>
              <box-icon class="add-heart" type='solid' name='heart' color='#e80909'></box-icon>
          <i class="bx bx-shopping-bag add-cart"></i>
              <i class="bx bx-shopping-bag add-cart"></i>
            </div>
            <!-- Box VI -->
            <div class="product-box">
              <img
                src="img/kids6.png"
                alt="img/product1.jpg"
                class="product-img"
              />
              <h2 class="product-title">Trekker</h2>
              <span class="price">₹499</span>
              <box-icon class="add-heart" type='solid' name='heart' color='#e80909'></box-icon>
          <i class="bx bx-shopping-bag add-cart"></i>
              <i class="bx bx-shopping-bag add-cart"></i>
            </div>
            <!-- Box VII -->
            <div class="product-box">
              <img
                src="img/kids7.png"
                alt="img/product1.jpg"
                class="product-img"
              />
              <h2 class="product-title">Rainbow Racer Slip-Ons</h2>
              <span class="price">₹399</span>
              <box-icon class="add-heart" type='solid' name='heart' color='#e80909'></box-icon>
          <i class="bx bx-shopping-bag add-cart"></i>
              <i class="bx bx-shopping-bag add-cart"></i>
            </div>
            <!-- Box VIII -->
            <div class="product-box">
              <img
                src="img/kids8.png"
                alt="img/product1.jpg"
                class="product-img"
              />
              <h2 class="product-title">Junior Jumpstart Basketball Shoes</h2>
              <span class="price">₹599</span>
              <box-icon class="add-heart" type='solid' name='heart' color='#e80909'></box-icon>
          <i class="bx bx-shopping-bag add-cart"></i>
              <i class="bx bx-shopping-bag add-cart"></i>
            </div>
          </div>


    </section>


        <!-- Footer section -->

        <section class="footer">
      <h2 class="footer-head">Team <span>Blog</span></h2>
      <div class="footer-box">
        <div class="box">
          <img src="" alt="">
          <h3>Sanket Pachade</h3>
          <p>A pationate developer who handled the front-end of this website.</p>
        </div>
        <div class="box">
          <img src="" alt="">
          <h3>Viraj Manohar</h3>
          <p>A pationate developer who handled the front-end of this website.</p>
        </div> <div class="box">
          <img src="" alt="">
          <h3>Aryan Dore</h3>
          <p>A pationate developer who handled the Back-end of this website.</p>
        </div> <div class="box">
          <img src="" alt="">
          <h3>Devanshu Joshi</h3>
          <p>A pationate developer who handled the Back-end of this website.</p>
        </div>
      </div>
    </section>



    <script>
      let subMenu = document.getElementById("subMenu");

      function toggleMenu() {
          subMenu.classList.toggle("open-menu");
      }
  </script>


    <script src="script.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  </body>
</html>
