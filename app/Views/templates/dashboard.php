<script>
$(document).ready(function(){
$("#dashboard").addClass("active");
});
</script>
<div class="jumbotron">
<div class="container">
  <h1 class="display-2">Hello, <?= session()->get('name') ?></h1>
  <p class="lead">
Donating blood is one of the greatest ways to help humankind. By doing so, we save someone’s precious life, and that is a blessing in itself. There are people who hesitate to donate blood if they aren’t given monetary returns or because of the various myths surrounding it..</p>
<?php echo view ('templates/makereq'); ?>
  </p>
</div>
</div>