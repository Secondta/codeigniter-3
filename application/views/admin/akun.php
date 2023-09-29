<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php foreach($user as $users) : ?>
    <div class="flex">
        <div>
            <?php $this->load->view('admin/components/sidebar')?>
        </div>

        <div class="container mt-12">
            <?php $this->load->view('admin/components/navbar')?>
            <div class="overflow-x-auto  grid grid-cols-1 px-5">
                <form action="<?php echo base_url('admin/aksi_ubah_akun') ?>" enctype="multipart/form-data"
                    method="post">
                    <div class="max-full rounded border overflow-hidden shadow-lg">
                        <div class="px-6 py-4">
                            <p class="text-xl font-bold text-center">Akun</p>
                            <div class="grid grid-cols-2 gap-4 mt-5">
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                                        Email
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="email" name="email" type="email" value="<?php echo $users->email ?>">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                        Username
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="username" name="username" type="text"
                                        value="<?php echo $users->username ?>">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password_baru">
                                        Password Baru
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="password_baru" name="password_baru" type="text" placeholder="Password Baru">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="konfirmasi_password">
                                        Konfirmasi Password
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="konfirmasi_password" name="konfirmasi_password" type="text"
                                        placeholder="Konfirmasi Password">
                                </div>
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-2/6">
                                    Ubah
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php endforeach ?>
</body>

</html>