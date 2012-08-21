<?php
require("common/header.html");
?>
            <div data-role="page" id="places">

                <div data-role="header" data-position="fixed">
                    <h1>Places page</h1>
                </div>
                
               <div data-role="content">
                 <div class="content-primary">
                        <ul data-role="listview" id="placeslist">

                        </ul>
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
    $(document).bind('pagebeforecreate', loadPlacesList);
</script>
