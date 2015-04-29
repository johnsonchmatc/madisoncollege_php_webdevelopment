<?php
$search_string = <<<EOF
<product>
<id type="integer">36</id>
<name>Apple Watch</name>
<description>fancy watch</description>
<price type="decimal">15000.0</price>
<image-url nil="true"/>
<created-at type="dateTime">2015-04-14T03:57:24Z</created-at>
<updated-at type="dateTime">2015-04-14T03:57:24Z</updated-at>
</product>
<product>
<id type="integer">35</id>
<name>Facebook</name>
<description>The Facebook site</description>
<price type="decimal">1000.0</price>
<image-url nil="true"/>
<created-at type="dateTime">2015-03-08T21:49:51Z</created-at>
<updated-at type="dateTime">2015-03-08T21:49:51Z</updated-at>
</product>
<product>
<id type="integer">34</id>
<name>Roku 6</name>
<description>Original Roku open box</description>
<price type="decimal">24.99</price>
<image-url nil="true"/>
<created-at type="dateTime">2015-03-08T21:31:21Z</created-at>
<updated-at type="dateTime">2015-03-08T21:43:42Z</updated-at>
</product>
<product>
<id type="integer">31</id>
<name>New Product</name>
<description>A new Product</description>
<price type="decimal">1.0</price>
<image-url nil="true"/>
<created-at type="dateTime">2015-03-08T21:27:26Z</created-at>
<updated-at type="dateTime">2015-03-08T21:27:26Z</updated-at>
</product>
<product>
<id type="integer">30</id>
<name>Time Capsule - 3TB</name>
<description>Description of Time Capsule - 3TB</description>
<price type="decimal">499.0</price>
<image-url nil="true"/>
<created-at type="dateTime">2015-03-08T13:51:45Z</created-at>
<updated-at type="dateTime">2015-03-08T13:51:45Z</updated-at>
</product>
<product>
<id type="integer">29</id>
<name>Time Capsule - 2TB</name>
<description>Description of Time Capsule - 2TB</description>
<price type="decimal">299.0</price>
<image-url nil="true"/>
<created-at type="dateTime">2015-03-08T13:51:45Z</created-at>
<updated-at type="dateTime">2015-03-08T13:51:45Z</updated-at>
</product>
<product>
<id type="integer">28</id>
<name>AirPort Express</name>
<description>Description of AirPort Express</description>
<price type="decimal">99.0</price>
<image-url nil="true"/>
<created-at type="dateTime">2015-03-08T13:51:45Z</created-at>
<updated-at type="dateTime">2015-03-08T13:51:45Z</updated-at>
</product>
<product>
<id type="integer">27</id>
<name>Canon Rebel XS Kit (Black)</name>
<description>Description of Canon Rebel XS Kit (Black)</description>
<price type="decimal">549.95</price>
<image-url nil="true"/>
<created-at type="dateTime">2015-03-08T13:51:45Z</created-at>
<updated-at type="dateTime">2015-03-08T13:51:45Z</updated-at>
</product>
<product>
<id type="integer">26</id>
<name>DVI to VGA Adapter</name>
<description>Description of DVI to VGA Adapter</description>
<price type="decimal">30.0</price>
<image-url nil="true"/>
<created-at type="dateTime">2015-03-08T13:51:45Z</created-at>
<updated-at type="dateTime">2015-03-11T23:42:36Z</updated-at>
</product>
<product>
<id type="integer">25</id>
<name>Mini DVI to VGA Adapter</name>
<description>Description of Mini DVI to VGA Adapter</description>
<price type="decimal">29.0</price>
<image-url nil="true"/>
<created-at type="dateTime">2015-03-08T13:51:45Z</created-at>
<updated-at type="dateTime">2015-03-08T13:51:45Z</updated-at>
</product>
</products>
EOF;


//find product names
 $product_result = preg_match_all('/((?<=<name>)([\w+\ ]*)(?=<\/name>))/', $search_string, $product_matches);

$products = $product_matches[0];

$price_result = preg_match_all('/((?<=<price type=\"decimal\">)(\d+\.\d+)(?=<\/price>))/', $search_string, $price_matches);

$prices = $price_matches[0];

$i = 0;

foreach ($products as $product){
  echo "<p>$product $$prices[$i]";
  $i++;
}

  


//list products and their price
?>
