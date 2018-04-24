var request;
$(function() {
    $("#login").submit(function(e){

    e.preventDefault();

    var form = $(this);
    var inputs = form.find("input");
    var serializedData = form.serialize();
    inputs.prop("disabled", true);

    request = $.ajax({
        url: "/login/default",
        type: "post",
        data: serializedData
    });

    request.done(function(e) {
        console.log(e);
        location.reload();
    })
    .fail(function() {
        alert( "error" );
    })
    .always(function() {
        inputs.prop("disabled", false);
    });
});
});

$(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
    })
});

//iCheck for checkbox and radio inputs
$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass   : 'iradio_minimal-blue'
});
//Red color scheme for iCheck
$('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
    checkboxClass: 'icheckbox_minimal-red',
    radioClass   : 'iradio_minimal-red'
});
//Flat red color scheme for iCheck
$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
    checkboxClass: 'icheckbox_flat-green',
    radioClass   : 'iradio_flat-green'
});