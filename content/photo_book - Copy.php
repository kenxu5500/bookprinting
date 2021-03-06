<?php ?>


<style>
p { margin:0 }

.display_img {
	width:400px;
	min-height:600px;
	float:left;
	padding-top:40px;
}

.display_details {
	width:590px;
	min-height:600px;
	float:right;
	padding-top:40px;
	padding-left:20px;
}

.subtitle {
	color:#ceaa86;
	font-weight:bold;
}

.main_image {
	display: block;
	padding-top:20px;
	margin-left: auto;
	margin-right: auto;
}

.img_thumbnail_wrap {
	padding:20px 40px;
	display: block;
}

.img_thumbnail {
	padding:2px 5px;
}

p.product_title {
	font-family:"Times New Roman", Times, serif;
	font-size:38px;
	font-weight:bold;
	padding:0;
	margin:0;
}

p.product_title span {
	font-size:20px;
}

.sub_details {
	font-size:14px;
}



.size_template {
	font-size:12px;
	padding-top:5px;
}

.size_template tr .size_img {

}

.size_template tr .size_style {
	font-size:12px;

}

.size_style a:hover {
	text-decoration:underline;
	
}

.size_template tr .size_size {
	font-size:12px;

}

.price_table {
	font-size:14px;
}

.price_table th {
	text-align:left;
}

.price_table .add_cost {
	color:#b2aa9d;
}

.price_details {
	font-size:12px;
	
}

.video {
	background-color:#c9c3b9;
	padding:30px 40px;
}

.video iframe {
	padding-right:30px;
}

p.youtube_title {
	font-weight:bold;
	color:7c7770;
	font-family:"Times New Roman", Times, serif;
	font-style:italic;
}
</style>


<div class="display_img">
<img class="main_image" src="images/photobook/main_image.png" width="226" height="191" alt="Photobook" />

<div class="clear"></div>

  <div class="img_thumbnail_wrap">   
    <a href="images/photobook/lightbox1.jpg" rel="lightbox[a]" title="you may write a description in here"><img class="img_thumbnail" src="images/photobook/thumbnail1.png" width="64" height="52" alt="thumbnail1" /></a>
    <a href="images/photobook/lightbox2.jpg" rel="lightbox[a]" title="you may write a description in here"><img class="img_thumbnail" src="images/photobook/thumbnail2.png" width="64" height="52" alt="thumbnail2" /></a>
    <a href="images/photobook/lightbox3.jpg" rel="lightbox[a]" title="you may write a description in here"><img class="img_thumbnail" src="images/photobook/thumbnail3.png" width="64" height="52" alt="thumbnail3" /></a>
    <a href="images/photobook/lightbox4.jpg" rel="lightbox[a]" title="you may write a description in here"><img class="img_thumbnail" src="images/photobook/thumbnail4.png" width="64" height="52" alt="thumbnail4" /></a>
    <a href="images/photobook/lightbox5.jpg" rel="lightbox[a]" title="you may write a description in here"><img class="img_thumbnail" src="images/photobook/thumbnail5.png" width="64" height="52" alt="thumbnail5" /></a>
    <a href="images/photobook/lightbox6.jpg" rel="lightbox[a]" title="you may write a description in here"><img class="img_thumbnail" src="images/photobook/thumbnail6.png" width="64" height="52" alt="thumbnail6" /></a>  
  </div> <!-- End img_thumbnail_wrap -->

</div> <!-- End display_img -->

<div class="display_details">
  <p class="product_title"> Photo Book <span>7" x 7" | 20 Pages</span></p>
  <br />
  <p class="subtitle">Description</p>
  <p class="sub_details">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
  <br />
  <br />
  
  <p class="subtitle">Available Sizes</p>
  <div class="size_template">
    <table width="500" border="0">
      <tr class="size_img">
        <td width="125"><img src="images/book_icon.png" width="42" height="37" alt="book icon" /> </td>
        <td width="125"><img src="images/book_icon.png" width="42" height="37" alt="book icon" /> </td>
        <td width="125"><img src="images/book_icon.png" width="42" height="37" alt="book icon" /> </td>
        <td width="125"><img src="images/book_icon.png" width="42" height="37" alt="book icon" /> </td>
      </tr>
      
      <tr class="size_style">
        <td><a href="index.php?page=?">Small Square</a></td>
        <td><a href="index.php?page=?">Standard Portrait</a></td>
        <td><a href="index.php?page=?">Standard Landscape</a></td>
        <td><a href="index.php?page=?">Large Landscape</a></td>
      </tr>
      
      <tr class="size_size">
        <td>7"x7" 18x18cm</td>
        <td>8"x10" 20x25cm</td>
        <td>10"x8" 25x20cm</td>
        <td>13"x11" 33x28cm</td>
      </tr>
    </table>

	</div><!-- End size_template -->


  
  <div class="size_template">
 
    <br />
    <b><a href="index.php?page=?">>>Download Template</a></b>
  </div><!-- End size_template -->

  
  <hr />
  <br />
  <br />
  
  <!-- Begin Table for Price Tag -->
  
  <table  width="500" border="0">
  <tr>
  <td width="68"><img src="images/tag_bg.png" width="62" height="27" alt="price_tag" /></td>
  <td width="422" class="price_details">The following prices are base on <b>20</b> pages <br /> What's included: Cover + End Sheet + 20 Pages</td>
  </tr>
  </table>

  <br />
  
  
  <!-- Begin Table for Price -->
  
  <table class="price_table" width="550" border="0">
  <tr>
  <th scope="col">Quantity</th>
  <th scope="col">Unit Price</th>
  <th scope="col">Total Price</th>
  <th scope="col">&nbsp;</th>
  <th scope="col">&nbsp;</th>
  </tr>
  <tr>
  <td>300</td>
  <td>$1.17</td>
  <td>$351.00</td>
  <td>..................</td>
  <td class="add_cost">every 2 pages add $0.30</td>
  </tr>
  <tr>
  <td>500</td>
  <td>$0.80</td>
  <td>$400.00</td>
  <td>..................</td>
  <td class="add_cost">every 2 pages add $0.26</td>
  </tr>
  <tr>
  <td>1000</td>
  <td>$0.45</td>
  <td>$450.00</td>
  <td>..................</td>
  <td class="add_cost">every 2 pages add $0.20</td>
  </tr>
  <tr>
  <td>3000</td>
  <td>$0.43</td>
  <td>$860.00</td>
  <td>..................</td>
  <td class="add_cost">every 2 pages add $0.20</td>
  </tr>
  <tr>
  <td>5000</td>
  <td>$0.41</td>
  <td>$1230.00</td>
  <td>..................</td>
  <td class="add_cost">every 2 pages add $0.20</td>
  </tr>
  </table>
  
  <br />
  <br />
  <hr />
  <br />
 
  <p class="subtitle">Sepcification</p>
  
  <table width="500" height="142" border="0" class="sub_details">
  <tr>
    <td width="104">Items:</td>
    <td width="386">Hardcover Book</td>
  </tr>
  <tr>
    <td>Closed size:</td>
    <td>7" x 7"</td>
  </tr>
  <tr>
    <td>Paper Stock:</td>
    <td>157 gsm Gloss</td>
  </tr>
  <tr>
    <td>Cover Coatting:</td>
    <td>Matte</td>
  </tr>
  <tr>
    <td>Printing:</td>
    <td>CMYK</td>
  </tr>
  <tr>
    <td>Binding:</td>
    <td>Stapled and Perfect Bound</td>
  </tr>
  <tr>
    <td>Finish:</td>
    <td>Shrinkwrap</td>
  </tr>
</table>


  <br />
  <br />
  <br />
  
  
</div> <!-- End display_details -->

<div class="clear"></div>

<div class="video">
  <p class="youtube_title">Watch our products on Youtube!!</p><br />
  <iframe width="200" height="150" src="//www.youtube.com/embed/DJcJEdRZlKw" frameborder="0" allowfullscreen></iframe>
  <iframe width="200" height="150" src="//www.youtube.com/embed/DJcJEdRZlKw" frameborder="0" allowfullscreen></iframe>
  <iframe width="200" height="150" src="//www.youtube.com/embed/DJcJEdRZlKw" frameborder="0" allowfullscreen></iframe>
</div>
