<?php

if(mail('nayantandukar@gmail.com', " Learning sendmail from localhost", "Hi Nayan, we are learning sending email from localhost on 28th December 2023."))
{
    echo "Mail Send";
}
else{
    echo "Unable to send email";
}

?>