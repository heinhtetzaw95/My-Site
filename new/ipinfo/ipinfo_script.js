var ip;
var request = "http://ip-api.com/json/";

//$(document).ready(getResult(request));

function submit(theIP){
  ip = theIP;
  request = "http://ip-api.com/json/" + ip;
  getResult(request);
};

function getResult(link){

  $("#result").text("");
  $.getJSON(link, function(data) {
    if (ip == null || ip === ""){
      $("#result").append("<br /> Showing data for your current IP address. <br /><br />");
    }
    else {
      $("#result").append("<br /> Showing data for IP: " + ip + "<br /><br />");
    }

    $("#result").append("<table>");
    $.each(data, function(k, v) {
      $("#result").append("<tr><td>"+ k + "</td><td> " + v + "</td><tr>");
    });
    $("#result").append("</table>");
  });
};
