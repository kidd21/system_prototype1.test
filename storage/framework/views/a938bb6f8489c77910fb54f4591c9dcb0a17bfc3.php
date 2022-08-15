<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="https://unpkg.com/flowbite@1.5.1/dist/datepicker.js"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
        <title>PSHS</title>
    </head>
<body class="mb-48">
    <nav class="mb-4 bg-gray-500 text-center
    flex flex-col items-center justify-center font-bold
 h-24 text-lg">
            CUMULATIVE RECORDS FORM
    </nav>

<main>
    <?php echo e($slot); ?>

</main>
</body>
<footer>

</footer><?php /**PATH C:\xampp\htdocs\system_prototype1\resources\views/components/layout.blade.php ENDPATH**/ ?>