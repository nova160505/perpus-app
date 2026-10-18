
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Mini</title>
    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }

        header {
            background: #1d4ed8;
            color: white;
            padding: 25px 8%;
        }

        header h1 { margin: 0 0 8px; }
        header p { margin: 0; }

        main {
            max-width: 1000px;
            margin: 35px auto;
            padding: 0 20px;
        }

        .intro, .search-box, .book-card {
            background: white;
            border-radius: 12px;
            padding: 22px;
            margin-bottom: 20px;
            box-shadow: 0 3px 12px #0000000d;
        }

        .search-box input {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e1;
            border-radius: 7px;
            font-size: 16px;
        }

        .book-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 18px;
        }

        .book-card { margin: 0; }
        .book-icon { font-size: 40px; }
        .book-card h3 { margin-bottom: 8px; }
        .category { color: #64748b; }

        footer {
            text-align: center;
            padding: 25px;
            color: #64748b;
        }
    </style>
</head>
<body>

<header>
    <h1>📚 Perpustakaan Mini</h1>
    <p>Temukan buku favoritmu dan tingkatkan pengetahuan.</p>
</header>

<main>
    <section class="intro">
        <h2>Selamat Datang!</h2>
        <p>Website sederhana untuk melihat koleksi buku perpustakaan.</p>
        <strong id="total">3 koleksi buku</strong>
    </section>

    <section class="search-box">
        <h2>Cari Buku</h2>
        <input
            type="text"
            id="search"
            placeholder="Ketik judul atau penulis buku..."
            oninput="cariBuku()"
        >
    </section>

    <section class="book-list" id="bookList">
        <article class="book-card" data-search="belajar laravel budi pemrograman">
            <div class="book-icon">📘</div>
            <h3>Belajar Laravel</h3>
            <p>Penulis: Budi Santoso</p>
            <p class="category">Kategori: Pemrograman</p>
        </article>

        <article class="book-card" data-search="dasar database siti teknologi">
            <div class="book-icon">📗</div>
            <h3>Dasar Database</h3>
            <p>Penulis: Siti Rahma</p>
            <p class="category">Kategori: Teknologi</p>
        </article>

        <article class="book-card" data-search="pengantar sistem informasi andi akademik">
            <div class="book-icon">📙</div>
            <h3>Pengantar Sistem Informasi</h3>
            <p>Penulis: Andi Saputra</p>
            <p class="category">Kategori: Akademik</p>
        </article>
    </section>
</main>

<footer>
    © 2026 Perpustakaan Mini
</footer>

<script>
    function cariBuku() {
        const kata = document.getElementById('search').value.toLowerCase();
        const buku = document.querySelectorAll('.book-card');
        let jumlah = 0;

        buku.forEach(item => {
            const cocok = item.dataset.search.includes(kata);
            item.style.display = cocok ? '' : 'none';
            if (cocok) jumlah++;
        });

        document.getElementById('total').textContent =
            jumlah + ' buku ditemukan';
    }
</script>

</body>
</html>
