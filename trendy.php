<?php
include('includes/header.php');

?>

<div class="bags-main" >

<h2>TRENDY</h2>

<div class="product">
  <div class="bags-column trendy">
    <div class="bags-content">
      <a href="detail.php"><img src="images/bag4.jpg" alt="trendy"></a>
      <h4>Product Name</h4>
      <p>$ Price</p>
      <p>Introduction: <br>Lorem ipsum dolor
          sit amet, consectetur adipiscing
          elit.</p>
        <div class="inStock">
      <ul><p>In stock: </p>
          <li class="bule">&nbsp;</li>
          <li class="green">&nbsp;</li>
          <li class="red">&nbsp;</li>
          <li class="yellow">&nbsp;</li>
            </ul>
            </div>
    </div>
  </div>
    <div class="bags-column trendy">
    <div class="bags-content">
      <a href="detail.php"><img src="images/bag4.jpg" alt="trendy"></a>
      <h4>Product Name</h4>
      <p>$ Price</p>
      <p>Introduction: <br>Lorem ipsum dolor
          sit amet, consectetur adipiscing
          elit.</p>
        <div class="inStock">
      <ul><p>In stock: </p>
          <li class="bule">&nbsp;</li>
          <li class="green">&nbsp;</li>
          <li class="red">&nbsp;</li>
          <li class="yellow">&nbsp;</li>
            </ul>
            </div>
    </div>
  </div>
    <div class="bags-column trendy">
    <div class="bags-content">
      <a href="detail.php"><img src="images/bag4.jpg" alt="trendy"></a>
      <h4>Product Name</h4>
      <p>$ Price</p>
      <p>Introduction: <br>Lorem ipsum dolor
          sit amet, consectetur adipiscing
          elit.</p>
        <div class="inStock">
      <ul><p>In stock: </p>
          <li class="bule">&nbsp;</li>
          <li class="green">&nbsp;</li>
          <li class="red">&nbsp;</li>
          <li class="yellow">&nbsp;</li>
            </ul>
            </div>
    </div>
  </div>
    <div class="bags-column trendy">
    <div class="bags-content">
      <a href="detail.php"><img src="images/bag4.jpg" alt="trendy"></a>
      <h4>Product Name</h4>
      <p>$ Price</p>
      <p>Introduction: <br>Lorem ipsum dolor
          sit amet, consectetur adipiscing
          elit.</p>
        <div class="inStock">
      <ul><p>In stock: </p>
          <li class="bule">&nbsp;</li>
          <li class="green">&nbsp;</li>
          <li class="red">&nbsp;</li>
          <li class="yellow">&nbsp;</li>
            </ul>
            </div>
    </div>
  </div>
    <div class="bags-column trendy">
    <div class="bags-content">
      <a href="detail.php"><img src="images/bag4.jpg" alt="trendy"></a>
      <h4>Product Name</h4>
      <p>$ Price</p>
      <p>Introduction: <br>Lorem ipsum dolor
          sit amet, consectetur adipiscing
          elit.</p>
        <div class="inStock">
      <ul><p>In stock: </p>
          <li class="bule">&nbsp;</li>
          <li class="green">&nbsp;</li>
          <li class="red">&nbsp;</li>
          <li class="yellow">&nbsp;</li>
            </ul>
            </div>
    </div>
  </div>
    </div>
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("bags-column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "bags-show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "bags-show");
  }
}
    function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


</script>

<?php
include('includes/footer.php');

?>