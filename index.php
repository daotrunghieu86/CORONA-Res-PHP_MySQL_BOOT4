<?php

include('links/links.php');
include('css/style.php');
include('Connect-dbCorona.php');

if (isset($_POST['submit'])) {

  $username = $_POST['username'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $symp = $_POST['coronasym'];
  $msg = $_POST['msg'];

  $chk = "";

  foreach ($symp as $chk1) {
    $chk .= $chk1 . ",";
  }

  $insertQuery = "INSERT INTO coronaCase(username, email, mobile, symp, message) VALUES ('$username', '$email', '$mobile', '$chk', '$msg')";

  $query = mysqli_query($connect, $insertQuery);

  if ($query) {
    // echo "<script>prompt('inserted success')</script>";
    // echo "- inserted success";
  } else {
    // echo "- Did not insert success'";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CORONA-Res-PHP_MySQL_BOOT4</title>
</head>

<body>
  <!-- end nav -->
  <nav class="navbar navbar-expand-lg navbar-light nav_style p-3">

    <a class="navbar-brand pl-5" href="#">COVID-Wuhan</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto pr-5">

        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#aboutid">About</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link" href="#sympid">Symptoms</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#preventid">Prevention</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#contactid">Contact</a>
        </li>

      </ul>
    </div>

  </nav>

  <!-- header -->
  <div class="main_header">
    <div class="row w-100 h-100 d-flex justify-content-center align-items-center">

      <div class="col-lg-5 col-md-5 col-12   order-2">
        <div class="left_side d-flex justify-content-center align-items-center">
          <!-- w-100 h-100 -->
          <img src="imgs/circle-of-people.png" alt="circle-people" width='300px' height='300px'>
        </div>
      </div>

      <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
        <div class="right_side  d-flex justify-content-center align-items-center">
          <!-- w-100 h-100 -->
          <h1>Let's Stay Safe & Fight Together Against Cor <span class='img_rotate'><img src="imgs/coronavirus_roll.png"
                alt="corona-roll" width='60px' height='60px'></span> na Wuhan</h1>
        </div>
      </div>

    </div>
  </div>

  <!-- corona updates -->
  <section class='corona_updates'>

    <div class="mb-3">
      <h3 class='text-uppercase text-center'>
        Covid-Wuhan Updates at VietNamese
      </h3>
    </div>

    <div class="detail_update d-flex justify-content-around align-items-center">
      <div>
        <h1 class="count">923,266</h1>
        <p>Passengers screened at airport</p>
      </div>

      <div>
        <h1 class="count">1,361</h1>
        <p>Active COVID-Wuhan cases</p>
      </div>

      <div>
        <h1 class="count">1208</h1>
        <p>Cured/discharged cases</p>
      </div>

      <div>
        <h1 class="count">35</h1>
        <p>Death cases</p>
      </div>
    </div>

  </section>

  <!-- about corona -->
  <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
    <div class="section_header text-center mb-5 mt-4">
      <h1>About COVID-19</h1>
    </div>

    <div class="row row_about ml-3 mr-3">
      <div class="col-lg-5 col-md-6 col-12 d-flex align-items-center">
        <img src="imgs/coronavirus_structure.jpg" alt="img-fluid" width="100%">
      </div>
      <div class="col-lg-7 col-md-6 col-12 ">
        <h2>What is Corona-Wuhan</h2>
        <p>COVID-VUHAN is the infectious disease caused by the most recently discovered coronavirus. This is new virus
          and disease were unknown before the outbreak began in Wuhan, China, in December 2019. </p>
        <p>Coronaviruses are a large family of viruses which may cause illness in animals or humans. In humans, verval
          coronaviruses are unknow to cause respiratory ininfectinos ranging from the common cold to more servere
          diseases such as Middle East Respiratory (MERS) and Severe Acute Respiratory Syndorme (SARS). The most
          recently discovered coronavirus casues coronavirus disease COVID-19.</p>
      </div>
    </div>
  </div>

  <!-- Symptoms -->
  <div class="container-fluid  pt-5 pb-5" id="sympid">
    <div class="section_header text-center mb-5 mt-4">
      <h1>Coronaviruses Symptoms</h1>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="imgs/cough.png" alt="cough" width='120px' height='120px'>
            <figcaption>Cough</figcaption>
          </figure>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="imgs/runny nose1.png" alt="Runny Nose" width='120px' height='120px'>
            <figcaption>Runny Nose</figcaption>
          </figure>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="imgs/fever1.png" alt="Fever" width='120px' height='120px'>
            <figcaption>Fever</figcaption>
          </figure>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="imgs/cold1.png" alt="Cold" width='120px' height='120px'>
            <figcaption>Cold</figcaption>
          </figure>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="imgs/tiredness1.png" alt="Tiredness" width='120px' height='120px'>
            <figcaption>Tiredness</figcaption>
          </figure>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="imgs/difficulty breathing1.png" alt="Difficulty Breathing" width='120px' height='120px'>
            <figcaption>Difficulty Breathing</figcaption>
          </figure>
        </div>

      </div>
    </div>
  </div>

  <!-- Prevention against -->
  <div class="container-fluid sub_section pt-5 pb-5" id="preventid">
    <div class="section_header text-center mb-5 mt-4">
      <h1>6 Steps Prevention Against CoronaVirus</h1>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="symptom_detail row d-flex justify-content-center align-items-center">
            <figure class="col-lg-4 col-md-4 col-12">
              <img src="imgs/wash_hands.png" alt="Wash your hands" class="img-fluid" width='90px' height='90px'>
            </figure>
            <p class="col-lg-8 col-md-8 col-12">Wash your hands regularly for 20 seconds with soap and water or
              alcohol-based hand rub</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="symptom_detail row d-flex justify-content-center align-items-center">
            <figure class="col-lg-4 col-md-4 col-12">
              <img src="imgs/cover-mask.png" alt="cover-mask" class="img-fluid" width='90px' height='90px'>
            </figure>
            <p class="col-lg-8 col-md-8 col-12">Cover your nose and mouth with a disposable tissue or flexed elbow when
              you cough or sneeze</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="symptom_detail row d-flex justify-content-center align-items-center">
            <figure class="col-lg-4 col-md-4 col-12">
              <img src="imgs/distancing.png" alt="cough" class="img-fluid" width='90px' height='90px'>
            </figure>
            <p class="col-lg-8 col-md-8 col-12">Avoid close contact (1 meter for 3 feet) with people who are unwell</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="symptom_detail row d-flex justify-content-center align-items-center">
            <figure class="col-lg-4 col-md-4 col-12">
              <img src="imgs/stayhome.png" alt="cough" class="img-fluid" width='90px' height='90px'>
            </figure>
            <p class="col-lg-8 col-md-8 col-12">Stay home and safe-isolate from others in the household if you feel
              unwell</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="symptom_detail row d-flex justify-content-center align-items-center">
            <figure class="col-lg-4 col-md-4 col-12">
              <img src="imgs/stay-informed.png" alt="cough" class="img-fluid" width='90px' height='90px'>
            </figure>
            <p class="col-lg-8 col-md-8 col-12">Stay informed by watching news & follow the recommended practices.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="symptom_detail row d-flex justify-content-center align-items-center">
            <figure class="col-lg-4 col-md-4 col-12">
              <img src="imgs/feel-fever.png" alt="cough" class="img-fluid" width='90px' height='90px'>
            </figure>
            <p class="col-lg-8 col-md-8 col-12">If you have fever, cough and difficulty breathing. Seek medical care
              early</p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Contact Us ASAP -->
  <div class="container-fluid  pt-5 pb-5" id="contactid">
    <div class=" text-center mb-5 mt-4">
      <h1>Contact Us ASAP</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12">

          <!-- <?php echo $_SERVER['PHP_SELF'] ?> -->
          <form action='' method='POST'>
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
            </div>

            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete='off'
                required>
            </div>

            <div class="form-group">
              <label>Mobile</label>
              <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete='off' required>
            </div>

            <div class="form-group">
              <p>Select Symptoms</p>

              <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                <input type="checkbox" class="custom-control-input" id='customcheckbox1' name='coronasym[]'
                  value='cold'>
                <label class='custom-control-label' for='customcheckbox1'>Cold</label>
              </div>

              <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                <input type="checkbox" class="custom-control-input" id='customcheckbox2' name='coronasym[]'
                  value='fever'>
                <label class='custom-control-label' for='customcheckbox2'>Fever</label>
              </div>

              <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                <input type="checkbox" class="custom-control-input" id='customcheckbox3' name='coronasym[]'
                  value='breath'>
                <label class='custom-control-label' for='customcheckbox3'>Difficulty Breathing</label>
              </div>

              <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                <input type="checkbox" class="custom-control-input" id='customcheckbox4' name='coronasym[]'
                  value='tired'>
                <label class='custom-control-label' for='customcheckbox4'>Feeling Weak</label>
              </div>

            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Describe how are you feeling</label>
              <textarea name='msg' class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
          </form>

        </div>
      </div>
    </div>
  </div>

  <!-- Top Cursor -->
  <div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onClick='topFunction()' id='myBtn'></i>
  </div>

  <!-- Footer -->
  <footer class="mt-5">
    <div class="footer_style text-while text-center container-fluid">
      <p>Dao Trung Hieu</p>
    </div>
  </footer>

  <script type="text/javascript">
  $('.count').counterUp({
    delay: 10,
    time: 300
  })

  mybutton = document.getElementById('myBtn');

  //when the user scrolls down 20px form top of the document, show the button
  window.onscroll = function() {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      mybutton.style.display = 'block';
    } else {
      mybutton.style.display = 'none';
    }
  }

  // when the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0; // for Safari
    document.documentElement.scrollTop = 0; // for chrome, firefox, ie
  }
  </script>
</body>

</html>