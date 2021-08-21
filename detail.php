<?php
include('includes/header.php');

?>
<div class="detail-bg">
<div class="detail">

<div class="detail-container">
  <div class="detail-mySlides">
    <img src="images/bag4.jpg">
  </div>

  <div class="detail-mySlides">
    <img src="images/bag5.jpg">
  </div>

  <div class="detail-mySlides">
    <img src="images/bag6.jpg">
  </div>
    
  <div class="detail-mySlides">
    <img src="images/bag1.jpg">
  </div>

  <div class="detail-mySlides">
    <img src="images/bag2.jpg">
  </div>
    
  <div class="detail-mySlides">
    <img src="images/bag3.jpg">
  </div>
    
  <a class="detail-prev" onclick="plusSlides(-1)">❮</a>
  <a class="detail-next" onclick="plusSlides(1)">❯</a>

  <div class="detail-caption-container">
    <p id="detail-caption"></p>
  </div>

  <div class="-detail-row">
    <div class="detail-column">
      <img class="detail-demo detail-cursor" src="images/bag4.jpg"  onclick="currentSlide(1)" alt="Product">
    </div>
    <div class="detail-column">
      <img class="detail-demo detail-cursor" src="images/bag5.jpg"  onclick="currentSlide(2)" alt="Product">
    </div>
    <div class="detail-column">
      <img class="detail-demo detail-cursor" src="images/bag6.jpg"  onclick="currentSlide(3)" alt="Product">
    </div>
    <div class="detail-column">
      <img class="detail-demo detail-cursor" src="images/bag1.jpg"  onclick="currentSlide(4)" alt="Product">
    </div>
    <div class="detail-column">
      <img class="detail-demo detail-cursor" src="images/bag2.jpg"  onclick="currentSlide(5)" alt="Product">
    </div>    
    <div class="detail-column">
      <img class="detail-demo detail-cursor" src="images/bag3.jpg"  onclick="currentSlide(6)" alt="Product">
    </div>
    </div>

  </div>
</div>

<div class="detail-productname">
<h4>Product Name</h4>
<p>$ Price</p>
</div>
<div class="detail-productinstock">
<p>Select a color: </p>
  <button class="detail-productinstock-tablinks detail-bule" onclick="openColor(event, 'Bule')"></button>
  <button class="detail-productinstock-tablinks detail-green" onclick="openColor(event, 'Green')"></button>
  <button class="detail-productinstock-tablinks detail-red" onclick="openColor(event, 'Red')"></button>
    <button class="detail-productinstock-tablinks detail-yellow" onclick="openColor(event, 'Yellow')"></button>
<div id="Bule" class="detail-productinstock-tabcontent">
  <h3>Bule</h3>
</div>

<div id="Green" class="detail-productinstock-tabcontent">
  <h3>Green</h3>
</div>

<div id="Red" class="detail-productinstock-tabcontent">
  <h3>Red</h3>
</div>
    
<div id="Yellow" class="detail-productinstock-tabcontent">
  <h3>Yellow</h3>
</div>
</div>
<div class="detail-add">
    <label>ADD</label>
    <div class="add">
    <select>
      <option >No&nbsp;Thanks</option>
      <option >Accessories1&nbsp;-&nbsp;$</option>
      <option>Accessories2&nbsp;-&nbsp;$</option>
      <option>Accessories3&nbsp;-&nbsp;$</option>
      <option>Accessories4&nbsp;-&nbsp;$</option>
    </select>
        </div>
    <label>SIZE</label>
    <div class="size">
    <select>
        <option >Regular&nbsp;-&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
     <option >Mini&nbsp;-&nbsp;$</option>
      <option>Small&nbsp;-&nbsp;$</option>
      <option>Medium&nbsp;-&nbsp;$</option>
      <option>Large&nbsp;-&nbsp;$</option>
    </select>
        </div>
    </div>
<div class="detail-quantity">
<tr> 
<td>Quantity:</td>
<td>
<button type="button" onclick="insc()">+</button>
<button type="button" class="detail-quantitynum" id="detail-count">1</button>
<button type="button" onclick="dec()">-</button>
    </td>
</tr>
</div>
    
<div class="detail-checkout">
    <button class="detail-btn">ADDED IN WISHLIST</button>
    <button class="detail-btn">ADD TO BASKET</button>
    <a href="checkout.php"><button class="detail-btn">CHECK OUT</button></a>
    </div>
    
<div class="detail-info">
    <button class="detail-info-accordion">Information</button>
<div class="detail-info-panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="detail-info-accordion">Details</button>
<div class="detail-info-panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
    </div>
</div>

<div class="detail-bg2">
<div class="introduction">
<h3>Introduction:</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum nulla elit, vitae varius
velit venenatis ut. Proin tempus diam massa, varius dignissim erat iaculis eget. Aenean non
sollicitudin ex. Pellentesque sem dolor, dapibus sit amet orci eu, egestas dapibus velit. Vivamus
hendrerit dolor tellus, ut rutrum justo euismod sed. Praesent sed massa quam. Sed vehicula, erat in
convallis molestie, orci massa hendrerit lacus, a blandit ante justo a lectus. Pellentesque eleifend
venenatis sem et auctor.</p>
<br>
<br>
</div>
<div class="detail-video">
<iframe width="560" height="315" src="https://www.youtube.com/embed/oTeYrUs8IL4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="detail-videop">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum nulla elit, vitae varius
velit venenatis ut. Proin tempus diam massa, varius dignissim erat iaculis eget. Aenean non
sollicitudin ex. Pellentesque sem dolor, dapibus sit amet orci eu, egestas dapibus velit. Vivamus
hendrerit dolor tellus, ut rutrum justo euismod sed. </p>
</div>
</div>
<div class="detail-bg3">
<div class="detail-reviews">
<h4>Customer reviews:</h4>
<div class="detail-reviews-container">
  <img src="images/person.jpg" alt="Customer">
    <h5>Customer Name</h5><p>Content:<br>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum nulla elit, vitae varius
velit venenatis ut. Proin tempus diam massa, varius dignissim erat iaculis eget. Aenean non
sollicitudin ex. </p>
</div>

<div class="detail-reviews-container">
  <img src="images/person.jpg" alt="Customer">
  <h5>Customer Name</h5><p>Content:<br>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum nulla elit, vitae varius
velit venenatis ut. Proin tempus diam massa, varius dignissim erat iaculis eget. Aenean non
sollicitudin ex. </p>
</div> 
    
    <div class="detail-reviews-container">
  <img src="images/person.jpg" alt="Customer">
  <h5>Customer Name</h5><p>Content:<br>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum nulla elit, vitae varius
velit venenatis ut. Proin tempus diam massa, varius dignissim erat iaculis eget. Aenean non
sollicitudin ex. </p>
</div>  
    
    <div class="detail-reviews-container">
  <img src="images/person.jpg" alt="Customer">
  <h5>Customer Name</h5><p>Content:<br>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum nulla elit, vitae varius
velit venenatis ut. Proin tempus diam massa, varius dignissim erat iaculis eget. Aenean non
sollicitudin ex. </p>
</div>  
    
    <div class="detail-reviews-container">
  <img src="images/person.jpg" alt="Customer">
  <h5>Customer Name</h5><p>Content:<br>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum nulla elit, vitae varius
velit venenatis ut. Proin tempus diam massa, varius dignissim erat iaculis eget. Aenean non
sollicitudin ex. </p>
</div>  

<div class="yourview-container">
    <h2>Your Review:</h2>
  <form action="/action_page.php">
    <div class="yourview-row">
      <div class="yourview-col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="yourview-col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="yourview-row">
      <div class="yourview-col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="yourview-col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="yourview-row">
    </div>
    <div class="yourview-row">
      <div class="yourview-col-25">
        <label for="content">Content</label>
      </div>
      <div class="yourview-col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="yourview-row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
    
    </div>
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("detail-mySlides");
  var dots = document.getElementsByClassName("detail-demo");
  var captionText = document.getElementById("detail-caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" detail-active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " detail-active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
    
function openColor(evt, colorName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("detail-productinstock-tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("detail-productinstock-tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" color-active", "");
  }
  document.getElementById(colorName).style.display = "block";
  evt.currentTarget.className += " color-active";
}
    
function insc() {
var count=document.getElementById("detail-count").innerHTML;
document.getElementById("detail-count").innerHTML=parseInt(count)+1;
}
function dec() {
	var count=document.getElementById("detail-count").innerHTML;
	if(parseInt(count)>0){
		document.getElementById("detail-count").innerHTML=parseInt(count)-1;		
	};
	
}
    
var acc = document.getElementsByClassName("detail-info-accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("detail-info-active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

    

</script>
<?php
include('includes/footer.php');

?>