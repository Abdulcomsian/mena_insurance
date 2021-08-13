<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <style>
        body {
            overflow: hidden;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            animation-delay: 1s;
        }

        .item-1 {
            width: 20px;
            height: 20px;
            background: #f583a1;
            border-radius: 50%;
            background-color: #eed968;
            margin: 7px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        @keyframes scale {
            0% {
                transform: scale(1);
            }
            50%,
            75% {
                transform: scale(2.5);
            }
            78%, 100% {
                opacity: 0;
            }
        }
        .item-1:before {
            content: '';
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #eed968;
            opacity: 0.7;
            animation: scale 2s infinite cubic-bezier(0, 0, 0.49, 1.02);
            animation-delay: 200ms;
            transition: 0.5s all ease;
            transform: scale(1);
        }

        .item-2 {
            width: 20px;
            height: 20px;
            background: #f583a1;
            border-radius: 50%;
            background-color: #eece68;
            margin: 7px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        @keyframes scale {
            0% {
                transform: scale(1);
            }
            50%,
            75% {
                transform: scale(2.5);
            }
            78%, 100% {
                opacity: 0;
            }
        }
        .item-2:before {
            content: '';
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #eece68;
            opacity: 0.7;
            animation: scale 2s infinite cubic-bezier(0, 0, 0.49, 1.02);
            animation-delay: 400ms;
            transition: 0.5s all ease;
            transform: scale(1);
        }

        .item-3 {
            width: 20px;
            height: 20px;
            background: #f583a1;
            border-radius: 50%;
            background-color: #eec368;
            margin: 7px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        @keyframes scale {
            0% {
                transform: scale(1);
            }
            50%,
            75% {
                transform: scale(2.5);
            }
            78%, 100% {
                opacity: 0;
            }
        }
        .item-3:before {
            content: '';
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #eec368;
            opacity: 0.7;
            animation: scale 2s infinite cubic-bezier(0, 0, 0.49, 1.02);
            animation-delay: 600ms;
            transition: 0.5s all ease;
            transform: scale(1);
        }

        .item-4 {
            width: 20px;
            height: 20px;
            background: #f583a1;
            border-radius: 50%;
            background-color: #eead68;
            margin: 7px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        @keyframes scale {
            0% {
                transform: scale(1);
            }
            50%,
            75% {
                transform: scale(2.5);
            }
            78%, 100% {
                opacity: 0;
            }
        }
        .item-4:before {
            content: '';
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #eead68;
            opacity: 0.7;
            animation: scale 2s infinite cubic-bezier(0, 0, 0.49, 1.02);
            animation-delay: 800ms;
            transition: 0.5s all ease;
            transform: scale(1);
        }

        .item-5 {
            width: 20px;
            height: 20px;
            background: #f583a1;
            border-radius: 50%;
            background-color: #ee8c68;
            margin: 7px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        @keyframes scale {
            0% {
                transform: scale(1);
            }
            50%,
            75% {
                transform: scale(2.5);
            }
            78%, 100% {
                opacity: 0;
            }
        }
        .item-5:before {
            content: '';
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #ee8c68;
            opacity: 0.7;
            animation: scale 2s infinite cubic-bezier(0, 0, 0.49, 1.02);
            animation-delay: 1000ms;
            transition: 0.5s all ease;
            transform: scale(1);
        }

    </style>
</head>
<body>

<div class="container">
    <div class="item-1"></div>
    <div class="item-2"></div>
    <div class="item-3"></div>
    <div class="item-4"></div>
    <div class="item-5"></div>
</div>
</body>
<script>
    $(function(){
        let url = "{{route('transaction.decline')}}";
        window.top.location = url ;
    });
</script>
</html>
<!------ Include the above in your HEAD tag ---------->
