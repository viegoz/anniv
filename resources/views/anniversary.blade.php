<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            background: linear-gradient(135deg, #ff9a9e, #fad0c4, #fbc2eb);
            background-size: 200% 200%;
            animation: moveBackground 10s infinite alternate;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            font-size: 3rem;
            margin-top: 20px;
        }

        /* Efek lembaran buku */
        .book {
            position: relative;
            width: 600px;
            height: 400px;
            margin: 20px auto;
            perspective: 1000px;
        }

        .page {
            position: absolute;
            width: 100%;
            height: 100%;
            background: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            padding: 20px;
            box-sizing: border-box;
            backface-visibility: hidden;
            transform-origin: right center;
            transform: rotateY(0deg);
            font-size: 1.2rem;
            line-height: 1.8;
            overflow: hidden;
        }

        .page:not(:first-child) {
            transform: rotateY(180deg);
            position: absolute;
        }

        .page p {
            margin: 0;
            text-align: justify;
        }

        /* Foto */
        .photos {
            display: flex; /* Menyusun elemen foto secara horizontal */
    gap: 15px; /* Memberikan jarak antar gambar */
    margin-top: 20px; /* Jarak dari elemen sebelumnya */
    padding: 20px; /* Padding untuk estetika */
    overflow-x: auto; /* Aktifkan scroll horizontal hanya untuk kontainer foto */
    max-width: 100%; /* Maksimum lebar kontainer agar sesuai dengan viewport */
    white-space: nowrap; /* Mencegah gambar pindah ke baris baru */
    scroll-snap-type: x mandatory; /* Memastikan scroll berhenti di setiap gambar */
    scroll-behavior: smooth; /* Scroll yang halus */
    border: 1px solid #ccc; /* Opsional: Menambahkan border untuk menunjukkan area kontainer */
    box-sizing: border-box; /* Pastikan padding tidak menambah ukuran kontainer */
        }

        .photos img {
            width: 200px;
            height: 300px;
            object-fit: cover;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            scroll-snap-align: start;
        }

        .photos img:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.5);
        }

        /* Navigasi */
        .navigation {
            text-align: center;
            margin-top: 20px;
        }

        .navigation button {
            padding: 10px 20px;
            margin: 0 10px;
            border: none;
            background: #ff9a9e;
            color: #fff;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .navigation button:hover {
            background: #fad0c4;
        }

        /* Audio */
        audio {
            margin-top: 30px;
            position:absolute;
            bottom: 500px;
            left: 83%;
            transform: translateX(-50%);
        }

        #love-background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none; /* Tidak mengganggu interaksi pengguna */
    overflow: hidden; /* Jangan biarkan elemen keluar dari area layar */
    z-index: -1; /* Letakkan di belakang konten */
}

/* Bentuk love */
.love {
    position: absolute;
    width: 20px;
    height: 20px;
    background: red;
    transform: rotate(-45deg);
    animation: fly 5s linear infinite;
    opacity: 0.8;
}

.love::before,
.love::after {
    content: '';
    position: absolute;
    width: 20px;
    height: 20px;
    background: red;
    border-radius: 50%;
}

.love::before {
    top: -10px;
    left: 0;
}

.love::after {
    left: -10px;
    top: 0;
}

/* Animasi untuk love */
@keyframes fly {
    0% {
        transform: translateY(100vh) rotate(0deg) scale(0.5);
        opacity: 1;
    }
    100% {
        transform: translateY(-10vh) rotate(360deg) scale(1.5);
        opacity: 0;
    }
}
    </style>
</head>
<body>
    <div id="love-background"></div>

    <h1>{{ $main_title }}</h1>

    <!-- Lembaran Buku -->
    <div class="book">
        <div class="page" id="page-1">
            <p>Haiii zaza! Hari ini adalah hari 1 tahun kita setelah berpacaran. Aku sampe sekarang terkadang masih mikir, kenapa ya yang tadinya temen kayak kamu bisa jadi pacar? hahahaha. But im lucky to have you za, for sure. 1 tahun ini kita berhasil jalanin  bareng-bareng walaupun banyak masalah yang datang entah itu bentuknya apa.
                Saling terus-terusan memahami sifat kita satu sama lain, dan mengerti. Aku yakin ini ga mudah kita jalani. Tapi kita berhasil berjalan selama 1 tahun ini sungguh luar biasa za. Kita adalah pasangan yang punya kemauan untuk bertahan *aku yang lebih sih soalnya km minta pisah mulu*.
            </p>
        </div>
        <div class="page" id="page-2">
            <p>Zaza, kalau di dunia ini ada sesuatu yang bisa mengungkapkan betapa aku sayangnya sama kamu, percayalah apa yang aku rasakan itu lebih dari itu. Aku sayang bangettt sama kamu, dan cinta. Kamu berhasil membuat aku sejatuh cinta ini za. Dan mungkin aku juga berhasil ya ngebuat kamu sangat jatuh cinta ke aku? xixixi
                Zaa, selalu ingat di dalam diri kamu, aku bakal terus ada buat kamu kapanpun dan dimanapun itu ya. Aku suka kamu dari awal karena apa yang kamu punya di dalem diri kamu za, be yourself. Jangan sering2 insecure ya. 
            </p>
        </div>
        <div class="page" id="page-3">
            <p>Zaza, kita gatau kedepannya akan ada apa, akan terjadi apa. Tapi aku selalu berharap dan berusaha untuk kita akan terrus bersama apapun yang terjadi. Kedepannya bisa lebih gampang, bisa lebih susah. Kita harus jalanin bareng-bareng apapun rintangannya ya. Kita berkembang bareng dalam berbagai sisi, entah dari sifat, dari pola pikir,
                dari semangat, dari kehidupan, dari akademik, dan lain-lain kita harus saling support. Imagine, kita satu rumah bareng HAHAHAHA, kejauhan tapi aku MAUUU. Saling berusaha ya zaza, kita bisa za. Untuk penutup dari surat ini, aku mau bilang ke kamu kalo im really happy and lucky to have you yesterday, today, and forever honey. I LOVE YOU <3.
            </p>
        </div>
    </div>

    <!-- Navigasi Lembar -->
    <div class="navigation">
        <button id="prev-page">⟵ Sebelumnya</button>
        <button id="next-page">Selanjutnya ⟶</button>
    </div>

    <!-- Foto-Foto -->
    <div class="photos">
        @foreach ($photos as $photo)
            <img src="{{ asset('images/' . $photo) }}" alt="Photo">
        @endforeach
    </div>

    <!-- Video -->
<div class="video-container" style="margin-top: 30px;">
    <video width="800" controls>
        <source src="{{ asset('videos/video1.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>

    <!-- Pemutar Audio -->
    <audio controls autoplay loop>
        <source src="{{ asset('audio/lagu1.mp3') }}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <script>
        let currentPage = 1;
        const totalPages = document.querySelectorAll('.page').length;

        const updatePages = () => {
            document.querySelectorAll('.page').forEach((page, index) => {
                const pageIndex = index + 1;
                if (pageIndex === currentPage) {
                    page.style.transform = "rotateY(0deg)";
                    page.style.zIndex = 2;
                } else if (pageIndex < currentPage) {
                    page.style.transform = "rotateY(-180deg)";
                    page.style.zIndex = 1;
                } else {
                    page.style.transform = "rotateY(180deg)";
                    page.style.zIndex = 0;
                }
            });
        };

        document.getElementById('prev-page').addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                updatePages();
            }
        });

        document.getElementById('next-page').addEventListener('click', () => {
            if (currentPage < totalPages) {
                currentPage++;
                updatePages();
            }
        });

        updatePages(); // Initialize page state

        function createLove() {
        const loveContainer = document.getElementById('love-background');
        const love = document.createElement('div');
        love.classList.add('love');

        // Posisi horizontal acak
        love.style.left = Math.random() * 100 + 'vw';

        // Ukuran acak
        const size = Math.random() * 20 + 10 + 'px';
        love.style.width = size;
        love.style.height = size;

        // Warna acak
        love.style.background = `hsl(${Math.random() * 360}, 70%, 80%)`;

        // Tambahkan love ke kontainer
        loveContainer.appendChild(love);

        // Hapus elemen setelah animasi selesai
        setTimeout(() => {
            love.remove();
        }, 5000); // Waktu animasi harus sesuai dengan @keyframes 'fly'
    }

    // Interval untuk membuat love terus muncul
    setInterval(createLove, 300); // Love muncul setiap 300ms
    </script>
</body>
</html>
