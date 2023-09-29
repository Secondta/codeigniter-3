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
                Dashboard
            </div>
        </div>
    </div>
</body>

</html>