
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
                <a href="/seafood-near-me" itemprop="item"><i itemprop="name">Seafood Near Me</i></a>
                    <meta itemprop="position" content="2">
            </span> 
        </div>
        <h1 style="color: blue;">Seafood Near Me</h1>
    </div>
</div>
<div class="brand-info brand classify-food-intro">
    <a href="#" class="brand-logo clf-logo"><img src="{{ asset('user/front_end/images/food_near_me/seafood-near-me.png')}}" alt="Pizza near me"></a>
        <p> 
            A large amount of seafood is consumed every day in the world, and it provides high-quality of animal protein that our body needs. It is recommended that at least two kinds of seafood should be consumed each week and one should be oil-riched, which helps our brain to function well.Fish, shell, shrimp, and crab are the most common seafood in restaurants. Whitefish is very low in calory and fat, and fresh tuna and sardines helps to build our bones and teeth, and also reduces the risk of heart attack. Shellfish is rich in zinc which is essential for skin and muscles. Shrimp is good for kidney and crab contains the essential trace elements. Popular restaurants in America are Captain D's Seafood, Long John Silver's, Quiznos, Crab Pot, etc. Find more from the following brands.
        </p> 
</div>




@endsection