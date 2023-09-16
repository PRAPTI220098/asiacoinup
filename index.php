<head> <title>SANCHIT ASIA</title> <meta name="theme-color" content="#CC99FF"><link rel="shortcut icon" href="#" type="image/x-icon" /><meta name="viewport" content="width=device-width">

<meta name="theme-color" content="#CC99FF">
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">

 <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">

 <html><head><meta name="viewport" content="width=device-width"><style>


hr.style5 {
	background-color: #fff;
	border-top: 2px dashed #FFC300;
}

@import url('https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap');

/* BASIC */

html {
  background-color: #56baed;
}

body {
  font-family: 'Baloo Bhai', cursive;
  height: 100vh;
}

a {
  color: #92badd;
  display:inline-block;
  text-decoration: none;
  font-weight: 400;
}

h2 {
  text-align: center;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  display:inline-block;
  margin: 40px 8px 10px 8px;
  color: #cccccc;
}



/* STRUCTURE */

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
}

#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #fff;
  padding: 30px;
  width: 90%;
  max-width: 450px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}

#formFooter {
  background-color: #f6f6f6;
  border-top: 1px solid #dce8f1;
  padding: 25px;
  text-align: center;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
}



/* TABS */

h2.inactive {
  color: #cccccc;
}

h2.active {
  color: #0d0d0d;
  border-bottom: 2px solid #5fbae9;
}



/* FORM TYPOGRAPHY*/

input[type=button], input[type=submit], input[type=reset]  {
  background-color: #56baed;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
  background-color: #39ace7;
}
select {
  width: 85%;
  padding: 16px 20px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
}
input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
  -moz-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  -o-transform: scale(0.95);
  -ms-transform: scale(0.95);
  transform: scale(0.95);
}

input[type=text] {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}

input[type=text]:focus {
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}

input[type=text]:placeholder {
  color: #cccccc;
}



/* ANIMATIONS */

/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

/* Simple CSS3 Fade-in Animation */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
}

.fadeIn.first {
  -webkit-animation-delay: 0.4s;
  -moz-animation-delay: 0.4s;
  animation-delay: 0.4s;
}

.fadeIn.second {
  -webkit-animation-delay: 0.6s;
  -moz-animation-delay: 0.6s;
  animation-delay: 0.6s;
}

.fadeIn.third {
  -webkit-animation-delay: 0.8s;
  -moz-animation-delay: 0.8s;
  animation-delay: 0.8s;
}

.fadeIn.fourth {
  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  animation-delay: 1s;
}

/* Simple CSS3 Fade-in Animation */
.underlineHover:after {
  display: block;
  left: 0;
  bottom: -10px;
  width: 0;
  height: 2px;
  background-color: #56baed;
  content: "";
  transition: width 0.2s;
}

.underlineHover:hover {
  color: #0d0d0d;
}

.underlineHover:hover:after{
  width: 100%;
}



/* OTHERS */

*:focus {
    outline: none;
}

#icon {
  width:60%;
}

* {
  box-sizing: border-box;
}


</style>

<script type="text/javascript">
  if (top.location.href != self.location.href)
     top.location.href = self.location.href;
</script>
	<div class='wrapper fadeInDown'>
  <div id='formContent'>

<center><h3>  <div id='formContent'><font size='5'> Asia Follower Coin Up</h3><center><br>
<?php
error_reporting(0);
if(isset($_GET['submit'])){

	
$user_id=$_GET['uid'];
$token=$_GET['token'];

function rando($length) {
  $characters = '1234567890abcdefghijklmnopqrstuvwxyz';

  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}
function BaseHash_encrypt($data){
    $output1 = openssl_encrypt($data, "AES-128-ECB", "C4j3Sl3Ai8Cbe0V2");
    $output = base64_encode($output1);
    return $output;
}

function CipherKey_encrypt($data){
    $output = openssl_encrypt($data, "AES-128-ECB", "ZDZoZG05Nmhkc2Rz");
    return $output;
}
$r3=rando(4);
$r86=rando(39);
$r67=rando(34);

$r8=rando(6);
$r39=rando(26);
$r61=rando(84);


function uhgetod($user_id,$r3,$r86,$r67){
    $s1 = CipherKey_encrypt('com.NewAsia.followers');
	$s2 = openssl_encrypt($user_id, "AES-128-ECB", "C4j3Sl3Ai8Cbe0V2");
	$s3 = openssl_encrypt($s1.$s2, "AES-128-ECB", 'Sv5j2mP9sx2QdiBl');
	$s3 = CipherKey_encrypt($s3);
	$app_key = openssl_encrypt($s3, "AES-128-ECB", "C4j3Sl3Ai8Cbe0V2");
				
	$len = strlen($app_key);
	$key = $app_key[intval($len/7)].$app_key[intval($len/5)].$app_key[intval($len/3)].$app_key[intval($len/8)].$app_key[intval($len/4)].$app_key[intval($len/2)].$app_key[intval($len/9)].$app_key[intval($len/3)].$app_key[$len-71].$app_key[$len-22].$app_key[$len-54].$app_key[$len-31].$app_key[$len-62].$app_key[$len-79].$app_key[$len-29].$app_key[$len-44];
    $god=$r3.'_'.$user_id.'_'.$r86.'_com.NewAsia.followers_'.$r67;
	$o_hash = openssl_encrypt($god, "AES-128-ECB", $key);
	
    return $o_hash;
 
    
}

function uhupd($user_id,$r8,$r39,$r61){
    $s1 = CipherKey_encrypt('com.NewAsia.followers');
	$s2 = openssl_encrypt($user_id, "AES-128-ECB", "C4j3Sl3Ai8Cbe0V2");
	$s3 = openssl_encrypt($s1.$s2, "AES-128-ECB", 'Sv5j2mP9sx2QdiBl');
	$s3 = CipherKey_encrypt($s3);
	$app_key = openssl_encrypt($s3, "AES-128-ECB", "C4j3Sl3Ai8Cbe0V2");
				
	$len = strlen($app_key);
	$key = $app_key[intval($len/7)].$app_key[intval($len/5)].$app_key[intval($len/3)].$app_key[intval($len/8)].$app_key[intval($len/4)].$app_key[intval($len/2)].$app_key[intval($len/9)].$app_key[intval($len/3)].$app_key[$len-71].$app_key[$len-22].$app_key[$len-54].$app_key[$len-31].$app_key[$len-62].$app_key[$len-79].$app_key[$len-29].$app_key[$len-44];
	
    $upd=$r8.'_'.$user_id.'_'.$r39.'_com.NewAsia.followers_'.$r61;
   
	$o_hash = openssl_encrypt($upd, "AES-128-ECB", $key);
    return $o_hash;
}

 $url1="https://asiafollower.com/api/AsiaVersion/v1/getOrder";
 
 
 $un=rando(125);
 $unn=BaseHash_encrypt($un);
 $uhgod=uhgetod($user_id,$r4,$r88,$r53);
 
 $ah=rando(120);
 $ahh=CipherKey_encrypt($ah);
 
 $ak=rando(115);
 $akk=BaseHash_encrypt($ak);
 
 $uhupd=uhupd($user_id,$r8,$r39,$r61);
 
 $headers1=['Host: asiafollower.com',
'token: '.$token,
'content-type: application/json; charset=UTF-8',
'accept-encoding: gzip',
'user-agent: okhttp/3.14.9'];

$data1='{"version_code":1,"market_type":"bazzar","language":"en","u_n":"'.$unn.'","u_h":"'.$uhgod.'","a_h":"'.$ahh.'","a_k":"'.$akk.'","order_type":"follow"}';


$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url1);
curl_setopt($ch,CURLOPT_POST, 1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');    
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$story = curl_exec($ch);
curl_close($ch);
$jss=json_decode($story,true);

$pk=$jss[0]['pk'];
$order=$jss[0]['order_id'];
$idd=$jss[0]['id'];
$username=$jss[0]['username'];



$url2="https://asiafollower.com/api/AsiaVersion/v1/updateOrder";
$url3="https://asiafollower.com/api/AsiaVersion/v1/getUserInfo";
$str = 'com.NewAsia.followers_'.$pk.'_'.$user_id.'_'.$order.'_'.$username.'_'.$idd.'';

$str=base64_encode(base64_encode(base64_encode($str)));

$len=strlen($str);

$keyarr=[7,5,3,8,4,2,9,3,71,22,54,31,62,79,29,44];

for($i=0;$i<8;$i++){
    $d=$keyarr[$i];
    $d=$len/$d;
    $x1[]= substr($str,$d,1);
}
for($i=8;$i<16;$i++){
    $d=$keyarr[$i];
    $d=$len-$d;
    $x2[]= substr($str,$d,1);
}

$x=array_merge($x1,$x2);
$keyx=implode("",$x);

$raw='3ko_'.$order.'_vqr6wimj_'.$user_id.'_tc9p_'.$pk.'_qzsr';
$hash =base64_encode(openssl_encrypt($raw, 'aes-128-ecb', $keyx,OPENSSL_RAW_DATA));


$data2='{"version_code":1,"market_type":"bazzar","language":"en","u_n":"'.$unn.'","u_h":"'.$uhupd.'","a_h":"'.$ahh.'","a_k":"'.$akk.'","order_id":"'.$order.'","get_coin":"true","u_hash":"'.$hash.'","error":""}';


$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url2);
curl_setopt($ch,CURLOPT_POST, 1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data2);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');    
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$sff = curl_exec($ch);
curl_close($ch);

$dax='{"version_code":1,"market_type":"bazzar","language":"en","u_n":"'.$unn.'","u_h":"'.$uhupd.'","a_h":"'.$ahh.'","a_k":"'.$akk.'"}';

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url3);
curl_setopt($ch,CURLOPT_POST, 1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$dax);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');    
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$storyx = curl_exec($ch);
curl_close($ch);
 $mf=json_decode($storyx,true);
 
$msg=$mf['message'];
$coin=$mf['user']['follow_coin'];

echo $sff."<br>".PHP_EOL;
echo "<div class='success'><center>
<font color='blue'><hr><br>"."Follow Coin- : ".$coin.PHP_EOL."<hr></font></center></div><br>";

echo '<meta http-equiv="refresh" content="0">';


	    }
	if(!isset($_GET['submit'])){
echo"<form action='' method='get'>

<lable></lable> <input type='text' class='fadeIn second' name='uid' autocomplete='off' placeholder='User Id' required> <input type='text' class='fadeIn second' name='token' autocomplete='off' placeholder='Token' required>
    </select> </center>
  ";
echo "<input type='submit' class='submit' name='submit' value='submit'>";


}
?>
