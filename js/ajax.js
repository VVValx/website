export function ajaxCall(obj, url, loader){
  $.ajax({
    type: "POST",
    data: obj,
    url: url,
    success: function(data){
      data == "success" ?  window.location.replace("index.php") : $(loader).html(data);
    }
  });
}
