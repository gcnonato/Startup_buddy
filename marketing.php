<?php
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Marketing</title>
<style>
* {
    box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
    padding: 10px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
    .column  {
        width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column  {
        width: 100%;
    }
}
</style>
</head>
<body>

<h2 style="margin-left: 5em">Marketing</h2>
<p>The heart of your business success lies in its marketing. Most aspects of your business depend on successful marketing. The overall marketing umbrella covers advertising, public relations, promotions and sales. Marketing is a process by which a product or service is introduced and promoted to potential customers</p>

<div class="row">
  <div class="column" width="25%" style="background-color:lightblue;">
  
    <h2>Web Analytics for your website</h2>
    <p>Importance of web analytics:- Web analytics is important to grow your small business website. 
	Web analytics provide you website visitors’ data so you can optimize your content based on users interest. It’s important to identify what users are doing on your business or blog website.  
	So, you take productive decisions that grow your profit and increase website traffic. 
<a href="m1.php">Different tools for analyzing your website</a>

  </div>
  
  
  
  <div class="column" width="25%" style="background-color:#bbb;">
    <h2>Advertising your website</h2>
    <p>Advertising is important for every aspect of a business. 
	It plays an imperative role for both manufacturers and consumers. 
	Advertising is important for the business on the whole as it lets the business gain more customers, thereby increasing business turnaround. </p>
  <a href="m2.php">Different tools for advertising your website</a>
  </div>
  
  
  
    <div class="column" width="25%" style="background-color:#ccc;">
     <h2>Trending Topics</h2>
    <p>Predicting a trend is a matter of knowing where to look before the masses have trained their eyes. 
	Reading trends on social before wide adoption can inform thought leadership and determine business decisions.</p>
  <a href="m3.php">Different tools for exploring trending topics</a>
  </div>
  
  <div class="column" width="25%" style="background-color:#ddd;">
    <h2>Seo Measures</h2>
    <p>The importance of SEO. Search Engine Optimization (SEO) is the key tool for the website owners to get more traffic to the website. Optimization of a website is crucial to get traffic and maintain the level over the search engine
	</p>
  <a href="m4.php">Different tools for seo tools  for your website</a>
  </div>
  
  
</div>

</body>
</html>
