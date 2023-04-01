 <!DOCTYPE html>
 <html lang="en" data-theme="emerald">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Tugas 2</title>
     <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" type="text/css" />
     <script src="https://cdn.tailwindcss.com"></script>
     <script>
         tailwind.config = {
             theme: {
                 extend: {
                     colors: {
                         clifford: '#da373d',
                     }
                 }
             }
         }
     </script>
 </head>

 <body>
     <div class="w-full mt-32 px-48">
         <div class="grid grid-cols-2 gap-3">
             <div class="border-2 border-solid border-blue-400 p-2 rounded-lg">
                 <form action="" method="POST">
                     <div class="text-center font-bold text-lg">
                         Chand Electronik & Aksesoris
                     </div>
                     <hr>
                     <div id="grid-table" class="py-4 px-20">
                         <div class="grid grid-cols-2">
                             <div>
                                 <div class="font-bold text-md">Nama Barang</div>
                                 <div class="text-md">
                                     <input type="checkbox" name="cblaptop" id="cblaptop" value="Laptop-Mouse-5000000">
                                     <label for="cblaptop">Laptop</label>
                                 </div>
                                 <div class="text-md">
                                     <input type="checkbox" name="cbhp" id="cbhp" value="Handphone-Handfree-1200000">
                                     <label for="cbhp">Handphone</label>
                                 </div>
                                 <div class="text-md">
                                     <input type="checkbox" name="cbtv" id="cbtv" value="LCD TV-Antenna-2500000">
                                     <label for="cbtv">LCD TV</label>
                                 </div>
                                 <div class="text-md">
                                     <input type="checkbox" name="cbkomputer" id="cbkomputer" value="Komputer-Printer-3000000">
                                     <label for="cbkomputer">Komputer</label>
                                 </div>
                             </div>
                             <div>
                                 <div class="font-bold text-md">Bonus</div>
                                 <div class="text-md">Mouse</div>
                                 <div class="text-md">Handsfree</div>
                                 <div class="text-md">Antenna</div>
                                 <div class="text-md">Printer</div>
                             </div>
                         </div>
                     </div>
                     <hr>
                     <div class="py-2">
                         <div class="flex justify-end gap-2">
                             <button class="btn btn-outline btn-primary" type="submit">Proses</button>
                             <button class="btn btn-outline btn-danger">Reset</button>
                         </div>
                     </div>
                 </form>
             </div>
             <div>
                 <div class="border-2 border-solid border-blue-400 p-2 rounded-lg">
                     <div class="overflow-x-auto">
                         <table class="table w-full">
                             <!-- head -->
                             <thead>
                                 <tr>
                                     <th>Nama Barang</th>
                                     <th>Bonus</th>
                                     <th>Harga</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    if (isset($_POST)) {
                                        $total = 0;
                                        foreach ($_POST as $data) {
                                            $data_barang = explode("-", $data);
                                            echo "<tr>";
                                            foreach ($data_barang as $index => $barang) {
                                                echo "<td>";
                                                if ($index == count($data_barang) - 1) {
                                                    $total += (int)$barang;
                                                    echo number_format($barang);
                                                } else {
                                                    echo $barang;
                                                }
                                                echo "</td>";
                                            }
                                            echo "</tr>";
                                        }
                                    }
                                    ?>
                             </tbody>
                             <tfoot>
                                 <tr>
                                     <td colspan="2" class="font-bold text-xl">
                                         Subtotal
                                     </td>
                                     <td class="font-bold text-xl">
                                         <?= number_format($total) ?>
                                     </td>
                                 </tr>
                             </tfoot>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </body>

 </html>