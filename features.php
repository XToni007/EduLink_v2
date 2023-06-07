<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>courses</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- courses section starts  -->

<section class="courses">

   <h1 class="heading">all courses</h1>

   <div class="box-container">
      <div class="box">
         <img src="images/vbl.png" class="thumb" alt="">
         <h3 class="title">Video Based Learning</h3>
         <p class="desc" style="color:white; text-align:justify">VBL atau Video Based Learning adalah sebuah fitur yang dimana dapat mangakses atau mengupload video yang bertemakan edukasi dari user dan berfungsi untuk meningkatkan pemahaman user - user lainnya dalam mempelajari suatu topik.</p>
      </div>
      <div class="box">
         <img src="images/Note.png" class="thumb" alt="">
         <h3 class="title">Notes</h3>
         <p class="desc" style="color:white; text-align:justify">Notes meruapakan sebuah fitur yang dapat membantu Anda untuk menulis materi yang sedang atau sudah dipelajari</p><br><br>
      </div>
      <div class="box">
         <img src="images/forum.png" class="thumb" alt="">
         <h3 class="title">Forum</h3>
         <p class="desc"style="color:white; text-align:justify">Fitur ini berfungsi sebagai platform  yang memungkinkan pengguna untuk berinteraksi, berdiskusi, dan mencari informasi terkait topik yang Anda minati.</p><br>
      </div>
   </div>

<div>
   <div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   </div>
</div>

</section>

<!-- courses section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>