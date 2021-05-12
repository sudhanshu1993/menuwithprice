@extends('layouts.main')
@section('content')


<div class="content">
<div class="main">

<div class="bread-crumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
<a itemprop="item" href="https://www.menuwithprice.com/"><i itemprop="name">Menu With Price</i></a>
<meta itemprop="position" content="1">
</span>
<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
<a href="https://www.menuwithprice.com/nutrition/" itemprop="item"><i itemprop="name">Nutrition</i></a>
<meta itemprop="position" content="2">
</span><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
<a href="https://www.menuwithprice.com/nutrition/applebees/" itemprop="item"><i itemprop="name">Applebee's</i></a>
<meta itemprop="position" content="3">
</span><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
<a href="https://www.menuwithprice.com/nutrition/applebees/2949/" itemprop="item"><i itemprop="name">Add American Cheese Nutrition Facts</i></a>
<meta itemprop="position" content="4">
</span> </div>

<h1 style="color:blue;">Add American Cheese Nutrition Calories Facts</h1>
<div class="ads ads-top"><div>
<style type="text/css">
.mwp_ads_1 { width: 100%; height: 252px; }
@media (min-width:768px) { .mwp_ads_1 { width: 100%; height: 100px; } }
</style>
<ins class="adsbygoogle mwp_ads_1" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="8669735678"></ins>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="d1bbf26986d080ac8517ce17-text/javascript"></script>
<script type="d1bbf26986d080ac8517ce17-text/javascript">
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div>

<div class="brand">
<a class="brand-logo" href="https://www.menuwithprice.com/nutrition/applebees/">
<img src="{{asset('user/front_end/images/brand_logo/applebees.png')}}" alt="Applebee's nutrition">
</a> <div class="nutition_list">
<label>Add American Cheese: <span>150 Calories</span></label>
 </div>
</div>

<div class="ads"><div style="text-align:center;">
<style type="text/css">
.mwp_ads_2 { width: 100%; height: 250px; }
@media (min-width:336px) { .mwp_ads_2 { width: 100%; height: 280px; } }
@media (min-width:768px) { .mwp_ads_2 { width: 100%; height: 100px; } }
</style>

<ins class="adsbygoogle mwp_ads_2" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="4099935279"></ins>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="d1bbf26986d080ac8517ce17-text/javascript"></script>
<script type="d1bbf26986d080ac8517ce17-text/javascript">
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div>

<div class="store_facts">

<div class="nutrition" style="width:100%;" >
<dl >
<dt>Nutrition Facts</dt>
<dd class="dd_td">Add American Cheese</dd>
 <dd class="dd_size">Serving Size: <label>1</label> <label>serving</label></dd> <dd>
<ul>
<li>Amount Per Serving</li>
<li><span>Calories from Fat 110</span>Calories 150</li>
<li class="li_daily"><span><b>% Daily Value</b></span></li>
<li><span><b>18</b>%</span><b>Total Fat</b> 12g</li>
<li class="li"><span><b>35</b>%</span>Saturated Fat 7g</li>
<li class="li">Trans Fat 0g</li>
<li><span><b>8</b>%</span><b>Cholesterol</b> 25mg</li>
<li><span><b>20</b>%</span><b>Sodium</b> 480mg</li>
<li><span><b>1</b>%</span><b>Total Carbohydrates</b> 2g</li>
<li class="li"><span><b>0</b>%</span>Dietary Fiber 0g</li>
<li class="li">Sugars 1g</li>
<li><b>Protein</b> 8g</li>
</ul>
</dd>
<dd class="dd">* Percent Daily Values are based on a 2000 calorie diet.</dd>
</dl>
</div>


<div class="store_calories" style="width:100%;">
<div class="source">
<div class="source_tit">Source of Calories</div>
<div id="piechart" style="width: 100%; height: 314px;margin-top:8%">
</div>
<div class="nutition">* Powered by <img src="{{asset('user/front_end/images/nutritionix_logo_250px.png')}}" alt="source of calories"></div>
</div>
<script type="d1bbf26986d080ac8517ce17-text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="d1bbf26986d080ac8517ce17-text/javascript">
						google.charts.load('current', {'packages':['corechart']});
						google.charts.setOnLoadCallback(drawChart);
						function drawChart() {
							var data = google.visualization.arrayToDataTable([
										['Task', 'Source of Calories'],
										['Protein', 21],
										['Carbs',  5],
										['Fat',    72]
									]);
							var options = {
								fontSize:13,
								slices: {
									0: { color: '#00a448' },
									1: { color: '#f0ab00' },
									2: { color: '#ec6a63' },
								},
								legend:{
									position: 'bottom', textStyle: {color: '#000', fontSize: 13}
								}
							};
							var chart = new google.visualization.PieChart(document.getElementById('piechart'));
							chart.draw(data, options);
						}
				    </script>
</div>

</div>



<div class="ads ads-bottom"><div>
<style type="text/css">
.mwp_ads_3 { width: 100%; height: 250px; }
@media (min-width:336px) { .mwp_ads_3 { width: 100%; height: 280px; } }
@media (min-width:768px) { .mwp_ads_3 { width: 100%; height: 100px; } }
</style>

<ins class="adsbygoogle mwp_ads_3" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="1006868077"></ins>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="d1bbf26986d080ac8517ce17-text/javascript"></script>
<script type="d1bbf26986d080ac8517ce17-text/javascript">
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div>

<h2 style="color:blue;">Related food from Applebee's</h2>
<ul class="menu-list state_list_food">
<li><a href="https://www.menuwithprice.com/nutrition/applebees/2953/" style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">12 oz. Ribeye Steak without sides</a></li><li><a href="https://www.menuwithprice.com/nutrition/applebees/2957/" style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">9 oz. House Sirloin Steak without sides</a></li><li><a href="https://www.menuwithprice.com/nutrition/applebees/2966/" style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">4-Cheese Mac & Cheese with Honey Pepper Chicken Tenders</a></li><li><a href="https://www.menuwithprice.com/nutrition/applebees/2975/" style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">Add Cheddar Cheese</a></li><li><a href="https://www.menuwithprice.com/nutrition/applebees/2977/" style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">7 oz. House Sirloin Steak without sides</a></li><li><a href="https://www.menuwithprice.com/nutrition/applebees/2980/" style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">12 oz. New York Strip Steak without sides</a></li><li><a href="https://www.menuwithprice.com/nutrition/applebees/2982/" style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">Add Bacon</a></li><li><a href="https://www.menuwithprice.com/nutrition/applebees/2993/" style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">Add Swiss Cheese</a></li><li><a href="https://www.menuwithprice.com/nutrition/applebees/2996/" style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">Appetizer Crosscut Ribs Sauce, Honey BBQ</a></li><li><a href="https://www.menuwithprice.com/nutrition/applebees/3004/" style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">American BLT Sandwich without sides</a></li> </ul>

</div>

</div>



@endsection