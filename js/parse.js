$('#google_click').click(function(event){
  event.preventDefault();
  $.ajax({
    'url':'ajax_google.php',
    'beforeSend':function(){
      $('#empty').html('text');
    },
    'success':function(data){
      $('#empty').html(data);
    }

  })
})
