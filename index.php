<?php
Один доллар = 1;
Первый доллар = -1;
$odin = "1";
$ноль = 0;
$da = истина;
$net = false;
$null = null;
$php = "php";
?>
<!DOCTYPE html>
языкhtml <="ru">
<глава>
    кодировкаmeta <="UTF-8">
    http-эквивалентmeta <="X-UA-совместимый" content="IE=edge">
    namemeta <="viewport" content="width= ширина устройства, начальный масштаб = 1.0">
    >заголовок<Документ</заголовок>
</голова>
<тело>
    классdiv <="Задачи">
      <p></p>
      <p></p>
      >strong<>h3<Задание 1.&nbsp;</strong>Таблица истинности PHP</h3>
      <p></p>
      >p<У нас на входе есть 2 операнда — A и B. Они могут принимать значения 0 или 1.&nbsp;</p>
      <p></p>
      <таблица>
      <thead>
      <tr><th><strong>A</strong></th><th><strong>B</strong></th><th><strong>!A</strong></th><th><strong>A || B</strong></th><th><strong>A &amp;&amp; B</strong></th><th><strong>A xor B</strong></th></tr>
      </thead>
      <tbody>
        <?php
      echo '<tr>';
      echo '<td>' . $zero . '</td>';
      echo '<td>' . $zero . '</td>';
      echo '<td>';
      var_export(!$zero);
      echo '</td>';
      echo '<td>';
      var_export($zero || $zero);
      echo '</td>';
      echo '<td>';
      var_export($zero && $zero);
      echo '</td>';
      echo '<td>';
 var_export($ноль xor или $ноль);
      echo '</td>';
      echo '<tr>';
      echo '<td>' . $zero . '</td>';
      '<td>' эхо . Одиндоллар. '</td>';
      echo '<td>';
      var_export(!$zero);
      echo '</td>';
      echo '<td>';
      var_export($zero || $one);
      echo '</td>';
      echo '<td>';
      var_export($zero && $one);
      echo '</td>';
      echo '<td>';
      var_export($zero xor $one);
      echo '</td>';
      echo '<tr>';
      echo '<td>' . $one . '</td>';
      echo '<td>' . $zero . '</td>';
      echo '<td>';
      var_export(!$one);
      echo '</td>';
      echo '<td>';
      var_export($one|| $zero);
      echo '</td>';
      echo '<td>';
      var_export($one && $zero);
      echo '</td>';
      echo '<td>';
      var_export($one xor $zero);
      echo '</td>';
      echo '<tr>';
      echo '<td>' . $one . '</td>';
      echo '<td>' . $one . '</td>';
      echo '<td>';
      var_export(!$one);
      echo '</td>';
      echo '<td>';
      var_export($one || $one);
      echo '</td>';
      echo '<td>';
      var_export($one && $one);
      echo '</td>';
      echo '<td>';
      var_export($one xor $one);
      echo '</td>';
      echo '</tr>';
      ?>
      </tbody>
      </table>
      <p></p>
      <h3><strong>Задание 2.&nbsp;</strong>Таблица гибкого сравнения</h3>
      <p>Ниже приведена матрица с различными значениями по оси&nbsp;X и Y c оператором ==.</p>
      <p></p>
      <table>
      <thead>
      <tr><th><strong></strong><th><strong>true</strong></th><th><strong>falce</strong></th><th><strong>1</strong></th><th><strong>0</strong></th><th><strong>-1</strong></th><th><strong>'1'</strong><th><strong>NULL</strong></th><th><strong>'php'</strong></tr>
      </thead>
      <tbody>
        <?php
      echo '<tr>';
      echo '<td><strong>';
      var_export($da);
      echo '</strong></td>';
      echo '<td>';
      var_export($da == $da);
      echo '</td>';
      echo '<td>';
      var_export($da == $net);
      echo '</td>';
      echo '<td>';
      var_export($da == $one);
      echo '</td>';
      echo '<td>';
      var_export($da == $zero);
      echo '</td>';
      echo '<td>';
      var_export($da == $first);
      echo '</td>';
      echo '<td>';
      var_export($da == $odin);
      echo '</td>';
      echo '<td>';
      var_export($da == $null);
      echo '<td>';
      var_export($da == $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($net);
      echo '</strong></td>';
      echo '<td>';
      var_export($net == $da);
      echo '</td>';
      echo '<td>';
      var_export($net == $net);
      echo '</td>';
      echo '<td>';
      var_export($net == $one);
      echo '</td>';
      echo '<td>';
      var_export($net == $zero);
      echo '</td>';
      echo '<td>';
      var_export($net == $first);
      echo '</td>';
      echo '<td>';
      var_export($net == $odin);
      echo '</td>';
      echo '<td>';
      var_export($net == $null);
      echo '<td>';
      var_export($net == $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($one);
      echo '</strong></td>';
      echo '<td>';
      var_export($one == $da);
      echo '</td>';
      echo '<td>';
      var_export($one == $net);
      echo '</td>';
      echo '<td>';
      var_export($one == $one);
      echo '</td>';
      echo '<td>';
      var_export($one == $zero);
      echo '</td>';
      echo '<td>';
      var_export($one == $first);
      echo '</td>';
      echo '<td>';
      var_export($one == $odin);
      echo '</td>';
      echo '<td>';
      var_export($one == $null);
      echo '<td>';
      var_export($one == $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($zero);
      echo '</strong></td>';
      echo '<td>';
      var_export($zero == $da);
      echo '</td>';
      echo '<td>';
      var_export($zero == $net);
      echo '</td>';
      echo '<td>';
      var_export($zero == $one);
      echo '</td>';
      echo '<td>';
      var_export($zero == $zero);
      echo '</td>';
      echo '<td>';
      var_export($zero == $first);
      echo '</td>';
      echo '<td>';
      var_export($zero == $odin);
      echo '</td>';
      echo '<td>';
      var_export($zero == $null);
      echo '<td>';
      var_export($zero == $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($first);
      echo '</strong></td>';
      echo '<td>';
      var_export($first == $da);
      echo '</td>';
      echo '<td>';
      var_export($first == $net);
      echo '</td>';
      echo '<td>';
      var_export($first == $one);
      echo '</td>';
      echo '<td>';
      var_export($first == $zero);
      echo '</td>';
      echo '<td>';
      var_export($first == $first);
      echo '</td>';
      echo '<td>';
      var_export($first == $odin);
      echo '</td>';
      echo '<td>';
      var_export($first == $null);
      echo '<td>';
      var_export($first == $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($odin);
      echo '</strong></td>';
      echo '<td>';
      var_export($odin == $da);
      echo '</td>';
      echo '<td>';
      var_export($odin == $net);
      echo '</td>';
      echo '<td>';
      var_export($odin == $one);
      echo '</td>';
      echo '<td>';
      var_export($odin == $zero);
      echo '</td>';
      echo '<td>';
      var_export($odin == $first);
      echo '</td>';
      echo '<td>';
      var_export($odin == $odin);
      echo '</td>';
      echo '<td>';
      var_export($odin == $null);
      echo '<td>';
      var_export($odin == $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($null);
      echo '</strong></td>';
      echo '<td>';
      var_export($null == $da);
      echo '</td>';
      echo '<td>';
      var_export($null == $net);
      echo '</td>';
      echo '<td>';
      var_export($null == $one);
      echo '</td>';
      echo '<td>';
      var_export($null == $zero);
      echo '</td>';
      echo '<td>';
      var_export($null == $first);
      echo '</td>';
      echo '<td>';
      var_export($null == $odin);
      echo '</td>';
      echo '<td>';
      var_export($null == $null);
      echo '<td>';
      var_export($null == $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($php);
      echo '</strong></td>';
      echo '<td>';
      var_export($php == $da);
      echo '</td>';
      echo '<td>';
      var_export($php == $net);
      echo '</td>';
      echo '<td>';
      var_export($php == $one);
      echo '</td>';
      echo '<td>';
      var_export($php == $zero);
      echo '</td>';
      echo '<td>';
      var_export($php == $first);
      echo '</td>';
      echo '<td>';
      var_export($php == $odin);
      echo '</td>';
      echo '<td>';
      var_export($php == $null);
      echo '<td>';
      var_export($php == $php);
      echo '</td>';
      echo '</td>';
      ?>
      </tbody>
      </table>

      <p></p>
      <h3><strong>Задание 3.&nbsp;</strong>Таблица жесткого сравнения</h3>
      <p>Ниже приведена матрица с различными значениями по оси&nbsp;X и Y c оператором ===.</p>
      <p></p>
      <table>
      <thead>
      <tr><th><strong></strong><th><strong>true</strong></th><th><strong>falce</strong></th><th><strong>1</strong></th><th><strong>0</strong></th><th><strong>-1</strong></th><th><strong>'1'</strong><th><strong>NULL</strong></th><th><strong>'php'</strong></tr>
      </thead>
      <tbody>
        <?php
      echo '<tr>';
      echo '<td><strong>';
      var_export($da);
      echo '</strong></td>';
      echo '<td>';
      var_export($da === $da);
      echo '</td>';
      echo '<td>';
      var_export($da === $net);
      echo '</td>';
      echo '<td>';
      var_export($da === $one);
      echo '</td>';
      echo '<td>';
      var_export($da === $zero);
      echo '</td>';
      echo '<td>';
      var_export($da === $first);
      echo '</td>';
      echo '<td>';
      var_export($da === $odin);
      echo '</td>';
      echo '<td>';
      var_export($da === $null);
      echo '<td>';
      var_export($da === $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($net);
      echo '</strong></td>';
      echo '<td>';
      var_export($net === $da);
      echo '</td>';
      echo '<td>';
      var_export($net === $net);
      echo '</td>';
      echo '<td>';
      var_export($net === $one);
      echo '</td>';
      echo '<td>';
      var_export($net === $zero);
      echo '</td>';
      echo '<td>';
      var_export($net === $first);
      echo '</td>';
      echo '<td>';
      var_export($net === $odin);
      echo '</td>';
      echo '<td>';
      var_export($net === $null);
      echo '<td>';
      var_export($net === $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($one);
      echo '</strong></td>';
      echo '<td>';
      var_export($one === $da);
      echo '</td>';
      echo '<td>';
      var_export($one === $net);
      echo '</td>';
      echo '<td>';
      var_export($one === $one);
      echo '</td>';
      echo '<td>';
      var_export($one === $zero);
      echo '</td>';
      echo '<td>';
      var_export($one === $first);
      echo '</td>';
      echo '<td>';
      var_export($one === $odin);
      echo '</td>';
      echo '<td>';
      var_export($one === $null);
      echo '<td>';
      var_export($one === $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($zero);
      echo '</strong></td>';
      echo '<td>';
      var_export($zero === $da);
      echo '</td>';
      echo '<td>';
      var_export($zero === $net);
      echo '</td>';
      echo '<td>';
      var_export($zero === $one);
      echo '</td>';
      echo '<td>';
      var_export($zero === $zero);
      echo '</td>';
      echo '<td>';
      var_export($zero === $first);
      echo '</td>';
      echo '<td>';
      var_export($zero === $odin);
      echo '</td>';
      echo '<td>';
      var_export($zero === $null);
      echo '<td>';
      var_export($zero === $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($first);
      echo '</strong></td>';
      echo '<td>';
      var_export($first === $da);
      echo '</td>';
      echo '<td>';
      var_export($first === $net);
      echo '</td>';
      echo '<td>';
      var_export($first === $one);
      echo '</td>';
      echo '<td>';
      var_export($first === $zero);
      echo '</td>';
      echo '<td>';
      var_export($first === $first);
      echo '</td>';
      echo '<td>';
      var_export($first === $odin);
      echo '</td>';
      echo '<td>';
      var_export($first === $null);
      echo '<td>';
      var_export($first === $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($odin);
      echo '</strong></td>';
      echo '<td>';
      var_export($odin === $da);
      echo '</td>';
      echo '<td>';
      var_export($odin === $net);
      echo '</td>';
      echo '<td>';
      var_export($odin === $one);
      echo '</td>';
      echo '<td>';
      var_export($odin === $zero);
      echo '</td>';
      echo '<td>';
      var_export($odin === $first);
      echo '</td>';
      echo '<td>';
      var_export($odin === $odin);
      echo '</td>';
      echo '<td>';
      var_export($odin === $null);
      echo '<td>';
      var_export($odin === $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($null);
      echo '</strong></td>';
      echo '<td>';
      var_export($null === $da);
      echo '</td>';
      echo '<td>';
      var_export($null === $net);
      echo '</td>';
      echo '<td>';
      var_export($null === $one);
      echo '</td>';
      echo '<td>';
      var_export($null === $zero);
      echo '</td>';
      echo '<td>';
      var_export($null === $first);
      echo '</td>';
      echo '<td>';
      var_export($null === $odin);
      echo '</td>';
      echo '<td>';
      var_export($null === $null);
      echo '<td>';
      var_export($null === $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($php);
      echo '</strong></td>';
      echo '<td>';
      var_export($php === $da);
      echo '</td>';
      echo '<td>';
      var_export($php === $net);
      echo '</td>';
      echo '<td>';
      var_export($php === $one);
      echo '</td>';
      echo '<td>';
      var_export($php === $zero);
      echo '</td>';
      echo '<td>';
      var_export($php === $first);
      echo '</td>';
      echo '<td>';
      var_export($php === $odin);
      echo '</td>';
      echo '<td>';
      var_export($php === $null);
      echo '<td>';
      var_export($php === $php);
      echo '</td>';
      echo '</td>';
      ?>
      </tbody>
      </table>
      <div class="conclusion">
            <strong>Вывод:</strong><br>
            <span>Задача 1</span><br>
            <i><b>!A</b> - Истина, если <b>A</b> не равна <b>true</b>.</i><br>
            <i><b>A || B</b> - Истина, если хотя бы одна из <b>A</b> и <b>B</b> равна <b>true</b>.</i><br>
            <i><b>A && B</b> - Истина, если <b>A</b> и <b>B</b> равны <b>true</b>.</i><br>
            <i><b>A xor B</b> - Истина, если одна из <b>A</b> и <b>B</b> равна <b>true</b>, но не обе.</i><br><br>
            <span>Задача 2</span><br>
            <i>При нестрогом сравнении оператор осуществляет приведение между двумя различными типами, если они различаются. То есть он сравнивает значение после преобразования типов.</i><br>
            <i>При строгом сравнении оператор вернет true, только если оба операнда имеют одинаковый тип и одно и то же значение.</i>
        </div><br>
      <style type="text/css"><!--
      table th {
          border: 1px solid #3106dc;
          padding: 3px 50px;
          color: blue;
          background-color: RGB(27, 196, 12);

      }
      table td {
          border: 4px solid #d7cf23;
          text-align: center;
          background-color: RGB(12, 184, 196);
      }
        thead th 
       {font-size: inherit !important;}
       tbody td 
       {font-size: inherit !important;}
      
      .big-table {
          overflow: auto;
          position: relative;
      }
      .big-table table {
          vertical-align: top;
          overflow-x: auto;
          white-space: nowrap;
          -webkit-overflow-scrolling: touch;
      }
      --></style>
      </div>
</body>
<!DOCTYPE html>
<html>
<meta lang ="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    meta name <="viewport" content="width=device-width, initial-scale=1" />
    <headline><Документ></headline>
</head>
<body>
  class div <="Задачи">
      <p></p>
      <p></p>
      >strong<>h3<Задание 1.&nbsp;</strong>Таблица истинности PHP</h3>
      <p></p>
      <p>У нас на входе есть 2 операнда — A и B. Они могут принимать значения 0 или 1.&nbsp;</p>
      <p></p>
      <table>
      <thead>
      <tr><th><strong>A</strong></th><th><strong>B</strong></th><th><strong>!A</strong></th><th><strong>A || B</strong></th><th><strong>A &amp;&amp; B</strong></th><th><strong>A xor B</strong></th></tr>
      </thead>
      <tbody>
        <?php
      echo '<tr>';
      echo '<td>' . $zero . '</td>';
      echo '<td>' . $zero . '</td>';
      echo '<td>';
      var_export(!$zero);
      echo '</td>';
      echo '<td>';
      var_export($zero || $zero);
      echo '</td>';
      echo '<td>';
      var_export($zero && $zero);
      echo '</td>';
      echo '<td>';
 var_export($ноль xor или $ноль);
      echo '</td>';
      echo '<tr>';
      echo '<td>' . $zero . '</td>';
      '<td>' эхо . Одиндоллар. '</td>';
      echo '<td>';
      var_export(!$zero);
      echo '</td>';
      echo '<td>';
      var_export($zero || $one);
      echo '</td>';
      echo '<td>';
      var_export($zero && $one);
      echo '</td>';
      echo '<td>';
      var_export($zero xor $one);
      echo '</td>';
      echo '<tr>';
      echo '<td>' . $one . '</td>';
      echo '<td>' . $zero . '</td>';
      echo '<td>';
      var_export(!$one);
      echo '</td>';
      echo '<td>';
      var_export($one|| $zero);
      echo '</td>';
      echo '<td>';
      var_export($one && $zero);
      echo '</td>';
      echo '<td>';
      var_export($one xor $zero);
      echo '</td>';
      echo '<tr>';
      echo '<td>' . $one . '</td>';
      echo '<td>' . $one . '</td>';
      echo '<td>';
      var_export(!$one);
      echo '</td>';
      echo '<td>';
      var_export($one || $one);
      echo '</td>';
      echo '<td>';
      var_export($one && $one);
      echo '</td>';
      echo '<td>';
      var_export($one xor $one);
      echo '</td>';
      echo '</tr>';
      ?>
      </tbody>
      </table>
      <p></p>
      <h3><strong>Задание 2.&nbsp;</strong>Таблица гибкого сравнения</h3>
      <p>Ниже приведена матрица с различными значениями по оси&nbsp;X и Y c оператором ==.</p>
      <p></p>
      <table>
      <thead>
      <tr><th><strong></strong><th><strong>true</strong></th><th><strong>falce</strong></th><th><strong>1</strong></th><th><strong>0</strong></th><th><strong>-1</strong></th><th><strong>'1'</strong><th><strong>NULL</strong></th><th><strong>'php'</strong></tr>
      </thead>
      <tbody>
        <?php
      echo '<tr>';
      echo '<td><strong>';
      var_export($da);
      echo '</strong></td>';
      echo '<td>';
      var_export($da == $da);
      echo '</td>';
      echo '<td>';
      var_export($da == $net);
      echo '</td>';
      echo '<td>';
      var_export($da == $one);
      echo '</td>';
      echo '<td>';
      var_export($da == $zero);
      echo '</td>';
      echo '<td>';
      var_export($da == $first);
      echo '</td>';
      echo '<td>';
      var_export($da == $odin);
      echo '</td>';
      echo '<td>';
      var_export($da == $null);
      echo '<td>';
      var_export($da == $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($net);
      echo '</strong></td>';
      echo '<td>';
      var_export($net == $da);
      echo '</td>';
      echo '<td>';
      var_export($net == $net);
      echo '</td>';
      echo '<td>';
      var_export($net == $one);
      echo '</td>';
      echo '<td>';
      var_export($net == $zero);
      echo '</td>';
      echo '<td>';
      var_export($net == $first);
      echo '</td>';
      echo '<td>';
      var_export($net == $odin);
      echo '</td>';
      echo '<td>';
      var_export($net == $null);
      echo '<td>';
      var_export($net == $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($one);
      echo '</strong></td>';
      echo '<td>';
      var_export($one == $da);
      echo '</td>';
      echo '<td>';
      var_export($one == $net);
      echo '</td>';
      echo '<td>';
      var_export($one == $one);
      echo '</td>';
      echo '<td>';
      var_export($one == $zero);
      echo '</td>';
      echo '<td>';
      var_export($one == $first);
      echo '</td>';
      echo '<td>';
      var_export($one == $odin);
      echo '</td>';
      echo '<td>';
      var_export($one == $null);
      echo '<td>';
      var_export($one == $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($zero);
      echo '</strong></td>';
      echo '<td>';
      var_export($zero == $da);
      echo '</td>';
      echo '<td>';
      var_export($zero == $net);
      echo '</td>';
      echo '<td>';
      var_export($zero == $one);
      echo '</td>';
      echo '<td>';
      var_export($zero == $zero);
      echo '</td>';
      echo '<td>';
      var_export($zero == $first);
      echo '</td>';
      echo '<td>';
      var_export($zero == $odin);
      echo '</td>';
      echo '<td>';
      var_export($zero == $null);
      echo '<td>';
      var_export($zero == $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($first);
      echo '</strong></td>';
      echo '<td>';
      var_export($first == $da);
      echo '</td>';
      echo '<td>';
      var_export($first == $net);
      echo '</td>';
      echo '<td>';
      var_export($first == $one);
      echo '</td>';
      echo '<td>';
      var_export($first == $zero);
      echo '</td>';
      echo '<td>';
      var_export($first == $first);
      echo '</td>';
      echo '<td>';
      var_export($first == $odin);
      echo '</td>';
      echo '<td>';
      var_export($first == $null);
      echo '<td>';
      var_export($first == $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($odin);
      echo '</strong></td>';
      echo '<td>';
      var_export($odin == $da);
      echo '</td>';
      echo '<td>';
      var_export($odin == $net);
      echo '</td>';
      echo '<td>';
      var_export($odin == $one);
      echo '</td>';
      echo '<td>';
      var_export($odin == $zero);
      echo '</td>';
      echo '<td>';
      var_export($odin == $first);
      echo '</td>';
      echo '<td>';
      var_export($odin == $odin);
      echo '</td>';
      echo '<td>';
      var_export($odin == $null);
      echo '<td>';
      var_export($odin == $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($null);
      echo '</strong></td>';
      echo '<td>';
      var_export($null == $da);
      echo '</td>';
      echo '<td>';
      var_export($null == $net);
      echo '</td>';
      echo '<td>';
      var_export($null == $one);
      echo '</td>';
      echo '<td>';
      var_export($null == $zero);
      echo '</td>';
      echo '<td>';
      var_export($null == $first);
      echo '</td>';
      echo '<td>';
      var_export($null == $odin);
      echo '</td>';
      echo '<td>';
      var_export($null == $null);
      echo '<td>';
      var_export($null == $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($php);
      echo '</strong></td>';
      echo '<td>';
      var_export($php == $da);
      echo '</td>';
      echo '<td>';
      var_export($php == $net);
      echo '</td>';
      echo '<td>';
      var_export($php == $one);
      echo '</td>';
      echo '<td>';
      var_export($php == $zero);
      echo '</td>';
      echo '<td>';
      var_export($php == $first);
      echo '</td>';
      echo '<td>';
      var_export($php == $odin);
      echo '</td>';
      echo '<td>';
      var_export($php == $null);
      echo '<td>';
      var_export($php == $php);
      echo '</td>';
      echo '</td>';
      ?>
      </tbody>
      </table>

      <p></p>
      <h3><strong>Задание 3.&nbsp;</strong>Таблица жесткого сравнения</h3>
      <p>Ниже приведена матрица с различными значениями по оси&nbsp;X и Y c оператором ===.</p>
      <p></p>
      <table>
      <thead>
      <tr><th><strong></strong><th><strong>true</strong></th><th><strong>falce</strong></th><th><strong>1</strong></th><th><strong>0</strong></th><th><strong>-1</strong></th><th><strong>'1'</strong><th><strong>NULL</strong></th><th><strong>'php'</strong></tr>
      </thead>
      <tbody>
        <?php
      echo '<tr>';
      echo '<td><strong>';
      var_export($da);
      echo '</strong></td>';
      echo '<td>';
      var_export($da === $da);
      echo '</td>';
      echo '<td>';
      var_export($da === $net);
      echo '</td>';
      echo '<td>';
      var_export($da === $one);
      echo '</td>';
      echo '<td>';
      var_export($da === $zero);
      echo '</td>';
      echo '<td>';
      var_export($da === $first);
      echo '</td>';
      echo '<td>';
      var_export($da === $odin);
      echo '</td>';
      echo '<td>';
      var_export($da === $null);
      echo '<td>';
      var_export($da === $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($net);
      echo '</strong></td>';
      echo '<td>';
      var_export($net === $da);
      echo '</td>';
      echo '<td>';
      var_export($net === $net);
      echo '</td>';
      echo '<td>';
      var_export($net === $one);
      echo '</td>';
      echo '<td>';
      var_export($net === $zero);
      echo '</td>';
      echo '<td>';
      var_export($net === $first);
      echo '</td>';
      echo '<td>';
      var_export($net === $odin);
      echo '</td>';
      echo '<td>';
      var_export($net === $null);
      echo '<td>';
      var_export($net === $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($one);
      echo '</strong></td>';
      echo '<td>';
      var_export($one === $da);
      echo '</td>';
      echo '<td>';
      var_export($one === $net);
      echo '</td>';
      echo '<td>';
      var_export($one === $one);
      echo '</td>';
      echo '<td>';
      var_export($one === $zero);
      echo '</td>';
      echo '<td>';
      var_export($one === $first);
      echo '</td>';
      echo '<td>';
      var_export($one === $odin);
      echo '</td>';
      echo '<td>';
      var_export($one === $null);
      echo '<td>';
      var_export($one === $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($zero);
      echo '</strong></td>';
      echo '<td>';
      var_export($zero === $da);
      echo '</td>';
      echo '<td>';
      var_export($zero === $net);
      echo '</td>';
      echo '<td>';
      var_export($zero === $one);
      echo '</td>';
      echo '<td>';
      var_export($zero === $zero);
      echo '</td>';
      echo '<td>';
      var_export($zero === $first);
      echo '</td>';
      echo '<td>';
      var_export($zero === $odin);
      echo '</td>';
      echo '<td>';
      var_export($zero === $null);
      echo '<td>';
      var_export($zero === $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($first);
      echo '</strong></td>';
      echo '<td>';
      var_export($first === $da);
      echo '</td>';
      echo '<td>';
      var_export($first === $net);
      echo '</td>';
      echo '<td>';
      var_export($first === $one);
      echo '</td>';
      echo '<td>';
      var_export($first === $zero);
      echo '</td>';
      echo '<td>';
      var_export($first === $first);
      echo '</td>';
      echo '<td>';
      var_export($first === $odin);
      echo '</td>';
      echo '<td>';
      var_export($first === $null);
      echo '<td>';
      var_export($first === $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($odin);
      echo '</strong></td>';
      echo '<td>';
      var_export($odin === $da);
      echo '</td>';
      echo '<td>';
      var_export($odin === $net);
      echo '</td>';
      echo '<td>';
      var_export($odin === $one);
      echo '</td>';
      echo '<td>';
      var_export($odin === $zero);
      echo '</td>';
      echo '<td>';
      var_export($odin === $first);
      echo '</td>';
      echo '<td>';
      var_export($odin === $odin);
      echo '</td>';
      echo '<td>';
      var_export($odin === $null);
      echo '<td>';
      var_export($odin === $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($null);
      echo '</strong></td>';
      echo '<td>';
      var_export($null === $da);
      echo '</td>';
      echo '<td>';
      var_export($null === $net);
      echo '</td>';
      echo '<td>';
      var_export($null === $one);
      echo '</td>';
      echo '<td>';
      var_export($null === $zero);
      echo '</td>';
      echo '<td>';
      var_export($null === $first);
      echo '</td>';
      echo '<td>';
      var_export($null === $odin);
      echo '</td>';
      echo '<td>';
      var_export($null === $null);
      echo '<td>';
      var_export($null === $php);
      echo '</td>';
      echo '</td>';
      echo '<tr>';
      echo '<td><strong>';
      var_export($php);
      echo '</strong></td>';
      echo '<td>';
      var_export($php === $da);
      echo '</td>';
      echo '<td>';
      var_export($php === $net);
      echo '</td>';
      echo '<td>';
      var_export($php === $one);
      echo '</td>';
      echo '<td>';
      var_export($php === $zero);
      echo '</td>';
      echo '<td>';
      var_export($php === $first);
      echo '</td>';
      echo '<td>';
      var_export($php === $odin);
      echo '</td>';
      echo '<td>';
      var_export($php === $null);
      echo '<td>';
      var_export($php === $php);
      echo '</td>';
      echo '</td>';
      ?>
      </tbody>
      </table>
      <div class="conclusion">
            <strong>Вывод:</strong><br>
            <span>Задача 1</span><br>
            <i><b>!A</b> - Истина, если <b>A</b> не равна <b>true</b>.</i><br>
            <i><b>A || B</b> - Истина, если хотя бы одна из <b>A</b> и <b>B</b> равна <b>true</b>.</i><br>
            <i><b>A && B</b> - Истина, если <b>A</b> и <b>B</b> равны <b>true</b>.</i><br>
            <i><b>A xor B</b> - Истина, если одна из <b>A</b> и <b>B</b> равна <b>true</b>, но не обе.</i><br><br>
            <span>Задача 2</span><br>
            <i>При нестрогом сравнении оператор осуществляет приведение между двумя различными типами, если они различаются. То есть он сравнивает значение после преобразования типов.</i><br>
            <i>При строгом сравнении оператор вернет true, только если оба операнда имеют одинаковый тип и одно и то же значение.</i>
        </div><br>
      <style type="text/css"><!--
      table th {
          border: 1px solid white;
          padding: 3px 50px;
          color: white;
          background-color: gray ;

      }
      table td {
          border: 4px solid gray;
          text-align: center;
          background-color: grey ;
      }
        thead th 
       {font-size: inherit !important;}
       tbody td 
       {font-size: inherit !important;}
      
      .big-table {
          overflow: auto;
          position: relative;
      }
      .big-table table {
          vertical-align: top;
          overflow-x: auto;
          white-space: nowrap;
          -webkit-overflow-scrolling: touch;
      }
      --></style>
      </div>
</body>
</html>