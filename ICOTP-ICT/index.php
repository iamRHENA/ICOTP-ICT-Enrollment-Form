
<html>
<body>
<div class="dropdown" style="float:right;">
            <button class="dropbtn">≣</button>
            <div class="dropdown-content">
            <a href="http://carlosjerichopetilla.com/icotp-ict-program/">ABOUT</a>
            <a href="http://localhost/phpmyadmin/index.php?route=/sql&db=PHPform&table=students&pos=0">ENROLLED STUDENTS</a>
            <a href="developers.php">CREATED BY :</a>
            <a href="table.php">ADMIN</a>
            <a href="logout.php">SIGN OUT</a>
            </div>
</div>
<div class="logo"><a href="#"><img src="images/micp.jpeg"></a> </div> 
    <div class="header">
            <div style="color:#006E7F ;">
            <h1>ICOTP - ICT SCHOOL</h1>
            <hr />

            


           
            <h2>Enrollment Form</h2>
            <p>Please fill out the online enrollment form with your information . Read terms and conditions carefully.<br> The MICP ICT Admins will review your request and contact you shortly by email or phone.<br> Thank you for completing our online enrollment form!</p> 

            
             


        <form method="post" action="connection.php">

            <br><h3>STUDENT INFORMATION :</h3>
            
            Name :<input type="text" name ="fname"> <br><br> 
            Address : <input type="text" name ="full_address"><br><br>
            Contact : <input type="text" name ="contact"><br><br>
            Email : <input type="text" name ="email"><br><br>
            Bdate : <input type="text" name ="bdate"><br><br>
            Bplace : <input type="text" name ="bplace"><br><br>
            age : <input type="text" name ="age"><br><br>
            <label for="gender">Gender</label>
            <select id="gender" name="gender">
            <option value="female">Female</option>
            <option value="male">Male</option>
            
            </select><br><br>

            
            citizenship: <input type="text" name ="citizenship"><br><br>
            Last School Attended : <input type="text" name ="school"><br>
            lrn : <input type="text" name ="lrn"><br>
            awards: <input type="text" name ="awards"><br><br>
            yr level : 
            <select id="yr_level" name="yr_level" >
                <option value="1">1st year</option>
                <option value="2">2nd year</option>
                <option value="3">3rd year</option>
                <option value="4">4th year</option>
                </select><br><br>

            <h3>FAMILY BACKGROUND :</h3>
            Mother: <input type="text" name ="mother"><br>
            Father: <input type="text" name ="father"><br> 
            No of Siblings: <input type="text" name ="siblings"><br><br>

            <h3>GUARDIAN INFORMATION IN CASE OF EMERGENCY :</h3>

            Guardian: <input type="text" name ="guardian"> <br><br>  
            Relation : 
            <select id="relation" name="relation">
                <option value="1">Mother</option>
                <option value="2">Father</option>
                <option value="3">Sibling</option>
                <option value="4">Relative</option>
                </select><br><br>
            Home Address : <input type="text" name ="home"><br>
            number : <input type="text" name ="num_ber"><br><br>

         
            <h3><b>ATTENDANCE POLICY</b></h3>
            <ul>
                <li>The student should be present all the time exceptwhen he/she is sick or an emergency comes up.</li>
                <li>If the student has 5 unexcused absences in one month, the parent/guardian will be notified.</li>
                <li>The student can also be under probationary if this problem continues.</li>
            </ul><br>
            <h3><b>ACADEMIC PERFORMANCE</b></h3>
            <ul>
                <li>The student is required to submit project on time .Participate class activities<br> and must be attentive during class hour.</li>
            </ul>
            <h3><b>BEHAVIOR</b></h3>
            <ul>
                <li>The student should always practice good manners and right conduct. Students who<br>violate will receive a verbal warning and might end up calling the parent for repeat offenses</li>
            </ul> <hr /><br>
            
    

            <label>
            <input type="checkbox" checked="checked" name="checkbox"> I Agree with all The Terms And Conditions
            </label><br> 
            

            <button type="submit">Submit Form</button> 
            <button type="reset" value="Reset" class="reset">Cancel</button><br>

            
        </form>

    <div class="footer">
        <p style="color:white;">&copy; All Rights Reserve 2022 MIC-P Scholars<br>
    </p>
        </div>

        

    <?php require 'styles/css.php' ?>



    

</body>
</html>