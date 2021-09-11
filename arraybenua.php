<?php
$negara0 = array(
    array('indonesia','bandung','jakarta','surabaya','medan','palembang'),
    array('malaysia','Kuala Lumpur','Kelang','Johor Bahru','Ipoh','Petaling Jaya'),
    array('singapura','jurong west','seletar','sengkang','tampines','jurong east'));?>
<?php
$negara1 = array(
    array('nigeria','lagos','abuja','ibadan','benin city','warri'),
    array('gahna','kumasi','accra','elmina','tamale','keta'),
    array('kenya','nairobi','mombasa','kisumu','nyeri','lamu'));
?>
<?php
$negara2 = array(
    array('New South Wales','Sydney ','Albury','Armidale','Bathurst','Cessnock'),
    array('tasmania','brisbane ','Bundaberg','Cairns','Charters Towers','Gladstone'),
    array('Queensland','Adelaide ','Mount Gambier','Murray Bridge','Port Augusta','Port Pirie'));?>

<?php
$negara3 = array(
    array('italia','genova','roma','perugia','sanremo','modica'),
    array('jerman','berlin','hamburg','dresden','duisburg','bonn'),
    array('prancis','paris','lyon','avignon','marseille','toulouse'));?>

<ul><?php
foreach($negara0 as $key => $value): ?>
    <li>benua asia negara <?= $value[0] ?> kota kota nya <?=$value[1].
    ', '.$value[2].', '.$value[3].', '.$value[4].', '.$value[5]?></li>
    <?php endforeach ?>
</ul>

<ul><?php
foreach($negara1 as $key => $value): ?>
    <li>benua afrika  negara <?= $value[0] ?> kota kota nya <?=$value[1].
    ', '.$value[2].', '.$value[3].', '.$value[4].', '.$value[5]?></li>
    <?php endforeach ?>
</ul>

<ul><?php
foreach($negara2 as $key => $value): ?>
    <li>benua australia  negara <?= $value[0] ?> kota kota nya <?=$value[1].
    ', '.$value[2].', '.$value[3].', '.$value[4].', '.$value[5]?></li>
    <?php endforeach ?></ul>


<ul><?php
foreach($negara3 as $key => $value): ?>
    <li>benua eropa  negara <?= $value[0] ?> kota kota nya <?=$value[1].
    ', '.$value[2].', '.$value[3].', '.$value[4].', '.$value[5]?></li>
    <?php endforeach ?>
</ul>