<? require "views/components/head.php"; ?>
<body>
  <? require "views/components/navbar.php"; ?>
  <h1>Bloga ieraksts</h1>
  <form action="" method="post">
    <input type="text" name="title" placeholder="Ieraksta nosaukums">
    <input type="text" name="body" placeholder="Ieraksta teksts">
    <input type="submit" value="Saglabāt">
  </form>
  <? require "views/components/footer.php"; ?>
</body>
</html>