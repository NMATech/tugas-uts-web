<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | Nadindra</title>

    <!-- Tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font google icon -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Animate js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <div class="flex flex-col w-[100%]">

        <div class="bg-[#E72929] w-full p-5 text-center shadow-xl">
            <h1
                class="font-bold text-xl text-white md:text-3xl lg:text-3xl xl:text-3xl animate__animated animate__backInLeft">
                Lamaran
                Kerja Nadindra Maulana
                Aziz</h1>
        </div>

        <div class="flex flex-col md:flex-row w-full">
            <div class="w-full order-first md:w-44 lg:w-64 md:flex-none border border-r-slate-700">
                <div class="bg-white w-full md:h-screen p-3 overflow-y-auto">
                    <ul class="flex flex-col justify-start items-center md:items-start">
                        <a href="../../index.php" class="w-full">
                            <li class="flex justify-center md:justify-start items-center rounded text-gray-900 p-2 mt-2 hover:bg-[#E72929] hover:text-white cursor-pointer text-center md:text-left"
                                id="berandaNav">
                                <span class="material-symbols-outlined text-3xl me-2">home</span>
                                <div class="">
                                    <p>Beranda</p>
                                </div>
                            </li>
                        </a>
                        <a href="#" class="w-full">
                            <li
                                class="flex justify-center md:justify-start items-center rounded p-2 mt-2 bg-[#E72929] text-white cursor-pointer text-center md:text-left">
                                <span class="material-symbols-outlined text-3xl me-2">account_box</span>
                                <div class="">
                                    <p>Portofolio</p>
                                </div>
                            </li>
                        </a>
                        <a href="prestasi.php" class="w-full">
                            <li class="flex justify-center md:justify-start items-center rounded text-gray-900 p-2 mt-2 hover:bg-[#E72929] hover:text-white cursor-pointer text-center md:text-left"
                                id="prestasiNav">
                                <span class="material-symbols-outlined text-3xl me-2">social_leaderboard</span>
                                <div class="">
                                    <p>Prestasi</p>
                                </div>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>

            <div class="bg-slate-100 flex-1">
                <h1 class="m-2 font-bold text-xl md:text-3xl animate__animated animate__backInLeft">
                    Pengalaman Organisasi
                </h1>
                <div class="flex flex-col md:flex-row lg:flex-row justify-center items-center p-2">
                    <div class="mt-2 md:mt-0 animate__animated animate__backInLeft">
                        <p class="text-justify md:text-sm lg:text-md">
                            Saya adalah seorang mahasiswa semester 4 di universitas singaperbangsa karawang. Saat ini
                            saya sedang aktif dalam organisasi Himpunan Mahasiswa Informatika Unsika (HIMTIKA). Saya
                            aktif dua tahun dalam organisasi. Pada tahun pertama saya menjadi anggota dari divisi Rnd
                            (Research and Development), dan pada tahun selanjutnya saya menjadi ketua divisi RnD.
                        </p>
                    </div>
                    <div class="ms-2 order-first md:order-2 lg:order-2 animate__animated animate__backInRight">
                        <img src="../hima.JPG" alt=""
                            class="w-[250px] md:w-[80rem] shadow-xl shadow-slate-400 rounded-3xl">
                    </div>
                </div>

                <h1 class="m-2 font-bold text-xl md:text-3xl animate__animated animate__backInLeft">
                    Teknologi yang dikuasai
                </h1>
                <div
                    class="w-full md:w-[80%] m-auto flex justify-evenly items-center p-2 animate__animated animate__bounceInLeft">
                    <div class="flex flex-col w-max justify-center items-center text-center">
                        <img src="../icon/laravel.png" alt="" class="rounded-xl bg-cover bg-center w-[50px]">
                        <h3 class="font-bold text-xl">Laravel</h3>
                    </div>
                    <div class="flex flex-col w-max justify-center items-center text-center">
                        <img src="../icon/firebase.png" alt="" class="rounded-xl bg-cover bg-center w-[50px]">
                        <h3 class="font-bold text-xl">Firebase</h3>
                    </div>
                    <div class="flex flex-col w-max justify-center items-center text-center">
                        <img src="../icon/bootstrap.png" alt="" class="rounded-xl bg-cover bg-center w-[50px]">
                        <h3 class="font-bold text-xl">Bootstrap</h3>
                    </div>
                    <div class="flex flex-col w-max justify-center items-center text-center">
                        <img src="../icon/tailwind.png" alt="" class="rounded-xl bg-cover bg-center w-[50px]">
                        <h3 class="font-bold text-xl">Tailwind</h3>
                    </div>
                </div>

                <h1 class="m-2 font-bold text-xl md:text-3xl animate__animated animate__backInLeft">
                    Project - Project yang pernah dibuat
                </h1>
                <div
                    class="p-2 grid grid-rows-2 grid-flow-col gap-2 justify-center animate__animated animate__bounceInLeft">
                    <a href="https://github.com/dzikrimaulana87/dekadio_NARIHARKRI" target="_blank">
                        <div
                            class="md:w-56 lg:w-60 rounded-xl border border-black shadow-xl shadow-slate-400 hover:border-2 hover:border-[#E72929]">
                            <div>
                                <img src="../img/dekadio.png" alt=""
                                    class="rounded-xl bg-cover bg-center md:w-[25rem] lg:w-[30rem]">
                            </div>
                            <div class="text-center p-2">
                                <h3 class="font-bold text-xl">Dekadio</h3>
                                <p>Dekadio adalah platform belajar bahasa isyarat. Project ini dibangun oleh Ci4,
                                    Framework
                                    css, serta firebase untuk kebutuhan database.</p>
                            </div>
                        </div>
                    </a>
                    <a href="https://github.com/NMATech/NoPlay_StreamingWeb" target="_blank">
                        <div
                            class="md:w-56 lg:w-60 rounded-xl border border-black shadow-xl shadow-slate-400 hover:border-2 hover:border-[#E72929]">
                            <div>
                                <img src="../img/noplay.png" alt=""
                                    class="rounded-xl bg-cover bg-center md:w-[25rem] lg:w-[30rem]">
                            </div>
                            <div class="text-center p-2">
                                <h3 class="font-bold text-xl">NoPlay</h3>
                                <p>NoPlay adalah platform menonton streaming movies / series. Projectt ini dibangun oleh
                                    HTML, CSS, dan Javascript.</p>
                            </div>
                        </div>
                    </a>
                    <a href="https://github.com/NMATech/mesinKasir" target="_blank">
                        <div
                            class="md:w-56 lg:w-60 rounded-xl border border-black shadow-xl shadow-slate-400 hover:border-2 hover:border-[#E72929]">
                            <div>
                                <img src="../img/cashflow.png" alt=""
                                    class="rounded-xl bg-cover bg-center md:w-[25rem] lg:w-[30rem]">
                            </div>
                            <div class="text-center p-2">
                                <h3 class="font-bold text-xl">CashFlow</h3>
                                <p>CashFlow adalah aplikasi untuk menghitung keuangan kasir sebuah toko. Platform ini
                                    dibangun oleh Laravel, Bootstrap, dan library pendukung lainnya.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div
                class="bg-slate-100 w-full m-2 md:w-72 lg:w-80 flex-none shadow-lg shadow-slate-700 order-[-1] md:order-none animate__animated animate__backInRight">
                <div class="mt-2 flex justify-center">
                    <img src="../2210631170139.jpg" alt="" class="w-[130px] md:w-[200px] lg:w-[250px] rounded-xl">
                </div>
                <div class="w-[80%] m-auto p-1">
                    <h1 class="font-bold text-2xl text-center">Biodata</h1>
                    <p>Nama : Nadindra Maulana Aziz</p>
                    <p>Umur : 20 Tahun</p>
                    <p>Alamat : Jl.Singaperbangsa Dsn.Kertasari Desa Mekarmaya Kec.Cilamaya Wetan Kab.Karawang</p>
                </div>
                <div>
                    <div class="text-center">
                        <h1 class="font-bold text-xl">Contact</h1>
                    </div>
                    <div class="flex flex-col justify-start items-center">
                        <div class="flex justify-start items-center">
                            <span class="material-symbols-outlined">
                                mail
                            </span>
                            <h3>maulananadindra@gmail.com</h3>
                        </div>
                        <div class="flex justify-start items-center">
                            <span class="material-symbols-outlined">
                                call
                            </span>
                            <h3>085880046909</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <footer class="bottom-0 bg-gray-800 w-full text-white text-center p-2">
        <h1>&copy; 2210631170139-Nadindra Maulana Aziz</h1>
    </footer>
</body>

</html>