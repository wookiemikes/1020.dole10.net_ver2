<!DOCTYPE html>
<html lang="en">
<?php
include "../pages/address-scripts.php";
include "../pages/registertest.php";
require "../pages/registerclient_input.php";

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="wookie">
    <meta name="keyword" content="">

    <title>DOLE 1020 | REGISTRATION FORM</title>

    <!-- Theme icon -->
    <link rel="shortcut icon" href="../assets/images/doleico.ico">

    <!-- Theme Css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/slidebars.min.css" rel="stylesheet">
    <link href="../assets/css/icons.css" rel="stylesheet">
    <link href="../assets/css/menu.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script type="text/javascript" src="dist/jautocalc.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            function autoCalcSetup() {
                $('form[name=cart]').jAutoCalc('destroy');
                $('form[name=cart] tr[name=line_items]').jAutoCalc({
                    keyEventsFire: true,
                    decimalPlaces: 0,
                    emptyAsZero: true
                });
                $('form[name=cart]').jAutoCalc({
                    decimalPlaces: 0
                });
            }
            autoCalcSetup();
        });
    </script>
</head>

<body class="sticky-header">
    <section class="bg-login">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="wrapper-page">
                        <div class="account-pagesz">
                            <div class="account-boxes">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="py-3 text-center">
                                            <img class="d-block mx-auto mb-1" src="../assets/images/1020.gif" alt="" width="150" height="150">
                                            <h2><b>REGISTRATION OF ESTABLISHMENT</b></h2>
                                            <h4><b>ONLINE APPLICATION FORM</b></h4>
                                        </div>
                                        <hr>
                                        <div class="col-lg-12">

                                            <form action="registerclient" name="cart" method="POST" class="needs-validation">
                                                


                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p class="text-center"><b>Please supply all required information.</b> Misinterpretation, false statement or fraud in this application or in any supporting document is ground for denial/revocation/cancellation of the permit.</b></p>
                                                    </div>
                                                </div>
                                                <br>
                                                <h4 class="mb-3"><b>I. ESTABLISHMENT DETAILS</b></h4>
                                                <div class="row">
                                                    
                                                    <div class="col-md-12">
                                                        <label for="firstName"><b>REGISTRATION NUMBER (please do not touch):</b></label>
                                                        <input type="text" class="form-control" name="id_diff" id="id_diff" value="<?php echo $output;?>" readonly>
                                                        <div class="invalid-feedback">
                                                            Establishment Name cannot be blank.
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12">
                                                        <label for="firstName"><b>Name of Establishment (PLEASE NOTE: exlude /  do not include any quotation marks on your names please)</b></label>
                                                        <input type="text" class="form-control" name="ud_est_name" id="firstName" placeholder="ex. ABC Company" required>
                                                        <div class="invalid-feedback">
                                                            Establishment Name cannot be blank.
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <label for="firstName"><b>Street Address</b></label>
                                                        <input type="text" class="form-control" id="firstName" name="ud_st" placeholder="ex. Trinidad Building, Corrales-Yacapin Street, Cagayan de Oro" value="" required>
                                                        <div class="invalid-feedback">
                                                            Street Address cannot be blank.
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="firstName"><b>Provincial Office :</b></label>
                                                        <select class="form-control" name="ud_prov" id="province" onchange="populate(this.id,'municipality')" required>
                                                            <option value="">Choose Province..</option>
                                                            <option value="Bukidnon Field Office">Bukidnon Field Office</option>
                                                            <option value="Camiguin Field Office">Camiguin Field Office</option>
                                                            <option value="Cagayan de Oro City Field Office">Cagayan de Oro City Field Office</option>
                                                            <option value="Lanao Del Norte Field Office">Lanao Del Norte Field Office</option>
                                                            <option value="Misamis Oriental Field Office">Misamis Oriental Field Office</option>
                                                            <option value="Misamis Occidental Field Office">Misamis Occidental Field Office</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="firstName"><b>Municipality :</b></label>
                                                        <select class="form-control" name="ud_ct" id="municipality" required>
                                                            <option value="" disabled selected hidden>Choose Municipality</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="firstName"><b>Taxpayer's Identification Number (TIN) :</b></label>
                                                        <input type="text" class="form-control" name="ud_tin" id="firstName" placeholder="ex. xxx-xxx-xxx" value="" required>
                                                        <div class="invalid-feedback">
                                                            TIN cannot be blank.
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="firstName"><b>Contract Number:</b></label>
                                                        <input type="text" class="form-control" id="firstName" name="ud_contact" placeholder="ex. 0915xxxxxxx or 858-xxxx" value="" required>
                                                        <div class="invalid-feedback">
                                                            Contact Number cannot be blank.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="firstName"><b>Fax Number :</b></label>
                                                        <input type="text" class="form-control" name="ud_fax" placeholder="Fax Number (optional)" value="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="firstName"><b>Email Address :</b></label>
                                                        <input type="email" class="form-control" id="firstName" name="ud_email" placeholder="ex. 1020_client@gogo.com" value="" required>
                                                        <div class="invalid-feedback">
                                                            Email cannot be blank.
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="firstName"><b>Name of Establishment Owner/ Manager:</b></label>
                                                        <input type="text" class="form-control" id="firstName" name="ud_manager" placeholder="ex. Juan Dela Cruz" value="" required>
                                                        <div class="invalid-feedback">
                                                            Name cannot be blank.
                                                        </div>
                                                    </div>


                                                </div>
                                                <br>
                                                <h4 class="mb-3"><b>II. BUSINESS DETAILS</b></h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="firstName"><b>Nature of Business :</b></label>
                                                        <select name="ued_nob" class="form-control" id="">
                                                            <option value="">Choose One..</option>
                                                            <option value="Agriculture, forestry and fishing">Agriculture, forestry and fishing</option>
                                                            <option value="Mining and quarrying">Mining and quarrying</option>
                                                            <option value="Manufacturing">Manufacturing</option>
                                                            <option value="Electricity, gas, steam and air-conditioning supply">Electricity, gas, steam and air-conditioning supply</option>
                                                            <option value="Water Supply, sewerage, waste management and remediation activities">Water Supply, sewerage, waste management and remediation activities</option>
                                                            <option value="Construction">Construction</option>
                                                            <option value="Wholesale and retail trade, repaire of motor vehicles and etc.">Wholesale and retail trade, repaire of motor vehicles and etc.</option>
                                                            <option value="Transportation and Storage">Transportation and Storage</option>
                                                            <option value="Accomodation and food services">Accomodation and food services</option>
                                                            <option value="Information and communication">Information and communication</option>
                                                            <option value="Financial and insurance">Financial and insurance</option>
                                                            <option value="Real estate">Real estate</option>
                                                            <option value="Professional, Scientific and technical">Professional, Scientific and technical</option>
                                                            <option value="Administrative and support">Administrative and support</option>
                                                            <option value="Security">Security</option>
                                                            <option value="Education">Education</option>
                                                            <option value="Human Health and Social Work">Human Health and Social Work</option>
                                                            <option value="Arts and Entertainment">Arts and Entertainment</option>
                                                            <option value="Other service Actvities">Other service Actvities</option>
                                                            <option value="Activities of extraterritorial orgs and bodies"> Activities of extraterritorial orgs and bodies">Activities ofextraterritorial orgs and bodies"> Activities ofextraterritorial orgs and bodies</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="firstName"><b>Product Manufactured, Service Rendered or Product Sold :</b></label>
                                                        <input type="text" class="form-control" id="firstName" name="ued_product" placeholder="ex. TEXTILE" value="" required>
                                                        <div class="invalid-feedback">
                                                            Product cannot be blank.
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <h4 class="mb-3"><b>III. EMPLOYMENT DETAILS</b></h4>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="firstName"><b>Nature of Business :</b></label>
                                                        <br>
                                                        <table class="table table-sm table-responsive table-striped " name="cart">
                                                            <thead class="text-center thead-dark">
                                                                <th></th>
                                                                <th><b>TOTAL</b></th>
                                                                <th><b>FILIPINOS</b></th>
                                                                <th><b>RESIDENT ALIEN</b></th>
                                                                <th><b>NON-RESIDENT ALIEN</b></th>
                                                                <th><b>BELOW 15 YEARS</b></th>
                                                                <th><b>BELOW 15-17 YEARS</b></th>
                                                                <th><b>18-30 YEARS</b></th>
                                                                <th><b>ABOVE 30 YEARS</b></th>
                                                            </thead>
                                                            <tbody class="text-center">
                                                                <tr name="line_items">
                                                                    <td>
                                                                        <h5><b>MALE</b></h5>
                                                                    </td>
                                                                    <td><input class="form-control" type="number" name="ued_total_male" id=""></td>
                                                                    <td><input class="form-control" type="number" name="ued_m_filipinos" id=""></td>
                                                                    <td><input class="form-control" type="number" name="ued_m_resalien" id=""></td>
                                                                    <td><input class="form-control" type="number" name="ued_m_nralien" id=""></td>
                                                                    <td><input class="form-control" type="number" name="ued_m_minor_a" id=""></td>
                                                                    <td><input class="form-control" type="number" name="ued_m_minor_b" id=""></td>
                                                                    <td><input class="form-control" type="number" name="ued_m_18_30" id=""></td>
                                                                    <td><input class="form-control" type="number" name="ued_m_abv_30" id=""></td>
                                                                </tr>
                                                                <tr name="line_items">
                                                                    <td>
                                                                        <h5><b>FEMALE</b></h5>
                                                                    </td>
                                                                    <td><input class="form-control" type="number" name="ued_total_fmale" id=""></td>
                                                                    <td><input class="form-control" type="number" name="ued_f_filipinos" id=""></td>
                                                                    <td><input class="form-control" type="number" name="ued_f_resalien" id=""></td>
                                                                    <td><input class="form-control" type="number" name="ued_f_nralien" id=""></td>
                                                                    <td><input class="form-control" type="number" name="ued_f_minor_a" id=""></td>
                                                                    <td><input class="form-control" type="number" name="ued_f_minor_b" id=""></td>
                                                                    <td><input class="form-control" type="number" name="ued_f_18_30" id=""></td>
                                                                    <td><input class="form-control" type="number" name="ued_f_abv_30" id=""></td>
                                                                </tr>
                                                                <tr name="line_items">
                                                                    <td>
                                                                        <h5><b>GRAND TOTAL</b></h5>
                                                                    </td>
                                                                    <td><input class="form-control" type="number" jAutoCalc="{ued_total_male} + {ued_total_fmale}" name="ued_total" id="" readonly></td>
                                                                    <td><input class="form-control" type="number" jAutoCalc="{ued_m_filipinos} + {ued_f_filipinos}" name="ued_t_filipinos" id="" readonly></td>
                                                                    <td><input class="form-control" type="number" jAutoCalc="{ued_m_resalien} + {ued_f_resalien}" name="ued_t_resalien" id="" readonly></td>
                                                                    <td><input class="form-control" type="number" jAutoCalc="{ued_m_nralien} + {ued_f_nralien}" name="ued_t_nralien" id="" readonly></td>
                                                                    <td><input class="form-control" type="number" jAutoCalc="{ued_m_minor_a} + {ued_f_minor_a}" name="ued_t_minor_a" id="" readonly></td>
                                                                    <td><input class="form-control" type="number" jAutoCalc="{ued_m_minor_b} + {ued_f_minor_b}" name="ued_t_minor_b" id="" readonly></td>
                                                                    <td><input class="form-control" type="number" jAutoCalc="{ued_m_18_30} + {ued_f_18_30}" name="ued_t_18_30" id="" readonly></td>
                                                                    <td><input class="form-control" type="number" jAutoCalc="{ued_m_abv_30} + {ued_f_abv_30}" name="ued_t_abv_30" id="" readonly></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                    </div>

                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="firstName"><b>Name of Labor Union, if any :</b></label>
                                                        <input type="text" class="form-control" name="uet_name_labor" placeholder="ex. ABC COMPANY LABOR UNION" value="">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <label for="firstName"><b>Address of Labor Union :</b></label>
                                                        <input type="text" class="form-control" name="uet_add_labor" placeholder="TABLON, CAGAYAN DE ORO CITY" value="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="firstName"><b>BLR Registration Number:</b></label>
                                                        <input type="text" class="form-control" name="uet_blr" placeholder="ENTER BLR NUMBER HERE..." value="">
                                                    </div>
                                                </div>
                                                <br>
                                                <h4 class="mb-3"><b>IV. TECHNICAL DETAILS</b></h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label><b>A. Machinery Equipment and other devices in use:</b> <i>(check one or more..)</i></label>
                                                        <br>
                                                        <table class="table-responsive table-sm container-fluid">

                                                            <tr>
                                                                <td class=""><input type="checkbox" name="uet_machine_eq[]" value="none"> None</td>
                                                                <td><input type="checkbox" name="uet_machine_eq[]" value="circular Saw"> Circular Saw</td>
                                                                <td><input type="checkbox" name="uet_machine_eq[]" value="machine Drill"> Machine Drill</td>
                                                                <td><input type="checkbox" name="uet_machine_eq[]" value="Boiler"> Boiler</td>

                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>

                                                            <tr>
                                                                <td><input type="checkbox" name="uet_machine_eq[]" value="Internal Combustion Engine"> Internal Combustion Engine</td>
                                                                <td><input type="checkbox" name="uet_machine_eq[]" value="Diesel Engine"> Diesel Engine</td>
                                                                <td><input type="checkbox" name="uet_machine_eq[]" value="Gasoline"> Gasoline</td>
                                                                <td><input type="checkbox" name="uet_machine_eq[]" value="Pressure Vessel"> Pressure Vessel</td>
                                                            </tr>

                                                        </table>
                                                    </div>
                                                    <br>
                                                    <div class="col-md-6">
                                                        <label><b>B. Materials Handling Equipment:</b> <i>(check one or more..)</i></label>
                                                        <br>
                                                        <table class="table-responsive table-sm container-fluid">
                                                            <tr>
                                                                <td><input type="checkbox" name="uet_material_eq[]" value="None">None</td>
                                                                <td><input type="checkbox" name="uet_material_eq[]" value="Power Trucks">Power Trucks</td>
                                                                <td><input type="checkbox" name="uet_material_eq[]" value=" Hand Trucks">Hand Trucks</td>

                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox" name="uet_material_eq[]" value="Cranes">Cranes</td>
                                                                <td><input type="checkbox" name="uet_material_eq[]" value="Conveyors">Conveyors</td>
                                                                <td><input type="checkbox" name="uet_material_eq[]" value="Forklifts">Forklifts</td>
                                                            </tr>

                                                        </table>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="firstName"><b>C. Chemical or Subtances used or handled :</b></label>
                                                        <input type="text" class="form-control" name="uet_chemical" placeholder="" value="">
                                                    </div>
                                                </div>
                                                <br>
                                                <h4 class="mb-3"><b>V. OTHER DETAILS</b></h4>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="firstName"><b>If Branch Unit, State name of Parent Establishment and Location :</b></label>
                                                        <input type="text" class="form-control" name="uet_branch" id="firstName" placeholder="Enter Main Branch and Branch Location Here" value="">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="firstName"><b>Current Capitalization :</b></label>
                                                        <input type="text" name="uet_capital" class="form-control" required placeholder="ex. 100,000">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="firstName"><b>Total Assets :</b></label>
                                                        <select name="uet_assets" class="form-control" id="">
                                                            <option value="">Choose One..</option>
                                                            <option value="Less thank P 1,500,001">Less thank P 1,500,001</option>
                                                            <option value="P 1,500,001 - P 15,000,000">P 1,500,001 - P 15,000,000</option>
                                                            <option value="P 15,000,001 - P 60,000,000">P 15,000,001 - P 60,000,000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <h4 class="mb-3"><b>VI. DOCUMENTARY REQUIREMENTS</b></h4>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <table class=" table" style="color: black;">
                                                            <tr>
                                                                <td>
                                                                    <h5><b style="color: black;">INSTRUCTIONS ON UPLOADING REQUIREMENTS:</b></h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="color: black;">
                                                                    <b>1. <u style="color: red;">SCAN</u> ALL THE REQUIRED DOCUMENTS.( PLEASE REFER TO THE CHECKLIST BELOW)</b>
                                                                    <ul>
                                                                        <li>Department of Trade and Industry (DTI) Registration Certificate / SEC registration certificate</li>
                                                                        <li>Valid License or Business Permit/Mayor’s Permit</li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>2. MOVE THE FILES TO A FOLDER, RENAME USING THE GIVEN FORMAT "<i>Company_name</i>_Requirements"</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>3. COMPRESS THE FOLDER INTO ZIP FILE (REFER TO THIS <a target="_blank" href="https://www.wikihow.com/Make-a-Zip-File">LINK</a> FOR INSTRUCTIONS)</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>4. UPLOAD COMPRESSED FILE TO GOOGLE DRIVE (REFER TO THIS <a target="_blank" href="https://www.wikihow.com/Use-Google-Drive">LINK</a> FOR INSTRUCTIONS)</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>5. ALLOW FILE TO BE SHARED (REFER TO THIS <a href="https://www.wikihow.com/Share-a-Google-Drive-File">LINK</a> FOR INSTRUCTIONS )</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>6. COPY LINK AND PASTE IT TO THE FIELD BELOW (REFER TO THIS <a href="https://www.cloudwards.net/google-file-sharing/#:~:text=Click%20%E2%80%9Csharing%20settings.%E2%80%9D,you%20want%20to%20share%20it.">LINK</a> FOR INSTRUCTIONS )</b></td>
                                                            </tr>

                                                        </table>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <h6><b>Google Drive Link</b></h6>
                                                        <input type="text" class="form-control" id="firstName" name="uad_req_link" placeholder="Paste Google Drive link here!" required>
                                                        <div class="invalid-feedback">
                                                            This is required.
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="col-md-12">
                                                    <input style="font-size: 25px; font-weight:bold;" type="submit" class="btn btn-lg btn-block btn-primary" value="I hereby certify that the above information is true and correct. REGISTER NOW !" name="register">
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
        </div>
    </section>

    <script type="text/javascript">
        $('form').jAutoCalc({

            // default attribute
            attribute: 'jAutoCalc',

            // thousand separator
            thousandOpts: [',', '.', ' '],

            // decimal separator
            decimalOpts: ['.', ','],

            // decimal places
            decimalPlaces: -1,

            // do the math right away?
            initFire: true,

            // allows chained calculation?
            chainFire: true,

            // do the math everytime keys are pressed
            keyEventsFire: false,

            // are the results read-only?
            readOnlyResults: true,

            // shows parse error
            showParseError: true,

            // treats empty as zero
            emptyAsZero: false,

            // smart intergers?
            smartIntegers: false,

            // callback
            onShowResult: null,

            // custom functions
            funcs: {},

            // custom constants
            vars: {}

        });
    </script>
    <!-- jQuery -->

    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/modernizr.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/slidebars.min.js"></script>




    <!--app js-->
    <script src="../assets/js/jquery.app.js"></script>
</body>

</html>