<!DOCTYPE html>
<meta name="csrf-token" content="{{ csrf_token() }}">
<html>
    <head>
    <link rel="styleSheet" href="{{URL::asset('/css/home.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/design.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/aboutus.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/register.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/login.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/contact.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/gallary.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/bootstrap.min.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/style.css') }}" type="text/css">
	<link rel="styleSheet" href="{{URL::asset('/css/product.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/flaticon.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/gallary.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/cart.css') }}" type="text/css">
    <script type="text/javascript" src="{{URL::asset('/js/home.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/jquery-3.5.1.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/jquery-3.5.1.min.js') }}"></script>
    <script src="https://static.pdflibr.com/SuperSlide/2.1.3/jquery.SuperSlide.2.1.3.js"></script>
    {{-- <script type="text/javascript" src="{{URL::asset('/js/vue.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/vue-router.js') }}"></script> --}}
    <script type="text/javascript" src="{{URL::asset('/js/dashboard.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/profile.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/product.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/cart.js') }}"></script>
    <script type="text/javascript">
    </script>
    </head>
    <body onload="initPage()">
    <!-- <div id="container"> -->
    <div class="homepage" id="homepage_div_id" style="display:block">
            <!-- header -->
            <div class="header" id="header_id">
                <div class="companyLogo" id="companyLogo_id">
                    <img src="{{URL::asset('/image/4.png') }} " width=50% height=100%>
                </div>
                <div class="home" id="home_id" onclick="clickHeader(0)">
                    <p>home</p>
                </div>
                <div class="product" id="product_id" onclick="clickHeader(1)">
                    <p>product</p>
                    <ul id="product_ul">
                        <li>&nbsp;&nbsp;product1</li>
                        <li>&nbsp;&nbsp;product2</li>
                        <li>&nbsp;&nbsp;product3</li>
                        <li>&nbsp;&nbsp;product4</li>
                    </ul>
                </div>
                <div class="design" id="design_id" onclick="clickHeader(2)">
                    <p>design</p>
                    <!-- <ul id="design_ul">
                        <li>&nbsp;&nbsp;Logo Design</li>
                        <li>&nbsp;&nbsp;Brochure Design</li>
                        <li>&nbsp;&nbsp;Flyer Design</li>
                        <li>&nbsp;&nbsp;Signage Design</li>
                        <li>&nbsp;&nbsp;Company Stationary Design</li>
                        <li>&nbsp;&nbsp;Company Catalogue Design</li>
                        <li>&nbsp;&nbsp;Presentation Folder</li>
                        <li>&nbsp;&nbsp;more</li>
                    </ul> -->
                </div>
                <div class="gallary" id="gallary_id" onclick="clickHeader(3)">  
                    <p>gallary</p>
                    <!-- <ul id="gallary_ul">
                        <li>&nbsp;&nbsp;gallary1</li>
                        <li>&nbsp;&nbsp;gallary2</li>
                        <li>&nbsp;&nbsp;gallary3</li>
                    </ul> -->
                </div>
                <div class="support" id="support_id" onclick="clickHeader(4)"><p>support</p></div>
                <div class="aboutUs" id="aboutUs_id" onclick="clickHeader(5)"><p>about us</p></div>
                <div class="contact" id="contact_id" onclick="clickHeader(6)"><p>contact</p></div>
                <div class="cart" id="cart_id" onclick="clickHeader(7)"><p>cart</p></div>
                <div class="login" id="login_id" onclick="clickHeader(8)"><p>login</p></div>
                <div class="register" id="register_id" onclick="clickHeader(9)"><p>register</p></div>
            </div>

            <!-- diaplayBox -->
            <div class = "displayBox" id="displayBox_id" onload="change()">
                <div class="displayBox_bd">
                    <ul>
                        <img src="{{URL::asset('/image/1.jpg') }}" >
                        <img src="{{URL::asset('/image/2.jpg') }}" >
                        <img src="{{URL::asset('/image/3.jpg') }}" >
                    </ul>
                </div>
            </div>



            <!-- home -->
            <div class = "home_div" id="home_div_id" style="display:block">

                <div class="home_icon_holder">
                    <div class="booklets_holder home_menu">
                    <a href="#" title="Online Booklet Printing Services">
                       <div class="home_panel_img booklets_img"></div>
                       Booklets
                    </a>
                    </div>
       
                    <div class="brochures_holder home_menu">
                    <a href="#" title="Online Brochure Printing Services">
                    <div class="home_panel_img brochures_img"></div>
                       Brochures
                    </a>
                    </div>
       
                    <div class="business_cards_holder home_menu">
                    <a href="#" title="Online Business Card Printing Services">
                    <div class="home_panel_img business_cards_img"></div>
                       Business Cards
                    </a>
                    </div>
       
                    <div class="notepads_holder home_menu">
                    <a href="#" title="Online Notepad Printing Services">
                    <div class="home_panel_img notepads_img"></div>
                       Deskpads / Notepads
                    </a>
                    </div>
       
                    <div class="docketbooks_holder home_menu">
                    <a href="#" title="Online Docket Book Printing Services">
                    <div class="home_panel_img docketbooks_img"></div>
                       Docket Books
                    </a>
                    </div>
       
                    <div class="envelopes_holder home_menu">
                    <a href="#" title="Online Envelope Printing Services">
                    <div class="home_panel_img envelopes_img"></div>
                       Envelopes
                    </a>
                    </div>
       
                    <div class="flyers_holder home_menu">
                    <a href="#" title="Online Flyer Printing Services">
                    <div class="home_panel_img flyers_img"></div>
                       Flyers
                    </a>
                    </div>
                    <div class="magnets_holder home_menu">
                    <a href="#" title="Buy Fridge Magnets Online">
                    <div class="home_panel_img magnets_img"></div>
                       Fridge Magnets
                    </a>
                    </div>
                    <div class="letterheads_holder home_menu">
                    <a href="#" title="Online Letterhead Printing Services">
                    <div class="home_panel_img letterheads_img"></div>
                       Letterheads
                    </a>
                    </div>
                    <div class="postcards_holder home_menu">
                    <a href="#" title="Online Postcard Printing Services">
                    <div class="home_panel_img postcards_img"></div>
                       Postcards
                    </a>
                    </div>
                    <div class="posters_holder home_menu">
                    <a href="#" title="Online Poster Printing Services">
                    <div class="home_panel_img posters_img"></div>
                       Posters
                    </a>
                    </div>
                    <div class="presentation_folders_holder home_menu">
                    <a href="#" title="Online Presentation Folder">
                    <div class="home_panel_img presentation_folders_img"></div>
                       Presentation Folders
                    </a>
                    </div>
                                 <div class="with_comps_holder home_menu">
                    <a href="#">
                    <div class="home_panel_img with_comps_img"></div>
                       With Compliments
                    </a>
                    </div>
                    <div class="web_design_holder home_menu">
                    <a href="#">
                    <div class="home_panel_img web_design_img"></div>
                       Website Design
                    </a>
                    </div>
       
                    <div style="clear: both;"></div>
                </div>
                {{-- <div class="home_content_left">
                    <div class="home_img_place">
                        <div class="home_img_1">
                            <img src="{{URL::asset('/image/Home2.jpg') }} " width=100% height=100%>
                        </div>
                        <div class="home_img_2">
                            <img src="{{URL::asset('/image/Home3.jpg') }} " width=100% height=100%>
                        </div>
                        <div class="home_img_3">
                            <img src="{{URL::asset('/image/Home4.jpg') }} " width=100% height=100%>
                        </div>
                        <div class="home_img_4">
                            <img src="{{URL::asset('/image/Home5.jpg') }} " width=100% height=100%>
                        </div>
                    </div>
                </div>
                <div class="home_content_right">
                    <p class="home_content_p1">Yellow Star Press offers full colour offset printing and short run digital printing service for those urgent jobs.</p>
                    <p class="home_content_p2">You send it, We Print It. It's That Easy!</p>
                    <p >Our printing service is of the highest quality, at the lowest possible price.</p>
                    <p >Design your own graphics and send the file to us ordering process. Our printing services are the </p>
                    <p >21st century way of producing customised business stationary at reduced cost.</p>
                </div> --}}
                <div class="home_content_holder">
                    <div class="home_content_left">
                        <h1 class="hp_title">we deliver quality printing <br>at the lowest possible price.</h1>
                        <p>Find the most cost effective solution for your business with our instant online pricing.</p>
                        <p>&nbsp;</p>
                        <p>Supply your print ready artwork and upload your file using our online ordering system. Alternatively, call or email our friendly staff who can assist you with your order.</p>
                            <span class="latest-articles">Latest Articles</span>
                        <div class="blog_article">
                            <div class="blog_post_container">
                                <div class="blog_post_title"><a href="http://web.archive.org/web/20180903133919/http://www.1print.net.au/blog/5-kinds-of-office-stationary-that-will-always-be-relevant/">5 Kinds of Office Stationary That Will Always be Relevant  </a></div>
                                <div class="blog_post_content"><p>It’s often been speculated that eventually, computers will replace the functions of paper stationary in the office. Whilst this prediction has ce...</p></div>
                            </div>
                            <div class="blog_post_container">
                                <div class="blog_post_title"><a href="http://web.archive.org/web/20180903133919/http://www.1print.net.au/blog/business-card-etiquette-when-and-how-to-hand-them-out/">Business Card Etiquette: When And How To Hand Them Out</a></div>
                                <div class="blog_post_content"><p>For those who have had business cards for a while, the concept of networking and distributing them is a no-brainer. But for those who are new to th...</p></div>
                            </div>
                            <div class="blog_post_container">
                                <div class="blog_post_title"><a href="http://web.archive.org/web/20180903133919/http://www.1print.net.au/blog/2018-business-card-trends/">2018 Business Card Trends </a></div>
                                <div class="blog_post_content"><p>Looking to upgrade your business cards to something cutting edge? Is it your first time printing business cards and your feeling a little lost when...</p></div>
                            </div>
                            <div class="clear: both;"></div>
                        </div>
                    </div>
                    <div class="home_content_right">
                        <p class="home_content_p1">Yellow Star Press offers full colour offset printing and short run digital printing service for those urgent jobs.</p>
                        <p class="home_content_p2">You send it, We Print It. It's That Easy!</p>
                        <p >Our printing service is of the highest quality, at the lowest possible price.</p>
                        <p >Design your own graphics and send the file to us ordering process. Our printing services are the </p>
                        <p >21st century way of producing customised business stationary at reduced cost.</p>
                    </div>
                    <div class="clear: both;"></div>
                </div>

                <div style="clear: both;"></div>
            </div>

            <!-- product -->
            <div class = "product_div" id="product_div_id" style="display:none">
                <!-- shop-details-area -->
                {{-- <section class="shop-details-area pt-100 pb-100">
                    <div class="home_content_left">
                        <div class="product_div_display1">
                            <img src="{{URL::asset('/image/Product1.jpg') }} " width=70% height=50%>
                        </div>
                        <div class="product_div_display2">
                            <img src="{{URL::asset('/image/Product2.jpg') }} " width=70% height=50%>
                        </div>
                    </div>
                    <div class="home_content_right">
                        <div class="product_div_display1">
                            <div class="shop-details-content">
                                <h2>Book Design</h2>
                                <div class="shop-details-price">
                                    <h2>$290.00 <del>$490.00</del></h2>
                                </div>
                                <p>Design Book for your company</p>
                                
                                <div class="perched-info">
                                    <a href="#" class="btn add-card-btn">ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                        <div class="product_div_display3">
                            <div class="shop-details-content">
                                <h2>Invitation card Design</h2>
                                <div class="shop-details-price">
                                    <h2>$390.00 <del>$400.00</del></h2>
                                </div>
                                <p>Design Invitation card for your company</p>
                                
                                <div class="perched-info">
                                    <a href="#" class="btn add-card-btn">ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                </section> --}}
                <!-- shop-details-area-end -->
                <div class="product_div_main">
                    <div class="product_div_first">
                        <div class="product_div_img1">
                        
                        </div>
                        <div class="product_div_message">
                            <div class="product_div_name">
                                <p class="product_name">CD Print1</p>
                                <p class="product_price">$300</p>
                                <div class="product_describe">
                                    <div class="product_describe_message">
                                        <p>Our booklets are produced on top-of-the-line offset and digital machines, ensuring you receive a quality product at the lowest possible price.</p>
                                        <p>Our booklets can be printed on a range of paper weights (ranging from 80gsm - 170gsm), as well as different paper sizes (A4, A5, A6, DL or a custom size).</p>
                                    </div>
                                </div>
                            </div>
                            <div id="product_addCart1" onclick="addCard(1)">
                                <p>ADD TO CART</p>
                            </div>		
                        </div>
                    </div>

                    <div class="product_div_second">
                        <div class="product_div_img2"></div>
                        <div class="product_div_message">
                            <div class="product_div_name">
                                <p class="product_name">CD Print2</p>
                                <p class="product_price">$300</p>
                                <div class="product_describe">
                                    <div class="product_describe_message">
                                        <p>Here are some text to describe the product</p>
                                        <p>Our booklets are produced on top-of-the-line offset and digital machines, ensuring you receive a quality product at the lowest possible price.</p>
                                        <p>Our booklets can be printed on a range of paper weights (ranging from 80gsm - 170gsm), as well as different paper sizes (A4, A5, A6, DL or a custom size).</p>
                                    </div>
                                </div>
                            </div>
                            <div id="product_addCart2" onclick="addCard(2)">
                                <p>ADD TO CART</p>
                            </div>		
                        </div>
                    </div>

                    <div class="product_div_third">
                        <div class="product_div_img3"></div>
                        <div class="product_div_message">
                            <div class="product_div_name">
                                <p class="product_name">CD Print3</p>
                                <p class="product_price">$300</p>
                                <div class="product_describe">
                                    <div class="product_describe_message">
                                        <p>Here are some text to describe the product</p>
                                        <p>Our booklets are produced on top-of-the-line offset and digital machines, ensuring you receive a quality product at the lowest possible price.</p>
                                        <p>Our booklets can be printed on a range of paper weights (ranging from 80gsm - 170gsm), as well as different paper sizes (A4, A5, A6, DL or a custom size).</p>
                                    </div>
                                </div>
                            </div>
                            <div id="product_addCart3" onclick="addCard(3)">
                                <p>ADD TO CART</p>
                            </div>		
                        </div>
                    </div>

                    <div class="product_div_forth">
                        <div class="product_div_img4"></div>
                        <div class="product_div_message">
                            <div class="product_div_name">
                                <p class="product_name">CD Print4</p>
                                <p class="product_price">$300</p>
                                <div class="product_describe">
                                    <div class="product_describe_message">
                                        <p>Here are some text to describe the product</p>
                                        <p>Our booklets are produced on top-of-the-line offset and digital machines, ensuring you receive a quality product at the lowest possible price.</p>
                                        <p>Our booklets can be printed on a range of paper weights (ranging from 80gsm - 170gsm), as well as different paper sizes (A4, A5, A6, DL or a custom size).</p>
                                    </div>
                                </div>
                            </div>
                            <div id="product_addCart4" onclick="addCard(4)">
                                <p>ADD TO CART</p>
                            </div>		
                        </div>
                    </div>

                    <div class="product_div_fivth">
                        <div class="product_div_img5"></div>
                        <div class="product_div_message">
                            <div class="product_div_name">
                                <p class="product_name">CD Print5</p>
                                <p class="product_price">$300</p>
                                <div class="product_describe">
                                    <div class="product_describe_message">
                                        <p>Here are some text to describe the product</p>
                                        <p>Our booklets are produced on top-of-the-line offset and digital machines, ensuring you receive a quality product at the lowest possible price.</p>
                                        <p>Our booklets can be printed on a range of paper weights (ranging from 80gsm - 170gsm), as well as different paper sizes (A4, A5, A6, DL or a custom size).</p>
                                    </div>
                                </div>
                            </div>
                            <div id="product_addCart5" onclick="addCard(5)">
                                <p>ADD TO CART</p>
                            </div>		
                        </div>
                    </div>

                    <div style="clear:both"></div>


                </div>
                <div style="clear:both"></div>
            </div>

            <div class = "product_div" id="product_div_id_1" style="display:none">
                <div class="text_holder">
                    <div class="main_product_container booklet_holder">
                        <div class="product_main_left">
                            <div class="product_main_left_left">
                                <h1>Online Booklet Printing</h1>
                                <h2>Promote your company's products and services with quality booklets.</h2>
                                <p>Our booklets are produced on top-of-the-line offset and digital machines, ensuring you receive a quality product at the lowest possible price.
                                </p>
                                <p>&nbsp;</p>
                                <p>
                                    Our booklets can be printed on a range of paper weights (ranging from 80gsm - 170gsm), as well as different paper sizes (A4, A5, A6, DL or a custom size).
                                </p>
                                <p>&nbsp;</p>
                                <p>
                                    Choose from three standard finishes on our booklets: Gloss, Matt and Uncoated.
                                </p>
                                <p>&nbsp;</p>
                                <p>
                                    To further enhance the look and feel of your finished product, we also offer the option to select a different paper weight or finish for your cover.
                                </p>
                                <p>&nbsp;</p>
                                <p>
                                    A selection of additional options are also available to further enhance your booklet, call us to discuss any further details or send a quote request using the form provided.</p>
                                </p>
                                <br/>
                                <div class="product_main_left_right">
                                    <h4>Booklet Options</h4>
                                    <div class="option_holder paper_option">
                                        <div class="option_icon_holder"></div>
                                        <div class="option_text_holder">
                                            <div class="option_heading">Paper</div>
                                            <ul>
                                                <li>Gloss, Matt or Bond stock</li>
                                                <li>Various weights ranging from 80-170gsm</li>
                                            </ul>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="option_holder finish_option">
                                        <div class="option_icon_holder"></div>
                                        <div class="option_text_holder">
                                            <div class="option_heading">Finished Sizes</div>
                                            <ul>
                                                <li>DL, A6, A5, A4 and custom sizes</li>
                                            </ul>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="option_holder colour_option">
                                        <div class="option_icon_holder"></div>
                                        <div class="option_text_holder">
                                            <div class="option_heading">Colour Options</div>
                                            <ul>
                                                <li>Printed from one to full colour</li>
                                                <li>Pantone or metallic ink</li>
                                                <li>Gloss or satin Machine varnish available</li>
                                            </ul>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="option_holder bind_option">
                                        <div class="option_icon_holder"></div>
                                        <div class="option_text_holder">
                                            <div class="option_heading">Binding Options</div>
                                            <ul>
                                                <li>Saddlestitch - Stapled at the spine</li>
                                                <li>Perfect Bound with a flat edged spine</li>
                                            </ul>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="option_holder effect_option">
                                        <div class="option_icon_holder"></div>
                                        <div class="option_text_holder">
                                            <div class="option_heading">Special Effect Printing</div>
                                            <ul>
                                                <li>Embossing</li>
                                                <li>Foil Stamping</li>
                                                <li>Spot UV</li>
                                            </ul>
                                        </div>
                                        <div class="clear"></div>
                                    </div>

                                </div>



                                <h3 class="padding_top">Machine varnish for a superior finish (offset only)</h3>
                                <p>
                                    Machine vanishing ensures a silky smooth finish. We use this finish on booklets that have large areas of ink coverage to protect the product and reduce finger marking and scuffing or simply to enhance the look and feel of the finished product.
                                    <br/><a href="http://web.archive.org/web/20180312225318/http://www.1print.net.au/contact.php?osCsid=nb76osbj4uatvq4prjqu3rr5h5" class="black_link_underline">Contact us for more information</a>
                                </p>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="product_main_right">
                            <div class="booklets_button_holder">

                                <div class="booklet-quote-left">
                                    <h2><span>Request </span>a quote</h2>
                                </div>
                                <div class="booklet-quote-right">
                                    <form method="post" name="customquotes" id="customquotes" enctype="multipart/form-data">
                                        <div class="create-account-table3 quotes_table">
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td colspan="2">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                            <tr>
                                                                <td style="padding-bottom:0" class="quote_list_table" colspan="2">
                                                                    <div id="custom_table">
                                                                        <table width="100%">
                                                                            <tr>
                                                                                <td class="option_first_col">
                                                                                    Finished Book Size
                                                                                    <input type="hidden" value="49" name="quote_fields[]" />
                                                                                    <input type="hidden" value="Finished Book Size" name="field_name_49" id="field_name_49" />
                                                                                    <input type="hidden" value="49" name="field_id_49" id="field_id_49" />
                                                                                </td>
                                                                                <td class="option_second_col"><select style="width:100%;" name="field_49" id="field_49" onchange="cqFieldOption(49)"><option value="A4 210X297mm">A4 210X297mm</option><option value="A5 148x210mm">A5 148x210mm</option><option value="A6 105x148mm">A6 105x148mm</option><option value="DL 99x210mm">DL 99x210mm</option><option value="-1">Custom</option><input type="hidden" value="49" name="custom_field[]"/><div class="extra_option">
                                        <div id="div_custom_49" style="display:none;"><input type="text" name="field_custom_49" value="" id="field_custom_49" style="width:100%;" maxlength="80"/></div>
                                        </div>
                                        </td></tr><tr>  <td class="option_first_col"> 
                                        Orientation 
                                        <input type="hidden" value="50" name="quote_fields[]"/>
                                        <input type="hidden" value="Orientation" name="field_name_50" id="field_name_50"/>
                                        <input type="hidden" value="50" name="field_id_50" id="field_id_50"/>
                                        </td><td class="option_second_col"><select style="width:100%;" name="field_50" id="field_50" onchange="cqFieldOption(50)"><option value="Portrait">Portrait</option><option value="Landscape">Landscape</option><input type="hidden" value="50" name="custom_field[]"/><div class="extra_option">
                                        <div id="div_custom_50" style="display:none;"><input type="text" name="field_custom_50" value="" id="field_custom_50" style="width:100%;" maxlength="80"/></div>
                                        </div>
                                        </td></tr><tr>  <td class="option_first_col"> 
                                        Internal Pages 
                                        <input type="hidden" value="52" name="quote_fields[]"/>
                                        <input type="hidden" value="Internal Pages" name="field_name_52" id="field_name_52"/>
                                        <input type="hidden" value="52" name="field_id_52" id="field_id_52"/>
                                        </td><td class="option_second_col"><select style="width:100%;" name="field_52" id="field_52" onchange="cqFieldOption(52)"><option value="150gsm Gloss">150gsm Gloss</option><option value="150gsm Silk">150gsm Silk</option><option value="130gsm Gloss">130gsm Gloss</option><option value="130gsm Silk">130gsm Silk</option><option value="115gsm Gloss">115gsm Gloss</option><option value="115gsm Silk">115gsm Silk</option><option value="170gsm Gloss">170gsm Gloss</option><option value="170gsm Silk">170gsm Silk</option><option value="100gsm Offset Uncoated">100gsm Offset Uncoated</option><option value="200gsm Silk">200gsm Silk</option><option value="200gsm Gloss">200gsm Gloss</option><option value="-1">Custom</option><input type="hidden" value="52" name="custom_field[]"/><div class="extra_option">
                                        <div id="div_custom_52" style="display:none;"><input type="text" name="field_custom_52" value="" id="field_custom_52" style="width:100%;" maxlength="80"/></div>
                                        </div>
                                        </td></tr><tr>  <td class="option_first_col"> 
                                        Cover 
                                        <input type="hidden" value="51" name="quote_fields[]"/>
                                        <input type="hidden" value="Cover" name="field_name_51" id="field_name_51"/>
                                        <input type="hidden" value="51" name="field_id_51" id="field_id_51"/>
                                        </td><td class="option_second_col"><select style="width:100%;" name="field_51" id="field_51" onchange="cqFieldOption(51)"><option value="Same as Internal Pages">Same as Internal Pages</option><option value="250gsm Gloss">250gsm Gloss</option><option value="250gsm Silk">250gsm Silk</option><option value="300gsm Gloss">300gsm Gloss</option><option value="300gsm Silk">300gsm Silk</option><option value="250gsm Uncoated">250gsm Uncoated</option><option value="-1">Custom</option><input type="hidden" value="51" name="custom_field[]"/><div class="extra_option">
                                        <div id="div_custom_51" style="display:none;"><input type="text" name="field_custom_51" value="" id="field_custom_51" style="width:100%;" maxlength="80"/></div>
                                        </div>
                                        </td></tr><tr>  <td class="option_first_col"> 
                                        Number of pages including cover 
                                        <input type="hidden" value="53" name="quote_fields[]"/>
                                        <input type="hidden" value="Number of pages including cover" name="field_name_53" id="field_name_53"/>
                                        <input type="hidden" value="53" name="field_id_53" id="field_id_53"/>
                                        </td><td class="option_second_col"><select style="width:100%;" name="field_53" id="field_53" onchange="cqFieldOption(53)"><option value="8">8</option><option value="12">12</option><option value="16">16</option><option value="20">20</option><option value="24">24</option><option value="28">28</option><option value="32">32</option><option value="36">36</option><option value="40">40</option><option value="44">44</option><option value="48">48</option><option value="52">52</option><option value="56">56</option><option value="60">60</option><option value="64">64</option><option value="68">68</option><option value="72">72</option><option value="76">76</option><option value="80">80</option><option value="84">84</option><option value="88">88</option><option value="92">92</option><option value="96">96</option><option value="100">100</option><option value="104">104</option><option value="108">108</option><option value="112">112</option><option value="116">116</option><option value="120">120</option><option value="-1">Custom</option><input type="hidden" value="53" name="custom_field[]"/><div class="extra_option">
                                        <div id="div_custom_53" style="display:none;"><input type="text" name="field_custom_53" value="" id="field_custom_53" style="width:100%;" maxlength="80"/></div>
                                        </div>
                                        </td></tr><tr>  <td class="option_first_col"> 
                                        Internal Pages 
                                        <input type="hidden" value="54" name="quote_fields[]"/>
                                        <input type="hidden" value="Internal Pages" name="field_name_54" id="field_name_54"/>
                                        <input type="hidden" value="54" name="field_id_54" id="field_id_54"/>
                                        </td><td class="option_second_col"><select style="width:100%;" name="field_54" id="field_54" onchange="cqFieldOption(54)"><option value="Printed Full Colour">Printed Full Colour</option><option value="Printed Black/White">Printed Black/White</option><option value="Printed 1PMS Colours">Printed 1PMS Colours</option><option value="Printed 2PMS Colours">Printed 2PMS Colours</option><option value="-1">Custom</option><input type="hidden" value="54" name="custom_field[]"/><div class="extra_option">
                                        <div id="div_custom_54" style="display:none;"><input type="text" name="field_custom_54" value="" id="field_custom_54" style="width:100%;" maxlength="80"/></div>
                                        </div>
                                        </td></tr><tr>  <td class="option_first_col"> 
                                        Cover 
                                        <input type="hidden" value="55" name="quote_fields[]"/>
                                        <input type="hidden" value="Cover" name="field_name_55" id="field_name_55"/>
                                        <input type="hidden" value="55" name="field_id_55" id="field_id_55"/>
                                        </td><td class="option_second_col"><select style="width:100%;" name="field_55" id="field_55" onchange="cqFieldOption(55)"><option value="Printed Full Colour">Printed Full Colour</option><option value="Printed Black/White">Printed Black/White</option><option value="-1">Custom</option><input type="hidden" value="55" name="custom_field[]"/><div class="extra_option">
                                        <div id="div_custom_55" style="display:none;"><input type="text" name="field_custom_55" value="" id="field_custom_55" style="width:100%;" maxlength="80"/></div>
                                        </div>
                                        </td></tr><tr>  <td class="option_first_col"> 
                                        Binding 
                                        <input type="hidden" value="58" name="quote_fields[]"/>
                                        <input type="hidden" value="Binding" name="field_name_58" id="field_name_58"/>
                                        <input type="hidden" value="58" name="field_id_58" id="field_id_58"/>
                                        </td><td class="option_second_col"><select style="width:100%;" name="field_58" id="field_58" onchange="cqFieldOption(58)"><option value="Saddlestitch (2 staples in middle)">Saddlestitch (2 staples in middle)</option><option value="Burst Bound or Perfect Bound">Burst Bound or Perfect Bound</option><option value="Wiro Binding">Wiro Binding</option><option value="-1">Custom</option><input type="hidden" value="58" name="custom_field[]"/><div class="extra_option">
                                        <div id="div_custom_58" style="display:none;"><input type="text" name="field_custom_58" value="" id="field_custom_58" style="width:100%;" maxlength="80"/></div>
                                        </div>
                                        </td></tr><tr>  <td class="option_first_col"> 
                                        Laminate Cover 
                                        <input type="hidden" value="56" name="quote_fields[]"/>
                                        <input type="hidden" value="Laminate Cover" name="field_name_56" id="field_name_56"/>
                                        <input type="hidden" value="56" name="field_id_56" id="field_id_56"/>
                                        </td><td class="option_second_col"><select style="width:100%;" name="field_56" id="field_56" onchange="cqFieldOption(56)"><option value="None">None</option><option value="Machine varnish 1 side">Machine varnish 1 side</option><option value="Machine varnish 2 sides">Machine varnish 2 sides</option><option value="Matt lamianted 1 side">Matt lamianted 1 side</option><option value="Matt laminated 2 sides">Matt laminated 2 sides</option><option value="Gloss laminated 1 sides">Gloss laminated 1 sides</option><option value="Gloss laminated 2 sides">Gloss laminated 2 sides</option><option value="-1">Custom</option><input type="hidden" value="56" name="custom_field[]"/><div class="extra_option">
                                        <div id="div_custom_56" style="display:none;"><input type="text" name="field_custom_56" value="" id="field_custom_56" style="width:100%;" maxlength="80"/></div>
                                        </div>
                                        </td></tr><tr>  <td class="option_first_col"> 
                                        Cover Special Finish 
                                        <input type="hidden" value="57" name="quote_fields[]"/>
                                        <input type="hidden" value="Cover Special Finish" name="field_name_57" id="field_name_57"/>
                                        <input type="hidden" value="57" name="field_id_57" id="field_id_57"/>
                                        </td><td class="option_second_col"><select style="width:100%;" name="field_57" id="field_57" onchange="cqFieldOption(57)"><option value="None">None</option><option value="Spot UV 1 Side">Spot UV 1 Side</option><option value="Spot UV 2 Sides">Spot UV 2 Sides</option><option value="Embossing">Embossing</option><option value="Foil">Foil</option><option value="-1">Custom</option><input type="hidden" value="57" name="custom_field[]"/><div class="extra_option">
                                        <div id="div_custom_57" style="display:none;"><input type="text" name="field_custom_57" value="" id="field_custom_57" style="width:100%;" maxlength="80"/></div>
                                        </div>
                                        </td></tr><tr>  <td class="option_first_col"> 
                                        Artwork Supplied In 
                                        <input type="hidden" value="59" name="quote_fields[]"/>
                                        <input type="hidden" value="Artwork Supplied In" name="field_name_59" id="field_name_59"/>
                                        <input type="hidden" value="59" name="field_id_59" id="field_id_59"/>
                                        </td><td class="option_second_col"><select style="width:100%;" name="field_59" id="field_59" onchange="cqFieldOption(59)"><option value="Ready to print PDF">Ready to print PDF</option><option value="Ready to print Illustrator">Ready to print Illustrator</option><option value="Ready to print photoshop">Ready to print photoshop</option><option value="Power Point">Power Point</option><option value="Microsoft Word">Microsoft Word</option><option value="Design to be created by 1Print">Design to be created by 1Print</option><option value="-1">Custom</option><input type="hidden" value="59" name="custom_field[]"/><div class="extra_option">
                                        <div id="div_custom_59" style="display:none;"><input type="text" name="field_custom_59" value="" id="field_custom_59" style="width:100%;" maxlength="80"/></div>
                                        </div>
                                        </td></tr><tr>  <td class="option_first_col"> 
                                        Proof Required 
                                        <input type="hidden" value="62" name="quote_fields[]"/>
                                        <input type="hidden" value="Proof Required" name="field_name_62" id="field_name_62"/>
                                        <input type="hidden" value="62" name="field_id_62" id="field_id_62"/>
                                        </td><td class="option_second_col"><select style="width:100%;" name="field_62" id="field_62" onchange="cqFieldOption(62)"><option value="None">None</option><option value="Soft Copy PDF">Soft Copy PDF</option><option value="High Res Hard Copy">High Res Hard Copy</option><option value="-1">Custom</option><input type="hidden" value="62" name="custom_field[]"/><div class="extra_option">
                                        <div id="div_custom_62" style="display:none;"><input type="text" name="field_custom_62" value="" id="field_custom_62" style="width:100%;" maxlength="80"/></div>
                                        </div>
                                        </td></tr><tr>  <td class="option_first_col"> 
                                        Quantity 
                                        <input type="hidden" value="66" name="quote_fields[]"/>
                                        <input type="hidden" value="Quantity" name="field_name_66" id="field_name_66"/>
                                        <input type="hidden" value="66" name="field_id_66" id="field_id_66"/>
                                        </td><td class="option_second_col"><select style="width:100%;" name="field_66" id="field_66" onchange="cqFieldOption(66)"><option value="100">100</option><option value="150">150</option><option value="200">200</option><option value="250">250</option><option value="300">300</option><option value="400">400</option><option value="500">500</option><option value="750">750</option><option value="1000">1000</option><option value="2000">2000</option><option value="2500">2500</option><option value="3000">3000</option><option value="3500">3500</option><option value="4000">4000</option><option value="4500">4500</option><option value="5000">5000</option><option value="6000">6000</option><option value="7000">7000</option><option value="8000">8000</option><option value="9000">9000</option><option value="10000">10000</option><option value="-1">Custom</option><input type="hidden" value="66" name="custom_field[]"/><div class="extra_option">
                                        <div id="div_custom_66" style="display:none;"><input type="text" name="field_custom_66" value="" id="field_custom_66" style="width:100%;" maxlength="80"/></div>
                                        </div>
                                        </td></tr></table></div></td>
                                        </tr>
                                            </table>
                                        </tr><tr>
                                            <td valign="top" style="padding-top:3px; vertical-align:top" class="one-line one-line-title"><strong>Job Description: </strong></td>
                                            <td valign="top" class="one-line one-text st-input"><input type="hidden" name="custom_product" value="5"><textarea name="comments" wrap="" cols="" rows="8" style="font-size: 13px; font-family: Arial; "></textarea></td>
                                        </tr>
                                        <tr>
                                            <td height="25" class="one-line one-line-title"><strong>Delivery Postcode:</strong></td>
                                            <td class="one-line st-input"><input type="text" name="delivery_location" id="delivery_location" maxlength="80"></td>
                                        </tr>
                                        <tr>
                                            <td height="25" class="one-line one-line-title"><strong>Business Name:</strong></td>
                                            <td class="one-line st-input"><input type="text" name="company" id="company" maxlength="80"></td>
                                        </tr>
                                        <tr>
                                            <td class="one-line one-line-title">Your 
                                            Name: </font><span style="color:red">*</span></td>
                                            <td class="one-line st-input"><input type="text" name="name" id="name" maxlength="80"></td>
                                        </tr>
                                        <tr>
                                            <td height="25" class="one-line one-line-title">Email:<span style="color:red">*</span></td>
                                            <td class="one-line st-input"><input type="text" name="email" id="email" maxlength="80"></td>
                                        </tr>
                                        <tr>
                                            <td height="25" class="one-line one-line-title">Telephone:<span style="color:red">*</span> </td>
                                            <td class="one-line st-input"><input type="text" name="phone" id="phone" maxlength="80"></td>
                                        </tr>
                                        <tr class="tr-pt15">
                                            <td colspan="2" class="one-line one-line-title" style="padding-bottom:20px;">By previewing your artwork we can quote your job precisely</td>
                                        </tr>
                                        
                                        <tr>
                                        <td height="25" align="left" class="one-line one-line-title">Preview 1</td>
                                            <td class="one-line" style="padding:5px;"><input type="file" name="file1" id="file1"></td>
                                        </tr>
                                        <tr>
                                        <td height="25" align="left" class="one-line one-line-title">Preview 2</td>
                                            <td class="one-line" style="padding:5px;"><input type="file" name="file2" id="file2"></td>
                                        </tr>
                                        <tr>
                                        <td height="25" align="left" class="one-line one-line-title">Preview 3</td>
                                            <td class="one-line" style="padding:5px;"><input type="file" name="file3" id="file3"></td>
                                        </tr>
                                        <tr class="tr-pt15">
                                        <td height="25" align="left" class="one-line one-line-title">How did you find us?</td>
                                        <td class="one-line"><select name="select"><option value="1">Google</option><option value="2">Yellow Pages</option><option value="3">Yahoo</option><option value="4">Bing/MSN</option><option value="5">Link from another site</option><option value="6">Referral</option><option value="7">Mail Drop</option><option value="8">Other</option></select></td>
                                                                                                </tr>

                                        <tr class="tr-pt15">
                                            <td valign="top" colspan="3" class="one-line">
                                                <div class="subscribe_holder">
                                                    <input class="newsletter_subscribe" type="checkbox" name="sigin_in_newsletter" id="sigin_in_newsletter" value="yes" checked/>
                                                </div>
                                                <div class="subscribe_text">
                                                    Subscribe to our newsletter for special offers
                                                </div>
                                                <div style="display:none"><input type="checkbox" name="validate_form" id="validate_form" value="yes" /></div>
                                                <div class="clear"></div>
                                            </td>
                                        </tr>
                                        <tr class="tr-pt15">
                                            <td class="one-line" style="margin-top:10px;" colspan="2">
                                                <input type="submit" class="submit_btn blue_button" value="Submit" name="postemail" id="postemail" />
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                </form>
                                <div class="quotes_login" style="padding-top:20px; padding-bottom:20px; text-align:right"><a class="black_link" href=""> Login &raquo;</a></div>

                                </div>
                                <div class="clear"></div>


                            </div>
                        </div>
                    </div>
                </div>        
                    <div style="clear: both;"></div>    
            </div>

            <div class = "product_div" id="product_div_id_2" style="display:none">
                <div class="text_holder">
                    <div class="main_product_container brochure_holder">                            
                        	
                        <div class="main_left">
                            <div class="main_left_left">
                                <h1>Online Brochure Printing</h1>
                                <h3>Make a lasting impression with a professionally printed brochure.</h3>
                                <p>Brochures are used for everything from targeted letterbox drops, direct mail marketing, to customer acquisition via handouts. They can effectively express what your company does quickly and professionally.
                                </p><p>&nbsp;</p>
                                <p>
                                Our brochure printing service offers our customers quality results that resonate with their audience. We design in-house and print directly from our own offset printing machines.
                                </p><p>&nbsp;</p>
                                <p>
                                Brochure printing is available in sizes A2, A3, A4, A5 or DL in full colour, and may be single or double sided. Our brochures are produced on high quality matt or gloss stocks.
                                </p>
                                <h3 class="padding_top">Machine varnish for a superior finish (offset only)</h3>
                                <p>
                                Machine vanishing ensures a silky smooth finish. We use this finish on booklets that have large areas of ink coverage to protect the product and reduce finger marking and scuffing or simply to enhance the look and feel of the finished product.
                                <br style="">
                                <a class="black_link_underline" href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/contact.php">Contact us for more information</a>
                                </p>
                                <br style="">
                                    <a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/flyers-printing" class="flyer_link">
                                        <div id="u56029-7">
                                            <img src="/web/20180903152038im_/http://www.1print.net.au/images/design icons-04.png" width="40" height="40" style="float:left">
                                            <div style="float:left;height:46px">
                                                <span class="span_looking">Are you looking for flyers (flat sheets)?</span> Click here
                                            </div>
                                        </div>
                                    </a>
                                <div class="clear"></div>

                                <div class="size_menu">
                                    <div class="size_4pages size_row">
                                        <div class="size_col1">
                                            <img src="/web/20180903152038im_/http://www.1print.net.au/images/brochure-4pages-single.png" alt="4 Pages Single Fold" title="4 Pages Single Fold">
                                            <div class="fold_title">4 Pages</div>
                                            <div class="fold_info">Single Fold</div>
                                        </div>
                                        <div class="bro_setup">
                                            <a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/brochures-printing/a4-to-dl" class="bro_link">
                                            </a>
                                            <div class="bro_sizing">DL</div>
                                            <div class="bro_title">4 Pages</div>
                                            <div class="bro_sizing_sml">99 x 210m(folded)</div>
                                            <div class="bro_dl"><a href="templates/1print_brochure_4pgdl_198x210mm.pdf" target="_blank">Download Template</a></div>
                                        </div>
                                        <div class="bro_setup">
                                            <a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/brochures-printing/a4-to-a5" class="bro_link">
                                            </a>
                                            <div class="bro_sizing">A5</div>
                                            <div class="bro_title">4 Pages</div>
                                            <div class="bro_sizing_sml">148 x 210m(folded)</div>
                                            <div class="bro_dl"><a href="templates/1print_brochure_4pga5_296x210mm.pdf" target="_blank">Download Template</a></div>
                                        </div>
                                        <div class="bro_setup">
                                            <a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/brochures-printing/a3-to-a4" class="bro_link">
                                            </a>
                                            <div class="bro_sizing">A4</div>
                                            <div class="bro_title">4 Pages</div>
                                            <div class="bro_sizing_sml">210 x 297mm (folded)</div>
                                            <div class="bro_dl"><a href="templates/1print_brochure_4pga4_420x297mm.pdf" target="_blank">Download Template</a></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    
                                    <div class="size_6rpages size_row">
                                        <div class="size_col1">
                                            <img src="/web/20180903152038im_/http://www.1print.net.au/images/brochure folds-09.jpg" alt="4 Page Landscape" title="4 Page Landscape">
                                            <div class="fold_title">4 Page</div>
                                            <div class="fold_info">Landscape</div>
                                        </div>
                                        <div class="bro_setup">
                                            <a href="templates/1print_brochure_landscape_4pp_dl_420x99.pdf" target="_blank" class="bro_link">
                                            </a>
                                            <div class="bro_sizing">DL</div>
                                            <div class="bro_title">4 Page Landscape</div>
                                            <div class="bro_sizing_sml">99 x 420m(folded)</div>
                                            <div class="bro_dl"><a href="templates/1print_brochure_landscape_4pp_dl_420x99.pdf" target="_blank">Download Template</a></div>
                                        </div>
                                        <div class="bro_setup">
                                            <a href="templates/1print_brochure_landscape_4pp_a5_420x148.5.pdf" target="_blank" class="bro_link">
                                            </a>
                                            <div class="bro_sizing">A5</div>
                                            <div class="bro_title">4 Page Landscape</div>
                                            <div class="bro_sizing_sml">148 x 420m(folded)</div>
                                            <div class="bro_dl"><a href="templates/1print_brochure_landscape_4pp_a5_420x148.5.pdf" target="_blank">Download Template</a></div>
                                        </div>
                                        <div class="bro_setup">
                                            <a href="templates/1print_brochure_landscape_4pp_a4_594x210.pdf" target="_blank" class="bro_link">
                                            </a>
                                            <div class="bro_sizing">A4</div>
                                            <div class="bro_title">4 Page Landscape</div>
                                            <div class="bro_sizing_sml">210 x 594mm (folded)</div>
                                            <div class="bro_dl"><a href="templates/1print_brochure_landscape_4pp_a4_594x210.pdf" target="_blank">Download Template</a></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    
                                    <div class="size_6rpages size_row">
                                        <div class="size_col1">
                                            <img src="/web/20180903152038im_/http://www.1print.net.au/images/brochure-6pages-roll.png" alt="6 Pages Roll Fold" title="6 Pages Roll Fold">
                                            <div class="fold_title">6 Pages</div>
                                            <div class="fold_info">Roll Fold</div>
                                        </div>
                                        <div class="bro_setup">
                                            <a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/brochures-printing/a4-to-dl" class="bro_link">
                                            </a>
                                            <div class="bro_sizing">DL</div>
                                            <div class="bro_title">6 Pages</div>
                                            <div class="bro_sizing_sml">99 x 210m(folded)</div>
                                            <div class="bro_dl"><a href="templates/1print_brochure_6pgdl_210x297mm.pdf" target="_blank">Download Template</a></div>
                                        </div>
                                        <div class="bro_setup">
                                            <a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/brochures-printing/a4-to-a5" class="bro_link">
                                            </a>
                                            <div class="bro_sizing">A5</div>
                                            <div class="bro_title">6 Pages</div>
                                            <div class="bro_sizing_sml">148 x 210m(folded)</div>
                                            <div class="bro_dl"><a href="templates/1print_brochure_6pga5_296x210mm.pdf" target="_blank">Download Template</a></div>
                                        </div>
                                        <div class="bro_setup">
                                            <a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/brochures-printing/a3-to-a4" class="bro_link">
                                            </a>
                                            <div class="bro_sizing">A4</div>
                                            <div class="bro_title">6 Pages</div>
                                            <div class="bro_sizing_sml">210 x 297mm (folded)</div>
                                            <div class="bro_dl"><a href="templates/1print_brochure_6pga4_627x297mm.pdf" target="_blank">Download Template</a></div>
                                        </div>
                                        
                                        <div class="clear"></div>
                                    </div>
                                    
                                    
                                    
                                    <div class="size_6zpages size_row">
                                        <div class="size_col1">
                                            <img src="/web/20180903152038im_/http://www.1print.net.au/images/brochure-6pages-z.png" alt="6 Pages Z Fold" title="6 Pages Z Fold">
                                            <div class="fold_title">6 Pages</div>
                                            <div class="fold_info">Z Fold</div>
                                        </div>
                                        <div class="bro_setup">
                                            <a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/brochures-printing/a4-to-dl" class="bro_link">
                                            </a>
                                            <div class="bro_sizing">DL</div>
                                            <div class="bro_title">6 Pages</div>
                                            <div class="bro_sizing_sml">99 x 210m(folded)</div>
                                            <div class="bro_dl"><a href="templates/1print_brochure_6pgdl_210x297mm_z_fold.pdf" target="_blank">Download Template</a></div>
                                        </div>
                                        <div class="bro_setup">
                                            <a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/brochures-printing/a4-to-a5" class="bro_link">
                                            </a>
                                            <div class="bro_sizing">A5</div>
                                            <div class="bro_title">6 Pages</div>
                                            <div class="bro_sizing_sml">148 x 210m(folded)</div>
                                            <div class="bro_dl"><a href="templates/1print_brochure_6pga5_296x210mm_z_fold.pdf" target="_blank">Download Template</a></div>
                                        </div>
                                        <div class="bro_setup">
                                            <a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/brochures-printing/a3-to-a4" class="bro_link">
                                            </a>
                                            <div class="bro_sizing">A4</div>
                                            <div class="bro_title">6 Pages</div>
                                            <div class="bro_sizing_sml">210 x 297mm (folded)</div>
                                            <div class="bro_dl"><a href="templates/1print_brochure_6pga4_627x297mm_z_fold.pdf" target="_blank">Download Template</a></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    
                                    
                                    
                                    <div class="size_8rpages size_row">
                                        <div class="size_col1">
                                            <img src="/web/20180903152038im_/http://www.1print.net.au/images/brochure-8pages-roll.png" alt="8 Pages Roll Fold" title="8 Pages Roll Fold">
                                            <div class="fold_title">8 Pages</div>
                                            <div class="fold_info">Roll Fold</div>
                                        </div>
                                        <div class="bro_setup">
                                            <a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/brochures-printing/a4-to-dl" class="bro_link">
                                            </a>
                                            <div class="bro_sizing">DL</div>
                                            <div class="bro_title">8 Pages</div>
                                            <div class="bro_sizing_sml">99 x 210m(folded)</div>
                                            <div class="bro_dl"><a href="templates/1print_brochure_8pgdl_391x210mm.pdf" target="_blank">Download Template</a></div>
                                        </div>
                                        <div class="bro_setup">
                                            <a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/brochures-printing/a4-to-a5" class="bro_link">
                                            </a>
                                            <div class="bro_sizing">A5</div>
                                            <div class="bro_title">8 Pages</div>
                                            <div class="bro_sizing_sml">148 x 210m(folded)</div>
                                            <div class="bro_dl"><a href="templates/1print_brochure_8pga5_583x210mm.pdf" target="_blank">Download Template</a></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    
                                    
                                    
                                    <div class="size_8cpages size_row">
                                        <div class="size_col1">
                                            <img src="/web/20180903152038im_/http://www.1print.net.au/images/brochure-8pages-c.png" alt="8 Pages Concertina Fold" title="8 Pages Concertina Fold">
                                            <div class="fold_title">8 Pages</div>
                                            <div class="fold_info">Concertina Fold</div>
                                        </div>
                                        <div class="bro_setup">
                                            <a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/brochures-printing/a4-to-dl" class="bro_link">
                                            </a>
                                            <div class="bro_sizing">DL</div>
                                            <div class="bro_title">8 Pages</div>
                                            <div class="bro_sizing_sml">99 x 210m(folded)</div>
                                            <div class="bro_dl"><a href="templates/1print_brochure_8pgdl_391x210mm_concertina.pdf" target="_blank">Download Template</a></div>
                                        </div>
                                        <div class="bro_setup">
                                            <a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/brochures-printing/a4-to-a5" class="bro_link">
                                            </a>
                                            <div class="bro_sizing">A5</div>
                                            <div class="bro_title">8 Pages</div>
                                            <div class="bro_sizing_sml">148 x 210m(folded)</div>
                                            <div class="bro_dl"><a href="templates/1print_brochure_8pga5_583x210mm_concertina.pdf" target="_blank">Download Template</a></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>

                                </div>
                                                
                            </div>
                            <div class="main_left_right">
                                <div class="panel_pricing">
                                <h4>Pricing includes</h4>
                                <span class="option_indent"><a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/pre-flight-checks.php">Free Flight Check</a></span>
                                <span class="option_indent"><a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/pre-flight-checks.php">PDF Proof for your approval*</a></span>
                                <span class="option_indent"><a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/faq.php">Free Job Tracking</a></span>
                                <span class="option_indent"><a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/delivery.php">Free Delivery</a></span>
                                <p>&nbsp;</p>
                                <p class="small">* Limited to one PDF proof per print job.
                                Additional proofs will incur extra charges.</p>
                                </div>
                                <div class="panel_extras">
                                    <h4 class="padding_top">Optional Extras</h4>	
                                <p class="black">These options can be selected once your items have been added to your shopping cart</p>
                                <p>&nbsp;</p>
                                <span class="option_indent"><a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/faq.php">Machine Varnish - Gloss or Matt</a></span>
                                <span class="option_indent"><a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/pre-flight-checks.php">Convert your files to a print ready format</a></span>
                                <span class="option_indent"><a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/design-services.php">Graphic Design Services</a></span>
                                <span class="option_indent"><a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/colour-critical.php">Hard Copy Proofs</a></span>
                                <p>&nbsp;</p>
                                </div>
                                <div class="clear"></div>
                                    <h4>Brochure Folding</h4>	
                                    <div class="folding_list">
                                    <img src="/web/20180903152038im_/http://www.1print.net.au/images/brochure%20folds-01.png">
                                    <strong>Single Fold</strong>
                                    <span>4 Pages</span>
                                </div>
                                <div class="folding_list">
                                    <img src="/web/20180903152038im_/http://www.1print.net.au/images/brochure%20folds-04.png">
                                    <strong>Roll Fold</strong>
                                    <span>6 Pages</span>
                                </div>
                                <div class="folding_list">
                                    <img src="/web/20180903152038im_/http://www.1print.net.au/images/brochure%20folds-05.png">
                                    <strong>Z Fold</strong>
                                    <span>6 Pages</span>
                                </div>
                                <div class="folding_list">
                                    <img src="/web/20180903152038im_/http://www.1print.net.au/images/brochure%20folds-02.png">
                                    <strong>Roll Fold</strong>
                                    <span>8 Pages</span>
                                </div>
                                <div class="folding_list">
                                    <img src="/web/20180903152038im_/http://www.1print.net.au/images/brochure%20folds-03.png">
                                    <strong>Concertina</strong>
                                    <span>8 Pages</span>
                                </div>
                                <div class="clear"></div> 

                                <a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/business-cards-printing "><div class="bcards500 notop"></div></a>

                            </div>	
  
                            <div class="clear"></div>
                            <div style="clear: both;"></div> 
                            
                            
                                        
                            
                            <div class="main_left_bottom1">
                            
                                <div class="product_info_express no_margin">
                                    <a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/urgent-printing">
                                        <div class="product_info_express_img">
                                        </div>
                                        <h4>Express Printing</h4>
                                        <p>For a guaranteed 48 hour despatch after your order is placed</p>
                                        </a><a class="blue_link" href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/urgent-printing">read more+</a>
                                    
                                </div>
                                
                                
                                
                                <div class="product_info_design margin_left20">
                                    <a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/design-services.php">
                                        <div class="product_info_design_img">
                                        </div>
                                        <h4>Design Services</h4>
                                        <p>Need artwork setup? Our team of experienced designers can help</p>
                                        </a><a class="blue_link" href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/design-services.php">read more+</a>
                                    
                                </div>
                                <div class="product_info_gallery gallery_brochure">
                                    <a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/brochures-gallery.php">
                                        <div class="product_info_gallery_img">
                                        </div>
                                        <h4>Gallery</h4>
                                        <p>Looking for design inspiration? See examples of our work</p>
                                        </a><a class="blue_link" href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/brochures-gallery.php">read more+</a>
                                    
                                </div>
                                <div class="product_info_order">
                                    <a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/order.php">
                                        <div class="product_info_order_img">
                                        </div>
                                        <h4>Order process</h4>
                                        <p>The ordering process explained</p>
                                        </a><a class="blue_link" href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/order.php">read more+</a>
                                    
                                </div>
                                <div class="product_info_guidelines">
                                    <a href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/artwork-specifications.php">
                                        <div class="product_info_guidelines_img">
                                        </div>
                                        <h4>File Guidelines</h4>
                                        <p>Print specifications to achieve best printing results</p>
                                        </a><a class="blue_link" href="http://web.archive.org/web/20180903152038/http://www.1print.net.au/artwork-specifications.php">read more+</a>
                                    
                                </div>
                                
                                <div class="clear"></div>
                            
                            
                            
                            
                            </div>

                        </div>
                        <div class="main_right">
                        <div class="clearfix grpelem" id="ppu4866-6"><!-- column -->
                <div class="product_option_panel">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tbody><tr>
                                    <td><div class="product_options_header">Options &amp; Prices</div></td>
                                </tr>
                                <tr>
                                    <td class="product_options_price_bkgrd" align="left">

                                        <table cellpadding="0" cellspacing="0" border="0" width="236" class="product_option_holder">
                                            <tbody><tr>

                                                <td colspan="2" align="left" style="padding-top:5px;">
                                                    <div class="prooption_desc">Your price will automatically update according to your options chosen.
                                                                                                                                <script style="">
                                                            jQuery(document).ready(function ($) {
                                                                if ($('#productsizelist').val()) {
                                                                    console.log($('#productsizelist').val());
                                                                    console.log(' start working ...');
                                                                    var i = 0;
                                                                    $('#productstocklist option').each(function () {
                                                                        i++;
                                                                        console.log(' counting options ...' + i);
                                                                        console.log($(this).val());
                                                                        if ($(this).val() == '200GSM GLOSS OR SILK') {
                                                                            $(this).remove();
                                                                        }
                                                                    });
                                                                }
                                                            });
                                                        </script>
                                                                                                                            </div></td>
                                            </tr>
                                                                                    <tr>
                                                            <td class="pulldown">
                                                        
                                                                    <strong>Folded Size:</strong>

                                                                    

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="content_left"><select name="productsizelist" id="productsizelist" style="width: 225px; font-size: 12px;" onchange="UpdateProductPriceBrochure(57)"><option value="DL 99 x 210">DL 99 x 210</option><option value="A5 148 x 210">A5 148 x 210</option><option value="A4 210 x 297">A4 210 x 297</option></select></td>
                                                        </tr>
                                                                
                                                            <tr>
                                                            <td class="pulldown" '=""><strong>No. of Pages:</strong></td>
                                                        </tr>
                                                        <tr>
                                                            <!--Gabriel Modification - Change default Brochures 57 DL Size -->
                                                            <td class="content_left" id="brouchernopages"><select name="productpagelist2" id="productpagelist2" style="width: 225px; font-size: 12px;" onchange="UpdateProductPriceBrochure2(57)"><option value="4 PAGES">4 PAGES</option><option value="6 PAGES">6 PAGES</option></select></td>
                                                        </tr>
                                                        <tr style="display: none;">
                                                            <td id="brouchernopagesupdate" class="content_left"><select name="productpagelist2" id="productpagelist2" style="width: 225px; font-size: 12px;" onchange="UpdateProductPriceBrochure2(57)"><option value="4 PAGES">4 PAGES</option><option value="6 PAGES">6 PAGES</option></select></td>
                                                        </tr>
                                                        <tr style="display: none;">
                                                            <td id="brouchernopagesupdate1" class="content_left"><select name="productpagelist2" id="productpagelist2" style="width: 225px; font-size: 12px;" onchange="UpdateProductPriceBrochure2(57)"><option value="4 PAGES">4 PAGES</option><option value="6 PAGES">6 PAGES</option></select></td>
                                                        </tr>
                                                        
                                            
                                            
                                                                                                                <tr><td class="pulldown"><strong>Stock:</strong></td></tr>
                                                                                            <tr>
                                                            <td class="content_left"><select name="productstocklist" id="productstocklist" style="width: 225px; font-size: 12px;" onchange="UpdateProductPriceBrochure2(57)"><option value="150GSM GLOSS OR SILK">150GSM GLOSS OR SILK</option><option value="170GSM GLOSS OR SILK">170GSM GLOSS OR SILK</option><option value="250GSM GLOSS OR SILK">250GSM GLOSS OR SILK</option><option value="350GSM GLOSS OR SILK">350GSM GLOSS OR SILK</option></select></td>
                                                        </tr>
                                                        
                                                                                <tr>
                                                        <td class="pulldown"><strong>Colour:</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="content_left"><select name="productcolorlist" id="productcolorlist" style="width: 225px; font-size: 12px;" onchange="UpdateProductPriceBrochure(57)"><option value="FULL COLOUR">FULL COLOUR</option></select></td>
                                                    </tr>
                                                    
                                                                            <tr style="display:none; ">
                                                    <td class="content_left"><select name="productqtylist" id="productqtylist" style="width: 225px; font-size: 12px;" onchange="UpdateProductPrice(57)"><option value="50">50</option><option value="100">100</option><option value="150">150</option><option value="200">200</option><option value="250">250</option><option value="500">500</option><option value="1000">1000</option><option value="1500">1500</option><option value="2000">2000</option><option value="2500">2500</option><option value="3000">3000</option><option value="4000">4000</option><option value="5000">5000</option><option value="6000">6000</option><option value="7000">7000</option><option value="8000">8000</option><option value="9000">9000</option><option value="10000">10000</option></select></td>
                                                </tr>
                                                
                                                
                                                    
                                                                        
                                                
                                                    


                </tbody></table>
                </td>
                </tr>
                </tbody></table>
                </div>
                <!-- custom quote panel -->
                <div class="product_quote_panel">
                <table class="product_quote_holder" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                        <td class="product_options_quote">
                            <div class="product_quote_text">Looking for more options?</div>
                            <div class="product_quote_link"><a href="custom-quotes.php">Custom Quote</a></div>
                            <div class="clear"></div>
                        </td>
                    </tr>
                    <tr><td class="price_holder_spacer"></td></tr>
                </tbody></table>
                </div>


                <div class="product_price_panel">
                <table class="product_price_holder" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                        <td class="product_options_price_bkgrd" style="padding-top:5px;" align="left">
                            <div class="price_desc">Select items you would like to purchase, then press "Add to Cart"</div></td></tr>
                    <tr><td class="product_options_price_bkgrd" align="left">



                            <div id="productpriceupdate">
                                    <div id="refreshselectproduct"><form name="frmSetProductPrice" data-function-name="class_product_php_update_booklets_price" method="post" action="cart.php" onsubmit="return submitadd2cart(this)"><table width="230" align="left"><tbody><tr><td class="qty_header"><strong>Qty</strong></td><td class="kinds_header"><strong>Kinds</strong></td><td class="price_header"><strong>Price</strong></td><td class="buy_header"><strong>Buy</strong></td></tr><tr><td class="qty_left">50</td>
                            <td class="kinds_input"><input type="text" name="usersetqty_50-productid_57" id="usersetqty_50-productid_57" value="1" maxlength="2" style="width:30px" onkeyup="UpdateSelectedProductBooklet(&quot;usersetqty_50-productid_57&quot;, &quot;FULL COLOUR&quot;, &quot;150GSM GLOSS OR SILK&quot;, &quot;50&quot;, &quot;DL 99 x 210&quot;, &quot;4 PAGES&quot;, &quot;57&quot;, &quot;95.00&quot;)">&nbsp;</td>
                            <td id="updateselectedproductprice50" width="50px">$95.00<input type="hidden" name="updateselectedproductprice50" id="updateselectedproductprice50" value="95.00"></td><td><input type="checkbox" id="selectproduct[]" name="selectproduct[]" value="usersetqty_50-productid_57-price_95.00" onclick="AddBroucherProduct(this.value, &quot;usersetqty_50-productid_57&quot;)"></td></tr><tr><td class="qty_left">100</td>
                            <td class="kinds_input"><input type="text" name="usersetqty_100-productid_57" id="usersetqty_100-productid_57" value="1" maxlength="2" style="width:30px" onkeyup="UpdateSelectedProductBooklet(&quot;usersetqty_100-productid_57&quot;, &quot;FULL COLOUR&quot;, &quot;150GSM GLOSS OR SILK&quot;, &quot;100&quot;, &quot;DL 99 x 210&quot;, &quot;4 PAGES&quot;, &quot;57&quot;, &quot;124.00&quot;)">&nbsp;</td>
                            <td id="updateselectedproductprice100" width="50px">$124.00<input type="hidden" name="updateselectedproductprice100" id="updateselectedproductprice100" value="124.00"></td><td><input type="checkbox" id="selectproduct[]" name="selectproduct[]" value="usersetqty_100-productid_57-price_124.00" onclick="AddBroucherProduct(this.value, &quot;usersetqty_100-productid_57&quot;)"></td></tr><tr><td class="qty_left">150</td>
                            <td class="kinds_input"><input type="text" name="usersetqty_150-productid_57" id="usersetqty_150-productid_57" value="1" maxlength="2" style="width:30px" onkeyup="UpdateSelectedProductBooklet(&quot;usersetqty_150-productid_57&quot;, &quot;FULL COLOUR&quot;, &quot;150GSM GLOSS OR SILK&quot;, &quot;150&quot;, &quot;DL 99 x 210&quot;, &quot;4 PAGES&quot;, &quot;57&quot;, &quot;144.00&quot;)">&nbsp;</td>
                            <td id="updateselectedproductprice150" width="50px">$144.00<input type="hidden" name="updateselectedproductprice150" id="updateselectedproductprice150" value="144.00"></td><td><input type="checkbox" id="selectproduct[]" name="selectproduct[]" value="usersetqty_150-productid_57-price_144.00" onclick="AddBroucherProduct(this.value, &quot;usersetqty_150-productid_57&quot;)"></td></tr><tr><td class="qty_left">200</td>
                            <td class="kinds_input"><input type="text" name="usersetqty_200-productid_57" id="usersetqty_200-productid_57" value="1" maxlength="2" style="width:30px" onkeyup="UpdateSelectedProductBooklet(&quot;usersetqty_200-productid_57&quot;, &quot;FULL COLOUR&quot;, &quot;150GSM GLOSS OR SILK&quot;, &quot;200&quot;, &quot;DL 99 x 210&quot;, &quot;4 PAGES&quot;, &quot;57&quot;, &quot;158.00&quot;)">&nbsp;</td>
                            <td id="updateselectedproductprice200" width="50px">$158.00<input type="hidden" name="updateselectedproductprice200" id="updateselectedproductprice200" value="158.00"></td><td><input type="checkbox" id="selectproduct[]" name="selectproduct[]" value="usersetqty_200-productid_57-price_158.00" onclick="AddBroucherProduct(this.value, &quot;usersetqty_200-productid_57&quot;)"></td></tr><tr><td class="qty_left">250</td>
                            <td class="kinds_input"><input type="text" name="usersetqty_250-productid_57" id="usersetqty_250-productid_57" value="1" maxlength="2" style="width:30px" onkeyup="UpdateSelectedProductBooklet(&quot;usersetqty_250-productid_57&quot;, &quot;FULL COLOUR&quot;, &quot;150GSM GLOSS OR SILK&quot;, &quot;250&quot;, &quot;DL 99 x 210&quot;, &quot;4 PAGES&quot;, &quot;57&quot;, &quot;170.00&quot;)">&nbsp;</td>
                            <td id="updateselectedproductprice250" width="50px">$170.00<input type="hidden" name="updateselectedproductprice250" id="updateselectedproductprice250" value="170.00"></td><td><input type="checkbox" id="selectproduct[]" name="selectproduct[]" value="usersetqty_250-productid_57-price_170.00" onclick="AddBroucherProduct(this.value, &quot;usersetqty_250-productid_57&quot;)"></td></tr><tr><td class="qty_left">500</td>
                            <td class="kinds_input"><input type="text" name="usersetqty_500-productid_57" id="usersetqty_500-productid_57" value="1" maxlength="2" style="width:30px" onkeyup="UpdateSelectedProductBooklet(&quot;usersetqty_500-productid_57&quot;, &quot;FULL COLOUR&quot;, &quot;150GSM GLOSS OR SILK&quot;, &quot;500&quot;, &quot;DL 99 x 210&quot;, &quot;4 PAGES&quot;, &quot;57&quot;, &quot;210.00&quot;)">&nbsp;</td>
                            <td id="updateselectedproductprice500" width="50px">$210.00<input type="hidden" name="updateselectedproductprice500" id="updateselectedproductprice500" value="210.00"></td><td><input type="checkbox" id="selectproduct[]" name="selectproduct[]" value="usersetqty_500-productid_57-price_210.00" onclick="AddBroucherProduct(this.value, &quot;usersetqty_500-productid_57&quot;)"></td></tr><tr><td class="qty_left">1000</td>
                            <td class="kinds_input"><input type="text" name="usersetqty_1000-productid_57" id="usersetqty_1000-productid_57" value="1" maxlength="2" style="width:30px" onkeyup="UpdateSelectedProductBooklet(&quot;usersetqty_1000-productid_57&quot;, &quot;FULL COLOUR&quot;, &quot;150GSM GLOSS OR SILK&quot;, &quot;1000&quot;, &quot;DL 99 x 210&quot;, &quot;4 PAGES&quot;, &quot;57&quot;, &quot;220.00&quot;)">&nbsp;</td>
                            <td id="updateselectedproductprice1000" width="50px">$220.00<input type="hidden" name="updateselectedproductprice1000" id="updateselectedproductprice1000" value="220.00"></td><td><input type="checkbox" id="selectproduct[]" name="selectproduct[]" value="usersetqty_1000-productid_57-price_220.00" onclick="AddBroucherProduct(this.value, &quot;usersetqty_1000-productid_57&quot;)"></td></tr><tr><td class="qty_left">1500</td>
                            <td class="kinds_input"><input type="text" name="usersetqty_1500-productid_57" id="usersetqty_1500-productid_57" value="1" maxlength="2" style="width:30px" onkeyup="UpdateSelectedProductBooklet(&quot;usersetqty_1500-productid_57&quot;, &quot;FULL COLOUR&quot;, &quot;150GSM GLOSS OR SILK&quot;, &quot;1500&quot;, &quot;DL 99 x 210&quot;, &quot;4 PAGES&quot;, &quot;57&quot;, &quot;285.00&quot;)">&nbsp;</td>
                            <td id="updateselectedproductprice1500" width="50px">$285.00<input type="hidden" name="updateselectedproductprice1500" id="updateselectedproductprice1500" value="285.00"></td><td><input type="checkbox" id="selectproduct[]" name="selectproduct[]" value="usersetqty_1500-productid_57-price_285.00" onclick="AddBroucherProduct(this.value, &quot;usersetqty_1500-productid_57&quot;)"></td></tr><tr><td class="qty_left">2000</td>
                            <td class="kinds_input"><input type="text" name="usersetqty_2000-productid_57" id="usersetqty_2000-productid_57" value="1" maxlength="2" style="width:30px" onkeyup="UpdateSelectedProductBooklet(&quot;usersetqty_2000-productid_57&quot;, &quot;FULL COLOUR&quot;, &quot;150GSM GLOSS OR SILK&quot;, &quot;2000&quot;, &quot;DL 99 x 210&quot;, &quot;4 PAGES&quot;, &quot;57&quot;, &quot;305.00&quot;)">&nbsp;</td>
                            <td id="updateselectedproductprice2000" width="50px">$305.00<input type="hidden" name="updateselectedproductprice2000" id="updateselectedproductprice2000" value="305.00"></td><td><input type="checkbox" id="selectproduct[]" name="selectproduct[]" value="usersetqty_2000-productid_57-price_305.00" onclick="AddBroucherProduct(this.value, &quot;usersetqty_2000-productid_57&quot;)"></td></tr><tr><td class="qty_left">2500</td>
                            <td class="kinds_input"><input type="text" name="usersetqty_2500-productid_57" id="usersetqty_2500-productid_57" value="1" maxlength="2" style="width:30px" onkeyup="UpdateSelectedProductBooklet(&quot;usersetqty_2500-productid_57&quot;, &quot;FULL COLOUR&quot;, &quot;150GSM GLOSS OR SILK&quot;, &quot;2500&quot;, &quot;DL 99 x 210&quot;, &quot;4 PAGES&quot;, &quot;57&quot;, &quot;350.00&quot;)">&nbsp;</td>
                            <td id="updateselectedproductprice2500" width="50px">$350.00<input type="hidden" name="updateselectedproductprice2500" id="updateselectedproductprice2500" value="350.00"></td><td><input type="checkbox" id="selectproduct[]" name="selectproduct[]" value="usersetqty_2500-productid_57-price_350.00" onclick="AddBroucherProduct(this.value, &quot;usersetqty_2500-productid_57&quot;)"></td></tr><tr><td class="qty_left">3000</td>
                            <td class="kinds_input"><input type="text" name="usersetqty_3000-productid_57" id="usersetqty_3000-productid_57" value="1" maxlength="2" style="width:30px" onkeyup="UpdateSelectedProductBooklet(&quot;usersetqty_3000-productid_57&quot;, &quot;FULL COLOUR&quot;, &quot;150GSM GLOSS OR SILK&quot;, &quot;3000&quot;, &quot;DL 99 x 210&quot;, &quot;4 PAGES&quot;, &quot;57&quot;, &quot;360.00&quot;)">&nbsp;</td>
                            <td id="updateselectedproductprice3000" width="50px">$360.00<input type="hidden" name="updateselectedproductprice3000" id="updateselectedproductprice3000" value="360.00"></td><td><input type="checkbox" id="selectproduct[]" name="selectproduct[]" value="usersetqty_3000-productid_57-price_360.00" onclick="AddBroucherProduct(this.value, &quot;usersetqty_3000-productid_57&quot;)"></td></tr><tr><td class="qty_left">4000</td>
                            <td class="kinds_input"><input type="text" name="usersetqty_4000-productid_57" id="usersetqty_4000-productid_57" value="1" maxlength="2" style="width:30px" onkeyup="UpdateSelectedProductBooklet(&quot;usersetqty_4000-productid_57&quot;, &quot;FULL COLOUR&quot;, &quot;150GSM GLOSS OR SILK&quot;, &quot;4000&quot;, &quot;DL 99 x 210&quot;, &quot;4 PAGES&quot;, &quot;57&quot;, &quot;415.00&quot;)">&nbsp;</td>
                            <td id="updateselectedproductprice4000" width="50px">$415.00<input type="hidden" name="updateselectedproductprice4000" id="updateselectedproductprice4000" value="415.00"></td><td><input type="checkbox" id="selectproduct[]" name="selectproduct[]" value="usersetqty_4000-productid_57-price_415.00" onclick="AddBroucherProduct(this.value, &quot;usersetqty_4000-productid_57&quot;)"></td></tr><tr><td class="qty_left">5000</td>
                            <td class="kinds_input"><input type="text" name="usersetqty_5000-productid_57" id="usersetqty_5000-productid_57" value="1" maxlength="2" style="width:30px" onkeyup="UpdateSelectedProductBooklet(&quot;usersetqty_5000-productid_57&quot;, &quot;FULL COLOUR&quot;, &quot;150GSM GLOSS OR SILK&quot;, &quot;5000&quot;, &quot;DL 99 x 210&quot;, &quot;4 PAGES&quot;, &quot;57&quot;, &quot;470.00&quot;)">&nbsp;</td>
                            <td id="updateselectedproductprice5000" width="50px">$470.00<input type="hidden" name="updateselectedproductprice5000" id="updateselectedproductprice5000" value="470.00"></td><td><input type="checkbox" id="selectproduct[]" name="selectproduct[]" value="usersetqty_5000-productid_57-price_470.00" onclick="AddBroucherProduct(this.value, &quot;usersetqty_5000-productid_57&quot;)"></td></tr><tr><td class="qty_left">6000</td>
                            <td class="kinds_input"><input type="text" name="usersetqty_6000-productid_57" id="usersetqty_6000-productid_57" value="1" maxlength="2" style="width:30px" onkeyup="UpdateSelectedProductBooklet(&quot;usersetqty_6000-productid_57&quot;, &quot;FULL COLOUR&quot;, &quot;150GSM GLOSS OR SILK&quot;, &quot;6000&quot;, &quot;DL 99 x 210&quot;, &quot;4 PAGES&quot;, &quot;57&quot;, &quot;514.00&quot;)">&nbsp;</td>
                            <td id="updateselectedproductprice6000" width="50px">$514.00<input type="hidden" name="updateselectedproductprice6000" id="updateselectedproductprice6000" value="514.00"></td><td><input type="checkbox" id="selectproduct[]" name="selectproduct[]" value="usersetqty_6000-productid_57-price_514.00" onclick="AddBroucherProduct(this.value, &quot;usersetqty_6000-productid_57&quot;)"></td></tr><tr><td class="qty_left">7000</td>
                            <td class="kinds_input"><input type="text" name="usersetqty_7000-productid_57" id="usersetqty_7000-productid_57" value="1" maxlength="2" style="width:30px" onkeyup="UpdateSelectedProductBooklet(&quot;usersetqty_7000-productid_57&quot;, &quot;FULL COLOUR&quot;, &quot;150GSM GLOSS OR SILK&quot;, &quot;7000&quot;, &quot;DL 99 x 210&quot;, &quot;4 PAGES&quot;, &quot;57&quot;, &quot;565.00&quot;)">&nbsp;</td>
                            <td id="updateselectedproductprice7000" width="50px">$565.00<input type="hidden" name="updateselectedproductprice7000" id="updateselectedproductprice7000" value="565.00"></td><td><input type="checkbox" id="selectproduct[]" name="selectproduct[]" value="usersetqty_7000-productid_57-price_565.00" onclick="AddBroucherProduct(this.value, &quot;usersetqty_7000-productid_57&quot;)"></td></tr><tr><td class="qty_left">8000</td>
                            <td class="kinds_input"><input type="text" name="usersetqty_8000-productid_57" id="usersetqty_8000-productid_57" value="1" maxlength="2" style="width:30px" onkeyup="UpdateSelectedProductBooklet(&quot;usersetqty_8000-productid_57&quot;, &quot;FULL COLOUR&quot;, &quot;150GSM GLOSS OR SILK&quot;, &quot;8000&quot;, &quot;DL 99 x 210&quot;, &quot;4 PAGES&quot;, &quot;57&quot;, &quot;612.00&quot;)">&nbsp;</td>
                            <td id="updateselectedproductprice8000" width="50px">$612.00<input type="hidden" name="updateselectedproductprice8000" id="updateselectedproductprice8000" value="612.00"></td><td><input type="checkbox" id="selectproduct[]" name="selectproduct[]" value="usersetqty_8000-productid_57-price_612.00" onclick="AddBroucherProduct(this.value, &quot;usersetqty_8000-productid_57&quot;)"></td></tr><tr><td class="qty_left">9000</td>
                            <td class="kinds_input"><input type="text" name="usersetqty_9000-productid_57" id="usersetqty_9000-productid_57" value="1" maxlength="2" style="width:30px" onkeyup="UpdateSelectedProductBooklet(&quot;usersetqty_9000-productid_57&quot;, &quot;FULL COLOUR&quot;, &quot;150GSM GLOSS OR SILK&quot;, &quot;9000&quot;, &quot;DL 99 x 210&quot;, &quot;4 PAGES&quot;, &quot;57&quot;, &quot;640.00&quot;)">&nbsp;</td>
                            <td id="updateselectedproductprice9000" width="50px">$640.00<input type="hidden" name="updateselectedproductprice9000" id="updateselectedproductprice9000" value="640.00"></td><td><input type="checkbox" id="selectproduct[]" name="selectproduct[]" value="usersetqty_9000-productid_57-price_640.00" onclick="AddBroucherProduct(this.value, &quot;usersetqty_9000-productid_57&quot;)"></td></tr><tr><td class="qty_left">10000</td>
                            <td class="kinds_input"><input type="text" name="usersetqty_10000-productid_57" id="usersetqty_10000-productid_57" value="1" maxlength="2" style="width:30px" onkeyup="UpdateSelectedProductBooklet(&quot;usersetqty_10000-productid_57&quot;, &quot;FULL COLOUR&quot;, &quot;150GSM GLOSS OR SILK&quot;, &quot;10000&quot;, &quot;DL 99 x 210&quot;, &quot;4 PAGES&quot;, &quot;57&quot;, &quot;670.00&quot;)">&nbsp;</td>
                            <td id="updateselectedproductprice10000" width="50px">$670.00<input type="hidden" name="updateselectedproductprice10000" id="updateselectedproductprice10000" value="670.00"></td><td><input type="checkbox" id="selectproduct[]" name="selectproduct[]" value="usersetqty_10000-productid_57-price_670.00" onclick="AddBroucherProduct(this.value, &quot;usersetqty_10000-productid_57&quot;)"></td></tr><tr><td colspan="4"><input type="hidden" id="productid" name="productid" value="57"><input type="hidden" id="totalprice" name="totalprice" value="0.00"><input type="hidden" id="productsize" name="productsize" value="DL 99 x 210"><input type="hidden" id="productstock" name="productstock" value="150GSM GLOSS OR SILK"><input type="hidden" id="productcolor" name="productcolor" value="FULL COLOUR"><input type="hidden" id="productpage" name="productpage" value="4 PAGES"></td></tr>
                            <tr><td colspan="4" id="totalpriceupdate"><center><span style="font-weight: bold;">Total Price: AUD 0.00</span></center></td></tr>
                            <tr><td colspan="4" class="price_msg_1"><center><span class="price_msg_first">Price include GST and delivery</span></center></td></tr>
                            <tr><td colspan="4" class="price_msg_2"><center><span class="price_msg">All 1Print prices are based on final artwork supplied</span></center></td></tr>
                            <tr><td colspan="4" align="right"><br style=""><table><tbody><tr><td><a href="javascript:void(0);" value="Submit" class="clear_btn" onclick="ClearBookletsCache(&quot;FULL COLOUR&quot;, &quot;150GSM GLOSS OR SILK&quot;, &quot;500&quot;, &quot;DL 99 x 210&quot;, &quot;4 PAGES&quot;, &quot;57&quot;, &quot;0&quot;);">Clear</a></td><td><input type="submit" value="Submit" class="add_to_cart"></td></tr></tbody></table></td></tr></tbody></table></form></div>            </div>

                        </td></tr>
                    <tr><td class="product_options_price_footer"></td></tr>
                </tbody></table>
                </div>

                </div>
                <!--end product_right_option-->
                <!-- setting up own side bar bottom -->

                
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div style="clear: both;"></div> 
            </div>








            <div class = "product_div" id="product_div_id_3" style="display:none">
            </div>

            <div class = "product_div" id="product_div_id_4" style="display:none">
            </div>

            <div class = "product_div" id="product_div_id_5" style="display:none">
            </div>

            <div class = "product_div" id="product_div_id_6" style="display:none">
            </div>

            <div class = "product_div" id="product_div_id_7" style="display:none">
            </div>

            <div class = "product_div" id="product_div_id_8" style="display:none">
            </div>


            <!-- design -->
            <div class = "design_div" id="design_div_id" style="display:none">
                <div class="design_div_leftContainer">
                    <h1>Design Services</h1>
                    <p>At Yellow Star Press we are passionate about design and technology. Graphic communication encompasses a wide range of tools that businesses and organizations can leverage to direct their brand image and sales messages. Our Graphic Services delivers creative expertise with integrated, comprehensive visual communication from a firm’s initial visual brand and logo, through print tactics to the latest interactive media and web sites.</p>
                    <p>&nbsp;</p>
                    <h3>DISPLAYS, SIGNS, RETAIL GRAPHICS</h3>
                    <p>The art of good signage is bold, clear, easy to read and gives the viewer a “call to action” message. YELLOW STAR PRESS wants to design, write and produce any/all of your upcoming conference booths, displays, signs and retail graphics. YELLOW STAR PRESS designs/manufactures/installs all office/retail graphics on walls, glass, floors... anywhere!</p>
                    <img src="{{URL::asset('/image/Design1.jpg') }} " width=100% height=100%>
                    <ul>
                        <li>Trade Show Booths</li>
                        <li>Displays</li>
                        <li>Indoor and Outdoor Signage</li>
                        <li>Banners</li>
                        <li>Commercial Signs and Business Displays</li>
                        <li>Office Graphics</li>
                        <li>Retail Graphics and Signs </li>
                    </ul>
                    
                </div>
                <div class="design_div_rightContainer">
                    <h3>PRINTING AND PRINT DESIGN</h3>
                    <p>Corporate brochures are a vital tool in convincing prospects that you are the vendor, product, or service that they need. Brochures and marketing materials convey a brand and image through text, messages, garphics, and photos - the sum total of what your company is and can do. YELLOW STAR PRESS designs and produces/prints all collateral for business, government, and non-profits.</p>
                    <img src="{{URL::asset('/image/Design2.jpg') }} " width=100% height=100%>
                    <ul>
                        <li>Annual Reports</li>
                        <li>Brochures</li>
                        <li>Newsletters and Flyer’s</li>
                        <li>Publications</li>
                        <li>Catalogs and Reports • Package Design</li>
                        <li>Books and Magazine Design</li>
                        <li>Pocket Folders </li>
                    </ul>
                    <h1>Promotional Products</h1>
                    <p>When you let your Customers know you appreciate their business, your company benefits in many different ways. Promotional products have a value far beyond their cost. </p>
                </div>
                <div style="clear: both;"></div>
            </div>

            <!-- gallary -->
            <div class = "gallary_div" id="gallary_div_id" style="display:none">
                <div class="text_holder">
                <div class="gallary_div_options">
                    <div class="gallary_div_option active" style="--optionBackground:url(../image/Gallary1.jpeg);">
                        <div class="gallary_div_shadow"></div>
                        <div class="gallary_div_label">
                            <div class="gallary_div_icon">
                                <i class="fas fa-angle-right"></i>
                            </div>
                            <div class="gallary_div_info"> 
                            <p>Here are some text to describe the product</p>
                                <span class="gallary_div_article"></span>                               
                            </div>
                        </div> 
                    </div>
                    <div class="gallary_div_option" style="--optionBackground:url(../image/Gallary2.jpeg);">
                        <div class="gallary_div_shadow"></div>
                        <div class="gallary_div_label">
                            <div class="gallary_div_icon">
                                <i class="fas fa-angle-right"></i>
                            </div>
                            <div class="gallary_div_info">
                                <span class="gallary_div_article"> </span>
                            </div>
                        </div>
                    </div>
                    <div class="gallary_div_option" style="--optionBackground:url(../image/Gallary3.jpg);">
                        <div class="gallary_div_shadow"></div>
                        <div class="gallary_div_label">
                            <div class="gallary_div_icon">
                                <i class="fas fa-angle-right"></i>
                            </div>
                            <div class="gallary_div_info">
                                <span class="gallary_div_article"> </span>
                            </div>
                        </div>
                    </div>
                    <div class="gallary_div_option" style="--optionBackground:url(../image/Gallary4.jpeg);">
                        <div class="gallary_div_shadow"></div>
                        <div class="gallary_div_label">
                            <div class="gallary_div_icon">
                                <i class="fas fa-angle-right"></i>
                            </div>
                            <div class="gallary_div_info">
                                <span class="gallary_div_article"> </span>
                            </div>
                        </div>
                    </div>
                    <div class="gallary_div_option" style="--optionBackground:url(../image/Gallary5.jpeg);">
                        <div class="gallary_div_shadow"></div>
                        <div class="gallary_div_label">
                            <div class="gallary_div_icon">
                                <i class="fas fa-angle-right"></i>
                            </div>
                            <div class="gallary_div_info">
                                <span class="gallary_div_article"> </span>
                            </div>
                        </div>
                    </div>
                    <div class="gallary_div_option" style="--optionBackground:url(../image/Gallary6.jpeg);">
                        <div class="gallary_div_shadow"></div>
                        <div class="gallary_div_label">
                            <div class="gallary_div_icon">
                                <i class="fas fa-angle-right"></i>
                            </div>
                            <div class="gallary_div_info">
                                <span class="gallary_div_article"> </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="gallary_div_option" style="--optionBackground:url(https://66.media.tumblr.com/f19901f50b79604839ca761cd6d74748/tumblr_o65rohhkQL1qho82wo1_1280.jpg);">
                        <div class="gallary_div_shadow"></div>
                        <div class="gallary_div_label">
                            <div class="gallary_div_icon">
                                <i class="fas fa-angle-right"></i>
                            </div>
                            <div class="gallary_div_info">                               
                                <span class="gallary_div_article"> </span>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </div>

            <!-- support -->
            <div class = "support_div" id="support_div_id" style="display:none">
                <div class="design_div_leftContainer">
                    <h1>Frequently Asked Questions</h1>
                    <p class="black_bold">What colour settings should my artwork use?</p>
                    <p>
                    All images must be saved in CYMK mode between 300-500dpi
                    Please make sure all colours are nominated correctly
                    as PMS or CYMK and are relevant to the job you are submitting.
                    </p>
                    <p>&nbsp;</p>
                    <p class="black_bold">
                    What file formats to you accept when submitting artwork?
                    </p>
                    <p>
                    1Print will only accept the following formats as final artwork.
                    Artwork which does not adhere to these specifications will incur artwork charges.
                    </p>
                    <p>&nbsp;</p>
                    <ul class="black_bullets">
                    <li><span class="black">Adobe Acrobat</span> (PDF) version XI or below (PDF)</li>
                    <li><span class="black">Adobe Photoshop</span> version CC or below (PSD or TIFF)</li>
                    <li><span class="black">Adobe Illustrator</span> version CC or below (AI, EPS, PDF)</li>
                    <li><span class="black">Adobe InDesign</span> version CC or below (INDD)</li>
                    <li><span class="black">Quark Xpress</span> version 9 or below (QXD)</li>
                    </ul>
                    <p>&nbsp;</p>
                    <ul class="black_bullets">
                    <li>1Print accepts files in PC or MAC format.</li>
                    <li>All images must be saved in CMYK at 300dpi.</li>
                    <li>Make sure all colours are nominated correctly as PMS or CMYK.</li>
                    <li>OVERPRINTS MUST BE TURNED OFF.</li>
                    <li>All artwork must include a minimum of 2mm bleed and crop marks.</li>
                    <li>Where possible, please convert your text to outlines or curves.</li>
                    <li>Please supply us with all relevant files, including fonts and links (graphics).</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p class="black_bold">Does 1Print provide artwork design services?</p>
                    <p>
                    Yes, we do provide artwork design services upon request. If you want us to design your artwork for printing, please use our <a href="http://web.archive.org/web/20180903133932/http://www.1print.net.au/custom-quotes.php" class="blue_link">Custom Quote Form</a> and let us know. We will contact you to discuss your requirements further. Business Card Design is available as an option when ordering from the Business Card Special page.
                    </p>
                    <p>&nbsp;</p>
                    <p class="black_bold">
                    I want a greater quantity than is available using your shopping cart. Am I out of luck?</p>
                    <p>
                    We are more than happy to do large offset printing runs above the maximum set number offered on the website shopping cart facility. If you have an extra large printing order, complete the <a href="http://web.archive.org/web/20180903133932/http://www.1print.net.au/custom-quotes.php" class="blue_link">Custom Quote Form</a> and we will offer you a special price.
                    </p><p>&nbsp;</p>
                    <p class="black_bold">
                    What is Offset Printing?</p>
                    <p>
                    Offset Printing uses large scale printing machines that use liquid inks. The large scale machinery used in offset printing is reserved for big printing jobs with a minimum of 1000 sheets.
                    </p><p>&nbsp;</p>
                    <p class="black_bold">What is Digital Printing?</p>
                    Digital Printing uses toner instead of ink. This method of printing is far more economical for short run print jobs than offset printing.
                    <p class="black_bold">What is Machine Varnish?</p>
                    Machine Varnish is a gloss finish that is applied by the printing press as a liquid on top of the printing. It is great for printing jobs with photos or large areas of ink coverage as it enhances the finish and prevents finger marking.
                    <p></p></div>


                <div class="design_div_rightContainer">
                    <p class="black_bold">You mention highest quality for lowest possible price. How can you claim highest quality?</p>
                    <p>
                    We run our own industrial grade printing equipment in-house, ensuring all jobs are closely monitored and a high standard of quality is consistently maintained. We use the best, highest quality artboard. Our entry level business cards, for example, are printed on 400gsm artboard, while most of our competitors offer 210-230gsm for a higher price.
                    </p><p>&nbsp;</p>
                    <p class="black_bold">Can I receive a free printing sample to see the quality of your services?</p>
                    <p>
                    You certainly can. Simply complete the <a href="http://web.archive.org/web/20180903133932/http://www.1print.net.au/sample-pack.php" class="blue_link">Free Sample Request</a> Form on this website with your details and we will send you a printing sample pack so you can see the value of our printing services for yourself.
                    </p><p>&nbsp;</p>
                    <p class="black_bold">I have an urgent printing job. How quickly can I receive the finished product?</p>
                    <p>If you need your printing job completed and delivered in the shortest time possible, simply complete the Urgent Printing Form on the website before 3pm on a work day and the finished product will be dispatched in 2 working days by priority delivery.  You will be contacted to confirm dispatch.
                    </p><p>&nbsp;</p> 
                    <p class="black_bold">Where can I view your privacy policy?</p>
                    <p>We value your privacy and you can view our policy on how we use the information you share with us <a href="http://web.archive.org/web/20180903133932/http://www.1print.net.au/privacy.php" class="blue_link">here</a>.
                    </p><p>&nbsp;</p> 
                    <p class="black_bold">I want to print something that does not appear as a choice in your ordering facility. Can you still help me?</p>
                    We are more than willing to accommodate anything your printing job requires. The more of our customers that ask for something, the more likely we will be to make the option available from the website. If the options you want are not available from the ordering facility, you can request it by filling out our <a href="http://web.archive.org/web/20180903133932/http://www.1print.net.au/custom-quotes.php" class="blue_link">Custom Quote Form</a>.
                    <p></p><p>&nbsp;</p>
                    <p class="black_bold">What payment methods do you accept?</p>
                    <p>If you are making an order online using our secure shopping cart facility, you may only pay via Mastercard, Visa or Paypal.
                    </p><p>&nbsp;</p>
                    <p>If you wish to make your order via email, over the phone or in person, we can be very flexible as to how you make payment, including credit card payments. Please be aware that we require a successful payment before your printing job commences. Payment methods are listed below.
                    </p><p>&nbsp;</p>
                    <ul class="black_bullets"> 
                    <li>Electronic Funds Transfer (EFT)</li>
                    <li>Credit Cards (Visa and Master Card)</li>
                    <li>Cheque (made out to 1Print Pty Ltd)</li>
                    <li>PayPal</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>
                    <a href="http://web.archive.org/web/20180903133932/http://www.1print.net.au/order.php" class="blue_link">Click here for further information</a>
                    </p>
                    <p>&nbsp;</p>
                    <p class="black_bold">I Want to use metallic or specialty colours For my print job. Do you offer this?</p>
                    <p>Yes we do. If you want to use specialty colours like metallic silver or gold you can request this by completing and submitting the <a href="http://web.archive.org/web/20180903133932/http://www.1print.net.au/custom-quotes.php" class="blue_link">Custom Quote Form</a>.
                    </p>
                </div>
                <div style="clear: both;"></div>
            </div>

            <!-- aboutUs -->
            <div class = "aboutUs_div" id="aboutUs_div_id" style="display:none">
                <div class="design_div_leftContainer">
                    <h1>About us</h1>
                    <p>1Print has a state the art production facility to meet all your demands, from short digital to large commercial runs. More importantly, we have the people with the skills and creativity to meet your needs.</p>
                    <p>&nbsp;</p>
                    <p class="black_heading">Our Printing facilities include</p>
                    <ul class="black_bullets">
                    <li>A1, A2 and A3 offset pressess</li>
                    <li>Full colour on Demand Digital Print System</li>
                    <li>Inhouse Design Services</li>
                    <li>Computer to Plate Technology (CTP)</li>
                    <li>Two Cylinders for inhouse formcuting and scoring</li>
                    <li>A4, A3 and A2 Laminating</li>
                    <li>Binding, collating and saddlestitching Services</li>
                    <li> Signage Design and more.. </li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>Our vibrant, full colour, offset printing is of exceptional quality and our highly trained operators possess a keen eye for detail.</p>
                </div>
            
                <div class="design_div_rightContainer">
                    <h2 class="large">We Print</h2>

                    <div class="about_col1">
                        <ul class="black_bullets">
                        <li>Annual Reports</li>
                        <li>Business Forms</li>
                        <li><a href="">Envelopes</a></li>
                        <li><a href="">Folders</a></li>
                        <li>Labels</li>
                        <li>Manuals</li>
                        <li>NCR Books</li>
                        <li><a href="">Posters</a></li>
                        <li><a href="">Postcards</a></li>
                        </ul>
                    </div>
                    <div class="about_col2">
                        <ul class="black_bullets">
                        <li><a href="">Pads</a></li>
                        <li><a href="">Presentation Folders</a></li>
                        <li><a href="">Booklets</a></li>
                        <li><a href="">Books</a></li>
                        <li>Calendars</li> 
                        <li><a href="">Catalogues</a></li>
                        <li><a href="">Desk Pads</a></li>
                        <li><a href="">Flyers</a></li>
                        <li>Greeting Cards</li>
                        </ul>
                    </div>
                    <div class="about_col3">
                        <ul class="black_bullets">
                        <li>Invitations</li>
                        <li>Leaflets</li>
                        <li>Magazines</li>
                        <li>Pamphlets</li>
                        <li>Brochures</li>
                        <li>Business Cards</li>
                        <li>Cards</li> 
                        <li>Newsletters</li>
                        <li>Docket Books</li>
                        </ul>
                    </div>
                    <div class="about_col4">
                        <ul class="black_bullets">
                        <li>Forms</li>
                        <li>Gift Vouchers</li>
                        <li>Invoice Books</li>
                        <li>Letterheads</li>
                        <li>Menus</li>
                        <li>Notebooks</li>
                        </ul>
                    </div>
                    <!-- <div class="clear"></div> -->
                    </div>
            </div>

            <!-- contact -->
            <div class = "contact_div" id="contact_div_id" style="display:none">
                <div class="text_holder">
                <div class="main_container">
                    <div class="design_div_leftContainer">
                    <h1>Contact us</h1>
                        <div class="contact_phone">
                    <!-- <span class="black_bold ">Call</span>--> <span class="phone_lg">1300 327 471</span>
                    </div>
                    <div class="contact_fax">
                    <span class="black_bold">Fax</span> (03) 9584 4708
                    </div>

                
                    <div class="contact_email">
                        <span class="contact-align-left">Quotes</span> 
                        <span class="contact-align"><a href="http://web.archive.org/web/20180903154238/mailto:quotes@1print.net.au" class="black_link">quotes@1print.net.au</a></span>
                    </div>
                    <div class="contact_email">
                        <span class="contact-align-left">Orders</span> 
                        <span class="contact-align"><a href="http://web.archive.org/web/20180903154238/mailto:orders@1print.net.au" class="black_link">orders@1print.net.au</a></span>
                    </div>
                    <div class="contact_email_last">
                        <span class="contact-align-left">Accounts</span> 
                        <span class="contact-align"><a href="http://web.archive.org/web/20180903154238/mailto:accounts@1print.net.au" class="black_link">accounts@1print.net.au</a></span>
                    </div>
                    <p class="black_heading">You can visit us at:</p>
                    <p style="color: #323232;">13 Shearson Cres, Mentone  VIC 3194 Australia</p>
                    <img src="{{URL::asset('/image/Contact.jpg') }}" width=90% height=80%>
                </div>
                <div class="design_div_rightContainer">
                    <!-- Feedback Form Starts Here -->
                    <div id="feedback">
                    <!-- Heading Of The Form -->
                    <div class="head">
                    <h3 class="contact_title" align="center">FeedBack Form</h3>
                    <p>This is feedback form. Send us your feedback !</p>
                    </div>
                    <!-- Feedback Form -->
                    <form action="mailto:sy135673@gmail.com" id="form" method="post" name="form" enctype="text/plain">
                    <input class="contact_div_vname" id="contact_div_vname"placeholder="Your Name" type="text" name="Name" align="center">
                    <input class="contact_div_vemail" id="contact_div_vemail"placeholder="Your Email" type="text" name="Email" align="center">
                    <input class="contact_div_sub" id="contact_div_sub"placeholder="Subject" type="text" name="Subject" align="center">
                    <p>Your Suggestion/Feedback</p>
                    <textarea class="contact_div_msg" id="contact_div_msg" placeholder="Type your text here..." name="Message"></textarea>
                    <p></p>
                    <input class="contact_div_send" id="contact_div_send"  type="submit" value="Send Feedback">
                    </form> 
                    </div>
                    <!-- Feedback Form Ends Here -->       
                </div>

                <div style="clear: both;"></div>

                <h3 align="center">Address</h3>
                <!--The div element for the map -->
                <div id="map" style="width:100%;height:400px;margin:auto;">
                <div style="overflow:hidden;width: 80%;position: relative;margin:auto;"><iframe width="1000" height="440" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=26%20Metropolital%20Ave%20Nunawading%20VIC%203131+(%E6%A0%87%E9%A2%98)&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="https://embedgooglemaps.com/it/">embedgooglemaps IT</a> & <a href="http://trovalink.it">Trova link</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><br />
                </div>
          

                </div>
                </div>
            </div>
            
            <!-- cart -->
            <div class = "cart_div" id="cart_div_id" style="display:none">
                <!-- shop-cart-area -->			
                <div class="cart_main">
                    <table id="cart_table">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">Image</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Total</th>
                                <th class="product-remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- <tr>
                                <td class="product-thumbnail"><img src="img/product/1.jpg" alt=""></td>
                                <td class="product-name"><a href="#">Vestibulum suscipit</a></td>
                                <td class="product-price"><span class="amount">£165.00</span></td>
                                <td class="product-quantity"><input type="number" value="1"></td>
                                <td class="product-subtotal">£165.00</td>
                                <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                            </tr>
                            <tr>
                                <td class="product-thumbnail"><a href="#"><img src="img/product/2.jpg" alt=""></a></td>
                                <td class="product-name"><a href="#">Vestibulum dictum magna</a></td>
                                <td class="product-price"><span class="amount">£50.00</span></td>
                                <td class="product-quantity"><input type="number" value="1"></td>
                                <td class="product-subtotal">£50.00</td>
                                <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
                <div class="cart_price">
                    <div class="cart_totals">
                        <h2>Cart Totals</h2>
                        <table>
                            <tbody>
                                {{-- <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td><span class="amount">$0.00</span></td>
                                </tr> --}}
                                <tr class="order-total">
                                    <th>Total</th>
                                    <td>
                                        <strong><p class="amount">$0.00</p></strong>
                                    </td>
                                </tr>											
                            </tbody>
                        </table>
                        <div class="wc-proceed-to-checkout">
                            <a href="#">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
                <!-- shop-cart-area-end -->
            </div>

            



            <!-- login -->
            <div class = "login_div" id="login_div_id" style="display:none">
                <div class="login_div_main">
                    <p class="login_div_sign" align="center">Log in</p>
                    <form class="login_div_form1">
                    <input id="login_username_id" class="login_div_un " type="text" align="center" placeholder="Username">
                    <input id="login_password_id"class="login_div_pass" type="password" align="center" placeholder="Password">
                    <a class="login_div_submit" align="center" onclick="userLogin()">Log in</a>
                    <p class="login_div_forgot" align="center"><a href="#">Forgot Password?</a></p>           
                </div>
            </div>

            <!-- register -->
            <div class = "register_div" id="register_div_id" style="display:none">
                <div class="register_div_user">
                    <!-- <header class="register_div_user_header">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
                        <h1 class="register_div_user_title">Register form</h1>
                    </header> -->
                    <p class="login_div_sign" align="center">Register</p>
                    
                    <form class="register_div_form">
                        <div class="register_div_form_group">
                            <input type="text" placeholder="Username" class="register_div_form_input" />
                            <div class= "checkmsg" id = "usernamecheckmsg"></div>
                        </div>
                        
                        <div class="register_div_form_group">
                            <input type="email" placeholder="Email" class="register_div_form_input" />
                            <div class= "checkmsg" id = "emailcheckmsg"></div>
                        </div>
                        
                        <div class="register_div_form_group">
                            <input type="password" placeholder="Password" class="register_div_form_input" />
                            <div class= "checkmsg" id = "passwdcheckmsg"></div>
                        </div>

                        <div class="register_div_form_group">
                            <input type="tel" placeholder="Phone number" class="register_div_form_input" />
                            <div class= "checkmsg" id = "phonenumcheckmsg"></div>
                        </div>

                        <div class="register_div_form_group">
                            <input type="text" placeholder="Address" class="register_div_form_input" />
                            <div class= "checkmsg" id = "addresscheckmsg"></div>
                        </div>

                        <div class="register_div_form_group">
                            <input type="text" placeholder="Suburb" class="register_div_form_input" />
                            <div class= "checkmsg" id = "suburbcheckmsg"></div>
                        </div>

                        <div class="register_div_form_group">
                            <input type="text" placeholder="State" class="register_div_form_input" />
                            <div class= "checkmsg" id = "statecheckmsg"></div>
                        </div>

                        <div class="register_div_form_group">
                            <input type="text" placeholder="Postcode" class="register_div_form_input" />
                            <div class= "checkmsg" id = "postcodecheckmsg"></div>
                        </div>
                        
                        <button class="register_div_btn" type="button" onclick="userRegister()">Register</button>
                    </form>
                </div>
            </div>
            
            <!-- footer -->
            <div class = "footer" id="footer_id">
                
                <div class="footer_width_holder">
                    <div class="footer_col1">
                        <div class="footer_phone">
                        <img src="image/phone.png" alt="Call 1300 327 471" class="footer_phone_number">
                        </div>
                    </div>
                    <div class="footer_col2">
                        <div class="footer_menu1">
                        <div class="footer_heading">Printing Services</div>
                        <ul>
                          <li><a >Business Card Printing</a></li>
                          <li><a >Booklet Printing</a></li>
                          <li><a >Brochure Printing</a></li>
                          <li><a >Compliment Slip Printing</a></li>
                          <li><a >Docket Book Printing</a></li>
                          <li><a >Envelope Printing</a></li>
                          <li><a >Flyer Printing</a></li>
                        </ul>
                        </div>
                        <div class="footer_menu2">
                        <ul>
                          <li><a >Letterhead Printing</a></li>
                          <li><a >Notepad/Desk Pad Printing</a></li>
                          <li><a >Postcard Printing</a></li>
                          <li><a >Posters Printing</a></li>
                          <li><a >Presentation Folder Printing</a></li>
                          <li><a >Express Printing</a></li>
                          <li><a >Custom Quotes</a></li>
                          <li><a >Website Design</a></li>
                        </ul>
                        </div>
                        <div class="social_media_holder">
                        <a class="footer_facebook" href="" target="_blank" rel="nofollow"></a>
                        <a class="footer_twitter" href="" target="_blank" rel="nofollow"></a>
                        </div>
                        <div style="clear: both;"></div>
                        <div class="credentials"> 
                        Copyright © YellowStar 2020-2023. All Rights Reserved.&nbsp;&nbsp; 
                        <a href="" target="_blank">Web Design</a> by <strong>XXX</strong>
                        </div>
                    </div>
                <div style="clear: both;"></div>
            </div>
            </div>
    
    
    
    </div>


    <div class="dashboard_admin" id="dashboard_admin_div_id" style="display:none">
        <div class="az-header">
            <div class="container">
                <div class="az-header-left">
                <a href="index.html" class="az-logo"><span></span> YELLOWSTAR</a>
                <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
                </div><!-- az-header-left -->
                <div class="az-header-menu">
                <div class="az-header-menu-header">
                    <a href="index.html" class="az-logo"><span></span> YELLOWSTAR</a>
                    <a href="" class="close">×</a>
                </div><!-- az-header-menu-header -->
                <ul class="nav">
                    <li class="nav-item" id="nav-dashboard_id" onclick="onclickHeader(0)">
                    <a class="nav-link" type = "button"><i class="typcn typcn-chart-area-outline"></i> Dashboard</a>
                    </li>
                    
                    <li class="nav-item" id="nav-profile_id" onclick="onclickHeader(1)">
                    <a class="nav-link" type = "button"><i class="typcn typcn-chart-bar-outline"></i> Profile</a>
                    </li>
                    <li class="nav-item" id="nav-home_id" onclick="onclickHeader(2)">
                    <a class="nav-link" type = "button"><i class="typcn typcn-chart-bar-outline"></i> HomePage</a>
                    </li>
                </ul>
                </div><!-- az-header-menu -->
                <div class="az-header-right">
                <a href="" class="az-header-search-link"><i class="fas fa-search"></i></a>
                <div class="az-header-message">
                    <a href="#"><i class="typcn typcn-messages"></i></a>
                </div><!-- az-header-message -->
                
                
                </div><!-- az-header-right -->
            </div><!-- container -->
        </div>





        <div class="az-content az-content-dashboard" id="dashboard_div_id" style="display:block">
            <div class="container">
                <div class="az-content-body">
                    <div class="az-dashboard-one-title">
                        <div>
                        <h2 class="az-dashboard-title" id="usernametitle">Hi, welcome back!</h2>
                        <p class="az-dashboard-text">Your web analytics dashboard</p>
                        </div>
                        <div class="az-content-header-right">
                        
                        <div class="media">
                            <div class="media-body">
                            <label>Now</label>
                            <h6 id="nowdate"></h6>
                            </div><!-- media-body -->
                        </div><!-- media -->
                        </div>
                    </div><!-- az-dashboard-one-title -->

                

                    <div class="row row-sm mg-b-20">
                        <div class="col-lg-7 ht-lg-100p">
                        <div class="card card-dashboard-one">
                            <div class="card-header">
                            <div>
                                <h6 class="card-title">Recent Orders</h6>
                                <p class="card-text">Orders by month</p>
                            </div>
                            
                            </div><!-- card-header -->
                            <div class="card-body">
                            
                            <div class="flot-chart-wrapper">
                                <div class="text_holder1" style="padding: 0px; position: relative; margin-left: auto; margin-right: auto; width: 90%;">
                                <canvas id="income-month-bar-chart"></canvas>
                                </div>
                            </div><!-- flot-chart-wrapper -->
                            </div><!-- card-body -->
                        </div><!-- card -->
                        </div><!-- col -->
                        <div class="col-lg-5 mg-t-20 mg-lg-t-0">
                        <div class="row row-sm">
                            <div class="col-sm-6">
                            <div class="card card-dashboard-two">
                                <div class="card-header">
                                <h6 id="totalOrder"></h6>
                                <p>Total Orders</p>
                                </div><!-- card-header -->
                                <div class="card-body">
                                <div class="chart-wrapper">
                                    <div id="flotChart1" class="flot-chart" style="padding: 0px; position: relative;"><canvas class="flot-base" width="239" height="100" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 239.656px; height: 100px;"></canvas><canvas class="flot-overlay" width="239" height="100" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 239.656px; height: 100px;"></canvas></div>
                                </div><!-- chart-wrapper -->
                                </div><!-- card-body -->
                            </div><!-- card -->
                            </div><!-- col -->
                            <div class="col-sm-6 mg-t-20 mg-sm-t-0">
                            <div class="card card-dashboard-two">
                                <div class="card-header">
                                <h6 id="totalUser"></h6>
                                <p>Total Users</p>
                                </div><!-- card-header -->
                                <div class="card-body">
                                <div class="chart-wrapper">
                                    <div id="flotChart2" class="flot-chart" style="padding: 0px; position: relative;"><canvas class="flot-base" width="239" height="100" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 239.656px; height: 100px;"></canvas><canvas class="flot-overlay" width="239" height="100" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 239.656px; height: 100px;"></canvas></div>
                                </div><!-- chart-wrapper -->
                                </div><!-- card-body -->
                            </div><!-- card -->
                            </div><!-- col -->
                            <div class="col-sm-12 mg-t-20">
                            <div class="card card-dashboard-three">
                                <div class="card-header">
                                <p>Total Amount</p>
                                <h6 id="totalAmount"></h6>
                                <small></small>
                                </div><!-- card-header -->
                                <div class="card-body">
                                <div class="chart"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div><canvas id="chartBar5" width="353" height="200" class="chartjs-render-monitor" style="display: block; width: 353px; height: 200px;"></canvas></div>
                                </div>
                            </div>
                            </div>
                        </div><!-- row -->
                        </div><!--col -->
                    </div><!-- row -->

                    <div class="table1" style="padding: 0px;margin: 15px; position: relative; margin-left: auto; margin-right: auto; width: 100%;border:0.5px solid gray;">
                        <div class="card-header">
                            <h6 class="card-title">Page Views by Page Title</h6>
                            <p class="card-text">This report is based on 100% of sessions.</p>
                        </div><!-- card-header -->
                        <div class="card-body">
                            <table id="table_orders" class="display">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Price</th>
                                    <th>Order Id</th>
                                    <th>Order Type</th>
                                </tr>
                            </thead> 
                            </table>
                        </div><!-- card-body -->
                    </div>

                    <div class="table1" style="padding: 0px;margin: 15px; position: relative; margin-left: auto; margin-right: auto; width: 100%;border:0.5px solid gray;">
                        <div class="card-header">
                            <h6 class="card-title">Page Views by Page Title</h6>
                            <p class="card-text">This report is based on 100% of sessions.</p>
                        </div><!-- card-header -->
                        <div class="card-body">
                            <table id="table_users" class="display">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Price</th>
                                    <th>Order Id</th>
                                    <th>Order Type</th>
                                </tr>
                            </thead> 
                            </table>
                        </div><!-- card-body -->

                    </div><!-- row -->
                </div><!-- az-content-body -->
            </div>
        </div>
        <!-- profile -->
        <div class = "pro_div" id="profile_div_id" style="display:none">
            <div class="container">
                <h6 class="card-title">Edit Account</h6>

                <form>
                    
                            

                            <div class="form-group">

                                <label for=pass>Password</label>
                                <input type="password" class="form-control" id="pass_change">

                            </div>
                            
                            <div class="row mt-5">
                            
                                <div class="col">
                                
                                    <button type="button" class="btn btn-primary btn-block">Save Changes</button>
                                
                                </div>
                                
                                <div class="col">
                                
                                    <button type="button" class="btn btn-default btn-block">Cancel</button>
                                
                                </div>
                            
                            </div>

                </form>
            </div>
        </div>
    </div>



    <div class = "dashboard_user_div" id="dashboard_user_div_id" style="display:none">

        <div class="az-header">
        <div class="container">
            <div class="az-header-left">
            <a href="index.html" class="az-logo"><span></span> YELLOWSTAR</a>
            <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
            </div><!-- az-header-left -->
            <div class="az-header-menu">
            <div class="az-header-menu-header">
                <a href="index.html" class="az-logo"><span></span> YELLOWSTAR</a>
                <a href="" class="close">×</a>
            </div><!-- az-header-menu-header -->
            <ul class="nav">
                        <li class="nav-item" id="nav-dashboard_id" onclick="onclickHeader(4)">
                        <a class="nav-link" type = "button"><i class="typcn typcn-chart-area-outline"></i> Dashboard</a>
                        </li>
                        
                        <li class="nav-item" id="nav-profile_id" onclick="onclickHeader(3)">
                        <a class="nav-link" type = "button"><i class="typcn typcn-chart-bar-outline"></i> Profile</a>
                        </li>
                        <li class="nav-item" id="nav-home_id" onclick="onclickHeader(2)">
                        <a class="nav-link" type = "button"><i class="typcn typcn-chart-bar-outline"></i> HomePage</a>
                        </li>
                    </ul>
            </div><!-- az-header-menu -->
            <div class="az-header-right">
            <a href="" class="az-header-search-link"><i class="fas fa-search"></i></a>
            <div class="az-header-message">
                <a href="#"><i class="typcn typcn-messages"></i></a>
            </div><!-- az-header-message -->
            
            

            </div><!-- az-header-right -->
        </div><!-- container -->
        </div>





        <div class="az-content az-content-dashboard" id="dashboard_user_div_div_id" style="display:block">
        <div class="container">
            <div class="az-content-body">
            <div class="az-dashboard-one-title">
                <div>
                <h2 class="az-dashboard-title">Hi, welcome back!</h2>
                <p class="az-dashboard-text">Your web analytics dashboard</p>
                </div>
                <div class="az-content-header-right">
                
                <div class="media">
                    <div class="media-body">
                    <label>Now</label>
                    <h6 id="nowuserdate"></h6>
                    </div><!-- media-body -->
                </div><!-- media -->
                </div>
            </div><!-- az-dashboard-one-title -->

            

            <div class="row row-sm mg-b-20">
                <div class="col-lg-7 ht-lg-100p">
                <div class="card card-dashboard-one">
                    <div class="card-header">
                    <div>
                        <h6 class="card-title">Recent Orders</h6>
                        <p class="card-text">Orders by month</p>
                    </div>
                    
                    </div><!-- card-header -->
                    <div class="card-body">
                    
                    <div class="flot-chart-wrapper">
                        <div class="text_holder1" style="padding: 0px; position: relative; margin-left: auto; margin-right: auto; width: 90%;">
                        <canvas id="income-month-bar-chart-user"></canvas>
                        </div>
                    </div><!-- flot-chart-wrapper -->
                    </div><!-- card-body -->
                </div><!-- card -->
                </div><!-- col -->
                <div class="col-lg-5 mg-t-20 mg-lg-t-0">
                <div class="row row-sm">
                
                    <div class="col-sm-12 mg-t-0">
                    <div class="card card-dashboard-three">
                        <div class="card-header">
                        <p>Total Amount</p>
                        <h6 id="totalAmount_user"></h6>
                        <small></small>
                        </div><!-- card-header -->
                        <div class="card-body">
                        <div class="chart"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div><canvas id="chartBar5" width="353" height="200" class="chartjs-render-monitor" style="display: block; width: 353px; height: 200px;"></canvas></div>
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-12 mg-t-20">
                    <div class="card card-dashboard-three">
                        <div class="card-header">
                        <p>Total Orders</p>
                        <h6 id="totalOrder_user"></h6>
                        <small></small>
                        </div><!-- card-header -->
                        <div class="card-body">
                        <div class="chart"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div><canvas id="chartBar5" width="353" height="200" class="chartjs-render-monitor" style="display: block; width: 353px; height: 200px;"></canvas></div>
                        </div>
                    </div>
                    </div>
                </div><!-- row -->
                </div><!--col -->
            </div><!-- row -->

            <div class="table1" style="padding: 0px;margin: 15px; position: relative; margin-left: auto; margin-right: auto; width: 100%;border:0.5px solid gray;">
                <div class="card-header">
                    <h6 class="card-title">Page Views by Page Title</h6>
                    <p class="card-text">This report is based on 100% of sessions.</p>
                </div><!-- card-header -->
                <div class="card-body">
                    <table id="table_orders_user" class="display">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Order Id</th>
                            <th>Order Type</th>
                            <th>Date</th>
                        </tr>
                    </thead> 
                    </table>
                </div><!-- card-body -->
            </div>



            </div><!-- row -->
            </div><!-- az-content-body -->
        </div>
        

        <!-- profile -->
        <div class = "pro_div" id="profile_user_div_id" style="display:none">
            <div class="container">
                <h6 class="card-title">Page Views by Page Title</h6>

                <form>
                    
                            
                            <div class="form-group">

                                <label for=email>Email</label>
                                <input type="email" class="form-control" id="email_change_user">

                            </div>
                            <div class="form-group">

                                <label for=pass>Password</label>
                                <input type="password" class="form-control" id="pass_change_user">

                            </div>
                            <div class="form-group">

                                <label for=phone>Phone Number</label>
                                <input type="text" class="form-control" id="phonenum_change_user">

                            </div>
                            <div class="form-group ">

                                <label for=birthday>Address</label>
                                <input type="text" class="form-control" id="address_change_user">

                            </div>
                            <div class="form-group ">

                                <label for=birthday>Suburb</label>
                                <input type="text" class="form-control" id="suburb_change_user">

                            </div>
                            <div class="form-group ">

                                <label for=birthday>State</label>
                                <input type="text" class="form-control" id="state_change_user">

                            </div>
                            <div class="form-group ">

                                <label for=birthday>Postcode</label>
                                <input type="text" class="form-control" id="postcode_change_user">

                            </div>
                            
                            <div class="row mt-5">
                            
                                <div class="col">
                                
                                    <button type="button" class="btn btn-primary btn-block" onclick="updateUserMessage()">Save Changes</button>
                                
                                </div>
                                
                                <div class="col">
                                
                                    <button type="button" class="btn btn-default btn-block">Cancel</button>
                                
                                </div>
                            
                            </div>

                </form>
            </div>
        </div>
    </div>




      
    <script type="text/javascript">
        $(".gallary_div_option").click(function(){
            $(".gallary_div_option").removeClass("active");
            $(this).addClass("active");
            
        });

        //轮播
        jQuery(".displayBox").slide({
            mainCell: ".displayBox_bd ul",
            effect: "leftLoop",
            vis: "auto",
            autoPlay: true,
            trigger: "mouseover"
        });

        $(document).ready(function() {
            $( '.dropdown' ).hover(
                function(){
                    $(this).children('.sub-menu').slideDown(200);
                },
                function(){
                    $(this).children('.sub-menu').slideUp(200);
                }
            );
        }); // end ready

        
    </script>

    <!-- dashboard -->
    <!-- <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> -->
    <!-- vendor css -->
    <link href="../public/azia-admin-master/lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../public/azia-admin-master/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../public/azia-admin-master/lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="../public/azia-admin-master/lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <!-- azia CSS -->
    <link rel="stylesheet" href="../public/azia-admin-master/css/azia.css">
    <!-- <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="../public/azia-admin-master/lib/jquery/jquery.min.js"></script> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <script src="../public/azia-admin-master/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../public/azia-admin-master/lib/ionicons/ionicons.js"></script>
    <script src="../public/azia-admin-master/lib/peity/jquery.peity.min.js"></script>
    <script src="../public/azia-admin-master/js/azia.js"></script>
    <script type="text/javascript" src="{{URL::asset('/js/dashboard.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js" type="text/javascript"></script>
    

    <!-- </div> -->
    </body>
</html>

