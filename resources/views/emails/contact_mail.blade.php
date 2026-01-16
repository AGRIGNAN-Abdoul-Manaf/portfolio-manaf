<!DOCTYPE html>
<html>
<head>
    <title>Nouveau Message Portfolio</title>
    <style>
        body { font-family: 'Arial', sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px; }
        .header { background: #01289b; color: #fff; padding: 10px; text-align: center; border-radius: 10px 10px 0 0; }
        .content { padding: 20px; }
        .footer { font-size: 0.8em; color: #777; text-align: center; margin-top: 20px; }
        .info { margin-bottom: 10px; }
        .info strong { color: #01289b; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Nouveau message de contact</h2>
        </div>
        <div class="content">
            <div class="info">
                <strong>Nom :</strong> {{ $name }}
            </div>
            <div class="info">
                <strong>Email :</strong> {{ $email }}
            </div>
            <hr>
            <div class="info">
                <strong>Message :</strong><br>
                {{ $message_body }}
            </div>
        </div>
        <div class="footer">
            Cet email a été envoyé depuis le formulaire de contact de votre portfolio.
        </div>
    </div>
</body>
</html>
