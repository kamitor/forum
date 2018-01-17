

$(function()  {
  $('.form').submit(function(e){
      var frm = $(this);
    e.preventDefault();
    $.ajax({
      type: frm.attr('method'),
      url: frm.attr('action'),
      data: frm.serialize(),
      success: function(data){
        console.log("success");
        console.log(data);
      },
      error: function(data){
        console.log("error");
        console.log(data);
      },
    });
  });
});

