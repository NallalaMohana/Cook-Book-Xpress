<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact form</title>
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>
    <main>
      <p> SEND E-MAIL</p>
      <form class="contact-form" action="contactform.php" method="post">
        <input type="text" name ="name" placeholder="FULL NAME">
        <input type="text" name ="mail" placeholder="Your E-mail ID">
        <input type="text" name ="subject" placeholder="Subject">
        <textarea name="message" placeholder="Message here"></textarea>
        <button type="submit" name="submit">SEND MAIL</button>

      </form>

    </main>

  </body>
</html>
