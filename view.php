<?php
require_once 'vendor/autoload.php';
//require_once 'App/classes/Count.php';
use App\classes\Count;

if (isset($_POST['btn'])){
    $result= Count::wordCharacterCount($_POST);
}




//    $result= [];
//    $result['word_length']= '';
//    $result['string_length']= '';
//    if(isset($_POST['btn'])){
//        require_once 'Count.php';
//        $count= new App\classes\Count();
//        $result= $count->wordCharacterCount($_POST);
//    }
?>

<form action="" method="post">
    <table>
        <tr>
            <th>Enter your string</th>
            <td><input type="text" name="given_string" size="50"></td>
        </tr>
        <tr>
            <th>Total number of word</th>
            <td><input type="text" name="total_word" value="<?php echo $result['word_length']; ?>"></td>
        </tr>
        <tr>
            <th>Total number of character</th>
            <td><input type="text" name="total_character" value="<?php echo $result['string_length']; ?>"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="SubmiT"></td>
        </tr>
    </table>
</form>
