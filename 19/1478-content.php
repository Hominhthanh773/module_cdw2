<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1478">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="class1">
                    <h4 class="Recent">Recent Posts</h4>
            
                    <div class="class2">
                       
                       Mauris ac risus neque, ut pulvinar risus
                        <br>
                        <div> Never Eat Alone, Find Your Dinner-Mate</div>
                        <br>
                           <br>
                        <div> News from Nintendo</div>
                        <br>
                        <br>
                        <div> Which Trend For This Fall-Winter?</div>
                         <div> Easy Steps To Prepare Your Family Dinner Table</div>
                        <br>
                    </div>
                    <h4 class="title-block-sidebar">Recent Comments</h4>
                    <div class="class3">
                        <div>Thomas On Which Trend For This Fall-Winter?</div>

                        <div>  Rebecca On Which Trend For This Fall-Winter</div>
                        <br>
                        <br>
                        <div> Admin On Which Trend For This Fall-Winter?</div>
                    </div>
                    <h4>Tags</h4>
                    <div><a href="/citilights/taxonomy/term/20">Family Living</a></div>
                      <div><a href="/citilights/taxonomy/term/21">Furniture</a></div>
                      <div><a href="/citilights/taxonomy/term/22">Home staging</a></div>
                      <div><a href="/citilights/taxonomy/term/22">Inter Design</a></div> 
                  
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>

    </div>
</div>