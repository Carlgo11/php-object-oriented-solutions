<?php
require_once '../Pos/MysqlImprovedConnection.php';
require_once '../Pos/MysqlImprovedResult.php';
require_once '../Pos/XmlExporter.php';
try {
    $xml = new Pos_XMLExporter('localhost', 'psadmin', 'kyoto', 'phpsolutions');
    $xml->setQuery('SELECT * FROM blog');
    $xml->setTagNames('blog', 'entry');
    $xml->usePrimaryKey('blog');
    $output = $xml->generateXML();
    header('Content-Type: text/xml');
    echo $output;
} catch (LogicException $e) {
    echo 'This is a logic exception: ' . $e->getMessage();
} catch (RuntimeException $e) {
    echo 'This is a runtime exception: ' . $e->getMessage();
}catch (Exception $e) {
    echo 'This is a generic exception: ' . $e->getMessage();
}
?>