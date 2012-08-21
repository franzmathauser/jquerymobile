<?php
require("common/header.html");
?>
            <div data-role="page" id="places_detail" data-add-back-btn="true" data-back-btn-text="Zurück">

                <div data-role="header" data-position="fixed" >
                    <h1>Details page</h1>
                </div>
                
               <div data-role="content" >
                 <div class="content-primary">
                     <a href="#" data-role="button" data-icon="star">Add to Favorites</a>
                     <div id="detail-entry"></div>   
                 </div>
               </div>
                <?php 
                require ("common/nav.html");
                ?>
                
            </div>
<?php
require("common/footer.html");
?>
               
<script>
    $(document).bind('pagebeforecreate', loadPlacesDetail);
</script>
