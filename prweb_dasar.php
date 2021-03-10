<!Document html>
<html lang="en">
<head> 
    <meta charset ="UTF-8">
    <meta http-equiv="X-UA-Compatible" content ="IE=edge">
    <meta name="viewport" content = "width=device-width, initial-scale=1.0">
    <title> DASAR PHP</title> 
</head>
<body>
    <?php for($i = 0; $i < 5; $i++): ?>
        <?php if($i % 2 === 0): ?> 
            <h2> hello word </h2>
        <?php else : ?>
            <h1> Hello world </h2>
        <?php endif; ?> 
    <?php endfor;?> 
</body>
</html>
