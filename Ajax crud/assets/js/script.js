
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
    
    
		$('#add_student').click(function(){
      $.ajax({
        url: 'create.php',
        success: function(data){
          $('.app').html(data);
        }
      });
      return false;
    });
    $(document).on('click','#profile',function(e){
      e.preventDefault();
      let id=$(this).attr("profile_id");
      $.ajax({
        url: 'profile.php',
        method: 'POST',
        data: {
          id: id
        },
        success: function(data){
          $('.app').html(data);
        }
      });
    });
    $(document).on('click','#back',function(e){
      e.preventDefault();
      $.ajax({
        url: 'all.php',
        success: function(data){
          $('.app').html(data);
          allData();
        }
      });
      return false;
    });
    $('#all').click(function(){
      $.ajax({
        url: 'all.php',
        success: function(data){
          $('.app').html(data);
          allData();
        }
      });
      return false;
    });
    $.ajax({
      url: 'all.php',
      success: function(data){
        $('.app').html(data);
      }
    });
    $(document).on('submit','#student_form',function(){
      $.ajax({
        url: 'ajax_template/create.php',
        method: 'POST',
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function(data){
          swal({
            title: "Done!",
            text: "Person added successfully!",
            icon: "success",
          });
          $('#student_form')[0].reset();
        }
      });
      return false;
    })
    allData();
    function allData(){
      $.ajax({
        url: 'ajax_template/all_students.php',
        success: function(data){
          $('#all_student_data').html(data);
        }
      });
    }
    $(document).on('click','a.delete-btn',function(){
      let d_id=$(this).attr('delete_id');
      swal({
        title: "Are you sure?",
        text: "Delete Data",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((confirmation) => {
        if (confirmation) {
          $.ajax({
            url: 'ajax_template/delete.php',
            method: 'POST',
            data: {
              id: d_id
            },
            success: function(data){
              swal({
                title: "Done!",
                text: "Successfully removed!",
                icon: "success",
              });
              allData();
            }
          });
        } else {
          swal({
            title: "Safe!",
            text: "Data wasn't deleted",
            icon: "success",
          });
        }
      });
      
      return false;
    });
});

})(jQuery)
