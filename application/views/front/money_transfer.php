<div class="flights-banner"></div>
<div class='container-fluid home-0'>
    <section class="product-detail col-xs-12" style="transform: none;">
        <div class="container about transfers" style="transform: none;">
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-success" style="display: none;"></div>
                    <div class="stepwizard">
                        <div class="stepwizard-row setup-panel">
                            <div class="stepwizard-step">
                                <a href="#step1" type="button" class="btn btn-primary btn-circle">1</a>
                                <p>Your Information</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step2" id="btn2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                <p>Send Money / Direct to Bank Account</p>
                            </div>
                        </div>
                    </div>
                    <form role="form" class="form-horizontal" id="money_transfer" method="post" action="<?= base_url('send_money') ?>">
                        <div class="setup-content row" id="step1">
                            <div class="col-sm-12">
                                <h3 class="sans text-green">Your Information</h3>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">First Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" required="required" class="form-control" name="first_name" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Middle Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" required="required" class="form-control" name="middle_name" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Last Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" required="required" class="form-control" name="last_name" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Phone No.</label>
                                    <div class="col-sm-10">
                                        <input type="text" required="required" class="form-control" name="phone" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Your Address</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" required="required" name="address"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">City</label>
                                    <div class="col-sm-10">
                                        <input type="text" required="required" class="form-control" name="city" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">State</label>
                                    <div class="col-sm-10">
                                        <input type="text" required="required" class="form-control" name="state" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Country</label>
                                    <div class="col-sm-10">
                                        <input type="text" required="required" class="form-control" name="country" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nationality</label>
                                    <div class="col-sm-10">
                                        <input type="text" required="required" class="form-control" name="nationality" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn carrot-btn nextBtn pull-right" type="button" >Next</button>
                                </div>
                            </div>
                        </div>
                        <div class="setup-content row" id="step2">
                            <div class="col-sm-12">
                                <h3 class="sans text-green">Send Money</h3>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Account to be sent</label>
                                    <div class="col-sm-10">
                                        <input type="text" required="required" class="form-control" name="account_sent" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Receiver First Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" required="required" class="form-control" name="r_first_name" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Receiver Middle Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" required="required" class="form-control" name="r_middle_name" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Receiver Last Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" required="required" class="form-control" name="r_last_name" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">City</label>
                                    <div class="col-sm-10">
                                        <input type="text" required="required" class="form-control" name="r_city" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">State</label>
                                    <div class="col-sm-10">
                                        <input type="text" required="required" class="form-control" name="r_state" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Country</label>
                                    <div class="col-sm-10">
                                        <input type="text" required="required" class="form-control" name="r_country" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Transaction Purpose</label>
                                    <div class="col-sm-10">
                                            <input type="text" required="required" class="form-control" name="transaction_purpose" />
                                    </div>
                                </div>
                                <h3 class="sans text-green">Direct To Bank Account</h3>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Bank Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="bank_name" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Beneficiary Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="beneficiary_name" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Account Number</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="account_number" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Routing</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="ifsc_code" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Bank Account Type</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="account_type" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button id="send_money" class="btn carrot-btn pull-right" type="button" >Finish</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>