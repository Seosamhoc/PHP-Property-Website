
$(document).ready(function(){
    console.log("jquery loaded");
    insertMessage();

    $( 'select.county' ).change(function() {
        insertMessage();
    });
    $( 'select.housetype' ).change(function() {
        insertMessage();
    });
    $( 'select.price' ).change(function() {
        insertMessage();
    });
});//close on ready

function getCounty()
{
    var county = $('select.county').val();
    //console.log(county);

    return county;
}

function getHouse()
{
    var housetype = $('select.housetype').val();
    //console.log(housetype);

    return housetype;
}

function getPrice()
{
    var price = $('select.price').val();
    //console.log(price);

    return price;
}

function insertMessage()
{
    $.getJSON('api.php', function(data){ 
    //console.log('loaded');

    var IMAGE_PATH = "/propertyWebsite/uploads/";
    var items='';

    if( getCounty() !==""){
    data = jQuery.grep(data, function( n ){
        //console.log(data);
            return n.county === getCounty();
        });
    } 

    if( getHouse() !==""){
    data = jQuery.grep(data, function( n ){
        //console.log(data);
            return n.housetype === getHouse();
        });
    }

    if( getPrice() !==""){
    data = jQuery.grep(data, function( n ){
        //console.log(data);
        if ( getPrice() ==="big"){
            return n.price > 1500000;
        }
        else{
            //console.log(getPrice());
            return n.price < parseInt(getPrice());
        }
        });
    }

    $.each(data, function(i, listing){




        items+= "<li class='media'><a class='pull-left'><img class='media-object' src='" + IMAGE_PATH + listing['imagefile'] + "'></a>"
        items+= "<div class='media-body'><h4 class='media-heading'>Property: " + listing['address'] + "</h4>"
        items+= "<p>Price: " + listing['price'] + "</p>";

        items+= "<p>Availability: ";
        if(listing['sold']==0)
        {
            items+= "For Sale</p>";
        }
        else
        {
            items+= "Sold</p>";
        }
        items+= "<p>Type: " + listing['housetype'] + "<p>";
        items+= "<p>County: " + listing['county'] + "<p>";
        items+= "</div></li>";
    });
    $('#message').html("");
    $('#message').append(items);

});
}
