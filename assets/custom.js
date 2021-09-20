var base_url = "http://localhost/E-pus/";
//var base_url = "http://www.puskessb.com/";
//var base_url = "http://103.30.247.220/";
// var base_url = "";

//$.fn.datebox.defaults.formatter = function(date){
	//console.log(date);
	// var y = date.getFullYear();
	// var m = date.getMonth()+1;
	// var d = date.getDate();
	// return y+'/'+m+'/'+d;
//}

function stock_color_datagrid(min_qty,qty){
	
	if(min_qty > qty){
		// var color = "background-color:#f0dbdb;color:#491d1d;"
  //                       +"background: -webkit-linear-gradient(#f8eded, #f0dbdb); "
  //                       +"background: -o-linear-gradient(#f8eded, #f0dbdb);"
  //                       +"background: -moz-linear-gradient(#f8eded, #f0dbdb);"
  //                       +"background: linear-gradient(#f8eded, #f0dbdb);";
  		var color  	= "background-color:#FF9933";
	}else{
		// var color = "background-color:#ffcce6;color:#5b2424;"
  //                       +"background: -webkit-linear-gradient(#ffe5f2, #ffcce6);"
  //                       +"background: -o-linear-gradient(#ffe5f2, #ffcce6);"
  //                       +"background: -moz-linear-gradient(#ffe5f2, #ffcce6);"
  //                       +"background: linear-gradient(#ffe5f2, #ffcce6);";
  		var color  	= "";
	}

	return color;
}

function islock_color_datagrid(val){
	if(val > 0){
		// var color = "background-color:#f0dbdb;color:#491d1d;"
  //                       +"background: -webkit-linear-gradient(#f8eded, #f0dbdb); "
  //                       +"background: -o-linear-gradient(#f8eded, #f0dbdb);"
  //                       +"background: -moz-linear-gradient(#f8eded, #f0dbdb);"
  //                       +"background: linear-gradient(#f8eded, #f0dbdb);";
  		var color  	= "background-color:#FF9933";
	}else{
		// var color = "background-color:#ffcce6;color:#5b2424;"
  //                       +"background: -webkit-linear-gradient(#ffe5f2, #ffcce6);"
  //                       +"background: -o-linear-gradient(#ffe5f2, #ffcce6);"
  //                       +"background: -moz-linear-gradient(#ffe5f2, #ffcce6);"
  //                       +"background: linear-gradient(#ffe5f2, #ffcce6);";
  		var color  	= "";
	}

	return color;
}

function addPanel(title,link){

	if($('#tt').tabs('exists', title)){

		$('#tt').tabs('close',title);

	    $('#tt').tabs('add',{
	        title: title,
	        content: '<iframe src="'+link+'"style="height:460px;width:100%;border:none;" scrolling="no"></iframe>',
	        closable: true
	    });

	}else{

		$('#tt').tabs('add',{
	        title: title,
	        content: '<iframe src="'+link+'"style="height:460px;width:100%;border:none;" scrolling="no"></iframe>',
	        closable: true
	    });

	}
}

function editPanel(title,link,no_transaction){

	var no_trans 	= no_transaction.replace(/\//g,"__");
	var url 		= link + '/' + no_trans;

	if($('#tt').tabs('exists', title)){

		$('#tt').tabs('close',title);

	    $('#tt').tabs('add',{
	        title: title,
	        content: '<iframe src="'+url+'"style="height:460px;width:100%;border:none;" scrolling="no"></iframe>',
	        closable: true
	    });

	}else{

		$('#tt').tabs('add',{
	        title: title,
	        content: '<iframe src="'+url+'"style="height:460px;width:100%;border:none;" scrolling="no"></iframe>',
	        closable: true
	    });

	}
}

function printPanel(title,link,mn,from_date,to_date,TransStatus,warehouse,vendor,customer,department,vendor_name){

	if(mn=='do' || mn=='ri' || mn=='ia' || mn=='mi'){
		from_date 			= from_date.replace(/\//g,"__");
		to_date 			= to_date.replace(/\//g,"__");
		var stringStatus    = TransStatus.toString();
		var arrStatus 		= stringStatus.replace(/,/g,"__");
		var url 			= link + '/' + from_date + '/'+ to_date + '/' + arrStatus;
	}else if(mn=='st'){
		var url 			= link + '/' + warehouse;
	}else if(mn=='pi' || mn=='pp' || mn=='po' || mn=='pr'){
		from_date 			= from_date.replace(/\//g,"__");
		to_date 			= to_date.replace(/\//g,"__");
		var stringStatus    = TransStatus.toString();
		var arrStatus 		= stringStatus.replace(/,/g,"__");
		var url 			= link + '/' + from_date + '/'+ to_date + '/' + arrStatus + '/' + vendor;
	}else if(mn=='si' || mn=='sp' || mn=='sq' || mn=='so' || mn=='sr'){
		from_date 			= from_date.replace(/\//g,"__");
		to_date 			= to_date.replace(/\//g,"__");
		var stringStatus    = TransStatus.toString();
		var arrStatus 		= stringStatus.replace(/,/g,"__");
		var url 			= link + '/' + from_date + '/'+ to_date + '/' + arrStatus + '/' + customer;
	}else if(mn=='pq'){
		from_date 			= from_date.replace(/\//g,"__");
		to_date 			= to_date.replace(/\//g,"__");
		var stringStatus    = TransStatus.toString();
		var arrStatus 		= stringStatus.replace(/,/g,"__");
		var url 			= link + '/' + from_date + '/'+ to_date + '/' + arrStatus + '/' + department;
	}else if(mn=='hd'){
		from_date 			= from_date.replace(/\//g,"__");
		to_date 			= to_date.replace(/\//g,"__");
		if(vendor_name == ''){
			vendor_name = 'no';
		}
		if(vendor == ''){
			vendor = 'no';
		}
		var url 			= link + '/' + from_date + '/'+ to_date + '/' + vendor + '/' + vendor_name;
	}else if(mn=='hd2'){
		from_date 			= from_date.replace(/\//g,"__");
		to_date 			= to_date.replace(/\//g,"__");
		if(vendor_name == ''){
			vendor_name = 'no';
		}
		if(vendor == ''){
			vendor = 'no';
		}
		var url 			= link + '/' + 'no' + '/'+ 'no' + '/' + vendor + '/' + vendor_name;
	}else if(mn=='pd'){
		from_date 			= from_date.replace(/\//g,"__");
		to_date 			= to_date.replace(/\//g,"__");
		if(vendor_name == ''){
			vendor_name = 'no';
		}
		if(vendor == ''){
			vendor = 'no';
		}
		var url 			= link + '/' + from_date + '/'+ to_date + '/' + vendor + '/' + vendor_name; // vendor disini adalah customer
	}else if(mn=='pd2'){
		from_date 			= from_date.replace(/\//g,"__");
		to_date 			= to_date.replace(/\//g,"__");
		if(vendor_name == ''){
			vendor_name = 'no';
		}
		if(vendor == ''){
			vendor = 'no';
		}
		var url 			= link + '/' + 'no' + '/'+ 'no' + '/' + vendor + '/' + vendor_name;// vendor disini adalah customer
	}else if(mn=='hi'){
		from_date 			= from_date.replace(/\//g,"__");
		to_date 			= to_date.replace(/\//g,"__");
		var stringStatus    = TransStatus.toString();
		var arrStatus 		= stringStatus.replace(/,/g,"__");
		if(vendor_name == ''){
			vendor_name = 'no';
		}
		if(vendor == ''){
			vendor = 'no';
		}
		var url 			= link + '/' + from_date + '/'+ to_date + '/' + vendor + '/' + vendor_name+'/'+arrStatus; // vendor disini adalah item dan object
	}else if(mn=='hi2'){
		from_date 			= from_date.replace(/\//g,"__");
		to_date 			= to_date.replace(/\//g,"__");
		var stringStatus    = TransStatus.toString();
		var arrStatus 		= stringStatus.replace(/,/g,"__");
		if(vendor_name == ''){
			vendor_name = 'no';
		}
		if(vendor == ''){
			vendor = 'no';
		}
		var url 			= link + '/' + 'no' + '/'+ 'no' + '/' + vendor + '/' + vendor_name+'/'+arrStatus;// vendor disini adalah item dan object
	}else if(mn=='lb'){
		from_date 			= from_date.replace(/\//g,"__");
		to_date 			= to_date.replace(/\//g,"__");
		if(vendor_name == ''){
			vendor_name = 'no';
		}
		if(vendor == ''){
			vendor = 'no';
		}
		var url 			= link + '/' + from_date + '/'+ to_date + '/' + vendor + '/' + vendor_name; // vendor disini adalah invnumber dan customername
	}else if(mn=='lb2'){
		from_date 			= from_date.replace(/\//g,"__");
		to_date 			= to_date.replace(/\//g,"__");
		if(vendor_name == ''){
			vendor_name = 'no';
		}
		if(vendor == ''){
			vendor = 'no';
		}
		var url 			= link + '/' + 'no' + '/'+ 'no' + '/' + vendor + '/' + vendor_name;// vendor disini adalah invnumber dan customername
	}else if(mn=='ks'){
		vendor 				= vendor.replace(/\//g,"__");
		from_date 			= from_date.replace(/\//g,"__");
		to_date 			= to_date.replace(/\//g,"__");
		var stringStatus    = TransStatus.toString();
		var arrStatus 		= stringStatus.replace(/,/g,"__");
		if(vendor_name == ''){
			vendor_name = 'no';
		}
		if(vendor == ''){
			vendor = 'no';
		}
		var url 			= link + '/' + from_date + '/'+ to_date + '/' + vendor + '/' + vendor_name+'/'+arrStatus; // vendor disini adalah KSNumber dan UnitCode
	}else if(mn=='ks2'){
		vendor 				= vendor.replace(/\//g,"__");
		from_date 			= from_date.replace(/\//g,"__");
		to_date 			= to_date.replace(/\//g,"__");
		var stringStatus    = TransStatus.toString();
		var arrStatus 		= stringStatus.replace(/,/g,"__");
		if(vendor_name == ''){
			vendor_name = 'no';
		}
		if(vendor == ''){
			vendor = 'no';
		}
		var url 			= link + '/' + 'no' + '/'+ 'no' + '/' + vendor + '/' + vendor_name+'/'+arrStatus;// vendor disini adalah KSNumber dan UnitCode
	}else if(mn=='su'){
		from_date 			= from_date.replace(/\//g,"__");
		to_date 			= to_date.replace(/\//g,"__");
		if(vendor_name == ''){
			vendor_name = 'no';
		}
		if(vendor == ''){
			vendor = 'no';
		}
		var url 			= link + '/' + from_date + '/'+ to_date + '/' + vendor + '/' + vendor_name; // vendor disini adalah unit
	}else if(mn=='su2'){
		from_date 			= from_date.replace(/\//g,"__");
		to_date 			= to_date.replace(/\//g,"__");
		if(vendor_name == ''){
			vendor_name = 'no';
		}
		if(vendor == ''){
			vendor = 'no';
		}
		var url 			= link + '/' + 'no' + '/'+ 'no' + '/' + vendor + '/' + vendor_name;// vendor disini adalah unit
	}else if(mn=='dep'){
		vendor 				= vendor.replace(/\//g,"__");
		from_date 			= from_date.replace(/\//g,"__");
		to_date 			= to_date.replace(/\//g,"__");
		var stringStatus    = TransStatus.toString();
		var arrStatus 		= stringStatus.replace(/,/g,"__");
		if(vendor_name == ''){
			vendor_name = 'no';
		}
		if(vendor == ''){
			vendor = 'no';
		}
		var url 			= link + '/' + from_date + '/'+ to_date + '/' + vendor + '/' + vendor_name+'/'+arrStatus; // vendor disini adalah no deposit
	}else if(mn=='dep2'){
		vendor 				= vendor.replace(/\//g,"__");
		from_date 			= from_date.replace(/\//g,"__");
		to_date 			= to_date.replace(/\//g,"__");
		var stringStatus    = TransStatus.toString();
		var arrStatus 		= stringStatus.replace(/,/g,"__");
		if(vendor_name == ''){
			vendor_name = 'no';
		}
		if(vendor == ''){
			vendor = 'no';
		}
		var url 			= link + '/' + 'no' + '/'+ 'no' + '/' + vendor + '/' + vendor_name;// vendor disini adalah no deposit
	}else if(mn=='hp'){
		vendor 				= vendor.replace(/\//g,"__");
		from_date 			= from_date.replace(/\//g,"__");
		to_date 			= to_date.replace(/\//g,"__");
		if(vendor_name == ''){
			vendor_name = 'no';
		}
		if(vendor == ''){
			vendor = 'no';
		}
		var url 			= link + '/' + from_date + '/'+ to_date + '/' + vendor + '/' + vendor_name; // vendor disini no trans
	}else if(mn=='hp2'){
		vendor 				= vendor.replace(/\//g,"__");
		from_date 			= from_date.replace(/\//g,"__");
		to_date 			= to_date.replace(/\//g,"__");
		if(vendor_name == ''){
			vendor_name = 'no';
		}
		if(vendor == ''){
			vendor = 'no';
		}
		var url 			= link + '/' + 'no' + '/'+ 'no' + '/' + vendor + '/' + vendor_name;// vendor disini adalah trans
	}else if(mn=='v'){
		vendor 				= vendor.replace(/\//g,"__");
		from_date 			= from_date.replace(/\//g,"__");
		to_date 			= to_date.replace(/\//g,"__");
		if(vendor_name == ''){
			vendor_name = 'no';
		}
		if(vendor == ''){
			vendor = 'no';
		}
		var url 			= link + '/' + from_date + '/'+ to_date + '/' + vendor + '/' + vendor_name; 
	}else if(mn=='v2'){
		vendor 				= vendor.replace(/\//g,"__");
		from_date 			= from_date.replace(/\//g,"__");
		to_date 			= to_date.replace(/\//g,"__");
		if(vendor_name == ''){
			vendor_name = 'no';
		}
		if(vendor == ''){
			vendor = 'no';
		}

		var url 			= link + '/' + 'no' + '/'+ 'no' + '/' + vendor + '/' + vendor_name;
	}else if(mn=='c'){
		vendor 				= vendor.replace(/\//g,"__");
		from_date 			= from_date.replace(/\//g,"__");
		to_date 			= to_date.replace(/\//g,"__");
		if(vendor_name == ''){
			vendor_name = 'no';
		}
		if(vendor == ''){
			vendor = 'no';
		}
		var url 			= link + '/' + from_date + '/'+ to_date + '/' + vendor + '/' + vendor_name; 
	}else if(mn=='c2'){
		vendor 				= vendor.replace(/\//g,"__");
		from_date 			= from_date.replace(/\//g,"__");
		to_date 			= to_date.replace(/\//g,"__");
		if(vendor_name == ''){
			vendor_name = 'no';
		}
		if(vendor == ''){
			vendor = 'no';
		}

		var url 			= link + '/' + 'no' + '/'+ 'no' + '/' + vendor + '/' + vendor_name;
	}else if(mn=='sb'){
		vendor 				= vendor.replace(/\//g,"__");
		if(vendor_name == ''){
			vendor_name = 'no';
		}
		if(vendor == ''){
			vendor = 'no';
		}

		var url 			= link + '/' + vendor + '/' + vendor_name; 
	}

	if($('#tt').tabs('exists', title)){

		$('#tt').tabs('close',title);

	    $('#tt').tabs('add',{
	        title: title,
	        content: '<iframe src="'+url+'"style="height:460px;width:100%;border:none;" scrolling="no"></iframe>',
	        closable: true
	    });

	}else{

		$('#tt').tabs('add',{
	        title: title,
	        content: '<iframe src="'+url+'"style="height:460px;width:100%;border:none;" scrolling="no"></iframe>',
	        closable: true
	    });

	}
}

function closePanel(){
	var tab 	= $('#tt').tabs('getSelected');
	var index 	= $('#tt').tabs('getTabIndex',tab);

	$('#tt').tabs('close',index);
    
}

function save_data(form_id) {
	$('#'+form_id).form('submit',{
		onSubmit: function(){

			var isValid = $(this).form('validate');
			if (!isValid){
				return $(this).form('validate');
			}else{
				modal_open('Progress Bar','dlg_loading');
			}

		},
		success: function(result){
			var result = eval('('+result+')');
			
			if (result.status==true){
				$.messager.alert('Success',result.message,'info',function(){					
					location.reload();						
				});	
			} 
			else {
				$.messager.alert('Unseccessfull',result.message,'info',function(){					
												
				});
			}
			modal_close('dlg_loading'); 
		},

		statusCode: {
			404: function() {
			  alert("Page Not Found");
			}		
		}
	});
}

function update_data(form_id) {
	$('#'+form_id).form('submit',{
		onSubmit: function(){

			var isValid = $(this).form('validate');
			if (!isValid){
				return $(this).form('validate');
			}else{
				modal_open('Progress Bar','dlg_loading');
			}

		},
		success: function(result){
			var result = eval('('+result+')');
			
			if (result.status==true){
				$.messager.alert('Success',result.message,'info',function(){					
					location.reload();						
				});	
			} 
			else {
				$.messager.alert('Unseccessfull',result.message,'info',function(){					
												
				});
			}
			modal_close('dlg_loading'); 
		},

		statusCode: {
			404: function() {
			  alert("Page Not Found");
			}		
		}
	});
}

function approve_data(url,transaction_no) {
	url = base_url + url;
	
	$.messager.confirm('Confirm','Apakah Anda Yakin ?', 
	function(r){
			if (r){
				modal_open('Progress Bar','dlg_loading');
				$.post(url,{transaction_no:transaction_no},function(result){
					if (result.status==true){
						$.messager.alert('Berhasil',result.message,'info',function(){						
							location.reload();											
						});
					} 
					else {
						$.messager.alert('Maaf',result.message,'error',function(){						
							modal_close('dlg_loading'); 							
						});
					}
				},'json');
			}
	});
}

function suspend_data(url,id_grid,transaction_no) {
	url = base_url + url;
	
	$.messager.confirm('Confirm','Apakah Anda Yakin ?', 
	function(r){
			if (r){
				modal_open('Progress Bar','dlg_loading');
				$.post(url,{transaction_no:transaction_no},function(result){
					if (result.status==true){
						$.messager.alert('Berhasil',result.message,'info',function(){
							if(id_grid == 'no'){
								location.reload();
							}else{
								search_data();
							}						
																		
						});
						modal_close('dlg_loading'); 
					} 
					else {
						$.messager.alert('Maaf',result.message,'error',function(){						
							modal_close('dlg_loading'); 							
						});
					}
				},'json');
			}
	});
}

function modal_open(title,id_dialog){
	$('#'+id_dialog).dialog('open',{title:title});
}

function modal_close(id_dialog){
	$('#'+id_dialog).dialog('close');
}

function change_date(){
	if($('#chkdate').is(':checked')){
		$('#date_from').datebox({disabled:false});
		$('#date_to').datebox({disabled:false});
	}else{
		$('#date_from').datebox({disabled:true});
		$('#date_to').datebox({disabled:true});
	}
}


function search_data(){
	searchParameter = {};

	// For textbox txt_no
	if($('#txt_no').val() !=''){
		searchParameter['txt_no'] = $('#txt_no').val();
	}
	
	// For textbox txt_desc
	if($('#txt_desc').val()!=''){
		searchParameter['txt_desc'] = $('#txt_desc').val();
	}

	if($('#warehouse_code').length){
		if($('#warehouse_code').combogrid('getValue')!=''){
			searchParameter['warehouse_code'] 	= $('#warehouse_code').combogrid('getValue');
		}
	}

	// For textbox Date From and Date To
	if($('#chkdate').is(':checked')){
		searchParameter['date_from'] = $('#date_from').datebox('getValue');
		searchParameter['date_to']	= $('#date_to').datebox('getValue');
	}

	// For checkbox TransStatus
	if($('input[name="chk_TransStatus"]').length > 0){
		searchParameter['chk_TransStatus'] = new Array();

		$.each($('input[name="chk_TransStatus"]:checked'),function(){
			searchParameter['chk_TransStatus'].push($(this).val());
		});
	}

	$('#grid').datagrid('reload',{
		param : searchParameter
	});
}

function print_data(){
	searchParameter = {};

	// For textbox txt_no
	if($('#txt_no').val() !=''){
		searchParameter['txt_no'] = $('#txt_no').val();
	}
	
	// For textbox txt_desc
	if($('#txt_desc').val()!=''){
		searchParameter['txt_desc'] = $('#txt_desc').val();
	}

	if($('#warehouse_code').length){
		if($('#warehouse_code').combogrid('getValue')!=''){
			searchParameter['warehouse_code'] 	= $('#warehouse_code').combogrid('getValue');
		}
	}

	// For textbox Date From and Date To
	if($('#chkdate').is(':checked')){
		searchParameter['date_from'] = $('#date_from').datebox('getValue');
		searchParameter['date_to']	= $('#date_to').datebox('getValue');
	}

	// For checkbox TransStatus
	if($('input[name="chk_TransStatus"]').length > 0){
		searchParameter['chk_TransStatus'] = new Array();

		$.each($('input[name="chk_TransStatus"]:checked'),function(){
			searchParameter['chk_TransStatus'].push($(this).val());
		});
	}

	$('#data_to_print').val(searchParameter);
}

function formatRp(a){
    if(a === undefined || a === null || isNaN(a) === true || a === ''){
        return '';
    }
    else{
        a = parseFloat(a).toFixed(2);
        temp = a.split('.');
		
        if(temp.length > 1){
            decimal = temp[1];
        }
        else{
            decimal = '00';
        }
		
        e = function(f){
            return f.split('').reverse().join('')
        };
		
        b = e(parseInt(a).toString());
		
        for(c=0,d='';c<b.length;c++){
            d += b[c];
            
            if((c + 1) % 3 === 0 && c !== (b.length - 1)){
                d += '.';
            }
        }
		
        return '\t'+ e(d) +','+ decimal;
    }
}

function formatTransStatus(status){
    if(status == 0){
    	return 'Need Approval';
    }else if(status == 1){
    	return 'On Progress';
    }else if(status == 2){
    	return 'Finished';
    }else{
    	return 'Suspended';
    }
}

function formatRawat(status){
	if(status == 0){
		return 'Pasien Di Rawat';
	}else if(status == 1){
		return 'Pasien pulang';
	}
}

function formatSendStatus(status){
    if(status == 0){
    	return 'Not Send';
    }else if(status == 1){
    	return 'Sending';
    }
}

function formatCekGiro(type){
    if(type == 0){
    	return 'Cek/Giro';
    }else{
    	return 'Cash';
    }
}

function formatIsLock(val){
	if(val>0){
		return 'TRUE';
	}else{
		return 'FALSE';
	}
}

function get_account_number(menu_link,myCallback){
	var url = base_url + menu_link;
    $.ajax({
        type: "POST",
        dataType: "json",
        url: url,
        data: $.param({}),
        success: function(data){     
           myCallback(data.AccountNumber);
        },
        error: function (jqXHR, textStatus, errorThrown){
			if (jqXHR.status == 500) {
				alert('Internal error: ' + jqXHR.responseText);
			} else {
					alert('Unexpected error.');
			}
		}
    });
}

function get_privillage(MenuID,dlg,form_type,TransStatus,acc){
	var url = base_url + 'custom/get_privillage';
	$.ajax({
        type: "POST",
        dataType: "json",
        url: url,
        data: $.param({ MenuID:MenuID}),
        success: function(data){     
        	//alert(JSON.stringify(data));
        	//alert(typeof(toolbar[0]['disabled']));

        	if(form_type=='e'){

        		/*================== untuk master type edatagrid ================*/
        		if((typeof toolbar)!='undefined'){
		            if(data[0]['Save']==1){
		            	toolbar[0]['disabled']=false;
		            }else{
		            	toolbar[0]['disabled']=true;
		            }
		        }

		        $('#grid').edatagrid({
	            	toolbar : toolbar,
	            });
	            /*============================== end =========================*/

        	}else if(form_type=='d'){

        		/*====================== untuk master type datarid ===============*/
        		if((typeof toolbar)!='undefined'){
		            if(data[0]['New']==1){
		            	toolbar[0]['disabled']=false;
		            }else{
		            	toolbar[0]['disabled']=true;
		            }
		        }

		        if((typeof toolbar)!='undefined'){

		            if(data[0]['Edit']==1){
		            	toolbar[1]['disabled']=false;
		            }else{
		            	toolbar[1]['disabled']=true;
		            }
		        }

		        if((typeof toolbar)!='undefined'){

		            if(data[0]['Delete']==1){
		            	toolbar[2]['disabled']=false;
		            }else{
		            	toolbar[2]['disabled']=true;
		            }
		        }

		        if((typeof toolbar_2)!='undefined'){

		            if(data[0]['Save']==1){
		            	toolbar_2[0]['disabled']=false;
		            }else{
		            	toolbar_2[0]['disabled']=true;
		            }
		        }

		        $('#grid').datagrid({
	            	toolbar : toolbar,
	            });

	            if((typeof toolbar_2)!='undefined'){

		            $('#'+dlg).dialog({
		            	toolbar:toolbar_2
		            });
		        }

		        /*======================end =================*/

        	}else if(form_type=='new'){

        		/*=============== untuk type new form transaksi  =====================*/

        		if(data[0]['Save']==1){
        			$('.save-button').linkbutton('enable');
        		}else{
        			$('.save-button').linkbutton('disable');
        		}

        		/*=========================== end =================================*/

        	}else if(form_type=='edit'){

        		/*========================== untuk type edit form transaksi ================*/

        		if(data[0]['Update']==1){
        			if(TransStatus == '0'){
        				$('.save-button').linkbutton('enable');
        			}else{

        				if(acc=='q'){
        					if(TransStatus == '3' || TransStatus == '2'){
        						$('.save-button').linkbutton('disable');	
        					}else{
        						$('.save-button').linkbutton('enable');	
        					}
	        			}else{
	        				$('.save-button').linkbutton('disable');	
	        			}
        				
        			}
        		}else{

        			$('.save-button').linkbutton('disable');
        		}

        		if(data[0]['Suspend']==1){
        			if(TransStatus == '0'){
        				$('.suspend-button').linkbutton('enable');
        			}else{

        				if(acc=='q'){
        					if(TransStatus == '3' || TransStatus == '2'){
        						$('.suspend-button').linkbutton('disable');	
        					}else{
        						$('.suspend-button').linkbutton('enable');	
        					}
        					
	        			}else{
	        				$('.suspend-button').linkbutton('disable');	
	        			}
        				
        			}
        		}else{
        			$('.suspend-button').linkbutton('disable');
        		}

        		if(data[0]['Print']==1){
        			if(TransStatus == '1' || TransStatus == '2' || TransStatus == '3'){
        				$('.print-button').linkbutton('enable');
        			}else{
        				$('.print-button').linkbutton('disable');
        			}
        		}else{
        			$('.print-button').linkbutton('disable');
        		}

        		if(data[0]['Approve']==1){
        			if(TransStatus == '0'){
        				$('.approve-button').linkbutton('enable');
        			}else{
        				if(acc=='q'){
        					if(TransStatus == '3' || TransStatus == '2'){
        						$('.approve-button').linkbutton('disable');	
        					}else{
        						$('.approve-button').linkbutton('enable');	
        					}
        					
        				}else{
        					$('.approve-button').linkbutton('disable');
        				}
        			}
        		}else{
        			$('.approve-button').linkbutton('disable');
        		}

        		/*============================== end ===================================*/
        	}else if(form_type == 'view'){

        		/*====================== untuk type view transaksi =======================*/
        		if((typeof toolbar)!='undefined'){
		            if(data[0]['New']==1){
		            	toolbar[0]['disabled']=false;
		            }else{
		            	toolbar[0]['disabled']=true;
		            }
		        }

		        if((typeof toolbar)!='undefined'){

		            if(data[0]['Edit']==1){
		            	toolbar[1]['disabled']=false;
		            }else{
		            	toolbar[1]['disabled']=true;
		            }
		        }

		        if((typeof toolbar)!='undefined'){

		            if(data[0]['Suspend']==1){
		            	toolbar[2]['disabled']=false;
		            }else{
		            	toolbar[2]['disabled']=true;
		            }
		        }

		        if((typeof toolbar_2)!='undefined'){

		            if(data[0]['Save']==1){
		            	toolbar_2[0]['disabled']=false;
		            }else{
		            	toolbar_2[0]['disabled']=true;
		            }
		        }

		        $('#grid').datagrid({
	            	toolbar : toolbar,
	            });

		        /*================================ end ==============================*/

        	}

        }
    });
}

function get_saldo_kas(){
	var url = base_url + 'custom/get_saldo_kas';
    $.ajax({
        type: "POST",
        dataType: "json",
        url: url,
        data: $.param({}),
        success: function(data){     
            $('#saldo_kas').numberbox('setValue',data.value);
        },
        error: function (jqXHR, textStatus, errorThrown){
			if (jqXHR.status == 500) {
				alert('Internal error: ' + jqXHR.responseText);
			} else {
					alert('Unexpected error.');
			}
		}
    });
}

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

function get_saldo_limit(CustomerCode){
	var url = base_url + 'custom/get_saldo_limit/'+CustomerCode;
    $.ajax({
        type: "POST",
        dataType: "json",
        url: url,
        data: $.param({}),
        success: function(data){     
            $('#sisa_saldo_limit').numberbox('setValue',data.sisa_saldo_limit);
            $('#saldo_limit').val(data.saldo_limit);
        },
        error: function (jqXHR, textStatus, errorThrown){
			if (jqXHR.status == 500) {
				alert('Internal error: ' + jqXHR.responseText);
			} else {
					alert('Unexpected error.');
			}
		}
    });
}

function LockUnLock_Customer(CustomerCode,val){
	var url = base_url + 'custom/unlock_customer';
    $.ajax({
        type: "POST",
        dataType: "json",
        url: url,
        data: $.param({CustomerCode:CustomerCode,val:val}),
        success: function(data){     
            if(data.value == true){
            	$.messager.alert('Sukses',data.message,'success',function(){						
					location.reload();						
				});			
            }else{
            	$.messager.alert('Maaf',data.message,'error',function(){						
					//modal_close('dlg_loading'); 							
				});
            }
        },
        error: function (jqXHR, textStatus, errorThrown){
			if (jqXHR.status == 500) {
				alert('Internal error: ' + jqXHR.responseText);
			} else {
					alert('Unexpected error.');
			}
		}
    });
}

function get_hutang_customer(CustomerCode,myCallback){
	var url = base_url + 'custom/get_hutang_customer';
    $.ajax({
        type: "POST",
        dataType: "json",
        url: url,
        data: $.param({CustomerCode:CustomerCode}),
        success: function(data){     
           myCallback(data.value);
        },
        error: function (jqXHR, textStatus, errorThrown){
			if (jqXHR.status == 500) {
				alert('Internal error: ' + jqXHR.responseText);
			} else {
					alert('Unexpected error.');
			}
		}
    });
}

function editformatterDate(date){
	$.fn.datebox.defaults.formatter = function(){
		if (isNaN(date)) {
	        date = new Date(date);
	    }

	    var y = date.getFullYear();
	    var m = date.getMonth() + 1;
	    var d = date.getDate();

	    //return y+'-'+(m<10?('0'+m):m)+'-'+(d<10?('0'+d):d);
	    return (d < 10 ? ('0' + d) : d) + '/' + (m < 10 ? ('0' + m) : m) + '/' + y;
	}
}

function addformatterDate(){
	$.fn.datebox.defaults.formatter = function(date){
		if (isNaN(date)) {
	        date = new Date(date);
	    }

	    var y = date.getFullYear();
	    var m = date.getMonth() + 1;
	    var d = date.getDate();

	    //return y+'-'+(m<10?('0'+m):m)+'-'+(d<10?('0'+d):d);
	    return (d < 10 ? ('0' + d) : d) + '/' + (m < 10 ? ('0' + m) : m) + '/' + y;
	}
}