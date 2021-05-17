
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
                <a href="/burgers-near-me" itemprop="item"><i itemprop="name">Burgers Near Me</i></a>
                    <meta itemprop="position" content="2">
            </span> 
        </div>
        <h1 style="color: blue;">Burgers Near Me</h1>
    </div>
</div>
<div class="brand-info brand classify-food-intro">
    <a href="#" class="brand-logo clf-logo"><img src="{{ asset('user/front_end/images/food_near_me/burgers-near-me.png')}}" alt="Pizza near me"></a>
        <p> 
        Speaking of fast food, burgers may be the first thing that jumps into our minds. Why do so many people love burgers? It may because they don't cost much, or it may because they are very convenient to get and to eat. The fact that burgers are relatively healthier compared to other fast food may be another answer. And also, there are so many options when choosing a burger to eat, and one can always find his favorite. Besides, you can never go wrong with burgers when you don't know what to eat or when you are in some new places. Some well-known brands that we are all quite familiar with are McDonald's, KFC, Burger King etc...
        </p> 
</div>




@endsection