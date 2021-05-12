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
                <a href="/about" itemprop="item"><i itemprop="name">About Us</i></a>
                <meta itemprop="position" content="2">
            </span> 
        </div>
        <h1 style="color: blue;">About Us</h1>
        <div class="about">
            <p>
                # is devoted to providing users with detailed and specific menus and prices information and to helping users enjoy the easy life. Over 170,000 restaurant brands and their around 600,000 more stores across the United States and also a variety of UK restaurants are indexed with information including the latest menu with prices, nutrition information, store hours and locations and more..</p><br><p>Our Features</p><br><p># is designed to offer you great user experience with the following wonderful features:</p><br><p>1. Accurate and up-to-date information. All the menus, prices and other information are collected from the restaurant brands' official websites regularly to ensure the accuracy and timeliness.</p><br><p>2. Detailed and comprehensive coverage. For now, we have already indexed over 200 restaurant brands and their 180,000 more stores across the United States. And we still work on more brands and stores for users' convenience.</p><br><p>3. Interesting and helpful articles. We have unique articles about fast food brands and menus sharing you a way to a healthy and easy life.</p><br><p>4. Multi-device web design. Besides desktop and laptop, you can also access # via iPhone, iPad, Android and other mobile devices.</p><br><p>Disclaimer</p><br><p>The trademarks and logos of all the restaurant brands displayed on the website are the property of their respective owners. # is not affiliated or associated with any of them. Menus and prices may vary because of store location. For the most accurate information, please contact the restaurant store directly.
            </p> 
        </div>
    </div>
</div>
@endsection
