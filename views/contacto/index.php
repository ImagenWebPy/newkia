<div id="container" ng-app="kwcmsAppModuleApp" ng-cloak>    
    <div id="content" class="subContents">
        <div class="par parsys">
            <div class="parbase global-title section">
                <div class="content_title">
                    <!-- 20150827 GT SEO h3 > h1 -->
                    <h1 class="con_tit"><p>Contáctanos</p>
                    </h1>
                    <div class="con_navi">
                        <ol vocab="http://schema.org/" typeof="BreadcrumbList">
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <a href="<?= URL; ?>" property="item" typeof="WebPage"><span class="cmm_spr spr_home" property="name">Inicio</span><span class="gt">&gt;</span></a>
                                <meta property="position" content=  1>
                            </li>
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <strong class="depth current"property="name">Contáctanos</strong>
                                <meta property="position" content=  4>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="contact-us section">
                <script type="text/javascript">
                    //require variables for userdata-keyin, userdata-view component
                    var _user_data_ = null;
                    kwcmsApp.controller("contactus.steps", function ($scope, HttpService) {
                        //current step
                        $scope.step = "";
                        //user data
                        $scope.userData = null;
                        //initialize
                        $scope.init = function () {
                            $scope.step = "1";
                        };
                        //change step method
                        $scope.stepChange = function (step) {
                            $scope.step = step;
                        };
                        //validation for steps
                        $scope.validation = function (step, nStep, isNext) {
                            var isValid = true;
                            switch (step) {
                                case "1":
                                    userdataInfoSubmit();
                                    if (_user_data_ != null) {
                                        $scope.userData = _user_data_;

                                        $scope.title = $scope.userData.title;
                                        $scope.fname = $scope.userData.fname;
                                        $scope.lname = $scope.userData.lname;
                                    } else {
                                        isValid = false;
                                    }
                                    break;
                            }

                            if (isValid && isNext) {
                                $scope.stepChange(nStep);
                            }
                        };
                        //send e-mail
                        $scope.send = function ($event) {
                            $event.preventDefault();

                            var moveURI = $event.target.href;
                            var params = {
                                method: "POST"
                                , params: {
                                    "reqTitle": $scope.userData.title
                                    , "reqFnm": $scope.userData.fname
                                    , "reqLnm": $scope.userData.lname
                                    , "reqType": $scope.userData.p_method
                                    , "reqEmail": ""
                                    , "reqPhoneH": ""
                                    , "reqPhoneW": ""
                                    , "reqPhoneM": ""
                                    , "reqMsg": $scope.userData.message
                                    , "statusCd": "RQ01ST01"
                                    , "regNm": $scope.userData.lname + ", " + $scope.userData.fname
                                }
                                , url: "/api/kia_global/base/cu01/contactUs.insertContactUs2"
                            };

                            if (angular.equals($scope.userData.p_method, "e")) {
                                params.params["reqEmail"] = $scope.userData.email;
                            } else if (angular.equals($scope.userData.p_method, "p")) {
                                params.params["reqPhoneH"] = $scope.userData.hphone1 + "-" + $scope.userData.hphone2 + "-" + $scope.userData.hphone3;
                                params.params["reqPhoneW"] = $scope.userData.wphone1 + "-" + $scope.userData.wphone2 + "-" + $scope.userData.wphone3;
                                params.params["reqPhoneM"] = $scope.userData.mphone1 + "-" + $scope.userData.mphone2 + "-" + $scope.userData.mphone3;
                            }

                            HttpService.http(params, $scope.sended, moveURI);
                        };

                        //send completed
                        $scope.sended = function (data, uri) {
                            if (angular.equals(data.status, "Success")) {
                                //movePage("The request completed! Thank you!");
                                alert("The request completed! Thank you!");
                            }

                            if (!angular.equals(uri, "") && !angular.equals(uri, undefined)) {
                                document.location.href = uri;
                            } else {
                                document.location.href = "http://org-www.kia.com/content/kwcms/gt/en.html";
                            }
                        };
                    });
                </script>
                <div class="content_detail" ng-controller="contactus.steps" ng-init="init()">
                    <div class="inner contact_us" ng-show="step == 1">
                        <div class="cuIntro">
                            <p class="introTxt1">Do you have comments or questions about the Kia Product,<br> Services or Promotion?</p>
                            <!--<p class="introTxt2 icopadding">Please CONTACT US at the below Telephone No. or email us.<br> We will try our best to resolve the issue.</p>-->
                        </div>
                        <div class="con_box">
                            <div class="localInfor"><div class="parsys contact-us-guide">
                                </div>
                            </div>
                            <h4 class="bl_type1">Input Information</h4>
                            <div class="parsys person-info"><div class="userdata-keyin section">


                                    <script src="http://org-www.kia.com/etc/designs/kia-global/clientlib/js/xss.js"></script> 
                                    <form name="datainfo-comp-form" method="POST" action="">

                                        <ul class="info_tbl">

                                            <li class="info_tr">
                                                <div class="info_th">Title</div>
                                                <div class="info_td">
                                                    <span class="form_wrp only">
                                                        <span class="sel_box inp_sel">
                                                            <select class="form_select" name="title" id="title" title="Title">
                                                                <option value="Mr">Mr</option>
                                                                <option value="Mrs">Mrs</option>
                                                                <option value="Miss">Miss</option>
                                                                <option value="Ms">Ms</option>
                                                            </select>
                                                        </span>
                                                    </span>
                                                </div>
                                            </li>



                                            <li class="info_tr">
                                                <div class="info_th">Name<em class="ess">* <span class="hidden">Is required information.</span></em></div>
                                                <div class="info_td">
                                                    <div class="form_area">
                                                        <span class="form_wrp"><input type="text" class="input_box" name="fname" id="fname" placeholder="First Name" maxlength="50" title="First Name"></span>
                                                        <span class="space"></span>
                                                        <span class="form_wrp"><input type="text" class="input_box" name="lname" id="lname" placeholder="Last Name" maxlength="50" title="Last Name"></span>
                                                    </div>
                                                </div>
                                            </li>



                                            <li class="info_tr">
                                                <div class="info_th">Preferred contact<em class="ess">* <span class="hidden">Is required information.</span></em></div>
                                                <div class="info_td">
                                                    <span class="form_wrp only">
                                                        <span class="sel_box inp_sel">
                                                            <select class="form_select" name="p_method" id="p_method" title="Preferred contact" onchange="viewContactMethod(this.value)">
                                                                <option value="e">E-mail</option>
                                                                <option value="p">Phone</option>
                                                            </select>
                                                        </span>
                                                    </span>
                                                </div>
                                            </li>



                                            <li class="info_tr" id="datainfo-comp-form-email">
                                                <div class="info_th">E-mail <em class="ess">* <span class="hidden">Is required information.</span></em></div>
                                                <div class="info_td">
                                                    <span class="form_wrp only"><input type="text" name="email" id="email" class="input_box" placeholder="sample@master.com" title="E-mail" maxlength="50"></span>
                                                </div>
                                            </li>		
                                            <li class="info_tr" id="datainfo-comp-form-email-confirm">
                                                <div class="info_th">Confirm E-mail <em class="ess">* <span class="hidden">Is required information.</span></em></div>
                                                <div class="info_td">
                                                    <span class="form_wrp only"><input type="text" name="email_confirm" id="email_confirm" class="input_box" placeholder="sample@master.com" title="Confirm E-mail" maxlength="50"></span>
                                                </div>
                                            </li>



                                            <li class="info_tr" id="datainfo-comp-form-phone">
                                                <div class="info_th">Phone <em class="ess">* <span class="hidden">Is required information.</span></em> <p class="info_txt">(We will need at least one phone number.)</p></div>
                                                <ul class="info_dth">
                                                    <li class="info_tr">
                                                        <div class="info_th">Mobile</div>
                                                        <div class="info_td">
                                                            <div class="form_area phone">
                                                                <span class="form_wrp"><input type="text" name="mphone1" id="mphone1" class="input_box" title="Mobile" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;' maxlength="5"></span>
                                                                <span class="hypen">-</span> <span class="form_wrp"><input type="text" name="mphone2" id="mphone2" class="input_box" maxlength="4" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;' title="Mobile"></span>
                                                                <span class="hypen">-</span> <span class="form_wrp"><input type="text" name="mphone3" id="mphone3" class="input_box" maxlength="4" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;' title="Mobile"></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="info_tr">
                                                        <div class="info_th">Work</div>
                                                        <div class="info_td">
                                                            <div class="form_area phone">
                                                                <span class="form_wrp"><input type="text" name="wphone1" id="wphone1" class="input_box" maxlength="5" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;' title="Work"></span>
                                                                <span class="hypen">-</span> <span class="form_wrp"><input type="text" name="wphone2" id="wphone2" maxlength="4" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;' class="input_box" title="Work"></span>
                                                                <span class="hypen">-</span> <span class="form_wrp"><input type="text" name="wphone3" id="wphone3" maxlength="4" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;' class="input_box" title="Work"></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="info_tr">
                                                        <div class="info_th">Home</div>
                                                        <div class="info_td">
                                                            <div class="form_area phone">
                                                                <span class="form_wrp"><input type="text" name="hphone1" id="hphone1" class="input_box" maxlength="5" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;' title="Home"></span>
                                                                <span class="hypen">-</span> <span class="form_wrp"><input type="text" name="hphone2" id="hphone2" maxlength="4" class="input_box" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;' title="Home"></span>
                                                                <span class="hypen">-</span> <span class="form_wrp"><input type="text" name="hphone3" id="hphone3" maxlength="4" class="input_box" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;' title="Home"></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="info_tr">
                                                        <div class="info_td">
                                                            We will need at least one phone number.
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="info_tr">
                                                <div class="info_th">Message <em class="ess">* <span class="hidden">Is required information.</span></em><p class="info_txt">(<em class="pointcolor2" id="datainfo-comp-form-message-count">0</em>/1,000 characters.)</p></div>
                                                <div class="info_td">
                                                    <div class="form_wrp">
                                                        <textarea rows="5" class="input_box" name="message" id="message" placeholder="You can enter up to 1,000 characters." onkeypress="keyInMessageSize(this)" onkeyup="keyInMessageSize(this)" title="Message"></textarea>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>	
                                    <p class="comment"><em class="ess">*</em> Is required information.</p>

                                    <script type="text/javascript" src="http://org-www.kia.com/etc/designs/kia-global/clientlib/js/validation.js"></script>
                                    <script type="text/javascript" src="http://org-www.kia.com/etc/designs/kia-global/clientlib/js/validation.add.js"></script>
                                    <script type="text/javascript">
                                                            /*
                                                             * if use the this componet, 
                                                             * must be defined "_userdata_" variable.
                                                             */

                                                            var mPhoneVal = function () {
                                                                if ($("#mphone1").val() != "" && $("#mphone2").val() != "" && $("#mphone3").val() != "")
                                                                    return true;
                                                                else
                                                                    return false;
                                                            }
                                                            var wPhoneVal = function () {
                                                                if ($("#wphone1").val() != "" && $("#wphone2").val() != "" && $("#wphone3").val() != "")
                                                                    return true;
                                                                else
                                                                    return false;
                                                            }
                                                            var hPhoneVal = function () {
                                                                if ($("#hphone1").val() != "" && $("#hphone2").val() != "" && $("#hphone3").val() != "")
                                                                    return true;
                                                                else
                                                                    return false;
                                                            }

                                                            var PhoneVal = function () {
                                                                if ($("#p_method").val() == 'e') {
                                                                    return false;
                                                                } else {
                                                                    if (mPhoneVal() || wPhoneVal() || hPhoneVal()) {
                                                                        if (!mPhoneVal()) {
                                                                            if ($("#mphone1").val() != "" || $("#mphone2").val() != "" || $("#mphone3").val() != "")
                                                                                return true;
                                                                        } else if (!wPhoneVal()) {
                                                                            if ($("#wphone1").val() != "" || $("#wphone2").val() != "" || $("#wphone3").val() != "")
                                                                                return true;
                                                                        } else if (!hPhoneVal()) {
                                                                            if ($("#hphone1").val() != "" || $("#hphone2").val() != "" || $("#hphone3").val() != "")
                                                                                return true;
                                                                        }
                                                                        return false;
                                                                    } else {
                                                                        return true;
                                                                    }
                                                                }
                                                            }

                                                            //form validation
                                                            $("form[name=datainfo-comp-form]").validate({
                                                                rules: {
                                                                    dummy: {}
                                                                    , fname: {
                                                                        required: true
                                                                        , maxlength: 50
                                                                                //, isalphanumeric : true
                                                                    }
                                                                    , lname: {
                                                                        required: true
                                                                        , maxlength: 50
                                                                                //, isalphanumeric : true
                                                                    }
                                                                    , email: {
                                                                        required: function () {
                                                                            var useContactMethod = "true";
                                                                            var useEmail = "true";
                                                                            if (useContactMethod == "true" && getSelectValue("p_method") == "e") {
                                                                                return true;
                                                                            } else if (useContactMethod == "false" && useEmail == "true") {
                                                                                return true;
                                                                            }

                                                                            return false;
                                                                        }
                                                                        , isemail: function () {
                                                                            var useContactMethod = "true";
                                                                            var useEmail = "true";
                                                                            if (useContactMethod == "true" && getSelectValue("p_method") == "e") {
                                                                                return true;
                                                                            } else if (useContactMethod == "false" && useEmail == "true") {
                                                                                return true;
                                                                            }

                                                                            return false;
                                                                        }
                                                                    }
                                                                    , email_confirm: {
                                                                        required: function () {
                                                                            var useContactMethod = "true";
                                                                            var useEmail = "true";
                                                                            if (useContactMethod == "true" && getSelectValue("p_method") == "e") {
                                                                                return true;
                                                                            } else if (useContactMethod == "false" && useEmail == "true") {
                                                                                return true;
                                                                            }
                                                                            return false;
                                                                        }
                                                                        , equalTo: "#email"
                                                                    }
                                                                    , mphone1: {
                                                                        required: PhoneVal
                                                                        , isnumeric: true
                                                                        , maxlength: 5
                                                                    }
                                                                    , mphone2: {
                                                                        required: PhoneVal
                                                                        , isnumeric: true
                                                                        , maxlength: 4
                                                                    }
                                                                    , mphone3: {
                                                                        required: PhoneVal
                                                                        , isnumeric: true
                                                                        , maxlength: 4
                                                                    }
                                                                    , wphone1: {
                                                                        required: PhoneVal
                                                                        , isnumeric: true
                                                                        , maxlength: 5
                                                                    }
                                                                    , wphone2: {
                                                                        required: PhoneVal
                                                                        , isnumeric: true
                                                                        , maxlength: 4
                                                                    }
                                                                    , wphone3: {
                                                                        required: PhoneVal
                                                                        , isnumeric: true
                                                                        , maxlength: 4
                                                                    }
                                                                    , hphone1: {
                                                                        required: PhoneVal
                                                                        , isnumeric: true
                                                                        , maxlength: 5
                                                                    }
                                                                    , hphone2: {
                                                                        required: PhoneVal
                                                                        , isnumeric: true
                                                                        , maxlength: 4
                                                                    }
                                                                    , hphone3: {
                                                                        required: PhoneVal
                                                                        , isnumeric: true
                                                                        , maxlength: 4
                                                                    }
                                                                    , message: {
                                                                        required: true
                                                                    }
                                                                }
                                                                ,
                                                                messages: {
                                                                    dummy: {}
                                                                    , fname: {
                                                                        required: "please enter First Name."
                                                                        , maxlength: "Please enter under {0} characters."
                                                                                //,isalphanumeric : "Not include specific character"
                                                                    }
                                                                    , lname: {
                                                                        required: "please enter Last Name."
                                                                        , maxlength: "Please enter under {0} characters."
                                                                                //,isalphanumeric  : "Not include specific character"
                                                                    }



                                                                    , email: {
                                                                        required: "please enter Your Email Account."
                                                                        , isemail: "Is not an email format."
                                                                    }
                                                                    , email_confirm: {
                                                                        required: "please enter Your Email Account."
                                                                        , isemail: "Is not an email format."
                                                                        , equalTo: "Email and email confirmation is not the same value."
                                                                    }


                                                                    , mphone1: {
                                                                        required: "Invalid phone number."
                                                                        , isnumeric: "Invalid phone number."
                                                                        , maxlength: "Please enter under {0} numbers"
                                                                    }
                                                                    , mphone2: {
                                                                        required: "Invalid phone number."
                                                                        , isnumeric: "Invalid phone number."
                                                                        , maxlength: "Please enter under {0} numbers"
                                                                    }
                                                                    , mphone3: {
                                                                        required: "Invalid phone number."
                                                                        , isnumeric: "Invalid phone number."
                                                                        , maxlength: "Please enter under {0} numbers"
                                                                    }
                                                                    , wphone1: {
                                                                        required: "Invalid phone number."
                                                                        , isnumeric: "Invalid phone number."
                                                                        , maxlength: "Please enter under {0} numbers"
                                                                    }
                                                                    , wphone2: {
                                                                        required: "Invalid phone number."
                                                                        , isnumeric: "Invalid phone number."
                                                                        , maxlength: "Please enter under {0} numbers"
                                                                    }
                                                                    , wphone3: {
                                                                        required: "Invalid phone number."
                                                                        , isnumeric: "Invalid phone number."
                                                                        , maxlength: "Please enter under {0} numbers"
                                                                    }
                                                                    , hphone1: {
                                                                        required: "Invalid phone number."
                                                                        , isnumeric: "Invalid phone number."
                                                                        , maxlength: "Please enter under {0} numbers"
                                                                    }
                                                                    , hphone2: {
                                                                        required: "Invalid phone number."
                                                                        , isnumeric: "Invalid phone number."
                                                                        , maxlength: "Please enter under {0} numbers"
                                                                    }
                                                                    , hphone3: {
                                                                        required: "Invalid phone number."
                                                                        , isnumeric: "Invalid phone number."
                                                                        , maxlength: "Please enter under {0} numbers"
                                                                    }
                                                                    , message: {
                                                                        required: "Please enter the Message."
                                                                    }
                                                                }
                                                                ,
                                                                submitHandler: function (form) {
                                                                    var isSubmit = compDataReturn();
                                                                    if (isSubmit) {
                                                                        _user_data_ = getKeyInValue();
                                                                    }

                                                                    return false;
                                                                }
                                                            });
                                                            //show/hide phone or email key field
                                                            function viewContactMethod(method) {
                                                                var email = $("#datainfo-comp-form-email");
                                                                var email_confirm = $("#datainfo-comp-form-email-confirm");
                                                                var phone = $("#datainfo-comp-form-phone");

                                                                switch (method) {
                                                                    case "e" :
                                                                        email.show();
                                                                        email_confirm.show();
                                                                        phone.hide();

                                                                        $("#mphone1").val("");
                                                                        $("#mphone2").val("");
                                                                        $("#mphone3").val("");
                                                                        $("#wphone1").val("");
                                                                        $("#wphone2").val("");
                                                                        $("#wphone3").val("");
                                                                        $("#hphone1").val("");
                                                                        $("#hphone2").val("");
                                                                        $("#hphone3").val("");
                                                                        break;
                                                                    case "p" :
                                                                        email.hide();
                                                                        email_confirm.hide();
                                                                        phone.show();

                                                                        $("#email").val("");
                                                                        $("#email_confirm").val("");
                                                                        break;
                                                                }
                                                            }

                                                            //get message size
                                                            function keyInMessageSize(that) {
                                                                that = $(that);
                                                                var maxLen = parseInt("1000", 10);
                                                                var target = $("#datainfo-comp-form-message-count");
                                                                var text = that.val();
                                                                if (text.length >= maxLen) {
                                                                    that.val(text.substr(0, (maxLen - 1)));
                                                                }

                                                                target.text(text.length.toString().split(/(?=(?:\d{3})+(?:\.|$))/g).join(','));
                                                            }

                                                            //phone validation
                                                            function validationPhone() {
                                                                var isValidation = true;
                                                                var mphone = $("#mphone1").val() + $("#mphone2").val() + $("#mphone3").val();
                                                                var wphone = $("#wphone1").val() + $("#wphone2").val() + $("#wphone3").val();
                                                                var hphone = $("#hphone1").val() + $("#hphone2").val() + $("#hphone3").val();

                                                                if ($.trim(mphone) == "" && $.trim(wphone) == "" && $.trim(hphone) == "") {
                                                                    isValidation = false;
                                                                }

                                                                return isValidation;
                                                            }

                                                            //message validation
                                                            function validationMsg() {
                                                                var isValidation = true;
                                                                var msg = $("#message").val();

                                                                if ($.trim(msg) == "") {
                                                                    isValidation = false;
                                                                }

                                                                return isValidation;
                                                            }

                                                            //return data
                                                            function compDataReturn() {
                                                                var rt = true;
                                                                var useContactMethod = "true";
                                                                var usePhone = "true";

                                                                if ($("#pcategory").val() == "") {
                                                                    alert('Please Select Service');
                                                                    return false;
                                                                }
                                                                if (useContactMethod == "true" && getSelectValue("p_method") == "p") {
                                                                    if (!validationPhone()) {
                                                                        rt = false;
                                                                    }
                                                                } else if (useContactMethod == "false" && usePhone == "true") {
                                                                    if (!validationPhone()) {
                                                                        rt = false;
                                                                    }
                                                                }

                                                                if (!rt) {
                                                                    alert("please enter msg_alert_phone_number.");
                                                                }

                                                                if (rt && !validationMsg()) {
                                                                    alert("Please enter the Message.");
                                                                    $("#message").focus();
                                                                    rt = false;
                                                                }


                                                                return rt;
                                                            }

                                                            //form submit
                                                            function userdataInfoSubmit() {
                                                                $("form[name=datainfo-comp-form]").submit();
                                                            }

                                                            //set methods for data field
                                                            //makeSelectOption
                                                            function makeUserDataOptions(arg) {
                                                                var argLen = arg.length;
                                                                var opt = "";
                                                                if (argLen > 0) {
                                                                    for (var i = 0; i < argLen; i++) {
                                                                        opt += "<option value=\"" + arg[i][0] + "\">" + arg[i][1] + "</option>";
                                                                    }
                                                                }
                                                                return opt;
                                                            }

                                                            //set Service or Category
                                                            //@params - [ ["value1", "text1"], ["value2", "text2"], ["value3", "text3"] ];
                                                            var userdata_keyin_custom_categories = null;
                                                            function setCategories(arg) {
                                                                userdata_keyin_custom_categories = arg;
                                                                var argLen = arg.length;
                                                                var opt = "";
                                                                if (argLen > 0) {



                                                                }
                                                            }

                                                            //set PreferredTime
                                                            //@params - [ ["value1", "text1"], ["value2", "text2"], ["value3", "text3"] ];
                                                            var userdata_keyin_custom_prefer_time = null;
                                                            function setPreferredTime(arg) {
                                                                userdata_keyin_custom_prefer_time = arg;
                                                                var opt = makeUserDataOptions(arg);
                                                                $("select[name=ptime]").eq(0).html(opt).promise().done(function () {
                                                                    $(".form_select").resetSS();
                                                                });
                                                            }

                                                            //set title
                                                            //@params - [ ["value1", "text1"], ["value2", "text2"], ["value3", "text3"] ];
                                                            var userdata_keyin_custom_title = null;
                                                            function setTitle(arg) {
                                                                userdata_keyin_custom_title = arg;
                                                                var opt = makeUserDataOptions(arg);
                                                                $("select[name=title]").eq(0).html(opt).promise().done(function () {
                                                                    $(".form_select").resetSS();
                                                                });
                                                            }

                                                            //get <select> value
                                                            function getSelectValue(n) {
                                                                var jObj = $("#" + n);
                                                                return jObj.find("option:selected").val();
                                                            }

                                                            //get checkbox/radiobox value
                                                            function getRadioValue(n, type) {
                                                                var values = null;

                                                                if (type == "radio") {
                                                                    values = $("input[name='" + n + "']:checked").val();
                                                                } else if (type == "checkbox") {
                                                                    values = new Array();
                                                                    $("input[name='" + n + "']").each(function () {
                                                                        if ($(this).prop("checked")) {
                                                                            values.push($(this).val());
                                                                        }
                                                                    });
                                                                }

                                                                return values;
                                                            }

                                                            //get <select> text
                                                            function getTextByValue(v, cate) {
                                                                var rt = "";
                                                                var arr = null;

                                                                var value_arr = null;
                                                                var isValueArray = (v.indexOf(",") > -1) ? true : false;
                                                                if (isValueArray) {
                                                                    value_arr = v.split(",");
                                                                } else {
                                                                    value_arr = v;
                                                                }

                                                                switch (cate) {
                                                                    case "cate":
                                                                        arr = userdata_keyin_custom_categories;
                                                                        break;
                                                                    case "time":
                                                                        arr = userdata_keyin_custom_prefer_time;
                                                                        break;
                                                                    case "title":
                                                                        arr = userdata_keyin_custom_title;
                                                                        break;
                                                                }

                                                                if (arr != null && arr.length > 0) {
                                                                    for (var i = 0, iCnt = arr.length; i < iCnt; i++) {
                                                                        //arr[i][0] value
                                                                        //arg[i][1] text
                                                                        if (isValueArray) {
                                                                            for (var j = 0, jCnt = value_arr.length; j < jCnt; j++) {
                                                                                if (arr[i][0] == $.trim(value_arr[j])) {
                                                                                    rt += arr[i][1] + ", ";
                                                                                    break;
                                                                                }
                                                                            }
                                                                        } else {
                                                                            if ($.trim(value_arr) == arr[i][0]) {
                                                                                rt = arr[i][1];
                                                                                break;
                                                                            }
                                                                        }
                                                                    }

                                                                    if (isValueArray) {
                                                                        rt = rt.substr(0, rt.length - 2);
                                                                    }
                                                                }

                                                                return rt;
                                                            }

                                                            //user data to json
                                                            function getKeyInValue() {
                                                                var userData = {
                                                                    dummy: null
                                                                    , title: getSelectValue("title")
                                                                    , fname: $("#fname").val()
                                                                    , lname: $("#lname").val()
                                                                    , p_method: getSelectValue("p_method")
                                                                    , email: $("#email").val()
                                                                    , email_confirm: $("#email_confirm").val()
                                                                    , mphone1: $("#mphone1").val()
                                                                    , mphone2: $("#mphone2").val()
                                                                    , mphone3: $("#mphone3").val()
                                                                    , wphone1: $("#wphone1").val()
                                                                    , wphone2: $("#wphone2").val()
                                                                    , wphone3: $("#wphone3").val()
                                                                    , hphone1: $("#hphone1").val()
                                                                    , hphone2: $("#hphone2").val()
                                                                    , hphone3: $("#hphone3").val()
                                                                    , message: filterXSS($("#message").val())
                                                                            //, message : $("#message").val()
                                                                };
                                                                delete userData["dummy"];
                                                                return userData;
                                                            }
                                                            //clear key-in field
                                                            function resetUserDataKeyIn() {
                                                                $("form[name=datainfo-comp-form]").eq(0).find("input, select, textarea").each(function () {
                                                                    var ele = $(this).get(0);
                                                                    var tagName = ele.tagName.toLowerCase();
                                                                    var tagType = $(ele).attr("type");

                                                                    if (tagName == "select") {
                                                                        $(ele).find("option").eq(0).attr("selected", "selected");
                                                                        $(ele).trigger("change");
                                                                    } else if (tagName == "input") {
                                                                        if (tagType != undefined) {
                                                                            if (tagType == "text") {
                                                                                $(ele).val("");
                                                                            } else if (tagType == "checkbox") {
                                                                                $(ele).prop("checked", false);
                                                                            } else if (tagType == "radio") {
                                                                                $(ele.attr("name")).eq(0).prop("checked", false);
                                                                            }
                                                                        }
                                                                    } else if (tagName == "textarea") {
                                                                        $(ele).val("").trigger("keyup");
                                                                    }
                                                                });
                                                                $(".form_select").resetSS();
                                                            }
                                                            $(document).ready(function () {
                                                                //contact method init
                                                                viewContactMethod("e");
                                                            });
                                    </script>
                                </div>
                            </div>
                            <div class="cuBtn">
                                <a href="#reset" class="btnMedium btnType3" onclick="resetUserDataKeyIn()"><span class="btnIcon arrow_r">Cancel</span></a>
                                <a href="#submit" class="btnMedium btnType1" ng-click="validation('1', '2', true)"><span class="btnIcon arrow_r">Submit</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="inner contact_us" ng-show="step == 2">
                        <div class="finishTop">
                            <div class="contBox">
                                <p class="finishTxt">Thank you for your interest in our services.<br>We will contact you through your preferred method of contact.</p>
                            </div>
                        </div>
                        <div class="cuFinishBtm">
                            <strong>Hello, {{title}} {{fname}} {{lname}}!</strong>
                            <p>Thanks for the continued interest hope Hunger Offering to help.<br> give you a quick answer to your input submitted by Email. Thank you.</p>
                        </div>
                        <div class="btn_area">
                            <a href="http://org-www.kia.com/content/kwcms/gt/en.html" class="btnMedium btnType1" ng-click="send($event)"><span class="btnIcon arrow_r">Complete</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>