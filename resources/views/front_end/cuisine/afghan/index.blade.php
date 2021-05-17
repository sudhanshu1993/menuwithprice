@extends('layouts.main')
@section('content')
    
<div class="content">
    <div class="main">
    
    <div class="bread-crumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    @foreach ($city as $key => $value)
    
    <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="{{
                    Str::after($key,'https://www.menuwithprice.com') }}"><i itemprop="name">{{$value}}</i></a>
                <meta itemprop="position" content="{{$loop->iteration}}">
            </span>
           
                @endforeach
    
    </div>
    
    <h1 style="color:blue;">@foreach($city as $key => $value)
	{{$value}}
	@endforeach
     Restaurants Near Me</h1>
    <div class="ads ads-top"><div>
    <style type="text/css">
    .mwp_ads_1 { width: 100%; height: 252px; }
    @media (min-width:768px) { .mwp_ads_1 { width: 100%; height: 100px; } }
    </style>
    <ins class="adsbygoogle mwp_ads_1" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="8669735678"></ins>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="a8862c5ee030ec096b6297ad-text/javascript"></script>
    <script type="a8862c5ee030ec096b6297ad-text/javascript">
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </div>
    </div>
    <div class="category">
    @foreach ($cat as $key => $value)
                                {!! str_replace('https://www.menuwithprice.com', ' ', $value) !!}
                            @endforeach

    </div>
    <ul class="menu-list category-menu">
	@foreach($data as $key => $value)
	<li><a href="{{
		Str::after($key,'https://www.menuwithprice.com') }}" style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">{{ $value }}</a></li>
	@endforeach
    </ul>
    <div class="ads ads-bottom"><div>
    <style type="text/css">
    .mwp_ads_3 { width: 100%; height: 250px; }
    @media (min-width:336px) { .mwp_ads_3 { width: 100%; height: 280px; } }
    @media (min-width:768px) { .mwp_ads_3 { width: 100%; height: 100px; } }
    </style>
    
    <ins class="adsbygoogle mwp_ads_3" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="1006868077"></ins>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="a8862c5ee030ec096b6297ad-text/javascript"></script>
    <script type="a8862c5ee030ec096b6297ad-text/javascript">
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </div>
    </div>
    
    
    </div>
    </div>
@endsection
