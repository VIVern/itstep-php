$('a.modalMenu').click(function(event){

  event.preventDefault();

  var modal = document.createElement('div');
  modal.classList.add('modalBg');
  document.body.insertAdjacentElement('afterBegin', modal);

  var mWindow = document.createElement('div');
  mWindow.classList.add('mWindow');
  modal.insertAdjacentElement('afterBegin', mWindow);

  var url=$(this).attr('href');
  var urlCopy=url;

  var close = document.createElement('div');
  close.classList.add('closeB');
  mWindow.insertAdjacentElement('afterBegin', close);
  $('.closeB').click(function(event){
    modal.remove();
    document.location.href=urlCopy;
  })


    var url=$(this).attr('href');
    var cut;
    url=url.split('=');
    url.splice(0,1);
    url=url.join('');

  $.ajax({
      'url': 'ajax.php',
      'type': 'post',
      'data': 'url='+url,
      'success' : function(data){
        mWindow.append(data);
      },
      'error': function(msg){
        mWindow.append(msg);
      }
  })



})
