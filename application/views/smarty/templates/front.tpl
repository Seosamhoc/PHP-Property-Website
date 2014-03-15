
<div class="container">

<div class="row">
    <div class="col-lg-12">
        <select class="price" name="price">
            <option value="">Price</option>
            <option value=100000>&lt; 100000 </option>
            <option value=250000>&lt; 250000</option>
            <option value=750000>&lt; 750000</option>
            <option value=1500000>&lt; 1500000</option>
            <option value="big">&gt; 1500000</option>
        </select>
        <select class="county" name="county_id">
            <option value="">County</option>
            {foreach $countyrows as $countyrow}
                    <option value="{$countyrow['county']}">{$countyrow['county']}</option>
            {/foreach}
        </select>
        
        <select class="housetype" name="housetype_id">
            <option value="">House type</option>
            {foreach $houserows as $houserow}
                <option value="{$houserow['housetype']}">{$houserow['housetype']}</option>
            {/foreach}
        </select>
</div>    
<div class="row">
    <div class="col-lg-12" id='message'>No message</div>
</div>
</div>
</div>
        
       