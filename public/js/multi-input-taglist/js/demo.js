(function( $ ) {
	$( document ).ready( function() {						
		$( '#reviewemails' ).tagList( 'create', {
			tagValidator : function( emailid ) {
			    
	//	var abc	=    $("#revemails").val($(".taglist-input").val());
			   
				// @warning: not sure if this RegExp is good enough for all types of email ids
				var emailPat = /^[A-Za-z]+[A-Za-z0-9._]*@[A-Za-z0-9]+\.[A-Za-z.]*[A-Za-z]+$/;
				return emailPat.test( $.trim( emailid ) );
				
			}
		});
		$('#reviewemails' ).on('tagadd',function( $event, tagText, opStatus, message ) {
			  if( opStatus ==='success' ) {				let current_emails = $('[name=emails]').val();				
				if($('[name=emails]').val()){										let current_emails_arr = current_emails.split(",");										let index = current_emails_arr.indexOf(tagText);										if(index==-1){						current_emails_arr.push(tagText);						$('[name=emails]').val( current_emails_arr.join(",") ); 					}									}else{					$('[name=emails]').val(tagText);				}
				//alert($('#attachments').val());
			  }else if( opStatus ==='failure' ) {
				alert('Email \'' + tagText +'\' could not be added [' + message +']' );
			  }
		});
		$('#reviewemails' ).on('tagremove',function( $event, tagText ) {				let current_emails = $('[name=emails]').val();				if(current_emails){										let current_emails_arr = current_emails.split(",");										let index = current_emails_arr.indexOf(tagText);										if(index!=-1){						current_emails_arr.splice(index);					}										$('[name=emails]').val( current_emails_arr.join(",") ); 				}else{					$('[name=emails]').val("");				}
		});

	});
}( jQuery ));