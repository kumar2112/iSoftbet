//App Java Script

//Customer Form Submission Script
jQuery(document).ready(function(){
var CustomerForm=jQuery("#add_customer_form");
CustomerForm.submit(function(){
      var Data=jQuery(this).serialize();
      var action= jQuery(this).attr('action');
      jQuery.ajax({
            url:  action,
            data: Data,
            type: 'post',
            success:function(data){
                return(data)
            }
      });
      return false;
});
});//End of Document
