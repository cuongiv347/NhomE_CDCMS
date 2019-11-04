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

                            <h3> MENU</h3>
                            <hr class="hr1">
                            <div class="col-md-4 col-sm-6 col-xs12">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <a href=""><img width ="80.5px" height="80.9px" src="./images/img1" alt=""></a>


                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                   <h4 class="menu item">
                                       <a href="#">Nibh ronando dakda</a>
                                       <hr class="hr2">
                                   </h4>
                                   
                                   <span class="menu-price">$21</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs12">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                    <a href=""><img width ="80.5px" height="80.9px" src="./images/img1" alt=""></a>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                   <h4 class="menu item">
                                       <a href="#">Nibh ronando dakda</a>
                                   </h4>
                                   <hr class="hr2">
                                   <span class="menu-price">$21</span>
                                </div>                            </div>
                            <div class="col-md-4 col-sm-6 col-xs12">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <a href=""><img width ="80.5px" height="80.9px" src="./images/img1" alt=""></a>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                   <h4 class="menu item">
                                       <a href="#">Nibh ronando dakda</a>
                                   </h4>
                                   <hr class="hr2">
                                   <span class="menu-price">$21</span>
                                </div>                            
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs12">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                    <a href=""><img width ="80.5px" height="80.9px" src="./images/img1" alt=""></a>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                   <h4 class="menu item">
                                       <a href="#">Nibh ronando dakda</a>
                                   </h4>
                                   <hr class="hr2">
                                   <span class="menu-price">$21</span>
                                </div>   
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs12">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                    <a href=""><img width ="80.5px" height="80.9px" src="./images/img1" alt=""></a>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                   <h4 class="menu item">
                                       <a href="#">Nibh ronando dakda</a>
                                   </h4>
                                   <hr class="hr2">
                                   <span class="menu-price" >$21</span>
                                </div>   
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs12">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                    <a href=""><img width ="80.5px" height="80.9px" src="./images/img1" alt=""></a>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                   <h4 class="menu item">
                                       <a href="#">Nibh ronando dakda</a>
                                   </h4>
                                   <hr>
                                   <span class="menu-price">$21</span>
                                </div>   
                            </div>
                        </div>
                        
                        
                    </div>
                </div>                   
                    </div>
                
            </div>
