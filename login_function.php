<?php
class Loginfun{
public static function CheckLoginState($con)
{
    
    // /echo $_SESSION['username'],''.$_COOKIE['PHPSESSID'];
    if(!isset($_SESSION['username']) || !isset($_COOKIE['PHPSESSID']))
    {
       session_start();
       //echo "dssa";
    }
    if(isset($_COOKIE['userId']) && isset($_COOKIE['session_token']) && isset($_COOKIE['session_string']))
    {
        
        $id=$_COOKIE['userId'];
        $token=$_COOKIE['session_token'];
        $serial=$_COOKIE['session_string'];
         $sel="select * from session where userId='$id' and  session_token='$token' and session_string='$serial'";
        $data=mysqli_query($con,$sel);
        $result=mysqli_fetch_assoc($data);
        if($result>0)
        {
            //echo $result['userId'];
            if(
            $result['userId']== $_COOKIE['userId'] &&
            $result['session_token']== $_COOKIE['session_token'] &&
            $result['session_string']== $_COOKIE['session_string']
            )
            {
                
               if(
                $result['userId']== $_SESSION['userId'] &&
                $result['session_token']== $_SESSION['session_token'] &&
                $result['session_string']== $_SESSION['session_string']
               )
               {
                
                //header("location:".HTTP_BASE.'admin/index.php');
                //echo "sd";
                //Loginfun::createRecord($con,$_COOKIE['userId'],$_SESSION['username']);
                return true;
                
               }
               else
               {
                //echo "sada465";
                //echo "sda";
                Loginfun::createRecord($con,$_COOKIE['userid'],$_SESSION['username']);
                return true;
               }
            }
        }
    }

}
public static function createRecord($con,$userid,$username)
{
        $del="delete from session where userId='$userid'";
        mysqli_query($con,$del);
        $token=Loginfun::CreateString(32);
        $serial=Loginfun::CreateString(32);
        Loginfun::CreateCookie($userid,$username,$token,$serial);
        Loginfun::CreateSession($userid,$username,$token,$serial);

        $ins="insert into session(session_token,session_string,status,userId,create_at)values('$token','$serial','1','$userid',NOW())";
        $id=mysqli_query($con,$ins);
        if($id)
        return true;

}
public static function logoutfun()
{
    setcookie('PHPSESSID','',time()-1,"/");
    setcookie('userId','',time()-1,"/");
    setcookie('session_token','',-1,"/");
    setcookie('session_string','',-1,"/");
        session_start();    
    session_destroy();
}
public static function CreateCookie($userid,$username,$token,$serial)
{
    
    setcookie('userId',$userid,time()+(86400)*30,"/");
    setcookie('session_token',$token,time()+(86400)*30,"/");
    setcookie('session_string',$serial,time()+(86400)*30,"/");
}
public static function CreateSession($userid,$username,$token,$serial)
{
   // echo "ds";
    if(!isset($_SESSION['username']) || !isset($_COOKIE['PHPSESSID']))
    {
        session_start();    
    }
    $_SESSION['username']=$username;
    $_SESSION['userId']=$userid;
    $_SESSION['session_token']=$token;
    $_SESSION['session_string']=$serial;
       
}
public static function CreateString($len)
{
    $string = "45645645SDHKAJDHAAJDHAJKDHAJHDAKJDAJKDAHADGAHDGA7A6S67D6JHFSFJHAKHFA8792874JHFAKJH893982JDKHAVD76A676";
    $s=substr(str_shuffle($string), 0, 50);

    /*$s='';
    $r_new="";
    $r_old='';
    for($i=1; $i<$len; $i++)
    {
        while($r_old == $r_new)
        {
            $r_new=rand(0,60);
        }
        $r_old= $r_new;
        $s=$s.$string[$r_new];
        
    }
    */

    return $s;
}
public static function CheckCsrfToken($con,$token)
{
    $sel="select session_string from  session where userId ='".$_COOKIE['userId']."' and session_string='".$token."'";
    $d1=mysqli_query($con,$sel);
    print_r($d1);
    $result=mysqli_fetch_assoc($d1);
    if($result)
    {
        echo $result['session_string'].'/'.$token;
        if($result['session_string']==$token)
            return true;
        else
            return false;
    }
    else
    {
        //echo "df";
        return false;
    }
       
}
public static function get_profile_details($con)
{
    
    $sel="select * from  users_login where id ='".$_COOKIE['userId']."'";
    $d1=mysqli_query($con,$sel);
    $result=mysqli_fetch_array($d1);
    
       return $result;
    
    
}
}

?>