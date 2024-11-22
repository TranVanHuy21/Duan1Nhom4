<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán QR - CellphoneS</title>
    <style>
        .qr-container {
            max-width: 500px;
            margin: 50px auto;
            text-align: center;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-radius: 16px;
            background: #fff;
        }

        .payment-info {
            margin: 25px 0;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 12px;
        }

        .qr-code {
            margin: 30px 0;
            padding: 20px;
            background: #fff;
            border: 2px dashed #e0e0e0;
            border-radius: 12px;
        }

        .qr-code img {
            max-width: 300px;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }

        .qr-code img:hover {
            transform: scale(1.02);
        }

        .amount {
            font-size: 28px;
            color: #d70018;
            font-weight: bold;
            margin: 20px 0;
            text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
        }

        .timer {
            font-size: 20px;
            color: #2c3e50;
            margin: 20px 0;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
            font-weight: 500;
        }

        .payment-button, .back-button {
            padding: 12px 30px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.3s ease;
            margin: 10px;
        }

        .payment-button {
            background: #28a745;
            color: white;
        }

        .payment-button:hover {
            background: #218838;
            transform: translateY(-2px);
        }

        .back-button {
            background: #d70018;
            color: white;
        }

        .back-button:hover {
            background: #bb0013;
            transform: translateY(-2px);
        }

        h2 {
            color: #2c3e50;
            font-size: 24px;
            margin-bottom: 20px;
            position: relative;
        }

        h2:after {
            content: '';
            display: block;
            width: 50px;
            height: 3px;
            background: #d70018;
            margin: 10px auto;
        }

        body {
            background: #f5f5f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="qr-container">
        <h2>Quét mã để thanh toán</h2>
        
        <div class="payment-info">
            <p>Số tiền cần thanh toán:</p>
            <div class="amount"><?= number_format($totalAmount, 0, ',', '.') ?>₫</div>
        </div>

        <div class="qr-code">
            <?php
            $paymentMethod = $_GET['method'];
            $qrImage = '';
            $bankInfo = '';

            if ($paymentMethod === 'momo') {
                // Thông tin QR MoMo
                $qrImage = "https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=momo://pay?phone=0967008222&amount=$totalAmount";
                $bankInfo = "<h3>Quét mã bằng ứng dụng MoMo<br>Chủ tài khoản: Phạm Tiến Dũng</h3>";
            } else if ($paymentMethod === 'bank') {
                $accountNumber = "1019462766";
                $bankId = "970436";
                $qrImage = "https://api.vietqr.io/image/{$bankId}-{$accountNumber}-compact.jpg?amount=$totalAmount&addInfo=Thanh%20toan%20don%20hang";
                $bankInfo = "Quét mã bằng ứng dụng Vietcombank Mobile Banking<br>Chủ tài khoản: Phạm Tiến Dũng<br>Số tài khoản: {$accountNumber}";
            }
            ?>
            <p><?= $bankInfo ?></p>
            <img src="<?= $qrImage ?>" alt="Mã QR thanh toán">
        </div>

        <div class="timer">
            Mã QR có hiệu lực trong: <span id="countdown">05:00</span>
        </div>

        <button class="payment-button" onclick="confirmPayment()" style="background: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; margin: 10px;">
            Xác nhận đã thanh toán
        </button>

        <button class="back-button" onclick="window.location.href='index.php?act=paymen'">
            Quay lại
        </button>
    </div>

    <script>
        function startTimer(duration, display) {
            var timer = duration, minutes, seconds;
            var countdown = setInterval(function () {
                minutes = parseInt(timer / 60, 10); 
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes; 
                seconds = seconds < 10 ? "0" + seconds : seconds; 

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    clearInterval(countdown);
                    alert("Hết thời gian thanh toán!");
                    window.location.href = 'index.php?act=viewCart';
                }
            }, 1000);
        }

        window.onload = function () {
            var fiveMinutes = 60 * 5,
                display = document.querySelector('#countdown');
            startTimer(fiveMinutes, display);
        };

        function confirmPayment() {
            Swal.fire({
                title: 'Xác nhận thanh toán',
                text: 'Bạn đã hoàn tất thanh toán?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Đã thanh toán',
                cancelButtonText: 'Chưa thanh toán'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Thanh toán thành công!',
                        text: 'Cảm ơn bạn đã mua hàng. Đơn hàng của bạn đang được xử lý.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        window.location.href = 'index.php';
                    });
                }
            });
        }
    </script>
</body>
</html>