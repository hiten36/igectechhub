<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Igec Tech Hub | Event</title>
</head>

<body>
    <?php include 'nav.php'; ?>
    <?php
    
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if(isset($_POST['ques_desc1']))
        {
            $user=$_SESSION['name'];
            $ques1=$_POST['ques_desc1'];
            $ques1=str_replace("'","\'",$ques1);
            $ques1=str_replace("<","&lt",$ques1);
            $ques1=str_replace(">","&gt",$ques1);
            if($ques1!='')
            {
                $sql="INSERT INTO `question` (`ques_user`, `ques_1`, `ques_2`, `ques_3`, `ques_4`, `ques_5`) VALUES ('$user', '$ques1', '', '', '', '');";
                $res=mysqli_query($connect1,$sql);
                if($res)
                {
                    echo '<div class="alert my-0 alert-success alert-dismissible fade show" role="alert">
                        <strong>Submitted successfully!</strong> Your response has been saved successfully.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
                else
                {
                    echo '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> There is some problem occured. you can contact us in instagram.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
            }
        }
        if(isset($_POST['ques_desc2']))
        {
            $user=$_SESSION['name'];
            $ques2=$_POST['ques_desc2'];
            $ques2=str_replace("'","\'",$ques2);
            $ques2=str_replace("<","&lt",$ques2);
            $ques2=str_replace(">","&gt",$ques2);
            if($ques2!='')
            {
                $sql="INSERT INTO `question` (`ques_user`, `ques_1`, `ques_2`, `ques_3`, `ques_4`, `ques_5`) VALUES ('$user', '', '$ques2', '', '', '');";
                $res=mysqli_query($connect1,$sql);
                if($res)
                {
                    echo '<div class="alert my-0 alert-success alert-dismissible fade show" role="alert">
                        <strong>Submitted successfully!</strong> Your response has been saved successfully.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
                else
                {
                    echo '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> There is some problem occured. you can contact us in instagram.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
            }
        }
        if(isset($_POST['ques_desc3']))
        {
            $user=$_SESSION['name'];
            $ques3=$_POST['ques_desc3'];
            $ques3=str_replace("'","\'",$ques3);
            $ques3=str_replace("<","&lt",$ques3);
            $ques3=str_replace(">","&gt",$ques3);
            if($ques3!='')
            {
                $sql="INSERT INTO `question` (`ques_user`, `ques_1`, `ques_2`, `ques_3`, `ques_4`, `ques_5`) VALUES ('$user', '', '', '$ques3', '', '');";
                $res=mysqli_query($connect1,$sql);
                if($res)
                {
                    echo '<div class="alert my-0 alert-success alert-dismissible fade show" role="alert">
                        <strong>Submitted successfully!</strong> Your response has been saved successfully.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
                else
                {
                    echo '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> There is some problem occured. you can contact us in instagram.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
            }
        }
        if(isset($_POST['ques_desc4']))
        {
            $user=$_SESSION['name'];
            $ques4=$_POST['ques_desc4'];
            $ques4=str_replace("'","\'",$ques4);
            $ques4=str_replace("<","&lt",$ques4);
            $ques4=str_replace(">","&gt",$ques4);
            if($ques4!='')
            {
                $sql="INSERT INTO `question` (`ques_user`, `ques_1`, `ques_2`, `ques_3`, `ques_4`, `ques_5`) VALUES ('$user', '', '', '', '$ques4', '');";
                $res=mysqli_query($connect1,$sql);
                if($res)
                {
                    echo '<div class="alert my-0 alert-success alert-dismissible fade show" role="alert">
                        <strong>Submitted successfully!</strong> Your response has been saved successfully.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
                else
                {
                    echo '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> There is some problem occured. you can contact us in instagram.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
            }
        }
        if(isset($_POST['ques_desc5']))
        {
            $user=$_SESSION['name'];
            $ques5=$_POST['ques_desc5'];
            $ques5=str_replace("'","\'",$ques5);
            $ques5=str_replace("<","&lt",$ques5);
            $ques5=str_replace(">","&gt",$ques5);
            if($ques5!='')
            {
                $sql="INSERT INTO `question` (`ques_user`, `ques_1`, `ques_2`, `ques_3`, `ques_4`, `ques_5`) VALUES ('$user', '', '', '', '', '$ques5');";
                $res=mysqli_query($connect1,$sql);
                if($res)
                {
                    echo '<div class="alert my-0 alert-success alert-dismissible fade show" role="alert">
                        <strong>Submitted successfully!</strong> Your response has been saved successfully.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
                else
                {
                    echo '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> There is some problem occured. you can contact us in instagram.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
            }
        }
    }
    
    ?>
    <div id="code_main">
        <div>
            <?php

            $event_id = $_GET['event_id'];
            $sql = "SELECT * FROM `event` WHERE `event_sno`='$event_id'";
            $res = mysqli_query($connect1, $sql);
            $row = mysqli_fetch_assoc($res);
            $event_name = $row['event_name'];
            echo ' <h1 class="code_main_h1">' . $event_name . '</h1>';

            ?>
        </div>
        <div>
            <ul>
                <li>You have given 5 question. (1 mark each)</li>
                <li>You have to complete this test within 1:30 hours.</li>
                <li>Do not try to google answers,copied answers will be rejected (We understand which code is copied and which is not).</li>
                <li>You can use any programming language.</li>
                <li>Try to minimize time complexity and space complexity,in case of draw winner will be selected on that base.</li>
                <li>Happy Coding!</li>
            </ul>
        </div>
        <div class="eve-timer">
            <h3 id="eve_head1">Event will be live in </h3>
            <h4 id="timer"></h4>
            <h4 id="timer1"></h4>
        </div>

    </div>
    <div class="code-1">
        <?php
        
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=='true')
        {
            echo '<div class="container py-5 accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Question 1
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div>
                                <div>
                                    <h5>You have given an array,you have to return or print sum of smallest value and highest value in given array. \'n\' denotes the size of array and \'arr\' denotes the array itself</h5>
                                </div>
                                <div>
                                    <div><b>Test case 1: </b></div>
                                    <div>
                                        <pre>
                    n=5;
                    arr[]={3,1,5,2,4};
                    Output - 6
                    Explanation - smallest value is 1,highest value is 5. Sum is 1+5=6.
                                        </pre>
                                    </div>
                                    <div><b>Test case 2: </b></div>
                                    <div>
                                        <pre>
                    n=5;
                    arr[]={100,-20,50,10,-40};
                    Output - 60
                    Explanation - smallest value is -40, highest value is 100. Sum is 100-40=60.
                                        </pre>
                                    </div>
                                </div>
                            </div>
                            <div>';
                                echo '
                                <form id="ques1" action="'. $_SERVER['REQUEST_URI'] .'" method="POST">
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Paste your code here</label>
                                            <textarea class="form-control" id="ques_desc1" name="ques_desc1" rows="7"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </form>';
                            echo '</div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Question 2
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <div>
                                <div>
                                    <h5>You have given a number,you have to check if the number is a palindrome or not. return or print 1 if palindrome else print 0 if not. \'n\' denotes the number.</h5>
                                </div>
                                <div>
                                    <div><b>Test case 1: </b></div>
                                    <div>
                                        <pre>
                    n=121;
                    Output - 1
                    Explanation - a number is a palindrome if its reversal is equal to itself.so if we reverse 121,we also get 121,hence it is a palindrome so output is 1.
                                        </pre>
                                    </div>
                                    <div><b>Test case 2: </b></div>
                                    <div>
                                        <pre>
                    n=1210;
                    Output - 0
                    Explanation - If we reverse 1210, we get 0121 hence 1210 is not equals to 0121 so it is not a palindrome,output is 0.
                                        </pre>
                                    </div>
                                </div>
                            </div>
                            <div>';
                                echo '<form id="ques2" action="'. $_SERVER['REQUEST_URI'] .'" method="POST">
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Paste your code here</label>
                                            <textarea class="form-control" id="ques_desc2" name="ques_desc2" rows="7"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </form>';
                            echo '</div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Question 3
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <div>
                                <div>
                                    <h5>You have given an array,your task is to reverse the array and print that array . \'n\' denotes the size of array and \'arr\' denotes the array itself</h5>
                                </div>
                                <div>
                                    <div><b>Test case 1: </b></div>
                                    <div>
                                        <pre>
                    n=5;
                    arr[]={3,1,5,2,4};
                    Output - {4,2,5,1,3};
                    Explanation - There\'s no need give explanation.
                                        </pre>
                                    </div>
                                    <div><b>Test case 2: </b></div>
                                    <div>
                                        <pre>
                    n=4;
                    arr[]={100,-20,50,10};
                    Output - {10,50,-20,100};
                    Explanation - There\'s no need give explanation.
                                        </pre>
                                    </div>
                                </div>
                            </div>
                            <div>';
                                echo '<form id="ques3" action="'. $_SERVER['REQUEST_URI'] .'" method="POST">
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Paste your code here</label>
                                            <textarea class="form-control" id="ques_desc3" name="ques_desc3" rows="7"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </form>';
                        echo '</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                            Question 4
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <div>
                                <div>
                                    <h5>You have given an number n1 and n2,your task is to return or print a number n3 which is equal to n1 raise to the power n2, which is something like this n1^n2. You cannot use inbuilt function to do that.</h5>
                                </div>
                                <div>
                                    <div><b>Test case 1: </b></div>
                                    <div>
                                        <pre>
                    n1=5;
                    n2=3;
                    Output - 125
                    Explanation - 5 raise to the power 3 (5^3) is 125.
                                        </pre>
                                    </div>
                                    <div><b>Test case 2: </b></div>
                                    <div>
                                        <pre>
                    n1=2;
                    n2=10;
                    Output - 1024
                    Explanation - 2 raise to the power 10 (2^10) is 1024.
                                        </pre>
                                    </div>
                                </div>
                            </div>
                            <div>';
                                echo '<form id="ques4" action="'. $_SERVER['REQUEST_URI'] .'" method="POST">
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Paste your code here</label>
                                            <textarea class="form-control" id="ques_desc4" name="ques_desc4" rows="7"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </form>';
                        echo '</div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Question 5
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <div>
                                <div>
                                    <h5>You have given an array which contains 0 and 1 only ,your task is to shift all 0s to left side of the array and all 1s to right side of the array. where\'n\' denotes the size of array and \'arr\' denotes the array itself</h5>
                                </div>
                                <div>
                                    <div><b>Test case 1: </b></div>
                                    <div>
                                        <pre>
                    n=6;
                    arr[]={1,0,1,1,0,0};
                    Output - {0,0,0,1,1,1};
                    Explanation - There are 3 0s and 3 1s, we shift all 0 to left side and all 1 to right side.
                                        </pre>
                                    </div>
                                    <div><b>Test case 2: </b></div>
                                    <div>
                                        <pre>
                    n=7;
                    arr[]={0,1,1,1,0,1,0};
                    Output - {0,0,0,1,1,1,1};
                    Explanation - There are 2 0s and 4 1s, we shift all 0 to left side and all 1 to right side.
                                        </pre>
                                    </div>
                                </div>
                            </div>
                            <div>';
                                echo '<form id="ques5" action="'. $_SERVER['REQUEST_URI'] .'" method="POST">
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Paste your code here</label>
                                            <textarea class="form-control" id="ques_desc5" name="ques_desc5" rows="7"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </form>';
                            echo '</div>
                        </div>
                    </div>
                </div>
            </div>';
        }
        else
        {
            echo '<h3 class="quiz_h3">You must login before accessing quiz (Your username and password has been sent to your email). if you are facing any problem regarding login or quiz,contact us on our instagram handler ASAP.</h3>';
        }
        ?>
    </div>
    <?php include 'footer.php'; ?>
    <iframe name="votar" style="display:none;"></iframe>
    <iframe name="votar1" style="display:none;"></iframe>
    <iframe name="votar2" style="display:none;"></iframe>
    <iframe name="votar3" style="display:none;"></iframe>
    <iframe name="votar4" style="display:none;"></iframe>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    if(document.getElementById('accordionExample')!=null)
    {
        document.getElementById('accordionExample').style.display='none';
    }
    event_timer="June 24, 2021 17:00:00";
    var countDownDate = new Date(event_timer).getTime();
    var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        document.getElementById("timer").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
        if (distance < 0) {
            clearInterval(x);
            document.getElementById('timer').style.display="none";
            document.querySelector('.eve-timer').height="auto";
            if(document.getElementById('accordionExample')!=null)
            {
                document.getElementById('accordionExample').style.display='block';
            }
            event_timer1="June 24, 2021 19:00:00";
            var countDownDate1 = new Date(event_timer1).getTime();
            var x1 = setInterval(function() {
                var now1 = new Date().getTime();
                var distance1 = countDownDate1 - now1;
                var days1 = Math.floor(distance1 / (1000 * 60 * 60 * 24));
                var hours1 = Math.floor((distance1 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes1 = Math.floor((distance1 % (1000 * 60 * 60)) / (1000 * 60));
                var seconds1 = Math.floor((distance1 % (1000 * 60)) / 1000);
                document.getElementById("timer1").innerHTML = days1 + "d " + hours1 + "h "
                + minutes1 + "m " + seconds1 + "s ";
                document.getElementById("eve_head1").innerHTML = "Event will end in ";
                if (distance1 < 0) {
                    clearInterval(x1);
                    document.getElementById('timer1').style.height="34vh";
                    if(document.getElementById('accordionExample')!=null)
                    {
                        document.getElementById('ques1').setAttribute("target","votar");
                        document.getElementById('ques2').setAttribute("target","votar1");
                        document.getElementById('ques3').setAttribute("target","votar2");
                        document.getElementById('ques4').setAttribute("target","votar3");
                        document.getElementById('ques5').setAttribute("target","votar4");
                        document.getElementById('ques1').submit();
                        document.getElementById('ques2').submit();
                        document.getElementById('ques3').submit();
                        document.getElementById('ques4').submit();
                        document.getElementById('ques5').submit();
                        document.getElementById('accordionExample').style.display='none';
                        window.location.href="http://localhost/igectechhub/timeup";
                    }
                    else
                    {
                        window.location.href="http://localhost/igectechhub/timeup";
                    }
                }
            },1000);
        }
    }, 1000);
</script>
<script src="script_main.js"></script>
</html>