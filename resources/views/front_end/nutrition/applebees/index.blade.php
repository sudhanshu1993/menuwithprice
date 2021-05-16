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
            <h1 style="color:blue;">{{ $value }} Calories Facts</h1>
            @endif
              
            @endforeach
            <div class="star_div">
                <div class="rating">
                    <form method="POST">
                        <input type="submit" id="starScore1" name="score" value="1" class="score"><label for="starScore1"
                            class="star star1"></label>
                        <input type="submit" id="starScore2" name="score" value="2" class="score"><label for="starScore2"
                            class="star star2"></label>
                        <input type="submit" id="starScore3" name="score" value="3" class="score"><label for="starScore3"
                            class="star star3"></label>
                        <input type="submit" id="starScore4" name="score" value="4" class="score"><label for="starScore4"
                            class="star star4"></label>
                        <input type="submit" id="starScore5" name="score" value="5" class="score"><label for="starScore5"
                            class="star star5"></label>
                    </form>
                </div>
                <div class="score_star">
                    <span style="width:52%"></span>
                </div>
                <span class="score_span">
                    <span>2.6</span> based on
                    <span>1,466</span> votes
                </span>
            </div>

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
                        type="f5575bded75dfe64680e492c-text/javascript"></script>
                    <script type="f5575bded75dfe64680e492c-text/javascript">
                        (adsbygoogle = window.adsbygoogle || []).push({});

                    </script>
                </div>
            </div>

            <div class="brand">
                <a class="brand-logo" href="#"><img
                        src="{{ asset('https://cdn.menuwithprice.com/Images/brand_logo/' . $id . '.png') }}"
                        alt="{{$id}}"></a>
            </div>



            <div class="choose">
                <h2 style="color:blue;">Choose My State</h2>
                <input type="checkbox" style="background-color:blue;">
                <label class="label">
                    <span class="more">More</span>
                    <span class="less">Less</span>
                    <span class="more-less"></span>
                </label>
                <div class="choose-list choose-state">
                    @foreach ($datastate as $keys => $values)
                        <a
                            href="{{ Str::after($keys, 'https://www.menuwithprice.com') }}">{{ $values }}</a>
                    @endforeach
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

                        <ins class="adsbygoogle mwp_ads_2" style="display:inline-block"
                            data-ad-client="ca-pub-6371063963738592" data-ad-slot="4099935279"></ins>
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"
                            type="f5575bded75dfe64680e492c-text/javascript"></script>
                        <script type="f5575bded75dfe64680e492c-text/javascript">
                            (adsbygoogle = window.adsbygoogle || []).push({});

                        </script>
                    </div>
                </div>

                <div class="nutri-agen food-detail-peice">
                    <h2 style="color:blue;">
                        @foreach ($b as $key => $value)

                        @if($loop->last)
                        <h1 style="color:blue;">{{ $value }} Calories Facts</h1>
                        @endif
                          
                        @endforeach
                    </h2>

                    <table style="border:1px solid black;">
                        <tbody>
                            {{-- <tr>
                                <th>Food</th>
                                <th class="tdblock">Calories</th>
                                <th class="td">Protein (g)</th>
                                <th class="td">Fat (g)</th>
                                <th class="more"> </th>
                            </tr>
                            <tr>
                                <td style="border:1px solid black;">
                                    <a href="applebees/2949-add-american-cheese/">
                                        <p style="color:blue;">Add American Cheese</p>
                                        <span>1 serving</span>
                                    </a>
                                </td>
                                <td class="tdblock" style="border:1px solid black;">150</td>
                                <td class="td" style="border:1px solid black;">8</td>
                                <td class="td" style="border:1px solid black;">12</td>
                                <td class="more" style="border:1px solid black;"><a
                                        href="https://www.menuwithprice.com/nutrition/applebees/2949-add-american-cheese/"><b>></b></a>
                                </td>
                            </tr>
                            <tr>
                                <td style="border:1px solid black;">
                                    <a
                                        href="https://www.menuwithprice.com/nutrition/applebees/3299-blue-ribbon-brownie-bite/">
                                        <p style="color:blue;">Blue Ribbon Brownie Bite</p>
                                        <span>1 serving</span>
                                    </a>
                                </td>
                                <td class="tdblock">380</td>
                                <td class="td" style="border:1px solid black;">5</td>
                                <td class="td" style="border:1px solid black;">18</td>
                                <td class="more"><a
                                        href="https://www.menuwithprice.com/nutrition/applebees/3299-blue-ribbon-brownie-bite/"><b>></b></a>
                                </td>
                            </tr> --}}
                            @foreach ($datam as $key => $value)
                                {!! str_replace('https://www.menuwithprice.com', ' ', $value) !!}
                            @endforeach

                        </tbody>
                    </table>



                    <div class="ads ads-bottom">
                        <div>



                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

@endsection
