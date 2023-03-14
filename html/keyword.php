<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/keyword.css">
    <script src="https://kit.fontawesome.com/247856b936.js" crossorigin="anonymous"></script>

    <title>keyword</title>
  </head>
  <body>
    <div class="container-fluid">
      <div>
        <h2 style="font-weight: 600; margin-top: 5px;">Filters</h2>
      </div>
      <div>
          <label style="margin: 15px 0px;" id="label">Category & Subcategory<img
                            src="https://img.icons8.com/ios/40/null/info--v1.png" class="img-logo"/>
                    </label>
                    <select name="select" multiple multiselect-search="true" multiselect-select-all="true"
                        multiselect-max-items="3" class="form-select form-select-lg mb-3"
                        aria-label=".form-select-lg example" style="font-size: 1px; opacity:0.8; " autocomplete="off">
                        <small>
                              <!-- <option selected>Select one or more categories & subcategories</option> -->
                              <option value="2"> > Appliances</option>
                              <option value="3"> > Arts,Crafts & Sewing</option>
                              <option value="2"> > Automative</option>
                              <option value="2"> > Baby Products</option>
                              <option value="2"> > Beauty and personal care</option>
                              <option value="2"> > Books</option>
                              <option value="2"> > Camera photo</option>
                              <option value="2"> > CDs & vinyl</option>
                              <option value="2"> > Cell Phones, & Accessories</option>
                              <option value="2"> > Cloth,Shoes & Jewelry</option>
                              <option value="2"> > Collectible Coins</option>
                              <option value="2"> > Computers & Accessories</option>
                              <option value="2"> > Electronics</option>
                              <option value="2"> > Grocery & Gourmet Food</option>
                              <option value="2"> > Handmade Products</option>
                              <option value="2"> > Home & Kitchen</option>
                              <option value="2"> > Health & Household</option>
                        </small>
                    </select>
                </div>
                  </div>
                </div>

                <div class="container-fluid">
                  <div class="row">
                    <div class="col">
                    <div class="row" style="margin-top:12px">
                        <div class="col">
                            <label for="" class="form-label" id="label">Review Count <img
                                    src="https://img.icons8.com/ios/40/null/info--v1.png"   class="img-logo"/></label>
                            <input type="text" class="form-control" placeholder="Min" aria-label="Min"  id="finput">
                        </div>

                        <div class="col">
                            <input type="text" class="form-control" placeholder="Max" aria-label="Max" id="sinput">
                        </div>

                        <div class="col">
                            <label for="" class="form-label" id="label">Review Rating<img
                                    src="https://img.icons8.com/ios/40/null/info--v1.png" class="img-logo" /></label>
                            <input type="text" class="form-control" placeholder="Min" aria-label="Min"  id="finput">
                        </div>

                        <div class="col">
                            <input type="text" class="form-control" placeholder="Max" aria-label="Max" id="sinput">
                        </div>

                    </div>


                    <div class="row">
                        <div class="col">
                            <label for="" class="form-label" id="label">Best Seller Rank (BSR) <img
                                    src="https://img.icons8.com/ios/40/null/info--v1.png"  class="img-logo" /></label>
                            <input type="text" class="form-control" placeholder="Min" aria-label="Min" id="finput">
                        </div>

                        <div class="col">
                            <input type="text" class="form-control" placeholder="Max" aria-label="Max" id="sinput">
                        </div>

                    </div>
                

                    </div>
            
                </div>
                <hr>
            
                <section>
                    <div class="row">
                        <div class="col">
                        <div style="margin-top: 0rem;">
                            <label for="" class="form-label" id="label">Shipping Size
                                <img src="https://img.icons8.com/ios/40/null/info--v1.png"  class="img-logo" /></label>
                                <small>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" multiple
                                    multiselect-search="true" multiselect-select-all="true" multiselect-max-items="3"
                                    style="font-size: 15px; opacity:0.8; " autocomplete="off" >
                                    <option value="0">Open this select menu</option>
                                    <option value="1">Small Standard size</option>
                                    <option value="2">large standard size</option>
                                    <option value="3">Small Oversize</option>
                                    <option value="3">Medium Oversize</option>
                                    <option value="3">Large Oversize</option>
                                    <option value="3">Special Oversize</option>
                                </select>
                                </small>
                        </div>
                        </div>

                        <div class="col"></div>


                      

                    </div>

                    <div>
                        
                        <div class="row" style="margin: 2rem 0px -8px -14px;;">
                            <div class="col">
                                <label for="" class="form-label" id="label">Weight (lb)<img
                                        src="https://img.icons8.com/ios/40/null/info--v1.png"  class="img-logo"/></label>
                                <input type="text" class="form-control" placeholder="Min" aria-label="Min" id="finput">
                            </div>

                            <div class="col">
                                <input type="text" class="form-control" placeholder="Max" aria-label="Max" id="sinput">
                            </div>
                            <div class="col"></div>
                            <div class="col"></div>

                        </div>
                        
                    </div>

                    <div>
                        <div class="row">
                            <div class="col">
                                <div style="margin-top: 0rem;">
                                        <label for="" class="form-label" id="label">Fulfillment<img
                                                src="https://img.icons8.com/ios/40/null/info--v1.png" class="img-logo"/></label>
                                        
                                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"
                                            multiple multiselect-search="true" multiselect-max-items="3" 
                                            style="font-size: 14px; opacity:0.8; color: rgb(72, 94, 117); " autocomplete="off" >
                                            <small>
                                            <option value="1" >AMAZON</option>
                                            <option value="2">FBA</option>
                                            <option value="3">FBM</option>
                                        </select>
                                        </small>
                                </div>
                            </div>

                            <div class="col"></div>
                        </div>
                    </div>
                </section>
                
                
                
                    <div class="row" style="margin-top: 25px;">
                      <div class="col">
                        <label for="" class="form-label" id="label">Number of Images <img src="https://img.icons8.com/ios/40/null/info--v1.png" class="img-logo" /></label>
                         <input type="text" class="form-control" placeholder="Min" aria-label="Min" id="finput">
                      </div>
                        <div class="col">
                        <input type="text" class="form-control" placeholder="Max" aria-label="Max" id="sinput">
                        </div>
                    

                  
                        <div class="col">
                        <label for="" class="form-label" id="label">Variation Count<img
                                        src="https://img.icons8.com/ios/40/null/info--v1.png" class="img-logo" /></label>
                                <input type="text" class="form-control" placeholder="Min" aria-label="Min" id="finput">
                        </div>
                        <div class="col">
                        <input type="text" class="form-control" placeholder="Max" aria-label="Max" id="sinput">
                        </div>
                        </div>
                    </div>
              
              
                <hr>

                <section>
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <label for="" class="form-label" id="label">Title Keywords <img
                                    src="https://img.icons8.com/ios/40/null/info--v1.png" class="img-logo" /></label>
                            <input type="text" class="form-control" placeholder="Min" aria-label="Min" id="finput">
                        </div>
                    
                        <div class="col">
                            <label for="" class="form-label" id="label">Exclude Title Keywords <img
                                    src="https://img.icons8.com/ios/40/null/info--v1.png" class="img-logo" /></label>
                            <input type="text" class="form-control" placeholder="Min" aria-label="Min" id="finput">
                        </div>
                    </div>

                    <div>
                        <div class="row" style="margin-top: 25px;">
                            <div class="col">
                                <label for="" class="form-label" id="label">Listing Age(Months) <img
                                        src="https://img.icons8.com/ios/40/null/info--v1.png" class="img-logo" /></label>
                                <input type="text" class="form-control" placeholder="Min" aria-label="Min" id="finput">
                            </div>
                            
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Max" aria-label="Max" id="sinput">
                            </div>
                            <div class="col"></div>
                            <div class="col"></div>
                        </div>
                    </div>
                    </div>
                </section>
            </div>

              <!--------------------------- Competitors section here ----------------------------------->
      
            <div class="col" ><span style="margin: 0px 10px;  font-weight: 600;">Competitors</span> 
            <section>
                <div class="row" style="margin: 1rem 0rem;">
                        <div class="col">
                            <label for="" class="form-label" id="label">Number of Sellers<img
                                    src="https://img.icons8.com/ios/40/null/info--v1.png" class="img-logo" /></label>
                            <input type="text" class="form-control" placeholder="Min" aria-label="Min" id="finput">
                        </div>

                        <div class="col">
                            <input type="text" class="form-control" placeholder="Max" aria-label="Max" id="sinput">
                        </div>

                        <div class="col">
                            <label for="" class="form-label" id="label">Exact Brand Search<img
                                    src="https://img.icons8.com/ios/40/null/info--v1.png" class="img-logo" /></label>
                            <input type="text" class="form-control" placeholder="Min" aria-label="Min"  id="finput">
                        </div>

                        <div class="col"></div>
                </div>
                </div>
            </section>
            
            <div class="container-fluid">
                    <div class="row" style="margin-bottom: -1rem;  margin-top: -20px;">
                            <div class="col">
                                <label for="" class="form-label" id="label">Exact Seller Search <img
                                        src="https://img.icons8.com/ios/40/null/info--v1.png" class="img-logo" /></label>
                                <input type="text" class="form-control" placeholder="Min" aria-label="Min" id="finput">
                            </div>

                            <div class="col">
                                <label for="" class="form-label" id="label">Exclude Seller <img
                                        src="https://img.icons8.com/ios/40/null/info--v1.png"  class="img-logo" /></label>
                                <input type="text" class="form-control" placeholder="Min" aria-label="Min" id="finput">
                            </div>
                    </div>

            
                    <div class="row" style="margin: 3rem -1rem;">
                        <div class="col">
                                <label for="" class="form-label" id="label">Exclude Brands <img
                                        src="https://img.icons8.com/ios/40/null/info--v1.png"  class="img-logo" /></label>
                                <input type="text" class="form-control" placeholder="Min" aria-label="Min" id="finput">
                        </div>
                    </div>

            </div>
            </div>
            </div>
            
              <!---------------------------  Sales section here ----------------------------------->
           <div class="container-fluid">
            
                <section>
                    <div class="row" style="margin: 0rem -1rem;">
                            <div class="col">
                                <label for="" class="form-label" id="label">Price <img
                                        src="https://img.icons8.com/ios/40/null/info--v1.png" class="img-logo" /></label>
                                <input type="text" class="form-control" placeholder="Min" aria-label="Min" id="finput">
                            </div>
        
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Max" aria-label="Max" id="sinput">
                            </div>

                            <div class="col">
                            <label for="" class="form-label" id="label">Price Change (%)<img
                                    src="https://img.icons8.com/ios/40/null/info--v1.png"  class="img-logo" /></label>
                            <input type="text" class="form-control" placeholder="Min" aria-label="Min" id="finput">
                        </div>
    
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Max" aria-label="Max" id="sinput">
                        </div>
    
                    </div>

                   

                    <div class="row">
                            <div class="col">
                                <label for="" class="form-label" id="label">Monthly Revenue <img
                                        src="https://img.icons8.com/ios/40/null/info--v1.png"  class="img-logo" /></label>
                                <input type="text" class="form-control" placeholder="Min" aria-label="Min" id="finput">
                            </div>
        
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Max" aria-label="Max" id="sinput">
                            </div>

                            <div class="col">
                                <label for="" class="form-label" id="label">Sales Change (%) <img
                                        src="https://img.icons8.com/ios/40/null/info--v1.png" class="img-logo"/></label>
                                <input type="text" class="form-control" placeholder="Min" aria-label="Min" id="finput">
                           </div>
    
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Max" aria-label="Max" id="sinput">
                            </div>
    
                    </div>

                   

                    <div class="row">
                            <div class="col">
                                <label for="" class="form-label" id="label">Monthly Sales(units) <img
                                        src="https://img.icons8.com/ios/40/null/info--v1.png" class="img-logo" /></label>
                                <input type="text" class="form-control" placeholder="Min" aria-label="Min" id="finput">
                            </div>
        
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Max" aria-label="Max" id="sinput">
                            </div>

                            <div class="col">
                                <label for="" class="form-label" id="label">Sales Year over Year (%)<img
                                        src="https://img.icons8.com/ios/40/null/info--v1.png"  class="img-logo" /></label>
                                <input type="text" class="form-control" placeholder="Min" aria-label="Min" id="finput">
                            </div>
    
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Max" aria-label="Max" id="sinput">
                            </div>
    
                    </div>

                </section>
                <hr>
                <div>
                    <div class="row">
                            <div class="col">
                                <label for="" class="form-label" id="label">Sales to Reviews Ratio <img
                                        src="https://img.icons8.com/ios/40/null/info--v1.png" class="img-logo" /></label>
                                <input type="text" class="form-control" placeholder="Min" aria-label="Min" id="finput">
                            </div>
        
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Max" aria-label="Max" id="sinput">
                            </div>

                            
                         <div class="col">
                            <label for="" class="form-label" id="label">Best Sales Month <img
                                    src="https://img.icons8.com/ios/40/null/info--v1.png"  class="img-logo" /></label>
                            <input type="date" class="form-control" placeholder="Min" aria-label="Min" id="finput" autocomplete="off">
                         </div>

                         <div class="col"></div>
                    </div>
                </div>
            </div>
        
        </div>
        <!----------------- button part here ------------------------------->
        <div class="container-fluid">
        <section>
            <div class="sc-iyQLRa gCBHzR" style="margin: 1rem 22rem;">
                <button type="button" disabled="" data-testid="saveasfilterpreset" class="sc-ezbkAF sc-kfJtpr iynHnA iNEitH" id="save-btn">Save as Filter Preset</button>
                <button type="button" disabled="" data-testid="clear" class="sc-ezbkAF TODUk" id="clear-btn">Clear</button>
                <button data-testid="search" class="sc-ezbkAF hKbVzQ"
                style="" id="search">Search</button></div>
        </section>
        </div>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="../js/keyword.js"></script>
  </body>
</html>