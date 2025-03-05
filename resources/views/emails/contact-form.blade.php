<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact Form Submission</title>
</head>
<body>
    <h1>New Contact Form Submission</h1>

    <p><strong>From:</strong> {{ $name }} ({{ $email }})</p>
    <p><strong>Subject:</strong> {{ $subject }}</p>

    <p><strong>Message:</strong><br>
    {{ $messageContent }}</p>

    <p>Thanks,<br>
    {{ config('app.name') }}</p>
</body>
</html>