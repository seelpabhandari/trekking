<?php
include("header.php");
?>
<div class="container package">
<div class="col-md-8 pro_main_section">
    <h2>Active Sherpa Trekking</h2>
    <img class="img-responsive" src="image/images.png" >
    <p>Active Sherpa Trekking (AST Nepal) was founded by team of professionals & experts Sherpa who were all previously working in Trekking & Travel agencies and foresaw a need to create something new in the Trekking & travel Industry of Nepal.<br>
        Active Sherpa Trekking (AST Nepal) is a fully professional & dedicated Trekking & Tour company based in Nepal and authorized by the Government of Nepal, to obtain a license to operate Trekking and Travel related tourism activities within Nepal, Bhutan and Tibet.<br>
        Active Sherpa Trekking (AST Nepal) only committed how to provide the excellent services which will give you a once in a life time journey in the Himalayas and share with you unique experience by exploring spiritual Nepali culture, wildlife Safari, historical tours, and wilderness Trekking & expeditions in snow-capped mountains.<br>
        Active Sherpa Trekking (AST Nepal) aiming to provide personalize and excellent Trekking & Tour Services to the valuable guest to make their holiday is memorable in once of life time.<br>
        Safety, comfort and satisfaction with social responsible is our prime focus and Motto.<br>
    </p>
    <div class="pro_stock_advance_detail">
        <div>
            <ul class="nav nav-tabs" role="tablist">
                <li class="active" role="presentation"><a href="#description" aria-controls="description"  id="iti2" role="tab" data-toggle="tab">Descriptions</a></li>
                <li  role="presentation"><a href="#itinerary"  aria-controls="itinerary" id="iti" role="tab" data-toggle="tab">Detailed Itinerary</a></li>
                <li role="presentation"><a href="#images" aria-controls="images" id="iti1" role="tab" data-toggle="tab">View Gallery</a></li>
            </ul>
        <div role="tabpanel" class="activities tab-panel" id="itinerary">
            <h3>Days</h3>
            <?php
            for($i=1;$i<=12;$i++)
            {
                echo "<a name=\"day_$i\"><p>DAY:$i </p>Active Sherpa Trekking (AST Nepal) was founded by team of professionals & experts Sherpa who were all previously working in Trekking & Travel agencies and foresaw a need to create something new in the Trekking & travel Industry of Nepal.<br>
                       Active Sherpa Trekking (AST Nepal) is a fully professional & dedicated Trekking & Tour company based in Nepal and authorized by the Government of Nepal, to obtain a license to operate Trekking and Travel related tourism activities within Nepal, Bhutan and Tibet.<br>
                       Active Sherpa Trekking (AST Nepal) only committed how to provide the excellent services</a><br><br><br>";
            }
            ?>
    </div>
        <div role="tabpanel" class="activities tab-panel" id="images"></div>
        <div role="tabpanel" class="activities active tab-panel" id="description">
            <p class="inside_text">Active Sherpa Trekking (AST Nepal) was founded by team of professionals & experts Sherpa who were all previously working in Trekking & Travel agencies and foresaw a need to create something new in the Trekking & travel Industry of Nepal.<br>
                Active Sherpa Trekking (AST Nepal) is a fully professional & dedicated Trekking & Tour company based in Nepal and authorized by the Government of Nepal, to obtain a license to operate Trekking and Travel related tourism activities within Nepal, Bhutan and Tibet.<br>
                Active Sherpa Trekking (AST Nepal) only committed how to provide the excellent services which will give you a once in a life time journey in the Himalayas and share with you unique experience by exploring spiritual Nepali culture, wildlife Safari, historical tours, and wilderness Trekking & expeditions in snow-capped mountains.<br>
                Active Sherpa Trekking (AST Nepal) aiming to provide personalize and excellent Trekking & Tour Services to the valuable guest to make their holiday is memorable in once of life time.<br>
                Safety, comfort and satisfaction with social responsible is our prime focus and Motto.<br>
            </p>
            <hr>
            <h3>Our Services</h3>
            <ul class="pro_services">

                <?php
                for($i=0;$i<=11;$i++)
                {

                    echo "<li>Tea/Coffee and Three meals a day</li> ";

                }
                ?>
            </ul>
            <hr>
            <div class="small_itinerary">
                <b>Outline Itinerary</b>
                <?php
                for($i=1;$i<=11;$i++)
                {

                    echo "<p><strong>Day $i:</strong> Active Sherpa Trekking (AST Nepal) aiming to provide personalize and excellent.</p>";

                }
                ?>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="col-md-4 pro_sideBar">
    <h2>Trek Info</h2>
    <table class="pro_trek">
        <tr>
            <td>Destination:</td>
            <td>Nepal</td>

        </tr><tr>
            <td>Trip Grade:</td>
            <td>Moderate</td>

        </tr><tr>
            <td>Max Altitude:</td>
            <td>1,300m/4,264ft</td>

        </tr><tr>
            <td>Activities:</td>
            <td>Bird Watching Boating cultural dance</td>

        </tr><tr>
            <td>Total Duration:</td>
            <td>11 days</td>

        </tr><tr>
            <td>Time:</td>
            <td>March - May & Sept - Dec</td>

        </tr><tr>
            <td>Group Size:</td>
            <td>1-12 people</td>

        </tr>
    </table>
    <div class="pro_featured_price">
        <ul class="nav nav-tabs" role="tablist">
            <li class="active pull-right" role="presentation"><a href="#PRICE" aria-controls="PRICE"   role="tab" data-toggle="tab">PRICE</a></li>
            <li class="pull-right" role="presentation"><a href="#BOOK_NOW"  aria-controls="BOOK_NOW"  role="tab" data-toggle="tab">BOOK NOW</a></li>
        </ul>
        <div role="tabpanel" class="activities tab-panel" id="PRICE"></div>
        <div role="tabpanel" class="activities tab-panel" id="BOOK_NOW"></div>
    </div>
    <div class="pro_main_pagination" >
        <div class="pro_pagination bs-docs-sidebar ">
            <ul class="pagination hidden-sm hidden-xs nav nav-list bs-docs-sidenav affix" data-spy="affix" data-offset-top="700" data-offset-bottom="900">
                <h3>Days Activities:</h3>
                <?php
                for($i=1;$i<=12;$i++){
                    if($i!=9)
                    {
                        echo "<li><a href=\"#day_$i\">$i</a></li>";
                    }
                    else
                    {
                        echo "<li><a href=\"#day_$i\">$i</a></li><br><br><br>";
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<div class="pro_related_products">
        <div class="col-md-12">
            <h2>Related Products</h2>
            <div class="col-md-3 col-lg-3 col-sm-6">
                <div class="images"><a href="#"><img src="image/camping6.jpg" alt=""></a></div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6">
                <div class="images"><a href="#"><img src="image/camping6.jpg" alt=""></a></div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6">
                <div class="images"><a href="#"><img src="image/camping6.jpg" alt=""></a></div>
            </div><div class="col-md-3 col-lg-3 col-sm-6">
                <div class="images"><a href="#"><img src="image/camping6.jpg" alt=""></a></div>
            </div>
        </div>
    </div>
</div>





<?php
include("footer.php");
?>
