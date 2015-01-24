
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Arifa exercise</title>

    <link rel="stylesheet" type="text/css" href="bootstrap.min.css" >
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <script type="text/javascript" src="jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="jquery.validate.js"></script>

</head>
<body>

</br>
</br>
</br>
</br>

<div class="container">
    <div class = "row">
        <div class ="col-md-8 col-md-offset-2">


            <form class="cmxform" id="form_valid" method="get" action="">
                <fieldset>
                    <legend>Form Validation</legend>
                    <p>
                        <label for="cfname">First Name </label>
                        <input id="cfname" name="firstname" minlength="4" type="text" required>
                    </p>

                    <p>
                        <label for="clname">Last Name </label>
                        <input id="clname" name="lastname" minlength="4" type="text" required>
                    </p>
                    <p>
                        <label for="cuname">User Name </label>
                        <input id="cuname" name="username" minlength="4" type="text" required>
                    </p>
                    <p>
                        <label for="cemail">E-Mail </label>
                        <input id="cemail" type="email" name="email" required>
                    </p>
                    <p>
                        <label for="cgender">Gender</label>
                    <form>
                        <input type="radio" name="sex" value="male" checked>Male
                        <br>
                        <input type="radio" name="sex" value="female">Female
                    </form>
                    </p>
                    <p>
                        <label for="ccomment">Your comment (required)</label>
                        <textarea id="ccomment" name="comment" required></textarea>
                    </p>
                    <p>
                        <input class="submit" type="submit" value="Submit">
                    </p>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<script>
    $("#form_valid").validate({
        rules: {
            firstname:{

                required : true

            },
            lastname : {
                required : true
            },

            username : {
                required : true
            },
            email : {
                required : true
            },
            password : {
                required : true
            }
        },
        messages :
        {
            firstname:{

                required : "Please Enter your First Name"

            },
            lastname : {
                required : "Please Enter Your Last Name"
            },

            username : {
                required : "please Enter Your User Name"
            },
            email : {
                required : "Please Enter Your Email"
            },
            password : {
                required : "Please Enter Your Password"
            }
        }

    });

</script>


</body>
</html>