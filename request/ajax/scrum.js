var scrum_type = 0;

function saveScrumType()
{ 
  var formData = new FormData();
  var postData = "saveScrumType";
  scrum_text = $("#scrum_text").val();

  formData.append("scrum_text",scrum_text);
  formData.append("scrum_type",scrum_type);  
  formData.append("postData",postData);
  $.ajax({
    url: "request/php/ScrumController.php",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function(response) {
      getScrumTextList(scrum_type);
    }
  });
}


function setScrumType(get_scrum_type)
{
  scrum_type = get_scrum_type;
}

function getScrumTextList(get_scrum_type)
{
  
  var formData = new FormData();
  var postData = "getScrumTextList";
  var scrum_type = get_scrum_type;

  formData.append("scrum_type",scrum_type);
  formData.append("postData",postData);

  $.ajax({
    url: "request/php/ScrumController.php",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function(response) {
        if(get_scrum_type == 1)
          $("#wentWell").html(response);
        if(get_scrum_type == 2)
          $("#toImprove").html(response);
        if(get_scrum_type == 3)
          $("#actionItems").html(response);
    }
  });

}