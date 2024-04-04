<footer class="l-ft" id="footer"><!--　フッター -->
    <div class="p-ft">
        <div class="c-width c-width--ft">
            <div class="p-ft__main">
                <div class="p-ft__logo">
                    <a href="/">
                        <picture>
                            <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/common/ft_logo.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/common/ft_logo@2x.webp 2x">
                            <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/common/ft_logo.webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/common/ft_logo.webp" width="204" height="586" alt="佐渡の古民家旅館たらい舟">
                        </picture>
                    </a>
                </div>

                <div class="p-ft__list-wrap">
                    <ul class="p-ft__list">
                        <li class="p-ft__list-item">
                            <!-- 分岐　-->
                            <a href="<?php
                                        if (is_home() || is_front_page()) {
                                            echo "#description";
                                        } else {
                                            echo "/#description";
                                        } ?>" class="p-ft__link">
                                コンセプト
                            </a>
                        </li>
                        <li class="p-ft__list-item"><a href="/room" class="p-ft__link">お部屋</a></li>
                        <li class="p-ft__list-item"><a href="/cuisine" class="p-ft__link">お料理</a></li>
                        <li class="p-ft__list-item"><a href="/onsen" class="p-ft__link">温泉</a></li>
                        <li class="p-ft__list-item">
                            <!-- 分岐　-->
                            <a href="<?php
                                        if (is_home() || is_front_page()) {
                                            echo "#access";
                                        } else {
                                            echo "/#access";
                                        } ?>" class="p-ft__link">
                                アクセス
                            </a>
                        </li>
                        <li class="p-ft__list-item"><a href="/reservation" class="p-ft__link">ご予約</a></li>
                    </ul>
                </div>
            </div><!-- ft_main -->
            <div class="p-ft__tel">
                <p class="p-ft__tel-text">Tel. <a class="p-ft__tel-link" href="tel:000-0000-000">000-0000-000</a></p>
            </div>
            <div class="p-ft__sub">
                <ul class="p-ft__sns-list">
                    <li class="p-ft__sns-item">
                        <a href="#">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/common/ft_icon_twitter.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/common/ft_icon_twitter@2x.webp 2x">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/common/ft_icon_twitter.webp" alt="twitter" width="26" height="20">
                            </picture>
                        </a>
                    </li>
                    <li class="p-ft__sns-item">
                        <a href="#">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/common/ft_icon_facebook.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/common/ft_icon_facebook@2x.webp 2x">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/common/ft_icon_facebook.webp" alt="facebook" width="26" height="26">
                            </picture>
                        </a>
                    </li>
                    <li class="p-ft__sns-item">
                        <a href="#">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/common/ft_icon_instagram.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/common/ft_icon_instagram@2x.webp 2x">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/common/ft_icon_instagram.webp" alt="instagram" width="26" height="26">
                            </picture>
                        </a>
                    </li>
                </ul>
                <div class="p-ft__copyright">
                    <p class="p-ft__copyright-text">@20XX Taraibune</p>
                </div>
            </div><!-- ft_sub -->
        </div>
    </div>
</footer><!-- / footer -->