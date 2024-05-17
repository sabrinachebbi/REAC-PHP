

<?php
session_start();
require  __DIR__."/db.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chat</title>
        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <body>
        <div class="chat-container">
            <div class="chat-header">
                <h2>Chat Room</h2>
            </div>
            <div class="chat-messages" id="chat-messages">

            <?php foreach ($messages as $message): ?>
                <div class="message">
                    <span><?php echo $message['message']; ?></span>
                <!-- Les messages apparaîtront ici -->

                <!-- Start Message -->
                <!-- Ci-dessous un exemple de structure HTML & CSS d'un message -->
                <div class="message">
                    <span>Bonjour, tu vas bien ?</span>
                    <button class="delete-button">Delete</button>
                </div>
                <!-- End Message -->

            </div>
            <div class="chat-input">
    
        <form id="message-form" method="POST" class="mb-4">
            <textarea id="message" name="message" placeholder="Type a message..." required></textarea>
            <button type="submit">Send</button>
        </form>
            </div>
        </div>
    </body>
</html>

