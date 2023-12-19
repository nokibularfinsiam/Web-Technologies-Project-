<?php
    require_once('../model/faqModel.php');
    include_once('../controller/sessionCheck.php');


    if(isset($_POST['question'] , $_POST['answer']))
    {
        
        $question=$_POST['question'];
        $answer = $_POST['answer'];
        if($question == "" || $answer == "")
        {
            echo "null value inserted";
    
        }
        else{
            addFaq($question,$answer);
            header('location: admin_faq.php');
            
        }
    }

    if(isset($_POST['faq_id']))
    {
        
        $faqId=$_POST['faq_id'];
        if($faqId == "")
        {
            echo "null value inserted";
    
        }
        else{
            deleteFaq($faqId);
            header('location: admin_faq.php');
            
        }
    }

    $faqs=getFaq();
   
?>

<html>
<head>
    <title>FAQ</title>
    <link rel="stylesheet" type="text/css" href="../css/admin_faq.css">
    <script src="../js/faq.js"></script>
</head>
<body>
<form action="admin_faq.php" method="post" id="fullform">

    <h2>Frequently Asked Questions</h2>

    <?php for($i=0;$i<count($faqs);$i++)
            {?>
                <?=$faqs[$i]['faq_id']?>
                <strong><?=$faqs[$i]['faq_question']?></strong><br><br>
                <strong><?=$faqs[$i]['faq_answer']?></strong><br><br>
    <?php   }?>
    <h3>add faq</h3>
    Input FAQ: <input type="text" id="question" name="question" value="" />
    Write Answer: <input type="text" id="answer" name="answer" value="" /> 
    <input type="button" name="submit" value="submit" onclick="ajax()"/> <span id="h1"></span>
    <h3>delete faq</h3>
    write corresponding question-id to delete: <input type="text" id="faq_id" name="faq_id" value="" />
    
    <input type="button" name="submit" value="Delete" onclick="ajax1()"/> <span id="h2"></span>
    <br><a href="admin_dashboard.php">
    <br><button type="button">Back</button><br>
    

</form>

</body>
</html>

<?php
    


?>

