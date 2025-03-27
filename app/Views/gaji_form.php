<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Gaji Karyawan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <header class="absolute inset-x-0 top-0 z-50 p-6">
        <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="<?= base_url('/') ?>" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="">
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <a href="#" class="text-sm/6 font-semibold text-gray-900">Produk</a>
                <a href="#" class="text-sm/6 font-semibold text-gray-900">Fitur</a>
                <a href="#" class="text-sm/6 font-semibold text-gray-900">Pasar</a>
                <a href="#" class="text-sm/6 font-semibold text-gray-900">Perusahaan</a>
            </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        </nav>
    </header>

    <div class="relative isolate px-6 pt-14 lg:px-8 min-h-screen flex items-center justify-center">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"></div>
        </div>

        <div class="bg-white/70 backdrop-blur-lg border border-gray-200 rounded-2xl shadow-2xl w-full max-w-md">
            <div class="p-8">
                <div class="text-center mb-6">
                    <h2 class="text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-blue-400 mb-2">Kalkulator Gaji</h2>
                    <p class="text-gray-600 text-sm">Perhitungan Akurat & Transparan</p>
                </div>

                <?php if (session()->getFlashdata('error')) : ?>
                    <div class="bg-red-600/20 border border-red-500 text-red-500 p-4 rounded-lg mb-4 text-center">
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>

                <form action="<?= base_url('hitung-gaji') ?>" method="post" class="space-y-4">  
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Gaji Pokok</label>
                        <input 
                            type="number" 
                            name="gaji_pokok" 
                            required 
                            placeholder="Masukkan gaji pokok" 
                            class="w-full bg-white border border-gray-300 text-gray-900 px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300"
                        >
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Hari Tidak Hadir</label>
                        <input 
                            type="number" 
                            name="hari_tidak_hadir" 
                            required 
                            placeholder="Jumlah hari ketidakhadiran" 
                            class="w-full bg-white border border-gray-300 text-gray-900 px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300"
                        >
                    </div>
                    <button 
                        type="submit" 
                        class="w-full bg-gradient-to-r from-indigo-600 to-blue-500 text-white font-bold py-3 rounded-lg hover:from-indigo-700 hover:to-blue-600 transition duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-indigo-400"
                    >
                        Hitung Gaji
                    </button>
                </form>

                <?php if (isset($gaji_bersih)) : ?>
                    <div class="mt-6 bg-gray-100 rounded-lg p-5 space-y-3">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Hasil Perhitungan</h3>
                        <div class="flex justify-between text-gray-700">
                            <span>Gaji Pokok:</span>
                            <span class="font-bold">Rp<?= number_format($gaji_pokok, 0, ',', '.') ?></span>
                        </div>
                        <div class="flex justify-between text-gray-700">
                            <span>Hari Tidak Hadir:</span>
                            <span><?= $hari_tidak_hadir ?> hari</span>
                        </div>
                        <div class="border-t border-gray-300 pt-3 mt-3 flex justify-between text-gray-900 font-bold">
                            <span>Gaji Bersih:</span>
                            <span class="text-green-600">Rp<?= number_format($gaji_bersih, 0, ',', '.') ?></span>
                        </div>
                    </div>
            <?php endif; ?>
            </div>
        </div>
    </div>

    <footer class="fixed bottom-4 text-gray-500 text-xs">
        <span>© 2024 Sistem Manajemen Gaji</span>
    </footer>
</body>
</html>