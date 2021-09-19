<?php
// Create database connection using config file
include_once("conn.php");
?>
 
<html>
<title>Portofolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://lh3.googleusercontent.com/pw/AM-JKLVDvpd6JMWJR69vUhTkSfoo9rE6Awn5mypKQPb0ofTieyjynyJurJ84IIJPv5o5aFbdk0MLUC70nTDBdeu0yvueSeERpnQYZahijEj9_U-HRu5iWKq5Lysmsomj5vLMoAgEOLo3t5FoDDeGSTsozVKZ=w986-h657-no?authuser=0" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-white">
            <h2>Achmad Basyari</h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-linkedin fa-fw w3-margin-right w3-large w3-text-blue"></i>achmadbasyari</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-blue"></i>Sidoarjo, Jawa Timur</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-blue"></i>achbasyari@gmail.com</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-blue"></i>081217272330</p>
          <hr>
          <a href=index.php class="button button2">Home</a>
          <a href=add.php class="button button2">Insert Data</a>
          <hr>
          <img src="file/soal.jpg" width="100%" height="100%">
        </div>
      </div><br>
    </div>
 

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-wrench fa-fw w3-margin-right w3-xxlarge w3-text-blue"></i>Input Data</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Insert Data Mahasiswa</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-user-circle fa-fw w3-margin-right"></i>Masukkan data mahasiswa</h6>
          <form action="add.php" method="post" name="form1">
            <label for="lnim">NIM :</label><br>
            <input type="text" name="nim"><br><br>
            <label for="lname">Nama :</label><br>
            <input type="text" name="name"><br><br>
            <label for="lalamat">Alamat :</label><br>
            <input type="text" name="alamat"><br><br>
            <label for="ljk">Jenis Kelamin :</label><br>
            <select name="kelamin">
              <option value="L">Laki</option>
              <option value="P">Perempuan</option>
            </select><br><br>
            <label for="lumur">Umur :</label><br>
            <input type="text" name="age"><br><br>
            <label for="ltelp">Telp :</label><br>
            <input type="text" name="phone"><br><br>
            <input type="submit" name="Submit" value="Insert">
          </form>
          
          <?php
            // Check If form submitted, insert form data into users table.
            if(isset($_POST['Submit'])) {
                $nim = $_POST['nim'];
                $nama = $_POST['name'];
                $alamat = $_POST['alamat'];
                $jk = $_POST['kelamin'];
                $umur = $_POST['age'];
                $telp = $_POST['phone'];
                
                // include database connection file
                include_once("conn.php");
                        
                // Insert user data into table
                $result = mysqli_query($mysqli, "INSERT INTO mahasiswa(Nim, Nama, Alamat , JK, Umur, Telp) VALUES('$nim','$nama','$alamat','$jk','$umur','$telp')");
                
                // Show message when user added
                echo "User added successfully. <a href='index.php'>Home</a>";
            }
            ?>

          <hr><!--
          <h6 class="w3-text-teal"><i class="fa fa-user-circle fa-fw w3-margin-right"></i>Input Data Nilai</h6>
          <form action="action.php">
            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname"><br><br>
            <label for="lname">Last name:</label>
            <input type="text" id="lname" name="lname"><br><br>
            <input type="submit" value="Submit">
          </form>-->
        </div>

        <div class="w3-container">
          <h5 class="w3-opacity"><b>Input Data Nilai</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-pencil-square fa-fw w3-margin-right"></i>Masukkan Data Nilai</h6>
          <form action="add.php" method="post" name="form1">
            <label for="lnim">NIM :</label><br>
            <input type="text" name="nim"><br><br>
            <label for="lname">Kode Mata Kuliah :</label><br>
            <input type="text" name="kmk"><br><br>
            <label for="lalamat">Nama Mata Kuliah :</label><br>
            <input type="text" name="nmk"><br><br>
            <label for="ljk">SKS :</label><br>
            <input type="text" name="sks"><br><br>
            <label for="lumur">Nilai Angka :</label><br>
            <input type="text" name="na"><br><br>
            <label for="ltelp">Nilai Huruf :</label><br>
            <input type="text" name="nh"><br><br>
            <input type="submit" name="SubmitNilai" value="Insert">
          </form>
          
          <?php
            // Check If form submitted, insert form data into users table.
            if(isset($_POST['SubmitNilai'])) {
                $nim = $_POST['nim'];
                $kodeMK = $_POST['kmk'];
                $namaMK = $_POST['nmk'];
                $sks = $_POST['sks'];
                $nilA = $_POST['na'];
                $nilH = $_POST['nh'];
                
                // include database connection file
                include_once("conn.php");
                        
                // Insert user data into table
                $result = mysqli_query($mysqli, "INSERT INTO nilai(Nim, kode_mk, nama_mk , sks, nilai_angka, nilai_huruf) VALUES('$nim','$kodeMK','$namaMK','$sks','$nilA','$nilH')");
                
                // Show message when user added
                echo "User added successfully. <a href='index.php'>Home</a>";
            }
            ?>
          <hr>
        </div>

      </div>

    
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-blue w3-center w3-margin-top">
  <!--<p>Find me on social media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>-->
  <p>Template by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

</body>
</html>
