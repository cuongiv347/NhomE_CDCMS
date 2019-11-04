<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-631">
           
               
                <div class="header-banner">
               <div class="container">
                   <div class="row">
                    <div class="col-md-9">
                         <div class="banner-text">

                        <h3>ABOUT US</h3>
                        <hr class="hr">
                        <p> 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec mi a ante elementum sollicitudin. Nunc vel tortor mauris. Pellentesque nec placerat tortor. Suspendisse efficitur orci quis nunc consectetur, eget malesuada tellus aliquet. Phasellus ultrices neque a malesuada venenatis. Sed rutrum et nibh ac condimentum. Duis tincidunt, turpis et tincidunt euismod, ipsum quam finibus risus, non pharetra orci urna non nulla. Phasellus ultrices neque a malesuada venenatis. Sed rutrum et nibh ac condimentum. Duis tincidunt, turpis et tincidunt euismod, ipsum quam finibus risus, non pharetra orci urna non nulla.
                        </p>
                        <div class="buttonsp">
                          <button> SEE OUR SPECIAL</button>
                      </div>
                    </div>
                    </div>
                    <div class="col-md-3">
                        <div class="hinhanh">
                            <img   src="./images/chef-white.png" alt="k hiển thị" >
                        </div>
                        
                    </div>
                     
                   </div>
               </div>                   
                </div>
            
        </div>
