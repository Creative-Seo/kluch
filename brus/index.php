<?php $title = 'Купить брус деревянный во Владимире цена'; ?>
<?php $description = 'Ключ 585 предлагает купить брус собственного производства во Владимире по доступной цене'; ?>
<?php $keywords = 'брус деревянный, цена'; ?>
<?php $breadcrumb = 'Брус'; ?>
<?php $canonical = '/brus/'; ?>
<?php include("../blocks/meta.php"); ?>
<?php include("../blocks/header.php"); ?>
<?php include("../blocks/breadcrumbs.php"); ?>
<?php include("../pilomaterialyi/array.php"); ?>

<div class="container">
  <div class="row">
    <h1>Брус</h1>
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
    <div class="table-responsive">
<table class="table table-bordered">
 <thead>
 <thead>
    <tr>
        <th rowspan="2">Наименование продукции</th>
        <th rowspan="2">Размеры, мм</th>
        <th colspan="2">Розничная цена</th>
    </tr>
    <tr>
        <th>руб./м.п.</th>
        <th>руб./м<sup>3</sup></th>
    </tr>
    </thead>
 <tbody>
<?php foreach ($price1 as $row) {
if ((strrpos($row['name'],'БРУС') !== false)&&(strrpos($row['name'],'БРУСОК') === false)) {?>
    <tr>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['a'];?></td>
        <td><?php echo $row['b'];?></td>
        <td><?php echo $row['c'];?></td>
    </tr>
<?php }} ?>
 </tbody>
</table>
</div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<h2>Свойства бруса</h2>
<p>Брус обладает практически всеми свойствами, присущими цельному бревну. Он тоже экологически чистый, теплый, долговечный. Но при этом имеет некоторые преимущества перед бревном. Благодаря своей квадратной или прямоугольной форме брус легче укладывается в венцы. А за счет идеально обработанной поверхности такой материал избавляет от необходимости обшивать стены.</p>
<p>Мы производим две разновидности бруса: брус естественной влажности и профилированный. В чем их отличия и особенности?</p>
<ol>
   <li>Цельный обрезной брус наиболее доступен, так как подвергается минимальной обработке. Он востребован при возведении домов, хозяйственных построек. Как правило, стены из такого бруса дают значительную усадку с образованием щелей, которые необходимо конопатить. А чтобы скрыть зазоры и улучшить внешний вид постройки из простого бруса, стены желательно обшить. Обычный брус в процессе усыхания меняет форму и размеры, поэтому для более качественного строительства имеет смысл рассмотреть другие варианты бруса.</li>
   <li>Профилированный брус - идеальный стройматериал, изготавливаемый на высокоточных станках и подвергаемый технологической сушке. Такой брус не дает существенной усадки, а при его укладке в стенах не остаются щели. На нижней стороне имеется продольное углубление, служащее для укладки межвенцового уплотнителя. Каждый брус плотно соединяется с соседними по принципу шип-паз, что делает стены полностью герметичными, непродуваемыми. Поверхность профилированного бруса гладко шлифуется и не нуждается в отделке.</li>
   <li>Клееный брус - высокотехнологичное изделие, получаемое путем склеивания отдельных ламелей (досок). Применяемый для этого клеящий состав соответствует европейским стандартам экологичности, поэтому клееный брус абсолютно безопасен для здоровья. Важнейшие преимущества такого бруса - повышенная прочность и стойкость к влаге, гниению, долговечность, точность размеров и формы профиля. Клееный брус почти не дает усадки, поэтому позволяет быстро вводить в эксплуатацию строящиеся здания. Стены из него получаются достаточно тонкие, но при этом не требуют утепления и отделки.</li>
</ol>
<p>
Для строительства дачных домов, бань, беседок мы рекомендуем профилированный брус
размером 45х135мм или 90х135мм. Строения из такого бруса обладают достаточной прочностью 
и не требуют внутренней и внешней отделки.
</p>
<p>Вы уже определили, какой брус подходит для вашей стройки? Тогда закажите доставку материала в любых количествах - для этого просто позвоните нам по телефону.</p>
</div>
  </div>
</div>    

<?php include("../blocks/footer.php"); ?>