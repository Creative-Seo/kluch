<?php $title = 'Доска обрезная - цены, продажа обрезной доски со склада во Владимире'; ?>
<?php $description = 'Предлагаем обрезную доску от производителя во Владимире! Высочайшее качество продукции, приятная цена от 6200 руб и оперативная доставка!'; ?>
<?php $keywords = 'доска обрезная, обрезная доска, доска обрезная цена, доска обрезная брус, доска обрезная лиственница, доска обрезная сухая, доска обрезная стоимость'; ?>
<?php $breadcrumb = 'Доска обрезная'; ?>
<?php $canonical = '/doska-obreznaya/'; ?>
<?php include("../blocks/meta.php"); ?>
<?php include("../blocks/header.php"); ?>
<?php include("../blocks/breadcrumbs.php"); ?>
<?php include("../pilomaterialyi/array.php"); ?>

<div class="container">
  <div class="row">
    <h1>Доска обрезная во Владимире</h1>
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
    <div class="table-responsive">
<table class="table table-bordered">
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
if (strrpos($row['name'],'ДОСКА ОБРЕЗНАЯ') !== false) {?>
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
<p>Обрезная доска - пиломатериал различных сечений, с отсутствием или минимальным обзолом. Мы производим обрезную доску из качественной древесины хвойных пород- сосны и ели.</p>
<p>Обрезная доска благодаря своей дешевизне и отличным техническим свойствам является одним из наиболее востребованных пиломатериалов, применяемых в строительстве, мебельном производстве, судостроении, производстве.</p>
<p>В соответствии с ГОСТ 6486-86 существуют 5 сортов обрезной доски: отборный, первый, второй, третий, четвёртый.</p>
<p>Современное оборудование позволяет нам выпускать обрезную доску, отвечающую следующим параметрам:</p>
<ul>
	<li>прочность;</li>
	<li>высокий срок службы;</li>
	<li>точные размеры;</li>
	<li>удобство обработки и монтажа;</li>
	<li>привлекательный вид;</li>
	<li>экологичность;</li>
	<li>хорошие теплоизоляционные качества.</li>
</ul>
<p>Такие преимущества нашей продукции делают ее чрезвычайно востребованной. Пожалуй, нет другого пиломатериала со столь внушительным спектром применения в строительстве.</p>
<h2>Назначение обрезной доски</h2>
<ul>
	<li>изготовление ограждений и лестниц;</li>
	<li>производство опалубок и мебели;</li>
	<li>укладка черновых полов;</li>
	<li>строительство каркасных конструкций;</li>
	<li>создание обрешетки под кровлю, фасадную облицовку;</li>
	<li>возведение построек любого назначения;</li>
	<li>дальнейшая переработка с целью изготовления погонажа.</li>
</ul>
<h2>Особенности выбора пиломатериалов</h2>
<p>Покупая обрезную доску в нашей компании, четко сформулируйте, в каких работах вы будете ее применять. Это поможет вам подобрать именно такое изделие, которое наилучшим образом справится со своими задачами и не подведет. </p>
<p>При выборе доски важно учитывать сорт древесины, типоразмеры, уровень влажности материала.</p>
<p>Например, если вам нужен материал для изготовления забора или опалубки, выбирайте доску толщиной 22-25 мм 2-4 сорта. Чтобы сделать обрешетку под кровельное покрытие или настелить черновые полы, нужна доска тех же сортов, но толщиной от 30 см и более. Доска, предназначенная для чистовых работ, совершенно не имеет обзола, поэтому ее качество соответствует 1 сорту (или 0 - отборному).</p>
<p>Чтобы подробнее узнать о применении, выборе и условиях доставки обрезной доски, пообщайтесь с нашими компетентными специалистами. А приобрести обрезную доску любого сорта и любых типоразмеров вы сможете прямо сейчас. Вам достаточно оставить свое сообщение в соответствующем окошке, либо позвонить на наш телефон.</p>
</div>
  </div>
</div>    

<?php include("../blocks/footer.php"); ?>