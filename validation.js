function validate()
      {
      
         if( document.registrationform.firstname.value == "" )
         {
            alert( "Please provide your firstname!" );
            document.registrationform.firstname.focus() ;
            return false;
         }
          if( document.registrationform.lastname.value == "" )
         {
            alert( "Please provide your lastname!" );
            document.registrationform.lastname.focus() ;
            return false;
         }
         if( document.registrationform.dob.value == "" )
         {
            alert( "Please provide your dob!" );
            document.registrationform.dob.focus() ;
            return false;
         }
          if( document.registrationform.email.value == "" )
         {
            alert( "Please provide your email!" );
            document.registrationform.email.focus() ;
            return false;
         }
         
         if( document.registrationform.password.value == "" )
         {
            alert( "Please provide your password!" );
            document.registrationform.password.focus() ;
            return false;
         }
		  if( document.registrationform.reenterpassword.value == "" )
         {
            alert( "Please confirm your password!" );
            document.registrationform.reenterpassword.focus() ;
            return false;
         }
         return( true );
      }