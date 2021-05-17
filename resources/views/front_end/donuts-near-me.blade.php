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
                <a href="/donuts-near-me" itemprop="item"><i itemprop="name">Donuts Near Me</i></a>
                    <meta itemprop="position" content="2">
            </span> 
        </div>
        <h1 style="color: blue;">Donuts Near Me</h1>
    </div>
</div>
<div class="brand-info brand classify-food-intro">
    <a href="#" class="brand-logo clf-logo"><img src="{{ asset('user/front_end/images/food_near_me/donuts-near-me.png')}}" alt="Pizza near me"></a>
        <p> 
        Donuts are definitely one of the most popular kinds of food in the U.S. Many Americans would choose a soft sugar-coated donut with a cup of coffee to start the day. And there is even a festival for it; it's called National Doughnut Day. There were originally four classic types of donuts: plain cake, jelly, yeast-raised, and cruller. As its popularity grew, many stores started to acquire new tastes with different decorations to make their unique flavors. Till today, donuts have been covered with different colorful toppings, such as cinnamon, sugar, coconut, and peanuts, have been formed in different shapes, and have been filled with all kinds of cream, jam, or even cheese and bacon to attract people's attention.
        </p> 
</div>




@endsection