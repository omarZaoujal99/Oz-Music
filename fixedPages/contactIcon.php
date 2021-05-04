<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contactIcon.css">
    <!-- font-awesome css cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <button id="btnChat" class="btnchat"><i class="fas fa-comment-medical"></i></button>
    <div id="emptyDivChat" class="emptydivchat">
        <div class="createChat">
            <form action="#" method="POST" class="frmchat">
                <h2 class="h3formcontact">Send us a message</h2>
                <input type="text" placeholder="Fullname" required id="fullname" name="fullname" class="inpchat d-block mt-4">
                <input type="text" placeholder="Subject" required id="subject" name="subject" class="inpchat d-block mt-2">
                <input type="email" placeholder="Email" required id="email" name="email" class="inpchat d-block mt-2">
                <textarea name="msg" id="msg" rows="4" class="textareachat d-block mt-2" placeholder="Enter your message"></textarea>
                <input type="submit" value="Send" class="sendbtn mt-3 d-inline-block" name="Sendbtn" id="sendbtn">
                <input type="button" value="Cnacel" class="Cancelbtn d-inline-block" name="Cnacelbtn" id="cancelbtn">
            </form>
        </div>
    </div>

    <!-- own scripts -->
    <script src="../js/contactIcon.js"></script>
    <!-- font-awesome js CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js"></script>
</body>
</html>