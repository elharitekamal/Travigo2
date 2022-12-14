<?php
include 'model/tours.php';


$obj = new tours();
$element = "";
if (isset($_GET['edit'])) {
    $element = $_GET['edit'];
}
if (isset($_POST['submit'])) {

    $ville = $_POST["ville"];
    $pays = $_POST["pays"];
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $obj->edit($ville, $pays, $fileName, $tmpName, $element);
    header("location: first.php?action=dash");


}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
html {
    background: url(http://thekitemap.com/images/feedback-img.jpg) no-repeat;
    background-size: cover;
    height: 100%;
}

#feedback-page {
    text-align: center;
}

#form-main {
    width: 100%;
    float: left;
    padding-top: 0px;
}

#form-div {
    background-color: rgba(72, 72, 72, 0.4);
    padding-left: 35px;
    padding-right: 35px;
    padding-top: 35px;
    padding-bottom: 50px;
    width: 450px;
    float: left;
    left: 50%;
    position: absolute;
    margin-top: 30px;
    margin-left: -260px;
    -moz-border-radius: 7px;
    -webkit-border-radius: 7px;
}

.feedback-input {
    color: #3c3c3c;
    font-family: Helvetica, Arial, sans-serif;
    font-weight: 500;
    font-size: 18px;
    border-radius: 0;
    line-height: 22px;
    background-color: #fbfbfb;
    padding: 13px 13px 13px 54px;
    margin-bottom: 10px;
    width: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box;
    border: 3px solid rgba(0, 0, 0, 0);
}

.feedback-input:focus {
    background: #fff;
    box-shadow: 0;
    border: 3px solid #3498db;
    color: #3498db;
    outline: none;
    padding: 13px 13px 13px 54px;
}

.focused {
    color: #30aed6;
    border: #30aed6 solid 3px;
}

/* Icons ---------------------------------- */
#name {
    background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
    background-size: 30px 30px;
    background-position: 11px 8px;
    background-repeat: no-repeat;
}

#name:focus {
    background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
    background-size: 30px 30px;
    background-position: 8px 5px;
    background-position: 11px 8px;
    background-repeat: no-repeat;
}

#email {
    background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
    background-size: 30px 30px;
    background-position: 11px 8px;
    background-repeat: no-repeat;
}

#email:focus {
    background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
    background-size: 30px 30px;
    background-position: 11px 8px;
    background-repeat: no-repeat;
}

#comment {
    background-image: url(http://rexkirby.com/kirbyandson/images/comment.svg);
    background-size: 30px 30px;
    background-position: 11px 8px;
    background-repeat: no-repeat;
}

#button-blue {
    font-family: 'Montserrat', Arial, Helvetica, sans-serif;
    float: left;
    width: 100%;
    border: #fbfbfb solid 4px;
    cursor: pointer;
    background-color: #3498db;
    color: white;
    font-size: 24px;
    padding-top: 22px;
    padding-bottom: 22px;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
    margin-top: -4px;
    font-weight: 700;
}

#button-blue:hover {
    background-color: rgba(0, 0, 0, 0);
    color: #0493bd;
}

.submit:hover {
    color: #3498db;
}

.ease {
    width: 0px;
    height: 74px;
    background-color: #fbfbfb;
    -webkit-transition: .3s ease;
    -moz-transition: .3s ease;
    -o-transition: .3s ease;
    -ms-transition: .3s ease;
    transition: .3s ease;
}

.submit:hover .ease {
    width: 100%;
    background-color: white;
}

@media only screen and (max-width: 580px) {
    #form-div {
        left: 3%;
        margin-right: 3%;
        width: 88%;
        margin-left: 0;
        padding-left: 3%;
        padding-right: 3%;
    }
}
</style>

<body>

    <div id="form-main">
        <div id="form-div">
            <form action="" method="POST" enctype="multipart/form-data" class="form" id="form1">

                <p class="name">
                    <input name="ville" type="text"
                        class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Ville"
                        id="name" />
                </p>

                <p class="pays">
                    <input name="pays" type="text" class="validate[required,custom[email]] feedback-input" id="email"
                        placeholder="Pays" />
                </p>

                <p class="Pays">
                    <input name="image" type="file" accept="image/*"
                        class="validate[required,custom[email]] feedback-input" id="email" placeholder="image" />
                </p>


                <div class="submit">
                    <input type="submit" name="submit" value="submit" id="button-blue" />
                    <div class="ease"></div>
                </div>
            </form>
        </div>

</body>

</html>