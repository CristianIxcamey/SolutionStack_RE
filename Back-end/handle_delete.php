<?php
$id = $_POST["id"];
include 'delete_review.php';
$deleter = new reviewDelete();
$deleter->deleteReview($id);
header("Location: http://localhost:9090/SolutionStack_RE/Front-end/profile.php");
?>