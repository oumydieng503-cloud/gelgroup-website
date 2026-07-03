<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouveau message contact</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #0a2342;">
    <h2 style="color: #c5a028;">Nouveau message — GEL Group</h2>

    <p><strong>Nom :</strong> {{ $contactMessage->name }}</p>
    <p><strong>Email :</strong> {{ $contactMessage->email }}</p>
    <p><strong>Téléphone :</strong> {{ $contactMessage->phone ?: 'Non renseigné' }}</p>
    <p><strong>Sujet :</strong> {{ $contactMessage->subject }}</p>

    <hr>

    <p><strong>Message :</strong></p>
    <p style="white-space: pre-wrap;">{{ $contactMessage->message }}</p>

    <hr>
    <p style="font-size: 12px; color: #666;">Envoyé depuis le formulaire de contact du site GEL Group.</p>
</body>
</html>
