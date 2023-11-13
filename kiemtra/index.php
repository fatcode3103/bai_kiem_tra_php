<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Bài 1: Viết một chương trình PHP để kiểm tra xem một số nguyên dương nào đó có phải là số nguyên tố hay không. Yêu cầu:
        // Tạo một hàm isPrime nhận một số nguyên dương và trả về true nếu nó là số nguyên tố, ngược lại trả về false.
        // Sử dụng hàm để hiển thị danh sách các số nguyên tố từ 1 đến 100.

        function isPrime ($number) {
            if($number < 2) {
                return false;
            }

            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i === 0) {
                    return false; 
                }
            }
            return true;
        }

        function handlePrintPrimeNunber (){
            for ($i = 1; $i < 101; $i++) {
                if(isPrime($i)) {
                    echo "$i la so nguyen to" . "<br/>";
                }
            }
        }

        handlePrintPrimeNunber();
        echo "--------------------------------------<br>";

        // Bài 2: Viết một ứng dụng PHP để quản lý thông tin về sản phẩm trong một cửa hàng sử dụng mảng kết hợp. Yêu cầu:
        // Tạo một mảng kết hợp chứa thông tin về sản phẩm với các khóa như name, price, và quantity.
        // Hiển thị thông tin của tất cả sản phẩm trong mảng.
        // Viết hàm để tính tổng giá trị của tất cả sản phẩm (price * quantity).

        $productInfo = [
            ["name" => "Áo dài tay", "price" => 20, "quantity" => 100],
            ["name" => "Áo ngắn tay", "price" => 15, "quantity" => 50],
            ["name" => "Giày thể thao", "price" => 50, "quantity" => 10],
        ];

        function handlePrintProductInfo ($products) {
            for ($i = 0; $i < count($products); $i++) {
                $indx = $i+1;
                echo "Sản phẩm $indx: " . "<br/>";
                echo "Tên sản phẩm: " . $products[$i]["name"] . "<br>";
                echo "Giá: $" .  $products[$i]["price"] . "<br>";
                echo "Số lượng: " .  $products[$i]["quantity"] . "<br>";
            }
        }

        function handleCalculateTotalValue($products) {
            $res = 0;
            foreach ($products as $product) {
                $res += $product["price"] * $product["quantity"];
            }
            return $res;
        }

        handlePrintProductInfo($productInfo);

        echo "Tổng giá trị tất cả sản phẩm là: " . handleCalculateTotalValue($productInfo);

    ?>
</body>
</html>



