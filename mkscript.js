				
function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}

function validPhone(inputtxt)
{
	var mobileNum = inputtxt;
	var validateMobNum= /^\d*(?:\.\d{1,2})?$/;
	if (validateMobNum.test(mobileNum ) && mobileNum.length == 10) {
		return "yes";
	}
	else {
		return "no";
	}
}