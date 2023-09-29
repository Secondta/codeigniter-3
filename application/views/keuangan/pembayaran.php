<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex">
        <div>
            <?php $this->load->view('keuangan/components/sidebar')?>
        </div>

        <div class="container mt-12">
            <?php $this->load->view('keuangan/components/navbar')?>
            <div class="overflow-x-auto px-5">
                <div class="max-full rounded border overflow-hidden shadow-lg px-6 py-4">
                    <a href="<?php echo base_url('keuangan/tambah_siswa')?>"
                        class="inline-block rounded bg-sky-600 px-4 py-2 text-xs font-medium text-white hover:bg-sky-700">
                        Tambah Pembayaran
                    </a>
                    <table class="divide-y-2 divide-gray-200 bg-white text-sm w-full px-2 mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-left">
                                    No
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-left">
                                    Nama Siswa
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-left">
                                    Jenis Pembyaran
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-left">
                                    Total Pembayaran
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                    Aksi
                                </th>
                                <th class="px-4 py-2"></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <?php $no = 0; foreach($pembayaran as $row) : $no++ ?>
                            <tr>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $no ?></td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                    <?php echo tampil_siswa_byid($row->id_siswa) ?>
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                    <?php echo $row->jenis_pembayaran ?></td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                    <?php echo convRupiah($row->total_pembayaran) ?>
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 text-center">
                                    <a href="<?php echo base_url('keuangan/ubah_siswa/')?>"
                                        class="inline-block rounded bg-sky-600 px-4 py-2 text-xs font-medium text-white hover:bg-sky-700">
                                        Ubah
                                    </a>
                                    <button onclick="hapus(<?php echo '1' ?>)"
                                        class="inline-block rounded bg-red-600 px-4 py-2 text-xs font-medium text-white hover:bg-red-700">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
    function hapus(id) {
        var yes = confirm('Yakin Di Hapus?');
        if (yes == true) {
            window.location.href = "<?php echo base_url('keuangan/hapus_siswa/')?>" + id;
        }
    }
    </script>
</body>

</html>