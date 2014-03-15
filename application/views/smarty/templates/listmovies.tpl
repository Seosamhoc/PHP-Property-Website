 <div class="container">
     

    {*<table class="table table-striped table-responsive">
        <tr class='row'>
            <th class="col-md-4">Image</th>
            <th class="col-md-1">Listing</th>
            <th class="col-md-1">Price</th>
            <th class="col-md-1">Sold?</th>
            <th class="col-md-1">Street</th>
            <th class="col-md-1">County</th>
            <th class="col-md-1">Type of House</th>
            <th class="col-md-1">Edit</th>
            <th class="col-md-1">Delete</th>

        </tr>
        {foreach $rows as $row}
            <tr class='row'>
                <td class="col-md-4 thumbnail"><div class="thumbnail"><img src="{$imagepath}{$row['imagefile']}"><div class="caption"><p>{$row['imagefile']}</p></div></div></td>
                <td class="col-md-1">{$row['listing_id']}</td>
                <td class="col-md-1">{$row['price']}</td>
                <td class="col-md-1">{$row['sold']}</td>
                <td class="col-md-1">{$row['address']}</td>
                <td class="col-md-1">{$row['county_id']}</td>
                <td class="col-md-1">{$row['housetype_id']}</td>

                <td class="col-md-1"><a class="btn btn-default" href="{$urlAction}=edit&id={$row['listing_id']}">Edit</a></td>
                <td class="col-md-1"><a class="btn btn-default" href="{$urlAction}=delete&id={$row['listing_id']}">Delete</a></td>
            </tr>
        {/foreach}
    </table>*} 
    <div class="table-condensed">
        <div class="row">
            <div class="col-xs-4 col-md-2 h5">Image</div>
            <div class="col-xs-1 col-md-1 h5">Listing</div>
            <div class="col-xs-1 col-md-1 h5">Price</div>
            <div class="col-xs-1 col-md-1 h5">Sold?</div>
            <div class="col-xs-1 col-md-2 h5">Street</div>
            <div class="col-xs-1 col-md-1 h5">County</div>
            <div class="col-xs-1 col-md-2 h5">Type of House</div>
            <div class="col-xs-1 col-md-1 h5">Edit</div>
            <div class="col-xs-1 col-md-1 h5">Delete</div>
        </div>
    {foreach $rows as $row}
    <div class="row">
        <div class="col-xs-4 col-md-2">
        <div class="thumbnail">
            <img src="{$imagepath}{$row['imagefile']}">
            <div class="caption"><p>{$row['imagefile']}</p></div>
        </div>
        </div>
        <div class="col-xs-1 col-md-1">
            {$row['listing_id']}
        </div>
        <div class="col-xs-1 col-md-1">
            {$row['price']}
        </div>
        <div class="col-xs-1 col-md-1">
            {$row['sold']}
        </div>
        <div class="col-xs-1 col-md-2">
            {$row['address']}
        </div>
        <div class="col-xs-1 col-md-1">
            {$row['county_id']}
        </div>
        <div class="col-xs-1 col-md-2">
            {$row['housetype_id']}
        </div>
        <div class="col-xs-1 col-md-1">
            <a class="btn btn-default" href="{$urlAction}=edit&id={$row['listing_id']}">Edit</a>
        </div>
        <div class="col-xs-1 col-md-1">
            <a class="btn btn-default" href="{$urlAction}=delete&id={$row['listing_id']}">Delete</a>
        </div>
    </div>
{/foreach}
</div>
     </div><!-- /end container -->