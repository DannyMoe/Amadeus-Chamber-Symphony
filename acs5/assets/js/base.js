$('.uploadForm').on('submit', function(e) {
  e.preventDefault();

  var $form = $(this).parent();
  var file = $form.find("input[name='meetingFile']").val();
  var url = 'upload.php'
  var posting = $.post(url, {meetingFile: file});

  posting.done(function(data) {
    $('#meetingResults').append(data);
  });
  
});
data = {};
/*
$('.download').on('click', function(e) {
  console.log('download function called!');
  var id = $(this).data('id');
  console.log(id);
  var url = 'meetings/'+id;

  $.get(url, function(data) {
    window.location = url;
  });
});*/