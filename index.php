<?php
include('includes/header.php');

?>
    <main>
<div id="index-slideshow-container">

    <div class="index-mySlides index-fade">
    <div class="index-numbertext">1 / 6</div>
    <img src="images/bag1.jpg"  alt="bag1">
    </div>
    
    <div class="index-mySlides index-fade">
    <div class="index-numbertext">2 / 6</div>
    <img src="images/bag2.jpg" alt="bag2">
    </div>

    <div class="index-mySlides index-fade">
    <div class="index-numbertext">3 / 6</div>
    <img src="images/bag3.jpg" alt="bag3">
    </div>

    <div class="index-mySlides index-fade">
    <div class="index-numbertext">4 / 6</div>
    <img src="images/bag4.jpg" alt="bag4">
    </div>
    
    <div class="index-mySlides index-fade">
    <div class="index-numbertext">5 / 6</div>
    <img src="images/bag5.jpg" alt="bag5">
  </div>
    
    <div class="index-mySlides index-fade">
    <div class="index-numbertext">6 / 6</div>
    <img src="images/bag6.jpg" alt="bag6">
  </div>
  
</div>
<br>
    <div id="topimage">
    <h2>Special offer</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing
        elit. Nam condimentum nulla elit, vitae varius velit
        venenatis ut.</p>
        </div>
        <div id="shop">
        <a class="index-prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="index-next" onclick="plusSlides(1)">&#10095;</a>
         <a href="bags.php"><button class="shopnow">SHOW NOW</button></a>
    </div>
        
    <div class="index-content-bg">
    <div class="content">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam gravida massa eu erat gravida fermentum. Etiam et vehicula erat. Nam posuere mi turpis, nec finibus enim tristique et. Sed at turpis porta, ultrices ligula ac, convallis mauris. Donec accumsan vehicula quam eget euismod. </p>
    </div>
    
    <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/oTeYrUs8IL4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
        </div>
        
    <section id="bags">
        <div class="div1">
        <img src="images/bag4.jpg" alt="trendy"><a href="trendy.php"><span class="span1">Trendy</span></a>
        </div>
        <div class="div1">
        <img src="images/bag2.jpg" alt="popular"><a href="popular.php"><span class="span1">Popular</span></a>
        </div>
        <div class="div1">
        <img src="images/bag5.jpg" alt="new"><a href="new.php"><span class="span1">New</span></a>
        </div>
        <div class="div2">
        <img src="images/bag1.jpg" alt="Backpack"><a href="backpack.php"><span class="span1">Backpack</span></a>
        </div>
        <div class="div2">
        <img src="images/bag3.jpg" alt="Travel"><a href="travel.php"><span class="span1">Travel</span></a>
        </div>
        <div class="div2">
        <img src="images/bag6.jpg" alt="Briefcase"><a href="briefcase.php"><span class="span1">Briefcase</span></a>
        </div>

<div class="compared">
<h3>The hottest backpack of the month</h3>
<p>No1 Item</p>
<a href="detail.php"><img src="images/bag2.jpg" alt="item1"></a>
<div class="com-container">
  <div class="skills Item1">90%</div>
</div>

<p>No2 Item2</p>
    <a href="detail.php"><img src="images/bag1.jpg" alt="item1"></a>
<div class="com-container">
  <div class="skills Item2">80%</div>
</div>

<p>No3 Item3</p>
    <a href="detail.php"><img src="images/bag5.jpg" alt="item1"></a>
<div class="com-container">
  <div class="skills Item3">65%</div>
</div>

<p>No4 Item4</p>
    <a href="detail.php"><img src="images/bag4.jpg" alt="item1"></a>
<div class="com-container">
  <div class="skills Item4">60%</div>
</div>
    </div>
</section>
    </main>
<script>
var slideIndex = 1;
    showSlides(slideIndex);


function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("index-mySlides");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  
    slides[slideIndex -1].style.display = "block";
}
</script>    

<?php
include('includes/footer.php');

?>