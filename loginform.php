

<?php 

$cont=mysqli_connect("localhost", "root", "");
mysqli_select_db($cont, "firsdb");

$data=$_POST;


if (isset($data['button_name']))
{
    //Здесь будет проверка на то и меется ли у нас такие логин и пароль

	
	

    $errors = array();
    if (trim($data['login'])=='')
    {
    	$errors[]='Enter login!';
    }
    if ($data['password']=='')
    {
    	$errors[]='Enter passwod!';
    }
    if(empty($errors))
    {
    	//Все ок пусть заходит

    	$sqli=mysqli_query($cont, "select pasword, vip from users where ilogin like\"".$data['login']."\"");
	if ($re =mysqli_fetch_array($sqli)) 
	{
		if($re['pasword']==$data['password'])
        {
            
            session_start();
			if(isset($_POST['login']))
			{
			$_SESSION['login']=$_POST['login'];
               if($re['vip']==1)
               {
                  $_SESSION['vip']=$re['pasword'];
               }
			}

            

				if(isset($_SESSION['login']))
				{
					echo " <head>
		                <meta http-equiv='refresh' content='0;URL=http://localhost/drevo_project-master/drevo.php' />
		               </head>";	
				    echo "</p>";
			    }
			    else 
			    {
			    	echo " <head>
		                <meta http-equiv='refresh' content='0;URL=http://localhost/drevo_project-master/index.php' />
		               </head>";	
				    echo "</p>";
			    }
		}	    
	    else
	    {
	    	echo "Wrong password";
	    }
	} 
    else
    {
    	echo "This login does not exist!";
    }
    }
    else
    {
    	echo "<div style='color: red;'>".array_shift($errors)."</div><hr>";
    }
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Reg</title>
<link rel='stylesheet' href='css/stylefirst.css'/>
<link  rel='stylesheet' type='text/css'>
</head>
<body>

<div id='range5'>

<div class='outer'>
  <div class='middle'>
    <div class='inner'>

        <div class='login-wr'>
          <h2>Вход</h2>
          <form action'/regform.php' method='POST'>
          <div class='form'>
            <input type='text' name='login' placeholder='Login'>
            <input type='password' name='password' placeholder='Password'>
            <button type='submit' name='button_name'>  Войти </button>
          </form> 
          </div>
        </div>

    </div>
  </div>
</div>

</div>


