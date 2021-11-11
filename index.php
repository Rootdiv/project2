<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/project/project2/global_pass.php';
  require_once PROJECT_ROOT . '/components/header.inc.php';
?>
      <header>
        <div>
          <?php echo PHP_EOL;
          require_once PROJECT_ROOT . '/components/top_nav.inc.php';
          echo PHP_EOL; ?>
          <div class="slider-container bg-fix">
            <div class="slider flex-box horizontal-arrows">
              <ul class="slides">
                <?php foreach ((new Slides(0))->getAllUnitsId() as $item) {
                $slides = new Slides($item);
                ?><li>
                  <div class="bg-fix banner" style="background-image: url('<?=PROJECT_URL . $slides->getField('slide');?>')">
                    <div class="title"><?=$slides->getField('title');?></div>
                    <a href="<?=$slides->getField('link');?>" class="button"><?=$slides->getField('button');?></a>
                  </div>
                </li>
                <?php }
                echo PHP_EOL;?>
              </ul>
            </div>
          </div>
        </div>
      </header>
      <main>
        <div id="about" class="contents flex-box flex-wrap">
          <?php foreach ((new Services(0))->getAllUnitsId() as $item) {
          $services = new Services($item);
          ?><div class="block one-third">
            <div class="content box-small">
              <div>
                <img src="<?=PROJECT_URL . $services->getField('pictures');?>" alt="Иконка" />
              </div>
              <div><?=$services->getField('title');?></div>
              <div><?=$services->getField('text');?></div>
            </div>
          </div>
          <?php }
          echo PHP_EOL;?>
        </div>
        <div class="message-line flex-box contents">
          <div>
            Хотите начать зарабатывать в интернете? Просто свяжитесь с нами.
          </div>
          <a href="<?=PROJECT_URL;?>/#mes">
            <b>Связаться</b>
          </a>
        </div>
        <div class="last-working contents">
          <div class="title-block">
            <p>Последние работы</p>
          </div>
          <div class="line">
            <!--Линия-->
          </div>
          <div>
            <?php foreach ((new Works(0))->getAllUnitsId() as $item) {
            $works = new Works($item);
            ?><img src="<?=PROJECT_URL . $works->getField('work');?>" alt="Скриншот работы" />
            <?php }
            echo PHP_EOL;?>
          </div>
        </div>
        <div class="stat-line flex-box flex-wrap contents">
          <div class="box-small">
            <div>
              <h1>456</h1>
            </div>
            <div>
              <img src="<?=PROJECT_URL;?>/img/line.png" alt="Линия" />
            </div>
            <div>
              <p>Счастливых клиентов</p>
            </div>
          </div>
          <div class="box-small">
            <div>
              <h1>322</h1>
            </div>
            <div>
              <img src="<?=PROJECT_URL;?>/img/line.png" alt="Линия" />
            </div>
            <div>
              <p>Проекта</p>
            </div>
          </div>
          <div class="box-small">
            <div>
              <h1>290</h1>
            </div>
            <div>
              <img src="<?=PROJECT_URL;?>/img/line.png" alt="Линия" />
            </div>
            <div>
              <p>Сайтов в топ</p>
            </div>
          </div>
          <div class="box-small">
            <div>
              <h1>132</h1>
            </div>
            <div>
              <img src="<?=PROJECT_URL;?>/img/line.png" alt="Линия" />
            </div>
            <div>
              <p>Сайта разработано</p>
            </div>
          </div>
        </div>
        <div id="news" class="news-line contents">
          <div class="title-block">
            <p>Новости</p>
          </div>
          <div class="line">
            <!--Линия-->
          </div>
          <div class="news-block flex-box">
            <div class="half flex-box">
              <div class="news1-img bg-fix">

              </div>
              <div class="news">
                <i>1 января 2018</i><br>
                Мы начинаем этот год с наших новых разработок в области маркетинга. Ждём Вас на наших тренингах и лекциях.
                <a href="<?=PROJECT_URL;?>/news.php?page=1">Подробнее</a>
              </div>
            </div>
            <div class="space"></div>
            <div class="half flex-box">
              <div class="news2-img bg-fix">

              </div>
              <div class="news">
                <i>12 марта 2018</i><br>
                Мы работаем, вы отдыхаете! Теперь мы предоставляем полный спектр услуг по привлечению клиентов!
                <a href="<?=PROJECT_URL;?>/news.php?page=2">Подробнее</a>
              </div>
            </div>
          </div>
        </div>
        <div id="mes" class="message box contents">
          <p class="title-block">Напишите нам</p>
          <div class="line">
            <!--message box send-->
          </div>
          <div>
            <form method="POST" action="<?=PROJECT_URL;?>/message.php">
              <div class="flex-box">
                <div class="send">
                  <label>
                    <input class="input-text" type="text" name="full_name" placeholder="ФИО">
                  </label>
                  <label>
                    <input class="input-text" type="email" name="email" required placeholder="Email">
                  </label>
                  <label>
                    <input class="input-text" type="tel" name="phone" placeholder="Телефон">
                  </label>
                  <div>
                    <input class="input-text" type="submit" value="Отправить вопрос">
                  </div>
                </div>
                <label class="textarea">
                  <textarea name="text" required placeholder="Ваше сообщение"></textarea>
                </label>
              </div>
            </form>
          </div>
        </div>
      </main>
<?php
  require_once PROJECT_ROOT . '/components/footer.inc.php';
?>
