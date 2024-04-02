<!DOCTYPE html>
<html>

<head>
    <title>University</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="/web2-main/public/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">

    <div class="wrapper row0">
        <div id="topbar" class="clear">
            <!-- ################################################################################################ -->
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="{{route('user.login')}}">Login</a></li>
                    <!-- <a href="{{ route('logout') }}" class="">logout</a>
<a href="{{ route('student.profile') }}" class="">profile</a> -->
                </ul>
            </nav>
            <!-- ################################################################################################ -->
        </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row1">
        <header id="header" class="clear">
            <!-- ################################################################################################ -->
            <div id="logo" class="fl_left">
                <h1><a href="index.html">University</a></h1>
                <p>University magazine</p>
            </div>
            <div class="fl_right">
                <form class="clear" method="post" action="#">
                    <fieldset>
                        <legend>Search:</legend>
                        <input type="text" value="" placeholder="Search Here">
                        <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
                    </fieldset>
                </form>
            </div>
            <!-- ################################################################################################ -->
        </header>
    </div>

    <div class="wrapper row2">
        <div class="rounded">
            <nav id="mainav" class="clear">
                <!-- nav bar -->
                <ul class="clear">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a class="drop" href="#">Pages</a>
                        <ul>

                        </ul>
                    </li>
                    <div class="wrapper row4">
                        <div class="rounded">
                            <footer id="footer" class="clear">
                                <!-- ################################################################################################ -->
                                <div class="one_third first">
                                    <figure class="center"><img class="btmspace-15" src="images/demo/worldmap.png" alt="">
                                        <figcaption><a href="#">Find Us With Google Maps &raquo;</a></figcaption>
                                    </figure>
                                </div>
                                <div class="one_third">
                                    <address>
                                        Long Educational Facility Name<br>
                                        Address Line 2<br>
                                        Town/City<br>
                                        Postcode/Zip<br>
                                        <br>
                                        <i class="fa fa-phone pright-10"></i> xxxx xxxx xxxxxx<br>
                                        <i class="fa fa-envelope-o pright-10"></i> <a href="#">contact@domain.com</a>
                                    </address>
                                </div>
                                <div class="one_third">
                                    <p class="nospace btmspace-10">Stay Up to Date With What's Happening</p>
                                    <ul class="faico clear">
                                        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="faicon-flickr" href="#"><i class="fa fa-flickr"></i></a></li>
                                        <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                    <form class="clear" method="post" action="#">
                                        <fieldset>
                                            <legend>Subscribe To Our Newsletter:</legend>
                                            <input type="text" value="" placeholder="Enter Email Here&hellip;">
                                            <button class="fa fa-sign-in" type="submit" title="Sign Up"><em>Sign Up</em></button>
                                        </fieldset>
                                    </form>
                                </div>
                                <!-- ################################################################################################ -->
                            </footer>
                        </div>
                    </div>
                    <!-- ################################################################################################ -->
                    <!-- ################################################################################################ -->
                    <!-- ################################################################################################ -->
                    <div class="wrapper row5">
                        <div id="copyright" class="clear">
                            <!-- ################################################################################################ -->
                            <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
                            <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
                            <!-- ################################################################################################ -->
                        </div>
                    </div>
                    <!-- JAVASCRIPTS -->
                    <script src="layout/scripts/jquery.min.js"></script>
                    <script src="layout/scripts/jquery.fitvids.min.js"></script>
                    <script src="layout/scripts/jquery.mobilemenu.js"></script>
                    <script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
</body>

</html>