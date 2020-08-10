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
                    <h4 class="Recent">Contact Us</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d501725.33821012!2d106.41502218634463!3d10.75534109947591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1596527739249!5m2!1svi!2s" width="1000" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            
                 
            </div>
            <div class="col-md-5"></div>
        </div>

    </div>
</div>