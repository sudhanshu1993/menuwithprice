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
    <a href="index.htm" itemprop="item"><i itemprop="name">Cuisine</i></a>
    <meta itemprop="position" content="2">
    </span> </div>
    
    <h1 style="color: blue;">All Cuisine Restaurants in United States</h1>
    <div class="ads ads-top"><div>
    <style type="text/css">
    .mwp_ads_1 { width: 100%; height: 252px; }
    @media (min-width:768px) { .mwp_ads_1 { width: 100%; height: 100px; } }
    </style>
    <ins class="adsbygoogle mwp_ads_1" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="8669735678"></ins>
    <script async="" src="../pagead/js/f.txt" type="a2d44d9726e206fdbb8cb0eb-text/javascript"></script>
    <script type="a2d44d9726e206fdbb8cb0eb-text/javascript">
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </div>
    </div>
    <h2 style="color: blue;">Cuisine List</h2>
    <ul class="menu-list category-menu">
	@foreach($data as $key => $value)
	<li><a href="{{
		Str::after($key,'https://www.menuwithprice.com') }}" style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">{{ $value }}</a></li>
	@endforeach
</ul>
    
    <div class="ads ads-center"><div style="text-align:center;">
    <style type="text/css">
    .mwp_ads_2 { width: 100%; height: 250px; }
    @media (min-width:336px) { .mwp_ads_2 { width: 100%; height: 280px; } }
    @media (min-width:768px) { .mwp_ads_2 { width: 100%; height: 100px; } }
    </style>
    
    <ins class="adsbygoogle mwp_ads_2" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="4099935279"></ins>
    <script async="" src="../pagead/js/f.txt" type="a2d44d9726e206fdbb8cb0eb-text/javascript"></script>
    <script type="a2d44d9726e206fdbb8cb0eb-text/javascript">
    (adsbygoogle = window.adsbygoogle || []).push({});
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
    <script async="" src="../pagead/js/f.txt" type="a2d44d9726e206fdbb8cb0eb-text/javascript"></script>
    <script type="a2d44d9726e206fdbb8cb0eb-text/javascript">
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </div>
    </div>
    
    </div>
    </div>
    
@endsection