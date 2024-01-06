<!DOCTYPE html>
<html>
    <head>
        <title>Urban Harvest-Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="icon" href="../assets/img/logo.png"/>
        <link rel="stylesheet" href="../css/authStyle.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="regisForm">
            <form action="registerProcess.php" method="post">
                <table>
                    <tr>
                        <th colspan="2"><p class="title">Registration</p></th>
                    </tr>
                    <tr>
                        <td><label>Question 1:</label></td>
                        <td>
                            <select>
                                <?php
                                    while($row = $result->fetch_assoc()){
                                ?>
                                <option value="<?php echo $row['sentence']; ?>">
                                    <!-- display question as dropdown item-->
                                    <?php echo $row['sentence']; ?>
                                </option>

                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Answer 1:</label></td>
                        <td>
                            <input type="text" name="ans1" placeholder="Enter your answer" required/>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Question 2:</label></td>
                        <td>
                            <input type="text" name="ques2" placeholder="Enter last name" required/>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Answer 2:</label></td>
                        <td>
                            <input type="text" name="ans2" placeholder="Enter your answer" required/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <center>
                                <button type="submit" name="submit">Register</button>
                                <button type="reset" name="reset">Clear</button>
                            </center>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>