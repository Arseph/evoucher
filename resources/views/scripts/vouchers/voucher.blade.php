<script>
$( document ).ready(function() {
    $('#vouchertypemodal').modal('show');
});
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
var prt = "pagealldv";
var vtype;
$('.prt').click(function() {
    prt = $(this).attr('data-id');
});
$('.printdocu').click(function() {
    $('.'+prt).printThis();
});
$('.vtypes').on('change', function() {
    vtype = this.value;
  $.ajax({
        url:  "{{ url('sel-voucher') }}",
        type: "GET",
        data: {vtype: this.value},
        success: function(data){
            $('.inputvoucher').html(data)
            $('.btnpreview').removeClass('d-none')
            $('.btn-save').removeClass('d-none')
            if(this.value != "13") {
                $('.btn-save').attr('form', 'allv_form')
            }
        },
        error: function (data) {
            console.log(data)
        },
    });
});
$('.btnpreview').click(function() {
    var req;
    var s_id = $( "#supervisor_id option:selected" ).val();
    $("#allv_form").find('.required').each(function () {
        if ($(this).val() == '') {
            req = 'y';
        }
    });
    if(req) {
        $.toast({
            heading: 'Required',
            text: 'Please fill out all required fields',
            position: 'top-center'
        })
    } else if(s_id == '') {
        $.toast({
            heading: 'Required',
            text: 'Please fill out all required fields',
            position: 'top-center'
        })
    } else {
        $.ajax({
            url:  "{{ url('prevoucher') }}",
            type: "GET",
            data: {
                vtype: vtype,
                val: getFormData($('#allv_form')),
                supervisor_id: $( "#supervisor_id option:selected" ).val()
            },
            success: function(data){
                $('#pre-modal').modal('show');
                if (vtype != '13') {
                    $('#disvoucher').html(data)
                    $.ajax({
                        url:  "{{ url('preob') }}",
                        type: "GET",
                        data: {
                            vtype: vtype,
                            val: getFormData($('#allv_form')),
                            supervisor_id: $( "#supervisor_id option:selected" ).val()
                        },
                        success: function(data){
                            if (vtype != '13') {
                                $('#oblivoucher').html(data)
                            }
                        },
                        error: function (data) {
                            $.toast({
                                heading: 'Error',
                                text: 'Something went wrong, Please contact administrator',
                                position: 'top-center',
                                icon: 'error'
                            })
                        },
                    });
                }
            },
            error: function (data) {
                console.log(data)
            },
        });
    }
});
$('.preview-dv-ob').click(function() {
    var id = $(this).attr('data-id');
    $.ajax({
            url:  "{{ url('prevoucher') }}",
            type: "GET",
            data: {v_id: id},
            success: function(data){
                $('#pre-modal').modal('show');
                $('#disvoucher').html(data)
                $.ajax({
                    url:  "{{ url('preob') }}",
                    type: "GET",
                    data: {v_id: id},
                    success: function(data){
                        $('#oblivoucher').html(data)
                    },
                    error: function (data) {
                        $.toast({
                            heading: 'Error',
                            text: 'Something went wrong, Please contact administrator',
                            position: 'top-center',
                            icon: 'error'
                        })
                    },
                });
            },
            error: function (data) {
                console.log(data)
            },
        });
});
$('.edit-dv-ob').click(function() {
    var id = $(this).attr('data-id');
    vtype = $(this).attr('data-vtype-id');
       $.ajax({
            url:  "{{ url('sel-voucher') }}",
            type: "GET",
            data: {v_id: id},
            success: function(data){
                $('#vmodal').modal('show');
                $('.inputvoucher').html(data)
                $('.btnpreview').removeClass('d-none')
                $('.btn-save').removeClass('d-none')
                $('#vtype').val(vtype)
                if(this.value != "13") {
                    $('.btn-save').attr('form', 'allv_form')
                }
            },
            error: function (data) {
                $.toast({
                    heading: 'Error',
                    text: 'Something went wrong, Please contact administrator',
                    position: 'top-center',
                    icon: 'error'
                })
            },
        });
});
</script>