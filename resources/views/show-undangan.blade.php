<!DOCTYPE html>
<html class="scroll-smooth md:scroll-auto" lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Document</title>
    <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        referrerpolicy="no-referrer" rel="stylesheet" />

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.7/dist/cdn.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .modal {
            transition: opacity 0.25s ease;
        }

        body.modal-active {
            overflow-x: hidden;
            overflow-y: visible !important;
        }

        .opacity-95 {
            opacity: .95;
        }

        /* //////////////////////////////////////////////////////// */
        .bubbles {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .bubble {
            position: absolute;
            left: var(--bubble-left-offset);
            bottom: -75%;
            display: block;
            width: var(--bubble-radius);
            height: var(--bubble-radius);
            border-radius: 50%;
            animation: float-up var(--bubble-float-duration) var(--bubble-float-delay) ease-in infinite;
        }

        .bubble::before {
            position: absolute;
            content: "";
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(136, 246, 251, 0.1);
            border-radius: inherit;
            animation: var(--bubble-sway-type) var(--bubble-sway-duration) var(--bubble-sway-delay) ease-in-out alternate infinite;
        }

        .bubble:nth-child(0) {
            --bubble-left-offset: 78vw;
            --bubble-radius: 4vw;
            --bubble-float-duration: 6s;
            --bubble-sway-duration: 4s;
            --bubble-float-delay: 4s;
            --bubble-sway-delay: 3s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(1) {
            --bubble-left-offset: 54vw;
            --bubble-radius: 2vw;
            --bubble-float-duration: 10s;
            --bubble-sway-duration: 4s;
            --bubble-float-delay: 3s;
            --bubble-sway-delay: 1s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(2) {
            --bubble-left-offset: 68vw;
            --bubble-radius: 3vw;
            --bubble-float-duration: 6s;
            --bubble-sway-duration: 4s;
            --bubble-float-delay: 4s;
            --bubble-sway-delay: 4s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(3) {
            --bubble-left-offset: 68vw;
            --bubble-radius: 4vw;
            --bubble-float-duration: 12s;
            --bubble-sway-duration: 6s;
            --bubble-float-delay: 3s;
            --bubble-sway-delay: 3s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(4) {
            --bubble-left-offset: 77vw;
            --bubble-radius: 9vw;
            --bubble-float-duration: 11s;
            --bubble-sway-duration: 6s;
            --bubble-float-delay: 1s;
            --bubble-sway-delay: 2s;
            --bubble-sway-type: sway-left-to-right;
        }

        .bubble:nth-child(5) {
            --bubble-left-offset: 73vw;
            --bubble-radius: 5vw;
            --bubble-float-duration: 10s;
            --bubble-sway-duration: 5s;
            --bubble-float-delay: 4s;
            --bubble-sway-delay: 0s;
            --bubble-sway-type: sway-left-to-right;
        }

        .bubble:nth-child(6) {
            --bubble-left-offset: 75vw;
            --bubble-radius: 8vw;
            --bubble-float-duration: 8s;
            --bubble-sway-duration: 4s;
            --bubble-float-delay: 3s;
            --bubble-sway-delay: 1s;
            --bubble-sway-type: sway-left-to-right;
        }

        .bubble:nth-child(7) {
            --bubble-left-offset: 26vw;
            --bubble-radius: 2vw;
            --bubble-float-duration: 12s;
            --bubble-sway-duration: 5s;
            --bubble-float-delay: 2s;
            --bubble-sway-delay: 2s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(8) {
            --bubble-left-offset: 66vw;
            --bubble-radius: 6vw;
            --bubble-float-duration: 12s;
            --bubble-sway-duration: 5s;
            --bubble-float-delay: 0s;
            --bubble-sway-delay: 2s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(9) {
            --bubble-left-offset: 81vw;
            --bubble-radius: 6vw;
            --bubble-float-duration: 7s;
            --bubble-sway-duration: 4s;
            --bubble-float-delay: 2s;
            --bubble-sway-delay: 2s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(10) {
            --bubble-left-offset: 27vw;
            --bubble-radius: 6vw;
            --bubble-float-duration: 12s;
            --bubble-sway-duration: 5s;
            --bubble-float-delay: 1s;
            --bubble-sway-delay: 2s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(11) {
            --bubble-left-offset: 69vw;
            --bubble-radius: 3vw;
            --bubble-float-duration: 11s;
            --bubble-sway-duration: 5s;
            --bubble-float-delay: 2s;
            --bubble-sway-delay: 0s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(12) {
            --bubble-left-offset: 57vw;
            --bubble-radius: 7vw;
            --bubble-float-duration: 7s;
            --bubble-sway-duration: 6s;
            --bubble-float-delay: 4s;
            --bubble-sway-delay: 0s;
            --bubble-sway-type: sway-left-to-right;
        }

        .bubble:nth-child(13) {
            --bubble-left-offset: 14vw;
            --bubble-radius: 4vw;
            --bubble-float-duration: 9s;
            --bubble-sway-duration: 6s;
            --bubble-float-delay: 4s;
            --bubble-sway-delay: 4s;
            --bubble-sway-type: sway-left-to-right;
        }

        .bubble:nth-child(14) {
            --bubble-left-offset: 84vw;
            --bubble-radius: 4vw;
            --bubble-float-duration: 6s;
            --bubble-sway-duration: 6s;
            --bubble-float-delay: 4s;
            --bubble-sway-delay: 4s;
            --bubble-sway-type: sway-left-to-right;
        }

        .bubble:nth-child(15) {
            --bubble-left-offset: 43vw;
            --bubble-radius: 8vw;
            --bubble-float-duration: 9s;
            --bubble-sway-duration: 6s;
            --bubble-float-delay: 3s;
            --bubble-sway-delay: 0s;
            --bubble-sway-type: sway-left-to-right;
        }

        .bubble:nth-child(16) {
            --bubble-left-offset: 1vw;
            --bubble-radius: 9vw;
            --bubble-float-duration: 8s;
            --bubble-sway-duration: 5s;
            --bubble-float-delay: 0s;
            --bubble-sway-delay: 2s;
            --bubble-sway-type: sway-left-to-right;
        }

        .bubble:nth-child(17) {
            --bubble-left-offset: 32vw;
            --bubble-radius: 8vw;
            --bubble-float-duration: 8s;
            --bubble-sway-duration: 4s;
            --bubble-float-delay: 1s;
            --bubble-sway-delay: 4s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(18) {
            --bubble-left-offset: 39vw;
            --bubble-radius: 5vw;
            --bubble-float-duration: 9s;
            --bubble-sway-duration: 5s;
            --bubble-float-delay: 1s;
            --bubble-sway-delay: 4s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(19) {
            --bubble-left-offset: 22vw;
            --bubble-radius: 10vw;
            --bubble-float-duration: 11s;
            --bubble-sway-duration: 5s;
            --bubble-float-delay: 1s;
            --bubble-sway-delay: 0s;
            --bubble-sway-type: sway-left-to-right;
        }

        .bubble:nth-child(20) {
            --bubble-left-offset: 85vw;
            --bubble-radius: 5vw;
            --bubble-float-duration: 11s;
            --bubble-sway-duration: 4s;
            --bubble-float-delay: 2s;
            --bubble-sway-delay: 4s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(21) {
            --bubble-left-offset: 69vw;
            --bubble-radius: 8vw;
            --bubble-float-duration: 9s;
            --bubble-sway-duration: 6s;
            --bubble-float-delay: 0s;
            --bubble-sway-delay: 3s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(22) {
            --bubble-left-offset: 71vw;
            --bubble-radius: 10vw;
            --bubble-float-duration: 9s;
            --bubble-sway-duration: 5s;
            --bubble-float-delay: 0s;
            --bubble-sway-delay: 2s;
            --bubble-sway-type: sway-left-to-right;
        }

        .bubble:nth-child(23) {
            --bubble-left-offset: 7vw;
            --bubble-radius: 10vw;
            --bubble-float-duration: 7s;
            --bubble-sway-duration: 5s;
            --bubble-float-delay: 3s;
            --bubble-sway-delay: 1s;
            --bubble-sway-type: sway-left-to-right;
        }

        .bubble:nth-child(24) {
            --bubble-left-offset: 89vw;
            --bubble-radius: 5vw;
            --bubble-float-duration: 7s;
            --bubble-sway-duration: 6s;
            --bubble-float-delay: 3s;
            --bubble-sway-delay: 4s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(25) {
            --bubble-left-offset: 61vw;
            --bubble-radius: 1vw;
            --bubble-float-duration: 12s;
            --bubble-sway-duration: 6s;
            --bubble-float-delay: 2s;
            --bubble-sway-delay: 0s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(26) {
            --bubble-left-offset: 77vw;
            --bubble-radius: 6vw;
            --bubble-float-duration: 10s;
            --bubble-sway-duration: 6s;
            --bubble-float-delay: 1s;
            --bubble-sway-delay: 3s;
            --bubble-sway-type: sway-left-to-right;
        }

        .bubble:nth-child(27) {
            --bubble-left-offset: 97vw;
            --bubble-radius: 3vw;
            --bubble-float-duration: 10s;
            --bubble-sway-duration: 5s;
            --bubble-float-delay: 2s;
            --bubble-sway-delay: 1s;
            --bubble-sway-type: sway-left-to-right;
        }

        .bubble:nth-child(28) {
            --bubble-left-offset: 21vw;
            --bubble-radius: 4vw;
            --bubble-float-duration: 6s;
            --bubble-sway-duration: 5s;
            --bubble-float-delay: 2s;
            --bubble-sway-delay: 1s;
            --bubble-sway-type: sway-left-to-right;
        }

        .bubble:nth-child(29) {
            --bubble-left-offset: 29vw;
            --bubble-radius: 10vw;
            --bubble-float-duration: 12s;
            --bubble-sway-duration: 5s;
            --bubble-float-delay: 0s;
            --bubble-sway-delay: 0s;
            --bubble-sway-type: sway-left-to-right;
        }

        .bubble:nth-child(30) {
            --bubble-left-offset: 68vw;
            --bubble-radius: 2vw;
            --bubble-float-duration: 12s;
            --bubble-sway-duration: 5s;
            --bubble-float-delay: 3s;
            --bubble-sway-delay: 4s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(31) {
            --bubble-left-offset: 10vw;
            --bubble-radius: 9vw;
            --bubble-float-duration: 11s;
            --bubble-sway-duration: 5s;
            --bubble-float-delay: 1s;
            --bubble-sway-delay: 1s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(32) {
            --bubble-left-offset: 7vw;
            --bubble-radius: 5vw;
            --bubble-float-duration: 10s;
            --bubble-sway-duration: 5s;
            --bubble-float-delay: 3s;
            --bubble-sway-delay: 2s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(33) {
            --bubble-left-offset: 53vw;
            --bubble-radius: 4vw;
            --bubble-float-duration: 8s;
            --bubble-sway-duration: 5s;
            --bubble-float-delay: 4s;
            --bubble-sway-delay: 1s;
            --bubble-sway-type: sway-left-to-right;
        }

        .bubble:nth-child(34) {
            --bubble-left-offset: 27vw;
            --bubble-radius: 9vw;
            --bubble-float-duration: 7s;
            --bubble-sway-duration: 4s;
            --bubble-float-delay: 0s;
            --bubble-sway-delay: 1s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(35) {
            --bubble-left-offset: 62vw;
            --bubble-radius: 8vw;
            --bubble-float-duration: 7s;
            --bubble-sway-duration: 4s;
            --bubble-float-delay: 2s;
            --bubble-sway-delay: 1s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(36) {
            --bubble-left-offset: 39vw;
            --bubble-radius: 9vw;
            --bubble-float-duration: 10s;
            --bubble-sway-duration: 4s;
            --bubble-float-delay: 0s;
            --bubble-sway-delay: 4s;
            --bubble-sway-type: sway-left-to-right;
        }

        .bubble:nth-child(37) {
            --bubble-left-offset: 97vw;
            --bubble-radius: 8vw;
            --bubble-float-duration: 11s;
            --bubble-sway-duration: 5s;
            --bubble-float-delay: 2s;
            --bubble-sway-delay: 1s;
            --bubble-sway-type: sway-left-to-right;
        }

        .bubble:nth-child(38) {
            --bubble-left-offset: 53vw;
            --bubble-radius: 8vw;
            --bubble-float-duration: 7s;
            --bubble-sway-duration: 5s;
            --bubble-float-delay: 2s;
            --bubble-sway-delay: 4s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(39) {
            --bubble-left-offset: 42vw;
            --bubble-radius: 5vw;
            --bubble-float-duration: 8s;
            --bubble-sway-duration: 6s;
            --bubble-float-delay: 4s;
            --bubble-sway-delay: 0s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(40) {
            --bubble-left-offset: 0vw;
            --bubble-radius: 9vw;
            --bubble-float-duration: 11s;
            --bubble-sway-duration: 6s;
            --bubble-float-delay: 2s;
            --bubble-sway-delay: 4s;
            --bubble-sway-type: sway-left-to-right;
        }

        .bubble:nth-child(41) {
            --bubble-left-offset: 42vw;
            --bubble-radius: 10vw;
            --bubble-float-duration: 6s;
            --bubble-sway-duration: 4s;
            --bubble-float-delay: 4s;
            --bubble-sway-delay: 3s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(42) {
            --bubble-left-offset: 74vw;
            --bubble-radius: 10vw;
            --bubble-float-duration: 11s;
            --bubble-sway-duration: 4s;
            --bubble-float-delay: 2s;
            --bubble-sway-delay: 3s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(43) {
            --bubble-left-offset: 81vw;
            --bubble-radius: 3vw;
            --bubble-float-duration: 10s;
            --bubble-sway-duration: 6s;
            --bubble-float-delay: 4s;
            --bubble-sway-delay: 2s;
            --bubble-sway-type: sway-left-to-right;
        }

        .bubble:nth-child(44) {
            --bubble-left-offset: 97vw;
            --bubble-radius: 5vw;
            --bubble-float-duration: 9s;
            --bubble-sway-duration: 6s;
            --bubble-float-delay: 3s;
            --bubble-sway-delay: 4s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(45) {
            --bubble-left-offset: 87vw;
            --bubble-radius: 5vw;
            --bubble-float-duration: 10s;
            --bubble-sway-duration: 6s;
            --bubble-float-delay: 0s;
            --bubble-sway-delay: 2s;
            --bubble-sway-type: sway-left-to-right;
        }

        .bubble:nth-child(46) {
            --bubble-left-offset: 83vw;
            --bubble-radius: 7vw;
            --bubble-float-duration: 10s;
            --bubble-sway-duration: 5s;
            --bubble-float-delay: 1s;
            --bubble-sway-delay: 1s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(47) {
            --bubble-left-offset: 56vw;
            --bubble-radius: 6vw;
            --bubble-float-duration: 6s;
            --bubble-sway-duration: 5s;
            --bubble-float-delay: 2s;
            --bubble-sway-delay: 4s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(48) {
            --bubble-left-offset: 39vw;
            --bubble-radius: 5vw;
            --bubble-float-duration: 6s;
            --bubble-sway-duration: 6s;
            --bubble-float-delay: 4s;
            --bubble-sway-delay: 0s;
            --bubble-sway-type: sway-left-to-right;
        }

        .bubble:nth-child(49) {
            --bubble-left-offset: 47vw;
            --bubble-radius: 8vw;
            --bubble-float-duration: 8s;
            --bubble-sway-duration: 5s;
            --bubble-float-delay: 1s;
            --bubble-sway-delay: 1s;
            --bubble-sway-type: sway-right-to-left;
        }

        .bubble:nth-child(50) {
            --bubble-left-offset: 66vw;
            --bubble-radius: 7vw;
            --bubble-float-duration: 8s;
            --bubble-sway-duration: 6s;
            --bubble-float-delay: 0s;
            --bubble-sway-delay: 0s;
            --bubble-sway-type: sway-right-to-left;
        }

        @keyframes float-up {
            to {
                transform: translateY(-100vh);
            }
        }

        @keyframes sway-left-to-right {
            from {
                transform: translateX(-100%);
            }

            to {
                transform: translateX(100%);
            }
        }

        @keyframes sway-right-to-left {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(-100%);
            }
        }
    </style>
</head>

<body class=" bg-[#152142]" style="width: 100%; overflow-x: hidden;">
    <div
        class="modal opacity-0 pointer-events-none fixed z-50 overflow-hidden w-full h-full top-0 left-0 flex items-center justify-center">
        <div class="relative z-50 w-full h-full">
            <div class="modal-overlay absolute w-full h-full bg-white opacity-95"></div>

            <div class="modal-container fixed w-full h-full z-50 overflow-y-auto ">
                <!-- Add margin if you want to see grey behind the modal-->
                <div class="modal-content container mx-auto h-auto text-left ">
                    <img alt="" class="w-screen h-screen overflow-hidden object-cover" src="img/banner.jpg" />
                    <div class="absolute bottom-10 flex justify-center items-center w-full">
                        <div class="">
                            <button
                                class="py-2 px-2  rounded-md shadow-sm  shadow-[#fed700] bg-[#fed700] active:bg:red-100 hover:bg-[#c3a60a] cursor-pointer"
                                id="open-inv">
                                <i class="fa fa-envelope"></i> Buka Undangan
                            </button>
                        </div>
                    </div>
                    {{-- <div class="px-6 py-4 absolute left-0 top-0 z-20 w-screen h-screen ">

                        <div class="bubbles">
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                        </div>
                    </div> --}}

                </div>
            </div>
            {{-- @endmobile --}}
        </div>

    </div>
    <div class="w-full h-full" id="content">
        @include('undangan-section.home')
    </div>
    <!--Modal-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var audio = document.getElementById("song");

        function playPause() {
            if (audio.paused) {
                audio.play();
            } else {
                audio.pause();
            }
        }

        function setVolume(volume) {
            audio.volume = volume;
        }
    </script>
    <script>
        toggleModal();
        $("#open-inv").click(function() {
            playPause();
            toggleModal();
            $("#content").show();
        });

        var openmodal = document.querySelectorAll('.modal-open')
        for (var i = 0; i < openmodal.length; i++) {
            openmodal[i].addEventListener('click', function(event) {
                event.preventDefault()
                toggleModal()
            })
        }

        const overlay = document.querySelector('.modal-overlay')
        overlay.addEventListener('click', toggleModal)

        var closemodal = document.querySelectorAll('.modal-close')
        for (var i = 0; i < closemodal.length; i++) {
            closemodal[i].addEventListener('click', toggleModal)
        }

        document.onkeydown = function(evt) {
            evt = evt || window.event
            var isEscape = false
            if ("key" in evt) {
                isEscape = (evt.key === "Escape" || evt.key === "Esc")
            } else {
                isEscape = (evt.keyCode === 27)
            }
            if (isEscape && document.body.classList.contains('modal-active')) {
                toggleModal()
            }
        };

        // playPause();
        function toggleModal() {

            const body = document.querySelector('body')
            const modal = document.querySelector('.modal')
            modal.classList.toggle('opacity-0')
            modal.classList.toggle('pointer-events-none')
            body.classList.toggle('modal-active')
        }
        // ///////////////////////////////////////////////////////////////////
        (function() {
            const second = 1000,
                minute = second * 60,
                hour = minute * 60,
                day = hour * 24;

            //I'm adding this section so I don't have to keep updating this pen every year :-)
            //remove this if you don't need it
            let today = new Date(),
                dd = String(today.getDate()).padStart(2, "0"),
                mm = String(today.getMonth() + 1).padStart(2, "0"),
                yyyy = today.getFullYear(),
                nextYear = yyyy + 1,
                dayMonth = "04/14/",
                birthday = dayMonth + yyyy;

            today = mm + "/" + dd + "/" + yyyy;
            if (today > birthday) {
                birthday = dayMonth + nextYear;
            }
            //end

            const countDown = new Date(birthday).getTime(),
                x = setInterval(function() {

                    const now = new Date().getTime(),
                        distance = countDown - now;

                    document.getElementById("days").innerText = Math.floor(distance / (day)),
                        document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                        document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                        document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

                    //do something later when date is reached
                    if (distance < 0) {
                        // document.getElementById("headline").innerText = "It's my birthday!";
                        // document.getElementById("countdown").style.display = "none";
                        // document.getElementById("content").style.display = "block";
                        clearInterval(x);
                    }
                    //seconds
                }, 0)
        }());
    </script>
</body>

</html>
