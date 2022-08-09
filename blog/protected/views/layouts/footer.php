<!-- <footer>
        Copyright &copy; <?php echo date('Y'); ?> by Conexa.<br/>
		All Rights Reserved.<br/>
</footer> -->
<div class="container-fluid navbar-fixed-bottom bg-light bg-gradient shadow-lg">
  <footer class="py-3 my-4">
    <ul class="container nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="<?= Yii::app()->request->baseUrl; ?>" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="<?= Yii::app()->request->baseUrl; ?>/categoria.php" class="nav-link px-2 text-muted">Categorias</a></li>
        <li class="nav-item"><a href="<?= Yii::app()->request->baseUrl; ?>/sobre.php" class="nav-link px-2 text-muted">Sobre</a></li>
        <li class="nav-item"><a href="https://conexa.app/" class="nav-link px-2 text-muted">Site Oficial</a></li>
        <li class="nav-item"><a href="https://conexa.app/" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted">© <?php echo date('Y'); ?> by Conexa</p>
  </footer>
</div>


</body>

</html>