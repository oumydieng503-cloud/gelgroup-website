<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouvelle candidature</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #0a2342;">
    <h2 style="color: #c5a028;">Nouvelle candidature — GEL Group</h2>

    <p><strong>Nom :</strong> {{ $application->name }}</p>
    <p><strong>Email :</strong> {{ $application->email }}</p>
    <p><strong>Téléphone :</strong> {{ $application->phone ?: 'Non renseigné' }}</p>
    <p><strong>Poste souhaité :</strong> {{ $application->position }}</p>
    <p><strong>Expérience :</strong> {{ $application->experience ?: 'Non renseignée' }}</p>

    <hr>

    <p><strong>Lettre de motivation :</strong></p>
    <p style="white-space: pre-wrap;">{{ $application->message }}</p>

    <hr>
    <p style="font-size: 12px; color: #666;">Le CV est joint à cet email. Candidature enregistrée le {{ $application->created_at->format('d/m/Y à H:i') }}.</p>
</body>
</html>
