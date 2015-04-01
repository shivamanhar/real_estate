<div class="container">
            <div class="row">
                
                <h4>
                <?php
                foreach(range('a','z') as $letter)                
                {
                    echo " <a href='".base_url()."welcome/report/".$letter."'>".$letter."</a> | ";
                }
                ?>
                </h4>
            </div>
</div>