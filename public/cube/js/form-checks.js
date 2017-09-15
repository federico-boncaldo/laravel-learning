$('#search-form').validate({
    rules: {
      search_term: {
        required: true
      }
    },
    highlight: function(element) {
      $(element).parent('div').addClass('error');
    },
    errorPlacement: function(){
      return false;
    },
    submitHandler: function(form){
      form.submit();
    }
  });

$('#search-form-mobile').validate({
    rules: {
      search_term: {
        required: true
      }
    },
    highlight: function(element) {
      $(element).parent('div').addClass('error');
    },
    errorPlacement: function(){
      return false;
    },
    submitHandler: function(form){
      form.submit();
    }
  });

// =TEST
// Only for test
function search(term){
    var term = term === undefined ? 'hercules' : term;
    var url = 'search';
    var form = $('<form action="' + url + '" method="post">' +
        '<input type="text" name="search_term" value="' + term + '" />' +
        '</form>');
    $('body').append(form);
    form.submit();
}