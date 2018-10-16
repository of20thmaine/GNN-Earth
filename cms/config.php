/**
* Bobby Palmer, CSC-465, GNN-Earth
* CMS configuration instructions.
*/

<?php
// Allow errors to be displayed in browser, and set timezone.
ini_set("display_errors", true);
date_default_timezone_set("America/New_York");
// Set application constants for re-use.
// Will not share this on github lol.

function handleException( $exception ) {
    echo "Sorry, a problem occurred. Please try later.";
    error_log( $exception->getMessage() );
}
