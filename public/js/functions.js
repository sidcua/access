function ajaxPOST(url, data, response_callback, failed_callback){

	if(typeof data === 'object'){
		data._token = token;
	}else{
		data += '&_token='+token;
	}

	$.ajax({
	    url: url,
		type: "POST",
		data: data,
		dataType: "json",
	    success: function(data){
			if(response_callback){
				response_callback(data);
			}
		},
		error: function(data){
            if(failed_callback != null) {
                failed_callback(data);
            }
        }
	});
}

function ajaxGET(url, data, response_callback, failed_callback){

	if(typeof data === 'object'){
		data._token = token;
	}else{
		data += '&_token='+token;
	}

	$.ajax({
	    url: url,
		type: "GET",
		data: data,
		dataType: "json",
	    success: function(data){
			if(response_callback){
				response_callback(data);
			}
		},
		error: function(data){
            if(failed_callback != null) {
                failed_callback(data);
            }
        }
	});
}

function addAccount(){
	var form = $('#add-account-form').serialize();
	ajaxPOST('/addAccount', form, function(response){
		if(response.status == 1){
			$('#addAccount-error').show();
			$('#addAccount-error').html('');
			$.each(response.errors, function(key, value){
				$("#addAccount-error").append(value + "<br>")
			});
		}else{
			$("#addAccount").modal('hide');
			listAccount();
		}
	});
}

//Accounts
var accounts = [];

function listAccount(){
	ajaxGET('/listAccount', '', function(response){
		$("#tblAccount").html('');
		accounts = response;
		var i = 0;
		$.each(response, function(key, value){
			$("#tblAccount").append('<tr data-id="' + value.accountID + '"><td>' + value.name + '</td><td>' + value.position + '</td><td><button data-index="'+i+'" class="mx-2 btn btn-light edit-account-button" data-toggle="modal" data-target="#editAccount"><i class="fas fa-edit text-warning"></i></button><button data-id="' + value.accountID + '" data-index="'+i+'" class="mx-2 btn btn-light delete-account-btn" data-toggle="modal" data-target="#deleteAccount"><i class="fas fa-trash text-danger"></i></button></td></tr>');
			i+=1;
		})
	});
}
function listPosition(){
	ajaxGET('/listPosition', '', function(response){
		$("#slctposition").html('');
		$.each(response, function(key, value){
			$("#slctposition").append('<option value="' + value.positionID + '">' + value.position + '</option>');
		})
	})
}

function deleteAccount(id){
	ajaxPOST('/deleteAccount', {id: id, _token: token}, function(response){
		alert(1);
		listAccount();
		$("#deleteAccount").modal('hide');
	});
}