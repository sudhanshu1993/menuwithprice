@extends('layouts.main')
@section('content')


    <div class="content">
        <div class="main">

            <div class="bread-crumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
                @foreach ($b as $key => $value)
                <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="{{
                    Str::after($key,'https://www.menuwithprice.com') }}"><i itemprop="name">{{$value}}</i></a>
                <meta itemprop="position" content="{{$loop->iteration}}">
            </span>
           
                @endforeach
            </div>
            @foreach ($b as $key => $value)

            @if($loop->last)
            <h1 style="color:blue;">{{ $value }} Nutrition Calories Facts</h1>
            @endif
                          
            @endforeach
            <div class="ads ads-top">
                <div>
                    <style type="text/css">
                        .mwp_ads_1 {
                            width: 100%;
                            height: 252px;
                        }

                        @media (min-width:768px) {
                            .mwp_ads_1 {
                                width: 100%;
                                height: 100px;
                            }
                        }

                    </style>
                    <ins class="adsbygoogle mwp_ads_1" style="display:inline-block" data-ad-client="ca-pub-6371063963738592"
                        data-ad-slot="8669735678"></ins>
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"
                        type="d1bbf26986d080ac8517ce17-text/javascript"></script>
                    <script type="d1bbf26986d080ac8517ce17-text/javascript">
                        (adsbygoogle = window.adsbygoogle || []).push({});

                    </script>
                </div>
            </div>

            <div class="brand">
				<a class="brand-logo" href="#"><img
					src="{{ asset('https://cdn.menuwithprice.com/Images/brand_logo/' . $id . '.png') }}"
					alt="{{$id}}"></a>
                <div class="nutition_list">
                    <label>@foreach ($b as $key => $value)

                        @if($loop->last)
                        
                       {{$value}}
                        
                        @endif
                          
                        @endforeach<span>: 150 Calories</span></label>
                </div>
            </div>

            <div class="ads">
                <div style="text-align:center;">
                    <style type="text/css">
                        .mwp_ads_2 {
                            width: 100%;
                            height: 250px;
                        }

                        @media (min-width:336px) {
                            .mwp_ads_2 {
                                width: 100%;
                                height: 280px;
                            }
                        }

                        @media (min-width:768px) {
                            .mwp_ads_2 {
                                width: 100%;
                                height: 100px;
                            }
                        }

                    </style>

                    <ins class="adsbygoogle mwp_ads_2" style="display:inline-block" data-ad-client="ca-pub-6371063963738592"
                        data-ad-slot="4099935279"></ins>
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"
                        type="d1bbf26986d080ac8517ce17-text/javascript"></script>
                    <script type="d1bbf26986d080ac8517ce17-text/javascript">
                        (adsbygoogle = window.adsbygoogle || []).push({});

                    </script>
                </div>
            </div>


			<div class="store_facts">
				@foreach ($data as $key => $value)
                                {!! $value !!}
                            @endforeach
			</div>
		


            <div class="ads ads-bottom">
                <div>
                    <style type="text/css">
                        .mwp_ads_3 {
                            width: 100%;
                            height: 250px;
                        }

                        @media (min-width:336px) {
                            .mwp_ads_3 {
                                width: 100%;
                                height: 280px;
                            }
                        }

                        @media (min-width:768px) {
                            .mwp_ads_3 {
                                width: 100%;
                                height: 100px;
                            }
                        }

                    </style>

                    <ins class="adsbygoogle mwp_ads_3" style="display:inline-block" data-ad-client="ca-pub-6371063963738592"
                        data-ad-slot="1006868077"></ins>
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"
                        type="d1bbf26986d080ac8517ce17-text/javascript"></script>
                    <script type="d1bbf26986d080ac8517ce17-text/javascript">
                        (adsbygoogle = window.adsbygoogle || []).push({});

                    </script>
                </div>
            </div>

            <h2 style="color:blue;">Related food from Applebee's</h2>
            <ul class="menu-list state_list_food">
				@foreach($datam as $key => $value)
				<li><a href="{{
					Str::after($key,'https://www.menuwithprice.com') }}" style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">{{ $value }}</a></li>
				@endforeach
				{{--
                <li><a href="https://www.menuwithprice.com/nutrition/applebees/2953/"
                        style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">12
                        oz. Ribeye Steak without sides</a></li>
                <li><a href="https://www.menuwithprice.com/nutrition/applebees/2957/"
                        style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">9
                        oz. House Sirloin Steak without sides</a></li>
                <li><a href="https://www.menuwithprice.com/nutrition/applebees/2966/"
                        style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">4-Cheese
                        Mac & Cheese with Honey Pepper Chicken Tenders</a></li>
                <li><a href="https://www.menuwithprice.com/nutrition/applebees/2975/"
                        style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">Add
                        Cheddar Cheese</a></li>
                <li><a href="https://www.menuwithprice.com/nutrition/applebees/2977/"
                        style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">7
                        oz. House Sirloin Steak without sides</a></li>
                <li><a href="https://www.menuwithprice.com/nutrition/applebees/2980/"
                        style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">12
                        oz. New York Strip Steak without sides</a></li>
                <li><a href="https://www.menuwithprice.com/nutrition/applebees/2982/"
                        style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">Add
                        Bacon</a></li>
                <li><a href="https://www.menuwithprice.com/nutrition/applebees/2993/"
                        style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">Add
                        Swiss Cheese</a></li>
                <li><a href="https://www.menuwithprice.com/nutrition/applebees/2996/"
                        style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">Appetizer
                        Crosscut Ribs Sauce, Honey BBQ</a></li>
                <li><a href="https://www.menuwithprice.com/nutrition/applebees/3004/"
                        style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">American
                        BLT Sandwich without sides</a></li> --}}
            </ul>

        </div>

    </div>



@endsection
