<?php require('layout/header.php') ?>
<style>
    main {
        font-family: "Encode Sans SC", sans-serif;
    }

    .row img {
        max-width: 100%;
    }
</style>
<main>
    <div class="container">
        <div id="ant-layout">
            <section class="search-quan">
                <i class="fas fa-search"></i>
                <form action="thucdon.php" method="GET">
                    <input name="search" type="text" placeholder="Tìm món hoặc thức ăn">
                </form>
            </section>
            <section class="main">
                <div class="row">
                    <h3>Cafena Coffee ?</h3>
                    <p>Tại Cafena Coffee, chúng tôi không chỉ cung cấp cho bạn những loại cà phê nhập khẩu với chất lượng uy tín cùng giá thành vô cùng phải chăng mà còn có những loại bánh và trà mà đảm bảo bạn sẽ không thất vọng khi thử trải nghiệm sản phẩm cùng dịch vụ của chúng tôi.</p>
                </div>
                <div class="row">
                    <h3>Cafena hoạt động như thế nào ?</h3>
                    <p>Cafena hoạt động từ 8h đến 21h hằng ngày, bạn có thể đặt hàng online vô cùng tiện lợi và nhanh chóng </p>
                </div>
                <div class="row">
                    <img src="images/bg/cafenacf.png" alt="">
                </div>
                <div class="row">
                    <h3>Bạn có thể thanh toán bằng tiền mặt không?</h3>
                    <p>Câu trả lời của chúng tôi là Tất nhiên là được ạ!</p>
                </div>
                <div class="row">
                    <h3>Chi phí được tính như thế nào?</h3>
                    <p>Chi phí hiển thị trên ứng dụng bao gồm chi phí của món theo đơn giá của tiệm và phí vận chuyển.</p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.280539447332!2d107.29400661486774!3d16.762712588455788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x80f122cab2275a42!2zTmd1eeG7hW4gxJDEg25nIFRow6BuaA!5e0!3m2!1svi!2s!4v1629007864673!5m2!1svi!2s" width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe
            </section>
        </div>
    </div>
</main>
<?php require('layout/footer.php') ?>