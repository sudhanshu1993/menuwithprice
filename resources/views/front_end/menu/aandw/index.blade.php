@extends('layouts.main')
@section('content')
    
<div class="content">
    <div class="main tab-main">
    
    <div class="bread-crumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <a itemprop="item" href="https://www.menuwithprice.com/"><i itemprop="name">Menu With Price</i></a>
    <meta itemprop="position" content="1">
    </span>
    <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <a href="https://www.menuwithprice.com/menu-and-price/" itemprop="item"><i itemprop="name">Menu</i></a>
    <meta itemprop="position" content="2">
    </span><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <a href="https://www.menuwithprice.com/menu/aandw/" itemprop="item"><i itemprop="name" style="color:blue;">A&W Restaurant Prices and Locations Near Me</i></a>
    <meta itemprop="position" content="3">
    </span> </div>
    
    <div>
    <h1 style="color:blue;"><span style="color:blue;">A&W Restaurant</span> Prices and Locations Near Me</h1>
    </div>
    
    
    <div class="ads ads-top ads-brand"><div>
    <style type="text/css">
    .mwp_ads_1 { width: 100%; height: 252px; }
    @media (min-width:768px) { .mwp_ads_1 { width: 100%; height: 100px; } }
    </style>
    <ins class="adsbygoogle mwp_ads_1" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="8669735678"></ins>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="a783abe671d8eedd00de2d84-text/javascript"></script>
    <script type="a783abe671d8eedd00de2d84-text/javascript">
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </div>
    </div>
    
    <div class="brand">
    <a class="brand-logo" href="https://www.menuwithprice.com/menu/aandw/">
        <img src="{{ asset('user/front_end/Images/brand_logo/aandw.png')}}" alt="A&W Restaurant menu"></a>
    </div>
    
    
    
    <div class="choose">
    <h2 style="color:blue;">Choose My State</h2>
    <input type="checkbox">
    <label class="label" style="background-color:blue;">
    <span class="more" >More</span>
    <span class="less" >Less</span>
    <span class="more-less"></span>
    </label>
    <div class="choose-list choose-state">
    <a href="alabama/">AL</a> <a href="https://www.menuwithprice.com/menu/aandw/alaska/">AK</a> <a href="https://www.menuwithprice.com/menu/aandw/arizona/">AZ</a> <a href="https://www.menuwithprice.com/menu/aandw/arkansas/">AR</a> <a href="https://www.menuwithprice.com/menu/aandw/california/">CA</a> <a href="https://www.menuwithprice.com/menu/aandw/colorado/">CO</a> <a href="https://www.menuwithprice.com/menu/aandw/connecticut/">CT</a> <a href="https://www.menuwithprice.com/menu/aandw/delaware/">DE</a> <a href="https://www.menuwithprice.com/menu/aandw/florida/">FL</a> <a href="https://www.menuwithprice.com/menu/aandw/georgia/">GA</a> <a href="https://www.menuwithprice.com/menu/aandw/hawaii/">HI</a> <a href="https://www.menuwithprice.com/menu/aandw/idaho/">ID</a> <a href="https://www.menuwithprice.com/menu/aandw/illinois/">IL</a> <a href="https://www.menuwithprice.com/menu/aandw/indiana/">IN</a> <a href="https://www.menuwithprice.com/menu/aandw/iowa/">IA</a> <a href="https://www.menuwithprice.com/menu/aandw/kansas/">KS</a> <a href="https://www.menuwithprice.com/menu/aandw/kentucky/">KY</a> <a href="https://www.menuwithprice.com/menu/aandw/louisiana/">LA</a> <a href="https://www.menuwithprice.com/menu/aandw/maryland/">MD</a> <a href="https://www.menuwithprice.com/menu/aandw/massachusetts/">MA</a> <a href="https://www.menuwithprice.com/menu/aandw/michigan/">MI</a> <a href="https://www.menuwithprice.com/menu/aandw/minnesota/">MN</a> <a href="https://www.menuwithprice.com/menu/aandw/mississippi/">MS</a> <a href="https://www.menuwithprice.com/menu/aandw/missouri/">MO</a> <a href="https://www.menuwithprice.com/menu/aandw/montana/">MT</a> <a href="https://www.menuwithprice.com/menu/aandw/nebraska/">NE</a> <a href="https://www.menuwithprice.com/menu/aandw/nevada/">NV</a> <a href="https://www.menuwithprice.com/menu/aandw/new-hampshire/">NH</a> <a href="https://www.menuwithprice.com/menu/aandw/new-jersey/">NJ</a> <a href="https://www.menuwithprice.com/menu/aandw/new-mexico/">NM</a> <a href="https://www.menuwithprice.com/menu/aandw/new-york/">NY</a> <a href="https://www.menuwithprice.com/menu/aandw/north-carolina/">NC</a> <a href="https://www.menuwithprice.com/menu/aandw/north-dakota/">ND</a> <a href="https://www.menuwithprice.com/menu/aandw/ohio/">OH</a> <a href="https://www.menuwithprice.com/menu/aandw/oklahoma/">OK</a> <a href="https://www.menuwithprice.com/menu/aandw/oregon/">OR</a> <a href="https://www.menuwithprice.com/menu/aandw/pennsylvania/">PA</a> <a href="https://www.menuwithprice.com/menu/aandw/rhode-island/">RI</a> <a href="https://www.menuwithprice.com/menu/aandw/south-carolina/">SC</a> <a href="https://www.menuwithprice.com/menu/aandw/south-dakota/">SD</a> <a href="https://www.menuwithprice.com/menu/aandw/tennessee/">TN</a> <a href="https://www.menuwithprice.com/menu/aandw/texas/">TX</a> <a href="https://www.menuwithprice.com/menu/aandw/utah/">UT</a> <a href="https://www.menuwithprice.com/menu/aandw/vermont/">VT</a> <a href="https://www.menuwithprice.com/menu/aandw/virginia/">VA</a> <a href="https://www.menuwithprice.com/menu/aandw/washington/">WA</a> <a href="https://www.menuwithprice.com/menu/aandw/west-virginia/">WV</a> <a href="https://www.menuwithprice.com/menu/aandw/wisconsin/">WI</a> <a href="https://www.menuwithprice.com/menu/aandw/wyoming/">WY</a> </div>
    </div>
    
    <div class="ads"><div style="text-align:center;">
    <style type="text/css">
    .mwp_ads_2 { width: 100%; height: 250px; }
    @media (min-width:336px) { .mwp_ads_2 { width: 100%; height: 280px; } }
    @media (min-width:768px) { .mwp_ads_2 { width: 100%; height: 100px; } }
    </style>
    
    <ins class="adsbygoogle mwp_ads_2" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="4099935279"></ins>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="a783abe671d8eedd00de2d84-text/javascript"></script>
    <script type="a783abe671d8eedd00de2d84-text/javascript">
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </div>
    </div>
    
    <div class="prices-menu">
    <div class="menu-tab">
    <div class="menu-tab-l">
    <h2 style="color:blue;"> A&W Restaurant Menu with Price</h2>
    </div>
    </div>
    <div class="price md-price">
    <table class="prc-table">
    <tbody>
    <tr class="prc-th"><td style="background-color:lightblue;">Combos</td></tr>
    <tr class="pt-subtitle"><td>Includes Choice of One Side and Regular Drink</td></tr> </tbody>
    </table>
    <table class="prc-table">
    <tbody>
    <tr class="tr"><td >Papa Burger</td><td>$6.99</td></td><td></td></tr><tr class="tr"><td>Original Bacon Double Cheeseburger</td><td>$6.99</td></td><td></td></tr><tr class="tr"><td>Grilled or Crispy Chicken</td><td>$6.99</td></td><td></td></tr><tr class="tr"><td>Coney Dog</td><td>$5.69</td></td><td></td></tr><tr class="tr"><td>Original Bacon Cheeseburger</td><td>$6.39</td></td><td></td></tr><tr class="tr"><td>Cheeseburger</td><td>$5.39</td></td><td></td></tr> </tbody>
    </table><table class="prc-table">
    <tbody>
    <tr class="prc-th"><td style="background-color:lightblue;">Sides</td></tr>
    </tbody>
    </table>
    <table class="prc-table">
    <tbody>
    <tr class="tr"><td >Cheese Curds</td><td>$3.29</td></td><td>Individual</td></tr><tr class="tr"><td>Cheese Curds</td><td>$5.08</td></td><td>Premium</td></tr><tr class="tr"><td>Chili Cheese Fries</td><td>$2.99</td></td><td>Individual</td></tr><tr class="tr"><td>Chili Cheese Fries</td><td>$3.78</td></td><td>Premium</td></tr><tr class="tr"><td>Fries</td><td>$1.89</td></td><td>Individual</td></tr> </tbody>
    </table><table class="prc-table">
    <tbody>
    <tr class="prc-th"><td style="background-color:lightblue;">Draft A&W Root Beer</td></tr>
    </tbody>
    </table>
    <table class="prc-table">
    <tbody>
    <tr class="tr"><td >Draft A&W Root Beer</td><td>$1.69</td></td><td>Small</td></tr><tr class="tr"><td>Draft A&W Root Beer</td><td>$1.89</td></td><td>Regular</td></tr><tr class="tr"><td>Draft A&W Root Beer</td><td>$2.09</td></td><td>Large</td></tr> </tbody>
    </table><table class="prc-table">
    <tbody>
    <tr class="prc-th"><td style="background-color:lightblue;">Floats & Freezes</td></tr>
    </tbody>
    </table>
    <table class="prc-table">
    <tbody>
    <tr class="tr"><td >Float</td><td>$2.89</td></td><td>Small</td></tr><tr class="tr"><td>Float</td><td>$2.99</td></td><td>Regular</td></tr><tr class="tr"><td>Float</td><td>$3.29</td></td><td>Large</td></tr><tr class="tr"><td>Freeze</td><td>$2.89</td></td><td>Small</td></tr><tr class="tr"><td>Freeze</td><td>$2.99</td></td><td>Regular</td></tr><tr class="tr"><td>Freeze</td><td>$3.29</td></td><td>Large</td></tr> </tbody>
    </table><table class="prc-table">
    <tbody>
    <tr class="prc-th"><td style="background-color:lightblue;">Handspun Shakes</td></tr>
    </tbody>
    </table>
    <table class="prc-table">
    <tbody>
    <tr class="tr"><td >Chocolate, Strawberry, or Vanilla</td><td>$3.59</td></td><td>Regular</td></tr> </tbody>
    </table><table class="prc-table">
    <tbody>
    <tr class="prc-th"><td style="background-color:lightblue;">Classic Treats</td></tr>
    </tbody>
    </table>
    <table class="prc-table">
    <tbody>
    <tr class="tr"><td >Polar Swirl</td><td>$2.99</td></td><td></td></tr><tr class="tr"><td>Sundae</td><td>$2.89</td></td><td></td></tr><tr class="tr"><td>Soft Serve Cone</td><td>$1.29</td></td><td></td></tr> </tbody>
    </table><table class="prc-table">
    <tbody>
    <tr class="prc-th"><td style="background-color:lightblue;">Better Your Combo</td></tr>
    </tbody>
    </table>
    <table class="prc-table">
    <tbody>
    <tr class="tr"><td >Float it</td><td>$1.50</td></td><td></td></tr><tr class="tr"><td>Shake it</td><td>$2.00</td></td><td></td></tr><tr class="tr"><td>Freeze it</td><td>$2.00</td></td><td></td></tr> </tbody>
    </table><table class="prc-table">
    <tbody>
    <tr class="prc-th"><td style="background-color:lightblue;">Kid's Meals</td></tr>
    <tr class="pt-subtitle"><td>Meal Includes Kid's Side, Kid's Drink & Special Prize</td></tr> </tbody>
    </table>
    <table class="prc-table">
    <tbody>
    <tr class="tr"><td >Cheeseburger</td><td>$3.99</td></td><td></td></tr><tr class="tr"><td>Hamburger</td><td>$3.99</td></td><td></td></tr><tr class="tr"><td>Hot Dog</td><td>$3.99</td></td><td></td></tr><tr class="tr"><td>Corn Dog Nuggets</td><td>$3.99</td></td><td></td></tr><tr class="tr"><td>Chicken Strips</td><td>$3.99</td></td><td></td></tr> </tbody>
    </table><table class="prc-table">
    <tbody>
    <tr class="prc-th"><td style="background-color:lightblue;">Drinks</td></tr>
    </tbody>
    </table>
    <table class="prc-table">
    <tbody>
    <tr class="tr"><td >Soft Drink</td><td>$1.89</td></td><td>Small</td></tr><tr class="tr"><td>Soft Drink</td><td>$1.99</td></td><td>Regular</td></tr><tr class="tr"><td>Soft Drink</td><td>$2.19</td></td><td>Large</td></tr><tr class="tr"><td>Tea</td><td>$2.79</td></td><td>Half Gallon</td></tr><tr class="tr"><td>A&W Root Beer</td><td>$2.99</td></td><td>Half Gallon</td></tr> </tbody>
    </table> <p class="link_out">Menu Also Available on <a href="https://www.menuswithprice.com/aandw-menu/" style="background-color:lightblue;">A&W Restaurant Menu</a></p>
    </div>
    </div>
     <div class="ads"><div>
    <style type="text/css">
    .mwp_ads_3 { width: 100%; height: 250px; }
    @media (min-width:336px) { .mwp_ads_3 { width: 100%; height: 280px; } }
    @media (min-width:768px) { .mwp_ads_3 { width: 100%; height: 100px; } }
    </style>
    
    <ins class="adsbygoogle mwp_ads_3" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="1006868077"></ins>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="a783abe671d8eedd00de2d84-text/javascript"></script>
    <script type="a783abe671d8eedd00de2d84-text/javascript">
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </div>
    </div>
    
    
    </div>
    
    </div>
@endsection
