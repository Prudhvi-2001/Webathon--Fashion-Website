<!Doctype html>

<head>

    <title>Fashiknow</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>

     <div class="back_icon" style="margin-left:80px;margin-top: 15px;">
    <a href="http://localhost/webathon/kids%20wear/">
                <img src="leftarrow.png" width="2%">
              </a>    
    </div>
   
    <div class="product_page" style="margin-top:-50px">
        <div class="row">
            <div class="col">

                <div class="slider">
                    <div class="product">

                        <img src="images/img_1_1.jpg" alt="" onclick="clickme(this)">
                        <img src="images/img_1_2.jpg" alt="" onclick="clickme(this)">
                        <img src="images/1-3.jpg" alt="" onclick="clickme(this)">
                        <img src="images/1-4.jpg" alt="" onclick="clickme(this)">

                    </div>
                    <div class="preview">
                        <img src="images/img_1_1.jpg" id="imagebox" alt="">
                    </div>
                </div>

            </div>
            <div class="col">

                 <div class="content">
                    
                    <h2>SAREESWARG</h2>
                   <div class="caption">
                     <p>Georgette Party Wear Layered Short Tunic</p>
                   </div>
                   <div class="cost">
                       <h3>₹800</h3> 
                        <p>MRP <strike>₹2370</strike> (64% OFF) </p>
                        <p></p>
                   </div>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p class="price">Brand: TRENDS</p>
                    <p>Size: <select name="size" class="size">

                            <option value="select size">select size</option>
                            <option value="small">small</option>
                            <option value="medium">medium</option>
                            <option value="large">large</option>

                        </select></p>
                        <div class="quantity">
                    <p>Quantity: <input type="number" value="1" min="1" max="5"></p>
                </div>

                
          
           <div class="price">Product Details</div>
           <div class="Pro_details" style="margin-top: 10px; margin-bottom: 10px;">
               <ul>
                  
                   <li>Slim Fit</li>
                   <li>Machine Wash</li>
                   <li>100% cotton</li>
                   <li>Product Code: 36484872374</li>
               </ul>
           </div>
                    <button type="button">
                        <i class="fa fa-shopping-cart"></i>
                        Add to cart</button>
                         <button type="button" style="margin-left: 10px;">Buy Now</button>
                </div>

            </div>
        </div>


        <div class="related">
           <h2 style="font-family: lucidahandwriting; margin-left:560px; color: darkslateblue; font-size: 30px;">Similar Styles</h2>
            <div class="row">
                <div class="columns">
                    <div class="items">
                        <a href=""><img src="images/9-2.png" alt=""> </a>

                        <div class="details">
                            <p>Woman Brown Solid Biker Jacket</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>

                            <p>INR ₹1200.00</p>

                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="items">
                         <a href=""><img src="images/6-1.jpg" alt=""> </a>
                        <div class="details">
                            <p>Navy Blue Flared Palazzos</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>

                            <p>INR ₹800.00</p>

                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="items">
                        <a href=""><img src="images/7-1.jpg" alt=""> </a>
                        <div class="details">
                            <p>Jacquard Banarasi Dupatta</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>

                            <p>INR ₹1100.00</p>

                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="items">
                           <a href=""><img src="images/new-1.jpg" alt=""> </a>
                        <div class="details">
                            <p>Printed Straight Kurta</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>

                            <p>INR ₹1000.00</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>



    <script>
        function clickme(smallImg) {

            var fullImg = document.getElementById("imagebox");
            fullImg.src = smallImg.src;

        }

    </script>



</body>

</html>
