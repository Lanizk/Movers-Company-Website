<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
</head>
<body>
    <h2>New Message from {{ $data['name'] }}</h2>

    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Service:</strong> {{ ucfirst($data['service']) }}</p>
    <p><strong>Subject:</strong> {{ $data['subject'] }}</p>

    <h4>Message:</h4>
    <p>{{ $data['message'] }}</p>

    <br>
    <p>— Hospital Website Contact Form</p>
</body>
</html>
