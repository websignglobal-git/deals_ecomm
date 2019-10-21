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
                            <td><button class="btn btn-outline-info btn-lg" type="button"><i class="fa fa-pencil-square"></i></button> <button class="btn btn-outline-danger btn-lg" type="button"><i class="fa fa-trash"></i></button></td>\
                        </tr>\
                    </tbody>\
                </table>',

    addProd: '<div>\
                <select  class="maincat1" onchange="subCat(this)" id="mainCat">\
                </select>\
              </div>'
}

document.getElementById('productdiv').innerHTML = products.productList;
document.getElementById('canclbtn').style.display = 'none';
document.getElementById('frmDiv').style.display = 'none';

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
    if (true) {};
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
        document.getElementById('productdiv').innerHTML = '<div id="nodrop_alert" style="color:red"></div><select onchange = "dynamicDropDown(this)">' + options + '</select>';
    }
    var res = serverRequest(data, method, url, asyn, type, respCallback);

}

document.getElementById('nxtbtn').style.display = 'none';

function dynamicDropDown(id) {
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
        var appendId = document.querySelectorAll('select');
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
}