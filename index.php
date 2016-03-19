<title>Welcome to the chat</title>
<style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:100);
    body{
        background: #34495e;
        text-align: center;
        font-size:20px;
        margin-top:100px;
        color:white;
        font-family:'Raleway', sans-serif;;
    }
    textarea{
        font-size:17px;
    }
    .submit{
        width:100px;
        height:40px;
        background: #2dffdf;
        font-size: 17px;
    }
</style>

<?php
$src_str_point = 0;
if(isset($_POST["text_input"]) && isset($_POST["search_for"]) && isset($_POST["replace_with"])){
    $userInput = $_POST["text_input"];
    $src_fo = $_POST["search_for"];
    $rp_with =$_POST["replace_with"];
    if(!empty($userInput) && !empty($src_fo) && !empty($rp_with)){
        while($strPos= strpos($userInput,$src_fo,$src_str_point)){
            $src_str_point=$strPos+ strlen($src_fo);
        }
        echo $subStrRplc = substr_replace($userInput,$src_fo,$strPos,strlen($src_fo));
    }
}
?>


<form action="index.php" method="POST">
<!--the text area for the main input-->
    <textarea name="text_input" id="txtarea" cols="30" rows="10" placeholder="<?php if(!empty($_POST["text_put"])) {
    echo $userInput;

    }else{
        echo "please supply a line to replace";
    }?>"></textarea><br><br>
    Search for: <input type="text" name="search_for" value=""><br><br>
    Replace for: <input type="text" name="replace_with" value=""><br><br>
    <input class="submit" type="submit" value="Submit">
</form>