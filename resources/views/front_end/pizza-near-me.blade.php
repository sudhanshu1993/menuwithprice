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
                <a href="/pizza-near-me" itemprop="item"><i itemprop="name">Pizza Near Me</i></a>
                    <meta itemprop="position" content="2">
            </span> 
        </div>
        <h1 style="color: blue;">Pizza Near Me</h1>
    </div>
</div>
<div class="brand-info brand classify-food-intro">
    <a href="#" class="brand-logo clf-logo"><img src="{{ asset('user/front_end/images/food_near_me/pizza-near-me.png')}}" alt="Pizza near me"></a>
        <p> 
            You may be a loyal lover of pizza but how much do you know about these round flatbread topped with sauce and vegetables and baked in an oven? The name Pizza was invented around 1700 in Naples, Italy and the same city born the ancestor of all pizza workshop Antica Pizzeria Port'Alba. In 1905, America had his first pizzeria in Manhattan, and in 1943 the Chicago deep-dish pizza was created at Pizzeria Uno. We've been so creative with pizzas that nobody has any idea about the next kind, but the original never gets old. You can also taste the best pizza in those popular pizzerias Pizza Hut, Papa John's, Little Caesars, and Domino's.
        </p> 
</div>




@endsection