<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "bpsc";
    $conn = "";
    try{
        $conn = mysqli_connect($server, $username, $password, $db_name);
    }
    catch(Exception $e){
        echo "Connection Failed";
    }
    if(isset($_POST['next'])){
        $name = $_POST['name'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $blood_group = $_POST['blood_group'];
    }
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <title>Bangladesh Public Service Commission</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="#" method="POST">
        <table width="950px" align="center" border="0" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td class="page-topper"></td>
                </tr>
                <tr class="green-bg">
                    <td height="140px" >
                        <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td width="15%" align="center" valign="middle">
                                        <img width="70px" height="70px" src="img/bd_logo.png" alt="">
                                    </td>
                                    <td width="75%" align="left" valign="middle">
                                        <div class="logo-name"><span class="txt12">Government of The People's Republic of Bangladesh</span><br>
                                        <span class="txt20">Department of Social Services [DSS]</span></div>
                                    </td>
                                    <td width="10%"></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="35px" class="deep-green">
                        <table width="80%" border="0" cellpadding="5" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td class="align-left" width="80px"><a href="#" class="link1">Home</a></td>
                                    <td class="align-center"><a href="#" class="link2">Photo/Signature Validator</a></td>
                                    <td class="align-center txt10">•</td>
                                    <td class="align-center"><a href="#" class="link2">Download Applicant's Copy</a></td>
                                    <td class="align-center txt10">•</td>
                                    <td class="align-center"><a href="#" class="link2">Payment Status</a></td>
                                    <td class="align-center txt10">•</td>
                                    <td class="align-center"><a href="#" class="link2">Admit Card</a></td>
                                    <td class="align-center txt10">•</td>  
                                    <td class="align-center"><a href="#" class="link2">Help</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr class="third-row">
                    <td>
                        <table width="100%" border="0" cellpadding="5" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td width="29%">Name of the Post</td>
                                    <td class="align-right" width="2%">:</td>
                                    <td class="align-left" width="69%">
                                        <table width="100%" border="0" cellpadding="5" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td>Assistant Programmer</td>
                                                    <td class="align-right">Departmental Applicants
                                                        <input type="checkbox" name="departmental" value="yes">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr class="fourth-row">
                    <td>
                        <table width="100%" border="0" cellpadding="5" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td width="29%">Applicant's Name<span class="red-star">*</span></td>
                                    <td width="2%" class="align-right">:</td>
                                    <td width="69%" class="align-left">
                                        <input class="width90" type="text" name="name" id="name" required>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr class="fourth-row">
                    <td>
                        <table width="100%" border="0" cellpadding="5" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td width="29%">Father's Name<span class="red-star">*</span></td>
                                    <td width="2%" class="align-right">:</td>
                                    <td width="69%" class="align-left">
                                        <input class="width90" type="text" name="fname" id="fname" required>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr class="third-row">
                    <td>
                        <table width="100%" border="0" cellpadding="5" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td width="29%">Mother's Name<span class="red-star">*</span></td>
                                    <td width="2%" class="align-right">:</td>
                                    <td width="69%" class="align-left">
                                        <input class="width90" type="text" name="mname" id="mname" required>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr class="third-row">
                    <td>
                        <table width="100%" border="0" cellpadding="5" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td width="29%">Date of Birth<span class="red-star">*</span></td>
                                    <td width="2%" class="align-right">:</td>
                                    <td width="69%" class="align-left">
                                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td width="30%">
                                                        <span>Day</span>
                                                        <select class="width70" name="day" id="">
                                                            <option value="null">Select</option>
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>  
                                                            <option value="03">03</option>
                                                            <option value="10">10</option>
                                                            <option value="21">21</option>
                                                            <option value="30">30</option>
                                                        </select>
                                                    </td>
                                                    <td width="30%">
                                                        <span>Month</span>
                                                        <select class="width70" name="month" id="">
                                                            <option value="null">Select</option>
                                                            <option value="1">January</option>
                                                            <option value="2">February</option>  
                                                            <option value="3">March</option>
                                                            <option value="4">April</option>
                                                            <option value="5">May</option>
                                                            <option value="6">June</option>
                                                        </select>
                                                    </td>
                                                    <td width="30%">
                                                        <span>Year</span>
                                                        <select class="width70" name="year" id="">
                                                            <option value="null">Select</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1999">1999</option>  
                                                            <option value="2000">2000</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2003">2003</option>
                                                        </select>
                                                    </td>
                                                    <td width="10%">
                                                        <span> </span>
                                                    </td>    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr class="fourth-row">
                    <td>
                        <table width="100%" border="0" cellpadding="5" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td width="29%">Blood Group<span class="red-star">*</span></td>
                                    <td width="2%" class="align-right">:</td>
                                    <td width="69%" class="align-left">
                                        <select class="width20" name="blood_group" id="">
                                            <option value="null">Select</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="O+">O+</option>
                                            <option value="AB+">AB+</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr class="fourth-row">
                    <td>
                        <table width="100%" border="0" cellpadding="5" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td width="29%">Gender<span class="red-star">*</span></td>
                                    <td width="2%" class="align-right">:</td>
                                    <td width="69%" class="align-left">
                                        <input type="radio" name="gender" value="male" class="gender" id="male">
                                        <label for="male">Male</label>
                                        <input type="radio" name="gender" value="female" class="gender" id="female">
                                        <label for="female">Female</label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr class="third-row">
                    <td>
                        <table width="100%" border="0" cellpadding="5" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td width="29%">Nationality<span class="red-star">*</span></td>
                                    <td width="2%" class="align-right">:</td>
                                    <td width="69%" class="align-left">
                                        <select class="width30" name="nationality" id="">
                                            <option value="bangladeshi">Bangladeshi</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr class="fourth-row">
                    <td>
                        <table width="100%" border="0" cellpadding="5" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td width="29%">National ID<span class="red-star">*</span></td>
                                    <td width="2%" class="align-right">:</td>
                                    <td width="69%" class="align-left">
                                        <input type="radio" name="nid1" value="yes" class="gender" id="nid1">
                                        <label for="nid1" id="nid-yes">Yes</label>
                                        <input type="text" name="nid" id="nid">
                                        <input type="radio" name="nid1" value="no" class="gender" id="nid2" >
                                        <label for="nid2" id="nid-no">No</label>
                                        <input type="text" class="req1">
                                        <script>
                                            document.getElementById('nid1').addEventListener('click', function(){
                                                document.getElementById('nid').style.display = 'inline-block';
                                                document.getElementById('nid-yes').innerHTML = "Yes [National ID Number]";
                                                document.getElementById('nid-yes').setAttribute('for', 'nid');
                                            });
                                            document.getElementById('nid2').addEventListener('click', function(){
                                                document.getElementById('nid').style.display = 'none';
                                                document.getElementById('nid-yes').innerHTML = "Yes";
                                                document.getElementById('nid-yes').setAttribute('for', 'nid1');
                                            });
                                        </script>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr class="fourth-row">
                    <td>
                        <table width="100%" border="0" cellpadding="5" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td width="29%">Marital Status<span class="red-star">*</span></td>
                                    <td width="2%" class="align-right">:</td>
                                    <td width="69%" class="align-left">
                                        <input type="radio" name="marital" value="single" id="marital1">
                                        <label for="marital1">Single</label>
                                        <input type="radio" name="marital" value="married" id="marital2">
                                        <label for="marital2">Married</label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr class="third-row">
                    <td>
                        <table width="100%" border="0" cellpadding="0" cellspacing="7">
                            <tbody>
                                <tr>
                                    <td width="50%" class="address">
                                        <table width="100%" border="0" cellpadding="6" cellspacing="0">
                                            <tbody>
                                                <tr class="row1">
                                                    <td colspan="2">
                                                        Present Address<span class="red-star">*</span>
                                                        <input type="checkbox" class="vis-hidden">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Care of</td>
                                                    <td><input type="text"  class="width90 input1"></td>
                                                </tr>
                                                <tr>
                                                    <td>Village/Road/House/Town</td>
                                                    <td><textarea name="pvill" id=""  class="width90 input1"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>District</td>
                                                    <td>
                                                        <select name="district" id=""  class="width90 district input1">
                                                            <option value="">Select</option>
                                                            <option value="dhaka">Dhaka</option>
                                                            <option value="gaibandha">Gaibandha</option>
                                                            <option value="rajshahi">Rajshahi</option>
                                                            <option value="rangpur">Rangpur</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Post Code</td>
                                                    <td><input type="text"  class="width90 input1"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="50%" class="address">
                                        <table width="100%" border="0" cellpadding="6" cellspacing="0">
                                            <tbody>
                                                <tr class="row1">
                                                    <td colspan="2">
                                                        Permanent Address<span class="red-star">*</span>
                                                        <input type="checkbox" name="pcheck" id="sameadd" value="1"><i  id="pcheck">same as present address</i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td >Care of</td>
                                                    <td ><input type="text" class="width90 input2"></td>
                                                </tr>
                                                <tr>
                                                    <td>Village/Road/House/Town</td>
                                                    <td><textarea name="pvill" id=""  class="width90 input2"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>District</td>
                                                    <td>
                                                        <select name="district" id=""  class="width90 district input2">
                                                            <option value="">Select</option>
                                                            <option value="dhaka">Dhaka</option>
                                                            <option value="gaibandha">Gaibandha</option>
                                                            <option value="rajshahi">Rajshahi</option>
                                                            <option value="rangpur">Rangpur</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Post Code</td>
                                                    <td><input type="text"  class="width90 input2"></td>
                                                </tr>
                                                <script>
                                                    const element = document.getElementById('sameadd');
                                                    const s =document.getElementById('pcheck');
                                                    element.addEventListener('click',function(){
                                                        const element2 = document.getElementsByClassName('input2');
                                                        if(element.checked==true){
                                                            const element1 = document.getElementsByClassName('input1');
                                                            for(let i=0; i<element1.length; i++){
                                                                element2[i].value = element1[i].value;
                                                                element2[i].disabled = true;                                                            }
                                                        }
                                                        else{
                                                            for(let i=0; i<element2.length; i++){
                                                                element2[i].value = "";
                                                                element2[i].disabled=false;
                                                            }
                                                        }
                                                    });
                                                </script>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr class="fourth-row">
                    <td>
                        <table width="100%" border="0" cellpadding="7" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td width="29%">Mobile Number<span class="red-star">*</span></td>
                                    <td width="2%" class="align-right">:</td>
                                    <td width="69%" class="align-left">
                                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td width="30%" class="align-left">
                                                        <input class="width90" type="text" name="name" id="name" required>
                                                    </td>
                                                    <td width="70%" class="align-left"><span class="red-star">Please mention a Mobile Number of any operator. Relevant information will be sent by SMS to that number.</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr class="fourth-row">
                    <td>
                        <table width="100%" border="0" cellpadding="7" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td width="29%">Confirm Mobile Number<span class="red-star">*</span></td>
                                    <td width="2%" class="align-right">:</td>
                                    <td width="69%" class="align-left">
                                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td width="30%" class="align-left">
                                                        <input class="width90" type="text" name="name" id="name" required>
                                                    </td>
                                                    <td width="70%" class="align-left"><span class="font11">« Please Retype Mobile Number.</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr class="fourth-row">
                    <td>
                        <table width="100%" border="0" cellpadding="7" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td width="29%">E-Mail<span class="red-star">*</span></td>
                                    <td width="2%" class="align-right">:</td>
                                    <td width="69%" class="align-left">
                                        <input class="width90" type="email" name="name" id="name" required>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr class="third-row">
                    <td>
                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td>
                                        <table width="100%" border="0" cellpadding="7" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td class="academicq">Academic Qualifications:</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="100%" border="0" cellpadding="0" cellspacing="7">
                                            <tbody>
                                                <tr>
                                                    <td width="50%" class="address">
                                                        <table width="100%" border="0" cellpadding="6" cellspacing="0">
                                                            <tbody>
                                                                <tr class="row1">
                                                                    <td colspan="2" class="eduq tablehead">
                                                                        SSC or Equivalent Level<span class="red-star">*</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Examination</td>
                                                                    <td>
                                                                        <select name="ssc" id=""  class="width70">
                                                                            <option value="">Select One</option>
                                                                            <option value="ssc">SSC</option>
                                                                            <option value="dakhil">Dakhil</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Board</td>
                                                                    <td>
                                                                        <select name="ssc_board" id=""   class="width70">
                                                                            <option value="">Select One</option>
                                                                            <option value="dhaka">Dhaka</option>
                                                                            <option value="rajshahi">Rajshahi</option>
                                                                            <option value="dinajpur">Dinajpur</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Roll No</td>
                                                                    <td>
                                                                        <input type="text" name="ssc_roll" id="" class="width50">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Result</td>
                                                                    <td>
                                                                        <select name="ssc_gpa" id=""  class="width50">
                                                                            <option value="">Select One</option>
                                                                            <option value="1st">First Class</option>
                                                                            <option value="2nd">Second CLass</option>
                                                                            <option value="passed">Passed</option>
                                                                            <option value="gpa">GPA in scale 5</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Group</td>
                                                                    <td>
                                                                        <select name="ssc_grp" id=""  class="width50">
                                                                            <option value="">Select One</option>
                                                                            <option value="science">Science</option>
                                                                            <option value="humanities">Humanities</option>
                                                                            <option value="business">Business Studies</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Passing Year</td>
                                                                    <td>
                                                                        <select name="ssc_year" id=""  class="width50">
                                                                            <option value="">Select One</option>
                                                                            <option value="2022">2022</option>
                                                                            <option value="2023">2023</option>
                                                                            <option value="2024">2024</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                    <td width="50%" class="address">
                                                        <table width="100%" border="0" cellpadding="6" cellspacing="0">
                                                            <tbody>
                                                                <tr class="row1">
                                                                    <td colspan="2" class="eduq tablehead">
                                                                        HSC or Equivalent Level<span class="red-star">*</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Examination</td>
                                                                    <td>
                                                                        <select name="hsc" id=""  class="width70">
                                                                            <option value="">Select One</option>
                                                                            <option value="hsc">HSC</option>
                                                                            <option value="alim">Alim</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Board</td>
                                                                    <td>
                                                                        <select name="hsc_board" id=""  class="width70">
                                                                            <option value="">Select One</option>
                                                                            <option value="dhaka">Dhaka</option>
                                                                            <option value="rajshahi">Rajshahi</option>
                                                                            <option value="dinajpur">Dinajpur</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Roll No</td>
                                                                    <td>
                                                                        <input type="text" name="hsc_roll" id="" class="width50">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Result</td>
                                                                    <td>
                                                                        <select name="ssc_gpa" id=""  class="width50">
                                                                            <option value="">Select One</option>
                                                                            <option value="1st">First Class</option>
                                                                            <option value="2nd">Second CLass</option>
                                                                            <option value="passed">Passed</option>
                                                                            <option value="gpa">GPA in scale 5</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Group</td>
                                                                    <td>
                                                                        <select name="hsc_grp" id=""  class="width50">
                                                                            <option value="">Select One</option>
                                                                            <option value="science">Science</option>
                                                                            <option value="humanities">Humanities</option>
                                                                            <option value="business">Business Studies</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Passing Year</td>
                                                                    <td>
                                                                        <select name="hsc_year" id=""  class="width50">
                                                                            <option value="">Select One</option>
                                                                            <option value="2022">2022</option>
                                                                            <option value="2023">2023</option>
                                                                            <option value="2024">2024</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                   </td>
                </tr>
                <tr class="third-row">
                    <td class="pad5">
                        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="gradlevel">
                            <tbody>
                                <tr class="row1" colspan="4">
                                    <td width="20%" class="tablehead">Graduation Level<span class="red-star">*</span></td>
                                    <td width="30%"></td>
                                    <td width="20%"></td>
                                    <td width="30%"></td>
                                </tr>
                                <tr>
                                    <td width="20%">Examination</td>
                                    <td width="30%">
                                        <select name="hons" id="" class="width70">
                                            <option value="">Select One</option>
                                            <option value="bsc">BSC</option>
                                            <option value="bba">BBA</option>
                                            <option value="mbbs">MBBS</option>
                                            <option value="bsceng">BSC (Eng.)</option>
                                        </select>
                                    </td>
                                    <td width="20%">Result</td>
                                    <td width="30%">
                                        <select name="cgpa" id=""  class="width50">
                                            <option value="">Select One</option>
                                            <option value="1st">First Class</option>
                                            <option value="2nd">Second CLass</option>
                                            <option value="passed">Passed</option>
                                            <option value="cgpa">CGPA in scale 4</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20%">Subject/Degree</td>
                                    <td width="30%">
                                        <select name="subject" id="" class="width70">
                                            <option value="">Select One</option>
                                            <option value="cse">CSE</option>
                                            <option value="eee">EEE</option>
                                            <option value="english">English</option>
                                            <option value="math">Math</option>
                                        </select>
                                    </td>
                                    <td width="20%">Passing Year</td>
                                    <td width="30%">
                                        <select name="honsyear" id=""  class="width50">
                                            <option value="">Select One</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20%">University/Institute</td>
                                    <td width="30%">
                                        <select name="varsity" id="" class="width70">
                                            <option value="">Select One</option>
                                            <option value="ru">Rajshahi University</option>
                                            <option value="du">Dhaka University</option>
                                            <option value="buet">Bangladesh University of Engineering and Technology</option>
                                        </select>
                                    </td>
                                    <td width="20%">Course Duration</td>
                                    <td width="30%">
                                        <select name="course_duration" id=""  class="width50">
                                            <option value="">Select One</option>
                                            <option value="3">03 Years</option>
                                            <option value="4">04 Years</option>
                                            <option value="5">05 Years</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr class="third-row">
                    <td class="pad5">
                        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="gradlevel">
                            <tbody>
                                <tr class="row1" colspan="4">
                                    <td width="20%" class="tablehead">Masters Degree </td>
                                    <td width="30%"></td>
                                    <td width="20%"></td>
                                    <td width="30%" class="align-right"><input type="checkbox" name="is_masters" id="" value="1"><span class="req2"> if applicable</span></td>
                                </tr>
                                <tr>
                                    <td width="20%">Examination</td>
                                    <td width="30%">
                                        <select name="masters" id="" class="width70">
                                            <option value="">Select One</option>
                                            <option value="bsc">MSC</option>
                                            <option value="bba">MBA</option>
                                            <option value="bsceng">MSC (Eng.)</option>
                                        </select>
                                    </td>
                                    <td width="20%">Result</td>
                                    <td width="30%">
                                        <select name="cgpa" id=""  class="width50">
                                            <option value="">Select One</option>
                                            <option value="1st">First Class</option>
                                            <option value="2nd">Second CLass</option>
                                            <option value="passed">Passed</option>
                                            <option value="cgpa">CGPA in scale 4</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20%">Subject/Degree</td>
                                    <td width="30%">
                                        <select name="subject" id="" class="width70">
                                            <option value="">Select One</option>
                                            <option value="cse">CSE</option>
                                            <option value="eee">EEE</option>
                                            <option value="english">English</option>
                                            <option value="math">Math</option>
                                        </select>
                                    </td>
                                    <td width="20%">Passing Year</td>
                                    <td width="30%">
                                        <select name="honsyear" id=""  class="width50">
                                            <option value="">Select One</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20%">University/Institute</td>
                                    <td width="30%">
                                        <select name="varsity" id="" class="width70">
                                            <option value="">Select One</option>
                                            <option value="ru">Rajshahi University</option>
                                            <option value="du">Dhaka University</option>
                                            <option value="buet">Bangladesh University of Engineering and Technology</option>
                                        </select>
                                    </td>
                                    <td width="20%">Course Duration</td>
                                    <td width="30%">
                                        <select name="course_duration" id=""  class="width50">
                                            <option value="">Select One</option>
                                            <option value="1">01 Year</option>
                                            <option value="1.5">1.5 Years</option>
                                            <option value="2">02 Years</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr >
                    <td class="seventh-row">
                        <table width="100%" border="0" cellpadding="5" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td width="29%">Validation Code<span class="red-star">*</span></td>
                                    <td width="2%" class="align-right">:</td>
                                    <td width="69%" class="align-left">
                                        <table width="100%" border="0" cellpadding="5" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        55 + 20 = 
                                                    </td>
                                                    <td>
                                                        <input type="text" name="validation_code" id="validation_code" required>
                                                    </td>
                                                    <td>
                                                        <span class="req2">« Enter the Code</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr class="fifth-row">
                    <td class="btn-part">
                        <input type="checkbox" name="agree_next"><span class="font12"> The above information is correct and I would like to go to the next step.</span> <br>
                        <input type="submit" value="Next" name="next" class="nxt-btn">
                    </td>
                </tr>
                <tr class="sixth-row">
                    <td></td>
                </tr>
            </tbody>
        </table>
    </form>
    <footer>
        <table width="100%" cellpadding="12">
            <tr>
                <td class="footer1">
                ©2024, BPSC, All Rights
                </td>
                <td class="footer2">Developed by <a href="https://github.com/SadnurIslam" class="myname"><i >Sadnur</i></a> </td>
            </tr>
        </table>
    </footer>
</body>
</html>