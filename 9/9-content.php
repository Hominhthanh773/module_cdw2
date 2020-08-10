<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-4">
    <div class="container">
        <!-- row 1 -->
        <div class="row table-responsive-md">
            <div class="col-md-4 col-4">
                <div class="item_img">
                    <img src="images/1.jpg" alt="" class="img-item">

                </div>
            </div>
            <div class="col-md-6 col-8">
                <div class="item_content">
                    <div class="pt-4 pb-4">
                        <h4>
                            Visalia, NJ 93277

                        </h4>
                        <div class="address_venue"><span>This 4 bedroom home sits on an oversized lot
                                at the end of a cul-de-sac in an established neighborhood.
                                It is in need of work however would make a great...</span></div>
                    </div>
                    <div class="meta-property pt-2 pb-2">
                        <div class="i-specs">
                            <span class="col-md-4">$ 154,500</span>
                            <span class="col-md-6"><img src="images/size-icon.png"> 1,913 sqft</span>
                            <span class="col-md-4"><img src="images/bathroom-icon.png"> 2 &emsp;</span>
                            <span class="col-md-4"><img src="images/bedroom-icon.png"> 4</span>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-2">
                <div class="more-details">MORE DETAIL</div>
            </div>
        </div>
        <!-- row 2 -->
        <div class="row mt-6 mb-6 row2">
            <div class="col-md-4 col-4">
                <div class="item_img">
                    <img src="images/2.jpg" alt="" class="img-item">
                </div>
            </div>
            <div class="col-md-6 col-6">
                <div class="item_content">
                    <div class="pt-4 pb-4">
                        <h4>
                            Single Family Residential, NJ

                        </h4>
                        <div class="address_venue"><span>Classic 60's ranch living. House has hardwood
                                floors and hard coat plaster walls and ceilings in good condition.
                                Intimate backyard for private gatherings. Full basement leaves plenty of
                                room for...</span></div>
                    </div>
                    <div class="meta-property pt-2 pb-2">
                        <div class="i-specs">
                            <span class="col-md-4 col-4">$ 154,500</span>
                            <span class="col-md-6"><img src="images/size-icon.png"> 1,913 sqft</span>
                            <span class="col-md-4"><img src="images/bathroom-icon.png"> 2 &emsp;</span>
                            <span class="col-md-4"><img src="images/bedroom-icon.png"> 4</span>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-2">
                <div class="more-details">MORE DETAIL</div>
            </div>
        </div>
        <!-- row 3 -->
        <div class="row mt-6 mb-6 row2">
            <div class="col-md-4 col-4">
                <div class="item_img">
                    <img src="images/3.jpg" alt="" class="img-item">
                </div>
            </div>
            <div class="col-md-6 col-6">
                <div class="item_content">
                    <div class="pt-4 pb-4">
                        <h4>
                            Peter Cooper Village

                        </h4>
                        <div class="address_venue"><span>Peter Cooper Village/ Stuyvesant Town provides
                                an unbeatable combination of city energy and community tranquility,
                                providing insulation from the city that surrounds it, yet situated next
                                to Manhattan...</span></div>
                    </div>
                    <div class="meta-property pt-2 pb-2" style="background-color: #ececec">
                        <div class="i-specs">
                            <span class="col-md-4 col-4" style="border-right: 1px solid white">$ 154,500</span>
                            <span class="col-md-5" style="border-right: 1px solid white"><img src="images/size-icon.png"> 1,913 sqft</span>
                            <span class="col-md-4" style="border-right: 1px solid white"><img src="images/bathroom-icon.png"> 2 &emsp;</span>
                            <span class="col-md-4"><img src="images/bedroom-icon.png"> 4</span>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-2">
                <div class="more-details">MORE DETAIL</div>
            </div>
        </div>
    </div>
</div>