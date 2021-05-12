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
                <a href="/privacy" itemprop="item"><i itemprop="name">Privacy Policy</i></a>
                <meta itemprop="position" content="2">
            </span> 
        </div>
        <h1>Privacy Policy</h1>
        <div class="about">
            <p>
                User’s information protection is always in the first place among all our work. This privacy policy sets out the information we collect, how we use the information, how we protect the information and the third party links.</p><br><p>The Information We Collect</p><br><p>We will not collect your personal information like your name, address, phone number, etc. while you browse our website. The information we collect is non-personal, which includes cookies, web beacons and log files like IP (internet protocol) address, ISP, browser, the time you visited our website and the pages you browsed. </p><br><p>How We Use The Information</p><br><p>We collect the information to improve our products and services so a better browsing experience on the website can be offered. We may change the website in favor of the users’ preferences based on the surfing histories.</p><br><p>How We Protect The Information</p><br><p>Your information is much valued here, and we would use proper technical, physical, and managerial measures to safeguard your information from disclosure. Your information will not be leaked out unless by laws.<p>Third Party Links</p><br><p>Users may find third-party links of interest on our website. Once you click the link, you have entered into the third-party website over which we have no control at all. This privacy policy is only applicable to our website. Keep your eyes open and read their privacy policy while browsing the third party website.</p><br><p>Contact Information</p><br><p>Please feel free to contact us if you have any questions about the privacy policy or the website. We would be glad to help you out.
            </p>
        </div>
    </div>
</div>
    
@endsection
