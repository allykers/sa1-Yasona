<!DOCTYPE html>
<html>

<head>

    <title>Student Registration Form</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Arial, sans-serif;
            background:#e8f5e9;
            padding:50px;
            display:flex;
            justify-content:center;
        }

        .container{
            width:1400px;
            background:#ffffff;
            border:5px solid #2e7d32;
            border-radius:25px;
            padding:60px;
            box-shadow:0 8px 20px rgba(0,0,0,0.08);
        }

        h1{
            text-align:center;
            color:#1b5e20;
            font-size:70px;
            font-weight:bold;
            margin-bottom:15px;
        }


        .sub{
            text-align:center;
            color:#388e3c;
            font-size:30px;
            margin-bottom:55px;
            font-weight:500;
        }

        .section{
            border:2px solid #66bb6a;
            border-radius:20px;
            padding:45px;
            margin-bottom:40px;
            background:#fcfffc;
        }


        .section-title{
            text-align:center;
            font-size:38px;
            font-weight:bold;
            color:#1b5e20;
            margin-bottom:40px;
            letter-spacing:1px;
        }

        .subsection{
            border:2px dashed #81c784;
            border-radius:15px;
            padding:35px;
            margin-top:20px;
            background:white;
        }

        .subsection-title{
            color:#1b5e20;
            font-size:30px;
            font-weight:bold;
            margin-bottom:30px;
            text-align:center;
        }

        .row{
            display:flex;
            gap:30px;
            margin-bottom:35px;
            flex-wrap:wrap;
        }

        .row div{
            flex:1;
            min-width:250px;
        }

        label{
            display:block;
            margin-bottom:12px;
            font-size:24px;
            font-weight:600;
            color:#2d2d2d;
            text-align:center;
        }

        input,
        select{
            width:100%;
            padding:22px;
            border:2px solid #81c784;
            border-radius:10px;
            font-size:24px;
            font-family:Arial, sans-serif;
            background:white;
            text-align:center;
            transition:0.3s;
        }

        input:focus,
        select:focus{
            outline:none;
            border-color:#2e7d32;
            box-shadow:0 0 6px rgba(46,125,50,0.2);
        }

        .radio-group{
            display:flex;
            justify-content:center;
            gap:60px;
            margin-bottom:35px;
        }

        .radio-group label{
            display:flex;
            align-items:center;
            gap:12px;
            font-size:24px;
        }

        .radio-group input{
            width:auto;
        }

        button{
            background:#43a047;
            color:white;
            border:none;
            padding:22px 60px;
            border-radius:12px;
            font-size:28px;
            font-weight:bold;
            font-family:Arial, sans-serif;
            cursor:pointer;
            transition:0.3s;
        }

        button:hover{
            background:#1b5e20;
            transform:translateY(-2px);
        }

        .output{
            margin-top:40px;
            padding:40px;
            border:2px solid #2e7d32;
            border-radius:18px;
            background:#f1f8e9;
            line-height:2.5;
            font-size:28px;
            text-align:center;
        }

        .output h2{
            color:#1b5e20;
            margin-bottom:25px;
            font-size:42px;
        }

    </style>

</head>

<body>

<div class="container">

    <h1>Student Registration Form</h1>

    <div class="sub">
        AKY Institute of Technology
    </div>

    <form method="POST">

        <div class="section">
            <div class="section-title">
                ===== Personal Information =====
            </div>

            <div class="row">
                <div>
                    <label>Last Name</label>
                    <input type="text" name="lname" required>
                </div>

                <div>
                    <label>First Name</label>
                    <input type="text" name="fname" required>
                </div>

                <div>
                    <label>Middle Name</label>
                    <input type="text" name="mname">
                </div>
            </div>

            <div class="row">
                <div>
                    <label>Birthdate</label>
                    <input type="date" name="birthdate">
                </div>

                <div>
                    <label>Age</label>
                    <input type="number" name="age">
                </div>
            </div>

            <label>Gender</label>
            <div class="radio-group">

                <label>
                    <input type="radio" name="gender" value="Male">
                    Male
                </label>

                <label>
                    <input type="radio" name="gender" value="Female">
                    Female
                </label>

            </div>

            <label>Email Address</label>
            <input type="email" name="email">

            <br><br>

            <label>Address</label>
            <input type="text" name="address">

        </div>        

        <div class="section">
            <div class="section-title">
                ===== Educational Background =====
            </div>

            <div class="subsection">
                <div class="subsection-title">
                    Senior High School
                </div>

                <label>Previous School (SHS)</label>
                <input type="text" name="school">

                <br>
                <label>School Address</label>
                <input type="text" name="school_address">
                <br>

                <div class="row">
                    <div>
                        <label>Year Graduated</label>
                        <input type="text" name="year_grad">
                    </div>

                    <div>
                        <label>Track/Strand</label>

                        <select name="strand">
                            <option value="">Select Track/Strand</option>
                            <option>STEM</option>
                            <option>ABM</option>
                            <option>HUMSS</option>
                            <option>GAS</option>
                            <option>TVL</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="section-title">
                ===== Emergency Contact =====
            </div>

            <div class="row">
                <div>
                    <label>Full Name</label>
                    <input type="text" name="em_name">
                </div>

                <div>
                    <label>Relationship</label>

                    <select name="relationship">
                        <option value="">Select</option>
                        <option>Mother</option>
                        <option>Father</option>
                        <option>Guardian</option>
                    </select>
                </div>
            </div>

            <label>Contact Number</label>
            <input type="text" name="em_contact">

        </div>

        <center>
            <button type="submit" name="submit">
                Submit Registration
            </button>
        </center>

    </form>

    <?php

    if(isset($_POST['submit'])){

        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $birthdate = $_POST['birthdate'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        $school = $_POST['school'];
        $school_address = $_POST['school_address'];
        $year_grad = $_POST['year_grad'];
        $strand = $_POST['strand'];

        $em_name = $_POST['em_name'];
        $relationship = $_POST['relationship'];
        $em_contact = $_POST['em_contact'];

        $fullname = $fname . " " . $mname . " " . $lname;

        echo "
        <div class='output'>

            <h2>Student Registration Details</h2>
            <p><b>Full Name:</b> $fullname</p>
            <p><b>Birthdate:</b> $birthdate</p>
            <p><b>Age:</b> $age</p>
            <p><b>Gender:</b> $gender</p>
            <p><b>Email Address:</b> $email</p>
            <p><b>Address:</b> $address</p>

            <br>

            <p><b>Senior High School:</b> $school</p>
            <p><b>School Address:</b> $school_address</p>
            <p><b>Year Graduated:</b> $year_grad</p>
            <p><b>Track/Strand:</b> $strand</p>

            <br>

            <p><b>Emergency Contact Name:</b> $em_name</p>
            <p><b>Relationship:</b> $relationship</p>
            <p><b>Contact Number:</b> $em_contact</p>

        </div>
        ";
    }
    ?>

</div>
</body>
</html>