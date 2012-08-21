<?php
require("common/header.html");
?>
            <div data-role="page" id="blog">

                <div data-role="header" data-position="fixed">
                    <h1>Contact page</h1>
                </div>
                
               <div data-role="content">
                   <form action="http://backend.masterthesis.fm/index.php/rest/contacts" method="post" data-ajax="false">
                        <div data-role="fieldcontain">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" value="" data-mini="true" />
                        </div>
                       <div data-role="fieldcontain">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" value="" data-mini="true" />
                        </div>

                        <div data-role="fieldcontain">
                            <label for="message">Message: *</label>
                            <textarea name="message" id="message"></textarea>
                        </div>
                       <input type="submit" name="send" value="Send">
                   </form>
               </div>
                <?php 
                require ("common/nav.html");
                ?>
                
            </div>
<?php
require("common/footer.html");
?>
                   
