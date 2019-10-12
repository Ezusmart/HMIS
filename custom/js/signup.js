$(document).ready(function(e)
               {

                

                      $( "#dp" ).datepicker({
                            inline: true,
                            buttonImage: 'images/site/date.png',
                            buttonImageOnly: true,
                            changeMonth: true,
                            changeYear: true,
                            maxDate: 7,
							minDate: 0,
                            showOn: 'both',
                          });
                      $.datepicker.setDefaults({
                           dateFormat: 'yy-mm-dd'
                      });
       
                          $("#iun").keyup(function() 
                          {
                              
                            
                              var fname = document.getElementById("iun");
                              var fnclass = fname.className;
                               
                                      $("#iuninfo").html("<img src='images/site/loading.gif' /> checking...");
                                      var firtName = $("#inputUserName").val();
                                      

                                           $.ajax({
                                                          type:"post",
                                                          url:"functions/checkusername.php",
                                                          data:"username="+firtName,
                                                              success:function(data){

                                                            if(data==0)
                                                              {
                                                                
                                                                if (fnclass == "form-group" || fnclass == "form-group has-success" || fnclass == "form-group has-error") 
                                                                   {
                                                                    if (fnclass == "form-group has-success") {$('#iun').toggleClass('has-success');};
                                                                    if (fnclass == "form-group has-error") {$('#iun').toggleClass('has-error');};
                                                                        $("#iuninfo").html(" <img src='images/site/success.png'>");
                                                                        $('#iun').toggleClass('has-success');
                                                                    }
                                                              }
                                                              else{
                                                                  if (fnclass == "form-group" || fnclass == "form-group has-error" || fnclass == "form-group has-success") 
                                                                     {
                                                                      if (fnclass == "form-group has-error") {$('#iun').toggleClass('has-error');};
                                                                      if (fnclass == "form-group has-success") {$('#iun').toggleClass('has-success');};
                                                                        $("#iuninfo").html(" <img src='images/site/error.png'>");
                                                                        $('#iun').toggleClass('has-error');
                                                                     }
                                                              }
                                                          }
                                                   });
                                  
                         });

               });
