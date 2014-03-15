<div class='container'>
    <div class='row'>
        <div class='col-md-2'>
            Left
        </div><!-- /div col-md-2--> 
        <div class='col-md-10'>
            <table>
            {foreach $rows as $row}
                <tr>
                    <td>{$row['movie_id']}
                    <td>{$row['title']}
                    <td><a class="btn btn-default" href="{$urlAction}=edit&id={$row['movie_id']}" >edit</a><td>
                    <td><a class="btn btn-default" href="{$urlAction}=delete&id={$row['movie_id']}">delete</a><td>
                    <td>
                
                </tr>
            {/foreach}                        
            </table>        
        </div><!-- /div col-md-10-->    
    </div><!-- /div row-->            
</div><!-- /div container-->    
