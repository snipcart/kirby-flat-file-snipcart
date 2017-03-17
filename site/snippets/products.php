<h2>Kirby E-Commerce Demo</h2>
<ul class="teaser cf products">
  <?php foreach(page('products')->children()->visible() as $product): ?>
    <a href="<?php echo $product->url() ?>" class="product">
      <h3><?php echo $product->name()->html() ?></h3>
       <?php if($image = $product->images()->first()): ?>
        <p>
          <img width="200" src="<?php echo $image->url() ?>" />
        </p>
      <?php endif ?>
    </a>
  <?php endforeach ?>
</ul>
