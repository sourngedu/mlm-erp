$(document).ready(function(){
    $('body a, body button').attr('tabindex', -1);
    check_add_item_val();
    $(document).on('keypress', '.rquantity', function (e) {
        if (e.keyCode == 13) {
            $('#add_item').focus();
        }
    });
    $('#toogle-customer-read-attr').click(function () {
        var nst = $('#poscustomer').is('[readonly]') ? false : true;
        $('#poscustomer').select2("readonly", nst);
        return false;
    });
	 $(".open-table").click(function () {		
        $('#table-slider').toggle('slide', { direction: 'right' }, 700);		
    });
    $(".open-brands").click(function () {
        $('#brands-slider').toggle('slide', { direction: 'right' }, 700);
    });
    $(".open-category").click(function () {
        $('#category-slider').toggle('slide', { direction: 'right' }, 700);
    });
    $(".open-subcategory").click(function () {
        $('#subcategory-slider').toggle('slide', { direction: 'right' }, 700);
    });
    $(document).on('click', function(e){
		if (!$(e.target).is(".open-table, .cat-child") && !$(e.target).parents("#table-slider").size() && $('#table-slider').is(':visible')) {						
            $('#table-slider').toggle('slide', { direction: 'right' }, 700);						
        }
		if (!$(e.target).is(".open-brands, .cat-child") && !$(e.target).parents("#brands-slider").size() && $('#brands-slider').is(':visible')) {
            $('#brands-slider').toggle('slide', { direction: 'right' }, 700);
        }
        if (!$(e.target).is(".open-category, .cat-child") && !$(e.target).parents("#category-slider").size() && $('#category-slider').is(':visible')) {
            $('#category-slider').toggle('slide', { direction: 'right' }, 700);
        }
        if (!$(e.target).is(".open-subcategory, .cat-child") && !$(e.target).parents("#subcategory-slider").size() && $('#subcategory-slider').is(':visible')) {
            $('#subcategory-slider').toggle('slide', { direction: 'right' }, 700);
        }
    });
    $('.po').popover({html: true, placement: 'right', trigger: 'click'}).popover();
    $('#inlineCalc').calculator({layout: ['_%+-CABS','_7_8_9_/','_4_5_6_*','_1_2_3_-','_0_._=_+'], showFormula:true});
    $('.calc').click(function(e) { e.stopPropagation();});
    $(document).on('click', '[data-toggle="ajax"]', function(e) {
        e.preventDefault();
        var href = $(this).attr('href');
        $.get(href, function( data ) {
            $("#myModal").html(data).modal();
        });
    });
    $(document).on('click', '.sname', function(e) {
        var row = $(this).closest('tr');
        var itemid = row.find('.rid').val();
        $('#myModal').modal({remote: site.base_url + 'products/modal_view/' + itemid});
        $('#myModal').modal('show');
    });
});
$(document).ready(function () {

// Order level shipping and discount localStorage
if (posdiscount = localStorage.getItem('posdiscount')) {
    $('#posdiscount').val(posdiscount);
}
$(document).on('change', '#ppostax2', function () {
    localStorage.setItem('postax2', $(this).val());
    $('#postax2').val($(this).val());
});

if (postax2 = localStorage.getItem('postax2')) {
    $('#postax2').val(postax2);
}

$(document).on('blur', '#sale_note', function () {
    localStorage.setItem('posnote', $(this).val());
    $('#sale_note').val($(this).val());
});

if (posnote = localStorage.getItem('posnote')) {
    $('#sale_note').val(posnote);
}

$(document).on('blur', '#staffnote', function () {
    localStorage.setItem('staffnote', $(this).val());
    $('#staffnote').val($(this).val());
});

if (staffnote = localStorage.getItem('staffnote')) {
    $('#staffnote').val(staffnote);
}

if (posshipping = localStorage.getItem('posshipping')) {
    $('#posshipping').val(posshipping);
    shipping = parseFloat(posshipping);
}

var model = '', kilometers = '', wing_no = '', plate_no='', job_no='', mechanic_no='';

if (povehicle_model = localStorage.getItem('vehicle_model')) {
    $('#povehicle_model').val(povehicle_model);
    model = povehicle_model;	
}
if (povehicle_kilometers = localStorage.getItem('vehicle_kilometers')) {
    $('#povehicle_kilometers').val(povehicle_kilometers);
    kilometers = povehicle_kilometers;
}
if (povehicle_wing_no = localStorage.getItem('vehicle_wing_no')) {
    $('#povehicle_wing_no').val(povehicle_wing_no);
    wing_no = povehicle_wing_no;
}
if (povehicle_plate = localStorage.getItem('vehicle_plate')) {
    $('#povehicle_plate').val(povehicle_plate);
    plate_no = povehicle_plate;
}
if (pojob_number = localStorage.getItem('job_number')) {
    $('#pojob_number').val(pojob_number);
    job_no = pojob_number;
}
if (pomechanic = localStorage.getItem('mechanic')) {
    $('#pomechanic').val(pomechanic);
    mechanic_no = pomechanic;
}


$("#pshipping").click(function(e) {
    e.preventDefault();
    shipping = $('#posshipping').val() ? $('#posshipping').val() : shipping;
    $('#shipping_input').val(shipping);
    $('#sModal').modal();
});

$('#sModal').on('shown.bs.modal', function() {
    $(this).find('#shipping_input').select().focus();
});

$(document).on('click', '#updateShipping', function() {
    var s = parseFloat($('#shipping_input').val() ? $('#shipping_input').val() : '0');
    if (is_numeric(s)) {
        $('#posshipping').val(s);
        localStorage.setItem('posshipping', s);
        shipping = s;
        loadItems();
        $('#sModal').modal('hide');
    } else {
        bootbox.alert(lang.unexpected_value);
    }
});

$("#pvehicle").click(function(e) {
    e.preventDefault();	
	model = $('#povehicle_model').val() ? $('#povehicle_model').val() : model;
	kilometers = $('#povehicle_kilometers').val() ? $('#povehicle_kilometers').val() : kilometers;
	wing_no = $('#povehicle_wing_no').val() ? $('#povehicle_wing_no').val() : wing_no;
	plate_no = $('#povehicle_plate').val() ? $('#povehicle_plate').val() : plate_no;
	job_no = $('#pojob_number').val() ? $('#pojob_number').val() : job_no;
	mechanic_no = $('#pomechanic').val() ? $('#pomechanic').val() : mechanic_no;
	$('#vehicle_model').val(model);
	$('#vehicle_kilometers').val(kilometers);
	$('#vehicle_wing_no').val(wing_no);
	$('#vehicle_plate').val(plate_no);
	$('#job_number').val(job_no);
	$('#mechanic').val(mechanic_no);
    $('#vModal').modal();
});
$(document).on('click', '#updateVehicle', function() {

	var m = $("#vehicle_model").val() ? $('#vehicle_model').val() : '';
	var k = $("#vehicle_kilometers").val() ? $('#vehicle_kilometers').val() : '';
	var w = $("#vehicle_wing_no").val() ? $('#vehicle_wing_no').val() : '';
	var p = $("#vehicle_plate").val() ? $('#vehicle_plate').val() : '';
	var j = $("#job_number").val() ? $('#job_number').val() : '';
	var n = $("#mechanic").val() ? $('#mechanic').val() : '';
	
    if (vehicle_model) {
		$('#povehicle_model').val(m);
		$('#povehicle_kilometers').val(k);
		$('#povehicle_wing_no').val(w);
		$('#povehicle_plate').val(p);
		$('#pojob_number').val(j);
		$('#pomechanic').val(n);
        localStorage.setItem('vehicle_model', m);
		localStorage.setItem('vehicle_kilometers', k);
		localStorage.setItem('vehicle_wing_no', w);	
		localStorage.setItem('vehicle_plate', p);	
		localStorage.setItem('job_number', j);	
		localStorage.setItem('mechanic', n);	
		model = m;
		kilometers = k;
		wing_no = w;
		plate_no = p;
		job_no = j;
		mechanic_no = n;
        loadItems();
        $('#vModal').modal('hide');
    } else {
        bootbox.alert(lang.unexpected_value);
    }
});

$(document).on("change", '.slength, .swidth, .square', function () {
	var parent = $(this).parent().parent();
	var row = $(this).closest('tr');	
	var slength = parent.find(".slength").val();
	var swidth = parent.find(".swidth").val();
	var square = parent.find(".square").val();
	var quantity = (parseFloat(slength) * parseFloat(swidth)) * square;		
	item_id = row.attr('data-item-id');
	positems[item_id].row.slength = slength;
	positems[item_id].row.swidth = swidth;
	positems[item_id].row.square = square;
	positems[item_id].row.qty = quantity;
	if(positems[item_id].row.unit != positems[item_id].row.base_unit) {
		$.each(positems[item_id].units, function(){
			if (this.id == positems[item_id].row.unit) {
				positems[item_id].row.base_quantity = unitToBaseQty(quantity, this);
			}
		});
	}else{
		positems[item_id].row.base_quantity = quantity;
	}
	localStorage.setItem('positems', JSON.stringify(positems));
	loadItems();		
});

/* ----------------------
     * Order Discount Handler
     * ---------------------- */
     $("#ppdiscount").click(function(e) {
        e.preventDefault();
        var dval = $('#posdiscount').val() ? $('#posdiscount').val() : '0';
        $('#order_discount_input').val(dval);
        $('#dsModal').modal();
     });
     $('#dsModal').on('shown.bs.modal', function() {
        $(this).find('#order_discount_input').select().focus();
        $('#order_discount_input').bind('keypress', function(e) {
            if (e.keyCode == 13) {
                e.preventDefault();
                var ds = $('#order_discount_input').val();
                if (is_valid_discount(ds)) {
                    $('#posdiscount').val(ds);
                    localStorage.removeItem('posdiscount');
                    localStorage.setItem('posdiscount', ds);
                    loadItems();
                } else {
                    bootbox.alert(lang.unexpected_value);
                }
                $('#dsModal').modal('hide');
            }
        });
     });
     $(document).on('click', '#updateOrderDiscount', function() {
        var ds = $('#order_discount_input').val() ? $('#order_discount_input').val() : '0';
        if (is_valid_discount(ds)) {
            $('#posdiscount').val(ds);
            localStorage.removeItem('posdiscount');
            localStorage.setItem('posdiscount', ds);
            loadItems();
        } else {
            bootbox.alert(lang.unexpected_value);
        }
		/*========Discount By bill=======*/
		if(pos_settings.table_enable == 1){			
			$.ajax({
				type : "GET",
				dataType : "JSON",
				url : site.base_url + "pos/update_discount",
				data : { bill_id : bill_id, order_discount_id : ds },
				success : function(data){
								
				}
			});			
		}
        $('#dsModal').modal('hide');
     });
/* ----------------------
     * Order Tax Handler
     * ---------------------- */
     $("#pptax2").click(function(e) {
        e.preventDefault();
        var postax2 = localStorage.getItem('postax2');
        $('#order_tax_input').select2('val', postax2);
        $('#txModal').modal();
     });
     $('#txModal').on('shown.bs.modal', function() {
        $(this).find('#order_tax_input').select2('focus');
     });
     $('#txModal').on('hidden.bs.modal', function() {
        var ts = $('#order_tax_input').val();
        $('#postax2').val(ts);
        localStorage.setItem('postax2', ts);
        loadItems();
     });
     $(document).on('click', '#updateOrderTax', function () {
        var ts = $('#order_tax_input').val();
        $('#postax2').val(ts);
        localStorage.setItem('postax2', ts);
        loadItems();
        $('#txModal').modal('hide');
     });


     $(document).on('change', '.rserial', function () {
        var item_id = $(this).closest('tr').attr('data-item-id');
        positems[item_id].row.serial = $(this).val();
        localStorage.setItem('positems', JSON.stringify(positems));
     });

// If there is any item in localStorage
if (localStorage.getItem('positems')) {
    loadItems();
}

    // clear localStorage and reload
    $('#reset').click(function (e) {
        if (protect_delete == 1) {
            var boxd = bootbox.dialog({
                title: "<i class='fa fa-key'></i> Pin Code",
                message: '<input id="pos_pin" name="pos_pin" type="password" placeholder="Pin Code" class="form-control"> ',
                buttons: {
                    success: {
                        label: "<i class='fa fa-tick'></i> OK",
                        className: "btn-success verify_pin",
                        callback: function () {
                            var pos_pin = md5($('#pos_pin').val());
                            if(pos_pin == pos_settings.pin_code) {
                                
                                if (localStorage.getItem('positems')) {
                                    localStorage.removeItem('positems');
                                }
                                if (localStorage.getItem('posdiscount')) {
                                    localStorage.removeItem('posdiscount');
                                }
                                if (localStorage.getItem('postax2')) {
                                    localStorage.removeItem('postax2');
                                }
                                if (localStorage.getItem('posshipping')) {
                                    localStorage.removeItem('posshipping');
                                }
                                if (localStorage.getItem('posref')) {
                                    localStorage.removeItem('posref');
                                }
                                if (localStorage.getItem('poswarehouse')) {
                                    localStorage.removeItem('poswarehouse');
                                }
                                if (localStorage.getItem('posnote')) {
                                    localStorage.removeItem('posnote');
                                }
                                if (localStorage.getItem('posinnote')) {
                                    localStorage.removeItem('posinnote');
                                }
                                if (localStorage.getItem('poscustomer')) {
                                    localStorage.removeItem('poscustomer');
                                }
                                if (localStorage.getItem('poscurrency')) {
                                    localStorage.removeItem('poscurrency');
                                }
                                if (localStorage.getItem('posdate')) {
                                    localStorage.removeItem('posdate');
                                }
                                if (localStorage.getItem('posstatus')) {
                                    localStorage.removeItem('posstatus');
                                }
                                if (localStorage.getItem('posbiller')) {
                                    localStorage.removeItem('posbiller');
                                }

                                $('#modal-loading').show();
                                window.location.href = site.base_url+"pos";

                            } else {
                                bootbox.alert('Wrong Pin Code');
                            }
                        }
                    }
                }
            });
        }
    });

// save and load the fields in and/or from localStorage

$('#poswarehouse').change(function (e) {
    localStorage.setItem('poswarehouse', $(this).val());
});
if (poswarehouse = localStorage.getItem('poswarehouse')) {
    $('#poswarehouse').select2('val', poswarehouse);
}

    //$(document).on('change', '#posnote', function (e) {
        $('#posnote').redactor('destroy');
        $('#posnote').redactor({
            buttons: ['formatting', '|', 'alignleft', 'aligncenter', 'alignright', 'justify', '|', 'bold', 'italic', 'underline', '|', 'unorderedlist', 'orderedlist', '|', 'link', '|', 'html'],
            formattingTags: ['p', 'pre', 'h3', 'h4'],
            minHeight: 100,
            changeCallback: function (e) {
                var v = this.get();
                localStorage.setItem('posnote', v);
            }
        });
        if (posnote = localStorage.getItem('posnote')) {
            $('#posnote').redactor('set', posnote);
        }

        $('#poscustomer').change(function (e) {
            localStorage.setItem('poscustomer', $(this).val());
        });


// prevent default action upon enter
$('body').not('textarea').bind('keypress', function (e) {
    if (e.keyCode == 13) {
        e.preventDefault();
        return false;
    }
});

// Order tax calculation
if (site.settings.tax2 != 0) {
    $('#postax2').change(function () {
        localStorage.setItem('postax2', $(this).val());
        loadItems();
        return;
    });
}

// Order discount calculation
var old_posdiscount;
$('#posdiscount').focus(function () {
    old_posdiscount = $(this).val();
}).change(function () {
    var new_discount = $(this).val() ? $(this).val() : '0';
    if (is_valid_discount(new_discount)) {
        localStorage.removeItem('posdiscount');
        localStorage.setItem('posdiscount', new_discount);
        loadItems();
        return;
    } else {
        $(this).val(old_posdiscount);
        bootbox.alert(lang.unexpected_value);
        return;
    }

});

    /* ----------------------
     * Delete Row Method
     * ---------------------- */
     var pwacc = false;
     $(document).on('click', '.posdel', function () {
        var row = $(this).closest('tr');
        var item_id = row.attr('data-item-id');		
		var ordered_by = row.find(".ordered_by").val();				
		var sitem_id = row.find(".suspend_item_id").val();
		var cart = row.find(".cart").val();
		var real_unit_price = row.find('.realuprice').val();
		var product_id = row.find('.rid').val();
		
        if(protect_delete == 1) {
            var boxd = bootbox.dialog({
                title: "<i class='fa fa-key'></i> Pin Code",
                message: '<input id="pos_pin" name="pos_pin" type="password" placeholder="Pin Code" class="form-control"> ',
                buttons: {
                    success: {
                        label: "<i class='fa fa-tick'></i> OK",
                        className: "btn-success verify_pin",
                        callback: function () {
                            var pos_pin = md5($('#pos_pin').val());
                            if(pos_pin == pos_settings.pin_code) {
                                delete positems[item_id];
                                row.remove();
								delete_suspend_item(sitem_id);
                                if(positems.hasOwnProperty(item_id)) { } else {
                                    localStorage.setItem('positems', JSON.stringify(positems));
                                    loadItems();
                                }
                            } else {
                                bootbox.alert('Wrong Pin Code');
                            }
                        }
                    }
                }
            });
            boxd.on("shown.bs.modal", function() {
                $( "#pos_pin" ).focus().keypress(function(e) {
                    if (e.keyCode == 13) {
                        e.preventDefault();
                        $('.verify_pin').trigger('click');
                        return false;
                    }
                });
            });
			
        }else {			
			
            delete positems[item_id];
            row.remove();
			
			if(sitem_id){
				delete_suspend_item(sitem_id);
			}
			if(cart || product_id){
				delete_cart_item(product_id,real_unit_price);
			}
			
            if(positems.hasOwnProperty(item_id)) { } else {
                localStorage.setItem('positems', JSON.stringify(positems));
                loadItems();
            }
        }
        return false;
     });
	 
	 function delete_cart_item(product_id = 0, real_unit_price = 0){		 		
		$.ajax({
			type: "GET",
			dataType: "JSON",
			url: site.base_url+"pos/delete_cart_item",
			data: { 
				product_id : product_id,
				real_unit_price : real_unit_price,
			},
		});			
	 }
	 
	 function delete_suspend_item(id = 0){		 		
		$.ajax({
			type: "GET",
			dataType: "JSON",
			url: site.base_url+"pos/delete_suspend_item",
			data: { 
				id : id,
				suspend_id : bill_id,
			},
		});			
	 }

    /* -----------------------
     * Edit Row Modal Hanlder
     ----------------------- */
    $(document).on('click', '.edit', function () {
        var row = $(this).closest('tr');
        var row_id = row.attr('id');
        item_id = row.attr('data-item-id');
        item = positems[item_id];
        var qty = row.children().children('.rquantity').val(),
        product_option = row.children().children('.roption').val(),
        unit_price = formatDecimal(row.children().children('.ruprice').val()),
        discount = row.children().children('.rdiscount').val(),
		item_ordered = row.children().children('.item_ordered').val(),
		return_qty = row.children().children('.return_qty').val();
		
        if(item.options !== false) {
            $.each(item.options, function () {
                if(this.id == item.row.option && this.price != 0 && this.price != '' && this.price != null) {
                    unit_price = parseFloat(item.row.real_unit_price)+parseFloat(this.price);
                }
            });
        }
        var real_unit_price = item.row.real_unit_price;
        var net_price = unit_price;
        $('#prModalLabel').text(item.row.code + ' - ' + item.row.name);
        if (site.settings.tax1) {
            $('#ptax').select2('val', item.row.tax_rate);
            $('#old_tax').val(item.row.tax_rate);
            var item_discount = 0, ds = discount ? discount : '0';
            if (ds.indexOf("%") !== -1) {
                var pds = ds.split("%");
                if (!isNaN(pds[0])) {
                    item_discount = formatDecimal(parseFloat(((unit_price) * parseFloat(pds[0])) / 100), 4);
                } else {
                    item_discount = parseFloat(ds);
                }
            } else {
                item_discount = parseFloat(ds);
            }
            net_price -= item_discount;
            var pr_tax = item.row.tax_rate, pr_tax_val = 0;
            if (pr_tax !== null && pr_tax != 0) {
                $.each(tax_rates, function () {
                    if(this.id == pr_tax){
                        if (this.type == 1) {

                            if (positems[item_id].row.tax_method == 0) {
                                pr_tax_val = formatDecimal((((net_price) * parseFloat(this.rate)) / (100 + parseFloat(this.rate))), 4);
                                pr_tax_rate = formatDecimal(this.rate) + '%';
                                net_price -= pr_tax_val;
                            } else {
                                pr_tax_val = formatDecimal((((net_price) * parseFloat(this.rate)) / 100), 4);
                                pr_tax_rate = formatDecimal(this.rate) + '%';
                            }

                        } else if (this.type == 2) {

                            pr_tax_val = parseFloat(this.rate);
                            pr_tax_rate = this.rate;

                        }
                    }
                });
            }
        }
        if (site.settings.product_serial !== 0) {
            $('#pserial').val(row.children().children('.rserial').val());
        }
        var opt = '<p style="margin: 12px 0 0 0;">n/a</p>';
        if(item.options !== false) {
            var o = 1;
            opt = $("<select id=\"poption\" name=\"poption\" class=\"form-control select\" />");
            $.each(item.options, function () {
                if(o == 1) {
                    if(product_option == '') { product_variant = this.id; } else { product_variant = product_option; }
                }
                $("<option />", {value: this.id, text: this.name}).appendTo(opt);
                o++;
            });
        } else {
            product_variant = 0;
        }
		
		var punit_disabled = "";
		if(pos_settings.table_enable == 1){
			if(item_ordered > 0){				
				punit_disabled = "disabled";
				$('#pquantity').attr("readonly","readonly");
				$('#return_quantity').removeAttr("readonly");
			}else{
				punit_disabled = "";
				$('#pquantity').removeAttr("readonly");
				$('#return_quantity').attr("readonly","readonly");
			}
			
			qty = parseFloat(qty);
			qty += parseFloat(return_qty);
		}
		
        if (item.units !== false) {
            uopt = $("<select id=\"punit\" "+punit_disabled+" name=\"punit\" class=\"form-control select\" />");
            $.each(item.units, function () {
                if(this.id == item.row.unit) {
                    $("<option />", {value: this.id, text: this.name, selected:true}).appendTo(uopt);
                } else {
                    $("<option />", {value: this.id, text: this.name}).appendTo(uopt);
                }
            });
        } else {
            uopt = '<p style="margin: 12px 0 0 0;">n/a</p>';
        }
		
		if(item.product_serials){
			uopt1 = $("<select id=\"product_serial\" name=\"product_serial\" class=\"form-control select\" />");
			$("<option />", { value: '', text: '---'}).appendTo(uopt1);
			$.each(item.product_serials, function () {
				var serialno = row.children().children('.rserial').val();
				if(this.serial == serialno) {
					$("<option />", { value: this.id, text: this.serial, selected:true}).appendTo(uopt1);
				} else {
					$("<option />", { value: this.id, text: this.serial}).appendTo(uopt1);
				}
			});			
			$("#pserials-div").html(uopt1);
		}
		
		var opt2 = '<p style="margin: 12px 0 0 0;">n/a</p>';
        if(item.price_groups !== false) {
            opt2 = $("<select id=\"pgroups\" name=\"pgroups\" class=\"form-control select\" />");
					$("<option />", {value: 0, text: 'n/a'}).appendTo(opt2);
            $.each(item.price_groups, function () {
				if(this.id == item.row.price_group_id) {
					$("<option />", {value: this.id, text: this.name + " - " + formatDecimal(this.price) , selected:true}).appendTo(opt2);
				} else {
					$("<option />", {value: this.id, text: this.name + " - " + formatDecimal(this.price) }).appendTo(opt2);
				}
            });
        }
		
		$('#pgroups-div').html(opt2);
        $('#poptions-div').html(opt);
        $('#punits-div').html(uopt);
        $('select.select').select2({minimumResultsForSearch: 7});
        $('#return_quantity').val(return_qty);
		$('#pquantity').val(qty);
        $('#old_qty').val(qty);
        $('#pprice').val(unit_price);
        $('#punit_price').val(formatDecimal(parseFloat(unit_price)+parseFloat(pr_tax_val)));
        $('#poption').select2('val', item.row.option);
        $('#old_price').val(unit_price);
        $('#row_id').val(row_id);
        $('#item_id').val(item_id);
        $('#pserial').val(row.children().children('.rserial').val());
        $('#pdiscount').val(discount);
        $('#net_price').text(formatMoney(net_price));
        $('#pro_tax').text(formatMoney(pr_tax_val));
        $('#prModal').appendTo("body").modal('show');
    });

    $(document).on('click', '.comment', function () {
        var row = $(this).closest('tr');
        var row_id = row.attr('id');
        item_id = row.attr('data-item-id');
        item = positems[item_id];
        $('#irow_id').val(row_id);
        $('#icomment').val(item.row.comment);
        $('#iordered').val(item.row.ordered);
        $('#iordered').select2('val', item.row.ordered);
		
		$('#phone').val(item.row.phone);
		$('#identity').val(item.row.identity);
		$('#start_date').val(item.row.start_date);
		$('#end_date').val(item.row.end_date);
		
        $('#cmModalLabel').text(item.row.code + ' - ' + item.row.name);
        $('#cmModal').appendTo("body").modal('show');
    });

    $(document).on('click', '#editComment', function () {
        var row = $('#' + $('#irow_id').val());
        var item_id = row.attr('data-item-id');
		
        positems[item_id].row.order = parseFloat($('#iorders').val()),
        positems[item_id].row.comment = $('#icomment').val() ? $('#icomment').val() : '',
		positems[item_id].row.phone = $('#phone').val(),
		positems[item_id].row.identity = $('#identity').val(),
		positems[item_id].row.start_date = $('#start_date').val(),
		positems[item_id].row.end_date = $('#end_date').val();		
        localStorage.setItem('positems', JSON.stringify(positems));
        $('#cmModal').modal('hide');
        loadItems();
        return;
    });

    $('#prModal').on('shown.bs.modal', function (e) {
        if($('#poption').select2('val') != '') {
            $('#poption').select2('val', product_variant);
            product_variant = 0;
        }
    });

    $(document).on('change', '#pprice, #ptax, #pdiscount', function () {
        var row = $('#' + $('#row_id').val());
        var item_id = row.attr('data-item-id');
        var unit_price = parseFloat($('#pprice').val());
        var item = positems[item_id];
        var ds = $('#pdiscount').val() ? $('#pdiscount').val() : '0';
        if (ds.indexOf("%") !== -1) {
            var pds = ds.split("%");
            if (!isNaN(pds[0])) {
                item_discount = parseFloat(((unit_price) * parseFloat(pds[0])) / 100);
            } else {
                item_discount = parseFloat(ds);
            }
        } else {
            item_discount = parseFloat(ds);
        }
        unit_price -= item_discount;
        var pr_tax = $('#ptax').val(), item_tax_method = item.row.tax_method;
        var pr_tax_val = 0, pr_tax_rate = 0;
        if (pr_tax !== null && pr_tax != 0) {
            $.each(tax_rates, function () {
                if(this.id == pr_tax){
                    if (this.type == 1) {
                        if (item_tax_method == 0) {
                            pr_tax_val = formatDecimal(((unit_price) * parseFloat(this.rate)) / (100 + parseFloat(this.rate)));
                            pr_tax_rate = formatDecimal(this.rate) + '%';
                            unit_price -= pr_tax_val;
                        } else {
                            pr_tax_val = formatDecimal(((unit_price) * parseFloat(this.rate)) / 100);
                            pr_tax_rate = formatDecimal(this.rate) + '%';
                        }
                    } else if (this.type == 2) {
                        pr_tax_val = parseFloat(this.rate);
                        pr_tax_rate = this.rate;
                    }
                }
            });
        }
        $('#net_price').text(formatMoney(unit_price));
        $('#pro_tax').text(formatMoney(pr_tax_val));
    });
	
	var pgprice = 0;
	
	$(document).on('change', '#pgroups', function () {
        var row = $('#' + $('#row_id').val());
        var item_id = row.attr('data-item-id');
        var item = positems[item_id];
		var newprice = [], pgroup = [];
		$.each(item.price_groups, function(){
			pgroup[this.id] = this.id;
			newprice[this.id] = formatDecimal(this.price);
		});
		
		var pprice = formatDecimal(newprice[$(this).val()]);
		var uprice = formatDecimal(item.row.base_unit_price);
		if(pprice){
			$('#pprice').val(pprice).change(); pgprice = pprice;
		}else{
			$('#pprice').val(uprice).change();
		}
		$('#punit').select2('val', positems[item_id].row.base_unit);
		$('#pgroup').val(pgroup[$(this).val()]);
    });
	
	$(document).on('change', '#product_serial', function () {
        var row = $('#' + $('#row_id').val());
        var item_id = row.attr('data-item-id');
        var item = positems[item_id];
		var newprice = [], serialno = [] , pscost = [];
		$.each(item.product_serials, function(){
			newprice[this.id] = this.price;
			serialno[this.id] = this.serial;
			pscost[this.id] = this.cost;
		});
		$('#pserial').val(serialno[$(this).val()]);
		$('#pscost').val(pscost[$(this).val()]);
		$('#pprice').val(formatDecimal(newprice[$(this).val()])).change();
    });

    $(document).on('change', '#punit', function () {
        var row = $('#' + $('#row_id').val());
        var item_id = row.attr('data-item-id');
        var item = positems[item_id];
        if (!is_numeric($('#pquantity').val()) || parseFloat($('#pquantity').val()) < 0) {
            $(this).val(old_row_qty);
            bootbox.alert(lang.unexpected_value);
            return;
        }
        var opt = $('#poption').val(), unit = $('#punit').val(), base_quantity = $('#pquantity').val(), aprice = 0;
        if(item.options !== false) {
            $.each(item.options, function () {
                if(this.id == opt && this.price != 0 && this.price != '' && this.price != null) {
                    aprice = parseFloat(this.price);
                }
            });
        }
		
		pgprice = (item.row.base_unit_price?item.row.base_unit_price:0);
		
        if(unit != positems[item_id].row.base_unit) {
            $.each(item.units, function(){
                if (this.id == unit) {
                    base_quantity = unitToBaseQty($('#pquantity').val(), this);
                    //$('#pprice').val(formatDecimal(((parseFloat(item.row.base_unit_price)*(unitToBaseQty(1, this)))+(aprice*base_quantity)), 4)).change();
					$('#pprice').val(formatDecimal(((parseFloat(pgprice +aprice))*unitToBaseQty(1, this)), 4)).change();
                }
            });
        } else {
            $('#pprice').val(formatDecimal(pgprice+aprice)).change();
        }
    });

    /* -----------------------
     * Edit Row Method
     ----------------------- */
    $(document).on('click', '#editItem', function () {
        var row = $('#' + $('#row_id').val());		
        var item_id = row.attr('data-item-id'), new_pr_tax = $('#ptax').val(), new_pr_tax_rate = false, return_qty = $("#return_quantity").val();
        if (new_pr_tax) {
            $.each(tax_rates, function () {
                if (this.id == new_pr_tax) {
                    new_pr_tax_rate = this;
                }
            });
        }
			
        var price = parseFloat($('#pprice').val());
        if(item.options !== false) {
            var opt = $('#poption').val();
            $.each(item.options, function () {
                if(this.id == opt && this.price != 0 && this.price != '' && this.price != null) {
                    price = price-parseFloat(this.price);
                }
            });
        }
        if (site.settings.product_discount == 1 && $('#pdiscount').val()) {
            if(!is_valid_discount($('#pdiscount').val())) {
                bootbox.alert(lang.unexpected_value);
                return false;
            }
        }
        if (!is_numeric($('#pquantity').val())) {
            $(this).val(old_row_qty);
            bootbox.alert(lang.unexpected_value);
            return;
        }
        var unit = $('#punit').val();
        var base_quantity = parseFloat($('#pquantity').val());
        if(unit != positems[item_id].row.base_unit) {
            $.each(positems[item_id].units, function(){
                if (this.id == unit) {
					if(return_qty > 0){
						base_quantity = unitToBaseQty(parseInt($('#pquantity').val()), this);
						return_qty = unitToBaseQty(parseInt(return_qty), this);
					}else{
						base_quantity = unitToBaseQty($('#pquantity').val(), this);
					}
                }
            });
        }
		
		if(return_qty >= base_quantity){
			bootbox.alert(lang.unexpected_value);
            return;	
		}
		var preturn_qty = $("#return_quantity").val();
		var pquantity = parseFloat($('#pquantity').val());
		if(pos_settings.table_enable==1){		
			if(preturn_qty > 0){
				pquantity -= preturn_qty;
				base_quantity -= return_qty;
			}
		}
				
		if (site.settings.product_serial == 1) {
			positems[item_id].row.cost = parseFloat($('#pscost').val());
		}
		
        positems[item_id].row.fup = 1,
		positems[item_id].row.return_qty = preturn_qty;
        positems[item_id].row.qty = pquantity,
        positems[item_id].row.base_quantity = parseFloat(base_quantity),
        positems[item_id].row.real_unit_price = price,
        positems[item_id].row.unit = unit,
        positems[item_id].row.tax_rate = new_pr_tax,
        positems[item_id].tax_rate = new_pr_tax_rate,
        positems[item_id].row.discount = $('#pdiscount').val() ? $('#pdiscount').val() : '',
        positems[item_id].row.option = $('#poption').val() ? $('#poption').val() : '',
        positems[item_id].row.serial = $('#pserial').val();
		
		if (site.settings.price_groups == 1) {
			positems[item_id].row.price_group = $('#pprice').val();
			positems[item_id].row.price_group_id = $('#pgroup').val();
		}
		
        localStorage.setItem('positems', JSON.stringify(positems));
        $('#prModal').modal('hide');		
        loadItems();
        return;
    });

    /* -----------------------
     * Product option change
     ----------------------- */
    $(document).on('change', '#poption', function () {
        var row = $('#' + $('#row_id').val()), opt = $(this).val();
        var item_id = row.attr('data-item-id');
        var item = positems[item_id];
        var unit = $('#punit').val(), base_quantity = parseFloat($('#pquantity').val()), base_unit_price = item.row.base_unit_price;
        if(unit != positems[item_id].row.base_unit) {
            $.each(positems[item_id].units, function(){
                if (this.id == unit) {
                    base_unit_price = formatDecimal((parseFloat(item.row.base_unit_price)*(unitToBaseQty(1, this))), 4)
                    base_quantity = unitToBaseQty($('#pquantity').val(), this);
                }
            });
        }
        $('#pprice').val(parseFloat(base_unit_price)).trigger('change');
        if(item.options !== false) {
            $.each(item.options, function () {
                if(this.id == opt && this.price != 0 && this.price != '' && this.price != null) {
                    $('#pprice').val(parseFloat(base_unit_price)+(parseFloat(this.price))).trigger('change');
                }
            });
        }
    });

     /* ------------------------------
     * Sell Gift Card modal
     ------------------------------- */
     $(document).on('click', '#sellGiftCard', function (e) {
        if (count == 1) {
            positems = {};
            if ($('#poswarehouse').val() && $('#poscustomer').val()) {
                $('#poscustomer').select2("readonly", true);
                $('#poswarehouse').select2("readonly", true);
            } else {
                bootbox.alert(lang.select_above);
                item = null;
                return false;
            }
        }
        $('.gcerror-con').hide();
        $('#gcModal').appendTo("body").modal('show');
        return false;
     });

     $('#gccustomer').select2({
        minimumInputLength: 1,
        ajax: {
            url: site.base_url+"customers/suggestions",
            dataType: 'json',
            quietMillis: 15,
            data: function (term, page) {
                return {
                    term: term,
                    limit: 10
                };
            },
            results: function (data, page) {
                if(data.results != null) {
                    return { results: data.results };
                } else {
                    return { results: [{id: '', text: 'No Match Found'}]};
                }
            }
        }
     });

     $('#genNo').click(function(){
        var no = generateCardNo();
        $(this).parent().parent('.input-group').children('input').val(no);
        return false;
     });
     $('.date').datetimepicker({format: site.dateFormats.js_sdate, fontAwesome: true, language: 'sma', todayBtn: 1, autoclose: 1, minView: 2 });
     $(document).on('click', '#addGiftCard', function (e) {
        var mid = (new Date).getTime(),
        gccode = $('#gccard_no').val(),
        gcname = $('#gcname').val(),
        gcvalue = $('#gcvalue').val(),
        gccustomer = $('#gccustomer').val(),
        gcexpiry = $('#gcexpiry').val() ? $('#gcexpiry').val() : '',
        gcprice = formatMoney($('#gcprice').val());
        if(gccode == '' || gcvalue == '' || gcprice == '' || gcvalue == 0 || gcprice == 0) {
            $('#gcerror').text('Please fill the required fields');
            $('.gcerror-con').show();
            return false;
        }

        var gc_data = new Array();
        gc_data[0] = gccode;
        gc_data[1] = gcvalue;
        gc_data[2] = gccustomer;
        gc_data[3] = gcexpiry;
        //if (typeof positems === "undefined") {
        //    var positems = {};
        //}

        $.ajax({
            type: 'get',
            url: site.base_url+'sales/sell_gift_card',
            dataType: "json",
            data: { gcdata: gc_data },
            success: function (data) {
                if(data.result === 'success') {
                    positems[mid] = {"id": mid, "item_id": mid, "label": gcname + ' (' + gccode + ')', "row": {"id": mid, "code": gccode, "name": gcname, "quantity": 1, "price": gcprice, "real_unit_price": gcprice, "tax_rate": 0, "qty": 1, "type": "manual", "discount": "0", "serial": "", "option":""}, "tax_rate": false, "options":false};
                    localStorage.setItem('positems', JSON.stringify(positems));
                    loadItems();
                    $('#gcModal').modal('hide');
                    $('#gccard_no').val('');
                    $('#gcvalue').val('');
                    $('#gcexpiry').val('');
                    $('#gcprice').val('');
                } else {
                    $('#gcerror').text(data.message);
                    $('.gcerror-con').show();
                }
            }
        });
        return false;
    });

    /* ------------------------------
     * Show manual item addition modal
     ------------------------------- */
     $(document).on('click', '#addManually', function (e) {
        if (count == 1) {
            positems = {};
            if ($('#poswarehouse').val() && $('#poscustomer').val()) {
                $('#poscustomer').select2("readonly", true);
                $('#poswarehouse').select2("readonly", true);
            } else {
                bootbox.alert(lang.select_above);
                item = null;
                return false;
            }
        }
        $('#mnet_price').text('0.00');
        $('#mpro_tax').text('0.00');
        $('#mModal').appendTo("body").modal('show');
        return false;
    });

     $(document).on('click', '#addItemManually', function (e) {
        var mid = (new Date).getTime(),
        mcode = $('#mcode').val(),
        mname = $('#mname').val(),
        mtax = parseInt($('#mtax').val()),
        mqty = parseFloat($('#mquantity').val()),
        mdiscount = $('#mdiscount').val() ? $('#mdiscount').val() : '0',
        unit_price = parseFloat($('#mprice').val()),
        mtax_rate = {};
        if (mcode && mname && mqty && unit_price) {
            $.each(tax_rates, function () {
                if (this.id == mtax) {
                    mtax_rate = this;
                }
            });

            positems[mid] = {"id": mid, "item_id": mid, "label": mname + ' (' + mcode + ')', "row": {"id": mid, "code": mcode, "name": mname, "quantity": mqty, "price": unit_price, "unit_price": unit_price, "real_unit_price": unit_price, "tax_rate": mtax, "tax_method": 0, "qty": mqty,"base_quantity":mqty, "type": "manual", "discount": mdiscount, "serial": "", "option":""}, "tax_rate": mtax_rate, 'units': false, "options":false};
            localStorage.setItem('positems', JSON.stringify(positems));
            loadItems();
        }
        $('#mModal').modal('hide');
        $('#mcode').val('');
        $('#mname').val('');
        $('#mtax').val('');
        $('#mquantity').val('');
        $('#mdiscount').val('');
        $('#mprice').val('');
        return false;
    });

    $(document).on('change', '#mprice, #mtax, #mdiscount', function () {
        var unit_price = parseFloat($('#mprice').val());
        var ds = $('#mdiscount').val() ? $('#mdiscount').val() : '0';
        if (ds.indexOf("%") !== -1) {
            var pds = ds.split("%");
            if (!isNaN(pds[0])) {
                item_discount = parseFloat(((unit_price) * parseFloat(pds[0])) / 100);
            } else {
                item_discount = parseFloat(ds);
            }
        } else {
            item_discount = parseFloat(ds);
        }
        unit_price -= item_discount;
        var pr_tax = $('#mtax').val(), item_tax_method = 0;
        var pr_tax_val = 0, pr_tax_rate = 0;
        if (pr_tax !== null && pr_tax != 0) {
            $.each(tax_rates, function () {
                if(this.id == pr_tax){
                    if (this.type == 1) {

                        if (item_tax_method == 0) {
                            pr_tax_val = formatDecimal(((unit_price) * parseFloat(this.rate)) / (100 + parseFloat(this.rate)));
                            pr_tax_rate = formatDecimal(this.rate) + '%';
                            unit_price -= pr_tax_val;
                        } else {
                            pr_tax_val = formatDecimal(((unit_price) * parseFloat(this.rate)) / 100);
                            pr_tax_rate = formatDecimal(this.rate) + '%';
                        }

                    } else if (this.type == 2) {

                        pr_tax_val = parseFloat(this.rate);
                        pr_tax_rate = this.rate;

                    }
                }
            });
        }

        $('#mnet_price').text(formatMoney(unit_price));
        $('#mpro_tax').text(formatMoney(pr_tax_val));
    });

    /* --------------------------
     * Edit Row Quantity Method
    --------------------------- */
    var old_row_qty;
    $(document).on("focus", '.rquantity', function () {
        old_row_qty = $(this).val();
    }).on("change", '.rquantity', function () {
        var row = $(this).closest('tr');
        if (!is_numeric($(this).val())) {
            $(this).val(old_row_qty);
            bootbox.alert(lang.unexpected_value);
            return;
        }
        var new_qty = parseFloat($(this).val()),
        item_id = row.attr('data-item-id');
        positems[item_id].row.base_quantity = new_qty;
        if(positems[item_id].row.unit != positems[item_id].row.base_unit) {
            $.each(positems[item_id].units, function(){
                if (this.id == positems[item_id].row.unit) {
                    positems[item_id].row.base_quantity = unitToBaseQty(new_qty, this);
                }
            });
        }
		
		if (site.settings.price_groups == 1) {
			if(positems[item_id].price_groups !== false) {
				var match_price = true;
				$.each(positems[item_id].price_groups, function () {
					 if(new_qty >= this.quantity_min && new_qty <= this.quantity_max){
						 positems[item_id].row.real_unit_price = parseFloat(this.price);
						 positems[item_id].row.price_group = parseFloat(this.price);
						 positems[item_id].row.price_group_id = this.price_group_id;
						 match_price = false;
					 }
				});
				if(match_price){
					 positems[item_id].row.real_unit_price = positems[item_id].row.base_unit_price;
					 positems[item_id].row.price_group = 0;
					 positems[item_id].row.price_group_id = 0;
				}
			}
		}
		
        positems[item_id].row.qty = new_qty;
        localStorage.setItem('positems', JSON.stringify(positems));
        loadItems();
    });


// end ready function
});

/* -----------------------
 * Load all items
 ----------------------- */

//localStorage.clear();
function loadItems() {
	
    if (localStorage.getItem('positems')) {
		
        total = 0;
        count = 1;
        an = 1;
        product_tax = 0;
        invoice_tax = 0;
        product_discount = 0;
        order_discount = 0;
        total_discount = 0;
        order_data = {};
        bill_data = {};		
		
        $("#posTable tbody").empty();
        var time = ((new Date).getTime())/1000;
		
		if(pos_settings.table_enable == 1){
			store_name = (biller && biller.company != '-' ? biller.company : biller.name);
            order_data.store_name = store_name;
            order_data.header = "\n"+lang.order+"\n\n";
            var pos_curr_time = 'Time : '+date(site.dateFormats.php_ldate, time)+ " ( "+(parseInt($(".item_order_count").val())+1)+" ) \n";			
			var pos_table = 'Room / Table : '+ $(".add_suspend_item").attr("value") +"\n";				
            var ob_info = pos_curr_time+pos_table+"\n";
            order_data.info = ob_info;
			
			// Addition Order Recept
			order_data.customer = $('#select2-chosen-1').text();
			order_data.user = username;
			order_data.date = date(site.dateFormats.php_ldate, time);
			order_data.table = $(".add_suspend_item").attr("value");
			
			// Addition Bill Recept
			bill_data.header = "\n"+lang.bill+"\n\n";
			bill_data.customer = $('#select2-chosen-1').text();
			bill_data.reference_no = $('#reference_note').val();
			bill_data.user = username;
			bill_data.date = date(site.dateFormats.php_ldate, time);
			bill_data.table = $(".add_suspend_item").attr("value");
			bill_data.bill_company = $("#bill_company").text();
			bill_data.bill_address = $('#bill_address').text();
			bill_data.bill_phone = $('#bill_phone').text();
		}
		
        if (pos_settings.remote_printing != 1) {
            store_name = (biller && biller.company != '-' ? biller.company : biller.name);
            order_data.store_name = store_name;
            bill_data.store_name = store_name;
            order_data.header = "\n"+lang.order+"\n\n";
            bill_data.header = "\n"+lang.bill+"\n\n";

            var pos_customer = 'C: '+$('#select2-chosen-1').text()+ "\n";
            var hr = 'R: '+$('#reference_note').val()+ "\n";
            var user = 'C: '+username+ "\n";
            var pos_curr_time = 'T: '+date(site.dateFormats.php_ldate, time)+ "\n";
			var pos_table = 'TB: '+ $(".add_suspend_item").attr("value") +"\n";				
            var ob_info = pos_customer+hr+user+pos_curr_time+pos_table+"\n";
            order_data.info = ob_info;
            bill_data.info = ob_info;
            var o_items = '';
            var b_items = '';
			
        } else {
            $("#order_span").empty(); 
			$("#bill_span").empty();
			
			$(".print_order").each(function(){
				var item = $(this).attr("data-item");
				$("#order_span_"+item).empty();
			});	
			
            var styles = '<style>table, th, td { border-collapse:collapse; border-bottom: 1px solid #CCC; } .logo{ margin-bottom:10px; } .no-border { border: 0; } .bold { font-weight: bold; }</style>';
			var pos_logo = '<div class="col-xs-12 text-center"><img class="logo" src="'+site.base_url+'assets/uploads/logos/'+site.settings.logo2+'" /></div>';			
			var pos_head1 = '<span style="text-align:center;"><h3>'+site.settings.site_name+'</h3><h4>';			
			var pos_head_bill = '<span style="text-align:center;"><h3>'+$("#bill_company").text()+'</h3><p>'+$("#bill_address").text()+'</p><p>'+$("#bill_phone").text()+'</p><h4>';
			var pos_head3 = '</h4><p class="text-left">Customer : '+$('#select2-chosen-1').text()+'<br>Cashier : '+username;
			
			if(pos_settings.table_enable == 1){
				pos_head3 += '<br>Time In : '+$(".add_suspend_item").attr("time")+'<br>Time Out : '+date(site.dateFormats.php_ldate, time)+'<br>Room / Table : '+$(".add_suspend_item").attr("value")+'</br>Saleman : '+ $("#saleman").val() +'</p></span>';
			}else{
				pos_head3 += '<br>Time : '+date(site.dateFormats.php_ldate, time)+'</p></span>';
			}
			
			var pos_orderno = ''; var pos_head2= '';
			if(pos_settings.table_enable == 1){
				pos_orderno = ' ('+$(".item_ordered").val()+') ';
				pos_head2 = '</h4><p class="text-left">TB : '+$(".add_suspend_item").attr("value")+pos_orderno+'</p></span>';
			}
			
            $("#order_span").prepend(styles + pos_head1+' '+lang.order+' '+pos_head2);
			$(".print_order").each(function(){
				var item = $(this).attr("data-item");				
				$("#order_span_"+item).prepend(styles + pos_head1+' '+lang.order+' '+pos_head2);
			});	
			
			$("#bill_span").prepend(styles + pos_logo + pos_head_bill + pos_head3);
            $("#order-table").empty(); 
			$("#bill-table").empty(); 
			
			$(".print_order").each(function(){
				var item = $(this).attr("data-item");
				$("#order-table-"+item).empty(); 
			});
			
			var bill_head = '<thead><tr style="background:#000; color:#FFF;"><th style="text-align:center;">'+lang.no+'</th><th style="text-align:center;">'+lang.description+'</th><th style="text-align:center;">'+lang.qty+'</th><th style="text-align:center;">'+lang.unit_price+'</th><th style="text-align:center;">'+lang.total+'</th></tr></thead>';
			$("#bill-table").append(bill_head); 
        }
        positems = JSON.parse(localStorage.getItem('positems'));
        if (pos_settings.item_order == 1) {
            sortedItems = _.sortBy(positems, function(o){ return [parseInt(o.category), parseInt(o.order)]; } );
        } else if (site.settings.item_addition == 1) {
            sortedItems = _.sortBy(positems, function(o){return [parseInt(o.order)];})
        } else {
            sortedItems = positems;
        }
        var category = 0, print_cate = false;
        //var itn = parseInt(Object.keys(sortedItems).length);
		if(sortedItems == null){
			return false;
		}
		var attributes = [];
		var attributes_bill = [];
		var splashArray = [];
        $.each(sortedItems, function () {
            var item = this;			
            var item_id = site.settings.item_addition == 1 ? item.item_id : item.id;
            positems[item_id] = item;
            item.order = item.order ? item.order : new Date().getTime();
            var product_id = item.row.id, item_type = item.row.type, combo_items = item.combo_items, item_price = item.row.price, item_qty = item.row.qty, item_aqty = item.row.quantity, item_tax_method = item.row.tax_method, item_ds = item.row.discount, item_discount = 0, item_option = item.row.option, item_code = item.row.code, item_serial = item.row.serial, item_name = item.row.name.replace(/"/g, "&#034;").replace(/'/g, "&#039;");
            var product_unit = item.row.unit, base_quantity = item.row.base_quantity;
            var unit_price = item.row.real_unit_price;
			var real_unit_price = item.row.real_unit_price;
            var item_comment = item.row.comment ? item.row.comment : '';
            var item_ordered = item.row.ordered ? item.row.ordered : 0;
			var item_category_type 	= item.row.category_type ? item.row.category_type : '';			
			var adjustment_qty = item.row.adjustment_qty ? item.row.adjustment_qty : 0;
			var return_qty = item.row.return_qty ? item.row.return_qty : 0;
			
            if(item.row.fup != 1 && product_unit != item.row.base_unit) {
                $.each(item.units, function(){
                    if (this.id == product_unit) {
                        base_quantity = formatDecimal(unitToBaseQty(item.row.qty, this), 4);
                        //unit_price = formatDecimal((parseFloat(item.row.base_unit_price)*(unitToBaseQty(1, this))), 4);
						unit_price = item_price;
                    }
                });
            }
            if(item.options !== false) {
                $.each(item.options, function () {
                    if(this.id == item.row.option && this.price != 0 && this.price != '' && this.price != null) {
                        item_price = unit_price+(parseFloat(this.price));
                        unit_price = item_price;
                    }
                });
            }

            var ds = item_ds ? item_ds : '0';
            if (ds.indexOf("%") !== -1) {
                var pds = ds.split("%");
                if (!isNaN(pds[0])) {
                    item_discount = formatDecimal((parseFloat(((unit_price) * parseFloat(pds[0])) / 100)), 4);
                } else {
                    item_discount = formatDecimal(ds);
                }
            } else {
                 item_discount = formatDecimal(ds);
            }
            product_discount += formatDecimal(item_discount * item_qty);
			
            unit_price = formatDecimal(unit_price-item_discount);
            var pr_tax = item.tax_rate;
            var pr_tax_val = 0, pr_tax_rate = 0;
            if (site.settings.tax1 == 1) {
                if (pr_tax !== false) {
                    if (pr_tax.type == 1) {

                        if (item_tax_method == '0') {
                            pr_tax_val = formatDecimal(((unit_price) * parseFloat(pr_tax.rate)) / (100 + parseFloat(pr_tax.rate)), 4);
                            pr_tax_rate = formatDecimal(pr_tax.rate) + '%';
                        } else {
                            pr_tax_val = formatDecimal(((unit_price) * parseFloat(pr_tax.rate)) / 100, 4);
                            pr_tax_rate = formatDecimal(pr_tax.rate) + '%';
                        }

                    } else if (pr_tax.type == 2) {

                        pr_tax_val = formatDecimal(pr_tax.rate);
                        pr_tax_rate = pr_tax.rate;

                    }
                    product_tax += pr_tax_val * item_qty;
                }
            }
            item_price = item_tax_method == 0 ? formatDecimal((unit_price-pr_tax_val), 4) : formatDecimal(unit_price);
            unit_price = formatDecimal((unit_price+item_discount), 4);
            var sel_opt = '';
            $.each(item.options, function () {
                if(this.id == item_option) {
                    sel_opt = this.name;
                }
            });

            if (pos_settings.item_order == 1 && category != item.row.category_id) {
                category = item.row.category_id;
                print_cate = true;
                var newTh = $('<tr></tr>');
                newTh.html('<td colspan="100%"><strong>'+item.row.category_name+'</strong></td>');
                newTh.appendTo("#posTable");
            } else {
                print_cate = false;
            }
			
			/**=========Drink & Food (Remote Printing)==========**/
			
			var att = {};
			if(item_ordered <= 0){
				att = { cf1 : item.row.cf1, code : item.row.code, name : item.row.name, qty : item.row.qty , category_type : item.row.category_type, item_comment:item_comment };
			}
			var att_bills = {};
			if(item_ordered >= 0){
				att_bills = { cf1 : item.row.cf1, code : item.row.code, name : item.row.name, qty : item.row.qty , category_type : item.row.category_type, item_comment:item_comment, item_price : item_price, item_discount : item_discount };
			}
			attributes.push(att);
			attributes_bill.push(att_bills);
			
			/**=========Drink & Food (Remote Printing)==========**/
			
			var item_order_var = "";
			var rquantity_var = "";
			var order_name = "N/A";
			
			if(pos_settings.table_enable == 1){
				item_order_var = '<small>['+item_ordered+']</small>';				
				if(item_ordered > 0 && adjustment_qty <= 0){
					rquantity_var = " readonly";
				}
				if(item.row.order_name !== undefined){
					order_name = "Order By : " + item.row.order_name;
				}
			}
            var row_no = item_id;//(new Date).getTime();
            var newTr = $('<tr title="'+order_name+'" id="row_' + row_no + '" class="row_' + item_id + '" data-item-id="' + item_id + '"></tr>');           
			tr_html = '<td><input name="product_id[]" type="hidden" class="rid" value="' + product_id + '"><input name="product_type[]" type="hidden" class="rtype" value="' + item_type + '"><input name="suspend_item_id[]" type="hidden" class="suspend_item_id" value="' + item.row.suspend_item_id + '"><input name="product_code[]" type="hidden" class="rcode" value="' + item_code + '"><input name="product_name[]" type="hidden" class="rname" value="' + item_name + '"><input name="product_option[]" type="hidden" class="roption" value="' + item_option + '"><input name="product_comment[]" type="hidden" class="rcomment" value="' + item_comment + '"><input type="hidden" name="cost[]" value="'+formatDecimal(item.row.cost)+'" /><span class="sname" id="name_' + row_no + '">' + item_code +' - '+ item_name +(sel_opt != '' ? ' ('+sel_opt+')' : '')+'</span><i class="pull-right fa fa-edit tip pointer edit" id="' + row_no + '" data-item="' + item_id + '" title="Edit" style="cursor:pointer;"></i><i class="pull-right fa fa-comment'+(item_comment != '' ? '' :'-o')+' tip pointer comment" id="' + row_no + '" data-item="' + item_id + '" title="Comment" style="cursor:pointer;margin-right:5px;"></i> &nbsp; '+item_order_var+'</td>';
            tr_html += '<td class="text-right">';
			/*=================*/
			var phone = (item.row.phone? item.row.phone : '');
			var identity = (item.row.identity? item.row.identity : '');
			var start_date = (item.row.start_date? item.row.start_date : '');
			var end_date = (item.row.end_date? item.row.end_date : '');
			var information = phone+'#'+identity+'#'+start_date+'#'+end_date;
			tr_html += '<input type="hidden" name="customer_info[]"  value="'+information+'" />';
			/*=================*/
			tr_html += '<input type="hidden" class="item_ordered" name="item_ordered[]"  value="' + item_ordered + '"/>';
			tr_html += '<input type="hidden" class="return_qty" name="return_qty[]" old_qty="' + return_qty + '"  value="' + return_qty + '"/>';
			tr_html += '<input type="hidden" class="ordered_by" name="ordered_by[]"  value="' + item.row.ordered_by + '"/>';
            if (site.settings.product_serial == 1) {
                tr_html += '<input class="form-control input-sm rserial" name="serial[]" type="hidden" id="serial_' + row_no + '" value="'+item_serial+'">';
            }
			if (site.settings.price_groups == 1) {
				var price_group_id = (item.row.price_group_id?item.row.price_group_id:0);
				var price_group = (item.row.price_group?item.row.price_group:0);
				tr_html += '<input class="price_group_id" name="price_group_id[]" type="hidden" value="'+price_group_id+'"/>';
                tr_html += '<input class="price_group" name="price_group[]" type="hidden" value="'+price_group+'"/>';
            }
            if (site.settings.product_discount == 1) {
                tr_html += '<input class="form-control input-sm rdiscount" name="product_discount[]" type="hidden" id="discount_' + row_no + '" value="' + item_ds + '">';
            }
            if (site.settings.tax1 == 1) {
                tr_html += '<input class="form-control input-sm text-right rproduct_tax" name="product_tax[]" type="hidden" id="product_tax_' + row_no + '" value="' + pr_tax.id + '"><input type="hidden" class="sproduct_tax" id="sproduct_tax_' + row_no + '" value="' + formatMoney(pr_tax_val * item_qty) + '">';
            }
			if (site.settings.cart == 1) {
                tr_html += '<input type="hidden" class="cart" value="'+item.row.cart+'" />';
            }
            tr_html += '<input class="rprice" name="net_price[]" type="hidden" id="price_' + row_no + '" value="' + item_price + '"><input class="ruprice" name="unit_price[]" type="hidden" value="' + unit_price + '"><input class="realuprice" name="real_unit_price[]" type="hidden" value="' + item.row.real_unit_price + '"> <span class="text-right sprice">'+formatMoney(parseFloat(real_unit_price) + parseFloat(pr_tax_val))+'</span> &nbsp;&nbsp; <small class="sitem_discount"> ('+formatMoney(item_discount)+') </small> <span class="text-right sprice hidden" id="sprice_' + row_no + '">' + formatMoney(parseFloat(item_price) + parseFloat(pr_tax_val)) + '</span></td>';
            var quantity_input = '';			
			if (site.settings.qty_operation == 1) {

				tr_html += '<td>';										
					tr_html += '<input type="text" value="'+(item.row.slength?parseFloat(item.row.slength):1)+'" class="slength" style="width:30px; text-align:center;" name="slength[]" />';
				tr_html += '</td>';
				tr_html += '<td>';										
					tr_html += '<input type="text" value="'+(item.row.swidth?parseFloat(item.row.swidth):1)+'" class="swidth" style="width:30px; text-align:center;" name="swidth[]" />';
				tr_html += '</td>';
				tr_html += '<td>';										
					tr_html += '<input type="text" value="'+(item.row.square?parseFloat(item.row.square):1)+'" class="square" style="width:30px; text-align:center;" name="square[]" />';
				tr_html += '</td>';
				rquantity_var = 'readonly';
				
			}
			
			tr_html += '<td><input '+rquantity_var+' class="form-control input-sm kb-pad text-center rquantity" tabindex="'+((site.settings.set_focus == 1) ? an : (an+1))+'" name="quantity[]" type="text" value="' + formatDecimal(item_qty) + '" data-id="' + row_no + '" data-item="' + item_id + '" id="quantity_' + row_no + '" onClick="this.select();"><input name="product_unit[]" type="hidden" class="runit" value="' + product_unit + '"><input name="product_base_quantity[]" type="hidden" class="rbase_quantity" value="' + base_quantity + '"></td>';            
			tr_html += '<td class="text-right"><span class="text-right ssubtotal" id="subtotal_' + row_no + '">' + formatMoney(((parseFloat(item_price) + parseFloat(pr_tax_val)) * parseFloat(item_qty))) + '</span></td>';
            tr_html += '<td class="text-center"><i class="fa fa-times tip pointer posdel" id="' + row_no + '" title="Remove" style="cursor:pointer;"></i></td>';
			newTr.html(tr_html);
            if (pos_settings.item_order == 1) {
                newTr.appendTo("#posTable");
            } else {
                newTr.prependTo("#posTable");
            }
            total += formatDecimal(((parseFloat(item_price) + parseFloat(pr_tax_val)) * parseFloat(item_qty)), 4);
            count += parseFloat(item_qty);
            an++;

            if (item_type == 'standard' && item.options !== false) {				
                $.each(item.options, function () {					
                    if(this.id == item_option && base_quantity > this.quantity) {
                        $('#row_' + row_no).addClass('danger');
                    }
                });
            } else if(item_type == 'standard' && base_quantity > item_aqty) {
                $('#row_' + row_no).addClass('danger');
            } else if (item_type == 'combo') {
                if(combo_items === false) {
                    $('#row_' + row_no).addClass('danger');
                } else {
                    $.each(combo_items, function(){
                        if(parseFloat(this.quantity) < (parseFloat(this.qty)*base_quantity) && this.type == 'standard') {
                            $('#row_' + row_no).addClass('danger');
                        }
                    });
                }
            }

            var comments = item_comment.split(/\r?\n/g);
            if (pos_settings.remote_printing != 1) {
				
                b_items += "#"+(an-1)+" "+ item_code + " - " + item_name + "\n";
                for (var i = 0, len = comments.length; i < len; i++) {
                    b_items += (comments[i].length > 0 ? "   * "+comments[i]+"\n" : "");
                }
                b_items += printLine("   "+formatDecimal(item_qty) + " x " + formatMoney(parseFloat(item_price) + parseFloat(pr_tax_val))+": "+ formatMoney(((parseFloat(item_price) + parseFloat(pr_tax_val)) * parseFloat(item_qty)))) + "\n";
                o_items += printLine("#"+(an-1)+" "+ item_code + " - " + item_name + ": [ "+ (item_ordered != 0 ? 'xxxx' : formatDecimal(item_qty))) + " ]\n";
                for (var i = 0, len = comments.length; i < len; i++) {
                    o_items += (comments[i].length > 0 ? "   * "+comments[i]+"\n" : "");
                }
                o_items += "\n";
				
            } else {
				//===========kheang=============//
				var itemtmp = {};
				itemtmp = {item_category_type:item_category_type,item:$(this).attr("data-item"),category_name:item.row.category_name, item_group:item_code+item_price,item_ordered:item_ordered,item_id : item_id, item_code : item_code, item_name : item_name,comments:comments,item_qty:item_qty,return_qty:return_qty,item_discount:item_discount,item_price:item_price,pr_tax_val:pr_tax_val };
				splashArray.push(itemtmp);
				
				//===========end kheang=============//				
                if (pos_settings.item_order == 1 && print_cate) {
                    var oprTh = $('<tr></tr>');
                    oprTh.html('<td colspan="100%" class="no-border"><strong>'+item.row.category_name+'</strong></td>');
                }				
				if(item_ordered == 0 || return_qty > 0){					
					var oprTr = '<tr class="row_' + item_id + '" data-item-id="' + item_id + '"><td>#'+(an-1)+' ' + item_code + " - " + item_name + '';
					for (var i = 0, len = comments.length; i < len; i++) {
						oprTr += (comments[i] ? '<br> <b>*</b> <small>'+comments[i]+'</small>' : '');
					}
					oprTr += '</td><td>[ ' + (item_ordered != 0 ? 'xxx' : formatDecimal((parseFloat(item_qty)+parseFloat(return_qty)))) +' ]</td></tr>';
				}
				$("#order-table").append(oprTr);
		
				if(item_category_type!="")
				{
					$(".print_order").each(function(){
						var item = $(this).attr("data-item");
						var type = item_category_type.toLowerCase();						
						if(type == item){							
							$("#order-table-"+type).append(oprTr);							
						}
					});
				}				
				/**========Drink & Food===========**/
            }
			
        });
		//===========kheang=============//
		var result = [];
		splashArray.reduce(function (res, value) {
			if (!res[value.item_group]) {
				res[value.item_group] = {
					item_qty: 0,
					return_qty:0,
					item_code: value.item_code,
					item_group: value.item_group,
					item_ordered: value.item_ordered,
					item_id: value.item_id,
					item_name: value.item_name,
					comments: value.comments,
					item_discount: value.item_discount,
					item_price: value.item_price,
					pr_tax_val: value.pr_tax_val,
					category_name:value.category_name
				};
				result.push(res[value.item_group])
			}

			res[value.item_group].item_qty += (value.item_qty)-0;
			res[value.item_group].return_qty += (value.return_qty)-0;
			return res;
			
		}, {});
		var b = 0;
		$.each(result, function () {
			 b++;
			 if (pos_settings.item_order == 1 && print_cate) {
                    var bprTh = $('<tr></tr>');
                    bprTh.html('<td colspan="100%" class="no-border"><strong>'+this.category_name+'</strong></td>');
					$("#bill-table").append(bprTh);
                }				
                var bprTr = '<tr class="row_' + this.item_id + '" data-item-id="' + this.item_id + '"><td>'+b+'</td><td class="no-border"> '+ this.item_code + " - " + this.item_name + '';
                for (var i = 0, len = this.comments.length; i < len; i++) {
                    bprTr += (this.comments[i] ? '<br> <b>*</b> <small>'+this.comments[i]+'</small>' : '');
                }
                bprTr += '</td><td style="text-align:center;">' + formatDecimal(parseFloat(this.item_qty)+parseFloat(this.return_qty)) + '</td> <td style="text-align:right;">' + (this.item_discount != 0 ? '<del>'+formatMoney(parseFloat(this.item_price) + parseFloat(this.pr_tax_val) + this.item_discount)+'</del>' : '') + formatMoney(parseFloat(this.item_price) + parseFloat(this.pr_tax_val))+ '</td><td style="text-align:right;">'+ formatMoney(((parseFloat(this.item_price) + parseFloat(this.pr_tax_val)) * (parseFloat(this.item_qty)+parseFloat(this.return_qty)))) +'</td></tr>';
                $("#bill-table").append(bprTr);
			
		});
		var d = 0;
		$.each(result, function () {
			
			if(parseFloat(this.return_qty)>0){
				d++;
				var printReturn = '<tr class="row_' + this.item_id + '" data-item-id="' + this.item_id + '"><td>'+d+'</td><td class="no-border"> '+ this.item_code + " - " + this.item_name + '';
				for (var i = 0, len = this.comments.length; i < len; i++) {
					printReturn += (this.comments[i] ? '<br> <b>*</b> <small>'+this.comments[i]+'</small>' : '');
				}
				printReturn += '</td><td style="text-align:center;">' + formatDecimal(parseFloat(this.return_qty*-1)) + '</td> <td style="text-align:right;">' + (this.item_discount != 0 ? '<del>'+formatMoney(parseFloat(this.item_price) + parseFloat(this.pr_tax_val) + this.item_discount)+'</del>' : '') + formatMoney(parseFloat(this.item_price) + parseFloat(this.pr_tax_val))+ '</td><td style="text-align:right;">'+ formatMoney(((parseFloat(this.item_price) + parseFloat(this.pr_tax_val)) * (parseFloat(this.return_qty*-1)))) +'</td></tr>';
				if(d==1){
					$("#bill-table").append('<tr class="warning"><td colspan="100%" class="no-border"><strong>Returned Items</strong></td></tr>');
				}
			}
			
			$("#bill-table").append(printReturn);			
		});
		//===========end kheang=============//
		
		
        // Order level discount calculations
        if (posdiscount = localStorage.getItem('posdiscount')) {
            var ds = posdiscount;
            if (ds.indexOf("%") !== -1) {
                var pds = ds.split("%");
                if (!isNaN(pds[0])) {
                    order_discount = formatDecimal((parseFloat(((total) * parseFloat(pds[0])) / 100)), 4);
					var discount_td = ds;
                } else {
					
                    order_discount = parseFloat(ds);
                }
            } else {
				if(ds > 0){
					var discount_td = ds+'$';
				}else{
					var discount_td = '';
				}
				
                order_discount = parseFloat(ds);
            }
            //total_discount += parseFloat(order_discount);
        }

        // Order level tax calculations
        if (site.settings.tax2 != 0) {
            if (postax2 = localStorage.getItem('postax2')) {
                $.each(tax_rates, function () {
                    if (this.id == postax2) {
                        if (this.type == 2) {
                            invoice_tax = formatDecimal(this.rate);
                        }
                        if (this.type == 1) {
                            invoice_tax = formatDecimal((((total - order_discount) * this.rate) / 100), 4);
                        }
                    }
                });
            }
        }

        total = formatDecimal(total);
        product_tax = formatDecimal(product_tax);
        total_discount = formatDecimal(order_discount + product_discount);

        // Totals calculations after item addition
        var gtotal = parseFloat(((total + invoice_tax) - order_discount) + parseFloat(shipping));
        $('#total').text(formatMoney(total));
        $('#titems').text((an - 1) + ' (' + formatDecimal(parseFloat(count) - 1) + ')');
        $('#total_items').val((parseFloat(count) - 1));
        $('#tds').text('('+formatMoney(product_discount)+') '+formatMoney(order_discount));
        if (site.settings.tax2 != 0) {
            $('#ttax2').text(formatMoney(invoice_tax));
        }
        $('#tship').text(parseFloat(shipping) > 0 ? formatMoney(shipping) : '');
        $('#gtotal').text(formatMoney(gtotal));
		
		/*======CUSTOME PRINT ORDER======*/
		if(pos_settings.table_enable == 1){
			order_data.attributes = attributes;
			order_data.items = o_items;
			
			bill_data.attributes_bill = attributes_bill;
			bill_data.total = total;
			bill_data.grand_total = gtotal;
			bill_data.order_discount = order_discount;
			bill_data.items = b_items;
			bill_data.invoice_tax = invoice_tax;
		}
		/*============*/
			
        if (pos_settings.remote_printing != 1) {
			
			order_data.attributes = attributes;
            order_data.items = o_items;
            bill_data.items = b_items;
            var b_totals = '';
            b_totals += printLine(lang.total+': '+ formatMoney(total)) +"\n";
            if(order_discount > 0) {
                b_totals += printLine(lang.discount+': '+ formatMoney(order_discount)) +"\n";
            }
            if (site.settings.tax2 != 0 && invoice_tax != 0) {
                b_totals += printLine(lang.order_tax+': '+ formatMoney(invoice_tax)) +"\n";
            }
            b_totals += printLine(lang.grand_total+': '+ formatMoney(gtotal)) +"\n";
            if(pos_settings.rounding != 0) {
                round_total = roundNumber(gtotal, parseInt(pos_settings.rounding));
                var rounding = formatDecimal(round_total - gtotal);
                b_totals += printLine(lang.rounding+': '+ formatMoney(rounding)) +"\n";
                b_totals += printLine(lang.total_payable+': '+ formatMoney(round_total)) +"\n";
            }
            b_totals += "\n"+ lang.items+': '+ (an - 1) + ' (' + (parseFloat(count) - 1) + ')' +"\n";
            bill_data.totals = b_totals;
            bill_data.footer = "\n"+ lang.merchant_copy+"\n";

        } else {
			
            var bill_totals = ''; var currency_amt = 4000;
            bill_totals += '<tr class="bold text-right"><td>'+lang.total+'</td><td style="text-align:right; width:100px;">'+formatMoney(total)+'</td></tr>';
			bill_totals += '<tr class="bold text-right"><td>'+lang.total+' (KHM)</td><td style="text-align:right; width:100px;">'+formatMoneyKH(formatDecimal(total * currency_amt, 0))+'</td></tr>';
			
            if(order_discount > 0 ) {
                bill_totals += '<tr class="bold text-right"><td>'+lang.discount+' '+discount_td+'</td><td style="text-align:right; width:100px;">'+formatMoney(order_discount)+'</td></tr>';
				bill_totals += '<tr class="bold text-right"><td>'+lang.discount+' '+discount_td+' (KHM)</td><td style="text-align:right; width:100px;">'+formatMoneyKH(formatDecimal(order_discount * currency_amt, 0))+'</td></tr>';
            }
            if (site.settings.tax2 != 0 && invoice_tax != 0) {
                bill_totals += '<tr class="bold text-right"><td>'+lang.order_tax+'</td><td style="text-align:right; width:100px;">'+formatMoney(invoice_tax)+'</td></tr>';
				bill_totals += '<tr class="bold text-right"><td>'+lang.order_tax+' (KHM)</td><td style="text-align:right; width:100px;">'+formatMoneyKH(formatDecimal(invoice_tax * currency_amt, 0))+'</td></tr>';
            }
			
            bill_totals += '<tr class="bold text-right"><td>'+lang.grand_total+'</td><td style="text-align:right; width:100px;">'+formatMoney(gtotal)+'</td></tr>';
			bill_totals += '<tr class="bold text-right"><td>'+lang.grand_total+' (KHM)</td><td style="text-align:right; width:100px;">'+formatMoneyKH(formatDecimal(gtotal * currency_amt, 0))+'</td></tr>';
            
			if(pos_settings.rounding != 0) {
                round_total = roundNumber(gtotal, parseInt(pos_settings.rounding));
                var rounding = formatDecimal(round_total - gtotal);
                bill_totals += '<tr class="bold text-right"><td>'+lang.rounding+'</td><td style="text-align:right; width:100px;">'+formatMoney(rounding)+'</td></tr>';
				bill_totals += '<tr class="bold text-right"><td>'+lang.rounding+' (KHM)</td><td style="text-align:right; width:100px;">'+formatMoneyKH(formatDecimal(rounding * currency_amt, 0))+'</td></tr>';
                
				bill_totals += '<tr class="bold text-right"><td>'+lang.total_payable+'</td><td style="text-align:right; width:100px;">'+formatMoney(round_total)+'</td></tr>';
				bill_totals += '<tr class="bold text-right"><td>'+lang.total_payable+' (KHM)</td><td style="text-align:right; width:100px;">'+formatMoneyKH(formatDecimal(round_total * currency_amt, 0))+'</td></tr>';
            }
            //bill_totals += '<tr class="bold text-right"><td>'+lang.items+'</td><td style="text-align:right;">'+(an - 1) + ' (' + (parseFloat(count) - 1) + ')</td></tr>';
            $('#bill-total-table').empty();
            $('#bill-total-table').append(bill_totals);
            //$('#bill_footer').append('<p class="text-center"><br>'+lang.merchant_copy+'</p>');
        }
        if(count > 1) {
            $('#poscustomer').select2("readonly", true);
			$('#poswarehouse').select2("readonly", true);
        } else {
            $('#poscustomer').select2("readonly", false);
            $('#poswarehouse').select2("readonly", false);
        }
		
		
        if (KB) { display_keyboards(); }
        if (site.settings.set_focus == 1) {
            $('#add_item').attr('tabindex', an);
			if(!pos_settings.table_enable){
				$('[tabindex='+(an-1)+']').focus().select();
			}
        } else {
            $('#add_item').attr('tabindex', 1);
            $('#add_item').focus();
        }
    }
}

function printLine(str) {
    var size = pos_settings.char_per_line;
    var len = str.length;
    var res = str.split(":");
    var newd = res[0];
    for(i=1; i<(size-len); i++) {
        newd += " ";
    }
    newd += res[1];
    return newd;
}

/* -----------------------------
 * Add Purchase Iten Function
 * @param {json} item
 * @returns {Boolean}
 ---------------------------- */

 function add_invoice_item(item) {
	
    if (count == 1) {
        positems = {};
        if ($('#poswarehouse').val() && $('#poscustomer').val()) {
            $('#poscustomer').select2("readonly", true);
            $('#poswarehouse').select2("readonly", true);
        } else {
            bootbox.alert(lang.select_above);
            item = null;
            return;
        }
    }
    if (item == null)
        return;

    var item_id = site.settings.item_addition == 1 ? item.item_id : item.id;
    if (positems[item_id]) {
 
        var new_qty = parseFloat(positems[item_id].row.qty) + 1;
        positems[item_id].row.base_quantity = new_qty;
        if(positems[item_id].row.unit != positems[item_id].row.base_unit) {
            $.each(positems[item_id].units, function(){
                if (this.id == positems[item_id].row.unit) {
                    positems[item_id].row.base_quantity = unitToBaseQty(new_qty, this);
                }
            });
        }
        positems[item_id].row.qty = new_qty;

    } else {
        positems[item_id] = item;
    }
	
    positems[item_id].order = new Date().getTime();
    localStorage.setItem('positems', JSON.stringify(positems));
    loadItems();
	
	
	/*=======Reload before add only one item========*/
	/* var sid = $("[name=suspend_bill_id]").val();		
	if( sid > 0 && pos_settings.table_enable){
		var new_item = {};
		$.ajax({
			  type: "GET",
			  dataType: "JSON",
			  url: site.base_url + "pos/load_suspend_items/"+sid,
			  success : function(data){
				new_item[item_id] = positems[item_id];
				var raw_items = $.extend(data.pr,new_item);
				localStorage.setItem('positems', JSON.stringify(raw_items));
				loadItems();
			  }
		});
	} */
	/*=======Reload before add only one item========*/

    return true;
 }


 if (typeof (Storage) === "undefined") {
    $(window).bind('beforeunload', function (e) {
        if (count > 1) {
            var message = "You will loss data!";
            return message;
        }
    });
 }

 function display_keyboards() {

    $('.kb-text').keyboard({
        autoAccept: true,
        alwaysOpen: false,
        openOn: 'focus',
        usePreview: false,
        layout: 'custom',
        //layout: 'qwerty',
        display: {
            'bksp': "\u2190",
            'accept': 'return',
            'default': 'ABC',
            'meta1': '123',
            'meta2': '#+='
        },
        customLayout: {
            'default': [
            'q w e r t y u i o p {bksp}',
            'a s d f g h j k l {enter}',
            '{s} z x c v b n m , . {s}',
            '{meta1} {space} {cancel} {accept}'
            ],
            'shift': [
            'Q W E R T Y U I O P {bksp}',
            'A S D F G H J K L {enter}',
            '{s} Z X C V B N M / ? {s}',
            '{meta1} {space} {meta1} {accept}'
            ],
            'meta1': [
            '1 2 3 4 5 6 7 8 9 0 {bksp}',
            '- / : ; ( ) \u20ac & @ {enter}',
            '{meta2} . , ? ! \' " {meta2}',
            '{default} {space} {default} {accept}'
            ],
            'meta2': [
            '[ ] { } # % ^ * + = {bksp}',
            '_ \\ | &lt; &gt; $ \u00a3 \u00a5 {enter}',
            '{meta1} ~ . , ? ! \' " {meta1}',
            '{default} {space} {default} {accept}'
            ]}
        });
    $('.kb-pad').keyboard({
        restrictInput: true,
        preventPaste: true,
        autoAccept: true,
        alwaysOpen: false,
        openOn: 'click',
        usePreview: false,
        layout: 'custom',
        display: {
            'b': '\u2190:Backspace',
        },
        customLayout: {
            'default': [
            '1 2 3 {b}',
            '4 5 6 . {clear}',
            '7 8 9 0 %',
            '{accept} {cancel}'
            ]
        }
    });
    var cc_key = (site.settings.decimals_sep == ',' ? ',' : '{clear}');
    $('.kb-pad1').keyboard({
        restrictInput: true,
        preventPaste: true,
        autoAccept: true,
        alwaysOpen: false,
        openOn: 'click',
        usePreview: false,
        layout: 'custom',
        display: {
            'b': '\u2190:Backspace',
        },
        customLayout: {
            'default': [
            '1 2 3 {b}',
            '4 5 6 . '+cc_key,
            '7 8 9 0 %',
            '{accept} {cancel}'
            ]
        }
    });

 }

/*$(window).bind('beforeunload', function(e) {
    if(count > 1){
    var msg = 'You will loss the sale data.';
        (e || window.event).returnValue = msg;
        return msg;
    }
});
*/
if(site.settings.auto_detect_barcode == 1) {
    $(document).ready(function() {
        var pressed = false;
        var chars = [];
        $(window).keypress(function(e) {
            if(e.key == '%') { pressed = true; }
            chars.push(String.fromCharCode(e.which));
            if (pressed == false) {
                setTimeout(function(){
                    if (chars.length >= 8) {
                        var barcode = chars.join("");
                        $( "#add_item" ).focus().autocomplete( "search", barcode );
                    }
                    chars = [];
                    pressed = false;
                },200);
            }
            pressed = true;
        });
    });
}

$(document).ready(function() {
    read_card();
});

function generateCardNo(x) {
    if(!x) { x = 16; }
    chars = "1234567890";
    no = "";
    for (var i=0; i<x; i++) {
        var rnum = Math.floor(Math.random() * chars.length);
        no += chars.substring(rnum,rnum+1);
    }
    return no;
}
function roundNumber(number, toref) {
    switch(toref) {
        case 1:
            var rn = formatDecimal(Math.round(number * 20)/20);
            break;
        case 2:
            var rn = formatDecimal(Math.round(number * 2)/2);
            break;
        case 3:
            var rn = formatDecimal(Math.round(number));
            break;
        case 4:
            var rn = formatDecimal(Math.ceil(number));
            break;
        default:
            var rn = number;
    }
    return rn;
}
function getNumber(x) {
    return accounting.unformat(x);
}
function formatQuantity(x) {
    return (x != null) ? '<div class="text-center">'+formatNumber(x, site.settings.qty_decimals)+'</div>' : '';
}
function formatNumber(x, d) {
    if(!d && d != 0) { d = site.settings.decimals; }
    if(site.settings.sac == 1) {
        return formatSA(parseFloat(x).toFixed(d));
    }
    return accounting.formatNumber(x, d, site.settings.thousands_sep == 0 ? ' ' : site.settings.thousands_sep, site.settings.decimals_sep);
}
function formatMoney(x, symbol) {
    if(!symbol) { symbol = ""; }
    if(site.settings.sac == 1) {
        return symbol+''+formatSA(parseFloat(x).toFixed(site.settings.decimals));
    }
    return accounting.formatMoney(x, symbol, site.settings.decimals, site.settings.thousands_sep == 0 ? ' ' : site.settings.thousands_sep, site.settings.decimals_sep, "%s%v");
}

function formatMoneyKH(x, symbol) {
    if(!symbol) { symbol = ""; }
    if(site.settings.sac == 1) {
        return symbol+''+formatSA(parseFloat(x).toFixed(0));
    }
    return accounting.formatMoney(x, symbol, 0, site.settings.thousands_sep == 0 ? ' ' : site.settings.thousands_sep, site.settings.decimals_sep, "%s%v");
}

function formatCNum(x) {
    if (site.settings.decimals_sep == ',') {
        var x = x.toString();
        var x = x.replace(",", ".");
        return parseFloat(x);
    }
    return x;
}
function formatDecimal(x, d) {
    if (!d) { d = 16;/*site.settings.decimals;*/ }
    return parseFloat(accounting.formatNumber(x, d, '', '.'));
}
function hrsd(sdate) {
    return moment().format(site.dateFormats.js_sdate.toUpperCase())
}

function hrld(ldate) {
    return moment().format(site.dateFormats.js_sdate.toUpperCase()+' H:mm')
}
function is_valid_discount(mixed_var) {
    return (is_numeric(mixed_var) || (/([0-9]%)/i.test(mixed_var))) ? true : false;
}
function is_numeric(mixed_var) {
    var whitespace =
    " \n\r\t\f\x0b\xa0\u2000\u2001\u2002\u2003\u2004\u2005\u2006\u2007\u2008\u2009\u200a\u200b\u2028\u2029\u3000";
    return (typeof mixed_var === 'number' || (typeof mixed_var === 'string' && whitespace.indexOf(mixed_var.slice(-1)) === -
        1)) && mixed_var !== '' && !isNaN(mixed_var);
}
function is_float(mixed_var) {
    return +mixed_var === mixed_var && (!isFinite(mixed_var) || !! (mixed_var % 1));
}
function currencyFormat(x) {
    return formatMoney(x != null ? x : 0);
}
function formatSA (x) {
    x=x.toString();
    var afterPoint = '';
    if(x.indexOf('.') > 0)
       afterPoint = x.substring(x.indexOf('.'),x.length);
    x = Math.floor(x);
    x=x.toString();
    var lastThree = x.substring(x.length-3);
    var otherNumbers = x.substring(0,x.length-3);
    if(otherNumbers != '')
        lastThree = ',' + lastThree;
    var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree + afterPoint;

    return res;
}

function unitToBaseQty(qty, unitObj) {
    switch(unitObj.operator) {
        case '*':
            return parseFloat(qty)*parseFloat(unitObj.operation_value);
            break;
        case '/':
            return parseFloat(qty)/parseFloat(unitObj.operation_value);
            break;
        case '+':
            return parseFloat(qty)+parseFloat(unitObj.operation_value);
            break;
        case '-':
            return parseFloat(qty)-parseFloat(unitObj.operation_value);
            break;
        default:
            return parseFloat(qty);
    }
}

function baseToUnitQty(qty, unitObj) {
    switch(unitObj.operator) {
        case '*':
            return parseFloat(qty)/parseFloat(unitObj.operation_value);
            break;
        case '/':
            return parseFloat(qty)*parseFloat(unitObj.operation_value);
            break;
        case '+':
            return parseFloat(qty)-parseFloat(unitObj.operation_value);
            break;
        case '-':
            return parseFloat(qty)+parseFloat(unitObj.operation_value);
            break;
        default:
            return parseFloat(qty);
    }
}

function read_card() {
    var typingTimer;

    $('.swipe').keyup(function (e) {
        e.preventDefault();
        var self = $(this);
        clearTimeout(typingTimer);
        typingTimer = setTimeout(function() {
            var payid = self.attr('id');
            var id = payid.substr(payid.length - 1);
            var v = self.val();
            var p = new SwipeParserObj(v);

            if(p.hasTrack1) {
                var CardType = null;
                var ccn1 = p.account.charAt(0);
                if(ccn1 == 4)
                    CardType = 'Visa';
                else if(ccn1 == 5)
                    CardType = 'MasterCard';
                else if(ccn1 == 3)
                    CardType = 'Amex';
                else if(ccn1 == 6)
                    CardType = 'Discover';
                else
                    CardType = 'Visa';

                $('#pcc_no_'+id).val(p.account).change();
                $('#pcc_holder_'+id).val(p.account_name).change();
                $('#pcc_month_'+id).val(p.exp_month).change();
                $('#pcc_year_'+id).val(p.exp_year).change();
                $('#pcc_cvv2_'+id).val('');
                $('#pcc_type_'+id).val(CardType).change();
                self.val('');
                $('#pcc_cvv2_'+id).focus();
            } else {
                $('#pcc_no_'+id).val('');
                $('#pcc_holder_'+id).val('');
                $('#pcc_month_'+id).val('');
                $('#pcc_year_'+id).val('');
                $('#pcc_cvv2_'+id).val('');
                $('#pcc_type_'+id).val('');
            }
        }, 100);
    });

    $('.swipe').keydown(function (e) {
        clearTimeout(typingTimer);
    });
}

function check_add_item_val() {
    $('#add_item').bind('keypress', function (e) {
        if (e.keyCode == 13 || e.keyCode == 9) {
            e.preventDefault();
            $(this).autocomplete("search");
        }
    });
}
function nav_pointer() {
    var pp = p_page == 'n' ? 0 : p_page;
    (pp == 0) ? $('#previous').attr('disabled', true) : $('#previous').attr('disabled', false);
    ((pp+pro_limit) > tcp) ? $('#next').attr('disabled', true) : $('#next').attr('disabled', false);
}

function addAlertModal(message, type) {
    $('.alerts-con-modal').empty().append(
        '<div class="alert alert-' + type + '">' +
        '<button type="button" class="close" data-dismiss="alert">' +
        '&times;</button>' + message + '</div>');
		
	location.reload();
}

$.extend($.keyboard.keyaction, {
    enter : function(base) {
        if (base.$el.is("textarea")){
            base.insertText('\r\n');
        } else {
            base.accept();
        }
    }
});

$(document).ajaxStart(function(){
  $('#ajaxCall').show();
}).ajaxStop(function(){
  $('#ajaxCall').hide();
});

$(document).ready(function(){
    nav_pointer();
    $('#myModal').on('hidden.bs.modal', function() {
        $(this).find('.modal-dialog').empty();
        $(this).removeData('bs.modal');
    });
    $('#myModal2').on('hidden.bs.modal', function () {
        $(this).find('.modal-dialog').empty();
        $(this).removeData('bs.modal');
        $('#myModal').css('zIndex', '1050');
        $('#myModal').css('overflow-y', 'scroll');
    });
    $('#myModal2').on('show.bs.modal', function () {
        $('#myModal').css('zIndex', '1040');
    });
    $('.modal').on('hidden.bs.modal', function() {
        $(this).removeData('bs.modal');
    });
    $('.modal').on('show.bs.modal', function () {
        $('#modal-loading').show();
        $('.blackbg').css('zIndex', '1041');
        $('.loader').css('zIndex', '1042');
    }).on('hide.bs.modal', function () {
        $('#modal-loading').hide();
        $('.blackbg').css('zIndex', '3');
        $('.loader').css('zIndex', '4');
    });
    $('#clearLS').click(function(event) {
        bootbox.confirm("Are you sure?", function(result) {
        if(result == true) {
            localStorage.clear();
            location.reload();
        }
        });
        return false;
    });
	
});

//$.ajaxSetup ({ cache: false, headers: { "cache-control": "no-cache" } });
if(pos_settings.focus_add_item != '') { shortcut.add(pos_settings.focus_add_item, function() { $("#add_item").focus(); }, { 'type':'keydown', 'propagate':false, 'target':document} ); }
if(pos_settings.add_manual_product != '') { shortcut.add(pos_settings.add_manual_product, function() { $("#addManually").trigger('click'); }, { 'type':'keydown', 'propagate':false, 'target':document} ); }
if(pos_settings.customer_selection != '') { shortcut.add(pos_settings.customer_selection, function() { $("#customer").select2("open"); }, { 'type':'keydown', 'propagate':false, 'target':document} ); }
if(pos_settings.add_customer != '') { shortcut.add(pos_settings.add_customer, function() { $("#add-customer").trigger('click'); }, { 'type':'keydown', 'propagate':false, 'target':document} ); }
if(pos_settings.toggle_category_slider != '') { shortcut.add(pos_settings.toggle_category_slider, function() { $("#open-category").trigger('click'); }, { 'type':'keydown', 'propagate':false, 'target':document} ); }
if(pos_settings.toggle_brands_slider != '') { shortcut.add(pos_settings.toggle_brands_slider, function() { $("#open-brands").trigger('click'); }, { 'type':'keydown', 'propagate':false, 'target':document} ); }
if(pos_settings.toggle_subcategory_slider != '') { shortcut.add(pos_settings.toggle_subcategory_slider, function() { $("#open-subcategory").trigger('click'); }, { 'type':'keydown', 'propagate':false, 'target':document} ); }
if(pos_settings.cancel_sale != '') { shortcut.add(pos_settings.cancel_sale, function() { $("#reset").click(); }, { 'type':'keydown', 'propagate':false, 'target':document} ); }
if(pos_settings.suspend_sale != '') { shortcut.add(pos_settings.suspend_sale, function() { $("#suspend").trigger('click'); }, { 'type':'keydown', 'propagate':false, 'target':document} ); }
if(pos_settings.print_items_list != '') { shortcut.add(pos_settings.print_items_list, function() { $("#print_btn").click(); }, { 'type':'keydown', 'propagate':false, 'target':document} ); }
if(pos_settings.finalize_sale != '') { shortcut.add(pos_settings.finalize_sale, function() { if ($('#paymentModal').is(':visible')) { $("#submit-sale").click(); } else { $("#payment").trigger('click'); } }, { 'type':'keydown', 'propagate':false, 'target':document} ); }
if(pos_settings.today_sale != '') { shortcut.add(pos_settings.today_sale, function() { $("#today_sale").click(); }, { 'type':'keydown', 'propagate':false, 'target':document} ); }
if(pos_settings.open_hold_bills != '') { shortcut.add(pos_settings.open_hold_bills, function() { $("#opened_bills").trigger('click'); }, { 'type':'keydown', 'propagate':false, 'target':document} ); }
if(pos_settings.table_enable != '') { shortcut.add(pos_settings.open_hold_bills, function() { $("#opened_bill_items").trigger('click'); }, { 'type':'keydown', 'propagate':false, 'target':document} ); }
if(pos_settings.close_register != '') { shortcut.add(pos_settings.close_register, function() { $("#close_register").click(); }, { 'type':'keydown', 'propagate':false, 'target':document} ); }
shortcut.add("ESC", function() { $("#cp").trigger('click'); }, { 'type':'keydown', 'propagate':false, 'target':document} );

if (site.settings.set_focus != 1) {
    $(document).ready(function(){ $('#add_item').focus(); });
}
