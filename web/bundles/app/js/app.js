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
                if(data.status=="success"){
                      alert("Customer added Successfully");
                       locatio.reload();
                }else if(data.status=="failed"){
                  $.each( data.error, function( index, value ){
                      jQuery("#form_"+index).parent().find("span").remove();
                      jQuery("#form_"+index).parent().append('<span class="alert-warning" aria-hidden="true">'+value+'</span>');
                  });
                }
            }
      });
      return false;
});

//Transaction Form Submission Script

var TransactionForm=jQuery("#create_transaction_form");
TransactionForm.submit(function(){
      var Data=jQuery(this).serialize();
      var action= jQuery(this).attr('action');
      jQuery.ajax({
            url:  action,
            data: Data,
            type: 'post',
            success:function(data){
                if(data.status=="success"){
                     alert("Transaction Completed Succesfully");
                     location.reload();
                }else if(data.status=="failed"){
                  $.each( data.error, function( index, value ){
                      jQuery("#form_"+index).parent().find("span").remove();
                      jQuery("#form_"+index).parent().append('<span class="alert-warning" aria-hidden="true">'+value+'</span>');
                  });
                }
            }
      });
      return false;
});

//Transaction Form Updation Script
var TransactionUpdateForm=jQuery("#upadate_transaction_form");
TransactionUpdateForm.submit(function(){
      var Data=jQuery(this).serialize();
      var action= jQuery(this).attr('action');
      jQuery.ajax({
            url:  action,
            data: Data,
            type: 'post',
            success:function(data){
                if(data.status=="success"){
                      alert('Transaction updated successfully');
                      location.reload();
                }else if(data.status=="failed"){
                  $.each( data.error, function( index, value ){
                      jQuery("#form_"+index).parent().find("span").remove();
                      jQuery("#form_"+index).parent().append('<span class="alert-warning" aria-hidden="true">'+value+'</span>');
                  });
                }
            }
      });
      return false;
});
});//End of Document

// Delete Transaction function
function deleteTransaction(el){
      var href=el.href;
      var ans=confirm("Transaction will be deleted permanently.");
      if(ans==true){
         jQuery.get(href,function(data){

                alert("Transaction deleted successfully");
                location.reload();
         });
      }
      return false;
}
