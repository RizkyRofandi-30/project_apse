<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Medlicense Container</title>
    <!-- Tailwind Play CDN (untuk demo cepat). Untuk production, gunakan build-time Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Sedikit tweak untuk font dan tampilan */
        @layer utilities {
            .glass {
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.06), rgba(255, 255, 255, 0.02));
                backdrop-filter: blur(6px);
            }
        }
    </style>
</head>

<body
    class="min-h-screen bg-gradient-to-b from-slate-900 via-slate-800 to-slate-700 flex items-center justify-center p-6">
    <!-- Kontainer utama -->
    <div class="max-w-2xl w-full">
        <div class="glass rounded-2xl p-10 shadow-2xl border border-white/10">
            <div class="flex items-center gap-4">
                <!-- Logo bulat sederhana -->
                <div
                    class="flex-shrink-0 w-20 h-20 rounded-full flex items-center justify-center bg-white/8 border border-white/8">
                    <span class="text-2xl font-extrabold text-white">M</span>
                </div>
                <!-- Teks utama -->
                <div>
                    <h1 class="text-4xl sm:text-5xl font-bold tracking-tight text-white leading-tight">medlicense</h1>
                    <p class="mt-2 text-sm text-white/70">Sebuah contoh kontainer sederhana menggunakan Tailwind CSS.
                        Sesuaikan desain dan isi sesuai kebutuhan.</p>
                </div>
            </div>

            <!-- Area konten tambahan -->
            <div class="mt-8 grid gap-4 sm:grid-cols-2">
                <div class="p-4 bg-white/3 rounded-lg border border-white/6">
                    <h3 class="text-sm font-semibold text-white">Informasi</h3>
                    <p class="mt-2 text-xs text-white/70">Deskripsi singkat atau metadata bisa ditempatkan di sini.</p>
                </div>

                <div class="p-4 bg-white/3 rounded-lg border border-white/6">
                    <h3 class="text-sm font-semibold text-white">Aksi</h3>
                    <button
                        class="mt-2 inline-flex items-center justify-center px-4 py-2 rounded-md bg-white/10 hover:bg-white/20 border border-white/8 text-white text-sm">Mulai</button>
                </div>
            </div>

        </div>

        <!-- Footer kecil -->
        <p class="mt-6 text-center text-xs text-white/50">© <span id="year"></span> medlicense</p>
    </div>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</body>

</html>