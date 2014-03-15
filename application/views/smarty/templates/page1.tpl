<div class="container">
    {if isset($alertmessage)}
        <div class='row'>
            <div class='col-md-12'>
            <div class="alert alert-danger">{$alertmessage}</div>
            </div>
        </div>
        {/if}
<div class='row'>
    <div class='col-md-2'>Create Movie</div>
    <div class='col-md-4'>{include file="form_movie.tpl"}</div>
    <div class='col-md-6'></div>
</div><!-- /end row-->
</div><!-- /end container-->