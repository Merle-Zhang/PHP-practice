<!DOCTYPE html>
<head><title>Merle MD5 Cracker</title></head>
<body style="font-family: sans-serif">
<h1>MD5 cracker</h1>
<p>This application takes an MD5 hash
of a four digit pin and check all 10,000
possible four digit PINs to determine the PIN.</p>
<pre>
Debug Output:
<?php
$goodtext = "Not found";
if ( isset($_GET['md5']) ) {
    $time_pre = microtime(true);
    $md5 = $_GET['md5'];
    $count = 0;

    $txt = "0123456789";
    $show = 15;

    for($i=0; $i<strlen($txt); $i++ ) {
        $ch1 = $txt[$i];

        for($j=0; $j<strlen($txt); $j++ ) {
            $ch2 = $txt[$j];

            for($m=0; $m<strlen($txt); $m++) {
                $ch3 = $txt[$m];

                for($n=0; $n<strlen($txt); $n++) {
                    $ch4 = $txt[$n];
                    
                    $try = $ch1.$ch2.$ch3.$ch4;
                    $count++;
        
                    $check = hash('md5', $try);
                    if ( $check == $md5 ) {
                        $goodtext = $try;
                        break;
                    }
        
                    if ( $show > 0 ) {
                        print "$check $try\n";
                        $show = $show - 1;
                    }
                }
            }
        }
    }
    print "Total checks: ";
    print $count;
    print "\n";
    $time_post = microtime(true);
    print "Ellapsed time: ";
    print $time_post-$time_pre;
    print "\n";
}
?>
</pre>
<!-- Use the very short syntax and call htmlentities() -->
<p>PIN: <?= htmlentities($goodtext); ?></p>
<form>
<input type="text" name="md5" size="50" />
<input type="submit" value="Crack MD5"/>
</form>
<ul>
<li><a href="index.php">Reset</a></li>
<li><a href="md5.php">MD5 Encoder</a></li>
<li><a href="makecode.php">MD5 Code Maker</a></li>
<li><a
href="https://github.com/csev/wa4e/tree/master/code/crack"
target="_blank">Source code for this application</a></li>
</ul>
</body>
</html>

