<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dancing-disability
 */

?>
<script>

	let expandElements = document.querySelectorAll('.depth-1')
	for (var i = 0; i < expandElements.length; i++) {
		expandElements[i].addEventListener('click', toggleComment, false);
	}
	
	function toggleComment(e) {
		console.log(e.target.classList.contains('contracted'))
		if (e.target.classList.contains('contracted')) {
			e.target.classList.add('expanded');
			e.target.classList.remove('contracted');
			e.target.getElementsByClassName('comment-content')[0].classList.remove('comment-content-contracted');
		} else {
			e.target.classList.add('contracted');
			e.target.classList.remove('expanded');
			e.target.getElementsByClassName('comment-content')[0].classList.add('comment-content-contracted');
		}
	}
</script>

</div><!-- #page -->

</body>
</html>
