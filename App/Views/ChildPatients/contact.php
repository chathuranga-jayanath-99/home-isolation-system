<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Contact - Child Patient - Home Isolation System</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<?php
    $page = 'contact';
    $subPage = '';
    include_once 'navbar.php'; 
?>
    <section style="background-color: #eee; min-height:100vh;">
    <div class="text-center">
        <iframe class="responsive-iframe" src="<?php echo URLROOT; ?>/home/contact?logged=yes" style="width: 90vw; height: 100vh;"></iframe>
    </div>
    </section>
</body>
</html>
