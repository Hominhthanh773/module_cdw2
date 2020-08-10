<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="property-summary">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="property-detail">
                    <h4 class="property-detail-title">Property Detail</h4>
                    <div class="property-detail-content">
                        <div class="detail-field row">
                            <span class="col-xs-6 col-md-5 detail-field-label">Type</span>
                            <span class="col-xs-6 col-md-7 detail-field-value">
                                <div class="field field-name-field-real-type field-type-taxonomy-term-reference field-label-hidden clearfix">
                                    <ul class="links">
                                        <li class="taxonomy-term-reference-0"><a href="/citilights/taxonomy/term/12" typeof="skos:Concept" property="rdfs:label skos:prefLabel" datatype="">Co-op</a></li>
                                    </ul>
                                </div>
                            </span>

                            <span class="col-xs-6 col-md-5 detail-field-label">Status</span>
                            <span class="col-xs-6 col-md-7 detail-field-value">
                                <div class="field field-name-field-real-status field-type-taxonomy-term-reference field-label-hidden clearfix">
                                    <ul class="links">
                                        <li class="taxonomy-term-reference-0"><a href="/citilights/taxonomy/term/8" typeof="skos:Concept" property="rdfs:label skos:prefLabel" datatype="">Pending</a></li>
                                    </ul>
                                </div>
                            </span>

                            <span class="col-xs-6 col-md-5 detail-field-label">Location</span>
                            <span class="col-xs-6 col-md-7 detail-field-value">
                                <div class="field field-name-field-real-location field-type-taxonomy-term-reference field-label-hidden clearfix">
                                    <ul class="links">
                                        <li class="taxonomy-term-reference-0"><a href="/citilights/taxonomy/term/5" typeof="skos:Concept" property="rdfs:label skos:prefLabel" datatype="">California</a></li>
                                    </ul>
                                </div>
                            </span>

                            <span class="col-xs-6 col-md-5 detail-field-label">Price</span>
                            <span class="col-xs-6 col-md-7 detail-field-value">
                                <span class="amount">
                                    $ 1 000 000 </span> / month </span>

                            <span class="col-xs-6 col-md-5 detail-field-label">Area</span>
                            <span class="col-xs-6 col-md-7 detail-field-value"> 500 sqft</span>

                            <span class="col-xs-6 col-md-5 detail-field-label">Bedrooms</span>
                            <span class="col-xs-6 col-md-7 detail-field-value"> 4</span>

                            <span class="col-xs-6 col-md-5 detail-field-label">Bathrooms</span>
                            <span class="col-xs-6 col-md-7 detail-field-value"> 3</span>

                            <span class="col-xs-6 col-md-5 detail-field-label">Lot Area</span>
                            <span class="col-xs-6 col-md-7 detail-field-value"> 620 sqft</span>

                            <span class="col-xs-6 col-md-5 detail-field-label">Year Built</span>
                            <span class="col-xs-6 col-md-7 detail-field-value"> 1 900</span>

                            <span class="col-xs-6 col-md-5 detail-field-label">Flooring</span>
                            <span class="col-xs-6 col-md-7 detail-field-value"> Stone</span>

                            <span class="col-xs-6 col-md-5 detail-field-label">Roofling</span>
                            <span class="col-xs-6 col-md-7 detail-field-value"> Tile</span>

                            <span class="col-xs-6 col-md-5 detail-field-label">Parking</span>
                            <span class="col-xs-6 col-md-7 detail-field-value"> 3 slots</span>

                            <span class="col-xs-6 col-md-5 detail-field-label">Style</span>
                            <span class="col-xs-6 col-md-7 detail-field-value"> Bali</span>
                            <span class="col-xs-6 col-md-5 detail-field-label">Garage Size</span>
                            <span class="col-xs-6 col-md-7 detail-field-value"></span>
                            <span class="col-xs-6 col-md-5 detail-field-label">Address</span>
                            <span class="col-xs-6 col-md-7 detail-field-value"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="property-desc">
                    <h4 class="property-detail-title">Property Description</h4>
                    <p> Located on 43rd Street between 10th and 11th Avenue in the hot Midtown West ne ighborhood of Hell?s Kitchen is The Helux. These no-fee apartments feature newly renovated studio to two-bedroom rentals with modern luxuries. Exceptional amenities include a new lobby, fitness center with basketball court, landscaped sun terrace, 24-hour concierge, bicycle and tenant storage spaces, on-site management, laundry room, resident lounge, children?s play area, and an attended garage with valet parking. Enjoy a modern lifestyle with quick access to places of work and leisure, including access to the … Hudson River Park, less than two blocks away.</p>
                </div>
            </div>
        </div>
    </div>
</div>