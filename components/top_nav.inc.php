          <div class="top-nav contents">
            <div class="logo">
              <div>
                GO TO
              </div>
              <div>
                TOP
              </div>
            </div>
            <div class="to-end">
              <nav>
                <ul>
                  <?php $pages = new Pages(0);
                  foreach ((new Pages(0))->getAllUnitsId() as $item) {
                    $pages = new Pages($item);
                    echo PHP_EOL;?>
                  <li>
                    <a href="<?=PROJECT_URL . $pages->getField('link');?>"><?=$pages->getField('page');?></a>
                  </li>
                  <?php }
                  echo PHP_EOL;?>
                </ul>
              </nav>
            </div>
          </div>
