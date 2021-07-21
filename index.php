<?php



  $db = mysqli_connect("Localhost","root","","my_tt_db");
  $name = $_POST['name'];
  $number = $_POST['number'];
  $email = $_POST['email'];
  $country = $_POST['country'];
  $Message = $_POST['Message'];

 $is_insert = $db->query("INSERT INTO `data`(`name`, `number`, `email`, `country`, `Message`) VALUES ('$name','$number','$email','$country','$Message')");

if($is_insert = TRUE){
  echo "Thank You, Your Request Submitted";

}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="TT_logo.png" type="image/x-icon"> 
    <title>TT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/8936e4ca13.js" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light  fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="TT_logo.png" alt="TT_logo" id="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarlinks">
            <span><img style="width: 25px;" src="menu.png" alt="menu"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarlinks">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" id="how" aria-current="page" href="#Home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="how" aria-current="page" href="#About">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="how" aria-current="page" href="#Link">Video</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="how" aria-current="page" href="#contact">Contact</a>
                </li>
              </ul>
            </div>
        </div>
      </nav>

      
      <div class="container" id="hero">
        <div class="row flex-lg-row flex-column-reverse" id="Home">
          <div class="col-lg-6">
           <center><img id="sambar" src="blend2.jpg" alt=""></center> 
          </div>
          <div class="col-lg-6"><br>
                <h3 class="text-center">TT Sambar Powder</h3><br>      
                <div id="description" class="text-center">
                    <p>We have state of the art manufacturing facilities – in Manalur, Sivagangai District, Tamilnadu.</p>
                    <p>TT is an ISO 9001:2015 certified company manufacturing Sambar powder</p>
                    <p style="background-color: orange; border-radius: 30px; width: 83%; margin-left: 36px;">Pure!&nbsp&nbsp&nbsp&nbspFresh!&nbsp&nbsp&nbsp&nbspNo Preservatives!</p>
                    <p>Available SKUs&nbsp&nbsp:&nbsp&nbsp50g and 100g</p>
                </div>
        </div>
      </div>
    
      <hr>
      
          <div class="row" id="About">
              <div class="text-center col" id = "para">
                <h2 style="color: black; font-size: 40px;">Trusted Taste and Quality products for 125 years</h2><br>
                
                <p>Mahesh Value Products Private limited owns the brand TT. We believe in our vision of providing ‘Tasty’ and ‘Healthy’ food products. We have state of the art manufacturing facilities – in Manalur, Sivagangai District, Tamilnadu.</p>
                <br>
                <p>Our state-of-art plant have been certified under ISO 9001:2015 and FSSAI license number : 10015042001929. We adhere to stringent standards of hygiene and robust quality control procedures at various stages of processing. This is done to ensure that only the best quality products leave our factory. Our plant has an in-house laboratory facility equipped with the latest equipments, to ensure that the quality of the products remains up to our high standards.</p>
                <br>
                <p>TT product range consists of Asafoetida, Appalam, Pure Spices and Blended Spices.</p>
              </div>
              <span class="border border-dark bg-light"><br>
                <div class="text-center col">
                    <p style="color:black; font-size: 20px;">In our commitment to serve our customers, all our products are available online.</p>
                    <a target="blank" href="https://www.amazon.in/TT-Sambar-Powder-Tamil-Style/dp/B08M38HL15/ref=sr_1_5?crid=77AYDXE7IEG6&dchild=1&keywords=tt+sambar+powder&qid=1626686642&sprefix=tt+sambar+po%2Caps%2C761&sr=8-5" class="btn btn-warning"><i class="fab fa-amazon"></i>&nbspClick To Buy</a>&nbsp&nbsp
                    <a target="blank" href="https://www.flipkart.com/tt-asafoetida-powder-100-gram/p/itma0e061bf3c2b2?pid=SCMFWGJ2VGSAGZC7&lid=LSTSCMFWGJ2VGSAGZC7W7QMMJ&marketplace=FLIPKART&q=+tt+sambar+powder&store=eat%2Fxgg&srno=s_1_1&otracker=search&otracker1=search&fm=SEARCH&iid=398a2050-8b08-448e-8a2d-55c62a6062e8.SCMFWGJ2VGSAGZC7.SEARCH&ppt=sp&ppn=sp&ssid=z06pu9zcio0000001626686865066&qH=b1a59c005e698fcb" class="btn btn-warning"><i class="fas fa-shopping-cart"></i>&nbspClick To Buy</a>
                </div><br>
            </span>
          </div>
      

      <hr>

        <div class="row" >
            <div class="col">
                <h3>VISION & MISSION</h3><br>
                <ul type="square" style="font-size: 20px;">
                    <li><b>Our Mission :</b> The mission of the Company is to ‘improve daily health’ of our consumers by offering ‘healthy food’ products . To achieve this mission, resources are being allocated for increasing manufacturing capacity, brand building and supply chain management.</li>
                <br><li><b>Our Vision :</b> As a leading Quality Manufacturer, Our Vision is to offer ‘Tasty’ and ‘Healthy’ Food Products to our customers who have placed their trust on the brand for the last 125 years. We are committed to grow with integrity.</li>
                <br><li><b>Our Aim :</b> Our Aim is to provide our customers with quality products made with the best quality ingredients that meet market demands. We are committed to provide customer satisfaction and believe in continuous improvement.</li>
                </ul>
            </div>
        </div>
      

      <hr>

          <div class="row" id="Link">
              <div class="col" id="youtube">
                <center>
                  <h2>TT MADUARI MASALA</h2><br>
                  <iframe width="1000" height="480" src="https://www.youtube.com/embed/2A3Fwin_tF8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </center>
              </div>
          </div>
          <br><br>
          <hr>
          <br>

          <div class="row" id="contact">
            <h2 class="text-center">Contact As</h2>
            <form action="#" method="post">
              <div class="mb-3">
                <label for="from">Name</label>
                <input id="from" name="name" type="text" class="form-control" placeholder="Name" required>
              </div>
              <div class="mb-3">
                <label for="from2">Contact</label>
                <input id="from2" name="number" type="number" class="form-control" placeholder="Mobile Number" required>
              </div>
              <div class="mb-3">
                <label for="from3">Email</label>
                <input id="from3" type="email" name="email" class="form-control" placeholder="name@example.com" required>
              </div>
              <div class="mb-3">
                <label for="from4">Country</label>
                <select id="from4" name="country" class="form-select" aria-label="Default select example">
                  <option disabled>Open this select menu</option>
                  <option value="USA">USA</option>
                  <option value="INDIA">INDIA</option>
                  <option value="AUSTRAILIA">AUSTRAILIA</option>
                  <option value="SOUTH AFRICA">SOUTH AFRICA</option>
                  <option value="MEXICO">MEXICO</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="Message">Message</label>
                <textarea name="Message" id="from5" cols="30" rows="5" class="form-control"></textarea>
              </div>
              <div class="mb-3">
                <button class="btn btn-outline-warning w-100 btn-lg">Submit</button>
              </div>
            </form>
          </div>
          <hr>
      </div>
      <section id="footer" class="bg-light">

        <a href=""><img src="instagram.png" alt="insta-img" class="social-media"></a>
        <a href=""><img src="whatsapp.png" alt="insta-img" class="social-media"></a>
        <a href=""><img src="facebook.png" alt="insta-img" class="social-media"></a>
        <a href=""><img src="twitter.png" alt="insta-img" class="social-media"></a>

        <p class="footer-txt">
            © Copyright 2021 Mahesh Value Products
        </p>
      </section>

     


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>