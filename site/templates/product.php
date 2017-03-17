<?php snippet('header') ?>

<main class="main grid" role="main">
  <a href="./../../">Back to products</a>
  <div class="product-details">
    <div class="product-description">
      <h1><?php echo $page->name() ?></h1>

      <img width="200" src="<?php echo $page->image()->url() ?>" />

      <p>
        <?php echo $page->description() ?>
      </p>

      <a href="#" class="snipcart-add-item"
        data-item-name="<?php echo $page->name() ?>"
        data-item-id="<?php echo $page->Identifier() ?>"
        data-item-url="<?php echo $page->url() ?>"
        data-item-image="<?php echo $page->image()->url() ?>"
        data-item-price="<?php echo $page->price() ?>">
        Buy it for <?php echo $page->price() ?> $
      </a>
    </div>
  </div>

</main>

<?php snippet('footer') ?>
