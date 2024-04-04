<style>
    @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Signika+Negative:wght@300..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');

    @font-face {
        font-family: "alsscrp";
        src: url("font/alsscrp.ttf") format("truetype");
    }

    .signika-negative {
        font-family: "Signika Negative", sans-serif;
        font-weight: 500;
    }
</style>
<div class="w-screen">
    <div class="absolute size-full z-0">
        {{-- <div
            class="absolute inset-0 opacity-5 bg-[linear-gradient(to_right,#4f4f4f2e_1px,transparent_1px),linear-gradient(to_bottom,#4f4f4f2e_1px,transparent_1px)] bg-[size:14px_24px]">
        </div> --}}
        <div class="absolute w-full ">
            <img alt="" class="w-full h-full opacity-10" src="img/bg.jpg">
        </div>
    </div>
    <div class="absolute left-0 right-0" id="contens" style="top: -250px; overflow: hidden; height: 0px !important;">
        <img alt="" src="img/items-kembang.png">
        <div class="z-10 relative mt-[-20px]">
            <div class="w-full" style="overflow-x: hidden !important;">
                <div class="flex justify-center mb-5" data-aos="zoom-out-up">
                    <h2 class="text-[#f7e5a3]">The Wedding Of</h2>
                </div>
                <div class="flex justify-center  mb-10" data-aos="zoom-out-up">
                    <h1 class="text-[#e1c564] font-alsscrp text-5xl" style="font-family: alsscrp">Ego & Yosi</h1>
                </div>
                <div class="flex justify-center text-center mb-2" data-aos="zoom-out-up">
                    <h2 class="text-[#f7e5a3] pl-2 pr-2">Kami ingin Anda menjadi bagian dari hari istimewa kami</h2>
                </div>

                <div class="flex justify-evenly text-center mb-5 p-3" data-aos="zoom-out-up">
                    <div
                        class="w-[100px] border-2 border-[#bd8d4d] text-white flex flex-col justify-center items-center font-bold m-1">
                        <span id="days"></span>
                        <small>Hari</small>
                    </div>
                    <div
                        class="w-[100px] border-2 border-[#bd8d4d] text-white flex flex-col justify-center items-center font-bold m-1">
                        <span id="hours"></span>
                        <small>Jam</small>
                    </div>
                    <div
                        class="w-[100px] border-2 border-[#bd8d4d] text-white flex flex-col justify-center items-center font-bold m-1">
                        <span id="minutes"></span>
                        <small>Menit</small>
                    </div>
                    <div
                        class="w-[100px] border-2 border-[#bd8d4d] text-white flex flex-col justify-center items-center font-bold m-1">
                        <span id="seconds"></span>
                        <small>Detik</small>
                    </div>
                </div>

                <div class="flex justify-evenly text-center mb-5 p-3">
                    <img alt="" class="w-full" src="img/items2.png">
                </div>
                <div class="flex justify-evenly text-center" data-aos-anchor-placement="top-bottom" data-aos="fade-up">
                    <h2 class="text-[#e1c564] font-alsscrp text-2xl" style="font-family: alsscrp">Assalamualaikum
                        Warahmatullahi Wabarakatuh</h2>
                </div>
                <div class="flex justify-evenly text-center mb-5 p-3" data-aos-anchor-placement="top-bottom"
                    data-aos="fade-up">
                    <p class="text-white text-center text-sm">
                        Dengan memohon rahmat dan ridho Allah SWT, kami bermaksud mengundang Bapak/Ibu/Saudara/i untuk
                        menghadiri acara Resepsi pernikahan kami :</p>
                </div>
                <div class="flex flex-wrap items-center">
                    <div class="w-full md:w-5/12 sm:w-full p-4" data-aos="fade-left">
                        <div class="">
                            <img alt="" class="w-[40px] ml-20 absolute scale-x-[-1] mt-[-30px] "
                                src="img/kupu2.png">
                            <div class="flex justify-center">
                                <img alt="" height="60%" src="img/mpw.png" width="80%">
                            </div>
                        </div>
                        <div class="">
                            <div class="flex justify-evenly text-center mt-4">
                                <h2 class="text-[#e1c564] font-alsscrp text-xl" style="font-family: alsscrp">
                                    Yosi Lestari, S.Kom
                                </h2>
                            </div>
                            <div class="flex justify-evenly text-center">
                                <h2 class="text-[rgb(227,219,190)] font-alsscrp text-base">
                                    Putri Pertama dari Keluarga
                                </h2>
                            </div>
                            <div class="flex justify-evenly text-center">
                                <h2 class="text-[rgb(227,219,190)] font-alsscrp text-base">
                                    Kel. Bapak Zulkifli <br>
                                    & <br />
                                    Ibu Rosnah
                                </h2>
                            </div>

                        </div>
                    </div>

                    <div class="w-full md:w-2/12 sm:w-full" data-aos="zoom-out-up">
                        <div class="flex justify-evenly text-center mt-4">
                            <h2 class="text-[#e1c564] font-alsscrp text-5xl" style="font-family: alsscrp">
                                &
                            </h2>
                        </div>
                    </div>

                    <div class="w-full md:w-5/12 sm:w-full p-4" data-aos="fade-right">
                        <div class="">
                            <img alt="" class="w-[40px] ml-20 absolute scale-x-[-1] mt-[-30px] "
                                src="img/kupu2.png">
                            <div class="flex justify-center">
                                <img alt="" height="60%" src="img/mpp.png" width="80%">
                            </div>
                        </div>
                        <div class="">
                            <div class="flex justify-evenly text-center mt-4">
                                <h2 class="text-[#e1c564] font-alsscrp text-xl" style="font-family: alsscrp">
                                    Ego Oktafanda, S.Kom., M.Kom
                                </h2>
                            </div>
                            <div class="flex justify-evenly text-center">
                                <h2 class="text-[rgb(227,219,190)] font-alsscrp text-base">
                                    Putra Pertama dari Keluarga
                                </h2>
                            </div>
                            <div class="flex justify-evenly text-center">
                                <h2 class="text-[rgb(227,219,190)] font-alsscrp text-base">
                                    Kel. Bapak Desrijal <br>
                                    & <br />
                                    Ibu Dewet
                                </h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ================================ --}}

        <img alt="" class="w-screen" src="img/segment.png">
        <div style="width: 100%; overflow-x: hidden !important;">
            <div data-aos="zoom-out-up">
                <div class="flex justify-evenly text-center mt-4">
                    <h2 class="text-[#e1c564] text-base">
                        Rangkaian acara kami Insya Allah akan dilaksanakan pada :
                    </h2>
                </div>
                <div class="flex justify-evenly text-center mt-4 p-5">
                    <div class="w-full">
                        <div
                            class="bg-[#030b27] !text-white  w-full p-6 border-1 border-[#bd8d4d] rounded-lg shadow-[#bd8d4d] shadow-md">
                            <h2 class=" text-2xl " style="font-family: alsscrp">Acara Akad Nikah</h2>
                            <hr>
                            <div class="flex w-full justify-start items-start flex-col pt-3">
                                <div class="text-bold mb-3">
                                    <i class="fa fa-calendar mr-3"></i> <span>14 April 2024</span>
                                </div>
                                <div class="text-bold mb-3">
                                    <i class="fa fa-clock mr-3"></i> <span>09:00 WIB</span>
                                </div>
                                <div class="text-bold mb-3">
                                    <i class="fa fa-map-marker mr-3"></i> <span>Tanjuang Simandolak</span>
                                </div>
                                <div class="mt-1 flex justify-end w-full">

                                    <a class="bg-sky-500 hover:bg-bg-sky-600 text-white py-1 px-4 rounded"
                                        href="https://maps.app.goo.gl/2FtAU4awuXXuHtFv7" target="_blank">
                                        <i class="fa fa-map-marker text-white"></i> Google Maps
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-evenly text-center mt-4 p-5">
                    <div class="w-full">
                        <div
                            class="bg-[#030b27] !text-white  w-full p-6 border-1 border-[#bd8d4d] rounded-lg shadow-[#bd8d4d] shadow-md">
                            <h2 class=" text-2xl " style="font-family: alsscrp">Acars Resepsi</h2>
                            <hr>
                            <div class="flex w-full justify-start items-start flex-col pt-3">
                                <div class="text-bold mb-3">
                                    <i class="fa fa-calendar mr-3"></i> <span>20 April 2024</span>
                                </div>
                                <div class="text-bold mb-3">
                                    <i class="fa fa-clock mr-3"></i> <span>09:00 WIB Sd Selesai</span>
                                </div>
                                <div class="text-bold mb-3 text-left">
                                    <i class="fa fa-map-marker mr-3"></i>
                                    <span>
                                        Sungai Langsat, Kec. Pangean
                                    </span>
                                </div>
                                <div class="mt-1 flex justify-end w-full">
                                    <a class="bg-sky-500 hover:bg-bg-sky-600 text-white py-1 px-4 rounded"
                                        href="https://maps.app.goo.gl/x7XvM2TomYk1JGsF8" target="_blank">
                                        <i class="fa fa-map-marker text-white"></i> Google Maps
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-evenly text-center mt-4 p-5">
                    <div>
                        <p class="text-white text-sm">"Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan
                            pasangan-pasangan untukmu dari
                            jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di
                            antaramu
                            rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda
                            (kebesaran
                            Allah) bagi kaum yang berpikir."
                        </p>
                        <p class="text-white text-sm">(QS Ar-Rum:21).</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- ================================= --}}

        <img alt="" class="w-screen" src="img/segment.png">
        <div class="w-full" style="overflow-x: hidden !important;">
            <div class="mb-10" data-aos="zoom-out-up">
                <div class="flex justify-center flex-col p-10 text-center mt-4">
                    <i class="fas fa-gift text-[#e1c564]"></i>
                    <h2 class="text-[#e1c564] text-5xl mt-2" style="font-family: alsscrp">
                        Kado Digital
                    </h2>
                    <p class="text-white text-center" style="text-align: center">
                        Doa Restu Anda merupakan karunia yang sangat berarti bagi kami. Namun jika memberi adalah
                        ungkapan
                        tanda kasih Anda, kami dengan senang hati menerimanya.
                        Anda dapat memberi kado secara cashless.
                    </p>

                </div>
                <div class="flex justify-center items-center w-full" data-aos="zoom-out-up">
                    <x-card-ego></x-card-ego>
                </div>
                <div class="flex justify-center items-center w-full" data-aos="zoom-out-up">
                    <x-card-yosi></x-card-yosi>
                </div>
            </div>
        </div>

        {{-- ================================== --}}

        <img alt="" class="w-screen" src="img/segment.png">
        <div class="w-full" style="overflow-x: hidden">
            <div class="mb-10 w-screen">
                <div class="flex justify-center flex-col p-10 text-center mt-4">
                    <h2 class="text-[#e1c564] text-5xl mt-2" style="font-family: alsscrp">
                        Ucapan & Doa
                    </h2>
                    <p class="text-white text-center" style="text-align: center">
                        Tuliskan harapan dan doa terbaik Anda untuk kedua mempelai
                    </p>
                </div>
                <div class="card-group !w-screen  p-3">
                    <div class="card  !h-full flex w-full p-2">
                        <form action="" class="w-full" method="POST">
                            @csrf
                            <div class="w-full">
                                <div class="relative">
                                    <label class="leading-7 text-sm text-white" for="name">Nama</label>
                                    <input
                                        class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                        id="name" name="name" type="text">
                                </div>
                                <div class="relative">
                                    <label class="leading-7 text-sm text-white" for="name">Ucapan</label>
                                    <textarea
                                        class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
                                        id="message" name="message"></textarea>
                                </div>
                                <div class="w-full flex justify-end mt-5">
                                    <button class="bg-sky-500 text-sm hover:bg-sky-600 text-white py-2 px-2 rounded"
                                        type="submit">
                                        <i class="fa fa-paper-plane text-white"></i> Klik Disini
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full" style="overflow-x: hidden">
            <div class="mb-10 w-screen p-2 pb-10">
                <div class="">
                    <ul class="space-y-6" role="list">
                        @foreach ($comment as $item)
                            <li class="relative flex gap-x-4">
                                <div class="absolute left-0 top-0 flex w-6 justify-center -bottom-6">
                                    <div class="w-px bg-gray-200"></div>
                                </div>
                                <div class="relative flex h-6 w-6 flex-none items-center justify-center bg-white">
                                    <div class="h-1.5 w-1.5 rounded-full bg-gray-100 ring-1 ring-gray-300"></div>
                                </div>
                                <div class="w-full flex justify-between">
                                    <div>
                                        <p class="flex-auto py-0.5 text-xs leading-5 text-gray-100"><span
                                                class="font-medium !text-green-500">{{ $item->name }}</p>
                                        <p class="flex-auto py-0.5 text-xs leading-5 text-gray-100">Lorem ipsum dolor
                                            sit
                                            amet
                                            {{ $item->messages }}
                                        </p>
                                    </div>
                                    <time class="flex-none py-0.5 text-xs leading-5 text-gray-500"
                                        datetime="2023-01-23T10:32">
                                        {{ \Carbon\Carbon::parse($item->created_at)->format('d M H:s') }}
                                    </time>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                </div>
                <div class="w-full flex justify-center items-center text-white mt-10">
                    <audio id="song" loop>
                        <source src="sound/kondangan.mp3" type="audio/mp3">
                        Your browser does not support the audio element.
                    </audio>

                    {{-- <button onclick="playPause()">Play/Pause</button>
                    <button onclick="setVolume(0.5)">Set Volume to 50%</button> --}}
                    <small>hanya memunculkan 20 komentar teratas</small>
                </div>
            </div>
        </div>

        <div class="bg-[#030b27] h-[100px] w-full">
            <img alt="" class="w-screen relative top-[-50px]" src="img/segment.png">
            <div class="bg-[#030b27]  mt-[-15px] pb-[50px] flex justify-center items-center">
                <p class="text-white text-md text-center signika-negative">
                    By Ego Oktafanda, S.Kom, M.Kom
                    <br>
                    &
                    <br>
                    Yosi Lestari S.Kom
                </p>
            </div>
        </div>

    </div>
</div>

<script>
    AOS.init();
</script>
