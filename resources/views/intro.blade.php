<?php
/**
 * Created by PhpStorm.
 * User: Younkyu
 * Date: 2017-07-21
 * Time: 오후 11:58
 */
echo '안녕2'.$full;

$textArray = [];

foreach ($full as $contents) {
    array_push($textArray, $contents->text);
}
?>


<html>

<ul id="hello">

</ul>

</html>


<script>
    var js_array = new Array("<?=implode("\",\"" , $textArray);?>");

//    for(var i = 0 ; i < js_array.length ; i ++ ) {
//        "<li>"+ js_array[i] +"</li>";
//    }

    console.log(js_array);

    for(var i = 0 ; i < js_array.length ; i ++ ) {
        var list4 = document.createElement("li");
        var node = document.createTextNode(js_array[i]);
        list4.appendChild(node);

        var element = document.getElementById("hello");
        element.appendChild(list4);
    }




</script>