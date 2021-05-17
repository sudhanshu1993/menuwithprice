@extends('layouts.main')
@section('content')
    
<div class="content">
    <div class="main tab-main">
    
    <div class="bread-crumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    @foreach ($city as $key => $value)
                <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="{{
                    Str::after($key,'https://www.menuwithprice.com') }}"><i itemprop="name">{{$value}}</i></a>
                <meta itemprop="position" content="{{$loop->iteration}}">
            </span>
           
                @endforeach
    </div>
    
    <div>
    <h1 style="color:blue;"><span style="color:blue;">@foreach($city as $key => $value)
    @if($loop->last)
	{{$value}}
    @endif
	@endforeach Restaurant</span> Prices and Locations Near Me</h1>
    </div>
    
    
    <div class="ads ads-top ads-brand"><div>
    <style type="text/css">
    .mwp_ads_1 { width: 100%; height: 252px; }
    @media (min-width:768px) { .mwp_ads_1 { width: 100%; height: 100px; } }
    </style>
    <ins class="adsbygoogle mwp_ads_1" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="8669735678"></ins>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="a783abe671d8eedd00de2d84-text/javascript"></script>
    <script type="a783abe671d8eedd00de2d84-text/javascript">
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </div>
    </div>
    
    <div class="brand">
    <a class="brand-logo" href="#"><img
                        src="{{ asset('https://cdn.menuwithprice.com/Images/brand_logo/' . $id . '.png') }}"
                        alt="{{$id}}"></a>
    
    </div>
    
    
    
    <div class="choose">
    <h2 style="color:blue;">Choose My State</h2>
    <input type="checkbox">
    <label class="label" style="background-color:blue;">
    <span class="more" >More</span>
    <span class="less" >Less</span>
    <span class="more-less"></span>
    </label>
    <div class="choose-list choose-state">
    @foreach($data as $key => $value)
	<a href="{{
		Str::after($key,'https://www.menuwithprice.com') }}">{{ $value }}</a>
	@endforeach
      </div>
    </div>
    
    <div class="ads"><div style="text-align:center;">
    <style type="text/css">
    .mwp_ads_2 { width: 100%; height: 250px; }
    @media (min-width:336px) { .mwp_ads_2 { width: 100%; height: 280px; } }
    @media (min-width:768px) { .mwp_ads_2 { width: 100%; height: 100px; } }
    </style>
    
    <ins class="adsbygoogle mwp_ads_2" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="4099935279"></ins>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="a783abe671d8eedd00de2d84-text/javascript"></script>
    <script type="a783abe671d8eedd00de2d84-text/javascript">
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </div>
    </div>
    
    <div class="prices-menu">
    <div class="menu-tab">
    <div class="menu-tab-l">
    <h2 style="color:blue;"> @foreach($city as $key => $value)
    @if($loop->last)
	{{$value}}
    @endif
	@endforeach Menu with Price</h2>
    </div>
    </div>
    <div class="price md-price" >
    <table class="prc-table" >

    @foreach ($datam as $key => $value)
                                {!! str_replace('https://www.menuwithprice.com', ' ', $value) !!}
                            @endforeach

    
    </table> 
    </div>
    </div>
     <div class="ads"><div>
    <style type="text/css">
    .mwp_ads_3 { width: 100%; height: 250px; }
    @media (min-width:336px) { .mwp_ads_3 { width: 100%; height: 280px; } }
    @media (min-width:768px) { .mwp_ads_3 { width: 100%; height: 100px; } }
    </style>
    
    <ins class="adsbygoogle mwp_ads_3" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="1006868077"></ins>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="a783abe671d8eedd00de2d84-text/javascript"></script>
    <script type="a783abe671d8eedd00de2d84-text/javascript">
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </div>
    </div>
    
    
    </div>
    
    </div>
@endsection
