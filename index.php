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
<!--
          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
          <p>Adobe Photoshop</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
          </div>
          <p>Photography</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
              <div class="w3-center w3-text-white">80%</div>
            </div>
          </div>
          <p>Illustrator</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
          </div>
          <p>Media</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
          </div>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          <p>English</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Spanish</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p>German</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
          <br>
        -->
        </div>
      </div><br>
    </div>
 

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-wrench fa-fw w3-margin-right w3-xxlarge w3-text-blue"></i>Penyelesaian</h2>
       <div class="w3-container">
       <h5 class="w3-opacity"><b>Data Mahasiswa</b></h5>
       <table width='80%' border=1>
          <tr>
              <th>NIM</th> <th>Nama</th> <th>Alamat</th> <th>Jenis Kelamin</th> <th>Umur</th> <th>Telp</th>
          </tr>
          <?php
          // Fetch all users data from database
          $result = mysqli_query($mysqli, "SELECT * FROM mahasiswa ORDER BY Nim ASC");  
          while($user_data = mysqli_fetch_array($result)) {         
              echo "<tr>";
              echo "<td>".$user_data['Nim']."</td>";
              echo "<td>".$user_data['Nama']."</td>";
              echo "<td>".$user_data['Alamat']."</td>";
              echo "<td>".$user_data['JK']."</td>"; 
              echo "<td>".$user_data['Umur']."</td>";
              echo "<td>".$user_data['Telp']."</td>";      
              echo "<td><a href='delete.php?id=$user_data[Nim]'>Delete</a></td></tr>";        
          }
          ?>
          </table>
          <hr>
        </div>

        <div class="w3-container">
          <h5 class="w3-opacity"><b>Data Nilai</b></h5>
          <table width='80%' border=1>
          <tr>
              <th>NIM</th> <th>Kode MK</th> <th>Nama MK</th> <th>SKS</th> <th>Nilai Angka</th> <th>Nilai huruf</th> <th>Keterangan</th>
          </tr>
          <?php
          // Fetch all users data from database
          $result = mysqli_query($mysqli, "SELECT * FROM nilai ORDER BY Nim ASC");  
          while($user_data = mysqli_fetch_array($result)) {         
              echo "<tr>";
              echo "<td>".$user_data['Nim']."</td>";
              echo "<td>".$user_data['kode_mk']."</td>";
              echo "<td>".$user_data['nama_mk']."</td>";
              echo "<td>".$user_data['sks']."</td>"; 
              echo "<td>".$user_data['nilai_angka']."</td>";
              echo "<td>".$user_data['nilai_huruf']."</td>";
              switch($user_data['nilai_huruf']){
                case 'A':
                  $vN=4;
                  break;
                case 'B':
                  $vN=3;
                  break;
                case 'C':
                  $vN=2;
                  break;
                case 'D':
                  $vN=1;
                  break;
                case 'E':
                  $vN=0;
                  break; 
              }
              if ($vN>'D'){
                $ket="lulus";
              }
              else{
                $ket="tidak lulus";
              }
             
              echo "<td>".$ket."</td>";         
          }
          ?>
          </table>
          <hr>
        </div><!--
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Graphic Designer / designsomething.com</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2010 - Mar 2012</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p><br>
        </div>
      
        <div class="w3-container">
          <img src="file/soal.jpg" width="100%" height="100%">
        </div>-->
        <div class="w3-container">
        <h4>Menentukan Kelulusan Berdasarkan Value Nilai Angka</h4>
        <textarea id="w3review" name="w3review" rows="4" cols="50">
        switch($user_data['nilai_huruf']){
                case 'A':
                  $vN=4;
                  break;
                case 'B':
                  $vN=3;
                  break;
                case 'C':
                  $vN=2;
                  break;
                case 'D':
                  $vN=1;
                  break;
                case 'E':
                  $vN=0;
                  break; 
              }
              if ($vN>'D'){
                $ket="lulus";
              }
              else{
                $ket="tidak lulus";
              }
        </textarea>
        </div>
        <hr>
        <div class="w3-container">
        a.) Query untuk menampilkan data seperti pada tabel contoh<br>
        <textarea id="w3review" name="w3review" rows="4" cols="50">
        SELECT * FROM
        </textarea>
        <h5>Result</h5>

        </div>
        <hr>
        <div class="w3-container">
        b.) Query untuk menampilkan data seperti pada tabel contoh<br>
        <textarea id="w3review" name="w3review" rows="4" cols="50">
        SELECT * FROM
        </textarea>
        <h5>Result</h5>

        </div>
        <hr>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>2. Analisa edlink</b></h5>
          <video width="100%" height="400px" controls>
          <source src="file/tes.mp4" type="video/mp4">
          </video>
          <hr>
        </div>

        <div class="w3-container">
          <h5 class="w3-opacity"><b>3. Video Perkenalan Diri</b></h5>
        <video width="100%" height="400px" controls>
          <source src="file/tes.mp4" type="video/mp4">
        </video><br><br>
        </div>
      </div>

      <!--<div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-blue"></i>Penyelesaian</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>1. Query</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-user-circle fa-fw w3-margin-right"></i>Insert</h6>
          <p>Web Development! All I need to know in one place</p>
          <hr>
        </div>

        <div class="w3-container">
          <h5 class="w3-opacity"><b>2. Analisa edlink</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
          <p>Master Degree</p>
          <hr>
        </div>

        <div class="w3-container">
          <h5 class="w3-opacity"><b>3. Video Perkenalan Diri</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
          <p>Bachelor Degree</p><br>
        </div>
      </div>
    -->
    <!-- End Right Column -->
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
