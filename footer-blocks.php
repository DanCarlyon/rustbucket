<div class="block-wrapper">
        <div class="block left">
            <span>
                <h3>Server Information</h3>
                <br />
                <?php
                $server = file_get_contents('http://www.realsnipers.com/server/index.php');
                $sdata = json_decode($server);
                echo $sdata->serverip.':'.$sdata->serverport.'<br />';
                echo $sdata->servername.'<br />';
                echo $sdata->map.'<br />';
                echo '<img src="http://www.realsnipers.com/server/img/'.$sdata->map.'.jpg" style="width:200px;" /><br />';
                echo $sdata->playercount.'/'.$sdata->maxplayers.' Players Online<br />';
                //var_dump($sdata);
                ?>               
            </span>
        </div>
        <div class="block center-left">
            <span>
                <h3>Twitter</h3>
                <a href="https://twitter.com/RustBucket" target="_blank">@RustBucket</a><br />
                [Latest Tweet from the rust bucket account, with lots of goodness]<br />
                [27th Feb 2014 - 10:02am]<br />
                <a href="/">View on Twitter</a> | <a href="/">Follow @RustBucket</a>
            </span>
        </div>
        <div class="block center-right">
            <span>
                <h3>Forum</h3>
                [Recent Comments]
            </span>
        </div>
        <div class="block right">
            <span>
                <h3>Vote for Us</h3>
                Please vote for us to help grow the server and community.<br />
                <script src="http://rust-servers.net/embed.js?id=205&type=votes&size=small"></script><br />
                <br />
                <a href="http://toprustservers.com/server/9352" title="Vote for Rust-Bucket[UK]"><img src="http://static.toprustservers.com/hosted/250-100new.gif" style='width:200px;'></a><br /><br />
                Please also consider donating to help keep the server and website running.
                [Donate Button]
            </span>
        </div>
        <div class="clear"></div>
    </div>