
<?php require_once 'config/db.php'; 

    blockCRS($_SESSION['admin'], 'login');

    if (isset($_SESSION['admin'])) {
        $admin_id = $_SESSION['admin'];

        $loggedAdmin = getWhere('admins', 'id', $admin_id);
        $currentAdmin = $loggedAdmin['username'];

        if (isset($_POST['submit'])) {
            $response = addProduct($_POST, $currentAdmin);

            if ($response === true) {
                echo "<script>alert('Product have been added successfully!')</script>";
            } else if (is_array($response)) {
                foreach ($response as $err) {
                    echo "<script>alert('$err')</script>";
                }
            } else {
                //echo "<script>alert('$response')</script>";
                echo $response;
            }
        }
    }
    

?>

<!-- ADDING A GLOBAL HEADER FILE -->
<?php require_once 'inc/header.php'; ?>

<!--  BEGIN CONTENT PART  -->
<div id="content" class="main-content">
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Add/Edit Products</h3>
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                        <li><a href="#">eCommerce</a></li>
                        <li class="active"><a href="#">Add/Edit Products</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Add / Manage Product </h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area add-manage-product-2">
                        <div class="row">
                            <div class="col-xl-7 col-md-12">
                                <div class="card card-default">
                                    <div class="card-heading">
                                        <h2 class="card-title"><span>GENERAL</span></h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-body">
                                            <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                                                <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Name :</label>
                                                        <div class="col-md-8">
                                                            <input class="form-control" value="<?php if (isset($_POST['p_name'])) : echo $_POST['p_name']; endif; ?>" name="p_name" oninput="addSlug()" id="p_name" type="text">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Product Slug :</label>
                                                        <div class="col-md-8">
                                                            <input class="form-control" value="<?php if (isset($_POST['p_name'])) : echo str_replace(" ", "-", $_POST['p_name']); endif; ?>" id="p_slug" readonly name="p_slug" type="text">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Description :</label>
                                                        <div class="col-md-8">
                                                            <textarea rows="4" cols="5" name="p_desc"
                                                                class="form-control"><?php if (isset($_POST['p_desc'])) : echo $_POST['p_desc']; endif; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Category :</label>
                                                        <div class="col-md-8">
                                                            <select class="form-control form-custom mb-4"
                                                                name="p_cat">
                                                                <option value="" selected disabled>Select Category</option>

                                                                <?php 
                                                                    $categories = getAll("categories");
                                                                    if (!empty($categories)) {
                                                                        foreach ($categories as $category) {
                                                                            extract($category); ?>
                                                                            
                                                                            <option value="<?= $id; ?>"><?= $cat_name; ?></option>
                                                                <?php } } ?>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Brand :</label>
                                                        <div class="col-md-8">
                                                            <input type="text" value="<?php if (isset($_POST['p_brand'])) : echo $_POST['p_brand']; endif; ?>" class="form-control form-custom"
                                                                name="p_brand" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Color :</label>
                                                        <div class="col-md-8">
                                                            <select class="form-control form-custom" name="color">
                                                                <option value="">Select a Color</option>
                                                                <option value="color1">Black</option>
                                                                <option value="color2">White</option>
                                                                <option value="color3">Blue</option>
                                                                <option value="color4">Red</option>
                                                                <option value="color5">Green</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Size :</label>
                                                        <div class="col-md-8">
                                                            <select class="form-control form-custom" name="p_size">
                                                                <option value="">Select Size</option>
                                                                <option value="size1">Size 1</option>
                                                                <option value="size2">Size 2</option>
                                                                <option value="size3">Size 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">SKU :</label>
                                                        <div class="col-md-8">
                                                            <input class="form-control" name="sku" type="text">
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Weight :</label>
                                                        <div class="col-md-8">
                                                            <input class="form-control" value="<?php if (isset($_POST['p_weight'])) : echo $_POST['p_weight']; endif; ?>" name="p_weight" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Status :</label>
                                                        <div class="col-md-8">
                                                            <select class="form-control form-custom" name="p_status">
                                                                <option value="" selected disabled>Please Select</option>
                                                                <option value="1">In Stock</option>
                                                                <option value="0">Out of Stock</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Featured :</label>
                                                        <div class="col-md-8">
                                                            <select class="form-control form-custom" name="p_featured">
                                                                <option value="" selected disabled>Please Select</option>
                                                                <option value="1">Yes</option>
                                                                <option value="0">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Visibility :</label>
                                                        <div class="col-md-8">
                                                            <select class="form-control form-custom" name="visibility">
                                                                <option value="">Please Select</option>
                                                                <option value="yes">Yes</option>
                                                                <option value="no">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="form-group cutom-autocomplete mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Country of Manufacture :</label>
                                                        <div class="col-md-8">
                                                            <select id="country" name="p_country" class="form-control">
                                                                <option value="Afganistan">Afghanistan</option>
                                                                <option value="Albania">Albania</option>
                                                                <option value="Algeria">Algeria</option>
                                                                <option value="American Samoa">American Samoa</option>
                                                                <option value="Andorra">Andorra</option>
                                                                <option value="Angola">Angola</option>
                                                                <option value="Anguilla">Anguilla</option>
                                                                <option value="Antigua & Barbuda">Antigua & Barbuda
                                                                </option>
                                                                <option value="Argentina">Argentina</option>
                                                                <option value="Armenia">Armenia</option>
                                                                <option value="Aruba">Aruba</option>
                                                                <option value="Australia">Australia</option>
                                                                <option value="Austria">Austria</option>
                                                                <option value="Azerbaijan">Azerbaijan</option>
                                                                <option value="Bahamas">Bahamas</option>
                                                                <option value="Bahrain">Bahrain</option>
                                                                <option value="Bangladesh">Bangladesh</option>
                                                                <option value="Barbados">Barbados</option>
                                                                <option value="Belarus">Belarus</option>
                                                                <option value="Belgium">Belgium</option>
                                                                <option value="Belize">Belize</option>
                                                                <option value="Benin">Benin</option>
                                                                <option value="Bermuda">Bermuda</option>
                                                                <option value="Bhutan">Bhutan</option>
                                                                <option value="Bolivia">Bolivia</option>
                                                                <option value="Bonaire">Bonaire</option>
                                                                <option value="Bosnia & Herzegovina">Bosnia &
                                                                    Herzegovina</option>
                                                                <option value="Botswana">Botswana</option>
                                                                <option value="Brazil">Brazil</option>
                                                                <option value="British Indian Ocean Ter">British Indian
                                                                    Ocean Ter</option>
                                                                <option value="Brunei">Brunei</option>
                                                                <option value="Bulgaria">Bulgaria</option>
                                                                <option value="Burkina Faso">Burkina Faso</option>
                                                                <option value="Burundi">Burundi</option>
                                                                <option value="Cambodia">Cambodia</option>
                                                                <option value="Cameroon">Cameroon</option>
                                                                <option value="Canada">Canada</option>
                                                                <option value="Canary Islands">Canary Islands</option>
                                                                <option value="Cape Verde">Cape Verde</option>
                                                                <option value="Cayman Islands">Cayman Islands</option>
                                                                <option value="Central African Republic">Central African
                                                                    Republic</option>
                                                                <option value="Chad">Chad</option>
                                                                <option value="Channel Islands">Channel Islands</option>
                                                                <option value="Chile">Chile</option>
                                                                <option value="China">China</option>
                                                                <option value="Christmas Island">Christmas Island
                                                                </option>
                                                                <option value="Cocos Island">Cocos Island</option>
                                                                <option value="Colombia">Colombia</option>
                                                                <option value="Comoros">Comoros</option>
                                                                <option value="Congo">Congo</option>
                                                                <option value="Cook Islands">Cook Islands</option>
                                                                <option value="Costa Rica">Costa Rica</option>
                                                                <option value="Cote DIvoire">Cote DIvoire</option>
                                                                <option value="Croatia">Croatia</option>
                                                                <option value="Cuba">Cuba</option>
                                                                <option value="Curaco">Curacao</option>
                                                                <option value="Cyprus">Cyprus</option>
                                                                <option value="Czech Republic">Czech Republic</option>
                                                                <option value="Denmark">Denmark</option>
                                                                <option value="Djibouti">Djibouti</option>
                                                                <option value="Dominica">Dominica</option>
                                                                <option value="Dominican Republic">Dominican Republic
                                                                </option>
                                                                <option value="East Timor">East Timor</option>
                                                                <option value="Ecuador">Ecuador</option>
                                                                <option value="Egypt">Egypt</option>
                                                                <option value="El Salvador">El Salvador</option>
                                                                <option value="Equatorial Guinea">Equatorial Guinea
                                                                </option>
                                                                <option value="Eritrea">Eritrea</option>
                                                                <option value="Estonia">Estonia</option>
                                                                <option value="Ethiopia">Ethiopia</option>
                                                                <option value="Falkland Islands">Falkland Islands
                                                                </option>
                                                                <option value="Faroe Islands">Faroe Islands</option>
                                                                <option value="Fiji">Fiji</option>
                                                                <option value="Finland">Finland</option>
                                                                <option value="France">France</option>
                                                                <option value="French Guiana">French Guiana</option>
                                                                <option value="French Polynesia">French Polynesia
                                                                </option>
                                                                <option value="French Southern Ter">French Southern Ter
                                                                </option>
                                                                <option value="Gabon">Gabon</option>
                                                                <option value="Gambia">Gambia</option>
                                                                <option value="Georgia">Georgia</option>
                                                                <option value="Germany">Germany</option>
                                                                <option value="Ghana">Ghana</option>
                                                                <option value="Gibraltar">Gibraltar</option>
                                                                <option value="Great Britain">Great Britain</option>
                                                                <option value="Greece">Greece</option>
                                                                <option value="Greenland">Greenland</option>
                                                                <option value="Grenada">Grenada</option>
                                                                <option value="Guadeloupe">Guadeloupe</option>
                                                                <option value="Guam">Guam</option>
                                                                <option value="Guatemala">Guatemala</option>
                                                                <option value="Guinea">Guinea</option>
                                                                <option value="Guyana">Guyana</option>
                                                                <option value="Haiti">Haiti</option>
                                                                <option value="Hawaii">Hawaii</option>
                                                                <option value="Honduras">Honduras</option>
                                                                <option value="Hong Kong">Hong Kong</option>
                                                                <option value="Hungary">Hungary</option>
                                                                <option value="Iceland">Iceland</option>
                                                                <option value="Indonesia">Indonesia</option>
                                                                <option value="India">India</option>
                                                                <option value="Iran">Iran</option>
                                                                <option value="Iraq">Iraq</option>
                                                                <option value="Ireland">Ireland</option>
                                                                <option value="Isle of Man">Isle of Man</option>
                                                                <option value="Israel">Israel</option>
                                                                <option value="Italy">Italy</option>
                                                                <option value="Jamaica">Jamaica</option>
                                                                <option value="Japan">Japan</option>
                                                                <option value="Jordan">Jordan</option>
                                                                <option value="Kazakhstan">Kazakhstan</option>
                                                                <option value="Kenya">Kenya</option>
                                                                <option value="Kiribati">Kiribati</option>
                                                                <option value="Korea North">Korea North</option>
                                                                <option value="Korea Sout">Korea South</option>
                                                                <option value="Kuwait">Kuwait</option>
                                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                <option value="Laos">Laos</option>
                                                                <option value="Latvia">Latvia</option>
                                                                <option value="Lebanon">Lebanon</option>
                                                                <option value="Lesotho">Lesotho</option>
                                                                <option value="Liberia">Liberia</option>
                                                                <option value="Libya">Libya</option>
                                                                <option value="Liechtenstein">Liechtenstein</option>
                                                                <option value="Lithuania">Lithuania</option>
                                                                <option value="Luxembourg">Luxembourg</option>
                                                                <option value="Macau">Macau</option>
                                                                <option value="Macedonia">Macedonia</option>
                                                                <option value="Madagascar">Madagascar</option>
                                                                <option value="Malaysia">Malaysia</option>
                                                                <option value="Malawi">Malawi</option>
                                                                <option value="Maldives">Maldives</option>
                                                                <option value="Mali">Mali</option>
                                                                <option value="Malta">Malta</option>
                                                                <option value="Marshall Islands">Marshall Islands
                                                                </option>
                                                                <option value="Martinique">Martinique</option>
                                                                <option value="Mauritania">Mauritania</option>
                                                                <option value="Mauritius">Mauritius</option>
                                                                <option value="Mayotte">Mayotte</option>
                                                                <option value="Mexico">Mexico</option>
                                                                <option value="Midway Islands">Midway Islands</option>
                                                                <option value="Moldova">Moldova</option>
                                                                <option value="Monaco">Monaco</option>
                                                                <option value="Mongolia">Mongolia</option>
                                                                <option value="Montserrat">Montserrat</option>
                                                                <option value="Morocco">Morocco</option>
                                                                <option value="Mozambique">Mozambique</option>
                                                                <option value="Myanmar">Myanmar</option>
                                                                <option value="Nambia">Nambia</option>
                                                                <option value="Nauru">Nauru</option>
                                                                <option value="Nepal">Nepal</option>
                                                                <option value="Netherland Antilles">Netherland Antilles
                                                                </option>
                                                                <option value="Netherlands">Netherlands (Holland,
                                                                    Europe)</option>
                                                                <option value="Nevis">Nevis</option>
                                                                <option value="New Caledonia">New Caledonia</option>
                                                                <option value="New Zealand">New Zealand</option>
                                                                <option value="Nicaragua">Nicaragua</option>
                                                                <option value="Niger">Niger</option>
                                                                <option value="Nigeria">Nigeria</option>
                                                                <option value="Niue">Niue</option>
                                                                <option value="Norfolk Island">Norfolk Island</option>
                                                                <option value="Norway">Norway</option>
                                                                <option value="Oman">Oman</option>
                                                                <option value="Pakistan">Pakistan</option>
                                                                <option value="Palau Island">Palau Island</option>
                                                                <option value="Palestine">Palestine</option>
                                                                <option value="Panama">Panama</option>
                                                                <option value="Papua New Guinea">Papua New Guinea
                                                                </option>
                                                                <option value="Paraguay">Paraguay</option>
                                                                <option value="Peru">Peru</option>
                                                                <option value="Phillipines">Philippines</option>
                                                                <option value="Pitcairn Island">Pitcairn Island</option>
                                                                <option value="Poland">Poland</option>
                                                                <option value="Portugal">Portugal</option>
                                                                <option value="Puerto Rico">Puerto Rico</option>
                                                                <option value="Qatar">Qatar</option>
                                                                <option value="Republic of Montenegro">Republic of
                                                                    Montenegro</option>
                                                                <option value="Republic of Serbia">Republic of Serbia
                                                                </option>
                                                                <option value="Reunion">Reunion</option>
                                                                <option value="Romania">Romania</option>
                                                                <option value="Russia">Russia</option>
                                                                <option value="Rwanda">Rwanda</option>
                                                                <option value="St Barthelemy">St Barthelemy</option>
                                                                <option value="St Eustatius">St Eustatius</option>
                                                                <option value="St Helena">St Helena</option>
                                                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                                <option value="St Lucia">St Lucia</option>
                                                                <option value="St Maarten">St Maarten</option>
                                                                <option value="St Pierre & Miquelon">St Pierre &
                                                                    Miquelon</option>
                                                                <option value="St Vincent & Grenadines">St Vincent &
                                                                    Grenadines</option>
                                                                <option value="Saipan">Saipan</option>
                                                                <option value="Samoa">Samoa</option>
                                                                <option value="Samoa American">Samoa American</option>
                                                                <option value="San Marino">San Marino</option>
                                                                <option value="Sao Tome & Principe">Sao Tome & Principe
                                                                </option>
                                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                                <option value="Senegal">Senegal</option>
                                                                <option value="Seychelles">Seychelles</option>
                                                                <option value="Sierra Leone">Sierra Leone</option>
                                                                <option value="Singapore">Singapore</option>
                                                                <option value="Slovakia">Slovakia</option>
                                                                <option value="Slovenia">Slovenia</option>
                                                                <option value="Solomon Islands">Solomon Islands</option>
                                                                <option value="Somalia">Somalia</option>
                                                                <option value="South Africa">South Africa</option>
                                                                <option value="Spain">Spain</option>
                                                                <option value="Sri Lanka">Sri Lanka</option>
                                                                <option value="Sudan">Sudan</option>
                                                                <option value="Suriname">Suriname</option>
                                                                <option value="Swaziland">Swaziland</option>
                                                                <option value="Sweden">Sweden</option>
                                                                <option value="Switzerland">Switzerland</option>
                                                                <option value="Syria">Syria</option>
                                                                <option value="Tahiti">Tahiti</option>
                                                                <option value="Taiwan">Taiwan</option>
                                                                <option value="Tajikistan">Tajikistan</option>
                                                                <option value="Tanzania">Tanzania</option>
                                                                <option value="Thailand">Thailand</option>
                                                                <option value="Togo">Togo</option>
                                                                <option value="Tokelau">Tokelau</option>
                                                                <option value="Tonga">Tonga</option>
                                                                <option value="Trinidad & Tobago">Trinidad & Tobago
                                                                </option>
                                                                <option value="Tunisia">Tunisia</option>
                                                                <option value="Turkey">Turkey</option>
                                                                <option value="Turkmenistan">Turkmenistan</option>
                                                                <option value="Turks & Caicos Is">Turks & Caicos Is
                                                                </option>
                                                                <option value="Tuvalu">Tuvalu</option>
                                                                <option value="Uganda">Uganda</option>
                                                                <option value="United Kingdom">United Kingdom</option>
                                                                <option value="Ukraine">Ukraine</option>
                                                                <option value="United Arab Erimates">United Arab
                                                                    Emirates</option>
                                                                <option value="United States of America">United States
                                                                    of America</option>
                                                                <option value="Uraguay">Uruguay</option>
                                                                <option value="Uzbekistan">Uzbekistan</option>
                                                                <option value="Vanuatu">Vanuatu</option>
                                                                <option value="Vatican City State">Vatican City State
                                                                </option>
                                                                <option value="Venezuela">Venezuela</option>
                                                                <option value="Vietnam">Vietnam</option>
                                                                <option value="Virgin Islands (Brit)">Virgin Islands
                                                                    (Brit)</option>
                                                                <option value="Virgin Islands (USA)">Virgin Islands
                                                                    (USA)</option>
                                                                <option value="Wake Island">Wake Island</option>
                                                                <option value="Wallis & Futana Is">Wallis & Futana Is
                                                                </option>
                                                                <option value="Yemen">Yemen</option>
                                                                <option value="Zaire">Zaire</option>
                                                                <option value="Zambia">Zambia</option>
                                                                <option value="Zimbabwe">Zimbabwe</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-5 col-md-12">
                                <div class="card card-default">
                                    <div class="card-heading">
                                        <h2 class="card-title"><span>PRICING</span></h2>
                                    </div>
                                    <div class="card-body">
                                            <div class="form-group mb-4">
                                                <div class="row">
                                                    <label class="col-md-4">Price :</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" value="<?php if (isset($_POST['p_price'])) : echo $_POST['p_price']; endif; ?>" name="p_price" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                    
                                           
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-md-12"><span>Image</span></label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-md-4">Image :</label>
                                                    <div class="col-md-8">
                                                        <div class="mb-3">
                                                            <div class="custom-file">
                                                                <input type="file" name="p_images" multiple class="form-control-file" id="file-input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-md-12"><span>INVENTORY</span></label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-md-4">QTY :</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" value="<?php if (isset($_POST['p_qty'])) : echo $_POST['p_qty']; endif; ?>" name="p_qty" type="number">
                                                    </div>
                                                </div>
                                            </div>

                                       
                                    </div>
                                </div>
                                <div class="align-center">
                                    <input value="Insert Product" name="submit" class="btn btn-primary mt-2" type="submit">
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  END CONTENT PART  -->
</div>
<!-- END MAIN CONTAINER -->

<!--  BEGIN FOOTER  -->
<footer class="footer-section theme-footer">

    <div class="footer-section-1  sidebar-theme">

    </div>

    <div class="footer-section-2 container-fluid">
        <div class="row">
            <div id="toggle-grid" class="col-xl-7 col-md-6 col-sm-6 col-12 text-sm-left text-center">
                <ul class="list-inline links ml-sm-5">
                    <li class="list-inline-item mr-3">
                        <a href="javascript:void(0);">Home</a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="javascript:void(0);">Blog</a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="javascript:void(0);">About</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript:void(0);">Buy</a>
                    </li>
                </ul>
            </div>
            <div class="col-xl-5 col-md-6 col-sm-6 col-12">
                <ul class="list-inline mb-0 d-flex justify-content-sm-end justify-content-center mr-sm-3 ml-sm-0 mx-3">
                    <li class="list-inline-item  mr-3">
                        <p class="bottom-footer">&#xA9; 2019 <a target="_blank"
                                href="https://designreset.com/equation">Equation Admin Theme</a></p>
                    </li>
                    <li class="list-inline-item align-self-center">
                        <div class="scrollTop"><i class="flaticon-up-arrow-fill-1"></i></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--  END FOOTER  -->

<!--  BEGIN CONTROL SIDEBAR  -->
<aside class="control-sidebar control-sidebar-light-color cs-content">
    <div class="">

        <div class="row">
            <div class="col-md-12 text-right">
                <div class="close-sidebar">
                    <i class="flaticon-close-fill p-3 toggle-control-sidebar"></i>
                </div>
            </div>
            <div class="col-md-12">
                <div class="usr-info text-center mb-5">
                    <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid rounded-circle mb-3">
                    <div class=" mt-2">
                        <h5 class="usr-name mb-0">Linda Nelson</h5>
                        <p class="usr-occupation mb-0 mt-1">Developer</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-navigation-section text-center mb-5 mt-3">
            <ul class="nav nav-tabs nav-justified mx-2">
                <li class="nav-item">
                    <a data-toggle="tab" href="#feeds-tab" class="nav-link rounded-circle active show">
                        <p class="mb-0">Task</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-toggle="tab" href="#friends-tab" class="nav-link rounded-circle">
                        <p class="mb-0">Friends</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-toggle="tab" href="#alerts-tab" class="nav-link rounded-circle">
                        <p class="mb-0">Settings</p>
                    </a>
                </li>
            </ul>
        </div>

        <div class="tab-content">

            <div id="feeds-tab" class="tab-pane tab-1 fade show active">

                <div class="tasks">

                    <div class="recent">

                        <div class="d-flex justify-content-between mb-5">

                            <div class="icon">
                                <i class="flaticon-clock-1"></i>
                            </div>


                            <div>
                                <span class="">Today</span> <span class="notification-count ml-2">12</span>
                            </div>

                            <div>
                                <p class="r-view-all">See all</p>
                            </div>

                        </div>


                        <div class="media">
                            <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid mr-3">
                            <div class="media-body">
                                <h6 class="mb-0">Sean Freeman</h6>
                                <p>has replied your mail.</p>
                                <p class="meta-time">7 mins ago</p>
                            </div>
                            <i class="flaticon-close-fill remove-noti"></i>
                        </div>

                        <div class="media">
                            <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid mr-3">
                            <div class="media-body">
                                <h6 class="mb-0">Laurie Fox</h6>
                                <p>comment to your posts.</p>
                                <p class="meta-time">13 mins ago</p>
                            </div>
                            <i class="flaticon-close-fill remove-noti"></i>
                        </div>

                        <div class="media system-notify">
                            <i class="flaticon-settings-7  mr-3"></i>
                            <div class="media-body">
                                <h6 class="mb-0">System Notifications</h6>
                                <p>has replied your mail.</p>
                                <p class="meta-time">7 mins ago</p>
                            </div>
                            <i class="flaticon-close-fill remove-noti"></i>
                        </div>


                        <div class="media mail-notify">
                            <i class="flaticon-folder-fill-1  mr-3"></i>
                            <div class="media-body">
                                <h6 class="mb-0">Ricky Turner</h6>
                                <p>has replied your mails.</p>
                                <p class="meta-time">7 mins ago</p>
                            </div>
                            <i class="flaticon-close-fill remove-noti"></i>
                        </div>

                    </div>



                    <div class="today mt-5">

                        <div class="d-flex justify-content-between mb-5">

                            <div class="icon">
                                <i class="flaticon-bell-fill-1"></i>
                            </div>
                            <div>
                                <span>Yesterday</span> <span class="notification-count ml-2">8</span>
                            </div>

                            <div>
                                <p class="r-view-all">See all</p>
                            </div>

                        </div>


                        <div class="media">
                            <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid mr-3">
                            <div class="media-body">
                                <h6 class="mb-0">Angie Lamb</h6>
                                <p>has replied your mail.</p>
                                <p class="meta-time">7 mins ago</p>
                            </div>
                            <i class="flaticon-close-fill  remove-noti"></i>
                        </div>

                        <div class="media">
                            <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid mr-3">
                            <div class="media-body">
                                <h6 class="mb-0">Amy Diaz</h6>
                                <p>comment to your posts.</p>
                                <p class="meta-time">13 mins ago</p>
                            </div>
                            <i class="flaticon-close-fill  remove-noti"></i>
                        </div>

                        <div class="media">
                            <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid mr-3">
                            <div class="media-body">
                                <h6 class="mb-0">Irene Collins</h6>
                                <p>has replied your mail.</p>
                                <p class="meta-time">7 mins ago</p>
                            </div>
                            <i class="flaticon-close-fill  remove-noti"></i>
                        </div>


                        <div class="media">
                            <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid mr-3">
                            <div class="media-body">
                                <h6 class="mb-0">Lila Perry</h6>
                                <p>has replied your mails.</p>
                                <p class="meta-time">7 mins ago</p>
                            </div>
                            <i class="flaticon-close-fill  remove-noti"></i>
                        </div>


                    </div>


                    <div class="task-stats mt-5">

                        <div class="t-s-header mb-5">
                            <div class="row">
                                <div class="col-md-10 text-center">
                                    <h6><span>Task Statistics</span></h6>
                                </div>
                                <div class="col-md-2 text-center">
                                    <i class="flaticon-close-fill"></i>
                                </div>
                            </div>
                        </div>

                        <div class="t-s-body">

                            <div class="row">

                                <div class="col-md-12">

                                    <div class="d-flex justify-content-between">
                                        <p>Feature Development</p>
                                        <p>70%</p>
                                    </div>

                                    <div class="progress  br-30 mb-4">
                                        <div class="progress-bar  br-30 bg-secondary" role="progressbar"
                                            style="width: 70%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12">

                                    <div class="d-flex justify-content-between mt-3">
                                        <p>Uploading files</p>
                                        <p>30%</p>
                                    </div>

                                    <div class="progress  br-30 mb-4">
                                        <div class="progress-bar  br-30 bg-danger" role="progressbar" style="width: 30%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div>

                                <div class="col-md-12">

                                    <div class="d-flex justify-content-between mt-3">
                                        <p>Total Progress</p>
                                        <p>86%</p>
                                    </div>

                                    <div class="progress  br-30">
                                        <div class="progress-bar  br-30 bg-info" role="progressbar" style="width: 86%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div>

                            </div>

                            <div class="text-center mt-5 mb-5">
                                <button class="btn btn-primary btn-rounded mb-5">See all</button>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <div id="friends-tab" class="tab-pane tab-2 fade">

                <div class="friends">

                    <div class="recent">

                        <div class="t-s-header mb-5">

                            <div class="row">

                                <div class="col-md-8 text-center">
                                    <h6>
                                        <span>New Activity</span>
                                    </h6>
                                </div>

                                <div class="col-md-4">
                                    <div>
                                        <p>See all</p>
                                    </div>
                                </div>


                            </div>

                        </div>

                        <ul class="list-inline text-center mb-5">

                            <li class="list-inline-item">
                                <img alt="admin-profile" src="assets/img/120x120.jpg">
                                <span class="badge badge-pill badge-new">8</span>
                            </li>

                            <li class="list-inline-item">
                                <img alt="admin-profile" src="assets/img/120x120.jpg">
                            </li>

                            <li class="list-inline-item">
                                <img alt="admin-profile" src="assets/img/120x120.jpg">
                            </li>

                            <li class="list-inline-item">
                                <img alt="admin-profile" src="assets/img/120x120.jpg">
                                <span class="badge badge-pill badge-new">5</span>
                            </li>

                            <li class="list-inline-item">
                                <img alt="admin-profile" src="assets/img/120x120.jpg">
                            </li>

                        </ul>


                        <div class="friend-request">

                            <div class="d-flex justify-content-between header mb-5">

                                <div class="media">
                                    <i class="flaticon-user-plus mr-3"></i>
                                    <div class="media-body">
                                        <h6 class="mt-1">Friend request</h6>
                                    </div>
                                </div>

                                <div>
                                    <p class="mb-0 mt-2">See all</p>
                                </div>

                            </div>

                            <div class="media">
                                <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6>Kara Young</h6>
                                    <p>2 mins ago</p>
                                </div>
                                <i class="flaticon-fill-tick mr-2"></i>
                                <i class="flaticon-close-fill"></i>
                            </div>

                            <div class="media mt-2">
                                <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6>Justin Cross</h6>
                                    <p>5 mins ago</p>
                                </div>
                                <i class="flaticon-fill-tick mr-2"></i>
                                <i class="flaticon-close-fill"></i>
                            </div>

                            <div class="media mt-2">
                                <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6>Amy Diaz</h6>
                                    <p>7 mins ago</p>
                                </div>
                                <i class="flaticon-fill-tick mr-2"></i>
                                <i class="flaticon-close-fill"></i>
                            </div>


                            <div class="media mt-2">
                                <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6>Ernest Reeves</h6>
                                    <p>10 mins ago</p>
                                </div>
                                <i class="flaticon-fill-tick mr-2"></i>
                                <i class="flaticon-close-fill"></i>
                            </div>

                        </div>


                    </div>



                    <div class="online mt-5">

                        <div class="t-s-header mb-5">

                            <div class="row">

                                <div class="col-md-8 text-center">
                                    <h6>
                                        <span>Online</span>
                                    </h6>
                                </div>

                                <div class="col-md-4">
                                    <div>
                                        <p class="mb-0 mt-0">See all</p>
                                    </div>
                                </div>

                            </div>

                        </div>


                        <div class="media d-block d-sm-flex text-sm-left text-center">
                            <img alt="admin-profile" class="mr-sm-3 mb-sm-0 mb-3" src="assets/img/120x120.jpg">
                            <div class="media-body mb-4">
                                <h6 class="media-heading mt-0"><span class="media-title"> Irene Collins</span><span
                                        class="badge badge-info float-sm-right ml-2">9</span></h6>
                                <p class="media-text">
                                    Cras sit amet gravida nulla.
                                </p>
                                <p class="meta-time">7 mins ago</p>
                            </div>
                        </div>


                        <div class="media d-block d-sm-flex text-sm-left text-center">
                            <img alt="admin-profile" class="mr-sm-3 mb-sm-0 mb-3 rounded" src="assets/img/120x120.jpg">
                            <div class="media-body mb-4">
                                <h6 class="media-heading mt-0"><span class="media-title"> Thomas Granger</span><span
                                        class="badge badge-secondary float-sm-right ml-2">9</span></h6>
                                <p class="media-text">
                                    Cras sit amet gravida nulla.
                                </p>
                                <p class="meta-time">13 mins ago</p>
                            </div>
                        </div>


                        <div class="media d-block d-sm-flex text-sm-left text-center">
                            <img alt="admin-profile" class="mr-sm-3 mb-sm-0 mb-3 rounded-circle"
                                src="assets/img/120x120.jpg">
                            <div class="media-body mb-4">
                                <h6 class="media-heading mt-0"><span class="media-title"> Grace Roberts</span><span
                                        class="badge badge-warning float-sm-right ml-2">9</span></h6>
                                <p class="media-text">
                                    Cras sit amet gravida nulla.
                                </p>
                                <p class="meta-time">7 mins ago</p>
                            </div>
                        </div>

                    </div>


                    <div class="away-stats">


                        <div class="t-s-header mb-5 mt-5">

                            <div class="row">

                                <div class="col-md-12">
                                    <h6>
                                        <span>Away</span>
                                    </h6>
                                </div>

                            </div>

                        </div>

                        <div class="a-s-media mb-5">

                            <div class="media mb-3">
                                <div class="profile-img mr-3">
                                    <img alt="admin-profile" src="assets/img/90x90.jpg" class="img-fluid">
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-2">Traci Lopez</h6>
                                </div>
                            </div>

                            <div class="media mb-3">
                                <div class="profile-img mr-3">
                                    <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid">
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-2">Kristen Beck</h6>
                                </div>
                            </div>

                            <div class="media mb-5">
                                <div class="profile-img mr-3">
                                    <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid">
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-2">Keith Foster</h6>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>

            <div id="alerts-tab" class="tab-pane tab-3 fade">

                <div class="settings">

                    <div class="admin-setting">


                        <div class="d-flex justify-content-between">

                            <div class="media">
                                <i class="flaticon-gear-5 mr-3"></i>
                                <div class="media-body">
                                    <h6 class="mt-2">Admin settings</h6>
                                </div>
                            </div>

                            <div>
                                <p class="mb-0 mt-2">See all</p>
                            </div>

                        </div>


                        <div class="mb-3 mt-5">
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-0 mt-1">Show notifications</h6>
                                <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                    <input type="checkbox" class="material-switch-control-input" checked="">
                                    <span class="material-switch-control-indicator"></span>
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-0 mt-1">Enable auto logout</h6>
                                <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                    <input type="checkbox" class="material-switch-control-input" checked="">
                                    <span class="material-switch-control-indicator"></span>
                                </label>
                            </div>
                        </div>


                        <div class="mb-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-0 mt-1">Show recent activity</h6>
                                <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                    <input type="checkbox" class="material-switch-control-input" checked="">
                                    <span class="material-switch-control-indicator"></span>
                                </label>
                            </div>
                        </div>


                        <div class="mb-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-0 mt-1">Chat history</h6>
                                <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                    <input type="checkbox" class="material-switch-control-input" checked="">
                                    <span class="material-switch-control-indicator"></span>
                                </label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-0 mt-1">Users activity</h6>
                                <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                    <input type="checkbox" class="material-switch-control-input" checked="">
                                    <span class="material-switch-control-indicator"></span>
                                </label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-0 mt-1">Orders history</h6>
                                <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                    <input type="checkbox" class="material-switch-control-input" checked="">
                                    <span class="material-switch-control-indicator"></span>
                                </label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-0 mt-1">Show task statistics</h6>
                                <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                    <input type="checkbox" class="material-switch-control-input" checked="">
                                    <span class="material-switch-control-indicator"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="general-setting mt-5">


                        <div class="d-flex justify-content-between mb-5">

                            <div class="media">
                                <i class="flaticon-gear-5 mr-3"></i>
                                <div class="media-body">
                                    <h6 class="mt-2">General Settings</h6>
                                </div>
                            </div>

                        </div>


                        <div class="media mb-4">
                            <i class="flaticon-facebook-logo fb"></i>
                            <div class="media-body d-flex justify-content-around">
                                <h6 class="mb-0 mt-2">Show notfications</h6>
                                <label
                                    class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                    <input type="checkbox" class="material-switch-control-input" checked="">
                                    <span class="material-switch-control-indicator"></span>
                                </label>
                            </div>
                        </div>


                        <div class="media mb-4">
                            <i class="flaticon-dribbble-bold dribbble"></i>
                            <div class="media-body d-flex justify-content-around">
                                <h6 class="mb-0 mt-2">Show notfications</h6>
                                <label
                                    class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                    <input type="checkbox" class="material-switch-control-input" checked="">
                                    <span class="material-switch-control-indicator"></span>
                                </label>
                            </div>
                        </div>


                        <div class="media mb-4">
                            <i class="flaticon-linkedin-logo lin"></i>
                            <div class="media-body d-flex justify-content-around">
                                <h6 class="mb-0 mt-2">Show notfications</h6>
                                <label
                                    class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                    <input type="checkbox" class="material-switch-control-input" checked="">
                                    <span class="material-switch-control-indicator"></span>
                                </label>
                            </div>
                        </div>


                        <div class="media mb-4">
                            <i class="flaticon-twitter-logo tweet"></i>
                            <div class="media-body d-flex justify-content-around">
                                <h6 class="mb-0 mt-2">Show notfications</h6>
                                <label
                                    class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                    <input type="checkbox" class="material-switch-control-input" checked="">
                                    <span class="material-switch-control-indicator"></span>
                                </label>
                            </div>
                        </div>


                        <div class="media mb-4">
                            <i class="flaticon-behance-logo behance"></i>
                            <div class="media-body d-flex justify-content-around">
                                <h6 class="mb-0 mt-2">Show notfications</h6>
                                <label
                                    class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                    <input type="checkbox" class="material-switch-control-input" checked="">
                                    <span class="material-switch-control-indicator"></span>
                                </label>
                            </div>
                        </div>






                        <div class="chk-settings mt-5">

                            <div class="media mb-4 ">
                                <div class="media-body">
                                    <h6 class="media-heading mt-0"><span class="media-title">Report panel usage</span>
                                    </h6>
                                    <p class="media-text">
                                        Show information on any malicious activity
                                    </p>
                                </div>
                                <div class="n-chk">
                                    <label class="new-control new-checkbox checkbox-secondary mr-1">
                                        <input type="checkbox" class="new-control-input" checked>
                                        <span class="new-control-indicator"></span><span class="invisible">C</span>
                                    </label>
                                </div>
                            </div>


                            <div class="media mb-4 ">
                                <div class="media-body">
                                    <h6 class="media-heading mt-0"><span class="media-title">Allow mail redirect</span>
                                    </h6>
                                    <p class="media-text">
                                        Redirect mail through exchange server
                                    </p>
                                </div>
                                <div class="n-chk">
                                    <label class="new-control new-checkbox checkbox-secondary mr-1">
                                        <input type="checkbox" class="new-control-input">
                                        <span class="new-control-indicator"></span><span class="invisible">C</span>
                                    </label>
                                </div>
                            </div>


                            <div class="media mb-4 ">
                                <div class="media-body">
                                    <h6 class="media-heading mt-0"><span class="media-title"> Show author name in
                                            posts</span>
                                    </h6>
                                    <p class="media-text">
                                        Allow the user to show his name in blog posts
                                    </p>
                                </div>
                                <div class="n-chk">
                                    <label class="new-control new-checkbox checkbox-secondary mr-1">
                                        <input type="checkbox" class="new-control-input" checked>
                                        <span class="new-control-indicator"></span><span class="invisible">C</span>
                                    </label>
                                </div>
                            </div>


                            <div class="media mb-4 ">
                                <div class="media-body">
                                    <h6 class="media-heading mt-0"><span class="media-title"> Sync phone when connected
                                            to the PC</span>
                                    </h6>
                                    <p class="media-text">
                                        Connect smart phone automatically and sync with user profile
                                    </p>
                                </div>
                                <div class="n-chk">
                                    <label class="new-control new-checkbox checkbox-secondary mr-1">
                                        <input type="checkbox" class="new-control-input" checked>
                                        <span class="new-control-indicator"></span><span class="invisible">C</span>
                                    </label>
                                </div>
                            </div>

                        </div>


                        <div class="mt-5 delete-chat mb-5">

                            <div class="media mb-4">
                                <div class="media-body">
                                    <h6 class="media-heading mt-0"><span class="media-title"> Delete chat history</span>
                                    </h6>
                                </div>
                                <i class="del-chat-his flaticon-delete-1 mb-4"></i>

                            </div>

                        </div>




                        <div class="mt-5 usr-status mb-5">

                            <div class="d-flex justify-content-between mb-5">

                                <div class="media">
                                    <i class="flaticon-chat-fill mr-3"></i>
                                    <div class="media-body">
                                        <h6 class="mt-2">Status</h6>
                                    </div>
                                </div>

                            </div>

                            <div class="media mb-2 stats">
                                <div class="media-body">
                                    <h6 class="media-heading mt-0"><span class="media-title"> Online</span>
                                    </h6>
                                </div>

                                <div class="n-chk">
                                    <label
                                        class="new-control new-checkbox  mr-1  checkbox-outline-success new-checkbox-rounded">
                                        <input type="checkbox" class="chb new-control-input">
                                        <span class="new-control-indicator"></span><span class="invisible">C</span>
                                    </label>
                                </div>

                            </div>


                            <div class="media mb-2 stats">
                                <div class="media-body">
                                    <h6 class="media-heading mt-0"><span class="media-title"> Offline</span>
                                    </h6>
                                </div>

                                <div class="n-chk">
                                    <label
                                        class="new-control new-checkbox  mr-1  checkbox-outline-default new-checkbox-rounded">
                                        <input type="checkbox" class="chb new-control-input">
                                        <span class="new-control-indicator"></span><span class="invisible">C</span>
                                    </label>
                                </div>
                            </div>



                            <div class="media mb-5 stats">
                                <div class="media-body mb-5">
                                    <h6 class="media-heading mt-0"><span class="media-title"> Away</span>
                                    </h6>
                                </div>

                                <div class="n-chk">
                                    <label
                                        class="new-control new-checkbox  mr-1  checkbox-outline-warning new-checkbox-rounded">
                                        <input type="checkbox" class="chb new-control-input">
                                        <span class="new-control-indicator"></span><span class="invisible">C</span>
                                    </label>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</aside>
<!--  END CONTROL SIDEBAR  -->

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<script src="assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="plugins/blockui/jquery.blockUI.min.js"></script>
<script src="assets/js/app.js"></script>

<script>
    $(document).ready(function () {
        App.init();
    });
</script>
<script src="assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY STYLES -->

<!--  BEGIN CUSTOM SCRIPT FILES  -->
<script src="assets/js/ecommerce/autocomplete-addedit_product.js"></script>
<!--  END CUSTOM SCRIPT FILES  -->

<!-- ADDING A PHP FOOTER FILE FOR GENERAL SCRIPT -->
<?php require_once 'inc/footer.php'; ?>
</body>

</html>