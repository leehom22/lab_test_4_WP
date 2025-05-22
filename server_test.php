<?php
// Basic PHP functionality check
echo "<h2>✅ PHP is working on this server!</h2>";
// Student info (customize this per student if needed)
$studentName = "Ling Lee Hom";
$matricID = "A23CS0105";
echo "<p><strong>Student:</strong> $studentName ($matricID)</p>";
// Server time
echo "<p><strong>Server Time:</strong> " . date("Y-m-d H:i:s") . "</p>";
// Server info
echo "<h3>Server Info:</h3>";
echo "PHP Version: " . phpversion() . "<br>";
echo "Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "<br>";
// File write permission test
$testFile = "test_file.txt";
if (file_put_contents($testFile, "Test write by $studentName at " .
date("H:i:s"))) {
 echo "<p>✅ File write test succeeded: $testFile created.</p>";
} else {
 echo "<p>❌ File write test failed. Check folder permissions.</p>";
}
?>