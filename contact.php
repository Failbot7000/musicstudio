        <?php
            include("include/header.php");
        ?>
     	<!-- Begin Main Content -->
     	<script src="https://www.google.com/recaptcha/enterprise.js?render=6Lc2PAQhAAAAAHSZ4dy8bM_Aw90UGz8TBQ6ehJCX"></script>
        <h2>Location</h2>
        <p>8107 Starr Grass Drive<br />Madison WI, 53719</p>
        <br />
        <a href="https://www.google.com/maps/dir/My+location/8107+Starr+Grass+Dr,+Madison,+WI+53719/data=!4m6!4m5!1m0!1m2!1m1!1s0x8807afc72cf8b021:0xc19bfd6a074ae56f!3e0?hl=en&sa=X&ved=0ahUKEwi5mtOq1-PUAhXl5oMKHZtjA5kQox0IMjAA" target="_blank">Get Directions</a>
        <hr />
        <h2>Phone Number:</h2>
        <p>(608)-209-0088</p>
        <hr />
		<h2>Email</h2>
        <p><a href="mailto:dckuzuhara.appassionato@gmail.com">dckuzuhara.appassionato@gmail.com</a></p>
        <h2>Business Hours</h2>
        <p>Monday-Friday: 3-8pm (or by special appointment)<br />Saturday: 8am-6pm</p>
        


        <h2>Got a question? Send any inquiry here:</h2>
        
        
        <form name="contactForm" action="https://getform.io/f/d938d2e7-c9d5-4766-9880-23763ab295c8" method="POST" onsubmit="return validateForm()">
            <label>Name:</label>
            <input type="text" name="name"><br />
            <label>Email:</label>
            <input type="email" name="email"><br />
            <textarea placeholder="Enter your message here" rows="5" cols="33" name="message"></textarea><br />
            <div class="g-recaptcha" data-sitekey="6Lf2yQkhAAAAAGrIFAFN_yPeJ5W8To6I-8pSzLzK"></div>
            <button type="submit">Submit</button>
        </form>
        <script>
            function validateForm() {
                let name = document.forms["contactForm"]["name"].value;
                let email = document.forms["contactForm"]["email"].value;
                if (name == "") {
                    alert("Name must be filled out");
                return false;
                } 
                if (email == "")
                    alert("Email must be filled out");
                return false;
                }
                return true;
        </script>

        
	</div> 
    <!-- End Main content -->
    
    
    <!-- Begin Footer -->
    <?php
            include("include/footer.php");
    ?>
   	