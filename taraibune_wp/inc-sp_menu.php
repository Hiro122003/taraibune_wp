<div class="l-sp-menu-btn 
<?php if (is_home() || is_front_page()) { ?>l-sp-menu-btn--home <?php } ?>
 js-sp-menu-btn" id="sp_menu_btn">
  <div class="p-sp-menu-btn">
    <span class="p-sp-menu-btn__border p-sp-menu-btn__border--01"></span>
    <span class="p-sp-menu-btn__border p-sp-menu-btn__border--02"></span>
    <span class="p-sp-menu-btn__border p-sp-menu-btn__border--03"></span>
  </div>
</div>

<div class="l-sp-menu" id="sp_menu">
  <div class="p-sp-menu">
    <ul class="p-sp-menu__list">
      <li class="p-sp-menu__item">
        <!-- TOPページの場合はhrefにアンカーリンクだけを設定する -->
        <a href="<?php
                  if (is_home() || is_front_page()) {
                    echo "#description";
                  } else {
                    echo "/#description";
                  } ?>" class="p-sp-menu__link">
          コンセプト
        </a>
      </li>
      <li class="p-sp-menu__item"><a href="/room" class="p-sp-menu__link">お部屋</a></li>
      <li class="p-sp-menu__item"><a href="/cuisine" class="p-sp-menu__link">お料理</a></li>
      <li class="p-sp-menu__item"><a href="/onsen" class="p-sp-menu__link">温泉</a></li>
      <li class="p-sp-menu__item">
        <!-- TOPページの場合はhrefにアンカーリンクだけを設定する -->
        <a href="<?php
                  if (is_home() || is_front_page()) {
                    echo "#access";
                  } else {
                    echo "/#access";
                  } ?>" class="p-sp-menu__link">
          アクセス
        </a>
      </li>
      <li class="p-sp-menu__item"><a href="" class="p-sp-menu__link">ご予約</a></li>
    </ul>

    <ul class="p-sp-menu__sns-list">
      <li class="p-sp-menu__sns-item">
        <a href="#">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/common/ft_icon_twitter.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/common/ft_icon_twitter@2x.webp 2x">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/common/ft_icon_twitter.webp" alt="twitter" width="26" height="20">
          </picture>
        </a>
      </li>
      <li class="p-sp-menu__sns-item">
        <a href="#">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/common/ft_icon_facebook.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/common/ft_icon_facebook@2x.webp 2x">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/common/ft_icon_facebook.webp" alt="facebook" width="26" height="26">
          </picture>
        </a>
      </li>
      <li class="p-sp-menu__sns-item">
        <a href="#">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/common/ft_icon_instagram.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/common/ft_icon_instagram@2x.webp 2x">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/common/ft_icon_instagram.webp" alt="instagram" width="26" height="26">
          </picture>
        </a>
      </li>
    </ul>
    <div class="p-sp-menu__tel">
      <p class="p-sp-menu__tel-text">Tel.<a class="p-sp-menu__tel-link" href="tel:000-0000-000">000-0000-0000</a></p>
    </div>
  </div>
</div><!-- / #sp_menu -->