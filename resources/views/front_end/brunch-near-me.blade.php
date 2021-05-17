
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
                <a href="/brunch-near-me" itemprop="item"><i itemprop="name">Brunch Near Me</i></a>
                    <meta itemprop="position" content="2">
            </span> 
        </div>
        <h1 style="color: blue;">Brunch Near Me</h1>
    </div>
</div>
<div class="brand-info brand classify-food-intro">
    <a href="#" class="brand-logo clf-logo"><img src="{{ asset('user/front_end/images/food_near_me/brunch-near-me.png')}}" alt="Pizza near me"></a>
        <p> 
            In whichever country, the need to loosen up and indulge oneself in the busy daily life can always reflect on food culture. English writer Guy Beringer once wrote, "Brunch is cheerful, sociable and inciting. It is talk-compelling. It puts you in a good temper, it makes you satisfied with yourself and your fellow beings, it sweeps away the worries and cobwebs of the week." As he put, brunch is not only about a full tummy, but also a way of socialization, of spending time with the beloved ones, and of improving the quality of life. If you'd like to have an easy weekend, gathering some friends and having a brunch is surely a good option.
        </p> 
</div>




@endsection