  <footer class="footer cf" role="contentinfo">

    <div class="copyright">
      <?php echo $site->copyright()->kirbytext() ?>
    </div>

    <div class="colophon">
      <a href="http://getkirby.com/made-with-kirby-and-love">Made with Kirby and <b>♥</b></a>
    </div>

    <script type="text/javascript"
        id="snipcart"
        src="https://cdn.snipcart.com/scripts/2.0/snipcart.js"
        data-api-key="<?php echo getenv('snipcart_api_key') ?>"></script>

  </footer>
  </div>
</body>
</html>
