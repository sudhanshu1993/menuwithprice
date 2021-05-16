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
    
    <h1 style="color:blue;"><span style="color:blue;">@foreach ($titles as $key => $value)
                                {!! $value !!}
                            @endforeach
</span> Prices in Birmingham, AL 35235</h1>
    
    
    <div class="ads ads-top"><div>
    <style type="text/css">
    .mwp_ads_1 { width: 100%; height: 252px; }
    @media (min-width:768px) { .mwp_ads_1 { width: 100%; height: 100px; } }
    </style>
    <ins class="adsbygoogle mwp_ads_1" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="8669735678"></ins>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="441593d65f4abd6a8c9a0d9c-text/javascript"></script>
    <script type="441593d65f4abd6a8c9a0d9c-text/javascript">
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </div>
    </div>
    
    <div class="brand brct-detail">
    <a class="brand-logo" href="#"><img
                        src="{{ asset('https://cdn.menuwithprice.com/Images/brand_logo/' . $id . '.png') }}"
                        alt="{{$id}}"></a>
    <div class="brdt-list">
    @foreach ($datam as $key => $value)
                                {!! str_replace('https://www.menuwithprice.com', ' ', $value) !!}
                            @endforeach

    </div>
    </div>
    
    
    <div class="hours">
    @foreach ($datam1 as $key => $value)
                                {!! str_replace('https://www.menuwithprice.com', ' ', $value) !!}
                            @endforeach

    </div>
    
    </div>
    
    <div class="prices food-detail-peice">
    @foreach ($datam12 as $key => $value)
                                {!! str_replace('https://www.menuwithprice.com', ' ', $value) !!}
                            @endforeach
 
    </div>
    
    <div class="ads"><div>
    </div>
    </div> 
    
    </div>
@endsection