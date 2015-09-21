<?php $meta_container = '<link rel="stylesheet" href="/css/jquery.fancybox.css"><link rel="stylesheet" href="/js/helpers/jquery.fancybox-thumbs.css">'; ?>
<?php $footer_block = '<script src="/js/jquery.fancybox.js"></script><script src="/js/jquery.mousewheel-3.0.6.pack.js"></script><script src="/js/helpers/jquery.fancybox-thumbs.js"></script> 
<script type="text/javascript">
$(document).ready(function() {
	$(".fancybox-thumb").fancybox({
		prevEffect	: \'none\',
		nextEffect	: \'none\',
		showNavArrows : \'true\',
		helpers	: {
			title	: {
				type: \'outside\'
			},
			thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});
});
</script>
'; ?>
<?php $title = 'Отзывы покупателей о компании Ключ 585'; ?>
<?php $description = 'Отзывы покупателей о нашей компании'; ?>
<?php $keywords = ''; ?>
<?php $breadcrumb = 'Отзывы'; ?>
<?php $canonical = '/otzyivyi-pokupateley/'; ?>
<?php include("../blocks/meta.php"); ?>
<?php include("../blocks/header.php"); ?>
<?php include("../blocks/breadcrumbs.php"); ?>
<div class="container">
    <h1>Отзывы покупателей</h1>
		<div class="gallery2">
<?php 
$host = $_SERVER['HTTP_HOST'];
$self = explode("/", $_SERVER['PHP_SELF']);
define('HTTP_URL', 'http://'.$host.'/'.$self[1].'/img/');
$path = $_SERVER['DOCUMENT_ROOT'].'/'.$self[1].'/img/';
$images = scandir($path);
if (false !== $images) {
    $imgarray = preg_grep('/\\.(?:jpe?g)$/', $images);
	foreach($imgarray as $row) { 
?>  
			<a class="fancybox-thumb" rel="gallery1" href="<?php echo HTTP_URL,htmlspecialchars(urlencode($row));?>">
			<img src="<?php echo HTTP_URL,htmlspecialchars(urlencode($row));?>" width="100" class="img-responsive" alt=""/></a>
<?php }} ?>
		</div>
<div class="row">
    <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12">
     <div class="bs-callout bs-callout-info">
      <p>Постоянно покупаю пиломатериал в «ключе» в РТС, удобно по дороге в сад. Качество и выбор хороший. Спасибо Антону и Виктору за погрузку!</p>
      <p>Игорь Васильевич 09.09.2014 в 18:31</p>
     </div>

     <div class="bs-callout bs-callout-danger">
      <p>Спасибо! Сделали на совесть и качественно. Баня 3х4м в снт Южный</p>
      <p>Казаркина Зинаида Алексеевна 09.09.2014 в 12:40</p>
     </div>


     <div class="bs-callout bs-callout-info ">
      <p>Работа выполнена согласно договору. Претензий к исполнению не имею. Всем довольны.Дом 6х4 с мансардой №5 в Лакинске</p>
      <p>Адамов Александр Константинович 30.07.2014 в 18:11</p>
     </div>

     <div class="bs-callout bs-callout-danger">
      <p>Благодарю бригаду за высокий профессионализм. г. Владимир, д. Суромна, уч.112</p>
      <p>Веселков А.В. 24.07.2014 в 13:22</p>
     </div>
     
     <div class="bs-callout bs-callout-info">
      <p>работа выполнена быстро и качественно. хозблок 2х4, сп Сновицы,уч.72</p>
      <p>Глинкина Елизавета Борисовна 22.07.2014 в 16:56</p>
     </div>
     
     <div class="bs-callout bs-callout-danger">
      <p>Бригада работала отлично. Особая благодарность бригадиру Кушинову С.И. за отлично поставленную работу. Дом 6х6м в Залесье.</p>
      <p>Решетова В.Н, 18.07.2014 в 10:21</p>
     </div>
          
     <div class="bs-callout bs-callout-info">
      <p>Большое спасибо, мы остались очень довольные и счастливые. За все спасибо. 3*3 с навесом в СТ Полёт в р-не Аэродрома</p>
      <p>Наталья Орлова 15.07.2014 в 20:18</p>
     </div>
     
     <div class="bs-callout bs-callout-danger">
      <p>Работа выполнена в обговоренном договором сроке с хорошим качеством. Домик 2х3м.г. Владимир</p>
      <p>Беляев В.И. 25.06.2014 в 12:08</p>
     </div>
          
     <div class="bs-callout bs-callout-info">
      <p>Спасибо огромное! Все сделали качественно и быстро, побольше таких специалистов. Домик 3х4, в Суходоле.</p>
      <p>Павлюк Татьяна 24.06.2014 в 10:07</p>
     </div>
     
     <div class="bs-callout bs-callout-danger">
      <p>Отличное качество и скорость. Договор №46.Домик 3х3,Содышка</p>
      <p>Гордничева Нина Фирсовна 21.06.2014 в 19:04</p>
     </div>
          
     <div class="bs-callout bs-callout-info">
      <p>Большое спасибо!!6х4 с мансардным этажем. Вяткино снт Ивушка</p>
      <p>Маринина Елена  3.06.2014 в 13:14</p>
     </div>
     
     <div class="bs-callout bs-callout-danger">
      <p>Приятно удивлен качеством и ценой половой доски и вагонки. Качество на уровне. Всем рекомендую не пожалеете</p>
      <p>Степан 11.05.2014 в 19:32</p>
     </div>
          
     <div class="bs-callout bs-callout-info">
      <p>Выражаю благодарность фирме «Ключ 585″ за профессионализм в работе и оперативность в исполнении заказываемых услуг</p>
      <p>Петухов А. 02.08.2013 в 14:28</p>
     </div>
     
     <div class="bs-callout bs-callout-danger">
      <p>Огромное спасибо коллективу «Ключ585″ за отличный домик 6*4м с верандой в с. Вышеславское Суздальского р-на.</p>
      <p>Иванова Г.В. 21.06.2013 в 13:31</p>
     </div>
          
     <div class="bs-callout bs-callout-info">
      <p>Выражаю благодарность за хорошо сделанную работу по постройке дачного домика 6*4м с верандой в с.Иворово Юрьев-Польского р-на. Отдельное спасибо бригаде Алиева Р.</p>
      <p>Соболев Н.В. 15.08.2012 в 14:31</p>
     </div>
     
     <div class="bs-callout bs-callout-danger">
      <p>Дом получился хороший, ребята работали замечательно и быстро. Отделали все прекрасно, но что касается проекта-мансарда получилась очень низкая, по-моему на фото стены боковые были гораздо выше чем в исполнении</p>
      <p>Влох Л.Г. 04.07.2012 в 15:44</p>
     </div>
          
     <div class="bs-callout bs-callout-info">
      <p>Я, Тимофеева Ольга Александровна, выражаю благодарность за оперативно и качественно построенный дачный домик в д. Мызино Судогодской Ривьеры, уч. №84.</p>
      <p>Тимофеева О.А. 03.07.2012 в 10:27</p>
     </div>
     
     <div class="bs-callout bs-callout-danger">
      <p>Спасибо за построенный дом 6*4м из бруса на моем участке в снт. Ресторатор1. Особая благодарность бригаде Куприянова В.</p>
      <p>Уханова О.А. 28.06.2012 в 16:29</p>
     </div>
          
     <div class="bs-callout bs-callout-info">
      <p>Огромное спасибо за отличную работу! Теперь я счастливая обладательница дачного домика 6*4м с перегородкой и навесом, находящегося в д.Соколово Судогодского р-на.</p>
      <p>Киримиди И.А. 14.06.2012 в 11:11</p>
     </div>
     
     <div class="bs-callout bs-callout-danger">
      <p>Искренне благодарю коллектив «Ключ 585″ за качественную и эффективную работу по монтажу садового домика 5*4м с верандой. Желаю Вам дальнейшего процветания, роста объемов заказов и надежных партнеров.</p>
      <p>Аксенова Г.А. 30.07.2011 в 17:50</p>
     </div>
          
     <div class="bs-callout bs-callout-info">
      <p>Приношу свою благодарность за добросовестную и быструю работу по установке садового домика на моем участке в садовом товариществе п.Боголюбово «Южный-2″ уч.24 строительной фирме «Ключ 585″ и в частности бригаде строителей (бригадир Будаков М.В.)</p>
      <p>Сергеева О.В. 15.07.2011 в 16:25</p>
     </div>
     
     <div class="bs-callout bs-callout-danger">
      <p>Благодарю за хорошо проделанную работу по строительству дачного дома 6*6м с верандой в сан. им. Ленина, Пенкино.</p>
      <p>Петров Ю.С. 21.06.2011 в 13:31</p>
     </div>
     
    </div><!--end-->
  </div>
</div>
<?php include("../blocks/footer.php"); ?>