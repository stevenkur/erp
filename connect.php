<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client('mongodb://stevenkur:kurniawan261096!@clustercompanydb-shard-00-00-0kdul.mongodb.net:27017,clustercompanydb-shard-00-01-0kdul.mongodb.net:27017,clustercompanydb-shard-00-02-0kdul.mongodb.net:27017/companydb?ssl=true&replicaSet=ClusterCompanyDB-shard-0&authSource=admin');

$companydb = $client->companydb;
?>