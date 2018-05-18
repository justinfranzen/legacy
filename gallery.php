<title>Photo &amp; Video Gallery</title>
  <meta name="description" content="Legacy Martial Arts photo gallery and video gallery">
  <meta name="keywords" content="Legacy Martial Arts photo and video gallery">
<?php
include 'includes/header.php';
?>

<body>
    
<div id="main">
    
 <h1 class="img-title">Photo &amp; Video Gallery</h1>
    
<div id="gallery-title-img"></div>
    
    <div id="content">
        
        
        <br>
        
     <div class="row gallery">
  <div class="column">
    <img src="images/img1.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow thumbnail">
  </div>
  <div class="column">
    <img src="images/img2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow thumbnail">
  </div>
  <div class="column">
    <img src="images/img3.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow thumbnail">
  </div>
  <div class="column">
    <img src="images/img4.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow thumbnail">
  </div>
   <div class="column">
    <img src="images/img5.jpg" onclick="openModal();currentSlide(5)" class="hover-shadow thumbnail">
  </div>
  <div class="column">
    <img src="images/img6.jpg" onclick="openModal();currentSlide(6)" class="hover-shadow thumbnail">
  </div>
    <div class="column">
    <img src="images/img7.jpg" onclick="openModal();currentSlide(7)" class="hover-shadow thumbnail">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 7</div>
      <img src="images/img1.jpg" style="width:100%">
        <figcaption>Front Kick</figcaption>
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 7</div>
      <img src="images/img2.jpg" class="vertical-image">
        <figcaption>Self Defense</figcaption>
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 7</div>
      <img src="images/img3.jpg" class="vertical-image">
        <figcaption>Sisters</figcaption>
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 7</div>
      <img src="images/img4.jpg" style="width:100%">
        <figcaption>Exercise</figcaption>
    </div>
    <div class="mySlides">
      <div class="numbertext">5 / 7</div>
      <img src="images/img5.jpg" style="width:100%">
        <figcaption>Weapons</figcaption>
    </div>
    <div class="mySlides">
      <div class="numbertext">6 / 7</div>
      <img src="images/img6.jpg" style="width:100%">
        <figcaption>Tornado Kick</figcaption>
    </div>
    <div class="mySlides">
      <div class="numbertext">7 / 7</div>
      <img src="images/img7.jpg" style="width:100%">
        <figcaption>Flexbility</figcaption>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

    </div>
</div> 
        
</div>
    
<div id="video">
    
        <div class="row">
            
            <div class="col-lg-6 col-md-6 col-sm-12">
        
                <iframe width="560" height="315" src="https://www.youtube.com/embed/FNaKdaWzI7E" frameborder="0" allowfullscreen class="video"></iframe>
            
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-12">
        
                <iframe width="560" height="315" src="https://www.youtube.com/embed/jHn7vhL3zpk" frameborder="0" allowfullscreen class="video"></iframe>
            
            </div>
            
            
        </div>
    </div>
    
<div class="contact">
    
    <div class="contact-us">
    
        <span class="join">Join Legacy Today!</span>
        
        <br>

        <a href="contact.php"><div class="contact-button">
            
            Contact Us
            
        </div></a>
        
    </div>
    
</div>
    
</div>
</body>
    
<?php
include 'includes/footer.php';
?>