<?php
session_start();
$con = mysqli_connect("localhost", "root", "mysql", "bb");
// Check user login or not
if(!isset($_SESSION['email'])){
    echo $_SESSION['email'];
}

// logout
// if(isset($_POST['but_logout'])){
//     session_destroy();
//     header('Location: login.html');
// }
?>


<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
	  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	  <style>
		 
		  .modal-backdrop
		  {
		      opacity:0.5 !important;
		  }
		  
		  input {
		    display:block;
		    width:100%;
		    margin:10px 0;
		    padding:10px;
			border-radius:200px;
		  }
		  
		  table {
		    width: 40%;
			margin-left:30px;
			font-size:20px;
		  }

		  table, th, td {
		    border: 1px solid black;
		  }

		  td,  th {
		    border: 1px solid #ddd;
		    padding: 8px;
		  }

		   tr:nth-child(even){background-color: #f2f2f2;}

		   tr:hover {background-color: #ddd;}

		   th {
		    padding-top: 12px;
		    padding-bottom: 12px;
		    text-align: left;
		    background-color: #0275d8;
		    color: white;
		  }
		  ul {list-style-type: none;}
	</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Dashboard</title>
	<nav class="navbar navbar-expand-lg navbar-light bg-light" style = "font-size:15px">
	  <a class="navbar-brand" href="home.html" style = "font-size:20px;margin-bottom:-10px">VOICE</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="home.php">Dashboard</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="login.html">Logout</a>
      	  </li>
	    </ul>
		<div class = "form-inline nav-item dropdown">
	         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	           Add
	         </a>
	         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style = "font-size:27px">
	           <a class="dropdown-item"><button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal"" style = 'font-size:17px'>
Task
</button></a>
	           <a class="dropdown-item" href="#"><button type="button" class="btn btn-link" style = 'font-size:17px'>
Action
</button></a></a>
	           <a class="dropdown-item" href="#"><button type="button" class="btn btn-link"style = 'font-size:17px' >
Tip
</button></a></a>
	         </div>
		</div>
	  </div>
	</nav>
	
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="script.js"></script>


<?php
session_start();
$email = $_SESSION['email'];
$link = mysqli_connect("localhost", "root", "mysql", "bb");
$sql = "SELECT name from users where email = '$email'";
if($result = mysqli_query($link, $sql)) {
while($row = mysqli_fetch_array($result)) {
	echo "<h1 style = 'margin-left:30px;font-size:40px;margin-top:30px;'>Hello ", $row['name'], "!";
	echo "<div style = 'margin-top:30px'></div>";
}
} else {
	echo "error." . mysqli_error($link);
}

echo "<div style = 'margin-top:20px'></div>";
?>






<div class="accordion" id="accordionExample" style = "font-size:15px;width:94%;margin-left:2.5%">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style = "font-size:20px">
          Step 1) Register to Vote
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Voter registration is not federally managed, meaning states and territories have unique requirements. Most states allow residents to register online, in person, or via a paper form, provided they qualify to vote and meet the registration deadline. If a voter knows they won’t be in their state at the time of an election, they can fill out the Federal Postcard Application for absentee voting.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style = "font-size:20px">
          Step 2) Research Candidates and Political Parties
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
		An informed voter makes an informed choice. Before filling out your ballot, make sure to research candidates for office, political parties, and ballot initiatives.To learn more about candidates, voters can check out VoteSmart, which lists voting records and provides a searchable database on multiple topics. FactCheck.org helps voters separate fact from fiction, and I Side With… lets voters see which candidates best match their views on the issues. The major political parties post their official party platforms on their websites, which helps voters understand the party's priorities.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style = "font-size:20px">
          Step 3) Check State Rules and Regulations
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
		Before election day, check your state's rules and regulations. First, find out when you can vote. Most states offer early voting before the election, and most polling locations stay open for at least 12 hours on election day. In some states, you can request time off to vote. You can also research your state's rules on requesting a mail-in ballot.It's a good idea to check your voter registration before your state's deadline to apply to confirm that the state received and processed your application to vote.First time voters in 2020 should also plan to bring identification to the polls. Some states only accept a valid photo identification, while others accept non-photo ID. States that use all mail-in ballots do not require identification. Learn more about voter ID requirements in your state before you head to the polls.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style = "font-size:20px">
          Step 4) Find you polling place
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        State election offices assign polling locations based on a voter’s address. If you aren’t sure where to go to vote, you can either contact your election office or use the polling place lookup tool here.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style = "font-size:20px">
          Step 5) Cast Your Ballot
        </button>
      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
		The final step in voting 101 is voting! Some voters cast a ballot in person at an early voting location or at their polling place on election day. These voters will need to ask an election worker for a ballot, sign their name, and fill out their ballot. In some states, you might need to show identification. As long as you get in line before the polling hours end in your state, you can vote. For voters who choose a mail-in ballot, the state will send a ballot to their address. After filling out the ballot and signing their name, voters can return the ballot by mail or via a ballot drop box.
      </div>
    </div>
  </div>
</div>


<div style = "margin-bottom:30px"></div>


<img src = "dashboard.png" style = "width:30%">
<p id="demo" style = "font-size:110px;margin-left:370px;margin-top:-280px"></p>
<p style = "font-size:30px;margin-left:370px;">until election day!</p>
<script>
// Set the date we're counting down to
var countDownDate = new Date("Nov 3, 2020 12:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>


<div style = "margin-bottom:150px"></div>


		<?php
		session_start();
		$email = $_SESSION['email'];
		$link = mysqli_connect("localhost", "root", "mysql", "bb");

		$sql = "SELECT name, state, age from users where email = '$email'";


		if($result = mysqli_query($link, $sql)) {
			if(mysqli_num_rows($result) > 0) {
				echo "<table style = 'width:40%'>";
					echo "<tr>";
					echo "<th>Profile</th>";
				echo "</tr>";
			while($row = mysqli_fetch_array($result)) {
				echo "<tr>";
					echo "<td>" . $row['name'];
				echo "</tr>";
				echo "<tr>";
					echo "<td>" . $row['state'];
				echo "</tr>";
				echo "<tr>";
					echo "<td>" . $row['age'];
				echo "</tr>";
				
			}
			echo "</table>";
			mysqli_free_result($result);

			
			} else {
				echo "no records";
			}
		} else {
			echo "error." . mysqli_error($link);
		}
		
		?>
		
		
		
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style = "margin-top:100px;">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content rounded-0">
		      <div class="modal-header">
		        
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body" style = "padding-left:30px;padding-right:30px;padding-top:150px;padding-bottom:110px;margin-bottom:-80px">
		        Add Task
				<div style = "font-size:20px">
				    <form name="theForm" id="theForm" action="task.php" method="POST">
		 	 <br>
				            Email: <input type="text" id="email" class="type-1" name ="email" style = "font-size:10px"><span style="color:red" id="error1" "></span><br>
            
				            Task Name: <input type="text" id="taskname" class="type-1" name = "taskname" style = "font-size:10px"><br>

				            Task Description: <input type="text" id="taskdescription" class="type-1" name = "taskdescription" style = "font-size:10px"><br>
					Due Date: <input type="text" id="duedate" class="type-1" name = "duedate" style = "font-size:10px"><br>		
							
						Completed? <input type="text" id="completed" class="type-1" name = "completed" style = "font-size:10px">	
							<br>
            
				            <input type="submit" value="Submit" id="btnSave" class="btn btn-outline-primary" style = "font-size:10px"><br>
						
							<input type="submit" value="Close" id="btnSave" class="btn btn-outline-dark" data-dismiss="modal" style = "font-size:10px;margin-top:10px">
				        </form>
				</div>
		      </div>
		      
		    </div>
		  </div>
		</div>
		
		
		<?php
		session_start();
		$email = $_SESSION['email'];
		$link = mysqli_connect("localhost", "root", "mysql", "bb");

		$sql = "SELECT email, taskname, taskdescription,duedate, completed from tasks where email = '$email'";


		if($result = mysqli_query($link, $sql)) {
			if(mysqli_num_rows($result) > 0) {
				echo "<table style = 'width:50%;margin-left:560px;margin-top:-175px'>";
					echo "<tr>";
					echo "<th>Task Name</th>";
	
				echo "<th>Task Description</th>";
			
			echo "<th>Due Date</th>";
	
		echo "<th>Completed</th>";
	echo "</tr>";
			while($row = mysqli_fetch_array($result)) {
				echo "<tr>";
					echo "<td>" . $row['taskname'];
				
					echo "<td>" . $row['taskdescription'];
				
					echo "<td>" . $row['duedate'];
				
					echo "<td>" . $row['completed'];
				echo "</tr>";
			}
			echo "</table>";
			mysqli_free_result($result);

			
			} else {
				echo "no records";
			}
		} else {
			echo "error." . mysqli_error($link);
		}
		
		?>


<div style = "margin-bottom:30px"></div>
  </body>

    <script src="script.js"></script>


<html>

  
</html>
  </body>
</html>