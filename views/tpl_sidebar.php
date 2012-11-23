<a href=""><img src="<?= $header['img']['src'] ?>" class="map" rel="<?= $header['img']['rel'] ?>" alt="" /></a>
<!-- first overlay. id attribute matches our selector -->
<div class="simple_overlay" id="contact-map">

    <!-- large image -->
    <img src="<?= $header['img']['over_src'] ?>" />

</div>
<?php foreach($header['blocks'] as $block): ?>
    <div class="block">
        <?=$block?>
    </div><!-- end - block -->
<?php endforeach ?>

<div class="comments">
    <p class="title big">Отзывы клиентов:</p>
    <?php foreach($comments as $comment): ?>
            <?=$comment?>
        <div class="block">
                <p class="title"><?=$comment['title']?></p>
                <?=$comment['block']?>
        </div><!-- end - block -->
    <?php endforeach ?>
    <br />
    <p><a href="" class="link">Показать все...</a></p>
    <br />
    <a href=""><img src="img/add_comment.jpg" alt="" /></a>
</div><!-- end - comments -->
