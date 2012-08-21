<?php
require("common/header.html");
?>


            
            <div data-role="page" id="index">

                <div data-role="header" data-position="fixed">
                    <h1>Index page</h1>
                </div>
                
                <div data-role="content">
                    <img src="http://jquerymobile.com/wp-content/themes/jquery-mobile/images/jquery-mobile-logo.png" />
                    <h1>Welcome to jquery mobile</h1>
                    <h2>We make awesome web application utils and mobil ui-components.</h2>
                </div>


                <?php 
                require("common/nav.html");
                ?>
                
            </div>
            <!-- Start of first page: #home -->
            <div data-role="page" id="homepage">

                    <div data-role="header">
                            <h1>Home</h1>
                    </div><!-- /header -->

                    <div data-role="content" >
                            <h2>Home</h2>

                            <p>
                                    Hier ein kleines Boilerplate Template, welches einige wichtige Elemente für Mobile Webapps zeigt.
                            </p>

                            <a href="index.html" data-role="button">Link button</a>
                            <a href="index.html" data-role="button" data-mini="true">Link button</a>
                            <a href="#page2">Page2</a>
                    </div><!-- /content -->

                    <div data-role="footer" data-theme="d">
                            <h4>jQuery mobile Prototype 2012</h4>
                    </div><!-- /footer -->
            </div><!-- /page home -->

            <!-- Start of first page: #home -->
            <div data-role="page" id="page2" data-title="Description">

                    <div data-role="header">
                            <h1>Home</h1>
                    </div><!-- /header -->

                    <div data-role="content" >
                            <h2>Page-Attributes</h2>

                            <p>
                                    <code>
                                            data-title</code>
                                    Werden Pages via ajax nachgeladen so kann mit diesem Attribut der Window Title abgeändert werdern. <code>
                                    </code>
                            </p>

                            <h2>Linking-Attributes</h2>
                            <p>
                                    <ul></ul>
                                    <li>
                                            <a href="http://localhost/jquerymobile/demos/docs/pages/page-links.html">Link Docs</a>
                                            <br />
                                    </li>
                                    <li>
                                            <code>
                                                    data-ajax="false"</code>
                                            Links werden nicht via Ajax nachgeladen.
                                    </li>
                                    <li>
                                            <code>
                                                    data-rel="dialog"</code>
                                            Page als Dialog anzeigen.
                                    </li>
                                    <li>
                                            <code>
                                                    data-prefetch</code>
                                            Page wird von jquery vorgeladen. (besser als alle pages in ein Dokument zusammen zu fassen)
                                    </li>
                                    <li>
                                            <code>
                                                    data-transition="pop"</code>
                                            Page Transitions
                                    </li>

                            </p>

                            <p>
                                    <ul>
                                            <li><code>data-role="collapsible" data-theme="a" data-content-theme="a"</code></li> Collapsible Container mit Theme formatting
                                    </ul>

                            </p>

                    </div><!-- /content -->
                    <div data-role="footer" data-theme="d">
                            <h4>jQuery mobile Prototype 2012</h4>
                    </div><!-- /footer -->
            </div><!-- /page home -->


                    
<?php
require("commong/footer.html");
?>
                   