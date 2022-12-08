<style>
  .req-field:before {
    content:" *";
    color: red;
  }
</style>
<form id="allv_form" method="POST">
	{{csrf_field()}}
	<div class="form-body">
		<input type="hidden" name="v_id" value="@if($v){{$v->id}}@endif">
        <div class="row">
            <div class="col-md-12">
            	<h6 class="card-subtitle req-field">Payee:</h6>
                <div class="form-group">
                    <input type="text" class="form-control required" name="payee" value="@if($v){{$v->payee}}@endif" required>
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle">Tin no:</h6>
                <div class="form-group">
                    <input type="text" class="form-control" name="tin_no" value="@if($v){{$v->tin_no}}@endif">
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle">Ors Burs No.:</h6>
                <div class="form-group">
                    <input type="text" class="form-control" name="ors_burs" value="@if($v){{$v->ors_burs}}@endif">
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle">Office:</h6>
                <div class="form-group">
                    <input type="text" class="form-control" name="office" value="@if($v){{$v->office}}@endif">
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle">Address:</h6>
                <div class="form-group">
                    <input type="text" class="form-control" name="address" value="@if($v){{$v->address}}@endif">
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle req-field">Particulars:</h6>
                <div class="form-group">
                    <textarea class="form-control required" name="particulars" required>@if($v){{$v->particulars}}@endif</textarea>
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle">Responsibility Center:</h6>
                <div class="form-group">
                    <input type="text" class="form-control" name="response_center" value="@if($v){{$v->response_center}}@endif">
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle">MFO/PAP:</h6>
                <div class="form-group">
                    <input type="text" class="form-control" name="mfo_pap" value="@if($v){{$v->mfo_pap}}@endif">
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle">UACS Object:</h6>
                <div class="form-group">
                    <input type="text" class="form-control" name="uacs" value="@if($v){{$v->uacs}}@endif">
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle req-field">Amount:</h6>
                <div class="form-group">
                    <input type="text" class="form-control required" name="amount" value="@if($v){{$v->amount}}@endif" required>
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle">Supporting Documents:<code>if it is more than 1, please separate it with vertical bar(|)</code></h6>
                <div class="form-group">
                    <input type="text" class="form-control" name="support_docu" value="@if($v){{$v->support_docu}}@endif">
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle req-field">Supervisor:</h6>
                <div class="form-group">
                    <select class="form-control vtypes required" id="supervisor_id" name="supervisor_id" required>
                            <option value="" selected disabled>Select...</option>
                            @foreach($svisors as $s)
                            <option value="{{$s->id}}" @if($v)@if($v->supervisor_id == $s->id)selected @endif @endif>{{$s->name}}</option>
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
                    <input type="text" class="form-control" name="obligated" value="CRISTY LORRAINE E. DIAZON, CPA" readonly>
                </div>
            </div>
            <div class="col-md-12">
            	<h6 class="card-subtitle req-field">Position:</h6>
                <div class="form-group">
                    <input type="text" class="form-control" name="ob_position" value="Administrative Officer V/Budget Officer III" readonly>
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
<script>
$('#allv_form').on('submit',function(e){
    e.preventDefault();
    $('#allv_form').ajaxSubmit({
        url:  "{{ url('ae-voucher') }}",
        type: "POST",
        data: {
        	vtype: $('.vtypes').val()
        },
        success: function(data){
            $.toast({
	            heading: 'Save',
	            text: 'Successfully added voucher.',
	            position: 'top-center',
	            icon: 'success',
	            afterShown: function () {
			        setTimeout(function(){
		                window.location.reload(false);
		            },500);
			    },
	        })
        },
        error: function (data) {
            $.toast({
                heading: 'Required',
                text: 'Something went wrong, Please contact administrator',
                position: 'top-center',
                icon: 'error'
            })
        },
    });
});
</script>