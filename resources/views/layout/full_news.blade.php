<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full News</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen py-6 px-4">
    <main class="my-0 mx-auto min-h-full max-w-screen-sm">
        <a href="{{ url('/') }}" class="inline-block mb-4 py-2 px-4 text-white bg-green-700 rounded-lg shadow hover:bg-green-900">
            &larr; Kembali
        </a>

        <div class="my-0 mx-auto min-h-full max-w-screen-sm bg-white p-6 rounded-lg shadow-lg">
            

            @php
                $articles = [
                    1 => [
                        'title' => 'Solidaritas untuk Korban Bencana Alam di Lombok',
                        'content' => 'Gempa bumi berkekuatan 7,0 SR yang mengguncang Lombok telah membawa duka mendalam bagi ribuan keluarga. Bencana ini tidak hanya merusak rumah dan bangunan, tetapi juga menyebabkan kehilangan nyawa dan luka-luka yang parah. Banyak keluarga kini kehilangan tempat tinggal dan harus bertahan hidup di pengungsian dengan kondisi yang sangat terbatas.

                        Tenda-tenda darurat yang berdiri di berbagai titik pengungsian sering kali tidak cukup untuk menampung semua korban, dan banyak dari mereka harus tidur di luar ruangan tanpa perlindungan yang memadai. Selain itu, akses ke air bersih dan makanan pun menjadi masalah serius. Distribusi bantuan yang datang dari berbagai lembaga dan masyarakat umum terkadang terhambat oleh kerusakan jalan dan infrastruktur.

                        Para relawan dari berbagai daerah pun berdatangan untuk membantu proses evakuasi dan distribusi bantuan. Mereka bekerja tanpa kenal lelah di bawah kondisi yang sangat sulit, sering kali dengan peralatan yang terbatas. Banyak relawan yang juga memberikan dukungan psikososial bagi korban yang trauma akibat bencana ini. Selain itu, bantuan medis juga sangat dibutuhkan karena banyak korban yang mengalami luka-luka parah dan membutuhkan perawatan segera.

                        Pemerintah telah menetapkan status darurat dan mengerahkan berbagai sumber daya untuk mempercepat penanganan bencana. Mereka berjanji akan membangun kembali daerah-daerah yang terdampak dengan lebih baik, memastikan bangunan-bangunan yang akan dibangun nanti tahan terhadap gempa. Namun, proses ini diperkirakan akan memakan waktu yang cukup lama, mengingat skala kerusakan yang sangat besar.

                        Di tengah segala kesulitan ini, solidaritas antarwarga Indonesia terlihat sangat kuat. Masyarakat dari berbagai daerah, bahkan yang jauh dari lokasi bencana, turut menyumbangkan dana, makanan, pakaian, dan berbagai kebutuhan lainnya. Solidaritas ini memberikan harapan bagi para korban bahwa mereka tidak sendirian dalam menghadapi cobaan yang sangat berat ini. Kedepannya, dibutuhkan kerjasama yang erat antara pemerintah, masyarakat, dan lembaga-lembaga kemanusiaan untuk memastikan pemulihan yang berkelanjutan bagi Lombok dan sekitarnya.'
                    ],
                    2 => [
                        'title' => 'Krisis Kemanusiaan di Rohingya: Upaya Bantuan Internasional',
                        'content' => 'Krisis kemanusiaan yang dialami komunitas Rohingya telah mencuri perhatian dunia internasional. Ribuan orang Rohingya terpaksa meninggalkan rumah mereka di Myanmar akibat kekerasan yang sistematis dan berkepanjangan. Mereka mencari perlindungan di negara-negara tetangga seperti Bangladesh, namun perjalanan ini penuh dengan bahaya dan penderitaan.

                        Di kamp-kamp pengungsian yang ada di perbatasan Bangladesh, para pengungsi Rohingya hidup dalam kondisi yang sangat memprihatinkan. Kamp-kamp ini sering kali tidak dilengkapi dengan fasilitas yang memadai untuk menampung jumlah pengungsi yang sangat besar. Tenda-tenda yang mereka tinggali sering kali terbuat dari bahan-bahan seadanya yang tidak mampu melindungi mereka dari cuaca buruk. Kondisi ini diperparah dengan kurangnya akses ke air bersih, sanitasi yang buruk, dan kurangnya pelayanan kesehatan.

                        Anak-anak Rohingya menjadi kelompok yang paling rentan dalam krisis ini. Banyak dari mereka yang mengalami malnutrisi dan tidak mendapatkan pendidikan yang layak. Organisasi kemanusiaan internasional seperti UNHCR, WHO, dan berbagai LSM lainnya telah berupaya keras untuk menyediakan bantuan medis, makanan, dan tempat tinggal bagi para pengungsi. Namun, tantangan yang dihadapi sangat besar, mengingat skala krisis dan situasi politik yang kompleks.

                        Selain bantuan material, komunitas internasional juga terus mendorong dialog politik untuk mencari solusi jangka panjang yang adil dan damai bagi Rohingya. Banyak negara dan organisasi internasional yang mengutuk kekerasan yang dialami oleh Rohingya dan mendesak pemerintah Myanmar untuk menghentikan kekerasan serta menjamin hak-hak asasi manusia mereka.

                        Meskipun tantangannya sangat besar, semangat solidaritas internasional tetap hidup untuk membantu mereka yang membutuhkan. Di tengah krisis ini, masyarakat Rohingya terus berjuang untuk bertahan hidup dan berharap suatu hari nanti mereka dapat kembali ke rumah mereka dengan aman dan bermartabat. Dukungan dari komunitas internasional sangat penting untuk memastikan bahwa hak-hak mereka dihormati dan kehidupan mereka dapat kembali normal.'
                    ],
                    3 => [
                        'title' => 'Kelaparan di Afrika: Krisis Pangan dan Upaya Penanganan',
                        'content' => 'Afrika Sub-Sahara saat ini menghadapi salah satu krisis pangan terburuk dalam beberapa dekade terakhir. Konflik bersenjata yang berkepanjangan, perubahan iklim, dan dampak pandemi COVID-19 telah memperburuk situasi, menyebabkan jutaan orang berada di ambang kelaparan. Negara-negara seperti Ethiopia, Sudan Selatan, dan Somalia mengalami kondisi yang sangat kritis, dengan ribuan orang meninggal setiap hari akibat kelaparan dan penyakit yang terkait dengan malnutrisi.

                        Di banyak daerah, distribusi pangan menjadi tantangan utama. Akses ke wilayah-wilayah yang terdampak konflik sangat terbatas, membuat bantuan pangan sulit untuk sampai ke mereka yang paling membutuhkan. Organisasi pangan dunia, seperti World Food Programme (WFP), telah memperingatkan bahwa tanpa intervensi segera, bencana kelaparan besar dapat terjadi, yang akan mempengaruhi jutaan orang di seluruh wilayah.

                        Program bantuan pangan darurat telah diluncurkan di berbagai negara untuk mengurangi dampak krisis ini. Selain pengiriman makanan, program ini juga mencakup pembangunan fasilitas penyimpanan pangan, distribusi benih, dan penyuluhan bagi para petani lokal untuk mendukung pertanian yang berkelanjutan. Namun, upaya ini sering kali terganggu oleh ketidakstabilan politik dan konflik yang terus berlangsung.

                        Selain bantuan jangka pendek, solusi jangka panjang juga sangat diperlukan untuk mencegah terulangnya krisis seperti ini. Peningkatan ketahanan pangan melalui teknologi pertanian yang lebih baik, pengelolaan sumber daya alam yang berkelanjutan, dan kebijakan pemerintah yang mendukung kemandirian pangan menjadi kunci dalam mengatasi masalah ini. Dukungan dari komunitas internasional, baik dalam bentuk bantuan kemanusiaan maupun investasi dalam pembangunan berkelanjutan, sangat penting untuk mengubah situasi di Afrika.

                        Tantangan ke depan memang sangat besar, namun dengan kerjasama yang baik antara pemerintah, organisasi internasional, dan masyarakat lokal, ada harapan bahwa krisis pangan di Afrika dapat diatasi dan kehidupan jutaan orang dapat diselamatkan.'
                    ],
                    4 => [
                        'title' => 'Pengungsian Massal di Suriah: Perjuangan untuk Bertahan Hidup',
                        'content' => 'Konflik yang telah berlangsung lebih dari satu dekade di Suriah telah memaksa lebih dari 6 juta orang mengungsi ke negara-negara tetangga dan Eropa, menjadikannya salah satu krisis pengungsian terbesar di dunia saat ini. Pengungsi Suriah menghadapi perjalanan yang sangat berbahaya untuk mencapai tempat yang lebih aman, sering kali dengan sedikit atau tanpa sumber daya sama sekali. Banyak dari mereka yang tiba di kamp-kamp pengungsi dengan kondisi fisik dan mental yang sangat buruk.

                        Kondisi di kamp pengungsi sering kali sangat memprihatinkan. Kepadatan yang tinggi, fasilitas yang terbatas, dan kurangnya akses ke kebutuhan dasar membuat kehidupan di kamp-kamp ini sangat sulit. Di kamp Zaatari di Yordania, misalnya, ribuan keluarga harus hidup berdesakan di tenda-tenda dengan akses terbatas ke air bersih dan layanan kesehatan. Meskipun banyak organisasi internasional yang telah mengirimkan bantuan, namun jumlah pengungsi yang sangat besar membuat situasi semakin sulit diatasi.

                        Anak-anak pengungsi adalah kelompok yang paling rentan dalam situasi ini. Selain terancam oleh kondisi fisik yang buruk, mereka juga kehilangan akses ke pendidikan. Banyak anak yang harus berhenti sekolah karena terpaksa mengungsi, dan peluang mereka untuk mendapatkan pendidikan yang layak sangat terbatas. Beberapa organisasi kemanusiaan telah berupaya menyediakan layanan pendidikan darurat di kamp-kamp pengungsi, namun jumlahnya masih jauh dari cukup.

                        Selain kebutuhan dasar seperti makanan dan tempat tinggal, dukungan psikososial juga sangat dibutuhkan oleh para pengungsi. Banyak di antara mereka yang mengalami trauma akibat kekerasan yang mereka saksikan atau alami selama konflik. Organisasi seperti Palang Merah dan UNHCR bekerja tanpa henti untuk memberikan bantuan dan dukungan psikososial, namun sumber daya yang tersedia masih sangat terbatas.

                        Meskipun tantangan yang dihadapi sangat besar, semangat dan ketahanan para pengungsi Suriah tetap kuat. Mereka terus berharap akan ada perdamaian di tanah air mereka sehingga mereka bisa kembali ke rumah dan membangun kembali kehidupan mereka. Hingga saat itu tiba, dukungan dari komunitas internasional tetap sangat penting untuk membantu mereka bertahan hidup dan menjalani hari-hari yang penuh ketidakpastian ini.'
                    ],
                    5 => [
                        'title' => 'Perjuangan Masyarakat Adat Amazon Melawan Eksploitasi',
                        'content' => 'Masyarakat adat di wilayah Amazon telah lama menjadi penjaga hutan hujan terbesar di dunia ini. Namun, mereka saat ini menghadapi ancaman serius dari deforestasi, eksploitasi sumber daya alam, dan perusakan lingkungan yang dilakukan oleh perusahaan-perusahaan besar. Eksploitasi ini tidak hanya merusak hutan, tetapi juga mengancam kehidupan dan kebudayaan masyarakat adat yang telah hidup selaras dengan alam selama berabad-abad.

                        Deforestasi di Amazon terjadi dalam skala besar untuk membuka lahan bagi pertanian, penambangan, dan industri kayu. Setiap tahun, jutaan hektar hutan ditebangi, mengakibatkan hilangnya habitat bagi ribuan spesies hewan dan tumbuhan, serta mempercepat perubahan iklim global. Masyarakat adat, yang tergantung pada hutan untuk kehidupan sehari-hari mereka, kini terpaksa berjuang melawan perusahaan-perusahaan besar yang didukung oleh kebijakan pemerintah yang sering kali tidak berpihak pada mereka.

                        Perjuangan masyarakat adat Amazon telah menarik perhatian dunia internasional. Mereka melakukan berbagai upaya untuk melindungi tanah mereka, termasuk mengajukan gugatan hukum, melakukan protes damai, dan bekerja sama dengan organisasi lingkungan internasional. Namun, perjuangan ini sering kali dibayar mahal, dengan banyak pemimpin masyarakat adat yang menjadi target kekerasan dan intimidasi.

                        Selain kerusakan fisik, eksploitasi ini juga mengancam kebudayaan dan pengetahuan tradisional masyarakat adat yang sangat berharga. Banyak di antara mereka yang dipaksa meninggalkan tanah leluhur mereka dan kehilangan cara hidup tradisional yang telah diwariskan dari generasi ke generasi. Pengetahuan tentang tanaman obat, praktik pertanian berkelanjutan, dan kebijaksanaan lokal lainnya kini terancam punah.

                        Meski tantangan yang dihadapi sangat besar, masyarakat adat Amazon tetap berjuang dengan tekad yang kuat. Mereka tidak hanya memperjuangkan hak mereka untuk hidup di tanah leluhur mereka, tetapi juga untuk menjaga keseimbangan ekosistem yang penting bagi keberlanjutan bumi ini. Dukungan dari komunitas internasional sangat penting untuk memastikan bahwa hak-hak mereka dihormati dan hutan Amazon tetap menjadi paru-paru dunia yang sehat.'
                    ],
                ];

                $articleId = request()->segment(2);
                $article = $articles[$articleId] ?? null;
            @endphp

            @if($article)
                <h1 class="text-2xl font-semibold mb-4">{{ $article['title'] }}</h1>
                <p class="text-base text-gray-700 leading-relaxed text-justify mb-6">{{ $article['content'] }}</p>
            @else
                <p class="text-base text-gray-700">Article not found.</p>
            @endif
        </div>
    </main>
</body>
</html>
