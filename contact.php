<?php
include('includes/header.php');

?>

<div class="contact-bg">
    <span class="contact-bgc">&nbsp;</span>
    <div class="contact">
        <h2>Contact Us!</h2>
        <form id="myform" onsubmit="return validation()">
            <div class="input_field">
                <input type="text" placeholder="First Name" id="fname">
            </div>
             <div class="input_field">
                <input type="text" placeholder="Last Name" id="lname">
            </div>
            <div class="input_field">
                <input type="text" placeholder="Subject" id="subject">
            </div>
            <div class="input_field">
                <input type="text" placeholder="Email" id="email">
            </div>
            <div class="input_field">
                <textarea id="message" placeholder="Message"></textarea>
            </div>
            <div class="btn">
                <input type="submit">
            </div>
        </form>
    </div>


<div class="contact-content">
<h3>How can we help?</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis leo ac lectus iaculis rutrum eu id tellus. Etiam interdum vel orci vel malesuada. </p>
    <div class="contact-content-more">

<button class="contact-content-map contact-content-accordion">Our 
Location</button>
<div class="contact-content-panel">
  <section>
 <h2>The Map</h2>
           <div class='embed-container'>
               <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2689.5095127627706!2d-122.32343988449145!3d47.61622627918525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906accc351c149%3A0xdc1a5c338dd4395c!2sSeattle%20Central%20College!5e0!3m2!1sen!2sus!4v1573969642318!5m2!1sen!2sus' width='400' height='200' frameborder='0' style='border:0;' allowfullscreen=''>
               </iframe><br><address>
                Company Name<br>
                1701 Broadway, Seattle, WA 98122
           </address>
           </div>
</section>
</div>
        
<button class="contact-content-phone contact-content-accordion">Our Phone</button>
<div class="contact-content-panel">
  <h2>Customer Service Hotline</h2>
            <a href="tel:12345678901">+1(234)-567-8901</a>
</div>
    </div>
</div>
 </div>
<script>
var acc = document.getElementsByClassName("contact-content-accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("contact-content-active");
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