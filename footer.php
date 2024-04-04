
<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                margin: 0px;
                padding: 0px;
            }
            footer {
                background-color: black;
                color: white;
                text-align: center;
                position: relative;
                width: 100%;
                bottom: 0;
                font-size: 10px;
                height: 100px;
                overflow: hidden;
            }
            .footer-text {
                /*    display: flex;*/
                /*    flex-direction: row;*/
                /*    align-items: center;*/
                /*    justify-content: space-around;*/

            }

        </style>
    </head>
    <body>
        <footer>
            <div class="container-footer">
                <div class="footer-text">
                    <div class="contact">
                        <h3>Contact</h3>
                        <p>Email: info@example.com</p>
                        <p>Phone: 123-456-7890</p>
                    </div>
                    <div class="copyright">
                        <?php
                        echo "<p>&copy; 2021-".date("Y") . " FCAI-CU. All Rights Reserved.</p>";
                        ?>
                    </div>

                </div>
            </div>
        </footer>
    </body>
</html>

