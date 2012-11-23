<?php
defined('SYSPATH') or die('No direct script access.');
$first_table = TRUE;
?>
<?php foreach ($vids as $vid): ?>
    <?php $items = $data[$vid['id']]//Выбираем массив только тех элементов, которые отновятся к этому виду ?>
    <?php $fields = $vid['fields']//Выбираем массив только тех элементов, которые отновятся к этому виду ?>
    <!--Вывод кнопок печати-->
    <div class="print-links">
        <a class="gray_btn" href=""><span><img src="img/print.png" alt="" />распечатать весь прайс</span></a>
        <?php if ($first_table):$first_table = FALSE; ?>
            <a class="gray_btn  print" href=""><span><img src="img/print.png" alt="" />распечатать выделенное</span></a>
        <?php endif ?>
    </div><!-- end - print-links -->    
    <!--/Вывод кнопок печати-->
    <h2><?= $vid['title'] ?></h2>
    <div class="table-holder">
        <table cellpadding="0" cellspacing="0">
            <tr>
                <?php foreach ($fields as $field)://выводим заголовок таблицы?>
                    <th><?= $field['title'] ?></th>
                <?php endforeach ?>
            </tr>
            <?php foreach ($items as $item):// выводим строку данных?>
                <tr>
                    <?php foreach ($fields as $field)://выводим ячейку с данными?>
                        <?php if ($field['name'] == 'photo')://если это поле со сылкой на рисунок?>
                            <td class="align-center"><a href=""><img src="<?= $item[$field['name']] ?>" alt="" /></a></td>
                        <?php else: ?>
                            <td><?= $item[$field['name']] ?></td>
                        <?php endif ?>
                    <?php endforeach ?>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
<?php endforeach ?>
