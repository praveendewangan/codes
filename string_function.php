<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        $str = "this is praveen.";
        echo str_word_count($str)."<br>";
        echo str_word_count($str,0)."<br>";//0 means count the word
        print_r(str_word_count($str,1))."<br>";//make array 
        print_r(str_word_count($str,2))."<br>";//make associative 
        //array where key value will be position value of word
        echo str_word_count($str,1,'.')."<br>";
        // string shuffle
        $string_shuffle = str_shuffle($str);
        echo "$string_shuffle<br>";
        // substr
        $half = substr(str_shuffle($str),0,5);
        echo "$half<br>";
        // string reverse
        $reverse = strrev($str);
        echo "$reverse<br>";
        // similiar text
        $str1 = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio quibusdam temporibus rerum! Perferendis quidem quaerat ratione laborum error aperiam voluptates, quasi magni culpa! Rem, dolor hic. Magnam voluptas ab iste!";
        $str2 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, vel amet omnis itaque dolorem eius. Quae harum dolor corporis, commodi quaerat porro numquam nam sunt dolorum repellendus enim doloremque repellat!";
        $str3 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, vel amet omnis itaque dolorem eius. Quae harum dolor corporis, commodi quaerat porro numquam nam sunt dolorum repellendus enim doloremque repellat!";
        similar_text($str1,$str2,$result);
        echo "$result<br>";
        // string length
        echo strlen($str)."<br>"; 
        // trim() ltrim() rtrim()
        // addslashes
        $str = 'this is a <img src="image.jpg"> string';
        echo htmlentities(addcslashes($str,));
        // stripslashes 
        // strlen() for getting total numbers of charcter in the string
        // strlower()
        // strtoupper()
        // strpos()
        // substr_replace()
?>
</body>
</html>