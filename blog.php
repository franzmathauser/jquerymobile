<?php
require("header.html");
?>
            <div data-role="page" id="blog">

                <div data-role="header" data-position="fixed">
                    <h1>Blog page</h1>
                </div>
                
               <div data-role="content">
                    <div class="content-primary">
                        <ul data-role="listview" id="bloglist">

                        </ul>
                    </div>
               </div>
                <?php 
                require ("nav.html");
                ?>
                
            </div>
<?php
require("footer.html");
?>
                   
