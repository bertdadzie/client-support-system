<?php // The location of the PDF file 
$file = 'yes.pdf';  
// Header content type 
header('Content-type: application/pdf'); 
  
header('Content-Transfer-Encoding: binary'); 
  
header('Accept-Ranges: bytes'); 
  
// Read the file 
@readfile($file); 
?>   
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<a href=""></a>
</body>
</html>