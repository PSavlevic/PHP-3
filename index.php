<?php

function pilnametis ($name, $age) {
    if ($age >= 18) {
        print $name . ' pilnametis';
    } else {
        print $name . ' nepilnametis';
    }
}

pilnametis('Darius', 19);

function nupirktAlaus($age, $gender) {
    if ($age >= 20) {
        print 'pilnametis ir gali nupirkti';
        if ($gender == 'man') {
            print ' Gausi alaus!';
        } else {
            print ' gal gausi alaus...';
        }
    } else {
        print ' nepilnametis ir gali nupirkti';
    }
}

print nupirktAlaus(25, 'man');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>title</title>
</head>
<body>


</body>
</html>