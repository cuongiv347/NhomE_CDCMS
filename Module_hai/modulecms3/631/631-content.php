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
                    
                            <div class="banner-text">

                            <h3> SPECIALS</h3>
                            <hr class="hr1">
                            <div class="col-md-4 col-sm-6 col-xs12">
                                
                                    <a href=""><img width ="247px" height="163.9px" src="./images/img1" alt=""></a>


                             
                               
                                   <h4 class="menu item">
                                       <a href="#">Nibh ronando dakda</a>
                                       <hr class="hr2">
                                   </h4>
                                   
                                   <span class="menu-price">$21</span>
                                
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs12">
                                
                                    <a href=""><img width ="247px" height="163.9px" src="./images/img1" alt=""></a>


                             
                               
                                   <h4 class="menu item">
                                       <a href="#">Nibh ronando dakda</a>
                                       <hr class="hr2">
                                   </h4>
                                   
                                   <span class="menu-price">$21</span>
                                
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs12">
                                
                                    <a href=""><img width ="247px" height="163.9px" src="./images/img1" alt=""></a>


                             
                               
                                   <h4 class="menu item">
                                       <a href="#">Nibh ronando dakda</a>
                                       <hr class="hr2">
                                   </h4>
                                   
                                   <span class="menu-price">$21</span>
                                
                            </div>

                            
                            
                            
                        </div>
                        
                        
                    </div>
                </div>                   
                    </div>
                
            </div>
