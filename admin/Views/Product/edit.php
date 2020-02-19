<?php include "./Views/Common/header.php" ?>








            <div class="container-fluid">
                    <div class="row">


                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                              <?php
                        if (isset($message)):
                        ?>
                        <div class="alert alert-primary" role="alert">
                          <?= $message ?>
                        </div>
                        <?php
                        endif;
                        ?>
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i> Product Edit</a></li>
                                    <li><a href="#reviews"><i class="fa fa-file-image-o" aria-hidden="true"></i> Pictures</a></li>
                                    <li><a href="#INFORMATION"><i class="fa fa-commenting" aria-hidden="true"></i> Review</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">

                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                      <form action="index.php" method="post" enctype="multipart/form-data">
                                              <input type="hidden" name="action" value="edit_save">
                                              <input type="hidden" name="controller" value="ProductController">
                                        <div class="row">
                                          

                                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                  <div class="review-content-section">
                                                      <div class="input-group mg-b-pro-edt">
                                                          <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                          <input type="text" readonly="true" class="form-control" name="productid" value="<?= !is_object($product)?$product['product_id'] : $product->ProductId?>">
                                                      </div>
                                                      <div class="input-group mg-b-pro-edt">
                                                          <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                          <input type="text" class="form-control" name="name" value="<?= !is_object($product)?$product['product_name'] : $product->Name ?>" placeholder="Product Name">
                                                      </div>
                                                      <div class="input-group mg-b-pro-edt">
                                                          <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                          <input type="number" class="form-control" name="price" value="<?= !is_object($product)?$product['price'] : $product->Price ?>" placeholder="Price">
                                                      </div>
                                                      <div class="input-group mg-b-pro-edt">
                                                          <span class="input-group-addon"><i class="fa fa-sticky-note-o" aria-hidden="true"></i></span>
                                                           <input type="number" class="form-control" name="sale" value="<?= !is_object($product)?$product['sale'] : $product->Sale ?>" placeholder="Sale of">
                                                      </div>
                                                      <div class="input-group mg-b-pro-edt">
                                                          <span class="input-group-addon"><i class="fa fa-qrcode" aria-hidden="true"></i></span>
                                                          <input type="date" name="date" class="form-control" value="<?= !is_object($product)?$product['date'] : $product->Date ?>">
                                                      </div>
                                                  </div>
                                              </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                         <input type="file" name="image" class="form-control" value="<?= !is_object($product)?$product['image'] : $product->Image ?>">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-ticket" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Product Description">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Sale Price">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-tag" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Category">
                                                    </div>
                                                    <select name="select" class="form-control pro-edt-select form-control-primary">
                                                      <option value="opt1">Select One Value Only</option>
                                                      <option value="opt2">2</option>
                                                      <option value="opt3">3</option>
                                                      <option value="opt4">4</option>
                                                      <option value="opt5">5</option>
                                                      <option value="opt6">6</option>
                                                    </select>
                                                </div>
                                            </div>
                                 
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Save
                                                      </button>
                                                    <button type="button" class="btn btn-warning waves-effect waves-light">Discard
                                                      </button>
                                                </div>
                                            </div>
                                        </div>
                                      </form>
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="reviews">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php include "./Views/Common/footer.php" ?>