<div class="Logo">
  <a href="/Mosala/">
    <div>Mosala</div><img src="/Mosala/Images/MinimalLogo.png" alt="Logo">
  </a>
</div>
<div class="NavButtons">
  <a
    <?php
      //global $Loggedin;
      $Loggedin = False;
      global $profile;
      $OnClick = 'onclick="document.getElementById(' . "'id01'" . ').style.display=' . "'block'" . '"';

      if ($Loggedin == True) {
        echo ' href="/Mosala/Pages/Profile.php" ';
      }
      elseif ($Loggedin == False) {
        echo $OnClick;
      }
      else {
        echo $OnClick;
      }
      echo "$profile";
    ?>
     style="cursor: pointer;" >
    <?php

      if ($Loggedin == True) {
        echo "Profil";
      }
      elseif ($Loggedin == False) {
        echo "Logg inn";
      }
      else {
        echo "Error";
      }
    ?>
    <?php
      global $stillinger;
      global $hvordan;
      global $omoss;
      global $Mstillinger;
      global $Mhvordan;
      global $Momoss;
      global $Mprofile;
    ?>
  </a>
  <a href="/Mosala/Pages/About-us.php" <?php echo "$omoss"; ?>>Om oss</a>
  <a href="/Mosala/Pages/How-it-works.php" <?php echo "$hvordan"; ?>>Hvordan det virker</a>
  <a href="/Mosala/Pages/Stillinger.php" <?php echo "$stillinger"; ?>>Stillinger</a>
</div>
<div class="Dropdown">
  <a class="DropdownButton" href="javascript:void(0)"><img alt="Menu" src="/Mosala/Images/menu.png"></a>
  <div class="MiniNavButtons">
    <a href="/Mosala/Pages/Stillinger.php" <?php echo "$Mstillinger"; ?>>Stillinger</a>
    <a href="/Mosala/Pages/How-it-works.php" <?php echo "$Mhvordan"; ?>>Hvordan det virker</a>
    <a href="/Mosala/Pages/About-us.php" <?php echo "$Momoss"; ?>>Om oss</a>
    <a
      <?php
        global $Loggedin;
        global $profile;
        $OnClick = 'onclick="document.getElementById(' . "'id01'" . ').style.display=' . "'block'" . '"';

        if ($Loggedin == True) {
          echo ' href="/Mosala/Pages/Profile.php" ';
        }
        elseif ($Loggedin == False) {
          echo $OnClick;
        }
        else {
          echo $OnClick;
        }
        echo "$Mprofile";
      ?>
       style="cursor: pointer;" >
      <?php

        if ($Loggedin == True) {
          echo "Profil";
        }
        elseif ($Loggedin == False) {
          echo "Logg inn";
        }
        else {
          echo "Error";
        }
      ?>
    </a>
  </div>
</div>
