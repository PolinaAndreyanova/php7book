<?php
function MakeCal($year, $month) {
    $wday = date('N');
    $n = - ($wday - date('j')) + 1;
    $arCal = [];
    for ($y = 0; $y < 6; $y++) {
        $arRow = [];
        $notEmpty = false;
        for ($x = 0; $x < 7; $x++, $n++) {
            if (checkdate($month, $n, $year)) {
                $arRow[] = $n;
                $notEmpty = true;
            } else {
                $arRow[] = "";
            }
        }
        if (!$notEmpty) {
            break;
        }
        $arCal[] = $arRow;
    }
    return $arCal;
}

$arNow = getdate();
$arCal = MakeCal($arNow['year'], $arNow['mon']);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Использование функции strtotime()</title>
  <meta charset="utf-8" />
</head>
<body>
  <table border="1">
    <tr>
      <td>Пн</td>
      <td>Вт</td>
      <td>Ср</td>
      <td>Чт</td>
      <td>Пт</td>
      <td>Сб</td>
      <td style="color: red;">Вс</td>
    </tr>
    <?php foreach ($arCal as $arRow) {?>
      <tr>
        <?php foreach ($arRow as $i => $v) {?>
          <td style="<?= $i == 6 ? 'color: red;' : '' ?>">
            <?= $v ? $v : "&nbsp;" ?>
          </td>
        <?php } ?>
      </tr>
    <?php } ?>
  </table>
</body>
</html>