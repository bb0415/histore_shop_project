<body>
<?
if(!$_SESSION['UID']){
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Navbar</a>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/">Home</a>
        <a class="nav-link" href="/login">login</a>
        <a class="nav-link" href="/signup">signup</a>

      </div>
    </div>
  </div>
</nav>
<br>

<?
}
else{
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/home">Home</a>
        <a class="nav-link"><?php echo $_SESSION["UID"] ?></a>
        <a class="nav-link" href="/logout">logout</a>

      </div>
    </div>
  </div>
</nav>
<br>

<?
}
?>
</body>