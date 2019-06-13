<!DOCTYPE html>
<html>
    <head>
        <title>Merle PHP</title>
    </head>
<body>
    <h1>Merle PHP</h1>
    <p><?php
        echo ("The SHA256 hash of \"Merle\" is ");
        print hash('sha256', 'Merle');
    ?></p>
<pre>
ASCII ART:

    **       **
    * *   * **
    * *   * **
    *  * *  **
    *  * *  **
    *  * *  **
    **   *   **
</pre>
    <a href="check.php">Click here to check the error setting</a>
    <br/>
    <a href="fail.php">Click here to cause a traceback</a>
</body>
