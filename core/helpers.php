<?php
  // Helper functions
  function sanitize($value) {
  	if (!empty($value)) {
  		return htmlentities(strip_tags(trim($_POST[$value])));
  	}
  	return false;
  }
