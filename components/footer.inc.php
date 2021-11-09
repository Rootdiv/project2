<?php $global_info = new Global_info(1) ?>
      <footer>
        <div class="footer box flex-box contents">
          <div class="footer-about">
            <p>О нас</p>
            <p>Мы оказываем всестороннюю помощь компаниям и физическим лицам - собственникам веб-ресурсов, которые готовы использовать сайт,
              как эффективный рекламный инструмент, позволяющий развивать бизнес.</p>
          </div>
          <div class="footer-news">
            <p>Читайте в новостях</p>
            <a href="<?=PROJECT_URL?>/news.php?page=1">Новые разработки</a>
            <br>
            <a href="<?=PROJECT_URL?>/news.php?page=2">Мы работаем, вы отдыхаете</a>
          </div>
          <div class="contacts">
            <a href="<?=PROJECT_URL?>/contacts.php">Контакты</a>
            <div class="box-small"></div>
            <img src="<?=PROJECT_URL?>/img/placeholder.png" alt="Адрес" /> <?=$global_info->getField('adders')?><br>
            <img src="<?=PROJECT_URL?>/img/telephone.png" alt="Телефон" /> <?=$global_info->getField('tel')?><br>
            <img src="<?=PROJECT_URL?>/img/mail.png" alt="E-mail" /> <?=$global_info->getField('email');
            echo PHP_EOL?>
          </div>
        </div>
        <div class="copy-footer"><?=$global_info->getField('copy')?></div>
      </footer>
    </div>
    <script src="<?=PROJECT_URL?>/js/scripts.js"></script>
    <script src="<?=PROJECT_URL?>/js/slider.js"></script>
  </body>
</html>
