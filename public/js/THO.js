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
        html += THO.createItem(items[i], colWidth, i);
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
THO.createItem = function(item, width = 170, i) {
    var html  = "";
        html += "<div class='col itemCol' style='width: 170px;'>";
        if (item.out_of_stock == "1"){
            html += "<img src='https://st2.depositphotos.com/1186248/6498/i/450/depositphotos_64982201-stock-photo-out-of-stock.jpg' width='50' class='outOfStock'>";
        }
        html += "<img src='" + item.image + "' style='width: 170px;' onclick='THO.pageMoveItemDetail(" + item.product_id + ")' class='itemListImage'>";
        html += "<p>" + item.name + "</p>";
        html += "<p>Price : " + item.price + "Ks</p>";
        html += "</div>";
    return html;
};
THO.pageMoveItemDetail = function(id = '') {
    console.log(id);
    location.href = "/product?id=" + id;
}
THO.getUrlParams = function getAllUrlParams(url) {
  // get query string from url (optional) or window
  var queryString = url ? url.split('?')[1] : window.location.search.slice(1);
  // we'll store the parameters here
  var obj = {};
  // if query string exists
  if (queryString) {
    // stuff after # is not part of query string, so get rid of it
    queryString = queryString.split('#')[0];
    // split our query string into its component parts
    var arr = queryString.split('&');
    for (var i = 0; i < arr.length; i++) {
      // separate the keys and the values
      var a = arr[i].split('=');
      // set parameter name and value (use 'true' if empty)
      var paramName = a[0];
      var paramValue = typeof (a[1]) === 'undefined' ? true : a[1];
      // (optional) keep case consistent
      paramName = paramName.toLowerCase();
      if (typeof paramValue === 'string') paramValue = paramValue.toLowerCase();
      // if the paramName ends with square brackets, e.g. colors[] or colors[2]
      if (paramName.match(/\[(\d+)?\]$/)) {
        // create key if it doesn't exist
        var key = paramName.replace(/\[(\d+)?\]/, '');
        if (!obj[key]) obj[key] = [];
        // if it's an indexed array e.g. colors[2]
        if (paramName.match(/\[\d+\]$/)) {
          // get the index value and add the entry at the appropriate position
          var index = /\[(\d+)\]/.exec(paramName)[1];
          obj[key][index] = paramValue;
        } else {
          // otherwise add the value to the end of the array
          obj[key].push(paramValue);
        }
      } else {
        // we're dealing with a string
        if (!obj[paramName]) {
          // if it doesn't exist, create property
          obj[paramName] = paramValue;
        } else if (obj[paramName] && typeof obj[paramName] === 'string'){
          // if property does exist and it's a string, convert it to an array
          obj[paramName] = [obj[paramName]];
          obj[paramName].push(paramValue);
        } else {
          // otherwise add the property
          obj[paramName].push(paramValue);
        }
      }
    }
  }
  return obj;
};
THO.createProductImages = function(images, id) {
    console.log(images);
    var html  = "";
    var count = images.length;
    if(count == 0){
        return false;
    }
        html += "<ol class='carousel-indicators'>";
        for (var i = 0; i < count; i++) {
            if(i == 0){
                html += "<li data-target='#" + id + "' data-slide-to='" + i + "' class='active'></li>";
            }else{
                html += "<li data-target='#" + id + "' data-slide-to='" + i + "'></li>";
            }
        }
        html += "</ol>";
        html += "<div class='carousel-inner'>";
    for (var i = 0; i < count; i++) {
        if(i == 0){
            html += "<div class='carousel-item active'>";
        }else{
            html += "<div class='carousel-item'>";
        }
        html += "<img src='public/images/product/" + images[i] +".png' class='d-block w-100' alt='" + images[i] + "'>";
        html += "</div>";
    }
        html += "</div>";
    if(count > 1){
        html += "<a class='carousel-control-prev' href='#" + id + "' role='button' data-slide='prev'>";
        html += "<span class='carousel-control-prev-icon' aria-hidden='true'></span>";
        html += "<span class='sr-only'>Previous</span>";
        html += "</a>";
        html += "<a class='carousel-control-next' href='#" + id + "' role='button' data-slide='next'>";
        html += "<span class='carousel-control-next-icon' aria-hidden='true'></span>";
        html += "<span class='sr-only'>Next</span>";
        html += "</a>";
    }
    console.log(html);
    $("#" + id).html(html);
};
THO.createProductInfo = function(info, id) {
    var html =  "";
        html += "<p>" + info.name + "</p>";
        html += "<p>" + info.description + "</p>";
        html += "<p>Size : " + info.size + "</p>";
        html += "<p>Price : " + info.price + "</p>";
        html += "<a href='http://m.me/thoofficialmm' target='_blank'>To Order</a>";
    $("#" + id).html(html);
}
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
