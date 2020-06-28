<?php


if (isset($_REQUEST['save'])) {


    foreach ($_REQUEST['id'] as $id) {
        if ($id == 0 && !empty($_REQUEST['original_text_key'][$id])) {

            db_insert($dbConnection, 'language', [
                'original_text_key' => $_REQUEST['original_text_key'][$id],
                'en' => $_REQUEST['en'][$id],
                'ar' => $_REQUEST['ar'][$id],
                'es' => $_REQUEST['es'][$id],
                'ru' => $_REQUEST['ru'][$id],
                'vn' => $_REQUEST['vn'][$id],
                'lid' => $_REQUEST['lid'][$id],
                'mys' => $_REQUEST['mys'][$id],
                'ph' => $_REQUEST['ph'][$id],
                'fr' => $_REQUEST['fr'][$id],
                'th' => $_REQUEST['th'][$id],
                'page_name' => $_REQUEST['page_name'][$id],

            ]);


        } elseif ($id > 0) {
//    $row_exist = db_select($dbConnection, 'select id from language where id='.$id);
//print_r($row_exist);
//    if(true ){

            db_update($dbConnection, 'language', $id, [
                'original_text_key' => $_REQUEST['original_text_key'][$id],
                'en' => $_REQUEST['en'][$id],
                'ar' => $_REQUEST['ar'][$id],
                'es' => $_REQUEST['es'][$id],
                'ru' => $_REQUEST['ru'][$id],
                'vn' => $_REQUEST['vn'][$id],
                'lid' => $_REQUEST['lid'][$id],
                'mys' => $_REQUEST['mys'][$id],
                'ph' => $_REQUEST['ph'][$id],
                'fr' => $_REQUEST['fr'][$id],
                'th' => $_REQUEST['th'][$id],
                'page_name' => $_REQUEST['page_name'][$id],

            ]);

        }

    }


}
?>

<head>
    <title>Multibank FX</title>
</head>
<body>
<form action="index.php" method="post">

    <input type="submit" name="save" value="save">
    <div style="display: table;">


        <div style="display:table-row">
            <form action="" method="post">
                <div style="display: table-cell">id</div>
                <div style="display: table-cell">page_name</div>
                <div style="display: table-cell">original_text_key</div>
                <div style="display: table-cell">en</div>
                <div style="display: table-cell">ar</div>
                <div style="display: table-cell">es</div>
                <div style="display: table-cell">ru</div>
                <div style="display: table-cell">vn</div>
                <div style="display: table-cell">lid</div>
                <div style="display: table-cell">mys</div>
                <div style="display: table-cell">ph</div>
                <div style="display: table-cell">fr</div>
                <div style="display: table-cell">th</div>
                <div style="display: table-cell"></div>

        </div>


        <div style="display:table-row">
            <div style="display: table-cell">

                <input type="hidden" name="id[0]" value="0"> 0
            </div>
            <div style="display: table-cell"><textarea name="page_name[0]"></textarea></div>
            <div style="display: table-cell"><textarea name="original_text_key[0]"></textarea></div>
            <div style="display: table-cell"><textarea name="en[0]"></textarea></div>
            <div style="display: table-cell"><textarea name="ar[0]"></textarea></div>
            <div style="display: table-cell"><textarea name="es[0]"></textarea></div>
            <div style="display: table-cell"><textarea name="ru[0]"></textarea></div>
            <div style="display: table-cell"><textarea name="vn[0]"></textarea></div>
            <div style="display: table-cell"><textarea name="lid[0]"></textarea></div>
            <div style="display: table-cell"><textarea name="mys[0]"></textarea></div>
            <div style="display: table-cell"><textarea name="ph[0]"></textarea></div>
            <div style="display: table-cell"><textarea name="fr[0]"></textarea></div>
            <div style="display: table-cell"><textarea name="th[0]"></textarea></div>
            <div style="display: table-cell"></div>

        </div>


        <?php

        $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
        $page = $page > 0 ? $page - 1 : 0;
        $limit = 1000;
        $offset = $limit * $page;

        $quert_text = 'select * from language ';
        $resultList = db_select($dbConnection, $quert_text . ' order by id desc limit  ' . $offset . ',' . $limit);

        while ($row = $resultList->fetch()) { ?>

            <div style="display:table-row">
                <div style="display: table-cell">
                    <input type="hidden" name="id[<?= $row['id']; ?>]" value="<?= $row['id']; ?>">
                    <?= $row['id']; ?></div>
                <div style="display: table-cell"><textarea
                            name="page_name[<?= $row['id']; ?>]"><?= $row['page_name']; ?></textarea></div>
                <div style="display: table-cell"><textarea
                            name="original_text_key[<?= $row['id']; ?>]"><?= $row['original_text_key']; ?></textarea>
                </div>
                <div style="display: table-cell"><textarea name="en[<?= $row['id']; ?>]"><?= $row['en']; ?></textarea>
                </div>
                <div style="display: table-cell"><textarea name="ar[<?= $row['id']; ?>]"><?= $row['ar']; ?></textarea>
                </div>
                <div style="display: table-cell"><textarea name="es[<?= $row['id']; ?>]"><?= $row['es']; ?></textarea>
                </div>
                <div style="display: table-cell"><textarea name="ru[<?= $row['id']; ?>]"><?= $row['ru']; ?></textarea>
                </div>
                <div style="display: table-cell"><textarea name="vn[<?= $row['id']; ?>]"><?= $row['vn']; ?></textarea>
                </div>
                <div style="display: table-cell"><textarea name="lid[<?= $row['id']; ?>]"><?= $row['lid']; ?></textarea>
                </div>
                <div style="display: table-cell"><textarea name="mys[<?= $row['id']; ?>]"><?= $row['mys']; ?></textarea>
                </div>
                <div style="display: table-cell"><textarea name="ph[<?= $row['id']; ?>]"><?= $row['ph']; ?></textarea>
                </div>
                <div style="display: table-cell"><textarea name="fr[<?= $row['id']; ?>]"><?= $row['fr']; ?></textarea>
                </div>
                <div style="display: table-cell"><textarea name="th[<?= $row['id']; ?>]"><?= $row['th']; ?></textarea>
                </div>
                <div style="display: table-cell"></div>

            </div>


        <?php } ?>

    </div>
    <input type="submit" name="save" value="save">
</form>
</body>
</html>