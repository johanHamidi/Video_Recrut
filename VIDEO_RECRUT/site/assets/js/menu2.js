<script type=”text/javascript”><br />
$(document).ready(function () {<br />
// find the elements to be eased and hook the hover event<br />
$(‘div.jimgMenu ul li a’).hover(function() {<br />
// if the element is currently being animated<br />
if ($(this).is(‘:animated’)) {<br />
$(this).stop().animate({width: “310px”}, {duration: 450, easing:”easeOutQuad”, complete: “callback”});<br />
} else {<br />
// ease in quickly<br />
$(this).stop().animate({width: “310px”}, {duration: 400, easing:”easeOutQuad”, complete: “callback”});<br />
}<br />
}, function () {<br />
// on hovering out, ease the element out<br />
if ($(this).is(‘:animated’)) {<br />
$(this).stop().animate({width: “78px”}, {duration: 400, easing:”easeInOutQuad”, complete: “callback”})<br />
} else {<br />
// ease out slowly<br />
$(this).stop(‘:animated’).animate({width: “78px”}, {duration: 450, easing:”easeInOutQuad”, complete: “callback”});<br />
}<br />
});<br />
});<br />
</script><br />
