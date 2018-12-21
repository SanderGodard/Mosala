<div id="id01" class="modal">
  <div class="FormWidth">

    <?php $Loggedin = True; ?>

    <form class="modal-content animate" enctype="multipart/form-data" action="/Mosala/Pages/Profile.php" method="post">
      <div class="MainLogin">
        <div class="modalcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Lukk">&times;</span><br>
          <span id="LoginHeader">Mosala</span>
          <label for="email"><b>E-post *</b></label><br>
          <input autofocus type="email" name="e-mail" autocomplete="email" required><br>

          <label for="psw"><b>Passord *</b></label><br>
          <input type="password" pattern=".{6,}" title="Seks eller flere tegn" name="pass" required><br>

          <label id="remember">
            <input type="checkbox" checked="checked" name="remember"> Husk meg
            <span id="forgot"><a href="#">Glemt passord?</a></span>
          </label>

          <button type="submit" name="Login" id="LoggInn" ><b>Logg inn</b></button><br>
        </div>
      </div>
        <div class="SubLogin">
          <h3>Har du ikke bruker?</h3>
          <p>Det tar ikke lang tid å lage en,<br>
          Og det er helt gratis!</p>

          <button type="submit" formmethod="post" formnovalidate formaction="/Mosala/Pages/Register.php" formtarget="_parent" name="Register"><b>Registrer meg</b></button><br>
        </div>
    </form>
  </div>
</div>

<!-- Script | Totally not copied -->
<script>
  var modal = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
