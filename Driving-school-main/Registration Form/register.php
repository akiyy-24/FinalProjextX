<!DOCTYPE html>
<html lang="en">
<head>
    <title>Responsive Registration Form</title> 
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="container">
        <header>Registration</header>

        <form action="file1.php" method="POST">
    <div class="form first">
        <div class="details personal">
            <span class="title">Personal Details</span>

            <div class="fields">
                <div class="input-field">
                    <label>Full Name</label>
                    <input type="text" placeholder="Enter your name" name="fullname" required>
                </div>

                <div class="input-field">
                    <label>First Name</label>
                    <input type="text" placeholder="Enter your first name" name="fname" required>
                </div>   
                <div class="input-field">
                    <label>Last Name</label>
                    <input type="text" placeholder="Enter your last name" name="lname" required>
                </div>

                <div class="input-field">
                    <label>Date of Birth</label>
                    <input type="date" placeholder="Enter birth date" name="bdate" required>
                </div>

                <div class="input-field">
                    <label>Email</label>
                    <input type="email" placeholder="Enter your email" name="email" required>
                </div>

                <div class="input-field">
                    <label>Mobile Number</label>
                    <input type="number" placeholder="Enter mobile number" name="mnumber" required>
                </div>

                <div class="input-field">
                    <label>Gender</label>
                    <select name="gender" required>
                        <option disabled selected>Select gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Others</option>
                    </select>
                </div>

                <div class="input-field">
                    <label>Occupation</label>
                    <input type="text" placeholder="Enter your occupation" name="Occupation" required>
                </div>
            </div>
        </div>

        <div class="details ID">
            <span class="title">Identity Details</span>

            <div class="fields">
                <div class="input-field">
                    <label>ID Type</label>
                    <a><input type="radio" id="newid" name="idtype" value="new" required>New</a>
                    <a><input type="radio" id="oldid" name="idtype" value="old" required>Old</a>
                </div>

                <div class="input-field">
                    <label>ID Number</label>
                    <input type="number" placeholder="Enter ID number" name="idnumber" required>
                </div>

                <div class="input-field">
                    <label>Issued Date</label>
                    <input type="date" placeholder="Enter your issued date" name="isdate" required>
                </div>
            </div>
            <button class="nextBtn">
                <span class="btnText">Next</span>
                <i class="uil uil-navigator"></i>
            </button>
        </div>
    </div>
    <div class="form second">
        <div class="details address">
            <span class="title">Address Details</span>

            <div class="fields">
                <div class="input-field">
                    <label>Address</label>
                    <input type="text" placeholder="Enter Address" name="address" required>
                </div>

                <div class="input-field">
                    <label>Nationality</label>
                    <input type="text" placeholder="Enter nationality" name="nationality" required>
                </div>

                <div class="input-field">
                    <label>District</label>
                    <input type="text" placeholder="Enter your district" name="district" required>
                </div>
            </div>
        </div>
        <div class="details ">
            <span class="title">Login Details</span><br>

            <div class="fields">
                <div class="input-field">
                    <label>User Name</label>
                    <input type="text" placeholder="Enter User Name" name="uname" required>
                </div>   
                <div class="input-field">
                    <label>Password</label>
                    <input type="password" placeholder="Enter Password" name="psw" required>
                </div> 
                <div></div>
        </div>        
        <button class="backBtn">
            <i class="uil uil-navigator"></i>
           <span class="btnText">Back</span>
       </button>   
         <button class="submit">
            <span class="btnText">Submit</span>
            <i class="uil uil-navigator"></i>
        </button>
            </div>
        </div>
    </div>
</form>

    </div>

    <script>
        const form = document.querySelector("form"),
        nextBtn = form.querySelector(".nextBtn"),
        backBtn = form.querySelector(".backBtn"),
        allInput = form.querySelectorAll(".first input");


nextBtn.addEventListener("click", ()=> {
    allInput.forEach(input => {
        if(input.value != ""){
            form.classList.add('secActive');
        }else{
            form.classList.remove('secActive');
        }
    })
})

backBtn.addEventListener("click", () => form.classList.remove('secActive'));
    </script>
</body>
</html>
