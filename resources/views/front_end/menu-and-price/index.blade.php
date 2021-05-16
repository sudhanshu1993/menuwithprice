@extends('layouts.main')
 @section('content')
     
  
<div class="content" >
    <div class="main">
        <div class="bread-crumbs" itemscope="">
            <span itemprop="itemListElement" itemscope="" >
                <a itemprop="item" href="/"><i itemprop="name">Menu With Price</i></a>
                    <meta itemprop="position" content="1">
            </span> 
            <span itemprop="itemListElement" itemscope="">
                <a href="" itemprop="item"><i itemprop="name">Menu</i></a>
                    <meta itemprop="position" content="2">
            </span> 
        </div>
        <h1 style="color:blue">All Menus and Prices</h1>
        <div class="ads ads-top"><div>
        <style type="text/css">
            .mwp_ads_1 { width: 100%; height: 252px; }
                @media (min-width:768px) { .mwp_ads_1 { width: 100%; height: 100px; } }
        </style>
        <ins class="adsbygoogle mwp_ads_1" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="8669735678"></ins>
        <script async="" src="../pagead/js/f.txt" type="709e93e5d3cb4e4d44bcd99c-text/javascript"></script>
        <script type="709e93e5d3cb4e4d44bcd99c-text/javascript">
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
</div>
<div class="category">
<a href="{{url('menu-and-price')}}" class="active"  style="background-color:blue;">Popular Brands</a>
<a href="{{url('menu-and-price/a')}}"  style="background-color:blue;">A</a><a href="{{url('menu-and-price/b')}} "  style="background-color:blue;">B</a><a href="{{url('menu-and-price/c')}}"  style="background-color:blue;">C</a><a href="{{url('menu-and-price/d')}}"  style="background-color:blue;">D</a><a href="{{url('menu-and-price/e')}}"  style="background-color:blue;">E</a><a href="{{url('menu-and-price/f')}}"  style="background-color:blue;">F</a><a href="{{url('menu-and-price/g')}}"  style="background-color:blue;">G</a><a href="{{url('menu-and-price/h')}}"  style="background-color:blue;">H</a><a href="{{url('menu-and-price/i')}}"  style="background-color:blue;">I</a><a href="{{url('menu-and-price/j')}}"  style="background-color:blue;">J</a><a href="{{url('menu-and-price/k')}} "  style="background-color:blue;">K</a><a href="{{url('menu-and-price/l')}}"  style="background-color:blue;">L</a><a href="{{url('menu-and-price/m')}}"  style="background-color:blue;">M</a><a href="{{url('menu-and-price/n')}}"  style="background-color:blue;">N</a><a href="{{url('menu-and-price/o')}} "  style="background-color:blue;">O</a><a href="{{url('menu-and-price/p')}}"  style="background-color:blue;">P</a><a href="{{url('menu-and-price/q')}}"  style="background-color:blue;">Q</a><a href="{{url('menu-and-price/r')}}"  style="background-color:blue;">R</a><a href="{{url('menu-and-price/s')}}"  style="background-color:blue;">S</a><a href="{{url('menu-and-price/t')}} "  style="background-color:blue;">T</a><a href="{{url('menu-and-price/u')}}"  style="background-color:blue;">U</a><a href="{{url('menu-and-price/v')}}"  style="background-color:blue;">V</a><a href="{{url('menu-and-price/w')}}"  style="background-color:blue;">W</a><a href="{{url('menu-and-price/y')}} "  style="background-color:blue;">Y</a><a href="{{url('menu-and-price/z')}}"  style="background-color:blue;">Z</a><a href="{{url('menu-and-price/1')}}"  style="background-color:blue;">#</a> </div>

<ul class="menu-list category-menu">
	@foreach($data as $key => $value)
	<li><a href="{{
		Str::after($key,'https://www.menuwithprice.com') }}" style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">{{ $value }}</a></li>
	@endforeach
    </ul>
<div class="ads ads-center">
    <div style="text-align:center;">
        <style type="text/css">
            .mwp_ads_2 { width: 100%; height: 250px; }
                @media (min-width:336px) { .mwp_ads_2 { width: 100%; height: 280px; } }
                @media (min-width:768px) { .mwp_ads_2 { width: 100%; height: 100px; } }
        </style>
        <ins class="adsbygoogle mwp_ads_2" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="4099935279"></ins>
        <script async="" src="../pagead/js/f.txt" type="709e93e5d3cb4e4d44bcd99c-text/javascript"></script>
        <script type="709e93e5d3cb4e4d44bcd99c-text/javascript">
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
    <script async="" src="../pagead/js/f.txt" type="709e93e5d3cb4e4d44bcd99c-text/javascript"></script>
    <script type="709e93e5d3cb4e4d44bcd99c-text/javascript">
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>
</div>


</div>
</div>
@endsection  