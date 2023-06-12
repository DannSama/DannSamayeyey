<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container">
    <a class="col-lg-5 navbar-brand" href="index.php">
      <img src="assets/img/img_properties/logo.png" alt="logo" width="50"> 
      <span>Trio Ngantuk Film</span>
    </a>
    <form class="form-inline my-2 my-lg-0 ">
      <input class="form-control mr-sm-2" name="keyword" id="keyword" type="search" placeholder="Search" aria-label="Search">
      <div style="position: right; top: 60px; max-height: 500px; overflow-y: auto;" class="card text-dark mb-3" id="searchMovie"></div>
    </form>
    <a href="include/signin.php" id="login" onclick="changetext()">Login</a>
  </div>
  <script>
    function changetext() {
    }
  </script>
</nav>