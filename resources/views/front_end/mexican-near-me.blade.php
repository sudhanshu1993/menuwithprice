@extends('layouts.main')

@section('content')

<div class="content" >
    <div class="main">
        <div class="bread-crumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="/"><i itemprop="name">Menu With Price</i></a>
                    <meta itemprop="position" content="1">
            </span>
            <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a href="/mexican-near-me" itemprop="item"><i itemprop="name">Mexican Near Me</i></a>
                    <meta itemprop="position" content="2">
            </span> 
        </div>
        <h1 style="color: blue;">Maxican Near Me</h1>
    </div>
</div>
<div class="brand-info brand classify-food-intro">
    <a href="#" class="brand-logo clf-logo"><img src="{{ asset('user/front_end/images/food_near_me/mexican-near-me.png')}}" alt="Pizza near me"></a>
        <p> 
            If there is anything more attractive than Mexico's clear blue seas, and exotic culture, that must be the tasty and unique Mexican food. It is believed that Mexican food was derived from the Mayan Indians' food 2000 years ago and it has not changed much in history. Mexican cuisine is as complex as Chinese, French and Italian food and mostly, it uses ingredients native to Mexico to give the food authentic Mexican flavor. The top 10 Mexican food selected by bbcgoodfood.com are Chilaquiles, Pozole, Tacos al pastor, Tostadas, Chiles en nogada, Elote, Enchiladas, Mole, Guacamole, and Tamales.
        </p> 
</div>




@endsection