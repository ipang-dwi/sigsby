<?php
 
    //Create Database connection
    $db = mysql_connect("localhost","root","1717");
    if (!$db) {
        die('Could not connect to db: ' . mysql_error());
    }
 
    //Select the Database
    mysql_select_db("sigsby",$db);
 
    $result = mysql_query("SELECT id_wisata, lat, lng, kategori AS category, wisata, keterangan, alamat, pic 
			FROM wisata AS w INNER JOIN kategori_wisata AS kw 
			ON w.id_kategori = kw.id_kategori 
			ORDER BY id_wisata", $db);  
 
    //Create SimpleXMLElement object
    $xml = new SimpleXMLElement('<xml/>');
 
    //Add each column value a node of the XML object
    while($row = mysql_fetch_assoc($result)) {
        $mydata = $xml->addChild('marker');
        $mydata->addChild('wisata',$row['wisata']);
        $mydata->addChild('lat',$row['lat']);
        $mydata->addChild('lng',$row['lng']);
        $mydata->addChild('category',$row['category']);
    }
 
    mysql_close($db);
    //Create the XML file
    $fp = fopen("data/wisata.xml","wb");
 
    //Write the XML nodes
    fwrite($fp,$xml->asXML());
 
    //Close the database connection
    fclose($fp);
 
?>