<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-auth.js"></script>
<script>
	// Initialize Firebase
	var config = {
		apiKey: "AIzaSyB3NfuY86SMNNlX4s35-6ZvKRemya_WewU",
		authDomain: "starfish-support.firebaseapp.com",
		databaseURL: "https://starfish-support.firebaseio.com",
		projectId: "starfish-support",
		storageBucket: "starfish-support.appspot.com",
		messagingSenderId: "834983002476"
	};
	firebase.initializeApp(config);
</script>
<script>
	function resetPassword(emailAddress) {
		var auth = firebase.auth();
		auth.sendPasswordResetEmail(emailAddress).then(function() {
		document.body.textContent = "Done!"
		}).catch(function(error) {
			document.body.textContent = "Error: " + error;
		}
	}
</script>
<?php
	var email = $_GET["emailAddress"];
	echo '<script>resetPassword('.email.');</script>';
?>
