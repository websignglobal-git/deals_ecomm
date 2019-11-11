var products = {
    productList: '<table class="table table-bordered" style="color:white">\
                    <thead class="thead">\
                        <tr class="font-weight-bold">\
                            <th>No.</th>\
                            <th>Name</th>\
                            <th>Catagory</th>\
                            <th>Slug</th>\
                            <th>Price</th>\
                            <th>GST Price</th>\
                            <th>Keywords</th>\
                            <th>Specification</th>\
                            <th>Description</th>\
                            <th>Attributes</th>\
                            <th>Available Stock</th>\
                            <th>Payment Method</th>\
                            <th>Approval Status</th>\
                            <th>Approve</th>\
                            <th>Edit & Delete</th>\
                        </tr>\
                    </thead>\
                    <tbody class="tbody">\
                        <tr>\
                            <td>data</td>\
                            <td>data</td>\
                            <td>data</td>\
                            <td>data</td>\
                            <td>data</td>\
                            <td>data</td>\
                            <td>data</td>\
                            <td>data</td>\
                            <td>data</td>\
                            <td>data</td>\
                            <td>data</td>\
                            <td>data</td>\
                            <td>data</td>\
                            <td><input type="checkbox" name="approval" value="approval"></td>\
                            <td><button class="btn btn-outline-info" type="button"><i class="fa fa-pencil-square"></i></button> <button class="btn btn-outline-danger" type="button"><i class="fa fa-trash"></i></button></td>\
                        </tr>\
                    </tbody>\
                </table>',

    addProd: '<div>\
                <select class="maincat1 custom-select" onchange="subCat(this)">\
                </select>\
              </div>'
}

document.getElementById('productdiv').innerHTML = products.productList;
document.getElementById('canclbtn').style.display = 'none';
document.getElementById('frmDiv').style.display = 'block';

function canclBtn() {
    document.getElementById('productdiv').innerHTML = products.productList;
    document.getElementById('btncls').style.display = 'block';
    document.getElementById('canclbtn').style.display = 'none';
    document.getElementById('frmDiv').style.display = 'none';
    document.getElementById("nxtbtn").style.display = 'none'
}

var allData = [];

function frstDropdown() {
    document.getElementById('btncls').style.display = 'none';
    document.getElementById('canclbtn').style.display = 'block';
    //if (true) {};
    var data = "";
    var type = "application/x-www-form-urlencoded";
    var url = "get_initial_category";
    var asyn = "true";
    var method = "POST";

    var respCallback = function(resp) {
        var catList = JSON.parse(resp);
        allData = catList;
        var options = '<option value = ""> select </option>';
        for (var i = 0; i < allData.length; i++) {
            if (allData[i].product_cat_parent_id == 0) {
                options += '<option value = "' + allData[i].product_cat_id + '"> ' + allData[i].product_cat_name + '</option>'
            }
        }
        document.getElementById('productdiv').innerHTML = '<div id="nodrop_alert" style="color:red"></div><select id="mainCat" onchange = "dynamicDropDown(this)">' + options + '</select>';
    }
    var res = serverRequest(data, method, url, asyn, type, respCallback);

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
            element.insertAdjacentHTML('afterend', '<span style="color:#fff5">----------</span><select id ="' + id.value + '"  onchange="dynamicDropDown(this)">' + options + '</select>');
        } else {
            //document.querySelector('#nodrop_alert').innerHTML = 'No data found'
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
            attrOpt += '<option value = "' + attrList[i].attribute_id + '"> ' + attrList[i].attribute_name + '</option>'
        };

        document.getElementById('attributeList').innerHTML = '<select name="AttributeList" class="custom-select form-control">' + attrOpt + '</select>';
    }
    var res = serverRequest(data, method, url, asyn, type, respCallback);
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

window.onload = function() {
    document.prodForm.prodName.focus();
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
    document.prodForm.prodDescription.focus();
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
    return true;
}

function productValidate() {
    var productName = document.getElementsByName("prodName")[0].value;
    var productDescription = document.getElementsByName("prodDescription")[0].value;
    var productPrice = document.getElementsByName("prodPrice")[0].value;
    var productDiscount = document.getElementsByName("prodDiscount")[0].value;
    var productQuantity = document.getElementsByName("prodQuantity")[0].value;
    var creditcardPay = document.getElementsByName("creditcardPayment")[0].value;
    var debitcardPay = document.getElementsByName("debitcardPayment")[0].value;
    var emiPay = document.getElementsByName("emiPayment")[0].value;
    var codPay = document.getElementsByName("codPayment")[0].value;
    var productManufacturer = document.getElementsByName("prodManufacturer")[0].value;
    var productImage1 = document.getElementsByName("productImg1")[0].value;
    var productImage2 = document.getElementsByName("productImg2")[0].value;
    var productImage3 = document.getElementsByName("productImg3")[0].value;
    var productImage4 = document.getElementsByName("productImg4")[0].value;
    var productImage5 = document.getElementsByName("productImg5")[0].value;
    var prodArray = [productName, productDescription, productPrice, productDiscount, productQuantity, creditcardPay, debitcardPay, emiPay, codPay, productManufacturer];
    console.log(prodArray);
}