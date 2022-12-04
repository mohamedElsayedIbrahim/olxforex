<html>
    <head>
        <style>
            body
            {
                padding: 0px;
                margin: 0px;
            }
            .container
            {
                width: 80%;
                margin: auto;
                overflow: auto;
            }
            .center
            {
                text-align: center;
            }
            .py-3
            {
                margin-top: 3rem;
                margin-bottom: 3rem;
            }
            .bg
            {
                background-color: #eee
            }
            .logo
            {
                width: 200px;
            }
            .text-heading
            {
                color: rgb(2, 4, 60)
            }
            .message-body
            {
                padding: 1rem;
            }
            .message-body p, .message-body ul , .message-body span
            {
                font-size: 20px;
            }
            .message-body p
            {    
                line-height: 4rem;
            }
        </style>
    </head>
    <body>
        <div class="container bg">
            <div class="py-3">
                <div class="center">
                    <img src="https://olxforex.com/asset/img/logo2.png" alt="olxforex" class="logo">
                </div>
                <div class="center">
                    <h1 class="text-heading">olxforex Notification</h1>
                </div>
                <div class="message-body">
                    <p class="center">
                    Dear Mr <b>Masoud</b> their's a new<b>customer contact</b> is registered successfully!
                    <br/>
                    here is his detials.
                    </p>
                    <ul>
                        <li>contact Name: {{$contact->fullName}}</li>
                        <li>contact Mail: {{$contact->mail}}</li>
                        <li>contact subject: {{$contact->subject}}</li>
                        <li>Message:{{$contact->message}}</li>
                    </ul>
                    <hr/>
                    <div class="center">
                        <span>website admin</span> 
                        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

