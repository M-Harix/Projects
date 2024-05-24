//<script src="https://smtpjs.com/v3/smtp.js"></script>
<script >
	function sendEmail(){
		Email.send({
		    Host : "smtp.gmail.com",
		    Username : "easyrealtyre@gmail.com",
		    Password : "e@sy1re@lty",
		    To : 'muhammadharrix@gmail.com',
		    From : document.getElementById("email").value,
		    Subject : "This is the subject",
		    Body :"Name    : " + document.getElementById("name").value
		    	+ "Email   : " + document.getElementById("email").value
		    	+ "Message : " + document.getElementById("message").value
			}).then(
				message => alert(message)
			);
			}
</script>