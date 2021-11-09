<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/project/project2/global_pass.php';
  require_once PROJECT_ROOT.'/components/header.inc.php';
?>
      <header>
        <div>
          <?php echo PHP_EOL;
            require_once PROJECT_ROOT.'/components/top_nav.inc.php';
          echo PHP_EOL ?>
          <div class="cont bg-fix">
            <div class="banner">
              <div class="title">
                <p>GO TO TOP</p>
                <p>GO TO TOP - Ваш быстрый старт продаж</p>
                <p>-Контакты-</p>
              </div>
            </div>
          </div>
        </div>
      </header>
      <main>
        <div id="about" class="news-container contents">
          <?php $about = new About(1)
          ?><div class="title-block"><?=$about->getField('title')?></div>
          <div class="line"><!--Линия--></div>
          <div class="news-message">
            <?=$about->getField('text').PHP_EOL?>
          </div>
        </div>
        <div class="contents">
          <div class="title-block">
            <p>Свяжитесь с нами</p>
          </div>
          <div class="line"><!--Линия--></div>
          <div class="flex-box">
            <div class="half flex-box">
              <div class="contact-img1 bg-fix">

              </div>
              <div class="contact box">
                <b><i>Елена Белкина</i></b><br>
                директор
                <br>
                <br>
                <br>
                по вопросам сотрудничества:<br>
                <a href="mailto:belkina@gottotop.com">belkina@gottotop.com</a>
              </div>
            </div>
            <div class="space"></div>
            <div class="half flex-box">
              <div class="contact-img2 bg-fix">

              </div>
              <div class="contact box">
                <b><i>Александр Рогозин</i></b><br>
                директор отдела продаж
                <br>
                <br>
                <br>
                по вопросам развития бизнеса:<br>
                <a href="mailto:rogozin@gottotop.com">rogozin@gottotop.com</a>
              </div>
            </div>
          </div>
        </div>
        <div class="box"></div>
        <div class="message-cont flex-box contents">
          <?php $global_info = new Global_info(1)
          ?>
          <div class="message-contacts">
            <div class="message-contact">
              <div>
                <img src="<?=PROJECT_URL?>/img/placeholder.png" alt="Адрес" />
              </div>
              <div class="message-contact-text"><b>Адрес:</b><br><?=$global_info->getField('adders')?></div>
            </div>
            <div class="message-contact">
              <div>
                <img src="<?=PROJECT_URL?>/img/telephone.png" alt="Телефон" />
              </div>
              <div class="message-contact-text"><b>Телефон:</b><br><?=$global_info->getField('tel')?></div>
            </div>
            <div class="message-contact">
              <div>
                <img src="<?=PROJECT_URL?>/img/mail.png" alt="E-mail" />
              </div>
              <div class="message-contact-text"><b>E-mail:</b><br><?=$global_info->getField('email')?></div>
            </div>
          </div>
          <div class="box"></div>
          <div class="message-box">
            <div>
              <b>Напишите нам</b>
            </div>
            <form method="POST" action="<?=PROJECT_URL?>/message.php">
              <label>
                <input class="input-text" type="text" name="name" placeholder="ФИО">
              </label>
              <label>
                <input class="input-text" type="email" name="email" required placeholder="E-mail">
              </label>
              <label>
                <textarea name="text" required placeholder="Ваше сообщение"></textarea>
              </label>
              <div>
                <input class="input-text" type="submit" value="отправить">
              </div>
            </form>
          </div>
        </div>
        <div id="map">

        </div>
      </main>
<?php
  require_once PROJECT_ROOT.'/components/footer.inc.php';
?>
