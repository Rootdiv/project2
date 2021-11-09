<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/project/project2/global_pass.php';
  require_once PROJECT_ROOT.'/components/header.inc.php';
  if(isset($_GET['page']) && $_GET['page'] == '1') $news = new News(1);
  elseif(isset($_GET['page']) && $_GET['page'] == '2') $news = new News(2);
  else $news = new News(1);
?>
      <header>
        <div>
          <?php echo PHP_EOL;
            require_once PROJECT_ROOT.'/components/top_nav.inc.php';
          echo PHP_EOL ?>
          <div class="<?=$news->getField('news_bg')?> bg-fix">
            <div class="banner">
              <div class="title">
                <p><?=$news->getField('title')?></p>
                <p>GO TO TOP - новости</p>
              </div>
            </div>
          </div>
        </div>
      </header>
      <main>
        <div class="news-container contents">
          <div class="title-block">
            <p><?=$news->getField('title')?></p>
          </div>
          <div class="line"><!--Линия--></div>
          <div class="news-message">
            <?=$news->getField('news');
            echo PHP_EOL?>
          </div>
        </div>
        <div id="news" class="news-line contents">
          <div class="title-block">
            <p>Другие новости</p>
          </div>
          <div class="line"><!--Линия--></div>
          <div class="news-block flex-box">
            <div class="half flex-box">
              <div class="news1-img bg-fix">

              </div>
              <div class="news">
                <i>1 января 2018</i><br>
                Мы начинаем этот год с наших новых разработок в области маркетинга. Ждём Вас на наших тренингах и лекциях.
                <a href="<?=PROJECT_URL?>/news.php?page=1">Подробнее</a>
              </div>
            </div>
            <div class="space"></div>
            <div class="half flex-box">
              <div class="news2-img bg-fix">

              </div>
              <div class="news">
                <i>12 марта 2018</i><br>
                Мы работаем, вы отдыхаете! Теперь мы предоставляем полный спектр услуг по привлечению клиентов!
                <a href="<?=PROJECT_URL?>/news.php?page=2">Подробнее</a>
              </div>
            </div>
          </div>
        </div>
        <div class="message-line flex-box contents">
          <div>
            Хотите начать зарабатывать в интернете? Просто свяжитесь с нами.
          </div>
          <a href="<?=PROJECT_URL?>/index.php#mes">
            <b>Связаться</b>
          </a>
        </div>
      </main>
<?php
  require_once PROJECT_ROOT.'/components/footer.inc.php';
?>
