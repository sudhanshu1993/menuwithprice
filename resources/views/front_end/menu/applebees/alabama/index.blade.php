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
    <a href="https://www.menuwithprice.com/menu-and-price/" itemprop="item"><i itemprop="name">Menu</i></a>
    <meta itemprop="position" content="2">
    </span><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <a href="https://www.menuwithprice.com/menu/applebees/" itemprop="item"><i itemprop="name">Applebee's Prices</i></a>
    <meta itemprop="position" content="3">
    </span><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <a href="https://www.menuwithprice.com/menu/applebees/alabama/" itemprop="item"><i itemprop="name">Alabama</i></a>
    <meta itemprop="position" content="4">
    </span> </div>
    
    <div>
    <h1 style="color:blue;">Applebee's Prices and Locations in Alabama</h1>
    </div>
    <div class="ads ads-top"><div>
    <style type="text/css">
    .mwp_ads_1 { width: 100%; height: 252px; }
    @media (min-width:768px) { .mwp_ads_1 { width: 100%; height: 100px; } }
    </style>
    <ins class="adsbygoogle mwp_ads_1" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="8669735678"></ins>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="a278af7793b6229f839967d5-text/javascript"></script>
    <script type="a278af7793b6229f839967d5-text/javascript">
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </div>
    </div>
    
    <div class="state">
    <h2 style="color:blue;">Select Your City in Alabama For Applebees Restaurant</h2>
    <ul class="menu-list">
        @foreach($data as $key => $value)
        <li><a href="{{
            Str::after($key,'https://www.menuwithprice.com') }}" style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">{{$value}}</a></li>
        @endforeach    
    </ul>    </div>
    
    <div class="ads"><div style="text-align:center;">
    <style type="text/css">
    .mwp_ads_2 { width: 100%; height: 250px; }
    @media (min-width:336px) { .mwp_ads_2 { width: 100%; height: 280px; } }
    @media (min-width:768px) { .mwp_ads_2 { width: 100%; height: 100px; } }
    </style>
    
    <ins class="adsbygoogle mwp_ads_2" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="4099935279"></ins>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="a278af7793b6229f839967d5-text/javascript"></script>
    <script type="a278af7793b6229f839967d5-text/javascript">
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </div>
    </div>
    
    
    
    
    </div>
    </div>
@endsection