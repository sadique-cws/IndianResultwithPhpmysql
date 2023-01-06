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
                <h1 class="text-3xl text-gray-900  font-semibold">All Result Records</h1>
                <a href="insert.php" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Insert Result</a>
            </div>

            <table class="min-w-full">
                <thead class="border-b">
                    <tr>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            id
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Name
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Contact
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Father Name
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            email
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Maths
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Sci
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            SST
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Hindi
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            English
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Total
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($con, "select * from results");
                    while ($row = mysqli_fetch_array($query)) :
                    ?>

                        <tr class="border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?= $row['id'];?></td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            <?= $row['name'];?>
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            <?= $row['contact'];?>
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            <?= $row['father_name'];?>
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><?= $row['email'];?></td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><?= $row['maths'];?></td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><?= $row['sci'];?></td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><?= $row['sst'];?></td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><?= $row['hindi'];?></td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><?= $row['eng'];?></td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><?= $total = $row['maths'] + $row['sst'] + $row['hindi'] + $row['sci'] + $row['eng'];?></td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            <a href="" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">View</a>
                            <a href="" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Delete</a>
                            <a href="" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Edit</a>
                            </td>
                            
                        </tr>
                    <?php endwhile; ?>

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>