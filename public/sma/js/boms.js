$(document).ready(function () {
$('body a, body button').attr('tabindex', -1);
check_add_item_val();
if (site.settings.set_focus != 1) {
    $('#add_item').focus();
}
// Order level shipping and discoutn localStorage 
$('#bostatus').change(function (e) {
    localStorage.setItem('bostatus', $(this).val());
});
if (bostatus = localStorage.getItem('bostatus')) {
    $('#bostatus').select2("val", bostatus);
    if(bostatus == 'completed') {
        $('#bostatus').select2("readonly", true);
    }
}
var old_shipping;
$('#boshipping').focus(function () {
    old_shipping = $(this).val();
}).change(function () {
    if (!is_numeric($(this).val())) {
        $(this).val(old_shipping);
        bootbox.alert(lang.unexpected_value);
        return;
    } else {
        shipping = $(this).val() ? parseFloat($(this).val()) : '0';
    }
    localStorage.setItem('boshipping', shipping);
    var gtotal = total  + shipping;
    $('#gtotal').text(formatMoney(gtotal));
    $('#tship').text(formatMoney(shipping));
});
if (boshipping = localStorage.getItem('boshipping')) {
    shipping = parseFloat(boshipping);
    $('#boshipping').val(shipping);
}
//localStorage.clear();
// If there is any item in localStorage
if (localStorage.getItem('boitemsFr')) {
    loadItems();
}

    // clear localStorage and reload
    $('#reset').click(function (e) {
        bootbox.confirm(lang.r_u_sure, function (result) {
            if (result) {
                if (localStorage.getItem('boitemsFr')) {
                    localStorage.removeItem('boitemsFr');
                }
                if (localStorage.getItem('boshipping')) {
                    localStorage.removeItem('boshipping');
                }
                if (localStorage.getItem('boref')) {
                    localStorage.removeItem('boref');
                }
                if (localStorage.getItem('bo_to_warehouse')) {
                    localStorage.removeItem('bo_to_warehouse');
                }
                if (localStorage.getItem('bonote')) {
                    localStorage.removeItem('bonote');
                }
                if (localStorage.getItem('bo_from_warehouse')) {
                    localStorage.removeItem('bo_from_warehouse');
                }
                if (localStorage.getItem('todate')) {
                    localStorage.removeItem('todate');
                }
                if (localStorage.getItem('bostatus')) {
                    localStorage.removeItem('bostatus');
                }

                 $('#modal-loading').show();
                 location.reload();
             }
         });
});

// save and load the fields in and/or from localStorage

$('#boref').change(function (e) {
    localStorage.setItem('boref', $(this).val());
});
if (boref = localStorage.getItem('boref')) {
    $('#boref').val(boref);
}
$('#bo_to_warehouse').change(function (e) {
    localStorage.setItem('bo_to_warehouse', $(this).val());
});
if (bo_to_warehouse = localStorage.getItem('bo_to_warehouse')) {
    $('#bo_to_warehouse').select2("val", bo_to_warehouse);
}
$('#bo_from_warehouse').change(function (e) {
    localStorage.setItem('bo_from_warehouse', $(this).val());
});
if (bo_from_warehouse = localStorage.getItem('bo_from_warehouse')) {
    $('#bo_from_warehouse').select2("val", bo_from_warehouse);
    if (count > 1) {
        $('#bo_from_warehouse').select2("readonly", true);
    }
}

    //$(document).on('change', '#bonote', function (e) {
        $('#bonote').redactor('destroy');
        $('#bonote').redactor({
            buttons: ['formatting', '|', 'alignleft', 'aligncenter', 'alignright', 'justify', '|', 'bold', 'italic', 'underline', '|', 'unorderedlist', 'orderedlist', '|', 'link', '|', 'html'],
            formattingTags: ['p', 'pre', 'h3', 'h4'],
            minHeight: 100,
            changeCallback: function (e) {
                var v = this.get();
                localStorage.setItem('bonote', v);
            }
        });
        if (bonote = localStorage.getItem('bonote')) {
            $('#bonote').redactor('set', bonote);
        }

        $(document).on('change', '.rexpiry', function () { 
            var item_id = $(this).closest('tr').attr('data-item-id');
            boitemsFr[item_id].row.expiry = $(this).val();
            localStorage.setItem('boitemsFr', JSON.stringify(boitemsFr));
        });


// prevent default action upon enter
$('body').bind('keypress', function (e) {
    if ($(e.target).hasClass('redactor_editor')) {
        return true;
    }
    if (e.keyCode == 13) {
        e.preventDefault();
        return false;
    }
});


    /* ---------------------- 
     * Delete Row Method 
     * ---------------------- */

    $(document).on('click', '.todel', function () {
        var row = $(this).closest('tr');
        var item_id = row.attr('data-item-id');
        delete boitemsFr[item_id];
        row.remove();
        if(boitemsFr.hasOwnProperty(item_id)) { } else {
            localStorage.setItem('boitemsFr', JSON.stringify(boitemsFr));
            loadItems();
            return;
        }
    });

    /* --------------------------
     * Edit Row Quantity Method 
     -------------------------- */
     var old_row_qty;
     $(document).on("focus", '.rquantity', function () {
        old_row_qty = $(this).val();
    }).on("change", '.rquantity', function () {
        var row = $(this).closest('tr');
        if (!is_numeric($(this).val()) || parseFloat($(this).val()) < 0) {
            $(this).val(old_row_qty);
            bootbox.alert(lang.unexpected_value);
            return;
        }
        var new_qty = parseFloat($(this).val()),
        item_id = row.attr('data-item-id');
        boitemsFr[item_id].row.base_quantity = new_qty;
        if(boitemsFr[item_id].row.unit != boitemsFr[item_id].row.base_unit) {
            $.each(boitemsFr[item_id].units, function(){
                if (this.id == boitemsFr[item_id].row.unit) {
                    boitemsFr[item_id].row.base_quantity = unitToBaseQty(new_qty, this);
                }
            });
        }
        boitemsFr[item_id].row.qty = new_qty;
        localStorage.setItem('boitemsFr', JSON.stringify(boitemsFr));
        loadItems();
    });
    
    /* --------------------------
     * Edit Row Cost Method 
     -------------------------- */
     var old_cost;
     $(document).on("focus", '.rcost', function () {
        old_cost = $(this).val();
    }).on("change", '.rcost', function () {
        var row = $(this).closest('tr');
        if (!is_numeric($(this).val())) {
            $(this).val(old_cost);
            bootbox.alert(lang.unexpected_value);
            return;
        }
        var new_cost = parseFloat($(this).val()),
        item_id = row.attr('data-item-id');
        boitemsFr[item_id].row.cost = new_cost;
        localStorage.setItem('boitemsFr', JSON.stringify(boitemsFr));
        loadItems();
    });
    
    $(document).on("click", '#removeReadonly', function () { 
     $('#bo_from_warehouse').select2('readonly', false); 
     return false;
 });
    
    
});

/* -----------------------
 * Edit Row Modal Hanlder 
 ----------------------- */
 $(document).on('click', '.edit', function () {
    var row = $(this).closest('tr');
    var row_id = row.attr('id');
    item_id = row.attr('data-item-id');
    item = boitemsFr[item_id];
    var qty = row.children().children('.rquantity').val(), 
    product_option = row.children().children('.roption').val(),
    cost = row.children().children('.rucost').val();
    $('#prModalLabel').text(item.row.name + ' (' + item.row.code + ')');
    if (site.settings.tax1) {
        var tax = item.tax_rate != 0 ? item.tax_rate.name + ' (' + item.tax_rate.rate + ')' : 'N/A';
        $('#ptax').text(tax);
        $('#old_tax').val($('#sproduct_tax_' + row_id).text());
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
    } 
    uopt = $("<select id=\"punit\" name=\"punit\" class=\"form-control select\" />");
        $.each(item.units, function () {
            if(this.id == item.row.unit) {
                $("<option />", {value: this.id, text: this.name, selected:true}).appendTo(uopt);
            } else {
                $("<option />", {value: this.id, text: this.name}).appendTo(uopt);
            }
        });
    $('#poptions-div').html(opt);
    $('#punits-div').html(uopt);
    $('select.select').select2({minimumResultsForSearch: 7});
    $('#pquantity').val(qty);
    $('#old_qty').val(qty);
    $('#pprice').val(cost);
    $('#poption').select2('val', item.row.option);
    $('#old_price').val(cost);
    $('#row_id').val(row_id);
    $('#item_id').val(item_id);
    $('#pserial').val(row.children().children('.rserial').val());
    $('#pproduct_tax').select2('val', row.children().children('.rproduct_tax').val());
    $('#pdiscount').val(row.children().children('.rdiscount').val());
    $('#prModal').appendTo("body").modal('show');

});

$('#prModal').on('shown.bs.modal', function (e) {
    if($('#poption').select2('val') != '') {
        $('#poption').select2('val', product_variant);
        product_variant = 0;
    }
});

$(document).on('change', '#punit', function () {
    var row = $('#' + $('#row_id').val());
    var item_id = row.attr('data-item-id');
    var item = boitemsFr[item_id];
    if (!is_numeric($('#pquantity').val()) || parseFloat($('#pquantity').val()) < 0) {
        $(this).val(old_row_qty);
        bootbox.alert(lang.unexpected_value);
        return;
    }
    var unit = $('#punit').val();
    if(unit != boitemsFr[item_id].row.base_unit) {
        $.each(item.units, function() {
            if (this.id == unit) {
                $('#pprice').val(formatDecimal((parseFloat(item.row.base_unit_cost)*(unitToBaseQty(1, this))), 4)).change();
            }
        });
    } else {
        $('#pprice').val(formatDecimal(item.row.base_unit_cost)).change();
    }
});

/* -----------------------
 * Edit Row Method 
 ----------------------- */
 $(document).on('click', '#editItem', function () {
    var row = $('#' + $('#row_id').val());
    var item_id = row.attr('data-item-id');
    if (!is_numeric($('#pquantity').val()) || parseFloat($('#pquantity').val()) < 0) {
        $(this).val(old_row_qty);
        bootbox.alert(lang.unexpected_value);
        return;
    }
    var unit = $('#punit').val();
    var base_quantity = parseFloat($('#pquantity').val());
    if(unit != boitemsFr[item_id].row.base_unit) {
        $.each(boitemsFr[item_id].units, function(){
            if (this.id == unit) {
                base_quantity = unitToBaseQty($('#pquantity').val(), this);
            }
        });
    }
    boitemsFr[item_id].row.fup = 1,
    boitemsFr[item_id].row.qty = parseFloat($('#pquantity').val()),
    boitemsFr[item_id].row.base_quantity = parseFloat(base_quantity),
    boitemsFr[item_id].row.unit = unit,
    boitemsFr[item_id].row.real_unit_cost = parseFloat($('#pprice').val()),
    boitemsFr[item_id].row.cost = parseFloat($('#pprice').val()),
    // boitemsFr[item_id].row.tax_rate = new_pr_tax_rate,
    boitemsFr[item_id].row.discount = $('#pdiscount').val(),
    boitemsFr[item_id].row.option = $('#poption').val(),
    // boitemsFr[item_id].row.tax_method = 1;
    localStorage.setItem('boitemsFr', JSON.stringify(boitemsFr));
    $('#prModal').modal('hide');
    
    loadItems();
    return;
});

/* -----------------------
 * Misc Actions
 ----------------------- */

 function loadItems() {

    if (localStorage.getItem('boitemsFr')) {
        total = 0;
        count = 1;
        an = 1;
        product_tax = 0;
        $("#cfTable tbody").empty();
        $('#add_transfer, #edit_transfer').attr('disabled', false);
        boitemsFr = JSON.parse(localStorage.getItem('boitemsFr'));
        sortedItems = (site.settings.item_addition == 1) ? _.sortBy(boitemsFr, function(o){return [parseInt(o.order)];}) :   boitemsFr;

        var order_no = new Date().getTime();
        $.each(sortedItems, function () {
            var item = this;
            var item_id = site.settings.item_addition == 1 ? item.item_id : item.id;
            item.order = item.order ? item.order : order_no++;
            var bo_from_warehouse = localStorage.getItem('bo_from_warehouse'), check = false;
            var product_id = item.row.id, item_type = item.row.type, item_cost = item.row.cost, item_qty = item.row.qty, item_bqty = item.row.quantity_balance, item_oqty = item.row.ordered_quantity, item_expiry = item.row.expiry, item_aqty = item.row.quantity, item_tax_method = item.row.tax_method, item_ds = item.row.discount, item_discount = 0, item_option = item.row.option, item_code = item.row.code, item_serial = item.row.serial, item_name = item.row.name.replace(/"/g, "&#034;").replace(/'/g, "&#039;");

            var unit_cost = item.row.real_unit_cost;
            var product_unit = item.row.unit, base_quantity = item.row.base_quantity;

            var pr_tax = item.tax_rate;
            var pr_tax_val = 0, pr_tax_rate = 0;
            if (site.settings.tax1 == 1) {
                if (pr_tax !== false) {
                    if (pr_tax.type == 1) {

                        if (item_tax_method == '0') {
                            pr_tax_val = formatDecimal(((unit_cost) * parseFloat(pr_tax.rate)) / (100 + parseFloat(pr_tax.rate)), 4);
                            pr_tax_rate = formatDecimal(pr_tax.rate) + '%';
                        } else {
                            pr_tax_val = formatDecimal(((unit_cost) * parseFloat(pr_tax.rate)) / 100, 4);
                            pr_tax_rate = formatDecimal(pr_tax.rate) + '%';
                        }

                    } else if (pr_tax.type == 2) {

                        pr_tax_val = parseFloat(pr_tax.rate);
                        pr_tax_rate = pr_tax.rate;

                    }
                    product_tax += pr_tax_val * item_qty;
                }
            }
            item_cost = item_tax_method == 0 ? formatDecimal(unit_cost-pr_tax_val, 4) : formatDecimal(unit_cost);
            unit_cost = formatDecimal(unit_cost+item_discount, 4);
            var sel_opt = '';
            $.each(item.options, function () {
                if(this.id == item_option) {
                    sel_opt = this.name;
                }
            });

            var row_no = item_id;//(new Date).getTime();
            var newTr = $('<tr id="row_' + row_no + '" class="row_' + item_id + '" data-item-id="' + item_id + '"></tr>');
            tr_html = '<td><input name="product_id[]" type="hidden" class="rid" value="' + product_id + '"><input name="product_type[]" type="hidden" class="rtype" value="' + item_type + '"><input name="product_code[]" type="hidden" class="rcode" value="' + item_code + '"><input name="product_name[]" type="hidden" class="rname" value="' + item_name + '"><input name="product_option[]" type="hidden" class="roption" value="' + item_option + '"><span class="sname" id="name_' + row_no + '">' + item_code +' - '+ item_name +(sel_opt != '' ? ' ('+sel_opt+')' : '')+'</span> <i class="pull-right fa fa-edit tip tointer edit" id="' + row_no + '" data-item="' + item_id + '" title="Edit" style="cursor:pointer;"></i></td>';            
            tr_html += '<td><input name="quantity_balance[]" type="hidden" class="rbqty" value="' + formatDecimal(item_bqty, 4) + '"><input name="ordered_quantity[]" type="hidden" class="roqty" value="' + formatDecimal(item_oqty, 4) + '"><input class="form-control text-center rquantity" tabindex="'+((site.settings.set_focus == 1) ? an : (an+1))+'" name="quantity[]" type="text" value="' + formatDecimal(item_qty) + '" data-id="' + row_no + '" data-item="' + item_id + '" id="quantity_' + row_no + '" onClick="this.select();"><input name="product_unit[]" type="hidden" class="runit" value="' + product_unit + '"><input name="product_base_quantity[]" type="hidden" class="rbase_quantity" value="' + base_quantity + '"></td>';
            tr_html += '<td class="text-center"><i class="fa fa-times tip todel" id="' + row_no + '" title="Remove" style="cursor:pointer;"></i></td>';
            newTr.html(tr_html);
            newTr.prependTo("#cfTable");
            total += formatDecimal(((parseFloat(item_cost) + parseFloat(pr_tax_val)) * parseFloat(item_qty)), 4);
            count += parseFloat(item_qty);
            an++;

            
        });

        var col = 1;        
        var tfoot = '<tr id="tfoot" class="tfoot active"><th colspan="'+col+'">Total</th><th class="text-center">' + formatNumber(parseFloat(count) - 1) + '</th>';
        tfoot += '<th class="text-center"><i class="fa fa-trash-o" style="opacity:0.5; filter:alpha(opacity=50);"></i></th></tr>';
        $('#cfTable tfoot').html(tfoot);

        // Totals calculations after item addition
        var gtotal = total + shipping;
        $('#total').text(formatMoney(total));
        $('#titems').text((an-1)+' ('+(parseFloat(count)-1)+')');
        if (site.settings.tax1) {
            $('#ttax1').text(formatMoney(product_tax));
        }
        $('#gtotal').text(formatMoney(gtotal));
        if (an > parseInt(site.settings.bc_fix) && parseInt(site.settings.bc_fix) > 0) {
            $("html, body").animate({scrollTop: $('#sticker').offset().top}, 500);
            $(window).scrollTop($(window).scrollTop() + 1);
        }
        set_page_focus();
    }
}

/* -----------------------------
 * Add Purchase Iten Function
 * @param {json} item
 * @returns {Boolean}
 ---------------------------- */
 function add_bom_itemFr(item) {

    
    if (item == null)
        return;

    var item_id = site.settings.item_addition == 1 ? item.item_id : item.id;
    if (boitemsFr[item_id]) {

        var new_qty = parseFloat(boitemsFr[item_id].row.qty) + 1;
        boitemsFr[item_id].row.base_quantity = new_qty;
        if(boitemsFr[item_id].row.unit != boitemsFr[item_id].row.base_unit) {
            $.each(boitemsFr[item_id].units, function(){
                if (this.id == boitemsFr[item_id].row.unit) {
                    boitemsFr[item_id].row.base_quantity = unitToBaseQty(new_qty, this);
                }
            });
        }
        boitemsFr[item_id].row.qty = new_qty;

    } else {
        boitemsFr[item_id] = item;
    }
    boitemsFr[item_id].order = new Date().getTime();
    localStorage.setItem('boitemsFr', JSON.stringify(boitemsFr));
    loadItems();
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