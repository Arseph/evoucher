<style>
  .req-field:before {
    content:" *";
    color: red;
  }
</style>
<form id="allv_form" method="POST">
	@csrf
	<div class="form-body">
		<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
		<input type="hidden" name="v_id">
        <div class="row">
            <div class="col-md-12">
            	<h6 class="card-subtitle req-field">Payee:</h6>
                <div class="form-group">
                    <input type="text" class="form-control required" name="payee" required>
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle">Tin no:</h6>
                <div class="form-group">
                    <input type="text" class="form-control" name="tin_no">
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle">Ors Burs No.:</h6>
                <div class="form-group">
                    <input type="text" class="form-control" name="ors_burs">
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle">Office:</h6>
                <div class="form-group">
                    <input type="text" class="form-control" name="office">
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle">Address:</h6>
                <div class="form-group">
                    <input type="text" class="form-control" name="address">
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle req-field">Particulars:</h6>
                <div class="form-group">
                    <textarea class="form-control required" name="particulars" required></textarea>
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle">Responsibility Center:</h6>
                <div class="form-group">
                    <input type="text" class="form-control" name="response_center">
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle">MFO/PAP:</h6>
                <div class="form-group">
                    <input type="text" class="form-control" name="mfo_pap">
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle">UACS Object:</h6>
                <div class="form-group">
                    <input type="text" class="form-control" name="uacs_object">
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle req-field">Amount:</h6>
                <div class="form-group">
                    <input type="text" class="form-control required" name="amount" required>
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle">Supporting Documents:<code>if it is more than 1, please separate it with vertical bar(|)</code></h6>
                <div class="form-group">
                    <input type="text" class="form-control" name="support_docu">
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle req-field">Supervisor:</h6>
                <div class="form-group">
                    <select class="form-control vtypes required" id="supervisor_id" name="supervisor_id" required>
                            <option value="" selected disabled>Select...</option>
                            @foreach($svisors as $s)
                            <option value="{{$s->id}}">{{$s->name}}</option>
                            @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle req-field">Accounting Unit:</h6>
                <div class="form-group">
                    <input type="text" class="form-control" name="acc_unit" value="CHERRY PINK P. DIOCERA, CPA" readonly>
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle req-field">Position:</h6>
                <div class="form-group">
                    <input type="text" class="form-control" name="acc_position" value="Accountant III" readonly>
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle req-field">Allotment Available & Obligated:</h6>
                <div class="form-group">
                    <input type="text" class="form-control" name="allotment" value="CRISTY LORRAINE E. DIAZON, CPA" readonly>
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle req-field">Position:</h6>
                <div class="form-group">
                    <input type="text" class="form-control" name="allotment" value="Administrative Officer V/Budget Officer III" readonly>
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle req-field">Agency Head:</h6>
                <div class="form-group">
                    <input type="text" class="form-control" name="agency_head" value="ARISTIDES CONCEPCION TAN, MD, MPH, CESO III" readonly>
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle req-field">Position:</h6>
                <div class="form-group">
                    <input type="text" class="form-control" name="agency_head_designation" value="Director IV" readonly>
                </div>
            </div>
        </div>
	</div>
</form>