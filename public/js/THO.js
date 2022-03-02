var THO = THO || {};
THO.footer = {template:"<footer>&copyHdKyiKyi.com, 2022</footer>", height:70, borderless:true, css:"footer"};
THO.session = {};
THO.token = "";
THO.setItems = function(id = "", items = []) {
    var winWidth = (window.innerWidth);
    var noOfColumn = parseInt(winWidth/180);
    var noOfRow = parseInt(items.length/noOfColumn) + 1;
    var colWidth = parseInt(winWidth/noOfColumn);
    var html  = "";
    for (let i = 0; i < items.length; i++) {
        if ((i+1) % noOfColumn == 1) {//first item of a row
            html += "<div class='row'>";
        }
        html += THO.createItem(items[i], colWidth);
        if ((i+1) % noOfColumn == 0) {//last item of a row
            html += "</div>";
        }
    }
    var lastRowBlankCol = noOfColumn - (items.length % noOfColumn);
    for (let i = 0; i < lastRowBlankCol; i++) {//add blank column to fufil the no of column
        html += "<div class='col' style='width: 170px;'></div>";
    }
    if (items.length % noOfColumn != 0) {
        html += "</div>";
    }
    var dom = $("#" + id);
    dom.html(html);
};
THO.createItem = function(item, width = 170) {
    var html  = "";
        html += "<div class='col' style='width: 170px;'>";
        html += "<img src='" + item.image + "' style='width: 170px;'>";
        html += "<p>Size : " + item.size + "</p>";
        html += "<p>Price : " + item.price + "Ks</p>";
        html += "</div>";
    return html;
};
THO.errorMessage = function(message) {
    webix.alert({
    title:"",
    ok:"OK",
    type:"alert-error",
    width:350,
    text:message
    });
};
THO.GET = function(url, getData, cb) {
    webix.ajax().get(url, getData, {
        error:function(text, data, xml){
            if (text != "") {
                THO.errorMessage(text);
            }
            THO.AjaxError = true;
            cb(text, data, xml);
        },
        success:function(text, data, xml){
            THO.AjaxError = false;
            cb(text, data, xml);
        }
    });
};
THO.POST = function(url, postData, cb) {
    webix.ajax().post(url, postData, {
        error:function(text, data, xml){
            if (text != "") {
                THO.errorMessage(text);
            }
            THO.AjaxError = true;
            cb(text, data, xml);
        },
        success:function(text, data, xml){
            THO.AjaxError = false;
            cb(text, data, xml);
        }
    });
};
THO.AjaxError = false;
THO.isAjaxError = function() {
    return THO.AjaxError;
};
THO.datatable = {};
THO.datatable.parse = function(ichiranName, parseData) {
    $$(ichiranName).clearAll();
    $$(ichiranName).parse(parseData);
};
THO.createItems = function(width, obj) {
    webix.ajax().post(url, postData, {
        error:function(text, data, xml){
            if (text != "") {
                THO.errorMessage(text);
            }
            THO.AjaxError = true;
            cb(text, data, xml);
        },
        success:function(text, data, xml){
            THO.AjaxError = false;
            cb(text, data, xml);
        }
    });
};
