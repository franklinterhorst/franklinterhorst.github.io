<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Artikelen in PDF-formaat</title>
    <link rel="icon" type="image/png" href="/0home/images/pasted-image-472.png">
    <meta name="referrer" content="same-origin">
    <link rel="canonical" href="artikelen-in-pdf-formaat.html">
    <meta name="robots" content="noindex,nofollow">
  </head>
  <body>
    <?php
      $search= $_POST['search_entered'];
      $searchoriginal= $search;
      $search= strtolower($search);
      $search= trim($search);
      $search= explode(" ", $search);
      $countsearchterms= count($search);
      $submitbutton= $_POST['submit'];
    ?>

    <form action="" method="POST">
    Enter Search Query: 
    <input type="text" name="search_entered" value='test'/> <br><br>
    <input type="submit" name="submit" value="Search"/><br><br>
    </form>

    <?php
      $directory = "/";
      if ($submitbutton) {
        if (!empty($searchoriginal)) {
          if (is_dir($directory)) {
            if ($open = opendir($directory)) {
              if ($countsearchterms == 1) {
                while (($file = readdir($open)) !== false) {
                  $fileoriginal= $file;
                  $file= strtolower($file);
                  $file= str_replace("-", " ", $file);
                  $file= str_replace("_", " ", $file);
                  $position= strpos("$file", ".");
                  $file= substr($file, 0, $position);
                  if (strpos("$file",  "$search[0]") !== false) {
                    $file= ucwords($file);
                    $array[] += "$file";
                    echo "<a href='https://franklinterhorst.github.io/" . "$fileoriginal'>$file</a>"."<br>";
                  }
                }
              }
              else if ($countsearchterms == 2) {
                while (($file = readdir($open)) !== false) {
                  $fileoriginal= $file;
                  $file= strtolower($file);
                  $file= str_replace("-", " ", $file);
                  $position= strpos("$file", ".");
                  $file= substr($file, 0, $position);
                  if ((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false)) {
                    $file= ucwords($file);
                    $array[] += "$file";
                    echo "<a href='https://franklinterhorst.github.io/" . "$fileoriginal'>$file</a>"."<br>";
                  }
                }
              }
              else if ($countsearchterms == 3) {
                while (($file = readdir($open)) !== false) {
                  $fileoriginal= $file;
                  $file= strtolower($file);
                  $file= str_replace("-", " ", $file);
                  $position= strpos("$file", ".");
                  $file= substr($file, 0, $position);
                  if ((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)) {
                    $file= ucwords($file);
                    $array[] += "$file";
                    echo "<a href='https://franklinterhorst.github.io/" . "$fileoriginal'>$file</a>"."<br>";
                  }
                }
              }
              else if ($countsearchterms == 4) {
                while (($file = readdir($open)) !== false) {
                $fileoriginal= $file;
                $file= strtolower($file);
                $file= str_replace("-", " ", $file);
                $position= strpos("$file", ".");
                $file= substr($file, 0, $position);
                  if ((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false) && (strpos("$file",  "$search[3]") !== false)) {
                    $file= ucwords($file);
                    $array[] += "$file";
                    echo "<a href='https://franklinterhorst.github.io/" . "$fileoriginal'>$file</a>"."<br>";
                  }
                }
              }
              else if ($countsearchterms == 5) {
                while (($file = readdir($open)) !== false) {
                  $fileoriginal= $file;
                  $file= strtolower($file);
                  $file= str_replace("-", " ", $file);
                  $position= strpos("$file", ".");
                  $file= substr($file, 0, $position);
                  if ((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)&& (strpos("$file",  "$search[3]") !== false) && (strpos("$file",  "$search[4]") !== false))  {
                    $file= ucwords($file);
                    $array[] += "$file";
                    echo "<a href='https://franklinterhorst.github.io/" . "$fileoriginal'>$file</a>"."<br>";
                  }
                }  
              }
              else if ($countsearchterms == 6) {
                while (($file = readdir($open)) !== false) {
                  $fileoriginal= $file;
                  $file= strtolower($file);
                  $file= str_replace("-", " ", $file);
                  $position= strpos("$file", ".");
                  $file= substr($file, 0, $position);
                  if ((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)&& (strpos("$file",  "$search[3]") !== false) && (strpos("$file",  "$search[4]") !== false) && (strpos("$file",  "$search[5]") !== false)) {
                    $file= ucwords($file);
                    $array[] += "$file";
                    echo "<a href='https://franklinterhorst.github.io/" . "$fileoriginal'>$file</a>"."<br>";
                  }
                }  
              }
              else if ($countsearchterms == 7) {
                while (($file = readdir($open)) !== false) {
                  $fileoriginal= $file;
                  $file= strtolower($file);
                  $file= str_replace("-", " ", $file);
                  $position= strpos("$file", ".");
                  $file= substr($file, 0, $position);
                  if ((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)&& (strpos("$file",  "$search[3]") !== false) && (strpos("$file",  "$search[4]") !== false) && (strpos("$file",  "$search[5]") !== false) && (strpos("$file",  "$search[6]") !== false)) {
                    $file= ucwords($file);
                    $array[] += "$file";
                    echo "<a href='https://franklinterhorst.github.io/" . "$fileoriginal'>$file</a>"."<br>";
                  }
                }  
              }
              closedir($open);
            }
          } //while loop
          $arraycount= count($array);
          if ($arraycount == 0) {
            echo "No results for this search entered";
          }
        } 
      }
    ?>

  </body>
</html>
