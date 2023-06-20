<?php
session_start();
require "functions.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Autism Asperger's Test</title>
    <link href="css.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="errors">
        <?php
        if ( count( $errors ) > 1 ) {
            foreach( $errors as $message) {
                echo '<p class="error">' . $message . '</p>';
            }
        }
        ?>
    <form id="testMe" method="post" action="">
        <!-- Question 1 -->
        <table id="form">
            <tr>
                <th colspan="1">Some characteristics of personality as well as experiences in life may still apply to you</th>
                <th colspan="4">Please Select only one box</th>
            </tr>
            <tr>
                <!-- 
                        QUESTION 1
                -->
                <td><label for="q1">Q01. I am a sympathetic person.</label></td>
                <td>
                    <label for="q1">True now and when I was young.</label>
                    <input type="radio" name="q1" value="0" />
                </td>
                <td>
                    <label for="q1">True only now</label>
                    <input type="radio" name="q1" value="1" />
                </td>
                <td>
                    <label for="q1">True then I was younger than 16</label>
                    <input type="radio" name="q1" value="2" />
                </td>
                <td>
                    <label for="q1">Never True</label>
                    <input type="radio" name="q1" value="3" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 2
                -->
                <td><label for="q2">Q02. I often use words and phrases from movies and television in conversation's/</label></td>
                <td>
                    <label for="q2">True now and when I was young</label>
                    <input type="radio" name="q2" value="3" />
                </td>
                <td>
                    <label for="q2">True only now</label>
                    <input type="radio" name="q2" value="2" />
                </td>
                <td>
                    <label for="q2">True then I was younger than 16</label>
                    <input type="radio" name="q2" value="1" />
                </td>
                <td>
                    <label for="q2">Never True</label>
                    <input type="radio" name="q2" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 3
                -->
                <td><label for="q3">Q03. I am often surprised when others tell me I have been rude.</label></td>
                <td>
                    <label for="q3">True now and when I was young</label>
                    <input type="radio" name="q3" value="3" />
                </td>
                <td>
                    <label for="q3">True only now</label>
                    <input type="radio" name="q3" value="2" />
                </td>
                <td>
                    <label for="q3">True then I was younger than 16</label>
                    <input type="radio" name="q3" value="1" />
                </td>
                <td>
                    <label for="q3">Never True</label>
                    <input type="radio" name="q3" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 4
                -->
                <td><label for="q4">Q04.Sometimes I talk too loudly or too softly and I am not aware of it.</label></td>
                <td>
                    <label for="q4">True now and when I was young</label>
                    <input type="radio" name="q4" value="3" />
                </td>
                <td>
                    <label for="q4">True only now</label>
                    <input type="radio" name="q4" value="2" />
                </td>
                <td>
                    <label for="q4">True then I was younger than 16</label>
                    <input type="radio" name="q4" value="1" />
                </td>
                <td>
                    <label for="q4">Never True</label>
                    <input type="radio" name="q4" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 5
                -->
                <td><label for="q5">Q05. I often do not know how to act in social situations.</label></td>
                <td>
                    <label for="q5">True now and when I was young</label>
                    <input type="radio" name="q5" value="3" />
                </td>
                <td>
                    <label for="q5">True only now</label>
                    <input type="radio" name="q5" value="2" />
                </td>
                <td>
                    <label for="q5">True then I was younger than 16</label>
                    <input type="radio" name="q5" value="1" />
                </td>
                <td>
                    <label for="q5">Never True</label>
                    <input type="radio" name="q5" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 6
                -->
                <td><label for="q6">Q06. I can "put myself in someone else's shoes.".</label></td>
                <td>
                    <label for="q6">True now and when I was young</label>
                    <input type="radio" name="q6" value="0" />
                </td>
                <td>
                    <label for="q6">True only now</label>
                    <input type="radio" name="q6" value="1" />
                </td>
                <td>
                    <label for="q6">True then I was younger than 16</label>
                    <input type="radio" name="q6" value="2" />
                </td>
                <td>
                    <label for="q6">Never True</label>
                    <input type="radio" name="q6" value="3" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 7
                -->
                <td><label for="q7">Q07. I have a hard time figuring out what some phrases mean, like "you are the apple of my eye".</label></td>
                <td>
                    <label for="q7">True now and when I was young</label>
                    <input type="radio" name="q7" value="3" />
                </td>
                <td>
                    <label for="q7">True only now</label>
                    <input type="radio" name="q7" value="2" />
                </td>
                <td>
                    <label for="q7">True then I was younger than 16</label>
                    <input type="radio" name="q7" value="1" />
                </td>
                <td>
                    <label for="q7">Never True</label>
                    <input type="radio" name="q7" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 8
                -->
                <td><label for="q8">Q08. I only like to talk to people who share my special interest's.</label></td>
                <td>
                    <label for="q8">True now and when I was young</label>
                    <input type="radio" name="q8" value="3" />
                </td>
                <td>
                    <label for="q8">True only now</label>
                    <input type="radio" name="q8" value="2" />
                </td>
                <td>
                    <label for="q8">True then I was younger than 16</label>
                    <input type="radio" name="q8" value="1" />
                </td>
                <td>
                    <label for="q8">Never True</label>
                    <input type="radio" name="q8" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 9
                -->
                <td><label for="q9">Q09. I focus on details rather than the overall idea.</label></td>
                <td>
                    <label for="q9">True now and when I was young</label>
                    <input type="radio" name="q9" value="3" />
                </td>
                <td>
                    <label for="q9">True only now</label>
                    <input type="radio" name="q9" value="2" />
                </td>
                <td>
                    <label for="q9">True then I was younger than 16</label>
                    <input type="radio" name="q9" value="1" />
                </td>
                <td>
                    <label for="q9">Never True</label>
                    <input type="radio" name="q9" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 10
                -->
                <td><label for="q10">Q10. I always notice how food feels in my mouth. This is more important to me than how it tastes.</label></td>
                <td>
                    <label for="q10">True now and when I was young</label>
                    <input type="radio" name="q10" value="3" />
                </td>
                <td>
                    <label for="q10">True only now</label>
                    <input type="radio" name="q10" value="2" />
                </td>
                <td>
                    <label for="q10">True then I was younger than 16</label>
                    <input type="radio" name="q10" value="1" />
                </td>
                <td>
                    <label for="q10">Never True</label>
                    <input type="radio" name="q10" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 11
                -->
                <td><label for="q11">Q11. I miss my best friends or family when we are apart for a long time.</label></td>
                <td>
                    <label for="q11">True now and when I was young</label>
                    <input type="radio" name="q11" value="0" />
                </td>
                <td>
                    <label for="q11">True only now</label>
                    <input type="radio" name="q11" value="1" />
                </td>
                <td>
                    <label for="q11">True then I was younger than 16</label>
                    <input type="radio" name="q11" value="2" />
                </td>
                <td>
                    <label for="q11">Never True</label>
                    <input type="radio" name="q11" value="3" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 12
                -->
                <td><label for="q12">Q12. Sometimes I offend others by saying what I am thinking, even if I don't mean to.</label></td>
                <td>
                    <label for="q12">True now and when I was young</label>
                    <input type="radio" name="q12" value="3" />
                </td>
                <td>
                    <label for="q12">True only now</label>
                    <input type="radio" name="q12" value="2" />
                </td>
                <td>
                    <label for="q12">True then I was younger than 16</label>
                    <input type="radio" name="q12" value="1" />
                </td>
                <td>
                    <label for="q12">Never True</label>
                    <input type="radio" name="q12" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 13
                -->
                <td><label for="q13">Q13. I only like to think and talk about a few things that interest me.</label></td>
                <td>
                    <label for="q13">True now and when I was young</label>
                    <input type="radio" name="q13" value="3" />
                </td>
                <td>
                    <label for="q13">True only now</label>
                    <input type="radio" name="q13" value="2" />
                </td>
                <td>
                    <label for="q13">True then I was younger than 16</label>
                    <input type="radio" name="q13" value="1" />
                </td>
                <td>
                    <label for="q13">Never True</label>
                    <input type="radio" name="q13" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 14
                -->
                <td><label for="q14">Q14. I'd rather go out to eat in a restaurant by myself than with someone I know.</label></td>
                <td>
                    <label for="q14">True now and when I was young</label>
                    <input type="radio" name="q14" value="3" />
                </td>
                <td>
                    <label for="q14">True only now</label>
                    <input type="radio" name="q14" value="2" />
                </td>
                <td>
                    <label for="q14">True then I was younger than 16</label>
                    <input type="radio" name="q14" value="1" />
                </td>
                <td>
                    <label for="q14">Never True</label>
                    <input type="radio" name="q14" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 15
                -->
                <td><label for="q15">Q15. I cannot imagine what it would be like to be someone else.</label></td>
                <td>
                    <label for="q15">True now and when I was young</label>
                    <input type="radio" name="q15" value="3" />
                </td>
                <td>
                    <label for="q15">True only now</label>
                    <input type="radio" name="q15" value="2" />
                </td>
                <td>
                    <label for="q15">True then I was younger than 16</label>
                    <input type="radio" name="q15" value="1" />
                </td>
                <td>
                    <label for="q15">Never True</label>
                    <input type="radio" name="q15" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 16
                -->
                <td><label for="q16">Q16. I have been told that I am clumsy or uncoordinated.</label></td>
                <td>
                    <label for="q16">True now and when I was young</label>
                    <input type="radio" name="q16" value="3" />
                </td>
                <td>
                    <label for="q16">True only now</label>
                    <input type="radio" name="q16" value="2" />
                </td>
                <td>
                    <label for="q16">True then I was younger than 16</label>
                    <input type="radio" name="q16" value="1" />
                </td>
                <td>
                    <label for="q16">Never True</label>
                    <input type="radio" name="q16" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 17
                -->
                <td><label for="q17">Q17. Others consider me odd or different.</label></td>
                <td>
                    <label for="q17">True now and when I was young</label>
                    <input type="radio" name="q17" value="3" />
                </td>
                <td>
                    <label for="q17">True only now</label>
                    <input type="radio" name="q17" value="2" />
                </td>
                <td>
                    <label for="q17">True then I was younger than 16</label>
                    <input type="radio" name="q17" value="1" />
                </td>
                <td>
                    <label for="q17">Never True</label>
                    <input type="radio" name="q17" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 18
                -->
                <td><label for="q18">Q18. I understand when friends need to be comforted.</label></td>
                <td>
                    <label for="q18">True now and when I was young</label>
                    <input type="radio" name="q18" value="0" />
                </td>
                <td>
                    <label for="q18">True only now</label>
                    <input type="radio" name="q18" value="1" />
                </td>
                <td>
                    <label for="q18">True then I was younger than 16</label>
                    <input type="radio" name="q18" value="2" />
                </td>
                <td>
                    <label for="q18">Never True</label>
                    <input type="radio" name="q18" value="3" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 19
                -->
                <td><label for="q19">Q19. I am very sensitive to the way my clothes feel when I touch them. How they feel is more important than how they look.</label></td>
                <td>
                    <label for="q19">True now and when I was young</label>
                    <input type="radio" name="q19" value="3" />
                </td>
                <td>
                    <label for="q19">True only now</label>
                    <input type="radio" name="q19" value="2" />
                </td>
                <td>
                    <label for="q19">True then I was younger than 16</label>
                    <input type="radio" name="q19" value="1" />
                </td>
                <td>
                    <label for="q19">Never True</label>
                    <input type="radio" name="q19" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 20
                -->
                <td><label for="q20">Q20. I like to copy the way certain people speak and act. It helps me appear more normal.</label></td>
                <td>
                    <label for="q20">True now and when I was young</label>
                    <input type="radio" name="q20" value="3" />
                </td>
                <td>
                    <label for="q20">True only now</label>
                    <input type="radio" name="q20" value="2" />
                </td>
                <td>
                    <label for="q20">True then I was younger than 16</label>
                    <input type="radio" name="q20" value="1" />
                </td>
                <td>
                    <label for="q20">Never True</label>
                    <input type="radio" name="q20" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 21
                -->
                <td><label for="q21">Q21. It can be very intimidating for me to talk to more than one person at the same time.</label></td>
                <td>
                    <label for="q21">True now and when I was young</label>
                    <input type="radio" name="q21" value="3" />
                </td>
                <td>
                    <label for="q21">True only now</label>
                    <input type="radio" name="q21" value="2" />
                </td>
                <td>
                    <label for="q21">True then I was younger than 16</label>
                    <input type="radio" name="q21" value="1" />
                </td>
                <td>
                    <label for="q21">Never True</label>
                    <input type="radio" name="q21" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 22
                -->
                <td><label for="q22">Q22. I have to "act normal" to please other people and make them like me.</label></td>
                <td>
                    <label for="q22">True now and when I was young</label>
                    <input type="radio" name="q22" value="3" />
                </td>
                <td>
                    <label for="q22">True only now</label>
                    <input type="radio" name="q22" value="2" />
                </td>
                <td>
                    <label for="q22">True then I was younger than 16</label>
                    <input type="radio" name="q22" value="1" />
                </td>
                <td>
                    <label for="q22">Never True</label>
                    <input type="radio" name="q22" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 23
                -->
                <td><label for="q23">Q23. Meeting new people is usually easy fort me.</label></td>
                <td>
                    <label for="q23">True now and when I was young</label>
                    <input type="radio" name="q23" value="0" />
                </td>
                <td>
                    <label for="q23">True only now</label>
                    <input type="radio" name="q23" value="1" />
                </td>
                <td>
                    <label for="q23">True then I was younger than 16</label>
                    <input type="radio" name="q23" value="2" />
                </td>
                <td>
                    <label for="q23">Never True</label>
                    <input type="radio" name="q23" value="3" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 24
                -->
                <td><label for="q24">Q24. I get highly confused when someone interrupted me when I am talking about something I am very interested in.</label></td>
                <td>
                    <label for="q24">True now and when I was young</label>
                    <input type="radio" name="q24" value="3" />
                </td>
                <td>
                    <label for="q24">True only now</label>
                    <input type="radio" name="q24" value="2" />
                </td>
                <td>
                    <label for="q24">True then I was younger than 16</label>
                    <input type="radio" name="q24" value="1" />
                </td>
                <td>
                    <label for="q24">Never True</label>
                    <input type="radio" name="q24" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 25
                -->
                <td><label for="q25">Q25. It is difficult for me to understand how other people are feeling when we are talking.</label></td>
                <td>
                    <label for="q25">True now and when I was young</label>
                    <input type="radio" name="q25" value="3" />
                </td>
                <td>
                    <label for="q25">True only now</label>
                    <input type="radio" name="q25" value="2" />
                </td>
                <td>
                    <label for="q25">True then I was younger than 16</label>
                    <input type="radio" name="q25" value="1" />
                </td>
                <td>
                    <label for="q25">Never True</label>
                    <input type="radio" name="q25" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 26
                -->
                <td><label for="q26">Q26. I like having conversations with several people for instance around a dinner table, at school or at work.</label></td>
                <td>
                    <label for="q26">True now and when I was young</label>
                    <input type="radio" name="q26" value="0" />
                </td>
                <td>
                    <label for="q26">True only now</label>
                    <input type="radio" name="q26" value="1" />
                </td>
                <td>
                    <label for="q26">True then I was younger than 16</label>
                    <input type="radio" name="q26" value="2" />
                </td>
                <td>
                    <label for="q26">Never True</label>
                    <input type="radio" name="q26" value="3" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 27
                -->
                <td><label for="q27">Q27. I take things too literally, so I often miss what people are trying to say.</label></td>
                <td>
                    <label for="q27">True now and when I was young</label>
                    <input type="radio" name="q27" value="3" />
                </td>
                <td>
                    <label for="q27">True only now</label>
                    <input type="radio" name="q27" value="2" />
                </td>
                <td>
                    <label for="q27">True then I was younger than 16</label>
                    <input type="radio" name="q27" value="1" />
                </td>
                <td>
                    <label for="q27">Never True</label>
                    <input type="radio" name="q27" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 28
                -->
                <td><label for="q28">Q28. It is very difficult for me to understand when someone is embarrassed or jealous.</label></td>
                <td>
                    <label for="q28">True now and when I was young</label>
                    <input type="radio" name="q28" value="3" />
                </td>
                <td>
                    <label for="q28">True only now</label>
                    <input type="radio" name="q28" value="2" />
                </td>
                <td>
                    <label for="q28">True then I was younger than 16</label>
                    <input type="radio" name="q28" value="1" />
                </td>
                <td>
                    <label for="q28">Never True</label>
                    <input type="radio" name="q28" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 29
                -->
                <td><label for="q29">Q29. Some ordinary textures that do not bother others feel very offensive when they touch my skin.</label></td>
                <td>
                    <label for="q29">True now and when I was young</label>
                    <input type="radio" name="q29" value="3" />
                </td>
                <td>
                    <label for="q29">True only now</label>
                    <input type="radio" name="q29" value="2" />
                </td>
                <td>
                    <label for="q29">True then I was younger than 16</label>
                    <input type="radio" name="q29" value="1" />
                </td>
                <td>
                    <label for="q29">Never True</label>
                    <input type="radio" name="q29" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 30
                -->
                <td><label for="q30">Q30. I get extremely upset when the way I like to do things is suddenly changed.</label></td>
                <td>
                    <label for="q30">True now and when I was young</label>
                    <input type="radio" name="q30" value="3" />
                </td>
                <td>
                    <label for="q30">True only now</label>
                    <input type="radio" name="q30" value="2" />
                </td>
                <td>
                    <label for="q30">True then I was younger than 16</label>
                    <input type="radio" name="q30" value="1" />
                </td>
                <td>
                    <label for="q30">Never True</label>
                    <input type="radio" name="q30" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 31
                -->
                <td><label for="q31">Q31. I have never wanted or needed to have what other people call an "intimate relationship".</label></td>
                <td>
                    <label for="q31">True now and when I was young</label>
                    <input type="radio" name="q31" value="3" />
                </td>
                <td>
                    <label for="q31">True only now</label>
                    <input type="radio" name="q31" value="2" />
                </td>
                <td>
                    <label for="q31">True then I was younger than 16</label>
                    <input type="radio" name="q31" value="1" />
                </td>
                <td>
                    <label for="q31">Never True</label>
                    <input type="radio" name="q31" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 32
                -->
                <td><label for="q32">Q32. It is difficult for me to start and stop a conversation. I need to keep going until I am finished.</label></td>
                <td>
                    <label for="q32">True now and when I was young</label>
                    <input type="radio" name="q32" value="3" />
                </td>
                <td>
                    <label for="q32">True only now</label>
                    <input type="radio" name="q32" value="2" />
                </td>
                <td>
                    <label for="q32">True then I was younger than 16</label>
                    <input type="radio" name="q32" value="1" />
                </td>
                <td>
                    <label for="q32">Never True</label>
                    <input type="radio" name="q32" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 33
                -->
                <td><label for="q33">Q33. I speak with a normal rhythm.</label></td>
                <td>
                    <label for="q33">True now and when I was young</label>
                    <input type="radio" name="q33" value="0" />
                </td>
                <td>
                    <label for="q33">True only now</label>
                    <input type="radio" name="q33" value="1" />
                </td>
                <td>
                    <label for="q33">True then I was younger than 16</label>
                    <input type="radio" name="q33" value="2" />
                </td>
                <td>
                    <label for="q33">Never True</label>
                    <input type="radio" name="q33" value="3" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 34
                -->
                <td><label for="q34">Q34. The same sound, color or texture can suddnly change from very sensitive to very dull.</label></td>
                <td>
                    <label for="q34">True now and when I was young</label>
                    <input type="radio" name="q34" value="3" />
                </td>
                <td>
                    <label for="q34">True only now</label>
                    <input type="radio" name="q34" value="2" />
                </td>
                <td>
                    <label for="q34">True then I was younger than 16</label>
                    <input type="radio" name="q34" value="1" />
                </td>
                <td>
                    <label for="q34">Never True</label>
                    <input type="radio" name="q34" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 35
                -->
                <td><label for="q35">Q35. The phrase "I've got you under my skin" makes me very uncomfortable.</label></td>
                <td>
                    <label for="q35">True now and when I was young</label>
                    <input type="radio" name="q35" value="3" />
                </td>
                <td>
                    <label for="q35">True only now</label>
                    <input type="radio" name="q35" value="2" />
                </td>
                <td>
                    <label for="q35">True then I was younger than 16</label>
                    <input type="radio" name="q35" value="1" />
                </td>
                <td>
                    <label for="q35">Never True</label>
                    <input type="radio" name="q35" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 36
                -->
                <td><label for="q36">Q36. Sometimes the sound of a word or a high-pitched noise can be painfulto my ears.</label></td>
                <td>
                    <label for="q36">True now and when I was young</label>
                    <input type="radio" name="q36" value="3" />
                </td>
                <td>
                    <label for="q36">True only now</label>
                    <input type="radio" name="q36" value="2" />
                </td>
                <td>
                    <label for="q36">True then I was younger than 16</label>
                    <input type="radio" name="q36" value="1" />
                </td>
                <td>
                    <label for="q36">Never True</label>
                    <input type="radio" name="q36" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 37
                -->
                <td><label for="q37">Q37. I am an understanding type of person.</label></td>
                <td>
                    <label for="q37">True now and when I was young</label>
                    <input type="radio" name="q37" value="0" />
                </td>
                <td>
                    <label for="q37">True only now</label>
                    <input type="radio" name="q37" value="1" />
                </td>
                <td>
                    <label for="q37">True then I was younger than 16</label>
                    <input type="radio" name="q37" value="2" />
                </td>
                <td>
                    <label for="q37">Never True</label>
                    <input type="radio" name="q37" value="3" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 38
                -->
                <td><label for="q38">Q38. I do not connect with characters in movies and cannot feel what they feel.</label></td>
                <td>
                    <label for="q38">True now and when I was young</label>
                    <input type="radio" name="q38" value="3" />
                </td>
                <td>
                    <label for="q38">True only now</label>
                    <input type="radio" name="q38" value="2" />
                </td>
                <td>
                    <label for="q38">True then I was younger than 16</label>
                    <input type="radio" name="q38" value="1" />
                </td>
                <td>
                    <label for="q38">Never True</label>
                    <input type="radio" name="q38" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 39
                -->
                <td><label for="q39">Q39. I cannot tell when someone is flirting wit me.</label></td>
                <td>
                    <label for="q39">True now and when I was young</label>
                    <input type="radio" name="q39" value="3" />
                </td>
                <td>
                    <label for="q39">True only now</label>
                    <input type="radio" name="q39" value="2" />
                </td>
                <td>
                    <label for="q39">True then I was younger than 16</label>
                    <input type="radio" name="q39" value="1" />
                </td>
                <td>
                    <label for="q39">Never True</label>
                    <input type="radio" name="q39" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 40
                -->
                <td><label for="q40">Q40. I can see in my mind in exact detail things tat I am interested in.</label></td>
                <td>
                    <label for="q40">True now and when I was young</label>
                    <input type="radio" name="q40" value="3" />
                </td>
                <td>
                    <label for="q40">True only now</label>
                    <input type="radio" name="q40" value="2" />
                </td>
                <td>
                    <label for="q40">True then I was younger than 16</label>
                    <input type="radio" name="q40" value="1" />
                </td>
                <td>
                    <label for="q40">Never True</label>
                    <input type="radio" name="q40" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 41
                -->
                <td><label for="q41">Q41. I keep lists of things that interest me, even when they have no practical use (for example sports statistics, train schedules, calender dates, historial facts and dates).</label></td>
                <td>
                    <label for="q41">True now and when I was young</label>
                    <input type="radio" name="q41" value="3" />
                </td>
                <td>
                    <label for="q41">True only now</label>
                    <input type="radio" name="q41" value="2" />
                </td>
                <td>
                    <label for="q41">True then I was younger than 16</label>
                    <input type="radio" name="q41" value="1" />
                </td>
                <td>
                    <label for="q41">Never True</label>
                    <input type="radio" name="q41" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 42
                -->
                <td><label for="q42">Q42. When I feel overwhelmed by my senses, I have to isolate myself to shut them down.</label></td>
                <td>
                    <label for="q42">True now and when I was young</label>
                    <input type="radio" name="q42" value="3" />
                </td>
                <td>
                    <label for="q42">True only now</label>
                    <input type="radio" name="q42" value="2" />
                </td>
                <td>
                    <label for="q42">True then I was younger than 16</label>
                    <input type="radio" name="q42" value="1" />
                </td>
                <td>
                    <label for="q42">Never True</label>
                    <input type="radio" name="q42" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 43
                -->
                <td><label for="q43">Q43. I like to talk things over with my friends.</label></td>
                <td>
                    <label for="q43">True now and when I was young</label>
                    <input type="radio" name="q43" value="0" />
                </td>
                <td>
                    <label for="q43">True only now</label>
                    <input type="radio" name="q43" value="1" />
                </td>
                <td>
                    <label for="q43">True then I was younger than 16</label>
                    <input type="radio" name="q43" value="2" />
                </td>
                <td>
                    <label for="q43">Never True</label>
                    <input type="radio" name="q43" value="3" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 44
                -->
                <td><label for="q44">Q44. I cannot tell if someone is interested or bored with what I am saying.</label></td>
                <td>
                    <label for="q44">True now and when I was young</label>
                    <input type="radio" name="q44" value="3" />
                </td>
                <td>
                    <label for="q44">True only now</label>
                    <input type="radio" name="q44" value="2" />
                </td>
                <td>
                    <label for="q44">True then I was younger than 16</label>
                    <input type="radio" name="q44" value="1" />
                </td>
                <td>
                    <label for="q44">Never True</label>
                    <input type="radio" name="q44" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 45
                -->
                <td><label for="q45">Q45. It can be very hard to read someone's face, hand and body movements when they are talking.</label></td>
                <td>
                    <label for="q45">True now and when I was young</label>
                    <input type="radio" name="q45" value="3" />
                </td>
                <td>
                    <label for="q45">True only now</label>
                    <input type="radio" name="q45" value="2" />
                </td>
                <td>
                    <label for="q45">True then I was younger than 16</label>
                    <input type="radio" name="q45" value="1" />
                </td>
                <td>
                    <label for="q45">Never True</label>
                    <input type="radio" name="q45" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 46
                -->
                <td><label for="q46">Q46. The same thing (like clothes or temperature's) can feel very different to me at different times.</label></td>
                <td>
                    <label for="q46">True now and when I was young</label>
                    <input type="radio" name="q46" value="3" />
                </td>
                <td>
                    <label for="q46">True only now</label>
                    <input type="radio" name="q46" value="2" />
                </td>
                <td>
                    <label for="q46">True then I was younger than 16</label>
                    <input type="radio" name="q46" value="1" />
                </td>
                <td>
                    <label for="q46">Never True</label>
                    <input type="radio" name="q46" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 47
                -->
                <td><label for="q47">Q47. I feel very comfortable with dating or being in social situations with others.</label></td>
                <td>
                    <label for="q47">True now and when I was young</label>
                    <input type="radio" name="q47" value="0" />
                </td>
                <td>
                    <label for="q47">True only now</label>
                    <input type="radio" name="q47" value="1" />
                </td>
                <td>
                    <label for="q47">True then I was younger than 16</label>
                    <input type="radio" name="q47" value="2" />
                </td>
                <td>
                    <label for="q47">Never True</label>
                    <input type="radio" name="q47" value="3" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 48
                -->
                <td><label for="q48">Q48. I try to be as helpful as I can when other people tell me their personal problems.</label></td>
                <td>
                    <label for="q48">True now and when I was young</label>
                    <input type="radio" name="q48" value="0" />
                </td>
                <td>
                    <label for="q48">True only now</label>
                    <input type="radio" name="q48" value="1" />
                </td>
                <td>
                    <label for="q48">True then I was younger than 16</label>
                    <input type="radio" name="q48" value="2" />
                </td>
                <td>
                    <label for="q48">Never True</label>
                    <input type="radio" name="q48" value="3" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 49
                -->
                <td><label for="q49">Q49. I have been told that I have an unusual voice (for example, flat, monotone, childish, or high-pitched).</label></td>
                <td>
                    <label for="q49">True now and when I was young</label>
                    <input type="radio" name="q49" value="3" />
                </td>
                <td>
                    <label for="q49">True only now</label>
                    <input type="radio" name="q49" value="2" />
                </td>
                <td>
                    <label for="q49">True then I was younger than 16</label>
                    <input type="radio" name="q49" value="1" />
                </td>
                <td>
                    <label for="q49">Never True</label>
                    <input type="radio" name="q49" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 50
                -->
                <td><label for="q50">Q50. Sometimes a thought or a subject gets stuck in my mind and I have to talk about it even if no one is interested.</label></td>
                <td>
                    <label for="q50">True now and when I was young</label>
                    <input type="radio" name="q50" value="3" />
                </td>
                <td>
                    <label for="q50">True only now</label>
                    <input type="radio" name="q50" value="2" />
                </td>
                <td>
                    <label for="q50">True then I was younger than 16</label>
                    <input type="radio" name="q50" value="1" />
                </td>
                <td>
                    <label for="q50">Never True</label>
                    <input type="radio" name="q50" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 51
                -->
                <td><label for="q51">Q51. I do certain things with my hands over and over again (like flapping, twirling sticks or strings, waving things by my eyes).</label></td>
                <td>
                    <label for="q51">True now and when I was young</label>
                    <input type="radio" name="q51" value="3" />
                </td>
                <td>
                    <label for="q51">True only now</label>
                    <input type="radio" name="q51" value="2" />
                </td>
                <td>
                    <label for="q51">True then I was younger than 16</label>
                    <input type="radio" name="q51" value="1" />
                </td>
                <td>
                    <label for="q51">Never True</label>
                    <input type="radio" name="q51" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 52
                -->
                <td><label for="q52">Q52. I have never been interested in what most of the people I know consider interesting.</label></td>
                <td>
                    <label for="q52">True now and when I was young</label>
                    <input type="radio" name="q52" value="3" />
                </td>
                <td>
                    <label for="q52">True only now</label>
                    <input type="radio" name="q52" value="2" />
                </td>
                <td>
                    <label for="q52">True then I was younger than 16</label>
                    <input type="radio" name="q52" value="1" />
                </td>
                <td>
                    <label for="q52">Never True</label>
                    <input type="radio" name="q52" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 53
                -->
                <td><label for="q53">Q53. I am considered a compassionate type of person.</label></td>
                <td>
                    <label for="q53">True now and when I was young</label>
                    <input type="radio" name="q53" value="0" />
                </td>
                <td>
                    <label for="q53">True only now</label>
                    <input type="radio" name="q53" value="1" />
                </td>
                <td>
                    <label for="q53">True then I was younger than 16</label>
                    <input type="radio" name="q53" value="2" />
                </td>
                <td>
                    <label for="q53">Never True</label>
                    <input type="radio" name="q53" value="3" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 54
                -->
                <td><label for="q54">Q54. I get along with other people by following a set of specific rules that help me look normal.</label></td>
                <td>
                    <label for="q54">True now and when I was young</label>
                    <input type="radio" name="q54" value="3" />
                </td>
                <td>
                    <label for="q54">True only now</label>
                    <input type="radio" name="q54" value="2" />
                </td>
                <td>
                    <label for="q54">True then I was younger than 16</label>
                    <input type="radio" name="q54" value="1" />
                </td>
                <td>
                    <label for="q54">Never True</label>
                    <input type="radio" name="q54" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 55
                -->
                <td><label for="q55">Q55. It is very difficult for me to work and function in groups.</label></td>
                <td>
                    <label for="q55">True now and when I was young</label>
                    <input type="radio" name="q55" value="3" />
                </td>
                <td>
                    <label for="q55">True only now</label>
                    <input type="radio" name="q55" value="2" />
                </td>
                <td>
                    <label for="q55">True then I was younger than 16</label>
                    <input type="radio" name="q55" value="1" />
                </td>
                <td>
                    <label for="q55">Never True</label>
                    <input type="radio" name="q55" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 56
                -->
                <td><label for="q56">Q56.When I am talking to someone, it is hard to change the subject. If the other person does so, I can get very upset and confused.</label></td>
                <td>
                    <label for="q56">True now and when I was young</label>
                    <input type="radio" name="q56" value="3" />
                </td>
                <td>
                    <label for="q56">True only now</label>
                    <input type="radio" name="q56" value="2" />
                </td>
                <td>
                    <label for="q56">True then I was younger than 16</label>
                    <input type="radio" name="q56" value="1" />
                </td>
                <td>
                    <label for="q56">Never True</label>
                    <input type="radio" name="q56" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 57
                -->
                <td><label for="q57">Q57. Sometimes I have to covery my ears to black out painful noises (like vacuum cleaners or people talking too much or too loudly).</label></td>
                <td>
                    <label for="q57">True now and when I was young</label>
                    <input type="radio" name="q57" value="3" />
                </td>
                <td>
                    <label for="q57">True only now</label>
                    <input type="radio" name="q57" value="2" />
                </td>
                <td>
                    <label for="q57">True then I was younger than 16</label>
                    <input type="radio" name="q57" value="1" />
                </td>
                <td>
                    <label for="q57">Never True</label>
                    <input type="radio" name="q57" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 58
                -->
                <td><label for="q58">Q58. I can chat and make small talk with people.</label></td>
                <td>
                    <label for="q58">True now and when I was young</label>
                    <input type="radio" name="q58" value="0" />
                </td>
                <td>
                    <label for="q58">True only now</label>
                    <input type="radio" name="q58" value="1" />
                </td>
                <td>
                    <label for="q58">True then I was younger than 16</label>
                    <input type="radio" name="q58" value="2" />
                </td>
                <td>
                    <label for="q58">Never True</label>
                    <input type="radio" name="q58" value="3" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 59
                -->
                <td><label for="q59">Q59. Sometimes things that should feel painful are not (for instance when I hurt myself or burn my hand on a stove).</label></td>
                <td>
                    <label for="q59">True now and when I was young</label>
                    <input type="radio" name="q59" value="3" />
                </td>
                <td>
                    <label for="q59">True only now</label>
                    <input type="radio" name="q59" value="2" />
                </td>
                <td>
                    <label for="q59">True then I was younger than 16</label>
                    <input type="radio" name="q59" value="1" />
                </td>
                <td>
                    <label for="q59">Never True</label>
                    <input type="radio" name="q59" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 60
                -->
                <td><label for="q60">Q60. When talking to someone. I have a hard time telling when it is my turn to talk or to listen.</label></td>
                <td>
                    <label for="q60">True now and when I was young</label>
                    <input type="radio" name="q60" value="3" />
                </td>
                <td>
                    <label for="q60">True only now</label>
                    <input type="radio" name="q60" value="2" />
                </td>
                <td>
                    <label for="q60">True then I was younger than 16</label>
                    <input type="radio" name="q60" value="1" />
                </td>
                <td>
                    <label for="q60">Never True</label>
                    <input type="radio" name="q60" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 61
                -->
                <td><label for="q61">Q61. I am considered a loner by those who know me best.</label></td>
                <td>
                    <label for="q61">True now and when I was young</label>
                    <input type="radio" name="q61" value="3" />
                </td>
                <td>
                    <label for="q61">True only now</label>
                    <input type="radio" name="q61" value="2" />
                </td>
                <td>
                    <label for="q61">True then I was younger than 16</label>
                    <input type="radio" name="q61" value="1" />
                </td>
                <td>
                    <label for="q61">Never True</label>
                    <input type="radio" name="q61" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 62
                -->
                <td><label for="q62">Q62. I usually speak in a normal tone.</label></td>
                <td>
                    <label for="q62">True now and when I was young</label>
                    <input type="radio" name="q62" value="0" />
                </td>
                <td>
                    <label for="q62">True only now</label>
                    <input type="radio" name="q62" value="1" />
                </td>
                <td>
                    <label for="q62">True then I was younger than 16</label>
                    <input type="radio" name="q62" value="2" />
                </td>
                <td>
                    <label for="q62">Never True</label>
                    <input type="radio" name="q62" value="3" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 63
                -->
                <td><label for="q63">Q63. I like things to be exactly the same dat after day and even small changes in my routine upsets me.</label></td>
                <td>
                    <label for="q63">True now and when I was young</label>
                    <input type="radio" name="q63" value="3" />
                </td>
                <td>
                    <label for="q63">True only now</label>
                    <input type="radio" name="q63" value="2" />
                </td>
                <td>
                    <label for="q63">True then I was younger than 16</label>
                    <input type="radio" name="q63" value="1" />
                </td>
                <td>
                    <label for="q63">Never True</label>
                    <input type="radio" name="q63" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 64
                -->
                <td><label for="q64">Q64 How to make friends and socialize is a mystery to me.</label></td>
                <td>
                    <label for="q64">True now and when I was young</label>
                    <input type="radio" name="q64" value="3" />
                </td>
                <td>
                    <label for="q64">True only now</label>
                    <input type="radio" name="q64" value="2" />
                </td>
                <td>
                    <label for="q64">True then I was younger than 16</label>
                    <input type="radio" name="q64" value="1" />
                </td>
                <td>
                    <label for="q64">Never True</label>
                    <input type="radio" name="q64" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 65
                -->
                <td><label for="q65">Q65. It calms me to spin around or to rock in a chair when I am feeling stressed.</label></td>
                <td>
                    <label for="q65">True now and when I was young</label>
                    <input type="radio" name="q65" value="3" />
                </td>
                <td>
                    <label for="q65">True only now</label>
                    <input type="radio" name="q65" value="2" />
                </td>
                <td>
                    <label for="q65">True then I was younger than 16</label>
                    <input type="radio" name="q65" value="1" />
                </td>
                <td>
                    <label for="q65">Never True</label>
                    <input type="radio" name="q65" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 66
                -->
                <td><label for="q66">Q66. The phrase, "he wears his heart on his sleeve," does not make sense to me.</label></td>
                <td>
                    <label for="q66">True now and when I was young</label>
                    <input type="radio" name="q66" value="3" />
                </td>
                <td>
                    <label for="q66">True only now</label>
                    <input type="radio" name="q66" value="2" />
                </td>
                <td>
                    <label for="q66">True then I was younger than 16</label>
                    <input type="radio" name="q66" value="1" />
                </td>
                <td>
                    <label for="q66">Never True</label>
                    <input type="radio" name="q66" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 67
                -->
                <td><label for="q67">Q67. If I am in a place where there are many smells, textures to feel, noises or bright lights, I feel anxious or frightened.</label></td>
                <td>
                    <label for="q67">True now and when I was young</label>
                    <input type="radio" name="q67" value="3" />
                </td>
                <td>
                    <label for="q67">True only now</label>
                    <input type="radio" name="q67" value="2" />
                </td>
                <td>
                    <label for="q67">True then I was younger than 16</label>
                    <input type="radio" name="q67" value="1" />
                </td>
                <td>
                    <label for="q67">Never True</label>
                    <input type="radio" name="q67" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 68
                -->
                <td><label for="q68">Q68. I can tell when someone says one thing bur mean something else.</label></td>
                <td>
                    <label for="q68">True now and when I was young</label>
                    <input type="radio" name="q68" value="0" />
                </td>
                <td>
                    <label for="q68">True only now</label>
                    <input type="radio" name="q68" value="1" />
                </td>
                <td>
                    <label for="q68">True then I was younger than 16</label>
                    <input type="radio" name="q68" value="2" />
                </td>
                <td>
                    <label for="q68">Never True</label>
                    <input type="radio" name="q68" value="3" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 69
                -->
                <td><label for="q69">Q69. I like to be by myself as much as I can.</label></td>
                <td>
                    <label for="q69">True now and when I was young</label>
                    <input type="radio" name="q69" value="3" />
                </td>
                <td>
                    <label for="q69">True only now</label>
                    <input type="radio" name="q69" value="2" />
                </td>
                <td>
                    <label for="q69">True then I was younger than 16</label>
                    <input type="radio" name="q69" value="1" />
                </td>
                <td>
                    <label for="q69">Never True</label>
                    <input type="radio" name="q69" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 70
                -->
                <td><label for="q70">Q70. I keep thoughts stacked in my memory like they are fulling cards, and I pick out the ones I need by looking through the stack and finding the right one (or another unique way).</label></td>
                <td>
                    <label for="q70">True now and when I was young</label>
                    <input type="radio" name="q70" value="3" />
                </td>
                <td>
                    <label for="q70">True only now</label>
                    <input type="radio" name="q70" value="2" />
                </td>
                <td>
                    <label for="q70">True then I was younger than 16</label>
                    <input type="radio" name="q70" value="1" />
                </td>
                <td>
                    <label for="q70">Never True</label>
                    <input type="radio" name="q70" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 71
                -->
                <td><label for="q71">Q71. The same sound sometimes seems very loud or very soft, even though I know it has not changed.</label></td>
                <td>
                    <label for="q71">True now and when I was young</label>
                    <input type="radio" name="q71" value="3" />
                </td>
                <td>
                    <label for="q71">True only now</label>
                    <input type="radio" name="q71" value="2" />
                </td>
                <td>
                    <label for="q71">True then I was younger than 16</label>
                    <input type="radio" name="q71" value="1" />
                </td>
                <td>
                    <label for="q71">Never True</label>
                    <input type="radio" name="q71" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 72
                -->
                <td><label for="q72">Q72. I enjoy spending time eating and talking with my family and friends.</label></td>
                <td>
                    <label for="q72">True now and when I was young</label>
                    <input type="radio" name="q72" value="0" />
                </td>
                <td>
                    <label for="q72">True only now</label>
                    <input type="radio" name="q72" value="1" />
                </td>
                <td>
                    <label for="q72">True then I was younger than 16</label>
                    <input type="radio" name="q72" value="2" />
                </td>
                <td>
                    <label for="q72">Never True</label>
                    <input type="radio" name="q72" value="3" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 73
                -->
                <td><label for="q73">Q73. I can't tolerate things I dislike (like smells textures, sounds or colors).</label></td>
                <td>
                    <label for="q73">True now and when I was young</label>
                    <input type="radio" name="q73" value="3" />
                </td>
                <td>
                    <label for="q73">True only now</label>
                    <input type="radio" name="q73" value="2" />
                </td>
                <td>
                    <label for="q73">True then I was younger than 16</label>
                    <input type="radio" name="q73" value="1" />
                </td>
                <td>
                    <label for="q73">Never True</label>
                    <input type="radio" name="q73" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 74
                -->
                <td><label for="q74">Q74. I don't like to be hugged or held.</label></td>
                <td>
                    <label for="q74">True now and when I was young</label>
                    <input type="radio" name="q74" value="3" />
                </td>
                <td>
                    <label for="q74">True only now</label>
                    <input type="radio" name="q74" value="2" />
                </td>
                <td>
                    <label for="q74">True then I was younger than 16</label>
                    <input type="radio" name="q74" value="1" />
                </td>
                <td>
                    <label for="q74">Never True</label>
                    <input type="radio" name="q74" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 75
                -->
                <td><label for="q75">Q75. When I do somewhere, I have to follow a familiar route or I can get very confused and upset.</label></td>
                <td>
                    <label for="q75">True now and when I was young</label>
                    <input type="radio" name="q75" value="3" />
                </td>
                <td>
                    <label for="q75">True only now</label>
                    <input type="radio" name="q75" value="2" />
                </td>
                <td>
                    <label for="q75">True then I was younger than 16</label>
                    <input type="radio" name="q75" value="1" />
                </td>
                <td>
                    <label for="q75">Never True</label>
                    <input type="radio" name="q75" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 76
                -->
                <td><label for="q76">Q76. It is difficult to figure out what other people expect of me.</label></td>
                <td>
                    <label for="q76">True now and when I was young</label>
                    <input type="radio" name="q76" value="3" />
                </td>
                <td>
                    <label for="q76">True only now</label>
                    <input type="radio" name="q76" value="2" />
                </td>
                <td>
                    <label for="q76">True then I was younger than 16</label>
                    <input type="radio" name="q76" value="1" />
                </td>
                <td>
                    <label for="q76">Never True</label>
                    <input type="radio" name="q76" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 77
                -->
                <td><label for="q77">Q77. I like to have close friends.</label></td>
                <td>
                    <label for="q77">True now and when I was young</label>
                    <input type="radio" name="q77" value="0" />
                </td>
                <td>
                    <label for="q77">True only now</label>
                    <input type="radio" name="q77" value="1" />
                </td>
                <td>
                    <label for="q77">True then I was younger than 16</label>
                    <input type="radio" name="q77" value="2" />
                </td>
                <td>
                    <label for="q77">Never True</label>
                    <input type="radio" name="q77" value="3" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 78
                -->
                <td><label for="q78">Q78. People tell me I give too much detail.</label></td>
                <td>
                    <label for="q78">True now and when I was young</label>
                    <input type="radio" name="q78" value="3" />
                </td>
                <td>
                    <label for="q78">True only now</label>
                    <input type="radio" name="q78" value="2" />
                </td>
                <td>
                    <label for="q78">True then I was younger than 16</label>
                    <input type="radio" name="q78" value="1" />
                </td>
                <td>
                    <label for="q78">Never True</label>
                    <input type="radio" name="q78" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 79
                -->
                <td><label for="q79">Q79. I am often told when I ask embarrassing questions.</label></td>
                <td>
                    <label for="q79">True now and when I was young</label>
                    <input type="radio" name="q79" value="3" />
                </td>
                <td>
                    <label for="q79">True only now</label>
                    <input type="radio" name="q79" value="2" />
                </td>
                <td>
                    <label for="q79">True then I was younger than 16</label>
                    <input type="radio" name="q79" value="1" />
                </td>
                <td>
                    <label for="q79">Never True</label>
                    <input type="radio" name="q79" value="0" />
                </td>
            </tr>
            <tr>
                <!-- 
                        QUESTION 80
                -->
                <td><label for="q80">Q80. I tend to point out other people's mistakes.</label></td>
                <td>
                    <label for="q80">True now and when I was young</label>
                    <input type="radio" name="q80" value="3" />
                </td>
                <td>
                    <label for="q80">True only now</label>
                    <input type="radio" name="q80" value="2" />
                </td>
                <td>
                    <label for="q80">True then I was younger than 16</label>
                    <input type="radio" name="q80" value="1" />
                </td>
                <td>
                    <label for="q80">Never True</label>
                    <input type="radio" name="q80" value="0" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="4">
                    <input type="submit" value="Submit" name="testMe" />
                </td>
            </tr>
        </table>
    </form>
    <script src="js.js" type="text/javascript"></script>
</body>

</html>