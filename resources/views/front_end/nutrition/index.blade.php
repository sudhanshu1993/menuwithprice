@extends('layouts.main')
@section('content')
<div class="content" >
	<div class="main">

<div class="bread-crumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
<span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
<a itemprop="item" href="../index.htm"><i itemprop="name">Menu With Price</i></a>
<meta itemprop="position" content="1">
</span>
<span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
<a href="index.htm" itemprop="item"><i itemprop="name">Nutrition</i></a>
<meta itemprop="position" content="2">
</span> </div>

<h1 style="color:blue;">Food Nutrition Value Calculator</h1>
<div class="ads ads-top"><div>
<style type="text/css">
.mwp_ads_1 { width: 100%; height: 252px; }
@media (min-width:768px) { .mwp_ads_1 { width: 100%; height: 100px; } }
</style>
<ins class="adsbygoogle mwp_ads_1" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="8669735678"></ins>
<script async="" src="../pagead/js/f.txt" type="8d8b93a42c3da1e79537afe6-text/javascript"></script>
<script type="8d8b93a42c3da1e79537afe6-text/javascript">
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div>

<div class="category">
<a href="index.htm" class="active"  style="background-color:blue;">Popular Brands</a>
<a href="a/index.htm"  style="background-color:blue;">A</a><a href="b/index.htm"  style="background-color:blue;">B</a><a href="c/index.htm"  style="background-color:blue;">C</a><a href="d/index.htm"  style="background-color:blue;">D</a><a href="e/index.htm"  style="background-color:blue;">E</a><a href="f/index.htm"  style="background-color:blue;">F</a><a href="g/index.htm"  style="background-color:blue;">G</a><a href="h/index.htm"  style="background-color:blue;">H</a><a href="i/index.htm"  style="background-color:blue;">I</a><a href="j/index.htm"  style="background-color:blue;">J</a><a href="k/index.htm"  style="background-color:blue;">K</a><a href="l/index.htm"  style="background-color:blue;">L</a><a href="m/index.htm"  style="background-color:blue;">M</a><a href="n/index.htm"  style="background-color:blue;">N</a><a href="o/index.htm"  style="background-color:blue;">O</a><a href="p/index.htm"  style="background-color:blue;">P</a><a href="q/index.htm"  style="background-color:blue;">Q</a><a href="r/index.htm"  style="background-color:blue;">R</a><a href="s/index.htm"  style="background-color:blue;">S</a><a href="t/index.htm"  style="background-color:blue;">T</a><a href="u/index.htm"  style="background-color:blue;">U</a><a href="v/index.htm"  style="background-color:blue;">V</a><a href="w/index.htm"  style="background-color:blue;">W</a><a href="y/index.htm"  style="background-color:blue;">Y</a><a href="z/index.htm"  style="background-color:blue;">Z</a><a href="1/index.htm"  style="background-color:blue;">#</a> </div>


<ul class="menu-list category-menu">
	@foreach($data as $key => $value)
	<li><a href="{{
		Str::after($key,'https://www.menuwithprice.com') }}" style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">{{ $value }}</a></li>
	@endforeach
</ul>
<

<div class="ads ads-bottom"><div>
<style type="text/css">
.mwp_ads_3 { width: 100%; height: 250px; }
@media (min-width:336px) { .mwp_ads_3 { width: 100%; height: 280px; } }
@media (min-width:768px) { .mwp_ads_3 { width: 100%; height: 100px; } }
</style>

<ins class="adsbygoogle mwp_ads_3" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="1006868077"></ins>
<script async="" src="../pagead/js/f.txt" type="8d8b93a42c3da1e79537afe6-text/javascript"></script>
<script type="8d8b93a42c3da1e79537afe6-text/javascript">
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div>


</div>
</div>
@endsection