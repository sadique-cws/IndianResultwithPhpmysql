<?php include "db.php";
// $pass = sha1("123456789");
// mysqli_query($con, "insert into admin (email, password) value ('sadique.hussain96@gmail.com','$pass')");
checkAuth();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php include "header.php"; ?>

    <div class="flex">
        <div class="flex w-full flex-col p-10">
            <div class="flex justify-between px-5">
                <h1 class="text-3xl text-gray-900  font-semibold">Insert Record Here</h1>
                <a href="index.php" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">View All Results</a>
            </div>

            <!-- form area -->
            <form action="" method="post">
            <div class="flex justify-center w-1/2 flex-wrap mx-auto gap-2">
                <div class="flex gap-4 w-full">
                <div class="mb-3 w-1/2">
                    <label for="exampleText0" class="form-label inline-block mb-2 text-gray-700">Name</label>
                    <input type="text" name="name" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleText0" placeholder="Text input" />
                </div>
                <div class="mb-3 w-1/2">
                    <label for="exampleText0" class="form-label inline-block mb-2 text-gray-700">Contact</label>
                    <input type="text" name="contact" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleText0" placeholder="Text input" />
                </div>
                </div>
                <div class="flex gap-4 w-full">
                <div class="mb-3 w-1/2">
                    <label for="exampleText0" class="form-label inline-block mb-2 text-gray-700">Father name</label>
                    <input type="text" name="father_name" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleText0" placeholder="Text input" />
                </div>
                <div class="mb-3 w-1/2">
                    <label for="exampleText0" class="form-label inline-block mb-2 text-gray-700">email</label>
                    <input type="text" name="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleText0" placeholder="Text input" />
                </div>
                </div>
                <div class="flex gap-3">
                <div class="mb-3 w-1/2">
                    <label for="exampleText0" class="form-label inline-block mb-2 text-gray-700">maths</label>
                    <input type="number" name="maths" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleText0" placeholder="Text input" />
                </div>
                <div class="mb-3 w-1/2">
                    <label for="exampleText0" class="form-label inline-block mb-2 text-gray-700">sci</label>
                    <input type="number" name="sci" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleText0" placeholder="Text input" />
                </div>
                <div class="mb-3 w-1/2">
                    <label for="exampleText0" class="form-label inline-block mb-2 text-gray-700">sst</label>
                    <input type="number" name="sst" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleText0" placeholder="Text input" />
                </div>
                <div class="mb-3 w-1/2">
                    <label for="exampleText0" class="form-label inline-block mb-2 text-gray-700">hindi</label>
                    <input type="number" name="hindi" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleText0" placeholder="Text input" />
                </div>
                <div class="mb-3 w-1/2">
                    <label for="exampleText0" class="form-label inline-block mb-2 text-gray-700">eng</label>
                    <input type="number" name="eng" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleText0" placeholder="Text input" />
                </div>
                </div>
                <div class="mb-3 w-1/2">
                    <input type="submit" name="eng" class="bg-green-700 text-white w-full px-x py-3" id="exampleText0" placeholder="Text input" />
                </div>
            </div>
            </form>
        </div>
    </div>
</body>

</html>