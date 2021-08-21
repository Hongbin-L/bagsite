<?php
include('includes/header.php');

?>
<div class="checkout-bg">
    <span class="checkout-bgc">&nbsp;</span>
<h2>Payment Info</h2>

<div class="checkout-row">
  <div class="checkout-col-75">
    <div class="checkout-container">
      <form action="/action_page.php">
      
        <div class="checkout-row">
          <div class="checkout-col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Seattle">

            <div class="checkout-row">
              <div class="checkout-col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="WA">
              </div>
              <div class="checkout-col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="checkout-col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="checkout-icon-container">
              <i class="fa fa-cc-visa" ></i>
              <i class="fa fa-cc-amex" ></i>
              <i class="fa fa-cc-mastercard"></i>
              <i class="fa fa-cc-discover" ></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="checkout-row">
              <div class="checkout-col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="checkout-col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="checkout-btn">
      </form>
    </div>
  </div>
  <div class="checkout-col-25">
    <div class="checkout-container">
      <h4>Cart <span class="checkout-price"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="detail.php">Product 1</a> <span class="price">$15</span></p>
      <p><a href="detail.php">Product 2</a> <span class="price">$5</span></p>
      <p><a href="detail.php">Product 3</a> <span class="price">$8</span></p>
      <p><a href="detail.php">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="checkout-price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>
</div>
</div>

<?php
include('includes/footer.php');

?>