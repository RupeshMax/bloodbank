<html>
<head>
    <title>
    updating</title>
    <link rel="stylesheet" href="./css/bb.css"></head>
<body>
    <?php
    ehco $id = $_GET['id'];
    ?>
    <div class="container">
        <form action="updatecode.php" method="post">
        <div class="row">
            <div class="col-25">
                <label for="fname">First Name </label>
            </div>
            <div class="col-75">
                <input type="text"  name="firstname" placeholder="your name pls.." required>
            </div>
        </div> 
        
        
        <div class="row">
            <div class="col-25">
                <label for="lname">Last Name </label>
            </div>
            <div class="col-75">
                 <input type="text" name="lastname" placeholder="your lastname pls.." required>
            </div>
        </div>  
            
            
        <div class="row">
            <div class="col-25">
                <label for="dob">Date of birth</label>
            </div>
            <div class="col-75">
                <input type="date" id="dob" name="Dateofbirth" required>
            </div>
        </div>  
            
            
        <div class="row">
            <div class="col-25">
                <label for="bloodgroup">bloodgroup</label>
            </div>
            <div class="col-75">
                <select id="bloodgroup" name="bloodgroup">
                    <option value="O+">O+</option> 
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="AB+">AB+</option>
                    <option value="O-">O-</option>
                    <option value="A-">A-</option>
                    <option value="B-">B-</option>
                    <option value="AB-">AB-</option>
                </select>
            </div>
        </div>
            
        
          
       
            
            
        <div class="row">
            <div class="col-25">
                <label for="Address">Address</label>
            </div>
            <div class="col-75">
                <textarea id="Address" name="Address" placeholder="Write your address" style="height:150px" required></textarea>
            </div>
        </div>
        
        <div class="row">
            <div class="col-25">
                <label for="phnum">Phone number</label>
            </div>
            <div class="col-75">
                <input type="tel" id="phnum" name="Phonenumber" pattern="[0-9]{10}" required>
            </div>
        </div> 
         
            
            
        <div class="row">
            <div class="col-25">
                <label for="gender">Gender</label>
            </div>
            <div class="col-75">
                <input type="radio" name="gender" value="m" checked> <h5>Male</h5>
  <input type="radio" name="gender" value="f"> <h5>Female</h5>
  <input type="radio" name="gender" value="other"> <h5>Other</h5>  
            </div>
        </div>
            
        <div class="row">
            <div class="col-25">
                <label for="email">Email address</label>
            </div>
            <div class="col-75">
                <input type="email" id="email" name="Emailaddress" placeholder="your email address pls.." required>
            </div>
        </div> 
        
            
        <div class="row">
            <input type="submit" value="Submit">
        </div>

        </form>
        </div>
    
    </body></html>