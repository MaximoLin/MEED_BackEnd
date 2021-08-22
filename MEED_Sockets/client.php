<html>
    <body>
        <div align='center'>
            <form method='POST'>
                <table>
                    <tr>
                        <td>
                            <label>Enter Message</label>
                            <input type="text" name="txtMessage">
                            <input type="submit" name="btnSend" value="Send">
                        </td>
                    </tr>
                    <?php
                        $host= '127.0.0.1';
                        $port= 4905;

                        if (isset($_POST['btnSend']))
                        {
                            $msg= $_REQUEST['txtMessage'];
                            $sock = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
                            $result = socket_connect($sock, $host, $port) or die("Could not connect to server\n");

                          socket_write($sock, $msg, strlen($msg)) or die("Could not send data to server\n");

                            $reply = socket_read($sock, 1924);
                            $reply = trim($reply);
                            $reply = "server says:\t".$reply;
                        }
                    ?>
                    <tr>
                        <td>
                            <textarea cols="30" rows="10"><?php echo @$reply; ?></textarea>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>