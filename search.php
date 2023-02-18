<html>
<header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</header>
<body>
<br /><br />
<div class="container" style="width:900px;">
    <h2 align="center">Find the phone</h2>
    <br /><br />
    <div align="center">
        <input type="text" name="search" id="search" placeholder="Search Mobile Details"  />
    </div>
    <ul id="result"></ul>
    <br />
</div>
</body>
</html>

<?php

session_start();
$db = mysqli_connect('localhost', 'root', '', 'phpcrud');
include 'json/json_connection.php';
?>
<script>

$(document).ready(function(){
$.ajaxSetup({ cache: false })
$('#search').keyup(function(){
$('#result').html('');
$('#state').val('');
var searchField = $('#search').val();
var expression = new RegExp(searchField, "i");
$.getJSON('json/mobdata.json', function(data) {
$.each(data, function(key, value){
if (value.name.search(expression) != -1 )
{
$('#result').append('<li> '+value.name+' | <span>'+value.price+'</span> | <span>'+value.features+'</span>' +
    '| <span>'+value.more+'</span></li>');
}
});
});
});

$('#result').on('click', 'li', function() {
var click_text = $(this).text().split('|');
$('#search').val($.trim(click_text[0]));
$("#result").html('');
});
});
</script>