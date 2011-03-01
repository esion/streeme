<?php
#
# Displays a letter based navigation component in an unordered list
# Non English: TODO - Make a similar nav for non-latin/non-english
#
	$list = array();

   // Go 123 
	$list[] = '#';

	// Go A-Z
	for($code = ord('A'); $code <= ord('Z'); $code++) {
		$list[] = chr($code);
	}

   echo '<table class="letterbar" id="letterbar' . $element . '">';
   echo ' <tr>';
   foreach ( $list as $alpha => $label )
   {
      echo '<td><a href="#' . $element . '_' . $label . '">' . strtoupper( $label ) . '</a></td>';
   }
   echo ' </tr>';
   echo '</table>';