(function($){
  
  $(document).ready(function(){
    
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    $('input[name="photo"]').change(function(e){
      let file_url = URL.createObjectURL(e.target.files[0]);
      $('img#preview').attr('src', file_url);
    });//Preview for the photo
    
    //User Reg system
    $('#user_reg_form').submit(function(e){
      e.preventDefault();
      let name=$('#user_reg_form input[name="name"]').val();
      let username=$('#user_reg_form input[name="username"]').val();
      let email=$('#user_reg_form input[name="email"]').val();
      let phone=$('#user_reg_form input[name="phone"]').val();
      let password=$('#user_reg_form input[name="pass"]').val();
      if(name=='' || username==''|| email=='' || phone=='' || password==''){
        $('.msg').html(validate('All fields are required!'));
      }
      else{
        $.ajax({
          url: 'ajax_templates/add_user.php',
          method: 'POST',
          data: new FormData(this),
          contentType: false,
          processData: false,
          success: function(data){
            $('.msg').html(validate('User Added Successfully','success'));
            $('#user_reg_form')[0].reset();
          }
        });
      }
    });
    //Email Check
    $('#reg_email').keyup(function(){
      let email = $(this).val();
      $.ajax({
        url: 'ajax_templates/email_check.php',
        method: 'POST',
        data: {email: email},
        success: function(data){
          if(data != null){
            $('#reg_email_notice').html(data);
          }
          else{
            $('#reg_email_notice').html('');
          }
        }
      });
    });






  });
})(jQuery)