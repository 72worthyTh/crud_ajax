loaddata();
$('#delete').hide();
//fonction pour affichages des donnees
function loaddata() {
    var view = 'view';
    $.ajax({
        type: "POST",
        url: "ajax.php",
        data: { view: view },
        success: function(response) {
            $('#block').html(response);
        }
    });
}
$('#code').keyup(function() {
    livedata();

});

//fonction pour examiner le code si il existe deja dans la base de donnees

function livedata() {
    var code = $('#code').val();
    $.ajax({
        type: "POST",
        url: "ajaxone.php",
        data: { code: code },
        success: function(response) {
            if (response != 1) {
                var res = response.split("*#€%&");
                $('#idp').val(res[0]);
                $('#code').val(res[1]);
                $('#nom').val(res[2]);
                $('#prenom').val(res[3]);
                $('#mail').val(res[4]);
                $('#sexe').val(res[5]);
                $('#age').val(res[6]);
                $('#save').html('Modifier');
                $("card-header").html('Modification');
                $('#delete').show();
                //alert(response);
            } else {
                $("card-header").html('Enregistrement');
                $('#save').html('save');
                $('#delete').hide();
            }
            loaddata();
        }
    });
}

function getedatarow(code) {
    $.ajax({
        type: "POST",
        url: "ajaxone.php",
        data: { code: code },
        success: function(response) {
            if (response != 1) {
                var res = response.split("*#€%&");
                $('#idp').val(res[0]);
                $('#code').val(res[1]);
                $('#nom').val(res[2]);
                $('#prenom').val(res[3]);
                $('#mail').val(res[4]);
                $('#sexe').val(res[5]);
                $('#age').val(res[6]);
                $('#acte').val(0);

                $('#save').html('Modifier');
                $('#delete').show();
                //alert(response);
            } else {
                $('#save').html('save');
                $('#delete').hide();
            }
        }
    });
}





function traiter() {
    $.ajax({
        url: "ajaxtraitement.php",
        method: "POST",
        data: $('#formp').serialize(),
        beforeSend: function() {
            $('#response').html('<span class="text-info">Loading response...</span>');
        },
        success: function(data) {
            loaddata();
            $('form').trigger("reset");
            $('#response').fadeIn().html(data);
            setTimeout(function() {
                $('#response').fadeOut("slow");
            }, 5000);
        }
    });
}

function deletep() {
    $('#acte').val(1);
    $.ajax({
        url: "ajaxtraitement.php",
        method: "POST",
        data: $('#formp').serialize(),
        beforeSend: function() {
            $('#response').html('<span class="text-info">Loading response...</span>');
        },
        success: function(data) {
            loaddata();
            $('form').trigger("reset");
            $('#response').fadeIn().html(data);
            setTimeout(function() {
                $('#response').fadeOut("slow");
            }, 5000);
        }
    });
}