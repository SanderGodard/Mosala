<!Doctype HTML>
<html lang="nb-NO">
<head>
  <title>Profil | Mosala</title>
	<meta name="keywords" content="Profil">
	<?php
		include '../Styling/head.php';
	?>
  <!--
  <script>
  $(function() {
          $( "#GreySide" ).resizable({handles: {'e': '#handle'}});
      });
  </script>
-->
</head>
<nav>
  <?php
    $stillinger = "";
    $hvordan = "";
    $omoss = "";
    $profile = "class='NavActive'";
    $Mstillinger = "";
    $Mhvordan = "";
    $Momoss = "";
    $Mprofile = "class='MNavActive'";
		include '../Styling/nav.php';
	?>
</nav>
<body>
  <!-- Background -->
	<div>
		<img class="Main-pic" src="../Images/BG.jpg" alt="Background image">
	</div>


	<!-- Innhold-->
	<div class="Body">
		<h1>Profil</h1>
		<div id="Profildiv">
      <a id="Skjul" onclick="ToggleGrey()" style="cursor: pointer;" >Skjul</a>

      <div id="GreySide" style="<?php
        global $GreyHide;

        if ($GreyHide == True) {
          echo "display: none;";
        }
        elseif ($GreyHide == False) {
          echo "display: inline-block;";
        }
        else {
          echo "#Error";
        }
      ?>">
        <?php $FirstName = "John";
              $SurName = "Smith";
              $Mail = "JohnS@gmail.com";
              $Phone = "12345678";
              $Countrycode = "+47";
        ?>
        <script>
          function ToggleGrey() {
            var x = document.getElementById("GreySide");
            if (x.style.display === "none") {
                x.style.display = "inline-block";
            }
            else {
                x.style.display = "none";
            }
            var a = document.getElementById("Skjul");
            if (a.innerHTML === "Skjul") {
              a.innerHTML = "Vis";
            } else {
              a.innerHTML = "Skjul";
            }
          }
        </script>
        <!-- <div id='handle' class="ui-resizable-handle ui-resizable-e"></div> -->
        <a href="#"  id="Edit"><img src="../Images/edit.png" alt="Edit"></a>
        <img class="pfp" src="../Images/Placeholder-pfp.jpg" alt="Profile picture">
        <span id="Fn"><?php echo "$FirstName"; ?></span>
        <span id="Sn"><?php echo "$SurName"; ?></span>
        <br>
        <span><a title="Send Epost" href="<?php echo "mailto:" . "$Mail"?>"><?php echo "$Mail"; ?></a></span>
        <span><a title="Ring/ send melding" href="<?php echo "callto:" . "$Countrycode" . "$Phone"?>"><?php echo "$Countrycode" . " " . "$Phone"; ?></a></span>
        <br>
        <span><a title="Last ned CV" href="#" download><img id="DLicon" src="../Images/file.png" alt="FileIcon">Last ned CV</a></span>
        <br>
      </div>

      <div id="UtdanningDiv">
        <h3>Tidligere jobberfaring</h3>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        <br><br><br><br>
        <h3>Utdanning</h3>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

      </div>

    </div>
	</div>

</body>
<footer>
	<?php
		include '../Styling/footer.php';
	?>
</footer>
</html>
