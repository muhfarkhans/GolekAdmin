<?php
echo "
	Golek Panggonan Admin -- Coded by KurodaID :v\n
";
$domain = $argv[1];
if($domain != ""){
	if(preg_match( '/^(http|https):\\/\\/[a-z0-9_]+([\\-\\.]{1}[a-z_0-9]+)*\\.[_a-z]{2,5}'.'((:[0-9]{1,5})?\\/.*)?$/i' ,$domain)){
	cek($domain);
}else{
	echo "Kurang http:// opo https:// paling, males ngedit preg";
}
}elseif($domain == ""){
	echo "Raono target e bos";
}
//cek($domain);
function cek($dom){
	$list = array(
'operator/',
'sika/',
'develop/',
'ketua/',
'redaktur/',
'administrator/',
'adminweb/',
'user/',
'users/',
'dinkesadmin/',
'retel/',
'author/',
'panel/',
'paneladmin/',
'panellogin/',
'redaksi/',
'cp-admin/',
'master/',
'login',
'master/index.php',
'master/login.php',
'operator/index.php',
'sika/index.php',
'develop/index.php',
'ketua/index.php',
'redaktur/index.php',
'admin/index.php',
'administrator/index.php',
'adminweb/index.php',
'user/index.php',
'users/index.php',
'dinkesadmin/index.php',
'retel/index.php',
'author/index.php',
'panel/index.php',
'paneladmin/index.php',
'panellogin/index.php',
'redaksi/index.php',
'cp-admin/index.php',
'operator/login.php',
'sika/login.php',
'develop/login.php',
'ketua/login.php',
'redaktur/login.php',
'admin/login.php',
'administrator/login.php',
'adminweb/login.php',
'user/login.php',
'users/login.php',
'dinkesadmin/login.php',
'retel/login.php',
'author/login.php',
'panel/login.php',
'paneladmin/login.php',
'panellogin/login.php',
'redaksi/login.php',
'cp-admin/login.php',
'terasadmin/',
'terasadmin/index.php',
'terasadmin/login.php',
'rahasia/',
'rahasia/index.php',
'rahasia/admin.php',
'rahasia/login.php',
'dinkesadmin/',
'dinkesadmin/login.php',
'adminpmb/',
'adminpmb/index.php',
'adminpmb/login.php',
'system/',
'system/index.php',
'system/login.php',
'webadmin/',
'webadmin/index.php',
'webadmin/login.php',
'wpanel/',
'wpanel/index.php',
'wpanel/login.php',
'adminpanel/index.php',
'adminpanel/',
'adminpanel/login.php',
'adminkec/',
'adminkec/index.php',
'adminkec/login.php',
'admindesa/',
'admindesa/index.php',
'admindesa/login.php',
'adminkota/',
'adminkota/index.php',
'adminkota/login.php',
'admin123/',
'admin123/index.php',
'admin123/login.php',
'logout/',
'logout/index.php',
'logout/login.php',
'logout/admin.php',
'sistem/',
'webpanel/',
'w3bc0ntr0l/',
'apanel/',
'sysadmin/',
'operator.php',
'sika.php',
'develop.php',
'ketua.php',
'redaktur.php',
'admin.php',
'administrator.php',
'adminweb.php',
'user.php',
'users.php',
'dinkesadmin.php',
'retel.php',
'author.php',
'panel.php',
'paneladmin.php',
'panellogin.php',
'redaksi.php',
'cp-admin.php',
'master.php',
'admin/',
'login.php',
);
	foreach($list as $listd){
$url = "$dom$listd";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HEADER, true);    
curl_setopt($ch, CURLOPT_NOBODY, true);    
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_TIMEOUT,10);
$output = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE); 
echo $url;
curl_close($ch); 
if($httpcode == 200){
	$arurl = $url;
	echo "\033[32m Ketemu iki Bos :v \033[0m \n";
}else{
	echo " ==> raono iki\n";
}
	}
echo "\n";
echo "\033[34m Ketemu iki bos (sik paling ngisor) :v \033[0m \n\n";
echo "->";
echo "\033[32m $arurl  \033[0m \n";
echo "\n";
}
?>
