<div id="vmodal" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="vouchertypemodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="vouchertypemodalLabel">Voucher Type</h4>
                <button type="button" class="close" data-dismiss="modal"
                    aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class=" col-12 form-group mb-4">
                        <select class="form-control vtypes" id="vtype" name="vtype" required>
                            <option value="" selected disabled>Select...</option>
                            <option value="1">Advertisement/Subscription</option>
                            <option value="2">Catering</option>
                            <option value="3">COVID Compensation</option>
                            <option value="4">Drugs and Meds</option>
                            <option value="5">Equipment</option>
                            <option value="6">Infra/Construction</option>
                            <option value="7">Office Supplies</option>
                            <option value="8">MAIP</option>
                            <option value="9">Remittances</option>
                            <option value="10">Repairs and Maintenance</option>
                            <option value="11">Salary and Benefits</option>
                            <option value="12">Scholarship</option>
                            <option value="13" disabled>Travel Expenses Voucher(TEV)</option>
                            <option value="14">Van Rental</option>
                            <option value="15">Utility Expenses</option>
                        </select>
                    </div>
                    <div class="inputvoucher col-12 form-group"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger d-none btnpreview" data-toggle="modal" data-target="#right-modal">Preview</button>
                <button type="submit" class="btn btn-primary btn-save d-none" form="">Save</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div id="right-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header border-0">
                <ul class="nav nav-pills bg-nav-pills mb-3">
                    <li class="nav-item" style="z-index: 99999;">
                        <a href="#disvoucher" data-toggle="tab" aria-expanded="false" class="nav-link active prt" data-id="pagealldv">
                            <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                            <span class="d-none d-lg-block">Disbursement Voucher</span>
                        </a>
                    </li>
                    <li class="nav-item" style="z-index: 999999;">
                        <a href="#oblivoucher" data-toggle="tab" aria-expanded="true"
                            class="nav-link prt" data-id="oballpage">
                            <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                            <span class="d-none d-lg-block">Obligation Request and Status</span>
                        </a>
                    </li>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="tab-content">
                    <div class="tab-pane show active" id="disvoucher">
                    </div>
                    <div class="tab-pane" id="oblivoucher">
                        @include('vouchers.forms.oball')
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning printdocu"><i class="fas fa-print"></i>&nbsp;Print</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->