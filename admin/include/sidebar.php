<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="sidebar app-aside" id="sidebar">
				<div class="w3-sidebar w3-bar-block w3-light-grey " style="width:160px;">
								<a href="#" class="w3-bar-item w3-button"><i class="ti-home"></i>Dashboard</a>
								  <button class="w3-button w3-block w3-left-align" onclick="myAccFunc()">
								  <i class="ti-user"></i>Doctor <i class="fa fa-caret-down"></i>
								  </button>
								<div id="demoAcc" class="w3-hide w3-white w3-card">
								    <a href="doctor-specilization.php" class="w3-bar-item w3-button">Doctor Specialization</a>
								    <a href="add-doctor.php" class="w3-bar-item w3-button">Add Doctor</a>
   								    <a href="Manage-doctors.php" class="w3-bar-item w3-button">Manage Doctors</a>

								</div>

							<div class="w3-dropdown-click">
							    <button class="w3-button" onclick="myDropFunc()">
							      <i class="ti-user"></i>Patients <i class="fa fa-caret-down"></i>
							    </button>
							    <div id="demoDrop" class="w3-dropdown-content w3-bar-block w3-white w3-card">
							      <a href="manage-users.php" class="w3-bar-item w3-button">Manage Patients</a>
							    </div>
							  </div>
							  <a href="appointment-history.php" class="w3-bar-item w3-button"><i class="ti-file"></i>Appointment History</a>
							  <a href="doctor-logs.php" class="w3-bar-item w3-button"><i class="ti-list"></i>Doctor Session Logs</a>
							  <a href="user-logs.php" class="w3-bar-item w3-button"><i class="ti-list"></i>User Session Logs</a>

							</div>
<script>
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-green";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-green", "");
  }
}

function myDropFunc() {
  var x = document.getElementById("demoDrop");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-green";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-green", "");
  }
}
</script>
					</div>