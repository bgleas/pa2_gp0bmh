<?php

   // Include the Smarty Templating Engine
   define('SMARTY_DIR', __DIR__ . '/Smarty-3.1.14/libs/');
   require_once(SMARTY_DIR . 'Smarty.class.php');
   $smarty = new Smarty();

   $smarty->setTemplateDir(__DIR__ . '/templates/templates/');
   $smarty->setCompileDir(__DIR__ . '/templates/templates_c/');
   $smarty->setConfigDir(__DIR__ . '/templates/configs/');
   $smarty->setCacheDir(__DIR__ . '/templates/cache/');

   // Notice how you can set variables here in the PHP that will get carried into the template files
   $smarty->assign('title', "EECS485");

   // Setup the Routing Framework
   require_once __DIR__ . '/vendor/autoload.php';
   $klein = new \Klein\Klein();


   //Define MySQL Parameters

   $host = "localhost";
   $username = "group1";
   $password = "Groupone";
   $dbname = "group1";
   
/*   $con = mysqli_connect($host, $username, $password, $dbname);

   if (mysqli_connect_errno($con))
   {
        echo "Failed to connec to MySQL: ", mysqli_connect_error();
   }
*/




   /* Define routes here */
//Index Template Code////////////////////////////////////////////////////////////////////////////
   $klein->respond('GET', '/t4265ae/pa1', function ($request, $response, $service) use ($smarty) {    

   global $host, $username, $password, $dbname;
   
   //Connects to MySQL Server//
   $con = mysqli_connect($host, $username, $password, $dbname);

   if (mysqli_connect_errno($con))
   {
        echo "Failed to connec to MySQL: ", mysqli_connect_error();
   }

   $sql = "SELECT username from User";
   $results = mysqli_query($con, $sql);

   $name_count = 0;

   while($rows = mysqli_fetch_array($results))
   {
        $name_count++;
        $name = $rows['username'];
        $url = "/t4265ae/pa1/albums?username=".$name;
        $varname = "name" . $name_count;
        $varurl = "url" . $name_count;
        $smarty->assign($varname, $name);
        $smarty->assign($varurl, $url);
   }//end while

   $smarty->display('index.tpl');
   mysqli_close($con);//Close MySQL Connection
   });//end klein
//End Index Template Code/////////////////////////////////////////////////////////////////////////


//Picture Template Code//////////////////////////////////////////////////////////////////////////
   $klein->respond('GET', '/t4265ae/pa1/pic[:id]?', function ($request, $response, $service) use ($smarty) {

     // Notice how you can set variables here in the PHP that will get carried into the template files

           //Connects to MySQL Server//
   global $host, $username, $password, $dbname;
   $con = mysqli_connect($host, $username, $password, $dbname);

   if (mysqli_connect_errno($con))
   {
        echo "Failed to connec to MySQL: ", mysqli_connect_error();
   }

        $pid = $_GET["id"];
	$alb_id = $_GET['albumid'];

     $sql = "SELECT url from Photo where picid = '". $pid . "'";

     $results = mysqli_query($con, $sql);
     while ($rows = mysqli_fetch_array($results))
     {
        $picurl = $rows['url'];
     }

     $pic_ids = array();
     $sql = "SELECT picid from Contain WHERE albumid = " . $alb_id . " ORDER BY sequencenum";
     $results = mysqli_query($con, $sql);
     $num_pics = mysqli_num_rows($results);
     while ($rows = mysqli_fetch_array($results))
	{
		$pic_id_one  = $rows['picid'];
		array_push($pic_ids, $pic_id_one);
	}
	
    for ($i = 0; $i < $num_pics; $i++)
    {
	if ($pic_ids[$i] == $pid)
	{
		$index = $i;
	}		
    } 
	$previous_url = $picurl;
	$next_url = $picurl;


       if($index != 0)
       {
		$previous_url = "/t4265ae/pa1/pic?id=" . $pic_ids[$index-1] . "&albumid=" . $alb_id;
       }

       if($index != $num_pics-1)
       {
		$next_url = "/t4265ae/pa1/pic?id=" . $pic_ids[$index+1] . "&albumid=" . $alb_id;
       }

     $album_url = "/t4265ae/pa1/album?id=".$alb_id;
     $smarty->assign('album_url',$album_url);
     $smarty->assign('num_pics',$num_pics);
     $smarty->assign('previous_url',$previous_url);
     $smarty->assign('next_url',$next_url);
     $smarty->assign('picarray', $pic_ids);
     $smarty->assign('index', $index);
     $smarty->assign('url', $picurl);
     $smarty->assign('picid', $request->id);

     $smarty->display('pic.tpl');
   });//end klein
//End Picture Template Code//////////////////////////////////////////////////////////////////////


//Album Template Code///////////////////////////////////////////////////////////////////////////
   
    $klein->respond('GET', '/t4265ae/pa1/album[:id]?', function ($request, $response, $service) use ($smarty) {
//$smarty->assign('albumid', $request->id);

$actual_link = "$_SERVER[REQUEST_URI]";

if ($actual_link[18] != 's')
{




	   //Connects to MySQL Server//
   global $host, $username, $password, $dbname;
   $con = mysqli_connect($host, $username, $password, $dbname);

   if (mysqli_connect_errno($con))
   {
        echo "Failed to connec to MySQL: ", mysqli_connect_error();
   }

    $aid = $_GET["id"];
    global $current_album;
    $current_album  = $aid;


     $sql = "SELECT picid from Contain where albumid = '". $aid . "' ORDER BY sequencenum";
     $results = mysqli_query($con, $sql);
     $num_results = mysqli_num_rows($results);

     $pic_urls = array();
     $pic_ids = array();
	//Put all picture IDs into array
     
     while ($rows = mysqli_fetch_array($results))
     {
	$pid = $rows['picid'];
	array_push($pic_ids, $pid);
     }

     for ($i = 0;$i < $num_results; $i++)
     {
	$sql = "SELECT url FROM Photo WHERE picid = '".$pic_ids[$i]."'";
	$results = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($results);
	$url = $row['url'];
	array_push($pic_urls,$url);
     }

     $picurl = "/t4265ae/pa1/pic?id=";
     $smarty->assign('picurl', $picurl);
     $smarty->assign('album_id',$aid);
     $smarty->assign('num', $num_results);		
     $smarty->assign('urls', $pic_urls);
     $smarty->assign('picids', $pic_ids); 

     $album_edit_link = "/t4265ae/pa1/album/edit?id=";
     $smarty->assign('album_edit_link',$album_edit_link);
     $smarty->assign('edit',true);

     $smarty->display('album.tpl');
}
   });//end klein
//End Album Template Code//////////////////////////////////////////////////////////////////////



//Album Edit Template Code///////////////////////////////////////////////////////////////////////////

$klein->respond(array('POST','GET'), '/t4265ae/pa1/album/edit[:id]?', function ($request, $response, $service) use ($smarty) {


$smarty->assign('albumid', $request->id);

           //Connects to MySQL Server//
   global $host, $username, $password, $dbname;
   $con = mysqli_connect($host, $username, $password, $dbname);

   if (mysqli_connect_errno($con))
   {
        echo "Failed to connec to MySQL: ", mysqli_connect_error();
   }
 
	$albumid = $_GET['id'];
   $op = $request->op;

   if($op=="Delete")
   { 
    	$pic_id = $request->picid;
	$sql = "SELECT albumid FROM Contain WHERE picid='".$pic_id . "'";

          $results = mysqli_query($con,$sql);
          $num_picid = mysqli_num_rows($results);
	$sql = "DELETE FROM Contain WHERE picid='".$pic_id."' AND albumid = " . $albumid;
        $result = mysqli_query($con, $sql);   


          if ($num_picid<2)
            {
                $sql = "SELECT url FROM Photo WHERE picid ='".$pic_id."'";
                $results = mysqli_query($con,$sql);
                $row = mysqli_fetch_array($results);
		$short_url = $row['url'];
		$pic_url = "/home/group1/admin/php/html".$short_url;
		
		$sql = "SELECT COUNT(url) FROM Photo where url = '". $short_url . "'";
		$results = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($results);
		$count = $row[0];
		if ($count == 1)
		{
	                unlink($pic_url);
		}
                $sql = "DELETE FROM Photo WHERE picid = '".$pic_id."'";
                $results = mysqli_query($con,$sql);
            }

	$date = date("Y-m-d");
	$sql = "UPDATE Album SET lastupdated = '". $date . "'WHERE albumid = " . $albumid;
	$results = mysqli_query($con, $sql);
	
}
elseif($op=="Add")
{
	if (strlen(basename($_FILES['userfile']['name'])) > 0 && strlen(trim(basename($_FILES['userfile']['name']))) > 0){
//		echo "good";


	$uploaddir = "/home/group1/admin/php/html/photos/";
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
	$pic_url = "/photos/" . basename($_FILES['userfile']['name']);

	$new_pic_id = md5($pic_url);

	move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
	$type = $_FILES['userfile']['type'];

	if ($type == "image/jpeg")
	{
		$type = "jpg";
	}else{

		$type = $type[6] . $type[7] . $type [8];
	}

//update album info
        $date = date("Y-m-d");
        $sql = "UPDATE Album SET lastupdated = '". $date . "'WHERE albumid = " . $albumid;
        $results = mysqli_query($con, $sql);

	$sql = "INSERT INTO Photo (picid, url, format, date) VALUES ('" . $new_pic_id . "', '" . $pic_url . "', '" . $type . "', '" . $date . "')";
	$results = mysqli_query($con, $sql);


	$sql = "SELECT MAX(sequencenum) FROM Contain where albumid =". $albumid;
	$results = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($results);
	$new_seq = $row[0] + 1;
	
	$sql = "INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES (" . $albumid . ", '" . $new_pic_id . "', 'No Caption Inserted', ". $new_seq . ")";
	$results = mysqli_query($con, $sql);
}

}




    $aid = $_GET["id"];
    global $current_album;
    $current_album  = $aid;


     $sql = "SELECT picid from Contain where albumid = '". $aid . "' ORDER BY sequencenum";
     $results = mysqli_query($con, $sql);
     $num_results = mysqli_num_rows($results);

     $pic_urls = array();
     $pic_ids = array();
        //Put all picture IDs into array

     while ($rows = mysqli_fetch_array($results))
     {
        $pid = $rows['picid'];
        array_push($pic_ids, $pid);
     }





for ($i = 0;$i < $num_results; $i++)
     {
        $sql = "SELECT url FROM Photo WHERE picid = '".$pic_ids[$i]."'";
        $results = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($results);
        $url = $row['url'];
        array_push($pic_urls,$url);
     }



     $picurl = "/t4265ae/pa1/pic?id=";
     $smarty->assign('picurl', $picurl);
     $smarty->assign('album_id',$aid);
     $smarty->assign('num', $num_results);
     $smarty->assign('urls', $pic_urls);
     $smarty->assign('picids', $pic_ids);

     $album_edit_link = "/t4265ae/pa1/album/edit?id=".$aid;
     $smarty->assign('album_edit_link',$album_edit_link);
     

     $smarty->display('album.tpl');
   });//end klein
//End Album Edit Template Code//////////////////////////////////////////////////////////////////////



//Albums Template Code////////////////////////////////////////////////////////////////////////
   $klein->respond('GET', '/t4265ae/pa1/albums[:username]?', function ($request, $response, $service) use ($smarty) {
 
   global $host, $username, $password, $dbname;

   //Connects to MySQL Server//
   $con = mysqli_connect($host, $username, $password, $dbname);

   if (mysqli_connect_errno($con))
   {
        echo "Failed to connec to MySQL: ", mysqli_connect_error();
   }

     $user = $_GET["username"];


     if ($user == "")
     {
	$sql  = "SELECT title, albumid from Album"; 
     }else{
	$sql = "SELECT title, albumid from Album where username = '". $user . "'";
     }
     $album_results = mysqli_query($con, $sql);
     $num = mysqli_num_rows($album_results);

     $albums_stack = array();
     $albumid = array();
     
     while($rows = mysqli_fetch_array($album_results))
   {
  	$output = $rows['title'];
	$aid = $rows['albumid'];
        array_push($albums_stack, $output);
	array_push($albumid, $aid);
   }

     $smarty->assign('albumid', $albumid);
     $album_link = "/t4265ae/pa1/album?id=";
     $smarty->assign('album_link', $album_link);
     $smarty->assign('rows', $num);
     $smarty->assign('albums', $albums_stack);

     $smarty->assign('name',  $user);

     $link = "/t4265ae/pa1/albums/edit?username=".$user;

     $smarty->assign('link',$link);

     $smarty->assign('edit', true);

     $smarty->display('albums.tpl');   
  mysqli_close($con);//Close MySQL Connection
 });//end klein
//End Albums Template Code///////////////////////////////////////////////////////////////////////


//Begin Albums/Edit Template Code //////////////////////////////////////////////////////////////
 $klein->respond(array('POST', 'GET'), '/t4265ae/pa1/albums/edit[:username]?', function ($request, $response, $service) use ($smarty) {
 global $host, $username, $password, $dbname;

   //Connects to MySQL Server//
   $con = mysqli_connect($host, $username, $password, $dbname);

   if (mysqli_connect_errno($con))
   {
        echo "Failed to connec to MySQL: ", mysqli_connect_error();
   }

     $user = $_GET["username"];
  //if Post
//POST to retrieve title
  $op = $request->op;
  if ($op=="Add")
  {//Add
	$new_album_title = $request->new_album_title;
	if (strlen($new_album_title) > 0 && strlen(trim($new_album_title)) > 0)
	{
		$date = date("Y-m-d");
		$sql = "INSERT into Album ( title, created, lastupdated, username) VALUES ('".$new_album_title . "','" . $date . "', '" .$date . "', '" .$user. "')";
		$results = mysqli_query($con, $sql);
 	}else{
//		echo "ERROR Invalid Title";
	} 
 }
 elseif ($op=="Delete")
  {//DELETE	
	$album_id = $request->albumid;
	
	$sql = "SELECT picid FROM Contain WHERE albumid= ".$album_id;
	$results = mysqli_query($con, $sql);
	$num_picid = mysqli_num_rows($results);
	$picid_array = array();
	while($rows = mysqli_fetch_array($results))
	{
	  $output = $rows['picid'];
	  array_push($picid_array,$output);
	}

	$sql = "DELETE FROM Contain WHERE albumid= ".$album_id;
        $results = mysqli_query($con, $sql);

	$sql = "DELETE FROM Album WHERE albumid= ".$album_id;
        $results = mysqli_query($con, $sql);
	
	for ($i = 0;$i < $num_picid; $i++)
	{
	  $sql = "SELECT albumid FROM Contain WHERE picid=".$picid_array[$i];
	  $results = mysqli_query($con,$sql);
	  $num_pid = mysqli_num_rows($results);
	  if ($num_pid<2)
	    {  
		$sql = "SELECT url FROM Photo WHERE picid =".$picid_array[$i];
		$results = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($results);
		$pic_url = $row['url'];
		$pic_url = "/home/group1/admin/php/html".$pic_url;

		 $sql = "SELECT COUNT(url) FROM Photo where url = '". $short_url . "'";
                $results = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($results);
                $count = $row[0];
                if ($count == 1)
                {
                        unlink($pic_url);
                }

	
		$sql = "DELETE FROM Photo WHERE picid = ".$picid_array[$i];
		$results = mysqli_query($con,$sql);
	    }
	}
  }

     $sql = "SELECT title, albumid from Album where username = '". $user . "'";

     $album_results = mysqli_query($con, $sql);
     $num = mysqli_num_rows($album_results);
    $albums_stack = array();
    $albumid = array();

     while($rows = mysqli_fetch_array($album_results))
   {
        $output = $rows['title'];
	$aid = $rows['albumid'];
        array_push($albums_stack, $output);
	array_push($albumid, $aid);
   }

     $album_link = "/t4265ae/pa1/album?id=";
     $album_edit_link = "/t4265ae/pa1/album/edit?id=";
     $smarty->assign('album_link', $album_link);
     $smarty->assign('album_edit_link',$album_edit_link);
     $smarty->assign('albumid', $albumid);
     $smarty->assign('rows', $num);
     $smarty->assign('albums', $albums_stack);

     $smarty->assign('name',  $user);


  $smarty->display('albums.tpl');


          
 });//end klein




   mysqli_close($con);

   $klein->dispatch();
?>
