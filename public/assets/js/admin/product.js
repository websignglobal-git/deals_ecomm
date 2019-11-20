var products = {
    productList: '<table id="prodTable" class="table table-bordered">\
                    <thead class="thead">\
                        <tr class="font-weight-bold" style="color:white">\
                            <th style="display: none;">No.</th>\
                            <th>Name</th>\
                            <th>Catagory</th>\
                            <th>Slug</th>\
                            <th>Available Stock</th>\
                            <th>Approve</th>\
                            <th>Deal of the Day</th>\
                            <th>Edit & Delete</th>\
                        </tr>\
                    </thead>\
                    <tbody class="tbody" id="prodTablebody" style="color:rgba(225,225,225,0.6)">\
                    </tbody>\
                </table>',

    addProd: '<div>\
                <select class="maincat1 custom-select" onchange="subCat(this)">\
                </select>\
              </div>'
}

document.getElementById('productdiv').innerHTML = products.productList;
document.getElementById('canclbtn').style.display = 'none';
document.getElementById('frmDiv').style.display = 'none';

var productDetails = [];
var allData = [];

function getProductsData() {
    document.body.className = "loading"
    var data = "";
    var type = "application/x-www-form-urlencoded";
    var url = "get_product_data";
    var asyn = "true";
    var method = "POST";
    var respCallback = function(resp) {
        var proddata = JSON.parse(resp);
        productDetails = proddata;
        var table = document.getElementById('prodTablebody');
        proddata.forEach((object) => {
            var tr = document.createElement('tr');
            var category = JSON.parse(object.home_product_category) != null ? JSON.parse(object.home_product_category).join(' > ') : '';

            tr.innerHTML = '<td style="display: none;">' + object.home_product_id + '</td>' +
                '<td>' + object.home_product_name + '</td>' +
                '<td>' + category + '</td>' +
                '<td>' + object.home_product_slug + '</td>' +
                '<td>' + object.home_product_available_stock + '</td>' +
                '<td><lable><input type="checkbox" id="' + object.home_product_id + '" onclick="approveProduct(this)" data="approve" data-approve-product="' + object.home_product_id + '" name="approval' + object.home_product_id + '" value=' + object.home_product_approval_status + '><span>Approve</span></label></td>' +
                '<td><label><input type="checkbox" id="' + object.home_product_id + '" onclick="dealsofthedayProduct(this)" data="dealofday" data-dealoftheday-product="' + object.home_product_id + '" name="dealoftheday' + object.home_product_id + '" value=' + object.home_product_deal_of_the_day + '><span>Deal of the Day</span></label></td>' +
                '<td><button class="btn btn-outline-info" onclick="editprodInfo(this)" type="button"><i class="fa fa-pencil-square"></i></button> <button class="btn btn-outline-danger" onclick="delprodInfo(this)" type="button"><i class="fa fa-trash"></i></button> <button class="btn btn-outline-primary" onclick="showprodInfo(this)" data-toggle="modal" data-target="#largeModal" type="button"><i class="fa fa-info-circle"></i></button></td>';
            table.appendChild(tr);
        });
        var check = document.querySelectorAll('input');
        for (var i = 0; i < check.length; i++) {
            if (check[i].value == "1") {
                check[i].checked = true
                var approvechk = check[i].nextSibling;
                var txt = approvechk.innerText
                if (txt == "Approve") {
                    approvechk.innerHTML = "Approved";
                };
            } else {
                check[i].checked = false
                var approvechk = check[i].nextSibling;
                var txt = approvechk.innerText
                if (txt == "Approve") {
                    approvechk.innerHTML = "Not Approved";
                };
            }
        };
    }
    var res = serverRequest(data, method, url, asyn, type, respCallback);    

    var data = "";
    var type = "application/x-www-form-urlencoded";
    var url = "get_initial_category";
    var asyn = "true";
    var method = "POST";

    var respCallback = function(resp) {
        var catList = JSON.parse(resp);
        allData = catList;
         document.body.className = ""
        }
    var res = serverRequest(data, method, url, asyn, type, respCallback);
}

function showprodInfo(e) {
    var a = e.parentNode.parentNode.firstElementChild.innerHTML
    for (var i = 0; i < productDetails.length; i++) {
        if (productDetails[i].home_product_id == a) {
            var price = JSON.parse(productDetails[i].home_product_amount)
            var cost = price.cost
            var discount = price.discount
            var actualprice = price.actual_price
            var gst = JSON.parse(productDetails[i].home_product_gst)
            var cgst = gst.cgst
            var sgst = gst.sgst
            var igst = gst.igst
            var paymethod = JSON.parse(productDetails[i].home_product_payment_method)
            var emi = paymethod.EMI_Pay
            var cod = paymethod.Cash_on_Delivery
            var dcpay = paymethod.Debit_card_Payment
            var ccpay = paymethod.Credit_card_Payment
            var desc = JSON.parse(productDetails[i].home_product_description)
            var specs = JSON.parse(productDetails[i].home_product_specification)
            document.getElementById('specsbody').innerHTML = ""
            for(key in specs){
                var table = document.getElementById('specsbody');
                var tr = document.createElement('tr');
                tr.innerHTML = '<td>' + key + '</td>' +
                    '<td>' + specs[key] + '</td>'
                table.appendChild(tr);
            }
            var highlights = JSON.parse(productDetails[i].home_products_highlights)
            document.getElementById('highlightsbody').innerHTML = ""
            for(key in highlights){
                var table = document.getElementById('highlightsbody');
                var tr = document.createElement('tr');
                tr.innerHTML = '<td>' + key + '</td>' +
                    '<td>' + specs[key] + '</td>'
                table.appendChild(tr);
            }
            document.querySelector('.description').innerHTML = desc.productDescription
            document.getElementById('costPrice').innerHTML = cost
            document.getElementById('actualPrice').innerHTML = discount
            document.getElementById('discountPercentage').innerHTML = actualprice
            document.getElementById('cgstPrice').innerHTML = cgst
            document.getElementById('sgstPrice').innerHTML = sgst
            document.getElementById('igstPrice').innerHTML = igst
            if (emi == "emipay") {
                document.getElementById('emipay').innerHTML = "Available"
            } else {
                document.getElementById('emipay').innerHTML = "Not available"
            }
            if (cod == "codpay") {
                document.getElementById('codpay').innerHTML = "Available"
            } else {
                document.getElementById('codpay').innerHTML = "Not available"
            }
            if (dcpay == "dcpay") {
                document.getElementById('dcpay').innerHTML = "Available"
            } else {
                document.getElementById('dcpay').innerHTML = "Not available"
            }
            if (ccpay == "ccpay") {
                document.getElementById('ccpay').innerHTML = "Available"
            } else {
                document.getElementById('ccpay').innerHTML = "Not available"
            }
        };
    };
}

function approveProduct(id) {
    var vid = id
    var txt = id.nextSibling
    var chkid = vid.id
    if (vid.checked) {
        var value = 1;

        var data = JSON.stringify({
            "id": chkid,
            "val": value
        });
        var type = "application/json";
        var url = "approved";
        var asyn = "true";
        var method = "POST";

        var respCallback = function(resp) {
            if (resp == "success") {
                toastr.success('The product has been Approved.')
                txt.innerHTML = "Approved"
            } else {
                alert('Try again later...')
            }
        }
        var res = serverRequest(data, method, url, asyn, type, respCallback);
    } else {
        var value = 0;

        var data = JSON.stringify({
            "id": chkid,
            "val": value
        });
        var type = "application/json";
        var url = "not_approved";
        var asyn = "true";
        var method = "POST";

        var respCallback = function(resp) {
            if (resp == "success") {
                toastr.error('The product has not been Approved.')
                txt.innerHTML = "Not Approved"
            } else {
                alert('Try again later...')
            }
        }
        var res = serverRequest(data, method, url, asyn, type, respCallback);
    }
}

function dealsofthedayProduct(id) {
    var vid = id
    var chkid = vid.id
    if (vid.checked) {
        var value = 1;

        var data = JSON.stringify({
            "id": chkid,
            "val": value
        });
        var type = "application/json";
        var url = "dealoftheday";
        var asyn = "true";
        var method = "POST";

        var respCallback = function(resp) {
            if (resp == "success") {
                toastr.success('Product has been added to Deal of the Day List.')
            } else {
                alert('Try again later...')
            }
        }
        var res = serverRequest(data, method, url, asyn, type, respCallback);
    } else {
        var value = 0;

        var data = JSON.stringify({
            "id": chkid,
            "val": value
        });
        var type = "application/json";
        var url = "not_dealoftheday";
        var asyn = "true";
        var method = "POST";

        var respCallback = function(resp) {
            if (resp == "success") {
                toastr.error('Product has been removed from Deal of the Day List.')
            } else {
                alert('Try again later...')
            }
        }
        var res = serverRequest(data, method, url, asyn, type, respCallback);
    }
}

function editprodInfo(e) {
    document.getElementById('productdiv').style.display = 'none';
    document.getElementById('canclbtn').style.display = 'block';
    document.getElementById('frmDiv').style.display = 'block';
}

function delprodInfo(e) {
    var conf = confirm('Are you sure you want to remove the product?')
    if (conf == true) {
        var a = e.parentNode
        var b = a.parentNode
        var c = b.firstChild
        var d = c.innerHTML

        var data = JSON.stringify({
            "id": d
        });
        var type = "application/json";
        var url = "delete_product";
        var asyn = "true";
        var method = "POST";

        var respCallback = function(resp) {
            if (resp == "success") {
                toastr.error('Product has been deleted from the List.')
                b.remove();
            } else {
                alert('Try again later...')
            }
        }
        var res = serverRequest(data, method, url, asyn, type, respCallback);
    } else {
        alert("You Clicked cancel button.")
    }
}

function canclBtn() {
    document.getElementById('productdiv').innerHTML = products.productList;
    document.getElementById('btncls').style.display = 'block';
    document.getElementById('canclbtn').style.display = 'none';
    document.getElementById('frmDiv').style.display = 'none';
    document.getElementById("nxtbtn").style.display = 'none'
}



function frstDropdown() {
    document.getElementById('btncls').style.display = 'none';
    document.getElementById('canclbtn').style.display = 'block';
    var options = '<option value = ""> select </option>';
    for (var i = 0; i < allData.length; i++) {
        if (allData[i].product_cat_parent_id == 0) {
            options += '<option value = "' + allData[i].product_cat_id + '"> ' + allData[i].product_cat_name + '</option>'
        }
    }
    document.getElementById('productdiv').innerHTML = '<select id="mainCat" onchange = "dynamicDropDown(this)">' + options + '</select>';
}

document.getElementById('nxtbtn').style.display = 'none';

function dynamicDropDown(id) {
    document.getElementById('frmDiv').style.display = 'none';
    document.getElementById("nxtbtn").style.display = 'none';
    id.classList.add('uniq_identify');
    var uni = false;
    document.querySelectorAll('#productdiv select').forEach(function(sel) {
        if (uni) {
            var sibil = sel.previousElementSibling;
            if (sibil != undefined && sibil.tagName.toLowerCase() == 'span') {
                sibil.remove();
            }
            sel.remove();
        }
        if (sel.classList.contains('uniq_identify')) {
            uni = true;
            sel.classList.remove('uniq_identify');
        }
    });
    if (id.value == "") {} else {
        var appendId = document.querySelectorAll('#productdiv select');
        var element = appendId[appendId.length - 1];
        var idChk = element.getAttribute('id');
        var valid = false;
        var options = '<option value = ""> select </option>';
        for (var i = 0; i < allData.length; i++) {
            if (allData[i].product_cat_parent_id == id.value) {
                options += '<option value = "' + allData[i].product_cat_id + '"> ' + allData[i].product_cat_name + '</option>';
                valid = true;
            }
        }
        if (valid) {
            element.insertAdjacentHTML('afterend', '<span style="color:#fff5">----------</span><select class="subCatList" id ="' + id.value + '"  onchange="dynamicDropDown(this)">' + options + '</select>');
        } else {
            document.getElementById("nxtbtn").style.display = 'block'
        }
    }
}

function nxtBtn() {
    document.getElementById('frmDiv').style.display = 'block';
    var mainCatId = document.getElementById('mainCat').value;
    var data = JSON.stringify({
        "attribute_parent_id": mainCatId
    });
    var type = "application/json";
    var url = "attribute_list";
    var asyn = "true";
    var method = "POST";

    var respCallback = function(resp) {
        var attrList = JSON.parse(resp);
        var attrOpt = '<option value = ""> select </option>';
        for (var i = 0; i < attrList.length; i++) {
            attrOpt += '<option id="' + attrList[i].attribute_id + '" value = "' + attrList[i].attribute_name + '"> ' + attrList[i].attribute_name + '</option>'
        };

        document.getElementById('attributeList').innerHTML = '<select name="AttributeList" onblur="AttrList()" class="custom-select form-control">' + attrOpt + '</select>';
        document.getElementById('attributeList1').innerHTML = '<select name="AttributeList1" onblur="AttrList1()" class="custom-select form-control">' + attrOpt + '</select>';
        document.getElementById('attributeList2').innerHTML = '<select name="AttributeList2" onblur="AttrList2()" class="custom-select form-control">' + attrOpt + '</select>';
        document.getElementById('attributeList3').innerHTML = '<select name="AttributeList3" onblur="AttrList3()" class="custom-select form-control">' + attrOpt + '</select>';
        document.getElementById('attributeList4').innerHTML = '<select name="AttributeList4" onblur="" class="custom-select form-control">' + attrOpt + '</select>';
    }
    var res = serverRequest(data, method, url, asyn, type, respCallback);
    document.prodForm.prodName.focus();
}

var i = 0;
var orgAttrDiv = document.getElementById("duplicateAttr");

function addattBtn() {
    document.getElementById("attdelBtn").disabled = false;
    var duplicateAttribute = orgAttrDiv.cloneNode(true);
    duplicateAttribute.id = "duplicateAttr" + ++i;
    orgAttrDiv.parentNode.appendChild(duplicateAttribute);
}

function delAttrBtn(e) {
    var scnode = e.parentNode;
    var cnode = scnode.parentNode;
    cnode.parentNode.remove();
    document.getElementById("attdelBtn").disabled = true;
}

function prodName_validate() {
    var name = document.prodForm.prodName;
    var nameVal = name.value;
    if (nameVal == "") {
        name.style.border = "2px solid red";
        name.focus();
        return false;
    };
    name.style.border = "";
    document.prodForm.prodPrice.focus();
    return true;
}

function prodPrice_validate() {
    var price = document.prodForm.prodPrice;
    var priceVal = price.value;
    if (priceVal == "") {
        price.style.border = "2px solid red";
        price.focus();
        return false;
    };
    price.style.border = "";
    document.prodForm.prodDiscount.focus();
    return true;
}

function prodDiscount_validate() {
    var discount = document.prodForm.prodDiscount;
    var discountVal = discount.value;
    if (discountVal == "") {
        discount.style.border = "2px solid red";
        discount.focus();
        return false;
    };
    discount.style.border = "";
    document.prodForm.prodDiscountPrice.focus();
    return true;
}

function prodDiscountPrice_validate() {
    var Discountprice = document.prodForm.prodDiscountPrice;
    var DiscountpriceVal = Discountprice.value;
    if (DiscountpriceVal == "") {
        Discountprice.style.border = "2px solid red";
        Discountprice.focus();
        return false;
    };
    Discountprice.style.border = "";
    document.prodForm.prodCgstPrice.focus();
    return true;
}

function prodcgst_validate() {
    var Cgst = document.prodForm.prodCgstPrice;
    var CgstVal = Cgst.value;
    if (CgstVal == "") {
        Cgst.style.border = "2px solid red";
        Cgst.focus();
        return false;
    };
    Cgst.style.border = "";
    document.prodForm.prodSgstPrice.focus();
    return true;
}

function prodsgst_validate() {
    var Sgst = document.prodForm.prodSgstPrice;
    var SgstVal = Sgst.value;
    if (SgstVal == "") {
        Sgst.style.border = "2px solid red";
        Sgst.focus();
        return false;
    };
    Sgst.style.border = "";
    document.prodForm.prodIgstPrice.focus();
    return true;
}

function prodigst_validate() {
    var Igst = document.prodForm.prodIgstPrice;
    var IgstVal = Igst.value;
    if (IgstVal == "") {
        Igst.style.border = "2px solid red";
        Igst.focus();
        return false;
    };
    Igst.style.border = "";
    document.prodForm.prodQuantity.focus();
    return true;
}

function prodQuantity_validate() {
    var quantity = document.prodForm.prodQuantity;
    var quantityVal = quantity.value;
    if (quantityVal == "") {
        quantity.style.border = "2px solid red";
        quantity.focus();
        return false;
    };
    quantity.style.border = "";
    document.prodForm.prodManufacturer.focus();
    return true;
}

function prodManufacturer_validate() {
    var manufacturer = document.prodForm.prodManufacturer;
    var manufacturerVal = manufacturer.value;
    if (manufacturerVal == "") {
        manufacturer.style.border = "2px solid red";
        manufacturer.focus();
        return false;
    };
    manufacturer.style.border = "";
    document.prodForm.AttributeList.focus();
    return true;
}

function AttrList() {
    var select = document.prodForm.AttributeList;
    var selectVal = select.value;
    if (selectVal == "") {
        select.style.border = "2px solid red";
        select.focus;
        return false;
    };
    select.style.border = "";
    document.prodForm.AttributeList1.focus();
    return true;
}

function AttrList1() {
    var select = document.prodForm.AttributeList1;
    var selectVal = select.value;
    if (selectVal == "") {
        select.style.border = "2px solid red";
        select.focus;
        return false;
    };
    select.style.border = "";
    document.prodForm.AttributeList2.focus();
    return true;
}

function AttrList2() {
    var select = document.prodForm.AttributeList2;
    var selectVal = select.value;
    if (selectVal == "") {
        select.style.border = "2px solid red";
        select.focus;
        return false;
    };
    select.style.border = "";
    document.prodForm.AttributeList3.focus();
    return true;
}

function AttrList3() {
    var select = document.prodForm.AttributeList3;
    var selectVal = select.value;
    if (selectVal == "") {
        select.style.border = "2px solid red";
        select.focus;
        return false;
    };
    select.style.border = "";
    document.prodForm.AttributeList4.focus();
    return true;
}

function productValidate() {
    var MainCategory = document.getElementById('mainCat');
    var MainCategoryText = MainCategory.options[MainCategory.selectedIndex].text;
    var Category = document.getElementsByClassName('subCatList');
    var CategoryArray = [];
    CategoryArray.push(MainCategoryText);
    for (var i = 0; i < Category.length; i++) {
        var text = Category[i].options[Category[i].selectedIndex].text;
        CategoryArray.push(text);
    };
    var productName = document.getElementsByName("prodName")[0].value;
    var productDescription = CKEDITOR.instances["txtEditor"].getData();
    var productPrice = document.getElementsByName("prodPrice")[0].value;
    var productDiscount = document.getElementsByName("prodDiscount")[0].value;
    var productDiscountPrice = document.getElementsByName("prodDiscountPrice")[0].value;
    var productCgst = document.getElementsByName("prodCgstPrice")[0].value;
    var productSgst = document.getElementsByName("prodSgstPrice")[0].value;
    var productIgst = document.getElementsByName("prodIgstPrice")[0].value;
    var productQuantity = document.getElementsByName("prodQuantity")[0].value;
    var creditcardPay = document.getElementsByName("creditcardPayment")[0];
    if (creditcardPay.checked) {
        var ccpay = creditcardPay.value;
        creditcardPay = ccpay;
    };
    var debitcardPay = document.getElementsByName("debitcardPayment")[0];
    if (debitcardPay.checked) {
        var dcpay = debitcardPay.value;
        debitcardPay = dcpay;
    };
    var emiPay = document.getElementsByName("emiPayment")[0];
    if (emiPay.checked) {
        var epay = emiPay.value;
        emiPay = epay;
    };
    var codPay = document.getElementsByName("codPayment")[0];
    if (codPay.checked) {
        var cpay = codPay.value;
        codPay = cpay;
    };
    var productManufacturer = document.getElementsByName("prodManufacturer")[0].value;
    var productImage1 = document.getElementsByName("productImg1")[0].value;
    var productImage2 = document.getElementsByName("productImg2")[0].value;
    var productImage3 = document.getElementsByName("productImg3")[0].value;
    var productImage4 = document.getElementsByName("productImg4")[0].value;
    var productImage5 = document.getElementsByName("productImg5")[0].value;
    var prodHL = document.getElementsByClassName("productAttr");
    var highlightArray = {};
    var specsArray = {};
    var prodHLlength = prodHL.length;
    for (var i = 0; i < prodHLlength; i++) {
        if (prodHL[i].checked) {
            var a = prodHL[i].parentNode;
            var b = a.parentNode;
            var c = b.parentNode;
            var d = c.querySelectorAll('select')[0].value;
            var e = c.nextElementSibling;
            var f = e.firstElementChild;
            var g = f.getAttribute('id');
            var h = CKEDITOR.instances[g].getData();
            var hi = {};
            highlightArray[d] = h;
        };
    };
    for (var i = 0; i < prodHLlength; i++) {
        var a = prodHL[i].parentNode;
        var b = a.parentNode;
        var c = b.parentNode;
        var d = c.querySelectorAll('select')[0].value;
        var e = c.nextElementSibling;
        var f = e.firstElementChild;
        var g = f.getAttribute('id');
        var h = CKEDITOR.instances[g].getData();
        var hi = {};
        if (d == "") {

        } else {
            specsArray[d] = h;
        };
    };
    var attrJson = JSON.stringify({
        "Product_Category": CategoryArray,
        "Product_Name": productName,
        "Product_Description": {
            productDescription
        },
        "Product_Price": {
            "cost": productPrice,
            "discount": productDiscount,
            "actual_price": productDiscountPrice
        },
        "Product_Gst": {
            "cgst": productCgst,
            "sgst": productSgst,
            "igst": productIgst
        },
        "Product_Quantity": productQuantity,
        "Product_Payment_Method": {
            "Credit_card_Payment": creditcardPay,
            "Debit_card_Payment": debitcardPay,
            "EMI_Pay": emiPay,
            "Cash_on_Delivery": codPay
        },
        "Product_Manufacturer": productManufacturer,
        "Product_HighLight_List": highlightArray,
        "Product_Specification_List": specsArray
    });
    var data = attrJson;
    var type = "application/json";
    var url = "add_products";
    var asyn = "true";
    var method = "POST";
    var respCallback = function(resp) {
        if (resp == "success") {
            window.location.reload()
        };
        if (resp == "error") {
            alert("Error saving the data");
        };
    }
    var res = serverRequest(data, method, url, asyn, type, respCallback);
}