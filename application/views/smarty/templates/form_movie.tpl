<form class="form-horizontal" role="form" action="processform.php" method="post" enctype="multipart/form-data">
    <input type = "hidden" name="listing_id" value = "{if isset($row['listing_id'])}{$row['listing_id']}{else}0{/if}">
    <div class="form-group">
        <label for="movietitle" class="col-lg-2 control-label" >Price</label>
        <div class="col-lg-10">
            <input type="number" name="price" class="form-control" id="price" {if isset($row['price'])}value = "{$row['price']}"{/if} placeholder="price" required>
        </div>
    </div>
    <div class="form-group">
        <label for="street" class="col-lg-2 control-label">Address</label>
        <div class="col-lg-10">
            <input type="text" name="street" class="form-control" id="street"  {if isset($row['address'])}value="{$row['address']}"{/if} placeholder="street" required>
        </div>

        <div class="col-lg-10 controls input-lg">
        <select id="county_id" name="county_id" required>
            <option value="">-County-</option>
            {foreach $countyrows as $countyrow}
                {if $countyrow['county_id']==$row['county_id']}
                     <option value="{$countyrow['county_id']}" selected>{$countyrow['county']}</option>
                {else}
                    <option value="{$countyrow['county_id']}">{$countyrow['county']}</option>
                {/if}
            {/foreach}
        </select>	
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-2 control-label" for="housetype_id">House Type</label>
            <div class="col-lg-10 controls input-lg">
                <select id="housetype_id" name="housetype_id" required>
                    <option value="">---</option>
                    {foreach $houserows as $houserow}
                        {if $houserow['housetype_id']==$row['housetype_id']}
                            <option value="{$houserow['housetype_id']}" selected>{$houserow['housetype']}</option>
                        {else}
                            <option value="{$houserow['housetype_id']}">{$houserow['housetype']}</option>
                        {/if}
                    {/foreach}
                </select>
            </div>
    </div>
        
    <div class="form-group">
        <div class="col-lg-2">
            <div class="col-lg-10 checkbox">
                <label>
                    <input id="sold" name="sold" type="checkbox" value="1" {if isset($row['sold']) && $row['sold']!=0}checked{/if}> Sold
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Upload Image</label>
        <div class="col-lg-10 controls">
            {if isset($row['imagefile'])}<p>Leaving empty will keep current image</p>{/if}
            <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
            <input type="file" name="uploadedfile" id="uploadedfile" {if !isset($row['imagefile'])}required{/if}>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <input type="submit" name="submit" class="btn btn-default" value="Submit">
        </div>
    </div>
</form>
            
           