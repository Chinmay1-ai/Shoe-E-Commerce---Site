//Cart
let cartIcon = document.querySelector("#cart-icon");
let cart = document.querySelector(".cart");
let closeCart = document.querySelector("#close-cart");

let heartIcon = document.querySelector("#heart-icon");
let hearts = document.querySelector(".hearts");
let closeHeart = document.querySelector("#close-heart");

//Open heart
heartIcon.onclick = () => {
  hearts.classList.add("active");
};

//Close heart
closeHeart.onclick = () => {
  hearts.classList.remove("active");
};

//Cart Working JavaScript 
if (document.readyState == "loading") {
  document.addEventListener("DOMContentLoaded", readyheart);
} else {
  readyheart();
}


//Making Function
function readyheart() {
  //Remove Items From heart
  var removeHeartButtons = document.getElementsByClassName("heart-remove");
  console.log(removeHeartButtons);
  for (var i = 0; i < removeHeartButtons.length; i++) {
    var button = removeHeartButtons[i];
    button.addEventListener("click", removeHeartItem);
  }
  
  // Add To Cart
  var addheart = document.getElementsByClassName("add-heart");
  for (var i = 0; i < addheart.length; i++) {
    var button = addheart[i];
    button.addEventListener("click", addHeartClicked);
  }
}

// Remove Items From heart
function removeHeartItem(event) {
  var buttonClicked = event.target;
  buttonClicked.parentElement.remove();
  updatetotal();
}

//Add To heart
function addHeartClicked(event) {
  var button = event.target;
  var shopProducts = button.parentElement;
  var title = shopProducts.getElementsByClassName("product-title")[0].innerText;
  var price = shopProducts.getElementsByClassName("price")[0].innerText;
  var productImg = shopProducts.getElementsByClassName("product-img")[0].src;
  addProductToHeart(title, price, productImg);
  updatetotal();
}

function addProductToHeart(title, price, productImg) {
  var HeartShopBox = document.createElement("div");
  HeartShopBox.classList.add("cart-box");
  var HeartItems = document.getElementsByClassName("heart-content")[0];
  var HeartItemsNames = HeartItems.getElementsByClassName("cart-product-title");
  for (var i = 0; i < HeartItemsNames.length; i++) {
    if (HeartItemsNames[i].innerText == title) {
      alert("This item is already in your shopping cart");
      return;
    }
  }

  var HeartBoxContent = `
                      <img src="${productImg}" alt="" class="cart-img" />
                        <div class="detail-box">
                            <div class="cart-product-title">${title}</div>
                            <div class="cart-price">${price}</div>
                            <input type="number" value="1" class="cart-quantity">
                        </div>
                        <i class="bx bxs-trash-alt Heart-remove"></i>`;
  HeartShopBox.innerHTML = HeartBoxContent;
  HeartItems.append(HeartShopBox);
  HeartShopBox
    .getElementsByClassName("Heart-remove")[0]
    .addEventListener("click", removeHeartItem);
  HeartShopBox
    .getElementsByClassName("cart-quantity")[0]
    .addEventListener("change", quantityChanged);

}



//Open Cart
cartIcon.onclick = () => {
  cart.classList.add("active");
};

//Close Cart
closeCart.onclick = () => {
  cart.classList.remove("active");
};

//Cart Working JavaScript 
if (document.readyState == "loading") {
  document.addEventListener("DOMContentLoaded", ready);
} else {
  ready();
}



//Making Function
function ready() {
  //Remove Items From Cart
  var removeCartButtons = document.getElementsByClassName("cart-remove");
  console.log(removeCartButtons);
  for (var i = 0; i < removeCartButtons.length; i++) {
    var button = removeCartButtons[i];
    button.addEventListener("click", removeCartItem);
  }
  
  // Quantity Changes
  var quantityInputs = document.getElementsByClassName("cart-quantity");
  for (var i = 0; i < quantityInputs.length; i++) {
    var input = quantityInputs[i];
    input.addEventListener("change", quantityChanged);
  }
  
  // Add To Cart
  var addCart = document.getElementsByClassName("add-cart");
  for (var i = 0; i < addCart.length; i++) {
    var button = addCart[i];
    button.addEventListener("click", addCartClicked);
  }
  
  //Buy Button Work
  document.getElementsByClassName('btn-buy')[0].addEventListener("click", buyButtonClicked);
}

//Buy Button
function buyButtonClicked() {
      //  alert('Do You Want To Chechout');
       var cartContent = document.getElementsByClassName('cart-content')[0]
       while(cartContent.hasChildNodes()) {
       cartContent.removeChild(cartContent.firstChild);
     }
     updatetotal();
  }

// Remove Items From Cart
function removeCartItem(event) {
  var buttonClicked = event.target;
  buttonClicked.parentElement.remove();
  updatetotal();
}

//Quantity Changes
function quantityChanged(event) {
  var input = event.target;
  if (isNaN(input.value) || input.value <= 0) {
    input.value = 1;
  }
  updatetotal();
}

//Add To Cart
function addCartClicked(event) {
  var button = event.target;
  var shopProducts = button.parentElement;
  var title = shopProducts.getElementsByClassName("product-title")[0].innerText;
  var price = shopProducts.getElementsByClassName("price")[0].innerText;
  var productImg = shopProducts.getElementsByClassName("product-img")[0].src;
  addProductToCart(title, price, productImg);
  updatetotal();
}

function addProductToCart(title, price, productImg) {
  var cartShopBox = document.createElement("div");
  cartShopBox.classList.add("cart-box");
  var cartItems = document.getElementsByClassName("cart-content")[0];
  var cartItemsNames = cartItems.getElementsByClassName("cart-product-title");
  for (var i = 0; i < cartItemsNames.length; i++) {
    if (cartItemsNames[i].innerText == title) {
      alert("This item is already in your shopping cart");
      return;
    }
  }

  var cartBoxContent = `
                      <img src="${productImg}" alt="" class="cart-img" />
                        <div class="detail-box">
                            <div class="cart-product-title">${title}</div>
                            <div class="cart-price">${price}</div>
                            <input type="number" value="1" class="cart-quantity">
                        </div>
                        <i class="bx bxs-trash-alt cart-remove"></i>`;
  cartShopBox.innerHTML = cartBoxContent;
  cartItems.append(cartShopBox);
  cartShopBox
    .getElementsByClassName("cart-remove")[0]
    .addEventListener("click", removeCartItem);
  cartShopBox
    .getElementsByClassName("cart-quantity")[0]
    .addEventListener("change", quantityChanged);

}

//Update Total
function updatetotal() {
  var cartContent = document.getElementsByClassName("cart-content")[0];
  var cartBoxes = cartContent.getElementsByClassName("cart-box");

  var total = 0;
  for (var i = 0; i < cartBoxes.length; i++) {
    var cartBox = cartBoxes[i];
    var priceElement = cartBox.getElementsByClassName("cart-price")[0];
    var quantityElement = cartBox.getElementsByClassName("cart-quantity")[0];
    var price = parseFloat(priceElement.innerText.replace("₹", ""));
    var quantity = quantityElement.value;
    total = total + price * quantity;
  }
  
  // If price Contains some Cents Value
  total = Math.round(total * 100) / 100;

  // Convert total to Indian Rupee symbol
  var formattedTotal = "₹" + total.toFixed(2);

  document.getElementsByClassName("total-price")[0].innerText = formattedTotal;
}


// // Function to add order to My Order section
// function addOrderToMyOrder(title, price, productImg) {
//   var orderShopBox = document.createElement("div");
//   orderShopBox.classList.add("order-box");
//   var orderItems = document.getElementsByClassName("order-content")[0];

//   var orderBoxContent = `
//                       <img src="${productImg}" alt="" class="order-img" />
//                         <div class="detail-box">
//                             <div class="order-product-title">${title}</div>
//                             <div class="order-price">${price}</div>
//                         </div>`;
//   orderShopBox.innerHTML = orderBoxContent;
//   orderItems.append(orderShopBox);
// }

